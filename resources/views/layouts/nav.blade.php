<nav class="navbar text-white navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style=" background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%)">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand text-white" href="/">SPECT FOUNDATION INDIA</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Volunteer Registration</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact us</a></li>
                
                @auth <!-- Display only if the user is authenticated -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index')}}">Dashboard</a></li>
                @endauth
            </ul>
            {{-- <a href="/login"> Login</a> --}}
        </div>
    </div>
</nav>