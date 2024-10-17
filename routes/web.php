<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

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
Route::get('/dashbord', [MealController::class, 'index'])->name('dashbord');
Route::get('/meals/create', [MealController::class, 'create'])->name('meals.create');
Route::post('/meals', [MealController::class, 'store'])->name('meals.store');
Route::get('/qr-code', [MealController::class, 'showQrCode'])->name('qr.code');


