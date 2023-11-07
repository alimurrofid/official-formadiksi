@extends('dashboard.layouts.app')
@section('title', 'Article')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Article</h3>
                    <p class="text-subtitle text-muted">Article data is all data from Articles.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Article
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Article</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Welcome to our web page featuring the Article data table, where knowledge and inspiration
                        intertwine, creating a captivating narrative hub."
                    </p>
                    <a href="{{ route('article.create') }}" class="btn icon icon-left btn-primary"><i
                            class="bi bi-clipboard-plus"></i>
                        Add Article</a>
                </div>

                <!-- table -->
                <div class="table-responsive p-4">
                    <table class="table table-striped mb-0" id="tableArticle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($articles as $post)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{!! $post->excerpt !!}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="" width="100px">
                                    <td>
                                        <a href="{{ route('article.show', $post->slug) }}" class="btn icon btn-primary m-1"
                                            title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('article.edit', $post->slug) }}" class="btn icon btn-success m-1"
                                            title="Edit"><i class="bi bi-pencil"></i></a>
                                        <form id="delete-form-{{ $post->slug }}"
                                            action="{{ route('article.destroy', $post->slug) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn icon btn-danger m-1 delete-btn"
                                                onclick="confirmDelete('{{ $post->slug }}')" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table -->
                {{-- <div class="m-3 pagination pagination-primary">
                    {{ $articles->links() }}
                </div> --}}
            </div>
        </section>
    </div>
    <script>
        function confirmDelete(slug) {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Data akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengklik "Ya, Hapus!", kirimkan permintaan penghapusan ke server
                    document.getElementById('delete-form-' + slug).submit();
                    Swal.fire(
                        'Dihapus!',
                        'File Anda telah dihapus.',
                        'success'
                    )
                }
            });
        }
    </script>

@endsection

@push('librariesCss')
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
@endpush
@push('librariesJs')
    <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        let jquery_datatable = $("#tableArticle").DataTable();
    </script>
@endpush
