<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icons/icon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
      
    </style>
    
</head>
<body class="custom-font">
    <div id="app">
       
        <nav class="custom-navbar navbar navbar-expand-lg " data-bs-theme="dark" style="font-family: lato; " >
            <div class="container">
              <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="50" height="50" class="d-inline-block align-text-top me-2">
              
              <a class="navbar-brand " href="/">Maha Dental Care</a>
              
              <div class="container-sm " >
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse " id="navbarNav">
                  <ul class="navbar-nav me-auto" >
                   
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('catalog.index') }}">Our Catalog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Testimony</a>
                    </li>
                    <li class="nav-item">
                        
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    
                  </ul>
                  <button class="btn btn-outline-light" type="submit">Book Now!!</button>
      
                </div>
              </div>
            </div>
          </nav>
        

        <main>
            @yield('content')
        </main>
    </div>
</body>



<footer class="text-white  text-center text-lg-start custom-footer mt-5">
    <div class="container p-4">
      <div class="row mt-4">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About Clinic</h5>
  
          <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
            voluptatum deleniti atque corrupti.
          </p>
  
          <p>
            Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
            molestias.
          </p>
  
          <div class="mt-4">
            <!-- Facebook -->
            <a type="button" class="btn btn-floating btn-light btn-sm"><i class="bi bi-instagram"></i></a>
            <!-- Dribbble -->
            <a type="button" class="btn btn-floating btn-light btn-sm"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
  
          
  
          <ul class="fa-ul" style="margin-left: 1.65em;  list-style: none;">
            <li class="mb-3">
              <span class="bi bi-geo-alt-fill"></i></span><span class="ms-2">Jalan Pemda Badung Sempidi no.53, Badung, Bali</span>
            </li>
            <li class="mb-3">
              <span class="bi bi-envelope-fill"></span><span class="ms-2">info@example.com</span>
            </li>
            <li class="mb-3">
              <span class="bi bi-telephone-fill"></span><span class="ms-2">+62 878 6200 7055 - Dr. Agung Nickita</span>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-4">Opening hours (WITA)</h5>
          
            <table class="table text-center" style="background-color: transparent; ">
              <tbody class="font-weight-normal">
                <tr>
                  <td>Mon - Thu:</td>
                  <td>8am - 9pm</td>
                </tr>
                <tr>
                  <td>Fri - Sat:</td>
                  <td>8am - 1am</td>
                </tr>
                <tr>
                  <td>Sunday:</td>
                  <td>9am - 10pm</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-white" href="">Maha Dental Care 2024</a>
    </div>
    <!-- Copyright -->
  </footer>
  


  

</html>

