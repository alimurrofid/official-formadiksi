@extends('dashboard.layouts.authorisation')
@section('title', 'login')
@section('content')
    <div class="auth-logo">
        <a href="#"><img src="{{ asset('assets/img/logo-auth.png') }}" alt="Formadiksi Polinema"></a>
    </div>
    <h1 class="auth-title">Log in.</h1>
    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

    <form action="{{ route('login') }}" method="POST">
        @csrf
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
        <div class="form-group position-relative has-icon-left mb-4">
            <input name="password" type="password"
                class="form-control form-control-xl @error('password') is-invalid @enderror" placeholder="Password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign
                up</a>.</p>
        <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.</p>
    </div>
@endsection
