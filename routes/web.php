<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "main page";
});
Route::get('/hello', function () {
    return "Hello page again finally";
});

Route::get('/hallow', function () {
    return redirect('/hello');// redirecting to /hello from /hallow
})->name('helloroute');

Route::get('/hi', function () {
    return redirect()->route('helloroute');// first it checks url name helloroute then it goes to /hallow route, however this is redirected to /hello route and the contents from there is visible in the page.
});


Route::get('/greet/{name}', function ($name) {
    return 'Hello '. $name . "!";
});
//if no reoutes are defined so instead of 404 we can use some fallback.
Route::fallback(function () {
    return 'The page you are looking for does not exist!';
});