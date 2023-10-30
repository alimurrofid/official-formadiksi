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
                            data-bs-target="#createFormModal">
                            <i class="bi bi-envelope-plus"></i> Edit Judul
                        </button>
                        <!-- Create Form Modal -->
                        <div class="modal fade text-left" id="createFormModal" tabindex="-1" role="dialog"
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
                                            <button type="submit" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal" data-id="{{ $judul->id }}">
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
                            data-bs-target="#createFormModal">
                            <i class="bi bi-envelope-plus"></i> Add Judul
                        </button>
                        <!-- Create Form Modal -->
                        <div class="modal fade text-left" id="createFormModal" tabindex="-1" role="dialog"
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
                                            <button type="submit" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal">
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
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1</td>
                                <td>Tips and Trik Menjadi Mahasiswa Yang Produktif Di Era 5.0</td>
                                <td>Article</td>
                                <td>Foto</td>
                                <td>
                                    <a href="#" class="btn icon btn-primary m-1" title="Detail"><i
                                            class="bi bi-eye"></i></a>
                                    <a href="#" class="btn icon btn-warning m-1" title="Edit"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="btn icon btn-danger m-1" title="Edit"><i
                                            class="bi bi-trash"></i></a>
                                </td>
                            </tr>

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

@endsection
