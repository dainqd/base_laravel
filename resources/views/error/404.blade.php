@extends('admin.layouts.master')
@section('title')
    Pages / Not Found 404
@endsection
@section('content')
    <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <h2>The page you are looking for doesn't exist.</h2>
            <a class="btn" href="#">Back to home</a>
            <img src="{{ asset('admin/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">
            <div class="credits">
                Designed by <a href="#">BootstrapMade</a>
            </div>
        </section>

    </div>
@endsection
