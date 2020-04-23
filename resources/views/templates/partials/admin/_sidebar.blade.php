<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html">
            <img src="images/logo.png" class="img-fluid" alt="">
            <span>Apotek Cemara</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-more-fill"></i></div>
                    <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                    <a href="{{route('dashboard')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Dashboard</span></a>
                </li>
                <li class="{{Request::is('admin/merk') ? 'active' : ''}}">
                    <a href="{{route('merk.index')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Merk</span></a>
                </li>
                <li class="{{Request::is('admin/obat') ? 'active' : ''}}">
                    <a href="{{route('obat.index')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Data Obat</span></a>
                </li>
                <li class="{{Request::is('admin/transaksi') ? 'active' : ''}}">
                    <a href="{{route('transaksi.index')}}" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Data Transaksi</span></a>
                </li>
                {{--<li>
                    <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                        <li><a href="add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                    </ul>
                </li>--}}
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
