<?php

use App\Http\Controllers\ApplicationController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/storeApplication', [ApplicationController::class, 'store'])->name('app.store');
Route::get('/afterStore', [ApplicationController::class, 'afterStore'])->name('app.afterStore');

Route::post('/faceBookData', [ApplicationController::class, 'faceBookData'])->name('app.faceBookData');

