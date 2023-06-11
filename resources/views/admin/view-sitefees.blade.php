@extends("admin.layouts.app")
@push('admin-styles')
    <link rel="stylesheet" href="{{ asset('admin/css/latest-ads.css') }}">
@endpush
@section('admin-content')
<table class="table">
        <div>
            @if (session()->has('message'))
              <div class="alert alert-success">
              {{ session('message') }}
              </div>
            @endif
        </div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Content</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Key Words</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($Sitefees))
    @foreach($Sitefees as $sitefees)
   <tr>
     <td>{{ $sitefees->id }}</td>
     <td>{!! $sitefees->sitefees_content !!}</td>
     <td>{{ $sitefees->meta_title }}</td>
     <td>{{ $sitefees->meta_description }}</td>
     <td>{{ $sitefees->meta_keywords }}</td> 
     <td>                                             
      <a href="{{url('destroy-sitefees')}}/{{ $sitefees->id }}" class="btn btn-sm btn-danger">Delete</a>
      </td>
   </tr>
  </tbody>
  @endforeach
  @endif
</table>
@endsection