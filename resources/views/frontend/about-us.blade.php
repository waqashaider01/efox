@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

@endpush
@section('frontend-content')
<div class="aboutus-section">
        <div class="container">
            @if(isset($aboutus))
            @foreach($aboutus as $about)
             <h2 class="aboutus-title text-center">About Us</h2>
                        <p class="aboutus-text text-center">{!! $about->aboutus_content !!}</p>
            @endforeach
            @endif
        </div>
    </div>
@endsection
