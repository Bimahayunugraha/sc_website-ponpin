@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            Tambah Data Voting
        </h2>    
        <form action="{{ route('datavoting.update', $candidates->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="name" class="block text-sm my-2">
                    <span class="text-gray-700">Nama Kandidat</span>
                    <input type="text" name="name" id="name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('name') is-invalid @enderror" value="{{ old('name', $candidates->name) }}" autofocus required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="vice_name" class="block text-sm my-2">
                    <span class="text-gray-700">Nama Wakil Kandidat</span>
                    <input type="text" name="vice_name" id="vice_name"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('vice_name') is-invalid @enderror" value="{{ old('vice_name', $candidates->vice_name) }}" autofocus required>
                    @error('vice_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="title" class="block text-sm my-2">
                    <span class="text-gray-700">Judul</span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('title') is-invalid @enderror" value="{{ old('title', $candidates->title) }}" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="image" class="block text-sm my-2">
                    <span class="text-gray-700">Upload Gambar</span>
                    <input type="hidden" name="oldImage" value="{{ $candidates->image }}">
                    @if ($candidates->image)
                    <img class="img-preview block object-cover h-48 w-96 py-3" src="{{ asset('storage/' . $candidates->image) }}" alt="">
                    @else
                    <img class="img-preview img-thumbnail">
                    @endif  
                    <input class="default-btn block w-full py-2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none focus:border-transparent @error('image') is-invalid @enderror" name="image" id="image" type="file" onchange="previewImage()">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </label>
                <label for="date" class="block text-sm my-2">
                    <span class="text-gray-700">Pilih Tanggal Mulai dan Selesai Voting</span>
                    <div class="flex items-center py-2">
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                  <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input name="start_date" id="start_date" type="datetime-local" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('start_date') is-invalid @enderror" value="{{ old('start_date', $candidates->start_date) }}" required>
                            @error('start_date')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                </label>
                <label for="description" class="block text-sm my-2">
                    <span class="text-gray-700">Deskripsi</span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description', $candidates->description) }}" required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full px-3 flex justify-end">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Update</button>
                </div>
        
            </div> 
        </form>
    </div>
</main>

<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function () {
        fetch("/admin/datavoting/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

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