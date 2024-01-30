@extends('layouts.backend')

@section('styles')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

@endsection

@section('content')
        <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
                                <h4 class="mb-sm-0">Add Blog Post</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
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
                    <h4 class="card-title mb-0 flex-grow-1">
                      Add Blog Posts Form
                    </h4>
                    <div class="flex-shrink-0">
                    <button class="btn btn-primary" type="submit">
                            Go Back
                          </button>
                    </div>
                  </div>
                  <!-- end card header -->

                  <div class="card-body">
                    <div class="live-preview">
                      <form class="row g-3" action="{{ route('blogs.store') }}" method="POST">
                        @csrf
                        <div class="col-md-4">
                          <label for="validationDefault01" class="form-label">Meta Title / Slug</label>
                          <input type="text" class="form-control" name="meta_title" id="validationDefault01" placeholder="Meta Title" required="">
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefault04" class="form-label">Meat Robots Tag</label>
                          <select class="form-select" name="robots_tag" id="validationDefault04" required="">
                            <option selected="" disabled="" value="">
                              Choose...
                            </option>
                            <option value="index">Index</option>
                            <option value="noindex">No index</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                          <label for="validationDefaultUsername" class="form-label">Canonical Tag</label>
                            <input type="text" class="form-control" name="canonical_tag" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="Canonical Tag">
                        </div>
                        <div class="col-md-6">
                          <label for="validationDefault08" class="form-label">Blog Title</label>
                          <input type="text" class="form-control" name="title" id="validationDefault08" placeholder="Blog Title" required="">
                        </div>
                        <div class="col-md-6">
                          <label for="validationDefault09" class="form-label">Category</label>
                          <select class="form-select" name="category_id" id="validationDefault09" required="" name="category_id">
    <option selected="" disabled="" value="">Choose...</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>
                        </div>
                        <div class="col-md-12">
                            <label for="validationTextarea" class="form-label">Short Description</label>
                            <textarea class="form-control" name="meta_description" id="validationTextarea" placeholder="Required example textarea" required=""></textarea>
                            <div class="invalid-feedback">
                              Please enter a message in the textarea.
                            </div>
                          </div>
                          <div class="snow-editor" id="editor" style="height: 300px;">
                          </div>
<input type="hidden" name="content" id="hiddenContentField" value="">

                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">
                            Submit form
                          </button>
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
            <!-- End Page-content -->
@endsection

@section('scripts')

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

</script>


@endsection