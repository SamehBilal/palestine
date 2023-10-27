<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Volt\Component;

new #[Layout('layouts.auth')] class extends Component
{
    #[Rule(['required', 'string', 'email'])]
    public string $email = '';

    #[Rule(['required', 'string'])]
    public string $password = '';

    #[Rule(['boolean'])]
    public bool $remember = false;

    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! auth()->attempt($this->only(['email', 'password'], $this->remember))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());

        session()->regenerate();

        $this->redirect(
            session('url.intended',  route('dashboard', 'en')),
            navigate: true
        );

    }

    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }
}; ?>

<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header py-4 text-center bg-primary">
                        <a href="{{ route('index') }}" wire:navigate>
                            <span>
                                <x-application-logo />
                            </span>
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form wire:submit="login">

                            <!-- Email Address -->
                            <div class="mb-3">
                                <x-input-label for="emailaddress" :value="__('Email')" />
                                <x-text-input wire:model="email" id="emailaddress" type="email" name="email" placeholder="Enter your email" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                @if (Route::has('password.request'))
                                    <a class="text-muted float-end" href="{{ route('password.request') }}" wire:navigate>
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                <x-input-label for="password" :value="__('Password')" />
                                <div class="input-group input-group-merge">
                                    <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                placeholder="Enter your password"
                                                required autocomplete="current-password" />
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-3">
                                <div class="form-check">
                                    <input wire:model="remember" type="checkbox" class="form-check-input" name="remember" id="remember" checked>
                                    <x-input-label for="remember" class="form-check-label" :value="__('Remember me')" />
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <x-primary-button>
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>

                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Sign in with</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary" style="color: #4267B2"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ms-1" wire:navigate><b>{{ __('Register') }}</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
