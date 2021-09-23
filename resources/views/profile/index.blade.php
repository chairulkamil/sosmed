@extends('layout.master')

@section('content')
<div class="main-wrapper">
    <div
        class="profile-banner-large bg-img"
        data-bg="assets/images/banner/profile-banner.jpg"
    ></div>
    <div class="profile-menu-area bg-white">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-3">
            <div class="profile-picture-box">
                <figure class="profile-picture">
                <a href="profile.html">
                    <img
                    @foreach ($profile as $item)
                        
                    src="{{ URL($item->foto) }}" style="height: 270px; "
                    {{-- {{ Auth::profile()->URL(foto) }}{{ URL($data->image) }} --}}
                    alt="profile picture"
                    @endforeach
                    />
                </a>
                </figure>
            </div>
            </div>
            <div
            class="col-lg-6 col-md-6 offset-lg-1"
            style="padding-top: 40px; padding-bottom: 40px"
            >
            <!-- <div class="profile-menu-wrapper">
                <div class="main-menu-inner header-top-navigation">
                <nav>
                    <ul class="main-menu">
                    <li class="active"><a href="#">timeline</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="photos.html">photos</a></li>
                    <li><a href="friends.html">friends</a></li>
                    <li><a href="about.html">more</a></li>
                    <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li>
                    </ul>
                </nav>
                </div>
            </div> -->
            </div>
            <div class="col-lg-2 col-md-3 d-none d-md-block">
            <div class="profile-edit-panel">
                <button class="edit-btn">edit profile</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-3 order-2 order-lg-1">
            <aside class="widget-area profile-sidebar">
            <!-- widget single item start -->
            <div class="card widget-item">
                @foreach ($profile as $item)
                <h4 class="widget-title">{{$item->fullName}}</h4>
                <div class="widget-body">
                <div class="about-author">
                    <p>
                    {{$item->bio}}
                    </p>
                    <ul class="author-into-list">
                    <li>
                        <a href="#"
                        ><i class="bi bi-office-bag"></i>{{$item->work}}</a>
                    </li>
                    <li>
                        <a href="#"
                        ><i class="bi bi-home"></i>{{$item->alamat}}</a>
                    </li>
                    <li>
                        <a href="#"
                        ><i class="bi bi-responsive-device"></i>{{$item->no_hp}}</a>
                    </li>
                    <li>
                        <a href="#"
                        ><i class="bi bi-heart-beat"></i>{{$item->hobby}}</a>
                    </li>
                    </ul>
                </div>
                </div>
                @endforeach
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
                        src="assets/images/profile/profile-small-37.jpg"
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
                        <textarea
                        name="share"
                        class="share-field-big custom-scroll"
                        placeholder="Say Something"
                        ></textarea>
                    </div>
                    <div class="modal-footer">
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
                    </div>
                    </div>
                </div>
                </div>
                <!-- Modal end -->
            </div>
            </div>
            <!-- share box end -->

            <!-- post status start -->
            @foreach ($post as $item)
            <div class="card">
            <!-- post title start -->
            
            <div class="post-title d-flex align-items-center">
                <!-- profile picture end -->
                <div class="profile-thumb">
                <a href="#">
                    <figure class="profile-thumb-middle">
                    <img
                    @foreach ($profile as $data)
                        
                    src="{{ URL($data->foto) }}"
                    alt="profile picture"
                    @endforeach
                    />
                    </figure>
                </a>
                </div>
                <!-- profile picture end -->
                
                <div class="posted-author">
                <h6 class="author">
                    <a href="profile.html">{{$item->user->name}}</a>
                </h6>
                <span class="post-time">35 min ago</span>
                </div>

                <div class="post-settings-bar">
                <span></span>
                <span></span>
                <span></span>
                <div class="post-settings arrow-shape">
                    <ul>
                    <li><button>copy link to adda</button></li>
                    <li><button>edit post</button></li>
                    <li><button>embed adda</button></li>
                    </ul>
                </div>
                </div>
            </div>
            <!-- post title start -->
            <div class="post-content">
                <p class="post-desc">
                {{ $item->status }}
                </p>
                <div class="post-thumb-gallery">
                    <figure class="post-thumb img-popup">
                    <a href="http://127.0.0.1:8000/assets/images/post/post-large-1.jpg">
                        <img src="{{ URL($item->image) }}" alt="post image">
                    </a>
                    </figure>
                </div>
                {{-- <div class="post-thumb-gallery img-gallery">
                <div class="row no-gutters">
                    <div class="col-8">
                    <figure class="post-thumb">
                        <a
                        class="gallery-selector"
                        href="assets/images/post/post-large-2.jpg"
                        >
                        <img
                            src="assets/images/post/post-2.jpg"
                            alt="post image"
                        />
                        </a>
                    </figure>
                    </div>
                    <div class="col-4">
                    <div class="row">
                        <div class="col-12">
                        <figure class="post-thumb">
                            <a
                            class="gallery-selector"
                            href="assets/images/post/post-large-3.jpg"
                            >
                            <img
                                src="assets/images/post/post-3.jpg"
                                alt="post image"
                            />
                            </a>
                        </figure>
                        </div>
                        <div class="col-12">
                        <figure class="post-thumb">
                            <a
                            class="gallery-selector"
                            href="assets/images/post/post-large-4.jpg"
                            >
                            <img
                                src="assets/images/post/post-4.jpg"
                                alt="post image"
                            />
                            </a>
                        </figure>
                        </div>
                        <div class="col-12">
                        <figure class="post-thumb">
                            <a
                            class="gallery-selector"
                            href="assets/images/post/post-large-5.jpg"
                            >
                            <img
                                src="assets/images/post/post-5.jpg"
                                alt="post image"
                            />
                            </a>
                        </figure>
                        </div>
                    </div>
                    </div>
                </div>
                </div> --}}
                

                <div class="post-meta">
                <button class="post-meta-like">
                    <i class="bi bi-heart-beat"></i>
                    <span>207 User like this</span>
                    <strong>207</strong>
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
            </div>
            @endforeach
            <!-- post status end -->
        </div>

        <div class="col-lg-3 order-3">
            <aside class="widget-area">
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
            <!-- widget single item end -->
            </aside>
        </div>
        </div>
    </div>
</div>
@endsection