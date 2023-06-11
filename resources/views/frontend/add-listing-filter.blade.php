@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/add-listing-filters.css') }}">
@endpush
@section('frontend-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                @include('frontend.inc.side-nav')
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Add Listing Filter
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mt-2 mb-3 heading">Add New Listing Filter</h5>
                        <div class="card mt-2 mx-auto bg-light">
                            <div class="card-body bg-light">
                                <form id="form" role="form">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="form-group">
                                                <label for="filterCataegory">Categories to search
                                                    *</label> <select id="filterCataegory" name="filterCataegory"
                                                    class="form-select" required="required">
                                                    <option value="" selected disabled>All Categories</option>
                                                    <option>Request Invoice for order</option>
                                                    <option>Request order status</option>
                                                    <option>Haven't received cashback yet</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="form-group">
                                                <label for="searchSubCategories">Search Subcategories also *</label><br>
                                                <input class="form-check-input" type="radio" name="searchSubCategories"
                                                    id="searchSubCategories">
                                                <label class="form-check-label" for="searchSubCategories">
                                                    Yes
                                                </label>
                                                <input class="form-check-input" type="radio" name="searchSubCategories"
                                                    id="searchSubCategories" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label for="form_name">Terms to Screm for *</label>
                                                <input id="phone" type="text" name="phone" class="form-control"
                                                    placeholder="1234567890" required="required">
                                                {{-- <button class="btn btn-sm primary-button" id="addScreeningValue">Add
                                                    value</button>
                                                <input name="screeningValues[]" value="" /> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="form-group"> <label for="city">City
                                                    *</label> <select id="city" name="city" class="form-control"
                                                    required="required">
                                                    <option value="" selected disabled>Select Your City</option>
                                                    <option>Request Invoice for order</option>
                                                    <option>Request order status</option>
                                                    <option>Haven't received cashback yet</option>
                                                    <option>Other</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="form-group"> <label for="province">Province
                                                    *</label> <select id="province" name="province" class="form-control"
                                                    required="required">
                                                    <option value="" selected disabled>Select Your Province</option>
                                                    <option>Request Invoice for order</option>
                                                    <option>Request order status</option>
                                                    <option>Haven't received cashback yet</option>
                                                    <option>Other</option>
                                                </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-2">
                                            <button class="btn primary-button w-100" type="submit">
                                                Save Filter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <script>
        $("#addScreeningValue").click(function(e) {
            e.preventDefault();
            var val = $(this).parent().find('input[name=myinput\\[\\]]').val();
            $(this).parent().find('input[name=myinput\\[\\]]').val(val + ",");

        });
    </script> --}}
    @endsection
