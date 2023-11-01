<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Cviebrock\EloquentSluggable\Services\SlugService;
use DOMDocument;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.divisi.index', [
            'divisions' => Division::latest()->paginate(5),
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        if ($division->image) {
            Storage::delete($division->image);
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($division->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/'); // Menghapus '/' di awal string

            // Menghapus foto lama jika ada
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $division->delete();
        return redirect(route('workplan.index'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Division::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
