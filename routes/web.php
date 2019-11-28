<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('start',['page' => 'start']);
});

Route::get('/gallery', function () {
    return view('gallery', ['page' => 'gallery']);
});

Route::get('/projects', function () {
    return view('projects', ['page' => 'teacher']);
});


Route::get('/consultation', function () {
    return view('consultation', ['page' => 'teacher']);
});

Route::get('/post1', function () {
    return view('post1', ['page' => 'teacher']);
});

Route::get('/post2', function () {
    return view('post2', ['page' => 'teacher']);
});

Route::get('/post3', function () {
    return view('post3', ['page' => 'teacher']);
});

Route::get('/parents', function () {
    return view('parents', ['page' => 'parent']);
});

Route::get('/post4', function () {
    return view('post4', ['page' => 'parent']);
});

Route::get('/post5', function () {
    return view('post5', ['page' => 'parent']);
});

Route::get('/post6', function () {
    return view('post6', ['page' => 'parent']);
});

