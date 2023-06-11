@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/listing-detail.css') }}">
@endpush
@section('frontend-content')
    <style>
        .detail-slides .swiper {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .detail-slides .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .detail-slides .mySwiper2 {
            height: 300px;
            width: 100%;
        }

        .detail-slides .mySwiper {
            height: 80px;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .detail-slides .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .detail-slides .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .detail-slides .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-md-2">
                <a href="{{ url('/') }}" class="border-btn">
                    Back to category List
                </a>
                <small>AD ID: <b>12345678</b></small>
            </div>
            <div class="col-md-5">
                {{-- <h4>2017 BMW M3 M3 Competition Auto for sale R 18900000</h4> --}}
                <h4>{{ $all_listings->title }}</h4>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card sellerInfo-card">
                    <div class="card-header">
                        Seller Information
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td><i class="fas fa-user"></i> Name</td>
                                <td>{{ $all_listings->user->first_name. ' '. $all_listings->user->last_name }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-location-arrow"></i> Location</td>
                                <td>{{ $all_listings->city }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-edit"></i> Registered</td>
                                <td>{{ $all_listings->user->created_at->format('d/m/Y')}}</td>
                            </tr>
                            <tr>
                                <td>Selller Rating</td>
                                <td class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope"></i> Verified</td>
                                <td class="verified"><i class="fas fa-award"></i> Email Verified</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <div class="map">
                                <b>Map Location:{{ $all_listings->city }}</b>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.2309712246865!2d73.07267667860448!3d33.65117670318933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df953a89df2bab%3A0xbd10fedbf14b744f!2sStadium%20Rd%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1650148322204!5m2!1sen!2s"
                                    width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="" class="border-btn">
                                View Seller Listings
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- Swiper -->
                <div class="detail-slides">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper2 detail-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_1 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_2 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_3 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_4 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_5 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_6 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_7 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_8 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_9 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_10 }}" />
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_1 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_2 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_3 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_4 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_5 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_6 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_7 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_8 }}" />
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/{{ $all_listings->image_9 }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>{{ $all_listings->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="right-description">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about">
                                <p><b>Listed: </b>{{ $all_listings->created_at->format('F j, Y') }}</p>
                                <p><b>Remaining Time: </b><span class="remaining-time">2 Day 18:44:50</span></p>
                                <p><b>Current Price: </b><span class="price">{{ $all_listings->price }}</span> <span
                                        class="reserve-price">Reserve Price Met</span></p>
                                <p><a href="" class="quick-bid-button btn btn-sm d-block">Quick Bid {{ $all_listings->price }}</a></p>
                                <form class="bid-form">
                                    <div class="input-group mt-2">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" aria-describedby="emailHelp">
                                        <button type="submit" class="btn btn-sm bid-button mx-2">Submit Bid</button>
                                    </div>
                                </form>
                                <div id="emailHelp" class="form-text">Minimum bid ${{ $all_listings->price }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="social-share">
                                        <a href=""><img src="{{ asset('frontend/facebook.png') }}" alt=""></a>
                                        <a href=""><img src="{{ asset('frontend/messenger.png') }}" alt=""></a>
                                        <a href=""><img src="{{ asset('frontend/whatsapp.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="bid-history">
                                <div class="row">
                                    <div class="col-12">
                                        <span>Higher Bider: Susan sales</span>
                                    </div>
                                    <div class="col-6">
                                        <a href="">5 Bid(s)</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="">Bid History <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <span>0 Watching</span>
                                    </div>
                                    <div class="col-12">
                                        <a href=""><i class="fas fa-plus"></i> Add to watchlist</a>
                                    </div>
                                    <div class="col-12">
                                        <a href="" class="border-btn">
                                            Ask Seller a Question
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="description">
                                <p>Make: <b>{{ $all_listings->title }}</b></p>
                                <p>Body Style: <b>{{ $all_listings->body_style }}</b></p>
                                <p>Year: <b>{{ $all_listings->year }}</b></p>
                                <p>Doors: <b>{{ $all_listings->doors }}</b></p>
                                <p>Seller Type: <b>{{ $all_listings->seller_type }}</b></p>
                                <p>Color: <b>{{ $all_listings->color }}</b></p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="description">
                                <p>Make: <b>{{ $all_listings->title }}</b></p>
                                <p>Body Style: <b>{{ $all_listings->body_style }}</b></p>
                                <p>Year: <b>{{ $all_listings->year }}</b></p>
                                <p>Doors: <b>{{ $all_listings->doors }}</b></p>
                                <p>Seller Type: <b>{{ $all_listings->seller_type }}</b></p>
                                <p>Color: <b>{{ $all_listings->color }}</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered mt-2 shipping-table">
                                <tbody>
                                    <tr>
                                        <th>
                                            <h6>Seller Accepts</h6>
                                        </th>
                                        <th>
                                            <h6>Shipping</h6>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            Cash, EFT, Bitcoin
                                        </td>
                                        <td>
                                            Collection, Courier
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="similar-items">
                    <div class="container">
                        <h6 style="margin-top: 30px">Similar Items</h6>
                    </div>
                    @include('frontend.inc.slides')
                </div>
            </div>
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
