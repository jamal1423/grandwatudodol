@extends('panel.layout.login')
@section('content')
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4">
                        <div class="auth-logo text-center mb-4"><img src="{{ asset('panel/images/logo.png') }}" alt=""></div>
                        <h1 class="mb-3 text-18">Sign In</h1>
                        <form method="post" action="/loginpanel">
                            @csrf
                            <div class="form-group">
                                <label for="email">Username</label>
                                <input class="form-control form-control-rounded" id="email" name="username" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control form-control-rounded" id="password" name="password" type="password">
                            </div>
                            <button type="submit" class="btn btn-rounded btn-primary btn-block mt-2">Sign In</button>
                        </form>
                        <!-- <div class="mt-3 text-center">
                            <a class="text-muted" href="#">
                            <u>Forgot Password?</u>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-md-6 text-center" style="background-size: cover;background-image: url(../../dist-assets/images/photo-long-3.jpg)">
                    <div class="pr-3 auth-right"><a class="btn btn-rounded btn-outline-primary btn-outline-email btn-block btn-icon-text" href="signup.html"><i class="i-Mail-with-At-Sign"></i> Sign up with Email</a><a class="btn btn-rounded btn-outline-google btn-block btn-icon-text"><i class="i-Google-Plus"></i> Sign up with Google</a><a class="btn btn-rounded btn-block btn-icon-text btn-outline-facebook"><i class="i-Facebook-2"></i> Sign up with Facebook</a></div>
                </div> -->
            </div>
        </div>
    </div>
@endsection