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
                    Listing Filters
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between my-3">
                            <div>
                                <label for="filter-email" class="text-danger">Send filter alert emails at most every
                                    &nbsp;
                                    &nbsp;</label>
                                <select name="cars" id="cars">
                                    <option value="volvo">Day</option>
                                    <option value="saab">Week</option>
                                    <option value="mercedes">Month</option>
                                    <option value="audi">Year</option>
                                </select>
                            </div>
                            <div>
                                <a href="" class="btn btn-primary primary-button">Add Filter</a>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <th>Sr.No</th>
                                <th>Categories to Search</th>
                                <th>Search Terms to Use</th>
                                <th>City</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">View</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">View</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">View</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">View</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Prev</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
