<!DOCTYPE html>
<html lang="en" dir="{{ app()->getLocale() == 'ar' ? 'rtl':'ltr' }}">

<head>

   {{--  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (@$noIndex)
        <meta name="robots" content="noindex">
    @endif
    <title>{{ @$title ?? @$set->site_tagline }} - {{ @$set->site_title->$lang }}</title>
    <link rel="shortcut icon" href="{{ @$favicon ?? url('favicon.png') }} " type="image/x-icon">
    <link rel="canonical" href="{{ @$canonical }}">
    <meta name="description" content="{{ strip_tags(@$description) }}" />
    <meta name="twitter:title" content="{{ @$stitle }}" />
    <meta name="twitter:site" content="{{ URL('') }}" />
    <meta name="twitter:creator" content="عرب هاردوير" />
    <meta name="twitter:description" content="{{ strip_tags(@$description) }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="{{ @$image ? $image : url('share.png') }}" />
    <meta name="theme-color" content="{{ $themecolor ?? '#d70a15' }}" />
    <meta property="og:url" content="{{ @$canonical }}" />
    <meta property="og:title" content="{{ @$stitle }}" />
    <meta property="og:description" content="{{ strip_tags(@$description) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ @$image ? $image : url('share.png') }}" />
    <meta name="pgToken" content="{{ csrf_token() }}">
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Corporation",
        "name": "Arabhardware",
        "alternateName": "عرب هاردوير",
        "url": "{{ url('') }}",
        "logo": "{{url('business-assets/images/logo.svg')}}",
        "sameAs": [
            "{{ @$set->site_facebook }}",
            "{{ @$set->site_twitter }}",
            "{{ @$set->site_youtube }}",
            "{{ @$set->site_instagram }}",
            "{{ @$set->site_tiktok }}",
            "{{ @$set->site_tiktok }}"
        ]
        }
    </script> --}}



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
    <!--== Material Design Icons Min CSS ==-->
{{--     <link href="{{ asset('assets/css/line.css') }}" rel="stylesheet" />
 --}}
    <!--== Main Style CSS ==-->
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/css/style_rtl.css') }}" rel="stylesheet" />
    @else
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    @endif
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
                        @php
                            $live = App\Models\Livetracker::findOrFail(1);
                            $attacks  = App\Models\Attack::orderBy('total_deaths','desc')->get();
                        @endphp
                        <p class="mb-0">{{ __('content.Updated') }}: <span class="last-update">{{ $live->last_update->format('Y-m-d G:i A') }}</span> <img src="{{ asset('assets/img/live.gif') }}" alt="" height="40px" ></p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="navbar-wrap">
                        <nav class="menubar">
                            <ul class="nav">
                                <li><a href="{{ route('live') }}" {{-- wire:navigate --}}>{{ __('content.Live Tracker') }}</a></li>
                                {{-- <li><a href="{{ route('map') }}" wire:navigate>{{ __('content.Original Map') }}</a></li> --}}
                                <li><a href="{{ route('support.brands') }}" {{-- wire:navigate --}}>{{ __('content.Support') }}{{-- {{ __('content.Support the case') }} --}}</a></li>
                                <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => app()->getLocale() == 'ar' ? 'en':'ar']) }}" class="language-link" {{-- wire:navigate --}}>{{ strtoupper(app()->getLocale()) == 'AR' ? 'EN':'AR' }}</a></li>
                                {{-- <x-front.languages-navigation /> --}}
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

        <div class="last-update-wrap text-center credits" dir="ltr">
            <div class="text-center footer">
                <p class="text-reset ">© <script>document.write(new Date().getFullYear())</script>. made with <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#00cbad}</style><path d="M119.4 44.1c23.3-3.9 46.8-1.9 68.6 5.3l49.8 77.5-75.4 75.4c-1.5 1.5-2.4 3.6-2.3 5.8s1 4.2 2.6 5.7l112 104c2.9 2.7 7.4 2.9 10.5 .3s3.8-7 1.7-10.4l-60.4-98.1 90.7-75.6c2.6-2.1 3.5-5.7 2.4-8.8L296.8 61.8c28.5-16.7 62.4-23.2 95.7-17.6C461.5 55.6 512 115.2 512 185.1v5.8c0 41.5-17.2 81.2-47.6 109.5L283.7 469.1c-7.5 7-17.4 10.9-27.7 10.9s-20.2-3.9-27.7-10.9L47.6 300.4C17.2 272.1 0 232.4 0 190.9v-5.8c0-69.9 50.5-129.5 119.4-141z"/></svg> by Non-Palestinians.</p>
            </div>
        </div>

    </main>
    <!--== End Main Content Wrapper ==-->


    <!--=======================Javascript============================-->
    <!-- build:js assets/js/app.min.js -->

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
    @if (app()->getLocale() == 'ar')
        <script src="{{ asset('assets/js/app_ar.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/app.js') }}"></script>
    @endif
    <!--=== Active Js ===-->
    <script src="{{ asset('assets/js/active.js') }}"></script>

    <script>
        var regions=[
            @foreach ($attacks as $attack)
                {
                    "region_name": "{{ __('content.'.$attack->regions->name) }}",
                    "region_code": "{{ $attack->regions->code }}",
                    "deaths": {{ $attack->total_deaths }}
                },
            @endforeach
            {
                "region_name": "{{ __('content.Jaffa') }}",
                "region_code": "PS-JFA",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Nazaeth') }}",
                "region_code": "PS-NAZ",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Dead Sea') }}",
                "region_code": "PS-DS",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Allyd') }}",
                "region_code": "PS-ALD",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Safad') }}",
                "region_code": "PS-SAF",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Acre') }}",
                "region_code": "PS-ACE",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Baysan') }}",
                "region_code": "PS-BSN",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Tiberias') }}",
                "region_code": "PS-TBA",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Lake Tiberias') }}",
                "region_code": "PS-LTB",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Beersheba') }}",
                "region_code": "PS-BSB",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Khan Yunis') }}",
                "region_code": "PS-KYS",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Alramlah') }}",
                "region_code": "PS-ALR",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Haifa') }}",
                "region_code": "PS-HFA",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Salfit') }}",
                "region_code": "PS-SLT",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Deir El Balah') }}",
                "region_code": "PS-DEB",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.North Gaza') }}",
                "region_code": "PS-NGZ",
                "deaths": 0
            },
            {
                "region_name": "{{ __('content.Rafah') }}",
                "region_code": "PS-RFH",
                "deaths": 0
            },
        ];


        var temp_array= regions.map(function(item){
            return item.deaths;
        });
        var highest_value = Math.max.apply(Math, temp_array);

        $(function() {

            for(i = 0; i < regions.length; i++) {

                $('#'+ regions[i].region_code)
                .css({'fill': 'rgba(11, 104, 170,' + regions[i].deaths/(highest_value/100) +')'})
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

        $('.btn-show-all').on('click',function(){
            var type = $(this).attr('data-display');

            if(type == 'all'){
                $('.region-disabled').css('display','flex');
                $(this).text('{{ __("content.View less Regions") }}');
                $(this).attr('data-display','less');
            }else{
                $(this).text('{{ __("content.View all Regions") }}');
                $('.region-disabled').css('display','none');
                $(this).attr('data-display','all');
            }
        })

        $('#select1').on('change', function(){
            $('.map-dashboard').find('path').css({
                'stroke' : 'rgb(247, 247, 247)',
                'stroke-width:' : '0.400293px',
            });
            let value = $(this).val();
            $('#'+value).css({
                /* 'fill' : '#00CBAD', */
                'stroke' : 'red',
                'stroke-width:' : '1px',
            });
        })
    </script>
    <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="samehbilal" data-description="Support me on Buy me a coffee!" data-message="{{ __('content.Keep this website running!') }}" data-color="#00CBAD" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
    <!-- endbuild -->
    {{-- <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="samehbilal" data-color="#FFDD00" data-emoji="🙏"  data-font="Cookie" data-text="help keep this website!" data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff" ></script> --}}
</body>

</html>

