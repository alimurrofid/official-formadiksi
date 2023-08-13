<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\QuestionController;
use Database\Factories\FaqFactory;
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
    return view('landingpage');
})->name('landingpage');

Route::resource('faq', FaqController::class);
Route::resource('question', QuestionController::class);
Route::get('/exportexcel', [QuestionController::class, 'exportexcel'])->name('exportexcel');
Route::get('/questions',[QuestionController::class,'index'])->name('question-search');
// Route::get('/faq', function () {
//     return view('dashboard.faq');
// });

Route::get('/', [FaqController::class, 'landingpage']);

Route::get('/ex', function () {
    return view('experiment');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('dashboard.home');

    Route::get('/passion', function () {
        return view('dashboard.passion');
    })->name('dashboard.passion');
});


Route::get('/form', function () {
    return view('form.index');
})->name('passion-create');
