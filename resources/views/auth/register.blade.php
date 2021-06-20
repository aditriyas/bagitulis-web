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
  <link href="{{asset('vendor/jquery-toastr/toastr.min.css')}}" rel="stylesheet" />
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

  <div class="page-content page-auth mt-8" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <form action="{{ route('register') }}" method="post" class="mt-3" id="form-register">
                @csrf
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus />
                @error('name')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
            </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                @error('email')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" />
                @error('password_confirmation')
                    <small class="text-muted">{{ $message }}</small>
                @enderror
            </div>
              <button type="submit" class="btn btn-success btn-block mt-4">Sign Up Now</button>
              <a href="{{ route('login') }}" class="btn btn-secondary btn-block mt-2">Back to Sign In</a>
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
  {{-- <script src="{{asset('vendor/jquery/jquery.slim.min.js')}}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-toastr/toastr.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    $(document).ready(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "2000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $("#form-register").submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "/register",
                data: $(this).serialize(),
                dataType: "JSON",
                statusCode: {
                    201: function() {
                        window.location='/register-success?success=true'
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    if (xhr.status == 422) {
                        var response = xhr.responseJSON.errors
                        $.each(response, function (field, msg) {
                            $.each(msg, function (key, value) {
                                toastr.error(value)
                            });
                        });
                    } else {
                        toastr.error('Error', errorThrown)
                    }
                }
            });
        });
    });
  </script>
  <script src="{{asset('script/navbar-scroll.js')}}"></script>
</body>

</html>
