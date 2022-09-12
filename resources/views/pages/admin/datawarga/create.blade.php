@extends('layouts.admin')
@section('content')
<main class="h-full overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Tambah Data Warga
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('datawarga.index') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
        </div>
    </div>
    <div class="container px-6 mx-auto grid py-6">
        <form action="{{ route('datawarga.store') }}" method="post">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="name" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Nama Warga</span>
                    <input type="text" name="name" id="name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Masukkan nama warga" autofocus required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="username" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Username Warga <span class="italic text-xs text-red-600">(Haruf huruf kecil)</span></span>
                    <input type="text" name="username" id="username"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Masukkan username warga" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="phone" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Nomor Telepon <span class="italic text-xs text-red-600">(Harus berupa angka, maksimal 13 karakter)</span></span>
                    <input type="number" name="phone" id="phone"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon" required>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="address" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Alamat</span>
                    <textarea type="text" name="address" id="address"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="Masukkan alamat warga" required></textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="password" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Password <span class="italic text-xs text-red-600">(Minimal 8 karakter)</span></span>
                    <input type="password" name="password" id="password"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 invalid:text-pink-700 invalid:focus:ring-yellow-500 invalid:focus:border-yellow-500 @error('password') is-invalid @enderror" placeholder="Masukkan password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="roles" class="block mt-4 text-sm">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                      Roles 
                    </span>
                    <select id="roles" name="roles"
                      class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('roles') is-invalid @enderror" value="{{ old('roles') }}" required
                    >
                        <option>Pilih roles user</option>
                        @foreach ($roles as $role)
                            <option value="{{$role}}">{{$role}}</option>
                        @endforeach
                    </select>
                </label>
                <div class="w-full flex justify-end py-3">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white 
                    rounded-lg px-3 py-3 font-semibold">Tambah Warga</button>
                </div>
            </div> 
        </form>
    </div>
</main>
@endsection