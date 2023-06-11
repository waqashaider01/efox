<link rel="stylesheet" href="{{ asset('frontend/css/slides.css') }}">
<section id="slides">
    <div class="container">
        <!-- Swiper -->
        @if($slidersettings && $slidersettings->visible_status == 'on')
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
                @endforeach
                    @endif
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
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            
        </div
        @endif>
    </div>
</section>

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



