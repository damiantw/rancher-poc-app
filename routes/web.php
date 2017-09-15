<?php

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
    echo 'Config Cached: '.(bool) file_exists(app()->getCachedConfigPath()).'<br/>';
    echo 'Config Dump<br/>';
    dump(config());
    echo 'App Dump<br/>';
    dump(app());
    echo 'Request Dump<br/>';
    dump(request());

});
