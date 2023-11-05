@extends('layouts.main')
@section('title', 'Workplan')
@section('content')
    <div class="container">
        <main>
            <div class="wrap-img-content">
                @if ($workplan->image)
                    <img src="{{ asset('storage/' . $workplan->image) }}" class="img-content" alt="...">
                @else
                    <img src="https://source.unsplash.com/1920x1080?{{ $workplan->title }}" class="img-content"
                        alt="{{ $workplan->title }}">
                @endif
            </div>
            <h3 class="title-content">{{ $workplan->title }}</h3>
            <article class="text-content">{!! $workplan->body !!}</article>
        </main>
    </div>
@endsection