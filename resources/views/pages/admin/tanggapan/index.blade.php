@extends('layouts.admin')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex items-center justify-between my-6 ">
            <h2 class="text-xl font-bold text-gray-800">Data Tanggapan</h2>

            <a href="/admin/tanggapan"
                class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                Create Invoice
            </a>
        </div>


        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                            <th class="px-4 py-3 uppercase">No</th>
                            <th class="px-4 py-3 uppercase">Judul Keluhan</th>
                            <th class="px-4 py-3 uppercase">Tanggapan</th>
                            <th class="px-4 py-3 uppercase">Tanggal Tanggapan</th>
                            <th class="px-4 py-3 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                            @php
                                $no = 1
                            @endphp
                        @forelse ($tanggapan as $tanggapan)
                            <tr class="text-gray-700 dark:text-gray-400 ">
                                <td class="px-4 py-3 object-cover">
                                    {{ $no++ }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $tanggapan->keluhan->title }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $tanggapan->tanggapan }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $tanggapan->created_at->format('l, d F Y - H:i:s') }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">

                                        <a href="/admin/tanggapan/{{ $tanggapan->id }}/edit"
                                            class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Detail">

                                            <svg class="w-5 h-5" aria-hidden="true" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-gray-400">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>
@endsection