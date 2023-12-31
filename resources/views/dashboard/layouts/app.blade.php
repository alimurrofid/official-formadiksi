<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Formadiksi Polinema</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- CSS Libraries -->
    @stack('librariesCss')


    {{-- CKEditor5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style type="text/css">
        .ck-editor__editable_inline {
            height: 200px;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <div id="app">
        <!-- sidebar start -->
        <div id="sidebar" class="active">
            @include('dashboard.layouts.sidebarDashboard')

        </div>
        <!-- sidebar end -->


        <div id="main" class='layout-navbar'>
            <header class='mb-3'>

                <!-- navbar start -->
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    @include('dashboard.layouts.navbarDashboard')
                </nav>
                <!-- navbar end -->

            </header>
            <div id="main-content">



                <!-- Page Heading -->
                @yield('content')

                <!-- Footer start -->
                <footer>
                    @include('dashboard.layouts.footerDashboard')
                </footer>
                <!-- Footer end -->

            </div>
        </div>
    </div>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Sweetalerts Js -->
    <script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <!-- JS Libraies -->
    @stack('librariesJs')

</body>

</html>
