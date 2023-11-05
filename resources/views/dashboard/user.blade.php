@extends('dashboard.layouts.app')
@section('title', 'User')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Users</h3>
                    <p class="text-subtitle text-muted">User data is all data from Users.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data User
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table data User</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Discover the User data hub on our web page, where individuals unite, ideas flourish, and collective growth thrives."
                    </p>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 ms-auto">
                            <form method="GET">
                                <div class="input-group mb-3">
                                    <input name="search" type="text" class="form-control" placeholder="Search"
                                        value="{{ request('search') }}">
                                    <button type="submit" class="input-group-text bg-primary"><i
                                            class="bi bi-search mb-2 text-light"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- table -->
                <div class="table-responsive px-4">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <td>
                                        {{ $index + $users->firstItem() }}
                                    </td>
                                    <td>{{ $user->name }}
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->email_verified_at != null)
                                            <div class="badge rounded-pill bg-success">Verified</div>
                                        @else
                                            <div class="badge rounded-pill bg-warning">Unverified</div>
                                        @endif
                                    </td>
                                    <td>
                                        <button onclick="confirmDelete({{ $user->id }})"
                                            class="btn icon btn-danger m-1"><i class="bi bi-trash"></i></button>
                                        <form id="delete-form-{{ $user->id }}"
                                            action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="w-100 text-danger fs-5 fw-bold text-center">
                                        Data Not Found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- table -->
                <div class="p-4 pagination pagination-primary justify-content-end">
                    {{ $users->withQueryString()->links() }}
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
