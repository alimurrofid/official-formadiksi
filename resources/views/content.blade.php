@extends('layouts.main')
@section('title', 'Content')
@section('content')
    <!-- Article -->
    <div class="container">
        <main>
            <div class="wrap-img-content">
                <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-content" alt="...">
            </div>
            <h3 class="title-content">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
            <div class="wrap-icon">
                <a href="#">
                    <div class="category-content">
                        <i class="bi bi-grid"></i>
                        <p class="text-category">Article</p>
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
                        <div class="card-article-content my-3">
                            <div class="card-body-article-content">
                                <div class="wrap-img-article-content">
                                    <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-article-content"
                                        alt="...">
                                </div>
                                <a href="#">
                                    <div class="category-article-content">
                                        <i class="bi bi-grid"></i>
                                        <p class="text-category">Article</p>
                                    </div>
                                </a>
                                <h3 class="title-article-content">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
                                <p class="text-article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse non
                                    finibus
                                    massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                                <div class="footer-text-content">
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
                        <div class="card-article-content my-3">
                            <div class="card-body-article-content">
                                <div class="wrap-img-article-content">
                                    <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-article-content"
                                        alt="...">
                                </div>
                                <a href="#">
                                    <div class="category-article-content">
                                        <i class="bi bi-grid"></i>
                                        <p class="text-category">Article</p>
                                    </div>
                                </a>
                                <h3 class="title-article-content">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
                                <p class="text-article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse non
                                    finibus
                                    massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                                <div class="footer-text-content">
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
                        <div class="card-article-content my-3">
                            <div class="card-body-article-content">
                                <div class="wrap-img-article-content">
                                    <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-article-content"
                                        alt="...">
                                </div>
                                <a href="#">
                                    <div class="category-article-content">
                                        <i class="bi bi-grid"></i>
                                        <p class="text-category">Article</p>
                                    </div>
                                </a>
                                <h3 class="title-article-content">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
                                <p class="text-article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse non
                                    finibus
                                    massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                                <div class="footer-text-content">
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
                        <div class="card-article-content my-3">
                            <div class="card-body-article-content">
                                <div class="wrap-img-article-content">
                                    <img src="{{ asset('assets/img/article-example.jpg') }}" class="img-article-content"
                                        alt="...">
                                </div>
                                <a href="#">
                                    <div class="category-article-content">
                                        <i class="bi bi-grid"></i>
                                        <p class="text-category">Article</p>
                                    </div>
                                </a>
                                <h3 class="title-article-content">Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</h3>
                                <p class="text-article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Suspendisse non
                                    finibus
                                    massa. Pellentesque sollicitudin ornare non finibus massa. Sollicitudin ... </p>
                                <div class="footer-text-content">
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
@endsection