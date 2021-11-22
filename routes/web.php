<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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


Route::get('/home', [SiswaController::class,'index'])->name('siswa.index');
Route::get('/siswa/create-siswa', [SiswaController::class,'create'])->name('siswa.create-siswa');
Route::post('siswa/store',[SiswaController::class,'store'])->name('siswa.store');
Route::get('/siswa/siswa/show-siswa{id}', [SiswaController::class, 'show'])->name('siswa.show-siswa');
Route::get('/siswa/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit-siswa');
Route::patch('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/destroy/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');




