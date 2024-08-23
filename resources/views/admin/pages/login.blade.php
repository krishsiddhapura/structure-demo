<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Sign In | Nurse Para</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.ico')}}{{ASSET_VERSION}}">

    <!-- Layout config Js -->
    <script src="{{asset('assets/admin/js/layout.js')}}{{ASSET_VERSION}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}{{ASSET_VERSION}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/admin/css/icons.min.css')}}{{ASSET_VERSION}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/admin/css/app.min.css')}}{{ASSET_VERSION}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/admin/css/custom.css')}}{{ASSET_VERSION}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/libs/sweetalert2/sweetalert2.min.css')}}{{ASSET_VERSION}}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    <div class="bg-overlay"></div>
                                    <div class="position-relative h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="mb-4">
                                            <a href="{{route('admin.login')}}" class="d-block">
                                                <img src="{{asset('assets/admin/images/logo-light.png')}}{{ASSET_VERSION}}" alt="" height="32">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div>
                                        <a href="{{route('admin.login')}}" class="d-block mb-3">
                                            <img src="{{asset('assets/admin/images/logo-dark.png')}}{{ASSET_VERSION}}" alt="" height="18">
                                        </a>
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue to Nurse Para.</p>
                                    </div>

                                    <div class="mt-4">
                                        <form id="loginForm">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                                                <label id="email-error" class="error text-danger" for="email" style="display: none"></label>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="password">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                                <label id="password-error" class="error text-danger" for="password" style="display: none"></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit" id="loginBtn">
                                                    <i class="bx bx-loader spinner me-2" style="display: none" id="loginBtnSpinner"></i>Sign In
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> {{env('APP_NAME')}}.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{asset('assets/admin/js/jquery-3.7.1.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/js/jquery.validate.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/libs/simplebar/simplebar.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/libs/node-waves/waves.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/libs/feather-icons/feather.min.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/js/pages/plugins/lord-icon-2.1.0.js')}}{{ASSET_VERSION}}"></script>
<script src="{{asset('assets/admin/libs/sweetalert2/sweetalert2.all.min.js')}}{{ASSET_VERSION}}"></script>

<script>
    Array.from(document.querySelectorAll(".auth-pass-inputgroup")).forEach(function (e) {
        Array.from(e.querySelectorAll(".password-addon")).forEach(function (r) {
            r.addEventListener("click", function (r) {
                var o = e.querySelector(".password-input");
                "password" === o.type ? (o.type = "text") : (o.type = "password");
            });
        });
    });

    // Handle Ajax error

    function sendError(message){
        Swal.fire({
            title: "Error!",
            text: message,
            icon: "error",
            confirmButtonClass: "btn btn-primary w-md mt-3",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 2000,
        });
    }

    function actionError(xhr,message = "{{ERROR_400}}"){
        if (xhr.status == 400){
            sendError(message);
        } else if (xhr.status === 401) {
            sendError("{{ERROR_401}}");
            setTimeout(function (){
                window.location.href = "{{route('admin.logout')}}"
            },1500);
        } else if (xhr.status === 403) {
            sendError("{{ERROR_403}}")
        } else if (xhr.status === 500) {
            sendError("{{ERROR_500}}")
        }
    }

    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "The email field is required.",
                email: "The email must be a valid email address.",
            },
            password: {
                required: "The password field is required.",
            }
        },
        errorPlacement: function(error, element) {
            element.after(error);
        },
        errorClass: "text-danger",
        submitHandler: function(form, e) {
            e.preventDefault();
            $.ajax({
                url: "{{route('admin.login-action')}}",
                method: "post",
                dataType: "json",
                data: new FormData(form),
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    $('#loginButton').attr('disabled',true);
                    $("#loginBtnSpinner").show();
                },
                success: function(result) {
                    Swal.fire({
                        title: "Success!",
                        text: result.message,
                        icon: "success",
                        confirmButtonClass: "btn btn-primary w-md mt-3",
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(function() {
                        window.location.href = "{{route('admin.dashboard')}}";
                    }, 1000);
                },
                error: function(xhr) {
                    let data = xhr.responseJSON;
                    if (data.hasOwnProperty('error')) {
                        if (data.error.hasOwnProperty('email')) {
                            $("#email-error").html(data.error.email).show();
                        }
                        if (data.error.hasOwnProperty('password')) {
                            $("#password-error").html(data.error.password).show();
                        }
                    } else if (data.hasOwnProperty('message')) {
                        actionError(xhr,data.message)
                    } else {
                        actionError(xhr);
                    }
                },
                complete: function() {
                    $('#loginButton').attr('disabled',false);
                    $("#loginBtnSpinner").hide();
                },
            });
        }
    });
</script>
</body>

</html>
