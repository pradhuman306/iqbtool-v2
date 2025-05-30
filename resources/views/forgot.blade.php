@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <section class="login-main">
        <div class="column after-layer before-layer">
            <div class="c-card">
                <div class="c-card-wrap">
                    <div class="form-header text-center">
                        <h1>Reset Password</h1>
                        <p>Enter the email address and we'll send you a link to reset password.</p>
                    </div>
                    <div class="login-form">
                        <form action="" id="loginForm">
                            <div class="form-group mb-3">
                                <label>Email address</label>
                                <input name="email" type="text"
                                    class="form-control input-error" placeholder="Enter your email" value="">
                                </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary w-100">Send</button>
                            </div>
                            <div class="form-group">
                                <p class="text-center inline-link">Back to <a class="btn btn-inline" href="/admin">Login
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10"
                                            fill="none">
                                            <path d="M1 0.722107L5 4.72211L1 8.72211" stroke="#3079ff" stroke-width="1.2">
                                            </path>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection