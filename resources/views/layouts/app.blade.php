<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Formadiksi</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">



    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">

</head>

<body>
    <div id="app">
        <!-- sidebar start -->
        <div id="sidebar" class="active">
            @include('layouts.sidebar')

        </div>
        <!-- sidebar end -->


        <div id="main" class='layout-navbar'>
            <header class='mb-3'>

                <!-- navbar start -->
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    @include('layouts.navbar')
                </nav>
                <!-- navbar end -->

            </header>
            <div id="main-content">



                <!-- Page Heading -->
                @yield('content')

                <!-- Footer start -->
                <footer>
                    @include('layouts.footer')
                </footer>
                <!-- Footer end -->

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
</body>

</html>
