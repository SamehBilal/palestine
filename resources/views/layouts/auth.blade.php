<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true" data-theme="dark" data-layout-position="fixed" data-sidenav-size="default">

    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

        {{--

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

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- Scripts -->
        @vite([/* 'resources/css/app.css',  *//* 'resources/js/app.js' */])

        <!-- Theme Config Js -->
        <script src="{{ asset('backend/assets/js/hyper-config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

         <!-- Fonts -->
         <link rel="preconnect" href="https://fonts.bunny.net">
         <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>

    <body class="authentication-bg" >

        {{ $slot }}

        <footer class="footer footer-alt">
             <script>document.write(new Date().getFullYear())</script> © some-facts.com
        </footer>
        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

    </body>
</html>
