<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>

<body>

<!-- ======= Header ======= -->
@include('admin.layouts.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('admin.layouts.sidebar')
<!-- End Sidebar-->

@include('sweetalert::alert')

<!-- ======= Main ======= -->
<main id="main" class="main">

    @yield('content')

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('admin.layouts.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('admin/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('admin/js/main.js') }}"></script>

</body>

</html>
