<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post', function () {
    return view('post', [ 
        'post' => '<h1>Hello World</h1>'
    ]);
});