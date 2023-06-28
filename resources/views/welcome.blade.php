<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">

    <title>{{ 'Park&Collect' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100 ">
        <div class="bg-primary py-2 fixed-top">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="text-end">
                            <ul class="navbar-nav ms-auto text-primary d-flex flex-row justify-content-end">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white me-3"
                                                href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link text-white me-3" href="/user/home">{{ __('Home') }}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------above code is by default login and register pages created by default using authentication----------->
        <div class="container-fluid"
            style="background: url(./img/back1.jpg) no-repeat center ;
            background-size: cover; position: relative;">
            <div class="container p-5  style2">
                <div class="col-lg-6 col-12">
                    <p class="text-white text-start text-md-center text-sm-center font4 fw-bold">Our legal experts will
                        take care of your case
                        and will do
                        everything necessary to stop the illegal parker</p>
                </div>
            </div>
        </div>


<div class="container-fluid px-0">
    <div class="row bg-primary pt-3">
        <div class="col-lg-5 col-12 text-md-center text-sm-center">
            <img src="{{ asset('img/icon.png') }}" alt="logo" class="img-fluid pt-4">
            <p class="text-white fw-bold" style="font-size: 30px;">Park Collect</p>
        </div>
        <div class="col-lg-7 col-12">
            <p class="text-white text-center font1">
                A parking offender in your parking lot?
                Create a proof photo with your Park+Collect app and submit it to us.
                In this way you protect your parking space and receive up to 100% payment of the compensation
                for each successfully punished parking offense on your parking space</p>
        </div>
    </div>
</div>
        
        {{-- <main class="py-5 mb-2 mha">
            @yield('content')
        </main> --}}
        
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('img/613.jpg') }}" class="d-block w-100" alt="1st slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p class="text-white text-center text-sm-center text-md-center font2">That's how easy Park Collect works</h5>
                      <p class="text-white text-center text-sm-center text-md-center  font3">Create a park space, photograph illegal parkers - done! The Park-Collect specialists will take care of the rest!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('img/2ndCarousel.jpg') }}" class="d-block w-100" alt="2nd slide">
                    <div class="carousel-caption d-none d-md-block">
                      <p class="text-white text-center text-sm-center text-md-center font2">Park-Collect is the solution against illegal parkers!</h5>
                      <p class="text-white text-center text-sm-center text-md-center font3">WARNING POSSIBLE
                        Repeat offenses are prevented by requesting external lawyers to issue a cease-and-desist declaration.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
      
        <!-------------------------- footer -------------------------->

        <div class="container-fluid text-sm bg-primary text-center text-white py-3 mt-auto">
            <div class="row bg-primary">
                <small>
                    Copyright @ 2023
                    <a href="#" class="text-white" style="text-decoration: none">Park Collect.</a>&nbsp;All rights
                    reserved. Designed and
                    Developed by:
                    <a href="https://blackcapit.com" class="text-white" style="text-decoration: none">Black Cap IT</a>
                </small>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
