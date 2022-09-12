@extends('layouts.main')

@section('content')
    <div class="dark:bg-dark w-full pb-28">
        @include('partials.settings.header')
        <div class="container mx-auto mt-8">
            <main class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-12 w-2xl mx-auto">
                <aside class="">
                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-10">
                        <div class="flex flex-col gap-1 text-center items-center">
                            <img class="h-32 w-32 bg-white dark:bg-gray-800 p-2 rounded-full shadow dark:shadow-slate-50 mb-4" src="{{ asset('img/user.png') }}" alt="">
                            <p class="font-semibold dark:text-white">{{ $user->name }}</p>
                            <div class="text-sm leading-normal text-gray-400 flex justify-center items-center">
                            <svg viewBox="0 0 24 24" class="mr-1" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            {{ $user->address }}
                            </div>
                        </div>
                        <div class="flex justify-center items-center gap-2 my-3">
                            <div class="font-semibold text-center mx-4">
                                <span class="text-gray-400">Username</span>
                                <p class="text-black dark:text-green-400">{{ $user->username }}</p>
                            </div>
                            <div class="font-semibold text-center mx-4">
                                <span class="text-gray-400">Nomor Telepon</span>
                                <p class="text-black dark:text-green-400">{{ $user->phone }}</p>
                            </div>
                        </div>
                    </div>
                </aside>

                <article class="">
                    <div class="bg-white dark:bg-gray-800 shadow rounded-lg mb-6">
                        <div class="flex flex-row px-2 py-3 mx-3">
                            <div class="w-auto h-auto rounded-full">
                                <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer" alt="User avatar" src="{{ asset('img/security.png') }}">
                            </div>
                            <div class="flex flex-col mb-2 ml-4 mt-1">
                                <div class="text-gray-600 dark:text-white text-sm font-semibold">Update Password</div>
                                <div class="flex w-full mt-1">
                                    <div class="text-gray-500 dark:text-gray-400 font-light text-xs">
                                        Ganti password Anda
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-100"></div> 
                        <div class="text-gray-500 dark:text-gray-400 text-sm mb-6 mx-3 px-2 mt-6">Ganti password Anda untuk menjaga keamanan akun Anda dengan kombinasi yang baik. </div>
                        <div class="relative flex items-center self-center w-full p-4 overflow-hidden text-gray-600 focus-within:text-gray-400 border-t border-gray-100">
                            <a href="{{ route('password.edit') }}" class="rounded-lg text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 dark:bg-gray-900 dark:hover:bg-gray-700 py-3 px-3">Update Password</a>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
@endsection
