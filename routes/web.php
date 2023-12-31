<?php

use App\Models\isiContent;
use App\Http\Controllers\editprofil;
use App\Http\Controllers\Landingpage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\Editpassword;
use App\Http\Controllers\Eventcontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SertifController;


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

Route::get('/', [Landingpage::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//route register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');




Route::get('/koleksi', [ContentController::class, 'index']);


//halaman single post
Route::get('/koleksi/{isiContent:slug}', [ContentController::class, 'show']);




//rute filter
Route::get('/content/filter', [ContentController::class, 'filter'])->name('content.filter');


//rute download
Route::get('/download/{id}', [ContentController::class, 'download'])->middleware('auth')->name('content.download');

//edit profil
Route::get('/profil/edit', [Editprofil::class, 'edit'])->name('profile.edit');
Route::put('/profil/update', [Editprofil::class, 'update'])->name('profile.update');

//edit password
Route::get('/password/edit', [Editpassword::class, 'edit'])->name('password.edit');
Route::put('/password/update', [Editpassword::class, 'update'])->name('password.update');

//landing page
Route::get('/landingpage', [Landingpage::class, 'index'])->name('Landingpage');



//halaman event
Route::get('/event', [Eventcontroller::class, 'index'])->name('event');
Route::get('/event/sertif', [SertifController::class, 'showsertif'])->name('eventsertif');
Route::get('sertifikat/download/{id}', [SertifController::class, 'generate'])->name('sertif.download');

//halaman single event
Route::get('/event/{isiEvent:slug}', [Eventcontroller::class, 'show'])->middleware('auth')->name('isiEvent');


