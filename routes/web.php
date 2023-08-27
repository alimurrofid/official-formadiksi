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


Route::get('/', [FaqController::class, 'landingpage']);
Route::resource('question', QuestionController::class);


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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('dashboard.home');

    Route::get('dashboard/article', function () {
        return view('dashboard.article');
    })->name('dashboard.article');
    Route::get('dashboard/so', function () {
        return view('dashboard.organisationStructure');
    })->name('dashboard.so');
    Route::get('dashboard/divisi', function () {
        return view('dashboard.divisi');
    })->name('dashboard.divisi');
    Route::get('dashboard/workplan', function () {
        return view('dashboard.workplan');
    })->name('dashboard.workplan');
    Route::get('/table', [QuestionController::class, 'table'])->name('table');
    Route::get('/exportexcel', [QuestionController::class, 'exportexcel'])->name('exportexcel');
    Route::post('/question/delete-all', [QuestionController::class, 'deleteAll'])->name('question.delete-all');
    Route::resource('faq', FaqController::class);
});



Route::get('/form', function () {
    return view('form.index');
})->name('passion-create');
