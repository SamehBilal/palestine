<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ __('content.Palestine') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="palestine, war, gaza" />
        <meta name="author" content="{{ __('content.Palestine') }}" />
        <link rel="shortcut icon" href="{{ asset('landing/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/demo.css') }}" />
        @if (app()->getLocale() == 'ar')
            <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style2_rtl.css') }}" />
        @else
            <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style2.css') }}" />
        @endif


        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

		<!--[if lt IE 10]>
				<link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style2IE.css') }}" />
		<![endif]-->
    </head>
    <body>
        <div class="container">

            <div class="header">
                <a href="{{ route('live') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" >
                    <strong>{{ __('content.Live Tracker') }}: </strong>{{ __('content.Palestine disaster') }}
                </a>
                {{-- <span class="right">
                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </span> --}}
                <div class="clr"></div>
            </div>
			<div class="sp-container">
				<div class="sp-content">
					<div class="sp-globe"></div>
					<h2 class="frame-1">{{ __('content.It\'s destroying humanity') }}</h2>
					<h2 class="frame-2">{{ __('content.It\'s mass, mechanized murder') }}</h2>
					<h2 class="frame-3">{{ __('content.You can stop it') }}</h2>
					<h2 class="frame-4">{{ __('content.Now!') }}</h2>
					<h2 class="frame-5"><span>{{ __('content.Save the vulnerable.') }}</span> <span>{{ __('content.Make their voice') }}</span> <span>{{ __('content.heard.') }}</span></h2>
					<a class="sp-circle-link" href="{{ route('live') }}">{{ __('content.Continue') }}</a>
				</div>
			</div>
        </div>
    </body>
</html>
