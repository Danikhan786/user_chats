<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home/{id?}', [HomeController::class, 'index'])->name('home');
Route::post('message-store/{user}', [HomeController::class, 'message_store'])->name('message.store');

Route::get('/chat', function () {
    event(new App\Events\chat());

    dd('Fireed......');
});
