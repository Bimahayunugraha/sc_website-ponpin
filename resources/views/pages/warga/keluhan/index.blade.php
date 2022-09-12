@extends('layouts.warga')

@section('content')
    <main class="h-full py-24 overflow-y-auto">
        <div class="container grid px-6">
            <!-- component -->
            <section class="text-gray-600 body-font">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="px-5 mx-auto">
                    <div class="flex items-center justify-between my-6">
                        <h2 class="text-xl font-bold text-gray-800">Pengajuan Keluhan</h2>

                        <a href="/user/keluhan/create"
                            class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Ajukan Keluhan
                        </a>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        @forelse ($keluhan as $keluhan)
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-white overflow-hidden">
                                    @if ($keluhan->image)
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                                            src="{{ asset('storage/' . $keluhan->image) }}" alt="">
                                    @endif
                                    <div class="p-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                            {{ $keluhan->category->title }}
                                        </h2>
                                        <h1 class="title-font text-lg font-medium text-gray-600 mb-3">
                                            {{ Str::limit($keluhan->title, 10, '...') }}</h1>
                                        <p class="leading-relaxed mb-3">{{ $keluhan->excerpt }}</p>
                                        <p>
                                            @if($keluhan->status == 'terkirim')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                                                {{ $keluhan->status }}
                                            </span>
                                            @elseif ($keluhan->status =='proses')
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                                                {{ $keluhan->status }}
                                            </span>
                                            @else
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                                                {{ $keluhan->status }}
                                                </span>
                                            @endif
                                        </p>
                                        <div class="flex items-center flex-wrap mt-3">
                                            <a href="/user/keluhan/{{ $keluhan->slug }}"
                                                class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-l-lg">
                                                Detail
                                            </a>
                                            @if($keluhan->status == 'terkirim')
                                            <a href="/user/keluhan/{{ $keluhan->slug }}/edit"
                                                class="bg-gradient-to-r from-cyan-200 to-blue-200 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1">
                                                Edit
                                            </a>
                                            <a href="/user/keluhan/{{ $keluhan->slug }}/edit"
                                                class="bg-gradient-to-r from-red-400 to-red-500 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-r-lg">
                                                Delete
                                            </a>
                                            @else

                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div
                                class="lg:py-16 md:py-20 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
                                <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
                                    <div class="relative">
                                        <div class="absolute">
                                            <div class="">
                                                <h1 class="my-2 text-gray-800 font-bold text-2xl">
                                                    Data pengajuan keluhan kosong
                                                </h1>
                                                <p class="my-2 text-gray-800">Anda harus menambahkan data pengajuan keluhan
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
                        @endforelse
                    </div>
                </div>
            </section>

        </div>
    </main>
@endsection
