<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project-Laravel 11</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

     <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Arsha</h1>
            </a>
            @if (Route::has('login'))
            <nav id="navmenu" class="navmenu">
                <ul>

                    <li><a href="#hero" class="">Home</a></li>
                    <li><a href="#galery">Gallery</a></li>
                    <li><a href="#about">About</a></li>
                    @auth
                    <li>
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                            Dashboard
                        </a>
                    </li>
                    @else
                    <li>
                        <a
                        href="{{ route('login') }}"
                        class=""
                    >
                       Log in
                    </a>
                    </li>
                    {{-- @if (Route::has('register'))
                        <li>
                            <a
                            href="{{ route('register') }}"
                            class=""
                        >
                            Register
                        </a>
                        </li>
                  </ul>
                  @endif --}}
                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @endauth
            @endif
        </div>
    </header>

    <main class="main">
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 class="">Better Solutions For Your Business</h1>
                        <p class="">We are team of talented designer making website with BootStrap</p>
                    <div class="d-flex">
                        <a href="" class="btn-get-started">Get Started</a>
                        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="" data-aos-delay="200">
                        <img src="{{ asset("assets/img/hero-img.jpg") }}" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="galery" class="">
          <div class="container section-title">
            <h2 class="">Gallery</h2>
          </div>
          <div class="container">
            <!-- Gallery -->
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  </a>

                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Wintry Mountain Landscape"
                  />
                  </a>
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Mountains in the Clouds"
                  />
                  </a>

                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Boat on Calm Water"
                  />
                  </a>

                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Waves at Sea"
                  />
                  </a>

                  <a href="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" data-toggle="lighbox">
                    <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                    class="w-100 shadow-1-strong rounded mb-4"
                    alt="Yosemite National Park"
                  />
                  </a>
                </div>
              </div>
            </div>

        </section>

        <section id="about" class="about section">
            <div class="container section-title" data-aos="">
                <h2 class="">About Us</h2>
            </div>
            <div class="container">

                <div class="row gy-4">

                  <div class="col-lg-6 content" data-aos="" data-aos-delay="100">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                      <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                      <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
                    </ul>
                  </div>

                  <div class="col-lg-6" data-aos-delay="200">
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                  </div>

                </div>

              </div>
        </section>

    </main>

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                <form action="" method="" class="php-email-form">
                  <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="d-flex align-items-center">
                <span class="sitename">Arsha</span>
              </a>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-12">
              <h4>Follow Us</h4>
              <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
              <div class="social-links d-flex">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

      </footer>

      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Preloader -->
      <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

</body>
</html>
