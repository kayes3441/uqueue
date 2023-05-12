<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('/')}}admin/{{asset('/')}}admin/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    @yield('my-css')
    <link href="{{asset('/')}}admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <link href="{{asset('/')}}admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>U-Queue</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand">
            <div class="topbar-logo-header d-none d-xl-flex">
                <div>
                    <img src="{{asset('/')}}admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">U-Queue</h4>
                </div>
            </div>
            <div class="mobile-toggle-icon d-xl-none">
                <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block ms-3">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">@yield('title')</a>
                    </li>

                </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
                <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-3">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center gap-1">
                                <img src="{{asset('/')}}admin/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                                <div class="user-name d-none d-sm-block">{{Session::get('user_name')}}</div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('/')}}admin/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">{{Session::get('user_name')}}</h6>
                                            <small class="mb-0 dropdown-user-designation text-secondary">General User</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                @if(Session::get('user_id'))
                                <a class="dropdown-item" href="{{route('general.logout')}}" >
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                                @else
                                @endif
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start navigation-->
    <div class="nav-container">

        <nav class="topbar-nav">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{route('general.dashboard')}}" >
                        <div class="parent-icon"><i class="bi bi-house-door"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-x-diamond"></i>
                        </div>
                        <div class="menu-title">Queue</div>
                    </a>
                    <ul>
                        <li> <a href="{{route('general.all.queue')}}"><i class="bi bi-arrow-right-short"></i>All Queue</a>
                        </li>
                    </ul>
                </li>
{{--                <li>--}}
{{--                    <a class="has-arrow" href="javascript:;">--}}
{{--                        <div class="parent-icon"><i class="bi bi-receipt"></i>--}}
{{--                        </div>--}}
{{--                        <div class="menu-title">Report</div>--}}
{{--                    </a>--}}
{{--                    <ul>--}}
{{--                        <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Report</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </div>
    <!--end navigation-->
    @yield('body')

</div>
<!--end wrapper-->
<!-- Bootstrap bundle JS -->
<script src="{{asset('/')}}admin/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('/')}}admin/assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/assets/js/pace.min.js"></script>
{{--datatable--}}
<script src="{{asset('/')}}admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

<script src="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

<script src="{{asset('/')}}admin/assets/js/table-datatable.js"></script>
<!--app-->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>
<script src="{{asset('/')}}admin/assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>
@yield('my-js')
</body>

</html>
