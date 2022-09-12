@extends('layouts.warga')

@section('content')
<main class="h-full py-24 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Diskusi
        </h2>     
        <form action="/user/diskusi" method="post">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="title" class="block text-sm my-2">
                    <span class="text-gray-700">Judul Diskusi</span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('title') is-invalid @enderror" value="{{ old('title') }}" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="slug" class="block text-sm my-2">
                    <span class="text-gray-700">Slug</span>
                    <input type="text" name="slug" id="slug" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('slug') is-invalid border-red-500 @enderror"value="{{ old('slug') }}" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="description" class="block text-sm my-2">
                    <span class="text-gray-700">Slug</span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description') }}" required>
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
        fetch("/user/diskusi/checkSlugDiskusi?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });
</script>

@endsection