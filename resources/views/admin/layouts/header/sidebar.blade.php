<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="{{route('admin.dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('assets/admin/images/logo-sm.png')}}{{ASSET_VERSION}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/admin/images/logo-light.png')}}{{ASSET_VERSION}}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link @if(request()->is('*/dashboard') == 'dashboard') active @endif" href="{{route('admin.dashboard')}}">
                        <i class="ri-dashboard-line"></i> <span data-key="t-Dashboard">Dashboard</span>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link" href="users.html">--}}
{{--                        <i class="ri-shield-user-line"></i> <span data-key="t-Users">Users</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link menu-link" href="#sidebarNurse" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarNurse">--}}
{{--                        <i class="ri-nurse-line"></i> <span data-key="t-Nurse">Nurse</span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse menu-dropdown" id="sidebarNurse">--}}
{{--                        <ul class="nav nav-sm flex-column">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="clinic-skills.html" class="nav-link" data-key="t-ClinicSkills"> Clinic Skills </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="clinical-scenarios.html" class="nav-link" data-key="t-ClinicalScenarios"> Clinical Scenarios </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="medications.html" class="nav-link" data-key="t-Medications"> Medications </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="paramedic-videos.html" class="nav-link" data-key="t-Videos"> Videos </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="paramedic-articles.html" class="nav-link" data-key="t-Articles"> Articles </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="paramedic-helpful-links.html" class="nav-link" data-key="t-HelpfulLink"> Helpful Links For Nurses </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li> <!-- end Dashboard Menu -->--}}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
