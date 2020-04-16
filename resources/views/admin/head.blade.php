    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicons -->
    <link href="{{URL::asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('assets/admin-lte/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin-lte/dist/css/adminlte.min.css') }}">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ URL::asset('assets/admin-lte/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Bootstrap Switch -->
    <!-- <script src="{{ URL::asset('assets/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script> -->
    <script type="text/javascript">
        var systemURL = "{{ URL::asset('assets/plugin/') }}/";
    </script>