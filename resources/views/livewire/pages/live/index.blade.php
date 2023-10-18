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
    <div class="content-section-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row mtn-25 worldwide-stats">
                        <div class="col-sm-6">
                            <div class="tracker-block-style-1">
                                <div class="tracker-block">
                                    <div class="tracker-block__icon">
                                        <img src="{{ asset('assets/img/corona-icon-red.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Coronavirus Cases</h4>
                                        <h2><span class="cases-no infected">0,000,000</span> <span class="new-no">(+<span class="today_infected">000,000</span>)</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="tracker-block-style-1">
                                <div class="tracker-block">
                                    <div class="tracker-block__icon">
                                        <img src="{{ asset('assets/img/corona-icon-green.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Recovered</h4>
                                        <h2><span class="cases-no recovered">0,000,000</span> <span class="new-no">(+<span
                                                    class="today_recovered">000,000</span>)</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="tracker-block-style-1">
                                <div class="tracker-block">
                                    <div class="tracker-block__icon">
                                        <img src="{{ asset('assets/img/corona-icon-red.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Death</h4>
                                        <h2><span class="cases-no deaths">0,000,000</span> <span class="new-no">(+<span class="today_deaths">000,000</span>)</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="tracker-block-style-1">
                                <div class="tracker-block">
                                    <div class="tracker-block__icon">
                                        <img src="{{ asset('assets/img/corona-icon-red.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Active Cases</h4>
                                        <h2><span class="cases-no current_cases">0,000,000</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 country-choose-stats">
                            <div class="tracker-block tracker-block--2">
                                <div class="tracker-block__header with-option">
                                    <div class="section-head">
                                        <h2>Coronavirus(COVID-19)</h2>
                                        <p>Updated <span class="last-update"></span> minutes ago</p>
                                    </div>
                                    <div class="select-country">
                                        <label for="select1" class="sr-only">Country</label>
                                        <select class="country" id="select1" name="country"></select>
                                    </div>
                                </div>

                                <div class="tracker-block__body">
                                    <div class="track-item">
                                        <p class="track-item__title">Confirmed</p>
                                        <h4 class="track-item__no infected">0,00,000</h4>
                                    </div>

                                    <div class="track-item">
                                        <p class="track-item__title track-item__title-deaths">Deaths</p>
                                        <h4 class="track-item__no deaths">0,00,000</h4>
                                    </div>

                                    <div class="track-item">
                                        <p class="track-item__title track-item__title-recovered">Recovered</p>
                                        <h4 class="track-item__no recovered">0,00,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="map-status-wrap" id="map-status-report">
                        <div class="map-status-colors">
                            <ul class="colors d-flex">
                                <li><span class="min"></span>&#60;50k</li>
                                <li><span class="mid"></span>&#60;100k</li>
                                <li><span class="max"></span>&#62;100k</li>
                            </ul>
                        </div>

                        <div class="map-status" id="map-status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="cases-by-country" id="cases-by-country">
                        <div class="cases-by-country__top">
                            <div class="header-content d-flex">
                                <h4>Cases by Country</h4>
                            </div>
                        </div>

                        <div class="cases-by-country__bottom">
                            <ul class="cases-country-lists"></ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="list-view table-responsive" id="list-view">
                        <table class="list-view__table display table">
                            <thead class="list-view__head">
                                <tr>
                                    <th>Region</th>
                                    <th>Total Cases</th>
                                    <th>New Cases</th>
                                    <th>Total Deaths</th>
                                    <th>Deaths %</th>
                                    <th>New Deaths</th>
                                    <th>Total Recovered</th>
                                    <th>Recovered %</th>
                                    <th>Active Cases</th>
                                </tr>
                            </thead>

                            <tbody class="list-view__body"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="corona-chart-stats report-item mt-0" id="chart-canvas">
                        <div class="chart-status-top">
                            <h3>Total Graph View</h3>

                            <div class="country-select">
                                <select name="counry"></select>
                            </div>
                        </div>
                        <div class="chart-wrap">
                            <canvas id="chart-canvas" style="width: 100%; height: 100%"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="today-activities-chart report-item">
                        <h3>Today's Activities</h3>

                        <div class="activities-wrap worldwide-stats">
                            <div class="activities-block">
                                <div class="activities-block-item">
                                    <h6>Total Cases</h6>
                                    <h4 class="infected">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Current Cases</h6>
                                    <h4 class="current_cases">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Recovered</h6>
                                    <h4 class="recovered">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Deaths</h6>
                                    <h4 class="deaths">000,000</h4>
                                </div>
                            </div>
                            <div class="charts">
                                <div class="chart chart--1" data-size="230" data-track-color="#F5F7FB" data-bar-color="#71A8FF">
                                    <div class="chart chart--2" data-size="175" data-track-color="#FFFFFF" data-bar-color="#9EC4FF">
                                        <div class="chart chart--3" data-size="120" data-track-color="#FFFFFF" data-bar-color="#C1D8FC"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="today-view report-item worldwide-stats">
                        <h3>Today's View</h3>

                        <div class="tracker-block tracker-block--3 text-center">
                            <div class="tracker-block__top">
                                <h4>Coronavirus (COVID-19)</h4>
                                <p>Updated <span class="last-update"></span> minutes ago</p>
                                <h2 class="tracker-block__top-total-cases infected">00,000,0</h2>
                                <h6 class="new-no">+<span class="today_infected">0000</span> (24h)</h6>
                            </div>

                            <div class="tracker-block__bottom">
                                <div class="tracker-block__bottom-wrap">
                                    <div class="tracker-block__bottom__item">
                                        <h5 class="tracker-block__bottom__item-title title-deaths">Deaths</h5>
                                        <h2 class="tracker-block__bottom__item-no deaths">00,000,0</h2>
                                        <h6 class="new-no">+<span class="today_deaths">00,00</span> (24h)</h6>
                                    </div>
                                    <div class="tracker-block__bottom__item">
                                        <h5 class="tracker-block__bottom__item-title title-active">Active Cases</h5>
                                        <h2 class="tracker-block__bottom__item-no current_cases">00,000,0</h2>
                                        <h6 class="new-no">+<span class="today_active_cases">00,00</span> (24h)</h6>
                                    </div>
                                </div>
                                <div class="tracker-block__bottom__item recovered-item">
                                    <h5 class="tracker-block__bottom__item-title title-recovered">Recovered</h5>
                                    <h2 class="tracker-block__bottom__item-no recovered"></h2>
                                    <h6 class="new-no">+<span class="today_recovered">00,00</span> (24h)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
