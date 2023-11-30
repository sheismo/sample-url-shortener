<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

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

Route::get('/', [ShortLinkController::class,'index']);

// Route::get('/generate-short-link', 'ShortLinkController@index');
Route::post('/generate-short-link', [ShortLinkController::class,'store'])->name('generate.shorten.link.post');
Route::get('/{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');
