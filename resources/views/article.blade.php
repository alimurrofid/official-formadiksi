@extends('layouts.main')
@section('title', 'Article')
@section('content')
    <div class="container">
        <div class="row text-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="col">
                <h2 class="head-title mt-5">{{ $title }}</h2>
                <p class="sub-title">Update terus berita tentang Formadiksi Polinema agar tidak ketinggalan
                    informasi terbaru</p>
            </div>
        </div>
        <div class="row" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
            <div class="col">
                <form action="/berita">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="wrap-search">
                        <i class="bi bi-search"></i>
                        <input name="search" type="text" class="search" placeholder="Search" value="{{request('search')}}">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <!-- Card Article-->
            @foreach ($articles as $article)
                <div class="col-xxl-4 col-xl-6">
                    <div class="card-article mx-1 my-3" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200">
                        <div class="card-body-article">
                            <div class="wrap-img-article">
                                @if ($article->image)
                                    <img src="{{ asset('storage/' . $article->image) }}" class="img-article" loading="lazy" alt="{{ $article->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/1280x720?{{ $article->category->name }}"
                                        class="img-article" loading="lazy" alt="{{ $article->category->name }}">
                                @endif
                            </div>
                            <a href="/berita?category={{ $article->category->slug }}">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">{{ $article->category->name }}</p>
                                </div>
                            </a>
                            <h3 class="title-article">{{ $article->title }}</h3>
                            <p class="text-article">{{ $article->excerpt }}</p>
                            <div class="footer-text">
                                <i class="bi bi-calendar4"></i>
                                <p class="text-footer-date">{{ $article->created_at->diffForHumans() }}</p>
                                <a href="/articles/{{ $article->slug }}">
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
    <div class="container pagination p-4">
        <div class="page-item active ms-auto">
            {{ $articles->links() }}
        </div>
    </div>
@endsection

@push('librariesJs')
    <!-- Libraries JS Files -->
    <script src="{{ asset('assets/vendor/custom/js/search.js') }}"></script>
@endpush
