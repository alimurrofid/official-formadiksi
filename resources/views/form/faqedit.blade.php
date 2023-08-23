@extends('layouts.custom')
@section('title', 'Form')
@section('content')

<nav class="navbar navbar-light">
    <div class="container d-block">
        <a href="{{route('dashboard.passion')}}"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-4" href="{{route('dashboard.passion')}}">
            <img src="assets/images/logo/logo.svg">
        </a>
    </div>
</nav>

    <div class="card-header">
        <h4 class="card-title">Edit FAQ</h4>
    </div>
    <div class="card-body">
        <p> Uncover Your Extraordinary Potential, Discover Your Hidden Talents!</p>

        <form method="POST" action="{{ route('faq.update', $faq->id) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Pertanyaan</label>
                <input name="question" type="text" class="form-control" placeholder="Pertanyaan" value="{{$faq->question}}">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Jawaban</label>
                <textarea name="answer" type="text" class="form-control" placeholder="Jawab bang" value="{{$faq->answer}}">{{$faq->answer}}</textarea>
            </div>
            <button type="submit">submit bang</button>
        </form>
    </div>

    
@endsection