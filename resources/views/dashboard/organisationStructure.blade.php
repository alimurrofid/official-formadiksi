@extends('dashboard.layouts.app')
@section('title', 'Organisation Structure')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Organisation Structure</h3>
                    <p class="text-subtitle text-muted">Organisation Structure data is all data from Organisation Structures.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Organisation Structure
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Organisation Structure</h4>
                </div>
                <div class="card-body">
                    <h3>Judul Struktur Organisasi</h3>
                    @foreach ($judul_SO as $judul)
                        <p>
                            {{ $judul->judul }}
                        </p>
                        {{-- button triggrer --}}
                        <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                            data-bs-target="#editJudulFormModal">
                            <i class="bi bi-envelope-plus"></i> Edit Judul
                        </button>
                        <!-- Create Form Modal -->
                        <div class="modal fade text-left" id="editJudulFormModal" tabindex="-1" role="dialog"
                            aria-labelledby="judulEditModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="judulEditModal">Edit judul </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('judulSO.update', $judul->id) }}">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="text" class="form-label">Ubah Judul</label>
                                                <input name="judul" type="text" class="form-control"
                                                    placeholder="Judul" value="{{ $judul->judul }}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal"
                                                data-id="{{ $judul->id }}">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- modal --}}
                    @endforeach
                    @if (empty($judul_SO))
                        <p>Belum ada judul</p>
                        <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                            data-bs-target="#createJudulFormModal">
                            <i class="bi bi-envelope-plus"></i> Add Judul
                        </button>
                        <!-- Create Form Modal -->
                        <div class="modal fade text-left" id="createJudulFormModal" tabindex="-1" role="dialog"
                            aria-labelledby="judulCreateModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="judulCreateModal">Create judul </h4>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('judulSO.store') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="text" class="form-label">Masukkan Judul</label>
                                                <input name="judul" type="text" class="form-control"
                                                    placeholder="Judul">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- modal --}}
                    @endif
                </div>

                <!-- table -->
                <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createFormModal">
                    <i class="bi bi-envelope-plus"></i> Add SO
                </button>

                <!-- Create Form Modal -->
                <div class="modal fade text-left" id="createFormModal" tabindex="-1" role="dialog"
                    aria-labelledby="SOCreateModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="SOCreateModal">Create SO </h4>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('SO.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Post Image</label>
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        <input class="form-control @error('image') is-invalid @enderror" type="file"
                                            id="image" name="image" onchange="previewImage()">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="submit" type="button" class="btn btn-primary ml-1"
                                            data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Submit</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Create Form Modal -->
            </div>

            <!-- table -->
            <div class="table-responsive px-4">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>SO Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($SO as $so)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @php
                                $imgLink = str_replace('public','storage', $so->image);  
                                @endphp
                                <td> <img src="{{ asset($imgLink) }}"> </td>
                                <td>
                                    <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editFormModal{{ $so->id }}"><i
                                            class="bi bi-pencil-square"></i></button>

                                    <!-- Edit Form Modal -->
                                    <div class="modal fade text-left" id="editFormModal{{ $so->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="SOEditModal{{ $so->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="SOeditModal{{ $so->id }}">Edit SO
                                                    </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <form id="edit-form-{{ $so->id }}" method="POST"
                                                    action="{{ route('SO.update', $so->id) }}" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="image" class="form-label">Post Image</label>
                                                            <input type="hidden" name="oldImage"
                                                                value="{{ $so->image }}">
                                                            @if ($so->image)
                                                                @php
                                                                $imgLink = str_replace('public','storage', $so->image);  
                                                                @endphp
                                                                <img src="{{ asset($imgLink) }}"
                                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                            @else
                                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                            @endif

                                                            <input
                                                                class="form-control @error('image') is-invalid @enderror"
                                                                type="file" id="image" name="image"
                                                                onchange="previewImage()">
                                                            @error('image')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" type="button"
                                                            class="btn btn-primary ml-1 edit-btn"
                                                            data-id="{{ $so->id }}" data-bs-dismiss="modal"
                                                            onclick="confirmEdit({{ $so->id }})">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Submit</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Form Modal -->

                                    <form id="delete-form-{{ $so->id }}"
                                        action="{{ route('SO.destroy', $so->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn icon btn-danger m-1 delete-btn"
                                            data-id="{{ $so->id }}" onclick="confirmDelete({{ $so->id }})">
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
            <div class="m-3 pagination pagination-primary">
                {{-- {{ $rooms->links() }} --}}
            </div>
    </div>



    </section>
    </div>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Data FAQ akan dihapus permanen!',
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
                }
            });
        }

        function confirmEdit(id) {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Data FAQ akan diupdate!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengklik "Ya, Hapus!", kirimkan permintaan penghapusan ke server
                    document.getElementById('edit-form-' + id).submit();
                }
            });
        }
    </script>

@endsection
@push('librariesFormJS')
    <script src="{{ asset('assets/vendor/custom/js/create-article.js') }}"></script>
@endpush