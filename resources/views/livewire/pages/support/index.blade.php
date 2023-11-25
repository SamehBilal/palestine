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
        $query          = app()->getLocale() == 'ar' ? Brand::where('alternative_id', '<>',0)->orderBy('first_ar_letter','ASC'):Brand::where('alternative_id', '<>',0)->orderBy('first_letter','ASC');
        $this->letters  = app()->getLocale() == 'ar' ? $query->distinct('first_ar_letter')->pluck('first_ar_letter'):$query->distinct('first_letter')->pluck('first_letter');
        $this->brands   = $query->get();
    }
}; ?>
<div>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo.css') }}" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/common3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/style7.css') }}" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/component2.css') }}" />

    <style>
        h1 {
            font-size: 48px;
            font-weight: bold;
            color: #fff;
        }

        .btn-glossary-filter {
            margin: 1px 1px 15px;
            padding: 0 5px;
        }

        .glossary-item {
            margin: 15px 0;
        }
        .glossary-item h2 {
            color: #fff;
            border-bottom: 1px dotted #fff;
        }

        #search-group {
            position: relative;
        }
        #search-group .glossary-search-icon {
            position: absolute;
            z-index: 10;
            top: 10px;
            left: 10px;
            width: 25px;
            height: 25px;
            transition: all 0.33s;
        }
        #search-group .glossary-search-input {
            padding-left: 40px;
            transition: all 0.33s;
        }
        #search-group .glossary-search-input:focus {
            padding-left: 15px;
        }
        #search-group .glossary-search-input:focus ~ .glossary-search-icon {
            left: calc(100% - 40px);
        }
    </style>

    @include('livewire.pages.support.brands', ['brands' => $brands])

    <script src="{{ asset('assets/brands/js/modernizr-2.6.2.min.js') }}"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

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


        <section >
            <div class="row justify-content-center help-button ">
                <a class="text-highlight underline text-center" href="https://www.buymeacoffee.com/samehbilal" target="_blank" rel="noreferrer">{{ __('content.Help keep this website running!') }} 🙏</a>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <h1>{{ __('content.Brands') }}</h1>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-small btn-secondary btn-glossary-filter">{{ app()->getLocale() == 'ar' ? 'أ-ي':'A-Z' }}</button>
                    @foreach ($letters as $letter)
                        <button class="btn btn-small btn-secondary btn-glossary-filter">{{ strtoupper($letter) }}</button>
                    @endforeach
                </div>

                <div dir="ltr">
                    <div class="col-12 col-lg-4 offset-lg-4 text-center" >
                        <div class="input-group" id="search-group">
                            <input type="text" class="form-control glossary-search-input" placeholder="Search ..." aria-label="Username" aria-describedby="glossary-search-exp-addon" id="glossary-search-exp">

                            <svg width="24" height="24" viewBox="0 0 24 24" class="glossary-search-icon">
                                <path d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

              <div class="row" id="glossary-grid">

                @foreach ($letters as $letter)

                    <div class="col-12 glossary-item glossary-filter_{{ app()->getLocale() == 'ar' ? 'أ-ي':'A-Z' }} glossary-filter_{{ strtoupper($letter) }}">
                    <h2>{{ strtoupper($letter) }}</h2>
                    </div>

                    <div class="col-12 glossary-item glossary-filter_{{ app()->getLocale() == 'ar' ? 'أ-ي':'A-Z' }} glossary-filter_{{ strtoupper($letter) }}" dir="ltr">
                        <ul class="ch-grid">
                            @foreach ($brands as $brand)
                                @if ( app()->getLocale() == 'ar' ? $brand->first_ar_letter == $letter:$brand->first_letter == $letter)
                                    <li class="card-title-{{ $brand->id }}">
                                        <div class="ch-item">
                                            <div class="ch-info">
                                                <div class="ch-info-front ch-img-{{ $brand->id }}"></div>
                                                <div class="ch-info-back ch-img-back-{{ $brand->id }}">
                                                    <!-- <h3>Mouse</h3>
                                                    <p>by Alexander Shumihin <a href="http://drbl.in/eAoj">View on Dribbble</a></p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-title card-front" ><span>{{ app()->getLocale() == 'ar' ? $brand->ar_name:$brand->name }}</span></p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                @endforeach

              </div>
        </section>
    </div><!-- /container -->
    <script src="{{ asset('assets/brands/js/polyfills.js') }}"></script>
    <script src="{{ asset('assets/brands/js/'.__('content.demo2').'.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/28963/gsap-player.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script>
        $(function() {
            $("#glossary-grid").isotope({
              itemSelector: ".glossary-item",
              layoutMode: "fitRows",
              filter: ".glossary-item, .glossary-item:not(.hide-this-item)"
            });

            $(".btn-glossary-filter").on("click", function(evt) {
              $("#glossary-grid").isotope({
                filter: ".glossary-filter_" + $(this).text() + ":not(.hide-this-item)",
                layoutMode: "fitRows"
              });
            });

            $("#glossary-search-exp").on("keyup", function(evt) {

              var search_exp;
              search_exp = $(this).val();

              $(".glossary-item").each(function(index) {
                var card_title;
                $(this).removeClass("hide-this-item");
                card_title = $(this)
                  .find(".card-title")
                  .text();
                if (card_title.toLowerCase().indexOf(search_exp.toLowerCase()) >= 0) {
                  return console.log(card_title);
                } else {
                  return $(this).addClass("hide-this-item");
                }
              });

              $("#glossary-grid").isotope({
                itemSelector: ".glossary-item",
                layoutMode: "fitRows",
                filter: ".glossary-item:not(.hide-this-item)"
              });
            });


            $("#glossary-search-exp").on("focus", function(evt) {

            });

            $("#glossary-search-exp").on("focusout", function(evt) {

            });

          });

    </script>
</div>
