@extends('dashboard.layouts.authorisation')
@section('title', 'Verify Email')
@section('content')
    <div class="auth-logo">
        <a href="#"><img src="{{ asset('assets/img/logo-auth.png') }}" alt="Formadiksi Polinema"></a>
    </div>
    <h1 class="auth-title">Verify Email</h1>
    <p class="auth-subtitle mb-5">Please verify your email address by clicking the link in the email we sent you.</p>
    @if (session('status') == 'verification-link-sent')
        <div class="text-success fs-4">
            A new email verification link has been emailed to you!
        </div>
    @endif
    <form action="{{ route('verification.send') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Resend Email</button>
    </form>
@endsection