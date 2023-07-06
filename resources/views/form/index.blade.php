@extends('layouts.custom')
@section('title', 'Form')
@section('content')

<nav class="navbar navbar-light">
    <div class="container d-block">
        <a href="{{route('dashboard.passion')}}"><i class="bi bi-chevron-left"></i></a>
        <a class="navbar-brand ms-4" href="{{route('dashboard.passion')}}">
            <img src="assets/images/logo/logo.svg">
        </a>
    </div>
</nav>

    <div class="card-header">
        <h4 class="card-title">Form passion</h4>
    </div>
    <div class="card-body">
        <p> Uncover Your Extraordinary Potential, Discover Your Hidden Talents!</p>

        <form method="POST" action="">
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Nama</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Anak Baik">
            </div>
        
            <div class="form-group">
                <label for="birth" class="form-label">Tanggal Lahir</label>
                <input name="birth" type="text" class="form-control" id="birth" placeholder="Malang, 29 Februari 2023">
            </div>
            <div class="form-group">
                <label for="phone_number" class="form-label">Whatsapp</label>
                <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="081234567890">
            </div>
            <div class="form-group">
                <label for="nim" class="form-label">NIM</label>
                <input name="nim" type="text" class="form-control" id="nim" placeholder="2141729080">
            </div>
            <div class="col-md-6 mb-4">
                <label class="form-label">Jurusan</label>
                <fieldset class="form-group">
                    <select class="form-select" id="basicSelect">
                        <option>Teknologi Informasi</option>
                        <option>Desain Komunikasi Visual</option>
                        <option>Desain Produk</option>
                        <option>Manajemen Informatika</option>
                        <option>Manajemen Pemasaran</option>
                    </select>
                </fieldset>
            </div>
            <div class="form-group">
                <label for="prodi" class="form-label">Program Studi</label>
                <input name="prodi" type="text" class="form-control" id="prodi" placeholder="D-IV Tambal Ban">
            </div>
            <div class="form-group">
                <label for="interest" class="form-label">Minat dan bakat</label>
                <input name="interest" type="text" class="form-control" id="interest" placeholder="Ngelas, Nambal, Turuan">
            </div>
         

        </form>
    </div>

    
@endsection