<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('article', [
            'title' => 'News & Article' . $title,
            'articles' => Article::latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show(Article $article)
    {
        $relatedArticles = Article::inRandomOrder()->paginate(4);

        return view('content', [
            'article' => $article,
            'otherArticles' => $relatedArticles,
        ]);
    }
}
