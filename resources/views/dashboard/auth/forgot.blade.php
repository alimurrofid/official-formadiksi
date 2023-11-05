@extends('dashboard.layouts.authorisation')
@section('title', 'forgot')
@section('content')
    <div class="auth-logo">
        <a href="#"><img src="{{ asset('assets/img/logo-auth.png') }}" alt="Formadiksi Polinema"></a>
    </div>
    <h1 class="auth-title">Forgot Password</h1>
    <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>
    @if (session('status'))
        <div class="text-success mb-4">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input name="email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror"
                placeholder="Email" value="{{old('email')}}" autofocus>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input name="name" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror"
                placeholder="Name" value="{{old('name')}}" autofocus>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Log in</a>.
        </p>
    </div>
@endsection
