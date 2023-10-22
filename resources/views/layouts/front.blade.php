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

<body class="body-dark" style="height:100vh!Important;">
    <!--== Start Header Wrapper ==-->
    <header class="header-wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4">
                    <div class="logo-wrap">
                        <a href="{{ route('live') }}" {{-- wire:navigate --}}><img src="{{ asset('assets/img/logo2.png') }}" alt="logo" /></a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="last-update-wrap text-center">
                        <p class="mb-0">Update: <span class="last-update">{{ now()->format('Y-m-d G:i A') }}</span> <img src="{{ asset('assets/img/live.gif') }}" alt="" height="40px" ></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="navbar-wrap">
                        <nav class="menubar">
                            <ul class="nav">
                                <li><a href="{{ route('live') }}" {{-- wire:navigate --}}>Dashboard</a></li>
                                <li><a href="{{ route('map') }}" {{-- wire:navigate --}}>Map</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->

    <!--== Start Main Content Wrapper ==-->
    <main class="main-content-wrapper" >
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

    <script>
        var regions=[
            {
                "region_name": "Jaffa",
                "region_code": "PS-JFA",
                "population": 9794525
            },
            {
                "region_name": "Nazaeth",
                "region_code": "PS-NAZ",
                "population": 5769750
            },
            {
                "region_name": "Nablus",
                "region_code": "PS-NBS",
                "population": 5557276
            },
            {
                "region_name": "Ramallah",
                "region_code": "PS-RBH",
                "population": 4999932
            },
            {
                "region_name": "Dead Sea",
                "region_code": "PS-DS",
                "population": 0
            },
            {
                "region_name": "Allyd",
                "region_code": "PS-ALD",
                "population": 4881756
            },
            {
                "region_name": "Safad",
                "region_code": "PS-SAF",
                "population": 4881756
            },
            {
                "region_name": "Jenin",
                "region_code": "PS-JEN",
                "population": 4377487
            },
            {
                "region_name": "Bethlehem",
                "region_code": "PS-BTH",
                "population": 4374052
            },
            {
                "region_name": "Acre",
                "region_code": "PS-ACE",
                "population": 4050803
            },
            {
                "region_name": "Tulkarm",
                "region_code": "PS-TKM",
                "population": 3692828
            },
            {
                "region_name": "Baysan",
                "region_code": "PS-BSN",
                "population": 1958238
            },
            {
                "region_name": "Tiberias",
                "region_code": "PS-TBA",
                "population": 1640379
            },
            {
                "region_name": "Lake Tiberias",
                "region_code": "PS-LTB",
                "population": 0
            },
            {
                "region_name": "Hebron",
                "region_code": "PS-HBN",
                "population": 1565127
            },
            {
                "region_name": "Beersheba",
                "region_code": "PS-BSB",
                "population": 1545155
            },
            {
                "region_name": "Khan Yunis",
                "region_code": "PS-KYS",
                "population": 1312507
            },
            {
                "region_name": "Alramlah",
                "region_code": "PS-ALR",
                "population": 1221860
            },
            {
                "region_name": "Gaza",
                "region_code": "PS-GZA",
                "population": 1039934
            },
            {
                "region_name": "Haifa",
                "region_code": "PS-HFA",
                "population": 886239
            },
            {
                "region_name": "Jerusalem",
                "region_code": "PS-JEM",
                "population": 886239
            },
        ];


        var temp_array= regions.map(function(item){
            return item.population;
        });
        var highest_value = Math.max.apply(Math, temp_array);

        $(function() {

            for(i = 0; i < regions.length; i++) {

                $('#'+ regions[i].region_code)
                .css({'fill': 'rgba(11, 104, 170,' + regions[i].population/highest_value +')'})
                .data('region', regions[i]);
            }

            $('.palestine-map path').mouseover(function (e) {
                var region_data=$(this).data('region');
                $('<div class="info_panel">'+
                    region_data.region_name + '<br>' +
                    'Population: ' + region_data.population.toLocaleString("en-UK") +
                    '</div>'
                )
                .appendTo('body');
            })
            .mouseleave(function () {
                $('.info_panel').remove();
            })
            .mousemove(function(e) {
                var mouseX = e.pageX, //X coordinates of mouse
                    mouseY = e.pageY; //Y coordinates of mouse

                $('.info_panel').css({
                    top: mouseY-50,
                    left: mouseX - ($('.info_panel').width()/2)
                });
            });

        });
    </script>

    <!-- endbuild -->
</body>

</html>

