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

    <script src="{{ asset('assets/brands/js/modernizr-2.6.2.min.js') }}"></script>


    <div class="container">

        <div class="component">
            <h2>{{ __('content.Support') }}</h2>
            <!-- Start Nav Structure -->
            <button class="cn-button" id="cn-button">{{ __('content.Menu') }}</button>
            <div class="cn-wrapper" id="cn-wrapper">
                <ul>
                    <li><a href="{{ route('support.brands') }}"><span>{{ __('content.Brands') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Celebrities') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Hashtags') }}</span></a></li>
                    <li><a href="{{ route('support.barcodes') }}"><span>{{ __('content.Barcodes') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Encryption') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Gallery') }}</span></a></li>
                    <li><a href="#"><span>{{ __('content.Donations') }}</span></a></li>
                 </ul>
            </div>
            <!-- End of Nav Structure -->
        </div>


    </div><!-- /container -->
    <script src="{{ asset('assets/brands/js/polyfills.js') }}"></script>
    <script src="{{ asset('assets/brands/js/'.__('content.demo2').'.js') }}"></script>
</div>
