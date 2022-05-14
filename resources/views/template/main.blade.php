<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>NU WAVE</title>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--Icon-->
        <script src="https://kit.fontawesome.com/f67ab1f0a2.js" crossorigin="anonymous"></script>
        <link rel='icon' type='image/png' href='/images/favicon.ico'>

        {{-- Leaflt Map CSS--}}
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        {{-- Leaflt Map JS--}}
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

        {{-- Swal fire --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <!--CSS/Stylesheets-->
        <link rel="stylesheet" href="/css/main.css">
        @yield('css')
            
    </head>
    <body>

        {{-- Navigation --}}
        <nav class="navbar navbar-custom navbar-expand-md justify-content-center px-3 py-2 sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
            </button>
            <a href="" class="navbar-brand w-25 h-25"><img src="/images/logo.png" id="logo"></a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav w-50 mr-auto justify-content-end nav-justified">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="{{ route('articles') }}" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                          Articles
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                                <a class="dropdown-item" href=""></a>
                        </div>                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                         Exhibits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                                <a class="dropdown-item" href=""></a>
                        </div>                        
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                          Innovators
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                                <a class="dropdown-item" href=""></a>
                        </div>                        
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                          Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                                <a class="dropdown-item" href=""></a>
                        </div>                        
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                         Labs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                           
                                <a class="dropdown-item" href=""></a>
                        </div>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>

        
        
                </ul>

            </div>
        
        </nav>

        {{-- Page Content --}}
        <div class="content">
            @yield('main-content')
        </div>

        <footer class="footer p-3">
            <div class="Footer container-fluid px-0">
                <div class="container">
                <div class="d-md-flex border-2 border-bottom">
                  <div
                   style="width: fit-content; height: fit-content"
                    class="mx-auto"
                  >
                    <img src="/images/logo2.png" alt="nu wave" class="img-fluid" />
                    <div class="contact ps-2">
                      <div class="pb-2">
                        <i class="bi bi-geo-alt"></i><span> 551 M.F. Jhocson St. Sampaloc, Manila, PH 1008</span>
                      </div>
                      <div>
                        <i class="bi bi-telephone"></i><span> +632 8712-1900</span>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row gy-5 pt-5">
                    <div class="col-md-3">
                        <div class="d-flex justify-content-center">
                            <div>
                              <div class="title">
                                <h6>
                                  Home
                                </h6>
                              </div>
                              <div class="content px-3">
                                <ul>
                                  <li>
                                    <a href="#">
                                      Landing
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      Featured
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                    <div class="col-md-3">
                        <div class="d-flex justify-content-center">
                            <div>
                            <div class="title">
                                <h6>
                                  Exhibit
                                </h6>
                              </div>
                              <div class="content px-3">
                                <ul>
                                  <li>
                                    <a href="exhibits">
                                      All exhibit
                                    </a>
                                  </li>
                                  <li>
                                    <a href="Coming_Soon">
                                      Recent
                                    </a>
                                  </li>
                                  <li>
                                    <a href="Coming_Soon">
                                      Upcoming
                                    </a>
                                  </li>
                                  <li>
                                    <a href="Coming_Soon">
                                      Gallery
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                        <div class="title">
                            <h6>
                              Innovators
                            </h6>
                          </div>
                          <div class="content px-3">
                            <ul>
                              <li>
                                <a href="featured_innovators">
                                  Featured
                                </a>
                              </li>
                              <li>
                                <a href="Coming_Soon">
                                  Newest
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <div class="title">
                            <h6>
                              About
                            </h6>
                          </div>
                          <div class="content px-3">
                            <ul>
                              <li>
                                <a href="/Coming_Soon">
                                  CENTIE
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  National University
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <div class="title">
                            <h6>
                              Articles
                            </h6>
                          </div>
                          <div class="content px-3">
                            <ul>
                            <li>
                                <a href="/article">
                                  All articles
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  Latest
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  Featured
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <div class="title">
                            <h6>
                              Products
                            </h6>
                          </div>
                          <div class="content px-3">
                            <ul>
                            <li>
                                <a href="/products">
                                  All products
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  Categories
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  New
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  Featured
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <div class="title">
                            <h6>
                              Labs
                            </h6>
                          </div>
                          <div class="content px-3">
                            <ul>
                              <li>
                                <a href="/Coming_Soon">
                                  Innovation
                                </a>
                              </li>
                              <li>
                                <a href="/Coming_Soon">
                                  Incubation
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <div class="title">
                            <h6>
                              Connect
                            </h6>
                          </div>
                          <div class="content px-3">
                            <a href="https://facebook.com/NUCentIE" target="_blank" rel="noopener noreferrer">
                              <i class="bi bi-facebook text-primary px-1"></i>   
                            </a>
                            <a class="fb-messenger" href="https://m.me/NUCentIE" target='_blank' rel="noopener noreferrer">
                              <i class="bi bi-messenger px-1" style="color: purple"></i>
                            </a>
                            <i class="bi bi-youtube px-1 text-danger"></i>
                            <i class="bi bi-envelope-fill px-1 text-warning"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          
                <div class="container-fluid d-md-flex justify-content-evenly credits">
                  <div class="container p-5">
                    <div class="row">
                      <div class="col-md-6 text-center text-md-end">
                        <a href='https://www.facebook.com/NUWizardCircle/' target='_blank' rel='noopener noreferrer'>
                          <img src="/images/wizard.png" alt="..." class="img-fluid" />
                        </a>
                      </div>
                      <div class="col-md-6 text-center text-md-start">
                        <span class="footer-text">NU WIZARDS CIRCLE WEB DEV</span>
                      </div>
                    </div>
                  </div>
                  <div class="container p-5">
                    <div class="row">
                      <div class="col-md-6 text-center text-md-end">
                        <a href='/Coming_Soon'>
                          <span class="footer-text">Copyright and Disclaimer</span>
                        </a>
                      </div>
                      <div class="col-md-6 text-center text-md-start">
                        <a href='https://national-u.edu.ph/' target='_blank' rel=" noopener noreferrer">
                          <img src="/images/nu_logo.png" alt="..." class="img-fluid" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
        </footer>        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        {{-- Sweet Alerts --}}
        <script>
            @if(Session::has('donation_success'))
                Swal.fire({
                imageUrl: '/images/thankyou.png',
                imageHeight: 200,
                html:
                    '<h4 style="color:#A72A2C">Thank you for Donating!</h4>' + 
                    '<p>You are the special type of person that changes lives, lifts people up, and makes the world a better place. Thank you for your donation and your association with our cause.</p>',
                confirmButtonText: 'Ok'
                })
            @endif
        </script>
    </body>
</html>