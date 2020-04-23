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
                    <h1 class="mb-0">Confirmation</h1>
                    <p>Enter your email address and password to access admin panel.</p>
                    <form class="mt-4">
                        <div class="form-group">
                            <label for="exampleInputUsername">Username</label>
                            <input type="username" class="form-control mb-0" id="exampleInputUsername" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirmation Password</label>
                            <input type="confirmation_password" class="form-control mb-0" id="exampleInputConfirmstion" placeholder="Password">
                        </div>
                        <div class="d-inline-block w-100">
                            <button type="submit" class="btn btn-primary float-right">Reset</button>
                        </div>
                        <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>

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