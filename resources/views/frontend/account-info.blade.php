@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/listing-filters.css') }}">
@endpush
@section('frontend-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                @include('frontend.inc.side-nav')
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Account Information
                </h2>
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td width="260px">Username</td>
                                    <td>ucash42</td>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>Muhammad</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>Salman</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>salmansumra009@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td>Islamabad</td>
                                </tr>
                                <tr>
                                    <td>Suburb</td>
                                    <td>Canning Vale</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>Stadium Road, Rawalpinidi</td>
                                </tr>
                                <tr>
                                    <td>Registered</td>
                                    <td>Mar 11-1:17</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="" class="btn btn-sm primary-button">Edit My Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
