<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {

    $data = [
        'title'=>"Hello World",
    ];
    return view('hello', $data);
});
