<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SOController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\JudulSOController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardDivisionController;
use App\Http\Controllers\DashboardWorkplanController;

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
Route::put('/question/{id}/answer', [QuestionController::class, 'sendAnswer'])->name('question.answer');
Route::post('/question/upload', [QuestionController::class, 'upload'])->name('question.upload');


Route::get('/berita', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'show']);



Route::get('/sejarah',[HistoryController::class, 'sejarah']);

Route::get('/visi-misi', [VisionController::class, 'visi']);
Route::get('/struktur-organisasi', [SOController::class, 'views']);

Route::get('/divisi', [DivisionController::class, 'index']);
Route::get('division/{division:slug}', [DivisionController::class, 'show']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', [DashboardController::class, 'index'])->name('dashboard.home');
    Route::resource('users', UserController::class);

    Route::get('profile', function () {
        return view('dashboard.profile');
    })->name('profile');
    Route::get('/dashboard/article/check-slug', [DashboardArticleController::class, 'checkSlug']);
    Route::resource('/dashboard/article', DashboardArticleController::class);
    Route::resource('dashboard/division', DashboardDivisionController::class);
    Route::resource('dashboard/workplan', DashboardWorkplanController::class);
    Route::resource('dashboard/history', HistoryController::class);
    Route::resource('dashboard/vision', VisionController::class);
    Route::get('/table', [QuestionController::class, 'table'])->name('table');
    Route::get('/exportexcel', [QuestionController::class, 'exportexcel'])->name('exportexcel');
    Route::post('/question/delete-all', [QuestionController::class, 'deleteAll'])->name('question.delete-all');
    Route::resource('faq', FaqController::class);
    Route::resource('judulSO', JudulSOController::class);
    Route::resource('SO', SOController::class);
    Route::resource('category', CategoryController::class);
});