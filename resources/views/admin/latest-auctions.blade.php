@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/latest-auctions.css') }}">
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
@endpush
@section('admin-content')
    <section class="latest-ads">
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    Latest Auctions
                </h4>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <input type="date" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
                
            <div class="row">
                @if(isset($latestAuctions))
                         @foreach($latestAuctions as $auction)
                <div class="col-md-12">
                    <div class="listing-card mt-2">
                        <div class="card p-3">
                            <div class="row g-0">
                                <div class="col-md-2">
                                    <!-- Swiper -->
                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                        class="swiper mySwiper2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_1 }}" />
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div thumbsSlider="" class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_2 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_3 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_4 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_5 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_6 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_7 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_8 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_9 }}" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/frontend/images/{{ $auction->image_10 }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="">{{ $auction->title }}</a></h5>
                                        <p class="card-text">{{ $auction->description }}
                                        </p>
                                        <div class="card-text">
                                            <small class="text-muted">
                                                <i class="fas fa-user"></i> {{ $auction->name }}
                                            </small>
                                        </div>
                                        <div class="card-text mt-1">
                                            <small class="text-muted">
                                                <i class="far fa-star"></i> Watch this
                                            </small>
                                        </div>
                                        <div class="card-text mt-1">
                                            <small class="text-muted">
                                                <i class="fas fa-map-marker-alt"></i> {{ $auction->city }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="right">
                                        <h4 class="price">R {{ $auction->price }}</h4>
                                        <a href="" class="view-btn">View</a>
                                        <div class="bids">
                                            <img src="/frontend/images/{{ $auction->image_1 }}" width="30px"
                                                alt="auction" class="mt-1"><br>
                                            <a href="" class=" mt-2">5 Bid(s)</a>
                                        </div>
                                        <div class="post-time mt-1">
                                            <i class="fas fa-business-time"></i> <span>{{ $auction->created_at->diffForHumans() }}</span>
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
                @endforeach
                @endif
            </div>
        </div>
    </section>

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
