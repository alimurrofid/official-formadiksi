@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <!-- Hero -->
    <section class="hero">
        <div class="grup">
            <h1 class="hero-title mb-lg-4 ">Welcome to Official Website <span>Formadiksi Polinema</span></h1>
            <a href="#article" class="btn btn-danger rounded-pill px-4 py-2">Get Started</a>
            <a href="/sejarah" class="btn btn-outline-danger rounded-pill px-4 py-2">Learn More</a>
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
                    @foreach ($workplans as $workplan)
                        <!-- Card Workplan -->
                        <div class="card-workplan swiper-slide">
                            <div class="card-body-workplan">
                                <div class="wrap-img-workplan">
                                    <img src="{{ asset('assets/img/workplan.png') }}" class="img-workplan" alt="workplan">
                                </div>
                                <a class="text-decoration-none" href="/workplan/{{ $workplan->slug }}">
                                    <div class="wrap-title-workplan">
                                        <h3 class="title-workplan">{{ $workplan->title }}</h3>
                                        <p class="text-workplan">{{ $workplan->excerpt }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Card Workplan-->
                    @endforeach
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
                @foreach ($articles as $article)
                    <div class="col-xxl-4 col-xl-6">
                        <div class="card-article mx-1 my-3">
                            <div class="card-body-article">
                                <div class="wrap-img-article">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" class="img-article"
                                            alt="...">
                                    @else
                                        <img src="https://source.unsplash.com/1280x720?{{ $article->category->name }}"
                                            class="img-article" alt="{{ $article->category->name }}">
                                    @endif
                                </div>
                                <a href="/berita?category={{ $article->category->slug }}">
                                    <div class="category-article">
                                        <i class="bi bi-grid"></i>
                                        <p class="text-category">{{ $article->category->name }}</p>
                                    </div>
                                </a>
                                <h3 class="title-article">{{ $article->title }}</h3>
                                <p class="text-article">{{ $article->excerpt }}</p>
                                <div class="footer-text">
                                    <i class="bi bi-calendar4"></i>
                                    <p class="text-footer-date">{{ $article->created_at->diffForHumans() }}</p>
                                    <a href="/articles/{{ $article->slug }}">
                                        <p class="text-footer-readmore">Readmore</p>
                                        <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End Card Article-->
            </div>
        </div>
        <!-- View More -->
        <div class="row text-center mt-5">
            <div class="col">
                <a class="fs-5 d-inline-flex text-decoration-none fw-medium more-article" href="/article">
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
                    <div class="modal fade" id="questionModal" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="questionModalLabel">Send Question</h1>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('question.store') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="email" class="col-form-label">Email :</label>
                                            <input name="email" type="email" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="col-form-label">Nama Lengkap :</label>
                                            <input name="nama" type="text" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label for="pertanyaan" class="col-form-label">Pertanyaan :</label>
                                            <textarea name="pertanyaan" type="text" class="form-control"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-modal-cancel"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-modal-confirm">Confirm</button>
                                        </div>
                                    </form>
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
                    @foreach ($faq as $f)
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $f->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $f->id }}">
                                    {{ $f->question }}
                                </button>
                            </h2>
                            <div id="collapse{{ $f->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> {{ $f->answer }}
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
@endsection

@push('librariesJs')
    <!-- Swiper JS Files -->
    <script src="{{ asset('assets/vendor/swiperjs/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/vendor/custom/js/landingpage.js') }}"></script>
@endpush
