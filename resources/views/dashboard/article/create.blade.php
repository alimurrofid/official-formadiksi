@extends('dashboard.layouts.form')
@section('title', 'Article Create')
@section('content')
@include('sweetalert::alert')

    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="{{ route('article.index') }}"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="{{ route('article.index') }}">
                <img src="{{ asset('assets/img/logo-dashboard.png') }}">
            </a>
        </div>
    </nav>

    <div class="card-header">
        <h4 class="card-title">Article Create</h4>
    </div>
    <div class="card-body">
        <p> Write Amazing Articles Show World You Are The Best!</p>

        <!-- Button trigger for Create Form Modal -->
        <button type="button" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal"
        data-bs-target="#createFormModal">
        <i class="bi bi-bookmark-plus"></i> Add Category
        </button>

        <button type="button" class="btn icon icon-left btn-primary mb-3" data-bs-toggle="modal"
        data-bs-target="#deleteFormModal" btn-danger m-1 delete-btn>
        <i class="bi bi-eye"></i> Show Category
        </button>

        <!-- Create Form Modal -->
        <div class="modal fade text-left" id="createFormModal" tabindex="-1" role="dialog"
            aria-labelledby="categoryCreateModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="categoryCreateModal">Create category </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('category.store') }}" id="categoryForm">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="email" class="form-label">Nama Kategori</label>
                                <input name="name" type="text" class="form-control"
                                    placeholder="Kategori">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1"
                                data-bs-dismiss="modal" id="submitButton">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--End Create Form Modal -->

        <!-- Delete Form Modal -->
        <div class="modal fade text-left" id="deleteFormModal" tabindex="-1" role="dialog"
            aria-labelledby="categoryDeleteModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="categoryDeleteModal">Delete category </h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            <form id="delete-form-{{ $category->id }}"
                                                action="{{ route('category.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="btn icon btn-danger m-1 delete-btn"
                                                    data-id="{{ $category->id }}"
                                                    onclick="confirmDelete({{ $category->id }})">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>   
                </div>
            </div>
        </div>
        <!--End Delete Form Modal -->

        <!-- Create Article -->
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" value="{{ old('title') }}" placeholder="Pencairan Periode 2023/2024 Sudah Cair">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug') }}" readonly>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                <label for="category" class="form-label">Category</label>
                <fieldset class="form-group">
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </fieldset>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Post Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="summernote" rows="10">{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- End Create Article -->

    </div>
@endsection
@push('librariesFormJS')
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.all.min.js') }}"></script>
<script>
    function confirmDelete(id) {
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
                document.getElementById('delete-form-' + id).submit();
                Swal.fire(
                    'Dihapus!',
                    'Category telah dihapus.',
                    'success'
                )
            }
        });
    }
    // function confirmDelete(id) {
    //         Swal.fire({
    //             title: 'Konfirmasi Hapus',
    //             html: '<input type="password" id="password" class="swal2-input" placeholder="Masukkan password">',
    //             icon: 'warning',
    //             showCancelButton: true,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#d33',
    //             confirmButtonText: 'Ya, Hapus!',
    //             cancelButtonText: 'Batal',
    //             preConfirm: () => {
    //                 const password = Swal.getPopup().querySelector('#password').value;
    //                 // Ganti dengan logika yang sesuai untuk memeriksa password yang dimasukkan
    //                 // Misalnya, jika password benar, kirimkan permintaan penghapusan ke server
    //                 if (password === 'password123') {
    //                     document.getElementById('delete-form-' + id).submit();
    //                     Swal.fire(
    //                         'Dihapus!',
    //                         'Data telah dihapus.',
    //                         'success'
    //                     );
    //                 } else {
    //                     Swal.showValidationMessage('Password salah');
    //                 }
    //             }
    //         });
    //     }
</script>
@endpush
