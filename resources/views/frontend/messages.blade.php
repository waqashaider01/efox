@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/messages.css') }}">
@endpush
@section('frontend-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                @include('frontend.inc.side-nav')
            </div>

            <div class="col-md-9 mt-5">
                <h2 class="content-heading">
                    Messages
                </h2>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table messages-table mt-3">
                            <tbody>
                                <tr class="table-light">
                                    <th>Subject</th>
                                    <th>Listing</th>
                                    <th>Sent</th>
                                    <th>From</th>
                                    <th>Actions</th>
                                </tr>
                                <tr>
                                    <td><a href="" style="text-decoration: none">Lorem, ipsum dolor.</a></td>
                                    <td><a href="" style="text-decoration: none">123456</a></td>
                                    <td>8/18/2012 12:18 AM</td>
                                    <td>SusanSales</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-light text-primary"><b>Reply</b></a>
                                        <a href="" class="btn btn-sm btn-light"><button type="button"
                                                class="btn-close text-danger" aria-label="Close"></button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="" style="text-decoration: none">Lorem, ipsum dolor.</a></td>
                                    <td><a href="" style="text-decoration: none">123456</a></td>
                                    <td>8/18/2012 12:18 AM</td>
                                    <td>SusanSales</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-light text-primary"><b>Reply</b></a>
                                        <a href="" class="btn btn-sm btn-light"><button type="button"
                                                class="btn-close text-danger" aria-label="Close"></button></a>
                                    </td>
                                </tr>
                                <tr class="last-tr">
                                    <td><a href="" style="text-decoration: none">Lorem, ipsum dolor.</a></td>
                                    <td><a href="" style="text-decoration: none">123456</a></td>
                                    <td>8/18/2012 12:18 AM</td>
                                    <td>SusanSales</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-light text-primary"><b>Reply</b></a>
                                        <a href="" class="btn btn-sm btn-light"><button type="button"
                                                class="btn-close text-danger" aria-label="Close"></button></a>
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
