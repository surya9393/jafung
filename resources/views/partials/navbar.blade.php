  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
        <h1>SIPE-<span>WIRAUSAHA</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        @auth
            <ul>
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/dashboard/posts">Persyaratan</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"> </i>&nbsp; {{ auth()->user()->name }}</a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/blog"> <i class="bi bi-layout-text-window-reverse"></i>Dashboard</a></li>
                        <li><a class="dropdown-item" href="/categories"><i class="bi bi-person-circle"></i> Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST" id="myForm">
                                @csrf
                                <a href="#" onclick="document.getElementById('myForm').submit();"><i class="bi bi-box-arrow-right"></i> Logout</a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        @else

            <ul class="">
                <li><a href="/">Home</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
        @endauth
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
