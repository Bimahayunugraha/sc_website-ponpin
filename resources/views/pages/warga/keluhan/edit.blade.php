@extends('layouts.warga')

@section('content')

<nav class="flex flex-wrap h-full w-full mt-14 pt-10 pb-8 bg-slate-200" aria-label="Breadcrumb">
    <ol class="container relative ml-auto pl-4 inline-flex items-center space-x-1 md:space-x-3 mx-auto px-auto">
      <li class="inline-flex items-center">
        <a href="/user/keluhan" class="text-blue-700 hover:text-blue-900 hover:no-underline inline-flex items-center">
          <svg class="w-5 h-5 mr-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <a asp-action="Index" asp-controller="Payments" class="text-blue-700 hover:text-blue-900 hover:no-underline ml-1 md:ml-2 text-sm font-medium">Edit Data Pengajuan Keluhan</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            <span class="text-blue-400 ml-1 md:ml-2 text-sm font-medium">
                {{ $keluhan->category_id }}
            </span>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <span class="text-blue-400 ml-1 md:ml-2 text-sm font-medium">{{ $keluhan->title }}</span>
        </div>
      </li>
    </ol>
</nav>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Edit Pengajuan Keluhan
        </h2>     
        <form action="/user/keluhan/{{ $keluhan->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="title" class="block text-sm my-2">
                    <span class="text-gray-700">Judul Keluhan</span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('title') is-invalid @enderror" value="{{ old('title', $keluhan->title) }}" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="slug" class="block text-sm my-2">
                    <span class="text-gray-700">Slug</span>
                    <input type="text" name="slug" id="slug" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('slug') is-invalid border-red-500 @enderror"value="{{ old('slug', $keluhan->slug) }}" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="category" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Kategori Keluhan
                    </span>
                    <select id="category_id" name="category_id"
                      class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('category_id') is-invalid @enderror" value="{{ old('category_id') }}"
                    >
                        <option>Pilih kategori keluhan</option>
                        @foreach ($category as $category)
                            @if (old('category_id', $keluhan->category_id) == $category->id)  
                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
                <label for="image" class="block text-sm my-2">
                    <span class="text-gray-700">Gambar Pengajuan Keluhan</span>
                    <input type="hidden" name="oldImage" value="{{ $keluhan->image }}">
                    @if ($keluhan->image)
                    <img class="img-preview block object-cover h-48 w-96 py-3" src="{{ asset('storage/' . $keluhan->image) }}" alt="">
                    @else
                    <img class="img-preview img-thumbnail">
                    @endif  
                    <input class="input-image block w-full py-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none focus:border-transparent @error('image') is-invalid @enderror" name="image" id="image" type="file" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </label>
                <label for="description" class="block text-sm my-2">
                    <span class="text-gray-700">Slug</span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description', $keluhan->description) }}  " required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full px-3 flex justify-end">
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
        fetch("/user/keluhan/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });
</script>

@endsection