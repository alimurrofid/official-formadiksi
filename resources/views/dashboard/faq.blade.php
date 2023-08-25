@extends('dashboard.layouts.app')
@section('title', 'FAQ')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data FAQ</h3>
                    {{-- <p class="text-subtitle text-muted">Member data is all data from members.</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data member
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
                        "Welcome to our web page showcasing the member data of our boarding house, where comfort
                        and convenience come together in one place."
                    </p>
                    {{-- <a href="{{ route('faq.create') }}" class="btn icon icon-left btn-primary"><i
                            data-feather="user-plus"></i>
                        Add Data</a> --}}

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
                                        <a href="{{ route('faq.edit', $f->id) }}" class="btn icon btn-warning m-1"
                                            title="Edit"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('faq.destroy', $f->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn icon btn-danger m-1">
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
@endsection
