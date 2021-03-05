<?php

use Illuminate\Support\Facades\Route;



Route::get('/' , 'TestController@index');
Route::post('/file-upload' , 'TestController@up')->name('file-upload');
