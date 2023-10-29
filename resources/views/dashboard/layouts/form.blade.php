<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />
    <title>@yield('title') - Formadiksi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png" />
    <!-- Libraries CSS File -->
    @stack('librariesFormCSS')
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            @yield('content')
        </div>
    </div>


    <!-- Libraries JS File -->
    @stack('librariesFormJS')
    
</body>

</html>
