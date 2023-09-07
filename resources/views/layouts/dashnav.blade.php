{{-- <aside>
<nav class="nav  text-white  flex-column   py-3" id="mainNav" style=" background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%)">
    <div class="container px-4 px-lg-5">
        <a class="nav-brand text-white" href="/">SPECT FOUNDATION INDIA</a>
        <button class="nav-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse nav-collapse" id="navbarResponsive">
            <ul class="nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.list') }}">Volunteers list</a></li>
            </ul>
        </div>
    </div>
</nav>
</aside> --}}
{{-- <li class="nav-item"><a class="nav-link" href="{{ route('logout.dashboard')}}">log out</a></li> --}}

<aside class=" p-2 bg-light" style="width: 10% ;height:90vh">
<nav class="nav  flex-column " >

    <a class="nav-link active" aria-current="page" href="{{ route('dashboard.index') }}">Home</a>
    <a class="nav-link" href="{{ route('dashboard.list') }}">Volunteers list</a>
    <a class="nav-link" href="/">Back to website</a>
    <a class="nav-link" href="{{ route('logout') }}">logout</a>
  </nav>
</aside>