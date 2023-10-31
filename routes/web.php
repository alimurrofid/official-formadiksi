<?php

use Database\Factories\FaqFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardWorkplanController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\JudulSOController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\SOController;

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

Route::get('/', [LandingpageController::class, 'index']);
Route::get('workplan/{workplan:slug}', [LandingpageController::class, 'show']);

Route::resource('question', QuestionController::class);
Route::post('/question/{id}/answer', [QuestionController::class, 'sendAnswer'])->name('question.answer');
Route::post('/question/upload', [QuestionController::class, 'upload'])->name('question.upload');


Route::get('/berita', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'show']);



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

Route::get('/divisi', [DivisionController::class, 'index']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('dashboard.home');
    Route::resource('users', UserController::class);

    Route::get('profile', function () {
        return view('dashboard.profile');
    })->name('profile');
    Route::get('/dashboard/article/check-slug', [DashboardArticleController::class, 'checkSlug']);
    Route::resource('/dashboard/article', DashboardArticleController::class);
    Route::get('dashboard/so', [JudulSOController::class, 'index'])->name('dashboard.so');
    Route::get('dashboard/divisi', function () {
        return view('dashboard.divisi');
    })->name('dashboard.divisi');
    Route::resource('workplan',DashboardWorkplanController::class);
    Route::get('/table', [QuestionController::class, 'table'])->name('table');
    Route::get('/exportexcel', [QuestionController::class, 'exportexcel'])->name('exportexcel');
    Route::post('/question/delete-all', [QuestionController::class, 'deleteAll'])->name('question.delete-all');
    Route::resource('faq', FaqController::class);
    Route::resource('judulSO', JudulSOController::class);
    Route::resource('SO', SOController::class);
});


Route::get('/form', function () {
    return view('form.index');
})->name('passion-create');
