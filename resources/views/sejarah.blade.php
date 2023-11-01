@extends('layouts.main')
@section('title', 'Sejarah')
@section('content')
    <!-- Article -->
    <div class="container">
        <main>
            @foreach ($histories as $history)
            <div class="wrap-img-content">
                @if ($history->image)
                    <img src="{{ asset('storage/' . $history->image) }}" class="img-content" alt="...">
                @else
                    <img src="https://source.unsplash.com/1920x1080?map" class="img-content"
                        alt="{{ $history->title }}">
                @endif
            </div>
            <h3 class="title-content">{{$history->title}}</h3>
            <p class="text-content">{!! $history->body !!}</p>
            @endforeach
        </main>
    </div>
@endsection