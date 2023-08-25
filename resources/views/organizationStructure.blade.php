@extends('layouts.main')
@section('title', 'Struktur Organisasi')
@section('content')
    <!-- Struktur Organisasi -->
    <section class="struktur-organisasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="head-title">Struktur Organisasi</h1>
                    <p class="sub-title">Forum Mahasiswa Bidikmisi/KIP Kuliah dan Afirmasi Pendidikan Politeknik Negeri
                        Malang Periode 2023/2024</p>
                </div>
            </div>
            <div class="row">
                <img src="{{ asset('assets/img/so-web.svg') }}" class="bagan-so" alt="">
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
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
                </div>

            </div>

        </div>
    </section>
@endsection

@push('librariesCss')
<link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/organizationStructure.css') }}">

    
@endpush