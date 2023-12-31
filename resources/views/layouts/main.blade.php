<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Formadiksi Polinema adalah Forum komunikasi khusus yang mewadahi seluruh Mahasiswa KIP Kuliah dan Afirmasi Pendidikan Politeknik Negeri Malang.">

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
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">

    <!-- CSS Style -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/landingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/content.css') }}">


    <!-- Libraries CSS Files -->
    @stack('librariesCss')

    <link rel="icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />
    <title>@yield('title') - Formadiksi Polinema</title>
</head>

<body>
    @include('sweetalert::alert')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow fixed-top navbar-transparent">
        @include('partials.navbar')
    </nav>
    <!-- End Navbar -->

    @yield('content')

    <!-- Footer -->
    <footer>
        @include('partials.footer')
    </footer>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <!-- Libraries JS File -->
    @stack('librariesJs')

</body>

</html>
