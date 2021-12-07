<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('login','Auth\LoginController@login')->name('login.user');

Route::get('/walla',function (){

   return view('welcome');
});

//Login

Route::get('login','LoginController@sign')->name('login')->middleware("guest");
Route::post('signin-post','LoginController@postLogin')->name('signin.post');
Route::post('signout-user','LoginController@signoutUser')->name('signout.index');

Route::group(['middleware' => ['auth']],function (){
    Route::get('', 'DashboardController@index')->name("dashboard.index");
    Route::get('dashboard', 'DashboardController@index')->name("dashboard.index");

    Route::resource("loan-types","LoanTypesController");
    Route::resource("loans","LoansController");
    Route::resource("credit-score-types","CreditScoreTypesController");
    Route::resource("credit-scores","CreditScoresController");
    Route::resource("interest-types","InterestTypesController");
    Route::resource("interests","InterestsController");
    Route::resource("penality-types","PenalityTypesController");
    Route::resource("penalities","PenalityController");

    Route::get('register','Auth\RegisterController@showRegisterForm')->name('register.user');
    Route::post('register-new','Auth\RegisterController@create')->name('register.user.new');
});





