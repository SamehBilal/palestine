<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palestine</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">

    <!-- build:css assets/css/app.min.css -->
    <!--== jqvmap Min CSS ==-->
    <link href="{{ asset('assets/css/jqvmap.min.css') }}" rel="stylesheet" />
    <!--== ChartJS Min CSS ==-->
    <link href="{{ asset('assets/css/chart.min.css') }}" rel="stylesheet" />
    <!--== DataTables Min CSS ==-->
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet" />
    <!--== Select2 Min CSS ==-->
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    <!--== Bootstrap Min CSS ==-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- endbuild -->

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-dark">
    <!--== Start Header Wrapper ==-->
    <header class="header-wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="logo-wrap">
                        <a href="{{ url('/') }}" wire:navigate><img src="{{ asset('assets/img/logo.png') }}" alt="logo" /></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="last-update-wrap">
                        <p class="mb-0">Update: <span class="last-update"></span></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="navbar-wrap">
                        <nav class="menubar">
                            <ul class="nav">
                                <li><a href="{{ route('live') }}" wire:navigate>Dashboard</a></li>
                                <li><a href="{{ route('map') }}" wire:navigate>Map</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->

    <!--== Start Main Content Wrapper ==-->
    <main class="main-content-wrapper">
        {{ $slot }}
    </main>
    <!--== End Main Content Wrapper ==-->


    <!--=======================Javascript============================-->
    <!-- build:js assets/js/app.min.js -->
    <!--=== Modernizr Min Js ===-->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!--=== Select2 Min Js ===-->
    <script src="{{ asset('assets/js/select2.full.min.js') }}"></script>
    <!--=== Data Table Min Js ===-->
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <!--=== ChartJS Min Js ===-->
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <!--=== jQuery Vector Map Min Js ===-->
    <script src="{{ asset('assets/js/jquery.vmap.min.js') }}"></script>
    <!--=== jQuery Vector World Min Js ===-->
    <script src="{{ asset('assets/js/jquery.vmap.world.js') }}"></script>

    <!--=== APP Js ===-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!--=== Active Js ===-->
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <!-- endbuild -->
</body>

</html>

