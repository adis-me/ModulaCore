<?php

Route::group(['prefix' => 'modulacore', 'namespace' => 'Modules\ModulaCore\Http\Controllers'], function()
{
	Route::get('/', 'ModulaCoreController@index');
});