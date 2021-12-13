<?php
Route::group(['as' => 'pages.', 'namespace' => 'Page'], function (){
    Route::get('/', 'PageController@index')->name('index');
});
