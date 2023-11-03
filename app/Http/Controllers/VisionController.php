<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VisionController extends Controller
{
    public function visi()
    {
        return view('visiMisi',[
            'visions' => Vision::all()
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.vision.index', [
            'visions' => Vision::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vision.create');
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
            $validatedData['image'] = $request->file('image')->store('public/vision-images');
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

            $image_name = '/summernote-vision-upload/' . time() . $key . '.png';
            $path = public_path() . $image_name;

            if (!file_exists(public_path() . '/summernote-vision-upload')) {
                mkdir(public_path() . '/summernote-vision-upload', 0755, true);
            }

            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $body = $dom->saveHTML();
        $validatedData['body'] = $body;

        Vision::create($validatedData);
        return redirect(route('vision.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vision $vision)
    {
        return view('dashboard.vision.show', [
            'vision' => $vision
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vision $vision)
    {
        $vision = Vision::find($vision->id);
        return view('dashboard.vision.edit', [
            'vision' => $vision
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vision $vision)
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
            $validatedData['image'] = $request->file('image')->store('public/vision-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // Menghapus foto lama jika ada
        $pattern = '/<img[^>]+src="([^">]+)"/';
        preg_match_all($pattern, $vision->body, $matches);
        $oldImages = $matches[1];

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, 'summernote-vision-upload') !== false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/summernote-vision-upload/" . time() . $key . '.png';
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


        $vision->update($validatedData);
        return redirect(route('vision.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vision $vision)
    {
        if ($vision->image) {
            Storage::delete($vision->image);
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        $dom->loadHTML($vision->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/'); // Menghapus '/' di awal string

            // Menghapus foto lama jika ada
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $vision->delete();
        return redirect(route('vision.index'));
    }
}
