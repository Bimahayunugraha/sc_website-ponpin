@extends('layouts.main')

@section('content')
    <div class="container flex flex-col md:flex-row h-full w-full items-center lg:overflow-hidden">

        <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" alt="" class="w-full h-full object-cover">
        </div>

        <div
            class="w-full md:max-w-md lg:max-w-full md:mx-auto md:w-full xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100">
                <h1 class="text-xl text-slate-800 md:text-2xl font-bold leading-tight mt-12">Log in ke akun Anda</h1>

                <form class="mt-6" action="/login" method="post">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700">Nama</label>
                        <input type="text" name="name" id="name" placeholder="Masukkan nama"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error ('name') is-invalid @enderror" value="{{ old('name') }}" autofocus autocomplete required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mt-4" x-data="{ show: true }">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input :type="show ? 'password' : 'text'" name="password" id="password" placeholder="Masukkan Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                            focus:bg-white focus:outline-none @error ('password') is-invalid @enderror" value="{{ old('password') }}" required>
                        <div class="text-center cursor-pointer leading-5">
                            <i class="far fa-eye text-dark" @click="show = !show" :class="{'hidden': !show, 'block':show }"></i>
                            <i class="far fa-eye-slash text-dark" @click="show = !show" :class="{'block': !show, 'hidden':show }"></i>
                        </div>  
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Log
                        In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="mt-8">
                    Belum memiliki akun?
                    <a href="/register" class="text-blue-500 hover:text-blue-700 font-semibold">
                        Buat akun baru
                    </a>
                </p>
            </div>

        </div>

    </div>
@endsection
