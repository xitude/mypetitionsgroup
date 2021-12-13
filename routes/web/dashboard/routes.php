<?php
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'namespace' => 'Dashboard'], function(){
    Route::get('/', 'DashboardController@index')->name('index');
});
