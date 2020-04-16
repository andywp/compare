<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- load head-->
    @include('admin/head')
    <!-- jQuery -->
    <script src="{{ URL::asset('/assets/admin-lte/plugins/jQuery/jquery.min.js') }}"></script>
</head>

<!-- Header -->
@include('admin/header')
<!-- Sidebar -->
@include('admin/sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL::asset('')}}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!-- Your Page Content Here -->
        @yield('content')
    </section>
    <!-- /.content -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y')}} <a taget="_blank" href="https://www.qwords.com/">DEV Qwords</a>.</strong> All rights
    reserved.
</footer>
@include('admin/footer')