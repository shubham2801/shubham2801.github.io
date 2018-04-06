<?php

View::addExtension('html', 'php');
Route::get('/', function () {
    
    
    return View::make('index');
});
