@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}">
@endpush
@section('admin-content')
    <section class="analytics bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="ads"><i class="fas fa-sack-dollar"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Buy Now Ads</h5>
                                        <h6>{{ $daybuynow }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>24 Hours</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="auctions"><i class="fas fa-gavel"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Auctions</h5>
                                        <h6>{{ $dayauctions }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>24 Hours</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="users"><i class="fas fa-users"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>New Users</h5>
                                        <h6>{{ $daynewusers }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>24 hours</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mt-3 mb-3">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="income"><i class="fas fa-money-bill-alt"></i></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Total Income</h5>
                                        <h6>R 1280000</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>24 hours</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}

                <div class="col-md-3 mb-2">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="ads"><i class="fas fa-sack-dollar"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Buy Now Ads</h5>
                                        <h6>{{ $weekbuynow }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>7 Days</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mb-2">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="auctions"><i class="fas fa-gavel"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Auctions</h5>
                                        <h6>{{ $weekauctions }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>7 Days</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mb-2">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="users"><i class="fas fa-users"></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>New Users</h5>
                                        <h6>{{ $weeknewusers }}</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>7 Days</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
                <div class="col-md-3 mb-2">
                    <div class="card analytics-card">
                        <div class="card-body">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <span class="income"><i class="fas fa-money-bill-alt"></i></i></span>
                                </div>
                                <div class="col-md-8">
                                    <div class="content">
                                        <h5>Total Income</h5>
                                        <h6>R 1280000</h6>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-0">
                                <div class="time">
                                    <small><i class="far fa-calendar"></i> Last</small> <b>7 Days</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- analytics-card end --}}
            </div>
        </div>
    </section>
@endsection
