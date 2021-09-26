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