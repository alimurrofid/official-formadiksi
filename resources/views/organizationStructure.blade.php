@extends('layouts.main')
@section('title', 'Struktur Organisasi')
@section('content')
    <!-- Struktur Organisasi -->
    <section class="struktur-organisasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="head-title">Struktur Organisasi</h1>
                    @foreach($judul_SO as $judul)
                    <p class="sub-title">{{$judul->judul}}</p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('assets/img/so-web.svg') }}" class="bagan-so" alt="">
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="wrap-img-so">
                        @php
                        $imgLink = str_replace('public','storage', $SOfirst->image);  
                        @endphp
                        <img src="{{ asset($imgLink) }}" class="img-fluid my-3" alt="">
                    </div>
                </div>
                @foreach ($SO as $so)
                @if($so != $SOfirst)
                <div class="col-xl-6 col-lg-12">
                    <div class="wrap-img-so">
                        @php
                        $imgLink = str_replace('public','storage', $so->image);  
                        @endphp
                        <img src="{{ asset($imgLink) }}" class="img-fluid my-3" alt="">
                    </div>
                </div>
                @endif
                @endforeach
                {{-- <div class="col-xl-6 col-lg-12">
                    <div class="wrap-img-so">
                        <img src="{{ asset('assets/img/bph.png') }}" class="img-fluid my-3" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="wrap-img-so">
                        <img src="{{ asset('assets/img/bph.png') }}" class="img-fluid my-3" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="wrap-img-so">
                        <img src="{{ asset('assets/img/bph.png') }}" class="img-fluid my-3" alt="">
                    </div>
                </div> --}}
            </div>

        </div>
    </section>
@endsection

@push('librariesCss')
<link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/organizationStructure.css') }}">

    
@endpush