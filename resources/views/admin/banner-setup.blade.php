@extends("admin.layouts.app")
@push('admin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/admin-staff.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('admin/choosen-select/docsupport/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/choosen-select/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/choosen-select/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slides.css') }}">
    <style>
        .chosen-container {
            width: 100% !important;
        }

        .chosen-choices {
            padding: 6px 4px !important;
        }

    </style>
@endpush
@section('admin-content')
    <!-- Add Banner Modal -->
    <div class="modal fade" id="addBannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('create-banner')}}" method="post" enctype="multipart/form-data">
                    @csrf
                                <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="bannerName" class="form-label">Banner Name</label>
                            <input type="text" class="form-control" id="bannerName" name="bannerName">
                        </div>
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="bannerImage" name="bannerImage">
                        </div>
                        <div class="mb-3">
                            <label for="adsenceCode" class="form-label">Adsence Code</label>
                            <input type="text" class="form-control" id="adsenceCode" name="adsenceCode">
                        </div>
                        <div class="mb-3">
                            <label for="categories" class="form-label">Categories</label>
                            <select class="chosen-select" name="categories[]" id="categories" multiple>
                                <option value="Computers">Computers</option>
                                <option value="Cars">Cars</option>
                                <option value="Toys">Toys</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bannerSlot" class="form-label">Banner Slot</label>
                            <select class="form-select" aria-label="Default select example" name="bannerSlot"
                                id="bannerSlot">
                                <option selected>1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="paidFrom" class="form-label">Paid From</label>
                                    <input type="date" class="form-control" id="paidFrom" name="paidFrom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validUntil" class="form-label">Valid Until</label>
                                    <input type="date" class="form-control" id="validUntil" name="validUntil">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    Banner Setup
                </h4>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end my-2">
                        <div>
                            <button href="" class="btn primary-button" data-bs-toggle="modal"
                                data-bs-target="#addBannerModal"><i class="fas fa-user-plus"></i> Create Banner</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Banners Main Site
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th width="300px">Adsense Code</th>
                                        <th>Banner Image</th>
                                        <th>Date Uploaded</th>
                                        <th>Valid Until</th>
                                        <th>Actions</th>
                                    </tr>
                                    @if(isset($banners))
                                        @foreach($banners as $banner)
                                            <tr>
                                                <td>
                                                    {{$banner->adsence_code}}
                                                </td>
                                                <td>
                                                    <img src="/img/Banners/{{ $banner->banner_image }}" style="height: 100px; width: 70%;">
                                                </td>
                                                <td>{{$banner->created_at}}</td>
                                                <td>{{$banner->valid_until}}</td>
                                                <td>
                                                    @include('admin.editbanner')
                                                    
                                                    <a href="{{url('destroy-banner')}}/{{$banner->id}}" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sliders -->

            <div class="modal fade" id="addSliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('create-slider')}}" method="post" enctype="multipart/form-data">
                    @csrf
                                <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="bannerName" class="form-label">Price</label>
                            <input type="number" class="form-control" id="bannerName" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="bannerImage" class="form-label">Slider Image</label>
                            <input type="file" class="form-control" id="bannerImage" name="slider_image">
                        </div>
                        <div class="mb-3">
                            <label for="bannerSlot" class="form-label">Location</label>
                            <select class="form-select" aria-label="Default select example" name="location"
                                id="bannerSlot">
                                <option value="">Select Location</option>
                                    @if(!empty($city))
                                        @foreach($city as $city)
                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                                        @endforeach
                                    @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="adsenceCode" class="form-label">Slider Speed</label>
                            <input type="number" class="form-control" id="adsenceCode" name="slider_speed">
                        </div>
                        <div class="mb-3">
                            <label for="adsenceCode" class="form-label">Pause</label>
                            <input type="number" class="form-control" id="adsenceCode" name="slider_pause">
                        </div>
                        <div class="mb-3">
                            <label for="bannerSlot" class="form-label">Visible Status</label>
                            <select class="form-select" aria-label="Default select example" name="visible_status"
                                id="bannerSlot">
                                <option value="on">ON</option>
                                <option value="off">OFF</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bannerSlot" class="form-label">Auto Play</label>
                            <select class="form-select" aria-label="Default select example" name="autoplay_status"
                                id="bannerSlot">
                                <option value="on">ON</option>
                                <option value="off">OFF</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="bannerSlot" class="form-label">Mouse Hover</label>
                            <select class="form-select" aria-label="Default select example" name="mousehover_status"
                                id="bannerSlot">
                                <option value="on">ON</option>
                                <option value="off">OFF</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="paidFrom" class="form-label">Start From</label>
                                    <input type="date" class="form-control" id="paidFrom" name="start_from">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="validUntil" class="form-label">Valid Until</label>
                                    <input type="date" class="form-control" id="validUntil" name="valid_until">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Slider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section>
                <!-- Gallery Slider -->

            <div class="container">
            <form action="{{ url('update-setting') }}" method="post">
                <input type="hidden" name="id" value="{{ $slidersettings->id }}">
                @csrf
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                    </div>
                <div class="row mt-5">
                    <h6 class="text-center">Gallery Slider Settings</h6>
                    <div class="col-md-9">
                        <table class="table table-borderless" style="font-size: 12px">
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th width="50px"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                    <tr>
                                    
                                    <td>Set Slider Speed</td>
                                    <td class="d-flex"><input value="{{ $slidersettings->slider_speed }}" type="number" id="bannerSpeed" name="slider_speed"
                                            style="width:70px">&nbsp;
                                        <span> ms</span>
                                    </td>
                                    <td>Gallery Slider Visible</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($slidersettings && $slidersettings->visible_status == 'on')
                                            <input type="checkbox"  name="visible_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox"  name="visible_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                    <td>Puase On Mouse Hover</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($slidersettings && $slidersettings->mousehover_status == 'on')
                                            <input type="checkbox"  name="mousehover_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox"  name="mousehover_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pause</td>
                                    <td class="d-flex"><input value="{{ $slidersettings->slider_pause }}" type="number" id="bannerName" name="slider_pause"
                                            style="width:70px">&nbsp;
                                        <span> ms</span>
                                    </td>
                                    <!-- <td>Auto Play</td>
                                    <td>
                                        <label class="switch switch-green">
                                            @if($slidersettings && $slidersettings->autoplay_status == 'on')
                                            <input type="checkbox" name="autoplay_status" class="switch-input" checked>
                                            @else
                                            <input type="checkbox" name="autoplay_status" class="switch-input">
                                            @endif
                                            <span class="switch-label" data-on="On" data-off="Off"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($slidersettings && $slidersettings->visible_status == 'on')
                <div class="row">
                    <div class="col-md-12">
                        <section id="slides">
                            <div class="container">
                                <!-- Swiper -->
                                <div class="swiper slides">
                                    
                                    <div class="swiper-wrapper">
                                        @if(count($listings))
                                        @foreach($listings as $listing)
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ url('/frontend/images/'.$listing->image_1) }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R{{ $listing->price }}</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> {{ $listing->city }}</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide2.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide3.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide4.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide5.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide6.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide1.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide2.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide3.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide4.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide5.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2 swiper-slide">
                                            <img src="{{ asset('frontend/images/slides/slide6.jpg') }}" alt="all">
                                            <div class="content">
                                                <p class="name"><b>R84530</b></p>
                                                <p class="location"><i class="fas fa-map-marker-alt"></i> Pakistan</p>
                                                <p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span></p>
                                            </div>
                                        </div> -->
                                        @endforeach
                                        @endif
                                    </div>
                                    
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </section>
                                
                            

                    </div>
                </div>
                @endif
                <div class="text-center mt-3">
                    <button type="submit" class="btn primary-button">Save</button>
                </div>
            </form>
        </div>
    </section>

    <script src="{{ asset('admin/choosen-select/docsupport/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/choosen-select/chosen.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/choosen-select/docsupport/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('admin/choosen-select/docsupport/init.js') }}" type="text/javascript" charset="utf-8"></script>
    @if($slidersettings)
        <script>
            var swiper = new Swiper(".slides", {
                slidesPerView: 6,
                spaceBetween: 24,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                speed:{{ $slidersettings->slider_speed }},
                autoplay:{
                 delay:{{ $slidersettings->slider_pause }},
                },
            });
  
        </script>

        @if($slidersettings && $slidersettings->autoplay_status == 'on')
        <script>
            autoplay:true,
        </script>
        @endif

        @if($slidersettings->mousehover_status == 'on')
            <script>
                $('.swiper-slide').on('mouseout', function() {
                  swiper.autoplay.start();
                   $('.swiper-slide').css('cursor','default');
                });

                $('.swiper-slide').on('mouseover', function() {
                  swiper.autoplay.stop();
                  $('.swiper-slide').css('cursor','pointer');
                });
            </script>
        @endif
    @endif
@endsection
