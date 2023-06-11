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
                        User Special Price
                    </h4>

                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="addBannerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Special Price</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('create-price')}}" method="post" enctype="multipart/form-data">
                        @csrf
                                    <div>
                                        @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{ session('message') }}
                                        </div>
                                        @endif
                                    </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="bannerName" class="form-label">Periods</label>
                                <input type="number" class="form-control" id="bannerName" name="period">
                            </div>
                            <div class="mb-3">
                                <label for="bannerSlot" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category"
                                    id="bannerSlot">
                                    <option selected value="1">Category Page</option>
                                    <option value="2">Category Featured</option>
                                    <option value="3">Home Page Featured</option>
                                    <option value="4">Home Page Gallery</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bannerName" class="form-label">Price</label>
                                <input type="number" class="form-control" id="bannerName" name="price">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create Special Price</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between mb-2">
                            <h5>Users</h5>
                            <div>
                                <a href="" class="btn primary-button" data-bs-toggle="modal"
                                    data-bs-target="#addBannerModal"><i class="fas fa-user-plus"></i> Create Special Price</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <th>#</th>
                    <th>Periods</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($specialprices))
                @foreach($specialprices as $price)
                <tr>
                    <td>{{ $price->id }}</td>
                    <td>{{ $price->period }}</td>
                    @if($price->category == '1')
                    <td>Category Page</td>
                    @endif
                    @if($price->category == '2')
                    <td>Category Featured</td>
                    @endif
                    @if($price->category == '3')
                    <td>Home Page Featured</td>
                    @endif
                    @if($price->category == '4')
                    <td>Home Page Gallery</td>
                    @endif
                    <td>${{ $price->price }}</td>
                    <td>
                        <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                            </i>Edit</a>
                        <a href="{{url('destroy-price')}}/{{ $price->id }}" class="admin-delete-btn"><i
                                class="far fa-times-circle"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
                </div>
                  </div>
                    </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
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
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>IP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($registeruser))
                @foreach($registeruser as $registeruser)
                <tr>
                    <td>{{ $registeruser->id }}</td>
                    <td>{{ $registeruser->first_name }}</td>
                    <td>{{ $registeruser->last_name }}</td>
                    <td>{{ $registeruser->email }}</td>
                    <td>{{ $registeruser->created_at->format('Y-m-d') }}</td>
                    <td>{{ $registeruser->ip }}</td>
                    <td>
                        <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                            </i>Edit</a>
                        <a href="{{url('destroy-management')}}/{{$registeruser->id}}" class="admin-delete-btn"><i
                                class="far fa-times-circle"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>IP</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ribbons Section -->

        <section>
            <div class="row">
                <div class="col-12">
                    <h4 class="content-heading ">
                        All Corner Ribbons
                    </h4>

                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="addRibbonModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between mb-2">
                            <h5>Ribbon</h5>
                        </div>
                    </div>
                </div>
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
                <tr>
                    <th>#</th>
                    <th>Ribbon</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($ribbons))
                @foreach($ribbons as $ribbon)
                <tr>
                    <td>{{ $ribbon->id }}</td>
                    @if($ribbon->ribbon == '1')
                    <td>Featured</td>
                    @endif
                    @if($ribbon->ribbon == '2')
                    <td>Buy Me</td>
                    @endif
                    @if($ribbon->ribbon == '3')
                    <td>Rent Me</td>
                    @endif
                    @if($ribbon->ribbon == '4')
                    <td>Bargain</td>
                    @endif
                    @if($ribbon->ribbon == '5')
                    <td>On Sale</td>
                    @endif
                    @if($ribbon->ribbon == '6')
                    <td>Auction</td>
                    @endif
                    <td>${{ $ribbon->price }}</td>
                    <td>
                        @include('admin.editribbon')
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
                </div>
                  </div>
                    </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                    aria-labelledby="v-pills-profile-tab">
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
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>IP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($registeruser))
                @foreach($registeruser as $registeruser)
                <tr>
                    <td>{{ $registeruser->id }}</td>
                    <td>{{ $registeruser->first_name }}</td>
                    <td>{{ $registeruser->last_name }}</td>
                    <td>{{ $registeruser->email }}</td>
                    <td>{{ $registeruser->created_at->format('Y-m-d') }}</td>
                    <td>{{ $registeruser->ip }}</td>
                    <td>
                        <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                            </i>Edit</a>
                        <a href="{{url('destroy-management')}}/{{$registeruser->id}}" class="admin-delete-btn"><i
                                class="far fa-times-circle"></i>Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>IP</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
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
