@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/latest-ads.css') }}">
@endpush
@section('admin-content')
    <section class="latest-ads">
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    Latest Ads
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
                @if(isset($latestAds))
                @foreach($latestAds as $ads)
                <div class="col-md-2 mt-4">
                    <div class="auction-card">
                        <div class="card">
                            <img src="/frontend/images/{{ $ads->image_1 }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Go somewhere</a></h5>
                                <span>R {{ $ads->price  }}</span>
                            </div>
                        </div>
                        <div class="content">

                            <?php
                            $adss = $ads->listing_type;

                            if ($adss == "0") {
                              echo '<button class="auction-card-btn">Buy Me <i class="fas fa-angle-right"></i></button>';
                            } else {
                              echo '<button class="auction-card-btn">On Auction <i class="fas fa-angle-right"></i></button>';
                            }

                            ?>
                            <p class="location mt-2"><i class="fas fa-map-marker-alt"></i> {{ $ads->city }}</p>

                            <?php
                            $ads_duration = $ads->listing_duration;
                            $adstype = $ads->listing_type;
                            if($ads_duration == "7" && $adstype == "0"){
                                echo '7 Days';
                            }
                            if($ads_duration == "14" && $adstype == "0"){
                                echo '14 Days';
                            }
                            if($ads_duration == "21" && $adstype == "0"){
                                echo '21 Days';
                            }
                            if($ads_duration == "30" && $adstype == "0"){
                                echo '30 Days';
                            }

                            $adstype = $ads->listing_type;

                            if ($adstype == "0") {
                              echo '<p class="time"><b>Listed</b>&nbsp; &nbsp; <span>@php {{ $ads_duration }}  @endphp</span>
                                    </p>';
                            } else {
                              echo '<p class="time"><b>Ends In</b>&nbsp; &nbsp; <span>4 Days, 11 Hours</span>
                                    </p>';
                            }

                            ?>
                            <a href="#" class="btn btn-danger btn-sm">view</a>
                        </div>
                    </div>{{-- auction-card --}}
                </div>
                @endforeach
                @endif   
            </div>
            <!-- <div class="row">
                <div class="col-12 mt-4">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>
    </section>
@endsection
