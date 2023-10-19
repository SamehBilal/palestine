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
    <div class="content-section-1" >
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row mtn-25 worldwide-stats">
                        <div class="col-sm-6">
                            <div class="tracker-block-style-1">
                                <div class="tracker-block">
                                    <div class="tracker-block__icon">
                                        <img src="{{ asset('assets/img/people.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Deaths</h4>
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
                                        <img src="{{ asset('assets/img/woman (3).png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Women</h4>
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
                                        <img src="{{ asset('assets/img/man (2).png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Children</h4>
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
                                        <img src="{{ asset('assets/img/patient.png') }}" alt="corona-icon" />
                                    </div>
                                    <div class="tracker-block__content">
                                        <h4>Total Injured</h4>
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
                                        <h2>From OCT the 7th</h2>
                                        <p>Updated <span class="last-update"></span> minutes ago</p>
                                    </div>
                                    <div class="select-country">
                                        {{-- <label for="select1" class="sr-only">Region</label> --}}
                                        <select class="country" id="select1" name="country" style="width: 164px!Important;">
                                            <option value="en" class="egypt" data-image="{{ asset('assets/img/palestine.webp') }}">
                                                West Bank
                                            </option>
                                            <option value="egypt" class="en" data-image="{{ asset('assets/img/palestine.webp') }}">
                                                Gaza
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="tracker-block__body">
                                    <div class="track-item">
                                        <p class="track-item__title track-item__title-deaths">All Deaths</p>
                                        <h4 class="track-item__no infected">0,00,000</h4>
                                    </div>

                                    <div class="track-item">
                                        <p class="track-item__titletrack-item__title-recovered">Women & Children</p>
                                        <h4 class="track-item__no deaths">0,00,000</h4>
                                    </div>

                                    <div class="track-item">
                                        <p class="track-item__title">Injured</p>
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
                                <h4>Cases by Region</h4>
                            </div>
                        </div>

                        <div class="cases-by-country__bottom">
                            <ul class="cases-country-lists">
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">West Bank</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">West Bank</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>

                                <li>
                                    <h6 class="country-name">West Bank</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">West Bank</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">West Bank</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>
                                <li>
                                    <h6 class="country-name">Gaza</h6>
                                    <span class="cases-no infected">520</span>
                                </li>

                            </ul>
                            <div class="text-center">
                                <button class="btn-show-all"> View all Regions</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="list-view table-responsive" id="list-view">
                        <table class="list-view__table display table">
                            <thead class="list-view__head">
                                <tr>
                                    <th>Region</th>
                                    <th>Total Injured</th>
                                    <th>New</th>
                                    <th>Total Deaths</th>
                                    <th>Deaths %</th>
                                    <th>New Deaths</th>
                                    <th>Total Women</th>
                                    <th>Total Children</th>
                                    <th>Total Displaced</th>
                                </tr>
                            </thead>

                            <tbody class="list-view__body">
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="country-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Palestine"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="worldwide-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Egypt"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="worldwide-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Egypt"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="worldwide-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Egypt"> West Bank
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                                <tr class="worldwide-item">
                                    <td>
                                        <img src="{{ asset('assets/img/palestine.webp') }}" alt="Egypt"> Gaza
                                    </td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>25</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>500</td>
                                </tr>
                            </tbody>
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
                                <select name="counry">
                                    <option value="">West Bank</option>
                                    <option value="">Gaza</option>
                                    <option value="">West Bank</option>
                                </select>
                            </div>
                        </div>
                        <div class="chart-wrap">
                            <canvas id="chart-canvas" style="width: 100%; height: 100%"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="today-activities-chart report-item">
                        <h3>Today's View</h3>

                        <div class="activities-wrap worldwide-stats">
                            <div class="activities-block">
                                <div class="activities-block-item">
                                    <h6>Total Injured</h6>
                                    <h4 class="infected">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Total Deaths</h6>
                                    <h4 class="current_cases">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Women</h6>
                                    <h4 class="recovered">000,000</h4>
                                </div>
                                <div class="activities-block-item">
                                    <h6>Children</h6>
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
                                <h4>From OCT the 7th</h4>
                                <p>Updated <span class="last-update"></span> minutes ago</p>
                                <h2 class="tracker-block__top-total-cases infected">00,000,0</h2>
                                <h6 class="new-no">+<span class="today_infected">0000</span> (24h)</h6>
                            </div>

                            <div class="tracker-block__bottom">
                                <div class="tracker-block__bottom-wrap">
                                    <div class="tracker-block__bottom__item">
                                        <h5 class="tracker-block__bottom__item-title title-deaths">Total Deaths</h5>
                                        <h2 class="tracker-block__bottom__item-no deaths">00,000,0</h2>
                                        <h6 class="new-no">+<span class="today_deaths">00,00</span> (24h)</h6>
                                    </div>
                                    <div class="tracker-block__bottom__item">
                                        <h5 class="tracker-block__bottom__item-title title-active">Women</h5>
                                        <h2 class="tracker-block__bottom__item-no current_cases">00,000,0</h2>
                                        <h6 class="new-no">+<span class="today_active_cases">00,00</span> (24h)</h6>
                                    </div>
                                </div>
                                <div class="tracker-block__bottom__item recovered-item">
                                    <h5 class="tracker-block__bottom__item-title title-recovered">Children</h5>
                                    <h2 class="tracker-block__bottom__item-no recovered">00,000,0</h2>
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
