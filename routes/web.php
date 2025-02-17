<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WelcomeController;
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

Route::get("/", function() {
    return 'Hello World';
});

Route::get('/world', function() {
    return 'World';
});

Route::get('/user/{name?}', function($name = "Jane Doe") {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Post ke-' . $postId . ' Komentar ke-: ' . $commentId;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about/{nama}/{nim}', [PageController::class, 'about']);
Route::get('/articles', [PageController::class, 'articles']);
Route::get('/articles/{id}', [PageController::class,'articles']);

Route::resource('photos', PhotoController::class)
->only([
    'index', 'show'
]);

Route::resource('photos', UserProfileController::class)
->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('/greeting', [WelcomeController::class, 'greeting']);