<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use DOMDocument;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;




class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.article.index', [
            'articles' => Article::all(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.article.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public/article-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/summernote-article-upload/" . time() . $key . '.png';
            $path = public_path() . $image_name;

            //buat path summernote-article-upload di public
            if (!file_exists(public_path('summernote-article-upload'))) {
                mkdir(public_path('summernote-article-upload'), 0777, true);
            }

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        // Update konten 'body' dengan konten yang telah diolah
        $body = $dom->saveHTML();
        $validatedData['body'] = $body;

        // Buat 'excerpt' berdasarkan konten yang telah diolah
        $validatedData['excerpt'] = Str::limit(strip_tags($body), 200);

        //membuat kondisi jika berhasil dan error menambahkan data
        if (Article::create($validatedData)) {
            Alert::success('Berhasil', 'Article Berhasil Ditambahkan');
            return redirect(route('article.index'));
        } else {
            Alert::error('Gagal', 'Article Gagal Ditambahkan');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('dashboard.article.show', [
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $article = Article::find($article->id);
        return view('dashboard.article.edit', [
            'article' => $article,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles,slug,' . $article->id,
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('public/article-images');
        }

        $body = $request->input('body');
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        // Menghapus foto lama jika ada
        $pattern = '/<img[^>]+src="([^">]+)"/';
        preg_match_all($pattern, $article->body, $matches);
        $oldImages = $matches[1];


        foreach ($images as $key => $img) {
            $data = $img->getAttribute('src');
            if (strpos($data, 'summernote-article-upload') !== false) {
                continue;
            }
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $image_name = "/summernote-article-upload/" . time() . $key . '.png';
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

        if ($article->update($validatedData)) {
            Alert::success('Berhasil', 'Article Berhasil Diubah');
            return redirect(route('article.index'));
        } else {
            Alert::error('Gagal', 'Article Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // $article = Article::find($article->article_id);
        if ($article->image) {
            Storage::delete($article->image);
        }
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Mematikan error parsing HTML yang mungkin terjadi

        // Memuat konten HTML dari 'body'
        $dom->loadHTML($article->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/'); // Menghapus '/' di awal string

            // Menghapus foto lama jika ada
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $article->delete();
        return redirect(route('article.index'));
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
