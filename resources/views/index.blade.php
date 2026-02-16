<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-antialiased">
    <div class="max-w-screen mx-auto px-2">
        <div class="flex flex-col md:items-center justify-center min-h-screen bg-gray-100">
            <h1 class="text-3xl font-bold">Domain <span class=" text-yellow-800 underline">hannnmstfa.my.id</span> telah
                berubah menjadi <span class="text-green-700 underline">hanstd.com</span></h1>
                <h2 class=" font-semibold text-gray-800 mt-3">Saat ini anda mengakses <span class="italic underline">{{ $subdomain }}.hannnmstfa.my.id</span> dan akan segera dialihkan ke <span class="italic underline">{{ $subdomain }}.hanstd.com</span></h2>
            <livewire:hitung-mundur />
        </div>
    </div>
    @livewireScripts
</body>

</html>