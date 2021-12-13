<?php
Route::group(['prefix' => 'petitions', 'as' => 'petitions.', 'namespace' => 'Petition'], function(){
    Route::get('/', 'PetitionController@index')->name('index');
    Route::get('/{slug}', 'PetitionController@show')->name('show');
});
