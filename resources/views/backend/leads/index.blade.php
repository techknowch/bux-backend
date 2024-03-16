@extends('layouts.backend')

@section('links')
<!-- Sweet Alert css-->
<link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Leads</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript: void(0);">Pages</a>
                                </li>
                                <li class="breadcrumb-item active">Leads</li>
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
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10px;">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th data-ordering="false">ID</th>
                                        <th data-ordering="false">Name</th>
                                        <th data-ordering="false">Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($leads as $lead)
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>{{ $lead->id }}</td>
                                        <td>{{ $lead->first_name }} {{ $lead->last_name }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->phone_number }}</td>
                                        <td>{{ $lead->service_type }}</td>
                                        <td><a href="#!">{{ strlen($lead->message) > 100 ? substr($lead->message, 0, 100) . '...' : $lead->message }}</a></td>
                                        <td>{{ $lead->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><button type="button" class="dropdown-item view-button" data-bs-toggle="modal" data-bs-target="#myModal" data-name="{{ $lead->name }}" data-content="{{ $lead->message }}"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</button></li>
                                                    {{-- <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li> --}}
                                                    <li>
                                                        <!-- <button class="dropdown-item remove-item-btn delete-category" data-id="{{ $lead->id }}" data-confirm="Are you sure you want to delete this record?">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </button> -->
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        No data found
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




<!-- Default Modals -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <h5 class="fs-15" id="modal-name"></h5>
                <p class="text-muted" id="modal-content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script>
    const viewButtons = document.querySelectorAll('.view-button');
    const modalName = document.getElementById('modal-name');
    const modalContent = document.getElementById('modal-content');

    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const content = this.getAttribute('data-content');
            modalName.textContent = name;
            modalContent.textContent = content;
        });
    });
</script>

@endsection


@section('scripts')

<script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const deleteLinks = document.querySelectorAll(".delete-category");

        deleteLinks.forEach(function(link) {
            link.addEventListener("click", function(event) {
                event.preventDefault();

                const appointmentId = link.getAttribute("data-id");

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
                    if (result.value) {
                        // User confirmed the deletion, send an AJAX request
                        fetch(`/appointments/${appointmentId}`, {
                                method: "DELETE",
                                headers: {
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}", // Include the CSRF token
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
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
                            })
                            .catch(error => {
                                console.error("Error:", error);
                            });
                    } else {
                        result.dismiss === Swal.DismissReason.cancel &&
                            Swal.fire({
                                title: "Cancelled",
                                text: "Your record is safe :)",
                                icon: "error",
                                confirmButtonClass: "btn btn-primary mt-2",
                                buttonsStyling: !1,
                            });
                    }
                });
            });
        });
    });
</script>

@endsection