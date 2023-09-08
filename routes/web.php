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
Route::post('/question/{id}/answer', [QuestionController::class, 'sendAnswer'])->name('question.answer');
Route::post('/question/upload', [QuestionController::class, 'upload'])->name('question.upload');
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

    Route::get('/article', function () {
        return view('dashboard.article');
    })->name('dashboard.article');
    Route::get('/so', function () {
        return view('dashboard.organisationStructure');
    })->name('dashboard.so');
    Route::get('/divisi', function () {
        return view('dashboard.divisi');
    })->name('dashboard.divisi');
    Route::get('/workplan', function () {
        return view('dashboard.workplan');
    })->name('dashboard.workplan');
});


Route::get('/form', function () {
    return view('form.index');
})->name('passion-create');
