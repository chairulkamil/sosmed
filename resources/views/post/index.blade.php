{{-- <div class="card">
    <div class="card-body">
        <a href="/post/create" class="btn btn-primary">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>status</th>
                    <th>Foto</th>
                    <th>caption</th>
                    <th>quotes</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $post as $data)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $data->status }}</td>
                        <td><img src="{{ URL($data->image) }}" height="100" width="150"> </td>
                        <td>{{ $data->caption }}</td>
                        <td>{{ $data->quotes }}</td>
                        <td>
                            <a href="/post/{{$data->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/post/{{$data->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

@extends('layout.master')

@section('content')
<div class="main-wrapper pt-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-2 order-lg-1">
          <aside class="widget-area">
            <!-- widget single item start -->
            <div class="card card-profile widget-item p-0">
              <div class="profile-banner">
                <figure class="profile-banner-small">
                  <a href="profile.html">
                    <img
                      src="{{asset('assets/images/banner/banner-small.jpg')}}"
                      alt=""
                    />
                  </a>
                  <a href="profile.html" class="profile-thumb-2">
                    <img
                      src="{{asset('assets/images/profile/profile-midle-1.jpg')}}"
                      alt=""
                    />
                  </a>
                </figure>
                <div class="profile-desc text-center">
                  <h6 class="author">
                    <a href="profile.html">Dimbel Lebmid</a>
                  </h6>
                  <p>
                    Any one can join with but Social network us if you want
                    Any one can join with us if you want
                  </p>
                </div>
              </div>
            </div>
            <!-- widget single item start -->

            <!-- widget single item start -->
            <div class="card widget-item">
              <h4 class="widget-title">page you may like</h4>
              <div class="widget-body">
                <ul class="like-page-list-wrapper">
                  <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="#">
                        <figure class="profile-thumb-small">
                          <img
                            src="{{asset('assets/images/profile/profile-small-33.jpg')}}"
                            alt="profile picture"
                          />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                      <h3 class="list-title">
                        <a href="#">Travel The World</a>
                      </h3>
                      <p class="list-subtitle"><a href="#">adventure</a></p>
                    </div>
                    <button class="like-button active">
                      <img
                        class="heart"
                        src="{{asset('assets/images/icons/heart.png')}}"
                        alt=""
                      />
                      <img
                        class="heart-color"
                        src="{{asset('assets/images/icons/heart-color.png')}}"
                        alt=""
                      />
                    </button>
                  </li>
                  <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="#">
                        <figure class="profile-thumb-small">
                          <img
                            src="{{asset('assets/images/profile/profile-small-30.jpg')}}"
                            alt="profile picture"
                          />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                      <h3 class="list-title">
                        <a href="#">Foodcort Nirala</a>
                      </h3>
                      <p class="list-subtitle"><a href="#">food</a></p>
                    </div>
                    <button class="like-button">
                      <img
                        class="heart"
                        src="{{asset('assets/images/icons/heart.png')}}"
                        alt=""
                      />
                      <img
                        class="heart-color"
                        src="{{asset('assets/images/icons/heart-color.png')}}"
                        alt=""
                      />
                    </button>
                  </li>
                  <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="#">
                        <figure class="profile-thumb-small">
                          <img
                            src="{{asset('assets/images/profile/profile-small-5.jpg')}}"
                            alt="profile picture"
                          />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                      <h3 class="list-title">
                        <a href="#">Rolin Theitar</a>
                      </h3>
                      <p class="list-subtitle"><a href="#">drama</a></p>
                    </div>
                    <button class="like-button">
                      <img
                        class="heart"
                        src="{{asset('assets/images/icons/heart.png')}}"
                        alt=""
                      />
                      <img
                        class="heart-color"
                        src="{{asset('assets/images/icons/heart-color.png')}}"
                        alt=""
                      />
                    </button>
                  </li>
                  <li class="unorder-list">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                      <a href="#">
                        <figure class="profile-thumb-small">
                          <img
                            src="{{asset('assets/images/profile/profile-small-29.jpg')}}"
                            alt="profile picture"
                          />
                        </figure>
                      </a>
                    </div>
                    <!-- profile picture end -->

                    <div class="unorder-list-info">
                      <h3 class="list-title">
                        <a href="#">Active Mind</a>
                      </h3>
                      <p class="list-subtitle"><a href="#">fitness</a></p>
                    </div>
                    <button class="like-button">
                      <img
                        class="heart"
                        src="{{asset('assets/images/icons/heart.png')}}"
                        alt=""
                      />
                      <img
                        class="heart-color"
                        src="{{asset('assets/images/icons/heart-color.png')}}"
                        alt=""
                      />
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- widget single item end -->
          </aside>
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
                      src="{{asset('assets/images/profile/profile-small-37.jpg')}}"
                      alt="profile picture"
                    />
                  </figure>
                </a>
              </div>
              <!-- profile picture end -->

              <!-- share content box start -->
              <div class="share-content-box w-100">
                <form class="share-text-box">
                  <textarea
                    name="share"
                    class="share-text-field"
                    aria-disabled="true"
                    placeholder="Say Something"
                    data-toggle="modal"
                    data-target="#textbox"
                    id="email"
                  ></textarea>
                  <button class="btn-share" type="submit">share</button>
                </form>
              </div>
              <!-- share content box end -->

              <!-- Modal start -->
              <div
                class="modal fade"
                id="textbox"
                aria-labelledby="textbox"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Share Your Mood</h5>
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
                      <form action="/post" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" class="form-control" id="status" placeholder="Masukkan Status">
                            @error('status')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Foto</label><br>
                            <input type="file" name="image">
                            @error('image')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" name="caption" class="form-control" id="caption" placeholder="Masukkan Caption">
                            @error('caption')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quotes">Quotes</label>
                            <input type="text" name="quotes" class="form-control" id="quotes" placeholder="Masukkan Quotes">
                            @error('quotes')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="post-share-btn"
                            data-dismiss="modal"
                          >
                            cancel
                          </button>
                          <button type="submit" class="post-share-btn">
                            post
                          </button>
                        </div>
                    </form>
                    </div>
                    {{-- <div class="modal-footer">
                      <button
                        type="button"
                        class="post-share-btn"
                        data-dismiss="modal"
                      >
                        cancel
                      </button>
                      <button type="button" class="post-share-btn">
                        post
                      </button>
                    </div> --}}
                  </div>
                </div>
              </div>
              <!-- Modal end -->
            </div>
          </div>
          <!-- share box end -->

          <!-- post status start -->
          @foreach ($post as $data)
          <div class="card">
            <!-- post title start -->
          {{-- <div class="card-body"> --}}
            <div class="post-title d-flex align-items-center">
                <!-- profile picture end -->
              <div class="profile-thumb">
                <a href="#">
                  <figure class="profile-thumb-middle">
                    <img
                      src="{{asset('assets/images/profile/profile-small-1.jpg')}}"
                      alt="profile picture"
                    />
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
                  <a href="{{asset('assets/images/post/post-large-1.jpg')}}">
                    <img
                      src="{{ URL($data->image) }}" 
                      alt="post image"
                    />
                  </a>
                </figure>
              </div>
              <div class="post-meta">
                <button class="post-meta-like">
                  <i class="bi bi-heart-beat"></i>
                  <span>201 User like this</span>
                  <strong>201</strong>
                </button>
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
          <!-- post status end -->
        </div>

        <div class="col-lg-3 order-2">
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
        </div>
      </div>
    </div>
  </div>
@endsection