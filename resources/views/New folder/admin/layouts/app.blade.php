<!DOCTYPE html>
<html lang="en" data-menu="flush-menu" data-nav-size="nav-default">

<!-- Mirrored from revel-html.codebasket.xyz/dashboard-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 07:30:41 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product | Revel eCommerce Admin</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/jquery.uploader.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/bootstrap-material-datetimepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/material-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dashboad/assets/css/style.css') }}">
    <link rel="stylesheet" id="primaryColor" href="{{ asset('admin/dashboad/assets/css/orange-color.css') }}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>

<body class="body-padding body-p-top light-theme">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    <!-- main content start -->
    <div class="main-content">
        @yield('content')

        @include('admin.layouts.footer')
    </div>
    <!-- main content end -->

    <script src="{{ asset('admin/dashboad/assets/vendor/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/jquery.uploader.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/selectize.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/js/main.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/js/select2-init.js') }}"></script>
    <script src="{{ asset('admin/dashboad/assets/js/add-product.js') }}"></script>
</body>

<!-- Mirrored from revel-html.codebasket.xyz/dashboard-add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jul 2023 07:30:46 GMT -->

</html>
