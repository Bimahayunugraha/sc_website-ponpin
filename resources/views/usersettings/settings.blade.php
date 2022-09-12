@extends('layouts.main')
@section('content')
    <main class="w-full pb-28 dark:bg-dark">
        @include('partials.settings.header')
        <div class="container py-4 mt-8 mx-auto">
            <div class="text-slate-800 dark:text-slate-400 text-base lg:text-xl font-bold mb-3">Settings</div>
            <div class="overflow-hidden py-6 bg-white dark:bg-slate-700 shadow rounded-lg sm:rounded-lg">
                <div class="flex items-center justify-between px-6 py-2 border-b-2">
                    <div>
                        <h2 class="text-xs flex flex-wrap font-semibold text-gray-700 dark:text-gray-300 sm:text-sm md:text-sm lg:text-base">
                            Light dan Dark Mode
                        </h2>
                        <p class="text-xs font-normal text-gray-500 dark:text-gray-400 sm:text-sm md:text-sm lg:text-sm">Ubah tampilan ke mode light atau dark</p>
                    </div>
                    <div class="flex items-center justify-end">
                        <span class="pr-3 text-sm text-slate-500 dark:text-white"><i
                                class="far fa-sun"></i></span>
                        <input type="checkbox" class="hidden" id="dark-toggle" />
                        <label for="dark-toggle">
                            <div class="w-12 lg:w-14 cursor-pointer items-center rounded-full bg-slate-500 p-1 py-1">
                                <div
                                    class="toggle-circle h-4 w-4 lg:h-6 lg:w-6 rounded-full bg-white duration-300 ease-in-out">
                                </div>
                            </div>
                        </label>
                        <span class="pl-3 text-sm text-slate-500 dark:text-white"><i
                                class="far fa-moon"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const darkToggle = document.querySelector("#dark-toggle");
        const html = document.querySelector('html');

        darkToggle.addEventListener('click', function() {
            if (darkToggle.checked) {
                html.classList.add('dark');
                localStorage.theme = 'dark';
            } else {
                html.classList.remove('dark');
                localStorage.theme = 'light';
            }
        });

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            darkToggle.checked = true;
        } else {
            darkToggle.checked = false;
        }
    </script>
@endsection
