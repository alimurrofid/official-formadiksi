@extends('dashboard.layouts.form')
@section('title', 'History Create')
@section('content')

    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('history.index') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('history.index') }}">
                <img src="{{ asset('assets/img/logo-dashboard.png') }}">
            </a>
        </div>
    </nav>

    <div class="card-header">
        <h4 class="card-title">History Create</h4>
    </div>
    <div class="card-body">
        <p> Write Amazing historys Show World You Are The Best!</p>

        <form action="{{ route('history.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" value="{{ old('title') }}" placeholder="Formadiksi Mroyek">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="form-label">History Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
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
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="summernote" rows="10">{{ old('body') }}</textarea>
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
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extensions/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/custom/js/create-article.js') }}"></script>
@endpush
