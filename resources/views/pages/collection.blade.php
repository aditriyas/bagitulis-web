@extends('layouts.app')

@section('title')
    Collection Page
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-new-product">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h5>Writings</h5>
                </div>
            </div>
            <div class="row">
                @foreach($files as $file)
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-products d-block" href="{{ route('collection.show', ['id' => $file->id]) }}">
                            <div class="products-thumbnail">
                                <div class="products-image" style="background-image: url('{{ asset('thumbnails/'.$file->thumbnail) }}');"></div>
                            </div>
                            <div class="products-text">{{$file->title}}</div>
                            <div class="products-price">by {{ $file->author }}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
</div>
</section>
@endsection
