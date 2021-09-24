@extends('layout.master')

@section('title')
    AsikGan - Halaman Home
@endsection
@section('content')

@foreach ($data as $item)
          <div class="card">
            <!-- post title start -->
          {{-- <div class="card-body"> --}}
            <div class="post-title d-flex align-items-center">
                <!-- profile picture end -->
              <div class="profile-thumb">
                @if (Auth::user()->id == $item->user->id )
                <a href="/profile">
                @else
                <a href="/profile/{{ $item->user->id }}">
                @endif
                  <figure class="profile-thumb-middle">
                    <img
                      src="{{ $item->user->profiles->foto }}"
                      alt="profile picture"
                    />
                  </figure>
                </a>
              </div>
              <!-- profile picture end -->
              <div class="posted-author">
                <h6 class="author">
                  <a href="/profile/{{$item->user->id}}">{{$item->user->name}}</a>
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

                <form action="/like" method="POST">
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <input type="hidden" name="post_id" value="{{$item->id}}">
                  @php
                      $user=Auth::user();
                  @endphp
                  @if (in_array($item->id,$likes))
                  <button class="like-button" type="submit" disabled>
                    <img
                        class="heart"
                        src="{{asset('assets/images/icons/heart-color.png')}}"
                        alt=""
                      />
                  </button>
                    @else
                    <button class="like-button" type="submit">
                      <img
                      class="heart-color"
                      src="{{asset('assets/images/icons/heart.png')}}"
                      alt=""
                    />
                    @endif
                    <span>{{ count($item->likes) }} User like this</span>
                    
                  </button>
                </form>
                
                
                <ul class="comment-share-meta">
                  <li>
                    <button class="post-comment">
                      <i class="bi bi-chat-bubble"></i>
                      <span>41</span>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          {{-- </div> --}}
        </div>
        @endforeach
@endsection