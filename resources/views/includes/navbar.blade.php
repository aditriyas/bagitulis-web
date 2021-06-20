    <nav
        class="
            navbar navbar-expand-lg navbar-light navbar-store
            fixed-top
            navbar-fixed-top
        "
        data-aos="fade-down"
        >
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/navbar-logo.svg')}}" class="w-25" alt="" />
            </a>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home </a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('collection') }}">Collection</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Sign In</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class='btn btn-danger nav-link px-4 text-white' onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
            </div>
        </div>
        </nav>
