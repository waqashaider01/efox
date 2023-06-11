@extends("admin.layouts.app")
@push('admin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/index.css') }}"> --}}
@endpush
@section('admin-content')
    <section>
        <div class="row">
            <div class="col-12">
                <h6 class="content-heading ">
                    Category Create/Edit
                </h6>
            </div>
        </div>

        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="exampleModalLabel">Add Category</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('create-category') }}" method="post" enctype="multipart/form-data">
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
                                <label for="categoryName" class="form-label">Category Name</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName">
                            </div>
                            <h5>SEO Details</h5>
                            <div class="mb-3">
                                <label for="seoTitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="seoTitle" name="seoTitle">
                            </div>
                            <div class="mb-3">
                                <label for="seoImage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="seoImage" name="image_file">
                            </div>
                            <div class="mb-3">
                                <label for="seoDescription" class="form-label">SEO Description</label>
                                <textarea id="seoDescription" class="form-control" name="seoDescription" rows="4"
                                    placeholder="Write your description here...">
                            </textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="seoKeywords" class="form-label">SEO Keywords</label>
                                    <input type="text" class="form-control" id="seoKeywords" aria-describedby="emailHelp"
                                        name="seoKeywords">
                                    <div id="emailHelp" class="form-text">Comma separated values</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn primary-button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Add SubCategory Modal -->
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm light-background mb-3" data-bs-toggle="modal"
                        data-bs-target="#addCategoryModal"><b>Add Category</b></button>
                    @if(isset($categories)) 
                        @foreach($categories as $category) 
                        <ol>
                            <li class="mb-2">
                                <b>{{ $category->category_name }} - <small><a href="" class="text-dark">Edit</a> / <a href="{{url('destroy-category')}}/{{$category->id}}"
                                            class="text-danger">Delete</a></small></b>
                                <ol>
                                    @foreach($category->subcategory as $subcategory)
                                    <li>{{ $subcategory->subcategory_name }} - <small><a href="" class="text-dark">Edit</a> / <a href="{{ url('destroy-subcategory') }}/{{ $subcategory->id }}"
                                                class="text-danger">Delete</a></small></li>
                                    
                                    @endforeach
                                </ol>
                                    @include("admin.subcategory")
                                    </li>
                                </ol>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
