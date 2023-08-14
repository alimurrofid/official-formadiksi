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

    <!-- Article -->
    <div class="container">
        <main>
            <div class="wrap-img-content">
                <img src="{{ asset('assets/img/menangtfs.jpeg') }}" class="img-content" alt="...">
            </div>
            <h3 class="title-content">Pencairan Semester Ganjil 2023/2024 Telah Masuk Rekening</h3>
            <div class="wrap-icon">
                <a href="#">
                    <div class="category-content">
                        <i class="bi bi-grid"></i>
                        <p class="text-category">Pencairan</p>
                    </div>
                </a>
                <div class="date-content">
                    <i class="bi bi-calendar4"></i>
                    <p class="text-date">20-12-2023</p>
                </div>
            </div>
            <p class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non finibus
                massa. Pellentesque sollicitudin ornare mollis. Orci varius natoque penatibus et magnis dis parturient
                montes, nascetur ridiculus mus. Duis mi eros, feugiat sit amet elementum sit amet, scelerisque id enim.
                Vivamus ultrices consectetur odio, pharetra finibus massa vulputate in. Aenean laoreet dui eros,
                pulvinar convallis nulla vulputate a. Phasellus feugiat placerat lorem, quis suscipit eros commodo eu.
                Praesent posuere, orci vel vulputate euismod, ante purus feugiat lorem, a porta velit leo non ex.

                Donec fermentum vulputate purus ut malesuada. Nulla malesuada sed mauris ut scelerisque. Morbi sagittis
                sem sed felis tempus, sed rutrum arcu iaculis. Vivamus ac nisl tellus. In aliquet commodo arcu, eget
                ultricies est pretium ut. In sodales et enim ac mattis. Praesent id molestie tortor. Curabitur laoreet
                nec ipsum id volutpat. Pellentesque at leo egestas, dapibus libero nec, tempus tortor. Cras eget magna
                id metus viverra venenatis. Proin tincidunt a neque ut ornare. Nam vulputate ipsum eget porttitor
                mattis. Cras rutrum scelerisque mattis. Maecenas eget venenatis nunc. Cras ut ultrices leo, vel
                fringilla augue.
                <br>
                <br>

                Praesent tincidunt sodales mauris quis semper. Nullam quam nibh, maximus sed suscipit quis, pellentesque
                eu mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue neque eget lacus
                semper maximus. Donec porta ultrices arcu at dapibus. Orci varius natoque penatibus et magnis dis
                parturient montes, nascetur ridiculus mus. Fusce ultrices quam ligula, et viverra nisl porta non.
                <br>
                <br>

                Suspendisse dapibus ligula in orci pulvinar consectetur. Curabitur fringilla sagittis imperdiet. Aenean
                eget nunc egestas, condimentum lorem sit amet, venenatis lorem. Proin eget nisl elit. Praesent aliquam
                sed diam non tempus. Mauris rhoncus, ligula a faucibus fringilla, elit dui eleifend risus, eget
                fermentum odio ex sed quam. Aenean suscipit ipsum eget mi faucibus euismod. Mauris quis efficitur leo.
                Phasellus vulputate leo leo. Nam nec nisl eleifend, accumsan libero quis, rutrum diam. Pellentesque
                tincidunt sodales lectus, nec vestibulum erat consequat ac. Fusce et risus eleifend, bibendum nulla a,
                hendrerit ipsum. Mauris iaculis nisi sem, et auctor nibh auctor eu.
                <br>
                <br>

                Suspendisse at rutrum urna, in laoreet tortor. Interdum et malesuada fames ac ante ipsum primis in
                faucibus. Mauris auctor orci vel ipsum finibus, a porttitor ipsum mattis. Nullam a massa non orci porta
                efficitur. Cras at eleifend sem. Vivamus gravida posuere nibh, in dapibus ante suscipit ut. Suspendisse
                potenti. Cras at diam vitae velit luctus viverra. Donec lacus enim, rhoncus non dui sed, tincidunt
                convallis nibh. Pellentesque mattis magna urna, pellentesque tempor magna dignissim a. Praesent turpis
                diam, faucibus in purus in, aliquet mattis magna. Cras commodo lectus nec sapien pulvinar, id semper mi
                lacinia. Vivamus dictum leo quis lacus molestie, in semper orci volutpat. Nullam pellentesque mi at urna
                cursus vehicula.
            </p>

            <hr>
        </main>

        <section>
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="head-title">Other news & article</h2>
                        <p class="sub-title">Kami mencoba merekomendasikan beberapa berita yang mungkin anda sukai</p>
                    </div>
                </div>
                <div class="row ">
                    <!-- Card Article-->
                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                        <div class="card-article my-3">
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
                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                        <div class="card-article my-3">
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
                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                        <div class="card-article my-3">
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
                    <div class="col-xxl-3 col-xl-4 col-lg-6">
                        <div class="card-article my-3">
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
        </section>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
