@extends('frontend.layouts.app')
@push('frontend-styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

@endpush
@section('frontend-content')
<div class="aboutus-section">
        <div class="container">
            @if(isset($terms))
            @foreach($terms as $term)
             <h2 class="aboutus-title text-center">Terms & Conditions</h2>
                        <p class="aboutus-text text-center">{!! $term->terms_condition_content !!}</p>
            @endforeach
            @endif
        </div>
    </div>
@endsection
