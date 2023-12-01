<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ __('content.Palestine Crisis') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="{{ __('content.Palestine description') }}" />
        <meta content="Non-Palestinians" name="author" />
        <meta name="twitter:title" content="{{ __('content.Palestine Crisis') }}" />
        <meta name="twitter:site" content="{{ url()->current() }}" />
        <meta name="twitter:creator" content="Non-Palestinians" />
        <meta name="twitter:description" content="{{ __('content.Palestine description') }}" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="{{ asset('assets/img/logo2.png') }}" />
        <meta property="og:title" content="{{ __('content.Palestine Crisis') }}" />
        <meta property="og:description" content="{{ __('content.Palestine description') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ asset('assets/img/logo2.png') }}" />
        <!--== Favicon ==-->
        <link rel="shortcut icon" href="{{ asset('assets/palestine_favicon.png') }}" type="image/x-icon" />
        <meta name="keywords" content="palestine, war, gaza" />

        <!-- PWA  -->
        <meta name="theme-color" content="#292833" />
        <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
        <link rel="manifest" href="{{ asset('/manifest.json') }}">

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

        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@type": "Website",
            "name": "{{ __('content.Palestine Crisis') }}",
            "alternateName": "{{ __('content.Palestine Crisis') }}",
            "url": "{{ url()->current() }}",
            "logo": "{{ asset('assets/img/logo2.png') }}",
            }
        </script>
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

        <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
    </body>
</html>
