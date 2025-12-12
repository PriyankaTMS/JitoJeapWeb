<!DOCTYPE html>
<html class="wide" lang="en">

<head>
    <title>Jito Rom Zone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <link rel="icon" href="{{ asset('website/images/BNI_Logo.png') }}" type="image/x-icon"> --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/jrz.png') }}" />

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Barlow%7CBarlow+Condensed:300,400,500,600,700,900">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">








    <style>
        .material-symbols-rounded {
            font-variation-settings:
                'FILL' 1,
                'wght' 400,
                'GRAD' 0,
                'opsz' 48;
            font-family: 'Material Symbols Rounded';
            font-size: 32px;
            color: #000;
        }

        .navbar-nav .nav-item.active a,
        .navbar-nav .nav-item.active #dropdownToggle span {
            color: #009846 !important;
            font-weight: 600;
        }
    </style>
    <!-- Bootstrap JS and Popper.js (Bootstrap 4) -->


    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

        @media (max-width: 768px) {
            .rd-navbar-nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px 0;
            }

            .rd-nav-item {
                margin-left: 0;
                /* Remove left margin */
                margin-bottom: 10px;
                /* Add space between items */
            }

            .button {
                background: #D11C2F;
            }

            .rd-navbar-collapse {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                background-color: white;
                color: white !important;
                /* Set background color for contrast */
                padding: 15px 0;
                /* Add some padding */
                position: absolute;
                top: 100%;
                /* Position below the navbar */
                left: 0;
                right: 0;
                z-index: 9999;
                /* Ensure it stays on top */
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
                /* Optional shadow */
            }

            .rd-navbar-toggle {
                display: block;
                /* Show the toggle button on mobile */
            }

            .rd-navbar-brand {
                margin-bottom: 10px;
                /* Space below the brand logo */
            }
        }

        @media (max-width: 768px) {
            .username-responsive {
                font-size: 18px;
                color: #1f1f1f !important;
                font-weight: bold;
                /* Make the text bold */
                /* Increase font size for better readability on small screens */
            }

            .profile-wrapper {
                gap: 5px;
                /* Adjust spacing between image and text on smaller screens */
            }
        }


        .username-text {
            color: white;
            /* Set the default text color to white */
        }

        /* Change text color to black on screens smaller than 768px (tablets and below) */
        @media (max-width: 768px) {
            .username-text {
                color: black;
                /* Change the text color to black for responsive view */
            }
        }
    </style>

</head>


