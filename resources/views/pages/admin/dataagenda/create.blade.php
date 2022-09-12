@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Tambah Data Agenda
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('dataagenda.admin') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
        </div>
    </div>
    <div class="container px-6 py-6 mx-auto grid">   
        <form action="{{ route('dataagenda.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="title" class="block text-sm my-2">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Judul </span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none placeholder-slate-400 @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Masukkan judul agenda" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="slug" class="block text-sm my-5">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Slug <span class="italic text-xs text-red-600">(Slug akan digenerate otomatis, jika memasukkan judul) </span></span>
                    <input type="text" name="slug" id="slug" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('slug') is-invalid border-red-500 placeholder-slate-400 @enderror" value="{{ old('slug') }}" placeholder="Slug otomatis terisi" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="date" class="block text-sm my-5">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Pilih Tanggal Mulai dan Berakhirnya Agenda </span>
                    <div class="flex items-center py-2">
                        <div class="relative">
                            <input type="datetime-local" name="start_date" id="start_date" 
                            class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm mt-2 focus:border-blue-500 focus:bg-white focus:outline-none @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}" required>
                            {{-- <input name="start_date" id="start_date" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('start_date') is-invalid @enderror"" placeholder="Select date start" value="{{ old('start_date') }}" required> --}}
                            @error('start_date')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                            @enderror
                            <p class="py-4 text-gray-500">sampai</p>
                            <input type="datetime-local" name="end_date" id="end_date" 
                            class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm mt-2 focus:border-blue-500 focus:bg-white focus:outline-none @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}"required>
                            {{-- <input name="end_date" id="end_date" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('end_date') is-invalid @enderror"" placeholder="Select date start" value="{{ old('end_date') }}" required> --}}
                            @error('end_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </label>
                <label for="description" class="block text-sm my-5">
                    <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700 mb-3">Deskripsi </span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description') }}" required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full flex justify-end py-3">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Tambah</button>
                </div>
        
            </div> 
        </form>
    </div>
</main>

<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function () {
        fetch("/admin/dataagenda/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

</script>

@endsection