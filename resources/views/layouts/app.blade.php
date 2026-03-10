<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Pustaka Leluasa' }}</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @livewireStyles
</head>
<body>
    <nav>
        <a href="/"><span> hubungi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;promo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;toko&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tentang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        @auth
            <a href="{{ url('/app') }}" class="Lnav">Dashboard</a>
        @else
            <a href="{{ url('/app') }}" class="Lnav">Log in</a>
            <span class="Lnav">|</span>
            <a href="{{ url('/app') }}" class="Lnav">Register</a>
        @endauth
    </nav>

    {{ $slot }}

    <br><br>
    <footer>
        <p style="text-align: center;">TOKO GENERIK KS(c)2026</p>
    </footer>

    @livewireScripts
</body>
</html>
