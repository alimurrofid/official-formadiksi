@extends('layouts.main')
@section('title', 'Divisi')
@section('content')

    <!-- Article -->
    <section id="article">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="head-title mt-5">Division</h2>
                    <p class="sub-title">Kami memiliki talenta muda untuk melakukan inovasi kemajuan Formadiksi kedepannya
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Card Divisi-->
                @foreach ($divisions as $division)
                <a class="col-xxl-4 col-xl-6" href="division/{{$division->slug}}">
                    <div class="card-divisi mx-1 my-3">
                        <div class="card-body-divisi">
                            <div class="wrap-img-divisi">
                                @if ($division->image)
                                    <img src="{{ asset('storage/' . $division->image) }}" class="img-divisi" loading="lazy"
                                        alt="{{ $division->title }}">
                                @else
                                    <img src="https://source.unsplash.com/1280x720?{{ $division->title }}"
                                        class="img-divisi" loading="lazy" alt="{{ $division->title }}">
                                @endif
                            </div>
                            <h3 class="title-divisi">{{ $division->title }}</h3>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- End Card Divisi-->
            </div>
        </div>

        </div>
        </div>
    </section>

@endsection
