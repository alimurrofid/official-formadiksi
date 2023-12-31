<?php

namespace App\Http\Controllers;

use App\Models\Judul_SO;
use App\Http\Requests\StoreJudul_SORequest;
use App\Http\Requests\UpdateJudul_SORequest;
use App\Models\SO;
use RealRashid\SweetAlert\Facades\Alert;

class JudulSOController extends Controller
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
        if (Judul_SO::create($data)) {
            Alert::success('Berhasil', 'Judul SO Berhasil Ditambahkan');
            return redirect()->route('judulSO.index');
        } else {
            Alert::error('Gagal', 'Judul SO Gagal Ditambahkan');
        }
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
        $data = $request->validated();
        $judul_SO = Judul_SO::first();
        if ($judul_SO->update($data)) {
            Alert::success('Berhasil', 'Judul SO Berhasil Diubah');
            return redirect()->route('judulSO.index');
        } else {
            Alert::error('Gagal', 'Judul SO Gagal Diubah');
        }
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
