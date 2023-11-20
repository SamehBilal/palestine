<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true" data-theme="dark" data-layout-position="fixed" data-sidenav-size="default">

    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />

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
