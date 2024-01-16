<?php

use App\Http\Controllers\WisataControllerr;
use App\Models\Wisata;
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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/wisata', [WisataControllerr::class, "index"]);

// Route::get('/wisatas/{id}', [WisataControllerr::class, "show"]);


Route::get('/wisatas', function () {
    return view('wisatas', [
        "title" => "wisatas"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});

Route::get('/maps', function () {
    return view('maps', [
        "title" => "maps"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});