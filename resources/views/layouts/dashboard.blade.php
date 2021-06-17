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

    <title>Dashboard - Your Best Marketplace</title>
    
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="/style/main.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/images/logo-title.svg" />
    @stack('addon-style')
  </head>

  <body>
    <nav
      class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
      data-aos="fade-down"
    >
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
        &laquo; Menu
      </button>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="/images/icon-user.png"
                alt=""
                class="rounded-circle mr-2 profile-picture"
              />
              Hi, Rizki
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('home') }}">Home</a>
              <a class="dropdown-item" href="/dashboard-products-update.html"
                >Update Writings</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/">Logout</a>
            </div>
          </li>
        </ul>
        <!-- Mobile Menu -->
        <ul class="navbar-nav d-block d-lg-none mt-3">
          <li class="nav-item">
            <a class="nav-link" href="#"> Hi, Rizki </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-inline-block" href="{{ url('home') }}"> Home </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/navbar-logo.svg" alt="" class="my-4 w-50" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="{{ url('dashboard') }}"
              class="list-group-item list-group-item-action"
              >My Writings</a
            >
            <a
              href="{{ url('dashboard/update') }}"
              class="list-group-item list-group-item-action"
              >Update Writings</a
            >
            <a
              href="{{ url('dashboard/create') }}"
              class="list-group-item list-group-item-action"
              >Create Writings</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>

          @yield('content')
        </div>
    </div>
</div>
        <!-- Bootstrap core JavaScript -->
        @stack('prepend-script')
        <script src="/vendor/jquery/jquery.slim.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        @stack('addon-script')
    </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - Your Best Marketplace</title>
    
    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="style/main.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="/images/logo-title.svg" />
    @stack('addon-style')
  </head>

  <body>
    <nav
      class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
      data-aos="fade-down"
    >
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
        &laquo; Menu
      </button>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="/images/icon-user.png"
                alt=""
                class="rounded-circle mr-2 profile-picture"
              />
              Hi, Rizki
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/index.html">Home</a>
              <a class="dropdown-item" href="/dashboard-products-update.html"
                >Update Writings</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/">Logout</a>
            </div>
          </li>
        </ul>
        <!-- Mobile Menu -->
        <ul class="navbar-nav d-block d-lg-none mt-3">
          <li class="nav-item">
            <a class="nav-link" href="#"> Hi, Rizki </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-inline-block" href="index.html"> Home </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="/images/navbar-logo.svg" alt="" class="my-4 w-50" />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="/dashboard-products.html"
              class="list-group-item list-group-item-action active"
              >My Writings</a
            >
            <a
              href="/dashboard-products-update.html"
              class="list-group-item list-group-item-action"
              >Update Writings</a
            >
            <a
              href="/dashboard-products-create.html"
              class="list-group-item list-group-item-action"
              >Create Writings</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>

          @yield('content') --}}
