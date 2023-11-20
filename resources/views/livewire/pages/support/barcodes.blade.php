<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;
use App\Models\Brand;

new #[Layout('layouts.front')] class extends Component
{
    public $letters = '';
    public $brands = '';
    public function mount(): void
    {
        $query = Brand::with('child')/* ->where('alternative_id', '<>',0) */->orderBy('first_letter','ASC');
        $this->letters  = $query->distinct('first_letter')->pluck('first_letter');
        $this->brands   = $query->get();
    }
}; ?>
<div>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/normalize.css') }}" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/component2.css') }}" />

    <style>

        .barcode-body {
            /* position: absolute;
            top: 50%;
            left: 0;
            right: 0; */
            margin-top: 10em;
            /* transform: translateY(-50%); */
        }

        .container-barcode {
            margin: 0 auto;
            font-size: 0.5vh;
        }

        .barcode {
            width: 94em;
            height: 71em;
            margin: 0 auto;
            position: relative;
        }

        .barcode > div {
            background-color: #fff;
            float: left;
            margin-right: 2em;
            transform-origin: 0 0;
        }

        .barcode div:nth-child(1),
        .barcode div:nth-child(2),
        .barcode div:nth-child(15),
        .barcode div:nth-child(16),
        .barcode div:nth-child(29),
        .barcode div:nth-child(30) {
            height: 45em;
        }

        .barcode div:nth-child(1),
        .barcode div:nth-child(2),
        .barcode div:nth-child(3),
        .barcode div:nth-child(5),
        .barcode div:nth-child(8),
        .barcode div:nth-child(10),
        .barcode div:nth-child(12),
        .barcode div:nth-child(13),
        .barcode div:nth-child(15),
        .barcode div:nth-child(16),
        .barcode div:nth-child(18),
        .barcode div:nth-child(19),
        .barcode div:nth-child(22),
        .barcode div:nth-child(25),
        .barcode div:nth-child(27),
        .barcode div:nth-child(28),
        .barcode div:nth-child(29),
        .barcode div:nth-child(30) {
            width: 1em;
        }

        .barcode div:nth-child(3),
        .barcode div:nth-child(4),
        .barcode div:nth-child(5),
        .barcode div:nth-child(6),
        .barcode div:nth-child(7),
        .barcode div:nth-child(8),
        .barcode div:nth-child(9),
        .barcode div:nth-child(10),
        .barcode div:nth-child(11),
        .barcode div:nth-child(12),
        .barcode div:nth-child(13),
        .barcode div:nth-child(14),
        .barcode div:nth-child(17),
        .barcode div:nth-child(18),
        .barcode div:nth-child(19),
        .barcode div:nth-child(20),
        .barcode div:nth-child(21),
        .barcode div:nth-child(22),
        .barcode div:nth-child(23),
        .barcode div:nth-child(24),
        .barcode div:nth-child(25),
        .barcode div:nth-child(26),
        .barcode div:nth-child(27),
        .barcode div:nth-child(28) {
            height: 40em;
        }

        .barcode div:nth-child(6),
        .barcode div:nth-child(7),
        .barcode div:nth-child(9),
        .barcode div:nth-child(11),
        .barcode div:nth-child(14),
        .barcode div:nth-child(23),
        .barcode div:nth-child(24) {
            width: 2em;
        }

        .barcode div:nth-child(17),
        .barcode div:nth-child(20),
        .barcode div:nth-child(21),
        .barcode div:nth-child(26) {
            width: 3em;
        }

        .barcode div:nth-child(4) {
            width: 4em;
        }

        .barcode div:nth-child(1),
        .barcode div:nth-child(2),
        .barcode div:nth-child(3),
        .barcode div:nth-child(4),
        .barcode div:nth-child(6),
        .barcode div:nth-child(7),
        .barcode div:nth-child(8),
        .barcode div:nth-child(11),
        .barcode div:nth-child(13),
        .barcode div:nth-child(14),
        .barcode div:nth-child(15),
        .barcode div:nth-child(16),
        .barcode div:nth-child(18),
        .barcode div:nth-child(19),
        .barcode div:nth-child(22),
        .barcode div:nth-child(24),
        .barcode div:nth-child(25),
        .barcode div:nth-child(29),
        .barcode div:nth-child(30) {
            margin-right: 1em;
        }

        .barcode div:nth-child(12),
        .barcode div:nth-child(17),
        .barcode div:nth-child(20),
        .barcode div:nth-child(21),
        .barcode div:nth-child(23),
        .barcode div:nth-child(26),
        .barcode div:nth-child(28) {
            margin-right: 2em;
        }

        .barcode div:nth-child(5),
        .barcode div:nth-child(9),
        .barcode div:nth-child(10),
        .barcode div:nth-child(27) {
            margin-right: 3em;
        }

        .barcode p {
            color: #fff;
            font: 8em/100% "OCRB";
            position: absolute;
            top: 5.1em;
            left: 0.78em;
            animation: fortyseven 5s infinite forwards;
        }

        @keyframes fortyseven {
        0%, 20%, 40%, 60%, 80%, 100% {
            opacity: 0;
        }
        10%, 30%, 50%, 70%, 90% {
            opacity: 1;
        }
        }
        @keyframes bar-1 {
        0%, 16% {
            transform: scaleY(0);
        }
        47% {
            transform: scaleY(1);
        }
        78% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(1) {
        animation: bar-1 5s ease-out infinite forwards;
        }

        @keyframes bar-2 {
        0%, 21% {
            transform: scaleY(0);
        }
        53% {
            transform: scaleY(1);
        }
        81% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(2) {
        animation: bar-2 5s ease-out infinite forwards;
        }

        @keyframes bar-3 {
        0%, 28% {
            transform: scaleY(0);
        }
        66% {
            transform: scaleY(1);
        }
        79% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(3) {
        animation: bar-3 5s ease-out infinite forwards;
        }

        @keyframes bar-4 {
        0%, 3% {
            transform: scaleY(0);
        }
        58% {
            transform: scaleY(1);
        }
        80% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(4) {
        animation: bar-4 5s ease-out infinite forwards;
        }

        @keyframes bar-5 {
        0%, 27% {
            transform: scaleY(0);
        }
        47% {
            transform: scaleY(1);
        }
        78% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(5) {
        animation: bar-5 5s ease-out infinite forwards;
        }

        @keyframes bar-6 {
        0%, 9% {
            transform: scaleY(0);
        }
        65% {
            transform: scaleY(1);
        }
        79% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(6) {
        animation: bar-6 5s ease-out infinite forwards;
        }

        @keyframes bar-7 {
        0%, 3% {
            transform: scaleY(0);
        }
        55% {
            transform: scaleY(1);
        }
        72% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(7) {
        animation: bar-7 5s ease-out infinite forwards;
        }

        @keyframes bar-8 {
        0%, 1% {
            transform: scaleY(0);
        }
        49% {
            transform: scaleY(1);
        }
        79% {
            opacity: 1;
        }
        89% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(8) {
        animation: bar-8 5s ease-out infinite forwards;
        }

        @keyframes bar-9 {
        0%, 22% {
            transform: scaleY(0);
        }
        55% {
            transform: scaleY(1);
        }
        78% {
            opacity: 1;
        }
        90% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(9) {
        animation: bar-9 5s ease-out infinite forwards;
        }

        @keyframes bar-10 {
        0%, 8% {
            transform: scaleY(0);
        }
        56% {
            transform: scaleY(1);
        }
        75% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(10) {
        animation: bar-10 5s ease-out infinite forwards;
        }

        @keyframes bar-11 {
        0%, 20% {
            transform: scaleY(0);
        }
        57% {
            transform: scaleY(1);
        }
        80% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(11) {
        animation: bar-11 5s ease-out infinite forwards;
        }

        @keyframes bar-12 {
        0%, 27% {
            transform: scaleY(0);
        }
        55% {
            transform: scaleY(1);
        }
        75% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(12) {
        animation: bar-12 5s ease-out infinite forwards;
        }

        @keyframes bar-13 {
        0%, 17% {
            transform: scaleY(0);
        }
        65% {
            transform: scaleY(1);
        }
        72% {
            opacity: 1;
        }
        90% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(13) {
        animation: bar-13 5s ease-out infinite forwards;
        }

        @keyframes bar-14 {
        0%, 18% {
            transform: scaleY(0);
        }
        55% {
            transform: scaleY(1);
        }
        74% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(14) {
        animation: bar-14 5s ease-out infinite forwards;
        }

        @keyframes bar-15 {
        0%, 21% {
            transform: scaleY(0);
        }
        61% {
            transform: scaleY(1);
        }
        75% {
            opacity: 1;
        }
        88% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(15) {
        animation: bar-15 5s ease-out infinite forwards;
        }

        @keyframes bar-16 {
        0%, 9% {
            transform: scaleY(0);
        }
        68% {
            transform: scaleY(1);
        }
        75% {
            opacity: 1;
        }
        91% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(16) {
        animation: bar-16 5s ease-out infinite forwards;
        }

        @keyframes bar-17 {
        0%, 11% {
            transform: scaleY(0);
        }
        54% {
            transform: scaleY(1);
        }
        79% {
            opacity: 1;
        }
        88% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(17) {
        animation: bar-17 5s ease-out infinite forwards;
        }

        @keyframes bar-18 {
        0%, 11% {
            transform: scaleY(0);
        }
        60% {
            transform: scaleY(1);
        }
        77% {
            opacity: 1;
        }
        90% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(18) {
        animation: bar-18 5s ease-out infinite forwards;
        }

        @keyframes bar-19 {
        0%, 10% {
            transform: scaleY(0);
        }
        50% {
            transform: scaleY(1);
        }
        74% {
            opacity: 1;
        }
        89% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(19) {
        animation: bar-19 5s ease-out infinite forwards;
        }

        @keyframes bar-20 {
        0%, 29% {
            transform: scaleY(0);
        }
        61% {
            transform: scaleY(1);
        }
        79% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(20) {
        animation: bar-20 5s ease-out infinite forwards;
        }

        @keyframes bar-21 {
        0%, 2% {
            transform: scaleY(0);
        }
        54% {
            transform: scaleY(1);
        }
        78% {
            opacity: 1;
        }
        91% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(21) {
        animation: bar-21 5s ease-out infinite forwards;
        }

        @keyframes bar-22 {
        0%, 2% {
            transform: scaleY(0);
        }
        61% {
            transform: scaleY(1);
        }
        72% {
            opacity: 1;
        }
        93% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(22) {
        animation: bar-22 5s ease-out infinite forwards;
        }

        @keyframes bar-23 {
        0%, 13% {
            transform: scaleY(0);
        }
        65% {
            transform: scaleY(1);
        }
        74% {
            opacity: 1;
        }
        88% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(23) {
        animation: bar-23 5s ease-out infinite forwards;
        }

        @keyframes bar-24 {
        0%, 27% {
            transform: scaleY(0);
        }
        51% {
            transform: scaleY(1);
        }
        76% {
            opacity: 1;
        }
        90% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(24) {
        animation: bar-24 5s ease-out infinite forwards;
        }

        @keyframes bar-25 {
        0%, 27% {
            transform: scaleY(0);
        }
        63% {
            transform: scaleY(1);
        }
        73% {
            opacity: 1;
        }
        91% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(25) {
        animation: bar-25 5s ease-out infinite forwards;
        }

        @keyframes bar-26 {
        0%, 25% {
            transform: scaleY(0);
        }
        56% {
            transform: scaleY(1);
        }
        73% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(26) {
        animation: bar-26 5s ease-out infinite forwards;
        }

        @keyframes bar-27 {
        0%, 10% {
            transform: scaleY(0);
        }
        54% {
            transform: scaleY(1);
        }
        80% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(27) {
        animation: bar-27 5s ease-out infinite forwards;
        }

        @keyframes bar-28 {
        0%, 16% {
            transform: scaleY(0);
        }
        48% {
            transform: scaleY(1);
        }
        81% {
            opacity: 1;
        }
        89% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(28) {
        animation: bar-28 5s ease-out infinite forwards;
        }

        @keyframes bar-29 {
        0%, 18% {
            transform: scaleY(0);
        }
        52% {
            transform: scaleY(1);
        }
        76% {
            opacity: 1;
        }
        92% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(29) {
        animation: bar-29 5s ease-out infinite forwards;
        }

        @keyframes bar-30 {
        0%, 29% {
            transform: scaleY(0);
        }
        48% {
            transform: scaleY(1);
        }
        73% {
            opacity: 1;
        }
        88% {
            opacity: 0;
        }
        99.5% {
            transform: scaleY(1);
            opacity: 0;
        }
        100% {
            transform: scaleY(0);
            opacity: 0;
        }
        }
        .barcode > div:nth-child(30) {
        animation: bar-30 5s ease-out infinite forwards;
        }
    </style>

    <script src="{{ asset('assets/brands/js/modernizr-2.6.2.min.js') }}"></script>

    <div class="container">

        <div class="component">
            <h2>{{ __('content.Support') }}</h2>
            <!-- Start Nav Structure -->
            <button class="cn-button" id="cn-button">{{ __('content.Menu') }}</button>
            <div class="cn-wrapper" id="cn-wrapper">
                <ul>
                    <li><a href="{{ route('support.brands') }}"><span>{{ __('content.Brands') }}</span></a></li>
                    <li><a href="{{ route('support.barcodes') }}"><span>{{ __('content.Barcodes') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Celebrities') }}  <br> <small class="badge badge-info">( {{ __('content.Soon') }} )</small></span></a></li>
                    <li><a href="#"><span>{{ __('content.Hashtags') }}  <br> <small class="badge badge-info">( {{ __('content.Soon') }} )</small></span></a></li>
                    <li><a href="#"><span>{{ __('content.Encryption') }}  <br><small class="badge badge-info">( {{ __('content.Soon') }} )</small></span></a></li>
                    <li><a href="#"><span>{{ __('content.Gallery') }}  <br><small class="badge badge-info">( {{ __('content.Soon') }} )</small></span></a></li>
                    <li><a href="#"><span>{{ __('content.Donations') }}  <br><small class="badge badge-info">( {{ __('content.Soon') }} )</small></span></a></li>
                </ul>
            </div>
            <!-- End of Nav Structure -->
        </div>

        <div class="barcode-body">
            <div class="container-barcode">
                <div class="barcode">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <p>729</p>
                </div>
            </div>

            <div class="container-barcode">
                <div class="barcode">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <p>1</p>
                </div>
            </div>

            <div class="container-barcode">
                <div class="barcode">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <p>0</p>
                </div>
            </div>
        </div>


    </div><!-- /container -->
    <script src="{{ asset('assets/brands/js/polyfills.js') }}"></script>
    <script src="{{ asset('assets/brands/js/'.__('content.demo2').'.js') }}"></script>
</div>
