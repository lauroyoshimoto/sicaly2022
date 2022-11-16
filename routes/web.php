<?php

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
use App\Http\Controllers\TutorController;

Route::get('/', [TutorController::class, 'index']);
Route::get('/tutores', [TutorController::class, 'tutores'])->name('listar-tutores');

Route::get('/tutores/cadastro', [TutorController::class, 'cadastro']);
Route::post('/tutores/cadastro', [TutorController::class, 'novo']);

Route::get('/tutores/{tutor}', [TutorController::class, 'atualizar']);
Route::post('/tutores/{tutor}', [TutorController::class, 'update']);
Route::get('/tutores/{tutor}/remover', [TutorController::class, 'remover']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});