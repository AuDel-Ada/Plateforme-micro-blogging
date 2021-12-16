<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';


Route::resource('articles', ArticleController::class);
Route::resource('users', UserController::class);

// Route::resource('writeNewPost', ArticleController::create() );

Route::middleware('auth')->group(function () {
    
    Route::view('/modifProfile', 'auth.modifProfile'); //allow to go from "Profile" on navigation link, to "modify my profile" page
    Route::name('/modifProfile')->put('/modifProfile', [RegisteredUserController::class, 'update']);
    Route::name('dashboard')->get('dashboard', [UserController::class, 'index']);
    Route::name('dashboard')->get('dashboard', [ArticleController::class, 'show']);
    
});