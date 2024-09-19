@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="h-100">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <!-- card -->--}}
{{--                                <div class="card card-animate">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="flex-grow-1 overflow-hidden">--}}
{{--                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Earnings</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <h5 class="text-success fs-14 mb-0">--}}
{{--                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex align-items-end justify-content-between mt-4">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="559.25">0</span>k </h4>--}}
{{--                                                <a href="" class="text-decoration-underline">View net earnings</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-sm flex-shrink-0">--}}
{{--                                                        <span class="avatar-title bg-success-subtle rounded fs-3">--}}
{{--                                                            <i class="bx bx-dollar-circle text-success"></i>--}}
{{--                                                        </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end card body -->--}}
{{--                                </div><!-- end card -->--}}
{{--                            </div><!-- end col -->--}}

{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <!-- card -->--}}
{{--                                <div class="card card-animate">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="flex-grow-1 overflow-hidden">--}}
{{--                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Orders</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <h5 class="text-danger fs-14 mb-0">--}}
{{--                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex align-items-end justify-content-between mt-4">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="36894">0</span></h4>--}}
{{--                                                <a href="" class="text-decoration-underline">View all orders</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-sm flex-shrink-0">--}}
{{--                                                        <span class="avatar-title bg-info-subtle rounded fs-3">--}}
{{--                                                            <i class="bx bx-shopping-bag text-info"></i>--}}
{{--                                                        </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end card body -->--}}
{{--                                </div><!-- end card -->--}}
{{--                            </div><!-- end col -->--}}

{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <!-- card -->--}}
{{--                                <div class="card card-animate">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="flex-grow-1 overflow-hidden">--}}
{{--                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Customers</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <h5 class="text-success fs-14 mb-0">--}}
{{--                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex align-items-end justify-content-between mt-4">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="183.35">0</span>M </h4>--}}
{{--                                                <a href="" class="text-decoration-underline">See details</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-sm flex-shrink-0">--}}
{{--                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">--}}
{{--                                                            <i class="bx bx-user-circle text-warning"></i>--}}
{{--                                                        </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end card body -->--}}
{{--                                </div><!-- end card -->--}}
{{--                            </div><!-- end col -->--}}

{{--                            <div class="col-xl-3 col-md-6">--}}
{{--                                <!-- card -->--}}
{{--                                <div class="card card-animate">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="flex-grow-1 overflow-hidden">--}}
{{--                                                <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Balance</p>--}}
{{--                                            </div>--}}
{{--                                            <div class="flex-shrink-0">--}}
{{--                                                <h5 class="text-muted fs-14 mb-0">--}}
{{--                                                    +0.00 %--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex align-items-end justify-content-between mt-4">--}}
{{--                                            <div>--}}
{{--                                                <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="165.89">0</span>k </h4>--}}
{{--                                                <a href="" class="text-decoration-underline">Withdraw money</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="avatar-sm flex-shrink-0">--}}
{{--                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">--}}
{{--                                                            <i class="bx bx-wallet text-primary"></i>--}}
{{--                                                        </span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end card body -->--}}
{{--                                </div><!-- end card -->--}}
{{--                            </div><!-- end col -->--}}
{{--                        </div> <!-- end row-->--}}

{{--                    </div> <!-- end .h-100-->--}}

{{--                </div> <!-- end col -->--}}
{{--            </div>--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border border-dashed border-end-0 border-start-0 border-top-0 ">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0 me-2 flex-grow-1">User List</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="listDatatable table w-100 pt-2 dataTable datatable no-footer" id="customerTable">
                                    <thead>
{{--                                    <tr>--}}
{{--                                        <th class="text-center">No</th>--}}
{{--                                        <th class="text-center">Profile</th>--}}
{{--                                        <th>Name</th>--}}
{{--                                        <th>Email</th>--}}
{{--                                        <th class="text-center">Join Date</th>--}}
{{--                                        <th class="text-center">SignIn Type</th>--}}
{{--                                        <th class="text-center">Status</th>--}}
{{--                                        <th class="text-center">Action</th>--}}
{{--                                    </tr>--}}
                                    </thead>
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td class="text-center">1</td>--}}
{{--                                        <td class="text-center">--}}
{{--                                            <div class="d-flex align-items-center justify-content-center">--}}
{{--                                                <div class="flex-shrink-0">--}}
{{--                                                    <a href="assets/images/user-placeholder-img.jpg" data-fancybox="">--}}
{{--                                                        <img src="assets/images/user-placeholder-img.jpg" onerror="userPlaceholder(this);" alt="" class="avatar-sm rounded-circle image_src object-cover border" />--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>Riyan Suhagiya</td>--}}
{{--                                        <td><p class="dt-email mb-0">riyansuhagiya745@gmail.com</p></td>--}}
{{--                                        <td class="text-center">12 Jan 2024</td>--}}
{{--                                        <td class="text-center">Gmail</td>--}}
{{--                                        <td class="text-center">--}}
{{--                                            <div class="form-check form-switch form-switch-md d-flex justify-content-center">--}}
{{--                                                <input type="checkbox" class="form-check-input userStatus" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-center">--}}
{{--                                            <ul class="list-inline mb-0 d-flex justify-content-center">--}}
{{--                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">--}}
{{--                                                    <a class="text-success view-item-btn" href="Javascript:void(0);">--}}
{{--                                                        <i class="ri-eye-fill fs-16" data-id="13"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">--}}
{{--                                                    <a class="text-warning edit-item-btn text-warning" data-bs-toggle="modal" href="#showModal" >--}}
{{--                                                        <i class="ri-pencil-fill fs-16 editCategory"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">--}}
{{--                                                    <a class="text-danger d-inline-block remove-item-btn deleteProduct" data-bs-toggle="modal" href="#deleteOrder">--}}
{{--                                                        <i class="ri-delete-bin-5-fill fs-16"></i>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        dataTable = $('#customerTable').DataTable({
            processing: true,
            responsive: true,
            serverSide: true,
            info: true,
            select: false,
            dom: "Bfrtip",
            lengthMenu: [
                [10, 25, 50, 75],
                ["10 rows", "25 rows", "50 rows", "75 rows"],
            ],
            buttons: ["pageLength"],
            language: {
                zeroRecords: zeroRecords,
                search: "",
                searchPlaceholder: "Search Here",
                processing: processing,
                emptyTable: emptyTable,
                paginate: {
                    next: '<i class="ri-arrow-right-s-line">',
                    previous: '<i class="ri-arrow-left-s-line">',
                },
            },
            columns: [
                { data: 'DT_RowIndex', name: 'id', title: 'id', class : 'text-center' },
                { data: 'profile', name: 'profile', title: 'profile', class : 'text-center' },
                { data: 'name', name: 'name', title: 'name', class : 'text-start' },
                { data: 'email', name: 'email', title: 'email', class : 'text-start' },
                { data: 'created_at', name: 'created_at', title: 'created at', class : 'text-center' },
                { data: 'action', name: 'action', title: 'action', class : 'text-center', searching: false },
            ],
            ajax: {
                url: '{{ route("admin.list-users") }}',
                type: "POST",
                dataType: "JSON",
                data: function (f){
                    f._token = "{{csrf_token()}}";
                },
                error: function (xhr) {
                    dataTableError("openCallTable",xhr.responseJSON.message);
                    actionError(xhr);
                },
            },
            responsive: {
                breakpoints: [
                    { name: "desktop", width: Infinity },
                    { name: "tablet", width: 1024 },
                    { name: "fablet", width: 768 },
                    { name: "phone", width: 480 },
                ],
            },
        });

        // Delete User
        function removeUser(id,element){
            Swal.fire({
                title: "Are you sure?",
                text: "Are you sure you want to remove this user ?",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "Yes, remove",
                cancelButtonText: "No, cancel!",
                confirmButtonClass: "btn btn-danger mt-2 text-white rounded px-4 fs-16",
                cancelButtonClass: "btn btn-light ms-2 mt-2 border rounded px-4 fs-16",
                buttonsStyling: !1,
            }).then(function (t) {
                if (t.value) {
                    $.ajax({
                        url: "{{route('admin.remove-user')}}",
                        dataType: "JSON",
                        method: "POST",
                        data: {
                            "user_id": id,
                            "_token": "{{csrf_token()}}",
                        },
                        beforeSend: function (){
                            $(element).html('<i class="spinner-border fs-10 spinner-border-sm m-1 mx-0"></i>');
                            $(element).attr('disabled',true);
                        },
                        success: function (data) {
                            sendSuccess(data.message);
                            dataTable.ajax.reload();
                        },
                        error: function (xhr) {
                            data = xhr.responseJSON;
                            if (data.hasOwnProperty('error')) {
                                if (data.error.hasOwnProperty('user_id')) {
                                    sendError(data.error.user_id);
                                }
                            } else {
                                sendError(data.message);
                            }
                            actionError(xhr);
                        },
                        complete: function (){
                            $(element).attr('disabled',false);
                        }
                    });
                }
            });
        }
    </script>
@endsection
