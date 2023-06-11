@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

@endpush
@section('frontend-content')
<div class="aboutus-section">
        <div class="container">
            @if(isset($privacies))
            @foreach($privacies as $privacy)
             <h2 class="aboutus-title text-center">Privacy Policy</h2>
                        <p class="aboutus-text text-center">{!! $privacy->privacypolicy_content !!}</p>
            @endforeach
            @endif
        </div>
    </div>
@endsection
