<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>{{ $mainTitle }}</title>

    {{-- LINK VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles
</head>

<body class="d-flex flex-column min-vh-100 bg-body-panna">
    <header class="mb-auto">
        <x-navbar />
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="mt-auto">
        <x-footer />
    </footer>

    @livewireScripts
</body>

</html>
