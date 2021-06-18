@extends('layouts.master')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
            </div>
            <div class="dashboard-content">
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <h1 class="display-6">Selamat Datang, Admin!</h1>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
