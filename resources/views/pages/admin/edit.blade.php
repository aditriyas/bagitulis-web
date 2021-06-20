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
          <h2 class="dashboard-title">Update Writing</h2>
          <p class="dashboard-subtitle">Upload Your Writings</p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-12">
              <form action="{{ route('admin.product.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ old('id', $file->id) }}">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Title</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" aria-describedby="name" name="title" value="{{ old('name', $file->title) }}"/>
                          @error('name')
                            <small class="text-muted">
                                {{$message}}
                            </small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Author</label>
                          <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" aria-describedby="name" name="author" value="{{ old('author', $file->author) }}"/>
                          @error('author')
                            <small class="text-muted">
                                {{$message}}
                            </small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <textarea name="description" id="" cols="30" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $file->description) }}</textarea>
                          @error('description')
                            <small class="text-muted">
                                {{$message}}
                            </small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="thumbnails">Thumbnails</label>
                          <input type="file" class="form-control pt-1 @error('thumbnail') is-invalid @enderror" accept=".jpg, .png" name="new-thumbnail"/>
                          @error('thumbnail')
                            <small class="text-muted">
                                {{$message}}
                            </small>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="thumbnails">File</label>
                          <input type="file" class="form-control pt-1 @error('file') is-invalid @enderror" accept=".pdf" id="writingFile" name="new-file"/>
                          @error('file')
                            <small class="text-muted">
                                {{$message}}
                            </small>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <button type="submit" class="btn btn-success btn-block px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
