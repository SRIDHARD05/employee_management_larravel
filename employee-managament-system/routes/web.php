<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',[
        'message' => "This is a Home Page"
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get("/contact",function(){
    return view('contact');
});