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

$app->get('/', function () use ($app) {
    return $app->welcome();
    //return 'Testing Lumen';
});

$app->group(['prefix' => '/','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('core','CoreController@index');
    $app->get('core/{id}','CoreController@getCore');

});

$app->group(['prefix' => '/','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('penspost','PensPostController@index');
    $app->get('penspost/{id}','PensPostController@getPensPost');
});

$app->group(['prefix' => '/','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('penstv','PensTVController@index');
    $app->get('penstv/{id}','PensTVController@getPensTV');
});
