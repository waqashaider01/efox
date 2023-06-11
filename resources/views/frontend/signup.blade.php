@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/signup.css') }}">
@endpush
@section('frontend-content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-5 mx-auto">
                <h5 class="mt-5 mb-3 heading">Create Account</h5>
                <div class="card mt-2 mx-auto bg-light">
                    <div class="card-body bg-light">
                        <form id="contact-form" role="form" action="{{ url('seller-registration') }}" method="post">
                            @csrf
                            <div class="controls">
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="username">Username *</label> <input
                                                id="username" type="text" name="username" class="form-control"
                                                placeholder="Username" required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group"> <label for="form_name">Firstname *</label> <input
                                                id="form_name" type="text" name="first_name" class="form-control"
                                                placeholder="Firstname" required="required"
                                                data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group"> <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="last_name" class="form-control"
                                                placeholder="Lastname" required="required"
                                                data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="form_email">Email *</label> <input
                                                id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Please enter your email *" required="required"
                                                data-error="Valid email is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="phone">Phone *</label> <input id="phone"
                                                type="number" name="phone" class="form-control" placeholder="1234567890"
                                                required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="city">City
                                                *</label> <select id="city" name="city" class="form-select"
                                                required="required">
                                                <option value="" selected disabled>Select Your City</option>
                                                @if(!empty($cities))
                                                    @foreach($cities as $city)
                                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="subarb">Suburb
                                                *</label> <select id="subarb" name="suburb" class="form-select"
                                                required="required">
                                                <option value="" selected disabled>Select Your Subarb</option>
                                                @if(!empty($suburbs))
                                                    @foreach($suburbs as $suburb)
                                                <option value="{{$suburb->id}}">{{$suburb->suburb_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="form-group"> <label for="address">address *</label> <input
                                                id="address" type="text" name="address" class="form-control"
                                                placeholder="address" required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group"> <label for="password">Password *</label> <input
                                                id="password" type="password" name="password" class="form-control"
                                                required="required"> </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div class="form-group"> <label for="confirmPassword">Confirm Password *</label>
                                            <input id="confirmPassword" type="password" name="confirmPassword"
                                                class="form-control" required="required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-2"> <button type="submit"
                                        class="btn btn-success primary-button w-100">
                                        Register
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
    </div>
@endsection
