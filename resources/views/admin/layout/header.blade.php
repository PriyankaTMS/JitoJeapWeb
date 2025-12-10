<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>Jito Rom Zone</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/jrz.png') }}" />
    <link href="{{ asset('admin/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/summernotes/summernote-lite.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="{{ route('admin.home') }}">
                        <b class="logo-icon ps-2">
                            <img src="{{ asset('admin/assets/images/jrz.png') }}" alt="homepage" class="light-logo m-2"
                                width="80%" />
                        </b>
                        {{--  <span class="logo-text ms-2">
                            <img src="{{ asset('admin/assets/images/logo-text.png') }}" alt="homepage"
                                class="light-logo" />
                        </span>  --}}
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class=" nav-link  dropdown-toggle text-muted waves-effect waves-dark         pro-pic  "
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><span class="text-white">{{ Auth::user()->name }}</span>
                                <img src="{{ asset('admin/assets/images/users/1.jpg') }}" alt="user"
                                    class="rounded-circle" width="31" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="mdi mdi-account me-1 ms-1"></i>
                                    <strong>{{ Auth::user()->name }}</strong>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <script>
            function removeElementsByClass(className) {
                const elements = document.getElementsByClassName(className);
                while (elements.length > 0) {
                    elements[0].parentNode.removeChild(elements[0]);
                }
            }
            setTimeout(() => {
                removeElementsByClass('decodeme');
            }, 4000);
        </script>
        <aside class="left-sidebar mt-4" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.home') }}" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.zone') }}" aria-expanded="false">
                                <i class='fas fa-users'></i>
                                <span class="hide-menu"> Zone</span></a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.power_team') }}" aria-expanded="false">
                                <i class='fas fa-users'></i>
                                <span class="hide-menu">Power Team</span></a>
                        </li> --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.category') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Business Category</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.membership') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Membership Type</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.chapter') }}" aria-expanded="false">
                                <i class='fas fa-id-badge'></i>
                                <span class="hide-menu">Chapter</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.chapterleader') }}" aria-expanded="false">
                                <i class='fas fa-id-badge'></i>
                                <span class="hide-menu">Chapter Leaders</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.team') }}" aria-expanded="false">
                                <i class='fas fa-id-badge'></i>
                                <span class="hide-menu">Teams</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.roaster') }}" aria-expanded="false">
                                <i class='fas fa-user'></i>
                                <span class="hide-menu">Roasters</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.contactenquirylist') }}" aria-expanded="false">
                                <i class='fas fa-user'></i>
                                <span class="hide-menu">Contact Enquiry</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.userBought') }}" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Roasters Bought</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.vip') }}" aria-expanded="false">
                                <i class='fas fa-archive'></i>
                                <span class="hide-menu">Vip's</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.table') }}" aria-expanded="false">
                                <i class='fas fa-archive'></i>
                                <span class="hide-menu">Tables</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.timeslot') }}" aria-expanded="false">
                                <i class='far fa-clock'></i>
                                <span class="hide-menu">Time Slots</span></a>
                        </li>
                        {{--  <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.industrial_connect') }}" aria-expanded="false">
                                <i class='fas fa-industry'></i>
                                <span class="hide-menu">Industrial Connect</span></a>
                        </li>  --}}
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.staff') }}" aria-expanded="false">
                                <i class='fas fa-users'></i>
                                <span class="hide-menu">Staff</span></a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.designation') }}" aria-expanded="false">
                                <i class='fas fa-users'></i>
                                <span class="hide-menu">Designation</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.eventagenda') }}" aria-expanded="false">
                                <i class='fas fa-cubes'></i>
                                <span class="hide-menu">Event Agenda</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.attendance') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Attendance</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.image') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Images</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.upcoming') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Upcoming Events</span></a>
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('admin.completed') }}" aria-expanded="false">
                                <i class='fas fa-address-book'></i>
                                <span class="hide-menu">Completed Events</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="d-flex align-items-center justify-content-center text-white text-decoration-none rounded-circle"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><svg
                                    stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 1024 1024" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 0 1-112.7 75.9A352.8 352.8 0 0 1 512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 0 1-112.7-75.9 353.28 353.28 0 0 1-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 0 0 0-12.6z">
                                    </path>
                                </svg>
                                <span class="hide-menu m-2">Logout</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
