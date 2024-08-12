<!-- Layout config Js -->
<script src="{{asset('assets/admin/js/layout.js')}}{{ASSET_VERSION}}"></script>
<!-- Bootstrap Css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}{{ASSET_VERSION}}" />
<!-- Icons Css -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/icons.min.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/sweetalert2/sweetalert2.min.css')}}{{ASSET_VERSION}}" />
<!-- Datatable -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/dataTables.bootstrap5.min.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/responsive.dataTables.min.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/rowReorder.dataTables.min.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/buttons.dataTables.min.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/select.dataTables.min.css')}}{{ASSET_VERSION}}" />
<!-- App Css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/app.min.css')}}{{ASSET_VERSION}}" />
<!-- custom Css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/custom.css')}}{{ASSET_VERSION}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/libs/datatable/custom.css')}}{{ASSET_VERSION}}" >

<script type="text/javascript">
    function imagePlaceholder(imageElement) {
        imageElement.src = "{{asset(IMAGE_PLACEHOLDER)}}";
    }

    function userPlaceholder(imageElement) {
        imageElement.src = "{{asset(PROFILE_PLACEHOLDER)}}";
    }
</script>
