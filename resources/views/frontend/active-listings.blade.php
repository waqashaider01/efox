@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/listings.css') }}">
@endpush
@section('frontend-content')
    <style>
        .swiper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 55%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                @include('frontend.inc.side-nav')
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Active Listings
                </h2>
                <div class="row">
                    <div class="col-md-11">
                        <div class="listing-card mt-2">
                            <div class="card p-3">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <!-- Swiper -->
                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                            class="swiper mySwiper2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div thumbsSlider="" class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="">Toyota fortuner D4-d</a></h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.This content is a little bit longer.This content is a little bit
                                                longer.
                                            </p>
                                            <div class="card-text">
                                                <small class="text-muted">
                                                    <i class="fas fa-user"></i> Muhammad Salman
                                                </small>
                                            </div>
                                            <div class="card-text mt-1">
                                                <small class="text-muted">
                                                    <i class="far fa-star"></i> Watch this
                                                </small>
                                            </div>
                                            <div class="card-text mt-1">
                                                <small class="text-muted">
                                                    <i class="fas fa-map-marker-alt"></i> Pakistan
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="right">
                                            <h4 class="price">R 100000</h4>
                                            <a href="" class="view-btn">View</a>
                                            <div class="bids">
                                                <img src="{{ asset('frontend/images/auction.png') }}" width="30px"
                                                    alt="auction" class="mt-1"><br>
                                                <a href="" class=" mt-2">5 Bid(s)</a>
                                            </div>
                                            <div class="post-time mt-1">
                                                <i class="fas fa-business-time"></i> <span>11 days ago</span>
                                            </div>
                                            <div class="remaining-time mt-1">
                                                <b>Remaining Time</b> <span>11 days 15:34</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- listing-card end --}}
                    </div>
                </div>
            </div>{{-- main-content end --}}
        </div>
    </div>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection
