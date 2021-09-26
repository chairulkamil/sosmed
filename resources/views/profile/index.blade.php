@extends('profile.master')

@section('title')
    {{$profile->fullName}}
@endsection

@section('foto')
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
              <a href="/profile">
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
        <div class="col">
          <div class="profile-edit-panel">
            <div class="post-settings-bar">
              <button class="edit-btn" >Settings</button>
              <div class="post-settings arrow-shape">
                  <ul>
                      <li><button data-toggle="modal" data-target="#textbox">Edit Profile</button></li>
                      <li><button data-toggle="modal" data-target="#foto">Ganti Foto Profile</button></li>
                      <li><button data-toggle="modal" data-target="#cover">Ganti Foto Cover</button></li>
                  </ul>
              </div>
          </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('modal')
<div class="card card-small">
  <div class="share-box-inner">
    <!-- profile picture end -->
    <div class="profile-thumb">
      <a href="#">
        <figure class="profile-thumb-middle">
          <img
            src="{{ asset(Auth::user()->profiles->foto) }}"
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
@endsection

@section('post')
    @foreach ($data as $item)
    <div class="card">
    <!-- post title start -->
    {{-- <div class="card-body"> --}}
    <div class="post-title d-flex align-items-center">
        <!-- profile picture end -->
        <div class="profile-thumb">
        <a href="#" name="postingan{{$item->id}}">
            <figure class="profile-thumb-middle">
            <img
                src="{{ Auth::user()->profiles->foto }}"
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
        <div class="post-settings-bar">
          <span></span>
          <span></span>
          <span></span>
          <div class="post-settings arrow-shape">
            <ul>
              <li><a href="/post/{{$item->id}}/edit" class="text-dark">Edit post</a></li>
              <li><form action="/post/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-danger">Delete</button>
              </form></li>
            </ul>
          </div>
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

          {{-- fitur likes  --}}
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

<div class="modal fade" id="textbox" aria-labelledby="textbox">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Profile</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body custom-scroll">
      <form action="/profile/{{ $profile->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
        <div class="form-group" >
            <label for="fullName">Full Name</label>
            <input  type="text" name="fullName" class="form-control" id="fullName" value="{{$profile->fullName}}">
            
        </div>
        <div class="form-group" >
            <label for="alamat">Alamat</label>
          <input  type="text" name="alamat" class="form-control" id="alamat" value="{{$profile->alamat}}">
          
      </div>
      <div class="form-group" >
          <label for="alamat">No Handphone</label>
        <input  type="text" name="no_hp" class="form-control" id="no_hp" value="{{$profile->no_hp}}">
        
    </div>
  <div class="form-group" >
      <label for="tgl_lahir">Tanggal Lahir</label>
    <input  type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{$profile->tgl_lahir}}">
    
</div>
<div class="form-group" >
  <label for="work">Pekerjaan</label>
<input  type="text" name="work" class="form-control" id="work" value="{{$profile->work}}">

</div>
<div class="form-group" >
  <label for="bio">Biografi</label>
<input  type="text" name="bio" class="form-control" id="bio" value="{{$profile->bio}}">
</div>

<div class="form-group" >
  <label for="hobby">Hobby</label>
<input  type="text" name="hobby" class="form-control" id="hobby" value="{{$profile->hobby}}">

</div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            batal
          </button>
          <button type="submit" class="post-share-btn">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="foto" aria-labelledby="foto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Foto Profile</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body custom-scroll">
      <form action="/foto/{{ $profile->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        
        <img class="rounded mx-auto d-block" src="{{asset($profile->foto)}}" alt="foto profile">

        <div class="form-group mt-2" >
          <label for="image">Upload foto Profile baru</label><br>
          <input type="file" name="image">
          
      </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            batal
          </button>
          <button type="submit" class="post-share-btn">
            Ganti
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="cover" aria-labelledby="cover">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ganti Foto Cover Profile</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body custom-scroll">
      <form action="/cover" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="id" value="{{ $profile->id }}">
        <img class="rounded mx-auto d-block" src="{{asset($profile->cover)}}" alt="foto cover">

        <div class="form-group mt-2" >
          <label for="cover">Upload foto Cover baru</label><br>
          <input type="file" name="cover">
          
      </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        <div class="modal-footer">
          <button
            type="button"
            class="post-share-btn"
            data-dismiss="modal"
          >
            batal
          </button>
          <button type="submit" class="post-share-btn" value="ganti">
            Ganti
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>