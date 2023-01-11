<?php

use Illuminate\Support\Facades\Route;   

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@updateMessage')->name('contact-update');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
