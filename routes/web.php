<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

include_once 'web/pages/routes.php';
include_once 'web/petitions/routes.php';

Route::group(['middleware' => 'auth'], function(){

    include_once 'web/dashboard/routes.php';
});
