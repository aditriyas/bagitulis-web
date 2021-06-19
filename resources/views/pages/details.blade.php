@extends('layouts.app')

@section('title')
    Detail Page
@endsection

@section('content')
<div class="page-content page-products">
    <div class="section-success" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-6 text-center">
                    <a href="#">
                        <img src="{{asset('thumbnails/'.$file->thumbnail)}}" alt="" class="mb-4 w-100 rounded" />
                    </a>
                    <div class="products-text">
                        {{ $file->title }}
                    </div>
                    <div class="products-price mt-2">by {{ $file->author }}</div>
                    <a href="{{ asset('files/'.$file->file) }}" target="_blank" class="btn btn-success w-50 mt-3">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
