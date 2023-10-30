<?php

namespace App\Http\Controllers;

use App\Models\SO;
use App\Http\Requests\StoreSORequest;
use App\Http\Requests\UpdateSORequest;
use App\Models\Judul_SO;
use Illuminate\Support\Facades\Storage;

class SOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $judul_SO = Judul_SO::where('id', '=', 1)->get();
        $SO = SO::all();
        return view('dashboard.organisationStructure', compact('judul_SO', 'SO'));
    }

    public function views()
    {
        $judul_SO = Judul_SO::where('id', '=', 1)->get();
        $SO = SO::all();
        return view('dashboard.organisationStructure', compact('judul_SO', 'SO'));
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
    public function store(StoreSORequest $request)
    {
        //
        $data = $request->validated();

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('public/SO');
        }

        SO::create($data);
        return redirect()->route('SO.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SO $sO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SO $sO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSORequest $request, SO $sO)
    {
        //
        $data = $request->validated();

        if($request->file('image')){
            Storage::delete($sO->image);
            $data['image'] = $request->file('image')->store('public/berita');
        }

        $sO->update($data);
        return redirect()->route('SO.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SO $sO)
    {
        //
    }
}
