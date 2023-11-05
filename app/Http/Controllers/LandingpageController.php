<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use App\Models\Workplan;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        $workplans = Workplan::all();
        $articles = Article::latest()->take(3)->get();

        return view('landingpage', compact('faq', 'workplans', 'articles'));
    }

    public function show(Workplan $workplan)
    {
        return view('show.workplan', [
            'workplan' => $workplan,
        ]);
    }
}
