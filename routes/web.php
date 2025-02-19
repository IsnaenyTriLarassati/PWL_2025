<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;

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

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

//routing dengan parameter
Route::get('/user/{Isnaeny}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke- " . $commentId;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

//Optional Parameter
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '. $name;
});
