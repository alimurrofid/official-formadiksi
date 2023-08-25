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
Route::get('/table', [QuestionController::class, 'table'])->name('table');

Route::get('/exportexcel', [QuestionController::class, 'exportexcel'])->name('exportexcel');
Route::post('/question/delete-all', [QuestionController::class, 'deleteAll'])->name('question.delete-all');

Route::get('/', [FaqController::class, 'landingpage']);


Route::get('/content', function () {
    return view('content
    ');
});

Route::get('/article', function () {
    return view('article
    ');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/visi-misi', function () {
    return view('visiMisi');
});
Route::get('/so', function () {
    return view('organizationStructure
    ');
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
