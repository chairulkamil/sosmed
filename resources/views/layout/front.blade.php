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
      href="assets/images/favicon.ico"
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

  <body class="bg-transparent">
    <main>
      <div class="main-wrapper pb-0 mb-0">
        <div class="timeline-wrapper">
          <div class="timeline-header">
            <div class="container-fluid p-0">
              <div class="row no-gutters align-items-center">
                <div class="col-lg-6">
                  <div class="timeline-logo-area d-flex align-items-center">
                    <div class="timeline-logo">
                      <a href="/">
                        <img
                          src="assets/images/logo/logo.png"
                          alt="timeline logo"
                        />
                        
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="login-area">

                    {{-- form login --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row align-items-center">
                        
                        <div class="col-12 col-sm">
                        <input
                          type="email"
                          name="email"
                          placeholder="Alamat Email"
                          class="single-field"
                        />
                        </div>
                        <div class="col-12 col-sm">
                        <input
                          type="password"
                          name="password"
                          placeholder="Password"
                          class="single-field"
                        />
                        </div>
                        {{-- tombol login --}}
                        <div class="col-12 col-sm-auto">
                        <button class="login-btn" type="submit" >{{ __('Login') }}</button>
                        </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="timeline-page-wrapper">
            <div class="container-fluid p-0">
              <div class="row no-gutters">
                <div class="col-lg-6 order-2 order-lg-1">
                  <div
                    class="timeline-bg-content bg-img"
                    data-bg="assets/images/timeline/adda-timeline.jpg"
                  >
                    <h3 class="timeline-bg-title">
                      Let’s see what’s happening to you and your world. Welcome
                      in Osmodeus.
                    </h3>
                  </div>
                </div>
                <div
                  class="
                    col-lg-6
                    order-1 order-lg-2
                    d-flex
                    align-items-center
                    justify-content-center
                  "
                >
                  <div class="signup-form-wrapper">
                    <h1 class="create-acc text-center">Register Sekarang</h1>
                    <div class="signup-inner text-center">
                      <h3 class="title">Silahkan klik tombol di bawah ini</h3>

                      <form method="GET" action="/register" class="signup-inner--form">
                        
                          <div class="col-12">
                            <button class="submit-btn" type="submit">
                              Daftar
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- JS
============================================ -->

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
