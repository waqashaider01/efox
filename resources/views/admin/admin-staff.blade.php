@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/admin-staff.css') }}">
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h4 class="content-heading ">
                    Admin Staff
                </h4>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card" style="border-radius: 0px">
                                <div class="card-header">
                                    Create Admin Staff
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1" class="form-label">First
                                                            Name</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1" class="form-label">Last
                                                            Name</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Username</label>
                                                    </td>
                                                    <td>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                                    </td>
                                                    <td>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Password</label>
                                                    </td>
                                                    <td>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label for="exampleInputEmail1" class="form-label">Confirm
                                                            Password</label>
                                                    </td>
                                                    <td>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <h6>Roles</h6>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-background">
                                                            <td>Admin</td>
                                                            <td>
                                                                <label class="switch switch-green">
                                                                    <input type="checkbox" class="switch-input" checked>
                                                                    <span class="switch-label" data-on="On"
                                                                        data-off="Off"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-background">
                                                            <td>Admin Staff</td>
                                                            <td>
                                                                <label class="switch switch-green">
                                                                    <input type="checkbox" class="switch-input" checked>
                                                                    <span class="switch-label" data-on="On"
                                                                        data-off="Off"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2">
                                                                <h6>Account Status</h6>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-background">
                                                            <td>Approved</td>
                                                            <td>
                                                                <label class="switch switch-green">
                                                                    <input type="checkbox" class="switch-input" checked>
                                                                    <span class="switch-label" data-on="On"
                                                                        data-off="Off"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr class="light-background">
                                                            <td>Restricted</td>
                                                            <td>
                                                                <label class="switch switch-green">
                                                                    <input type="checkbox" class="switch-input">
                                                                    <span class="switch-label" data-on="On"
                                                                        data-off="Off"></span>
                                                                    <span class="switch-handle"></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn primary-button">Create Staff</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <h5>Staff</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="ID" name="ID"
                                        placeholder="Search for staff...">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <table class="table admin-table">
                                <tbody>
                                    <tr class="light-background">
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td><b>Email</b></td>
                                        <td><b>Username</b></td>
                                        <td><b>Firstname</b></td>
                                        <td><b>Lastname</b></td>
                                        <td><b>Created Date</b></td>
                                        <td><b>Actions</b></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>developersalman</td>
                                        <td>Muhammad</td>
                                        <td>Salman</td>
                                        <td>2022-04-17</td>
                                        <td>
                                            <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                </i>Edit</a>
                                            <a href="" class="admin-delete-btn"><i
                                                    class="far fa-times-circle"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>developersalman</td>
                                        <td>Muhammad</td>
                                        <td>Salman</td>
                                        <td>2022-04-17</td>
                                        <td>
                                            <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                </i>Edit</a>
                                            <a href="" class="admin-delete-btn"><i
                                                    class="far fa-times-circle"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>developersalman</td>
                                        <td>Muhammad</td>
                                        <td>Salman</td>
                                        <td>2022-04-17</td>
                                        <td>
                                            <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                </i>Edit</a>
                                            <a href="" class="admin-delete-btn"><i
                                                    class="far fa-times-circle"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                        </td>
                                        <td>test@gmail.com</td>
                                        <td>developersalman</td>
                                        <td>Muhammad</td>
                                        <td>Salman</td>
                                        <td>2022-04-17</td>
                                        <td>
                                            <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                </i>Edit</a>
                                            <a href="" class="admin-delete-btn"><i
                                                    class="far fa-times-circle"></i>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Reports</b>
                                </div>
                                <div class="card-body">
                                    <small>Sales Transactions</small><br>
                                    <small>Listing Fees Revenue</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Site Preferences</b>
                                </div>
                                <div class="card-body">
                                    <small>Setup</small><br>
                                    <small>Terms/Conditions</small><br>
                                    <small>About Us</small><br>
                                    <small>Privacy Policy</small><br>
                                    <small>Site Fees</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Billing & Fees</b>
                                </div>
                                <div class="card-body">
                                    <small>Edit Fees</small><br>
                                    <small>Edit Payment Gateway</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Users</b>
                                </div>
                                <div class="card-body">
                                    <small>User Management</small><br>
                                    <small>User Special Price</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Categories</b>
                                </div>
                                <div class="card-body">
                                    <small>Edit</small><br>
                                    <small>Custom Fields</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Suburbs/Towns</b>
                                </div>
                                <div class="card-body">
                                    <small>Edit</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>User Ads</b>
                                </div>
                                <div class="card-body">
                                    <small>Ads</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Banner Setup</b>
                                </div>
                                <div class="card-body">
                                    <small>Banners</small><br>
                                    <small>Email Templates</small><br>
                                    <small>Smtp Settings</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Advanced</b>
                                </div>
                                <div class="card-body">
                                    <small>Maintenance</small><br>
                                    <small>Site Map</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Auction Settings</b>
                                </div>
                                <div class="card-body">
                                    <small>Functions</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-7">
                            <div class="card staff-card">
                                <div class="card-header">
                                    <b>Admin Staff</b>
                                </div>
                                <div class="card-body">
                                    <small>Add</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="switch switch-green">
                                <input type="checkbox" class="switch-input" checked>
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
