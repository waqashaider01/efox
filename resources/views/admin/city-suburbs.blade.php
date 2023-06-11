@extends("admin.layouts.app")
@push('admin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}"> --}}
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h6 class="content-heading ">
                    City & Suburbs
                </h6>
            </div>
        </div>

        <!-- Add City Modal -->
        <div class="modal fade" id="addCityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Add City</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('create-city') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="cityName" class="form-label">City Name</label>
                                <input type="text" class="form-control" id="cityName" name="cityName">
                            </div>
                            <h5>SEO Details</h5>
                            <div class="mb-3">
                                <label for="seoTitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="seoTitle" name="seoTitle">
                            </div>
                            <div class="mb-3">
                                <label for="seoDescription" class="form-label">SEO Description</label>
                                <textarea id="seoDescription" class="form-control" name="seoDescription" rows="4"
                                    placeholder="Write your description here...">
                            </textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="seoKeywords" class="form-label">SEO Keywords</label>
                                    <input type="text" class="form-control" id="seoKeywords" aria-describedby="emailHelp"
                                        name="seoKeywords">
                                    <div id="emailHelp" class="form-text">Comma separated values</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn primary-button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add Suburb Modal -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm light-background mb-3" data-bs-toggle="modal"
                        data-bs-target="#addCityModal"><b>Add City</b></button>
                    <ol>
                        @if(isset($viewcities))
                            @foreach($viewcities as $city)
                                <li class="mb-2">
                                    <b>{{ $city->city_name }} - <small><a href="" class="text-dark">Edit</a> / <a href="{{url('destroy-city')}}/{{$city->id}}"
                                                class="text-danger">Delete</a></small></b>
                                    <ol>
                                        @foreach($city->suburb as $suburb)
                                        <li>{{ $suburb->suburb_name }} - <small><a href="{{ url('destroy-suburb') }}/{{ $city->id }}" class="text-dark">Edit</a> / <a href="{{ url('destroy-suburb') }}/{{ $suburb->id }}"
                                                    class="text-danger">Delete</a></small></li>
                                        @endforeach
                                    </ol>
                                    @include('admin.suburb')
                                </li>
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    </section>
@endsection
