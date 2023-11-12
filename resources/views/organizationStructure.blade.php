@extends('layouts.main')
@section('title', 'Struktur Organisasi')
@section('content')
    <!-- Struktur Organisasi -->
    <section class="struktur-organisasi">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="head-title" data-aos="fade-down" data-aos-duration="1000">Struktur Organisasi</h1>
                    @foreach ($judul_SO as $judul)
                        <p class="sub-title" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50">{{ $judul->judul }}</p>
                    @endforeach
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                <img src="{{ asset('assets/img/so-web.png') }}" loading="lazy" class="bagan-so" alt="struktur organisasi">
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="wrap-img-so" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="200">
                        @isset($SOfirst->image)
                            <img src="{{ asset('storage/' . $SOfirst->image) }}" class="img-fluid my-3" loading="lazy" alt="foto divisi">
                        @else
                            <img src="{{ asset('assets/img/so-dummy.png') }}" class="img-fluid my-3" loading="lazy" alt="foto divisi">
                        @endisset
                    </div>
                </div>
                @foreach ($SO as $so)
                    @if ($so != $SOfirst)
                        <div class="col-xl-6 col-lg-12">
                            <div class="wrap-img-so" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $so->image) }}" class="img-fluid my-3" loading="lazy" alt="foto divisi">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('librariesCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/organizationStructure.css') }}">
@endpush
