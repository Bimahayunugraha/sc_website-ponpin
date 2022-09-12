@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Edit Data Agenda
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('dataagenda.admin') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
            <a href="{{ route('dataagenda.create') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="far fa-plus mr-2"></i>
                Tambah
            </a>
        </div>
    </div>
    <div class="container px-6 py-6 mx-auto grid"> 
        <form action="{{route('dataagenda.update',['id'=>$agenda->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT"> 
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="title" class="block text-sm my-2">
                    <span class="text-gray-700">Judul</span>
                    <input type="text" name="title" id="title"
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('title') is-invalid @enderror" value="{{ old('title', $agenda->title) }}" autofocus required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="slug" class="block text-sm my-5">
                    <span class="text-gray-700">Slug <span class="italic text-xs text-red-600">(Slug bersifat unique, maka harus diganti) </span></span>
                    <input type="text" name="slug" id="slug" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('slug') is-invalid border-red-500 @enderror"value="{{ old('slug', $agenda->slug) }}" required>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="date" class="block text-sm my-5">
                    <span class="text-gray-700">Pilih Tanggal Mulai dan Berakhirnya Agenda</span>
                    <div class="flex items-center py-2">
                        <div class="relative">
                            <input type="datetime-local" name="start_date" id="start_date" 
                            class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm mt-2 focus:border-blue-500 focus:bg-white focus:outline-none @error('start_date') is-invalid @enderror" value="{{ old('start_date', $agenda->start_date) }}" required>
                            @error('start_date')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                            @enderror
                            <p class="py-4 text-gray-500">sampai</p>
                            <input type="datetime-local" name="end_date" id="end_date" 
                            class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm mt-2 focus:border-blue-500 focus:bg-white focus:outline-none @error('end_date') is-invalid @enderror" value="{{ old('end_date', $agenda->end_date) }}"required>
                            @error('end_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </label>
                <label for="description" class="block text-sm my-5">
                    <span class="text-gray-700 mb-3">Deskripsi</span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 border focus:border-blue-500 focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description', $agenda->description) }}" required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full flex justify-end py-3">
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
        fetch("/admin/dataagenda/checkSlug?title=" + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug));
    });

    document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
    });

</script>

@endsection