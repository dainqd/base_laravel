<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('ui/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('ui/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('ui/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('ui/css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>

<body>

<!-- ======= Header ======= -->
@include('ui.layouts.header')
<!-- End Header -->

@include('sweetalert::alert')

<!-- ======= Main ======= -->
<main>

    @yield('content')

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
@include('ui.layouts.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('ui/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('ui/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('ui/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('ui/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('ui/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('ui/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('ui/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('ui/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('ui/js/main.js') }}"></script>

</body>

</html>
