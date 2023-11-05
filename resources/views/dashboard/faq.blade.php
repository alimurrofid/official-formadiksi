@extends('dashboard.layouts.app')
@section('title', 'FAQ')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data FAQ</h3>
                    <p class="text-subtitle text-muted">Data FAQ is all data from user FAQ.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data FAQ
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data FAQ</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Discover our web page's Frequently Asked Questions (FAQ) section, where we address common inquiries and provide informative answers to help you navigate through any uncertainties."
                    </p>

                    <!-- Button trigger for Create Form Modal -->
                    <button type="button" class="btn icon icon-left btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createFormModal">
                        <i class="bi bi-envelope-plus"></i> Add Faq
                    </button>

                    <!-- Create Form Modal -->
                    <div class="modal fade text-left" id="createFormModal" tabindex="-1" role="dialog"
                        aria-labelledby="faqCreateModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="faqCreateModal">Create FAQ </h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('faq.store') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Pertanyaan</label>
                                            <input name="question" type="text" class="form-control"
                                                placeholder="Pertanyaan">
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="form-label">Jawaban</label>
                                            <textarea name="answer" type="text" class="form-control"placeholder="Jawaban"></textarea>
                                        </div>
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
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faq as $f)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $f->question }}</td>
                                    <td>{{ $f->answer }}</td>
                                    <td>
                                        <button type="button" class="btn icon icon-left btn-primary m-1" data-bs-toggle="modal"
                                            data-bs-target="#editFormModal{{ $f->id }}"><i class="bi bi-pencil-square"></i></button>

                                        <!-- Edit Form Modal -->
                                        <div class="modal fade text-left" id="editFormModal{{ $f->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="faqEditModal{{ $f->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="faqeditModal{{ $f->id }}">Edit FAQ </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form id="edit-form-{{ $f->id }}" method="POST" action="{{ route('faq.update', $f->id) }}">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="email" class="form-label">Pertanyaan</label>
                                                                <input name="question" type="text" class="form-control"
                                                                    placeholder="Pertanyaan" value="{{ $f->question }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="form-label">Jawaban</label>
                                                                <textarea name="answer" type="text" class="form-control"placeholder="Jawaban" value="{{ $f->answer }}">{{ $f->answer }}</textarea>
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
                                                                data-id="{{ $f->id }}" data-bs-dismiss="modal" onclick="confirmEdit({{ $f->id }})">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Submit</span>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Form Modal -->

                                        <form id="delete-form-{{ $f->id }}"
                                            action="{{ route('faq.destroy', $f->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn icon btn-danger m-1 delete-btn"
                                                data-id="{{ $f->id }}"
                                                onclick="confirmDelete({{ $f->id }})">
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
                        'File Anda telah dihapus.',
                        'success'
                    )
                }
            });
        }

        function confirmEdit(id) {
            Swal.fire({
                title: 'Anda yakin?',
                text: 'Data akan diupdate!',
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
                    Swal.fire(
                        'Diupdate!',
                        'File Anda telah diupdate.',
                        'success'
                    )
                }
            });
        }
    </script>

@endsection
