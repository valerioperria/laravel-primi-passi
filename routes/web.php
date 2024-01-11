<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $page_title = "This is my first experiment on Laravel";

    $data = [
        'title' => $page_title,
        'details' => [
            'I like it!',
            'Everything seems to be going well!!',
        ]
    ];

    return view('experiment', $data);
});

Route::get('/more', function () {
    return view('more');
});
