<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <!-- EN -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- AR -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
          rel="stylesheet">
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <!-- Scripts -->
    @filamentStyles
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="{{ app()->getLocale() === 'en' ? 'font-sans' : 'font-cairo' }} antialiased"
      dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">
<div class="flex flex-col min-h-screen bg-gray-50">

    <!-- Page Content -->
    <main class="flex-grow mt-24 pb-8">
        {{ $slot }}
    </main>
</div>
@filamentScripts
@livewireScriptConfig

</body>

</html>
