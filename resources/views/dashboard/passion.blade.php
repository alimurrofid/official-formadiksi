@extends('dashboard.layouts.app')
@section('title', 'Passion')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data member</h3>
                    <p class="text-subtitle text-muted">Member data is all data from members.</p>
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
                    <h4 class="card-title">Table data member</h4>
                </div>
                <div class="card-body">
                    <p>
                        "Welcome to our web page showcasing the member data of our boarding house, where comfort
                        and convenience come together in one place."
                    </p>
                    <a href="{{route('passion-create')}}" class="btn icon icon-left btn-primary"><i data-feather="user-plus"></i>
                        Add Data</a>
                </div>

                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>EMAIL</th>
                                <th>NAMA</th>
                                <th>TANGGAL LAHIR</th>
                                <th>WHATSAPP</th>
                                <th>NIM</th>
                                <th>JURUSAN</th>
                                <th>PROGRAM STUDI</th>
                                <th>MINAT DAN BAKAT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td >1</td>
                                <td>user@gmail.com</td>
                                <td >User</td>
                                <td>Malang, 27 Februari 2003</td>
                                <td>081216993789</td>
                                <td>2141720186</td>
                                <td>Sastra Mesin</td>
                                <td>D-IV Tambal Ban</td>
                                <td>Menjadi mekanik</td>
                                <td>
                                    <a href="#" class="btn icon btn-primary m-1" title="Detail"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn icon btn-warning m-1" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="btn icon btn-danger m-1" title="Edit"><i class="bi bi-trash"></i></a>
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
