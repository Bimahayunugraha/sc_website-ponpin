<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Aplikasi Warga - {{ $title }}</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="{{ asset('css/final.css') }}" rel="stylesheet">
    <link href="{{ asset('css/warga.css') }}" rel="stylesheet">
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
    </style>
</head>
<body id="body" class="antialiased">
    @include('includes.warga.nav')
    <main>
        @yield('content')
    </main>

    
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/wargascript.js') }}"></script>
</body>
</html>