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
    <div class="corona-map-tracker" {{-- id="tracker-map" --}}>
        <svg id="Layer_1" class="palestine-map" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1080 1920">
            <defs>
                <style>.cls-1,.cls-2{stroke-width:0px;}.cls-2{fill:#fff;}</style>
            </defs>
            <path class="cls-1" d="m680.22,1414.97c8.21,11.8,15.42,22.33,22.82,32.75,5.32,7.49,5.01,13.74-1.28,21.14-4.25,4.99-5.85,12.26-8.46,18.59-.62,1.49.04,3.96-.92,4.79-14.13,12.23-3.96,23.81.73,35.54,1.54,3.84,2.59,7.94,4.54,11.55,8.57,15.81,6.27,27.93-8.57,39.75-7.28,5.81-10.57,17.04-14.71,26.24-3.53,7.85-5.1,16.58-8.59,24.46-5.86,13.24-4.45,26.48-2.35,40.13.83,5.41,1.46,13.67-1.59,16.38-13,11.52-8.38,26.87-11.04,40.57-1.94,10.01-4.5,19.97-5.46,30.07-.8,8.49,1.23,17.26.28,25.71-.81,7.22-2.44,15.36-6.6,20.95-6.5,8.74-14.23,16.17-13.48,28.27.14,2.22-.9,5.24-2.49,6.73-10.2,9.53-20.7,18.73-31.91,28.76-16.16-10.86-28.74-26.36-27.33-48.11,2.26-34.94-9.07-66.4-23.09-96.83-11.22-24.34-26.12-46.98-39.2-70.47-2.58-4.64-5.78-9.63-6.17-14.66-2.1-26.94-14.86-49.66-27.06-72.79-12.94-24.53-24.76-49.66-37.91-74.07-2.8-5.19-8.6-9.88-14.11-12.29-22.51-9.83-34.33-21.1-25.78-46.49,1.64-4.88-.71-13.39-4.35-17.3-9.35-10.03-15.62-21.44-14.55-34.56,2.91-35.8-13.1-65.38-29.69-94.57-14.54-25.59-30.84-50.21-46.66-75.06-28.51-44.77-47.03-93.94-64.3-143.74-4.37-12.6-10.43-24.62-15.73-36.92,11.83-12.56,24.85-27.51,39.04-41.26,55.13-53.42,99.88-114.36,134.28-182.96,53.36-106.41,86.13-219.53,109.46-335.72,7.26-36.14,14.6-72.27,20.81-108.6,2.92-17.11,3.68-34.64,4.53-52.02.39-7.97.66-15.04,9.55-17.98,8.34-2.76,15.52-1.21,21.09,6.01.72.94,1.88,1.54,2.82,2.28q16.99-12.11,28.55-42.7c-15.45-8.7-10.12-21.77-6.7-35.18,3.65-14.34,6.38-28.98,8.48-43.63,1.22-8.5,4.49-11.72,13.31-12.77,15.42-1.84,30.69-5.33,45.86-8.81,13.55-3.11,26.76-8.91,40.39-9.97,6.23-.48,15.61,6.11,19.19,12.1,7.05,11.82,13.23,10.95,24.18,5.52,10.46-5.18,22.34-6.93,30.53-16.86,1.74-2.11,8.24-.31,12.36-.31,4.4-3.56,9.18-7.2,13.67-11.17,2.11-1.87,4.97-4.23,5.25-6.63,1.88-16.33,2.99-32.75,4.76-49.1.45-4.15,2.1-8.26,3.76-12.14.74-1.74,3.24-2.64,4.35-4.31,9.35-13.98,8.87-13.5,21.7-2.38,5.85,5.07,13.55,7.2,21.84,2.64,12.71-7.01,17.03-3.89,16.47,10.79-.83,21.9-1.22,43.83-2.54,65.7-.23,3.78-3.28,8.61-6.5,10.77-9.86,6.64-15.14,19.01-13.83,31.21,1.32,12.27.03,24.85,1.79,37.02.9,6.2,6.12,11.73,9.15,17.68,3.35,6.58,8.87,13.2,9.17,19.99.8,18.38,3.89,37.71-10.53,53.7,4.63,3.57,8.68,6.69,11.65,8.97-6.35,9.34-11.25,18.18-17.82,25.54-3.52,3.94-9.9,5.32-16.31,8.52,10.17,19.3,16.98,38.88-4.32,54.2,1.31,2.72,1.5,3.94,2.02,4.11,11.06,3.54,14.4,10.47,10.93,21.69-2.62,8.49-2.65,17.91-6.01,26-9.13,21.99-1.37,43.03,3.57,63.65,3.57,14.92,6.33,28.9,2.16,43.9-1.39,5.01-.97,10.5-1.58,15.75-.36,3.06-.5,6.37-1.8,9.05-4.98,10.32-10.59,20.34-15.5,30.69-1.14,2.4-1.47,6.12-.44,8.47,4.6,10.52,9.43,20.98,14.94,31.05,7.1,12.99,6.04,18.78-6.28,26.85-8.02,5.25-8.39,11.72-.26,15.5,7.33,3.41,12.16,4.55,7.81,15.8-3.51,9.09,1.21,21.17,1.4,31.94.16,9.28-.55,18.63-1.61,27.87-.46,4-2.27,8.06-4.31,11.62-25.22,44.14-24.24,91.79-20.89,140.37.91,13.19-4.97,27.47-10.15,40.27-4.93,12.17-13.17,22.98-19.68,34.54-5.29,9.4-5.91,17.49,5.11,24.27,16.03,9.85,24.93,26.04,29.93,43.12,5.42,18.51-6.89,32.83-18.39,45.22-6.92,7.46-9.17,13.36-6.04,22.98,6.57,20.19,5.08,25.74-13.23,37.48-15.24,9.77-16.78,24.34-14.98,38.85,1.14,9.16-.98,13.94-8.27,16.49-9.55,3.34-12.66,10.44-12.86,19.15-.44,19.16-5.86,37.02-15.44,53.16-13.6,22.9-20.68,47.52-25.23,73.49-2.32,13.24-2.3,29-19.37,34.03Zm-282-408.72c-23.61,14.52-40.61,36.88-71.95,21.92-10.52-5.02-26.24-.86-39.05,1.74-3.64.74-5.28,10.82-8.12,16.47-.66,1.3-2.88,1.74-3.76,3.01-4.68,6.76-9.15,13.67-15.31,22.95,12.36,1.13,20.98,1.91,29.2,2.66-1.87,6.01-5.07,10.79-4.27,14.77,2.32,11.64.42,15.5-11.36,16.25-7.34.47-14.74.09-25.2.09,11.75,25.67,21.02,50.15,33.72,72.7,19.74,35.05,42.55,68.37,62.69,103.2,17.89,30.94,33.97,62.64,31.43,100.59-.55,8.27,4.93,18.77,10.91,25.21,8.98,9.67,10.87,19.01,6.19,30.37-5.33,12.94.88,21.75,10.45,28.77,4.89,3.59,11.48,4.8,16.66,8.1,4.64,2.95,9.88,6.5,12.32,11.12,18,34.1,35.83,68.31,52.66,103,5.7,11.75,8.25,25.01,12.45,37.51,2.97,8.84,5.39,18.01,9.61,26.24,13.98,27.24,30.28,53.4,42.62,81.33,12.03,27.23,20.53,55.86,17.97,86.78-1.55,18.7,10.42,31.03,22.37,40.34,10.59-9.06,20.15-16.94,29.28-25.3,1.87-1.71,3.15-5.36,2.87-7.91-1.28-11.44,5.19-19.13,12.63-25.76,7.6-6.78,8.45-14.12,6.65-23.53-1.45-7.58-1.41-15.71-.49-23.42,1.58-13.36,5.43-26.51,6.28-39.88.7-11.03,1.26-20.86,9.29-29.87,3.3-3.71,3.55-11.79,2.52-17.4-3.03-16.49-2.66-32.06,5.91-47.04,2.41-4.21,4.26-9.3,4.53-14.09.89-15.95,9.56-27.2,21.19-36.51,7.44-5.96,10.68-11.82,5.96-21.22-3.87-7.73-5.65-16.5-9.58-24.2-6.13-12.02-11.58-23.4,1.18-34.67,1.27-1.12.91-3.94,1.66-5.83,2.32-5.85,3.76-12.44,7.49-17.24,5.14-6.6,6.23-11.92,1.05-18.82-8.15-10.85-15.78-22.09-24.86-34.9,22.1-8.23,19.38-28.69,24.4-45.63,5.14-17.35,9.62-35.13,17.13-51.46,9.01-19.58,19.99-37.89,20.73-60.5.24-7.39,5.17-15.05,9.31-21.74,2.88-4.64,10.17-7.16,11.69-11.85,1.68-5.19,0-12.12-1.92-17.7-8.98-26.01-18.56-51.82-28.77-80.05-19.95,0-41.97.47-63.95-.17-13.63-.4-27.31-1.91-40.79-4.05-9.85-1.56-16.6-7.3-16.43-18.62.04-2.61-1.07-5.25-1.94-9.21-6.14,4.43-11.21,7.87-16.05,11.62-12.25,9.49-24.59,9.7-38.2,2.32-17.23-9.34-26.49-23.62-28.4-42.56-1.33-13.17-6.31-21.21-20.43-23.99-5.99-1.18-14.23-6.96-15.67-12.23-4.44-16.2-6.39-33.13-8.53-49.88-.39-3.06,2.6-6.81,4.62-9.85,3.49-5.26,10.86-9.35,5.23-17.11-5.17-7.12-10.79-13.1-21.37-10.19-12.22,3.37-24.76,5.52-37.11,8.45-1.86.44-3.6,2.04-5.04,3.46-6.55,6.47-10.83,38.46-7.69,47.29,1.65,4.63.34,10.31.36,15.51-4.94-1.96-9.97-3.73-14.76-6.01-1.26-.6-1.78-2.75-2.15-3.37Zm260.41-86.15c-18.05,15.12-21.18,13.99-31-3.41-3.07-5.44-9.82-9.93-15.89-12.34-14.1-5.61-27.51-10.84-34.24-26.37-3.81-8.79-11.37-9.56-19.92-4.96-3.66,1.96-8.54,3.21-12.55,2.61-7.23-1.09-16.44-1.78-20.65-6.43-3.99-4.41-2.4-13.7-3.75-20.75-.49-2.53-2.38-6.73-3.71-6.76-2.77-.07-6.71,1.38-8.2,3.55-4.29,6.25-7.6,13.18-12.15,21.39h-23.81c2.64,9.98,6.55,19.3,7.28,28.87.96,12.57-9.37,17.86-17.29,21.35,4.2,4.23,8.83,8.38,12.82,13.07,3.41,4.02,5.59,9.14,9.2,12.93,9.72,10.21,9.58,14.15,1.77,25.86-3.56,5.33-5.36,12.58-5.76,19.09-.47,7.76.8,15.8,2.43,23.48,2.24,10.53,4.34,22.69,17.39,24.66,17.59,2.65,23.14,13.64,24.65,29.23,1.97,20.33,14.21,32.87,32.1,40.88,15.83,7.09,25.77-4.06,36.53-11.99,10.7-7.88,13.98-7.2,15.37,6.12,1.11,10.64,5.9,16.17,16.15,16.69,33.96,1.73,67.93,3.49,101.92,4.27,2.89.07,7.63-6.6,8.66-10.83,8-32.64,5.48-65.5.81-98.34-1.95-.71-3.88-1.48-5.86-2.11-26.75-8.45-29.81-15.72-17.33-40.84,4.53-9.11,1.83-15.71-8.01-17.93-19.45-4.38-39.53-7.26-47-30.99Zm-109.58-237.22c5.74,1.48,11.76,1.88,16.58,4.49,14.28,7.73,23.37,7.14,36.2-2.44,3.22-2.41,8.3-3.42,12.47-3.28,18.65.61,37.36,1.09,55.88,3.13,18.25,2.01,37.31,3.24,50.64,19.69,2.99-.78,6.13-1.84,9.34-2.4,16.42-2.89,16.37-2.84,18.95,13.86,1.37,8.9,6.69,9.04,12.27,4.28,9.63-8.22,20.27-8.21,31.63-5.7,6.06,1.34,12.22,3.52,18.26,3.29,6.18-.24,12.27-2.96,18.4-4.6-16.06-9.96-17.04-19.28-3.53-28.72,7.43-5.19,8.72-11.03,4.16-19.18-5.92-10.58-10.94-21.69-16.06-32.7-.98-2.1-1.55-5.22-.72-7.2,4.79-11.37,10.07-22.53,15.15-33.77,1.3-2.88,3.18-5.69,3.64-8.71,1.1-7.17,1.81-14.43,2.12-21.68.37-8.63,1.34-17.5-.09-25.9-2.12-12.43-6.12-24.55-10.11-39.8-5.55,1.3-15.02.69-19.5,5.12-10.31,10.2-15.61,4.61-21.8-3.41-6.27-8.11-13.8-12.96-24.59-9.14,1.48,6-.46,8.82-21.3,31.25-13.81-5.56-17.81-3.67-22.41,10.99-1.49,4.73-2.38,9.65-3.6,14.47-3.22,12.77-6.41,14.51-19.38,10.9-4.72-1.31-11.38-4.97-13.93-3.11-11.08,8.05-19.08,2.25-28.35-3.1-9.29-5.37-19.51-9.66-29.04,1.3,1.2,1.92,1.75,3.7,2.95,4.6,7.86,5.9,9.47,12.25,4.45,21.45-3.89,7.12-5.08,15.68-7.99,23.41-.43,1.15-4.12.73-5.59,1.92-4.45,3.62-9.5,7.05-12.54,11.71-3.55,5.45-5.52,12.03-7.64,18.3-3.38,9.99-9.57,15.09-20.37,17.41-6.21,1.33-12.4,7.55-16.38,13.15-4.17,5.87-5.69,13.63-8.19,20.11Zm97.85,100.32c.68,15.08-1.71,17.11-13.76,13.58-5.16-1.51-10.14-3.71-15.37-4.82-9.47-2.01-27.01,8.31-26.54,16.18.74,12.37-5.1,13.47-15.32,12.42-5.29-.54-14.55,1.36-15.87,4.63-5.07,12.64-13.58,11.35-23.72,9.46-4.53-.84-9.45.44-12.81.66,1,11.85,1.79,21.14,2.62,31,2.93.3,6.04-.1,8.48.99,8.99,3.99,16.93,5.27,26.71.05,6.88-3.67,16.37-1.23,19.73,7.89,5.44,14.72,17.7,20.07,30.93,24.27,10.43,3.31,18.37,8.38,21.89,19.79,2.45,7.93,8.13,10.57,14.71,2.9,7.34-8.56,14.21-4.95,17.64,2.66,6.46,14.32,18.13,17.51,31.87,19.66,22.72,3.55,26.81,13.37,15.02,33.17-5.8,9.73-4.13,17.36,5.88,22.88,5.29,2.92,11.31,4.5,18.45,7.24,3.2-20.26,5.44-39.26,9.39-57.89,3.13-14.76,8.25-29.1,12.74-43.55,2.2-7.09,6.41-13.83,7.23-21.01,2.58-22.6,16.55-36.23,34.33-47.63,3.57-2.29,7.14-5.76,8.88-9.53,5.55-12.03,10.01-24.55,15.33-36.69,6.37-14.56,11.6-28.97,5.56-45.2-1.28-3.44.26-8.07.96-12.07,1.39-7.96-1.7-12.11-9.77-12.91-11.46-1.14-23.09-1.62-34.3-4-15.94-3.38-27.33,6.9-37.26,14.71-5.59,4.4-3.94,19.04-3.99,29.08-.04,7.71,2.76,15.39,3.57,23.16.97,9.37-3.18,16.76-12.27,19.19-9.23,2.46-18.24,2.97-25.86-6.37-3.69-4.52-11.32-6.66-17.58-8.04-8.37-1.85-17.15-1.79-25.72-2.78-6.9-.8-13.76-1.93-21.81-3.08Zm-194.44,135.21c1.5-2.26,1.78-3.25,2.4-3.55,26.19-12.46,27.71-18.65,11.64-43.63-1.22-1.89.38-7.26,2.4-9.28,8.63-8.61,7.73-18.74-3.32-23.95-4.74-2.23-10.28-3.87-15.46-3.85-12.97.04-20.24-6.09-25.8-17.53-5.08-10.45-12.76-19.64-20.89-31.75-44.67,97.02-107.52,176.39-184.43,241.92,5.33,11.36,10.09,20.33,13.78,29.72,3.92,9.98,6.66,20.42,10.19,30.57,5.62,16.17,25.29,20.87,37.7,11.29v-20.5c-1.53-.1-3.57-.31-5.61-.35-17.87-.35-19.9-3.14-12.13-18.59,5.17-10.27,11.16-20.13,17.14-29.96,1.16-1.9,4.01-4.04,6-3.97,17.49.65,35.08-6.54,52.67,2.14,5.33,2.63,13.89,1.66,19.84-.61,8.78-3.35,18.17-7.86,24.38-14.57,9.54-10.3,16.86-12.77,25.81-.46.41.56,2.26.07,2,.07,0-13.04-.32-25.61.08-38.16.56-17.42,8.58-27.3,21.05-29.36,13.51-2.23,26.79-5.93,40.16-8.99.52-1.3,1.03-2.6,1.55-3.9-6.89-4.15-13.77-8.3-21.15-12.75Zm205.96-533.03c-7.39-2.13-13.98-4.75-20.82-5.87-16.97-2.78-20.67-9.92-11.74-24.48,9.33-15.22,19.04-30.2,28.26-45.49,12.99-21.53,4.93-38.26-19.89-41.86-23.05-3.34-27.06-7.34-31.34-31-1.86-10.27-6.73-17.41-18.58-17.74-4.52,13.32-12.58,26.46,5.76,35.2-5.94,16.94-7.7,34.68-24.88,44.85-6.13,3.63-9.05,6.36-15.37.08-3.45-3.43-11.34-4.57-16.41-3.35-2.76.66-4.85,8.3-5.43,13.02-2.57,20.98-3.24,42.26-6.89,63.03-7.58,43.2-16.61,86.15-25.3,130.52,5.74-.39,11.66.68,16.1-1.41,9.34-4.39,17.58-11.07,26.84-15.65,18.11-8.96,36.53-17.31,54.98-25.56,8.14-3.64,12.14-8.08,7.33-17.22-4.22-8.02-1.87-14.88,4.46-21.27,2.43-2.44,3.2-6.78,4.11-10.41.9-3.6-.01-9.9,1.7-10.61,4-1.66,9.1-.67,13.75-.77,3.99-.08,8.55,1.04,11.84-.52,6.63-3.15,12.57-7.76,21.5-13.51Zm-75.76,82.3c-14.51,7.48-32.09,12.91-44.57,24.05-11,9.81-22.23,13.55-35.27,14.82-6.84.67-8.82,3.37-10.28,9.55-6.18,26.1-13.19,52-19.34,78.1-.83,3.51.84,8.05,2.43,11.63,5.79,13.02,16.49,14.88,29.66,14.07,23.9-1.48,29.54,7,21.15,27.47,4.13,4.78,7.88,9.11,12.53,14.49,7.18,1.46,14.04-.5,19.38-8.9,2.38-3.74,8.04-7.64,12.18-7.61,13.52.12,17.46-8.65,21.05-18.89,2.32-6.62,5.1-13.11,8.18-19.41,1.35-2.76,3.84-6.84,6.02-6.98,11.87-.75,15.66-6.94,14.6-17.98-.2-2.13,1.42-4.81,2.92-6.66,4.97-6.16,3.18-10.65-1.88-16.04-7.95-8.47-6.15-13.74,5.01-18.03,1.9-.73,3.78-1.52,6.67-2.69-2.85-1.79-4.67-3.54-6.83-4.2-15.41-4.71-22.06-14.53-19.94-30.88.49-3.81-2.23-8.63-4.71-12.11-5.48-7.69-11.74-14.82-18.99-23.79Zm187.06,13.76c1.59-22.2-.44-25.18-19.47-35.34-6.86-3.66-12.74-9.18-19.01-13.92-10.91-8.24-17.09-17.98-8.6-32.5-3.2.22-5.56-.28-7.15.6-17.12,9.55-32.22,7.57-48.43-3.97-5.99-4.26-18.19-6.4-25.19,4.53-4.13,6.45-10.07,7.72-17.3,3.71-3.15-1.75-7.38-1.57-11.11-2.26.92,1.37,1.85,2.74,2.77,4.11-2.71,6.32-4.42,13.38-8.39,18.76-4.21,5.7-5.79,10.33-2.45,16.82,5.01,9.74,2.14,16.68-8.27,20.57-2.52.94-4.71,2.76-8.62,5.13,5.1,6.6,9.52,12.4,14.02,18.14,2.29,2.92,7.07,6.1,6.69,8.54-3.59,23.36,10.49,34.19,28.67,42.66,12.24,5.7,21.3,22.43,38.52,10.7,1.34-.91,4.05-.19,6.02.25q21.87,4.86,27.57-16.19c.87-3.18,1.77-6.39,3.07-9.41,3.31-7.74,9.43-9.24,17.55-10.89,9.28-1.89,17.51-8.94,25.6-13.42-1.66-5.55-2.66-8.92-3.94-13.21,6.34-1.23,11.54-2.24,17.45-3.39Zm-23.06,221.74c-16.66,3.91-31.14,9.16-41.38-6.11-.18-.27-.76-.3-1.17-.38-13.34-2.51-26.61-5.7-40.06-7.35-16.41-2.02-32.98-2.81-49.49-4-2.33-.17-5.06-.32-7.01.69-8.87,4.56-17.53,9.53-29.72,16.27.59,5.16-1.43,16.05,3.09,21.83,14.7,18.82,15.24,17.93,5.54,39.93-3.4,7.7-5.14,16.36-6.18,24.76-.39,3.17,2.59,8.64,5.38,9.79,2.56,1.05,7.74-1.46,10.34-3.91,7.42-6.96,15.39-9.13,25.08-6,6.87,2.22,13.89,3.95,23.2,6.55-6.67-12.49-1.31-15.67,7.87-15.56,4.51.05,9,1.09,13.51,1.55,10.18,1.04,20.52,1.24,30.5,3.26,6.4,1.29,13.95,3.71,18,8.27,7.28,8.2,14.87,10.65,24.14,6.07,9.08-4.49,8.81-13.29,7.49-21.79-.76-4.89-2.91-9.65-3.12-14.52-.4-8.91-.2-17.9.43-26.8.72-10.16,2.18-20.28,3.55-32.54Zm58.6,137.14c-16.76,9.98-28.49,20.83-33,38.85-3.08,12.29-8.49,24.01-12.91,35.96-2.15,5.81-5.8,11.42-6.43,17.37-3.74,35.19-7.2,70.41-9.82,105.7-.78,10.54,3.11,21.49,1.96,31.93-2.06,18.67-6.57,37.05-9.48,55.65-.65,4.18.78,8.79,1.8,13.08.84,3.53,2.83,6.79,3.75,10.31,4.26,16.34,8.34,32.73,12.41,48.83,7.97-8.35,13.44-15.6,20.34-21.03,16.59-13.05,17.93-15.11,11.16-35.61-3.32-10.06-.23-16.4,6.78-24.02,11.39-12.39,24.16-26.21,17.3-45.11-5.8-15.97-14.99-30.24-29.82-40.48-4.11-2.84-7-10.93-6.45-16.19.74-6.95,5.5-13.45,8.39-20.21,8.05-18.88,20.59-37.24,22.98-56.82,3.87-31.66,1.04-64.14,1.04-98.22Zm-68.33-566.85c-1.27-3.55-3.1-8.53-4.83-13.53-4.53-13.05-2.85-33.05,4.55-35.79,8.24-3.05,10.69-8.96,10.99-15.64.36-8.08-1.95-16.24-2.28-24.4-.32-7.9-2.83-10.87-10.71-7.31-2.59,1.17-5.63,1.69-8.49,1.82-9.85.44-19.3,2.44-21.81-12.85-.99-6.03-11.95-14.95-18-14.67-13.16.61-25.99,6.67-39.12,9.82-14.83,3.56-29.73,7.74-44.82,8.96-8.53.69-10.76,3.2-11.36,10.58-.69,8.62-2.46,17.16-2.94,25.78-.17,2.97,1.32,7.9,3.42,8.82,11.55,5.07,14.92,14.52,16.33,25.85,1.63,13.09,8.96,20.41,22.46,22.64,10.21,1.69,20.07,5.52,30.95,8.65-.08.18.72-1.66,1.6-3.46,1.97-4.01,3.94-11.34,5.98-11.36,6.22-.07,13.56,1.21,18.37,4.78,4.02,2.98,6.02,9.71,7.28,15.16,2.93,12.73,4.27,13.2,16.01,6.91,7.77-4.17,16.4-6.74,26.44-10.75Zm-16.88-101.66c.44,1.18.87,2.37,1.31,3.55,5.1-1.44,10.21-3.98,15.31-3.98,4.09,0,10.53,2.04,11.82,4.99,3.37,7.66,8.32,17.77,5.82,24.3-8.87,23.2,2.06,26.8,21.62,32.13,11.94,3.25,20.66.3,26.22-4.9,7.98-7.45,12.36-6.85,19.8-1.04,8.55,6.68,17.41,2.65,17.76-8.2.35-10.69-.96-21.43-1.4-32.15-.29-7.14-2.88-15.71.13-21.09,4.49-8.03,15.8-12.7,19.04-20.86,3.39-8.55.2-19.55.74-29.43.89-16.52,2.46-33.01,4.1-54.08-21.31,14.97-36.29,10.54-48.13-6.93-5.24,8.64-12.02,15.42-13.52,23.23-2.77,14.47-2.4,29.54-3.44,44.36-.47,6.74-16.9,28.59-22.61,30.14-1.13.31-2.74.5-3.6-.06-7.6-5.01-10.98,1.03-15.5,5.29-3.23,3.04-7.18,5.76-11.3,7.31-7.87,2.97-16.1,5-24.18,7.43Zm-247.11,563.53c-11.65,6.93-19.48,1.94-27.54-7.27-6.66-7.61-14.81-4.89-18.82,4.44-5.38,12.53-10.18,25.36-16.34,37.49-4.26,8.39-4.73,14.28,2.68,21.55,6.33,6.21,10.97,14.53,15.02,22.59,4.86,9.67,10.44,15.29,22.54,15.72,22.27.78,29.19,9.8,26.93,31.74,5.66.32,11.29.64,16.71.94,8.32-24.92,22.73-33.91,46.98-30.94,4.57.56,9.53-2.06,12.86-2.86-16.07-35.65-31.42-69.68-47.55-105.46-8.3,9.88-15.45,18.39-23.92,28.47-2.73-4.69-5.59-9.58-9.56-16.39Zm281.62-377.59c-6.96-9.01-13.07-17.95-20.25-25.92-7.92-8.8-9.23-17.17-1.53-26.5,2.11-2.56,4.98-4.95,5.92-7.91,1.24-3.95,2.77-10.02.83-12.21-2.67-3.02-8.8-5.03-12.86-4.29-5.41.99-10.33,4.92-15.33,7.83-12.94,7.52-19,4.75-20.93-9.7-1.8-13.5-6.7-17.71-21.63-18.3-1.86,7.78-6.39,16.15-4.99,23.37,2.14,11.07-1.06,19.49-6.31,28.06-9.73,15.91-19.65,31.7-29.46,47.56-4.57,7.39-3.11,14.23,5.76,14.22,16.34-.03,26.24,10.31,37.92,18.81,6.73,4.9,15.79,10.46,23.23,9.75,15.94-1.51,31.51-6.9,47.28-10.72q-5.65-25.12,12.35-34.04Zm92.27-43.66c-1.55,3.21-1.97,5.67-3.43,6.81-5.92,4.63-12.16,8.85-18.27,13.22-2.78-4.87-5.64-9.7-8.3-14.64-1.37-2.54-2.26-5.35-3.6-7.91-6.56-12.48-13.11-24.97-19.85-37.35-5-9.18-3.13-16.39,4.98-22.86,7.24-5.77,13.9-12.25,20.82-18.42-.88-1.57-1.76-3.14-2.63-4.72-3.19,1.14-6.35,2.39-9.59,3.4-10.66,3.34-19.95,17.36-32.89,4.09-1.35-1.38-4.89-.36-7.2-1.11-5.23-1.69-10.79-3.04-15.38-5.88-8.66-5.35-16.32-2.48-16.24,7.75.07,9.33,1.24,18.94,3.79,27.89,4.6,16.14,12.34,31.67-3.88,46.34-5.97,5.4-2.55,11.82,2.13,17.62,8.35,10.36,16.01,21.27,25.28,33.72,9.51.5,22.44.23,35.06,2.1,12.06,1.78,19.65,16.7,35.39,13.47-2.01-6.41-2.55-12.59-5.63-17-5.45-7.78-2.25-10.87,4.71-13.97,4.3-1.92,9.1-4.07,11.98-7.53,4.89-5.87,8.44-12.85,12.71-19.62-1.98-1.08-5.53-3.02-9.94-5.42Zm-9.35,75.22c-.1-1.14-.2-2.28-.3-3.42-2.2-1.09-4.32-2.41-6.62-3.24-7.59-2.76-15.19-5.5-22.87-7.96-8.46-2.71-16.88-5.97-25.59-7.38-9.34-1.52-18.99-1.1-28.49-1.69-9.41-.58-13.2,3.63-10.94,12.74.69,2.79,1.96,5.45,3.09,8.11,3.31,7.78,2.45,12.11-7.55,13.45-5.3.71-12.31,4.76-14.28,9.2-1.64,3.69,1.5,11.66,5.07,15.08,7.69,7.36,16.26,14.75,25.87,18.92,11.77,5.11,19.29,12.43,18.84,24.79-.61,16.58,10.67,24.64,18.93,32.73,11.39-4.26,21.46-8.03,31.18-11.67,0-6.69-1.33-15.09.28-22.87,3.09-14.9,7.85-29.44,11.07-41.08-6.07-7.25-14.09-13.01-13.21-16.58,1.88-7.62,1.91-19.06,15.53-19.11Zm-316.78,340.19c2.33-10.46,7.87-20.75,5.38-28.46-2.34-7.26-13.14-11.78-22.18-19.1,8.75-3.61,12.71-5.25,16.81-6.94-1.34-4.82-2.48-8.94-3.86-13.94,5.27-.8,9.4-1.43,13.53-2.06.16-.87.33-1.74.49-2.61-4.1-1.26-8.2-2.51-12.24-3.75.11-1.25-.07-2.18.28-2.83,11.72-21.49,8.84-26.09-16.1-25.59-.83.02-1.67-.05-2.49.05-11.28,1.35-20.52-1.31-25.83-12.5-.76-1.61-2.9-2.56-4.64-4.01-12.39,37.36-24.51,73.89-35.9,108.26,7.43,5.53,13.71,10.39,20.22,14.94,2.19,1.53,5.56,3.83,7.34,3.12,10.96-4.35,19.04-3.42,21.29,11.5,10.53-22.51,23.03-27.93,37.92-16.07Zm31.55,87.15c10.85,0,18.11.25,25.34-.12,3.01-.16,5.96-1.65,8.94-2.53-.97-2.85-1.19-6.38-3.04-8.43-10.36-11.48-10-23.87-4.09-36.99,2.55-5.66,4.99-11.38,7.77-16.92,3.96-7.87,2.84-14.61-4.56-19.45-9.98-6.54-10.87-15.33-8.79-26.1.64-3.33-2.13-9.39-5.05-10.92-7.91-4.14-16.74-6.51-25.92-9.84,2.33-5.73,4.83-11.88,7.51-18.45-10.07-.78-18.47-1.44-28.18-2.19,4.83,10.23,3.21,16.89-6.48,17.79,5.59,6.58,14.77,12.55,15.49,19.4,1,9.55-1.33,22.94-7.68,28.93-9.06,8.56-3.64,13.61-.55,19.9,5.88,11.97,13.06,23.33,18.52,35.47,4.66,10.36,7.66,21.46,10.79,30.47Zm274.63-486.84c3.99-4.03,8.83-8.38,12.97-13.3,3.11-3.7,5.54-8.03,7.88-12.3,3.56-6.48,8.21-12.83,9.78-19.83,1.87-8.34.27-17.4,1.46-25.97,1.83-13.13-7.61-19.72-16.11-23.88-5.33-2.61-14.44,1.59-21.51,3.84-3.25,1.03-5.7,4.67-8.44,7.2-20.11,18.51-19.91,18.41-6.88,42.45,6.81,12.57,12.8,25.59,20.84,41.79Z"/>
            <path title="Beersheba" id="PS-BSB" class="cls-2" d="m398.22,1006.25c.37.62.89,2.77,2.15,3.37,4.79,2.27,9.82,4.05,14.76,6.01-.02-5.2,1.29-10.88-.36-15.51-3.14-8.83,1.14-40.82,7.69-47.29,1.44-1.42,3.18-3.02,5.04-3.46,12.34-2.93,24.89-5.09,37.11-8.45,10.57-2.91,16.2,3.07,21.37,10.19,5.63,7.75-1.74,11.85-5.23,17.11-2.02,3.04-5.01,6.79-4.62,9.85,2.13,16.75,4.09,33.67,8.53,49.88,1.44,5.27,9.68,11.05,15.67,12.23,14.12,2.78,19.1,10.82,20.43,23.99,1.91,18.95,11.17,33.23,28.4,42.56,13.61,7.38,25.95,7.16,38.2-2.32,4.84-3.74,9.91-7.19,16.05-11.62.88,3.97,1.98,6.6,1.94,9.21-.17,11.32,6.58,17.05,16.43,18.62,13.48,2.14,27.16,3.65,40.79,4.05,21.98.65,43.99.17,63.95.17,10.22,28.23,19.79,54.04,28.77,80.05,1.93,5.58,3.6,12.51,1.92,17.7-1.52,4.7-8.81,7.22-11.69,11.85-4.15,6.69-9.07,14.35-9.31,21.74-.74,22.61-11.72,40.92-20.73,60.5-7.51,16.33-12,34.12-17.13,51.46-5.01,16.93-2.3,37.4-24.4,45.63,9.08,12.81,16.72,24.05,24.86,34.9,5.18,6.9,4.09,12.22-1.05,18.82-3.73,4.79-5.17,11.39-7.49,17.24-.75,1.89-.39,4.7-1.66,5.83-12.76,11.27-7.31,22.65-1.18,34.67,3.92,7.69,5.71,16.47,9.58,24.2,4.71,9.41,1.47,15.27-5.96,21.22-11.63,9.32-20.3,20.57-21.19,36.51-.27,4.79-2.11,9.88-4.53,14.09-8.57,14.97-8.94,30.55-5.91,47.04,1.03,5.61.78,13.69-2.52,17.4-8.03,9.02-8.59,18.85-9.29,29.87-.85,13.37-4.7,26.52-6.28,39.88-.91,7.71-.96,15.84.49,23.42,1.8,9.41.96,16.75-6.65,23.53-7.44,6.64-13.91,14.32-12.63,25.76.29,2.55-1,6.2-2.87,7.91-9.12,8.36-18.69,16.24-29.28,25.3-11.95-9.31-23.92-21.64-22.37-40.34,2.56-30.92-5.93-59.56-17.97-86.78-12.34-27.93-28.64-54.09-42.62-81.33-4.22-8.23-6.65-17.4-9.61-26.24-4.2-12.5-6.74-25.76-12.45-37.51-16.83-34.69-34.66-68.9-52.66-103-2.44-4.62-7.68-8.17-12.32-11.12-5.18-3.29-11.76-4.51-16.66-8.1-9.56-7.02-15.77-15.83-10.45-28.77,4.68-11.36,2.79-20.71-6.19-30.37-5.98-6.44-11.46-16.94-10.91-25.21,2.54-37.95-13.55-69.65-31.43-100.59-20.14-34.84-42.95-68.15-62.69-103.2-12.7-22.55-21.97-47.04-33.72-72.7,10.45,0,17.85.38,25.2-.09,11.78-.75,13.67-4.61,11.36-16.25-.79-3.98,2.4-8.76,4.27-14.77-8.22-.75-16.84-1.54-29.2-2.66,6.16-9.28,10.63-16.19,15.31-22.95.88-1.27,3.1-1.71,3.76-3.01,2.85-5.65,4.48-15.73,8.12-16.47,12.81-2.6,28.53-6.76,39.05-1.74,31.34,14.95,48.35-7.4,71.95-21.92Z"/>
            <path title="Hebron" id="PS-HBN" class="cls-2" d="m658.63,920.09c7.46,23.72,27.55,26.6,47,30.99,9.84,2.22,12.54,8.82,8.01,17.93-12.49,25.12-9.42,32.39,17.33,40.84,1.98.62,3.9,1.4,5.86,2.12,4.66,32.83,7.18,65.69-.81,98.33-1.04,4.23-5.77,10.9-8.66,10.83-33.99-.78-67.95-2.54-101.92-4.27-10.25-.52-15.04-6.05-16.15-16.69-1.39-13.33-4.67-14-15.37-6.12-10.76,7.92-20.7,19.07-36.53,11.99-17.89-8.01-30.13-20.54-32.1-40.88-1.51-15.59-7.06-26.58-24.65-29.23-13.06-1.96-15.15-14.13-17.39-24.66-1.64-7.68-2.91-15.72-2.43-23.48.4-6.51,2.2-13.76,5.76-19.09,7.81-11.71,7.96-15.65-1.77-25.86-3.61-3.79-5.78-8.91-9.2-12.93-3.99-4.69-8.62-8.84-12.82-13.07,7.92-3.49,18.24-8.78,17.29-21.35-.73-9.57-4.64-18.89-7.28-28.87h23.81c4.55-8.21,7.86-15.14,12.15-21.39,1.49-2.17,5.42-3.62,8.2-3.55,1.33.03,3.23,4.23,3.71,6.76,1.36,7.05-.24,16.35,3.75,20.75,4.21,4.64,13.42,5.34,20.65,6.43,4,.6,8.89-.64,12.55-2.61,8.55-4.59,16.12-3.83,19.92,4.96,6.72,15.53,20.14,20.76,34.24,26.37,6.06,2.41,12.82,6.9,15.89,12.34,9.81,17.4,12.95,18.54,31,3.41Z"/>
            <path title="Nablus" id="PS-NBS" class="cls-2" d="m549.05,682.87c2.5-6.49,4.02-14.24,8.19-20.11,3.98-5.6,10.17-11.82,16.38-13.15,10.8-2.32,16.98-7.42,20.37-17.41,2.12-6.27,4.09-12.84,7.64-18.3,3.03-4.66,8.09-8.1,12.54-11.71,1.46-1.19,5.15-.76,5.59-1.92,2.91-7.73,4.1-16.29,7.99-23.41,5.03-9.2,3.41-15.55-4.45-21.45-1.2-.91-1.76-2.68-2.95-4.6,9.53-10.96,19.75-6.66,29.04-1.3,9.27,5.35,17.26,11.15,28.35,3.1,2.55-1.85,9.21,1.8,13.93,3.11,12.97,3.61,16.16,1.86,19.38-10.9,1.22-4.82,2.11-9.73,3.6-14.47,4.6-14.66,8.6-16.55,22.41-10.99,20.84-22.43,22.79-25.26,21.3-31.25,10.79-3.82,18.32,1.03,24.59,9.14,6.19,8.02,11.49,13.61,21.8,3.41,4.48-4.43,13.95-3.83,19.5-5.12,3.99,15.25,7.99,27.36,10.11,39.8,1.43,8.4.46,17.26.09,25.9-.31,7.25-1.02,14.51-2.12,21.68-.46,3.02-2.34,5.83-3.64,8.71-5.09,11.24-10.37,22.4-15.15,33.77-.83,1.98-.26,5.09.72,7.2,5.12,11.01,10.14,22.12,16.06,32.7,4.57,8.16,3.27,14-4.16,19.18-13.52,9.44-12.54,18.77,3.53,28.72-6.13,1.64-12.22,4.36-18.4,4.6-6.04.23-12.2-1.95-18.26-3.29-11.36-2.51-22-2.52-31.63,5.7-5.58,4.76-10.89,4.61-12.27-4.28-2.58-16.7-2.53-16.75-18.95-13.86-3.22.57-6.35,1.62-9.34,2.4-13.34-16.45-32.39-17.68-50.64-19.69-18.52-2.04-37.23-2.51-55.88-3.13-4.17-.14-9.24.87-12.47,3.28-12.83,9.58-21.92,10.17-36.2,2.44-4.82-2.61-10.84-3.01-16.58-4.49Z"/>
            <path title="Jerusalem" id="PS-JEM" class="cls-2" d="m646.9,783.19c8.05,1.15,14.91,2.29,21.81,3.08,8.58.99,17.35.93,25.72,2.78,6.25,1.38,13.89,3.52,17.58,8.04,7.62,9.33,16.63,8.83,25.86,6.37,9.08-2.42,13.24-9.82,12.27-19.19-.81-7.77-3.61-15.45-3.57-23.16.05-10.04-1.6-24.68,3.99-29.08,9.93-7.81,21.32-18.09,37.26-14.71,11.21,2.38,22.84,2.86,34.3,4,8.07.8,11.16,4.95,9.77,12.91-.7,4-2.24,8.63-.96,12.07,6.04,16.23.81,30.64-5.56,45.2-5.31,12.14-9.78,24.67-15.33,36.69-1.74,3.77-5.31,7.23-8.88,9.53-17.78,11.4-31.75,25.02-34.33,47.63-.82,7.18-5.03,13.93-7.23,21.01-4.49,14.45-9.6,28.8-12.74,43.55-3.96,18.63-6.19,37.63-9.39,57.89-7.14-2.74-13.16-4.32-18.45-7.24-10.01-5.52-11.67-13.15-5.88-22.88,11.79-19.8,7.69-29.62-15.02-33.17-13.74-2.15-25.41-5.34-31.87-19.66-3.43-7.61-10.31-11.22-17.64-2.66-6.57,7.67-12.26,5.03-14.71-2.9-3.53-11.41-11.46-16.48-21.89-19.79-13.23-4.2-25.49-9.54-30.93-24.27-3.37-9.11-12.86-11.56-19.73-7.89-9.78,5.22-17.72,3.94-26.71-.05-2.45-1.09-5.55-.69-8.48-.99-.83-9.86-1.62-19.15-2.62-31,3.36-.22,8.28-1.5,12.81-.66,10.15,1.88,18.65,3.18,23.72-9.46,1.31-3.27,10.57-5.18,15.87-4.63,10.22,1.05,16.06-.05,15.32-12.42-.47-7.87,17.07-18.19,26.54-16.18,5.23,1.11,10.22,3.31,15.37,4.82,12.05,3.53,14.44,1.5,13.76-13.58Z"/>
            <path title="Gaza" id="PS-GZA" class="cls-2" d="m452.46,918.4c7.37,4.44,14.26,8.6,21.15,12.75-.51,1.3-1.03,2.6-1.55,3.9-13.38,3.06-26.65,6.76-40.16,8.99-12.47,2.06-20.5,11.94-21.05,29.36-.4,12.55-.08,25.12-.08,38.16.26,0-1.59.49-2-.07-8.94-12.31-16.27-9.84-25.81.46-6.22,6.71-15.6,11.22-24.38,14.57-5.95,2.27-14.51,3.24-19.84.61-17.59-8.68-35.18-1.49-52.67-2.14-1.99-.07-4.84,2.07-6,3.97-5.98,9.83-11.97,19.69-17.14,29.96-7.78,15.45-5.74,18.24,12.13,18.59,2.04.04,4.09.25,5.61.35v20.5c-12.42,9.57-32.08,4.88-37.7-11.29-3.53-10.15-6.27-20.58-10.19-30.57-3.69-9.39-8.46-18.36-13.78-29.72,76.91-65.53,139.76-144.9,184.43-241.92,8.13,12.11,15.81,21.3,20.89,31.75,5.56,11.44,12.83,17.57,25.8,17.53,5.17-.02,10.72,1.62,15.46,3.85,11.06,5.21,11.95,15.35,3.32,23.95-2.02,2.02-3.62,7.39-2.4,9.28,16.07,24.99,14.55,31.17-11.64,43.63-.62.29-.9,1.28-2.4,3.55Z"/>
            <path title="Haifa" id="PS-HFA" class="cls-2" d="m658.42,385.37c-8.92,5.74-14.86,10.36-21.5,13.51-3.29,1.56-7.85.44-11.84.52-4.65.1-9.75-.89-13.75.77-1.71.71-.79,7.01-1.7,10.61-.91,3.63-1.69,7.96-4.11,10.41-6.34,6.38-8.68,13.24-4.46,21.27,4.81,9.14.81,13.58-7.33,17.22-18.45,8.25-36.87,16.6-54.98,25.56-9.26,4.59-17.51,11.26-26.84,15.65-4.44,2.08-10.35,1.01-16.1,1.41,8.69-44.37,17.72-87.31,25.3-130.52,3.64-20.77,4.32-42.05,6.89-63.03.58-4.72,2.68-12.35,5.43-13.02,5.07-1.22,12.96-.09,16.41,3.35,6.31,6.28,9.24,3.55,15.37-.08,17.18-10.17,18.94-27.91,24.88-44.85-18.35-8.74-10.28-21.88-5.76-35.2,11.85.32,16.72,7.46,18.58,17.74,4.28,23.66,8.28,27.66,31.34,31,24.82,3.6,32.87,20.33,19.89,41.86-9.22,15.28-18.93,30.27-28.26,45.49-8.93,14.56-5.23,21.7,11.74,24.48,6.84,1.12,13.43,3.74,20.82,5.87Z"/>
            <path title="Tulkarm" id="PS-TKM" class="cls-2" d="m582.66,467.67c7.25,8.97,13.51,16.1,18.99,23.79,2.48,3.48,5.2,8.3,4.71,12.11-2.12,16.36,4.52,26.17,19.94,30.88,2.15.66,3.97,2.4,6.83,4.2-2.89,1.17-4.77,1.96-6.67,2.69-11.16,4.29-12.96,9.56-5.01,18.03,5.06,5.39,6.85,9.88,1.88,16.04-1.49,1.85-3.12,4.53-2.92,6.66,1.06,11.04-2.73,17.23-14.6,17.98-2.18.14-4.68,4.23-6.02,6.98-3.08,6.3-5.86,12.79-8.18,19.41-3.6,10.24-7.54,19.01-21.05,18.89-4.14-.04-9.8,3.86-12.18,7.61-5.34,8.4-12.2,10.36-19.38,8.9-4.65-5.38-8.4-9.71-12.53-14.49,8.38-20.47,2.75-28.95-21.15-27.47-13.18.82-23.87-1.05-29.66-14.07-1.59-3.58-3.26-8.11-2.43-11.63,6.16-26.1,13.17-52,19.34-78.1,1.46-6.18,3.44-8.88,10.28-9.55,13.03-1.27,24.27-5.01,35.27-14.82,12.48-11.14,30.05-16.57,44.57-24.05Z"/>
            <path title="Jenin" id="PS-JEN" class="cls-2" d="m769.72,481.43c-5.91,1.15-11.11,2.16-17.45,3.39,1.28,4.3,2.29,7.67,3.94,13.21-8.09,4.48-16.32,11.53-25.6,13.42-8.12,1.65-14.24,3.15-17.55,10.89-1.29,3.02-2.2,6.23-3.07,9.41q-5.73,21.07-27.57,16.19c-1.97-.44-4.68-1.16-6.02-.25-17.21,11.73-26.28-5-38.52-10.7-18.18-8.47-32.27-19.29-28.67-42.66.38-2.44-4.41-5.62-6.69-8.54-4.5-5.74-8.92-11.54-14.02-18.14,3.91-2.37,6.1-4.19,8.62-5.13,10.41-3.88,13.28-10.83,8.27-20.57-3.34-6.49-1.76-11.12,2.45-16.82,3.98-5.38,5.69-12.44,8.39-18.76-.92-1.37-1.85-2.74-2.77-4.11,3.74.69,7.96.51,11.11,2.26,7.23,4.01,13.16,2.75,17.3-3.71,7-10.93,19.21-8.8,25.19-4.53,16.21,11.55,31.31,13.52,48.43,3.97,1.59-.89,3.95-.38,7.15-.6-8.48,14.53-2.31,24.26,8.6,32.5,6.27,4.74,12.15,10.25,19.01,13.92,19.03,10.16,21.06,13.14,19.47,35.34Z"/>
            <path title="Ramallah" id="PS-RBH" class="cls-2" d="m746.66,703.17c-1.38,12.26-2.84,22.37-3.55,32.54-.63,8.91-.83,17.89-.43,26.8.22,4.87,2.36,9.63,3.12,14.52,1.33,8.5,1.59,17.3-7.49,21.79-9.27,4.58-16.86,2.13-24.14-6.07-4.05-4.56-11.61-6.98-18-8.27-9.98-2.02-20.32-2.22-30.5-3.26-4.51-.46-9-1.49-13.51-1.55-9.18-.11-14.54,3.07-7.87,15.56-9.31-2.61-16.34-4.34-23.2-6.55-9.69-3.13-17.66-.96-25.08,6-2.61,2.45-7.78,4.95-10.34,3.91-2.79-1.14-5.78-6.61-5.38-9.79,1.04-8.4,2.78-17.06,6.18-24.76,9.71-22,9.17-21.11-5.54-39.93-4.52-5.78-2.5-16.67-3.09-21.83,12.18-6.73,20.84-11.71,29.72-16.27,1.95-1,4.68-.86,7.01-.69,16.51,1.2,33.08,1.98,49.49,4,13.45,1.66,26.71,4.84,40.06,7.35.41.08.99.11,1.17.38,10.24,15.27,24.73,10.01,41.38,6.11Z"/>
            <path title="Dead Sea" id="PS-DS" class="cls-2" d="m805.25,840.31c0,34.08,2.83,66.56-1.04,98.22-2.39,19.59-14.93,37.94-22.98,56.82-2.88,6.76-7.65,13.26-8.39,20.21-.56,5.26,2.33,13.35,6.45,16.19,14.84,10.24,24.03,24.51,29.82,40.48,6.86,18.9-5.9,32.72-17.3,45.11-7.01,7.62-10.1,13.95-6.78,24.02,6.77,20.5,5.43,22.56-11.16,35.61-6.9,5.43-12.38,12.68-20.34,21.03-4.07-16.1-8.14-32.49-12.41-48.83-.92-3.52-2.9-6.78-3.75-10.31-1.02-4.28-2.46-8.9-1.8-13.08,2.91-18.59,7.42-36.98,9.48-55.65,1.15-10.44-2.74-21.39-1.96-31.93,2.61-35.28,6.08-70.51,9.82-105.7.63-5.95,4.28-11.56,6.43-17.37,4.42-11.95,9.83-23.66,12.91-35.96,4.52-18.03,16.25-28.88,33-38.85Z"/>
            <path title="Acre" id="PS-ACE" class="cls-2" d="m736.92,273.45c-10.04,4.01-18.67,6.58-26.44,10.75-11.74,6.29-13.07,5.82-16.01-6.91-1.26-5.45-3.26-12.18-7.28-15.16-4.81-3.57-12.15-4.85-18.37-4.78-2.04.02-4.01,7.35-5.98,11.36-.89,1.8-1.69,3.65-1.6,3.46-10.88-3.13-20.74-6.95-30.95-8.65-13.5-2.24-20.83-9.55-22.46-22.64-1.41-11.33-4.78-20.78-16.33-25.85-2.1-.92-3.59-5.85-3.42-8.82.48-8.62,2.25-17.16,2.94-25.78.59-7.38,2.83-9.89,11.36-10.58,15.09-1.23,29.99-5.41,44.82-8.96,13.13-3.15,25.96-9.2,39.12-9.82,6.05-.28,17.01,8.64,18,14.67,2.52,15.29,11.96,13.29,21.81,12.85,2.86-.13,5.91-.65,8.49-1.82,7.89-3.56,10.39-.59,10.71,7.31.33,8.16,2.64,16.32,2.28,24.4-.3,6.68-2.75,12.59-10.99,15.64-7.4,2.74-9.08,22.74-4.55,35.79,1.74,5.01,3.56,9.98,4.83,13.53Z"/>
            <path title="Safad" id="PS-SAF" class="cls-2" d="m720.04,171.79c8.08-2.42,16.31-4.46,24.18-7.43,4.12-1.55,8.07-4.27,11.3-7.31,4.52-4.26,7.9-10.3,15.5-5.29.85.56,2.46.37,3.6.06,5.71-1.55,22.13-23.4,22.61-30.14,1.04-14.81.67-29.88,3.44-44.36,1.49-7.8,8.28-14.59,13.52-23.23,11.84,17.47,26.82,21.91,48.13,6.93-1.64,21.07-3.2,37.56-4.1,54.08-.53,9.88,2.65,20.88-.74,29.43-3.24,8.15-14.55,12.83-19.04,20.86-3.01,5.38-.42,13.95-.13,21.09.44,10.72,1.75,21.46,1.4,32.15-.35,10.84-9.22,14.87-17.76,8.2-7.44-5.81-11.82-6.41-19.8,1.04-5.56,5.2-14.28,8.15-26.22,4.9-19.55-5.33-30.49-8.93-21.62-32.13,2.5-6.53-2.45-16.64-5.82-24.3-1.3-2.94-7.73-4.99-11.82-4.99-5.1,0-10.21,2.54-15.31,3.98-.44-1.18-.87-2.37-1.31-3.55Z"/>
            <path title="Alramlah" id="PS-ALR" class="cls-2" d="m472.93,735.32c3.98,6.81,6.83,11.71,9.56,16.39,8.47-10.08,15.62-18.59,23.92-28.47,16.13,35.78,31.48,69.81,47.55,105.46-3.33.8-8.29,3.42-12.86,2.86-24.25-2.97-38.66,6.02-46.98,30.94-5.43-.31-11.05-.62-16.71-.94,2.26-21.94-4.66-30.95-26.93-31.74-12.1-.43-17.69-6.04-22.54-15.72-4.05-8.06-8.69-16.38-15.02-22.59-7.41-7.27-6.94-13.15-2.68-21.55,6.16-12.14,10.96-24.96,16.34-37.49,4.01-9.33,12.15-12.05,18.82-4.44,8.06,9.21,15.89,14.2,27.54,7.27Z"/>
            <path title="Nazaeth" id="PS-NAZ" class="cls-2" d="m754.55,357.73q-18,8.91-12.35,34.04c-15.77,3.81-31.34,9.2-47.28,10.72-7.44.71-16.5-4.85-23.23-9.75-11.68-8.5-21.58-18.84-37.92-18.81-8.88.02-10.33-6.83-5.76-14.22,9.81-15.86,19.73-31.65,29.46-47.56,5.24-8.57,8.45-17,6.31-28.06-1.4-7.22,3.14-15.59,4.99-23.37,14.93.6,19.82,4.8,21.63,18.3,1.93,14.45,7.99,17.22,20.93,9.7,5-2.9,9.92-6.83,15.33-7.83,4.06-.75,10.19,1.26,12.86,4.29,1.94,2.2.41,8.27-.83,12.21-.93,2.97-3.8,5.35-5.92,7.91-7.7,9.33-6.39,17.7,1.53,26.5,7.18,7.97,13.29,16.92,20.25,25.92Z"/>
            <path title="Tiberias" id="PS-TBA" class="cls-2" d="m846.82,314.07c4.41,2.4,7.96,4.34,9.94,5.42-4.27,6.77-7.82,13.75-12.71,19.62-2.88,3.46-7.68,5.61-11.98,7.53-6.96,3.1-10.16,6.2-4.71,13.97,3.08,4.4,3.63,10.59,5.63,17-15.74,3.23-23.33-11.69-35.39-13.47-12.62-1.86-25.55-1.6-35.06-2.1-9.26-12.45-16.93-23.36-25.28-33.72-4.68-5.8-8.1-12.22-2.13-17.62,16.21-14.67,8.47-30.2,3.88-46.34-2.55-8.95-3.72-18.56-3.79-27.89-.08-10.23,7.58-13.1,16.24-7.75,4.59,2.84,10.15,4.19,15.38,5.88,2.31.75,5.86-.27,7.2,1.11,12.94,13.27,22.23-.75,32.89-4.09,3.23-1.01,6.39-2.26,9.59-3.4.88,1.57,1.76,3.14,2.63,4.72-6.92,6.17-13.59,12.65-20.82,18.42-8.11,6.47-9.98,13.68-4.98,22.86,6.74,12.38,13.29,24.87,19.85,37.35,1.35,2.56,2.23,5.36,3.6,7.91,2.66,4.94,5.52,9.77,8.3,14.64,6.12-4.37,12.35-8.6,18.27-13.22,1.45-1.14,1.87-3.59,3.43-6.81Z"/>
            <path title="Baysan" id="PS-BSN" class="cls-2" d="m837.47,389.29c-13.62.04-13.65,11.48-15.53,19.11-.88,3.57,7.14,9.33,13.21,16.58-3.22,11.64-7.99,26.19-11.07,41.08-1.61,7.79-.28,16.18-.28,22.87-9.72,3.64-19.8,7.41-31.18,11.67-8.27-8.09-19.54-16.14-18.93-32.73.45-12.36-7.07-19.68-18.84-24.79-9.6-4.17-18.18-11.56-25.87-18.92-3.57-3.42-6.71-11.39-5.07-15.08,1.98-4.44,8.99-8.49,14.28-9.2,10-1.34,10.86-5.66,7.55-13.45-1.13-2.66-2.4-5.32-3.09-8.11-2.26-9.11,1.53-13.32,10.94-12.74,9.5.59,19.15.17,28.49,1.69,8.7,1.42,17.12,4.68,25.59,7.38,7.69,2.46,15.29,5.2,22.87,7.96,2.3.83,4.42,2.15,6.62,3.24.1,1.14.2,2.28.3,3.42Z"/>
            <path title="Jaffa" id="PS-JFA" class="cls-2" d="m520.69,729.48c-14.89-11.86-27.39-6.44-37.92,16.07-2.25-14.92-10.33-15.85-21.29-11.5-1.78.71-5.15-1.59-7.34-3.12-6.5-4.55-12.79-9.41-20.22-14.94,11.4-34.36,23.51-70.9,35.9-108.26,1.74,1.46,3.88,2.41,4.64,4.01,5.31,11.19,14.55,13.85,25.83,12.5.82-.1,1.66-.03,2.49-.05,24.94-.49,27.83,4.11,16.1,25.59-.35.64-.17,1.57-.28,2.83,4.04,1.24,8.14,2.49,12.24,3.75-.16.87-.33,1.74-.49,2.61-4.13.63-8.26,1.26-13.53,2.06,1.39,5,2.53,9.12,3.86,13.94-4.1,1.69-8.06,3.33-16.81,6.94,9.04,7.32,19.84,11.84,22.18,19.1,2.49,7.7-3.06,18-5.38,28.46Z"/>
            <path title="Allyd" id="PS-ALD" class="cls-2" d="m552.24,816.64c-3.13-9.01-6.13-20.11-10.79-30.47-5.46-12.14-12.64-23.5-18.52-35.47-3.09-6.29-8.51-11.34.55-19.9,6.34-5.99,8.67-19.38,7.68-28.93-.71-6.85-9.89-12.82-15.49-19.4,9.69-.91,11.31-7.56,6.48-17.79,9.72.76,18.11,1.41,28.18,2.19-2.67,6.57-5.17,12.71-7.51,18.45,9.18,3.33,18.01,5.71,25.92,9.84,2.93,1.53,5.7,7.6,5.05,10.92-2.08,10.77-1.19,19.56,8.79,26.1,7.4,4.85,8.52,11.59,4.56,19.45-2.79,5.54-5.23,11.26-7.77,16.92-5.91,13.12-6.27,25.52,4.09,36.99,1.85,2.05,2.07,5.58,3.04,8.43-2.98.89-5.92,2.38-8.94,2.53-7.23.37-14.5.12-25.34.12Z"/>
            <path title="Lake Tiberias" id="PS-LTB" class="cls-2" d="m826.87,329.8c-8.04-16.2-14.02-29.22-20.84-41.79-13.03-24.04-13.23-23.94,6.88-42.45,2.75-2.53,5.19-6.17,8.44-7.2,7.06-2.25,16.18-6.45,21.51-3.84,8.5,4.16,17.94,10.75,16.11,23.88-1.19,8.57.41,17.63-1.46,25.97-1.57,6.99-6.22,13.34-9.78,19.83-2.34,4.26-4.77,8.6-7.88,12.3-4.14,4.93-8.99,9.27-12.97,13.3Z"/>
        </svg>
    </div>

    <div class="map-content-wrap tracker-block tracker-block--4">
        <div class="tracker-block__body">
            <div class="select-country">
                <label for="select3" class="sr-only">{{-- Region --}}</label>
                <select class="country" name="country">
                    <option value="en" class="egypt" data-image="{{ asset('assets/img/palestine.webp') }}">
                        {{ __('content.West Bank') }}
                    </option>
                    <option value="egypt" class="en" data-image="{{ asset('assets/img/palestine.webp') }}">
                        {{ __('content.Gaza') }}
                    </option>
                </select>
            </div>
            <div class="track-item">
                <p class="track-item__title">{{ __('content.Total Cases') }}</p>
                <h4 class="track-item__no infected">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">{{ __('content.Last 24 Hours') }}</p>
                <h4 class="track-item__no today_infected">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">{{ __('content.Deaths') }} <span>(<span class="deaths-rate"></span>%)</span>
                </p>
                <h4 class="track-item__no deaths">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">{{ __('content.New Deaths') }}</p>
                <h4 class="track-item__no today_deaths">00,000</h4>
            </div>
            <div class="track-item">
                <p class="track-item__title">{{ __('content.Women & Children') }} <span>(<span class="recover-rate"></span>%)</span>
                </p>
                <h4 class="track-item__no recovered">00,000</h4>
            </div>
        </div>
    </div>
</div>
