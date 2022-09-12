@extends('layouts.main')
@section('content')
<main class="pb-16 dark:bg-dark">
    @include('partials.settings.header')
    <div class="container px-6 py-4 mt-2 mx-auto grid">
        <div class="flex items-center justify-between bg-white dark:bg-gray-800 px-6 py-3 rounded-xl mb-3">
            <div class="text-slate-800 dark:text-slate-400 text-base lg:text-xl font-bold mb-3 mt-3">Update password</div>    
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <a href="{{ route('user.profile') }}"
                    class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 dark:text-gray-400 dark:bg-slate-800 bg-white rounded-lg border border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-slate-900 hover:text-blue-700 dark:hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-700 dark:focus:ring-white focus:text-blue-700 dark:focus:text-white">
                    <i class="fal fa-arrow-alt-left mr-2"></i>
                    Back
                </a>
            </div>
        </div>
        <p class="text-sm text-slate-700 dark:text-white lg:text-sm font-normal mb-5">Amankan akun anda dengan <br> kombinasi password yang baik</p>
        <form action="{{ route('password.edit') }}" method="post">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white dark:bg-slate-800 rounded-lg shadow-md lg:w-1/3">
                <label for="current_password" class="block text-sm my-2">
                    <span class="text-gray-700 dark:text-text">Password Sekarang</span>
                    <input type="password" name="current_password" id="current_password"
                        class="block px-4 w-full py-2 text-sm text-slate-800 dark:text-white rounded-lg bg-gray-200 dark:bg-gray-900 mt-2 border focus:border-blue-500 dark:focus:border-gray-900 focus:bg-white dark:focus:bg-gray-700 focus:outline-none @error('current_password') is-invalid @enderror" autofocus required>
                    @error('current_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="password" class="block text-sm my-2">
                    <span class="text-gray-700 dark:text-text">Password Baru <span class="italic text-xs text-red-600 dark:text-red-400">(Minimal 8 karakter)</span></span>
                    <input type="password" name="password" id="password"
                        class="block px-4 w-full py-2 text-sm text-slate-800 dark:text-white rounded-lg bg-gray-200 dark:bg-gray-900 mt-2 border focus:border-blue-500 dark:focus:border-gray-900 focus:bg-white dark:focus:bg-gray-700 focus:outline-none @error('password') is-invalid @enderror" autofocus required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="password_confirmation" class="block text-sm my-2">
                    <span class="text-gray-700 dark:text-text">Konfirmasi Password <span class="italic text-xs text-red-600 dark:text-red-400">(Harus sesuai dengan password yang dimasukkan sebelumnya)</span></span>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="block px-4 w-full py-2 text-sm text-slate-800 dark:text-white rounded-lg bg-gray-200 dark:bg-gray-900 mt-2 border focus:border-blue-500 dark:focus:border-gray-900 focus:bg-white dark:focus:bg-gray-700 focus:outline-none @error('password_confirmation') is-invalid @enderror" autofocus required>
                    @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="mx-auto mt-3 text-right">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 dark:bg-slate-700 hover:bg-indigo-700 dark:hover:bg-slate-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-slate-800">Update Password</button>
                </div>
            </div> 
        </form>
    </div>
</main>
@endsection