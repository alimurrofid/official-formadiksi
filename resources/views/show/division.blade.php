@extends('layouts.main')
@section('title', 'Division')
@section('content')
    <div class="container">
        <main>
            <div class="wrap-img-content">
                @if ($division->image)
                    <img src="{{ asset('storage/' . $division->image) }}" class="img-content" alt="...">
                @else
                    <img src="https://source.unsplash.com/1920x1080?{{ $division->title }}" class="img-content"
                        alt="{{ $division->title }}">
                @endif
            </div>
            <h3 class="title-content">{{ $division->title }}</h3>
            <article class="text-content">{!! $division->body !!}</article>
        </main>
    </div>
@endsection