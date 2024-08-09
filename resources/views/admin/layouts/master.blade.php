<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | {{env('APP_NAME')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/admin/images/favicon.ico')}}">
    @include('admin.layouts.header.header-links')
</head>

<body>
    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!--Content Body-->
    <div id="layout-wrapper">
        <!-- Header Top Bar -->
        @include('admin.layouts.header.header')

        <!-- SideBar -->
        @include('admin.layouts.header.sidebar')

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- DOM Body -->
        <div class="main-content">
            @yield('content')

            @include('admin.layouts.footer.footer')
        </div>
    </div>

    <!-- Canvas / Modals -->
    @yield('forms')
    @include('admin.layouts.footer.footer-links')
    @include('admin.layouts.common-js.common-js')
    @yield('script')
</body>
