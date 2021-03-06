<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>Bagitulis</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="{{ asset('style/main.css') }}" rel="stylesheet" />
  <link rel="icon" type="image/png" href="{{ asset('images/logo-title.svg')}}" />
  @stack('css')
</head>

<body>
  <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
      &laquo; Menu
    </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto d-none d-lg-flex">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img src="{{ asset('images/icon-user.png')}}" alt="" class="rounded-circle mr-2 profile-picture" />
            Hi, {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('home') }}">Home</a>
            <a class="dropdown-item" href="{{ route('collection') }}">Collections</a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class='dropdown-item' onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <!-- Mobile Menu -->
      <ul class="navbar-nav d-block d-lg-none mt-3">
        <li class="nav-item">
          <a class="nav-link" href="#"> Hi, {{ Auth::user()->name }} </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-inline-block" href="{{ route('home') }}"> Home </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="page-dashboard">
    <div class="d-flex" id="wrapper" data-aos="fade-right">

      <!-- Sidebar -->
      @include('includes.sidebar')

      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      @yield('content')

      <!-- /#page-content-wrapper -->

    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.slim.min.js')}}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  @stack('js')



<script>
    AOS.init();
    // Menu Toggle
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>

</html>
