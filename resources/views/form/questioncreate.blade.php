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
        <h4 class="card-title">Ada Pertanyaan?</h4>
    </div>
    <div class="card-body">
        <p> Uncover Your Extraordinary Potential, Discover Your Hidden Talents!</p>

        <form method="POST" action="{{ route('question.store') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <label for="nama" class="form-label">nama</label>
                <input name="nama" type="text" class="form-control"placeholder="Nama bang">
            </div>
            <div class="form-group">
                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                <textarea name="pertanyaan" type="text" class="form-control"placeholder="Tanya bang"></textarea>
            </div>
            <button type="submit">submit bang</button>
        </form>
    </div>

    
@endsection