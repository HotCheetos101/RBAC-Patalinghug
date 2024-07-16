@extends('mainLayout')

@section('page-title','Account Registration')

@section('auth-content')
<!-- <div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 text-left lh-sm" style="font-size: 1.6rem; background-color: black; color: white;">Register New User</div>
        <div class="col-sm-3"></div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="row">
        <div class="col">
        </div>
        {{-- <div style="border: 1px solid grey;"> --}}
        <div class="col" style="border-top:1px solid grey; border-left:1px solid grey; border-bottom:1px solid grey; ">
            <div>
                <label class="auth-labels">First Name</label>
                <input type="text" name="firstname" value="{{ old('firstname') }}" required class="auth-textbox form-control form-control-sm border border-dark">
                @error('firstname')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="auth-labels">Last Name</label>
                <input type="text" name="lastname" value="{{ old('lastname') }}" required class="auth-textbox form-control form-control-sm border border-dark">
                @error('lastname')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="auth-labels">Username</label>
                <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control form-control-sm border border-dark">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col" style="border-top:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey; ">
            <div>
                <label class="auth-labels">Email</label>
                <input type="email" name="email" class="auth-textbox form-control form-control-sm border border-dark">
                <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input border border-dark">
                <label for="generate_email" class="form-check-label">Generate Email Address</label>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="auth-labels">Password</label>
                <input type="password" name="password" required class="auth-textbox form-control form-control-sm border border-dark">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label class="auth-labels">Confirm Password</label>
                <input type="password" name="password_confirmation" required class="auth-textbox form-control form-control-sm border border-dark">
            </div>
        </div>
        {{-- </div> --}}
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 py-2" style="border-left:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey;">
            <div class="text-center">
                <button type="submit" class="btn btn-md btn-primary">Register</button>
                <button type="reset" class="btn btn-md btn-danger">Clear</button>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </form>
    <div class="col-row text-center">
        <a href="{{ route('home') }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Return to Landing Page</a>
    </div>
</div> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-dark text-white" style="font-size: 1.4rem;">
                    Register New User
                </div>
                <div class="card-body bg-light">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="auth-labels form-label">First Name</label>
                            <input type="text" name="firstname" value="{{ old('firstname') }}" required class="auth-textbox form-control border border-primary">
                            @error('firstname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="auth-labels form-label">Last Name</label>
                            <input type="text" name="lastname" value="{{ old('lastname') }}" required class="auth-textbox form-control border border-primary">
                            @error('lastname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="auth-labels form-label">Username</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control border border-primary">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="auth-labels form-label">Email</label>
                            <input type="email" name="email" class="auth-textbox form-control border border-primary">
                            <div class="form-check">
                                <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input">
                                <label for="generate_email" class="form-check-label auth-labels">Generate Email Address</label>
                            </div>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="auth-labels form-label">Password</label>
                            <input type="password" name="password" required class="auth-textbox form-control border border-primary">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="auth-labels form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" required class="auth-textbox form-control border border-primary">
                        </div>
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-success btn-md me-2">Register</button>
                            <button type="reset" class="btn btn-warning btn-md">Clear</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-light">
                    <a href="{{ route('home') }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Return to Landing Page</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection