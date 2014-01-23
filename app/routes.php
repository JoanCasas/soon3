<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('formulari');
});

Route::get('Condiciones-del-sorteo', function()
{
	return View::make('condiciones');
});


Route::get('confirma-tu-correo', function()
{
	return View::make('confirma-tu-correo');
});

Route::get('gracias-por-suscribirte', function()
{
	return View::make('gracias-por-suscribirte');
});

Route::get('suscripcion-cancelada', function()
{
	return View::make('suscripcion-cancelada');
});

Route::get('perfil-actualizado', function()
{
	return View::make('perfil-actualizado');
});