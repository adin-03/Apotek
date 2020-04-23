<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 11:51:40 GMT -->
<head>
    @include('templates.partials.admin._head')
</head>
<body>
<!-- loader Start -->

<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div class="container sign-in-page-bg mt-5 p-0">
        <div class="row no-gutters">
            <div class="col-md-6 text-center">
                <div class="sign-in-detail text-white">

                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="{{asset('assets/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/images/login/2.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/images/login/3.png')}}" class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <div class="sign-in-from">
                    <h1 class="mb-0">Sign in</h1>
                    <p>Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="email"
                                   placeholder="Enter email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <a href="{{ route('password.request') }}" class="float-right ">Forgot password?</a>
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="password"
                                   placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('templates.partials.admin._script')
</body>

<!-- Mirrored from iqonic.design/themes/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 11:51:42 GMT -->
</html>