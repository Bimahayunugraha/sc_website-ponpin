@extends('layouts.admin')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="flex items-center justify-between bg-white px-6 py-3">
        <h2 class="text-sm sm:text-sm md:text-sm lg:text-xl font-semibold text-gray-700">
            Edit Data Topik Penilaian
        </h2>  
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <a href="{{ route('dataevaluation.admin') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 
                focus:text-blue-700">
                <i class="fal fa-arrow-alt-left mr-2"></i>
                Back
            </a>
            <a href="{{ route('dataevaluation.create') }}"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 
                focus:text-blue-700">
                <i class="far fa-plus mr-2"></i>
                Tambah
            </a>
        </div>
    </div>
    <div class="container px-6 py-6 mx-auto grid">
        <form action="{{ route('dataevaluation.update',['id'=>$topic->id]) }}" method="post">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                <label for="category" class="block mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Kategori
                    </span>
                    <select id="category_id" name="category_id"
                      class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('category_id') is-invalid @enderror" value="{{ old('category_id') }}"
                    >
                    <option>Pilih kategori penilaian</option>
                    @foreach ($category as $category)
                        @if (old('category_id', $topic->category_id) == $category->id)  
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                    </select>
                </label>
                <label for="description" class="block text-sm my-2">
                    <span class="text-gray-700 mb-3">Deskripsi</span>
                    <input type="hidden" name="description" id="description" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 
                        focus:bg-white focus:outline-none @error('description') is-invalid border-red-500 @enderror" value="{{ old('description', $topic->description) }}" required>
                    <trix-editor input="description"></trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full flex justify-end py-3">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white 
                    rounded-lg px-3 py-3 font-semibold">Update</button>
                </div>
            </div> 
        </form>
    </div>
</main>
@endsection