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

$router->get('/', function () use ($router) {
    // return $router->app->version();
	return redirect()->route('customer.index');
});

/* $router->get('user/{name:[A-Za-z]+}', function ($name) {
    //
}); */

$router->get('customer', [
    'as' => 'customer.index', 'uses' => 'CustomerController@index'
]);
$router->get('customer/create', [
    'as' => 'customer.create', 'uses' => 'CustomerController@create'
]);
$router->post('customer', [
    'as' => 'customer.store', 'uses' => 'CustomerController@store'
]);
$router->get('customer/{id}/edit', [
    'as' => 'customer.edit', 'uses' => 'CustomerController@edit'
]);
$router->patch('customer/{id}', [
    'as' => 'customer.update', 'uses' => 'CustomerController@update'
]);
$router->get('customer/{id}/delete', [
    'as' => 'customer.delete', 'uses' => 'CustomerController@delete'
]);
$router->delete('customer/{id}', [
    'as' => 'customer.destroy', 'uses' => 'CustomerController@destroy'
]);
