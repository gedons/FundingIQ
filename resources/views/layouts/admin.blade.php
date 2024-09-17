<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        /* Sidebar styles */
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1f201f; /* Dark background */
            color: white; /* Text color */
            overflow-x: hidden;
            padding: 30px 0; /* Padding for top and bottom */
        }

        .sidebar a {
            padding: 30px 16px; /* Increased padding for space */
            text-decoration: none;
            font-size: 15px;
            color: #ffffff; /* White text color */
            display: flex; /* Flexbox for icon and text alignment */
            align-items: center; /* Center items vertically */
        }

        .sidebar hr {
            border: 0; /* Remove default border */
            height: 1px; /* Set height for the line */
            background-color: #ffffff; /* Color of the line */
            margin: 10px 0; /* Space above and below the line */
        }

        .sidebar a:hover {
            background-color: #2d3033; /* Darker background on hover */
            color: #f1f1f1; /* Light color on hover */
        }

        .sidebar svg {
            margin-right: 10px; /* Space between icon and text */
            fill: currentColor; /* Icon color matches text color */
        }

        .logo-container {
            text-align: center; /* Center the logo */
            margin-bottom: 20px; /* Space below the logo */
        }

        .logo-container img {
            width: 80%; /* Responsive width */
            max-width: 150px; /* Maximum width */
            height: auto; /* Maintain aspect ratio */
        }

        .main {
            margin-left: 200px;
            padding: 0px 10px;
        }

        /* Mobile styles */
        @media screen and (max-width: 767px) {
            .sidebar {
                display: none;
                padding-top: 30px; /* Hide sidebar on mobile */
            }

            .main {
                margin-left: 0; /* No margin on mobile */
            }

            .mobile-menu {
                display: flex; /* Show mobile menu */
                justify-content: space-around; /* Space items evenly */
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #1f201f;; /* Dark background */
                padding: 10px 0;
            }

            .mobile-menu a {
                padding: 0 10px;
                text-decoration: none;
                font-size: 16px;
                color: #ffffff; /* White text color */
                display: flex; /* Flexbox for icon and text alignment */
                align-items: center; /* Center items vertically */
            }

            .mobile-menu svg {
                margin-right: 5px; /* Space between icon and text */
                fill: currentColor; /* Icon color matches text color */
            }
        }

        /* Hide mobile menu on larger screens */
        @media screen and (min-width: 768px) {
            .mobile-menu {
                display: none; /* Hide mobile menu on larger screens */
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="sidebar">
            <!-- Logo -->
            <div class="logo-container" style="text-align: center; margin-bottom: 20px;">
                <img src="{{ asset('assets/images/signals2.png') }}" alt="Logo" style="width: 80%; max-width: 150px; height: auto;">
            </div>

            <a href="{{ route('admin.dashboard') }}">
                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="#ffffff" d="M32,0C14.355,0,0,14.355,0,32s14.355,32,32,32s32-14.355,32-32S49.645,0,32,0z M32,62 C15.458,62,2,48.542,2,32S15.458,2,32,2s30,13.458,30,30S48.542,62,32,62z"></path> <path fill="#ffffff" d="M34.996,28.021L35,28.008V17c0-1.654-1.346-3-3-3s-3,1.346-3,3v11l0.004,0.021 C27.795,28.936,27,30.371,27,32c0,2.757,2.243,5,5,5s5-2.243,5-5C37,30.371,36.205,28.936,34.996,28.021z M31,17 c0-0.552,0.448-1,1-1s1,0.448,1,1v10.102C32.677,27.035,32.343,27,32,27s-0.677,0.035-1,0.102V17z M32,35c-1.654,0-3-1.346-3-3 s1.346-3,3-3s3,1.346,3,3S33.654,35,32,35z"></path> <path fill="#ffffff" d="M32.03,31H32.02c-0.552,0-0.994,0.447-0.994,1s0.452,1,1.005,1c0.552,0,1-0.447,1-1S32.582,31,32.03,31z"></path> <path fill="#ffffff" d="M32,4C16.561,4,4,16.561,4,32c0,4.738,1.19,9.201,3.277,13.116c0.314,0.59,0.646,1.169,1.001,1.733 l6.035-3.485c0.479-0.275,0.642-0.886,0.366-1.364c-0.276-0.479-0.887-0.644-1.367-0.366l-4.301,2.483v-0.001 c-0.744-1.405-1.36-2.887-1.841-4.429l1.904-0.51c0.535-0.145,0.852-0.688,0.707-1.225c-0.143-0.533-0.691-0.85-1.225-0.707 l-1.9,0.509c-0.351-1.538-0.563-3.127-0.626-4.756H11c0.554,0,0.999-0.447,1-0.999c0-0.554-0.446-1.001-1.001-1.001H6.025 c0.062-1.628,0.275-3.218,0.625-4.756l1.907,0.511c0.535,0.143,1.082-0.17,1.225-0.707c0.144-0.532-0.174-1.081-0.707-1.225 L7.161,24.31c0.479-1.544,1.103-3.023,1.847-4.431l4.307,2.486c0.479,0.276,1.088,0.112,1.365-0.365 c0.276-0.479,0.113-1.09-0.367-1.367l-4.301-2.482c0.857-1.357,1.835-2.63,2.921-3.803l1.389,1.389 c0.393,0.391,1.022,0.393,1.414,0c0.391-0.39,0.391-1.023,0-1.414l-1.389-1.389c1.173-1.087,2.447-2.064,3.805-2.923l2.483,4.303 c0.276,0.479,0.887,0.641,1.365,0.366c0.479-0.277,0.643-0.888,0.365-1.368L19.88,9.008c1.406-0.744,2.886-1.367,4.429-1.846 l0.513,1.914c0.145,0.534,0.689,0.852,1.225,0.707c0.533-0.143,0.851-0.69,0.707-1.225L26.242,6.65 c1.539-0.35,3.13-0.563,4.759-0.625L31,11.001c0,0.552,0.448,0.998,1,0.999c0.553-0.001,1-0.447,1-1.002V6.025 c1.628,0.062,3.218,0.275,4.757,0.625l-0.512,1.908c-0.143,0.534,0.172,1.082,0.707,1.225c0.533,0.144,1.082-0.173,1.225-0.707 l0.513-1.915c1.544,0.479,3.024,1.103,4.432,1.847l-2.488,4.307c-0.275,0.478-0.11,1.089,0.367,1.364 c0.479,0.276,1.09,0.113,1.367-0.367l2.482-4.3c1.357,0.857,2.631,1.835,3.803,2.922l-1.39,1.389c-0.391,0.391-0.392,1.023,0,1.414 c0.391,0.391,1.023,0.391,1.414,0l1.39-1.389c1.087,1.173,2.064,2.445,2.922,3.803l-4.304,2.483 c-0.478,0.276-0.64,0.889-0.364,1.365c0.276,0.479,0.888,0.643,1.368,0.365l4.304-2.484c0.744,1.406,1.367,2.886,1.847,4.43 l-1.916,0.513c-0.533,0.144-0.851,0.69-0.707,1.225c0.143,0.533,0.691,0.851,1.225,0.707l1.909-0.512 c0.35,1.54,0.563,3.129,0.625,4.758H53c-0.553,0-1,0.447-1,1s0.447,1,1,1h4.969c-0.062,1.629-0.275,3.218-0.626,4.756l-1.902-0.51 c-0.535-0.141-1.079,0.171-1.225,0.707c-0.143,0.534,0.178,1.082,0.707,1.225l1.906,0.511c-0.48,1.541-1.097,3.023-1.842,4.429 l-4.301-2.483c-0.479-0.276-1.09-0.112-1.366,0.366s-0.113,1.089,0.366,1.366l6.035,3.484c0.354-0.563,0.686-1.143,1-1.732 C58.81,41.202,60,36.739,60,32C60,16.561,47.439,4,32,4z"></path> </g> </g></svg>
                Dashboard
            </a>
            <hr>
            <a href="{{ route('admin.users') }}">
                <svg width="24" height="24" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1346]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -2119.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.083123,1964.99998 C338.083123,1962.79398 336.251842,1960.99998 334,1960.99998 C331.748158,1960.99998 329.916877,1962.79398 329.916877,1964.99998 C329.916877,1967.20599 331.748158,1968.99999 334,1968.99999 C336.251842,1968.99999 338.083123,1967.20599 338.083123,1964.99998 M341.945758,1979 L340.124685,1979 C339.561214,1979 339.103904,1978.552 339.103904,1978 C339.103904,1977.448 339.561214,1977 340.124685,1977 L340.5626,1977 C341.26898,1977 341.790599,1976.303 341.523154,1975.662 C340.286989,1972.69799 337.383888,1970.99999 334,1970.99999 C330.616112,1970.99999 327.713011,1972.69799 326.476846,1975.662 C326.209401,1976.303 326.73102,1977 327.4374,1977 L327.875315,1977 C328.438786,1977 328.896096,1977.448 328.896096,1978 C328.896096,1978.552 328.438786,1979 327.875315,1979 L326.054242,1979 C324.778266,1979 323.773818,1977.857 324.044325,1976.636 C324.787453,1973.27699 327.107688,1970.79799 330.163906,1969.67299 C328.769519,1968.57399 327.875315,1966.88999 327.875315,1964.99998 C327.875315,1961.44898 331.023403,1958.61898 334.733941,1959.04198 C337.422678,1959.34798 339.650022,1961.44698 340.05323,1964.06998 C340.400296,1966.33099 339.456073,1968.39599 337.836094,1969.67299 C340.892312,1970.79799 343.212547,1973.27699 343.955675,1976.636 C344.226182,1977.857 343.221734,1979 341.945758,1979 M337.062342,1978 C337.062342,1978.552 336.605033,1979 336.041562,1979 L331.958438,1979 C331.394967,1979 330.937658,1978.552 330.937658,1978 C330.937658,1977.448 331.394967,1977 331.958438,1977 L336.041562,1977 C336.605033,1977 337.062342,1977.448 337.062342,1978" id="profile_round-[#1346]"> </path> </g> </g> </g> </g></svg>
                Users
            </a>
            <hr>
            <a href="{{ route('admin.transactions') }}">
                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <circle fill="#ffffff" cx="32" cy="14" r="3"></circle> <path fill="#ffffff" d="M4,25h56c1.794,0,3.368-1.194,3.852-2.922c0.484-1.728-0.242-3.566-1.775-4.497l-28-17 C33.438,0.193,32.719,0,32,0s-1.438,0.193-2.076,0.581l-28,17c-1.533,0.931-2.26,2.77-1.775,4.497C0.632,23.806,2.206,25,4,25z M32,9c2.762,0,5,2.238,5,5s-2.238,5-5,5s-5-2.238-5-5S29.238,9,32,9z"></path> <rect x="34" y="27" fill="#ffffff" width="8" height="25"></rect> <rect x="46" y="27" fill="#ffffff" width="8" height="25"></rect> <rect x="22" y="27" fill="#ffffff" width="8" height="25"></rect> <rect x="10" y="27" fill="#ffffff" width="8" height="25"></rect> <path fill="#ffffff" d="M4,58h56c0-2.209-1.791-4-4-4H8C5.791,54,4,55.791,4,58z"></path> <path fill="#ffffff" d="M63.445,60H0.555C0.211,60.591,0,61.268,0,62v2h64v-2C64,61.268,63.789,60.591,63.445,60z"></path> </g> </g></svg>
                Transactions
            </a>
            <hr>
            {{-- <a href="{{ route('admin.trades') }}">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21V11M12 11L9 14M12 11L15 14M7 16.8184C4.69636 16.2074 3 14.1246 3 11.6493C3 9.20008 4.8 6.9375 7.5 6.5C8.34694 4.48637 10.3514 3 12.6893 3C15.684 3 18.1317 5.32251 18.3 8.25C19.8893 8.94488 21 10.6503 21 12.4969C21 14.8148 19.25 16.7236 17 16.9725" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                Trades
            </a> --}}
            {{-- <hr> --}}
            <a href="{{ route('admin.kyc') }}">
                <svg width="24" height="24" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>profile_round [#1346]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-380.000000, -2119.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.083123,1964.99998 C338.083123,1962.79398 336.251842,1960.99998 334,1960.99998 C331.748158,1960.99998 329.916877,1962.79398 329.916877,1964.99998 C329.916877,1967.20599 331.748158,1968.99999 334,1968.99999 C336.251842,1968.99999 338.083123,1967.20599 338.083123,1964.99998 M341.945758,1979 L340.124685,1979 C339.561214,1979 339.103904,1978.552 339.103904,1978 C339.103904,1977.448 339.561214,1977 340.124685,1977 L340.5626,1977 C341.26898,1977 341.790599,1976.303 341.523154,1975.662 C340.286989,1972.69799 337.383888,1970.99999 334,1970.99999 C330.616112,1970.99999 327.713011,1972.69799 326.476846,1975.662 C326.209401,1976.303 326.73102,1977 327.4374,1977 L327.875315,1977 C328.438786,1977 328.896096,1977.448 328.896096,1978 C328.896096,1978.552 328.438786,1979 327.875315,1979 L326.054242,1979 C324.778266,1979 323.773818,1977.857 324.044325,1976.636 C324.787453,1973.27699 327.107688,1970.79799 330.163906,1969.67299 C328.769519,1968.57399 327.875315,1966.88999 327.875315,1964.99998 C327.875315,1961.44898 331.023403,1958.61898 334.733941,1959.04198 C337.422678,1959.34798 339.650022,1961.44698 340.05323,1964.06998 C340.400296,1966.33099 339.456073,1968.39599 337.836094,1969.67299 C340.892312,1970.79799 343.212547,1973.27699 343.955675,1976.636 C344.226182,1977.857 343.221734,1979 341.945758,1979 M337.062342,1978 C337.062342,1978.552 336.605033,1979 336.041562,1979 L331.958438,1979 C331.394967,1979 330.937658,1978.552 330.937658,1978 C330.937658,1977.448 331.394967,1977 331.958438,1977 L336.041562,1977 C336.605033,1977 337.062342,1977.448 337.062342,1978" id="profile_round-[#1346]"> </path> </g> </g> </g> </g></svg>
                User Kyc
            </a>
            <hr>
            <a href="#">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.9999 2C10.2385 2 7.99991 4.23858 7.99991 7C7.99991 7.55228 8.44762 8 8.99991 8C9.55219 8 9.99991 7.55228 9.99991 7C9.99991 5.34315 11.3431 4 12.9999 4H16.9999C18.6568 4 19.9999 5.34315 19.9999 7V17C19.9999 18.6569 18.6568 20 16.9999 20H12.9999C11.3431 20 9.99991 18.6569 9.99991 17C9.99991 16.4477 9.55219 16 8.99991 16C8.44762 16 7.99991 16.4477 7.99991 17C7.99991 19.7614 10.2385 22 12.9999 22H16.9999C19.7613 22 21.9999 19.7614 21.9999 17V7C21.9999 4.23858 19.7613 2 16.9999 2H12.9999Z" fill="#ffffff"></path> <path d="M13.9999 11C14.5522 11 14.9999 11.4477 14.9999 12C14.9999 12.5523 14.5522 13 13.9999 13V11Z" fill="#ffffff"></path> <path d="M5.71783 11C5.80685 10.8902 5.89214 10.7837 5.97282 10.682C6.21831 10.3723 6.42615 10.1004 6.57291 9.90549C6.64636 9.80795 6.70468 9.72946 6.74495 9.67492L6.79152 9.61162L6.804 9.59454L6.80842 9.58848C6.80846 9.58842 6.80892 9.58778 5.99991 9L6.80842 9.58848C7.13304 9.14167 7.0345 8.51561 6.58769 8.19098C6.14091 7.86637 5.51558 7.9654 5.19094 8.41215L5.18812 8.41602L5.17788 8.43002L5.13612 8.48679C5.09918 8.53682 5.04456 8.61033 4.97516 8.7025C4.83623 8.88702 4.63874 9.14542 4.40567 9.43937C3.93443 10.0337 3.33759 10.7481 2.7928 11.2929L2.08569 12L2.7928 12.7071C3.33759 13.2519 3.93443 13.9663 4.40567 14.5606C4.63874 14.8546 4.83623 15.113 4.97516 15.2975C5.04456 15.3897 5.09918 15.4632 5.13612 15.5132L5.17788 15.57L5.18812 15.584L5.19045 15.5872C5.51509 16.0339 6.14091 16.1336 6.58769 15.809C7.0345 15.4844 7.13355 14.859 6.80892 14.4122L5.99991 15C6.80892 14.4122 6.80897 14.4123 6.80892 14.4122L6.804 14.4055L6.79152 14.3884L6.74495 14.3251C6.70468 14.2705 6.64636 14.1921 6.57291 14.0945C6.42615 13.8996 6.21831 13.6277 5.97282 13.318C5.89214 13.2163 5.80685 13.1098 5.71783 13H13.9999V11H5.71783Z" fill="#ffffff"></path> </g></svg>
                Logout
            </a>
            <hr>
        </div>

        <div class="main">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                         Dashboard <br>
                        <span class="navbar-text" style="color:#000">
                            Login IP Address: {{ request()->ip() }} <!-- Display the user's IP address -->
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="{{ route('admin.dashboard') }}">
                <div style="text-align: center;">
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="{{ route('admin.users') }}">
                <div style="text-align: center;">
                    <span>Users</span>
                </div>
            </a>

            <a href="{{ route('admin.transactions') }}">
                <div style="text-align: center;">
                    <span>Transations</span>
                </div>
            </a>

            <a href="{{ route('admin.kyc') }}">
                <div style="text-align: center;">
                    <span>User Kyc</span>
                </div>
            </a>

        </div>
</body>
</html>
