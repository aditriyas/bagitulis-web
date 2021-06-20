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
          <h2 class="dashboard-title">Collections</h2>
          <p class="dashboard-subtitle">People's writings</p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              {{-- <a href="{{ route('member.product.create') }}" class="btn btn-success">Add New File</a> --}}
            </div>
          </div>
          <div class="row mt-4">
              @foreach($files as $file)
                <div class="col-lg-3 col-md-6 col-sm-12 my-1">
                    <a class="card card-dashboard-product d-block" href="{{ route('member.product.show', ['id' => $file->id ]) }}">
                        <div class="card-body">
                            <img src="{{ asset('storage/thumbnails/'.$file->thumbnail)}}" alt="" class="w-100 mb-2" />
                            <div class="product-title">
                                <blockquote class="blockquote">
                                    <strong class="mb-1">
                                        {{ Str::words($file->title, 5, ' ...') }}
                                    </strong>
                                    <footer class="blockquote-footer mt-0">{{ $file->author }}</footer>
                                </blockquote>
                            </div>
                        </div>
                    </a>
                </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection



