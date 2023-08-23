<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiperjs/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/landingpage.css') }}">

    <link rel="icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />
    <title>Home - Formadiksi Polinema</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow fixed-top navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 12rem"
                    src="{{ asset('assets/img/formadiksi.svg') }}" alt="Formadiksi Polinema"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="#">Divisi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#question">Aspirasi</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Hero -->
    <section class="hero">
        <div class="grup">
            <h1 class="hero-title mb-lg-4 ">Welcome to Official Website <span>Formadiksi Polinema</span></h1>
            <a href="#" class="btn btn-danger rounded-pill px-4 py-2">Get Started</a>
            <a href="#" class="btn btn-outline-danger rounded-pill px-4 py-2">Learn More</a>
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
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan"
                                    alt="workplan">
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
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan"
                                    alt="workplan">
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
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan"
                                    alt="workplan">
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
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan"
                                    alt="workplan">
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
                                <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan"
                                    alt="workplan">
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
                                <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Pencairan</p>
                                </div>
                            </a>
                            <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
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
                                <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Pencairan</p>
                                </div>
                            </a>
                            <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
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
                                <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article"
                                    alt="...">
                            </div>
                            <a href="#">
                                <div class="category-article">
                                    <i class="bi bi-grid"></i>
                                    <p class="text-category">Pencairan</p>
                                </div>
                            </a>
                            <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
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
                <a class="fs-5 d-inline-flex text-decoration-none fw-medium more-article" href="">
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
                        <div class="modal fade" id="questionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="questionModalLabel">Send Question</h1>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="col-form-label">Nama Lengkap :</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="">
                                            <label for="message" class="col-form-label">Pertanyaan :</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer mb-1">
                                    <button type="button" class="btn btn-modal-cancel"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-modal-confirm">Confirm</button>
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
                    @foreach($faq as $f)
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{$f->id}}" aria-expanded="false" aria-controls="collapse{{$f->id}}">
                                {{$f->question}}
                            </button>
                        </h2>
                        <div id="collapse{{$f->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> {{$f->answer}}
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

    <!-- Footer -->
    <footer>
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-xl-3 col-lg-3 col-md-3 mx-auto mt-5 ">
                    <h6 class="mb-3">
                        <img src="{{ asset('assets/img/formadiksi.svg') }}" alt="" width="220">
                    </h6>
                    <p class="desc-forum">
                        Forum komunikasi khusus yang mewadahi seluruh Mahasiswa Bidikmisi/KIP Kuliah dan Afirmasi
                        Pendidikan Politeknik Negeri Malang.
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 mx-auto mt-5 ">

                    <h6 class="footer-heading mb-4">Alamat</h6>
                    <p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5126730543166!2d112.61356367485996!3d-7.945853479154056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788328edf9cc41%3A0x841275678bc026ba!2sGedung%20AX%20polinema%20Lt.%203%20R.%20ETU!5e0!3m2!1sid!2sid!4v1691160933785!5m2!1sid!2sid"
                            width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 mx-auto mt-5 ">
                    <h6 class="footer-heading mb-4">Menu</h6>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Home</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Sejarah</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Visi & Misi</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Struktur Organisasi</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Divisi</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Berita</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none" href="">Aspirasi</a>
                    </p>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 mx-auto mt-5 ">
                    <h6 class="footer-heading mb-4">Contact Us</h6>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="https://www.facebook.com/FormadiksiPolinema">Facebook</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="https://www.instagram.com/formadiksi_polinema">Instagram</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="https://twitter.com/FMDPolinema">Twitter</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="https://www.tiktok.com/@formadiksi_polinema">Tiktok</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="https://www.youtube.com/FormadiksiPolinema">Youtube</a>
                    </p>
                    <p>
                        <a class="footer-title text-decoration-none"
                            href="mailto:formadiksipolinema@gmail.com">Email</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2023 Formadiksi Polinema. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiperjs/swiper-bundle.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('assets/vendor/custom/js/landingpage.js') }}"></script>

</body>

</html>
