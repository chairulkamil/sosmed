@extends('profile.master')

@section('foto')
<div class="main-wrapper">
  <div
    class="profile-banner-large bg-img"
    data-bg="{{ asset($profile->cover) }}"
  ></div>
  <div class="profile-menu-area bg-white">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-3">
          <div class="profile-picture-box">
            <figure class="profile-picture">
              <a href="profile.html">
                <img
                  src="{{ asset($profile->foto) }}"
                  alt="profile picture"
                />
              </a>
            </figure>
          </div>
        </div>
        <div
          class="col-lg-6 col-md-6 offset-lg-1"
          
        >
        <div class="profile-menu-wrapper">
          <div class="main-menu-inner header-top-navigation">
              <nav>
                  <ul class="main-menu">
                      <li><a href="#post">{{count($data)}} Posts</a></li>
                      <li><a href="/followers">{{count($user->followed)}} followers</a></li>
                      <li><a  href="/following">{{count($user->follows)}} following</a></li>
                      
                      <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                  </ul>
              </nav>
          </div>
      </div>
          
        </div>
        <div class="col-lg-2 col-md-3 d-none d-md-block">
          <div class="profile-edit-panel">
            <form action="/profile/{{$profile->user_id}}" method="POST">
              @csrf
              @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                <input type="hidden" name="user_id" value="{{$profile->user_id}}">
                <button class="edit-btn" type="submit">Unfollow</button>
              @else
                <input type="hidden" name="user_id" value="{{$profile->user_id}}">
                <button class="edit-btn" type="submit">Follow</button>
              @endif
              
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('post')
    @foreach ($data as $item)
    <div class="card">
    <!-- post title start -->
    {{-- <div class="card-body"> --}}
    <div class="post-title d-flex align-items-center">
        <!-- profile picture end -->
        <div class="profile-thumb">
        <a href="#">
            <figure class="profile-thumb-middle">
            <img
                src="{{ asset($item->user->profiles->foto) }}"
                alt="profile picture"
            />
            </figure>
        </a>
        </div>
        <!-- profile picture end -->
        <div class="posted-author">
        <h6 class="author">
            <a href="#">{{$item->user->name}}</a>
        </h6>
        <span class="post-time">20 min ago</span>
        </div>
    </div>

    <!-- post title start -->
    <div class="post-content">
        <p class="post-desc">
        {{ $item->status }}
        <blockquote class="blockquote">
            <p class="mb-0">{{ $item->quotes }}</p>
        </blockquote>
        
        {{ $item->caption }}
        </p>
        <div class="post-thumb-gallery">
        <figure class="post-thumb img-popup">
        
            @if ($item->image != NULL)
            <img
            src="{{ URL($item->image) }}" 
                alt="post image"
            />  
            
            @else
                
            @endif
        </figure>
        </div>
        <div class="post-meta">
        {{-- fitur likes --}}
        @if (in_array($item->id,$likes))
        <form action="/unlike" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="post_id" value="{{$item->id}}">
         
          <button class="like-button" type="submit">
            <img
                class="heart"
                src="{{asset('assets/images/icons/heart-color.png')}}"
                alt=""
              />
              <span>{{ count($item->likes) }} User like this</span>
          </button>
        </form>
        
            @else
            <form action="/like" method="POST">
              @csrf
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <input type="hidden" name="post_id" value="{{$item->id}}">
             
              <button class="like-button" type="submit">
                <img
                    class="heart"
                    src="{{asset('assets/images/icons/heart.png')}}"
                    alt=""
                  />
                  <span>{{ count($item->likes) }} User like this</span>
              </button>
            </form>
            
            @endif
        <ul class="comment-share-meta">
            <li>
              <button class="post-comment">
                <a href="/post/{{$item->id}}" class="btn btn-info"><i class="bi bi-chat-bubble"></i></a>
                <span>{{ count($item->comments) }}</span>
              </button>
            </li>
        </ul>
        </div>
    </div>
    {{-- </div> --}}
    </div>
    @endforeach
@endsection

@section('leftProfile')
<aside class="widget-area profile-sidebar">
    <!-- widget single item start -->
    <div class="card widget-item">
      <h4 class="widget-title">{{ $profile->fullName }}</h4>
      <div class="widget-body">
        <div class="about-author">
          <p>
            {{ $profile->bio }}
          </p>
          <ul class="author-into-list">
            <li>
              <a href="#"
                ><i class="bi bi-office-bag"></i>{{ $profile->work }}</a
              >
            </li>
            
            <li>
              <a href="#"
                ><i class="bi bi-location-pointer"></i>{{ $profile->alamat }}</a
              >
            </li>
            <li>
              <a href="#"
                ><i class="bi bi-heart-beat"></i>{{ $profile->hobby }}</a
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- widget single item end -->
  </aside>
@endsection