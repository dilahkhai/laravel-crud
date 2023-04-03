<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareController;
use App\Http\Controllers\DataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DataController::class, 'index']);
Route::get('/care', [CareController::class, 'index']);
Route::post('/care', [CareController::class, 'store']);
Route::put('/care/{id}', [CareController::class, 'update']);
Route::delete('/care/{id}', [CareController::class, 'destroy']);
// Route::get();
Route::get('/care/data/create', [CareController::class, 'create']);
Route::get('/care/{id}/edit', [CareController::class, 'edit']);
Route::get('care/{id}', [CareController::class, 'show']);