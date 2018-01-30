<?php
use App\Http\Middleware\VerifiedUser;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', 'HomeController@index');


Route::get('/email', 'HomeController@sendMail')->name('send-email');
Route::get('verify/{verify}', 'HomeController@verificatedUser')->name('verificated-user');



Route::get('/page', function () {
    return view('layouts.page');
});


Route::get('/helpers', function () {
    return view('helpers');
});



Route::get('/crud', function () {
    return view('crud');
});



Route::get('/faucets', function () {
    return view('faucets');
});


/*
Route::get('/', function () {
    return view('welcome');
});


*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
