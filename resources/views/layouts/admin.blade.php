<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistem Aplikasi Warga - {{ $title }}</title>
    <link rel="icon" href="">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link href="{{ asset('css/final.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
    </style>
    <script src='https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> 
    
</head>
<body id="body" class="antialiased">
    <div x-data="{ sidemenu: false,  showModal1: false }" class="h-screen flex overflow-hidden" x-cloak @keydown.window.escape="sidemenu = false" :class="{'overflow-hidden': showModal1}">
        @include('includes.admin.sidebar')
        <div class="flex flex-1 flex-col w-full">
            @include('includes.admin.header')
            @yield('content')
        </div>
    </div>
    {{-- @yield('scripts') --}}

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/adminscript.js') }}"></script>
</body>
</html>