@extends('dashboard.layouts.app')
@section('title', 'Sejarah')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Sejarah</h3>
                    <p class="text-subtitle text-muted">Divisi data is all data from Divisis.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Sejarah
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Sejarah</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Welcome to our web page showcasing the Divisi data of our boarding house, where comfort
                        and convenience come together in one place."
                    </p>
                    <a href="{{ route('history.create') }}" class="btn icon icon-left btn-primary"><i class="bi bi-journal-plus"></i>
                        Add Data</a>
                </div>

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($histories as  $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $history->title }}</td>
                                    <td>{!! $history->body !!}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $history->image) }}" alt="" width="100px">
                                    <td>
                                        <a href="{{ route('history.show', $history->id) }}"
                                            class="btn icon btn-primary m-1" title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('history.edit', $history->id) }}"
                                            class="btn icon btn-success m-1" title="Edit"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('history.destroy', $history->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn icon btn-danger m-1" title="Delete"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- table -->
            </div>



        </section>
    </div>

@endsection
