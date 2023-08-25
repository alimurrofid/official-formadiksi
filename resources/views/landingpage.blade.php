@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <!-- Hero -->
    <section class="hero">
        <div class="grup">
            <h1 class="hero-title mb-lg-4 ">Welcome to Official Website <span>Formadiksi Polinema</span></h1>
            <a href="#article" class="btn btn-danger rounded-pill px-4 py-2">Get Started</a>
            <a href="/sejarah" class="btn btn-outline-danger rounded-pill px-4 py-2">Learn More</a>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Work plan -->
    <section id="work-plan">
        <div class="row text-center">
            <div class="col">
                <h2 class="head-title">Work Plan</h2>
                <p class="sub-title">Ketahui program kerja Formadiksi Polinema untuk mengenal formadiksi lebih jauh
                </p>
            </div>
        </div>
        <div class="container">
            <div class=" swiper slide-container">
                <div class=" swiper-wrapper">
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Musyawarah Kerja</h3>
                                    <p class="text-workplan">Musyawarah Kerja atau musker merupakan wadah yang mempunyai
                                        kewenangan tertinggi dalam menentukan langkah organisasi yang ditulis dalam</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Sosial Ramadhan</h3>
                                    <p class="text-workplan">Sosial Ramadhan adalah suatu program kerja yang di miliki
                                        Forum
                                        Mahasiswa Bidikmisi/KIP Kuliah dan Afirmasi Pendidikan Politeknik Negeri Malang.
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Studi Banding</h3>
                                    <p class="text-workplan">Studi Banding Forum Mahasiswa Bidikmisi/KIP Kuliah dan
                                        Afirmasi
                                        Pendidikan Politeknik Negeri Malang ini berharap bisa sebagai media refreshing
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Sambut dan Motivasi Mahasiswa Baru KIP Kuliah</h3>
                                    <p class="text-workplan">Sambut dan Motivasi Mahasiswa baru KIP Kuliah dan Afirmasi
                                        Pendidikan oleh FORMADIKSI POLINEMA merupakan kegiatan untuk menyambut serta</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Sarasehan PKM</h3>
                                    <p class="text-workplan">Program Kreativitas Mahasiswa (PKM) merupakan salah satu
                                        program
                                        dari Direktorat Jendral Pembelajaran dan Kemahasiswaan Kementerian Riset</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Pestadiksi</h3>
                                    <p class="text-workplan">Kegiatan ini diadakan untuk mewujudkan kemampuan minat
                                        bakat
                                        para
                                        mahasiswa Bidikmisi/KIP Kuliah dan Afirmasi Pendidikan agar mampu bersaing </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                    <!-- Card Workplan -->
                    <div class="card-workplan swiper-slide">
                        <div class="card-body-workplan">
                            <div class="wrap-img-workplan">
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                            </div>
                            <a class="text-decoration-none" href="">
                                <div class="wrap-title-workplan">
                                    <h3 class="title-workplan">Dialog pembina dan mahasiswa</h3>
                                    <p class="text-workplan">Dialog Pembina Mahasiswa adalah sebuah kegiatan sebagai
                                        wadah
                                        penyaluran aspirasi mahasiswa bidikmisi/kip kuliah dan afirmasi</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Card Workplan-->
                </div>

                <div class="swiper-button-next swipper-navBtn"></div>
                <div class="swiper-button-prev swipper-navBtn"></div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- End Work plan -->

    <!-- Article -->
    <section id="article">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="head-title mt-5">Article</h2>
                    <p class="sub-title">Update terus berita tentang Formadiksi Polinema agar tidak ketinggalan
                        informasi terbaru</p>
                </div>
            </div>
            <div class="row">
                <!-- Card Article-->
                <div class="col-xxl-4 col-xl-6">
                    <div class="card-article mx-1 my-3">
                        <div class="card-body-article">
                            <div class="wrap-img-article">
                                <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Article</p>
                                </div>
                            </a>
                            <h3 class="title-article">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
                            <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse non
                                finibus
                                massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                            <div class="footer-text">
                                <i class="bi bi-calendar4"></i>
                                <p class="text-footer-date">20-12-2023</p>
                                <a href="/content">
                                    <p class="text-footer-readmore">Readmore</p>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Article-->
                <!-- Card Article-->
                <div class="col-xxl-4 col-xl-6">
                    <div class="card-article mx-1 my-3">
                        <div class="card-body-article">
                            <div class="wrap-img-article">
                                <img src="{{ asset('assets/img/article-example1.jpg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Article</p>
                                </div>
                            </a>
                            <h3 class="title-article">Dapatkan Pengalaman Menarik Dengan Ikut Kegiatan Formadiksi</h3>
                            <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse non
                                finibus
                                massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                            <div class="footer-text">
                                <i class="bi bi-calendar4"></i>
                                <p class="text-footer-date">20-12-2023</p>
                                <a href="">
                                    <p class="text-footer-readmore">Readmore</p>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Article-->
                <!-- Card Article-->
                <div class="col-xxl-4 col-xl-6">
                    <div class="card-article mx-1 my-3">
                        <div class="card-body-article">
                            <div class="wrap-img-article">
                                <img src="{{ asset('assets/img/article-example2.jpg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Article</p>
                                </div>
                            </a>
                            <h3 class="title-article">SKKM Aman Dengan Ikut Setiap Kegiatan Formadiksi</h3>
                            <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Suspendisse non
                                finibus
                                massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                            <div class="footer-text">
                                <i class="bi bi-calendar4"></i>
                                <p class="text-footer-date">20-12-2023</p>
                                <a href="">
                                    <p class="text-footer-readmore">Readmore</p>
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Article-->

            </div>
        </div>
        <!-- View More -->
        <div class="row text-center mt-5">
            <div class="col">
                <a class="fs-5 d-inline-flex text-decoration-none fw-medium more-article" href="/article">
                    <p class="px-3">View More Article</p>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- End View More -->

        </div>
        </div>
    </section>

    <!-- Any Question -->
    <section id="question">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="head-title mt-5">Any Question ?</h2>
                    <p class="sub-title">Kirimkan pertanyaan anda!, kami akan menjawabnya dengan senang hati</p>
                </div>
            </div>

            <div class="row mt-5 wrap-question">
                <div class="wrap-text-question">
                    <p class="text-question">Bantu Formadiksi Polinema agar lebih baik lagi dengan mengirimkan
                        pertanyaan,
                        aspirasi, kritik, dan saran anda. Agar membantu Formadiksi Polinema untuk terus berkembang dan
                        memberikan manfaat yang lebih besar bagi mahasiswa Polinema.</p>
                    {{-- <a href="" class="btn btn-question mt-3">Send Question <i class="bi bi-send ms-1"></i></a> --}}
                    <!-- Button trigger for Form Modal -->
                    <button type="button" class="btn btn-question mt-3" data-bs-toggle="modal"
                        data-bs-target="#questionModal">
                        Send Question <i class="bi bi-send ms-1"></i>
                    </button>

                    <!-- Form Modal -->
                    <div class="modal fade" id="questionModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="questionModalLabel">Send Question</h1>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('question.store') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email :</label>
                                            <input name="email" type="email" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="col-form-label">Nama Lengkap :</label>
                                            <input name="nama" type="text" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label for="pertanyaan" class="col-form-label">Pertanyaan :</label>
                                            <textarea name="pertanyaan" type="text" class="form-control"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-modal-cancel"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-modal-confirm">Confirm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <img class="img-question" src="{{ asset('assets/img/mailbox.png') }}" alt="">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="head-title mt-5">FAQ</h2>
                    <p class="sub-title">Temukan pertanyaan yang sering diajukan oleh orang lain</p>
                </div>
            </div>

            <div class="container  mt-5">
                <!-- Accordion -->
                <div class="accordion " id="accordionExample">
                    @foreach ($faq as $f)
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $f->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $f->id }}">
                                    {{ $f->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $f->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {{ $f->answer }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- End Accordion -->
            </div>

        </div>
    </section>
@endsection

@push('librariesJs')
<!-- Swiper JS Files -->
<script src="{{ asset('assets/vendor/swiperjs/swiper-bundle.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('assets/vendor/custom/js/landingpage.js') }}"></script>
@endpush