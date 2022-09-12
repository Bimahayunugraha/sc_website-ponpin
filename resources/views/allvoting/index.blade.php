@extends('layouts.main')

@section('content')
    <div id="blog" class="container px-4 xl:px-4 py-28">
        <div class="mx-auto">
            <div class="text-center mx-auto mb-[60px] lg:mb-16 max-w-[510px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                    Voting
                </span>
                <h2
                    class="
               font-bold
               text-3xl
               sm:text-4xl
               md:text-[40px]
               text-dark
               mb-4
               ">
                    Voting Pemilihan
                </h2>
                <p class="text-base text-body-color">
                    Gunakan suara Anda dengan benar saat melakukan voting.
                </p>
            </div>
            @if ($candidates->count())
            <div class="bg-red-200 text-red-700 px-6 py-4 rounded-lg relative mb-5" role="alert" x-data="{ open: true }"
            x-show.transition="open">
                <div class="mr-4">
                    <strong class="font-bold"></strong>
                    <span id="countdown" class="block sm:inline"><script>
                        CountDownTimer('{{ $candidates[0]->created_at }}', 'countdown');
                
                        function CountDownTimer(dt, id) {
                            var end = new Date('{{ $candidates[0]->start_date }}');
                            var _second = 1000;
                            var _minute = _second * 60;
                            var _hour = _minute * 60;
                            var _day = _hour * 24;
                            var timer;
                
                            function showRemaining() {
                                var now = new Date();
                                var distance = end - now;
                                if (distance < 0) {
                
                                    clearInterval(timer);
                                    document.getElementById(id).innerHTML = 'Voting Ditutup';
                                    document.getElementById('vote');
                                    vote.style.display = 'none';
                                    return;
                                }
                                var days = Math.floor(distance / _day);
                                var hours = Math.floor((distance % _day) / _hour);
                                var minutes = Math.floor((distance % _hour) / _minute);
                                var seconds = Math.floor((distance % _minute) / _second);
                
                                document.getElementById(id).innerHTML = '<span><strong class="font-bold mr-3">Voting Dibuka</strong></span>';
                                document.getElementById(id).innerHTML += days + ' Hari ';
                                document.getElementById(id).innerHTML += hours + ' Jam ';
                                document.getElementById(id).innerHTML += minutes + ' Menit ';
                                document.getElementById(id).innerHTML += seconds + ' Detik';
                            }
                            timer = setInterval(showRemaining, 1000);
                        }
                    </script></span>
                </div>
                <span
                    class="cursor-pointer absolute top-0 bottom-0 right-0 hover:bg-red-100 hover:text-red-600 w-10 h-10 rounded-full inline-flex items-center justify-center mt-2 mr-3"
                    x-on:click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </span>
            </div>
            @if(Auth::user()->status == "BELUM")
            <div id="vote" class="mx-auto p-4 md:p-0" x-data="{ activeTab: 1 }">
                <form enctype="multipart/form-data" action="{{route('users.pilih',['id'=>Auth::user()->id])}}" method="POST">
                @method('put')
                @csrf
                @foreach ($candidates as $candidate)
                <div class="shadow-lg flex flex-wrap w-full lg:w-full mx-auto mb-10 lg:mb-14">
                
                    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative">
                        <img src="{{ asset('storage/' . $candidate->image) }}" alt=""
                            class="absolute inset-0 h-full w-full object-cover" />
                        <span
                            class="absolute block inset-x-0 bottom-0 lg:hidden lg:inset-y-0 lg:right-auto bg-gradient-to-t lg:bg-gradient-to-r from-white to-transparent w-full h-16 lg:h-full lg:w-16"></span>
                        <div
                            class="relative flex justify-end lg:justify-start flex-wrap text-white text-xl font-bold m-4">
                            <div class="px-4 bg-green-500 py-1 rounded">Kandidat Voting</div>
                        </div>
                    </div>

                    <div class="bg-white w-full md:w-2/3">

                        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">

                        <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">

                            <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
                            <h3>{{ $candidate->title }}</h3>
                            <p class="mb-0 mt-3 text-grey-dark text-sm italic">{{ $candidate->name }} - {{ $candidate->vice_name }}</p>
                            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
                            </div>
                            <!-- ./Card title and subtitle -->
                            
                            <!-- Card description -->
                            <div class="w-full lg:w-3/5 lg:px-3">
                                <div class="relative">
                                    <header class="flex items-end text-sm">
                                        <button
                                            class="border border-b-0 px-3 py-1 text-sm focus:outline-none rounded-tl-md"
                                            :class="activeTab===1 ? 'font-semibold' : ''"
                                            @click="activeTab=1">
                                            Deskripsi
                                        </button>
                                        <button
                                            class="border border-b-0 px-3 py-1 focus:outline-none"
                                            :class="activeTab===2 ? 'font-semibold' : ''"
                                            @click="activeTab=2">
                                            Terms
                                        </button>
                                        <button
                                            class="border border-b-0 px-3 py-1 focus:outline-none rounded-tr-md"
                                            :class="activeTab===3 ? 'font-semibold' : ''"
                                            @click="activeTab=3">
                                            Contact
                                        </button>
                                    </header>
                                    <div class="border p-2 h-48 overflow-y-auto rounded-b-xl rounded-tr-xl"
                                        id="tabs-contents">
                                        <div x-show="activeTab===1">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                {!! $candidate->description !!}
                                            </p>
                                        </div>
                                        <div x-show="activeTab===2">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                This is the text for Tab2. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore
                                                eu
                                                fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit
                                                anim id
                                                est laborum.
                                            </p>
                                        </div>
                                        <div x-show="activeTab===3">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                This is the text for Tab 3. Lorem ipsum dolor sit
                                                amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Card description -->
                            
                            <!-- Call to action button -->
                            <div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left">
                            <button name="candidate_id" class="bg-white hover:bg-grey-darker hover:text-slate-600 border border-solid border-grey w-1/3 lg:w-full py-2" value="{{$candidate->id}}">Vote</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </form>
            </div>
            @elseif(Auth::user()->status == "SUDAH") 
            <div id="vote" class="mx-auto p-4 md:p-0" x-data="{ activeTab: 1 }">
                @foreach ($candidates as $candidate)
                <div class="shadow-lg flex flex-wrap w-full lg:w-full mx-auto mb-10 lg:mb-14">
                
                    <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative">
                        <img src="{{ asset('storage/' . $candidate->image) }}" alt=""
                            class="absolute inset-0 h-full w-full object-cover" />
                        <span
                            class="absolute block inset-x-0 bottom-0 lg:hidden lg:inset-y-0 lg:right-auto bg-gradient-to-t lg:bg-gradient-to-r from-white to-transparent w-full h-16 lg:h-full lg:w-16"></span>
                        <div
                            class="relative flex justify-end lg:justify-start flex-wrap text-white text-xl font-bold m-4">
                            <div class="px-4 bg-green-500 py-1 rounded">Kandidat Voting</div>
                        </div>
                    </div>

                    <div class="bg-white w-full md:w-2/3">

                        <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">

                        <div class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">

                            <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
                            <h3>{{ $candidate->title }}</h3>
                            <p class="mb-0 mt-3 text-grey-dark text-sm italic">{{ $candidate->name }} - {{ $candidate->vice_name }}</p>
                            <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
                            </div>
                            <!-- ./Card title and subtitle -->
                            
                            <!-- Card description -->
                            <div class="w-full lg:w-3/5 lg:px-3">
                                <div class="relative">
                                    <header class="flex items-end text-sm">
                                        <button
                                            class="border border-b-0 px-3 py-1 text-sm focus:outline-none rounded-tl-md"
                                            :class="activeTab===1 ? 'font-semibold' : ''"
                                            @click="activeTab=1">
                                            Deskripsi
                                        </button>
                                        <button
                                            class="border border-b-0 px-3 py-1 focus:outline-none"
                                            :class="activeTab===2 ? 'font-semibold' : ''"
                                            @click="activeTab=2">
                                            Terms
                                        </button>
                                        <button
                                            class="border border-b-0 px-3 py-1 focus:outline-none rounded-tr-md"
                                            :class="activeTab===3 ? 'font-semibold' : ''"
                                            @click="activeTab=3">
                                            Contact
                                        </button>
                                    </header>
                                    <div class="border p-2 h-48 overflow-y-auto rounded-b-xl rounded-tr-xl"
                                        id="tabs-contents">
                                        <div x-show="activeTab===1">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                {!! $candidate->description !!}
                                            </p>
                                        </div>
                                        <div x-show="activeTab===2">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                This is the text for Tab2. Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum dolore
                                                eu
                                                fugiat nulla pariatur. Excepteur sint occaecat
                                                cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit
                                                anim id
                                                est laborum.
                                            </p>
                                        </div>
                                        <div x-show="activeTab===3">
                                            <p class="text-xs text-gray-500 line-clamp-3">
                                                This is the text for Tab 3. Lorem ipsum dolor sit
                                                amet,
                                                consectetur adipiscing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Card description -->
                            
                            <!-- Call to action button -->
                            <div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left">
                            <button class="bg-white hover:bg-grey-darker hover:text-slate-600 border border-solid border-grey w-1/3 lg:w-full py-2 transition-all duration-300" @click="showModal2 = true">Vote</button>
                            </div>    
                        </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                x-show="showModal2"
                x-transition:enter="transition duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                >
                <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/4 mx-2 sm:mx-auto my-10 opacity-100">
                    <div
                    class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20"
                    @click.away="showModal2 = false"
                    x-show="showModal2"
                    x-transition:enter="transition transform duration-300"
                    x-transition:enter-start="scale-0"
                    x-transition:enter-end="scale-100"
                    x-transition:leave="transition transform duration-300"
                    x-transition:leave-start="scale-100"
                    x-transition:leave-end="scale-0"
                    >
                    <header class="flex flex-col justify-center items-center p-3 text-green-600">
                        <div class="flex justify-center w-28 h-28 border-4 border-green-600 rounded-full mb-4">
                        <svg class="fill-current w-20" viewBox="0 0 20 20">
                            <path
                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                            ></path>
                        </svg>
                        </div>
                        <h2 class="font-semibold text-2xl">Halo!!</h2>
                    </header>
                    <main class="p-3 text-center">
                        <p>
                        Maaf Anda hanya dapat melakukan voting hanya sekali saja
                        </p>
                    </main>
                    <footer class="flex justify-center bg-transparent">
                        <button
                        class="bg-green-600 font-semibold text-white py-3 w-full rounded-b-md hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                        @click="showModal2 = false"
                        >
                        Confirm
                        </button>
                    </footer>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            @endif
            @else
            <div
                class="lg:py-16 md:py-20 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
                <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
                    <div class="relative">
                        <div class="absolute">
                            <div class="">
                                <h1 class="my-2 text-gray-800 font-bold text-2xl">
                                    Data pengajuan keluhan kosong
                                </h1>
                                <p class="my-2 text-gray-800">Anda harus menambahkan data pengajuan
                                    keluhan
                                    terlebih dahulu.</p>
                            </div>
                        </div>
                        <div>
                            <img src="https://i.ibb.co/G9DC8S0/404-2.png" />
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://i.ibb.co/ck1SGFJ/Group.png" />
                </div>
            </div> 
            @endif          
        </div>
    </div>

    <div class="container flex justify-center">

    </div>

    {{-- Footer start --}}
    @include('partials.footer')
    {{-- Footer end --}}


@endsection
