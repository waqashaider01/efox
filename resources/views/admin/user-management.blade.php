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
                    User Management
                </h4>

            </div>
        </div>
        <div class="container">
            <!-- <div class="row">
                <div class="col-md-7">
                    <form action="">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="70%" class="py-0">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="ID" name="ID"
                                                placeholder="Search for...">
                                        </div>
                                    </td>
                                    <td width="30%" class="py-0">
                                        <div class="mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Email</option>
                                                <option value="1">Address</option>
                                                <option value="2">Register Date</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="col-md-5">
                    <button class="btn admin-search-btn">
                        Search
                    </button>
                </div>
            </div> -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between mb-2">
                        <h5>Users</h5>
                        <div>
                            <button class="btn primary-button">Export To Excel</button>
                            <a href="{{ url('create-newuser') }}" class="btn light-background"><i class="fas fa-user-plus"></i> Create New User</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-start users-side-nav">
                        <div class="nav flex-column me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                                aria-selected="true">All</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                                aria-selected="false">Registered</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">Non Registered</button>
                        </div>
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
            @if(isset($usermanagements))
            @foreach($usermanagements as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                <td>{{ $user->ip }}</td>
                <td>
                    <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                        </i>Edit</a>
                    <a href="{{url('destroy-management')}}/{{$user->id}}" class="admin-delete-btn"><i
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
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                aria-labelledby="v-pills-messages-tab">
                     <table id="example" class="table table-striped table-bordered" style="width:100%">...</table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>Send User Email</h5>
                    <form action="{{ url('sendmail') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Example@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Write your message here...">
                            </textarea>
                        </div>
                        <button type="submit" class="btn primary-button">Send</button>
                    </form>
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
