<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Final Projects - ASMODEUS</title>
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
                <!-- profile picture start -->
                <div class="profile-setting-box">
                  <div class="profile-thumb-small">
                      <a href="javascript:void(0)" class="profile-triger">
                          <figure>
                              <img src="{{ asset(Auth::user()->profiles->foto) }}" alt="profile picture">
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
                                  <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                  <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
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
    

    <main>
      <div class="main-wrapper pt-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              {{-- leftbar --}}
             
            </div>
    
            <div class="col-lg-6 order-1 order-lg-2">
              <!-- share box start -->
              <div class="card">
                <!-- post title start -->
                {{-- <div class="card-body"> --}}
                <div class="post-title d-flex align-items-center">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                    <a href="#">
                        <figure class="profile-thumb-middle">
                          @if (Auth::user()->profiles->foto != NULL)
                          <img
                          src="{{ URL(Auth::user()->profiles->foto) }}" 
                            alt="post image"
                          />  
                          @else
                              
                          @endif
                        </figure>
                    </a>
                    </div>
                    <!-- profile picture end -->
                    <div class="posted-author">
                    <h6 class="author">
                        <a href="#">{{ $data->user->name }}</a>
                    </h6>
                    <span class="post-time">20 min ago</span>
                    </div>
                </div>
                
                <!-- post title start -->
                <div class="post-content">
                    <p class="post-desc">
                    {{ $data->status }}
                    {{ $data->quotes }}
                    {{ $data->caption }}
                    </p>
                    <div class="post-thumb-gallery">
                    <figure class="post-thumb img-popup">
                        @if ($data->image != NULL)
                        <a href="{{ $data->image}}"></a>
                
                        <img
                        src="{{ URL($data->image) }}" 
                          alt="post image"
                        />  
                        
                        @else
                            
                        @endif
                    </figure>
                    </div>
                    <div class="post-meta">
                    {{-- fitur likes --}}
                  @if (in_array($data->id,$likes))
                  <form action="/unlike" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="post_id" value="{{$data->id}}">
                  
                    <button class="like-button" type="submit">
                      <img
                          class="heart"
                          src="{{asset('assets/images/icons/heart-color.png')}}"
                          alt=""
                        />
                        <span>{{ count($data->likes) }} User like this</span>
                    </button>
                  </form>
                  
                      @else
                      <form action="/like" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="post_id" value="{{$data->id}}">
                      
                        <button class="like-button" type="submit">
                          <img
                              class="heart"
                              src="{{asset('assets/images/icons/heart.png')}}"
                              alt=""
                            />
                            <span>{{ count($data->likes) }} User like this</span>
                        </button>
                      </form>
                      
                      @endif
                      
                      </div>
                  </div>
                  <hr>
                  <form >
                      @foreach ($comment as $comments)
                      <div class="share-text-field">
                        <ul>
                          <div class="card">
                            <div class="profile-thumb">
                              <a href="#">
                                  <figure class="profile-thumb-small">
                                    @if (Auth::user()->profiles->foto != NULL)
                                    <img
                                    src="{{ URL(Auth::user()->profiles->foto) }}" 
                                      alt="post image"
                                    />  
                                    @else
                                        
                                    @endif
                                  </figure>
                              </a>
                            </div>
                            <div class="float-left">
                              <li>
                                <strong>{{ $comments->users[0]->name }}</strong>
                              </li>
                              
                              <li>
                                <p>{{ $comments->komentar }}</p>
                              </li>
                            </div>
                          </div>
                        </ul>
                        {{-- <p>{{ $comments->users[0]->name }}</p> --}}
                        {{-- <p>{{ $comments->komentar }}</p> --}}
                      </div>
                      @endforeach
                    </form>
                    <hr>
                  
                {{-- </div> --}}
                <form class="share-text-box" action="/comment" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="post_id" value="{{ $data->id }}">
                    <div class="col-md-9 float-left">
                        <textarea
                          name="komentar"
                          class="share-text-field"
                          aria-disabled="true"
                          placeholder="komen dulu gan"
                          id="komentar"
                        ></textarea>
                    </div>
                    <div class="col-md-3 float-left">
                        <button type="submit" class="post-share-btn justify-content-md-end">Send</button>
                    </div>
                  </form>
                  
                {{-- </div> --}}
                </div>
              <!-- share box end -->
              
              
              <!-- post status start -->
              
              <!-- post status end -->
            </div>
    
            
    
    
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



{{--  --}}