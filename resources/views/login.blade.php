@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <section class="login-main">
        <div class="column">
            <div class="c-card  after-layer before-layer">
                <div class="c-card-wrap">
                    <div class="form-header text-center">
                        <h1>Admin Login</h1>
                    </div>
                     @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif
                    @if (session('error'))
                        <p style="color: red;">{{ session('error') }}</p>
                    @endif

                    <div class="login-form">
                        <form action="{{ route('login.submit') }}" method="POST" id="loginForm">
                        @csrf
                            <div class="form-group mb-3">
                                <label>Email address</label>
                                <input name="email" type="text"
                                    class="form-control " placeholder="Enter your email" value="">
                                </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                            <input name="password" type="password"
                                    class="form-control " placeholder="Enter your password" value="">
                                </div>
                            {{-- <div class="form-group d-flex align-items-center justify-content-between mb-3"> --}}
                                {{-- <div class="form-check">
                                    <input name="rememberme" class="form-check-input" type="checkbox"
                                        id="flexCheckDefault" value="">
                                        <label class="form-check-label"
                                        for="flexCheckDefault">Remember me?</label>
                                    </div> --}}
                                    {{-- <a class="decoration" href="/forgot-password">Forgot password?</a> --}}
                            {{-- </div> --}}
                            <div class="form-group mt-4"><button type="submit" class="btn btn-primary w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection