@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
@endpush
@section('frontend-content')
@include('frontend.inc.header-categories')
<div class="container my-5" style="width: 25%;">
<div class="right-content">
    <h2 class="content-heading">
        Login
    </h2>
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control block mt-1 w-full" id="exampleInputEmail1">
        </div>
        <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input  type="password"  name="password" class="form-control block mt-1 w-full" id="exampleInputPassword1">
        </div>
        <div class="mb-1">
            <input type="checkbox">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-sm primary-button">Login</button>
    </form>
</div>
</div>
@endsection