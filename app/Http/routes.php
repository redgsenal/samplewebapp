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

Route::get('/', [
    'as' => '/', 
    'uses' => 'PagesController@getIndex'
]);

Route::get('about', [
    'as' => 'about', 
    'uses' => 'PagesController@getAbout'
]);

Route::get('contact', [
    'as' => 'contact', 
    'uses' => 'PagesController@getContact'
]);

Route::get('help', [
		'as' => 'help',
		'uses' => 'PagesController@getHelp'
]);

Route::resource('product', 'ProductController');