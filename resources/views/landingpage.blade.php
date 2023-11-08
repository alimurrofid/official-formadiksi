@extends('layouts.main')
@section('title', 'Home')
@section('content')
    <!-- Hero -->
    <section class="hero">
        <div class="grup" data-aos="zoom-in" data-aos-duration="1000">
            <h1 class="hero-title mb-lg-4 ">Welcome to Official Website <span>Formadiksi Polinema</span></h1>
            <a href="#article" class="btn btn-danger rounded-pill px-4 py-2">Get Started</a>
            <a href="/sejarah" class="btn btn-outline-danger rounded-pill px-4 py-2">Learn More</a>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Work plan -->
    <section id="work-plan">
        <div class="row text-center" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
            <div class="col">
                <h2 class="head-title">Work Plan</h2>
                <p class="sub-title">Ketahui program kerja Formadiksi Polinema untuk mengenal formadiksi lebih jauh
                </p>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
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
            <div class="row text-center" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
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
                        <div class="card-article mx-1 my-3" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="250">
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
        <div class="row text-center mt-5" data-aos="fade-right" data-aos-duration="1200">
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
            <div class="row text-center" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                <div class="col">
                    <h2 class="head-title mt-5">Any Question ?</h2>
                    <p class="sub-title">Kirimkan pertanyaan anda!, kami akan menjawabnya dengan senang hati</p>
                </div>
            </div>

            <div class="row mt-5 wrap-question">
                <div class="wrap-text-question">
                    <p class="text-question" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="250">Bantu Formadiksi Polinema agar lebih baik lagi dengan mengirimkan
                        pertanyaan,
                        aspirasi, kritik, dan saran anda. Agar membantu Formadiksi Polinema untuk terus berkembang dan
                        memberikan manfaat yang lebih besar bagi mahasiswa Polinema.</p>
                    {{-- <a href="" class="btn btn-question mt-3">Send Question <i class="bi bi-send ms-1"></i></a> --}}
                    <!-- Button trigger for Form Modal -->
                    <button type="button" class="btn btn-question mt-3" data-bs-toggle="modal"
                        data-bs-target="#questionModal" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="250">
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
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" placeholder="example@gmail.com">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nim" class="col-form-label">NIM :</label>
                                            <input name="nim" type="text" class="form-control @error('nim') is-invalid @enderror"
                                                value="{{ old('nim') }}" placeholder="2141000000">
                                            @error('nim')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="col-form-label">Nama Lengkap :</label>
                                            <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                                value="{{ old('nama') }}" placeholder="Aufa Ahnaf">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="jurusan" class="col-form-label">Jurusan :</label>
                                            <input name="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                                value="{{ old('jurusan') }}" placeholder="Teknologi Informasi">
                                            @error('jurusan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="prodi" class="col-form-label">Prodi :</label>
                                            <input name="prodi" type="text" class="form-control @error('prodi') is-invalid @enderror"
                                                value="{{ old('prodi') }}" placeholder="D-IV Teknik Informatika">
                                            @error('prodi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="angkatan" class="col-form-label">Angkatan :</label>
                                            <input name="angkatan" type="text" class="form-control @error('angkatan') is-invalid @enderror"
                                                value="{{ old('angkatan') }}" placeholder="2021">
                                            @error('angkatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="untuk">Pertanyaan ditujukan untuk:</label>
                                            <select class="form-select @error('untuk') is-invalid @enderror" aria-label="Default select example"
                                                name="untuk">
                                                <option selected disabled>Pilih Tujuan</option>
                                                <option value="Forum">Forum</option>
                                                <option value="Pembina">Pembina</option>
                                            </select>
                                            @error('untuk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <label for="pertanyaan" class="col-form-label">Pertanyaan :</label>
                                            <textarea name="pertanyaan" type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                                                value="{{ old('pertanyaan') }}" placeholder="Tulis pertanyaan disini..."></textarea>
                                            @error('pertanyaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                <img class="img-question" src="{{ asset('assets/img/mailbox.png') }}" alt="" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="250">
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="row text-center" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="100">
                <div class="col">
                    <h2 class="head-title mt-5">FAQ</h2>
                    <p class="sub-title">Temukan pertanyaan yang sering diajukan oleh orang lain</p>
                </div>
            </div>

            <div class="container  mt-5">
                <!-- Accordion -->
                <div class="accordion " id="accordionExample">
                    @foreach ($faq as $f)
                        <div class="accordion-item mb-3" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
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
