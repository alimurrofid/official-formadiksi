@extends('dashboard.layouts.app')
@section('title', 'Question')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Question</h3>
                    <p class="text-subtitle text-muted">Data question is all data from user question.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Question
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Question</h4>
                </div>
                <div class="card-body">
                    <p>
                        {{-- "Welcome to our web page showcasing the all data asked by general students." --}}
                    </p>
                </div>

                <!-- table -->
                <div class="table-responsive px-4">
                    <table class="table table-striped  w-100" id="tableQuestion">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Pertanyaan</th>
                                <th>Dijawab Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <input type="hidden" id="table-url" value="{{ route('table') }}">
                <!-- table -->

                <div class="d-flex justify-content-between">
                    <form action="{{ route('question.delete-all') }}" method="POST" id="delete-form">
                        @csrf
                        <button type="button" onclick="confirmDeleteAll()" class="btn btn-danger m-4">Hapus
                            Semua Pertanyaan <i class="bi bi-x-octagon"></i></button>
                    </form>
                    <a href="/exportexcel" class="btn btn-success m-4">
                        Export Excel <i class="bi bi-filetype-xlsx"></i></a>
                </div>

            </div>



        </section>
    </div>
    <script>
        $(document).on('click', '.delete-btn', function() {
            var dataId = $(this).data('id');

            Swal.fire({
                title: 'Yakin untuk menghapus ?',
                text: "Data yang telah dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Hapus data dengan mengirimkan permintaan DELETE
                    $('#delete-' + dataId).submit();
                    Swal.fire(
                        'Dihapus!',
                        'File Anda telah dihapus.',
                        'success'
                    )
                }
            });
        });

        function confirmDeleteAll() {
            Swal.fire({
                title: 'Masukkan Kata Sandi',
                input: 'password',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Hapus Semua Pertanyaan',
                showLoaderOnConfirm: true,
                preConfirm: (password) => {
                    // Kode validasi kata sandi di sini, contoh:
                    if (password === 'password123') {
                        document.getElementById('delete-form').submit();
                        Swal.fire(
                            'Dihapus!',
                            'Semua File Anda telah dihapus.',
                            'success'
                        )
                    } else {
                        Swal.fire({
                            title: 'Kata Sandi Salah',
                            icon: 'error',
                            confirmButtonText: 'Tutup'
                        });
                    }
                }
            });
        }

    </script>
@endsection

@push('librariesCss')
    <!-- Datatables Css -->
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
@endpush

@push('librariesCss')
    <!-- Datatables Js -->
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{ asset('assets/js/pages/datatables.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
@endpush
