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

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/landingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/organizationStructure.css') }}">

    <link rel="icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />
    <title>Content - Formadiksi Polinema</title>
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
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aspirasi</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

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

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
