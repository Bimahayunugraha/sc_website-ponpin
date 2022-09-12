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
                        <h2 class="text-xl font-bold text-gray-800">Dashboard</h2>

                        <a href="/user/diskusi/create"
                            class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                            Tambah diskusi
                        </a>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        @forelse ($diskusi as $diskusi)
                        @empty
                            <div
                                class="lg:py-16 md:py-20 px-4 py-24 items-center flex justify-center flex-col-reverse lg:flex-row md:gap-28 gap-16">
                                <div class="xl:pt-24 w-full xl:w-1/2 relative pb-12 lg:pb-0">
                                    <div class="relative">
                                        <div class="absolute">
                                            <div class="">
                                                <h1 class="my-2 text-gray-800 font-bold text-2xl">
                                                    Data diskusi kosong
                                                </h1>
                                                <p class="my-2 text-gray-800">Anda dapat menambahkan diskusi terlebih dahulu.</p>
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
