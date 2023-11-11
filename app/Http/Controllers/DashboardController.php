<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.home', [
            'total_user' => count(User::all()),
            'total_question' => count(Question::all()),
            'total_article' => count(Article::all()),
        ]);
    }
}
