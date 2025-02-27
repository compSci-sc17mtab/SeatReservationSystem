<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">





    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')

            <div id="app">

                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
<footer align="center">
    A collaboration between Leeds University & Elder Studios
    <div id="footer_logos">
        <img style="display: inline; margin: 0 5px;" title="leeds_logo" src="{{ asset('img/leedsLogo.webp') }}" alt="Leeds Logo " width="150" height="50" />
        <img style="display: inline; margin: 0 5px;" title="elder_logo" src="{{ asset('img/elderLogo.png') }}" alt="Elder Studios Logo" width="150" height="50" />
    </div>
</footer>
</html>
