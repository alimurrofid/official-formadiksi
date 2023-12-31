@extends('dashboard.layouts.app')
@section('title', 'Workplan')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Workplan</h3>
                    <p class="text-subtitle text-muted">Workplan data is all data from Workplans.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Workplan
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data Workplan</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Showcasing the Workplan data table, where strategic planning and execution intersect, paving the way for successful outcomes and achievements."
                    </p>
                    <a href="{{route('workplan.create')}}" class="btn icon icon-left btn-primary"><i
                            class="bi bi-calendar2-plus"></i>
                        Add Workplan</a>


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
                            @foreach ($workplans as $programkerja => $workplan)
                                <tr>
                                    <td>{{ $programkerja + $workplans->firstitem() }}</td>
                                    <td>{{ $workplan->title }}</td>
                                    <td>{!! $workplan->excerpt !!}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $workplan->image) }}" alt="" width="100px">
                                    <td>
                                        <a href="{{ route('workplan.show', $workplan->slug) }}" class="btn icon btn-primary m-1"
                                            title="Detail"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('workplan.edit', $workplan->slug) }}" class="btn icon btn-success m-1"
                                            title="Edit"><i class="bi bi-pencil"></i></a>
                                        <form id="delete-form-{{ $workplan->slug }}"
                                            action="{{ route('workplan.destroy', $workplan->slug) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn icon btn-danger m-1 delete-btn"
                                                onclick="confirmDelete('{{ $workplan->slug }}')" title="Delete">
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
                    {{ $workplans->links() }}
                </div>
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
