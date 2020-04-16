<?php
$url = Request::segment(2);
$urlDua = Request::segment(3);
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/')}}" class="brand-link">
        <img src="{{ URL::asset("assets/img/qw.png") }}" alt="Qwords" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Compare Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{URL::asset('assets/img/apple-touch-icon.png')}}" class="img-circle elevation-2" style="height: 40px; width: 40px; object-fit: cover;" alt="">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $user->name }} </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('admin/') }}" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/product') }}" class="nav-link <?= ($url == 'sop' && $urlDua == '') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Manage SOP</p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link active">
                   <i class="fa fa-laptop"></i>
                    <span>Product</span>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                    <li><a href="general.html" class="nav-link" ><i class="fa fa-circle-o"></i> Hosting</a></li>
                        <li class="nav-item" ><a href="icons.html" class="nav-link" ><i class="fa fa-circle-o"></i> Server</a></li>
                        <li class="nav-item" ><a href="buttons.html" class="nav-link" ><i class="fa fa-circle-o"></i> SSL</a></li>
                        <li class="nav-item" ><a href="sliders.html" class="nav-link" ><i class="fa fa-circle-o"></i> Diego VPN</a></li>
                    </ul>
                </li>

  

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>