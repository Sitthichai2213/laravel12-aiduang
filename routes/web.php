<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';


Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

Route::get("/theme" , function (){
	return view("theme");
});


Route::get('/active/index', function () {
    return view('active/index');
})->name('index');

Route::get('/active/about', function () {
    return view('active/about');
})->name('about');
Route::get('/active/services', function () {
    return view('active/services');
})->name('services');
Route::get('/active/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');
Route::get('/active/team', function () {
    return view('active/team');
})->name('team');
Route::get('/active/blog', function () {
    return view('active/blog');
})->name('blog');
Route::get('/active/contact', function () {
    return view('active/contact');
})->name('contact');

Route::get('/components/active-bootstrap', function () {
    return view('/components/active-bootstrap');
})->name('active');