<body>

    {{-- <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="{{ asset('website/images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div> --}}
    {{-- <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div> --}}


    <div class="page">
        <!-- Section Header Default-->
        <header class="section page-header">
            <!--RD Navbar-->
            <div class="rd-navbar-wrap">

                <nav style="height: 125px" class="rd-navbar rd-navbar-classic" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="76px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="text-center" style="height: 140px; width: auto; background: #EBEBEB; ">
                        <img src="{{ asset('website/images/ie8-panel/image 1.png') }}" alt="Logo"
                            style=" width: 256.44px;height: 89px; margin-top: 20px; ">

                    </div>

                    <div class="rd-navbar-main-outer " style="background-color: white !important;">
                        <div class="rd-navbar-main">
                            <!--RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!--RD Navbar Toggle-->
                                <button class="rd-navbar-toggle"
                                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!--RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="{{ route('index') }}">
                                        <img class="brand-logo-dark d-block d-md-none ms-auto"
                                            src="{{ asset('website/images/ie8-panel/ROM ZONE LOGO_C2C 1.png') }}"
                                            srcset="{{ asset('website/images/ie8-panel/ROM ZONE LOGO_C2C 1.png') }}"
                                            alt="Voelas" />
                                        <img class="brand-logo-light" style="width: 194px;height:87px"
                                            src="{{ asset('website/images/ie8-panel/ROM ZONE LOGO_C2C 1.png') }}"
                                            srcset="{{ asset('website/images/ie8-panel/ROM ZONE LOGO_C2C 1.png') }}"
                                            alt="Voelas" />
                                    </a>
                                </div>
                            </div>
                            <!-- Rd Navbar Navigation-->

                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <ul class="rd-navbar-nav d-flex align-items-center justify-content-center"
                                        style="display: flex; align-items: center; justify-content: center; list-style: none; margin: 0; padding: 0; font-family: Arial, sans-serif; font-weight: 400; font-size: 16px; line-height: 1;">
                                        <ul class="navbar-nav flex-md-row flex-column text-center text-md-start">
                                            <ul
                                                class="navbar-nav flex-md-row flex-column align-items-md-center text-center text-md-start nav-link-sm">
                                                <li
                                                    class="nav-item px-md-2 py-1 {{ request()->is('index') ? 'active' : '' }}">
                                                    <a class="nav-link text-black" href="{{ route('index') }}">HOME</a>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>
                                                <li
                                                    class="nav-item px-md-2 py-1 position-relative {{ request()->is('about/*') ? 'active' : '' }}">
                                                    <div id="dropdownToggle"
                                                        class="d-flex text-black align-items-center"
                                                        style="cursor: pointer;">
                                                        <span>ABOUT</span>
                                                        <svg width="14" height="14" style="margin-left: 5px;">
                                                            <path d="M2 4 L7 9 L12 4" stroke="black" stroke-width="2"
                                                                fill="none" />
                                                        </svg>
                                                    </div>

                                                    <ul id="Dropdown"
                                                        style="
            list-style:none;
            padding:10px;
            margin:0;
            background:white;
            border:1px solid #ccc;
            position:absolute;
            top:23px;
            left:0;
            min-width:150px;
            display:none;
            z-index:999;
        ">
                                                        <li class="{{ request()->is('about/JITO') ? 'active' : '' }}">
                                                            <a href="{{ route('jito') }}">Jito</a>
                                                        </li>
                                                        <li class="{{ request()->is('about/JEAP') ? 'active' : '' }}">
                                                            <a href="{{ route('jeap') }}">Jeap</a>
                                                        </li>
                                                        <li
                                                            class="{{ request()->is('about/Board-Of-Directors') ? 'active' : '' }}">
                                                            <a href="{{ route('boardOfDirectors') }}">Board of
                                                                Directors</a>
                                                        </li>
                                                        <li
                                                            class="{{ request()->is('about/testimonials-and-Success-Stories') ? 'active' : '' }}">
                                                            <a href="{{ route('testimonial&Success') }}">Our
                                                                testimonials / Success story </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>
                                                <li class="nav-item px-md-2 py-1 position-relative">
                                                    <div id="donorDropdownToggle"
                                                        class="d-flex text-black align-items-center"
                                                        style="cursor: pointer;">
                                                        <span>DONOR</span>
                                                        <svg width="14" height="14" style="margin-left: 5px;">
                                                            <path d="M2 4 L7 9 L12 4" stroke="black" stroke-width="2"
                                                                fill="none" />
                                                        </svg>
                                                    </div>

                                                    <ul id="donorDropdown"
                                                        style="
            list-style:none;
            padding:10px;
            margin:0;
            background:white;
            border:1px solid #ccc;
            position:absolute;
            top:23px;
            left:0;
            min-width:150px;
            display:none;
            z-index:999;
        ">
                                                        <li class="">
                                                            <a href="{{route('beDonor')}}">BE A DONOR</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="#">Our Donors</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>

                                                <li class="nav-item px-md-2 py-1">
                                                    <a class="nav-link text-black"
                                                        href="{{ route('eventagenda') }}">EVENT AGENDA</a>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>

                                                <li class="nav-item px-md-2 py-1">
                                                    <a class="nav-link text-black"
                                                        href="{{ route('session_1_2_1') }}">ROM DIRECTORY</a>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>

                                                <li class="nav-item px-md-2 py-1">
                                                    <a class="nav-link text-black"
                                                        href="{{ url('/#chapter') }}">CHAPTERS</a>
                                                </li>
                                                <li class="d-none d-md-inline text-black px-2">|</li>

                                                <li class="nav-item px-md-2 py-1">
                                                    <a class="nav-link text-black"
                                                        href="{{ route('contact') }}">CONTACTS</a>
                                                </li>
                                                <!-- Visible only on small devices -->
                                                <div class="d-block d-md-none">
                                                    @if (!Auth::check())
                                                        <div class="d-flex flex-column align-items-start px-3 py-2"
                                                            style="gap: 10px;">
                                                            {{-- <a class="btn btn-outline-secondary btn-sm"
                                                                href="{{ route('login') }}"
                                                                style="padding: 6px 14px; border-radius: 6px; font-weight: 500; width: 100%;">Login</a> --}}
                                                            <a class="btn btn-success btn-sm"
                                                                href="{{ route('register') }}"
                                                                style="padding: 6px 14px; border-radius: 6px; font-weight: 500; width: 100%;">Register</a>
                                                        </div>
                                                    @else
                                                        <div class="px-3 py-2">
                                                            <a class="d-flex align-items-center text-decoration-none mb-2"
                                                                href="{{ route('myprofile') }}">
                                                                <img src="{{ Auth::user()->image ? asset('roaster/' . Auth::user()->image) : asset('website/images/defaultuser.png') }}"
                                                                    alt="user" class="rounded-circle me-2"
                                                                    style="width: 30px; height: 30px;">
                                                                <span
                                                                    class="fw-bold text-dark">{{ Auth::user()->name }}</span>
                                                            </a>
                                                            <a class="dropdown-item" href="{{ route('myprofile') }}">
                                                                <i class="mdi mdi-account me-1 ms-1"></i> View Profile
                                                            </a>
                                                            <a class="dropdown-item" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#changePasswordModal">
                                                                <i class="mdi mdi-key me-1 ms-1"></i> Change Password
                                                            </a>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">
                                                                <i class="fa fa-power-off me-1 ms-1"></i> Logout
                                                            </a>
                                                            <form id="logout-form-mobile"
                                                                action="{{ route('logout') }}" method="POST"
                                                                class="d-none">
                                                                @csrf
                                                            </form>
                                                        </div>
                                                    @endif
                                                </div>
                                            </ul>
                                </div>
                            </div>




                            <!-- RD Navbar Collapse -->
                            <div class="rd-navbar-collapse">
                                @if (!Auth::check())
                                    <div class="d-flex align-items-center" style="gap: 10px;">
                                        {{-- <a class="btn btn-outline-secondary btn-lg px-4 py-2"
                                            href="{{ route('login') }}"
                                            style="padding: 6px 14px; border-radius: 6px ; border-color: gray; font-weight: 500; width: 140px; height: 40px;">Login</a> --}}
                                        <a class="btn btn-success" href="{{ route('register') }}"
                                            style="padding: 6px 14px; border-radius: 6px; font-weight: 500;width: 140px; height: 40px;margin-right:20px;">Register</a>
                                    </div>
                                @else
                                    <div class="">
                                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                            href="{{ route('myprofile') }}" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">

                                            <img src="{{ Auth::user()->image ? asset('roaster/' . Auth::user()->image) : asset('website/images/defaultuser.png') }}"
                                                alt="user" class="rounded-circle"
                                                style="width: 30px; height:30px;" />
                                            <span style="color: #000;"
                                                class="username-text ">{{ Auth::user()->name }}</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                            aria-labelledby="navbarDropdown">
                                            <!-- View Profile -->
                                            <li><a class="dropdown-item" href="{{ route('myprofile') }}"><i
                                                        class="mdi mdi-account me-1 ms-1"></i> View
                                                    Profile</a>
                                            </li>
                                            <!-- Change Password -->
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#changePasswordModal">
                                                    <i class="mdi mdi-key me-1 ms-1"></i> Change
                                                    Password
                                                </a>
                                            </li>
                                            <!-- Logout -->
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-power-off me-1 ms-1"></i>
                                                    Logout</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                    <!-- Change Password Modal -->
                                    <div class="modal fade" id="changePasswordModal" tabindex="-1"
                                        aria-labelledby="changePasswordModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="changePasswordModalLabel">
                                                        Change Password</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('change_password', Auth::user()->id) }}"
                                                        method="POST" id="changePasswordForm">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="newPassword" class="form-label">New
                                                                Password</label>
                                                            <input type="password" name="password"
                                                                class="form-control" id="newPassword" required>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- Save Button will now submit the form -->
                                                    <button type="submit" class="btn btn-primary"
                                                        form="changePasswordForm">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>
