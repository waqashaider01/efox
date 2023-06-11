@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/user-management.css') }}">
    <style>
        .tox-tinymce {
            border-radius: 0px !important;
        }

    </style>
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    User Ads
                </h4>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-start users-side-nav">
                        <div class="tab-content w-100" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
            <tr>
                <th>Listing ID</th>
                <th>Thumb</th>
                <th>Description</th>
                <th>Date Listed</th>
                <th>Listing Typet</th>
                <th>User</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($userads))
                @foreach($userads as $ads)
            <tr>
                <th>{{ $ads->id }}</th>
                    <td><img src="/frontend/images/{{ $ads->image_1 }}" alt="" width="100px"></td>
                    <td>
                        <p>
                            <small>{{ $ads->description }}</small>
                        </p>
                        <div class="user-text d-flex justify-content-between">
                            <small class="">
                                <b><i class="fas fa-user"></i>{{ $ads->user->first_name .' '. $ads->user->last_name}} </b>
                            </small>
                            <small>
                                <b>${{ $ads->price }}</b>
                            </small>
                        </div>
                        <div class="card-text mt-1">
                            <small class="">
                                <i class="fas fa-map-marker-alt"></i> {{ $ads->city }}
                            </small>
                        </div>
                    </td>
                    <td>
                        <p>
                            <b>{{ $ads->created_at->format('Y-m-d') }}</b>
                        </p>
                        <p>
                            <b>12 min ago</b>
                        </p>
                    </td>
                    <td>
                        <div style="text-align: center">
                                        <img src="{{ asset('admin/images/auction.png') }}" alt="" width="40px">
                                        @if($ads->listing_type == '1')
                                        <p><a href="" class="btn btn-sm primary-button mt-2">On Auction</a></p>
                                        @else
                                        <p><a href="" class="btn btn-sm primary-button mt-2">Buy Me</a></p>
                                        @endif
                                    </div>
                    </td>
                    <td>
                        <small>{{$ads->user->first_name .' '. $ads->user->last_name}}</small>
                    </td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning mt-2">View</a><br>
                        <a href="{{ url('destroy-ads') }}/{{ $ads->id }}" class="btn btn-sm btn-info mt-2">Edit</a><br>
                        <a href="" class="btn btn-sm btn-danger mt-2">Delete</a>
                    </td>
            </tr>
                @endforeach
            @endif
        </tbody>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('admin/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#message', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
@endsection
