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
                    <a href="{{ route('faq.create') }}" class="btn icon icon-left btn-primary"><i
                            data-feather="user-plus"></i>
                        Add Data</a>
                </div>

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faq as $f)
                                <tr>
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
