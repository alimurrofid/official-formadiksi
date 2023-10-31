<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Workplan;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        $workplans = Workplan::all();

        return view('landingpage', compact('faq', 'workplans'));
    }

    public function show(Workplan $workplan)
    {
        return view('show.workplan', [
            'workplan' => $workplan,
        ]);
    }
}
