<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new #[Layout('layouts.front')] class extends Component
{
    /* #[Rule(['required', 'string'])]
    public string $password = '';

    public function confirmPassword(): void
    {
        $this->validate();

        if (! auth()->guard('web')->validate([
            'email' => auth()->user()->email,
            'password' => $this->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        session(['auth.password_confirmed_at' => time()]);

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    } */
}; ?>
<div>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/demo.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/common.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/style7.css') }}" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="{{ asset('assets/brands/js/modernizr.custom.79639.js') }}"></script>
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/brands/css/component1.css') }}" />
		<!-- <link rel="stylesheet" type="text/css" href="css/component2.css" /> -->

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

        <!-- Codrops top bar -->
        <div class="codrops-top">
            <a href="http://tympanus.net/Development/AnimatedResponsiveImageGrid/">
                <strong>&laquo; Previous Demo: </strong>Animated Responsive Image Grid
            </a>
            <span class="right">
                <a href=" http://tympanus.net/codrops/2012/08/08/circle-hover-effects-with-css-transitions/">
                    <strong>Back to the Codrops Article</strong>
                </a>
            </span>
            <div class="clr"></div>
        </div><!--/ Codrops top bar -->

        <header>

            <!-- <h1><strong>Circle</strong> Hover Effects</h1>
            <h2>Pretty hover effects on circles with CSS Transitions</h2>

            <nav class="codrops-demos">
                <a href="index.html">Demo 1</a>
                <a href="index2.html">Demo 2</a>
                <a href="index3.html">Demo 3</a>
                <a href="index4.html">Demo 4</a>
                <a href="index5.html">Demo 5</a>
                <a href="index6.html">Demo 6</a>
                <a class="current-demo" href="index7.html">Demo 7</a>
            </nav> -->

            <!-- <div class="support-note"> --><!-- let's check browser support with modernizr -->
                <!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
                <!-- <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
                <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
                <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
                <span class="note-ie">Sorry, only modern browsers.</span> -->
            <!-- </div> -->

        </header>

        <section class="main">

            <ul class="ch-grid">
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-1"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Mouse</h3>
                                <p>by Alexander Shumihin <a href="http://drbl.in/eAoj">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-2"></div>
                            <div class="ch-info-back">
                                <!-- <h3>You</h3>
                                <p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-2"></div>
                            <div class="ch-info-back">
                                <!-- <h3>You</h3>
                                <p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-2"></div>
                            <div class="ch-info-back">
                                <!-- <h3>You</h3>
                                <p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-2"></div>
                            <div class="ch-info-back">
                                <!-- <h3>You</h3>
                                <p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-2"></div>
                            <div class="ch-info-back">
                                <!-- <h3>You</h3>
                                <p>by Zoe Ingram <a href="http://drbl.in/eCcV">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>

                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
                <li>
                    <div class="ch-item">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"></div>
                            <div class="ch-info-back">
                                <!-- <h3>Love</h3>
                                <p>by Eileen Tjan <a href="http://drbl.in/ewTL">View on Dribbble</a></p> -->
                            </div>
                        </div>
                    </div><p style="color: #000;">Mcdonald's</p>
                </li>
            </ul>

        </section>

        <div class="component">
            <!-- Start Nav Structure -->
            <button class="cn-button" id="cn-button">+</button>
            <div class="cn-wrapper" id="cn-wrapper">
                <ul>
                  <li><a href="#"><span class="icon-picture"></span></a></li>
                  <li><a href="#"><span class="icon-headphones"></span></a></li>
                  <li><a href="#"><span class="icon-home"></span></a></li>
                  <li><a href="#"><span class="icon-facetime-video"></span></a></li>
                  <li><a href="#"><span class="icon-envelope-alt"></span></a></li>
                 </ul>
            </div>
            <div id="cn-overlay" class="cn-overlay"></div>
            <!-- End Nav Structure -->
        </div>
    </div>

    <script src="{{ asset('assets/brands/js/polyfills.js') }}"></script>
    <script src="{{ asset('assets/brands/js/demo1.js') }}"></script>
    <!-- For the demo ad only -->
    <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
</div>
