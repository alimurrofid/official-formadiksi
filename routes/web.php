<?php

use Database\Factories\FaqFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\QuestionController;
use App\Models\Category;

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
Route::post('/question/{id}/answer', [QuestionController::class, 'sendAnswer'])->name('question.answer');
Route::post('/question/upload', [QuestionController::class, 'upload'])->name('question.upload');


Route::get('/berita',[ArticleController::class,'index']);
Route::get('/articles/{article:slug}', [ArticleController::class,'show']);



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
Route::resource('users',UserController::class);

    Route::get('profile', function () {
        return view('dashboard.profile');
    })->name('profile');
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
