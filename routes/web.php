<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Blogcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Homecontroller;
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
Route::get('/', function (){
    return view ('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/blog', [\App\Http\Controllers\Blogcontroller::class, 'index'] )->name('blog.index' );
Route::get('/over-mij', [AboutController::class, 'aboutMe'])->name('about.me');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact.form');

require __DIR__.'/auth.php';
