@extends('layouts.backend') @section('styles')
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.min.css"> @endsection @section('content') <div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Blogs</h4>
          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
                <a href="javascript: void(0);">Pages</a>
              </li>
              <li class="breadcrumb-item active">Blog Posts</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- end page title -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0">Datatables</h5>
          </div>
          <div class="card-body">
            <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Blog Title</th>
                  <th>Category</th>
                  <th>Meta Title / Slug</th>
                  <th>Robots Tag</th>
                  <th>Canonical Tag</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody> @foreach ($blogPosts as $blogPost) <tr>
                  <td>{{ $blogPost->id }}</td>
                  <td>{{ $blogPost->title }}</td>
                  <td> @foreach ($blogPost->categories as $category) {{ $category->name }} @endforeach </td>
                  <td> @foreach ($blogPost->blogPostMeta as $meta) {{ $meta->meta_title }} @endforeach </td>
                  <td> @foreach ($blogPost->blogPostMeta as $meta) @if($meta->robots_tag === "index") <span class="badge bg-info-subtle text-info">Index</span> @else <span class="badge bg-danger-subtle text-danger">No Index</span> @endif @endforeach </td>
                  <td> @foreach ($blogPost->blogPostMeta as $meta) {{ $meta->canonical_tag }} @endforeach </td>
                  <td> @foreach ($blogPost->assets as $asset)
                    <!-- {{ $asset->path }} -->
                    <div class="avatar-group">
                      <a href="javascript:void(0);" class="avatar-group-item" data-img="avatar-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                        <img src="{{ asset('storage/app/public/' . $asset->path) }}" alt="" class="rounded-circle avatar-xxs">
                      </a>
                    </div> @endforeach
                  </td>
                  <td>{{ $blogPost->created_at->diffForHumans() }}</td>
                  <td>{{ $blogPost->updated_at->diffForHumans() }}</td>
                  <td>
                    <div class="dropdown d-inline-block">
                      <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-more-fill align-middle"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                          <a href="#!" class="dropdown-item">
                            <i class="ri-eye-fill align-bottom me-2 text-muted"></i> View </a>
                        </li>
                        <li>
                          <a href="{{ route('blogs.edit', $blogPost->id) }}" class="dropdown-item edit-item-btn">
                            <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit </a>
                        </li>
                        <li>
                          <!-- <form action="{{ route('blogs.destroy', $blogPost->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</button></form> -->
                          <button class="dropdown-item remove-item-btn delete-blog" data-id="{{ $blogPost->id }}" data-confirm="Are you sure you want to delete this record?">
                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete </button>
                        </li>
                      </ul>
                    </div>
                  </td>
                </tr> @endforeach </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--end row-->
  </div>
</div> @endsection @section('scripts') <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8.2.0/dist/promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const deleteLinks = document.querySelectorAll(".delete-blog");
    if (typeof Swal === 'undefined') {
      console.error('SweetAlert2 is not defined. Make sure the script is included.');
      return;
    }
    deleteLinks.forEach(function(link) {
      link.addEventListener("click", function(event) {
        event.preventDefault();
        const blogId = link.getAttribute("data-id");
        Swal.fire({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
          cancelButtonClass: "btn btn-danger w-xs mt-2",
          confirmButtonText: "Yes, delete it!",
          buttonsStyling: false,
          showCloseButton: true,
        }).then(function(result) {
          if (result.isConfirmed) {
            // User confirmed the deletion, send an AJAX request
            fetch(`/blogs/${blogId}`, {
              method: "DELETE",
              headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}", // Include the CSRF token
              },
            }).then(response => {
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }
              return response.json();
            }).then(data => {
              if (data.success) {
                Swal.fire({
                  title: "Deleted!",
                  text: "Your record has been deleted.",
                  icon: "success",
                  confirmButtonClass: "btn btn-primary w-xs mt-2",
                  buttonsStyling: false,
                }).then(function() {
                  window.location.reload();
                });
              } else {
                Swal.fire({
                  title: "Error!",
                  text: "Failed to delete the record.",
                  icon: "error",
                  confirmButtonClass: "btn btn-primary w-xs mt-2",
                  buttonsStyling: false,
                });
              }
            }).catch(error => {
              console.error("Fetch Error:", error);
              Swal.fire({
                title: "Error!",
                text: "An error occurred during the request.",
                icon: "error",
                confirmButtonClass: "btn btn-primary w-xs mt-2",
                buttonsStyling: false,
              });
            });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
              title: "Cancelled",
              text: "Your record is safe :)",
              icon: "error",
              confirmButtonClass: "btn btn-primary mt-2",
              buttonsStyling: false,
            });
          }
        });
      });
    });
  });
</script> @endsection