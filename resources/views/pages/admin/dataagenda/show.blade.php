@extends('layouts.admin')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Detail Data Agenda
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('dataagenda.admin') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
            <a href="{{ route('dataagenda.edit', $agenda->id) }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="fal fa-edit mr-2"></i>
                Edit
            </a>
        </div>
    </div>
    <div class="container px-6 py-6 mx-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Informasi Data Agenda</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Detail Data Agenda</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Judul</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $agenda->title }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Waktu</dt>
                        <dd id="countdown {{ $agenda->id }}"  class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <script>
                                CountDownTimer('{{ $agenda->start_date }}', 'countdown {{ $agenda->id }}');
                                function CountDownTimer(dt, id) {
                                    var end = new Date('{{ $agenda->end_date }}');
                                    var timer;

                                    function showRemaining() {
                                        var now = new Date();
                                        var distance = end - now;
                                        if (distance < 0) {

                                            clearInterval(timer);
                                            document.getElementById(id).innerHTML = 'Agenda Ditutup';
                                            return;
                                        }
                                        // var months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24 ));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                
                                        // var months = Math.floor(distance / _month);
                                        // var days = Math.floor((distance % _month) / _day);
                                        // var hours = Math.floor((distance % _day) / _hour);
                                        // var minutes = Math.floor((distance % _hour) / _minute);
                                        // var seconds = Math.floor((distance % _minute) / _second);

                                        document.getElementById(id).innerHTML =
                                            '<h4 class="mr-3 text-slate-600 text-gray-800 dark:text-white">Agenda Dibuka Selama</h4>';
                                        // document.getElementById(id).innerHTML += months + ' Bulan ';
                                        document.getElementById(id).innerHTML += days + ' Hari ';
                                        document.getElementById(id).innerHTML += hours + ' Jam ';
                                    }
                                    timer = setInterval(showRemaining, 1000);
                                }
                            </script>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Deskripsi Agenda</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{!! $agenda->description !!}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Waktu Mulai Agenda</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $agenda->start_date }}</dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Waktu Berakhirnya Agenda</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $agenda->end_date }}</dd>
                    </div>
                    {{-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate"> resume_back_end_developer.pdf </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                    <div class="w-0 flex-1 flex items-center">
                                        <!-- Heroicon name: solid/paper-clip -->
                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="ml-2 flex-1 w-0 truncate"> coverletter_back_end_developer.pdf </span>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div> --}}
                </dl>
            </div>
        </div>
    </div>
</main>
    
@endsection
