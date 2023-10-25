<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('content.Palestine') }}</title>

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
    <!--== Material Design Icons Min CSS ==-->
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/line.css') }}" rel="stylesheet" />

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
                                <li><a href="{{ route('live') }}" {{-- wire:navigate --}}>{{ __('content.Live Tracker') }}</a></li>
                                <li><a href="{{ route('map') }}" {{-- wire:navigate --}}>{{ __('content.Original Map') }}</a></li>
                                <x-front.languages-navigation />
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

        <div class="last-update-wrap text-center credits">
            <div class="text-center footer">
                <p class="text-reset ">© <script>document.write(new Date().getFullYear())</script>. made with <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00cbad}</style><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg> by Non-Palestinians.</p>
            </div>
        </div>

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
                "region_name": "{{ __('content.Jaffa') }}",
                "region_code": "PS-JFA",
                "deaths": 9794525
            },
            {
                "region_name": "{{ __('content.Nazaeth') }}",
                "region_code": "PS-NAZ",
                "deaths": 5769750
            },
            {
                "region_name": "{{ __('content.Nablus') }}",
                "region_code": "PS-NBS",
                "deaths": 5557276
            },
            {
                "region_name": "{{ __('content.Ramallah') }}",
                "region_code": "PS-RBH",
                "deaths": 4999932
            },
            {
                "region_name": "{{ __('content.Dead Sea') }}",
                "region_code": "PS-DS",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Allyd') }}",
                "region_code": "PS-ALD",
                "deaths": 4881756
            },
            {
                "region_name": "{{ __('content.Safad') }}",
                "region_code": "PS-SAF",
                "deaths": 4881756
            },
            {
                "region_name": "{{ __('content.Jenin') }}",
                "region_code": "PS-JEN",
                "deaths": 4377487
            },
            {
                "region_name": "{{ __('content.Bethlehem') }}",
                "region_code": "PS-BTH",
                "deaths": 4374052
            },
            {
                "region_name": "{{ __('content.Acre') }}",
                "region_code": "PS-ACE",
                "deaths": 4050803
            },
            {
                "region_name": "{{ __('content.Tulkarm') }}",
                "region_code": "PS-TKM",
                "deaths": 3692828
            },
            {
                "region_name": "{{ __('content.Baysan') }}",
                "region_code": "PS-BSN",
                "deaths": 1958238
            },
            {
                "region_name": "{{ __('content.Tiberias') }}",
                "region_code": "PS-TBA",
                "deaths": 1640379
            },
            {
                "region_name": "{{ __('content.Lake Tiberias') }}",
                "region_code": "PS-LTB",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Hebron') }}",
                "region_code": "PS-HBN",
                "deaths": 1565127
            },
            {
                "region_name": "{{ __('content.Beersheba') }}",
                "region_code": "PS-BSB",
                "deaths": 1545155
            },
            {
                "region_name": "{{ __('content.Khan Yunis') }}",
                "region_code": "PS-KYS",
                "deaths": 1312507
            },
            {
                "region_name": "{{ __('content.Alramlah') }}",
                "region_code": "PS-ALR",
                "deaths": 1221860
            },
            {
                "region_name": "{{ __('content.Gaza') }}",
                "region_code": "PS-GZA",
                "deaths": 1039934
            },
            {
                "region_name": "{{ __('content.Haifa') }}",
                "region_code": "PS-HFA",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Jerusalem') }}",
                "region_code": "PS-JEM",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Jericho') }}",
                "region_code": "PS-JRH",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Salfit') }}",
                "region_code": "PS-SLT",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Tubas') }}",
                "region_code": "PS-TBS",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Qalqilya') }}",
                "region_code": "PS-QQA",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Deir El Balah') }}",
                "region_code": "PS-DEB",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.North Gaza') }}",
                "region_code": "PS-NGZ",
                "deaths": 886239
            },
            {
                "region_name": "{{ __('content.Rafah') }}",
                "region_code": "PS-RFH",
                "deaths": 886239
            },
        ];


        var temp_array= regions.map(function(item){
            return item.deaths;
        });
        var highest_value = Math.max.apply(Math, temp_array);

        $(function() {

            for(i = 0; i < regions.length; i++) {

                $('#'+ regions[i].region_code)
                .css({'fill': 'rgba(11, 104, 170,' + regions[i].deaths/highest_value +')'})
                .data('region', regions[i]);
            }

            $('.palestine-map path').mouseover(function (e) {
                var region_data=$(this).data('region');
                $('<div class="info_panel">'+
                    region_data.region_name + '<br>' +
                    '{{ __("content.Deaths") }}: ' + region_data.deaths.toLocaleString("en-UK") +
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
{{-- <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="samehbilal" data-description="Support me on Buy me a coffee!" data-message="Keep this website running!" data-color="#00CBAD" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
 --}}    <!-- endbuild -->
    {{-- <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="samehbilal" data-color="#FFDD00" data-emoji="🙏"  data-font="Cookie" data-text="help keep this website!" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script> --}}
</body>

</html>

