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

<div class="map-widget map-report position-relative map-report">
    <div class="corona-map-tracker" id="tracker-map">
        
    </div>

    <div class="map-content-wrap tracker-block tracker-block--4">
        <div class="tracker-block__body">
            <div class="select-country">
                <label for="select3" class="sr-only">Country</label>
                <select class="country" name="country"></select>
            </div>
            <div class="track-item">
                <p class="track-item__title">Total Cases</p>
                <h4 class="track-item__no infected">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">Last 24 Hours</p>
                <h4 class="track-item__no today_infected">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">Deaths <span>(<span class="deaths-rate"></span>%)</span>
                </p>
                <h4 class="track-item__no deaths">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">New Deaths</p>
                <h4 class="track-item__no today_deaths">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">Recovered <span>(<span class="recover-rate"></span>%)</span>
                </p>
                <h4 class="track-item__no recovered">00,000</h4>
            </div>
        </div>
    </div>
</div>
