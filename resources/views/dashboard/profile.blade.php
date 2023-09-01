@extends('dashboard.layouts.app')
@section('title', 'Profile')
@section('content')
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Profile</h4>
                            <div class="avatar avatar-xl me-3">
                                <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="" srcset="">
                            </div>
                            <h4 class="card-title mt-3">{{ auth()->user()->name }}
                                <span class="text-secondary">/{{ auth()->user()->role }}</span>
                            </h4>
                            <form class="form form-vertical mt-4" method="POST"
                                action="{{ route('user-profile-information.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Name</label>
                                                <input type="text" id="first-name-vertical"
                                                    class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror"
                                                    name="name" placeholder="Name" value="{{ auth()->user()->name }}">
                                                @error('name', 'updateProfileInformation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email"
                                                    class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror"
                                                    name="email" placeholder="Email" value="{{ auth()->user()->email }}" readonly>
                                                @error('email', 'updateProfileInformation')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Save Change</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Password</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{ route('user-password.update') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="current-password">Current Password</label>
                                                <input type="password" id="current-password"
                                                    class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                                    name="current_password" placeholder="Current Password">
                                                @error('current_password', 'updatePassword')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="new-password">New Password</label>
                                                <input type="password" id="new-password"
                                                    class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                                    name="password" placeholder="New Password">
                                                @error('password', 'updatePassword')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="confirm-password">Password Confirmation</label>
                                                <input type="password" id="confirm-password" class="form-control"
                                                    name="password_confirmation" placeholder="Password Confirmation">
                                                @error('password_confirmation', 'updatePassword')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-danger me-1 mb-1">Change
                                                Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
@endsection
