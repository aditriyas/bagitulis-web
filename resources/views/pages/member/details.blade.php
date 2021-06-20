<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bagitulis - Share Your Writings</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{ asset('style/main.css')}}" rel="stylesheet" />
  <link rel="icon" type="image/png" href="{{asset('images/logo-title.svg')}}" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('images/navbar-logo.svg')}}" class="w-25" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="btn btn-primary" href="{{ url()->previous() }}" role="button">Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-content page-products">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="{{ asset('storage/thumbnails/'.$file->thumbnail) }}" alt="" class="mb-4 w-100 rounded" />
            <div class="products-text">
              <strong>{{ $file->title }}</strong>
            </div>
            <div class="products-price mt-2">by {{ $file->author }}</div>
            <a href="{{ asset('storage/files/'.$file->file) }}" target="_blank" class="btn btn-success w-50 mt-3">Download</a>

            @if (Auth::user()->id == $file->user_id)
                <a href="{{ route('member.product.edit', ['id' => $file->id]) }}" class="btn btn-warning w-50 mt-3">Edit</a>
                <a href="{{ route('member.product.destroy', ['id' => $file->id]) }}" class='btn btn-danger w-50 mt-1' onclick="event.preventDefault();
                        document.getElementById('delete-form').submit();">Hapus</a>

                <form id="delete-form" action="{{ route('member.product.destroy', ['id' => $file->id]) }}" method="POST" class="d-none">
                    @csrf
                    @method('delete')
                </form>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            2021 Copyright Bagitulis. All Rights Reserved <br />
            Aditya Triyaswanda
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.slim.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="{{asset('script/navbar-scroll.js')}}"></script>
</body>

</html>
