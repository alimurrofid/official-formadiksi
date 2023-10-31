<?php

namespace App\Http\Controllers;

use App\Models\Workplan;
use Illuminate\Http\Request;

class DashboardWorkplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.workplan.index',[
            'workplans' => Workplan::latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.workplan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Workplan $workplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workplan $workplan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workplan $workplan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workplan $workplan)
    {
        //
    }
}
