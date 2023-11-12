@extends('layouts.main')
@section('title', 'Content')
@section('content')
    <!-- Article -->
    <div class="container">
        <main>
            <div class="wrap-img-content">
                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-content" loading="lazy" alt="{{ $article->category->name }}">
                @else
                    <img src="https://source.unsplash.com/1920x1080?{{ $article->category->name }}" class="img-content" loading="lazy"
                        alt="{{ $article->category->name }}">
                @endif
            </div>
            <h3 class="title-content">{{ $article->title }}</h3>
            <div class="wrap-icon">
                <a href="/berita?category={{ $article->category->slug }}">
                    <div class="category-content">
                        <i class="bi bi-grid"></i>
                        <p class="text-category">{{ $article->category->name }}</p>
                    </div>
                </a>
                <div class="date-content">
                    <i class="bi bi-calendar4"></i>
                    <p class="text-date">{{ $article->created_at->diffForHumans() }}</p>
                </div>
            </div>
            {{-- <p class="text-content">{{ $article->body }}</p> --}}
            <article class="text-content">{!! $article->body !!}</article>

            <hr>
        </main>

        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="head-title">Other news & article</h2>
                        <p class="sub-title">Kami mencoba merekomendasikan beberapa berita yang mungkin anda sukai</p>
                    </div>
                </div>
                <div class="row ">
                    <!-- Card Article-->
                    @foreach ($otherArticles as $otherArticle)
                        <div class="col-xxl-3 col-xl-4 col-lg-6">
                            <div class="card-article-content my-3">
                                <div class="card-body-article-content">
                                    <div class="wrap-img-article-content">
                                        @if ($otherArticle->image)
                                            <img src="{{ asset('storage/' . $otherArticle->image) }}" class="img-article-content" loading="lazy"
                                                alt="{{ $otherArticle->category->name }}">
                                        @else
                                            <img src="https://source.unsplash.com/1280x720?{{ $otherArticle->category->name }}"
                                                class="img-article-content" loading="lazy" alt="{{ $otherArticle->category->name }}">
                                        @endif
                                    </div>
                                    <a href="/berita?category={{ $otherArticle->category->slug }}">
                                        <div class="category-article-content">
                                            <i class="bi bi-grid"></i>
                                            <p class="text-category">{{ $otherArticle->category->name }}</p>
                                        </div>
                                    </a>
                                    <h3 class="title-article-content">{{ $otherArticle->title }}</h3>
                                    <p class="text-article-content">{{ $otherArticle->excerpt }}</p>
                                    <div class="footer-text-content">
                                        <i class="bi bi-calendar4"></i>
                                        <p class="text-footer-date">{{ $otherArticle->created_at->diffForHumans() }}</p>
                                        <a href="/articles/{{ $otherArticle->slug }}">
                                            <p class="text-footer-readmore">Readmore</p>
                                            <i class="bi bi-arrow-right-short"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Card Article-->



                </div>
            </div>
        </section>
    </div>
@endsection
