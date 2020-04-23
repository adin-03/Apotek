<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 11:49:29 GMT -->
@include('templates.partials.admin._head')
<body class="sidebar-main-menu">
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    @include('templates.partials.admin._sidebar')

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <!-- TOP Nav Bar -->
        @include('templates.partials.admin._navbar')
        <!-- TOP Nav Bar END -->
        <div class="container-fluid">
            @yield('content')

        </div>

       @include('templates.partials.admin._footer')
    </div>
        <!-- Footer END -->
    </div>
</div>
<!-- Wrapper END -->

@include('templates.partials.admin._script')
</body>

<!-- Mirrored from iqonic.design/themes/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 11:50:41 GMT -->
</html>
