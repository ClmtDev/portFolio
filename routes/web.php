<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortFolioController;
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

Route::get(
    '/',
    [HomeController::class, 'home']
)->name('home');

Route::get('portfolio', [PortFolioController::class, 'list']);
Route::get('portfolio/{tag}', [PortFolioController::class, 'single'])->where('tag', '[0-9]+');

Route::get('mentions', function () {
    return view('mentions');
})->name('mentions');

Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'confirmed']);

Route::get('/{err}',function () {
    return view('error');
});