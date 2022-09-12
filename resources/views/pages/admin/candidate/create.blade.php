@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Data Voting
        </h2>     
        <form action="{{ route('datacandidate.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="name" class="block text-sm my-2">
                    <span class="text-gray-700">Nama Kandidat</span>
                    <input type="text" name="name" id="name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="vice_name" class="block text-sm my-2">
                    <span class="text-gray-700">Nama Wakil Kandidat</span>
                    <input type="text" name="vice_name" id="vice_name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('vice_name') is-invalid @enderror" value="{{ old('vice_name') }}" autofocus required>
                    @error('vice_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="title" class="block text-sm my-2">
                    <span class="text-gray-700">Judul</span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('title') is-invalid @enderror" value="{{ old('title') }}" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="image" class="block text-sm my-2">
                    <span class="text-gray-700">Upload Gambar</span>
                    <img class="img-preview" src="" alt="">
                    <input class="default-btn block w-full py-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none focus:border-transparent @error('image') is-invalid @enderror" name="image" id="image" type="file" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </label>
                <label for="description" class="block text-sm my-2">
                    <span class="text-gray-700">Deskripsi</span>
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

    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector(".img-preview");

        imgPreview.style.display = "block";

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function (ofREvent) {
            imgPreview.src = ofREvent.target.result;
        };
    }
</script>

@endsection