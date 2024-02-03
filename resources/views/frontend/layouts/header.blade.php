<div class="container-fluid mx-0 px-0">
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/logo-dark.png') }}" alt="" style="width:190px;height:33px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bolder dropdown-toggle" href="#" data-bs-toggle="dropdown">Jobs </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#"> Group Jobs</a></li>
                            <li><a class="dropdown-item" href="#"> Personal Jobs </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">Marketplace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">Lead</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="#">Contact</a>
                    </li>

                    @auth
                    <!-- If user is logged in, show profile photo with Dashboard and Logout options -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{-- <img src="{{ asset('path_to_profile_photo') }}" alt="Profile Photo" style="width: 40px; height: 40px; border-radius: 50%;"> --}}
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <!-- If user is not logged in, show login and register options -->
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
</div>
