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
                <a href="/profile" name="postingan{{$item->id}}">
                @else
                <a href="/profile/{{ $item->user->id }}" name="postingan{{$item->id}}">
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
                  @if (Auth::user()->id == $item->user->id)
                  <a href="/profile" name="postingan{{$item->id}}" >{{$item->user->name}}</a>
                  @else
                    <a href="/profile/{{$item->user->id}}" name="postingan{{$item->id}}">{{$item->user->name}}</a>
                  @endif
                  
                </h6>
                <span class="post-time">{{$item->created_at->diffForHumans()}}</span>
                @if ($item->quotes)
                    <span class="post-time">
                      <form action="/cetak/quotes" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{$item->id}}">
                        <button class="post-share-btn" type="submit"><i class="bi bi-printer"></i> to pdf</button>
                      </form>
                      
                    </span>
                @else
                    
                @endif
                
              </div>
            </div>

            <!-- post title start -->
            <div class="post-content">
              <p class="post-desc">
                {{ $item->status }}
                {!! $item->quotes !!}
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