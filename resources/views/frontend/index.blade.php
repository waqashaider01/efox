@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
@endpush
@section('frontend-content')
    @include('frontend.inc.header-categories')
    @include('frontend.inc.slides')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                <div class="left-content">
                    <h2 class="content-heading">
                        Listing type
                    </h2>
                    <ul class="listing-type">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="listingType" id="listingType">
                                <label class="form-check-label" for="listingType">
                                    On Auction
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="listingType" id="listingType" checked>
                                <label class="form-check-label" for="listingType">
                                    Buy Now (Classifieds)
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="listingType" id="listingType" checked>
                                <label class="form-check-label" for="listingType">
                                    Auctions & Classifieds
                                </label>
                            </div>
                        </li>
                    </ul>

                    <h2 class="content-heading">
                        choose region
                    </h2>
                    <ul class="choose-region">
                        <li>
                            @if(isset($cities))
                            @foreach($cities as $city)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="region" id="region">
                                <label class="form-check-label" for="region">
                                    <a href="">{{ $city->city_name }}</a> <span>(411)</span>
                                </label>
                            </div>
                            @endforeach
                            @endif
                        </li>
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="region" id="region" checked>
                                <label class="form-check-label" for="region">
                                    <a href="">Kwazulu Natal</a> <span>(222)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="region" id="region" checked>
                                <label class="form-check-label" for="region">
                                    <a href="">Johanessberg</a> <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                    </ul>

                    <h2 class="content-heading">
                        item condition
                    </h2>
                    <ul class="item-condition">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="itemCondition" id="itemCondition">
                                <label class="form-check-label" for="itemCondition">
                                    Any
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="itemCondition" id="itemCondition"
                                    checked>
                                <label class="form-check-label" for="itemCondition">
                                    New <span>(411)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="itemCondition" id="itemCondition"
                                    checked>
                                <label class="form-check-label" for="itemCondition">
                                    SecondHand <span>(411)</span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="itemCondition" id="itemCondition"
                                    checked>
                                <label class="form-check-label" for="itemCondition">
                                    Refurbished <span>(411)</span>
                                </label>
                            </div>
                        </li>
                    </ul>

                    <h2 class="content-heading">
                        Choose category
                    </h2>
                    <ul class="category">
                        <li>
                            @if($categories)
                            @foreach($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category">
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="/img/categories/{{ $category->image_file }}"
                                        alt="property">
                                    &nbsp;&nbsp;{{ $category->category_name }}<span>(411)</span>
                                </label>
                            </div>
                            @endforeach
                            @endif
                        </li>
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Cars & Vehicles <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Education <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Electronics <span>(411)</span>
                                </label>
                            </div>
                        </li>
                        <li> --}}
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Food & Agriculture <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Health & Beauty <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Hobby, Sport & Kids <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Home Appliances <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Jobs <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Others <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Pets & Animals <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Property <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="category" checked>
                                <label class="form-check-label" for="category">
                                    &nbsp;&nbsp;<img src="{{ asset('frontend/images/categories/property.png') }}"
                                        alt="property">
                                    &nbsp;&nbsp;Services <span>(411)</span>
                                </label>
                            </div>
                        </li> --}}

                    </ul>
                    <h2 class="content-heading py-3">
                    </h2>
                    <form class="search-form">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Only Ads with Pictures</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R</span>
                            <input type="text" class="form-control" placeholder="Min Price" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R</span>
                            <input type="text" class="form-control" placeholder="Max Price" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="mb-3 keyword-search">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Keyword">
                        </div>
                        <button class="reset-btn">Reset All</button>
                    </form>
                </div>{{-- left-content end --}}
                <div class="d-flex justify-content-center mt-1">
                    <button type="submit" class="go-btn">GO</button>
                </div>
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Featured ads
                </h2>
                <div class="row">
                    <div class="col-md-9">
                        
                        <div class="row">
                            @if(isset($all_listings))
                        @foreach($all_listings as $list)

                            <div class="col-md-3 mt-4">
                                <div class="auction-card">
                                    <div class="card">
                                        <img src="/frontend/images/{{ $list->image_1 }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a href="#">{{ $list->title }}</a></h5>
                                            <span>R {{ $list->price }}</span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        @if($list->listing_type == '1')
                                       <a href="{{ url('listing-detail') }}/{{ $list->id }}"><button class="auction-card-btn">On Auction <i
                                                class="fas fa-angle-right"></i></button></a>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span>
                                                </p>
                                                @endif
                                        @if($list->listing_type == '0')
                                        <a href="{{ url('listing-detail') }}/{{ $list->id }}"> <button class="auction-card-btn">Buy Now<i
                                            class="fas fa-angle-right"></i></button></a>
                                            @endif
                                        <p class="location mt-2"><i class="fas fa-map-marker-alt"></i> {{ $list->city }}</p>
                                    </div>
                                </div>{{-- auction-card --}}
                            </div>

                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        @if(auth()->user())
                        <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();
        
                        "><h2 style="color: white" class="content-heading">
                                Logout
                            </h2></a>
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                    @csrf
                                </form>
                        <div class="right-content">
                            @else
                            <h2 class="content-heading">
                                Login
                            </h2>
                            <form class="login-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-1">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control block mt-1 w-full" id="exampleInputEmail1">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input  type="password"  name="password" class="form-control block mt-1 w-full" id="exampleInputPassword1">
                                </div>
                                <div class="mb-1">
                                    <input type="checkbox">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-sm primary-button">Login</button>
                            </form>
                            @endif
                            @if(isset($banners))
                            @php
                                $x = 0;
                            @endphp
                            @foreach($banners as $banner)
                            @php
                                $x++;
                            @endphp
                            <div class="ad-banner{{$x}}">
                                <img class="img-responsive" src="/img/Banners/{{ $banner->banner_image }}">
                            </div>
                            @if($x == 3) @break @endif
                            @endforeach
                            @endif
                            {{-- <div class="ad-banner2">
                                <img src="/img/Banners/{{ $banners->banner_image }}">
                            </div>
                            <div class="ad-banner3">
                                <img src="/img/Banners/{{ $banners->banner_image }}">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>{{-- main-content end --}}
        </div>
        <div class="container">
            <div class="banners">
                
                <div class="row">
                    @if(isset($banners))
                @php
                $y = 1;
                @endphp
                @foreach($banners as $banner)
                @php
                $y++;
                if($y < 4) continue; 
                @endphp
                    <div class="col-md-4 mt-2">
                        <div class="ad-banner{{ $y }}">
                            <img class="img-responsive" src="/img/Banners/{{ $banner->banner_image }}">
                        </div>
                        @if($y == 6) @break @endif
                    </div>
                    @endforeach
                @endif
                    {{-- <div class="col-md-4 mt-2">
                        <div class="ad-banner5">
                            Ad Banner 5
                        </div>
                    </div>
                    <div class="col-md-4 mt-2">
                        <div class="ad-banner6">
                            Ad Banner 6
                        </div>
                    </div> --}}
                </div>
                
            </div>
        </div>
    </div>
@endsection
