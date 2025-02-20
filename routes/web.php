<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SingleActionControlller;
use App\Http\Controllers\PhotoController;

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

//Modifikasi Single Action Controller
Route::get('/single/{id?}', [SingleActionControlller::class, 'single']);

//PhotoController
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//VIEW
// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Isnaeny']);
// });

//VIEW DARI CONTROLLER
Route::get('/greeting', [WelcomeController::class, 'greeting']);

