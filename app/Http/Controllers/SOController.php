<?php

namespace App\Http\Controllers;

use App\Models\SO;
use App\Http\Requests\StoreSORequest;
use App\Http\Requests\UpdateSORequest;
use App\Models\Judul_SO;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Post;

class SOController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $judul_SO = Judul_SO::get();
        $SO = SO::all();
        return view('dashboard.organisationStructure', compact('judul_SO', 'SO'));
    }

    public function views()
    {
        $judul_SO = Judul_SO::get();
        $SOfirst = SO::first();
        $SO = SO::all();
        return view('organizationStructure', compact('judul_SO', 'SOfirst', 'SO'));
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
        if ($request->file('image')) {
            $filePath = $request->file('image')->store('public/so-images');
            $data['image'] = $filePath;
        }
        SO::create($data);
        return redirect()->route('SO.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(SO $SO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SO $SO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSORequest $request, SO $SO)
    {
        //
        $data = $request->validated();
        if ($request->file('image')) {
            Storage::delete($SO->image);
            $data['image'] = $request->file('image')->store('public/so-images');
        }
        $SO->update($data);
        return redirect()->route('SO.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SO $SO)
    {
        //
        // Storage::delete($SO->image);
        $SO->delete();
        return redirect()->route('SO.index');
    }
}