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

Route::group(['as' => 'site.'], function(){

  Route::group(['as' => 'home.'], function(){

    Route::get('/', [
      'as'    => 'index',
      'uses'  => 'HomeController@index'
    ]);

    Route::get('/ventajas', [
      'as'      => 'advantages',
      'uses'    => 'HomeController@advantages'
    ]);

    Route::get('/servicios', [
      'as'      => 'services',
      'uses'    => 'HomeController@services'
    ]);

    Route::get('/galeria', [
      'as'      => 'gallery',
      'uses'    => 'HomeController@gallery'
    ]);

    Route::get('/descargas', [
      'as'      => 'downloads',
      'uses'    => 'HomeController@downloads'
    ]);

    Route::get('/contacto', [
      'as'      => 'contact',
      'uses'    => 'HomeController@contact'
    ]);
  });

  Route::group(['prefix' => 'contact', 'as' => 'contact.'], function(){
    
    Route::get('/', [
      'as'      => 'index',
      'uses'    => 'ContactController@index'
    ]);

    Route::post('/send', [
      'as'      => 'send',
      'uses'    => 'ContactController@send'
    ]);
  });
});