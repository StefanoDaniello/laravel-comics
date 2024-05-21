<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// metodo per passare più array
// Route::get('/', function () {
//     $comics = config('comics_db.comics');
//     $comics2 = config('comics_db-2.comics-2');
//     $data=[
//         'comics' => $comics
//         ,'comics2' => $comics2
//     ];
//     return view('home',compact('data'));
// })->name('home');




Route::get('/', function () {
    $comics = config('comics_db.comics');
    return view('home',compact('comics'));
})->name('home');

Route::get('/about-me', function () {
    $comics = config('comics_db.comics');
    return view('pages.about',compact('comics'));
})->name('about');
