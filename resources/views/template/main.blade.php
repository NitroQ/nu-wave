<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>@yield('title')</title>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--Icon-->
        <script src="https://kit.fontawesome.com/88d640619c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel='icon' type='image/png' href='/images/favicon.ico'>

        {{-- Swal fire --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!--CSS/Stylesheets-->
        <link rel="stylesheet" href="/css/main.css">
        @yield('css')
            
    </head>
    <body>
      <button onclick="topFunction()" id="myBtn" title="Back to Top"><i class="fas fa-chevron-circle-up"></i></button>

      <nav class="navbar navbar-expand-lg bg-light shadow sticky-top">
        <div class="container-fluid px-lg-4 px-2">
          <a class="navbar-brand" href="{{ route('home') }}"><img src="/images/logo.png" alt='logo' style="height: 2rem" class="wave-logo"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fw-bold" id="navbarNavDropdown">
            <ul class="navbar-nav text-dark mx-auto text-center pe-lg-5">
              <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="" id="article" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articles</a>
                <div class="dropdown-menu" aria-labelledby="#article">
                  <a class="dropdown-item" href="{{ route('soon') }}">Featured</a>
                  <a class="dropdown-item" href="{{ route('article-latest') }}">Latest</a>
                  <a class="dropdown-item" href="{{ route('articles') }}">All Articles</a>
                </div>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="" id="exhibit" role="button" data-bs-toggle="dropdown" aria-expanded="false">Exhibits</a>
                <div class="dropdown-menu" aria-labelledby="#exhibit">
                  <a class="dropdown-item" href="{{ route('soon') }}">Recent</a>
                  <a class="dropdown-item" href="{{ route('soon') }}">Upcoming</a>
                  <a class="dropdown-item" href="{{ route('soon') }}">Gallery</a>
                  <a class="dropdown-item" href="{{ route('exhibits') }}">All Exhibits</a>
                </div>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="" id="innovator" role="button" data-bs-toggle="dropdown" aria-expanded="false">Innovators</a>
                <div class="dropdown-menu" aria-labelledby="#innovator">
                  <a class="dropdown-item" href="{{ route('soon') }}">Featured</a>
                  <a class="dropdown-item" href="{{ route('innovators') }}">All Innovators</a>
                </div>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="" id="products" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="#products">
                  <a class="dropdown-item" href="{{ route('soon') }}">Featured</a>
                  <a class="dropdown-item" href="{{ route('products-latest') }}">Latest</a>
                  <a class="dropdown-item" href="{{ route('soon') }}">Categories</a>
                  <a class="dropdown-item" href="{{ route('products') }}">All Products</a>
                </div>
              </li>
              <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle" href="" id="labs" role="button" data-bs-toggle="dropdown" aria-expanded="false">Labs</a>
                <div class="dropdown-menu" aria-labelledby="#labs">
                  <a class="dropdown-item" href="{{ route('soon') }}">Innovation</a>
                  <a class="dropdown-item" href="{{ route('soon') }}">Incubation</a>
                </div>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('soon') }}">About</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
           
            </ul>
          <div class="">
          
            <a class="btn background-blue fw-bold" href="{{ route('soon') }}">&nbsp; Sign In &nbsp;</a>
        

          </div>
         
        </div>
      </nav>

     

        {{-- Page Content --}}
        <div class="content">
            @yield('main-content')
        </div>

        <div class="mt-5 pt-5" style="height:200px;"></div>

        <hr class="shadow">
          <footer class="container-fluid footer mt-5">
          <div class="container">
            <div class="row pb-5 g-5">
              <div class="col-lg-3 d-flex flex-column align-items-center">
              <img src="/images/logo-main.svg" alt="" class="img-fluid p-3">
              <img src="/images/nu_logo.png" alt="" class=" mt-3 img-fluid w-25">
              <h6 class="mt-3">&copy; Copyright and Disclaimer</h6>
              </div>
              <div class="col-lg-9">
                <div class="row h-50">
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h4 class="h4 fw-bold">Home</h4></a>
                        <h4 class="h4 fw-bold">Articles</h4>
                        <a href="" class="text-decoration-none"><h6 class="h6">Featured</h6></a>
                        <a href="{{ route('article-latest') }}" class="text-decoration-none"><h6 class="h6">Latest</h6></a>
                        <a href="{{ route('articles') }}" class="text-decoration-none"><h6 class="h6">All Articles</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <h4 class="h4 fw-bold">Innovators</h4>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Featured</h6></a>
                      <a href="{{ route('innovators') }}" class="text-decoration-none"> <h6 class="h6">All Innovators</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <h4 class="h4 fw-bold">Labs</h4>
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <h6 class="h6">Innovation</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <h6 class="h6">Incubation</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <a href="{{ route('contact') }}" class="text-decoration-none"> <h4 class="h4 fw-bold">Contact</h4></a>
                      <h6 class="h6"> <i class="fas fa-map-marker-alt"></i> 551 M.F. Jhocson St. Sampaloc, Manila, PH 1008</h6>
                      <a href="mailto:centie@national-u.edu.ph" class="text-decoration-none"> <h6 class="h6"><i class="fa-solid fa-envelope"></i> centie@national-u.edu.ph</h6></a>
                      <h6 class="h6"><i class="fas fa-phone"></i> (+632) 8712-1900</h6>
                    </div>
                  </div>
                </div>
                <div class="row h-50 mt-2">
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <h4 class="h4 fw-bold">Exhibits</h4>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Recent</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Upcoming</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Gallery</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">All Exhibits</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row ">
                      <h4 class="h4 fw-bold">Products</h4>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Featured</h6></a>
                      <a href="{{ route('products-latest') }}" class="text-decoration-none"> <h6 class="h6">Latest</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"><h6 class="h6">Categories</h6></a>
                      <a href="{{ route('products') }}" class="text-decoration-none"><h6 class="h6">All Products</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <h4 class="h4 fw-bold ">About</h4></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <h6 class="h6">Center for Innovation and Entrepreneurship</h6></a>
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <h6 class="h6">National University</h6></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="row">
                      <h4 class="h4 fw-bold">Connect</h4>
                    <div class="d-flex flex-row">
                      <a href="{{ route('soon') }}" class="text-decoration-none"> <i class="fab fa-facebook-square me-2 h2"></i></a>
                        <a href="{{ route('soon') }}" class="text-decoration-none"><i class="fab fa-facebook-messenger mx-2 h2"></i></a>
                          <a href="{{ route('soon') }}" class="text-decoration-none"><i class="fab fa-youtube mx-2 h2"></i></a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </footer>
        <div class="container-fluid" style="background-color: #ffc000" >
          <div class="container">
            <div class="row">
              <div class="col-12 mt-3">
                <p class="text-center">&copy; Copyright 2022. All Rights Reserved. NU Wizards Circle Web Dev Team</p>
              </div>
            </div>
          </div>


       <script>
        
        let paginator = $('nav > ul.pagination');
        paginator.find('li').addClass('page-item');
        paginator.find('li > *').addClass('page-link');
        paginator.find('li:nth-child(1) > *').text('Previous');
        paginator.find('li:nth-last-child(1) > *').text('Next');
       </script>

        <script>
          var mybutton = document.getElementById("myBtn");
          window.onscroll = function() {scrollFunction()};

          
          function scrollFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
              mybutton.style.display = "block";
            } else {
              mybutton.style.display = "none";
            }
          }
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }

          </script>
   </body>
</html>