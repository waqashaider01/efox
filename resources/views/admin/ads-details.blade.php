@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/latest-ads.css') }}">
@endpush
@section('admin-content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">SubCategory</th>
      <th scope="col">Title</th>
      <th scope="col">Listing Type</th>
      <th scope="col">Listing Duration</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Air Conditioned</th>
      <th scope="col">Registered</th>
      <th scope="col">Description</th>
      <th scope="col">City</th>
      <th scope="col">Suburb</th>
      <th scope="col">Shipping</th>
      <th scope="col">Payment Method</th>


    </tr>
  </thead>
  <tbody>
    @if(isset($adsDetails))
    @foreach($adsDetails as $details)
    <tr>
      <th scope="row">{{ $details->user_id }}</th>
      <td>{{ $details->name }}</td>
      <td>{{ $details->category_id }}</td>
      <td>{{ $details->subcategory_id }}</td>
      <td>{{ $details->title }}</td>
      
      <?php 
        $detail = $details->listing_type;
        if($detail == "0"){
            echo '<td>bue me</td>';
            }
            else{
                echo '<td>on auction</td>';
            }

         ?>
      
      <td>{{ $details->listing_duration }} Days</td>
      <td>{{ $details->price }}</td>
      <td>{{ $details->quantity }}</td>
      <td>{{ $details->air_conditioned }}</td>
      <td>{{ $details->registered }}</td>
      <td>{{ $details->description }}</td>
      <td>{{ $details->city }}</td>
      <td>{{ $details->suburb }}</td>
      <td>{{ $details->shipping }}</td>
      <td>{{ $details->payment_method }}</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@endsection