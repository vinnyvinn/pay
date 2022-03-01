<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Request;

$router->get('/', function () use ($router) {
    exit(1);
});

    //show booing details
    $router->get("api/reference/{reference}","BookingController@booking");
    $router->get("api/success","BookingController@success");
