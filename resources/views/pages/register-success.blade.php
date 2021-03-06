<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bagitulis - Share Your Writings</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('style/main.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{asset('images/logo-title.svg')}}" />
  </head>

  <body>
    <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="{{asset('images/success-pict.svg')}}" alt="" class="mb-4 w-25" />
              <h2>Berhasil Daftar!</h2>
              <p>
                Lanjutkan membaca karya tulis atau upload <br />
                lagi karya tulis-mu!
              </p>
              <a href="{{ route('home') }}" class="btn btn-success w-50 mt-3">Home</a>
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
