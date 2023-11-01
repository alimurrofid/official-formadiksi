<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return view('divisi',[
            'divisions' => Division::all(),
        ]);
    }

    public function show(Division $division)
    {
        return view('show.division', [
            'division' => $division,
        ]);
    }
}
