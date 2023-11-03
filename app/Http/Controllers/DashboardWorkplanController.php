<?php

namespace App\Http\Controllers;

use App\Models\Workplan;
use Cviebrock\EloquentSluggable\Services\SlugService;
use DOMDocument;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DashboardWorkplanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.workplan.index', [
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:workplans',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/workplan-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD); // Menghilangkan tag <html> dan <body>
        $images = $dom->getElementsByTagName('img'); // Mengambil semua tag <img>

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src'); // Mengambil nilai dari atribut 'src' pada tag <img>
            list($type, $data) = explode(';', $data); // Memisahkan data menjadi 2 bagian, yaitu tipe dan base64
            list(, $data) = explode(',', $data); // Memisahkan data lagi menjadi 2 bagian, yaitu base64 dan data asli
            $data = base64_decode($data); // Mendecode base64 menjadi data asli

            $image_name = '/summernote-workplan-upload/' . time() . $key . '.png'; // Membuat nama file gambar
            $path = public_path() . $image_name; // Menentukan path file gambar

            if (!file_exists(public_path() . '/summernote-workplan-upload')) {
                mkdir(public_path() . '/summernote-workplan-upload', 0755, true); // Membuat folder 'summernote-workplan-upload' jika belum ada
            }

            file_put_contents($path, $data); // Menyimpan gambar ke folder 'summernote-workplan-upload'
            $img->removeAttribute('src'); // Menghapus atribut 'src' pada tag <img>
            $img->setAttribute('src', $image_name); // Menambahkan atribut 'src' pada tag <img> dengan nilai yang baru
        }

        $body = $dom->saveHTML(); // Mengambil isi dari $dom dan menyimpannya ke dalam $body
        $validatedData['body'] = $body; // Mengambil isi dari $dom dan menyimpannya ke dalam $validatedData['body']

        $validatedData['excerpt'] = Str::limit(strip_tags($body), 200);

        Workplan::create($validatedData);
        return redirect(route('workplan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Workplan $workplan)
    {
        return view('dashboard.workplan.show', [
            'workplan' => $workplan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workplan $workplan)
    {
        $workplan = Workplan::find($workplan->id);
        return view('dashboard.workplan.edit', [
            'workplan' => $workplan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workplan $workplan)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:workplans,slug,' . $workplan->id,
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('public/workplan-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // Menghapus foto lama jika ada
        $pattern = '/<img[^>]+src="([^">]+)"/';
        preg_match_all($pattern, $workplan->body, $matches);
        $oldImages = $matches[1];

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, 'summernote-workplan-upload') !== false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/summernote-workplan-upload/" . time() . $key . '.png';
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

        // Buat 'excerpt' berdasarkan konten yang telah diolah
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $workplan->update($validatedData);
        return redirect(route('workplan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workplan $workplan)
    {
        if ($workplan->image) {
            Storage::delete($workplan->image);
        }

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($workplan->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/'); // Menghapus '/' di awal string

            // Menghapus foto lama jika ada
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $workplan->delete();
        return redirect(route('workplan.index'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Workplan::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
