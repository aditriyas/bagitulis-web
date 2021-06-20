<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bagitulis - Share Your Writings</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{asset('style/main.css')}}" rel="stylesheet" />
  <link rel="icon" type="image/png" href="{{asset('images/logo-title.svg')}}" />
</head>

<body>
  <nav class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      " data-aos="fade-down">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{asset('images/navbar-logo.svg')}}" class="w-25" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('collection') }}">Collection</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-5">
            <form action="{{ route('login') }}" method="post" class="mt-3">
                @csrf
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="email" class="form-control w-100 @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                @error('email')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control w-100 @error('password') is-invalid @enderror" />
                @error('password')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
              </div>
              <button type="submit" class="btn btn-success btn-block mt-4 w-100">Sign In</button>
              <a href="{{ route('register') }}" class="btn btn-secondary btn-block mt-2 w-100">Sign Up</a>
            </form>
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
  <script src="/vendor/jquery/jquery.slim.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="/script/navbar-scroll.js"></script>
</body>

</html>
