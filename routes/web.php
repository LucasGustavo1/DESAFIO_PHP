<?php

use App\Http\Controllers\ListUserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', [ListUserController::class, 'index'])->name('people.index');
Route::post('/pessoas/cadastro', [ListUserController::class, 'store'])->name('people.store');
Route::get('/pessoas/{id}', [ListUserController::class, 'show'])->name('people.show');
Route::get('/pessoas/{id}/edit', [ListUserController::class, 'edit'])->name('people.edit');
Route::post('/pessoas/{id}', [ListUserController::class, 'update'])->name('people.update');
Route::delete('/pessoas/{id}', [ListUserController::class, 'destroy'])->name('people.destroy');
