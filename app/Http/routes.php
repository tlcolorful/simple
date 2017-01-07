<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

get('/', 'StaticPagesController@home');
get('/help', 'StaticPagesController@help');
get('/about', 'StaticPagesController@about');
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 3569a0be52cecb7134901c32670f5b721841fdd3
