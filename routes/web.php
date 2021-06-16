<?php

use App\Http\Controllers\OpenbareSchoonmaakController;
use App\Http\Controllers\HuurpleksController;
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
Route::get('/openbareschoonmaak', [OpenbareSchoonmaakController::class, 'index']);
Route::get('/huurpleks', [HuurpleksController::class, 'index']);
Route::post('/huurpleks', [HuurpleksController::class, 'store']);
Route::get('/huurpleks/create', [HuurpleksController::class, 'create']);
Route::get('/huurpleks/{huurplek}/edit', [HuurpleksController::class, 'edit']);
Route::put('/huurpleks/{huurplek}', [HuurpleksController::class, 'update']);
Route::delete('/huurpleks/{huurplek}', [HuurpleksController::class, 'destroy']);

