@extends("admin.layouts.app")
@push('admin-styles')
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
                    Site Fees Page
                </h4>
            </div>
        </div>
        <div class="container">
            <form action="{{ url('update-site-fees') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $sitefees->id }}">
                @csrf
                                <div>
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                    @endif
                                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="siteFeesContent" class="form-label">Site Fees Content</label>
                            <textarea id="siteFeesContent" name="siteFeesContent" rows="4" placeholder="Write your content here...">{!! $sitefees->sitefees_content !!}</textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <h5>META INFORMATION</h5>
                        <div class="mb-3">
                            <label for="metaTitle" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="metaTitle" value="{{ $sitefees->meta_title }}" name="metaTitle">
                        </div>
                        <div class="mb-3">
                            <label for="metaDescription" class="form-label">Meta Description</label>
                            <textarea id="metaDescription" class="form-control" name="metaDescription" rows="4"
                                placeholder="Write your description here...">{{ $sitefees->meta_description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="metaKeywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control" value="{{ $sitefees->meta_keywords }}" name="metaKeywords" id="metaKeywords" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Comma separated values</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn primary-button">Save</button>
            </form>
        </div>
    </section>
    <script src="{{ asset('admin/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#siteFeesContent', // Replace this CSS selector to match the placeholder element for TinyMCE
            height: 500,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
    'insertdatetime', 'media', 'table', 'help', 'wordcount'
  ],
  toolbar: 'undo redo | blocks | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
});
    </script>
@endsection
