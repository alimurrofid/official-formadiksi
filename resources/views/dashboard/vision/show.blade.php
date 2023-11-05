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
    <link rel="stylesheet" href="{{ asset('assets/vendor/custom/css/content.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo-formadiksi.png') }} " type="image/png" />
    <title>Show Vision - Formadiksi Polinema</title>
</head>

<body>
    <!-- vision -->
    <div class="wrap-back">
        <a href="{{ route('vision.index') }}">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>
    <div class="container">
        <main>
            <div class="wrap-img-content">
                @if ($vision->image)
                    <img src="{{ asset('storage/' . $vision->image) }}" class="img-content" alt="...">
                @else
                    <img src="https://source.unsplash.com/1920x1080?{{ $vision->title }}" class="img-content"
                        alt="{{ $vision->title }}">
                @endif
            </div>
            <h3 class="title-content">{{ $vision->title }}</h3>
            <article class="text-content">{!! $vision->body !!}</article>
        </main>
    </div>


</body>

</html>
