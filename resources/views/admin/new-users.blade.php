@extends("admin.layouts.app")
@push('admin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}"> --}}
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h6 class="content-heading ">
                    New Users
                </h6>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Last 24 Hours</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Last 7 Days</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div>
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>
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
                                                <td><b>User</b></td>
                                                <td><b>User ID</b></td>
                                                <td><b>User Email</b></td>
                                                <td><b>Join Date</b></td>
                                                <td><b>Last Visit</b></td>
                                                <td><b>Verfied</b></td>
                                                <td><b>IP</b></td>
                                                <td><b>Actions</b></td>
                                            </tr>
                                            @if(isset($dayusers))
                                                @foreach($dayusers as $dayuser)
                                            <tr>
                                                
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>{{ $dayuser->name }}</td>
                                                <td>{{ $dayuser->id }}</td>
                                                <td>{{ $dayuser->email }}</td>
                                                <td>{{ $dayuser->created_at->format('Y-m-d') }}</td>
                                                <td>2022-04-17</td>
                                                @if($dayuser->verified_status == '1')
                                                <td><span class="badge bg-success">Yes</span></td>
                                                @endif
                                                @if($dayuser->verified_status == '0')
                                                <td><span class="badge bg-danger">No</span></td>
                                                @endif
                                                <td>{{ $dayuser->ip }}</td>
                                                <td>
                                                    <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                        </i>Edit</a>
                                                    <a href="{{url('destroy-newuser')}}/{{$dayuser->id}}" class="admin-delete-btn"><i
                                                            class="far fa-times-circle"></i>Delete</a>
                                                </td>
                                               
                                            </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                                <td><b>User</b></td>
                                                <td><b>User ID</b></td>
                                                <td><b>User Email</b></td>
                                                <td><b>Join Date</b></td>
                                                <td><b>Last Visit</b></td>
                                                <td><b>Verfied</b></td>
                                                <td><b>IP</b></td>
                                                <td><b>Actions</b></td>
                                            </tr>
                                            @if(isset($weekusers))
                                                @foreach($weekusers as $weekuser)
                                            <tr>
                                                
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                    </div>
                                                </td>
                                                <td>{{$weekuser->name }}</td>
                                                <td>{{$weekuser->id }}</td>
                                                <td>{{$weekuser->email }}</td>
                                                <td>{{$weekuser->created_at->format('Y-m-d') }}</td>
                                                <td>2022-04-17</td>
                                                @if($weekuser->verified_status == '1')
                                                <td><span class="badge bg-success">Yes</span></td>
                                                @endif
                                                @if($weekuser->verified_status == '0')
                                                <td><span class="badge bg-danger">No</span></td>
                                                @endif
                                                <td>{{$weekuser->ip }}</td>
                                                <td>
                                                    <a href="" class="admin-edit-btn"><i class="fas fa-pencil">
                                                        </i>Edit</a>
                                                    <a href="{{url('destroy-newuser')}}/{{$weekuser->id}}" class="admin-delete-btn"><i
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
