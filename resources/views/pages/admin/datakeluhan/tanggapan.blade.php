@extends('layouts.admin')

@section('content')
<main class="h-full py-24 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 uppercase">
            Berikan Tanggapan
        </h2>     
        <form action="{{ route('tanggapan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
                {{-- <input type="hidden" id="keluhan_id" name="keluhan_id" value="{{ $keluhans->id }} "> --}}
                <input type="hidden" name="id" value="{{ $data->id }}">
                <label for="tanggapan" class="block text-sm my-2">
                    <span class="text-gray-700">Tanggapan</span>
                    <input type="hidden" name="tanggapan" id="tanggapan" 
                        class="block px-4 w-full py-2 text-sm rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none @error('tanggapan') is-invalid border-red-500 @enderror" value="{{ old('tanggapan') }}" required>
                    <trix-editor input="tanggapan"></trix-editor>
                    @error('tanggapan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <div class="w-full px-3 flex justify-end">
                    <button type="submit" class="block bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Tanggapi</button>
                </div>
            </div> 
        </form>
    </div>
</main>
@endsection