<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Adda - Social Network HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{asset('assets/images/favicon.ico')}}"
    />

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bicon.min.css')}}" />
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/flaticon.css')}}" />
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plyr.css')}}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.min.css')}}" />
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}" />
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/perfect-scrollbar.css')}}" />
    <!-- light gallery css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  </head>

  <body>
    <!-- header area start -->
    <header>
      <div class="header-top sticky bg-white d-none d-lg-block">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5">
              <!-- header top navigation start -->
              <div class="header-top-navigation">
                <nav>
                  <ul>
                    <li class="active"><a href="/post">home</a></li>
                  </ul>
                </nav>
              </div>
              <!-- header top navigation start -->
            </div>

            <div class="col-md-2">
              <!-- brand logo start -->
              <div class="brand-logo text-center">
                <a href="index.html">
                  <img src="{{asset('assets/images/logo/logo.png')}}" alt="brand logo" />
                </a>
              </div>
              <!-- brand logo end -->
            </div>

            <div class="col-md-5">
              <div
                class="
                  header-top-right
                  d-flex
                  align-items-center
                  justify-content-end
                "
              >
                <!-- header top search start -->
                <div class="header-top-search">
                  <form class="top-search-box">
                    <input
                      type="text"
                      placeholder="Search"
                      class="top-search-field"
                    />
                    <button class="top-search-btn">
                      <i class="flaticon-search"></i>
                    </button>
                  </form>
                </div>
                <!-- header top search end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    
    <!-- header area end -->
    <main>
      <div class="main-wrapper">
        <div
          class="profile-banner-large bg-img"
          data-bg="{{ Auth::user()->profiles->cover }}"
        ></div>
        <div class="profile-menu-area bg-white">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-3">
                <div class="profile-picture-box">
                  <figure class="profile-picture">
                    <a href="profile.html">
                      <img
                        src="{{ Auth::user()->profiles->foto }}"
                        alt="profile picture"
                      />
                    </a>
                  </figure>
                </div>
              </div>
              <div
                class="col-lg-6 col-md-6 offset-lg-1"
                style="padding-top: 40px; padding-bottom: 40px"
              >
                
              </div>
              <div class="col-lg-2 col-md-3 d-none d-md-block">
                <div class="profile-edit-panel">
                  <button class="edit-btn">edit profile</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              @yield('leftProfile')
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
              <!-- share box start -->
              <div class="card card-small">
                <div class="share-box-inner">
                  <!-- profile picture end -->
                  <div class="profile-thumb">
                    <a href="#">
                      <figure class="profile-thumb-middle">
                        <img
                          src="{{ Auth::user()->profiles->foto }}"
                          alt="profile picture"
                        />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
                  @include('layout.modalPost')
                  <!-- share content box start -->
                  
                  <!-- Modal end -->
                
              </div>
              <!-- share box end -->

              <!-- post status start -->
              @yield('post')
              <!-- post status end -->
            </div>

            <div class="col-lg-3 order-3">
              <aside class="widget-area">
                <!-- widget single item start -->
                <div class="card widget-item">
                  <h4 class="widget-title">Advertizement</h4>
                  <div class="widget-body">
                    <div class="add-thumb">
                      <a href="#">
                        <img
                          src="{{asset('assets/images/banner/advertise.jpg')}}"
                          alt="advertisement"
                        />
                      </a>
                    </div>
                  </div>
                </div>
                <!-- widget single item end -->
              </aside>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
      <i class="bi bi-finger-index"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <!-- Slick Slider JS -->
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <!-- nice select JS -->
    <script src="{{asset('assets/js/plugins/nice-select.min.js')}}"></script>
    <!-- audio video player JS -->
    <script src="{{asset('assets/js/plugins/plyr.min.js')}}"></script>
    <!-- perfect scrollbar js -->
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <!-- light gallery js -->
    <script src="{{asset('assets/js/plugins/lightgallery-all.min.js')}}"></script>
    <!-- image loaded js -->
    <script src="{{asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <!-- isotope filter js -->
    <script src="{{asset('assets/js/plugins/isotope.pkgd.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>