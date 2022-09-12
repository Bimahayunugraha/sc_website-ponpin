<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Aplikasi Warga - {{ $title }}</title>
    <link rel="icon" href="">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body id="body" class="antialiased">
    
    <div class="w-full">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/adminscript.js') }}"></script>
</body>
</html>