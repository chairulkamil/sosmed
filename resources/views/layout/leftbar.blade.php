<aside class="widget-area">
    <!-- widget single item start -->
    <div class="card card-profile widget-item p-0">
      <div class="profile-banner">
        <figure class="profile-banner-small">
          <a href="#">
            <img
              src="{{ Auth::user()->profiles->cover }}"
              alt=""
            />
          </a>
          <a href="/profile" class="profile-thumb-2">
            <img
              src="{{ Auth::user()->profiles->foto }}"
              alt="profile picture"
            />
          </a>
        </figure>
        <div class="profile-desc text-center">
          <h6 class="author">
            <a href="/profile">{{Auth::user()->name}}</a>
          </h6>
          <p>
            {{ Auth::user()->profiles->bio }}
          </p>
        </div>
      </div>
    </div>
    <!-- widget single item start -->

    <!-- widget single item start -->
    <div class="card widget-item">
      <h4 class="widget-title">Kamu Mungkin Kenal</h4>
      <div class="widget-body">
        <ul class="like-page-list-wrapper">

          @foreach ($users as $user)

          @if ($user->id == Auth::user()->id)
              
          @else
          <li class="unorder-list">
            <!-- profile picture end -->
            <div class="profile-thumb">
              <a href="/profile/{{$user->id}}">
                <figure class="profile-thumb-small">
                  <img
                    src="{{asset($user->profiles->foto)}}"
                    alt="profile picture"
                  />
                </figure>
              </a>
            </div>
            <!-- profile picture end -->
            
            <div class="unorder-list-info">
              <h3 class="list-title">
                <a href="/profile/{{$user->id}}">{{$user->name}}</a>
              </h3>
              <p class="list-subtitle"><a href="#">{{$user->profiles->work}}</a></p>
            </div>


            <form action="/profile/{{$user->id}}" method="POST" class="like-button">
              @csrf
              @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <button class="like-button active" type="submit">
                  <span class="badge badge-pill badge-danger">unfollow</span>
                </button>
              @else
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <button class="like-button active" type="submit">
                  <span class="badge badge-pill badge-danger">follow</span>
                </button>
              @endif
              
            </form>

            
            
            
          </li>
          @endif

          
          @endforeach
          <li class="unorder-list">
            <form action="/users/cari" class="top-search-box" method="GET">
              @csrf
              <input type="hidden" name="name" value="">
              <button class="edit-btn" type="submit" >Show More >></button>
            </form>
          </li>
          
          
        </ul>
      </div>
    </div>
    <!-- widget single item end -->
  </aside>