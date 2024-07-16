@extends('mainLayout')

@section('page-title','Account Login')

@section('auth-content')
<!-- <div class="container vh-100">
    <div class="row lh-base">
        <div class="col-4"></div>
        <div class="col-4" style="font-size: 1.6rem; background-color: black; color: white;">User Login</div>
        <div class="col-4"></div>
    </div>


    <div class="row">
        <div class="col-4">&nbsp;</div>
        <div class="col-4" style="border: 1px solid grey;">
            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                <div class="formgroupp">
                    <label class="auth-labels">Username</label>
                    <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control border border-dark">
                    @error('name')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="formgroup">
                    <label class="auth-labels">Password</label>
                    <input type="password" name="password" required class="auth-textbox form-control border border-dark">
                    @error('password')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-md btn-primary">Login</button>
                    <button type="reset" class="btn btn-md btn-danger">Clear</button>
                </div>
                <div class="text-center">
                    Not a user? Register <a href="{{ route('register') }}">Here</a>.
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div> -->

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100">
        <div class="col-lg-4 offset-lg-4">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white" style="font-size: 1.6rem;">
                    User Login
                </div>
                <div class="card-body bg-light">
                    <form method="POST" action="{{ route('login') }}" class="form">
                        @csrf
                        <div class="mb-3">
                            <label class="auth-labels form-label">Username</label>
                            <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control border border-primary">
                            @error('name')
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
                        <div class="text-center mb-3">
                            <button type="submit" class="btn btn-success btn-md me-2">Login</button>
                            <button type="reset" class="btn btn-warning btn-md">Clear</button>
                        </div>
                        <div class="text-center">
                            Not a user? Register <a href="{{ route('register') }}">Here</a>.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection