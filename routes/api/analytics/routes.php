<?php
Route::group(['prefix' => 'analytics', 'as' => 'analytics.', 'namespace' => 'Analytic'], function(){
    Route::get('/impression', 'ImpressionController@store')->name('impression');
});
