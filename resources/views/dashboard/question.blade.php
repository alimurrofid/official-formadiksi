@extends('layouts.app')
@section('title', 'Question')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Question</h3>
                    {{-- <p class="text-subtitle text-muted">Member data is all data from members.</p> --}}
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
                        "Welcome to our web page showcasing the member data of our boarding house, where comfort
                        and convenience come together in one place."
                    </p>
                    <a href="{{ route('faq.create') }}" class="btn icon icon-left btn-primary"><i
                            data-feather="user-plus"></i>
                        Add Data</a>
                    <a href="/exportexcel" class="btn btn-success icon icon-left">
                        Export Excel</a>
                    <form action="{{ route('question.delete-all') }}" method="POST" id="delete-form">
                        @csrf
                        <button type="button" onclick="confirmDelete()" class="btn btn-danger icon icon-left">Hapus Semua Pertanyaan</button>
                    </form>
                    <div class="search">
                        <form action="{{ route('question-search') }}" method="GET">
                        <input type="text" class="search-input" placeholder="Search..." name="search" {{ Request::get('search') }}/>
                        <button type="submit" class="search-icon">
                            <i class="fa fa-search"></i>
                        </button>
                        </form>
                    </div>
                </div>

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Pertanyaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($question as $q)
                                <tr>
                                    <td>{{ $q->email }}</td>
                                    <td>{{ $q->nama }}</td>
                                    <td>{{ $q->pertanyaan }}</td>
                                    <td>
                                        @php
                                            $pertanyaan = str_replace(' ', '%20', $q->pertanyaan);
                                        @endphp
                                        <a href="mailto:{{ $q->email }}?subject=Question%20from%20web%20official%20Formadiksi&body=pertanyaan%3A%20{{ $pertanyaan }}%3F%0D%0Ajawaban%3A%20"
                                            class="btn icon btn-warning m-1" title="jawab"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('question.destroy', $q->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn icon btn-danger m-1">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- <tr>
                                <td class="text-bold-500">Ashley Boul</td>
                                <td>$15/hr</td>
                                <td class="text-bold-500">Animation</td>
                                <td>Remote</td>
                                <td>Austin,Texas</td>
                                <td>
                                    <a href="#" class="btn icon btn-primary" title="Detail"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn icon btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="btn icon btn-danger" title="Edit"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <!-- table -->
                <div class="m-3 pagination pagination-primary">
                    {{-- {{ $rooms->links() }} --}}
                </div>
            </div>



        </section>
    </div>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Anda yakin ingin menghapus semua pertanyaan?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Saya Yakin Hapus Semua',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form').submit();
                }
            });
        }
    </script>
@endsection
