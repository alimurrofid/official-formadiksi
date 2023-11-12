@extends('layouts.main')
@section('title', 'Visi & Misi')
@section('content')
    <!-- Article -->
    <div class="container">
        <main>
            @foreach ($visions as $vision)
            <div class="wrap-img-content">
                @if ($vision->image)
                    <img src="{{ asset('storage/' . $vision->image) }}" class="img-content" loading="lazy" alt="{{ $vision->title }}">
                @else
                    <img src="https://source.unsplash.com/1920x1080?planner" class="img-content" loading="lazy"
                        alt="{{ $vision->title }}">
                @endif
            </div>
            <h3 class="title-content">{{$vision->title}}</h3>
            <p class="text-content">{!! $vision->body !!}</p>
            @endforeach
        </main>
    </div>
@endsection