<?php

namespace App\Http\Controllers;
use App\Booking;
use GuzzleHttp\Client;
use Guzzle\Http\Exception\RequestException;
use Illuminate\Support\Str;
use function view;

/**
 * @package Samerior\MobileMoney\Http\Controllers
 */
class BookingController extends Controller
{


    public function __construct()
    {

    }

    public function booking($reference)
    {
     $booking = Booking::where('booking_reference',$reference)->first();

     return view("checkout",['booking'=>$booking,'token'=>$this->generateToken()]);
    }


    public function generateToken()
    {
        $client =  new Client(['verify' => false, 'base_uri' => config("jengahq.jenga_sandbox_endpoint")]);
        try {
            $request = $client->request('POST', 'authentication/api/v3/authenticate/merchant', [
                'headers' => [
                    'Api-Key' => config("jengahq.jenga_api_key"),
                    'Content-type' => 'application/json',
                ],
                'json' => [
                    'merchantCode' => config('jengahq.jenga_username'),
                    'consumerSecret' => config('jengahq.jenga_password')
                ],

            ]);

            $response = json_decode($request->getBody()->getContents())->accessToken;
            return $response;
        } catch (RequestException $e) {
            return (string) $e->getResponse()->getBody();
        }
    }

    public function success()
    {
        return view("success");
}

}
