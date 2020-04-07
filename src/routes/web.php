<?php
//Route::namespace('\Anari\Cms\Http\Controllers')->group(function (){
    Route::get('/adminPanel/index','AdminPanelController@index')->middleware('category');
//});
