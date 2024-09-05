<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.layouts.partials.seo')

<body class="bg-base-300 font-sans antialiased" data-theme="{{ config('bacaan.theme') }}">
    @include('components.layouts.partials.navbar')

    <div class="container mx-auto min-h-screen">
        <!-- Page Content -->
        <main class="mx-auto max-w-screen-xl p-4">
            {{ $slot }}
        </main>
    </div>

    {{-- Footer --}}
    @include('components.layouts.partials.footer')

    {{ $scripts ?? '' }}
</body>

</html>
