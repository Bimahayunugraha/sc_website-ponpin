@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Tambah Data Kategori
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('datakategori.index') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border 
                border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 
                focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
        </div>
    </div>
    <div class="container px-6 mx-auto grid">   
        <form action="{{ route('datakategori.store') }}" method="post">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="name" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Nama Kategori</span>
                    <input type="text" name="name" id="name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                        focus:bg-white focus:outline-none placeholder-slate-400 @error('name') is-invalid @enderror" 
                        value="{{ old('name') }}" placeholder="Masukkan nama kategori" autofocus required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="slug" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                        Slug <span class="italic text-xs text-red-600">(Slug akan digenerate otomatis, jika memasukkan judul) </span>
                    </span>
                    <input type="text" name="slug" id="slug" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                        focus:bg-white focus:outline-none placeholder-slate-400 @error('slug') is-invalid border-red-500 
                        @enderror" value="{{ old('slug') }}" placeholder="Slug otomatis terisi" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full flex justify-end py-3">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white 
                    rounded-lg px-3 py-3 font-semibold">Tambah</button>
                </div>
            </div> 
        </form>
    </div>
</main>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/admin/datakategori/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>
@endsection