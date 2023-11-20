<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;
use App\Models\Celebrity;

new #[Layout('layouts.front')] class extends Component
{
    public $letters = '';
    public $celebrities = '';
    public function mount(): void
    {
        $query = Celebrity::orderBy('first_letter','ASC');
        $this->letters  = $query->distinct('first_letter')->pluck('first_letter');
        $this->celebrities   = $query->get();
    }
}; ?>
<div>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo.css') }}" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/normalize.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/common3.css') }}" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
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

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/celebrities/css/base.css') }}" />

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

        <section dir="ltr">

            <div class="row">
                <div class="col-12 text-center">
                  <h1>{{ __('content.Brands') }}</h1>
                </div>

                <div class="col-12 text-center">
                  <button class="btn btn-small btn-secondary btn-glossary-filter">A-Z</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">7</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">A</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">B</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">C</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">D</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">E</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">F</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">G</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">H</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">I</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">J</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">K</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">L</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">M</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">N</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">O</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">P</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">Q</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">R</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">S</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">T</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">U</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">V</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">W</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">X</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">Y</button>
                  <button class="btn btn-small btn-secondary btn-glossary-filter">Z</button>
                </div>

                <div class="col-12 col-lg-4 offset-lg-4 text-center" >
                  <div class="input-group" id="search-group">

                    <input type="text" class="form-control glossary-search-input" placeholder="Search ..." aria-label="Username" aria-describedby="glossary-search-exp-addon" id="glossary-search-exp">

                    <svg width="24" height="24" viewBox="0 0 24 24" class="glossary-search-icon">
                      <path d="M20.71,4.04C21.1,3.65 21.1,3 20.71,2.63L18.37,0.29C18,-0.1 17.35,-0.1 16.96,0.29L15,2.25L18.75,6M17.75,7L14,3.25L4,13.25V17H7.75L17.75,7Z"></path>
                    </svg>
                  </div>

                </div>
              </div>

              <div class="row" id="glossary-grid">

                @foreach ($letters as $letter)

                    <div class="col-12 glossary-item glossary-filter_A-Z glossary-filter_{{ strtoupper($letter) }}">
                    <h2>{{ strtoupper($letter) }}</h2>
                    </div>

                    <div class="col-12 glossary-item glossary-filter_A-Z glossary-filter_{{ strtoupper($letter) }}">
                        <ul class="ch-grid">

                                   {{--  <li class="card-title-{{ $brand->id }}">
                                        <div class="ch-item">
                                            <div class="ch-info">
                                                <div class="ch-info-front ch-img-{{ $brand->id }}"></div>
                                                <div class="ch-info-back ch-img-back-{{ $brand->id }}">
                                                    <!-- <h3>Mouse</h3>
                                                    <p>by Alexander Shumihin <a href="http://drbl.in/eAoj">View on Dribbble</a></p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <p class="card-title card-front" ><span>{{ $brand->name }}</span></p>
                                    </li> --}}
                                    <main>
                                        <div class="grid-wrap">

                                            <div class="grid">
                                                @foreach ($celebrities as $celebrity)
                                                @if ( $celebrity->first_letter == $letter)
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img/1.jpg') }}" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">{{ $celebrity->name }}</h3>
                                                    <h4 class="grid__item-number">B05</h4>
                                                </a>
                                                {{-- <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img/2.jpg') }}" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">One day in Africa</h3>
                                                    <h4 class="grid__item-number">A21</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/3.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Wrecked and happy</h3>
                                                    <h4 class="grid__item-number">XB3</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/4.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">The silent thief</h3>
                                                    <h4 class="grid__item-number">HK9</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/5.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Locked away</h3>
                                                    <h4 class="grid__item-number">FW1</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/6.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Isolation and me</h3>
                                                    <h4 class="grid__item-number">DZ5</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/7.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Desert races</h3>
                                                    <h4 class="grid__item-number">M02</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/8.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Transcendence</h3>
                                                    <h4 class="grid__item-number">KL7</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/9.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Loosing my mind</h3>
                                                    <h4 class="grid__item-number">UY6</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/10.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Holding your breath</h3>
                                                    <h4 class="grid__item-number">OP2</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}/11.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Making the best of it</h3>
                                                    <h4 class="grid__item-number">EC5</h4>
                                                </a>
                                                <a href="#" class="grid__item">
                                                    <div class="grid__item-bg"></div>
                                                    <div class="grid__item-wrap">
                                                        <img class="grid__item-img" src="{{ asset('assets/celebrities/img') }}img/12.jpg" alt="Some image" />
                                                    </div>
                                                    <h3 class="grid__item-title">Haunted Blessings</h3>
                                                    <h4 class="grid__item-number">2VX</h4>
                                                </a> --}}
                                                @endif
                            @endforeach
                                            </div>

                                        </div><!-- /grid-wrap -->
                                        @foreach ($celebrities as $brand)
                                @if ( $brand->first_letter == $letter)
                                        <div class="content">
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/1.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Tour of my life</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            {{-- <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/2.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">One day in Africa</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/3.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Wrecked and happy</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/4.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">The silent thief</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/5.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Locked away</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/6.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Isolation and me</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/7.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Desert races</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/8.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Transcendence</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/9.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Loosing my mind</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/10.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Holding your breath</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/11.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Making the best of it</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item -->
                                            <div class="content__item">
                                                <div class="content__item-intro">
                                                    <img class="content__item-img" src="{{ asset('assets/celebrities/img') }}/12.jpg" alt="Some image" />
                                                    <h2 class="content__item-title">Haunted Blessings</h2>
                                                </div>
                                                <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
                                                <div class="content__item-text">
                                                    <p>When I was in the islands nearly a generation ago, I was acquainted with a young American couple who had among their belongings an attractive little son of the age of seven—attractive but not practicably companionable with me, because he knew no English. He had played from his birth with the little Kanakas on his father’s plantation, and had preferred their language and would learn no other. The family removed to America a month after I arrived in the islands, and straightway the boy began to lose his Kanaka and pick up English. By the time he was twelve he hadn’t a word of Kanaka left; the language had wholly departed from his tongue and from his comprehension. Nine years later, when he was twenty-one, I came upon the family in one of the lake towns of New York, and the mother told me about an adventure which her son had been having. By trade he was now a professional diver. A passenger boat had been caught in a storm on the lake, and had gone down, carrying her people with her. A few days later the young diver descended, with his armor on, and entered the berth-saloon of the boat, and stood at the foot of the companionway, with his hand on the rail, peering through the dim water. Presently something touched him on the shoulder, and he turned and found a dead man swaying and bobbing about him and seemingly inspecting him inquiringly. He was paralyzed with fright.</p>
                                                    <p>His entry had disturbed the water, and now he discerned a number of dim corpses making for him and wagging their heads and swaying their bodies like sleepy people trying to dance. His senses forsook him, and in that condition he was drawn to the surface. He was put to bed at home, and was soon very ill. During some days he had seasons of delirium which lasted several hours at a time; and while they lasted he talked Kanaka incessantly and glibly; and Kanaka only. He was still very ill, and he talked to me in that tongue; but I did not understand it, of course. The doctor-books tell us that cases like this are not uncommon. Then the doctors ought to study the cases and find out how to multiply them. Many languages and things get mislaid in a person’s head, and stay mislaid for lack of this remedy.</p>
                                                    <p>Several of our passengers belonged in Honolulu, and these were sent ashore; but nobody could go ashore and return. There were people on shore who were booked to go with us to Australia, but we could not receive them; to do it would cost us a quarantine-term in Sydney. They could have escaped the day before, by ship to San Francisco; but the bars had been put up, now, and they might have to wait weeks before any ship could venture to give them a passage any whither. And there were hardships for others. An elderly lady and her son, recreation-seekers from Massachusetts, had wandered westward, further and further from home, always intending to take the return track, but always concluding to go still a little further; and now here they were at anchor before Honolulu positively their last westward-bound indulgence—they had made up their minds to that—but where is the use in making up your mind in this world? It is usually a waste of time to do it. These two would have to stay with us as far as Australia. Then they could go on around the world, or go back the way they had come; the distance and the accommodations and outlay of time would be just the same, whichever of the two routes they might elect to take. Think of it: a projected excursion of five hundred miles gradually enlarged, without any elaborate degree of intention, to a possible twenty-four thousand. However, they were used to extensions by this time, and did not mind this new one much.</p>
                                                </div>
                                            </div><!-- /content__item --> --}}
                                            <button class="content__close">Close</button>
                                            <svg class="content__indicator icon icon--caret"><use xlink:href="#icon-caret"></use></svg>
                                        </div>
                                        @endif
                                        @endforeach

                                    </main>


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

    <script src="{{ asset('assets/celebrities/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/celebrities/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/celebrities/js/charming.min.js') }}"></script>
    <script src="{{ asset('assets/celebrities/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/celebrities/js/demo.js') }}"></script>
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
