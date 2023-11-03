<?php

namespace App\Http\Controllers;

use App\Models\History;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function sejarah(){
        return view('sejarah',[
            'histories' => History::all()
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.history.index', [
            'histories' => History::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/history-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = '/summernote-history-upload/' . time() . $key . '.png';
            $path = public_path() . $image_name;

            if (!file_exists(public_path() . '/summernote-history-upload')) {
                mkdir(public_path() . '/summernote-history-upload', 0755, true);
            }

            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $body = $dom->saveHTML();
        $validatedData['body'] = $body;

        History::create($validatedData);
        return redirect(route('history.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        return view('dashboard.history.show', [
            'history' => $history
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        $history = History::find($history->id);
        return view('dashboard.history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('public/history-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // Menghapus foto lama jika ada
        $pattern = '/<img[^>]+src="([^">]+)"/';
        preg_match_all($pattern, $history->body, $matches);
        $oldImages = $matches[1];

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, 'summernote-history-upload') !== false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/summernote-history-upload/" . time() . $key . '.png';
            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
            // Hapus gambar-gambar sebelumnya
            foreach ($oldImages as $oldImage) {
                if (strpos($request->input('body'), $oldImage) === false) {
                    $filename = public_path() . $oldImage; // Sesuaikan dengan direktori penyimpanan gambar Anda
                    if (File::exists($filename)) {
                        File::delete($filename);
                    }
                }
            }
        }
        // Update konten 'body' dengan konten yang telah diolah
        $body = $dom->saveHTML();
        $validatedData['body'] = $body;


        $history->update($validatedData);
        return redirect(route('history.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        if ($history->image) {
            Storage::delete($history->image);
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        $dom->loadHTML($history->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/'); // Menghapus '/' di awal string

            // Menghapus foto lama jika ada
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $history->delete();
        return redirect(route('history.index'));
    }
}
