<?php

Route::prefix('voice')->group(function()
{
    Route::get('/','VoiceController@indexView');
    Route::get('/list','VoiceController@pageView');
    Route::get('/list/books','VoiceController@bookListView');
    Route::get('/test','VoiceController@test');
});

