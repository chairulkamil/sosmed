<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
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
    {{-- ckeditor --}}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    
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
                <a href="/post">
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
                  <form action="/users/cari" class="top-search-box" method="GET">
                    @csrf
                    <input
                      name="name"
                      type="text"
                      placeholder="Search"
                      class="top-search-field"
                    />
                    <button class="top-search-btn" type="submit">
                      <i class="flaticon-search"></i>
                    </button>
                  </form>
                </div>
                <!-- header top search end -->
                <!-- profile picture start -->
                <div class="profile-setting-box">
                  <div class="profile-thumb-small">
                      <a href="javascript:void(0)" class="profile-triger">
                          <figure>
                              <img src="{{ Auth::user()->profiles->foto }}" alt="profile picture">
                          </figure>
                      </a>
                      <div class="profile-dropdown">
                          <div class="profile-head">
                              <h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
                              <a class="mail" href="#">{{ Auth::user()->email }}</a>
                          </div>
                          <div class="profile-body">
                              <ul>
                                  <li><a href="/profile"><i class="flaticon-user"></i>Profile</a></li>
                                  
                              </ul>
                              <ul>
                                  {{-- <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li> --}}
                                  <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="flaticon-unlock"></i>{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                    </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- profile picture end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
      <div class="mobile-header-wrapper sticky d-block d-lg-none">
        <div class="mobile-header position-relative">
          <div class="mobile-logo">
            <a href="index.html">
              <img src="{{asset('assets/images/logo/logo-white.png')}}" alt="logo" />
            </a>
          </div>
          <div class="mobile-menu w-100">
            <ul>
              <li>
                <button class="notification request-trigger">
                  <i class="flaticon-users"></i>
                  <span>03</span>
                </button>
                <ul class="frnd-request-list">
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.html">
                          <img
                            src="{{asset('assets/images/profile/profile-midle-1.jpg')}}"
                            alt="proflie author"
                          />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.html">merry watson</a>
                        </h6>
                        <p class="author-subtitle">Works at HasTech</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirm</button>
                          <button class="frnd-btn delete">delete</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.html">
                          <img
                            src="{{asset('assets/images/profile/profile-midle-2.jpg')}}"
                            alt="proflie author"
                          />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.html">merry watson</a>
                        </h6>
                        <p class="author-subtitle">Works at HasTech</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirm</button>
                          <button class="frnd-btn delete">delete</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="frnd-request-member">
                      <figure class="request-thumb">
                        <a href="profile.html">
                          <img
                            src="{{asset('assets/images/profile/profile-midle-3.jpg')}}"
                            alt="proflie author"
                          />
                        </a>
                      </figure>
                      <div class="frnd-content">
                        <h6 class="author">
                          <a href="profile.html">merry watson</a>
                        </h6>
                        <p class="author-subtitle">Works at HasTech</p>
                        <div class="request-btn-inner">
                          <button class="frnd-btn">confirm</button>
                          <button class="frnd-btn delete">delete</button>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <button class="notification">
                  <i class="flaticon-notification"></i>
                  <span>03</span>
                </button>
              </li>
              <li>
                <button class="chat-trigger notification">
                  <i class="flaticon-chats"></i>
                  <span>04</span>
                </button>
                <div class="mobile-chat-box">
                  <div class="live-chat-title">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="profile.html">
                        <figure class="profile-thumb-small profile-active">
                          <img
                            src="{{asset('assets/images/profile/profile-small-15.jpg')}}"
                            alt="profile picture"
                          />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->
                    <div class="posted-author">
                      <h6 class="author">
                        <a href="profile.html">Robart Marloyan</a>
                      </h6>
                      <span class="active-pro">active now</span>
                    </div>
                    <div class="live-chat-settings ml-auto">
                      <button class="chat-settings">
                        <img src="{{asset('assets/images/icons/settings.png')}}" alt="" />
                      </button>
                      <button class="close-btn">
                        <img src="{{asset('assets/images/icons/close.png')}}" alt="" />
                      </button>
                    </div>
                  </div>
                  <div class="message-list-inner">
                    <ul class="message-list custom-scroll">
                      <li class="text-friends">
                        <p>
                          Many desktop publishing packages and web page editors
                          now use Lorem Ipsum as their default model text
                        </p>
                        <div class="message-time">10 minute ago</div>
                      </li>
                      <li class="text-author">
                        <p>
                          Many desktop publishing packages and web page editors
                        </p>
                        <div class="message-time">5 minute ago</div>
                      </li>
                      <li class="text-friends">
                        <p>packages and web page editors</p>
                        <div class="message-time">2 minute ago</div>
                      </li>
                      <li class="text-friends">
                        <p>
                          Many desktop publishing packages and web page editors
                          now use Lorem Ipsum as their default model text
                        </p>
                        <div class="message-time">10 minute ago</div>
                      </li>
                      <li class="text-author">
                        <p>
                          Many desktop publishing packages and web page editors
                        </p>
                        <div class="message-time">5 minute ago</div>
                      </li>
                      <li class="text-friends">
                        <p>packages and web page editors</p>
                        <div class="message-time">2 minute ago</div>
                      </li>
                    </ul>
                  </div>
                  <div class="chat-text-field mob-text-box">
                    <textarea
                      class="live-chat-field custom-scroll"
                      placeholder="Text Message"
                    ></textarea>
                    <button
                      class="chat-message-send"
                      type="submit"
                      value="submit"
                    >
                      <img src="{{asset('assets/images/icons/plane.png')}}" alt="" />
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <button class="search-trigger">
                  <i class="search-icon flaticon-search"></i>
                  <i class="close-icon flaticon-cross-out"></i>
                </button>
                <div class="mob-search-box">
                  <form class="mob-search-inner">
                    <input
                      type="text"
                      placeholder="Search Here"
                      class="mob-search-field"
                    />
                    <button class="mob-search-btn">
                      <i class="flaticon-search"></i>
                    </button>
                  </form>
                </div>
              </li>
            </ul>
          </div>
          <div class="mobile-header-profile">
            <!-- profile picture end -->
            <div class="profile-thumb profile-setting-box">
              <a href="javascript:void(0)" class="profile-triger">
                <figure class="profile-thumb-middle">
                  <img
                    src="{{asset('assets/images/profile/profile-small-1.jpg')}}"
                    alt="profile picture"
                  />
                </figure>
              </a>
              <div class="profile-dropdown text-left">
                <div class="profile-head">
                  <h5 class="name"><a href="#">Madison Howard</a></h5>
                  <a class="mail" href="#">mailnam@mail.com</a>
                </div>
                <div class="profile-body">
                  <ul>
                    <li>
                      <a href="profile.html"
                        ><i class="flaticon-user"></i>Profile</a
                      >
                    </li>
                    <li>
                      <a href="#"><i class="flaticon-message"></i>Inbox</a>
                    </li>
                    <li>
                      <a href="#"><i class="flaticon-document"></i>Activity</a>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <a href="#"><i class="flaticon-settings"></i>Setting</a>
                    </li>
                    <li>
                      <a href="signup.html"
                        ><i class="flaticon-unlock"></i>Sing out</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- profile picture end -->
          </div>
        </div>
      </div>
    </header>
    <!-- header area end -->

    <main>
      <div class="main-wrapper pt-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              {{-- leftbar --}}
              @include('layout.leftbar') 
            </div>
    
            <div class="col-lg-6 order-1 order-lg-2">
              <!-- share box start -->
              <div class="card card-small">
                <div class="share-box-inner">
                  <!-- profile picture end -->
                  <div class="profile-thumb">
                    <a href="/profile">
                      <figure class="profile-thumb-middle">
                        <img
                          src="{{ Auth::user()->profiles->foto }}"
                          alt="profile picture"
                        />
                      </figure>
                    </a>
                  </div>
                  <!-- profile picture end -->
    
                  
    
                  {{-- modal --}}
                  @include('layout.modalPost')
                  
              </div>
              <!-- share box end -->
              @yield('content')
              
              <!-- post status start -->
              
              <!-- post status end -->
            </div>
    
            @include('layout.rightbar')
    
    
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

    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('status')
    @stack('leftfollow')
  </body>
</html>
