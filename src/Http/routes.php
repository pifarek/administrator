<?php 
Route::group(['middleware' => ['web']], function () {
 
    Route::controller('administrator', 'Pifarek\Administrator\Http\Controllers\IndexController');
 
});