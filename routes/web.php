<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentmController;
use App\Http\Controllers\ClassmsController;
use App\Http\Controllers\SessionmsController;

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

// This Route used for studentmController
Route::get('/student-info',[studentmController::class, 'index']);
Route::get('/add-student' ,[studentmController::class, 'create']);
Route::post('/add-students' ,[studentmController::class, 'store']);
Route::get('/edit-students/{id}' ,[studentmController::class, 'edit']);
Route::put('/update-students/{id}' ,[studentmController::class, 'update']);
Route::get('/delete-students/{id}' ,[studentmController::class, 'destroy']);

// This Route used for ClassmsController 
Route::get('/class-info',[ClassmsController::class, 'index']);
Route::get('/add-class',[ClassmsController::class, 'create']);
Route::post('/add-class',[ClassmsController::class, 'store']);
Route::get('/edit-class/{id}',[ClassmsController::class, 'edit']);
Route::put('/update-class/{id}',[ClassmsController::class, 'update']);
Route::get('/delete-class/{id}',[ClassmsController::class, 'destroy']);

// this route used  for SessionmsController here used name route
Route::get('/session/info',[SessionmsController::class, 'index'])->name('session.info');
Route::get('/add/session',[SessionmsController::class, 'create'])->name('add.session');
Route::post('/add/session',[SessionmsController::class, 'store'])->name('add.session');
Route::get('/edit/session/{id}',[SessionmsController::class, 'edit'])->name('edit.session');
Route::put('/update/session/{id}',[SessionmsController::class, 'update'])->name('update.session');
Route::get('/delete/session/{id}',[SessionmsController::class, 'destroy'])->name('delete.session');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
