@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="page-content page-home">
        <div class="section-home" data-aos="fade-up">
            <div class="container">
            <div class="row align-items-center row-home">
                <div class="col-lg-6 text-center">
                <img src="{{ asset('images/home-pict.png') }}" alt="" class="w-100 mb-4 mb-lg-none" />
                </div>
                <div class="col-lg-5 ml-5">
                <h2> Upload karya <br />tulis terbaikmu!
                </h2>
                <p>Upload karya tulismu agar dapat bermanfaat bagi orang lain</p>
                <a href="{{ url('collection') }}" class="btn btn-success btn-block mt-4 w-75">Lihat Karya tulis</a>
                </div>
            </div>
            </div>
        </div>
        </div>
@endsection
