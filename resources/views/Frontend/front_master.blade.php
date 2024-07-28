<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap CSS & JS -->
<link rel="stylesheet" href="{{asset('/bootstrap.min.css')}}">
<script src="{{asset('bootstrap.bundle.min.js')}}"></script>
@yield('style')
</head>

<body>

<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="{{route('userhome')}}">
    <svg height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">! Font Awesome Free 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc.<path d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z"/></svg>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a class="nav-link  active" aria-current="page" href="{{route('userhome')}}">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="{{route('dashboard')}}">DonateNow</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    FindBlood
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="{{route('blood_all')}}">All</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{route('orhpos')}}">ORH +</a></li>
    <li><a class="dropdown-item" href="{{route('orhneg')}}">ORH -</a></li>
    <li><a class="dropdown-item" href="{{route('arhpos')}}">ARH +</a></li>
    <li><a class="dropdown-item" href="{{route('arhneg')}}">ARH -</a></li>
    <li><a class="dropdown-item" href="{{route('brhpos')}}">BRH +</a></li>
    <li><a class="dropdown-item" href="{{route('brhneg')}}">BRH -</a></li>
    </ul>
    </li>
    </ul>
    </div>
    </div>
</nav>


@yield('content')

<div class="container-fluid bg-primary">
    <h2 class="text-light text-center py-5">info@bloodbank.org</h2>
</div>

</body>
</html>