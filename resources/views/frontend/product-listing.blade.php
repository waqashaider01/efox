@extends('frontend.layouts.app')
@push('frontend-styles')
<link rel="stylesheet" href="{{ asset('frontend/css/create-listing.css') }}">
@endpush
@section('frontend-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 mt-5">
            @include('frontend.inc.side-nav')
        </div>

        <div class="col-md-9 mt-5">
            <h2 class="content-heading">
                Create Listing
            </h2>
            <section>
                <div class="m-4">
                    <form action="{{ url('add-listings') }}" method="post" enctype="multipart/form-data">
                             @csrf

                                <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>

                        <div class="row">
                            <div class="col-md-2 labelStyle">
                                <h5 class="">Category</h5>
                            </div>
                            <div class="col-md-2">
                                <select name="category" class="form-control form-select d-inline myCategoryFilter">
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                        @endif
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="sub_category" class="form-control form-select d-inline  myCategoryFilter">
                                        @if(!empty($subcategories))
                                        @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
                                        @endforeach
                                        @endif
                                </select>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Title</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control titleInput d-inline"
                                    id="exampleFormControlInput1"
                                    placeholder="2007 BMW 328i for sale in very good condition">
                                <i class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Listing Type</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="listing_type" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="0">Buy Now</option>
                                    <option value="1">Auction</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Start Date</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="start_date" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Start Time</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="time" name="start_time" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Listing Duration</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="listing_duration" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="7">7 Days</option>
                                    <option value="14">14 Days</option>
                                    <option value="21">21 Days</option>
                                    <option value="30">30 Days</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Price*</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="price" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Quantity</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="quantity" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Starting Price</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="starting_price" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Reserved Price</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="reserve_price" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Color</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="color" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="blue">blue</option>
                                    <option value="red">red</option>
                                    <option value="purple">purple</option>
                                    <option value="black">black</option>
                                    <option value="white">white</option>
                                    <option value="yellow">yellow</option>
                                    <option value="pink">pink</option>
                                    <option value="sky_blue">sky blue</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Doors</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="doors" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Body Styles</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="body_style" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="Sedan">Sedan</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Sports Car">Sports Car</option>
                                    <option value="Station Wagon">Station Wagon</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="Hatchback">Hatchback </option>
                                    <option value="Convertible">Convertible</option>
                                    <option value="Utility Vehicle">Utility Vehicle</option>
                                    <option value="Minivan">Minivan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Mileage</h5>
                            </div>
                            <div class="col-md-9">
                                <input name="mileage" type="text" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Year</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="year" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Condition</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="condition" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="Any">Any</option>
                                    <option value="New">New </option>
                                    <option value="SecondHand">SecondHand </option>
                                    <option value="Refurbished">Refurbished </option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Transmissions</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="transmission" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="Manual Transmission">Manual Transmission</option>
                                    <option value="Automatic Transmission">Automatic Transmission</option>
                                    <option value="Continuously Variable Transmission">Continuously Variable Transmission</option>
                                    <option value="Semi-Automatic Transmission">Semi-Automatic Transmission</option>
                                    <option value="Dual-Clutch Transmission">Dual-Clutch Transmission</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Seller Type*</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="seller_type" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="Dealer">Dealer</option>
                                    <option value="Seller">Seller</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Air Conditioning</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="air_conditioned" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Registered</h5>
                            </div>
                            <div class="col-md-9">
                                <select name="registered" class="form-control form-select d-inline commonInputStyle"
                                    id="exampleFormControlSelect1">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Description*</h5>
                            </div>
                            <div class="col-md-9">
                                <textarea name="description" class="form-control commonInputStyle" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Upload Photos</h5>
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <div class="row">
                                        <div class="col-md-2 col-sm-3">
                                            <a href="javascript:delItem('delIconStyle1');" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle1"></i></a>
                                            <label for="img1"><img id="photo1"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img1" name="image_1" class="imagesStyle imageInput1">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle2"></i></a>
                                            <label for="img2"><img id="photo2"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img2" name="image_2" class="imagesStyle imageInput2">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle3"></i></a>
                                            <label for="img3"><img id="photo3"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img3" name="image_3" class="imagesStyle imageInput3">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle4"></i></a>
                                            <label for="img4"><img id="photo4"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img4" name="image_4" class="imagesStyle imageInput4">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle5"></i></a>
                                            <label for="img5"><img id="photo5"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img5" name="image_5" class="imagesStyle imageInput5">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle6"></i></a>
                                            <label for="img6"><img id="photo6"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img6" name="image_6" class="imagesStyle imageInput6">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle7"></i></a>
                                            <label for="img7"><img id="photo7"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img7" name="image_7" class="imagesStyle imageInput7">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle8"></i></a>
                                            <label for="img8"><img id="photo8"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img8" name="image_8" class="imagesStyle imageInput8">
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle9"></i></a>
                                            <label for="img9"><img id="photo9"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img9" name="image_9" class="imagesStyle imageInput9">
                                        </div>
                                        <div class="col-md-2 col-sm-3">
                                            <a href="#" class="delIconLinkStyle"><i
                                                    class="fa-solid fa-trash-can delIconStyle delIconStyle10"></i></a>
                                            <label for="img10"><img id="photo10"
                                                    src="{{asset('/frontend/images/img_placeholder.png')}}" alt=""
                                                    width="95px" class="imageGalleryStyle" height="75px"></label>
                                            <input type="file" id="img10" name="image_10" class="imagesStyle imageInput10">
                                        </div>
                                        <div class="col-md-8 col-sm-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-5">
                        <div class="row mt-5">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">City*</h5>
                            </div>
                            <div class="col-md-9">
                                @foreach($cities as $city)
                                    @if(auth()->user()->city_id == $city->id)
                                      <input value="{{$city->city_name}}" name="city" type="text"  class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">  
                                    @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Your Suburb*</h5>
                            </div>
                            <div class="col-md-9">
                                @foreach($suburbs as $suburb)
                                    @if(auth()->user()->suburb_id == $suburb->id)
                                      <input value="{{$suburb->suburb_name}}" type="text" name="suburb"  class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">  
                                    @endif
                                @endforeach

                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Name*</h5>
                            </div>
                            <div class="col-md-9">
                                <input type="text" value="{{ auth()->user()->first_name }}" name="name" class="form-control d-inline commonInputStyle"
                                    id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <hr class="mt-5">
                        <div class="row mt-5">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Shipping</h5>
                            </div>
                            <div class="col-md-9">
                                <textarea name="shipping" class="form-control commonInputStyle" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-3 labelStyle">
                                <h5 class="">Payment Method Preferred</h5>
                            </div>
                            <div class="col-md-9">
                                <textarea name="payment_method" class="form-control commonInputStyle" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12 labelStyle">
                                <h5 class="">Select Listing Options</h5>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <table class="table table-bordered table-light bg-grey">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="category_page_free" type="checkbox" id="check1" value="1" checked>
                                                    <label class="form-check-label">Category Page free</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="category_page_free_days" class="form-control form-select d-inline commonInputStyle"
                                                    id="exampleFormControlSelect1">
                                                    <option value="7">7 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="check1"
                                                        name="category_featured_image" value="2">
                                                    <label class="form-check-label">Category Featured Image</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="category_featured_image_days" class="form-control form-select d-inline commonInputStyle"
                                                    id="exampleFormControlSelect1">
                                                    <option value="7">7 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>
                                            </td>
                                            <td>$15.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="check1"
                                                        name="home_page_featured" value="3" checked>
                                                    <label class="form-check-label">Home Page Featured</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="home_page_featured_days" class="form-control form-select d-inline commonInputStyle"
                                                    id="exampleFormControlSelect1">
                                                    <option value="7">7 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>
                                            </td>
                                            <td>$20.00</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="check1"
                                                        name="homepage_slider_gallery" value="4">
                                                    <label class="form-check-label">Home Page Slider Gallery</label>
                                                </div>
                                            </td>
                                            <td>
                                                <select name="homepage_slider_gallery_days" class="form-control form-select d-inline commonInputStyle"
                                                    id="exampleFormControlSelect1">
                                                    <option value="7">7 Days</option>
                                                    <option value="14">14 Days</option>
                                                    <option value="21">21 Days</option>
                                                    <option value="30">30 Days</option>
                                                </select>
                                            </td>
                                            <td>$25.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-borderless table-light bg-grey productTable" column="5">
                                    <tbody>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="1" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">Featured</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">Featured</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="2" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">Buy Me</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">Buy Me</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="3" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">Rent Me</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">Rent Me</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="4" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">Bargain</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">Bargain</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="5" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">On Sale</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">On Sale!</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pCol1">
                                                <div class="d-inline">
                                                    <input class="form-check-input" value="6" type="radio" name="tag_status"
                                                        id="radioNoLabel1" aria-label="...">
                                                </div>
                                            </td>
                                            <td class="pCol2">
                                                <div class="card">
                                                    <span class="ribbon">Auction</span>
                                                </div>
                                            </td>
                                            <td class="pCol3">
                                                <h4 class="mt-5">Auction</h4>
                                            </td>
                                            <td class="pCol4">
                                                <h4 class="mt-5">$5.00</h4>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <h3 style="text-align:right;">Total : $35.00</h3>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="flex-parent jc-center">
                                    <button type="submit" class="btn-primary green myAcceptBtn p-3">Accept &
                                        Submit</button>
                                    <button type="submit" class="btn-danger magenta myPreviewBtn">Preview</button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </section>

        </div>
    </div>
    <script>
    const imageFile1 = document.querySelector('.imageInput1');
    const imageFile2 = document.querySelector('.imageInput2');
    const imageFile3 = document.querySelector('.imageInput3');
    const imageFile4 = document.querySelector('.imageInput4');
    const imageFile5 = document.querySelector('.imageInput5');
    const imageFile6 = document.querySelector('.imageInput6');
    const imageFile7 = document.querySelector('.imageInput7');
    const imageFile8 = document.querySelector('.imageInput8');
    const imageFile9 = document.querySelector('.imageInput9');
    const imageFile10 = document.querySelector('.imageInput10');

    const del1 = document.querySelector('.delIconStyle1');
    const del2 = document.querySelector('.delIconStyle2');
    const del3 = document.querySelector('.delIconStyle3');
    const del4 = document.querySelector('.delIconStyle4');
    const del5 = document.querySelector('.delIconStyle5');
    const del6 = document.querySelector('.delIconStyle6');
    const del7 = document.querySelector('.delIconStyle7');
    const del8 = document.querySelector('.delIconStyle8');
    const del9 = document.querySelector('.delIconStyle9');
    const del10 = document.querySelector('.delIconStyle10');



    const ph1 = document.querySelector('#photo1');
    const ph2 = document.querySelector('#photo2');
    const ph3 = document.querySelector('#photo3');
    const ph4 = document.querySelector('#photo4');
    const ph5 = document.querySelector('#photo5');
    const ph6 = document.querySelector('#photo6');
    const ph7 = document.querySelector('#photo7');
    const ph8 = document.querySelector('#photo8');
    const ph9 = document.querySelector('#photo9');
    const ph10 = document.querySelector('#photo10');


    function delItem(a) {
        if (a == 'delIconStyle1') {
            del1.style.display = "none";
            ph1.setAttribute('src', '/frontend/images/img_placeholder.png');
        }
    }

    imageFile1.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph1.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del1.style.display = "block";
        }
    });

    imageFile2.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph2.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del2.style.display = "block";
        }
    });

    imageFile3.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph3.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del3.style.display = "block";
        }
    });

    imageFile4.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph4.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del4.style.display = "block";
        }
    });

    imageFile5.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph5.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del5.style.display = "block";
        }
    });

    imageFile6.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph6.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del6.style.display = "block";
        }
    });

    imageFile7.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph7.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del7.style.display = "block";
        }
    });

    imageFile8.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph8.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del8.style.display = "block";
        }
    });

    imageFile9.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph9.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del9.style.display = "block";
        }
    });

    imageFile10.addEventListener('change', function() {
        const choosedFile = this.files[0];
        if (choosedFile) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                ph10.setAttribute('src', reader.result);
            });

            reader.readAsDataURL(choosedFile);
            del10.style.display = "block";
        }
    });
    </script>
    @endsection