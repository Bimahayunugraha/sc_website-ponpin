@extends('layouts.main')

@section('content')
    <div class="bg-white py-32 dark:bg-dark">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:flex md:gap-6 md:space-y-0 lg:items-center lg:gap-12">
                <div class="md:5/12 lg:w-5/12 lg:h-5/12 mb-5">
                    <img src="{{ asset('img/about.jpg') }}" class="rounded-lg"
                        alt="image" loading="lazy" width="400" height="400">
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white md:text-4xl">Website Sistem Aplikasi Warga Merupakan Website yang Digunakan Untuk Memberikan Penilaian dan lainnya</h2>
                    <p class="mt-6 text-gray-600 dark:text-gray-400">Anda sebagai warga dapat memberikan penilaian untuk menunjang kinerja kami, mengikuti agenda yang diselenggarakan melalui website ini.</p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">Fitur-fitur yang kami tawarkan : </p>
                        <ul class="mt-6 list-none">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="mr-3 inline-block rounded-full bg-pink-200 py-1 px-2 text-xs font-semibold uppercase text-pink-600"><i
                                                class="fas fa-fingerprint"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-500">
                                            Memberikan Penilaian
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="mr-3 inline-block rounded-full bg-pink-200 py-1 px-2 text-xs font-semibold uppercase text-pink-600"><i
                                                class="fab fa-html5"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-500">Melihat Hasil Penilaian Berdasarkan Rata-rata</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="mr-3 inline-block rounded-full bg-pink-200 py-1 px-2 text-xs font-semibold uppercase text-pink-600"><i
                                                class="far fa-paper-plane"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-500">Melihat Agenda dan Mengikutinya</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
