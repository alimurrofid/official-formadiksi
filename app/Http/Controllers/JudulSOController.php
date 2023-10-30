<?php

namespace App\Http\Controllers;

use App\Models\Judul_SO;
use App\Http\Requests\StoreJudul_SORequest;
use App\Http\Requests\UpdateJudul_SORequest;

class JudulSOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $judul_SO = Judul_SO::where('id', '=', 1)->get();
        return view('dashboard.organisationStructure', compact('judul_SO'));
    }

    public function views()
    {
        $judul_SO = Judul_SO::where('id', '=', 1)->get();
        return view('organizationStructure', compact('judul_SO'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJudul_SORequest $request)
    {
        //
        $data = $request->validated();
        Judul_SO::create($data);
        return redirect()->route('judulSO.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Judul_SO $judul_SO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Judul_SO $judul_SO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJudul_SORequest $request, Judul_SO $judul_SO)
    {
        //
        $data = (object) $request->validated();
        $judul_SO = Judul_SO::find(1);
        $judul_SO->judul = $data->judul;
        $judul_SO->save();
        return redirect()->route('judulSO.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Judul_SO $judul_SO)
    {
        //
        $judul_SO->delete();
        return redirect()->route('judulSO.index');
    }
}
