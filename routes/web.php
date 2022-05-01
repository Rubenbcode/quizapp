<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LevelController;

use App\Http\Controllers\SubjectController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard',[CategoryController::class,'list'])->name('dashboard');

    Route::get('{category}/subjects',[SubjectController::class,'list'])->name('subjects');

    Route::get('{category}/subject/{subject}/levels',[LevelController::class,'list'])->name('levels');

    Route::get('{category}/subject/{subject}/level/{level}/quizz/{quiz}',[QuizController::class,'list'])->name('quiz');



});
