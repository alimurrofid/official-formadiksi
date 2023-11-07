@extends('dashboard.layouts.app')
@section('title', 'History')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data History</h3>
                    <p class="text-subtitle text-muted">Divisi data is all data from Histories.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data History
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data History</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Trace the footsteps of our journey on our web page's History data table, as stories of resilience, growth, and transformation come to life."
                    </p>
                    <a href="{{ route('history.create') }}" class="btn icon icon-left btn-primary"><i class="bi bi-journal-plus"></i>
                        Add Data</a>
                </div>

                <!-- table -->
                <div class="table-responsive px-4">
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
                                        <button onclick="confirmDelete({{ $history->id }})"
                                            class="btn icon btn-danger m-1"><i class="bi bi-trash"></i></button>
                                        <form id="delete-form-{{ $history->id }}"
                                            action="{{ route('history.destroy', $history->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
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
    </script>

@endsection
