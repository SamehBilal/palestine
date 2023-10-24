@foreach(config('app.available_locales') as $locale)
    <x-nav-link class="language-link" :href="route(\Illuminate\Support\Facades\Route::currentRouteName(), ['locale' => $locale])" :active="app()->getLocale() == $locale">
        {{ strtoupper($locale) }}
    </x-nav-link>
@endforeach
