@extends('dashboard.layouts.form')
@section('title', 'Article Create')
@section('content')

    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('article.index') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('article.index') }}">
                <img src="{{ asset('assets/img/logo-dashboard.png') }}">
            </a>
        </div>
    </nav>

    <div class="card-header">
        <h4 class="card-title">Article Edit</h4>
    </div>
    <div class="card-body">
        <p> Write Amazing Articles Show World You Are The Best!</p>

        <form action="{{ route('article.update', $article->slug) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" value="{{ old('title', $article->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug', $article->slug) }}" readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <label for="category" class="form-label">Category</label>
                <fieldset class="form-group">
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $article->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </fieldset>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{$article->image}}">
                @if ($article->image)
                    <img src="{{ asset('storage/'.$article->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="summernote" rows="10">{{ old('body', $article->body) }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
@push('librariesFormCSS')
    <link rel="stylesheet" href="{{ asset('assets/css/pages/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/summernote/summernote-lite.css') }}">
@endpush
@push('librariesFormJS')
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    {{-- <script src="{{asset('assets/js/app.js')}}"></script> --}}
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/summernote/summernote-lite.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/pages/summernote.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/custom/js/create-article.js') }}"></script>
@endpush
