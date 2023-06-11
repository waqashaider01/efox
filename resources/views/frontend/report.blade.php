@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/report.css') }}">
@endpush
@section('frontend-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                @include('frontend.inc.side-nav')
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Report Buyer/Seller
                </h2>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body bg-light">
                                <form action="" class="report-form">
                                    <div class="report-options">
                                        <div class="form-group"> <label for="reportType">Report Type</label> <select
                                                id="reportType" name="reportType" class="form-select"
                                                required="required">
                                                <option value="" selected>Not Resonding</option>
                                                <option>Request Invoice for order</option>
                                                <option>Request order status</option>
                                                <option>Haven't received cashback yet</option>
                                                <option>Other</option>
                                            </select> </div>
                                        <div class="form-group mt-3"> <label for="buyerUsername"><input
                                                    class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                                    checked> Buyer Username</label>
                                            <input id="buyerUsername" type="text" name="buyerUsername"
                                                class="form-control" required="required">
                                        </div>
                                        <div class="form-group mt-3"> <label for="sellerUsername"><input
                                                    class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                Seller Username</label> <input id="sellerUsername" type="text"
                                                name="sellerUsername" class="form-control" required="required"> </div>
                                        <div class="form-group mt-3"> <label for="listingID">Listing ID</label> <input
                                                id="listingID" type="number" name="listingID" class="form-control"
                                                required="required"> </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="reportMessage" class="form-label">
                                            <h5>Tell Us How We can Help?</h5>
                                        </label>
                                        <textarea class="form-control" id="reportMessage" name="reportMessage" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-success primary-button">
                                            Report
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
