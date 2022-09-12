<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Aplikasi Warga</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="m-6 bg-cover bg-fixed leading-normal tracking-normal text-indigo-400"
    style="background-image: url('img/header.png');">
    <div class="h-full">
        <!--Nav-->
        <div class="container mx-auto w-full">
            <div class="flex w-full items-center justify-between relative">
                <a href="/" class="navbar-brand flex flex-wrap items-center">
                    <div>
                        <img src="{{ asset('img/ic.png') }}" class="w-10 h-10 sm:w-5 sm:h-5 lg:w-10 lg:h-10" alt="Logo">
                    </div>
                    <p class="pl-3 text-sm sm:text-sm md:text-sm lg:text-lg font-bold bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">PonPin</p>
                </a>

                <div class="flex w-20 sm:w-20 lg:w-1/2 content-center justify-end">
                    <a href="{{ url('login') }}" class="transform inline-block rounded-lg bg-gradient-to-r from-purple-800 to-green-500 py-2 px-4 font-bold text-white transition duration-300 ease-in-out hover:scale-105 hover:from-pink-500 hover:to-green-500 focus:ring">
                    Login
                    </a>
                </div>
            </div>
        </div>

        <!--Main-->
        <div
            class="container mx-auto flex flex-col flex-wrap items-center pt-24 md:flex-row md:pt-36">
            <!--Left Col-->
            <div
                class="flex w-full flex-col justify-center overflow-y-hidden lg:items-start xl:w-2/5">
                <h1
                    class="my-4 text-center text-3xl font-bold leading-tight text-white opacity-75 md:text-left md:text-5xl">
                    Selamat Datang di
                    <span
                        class="bg-gradient-to-r from-green-400 via-pink-500 to-purple-500 bg-clip-text text-transparent">
                        Website PonPin
                    </span>           
                </h1>
                <p class="mb-8 text-center text-sm leading-normal md:text-left md:text-base">
                    Masih bingung ingin memberikan penilaian terhadap kinerja Pak RT dan mengikuti agenda-agenda yang diadakan? 
                </p>
            </div>

            <!--Right Col-->
            <div class="w-full overflow-hidden p-12 xl:w-3/5">
                <img class="mx-auto w-full -rotate-6 transform transition duration-700 ease-in-out hover:rotate-6 hover:scale-105 md:w-4/5"
                    src="{{ asset('img/bg-ponpin.jpg') }}" />
            </div>

            <!--Footer-->
            <div class="fade-in w-full pt-16 pb-6 text-center text-slate-400 text-sm md:text-left">
                © 2022 Magang UMY - PonPin. All rights reserved.
            </div>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="flex items-center justify-center fixed right-0 bottom-0 w-full h-full z-20 bg-dark bg-opacity-50 wow fadeInDown" data-wow-delay="0.6s"
            role="alert" x-data="{ open: true }" x-show.transition="open">
            <div class="w-2/3 sm:w-1/4 md:w-1/2 lg:w-1/4 sm:mx-auto my-10 opacity-100 mx-auto">
                <div class="flex flex-col p-5 rounded-lg shadow bg-white dark:bg-gray-800 bg-opacity-80 backdrop-blur-lg dark:bg-opacity-70">
                  <div class="flex flex-col items-center text-center">
                    <div class="inline-block p-4 bg-green-50 dark:bg-gray-700 rounded-full">
                        <svg class="w-8 h-8 fill-current text-green-500 duration-300 animate-ping" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none"><path d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"/></svg>                
                    </div>
                    <h2 class="mt-2 font-semibold text-gray-800 dark:text-white">Success Alert</h2>
                    <p class="mt-2 text-sm text-gray-600 leading-relaxed dark:text-gray-400">{{ session('success') }}</p>
                  </div>
              
                  <div class="flex items-center justify-center mt-3">              
                    <button class="flex-1 px-4 py-2 ml-2 bg-green-500 dark:bg-gray-700 hover:bg-green-600 dark:hover:bg-gray-600 text-white text-sm font-medium rounded-md" x-on:click="open = false">
                      OK
                    </button>
                  </div>
                </div>
            </div>
        </div>
    @endif
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
