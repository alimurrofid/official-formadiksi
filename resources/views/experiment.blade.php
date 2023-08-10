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
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/experiment.css') }}">
    <title>Experiment</title>
</head>

<body>

    <div class="container mt-5 d-flex">
        {{-- <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="wrap-img">
                    <img src="{{ asset('assets/img/workplan.png') }}" class="card-img" alt="workplan">
                </div>
                <div class="wrap-title">
                        <h3 class="card-title">Laporan pertanggungjawaban</h3>
                        <p class="card-text">Laporan Pertanggungjawaban merupakan program kerja tahunan yang diadakan untuk mempertanggung jawabkan kinerja pengurus selama satu</p>
                </div>
            </div>
        </div>
        <!-- End Card-->
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="wrap-img">
                    <img src="{{ asset('assets/img/workplan.png') }}" class="card-img" alt="workplan">
                </div>
                <div class="wrap-title">
                        <h3 class="card-title">Dialog pembina dan mahasiswa</h3>
                        <p class="card-text">Dialog Pembina Mahasiswa adalah sebuah kegiatan sebagai wadah penyaluran aspirasi mahasiswa bidikmisi/kip kuliah dan afirmasi</p>
                </div>
            </div>
        </div> --}}
        <!-- End Card-->
        <!-- Card -->
        <div class="card-workplan">
            <div class="card-body-workplan">
                <div class="wrap-img-workplan">
                    <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                </div>
                <div class="wrap-title-workplan">
                    <h3 class="title-workplan">Sambut dan motivasi Maba</h3>
                    <p class="text-workplan">Laporan Pertanggungjawaban merupakan program kerja tahunan yang diadakan
                        untuk mempertanggung jawabkan kinerja pengurus selama satu</p>
                </div>
            </div>
        </div>
        <!-- End Card-->
    </div>

    <div class="container d-flex">
        <div class="row ">
            <!-- Card -->
            <div class="col-xxl-4 col-xl-6">
                <div class="card-article mx-1 my-3">
                    <div class="card-body-article">
                        <div class="wrap-img-article">
                            <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article" alt="...">
                        </div>
                        <a href="#">
                            <div class="category-article">
                                <i class="bi bi-grid"></i>
                                <p class="text-category">Pencairan</p>
                            </div>
                        </a>
                        {{-- <div class="card-body-article"> --}}
                        <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
                        <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non
                            finibus
                            massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                        {{-- </div> --}}
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
            <!-- End Card -->
            <!-- Card -->
            <div class="col-xxl-4 col-xl-6">
                <div class="card-article mx-1 my-3">
                    <div class="card-body-article">
                        <div class="wrap-img-article">
                            <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article" alt="...">
                        </div>
                        <a href="#">
                            <div class="category-article">
                                <i class="bi bi-grid"></i>
                                <p class="text-category">Pencairan</p>
                            </div>
                        </a>
                        {{-- <div class="card-body-article"> --}}
                        <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
                        <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non
                            finibus
                            massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ...</p>
                        {{-- </div> --}}
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
            <!-- End Card -->
            <!-- Card -->
            <div class="col-xxl-4 col-xl-6">
                <div class="card-article mx-1 my-3">
                    <div class="card-body-article">
                        <div class="wrap-img-article">
                            <img src="{{ asset('assets/img/article.jpeg') }}" class="img-article" alt="...">
                        </div>
                        <a href="#">
                            <div class="category-article">
                                <i class="bi bi-grid"></i>
                                <p class="text-category">Pencairan</p>
                            </div>
                        </a>
                        {{-- <div class="card-body-article"> --}}
                        <h3 class="title-article">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
                        <p class="text-article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non
                            finibus
                            massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ...</p>
                        {{-- </div> --}}
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
            <!-- End Card -->
        </div>

    </div>
    <div class="row text-center mt-5">
        <div class="col">
            <a class="fs-5 d-inline-flex text-decoration-none fw-medium more-article" href="">
                <p class="px-3">View More Article</p>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>

    <div class="container">

        <div class="row mt-5 wrap-question">
            <div class="wrap-text-question">
                <p class="text-question">Bantu Formadiksi Polinema agar lebih baik lagi dengan mengirimkan
                    pertanyaan,
                    aspirasi, kritik, dan saran anda. Agar membantu Formadiksi Polinema untuk terus berkembang dan
                    memberikan manfaat yang lebih besar bagi mahasiswa Polinema.</p>
                <a href="" class="btn btn-question mt-3">Send Question <i class="bi bi-send ms-1"></i></a>
            </div>
                <img class="img-question" src="{{ asset('assets/img/mailbox.png') }}" alt="">
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiperjs/swiper-bundle.min.js') }}"></script>


    <!-- Main JS File -->
    <script src="{{ asset('assets/vendor/custom/js/experiment.js') }}"></script>
</body>

</html>
