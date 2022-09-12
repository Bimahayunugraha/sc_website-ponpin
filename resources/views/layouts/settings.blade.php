<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Aplikasi Warga - {{ $title }}</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body id="body">
    <div>
        <div class="flex flex-1 flex-col w-full">
            @yield('settings')
        </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>