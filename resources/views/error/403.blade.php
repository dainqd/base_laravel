@extends('admin.layouts.master')
@section('title')
    Forbidden 403
@endsection
@section('content')
    <div class="container">

        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>403</h1>
            <h2>Forbidden.</h2>
            <a class="btn" href="#">Back to home</a>
            <img src="{{ asset('admin/img/not-found.svg') }}" class="img-fluid py-5" alt="Page Not Found">
            <div class="credits">
                Designed by <a href="#">BootstrapMade</a>
            </div>
        </section>

    </div>
@endsection
