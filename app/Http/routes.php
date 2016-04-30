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

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
'users' => 'UsersController',

]);
Route::auth();

Route::get('/home', 'HomeController@index');


/*Route::get('example',function(){


    $user = 'jose';
    return view('examples.template', compact('user'));
}
    */
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'], function (){
    Route::resource('users','UsersController');


});

