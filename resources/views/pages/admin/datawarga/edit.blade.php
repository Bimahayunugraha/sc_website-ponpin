@extends('layouts.admin')
@section('content')
<main class="h-full overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Edit Data Warga
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('datawarga.index') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 
                focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
            <a href="{{ route('datawarga.create') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 
                focus:text-blue-700">
                <i class="far fa-plus mr-2"></i>
                Tambah
            </a>
        </div>
    </div>
    <div class="container px-6 mx-auto grid py-6">
        <form action="{{ route('datawarga.update',['id'=>$user->id]) }}" method="post">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">              
                <label for="phone" class="block text-sm my-2">
                    <span class="text-gray-700">Nomor Telepon</span>
                    <input type="text" name="phone" id="phone"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                        focus:bg-white focus:outline-none @error('phone') is-invalid @enderror" value="{{ old('phone', $user->phone) }}" required>
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="address" class="block text-sm my-2">
                    <span class="text-gray-700">Alamat</span>
                    <input type="text" name="address" id="address"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                        focus:bg-white focus:outline-none @error('address') is-invalid @enderror" value="{{ old('address', $user->address) }}" required>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="roles" class="block mt-4 text-sm">
                    <span class="block text-sm font-medium text-slate-700">
                      Roles 
                    </span>
                    <select id="roles" name="roles"
                      class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                      focus:bg-white focus:outline-none @error('roles') is-invalid @enderror" value="{{ old('roles') }}" required
                    >
                        <option>Pilih roles user</option>
                        <option value="user" <?= $user->roles === 'user' ? 'selected' : '' ?>>user</option>
                        <option value="admin" <?= $user->roles === 'admin' ? 'admin' : '' ?>>admin</option>
                    </select>
                </label>         
                <div class="w-full flex justify-end py-3">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white 
                    rounded-lg px-3 py-3 font-semibold">Update Warga</button>
                </div>
            </div> 
        </form>
    </div>
</main>
@endsection