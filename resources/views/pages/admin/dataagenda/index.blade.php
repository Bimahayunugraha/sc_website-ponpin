@extends('layouts.admin')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="flex items-center justify-between bg-white px-6 py-3">
            <h2 class="text-xl font-bold text-gray-800">Data Agenda</h2>

            <a href="{{ route('dataagenda.create') }}"
                class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
            </a>
        </div>
        <div class="container grid px-6 mx-auto py-6">
            <div class="flex justify-end mb-5">
                <form action="?">
                    <div class="flex items-center max-w-md mx-auto" x-data="{ search: '' }">
                        <div class="w-full">
                            <input class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-l-lg py-2 px-4 w-full appearance-none leading-normal block placeholder-gray-700 mr-10" name="search" value="{{ request('search') }}" 
                            type="search" placeholder="Cari data..." x-model="search">
                        </div>
                        <div>
                            <button type="submit" class="flex items-center bg-blue-500 justify-center w-12 h-12 text-white rounded-r-lg"
                                :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                                :disabled="search.length == 0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="w-full whitespace-no-wrap rounded-lg border border-gray-200 shadow-sm">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                <th class="px-4 py-3 uppercase">No</th>
                                <th class="px-4 py-3 uppercase">Judul</th>
                                <th class="px-4 py-3 uppercase">Waktu</th>
                                <th class="px-4 py-3 uppercase">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($agendas as $agenda)
                                <tr class="text-gray-700 dark:text-gray-400 ">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $no++ }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $agenda->title }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <span id="countdown {{ $agenda->id }}" class="ml-1 text-slate-700 dark:text-white">
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
                                        </span>
                                    </td>  
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">                                    
                                            <a href="{{ route('dataagenda.seedetails', $agenda->id) }}"
                                                class="bg-green-400 hover:bg-green-700 focus:bg-green-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="far fa-info-circle"></i></a>
                                            <a href="{{ route('dataagenda.edit', $agenda->id) }}"
                                                class="bg-sky-400 hover:bg-sky-700 focus:bg-sky-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="far fa-edit"></i></a>
                                            <form onsubmit="return confirm('Yakin data {{ $agenda->title }} ingin dihapus?')" action="{{ route('dataagenda.destroy',['id'=>$agenda->id])}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" 
                                                class="bg-red-400 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold"><i
                                                    class="fas fa-trash-alt"></i></button>
                                            </form>
                                            
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-gray-400">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
            {{ $agendas->links() }}
            @if (session()->has('success-add'))
            <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer px-2 flex items-center opacity-90 justify-between w-full p-2 bg-yellow-500 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="fas fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-add') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>

                </button>
            </label>
        </div>
        @elseif (session()->has('success-update'))
        <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer flex items-center opacity-90 justify-between w-full p-2 bg-sky-500 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="far fa-edit"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-update') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>

                </button>
            </label>
        </div>
        @elseif (session()->has('success-delete'))
        <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer flex items-center opacity-90 justify-between w-full p-2 bg-red-700 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="far fa-trash-alt"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-delete') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>

                </button>
            </label>
        </div>
        @elseif (session()->has('success-status'))
        <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer flex items-center opacity-90 justify-between w-full p-2 bg-gray-500 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="fal fa-hourglass-end"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-status') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>

                </button>
            </label>
        </div>
        @endif
        </div>
    </main>

    <script>
        $(document).ready(function() {

            window.setTimeout(function() {
                $(".alert-toast").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 2500);

        });
    </script>

@endsection
