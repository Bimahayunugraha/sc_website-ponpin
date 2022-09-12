@extends('layouts.main')

@section('content')
    <!-- component -->
    foreach ($candidate as $candidate)
    <div class="container max-w-md w-full lg:flex">
        <div
            class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
            <img src="{{ asset('storage/' . $voting->candidate->image) }}" alt="">
        </div>
        <div
            class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-grey-dark flex items-center">
                    <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    Members only
                </p>
                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?
                </div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem
                    praesentium nihil.</p>
            </div>
            <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4"
                    src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg"
                    alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                    <p class="text-black leading-none">Jonathan Reinink</p>
                    <p class="text-grey-dark">Aug 18</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container inset-0" x-data="{ activeTab: 1 }">
        <div class="flex justify-center items-center h-screen w-screen">
            <dialog open
                class="rounded-2xl overflow-hidden p-0 w-auto max-w-7xl md:mx-auto md:w-2/3 shadow-lg m-8">
                <div class="flex flex-col lg:flex-row">
                    <div class="relative h-64 sm:h-80 w-full lg:h-auto lg:w-1/3 xl:w-2/5 flex-none">
                        <img src="" alt="" class="absolute inset-0 h-full w-full object-cover" />
                        <span
                            class="absolute block inset-x-0 bottom-0 lg:hidden lg:inset-y-0 lg:right-auto bg-gradient-to-t lg:bg-gradient-to-r from-white to-transparent w-full h-16 lg:h-full lg:w-16"></span>
                        <div
                            class="relative bg-green-500 flex justify-end lg:justify-start flex-wrap text-white text-xl font-bold m-4">
                            <div class="px-4 py-1 rounded">Special Offer</div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="p-8">
                            <div class="flex justify-between items-start">
                                <h3 class="text-xl font-bold mb-8" onClick="test">
                                    A Dummy Title
                                </h3>
                                <a href="#" class="text-gray-400 hover:text-gray-800 p-1">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </a>
                            </div>
                            <!-- tabs -->
                            <div class="relative">
                                <header class="flex items-end text-sm">
                                    <button
                                        class="border border-b-0 px-3 py-1 text-sm focus:outline-none rounded-tl-md"
                                        :class="activeTab===1 ? 'font-semibold' : ''"
                                        @click="activeTab=1">
                                        Description
                                    </button>
                                    <button class="border border-b-0 px-3 py-1 focus:outline-none"
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
                                            This is the text for Tab1. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                                            minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id
                                            est laborum.
                                        </p>
                                    </div>
                                    <div x-show="activeTab===2">
                                        <p class="text-xs text-gray-500 line-clamp-3">
                                            This is the text for Tab2. Duis aute irure dolor in
                                            reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id
                                            est laborum.
                                        </p>
                                    </div>
                                    <div x-show="activeTab===3">
                                        <p class="text-xs text-gray-500 line-clamp-3">
                                            This is the text for Tab 3. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- action buttons -->
                            <div class="flex justify-end items-center text-sm font-bold mt-8 gap-4">
                                <a class="text-blue-700 border border-blue-300 hover:border-blue-700 px-4 py-1 rounded"
                                    href="#">Website</a>
                                <div class="text-red-500 font-normal text-xs px-4 py-1 rounded">
                                    Report
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </dialog>
        </div>
    </div>

    @include('partials.footer')
@endsection
