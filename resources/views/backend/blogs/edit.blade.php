@extends('layouts.backend') @section('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> @endsection @section('content') <div class="page-content">
  <div class="container-fluid">
    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
          <h4 class="mb-sm-0">Add Blog Post</h4>
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
                <a href="javascript: void(0);">Pages</a>
              </li>
              <li class="breadcrumb-item active">Add Blog Post</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end page title -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1"> Add Blog Posts Form </h4>
            <div class="flex-shrink-0">
              <button class="btn btn-primary" type="submit"> Go Back </button>
            </div>
          </div>
          <!-- end card header -->
          <div class="card-body">
            <div class="live-preview">
              <form class="row g-3" action="{{ route('blogs.update', $blogPost->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT') <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Meta Title / Slug</label>
                  @foreach ($blogPost->blogPostMeta as $meta)
                  <input type="text" class="form-control" name="meta_title" id="validationDefault01" placeholder="Meta Title" value="{{ $meta->meta_title }}" required="">
                  @endforeach
                </div>
                <div class="col-md-4">
                  <label for="validationDefault04" class="form-label">Meat Robots Tag</label>
                  <select class="form-select" name="robots_tag" id="validationDefault04" required="">
                  @foreach ($blogPost->blogPostMeta as $meta)
                    <option value="index" {{ $meta->robots_tag === 'index' ? 'selected' : '' }}>Index</option>
                    <option value="noindex" {{ $meta->robots_tag === 'noindex' ? 'selected' : '' }}>No index</option>
                  @endforeach
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Canonical Tag</label>
                  @foreach ($blogPost->blogPostMeta as $meta)
                  <input type="text" class="form-control" name="canonical_tag" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Canonical Tag" value="{{ $meta->canonical_tag }}">
                  @endforeach
                </div>
                <div class="col-md-6">
                  <label for="validationDefault08" class="form-label">Blog Title</label>
                  <input type="text" class="form-control" name="title" id="validationDefault08" placeholder="Blog Title" value="{{ $blogPost->title }}" required="">
                </div>
                <div class="col-md-6">
                  <label for="validationDefault09" class="form-label">Category</label>
                  <select class="form-select" name="category_id" id="validationDefault09" required="" name="category_id">
                    <option selected="" disabled="" value="">Choose...</option> @foreach ($categories as $category) <option value="{{ $category->id }}" {{ $category->id == $blogPost->categories[0]->id ? 'selected' : '' }}>{{ $category->name }}</option> @endforeach
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="validationTextarea" class="form-label">Short Description</label>
                  @foreach ($blogPost->blogPostMeta as $meta)
                  <textarea class="form-control" name="meta_description" id="validationTextarea" placeholder="Required example textarea" required="">{{ $meta->meta_description }}</textarea>
                  @endforeach
                  <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                </div>
                <div class="snow-editor" id="editor" style="height: 300px;"> {!! $blogPost->content !!} </div>
                <input type="hidden" name="content" id="hiddenContentField" value="{{ $blogPost->content }}">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title mb-0">Dropzone</h4>
                    </div>
                    <!-- end card header -->
                    <div class="card-body">
                      <input class="form-control" name="assets" type="file" id="formFile">
                    </div>
                    <!-- end card body -->
                  </div>
                  <!-- end card -->
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit"> Submit form </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end col -->
    </div>
  </div>
  <!-- container-fluid -->
</div>
<!-- End Page-content --> @endsection @section('scripts')
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
  quill.on('text-change', function() {
    document.getElementById('hiddenContentField').value = quill.root.innerHTML;
  });
</script> @endsection