@extends('layouts.main')

@section('content')
    {{-- Hero Start --}}
    <div class="relative pt-[120px] lg:pt-[150px] pb-[110px]">
        <div class="container">
            <div class="flex flex-wrap mx-auto">
                <div class="flex items-center tw-full lg:w-5/12 px-4">
                    <div class="hero-content">
                        <h1
                            class="text-slate-700 font-bold text-4xl sm:text-[42px]
                            lg:text-[40px] xl:text-[42px] leading-snug mb-3">
                            Selamat Datang di <br />
                            <span class="text-indigo-600">Sistem Aplikasi Warga</span><br />
                        </h1>
                        <p class="text-base mb-8 text-body-color max-w-[480px]">
                            Sampaikan keluhan Anda disini dan kami akan segera menanggapi keluhan yang Anda kirim.
                        </p>
                        <ul class="flex flex-wrap items-center">
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                    py-4
                    px-6
                    sm:px-10
                    lg:px-8
                    xl:px-10
                    inline-flex
                    items-center
                    justify-center
                    text-center text-white text-base
                    bg-primary
                    hover:bg-opacity-90
                    font-normal
                    rounded-lg
                  ">
                                    Daftar & Sampaikan Keluhan
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden lg:block lg:w-1/12 px-4"></div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="lg:text-right lg:ml-auto">
                        <div class="relative inline-block z-10 pt-11 lg:pt-0">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/hero/hero-image-01.png" alt="hero"
                                class="max-w-full lg:ml-auto" />
                            <span class="absolute -left-8 -bottom-8 z-[-1]">
                                <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Hero End --}}

    {{-- Service start --}}
    <section class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">
                        Informasi
                    </h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">
                        Cara Pengaduan
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, vitae?
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="" class="w-full">
                        <div class="py-6 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Tulis Keluhan</h3>
                            <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full">
                        <div class="py-6 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Diproses</h3>
                            <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full">
                        <div class="py-6 px-6">
                        <h3 class="mb-3 font-semibold text-xl text-dark truncate">Menunggu Tanggapan</h3>
                        <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full">
                        <div class="py-6 px-6">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Ditanggapi dan Selesai</h3>
                            <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, excepturi?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section> 
    {{-- Service end --}}

    {{-- Help Start --}}
    <section class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">
                        Kenapa memilih kami?
                    </h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-3xl">
                        Kami akan membantu Anda untuk menuangkan semua keluhan yang Anda rasakan
                    </h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, vitae?
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10 relative">
                        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" alt="" class="w-full object-cover object-center">
                        <div class="py-6 px-6 h-auto md:h-40 lg:h-48">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Penanggapan</h3>
                            <p class="font-medium text-base text-secondary">Keluhan yang Anda sampaikan akan segera kami tanggapi dengan secepatnya.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full object-cover object-center">
                        <div class="py-6 px-6 h-auto md:h-40 lg:h-48">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Pemroresan</h3>
                            <p class="font-medium text-base text-secondary">Keluhan Anda akan kami proses dengan cepat dan maksimal</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full object-cover object-center">
                        <div class="py-6 px-6 h-auto md:h-40 lg:h-48">
                        <h3 class="mb-3 font-semibold text-xl text-dark truncate">Kepuasan</h3>
                        <p class="font-medium text-base text-secondary">Kami akan selalu bekerja dengan maksimal demi kepuasan anda</p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/4">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                        <img src="https://images.unsplash.com/photo-1532620161677-a1ca7d5d530f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" class="w-full object-cover object-center">
                        <div class="py-6 px-6 h-auto md:h-40 lg:h-48">
                            <h3 class="mb-3 font-semibold text-xl text-dark truncate">Solusi</h3>
                            <p class="font-medium text-base text-secondary">Kami juga akan memberikan solusi kepada Anda agar keluhan yang dihadapi dapat selesai dengan baik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Help End --}}
@endsection
