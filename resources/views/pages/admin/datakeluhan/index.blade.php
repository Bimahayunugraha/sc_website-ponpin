@extends('layouts.admin')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex items-center justify-between my-6 ">
            <h2 class="text-xl font-bold text-gray-800">Data Keluhan</h2>

            <a href="{{ url('admin/kategorikeluhan/create') }}"
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
                            <th class="px-4 py-3 uppercase">Gambar</th>
                            <th class="px-4 py-3 uppercase">Nama Warga</th>
                            <th class="px-4 py-3 uppercase">Tanggal Pengajuan</th>
                            <th class="px-4 py-3 uppercase">Status</th>
                            <th class="px-4 py-3 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @forelse ($keluhan as $keluhan)
                            <tr class="text-gray-700 dark:text-gray-400 ">
                                <td class="px-4 py-3 object-cover">
                                    @if ($keluhan->image)
                                    <img class=" h-8 w-10 " src="{{ asset('storage/' . $keluhan->image) }}" alt="" loading="lazy" />
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $keluhan->user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $keluhan->created_at->format('l, d F Y - H:i:s') }}
                                </td>
                                @if($keluhan->status =='Belum di Proses')
                                <td class="px-4 py-3 text-sm">
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                                    {{ $keluhan->status }}
                                    </span>
                                </td>
                                @elseif ($keluhan->status =='Sedang di Proses')
                                <td class="px-4 py-3 text-sm">
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                                    {{ $keluhan->status }}
                                    </span>
                                </td>
                                @else
                                <td class="px-4 py-3 text-sm">
                                    <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                                    {{ $keluhan->status }}
                                    </span>
                                </td>
                                @endif
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        @if ($keluhan->status == 'terkirim')
                                            <a href="{{ route('datakeluhan.proses', $keluhan->id )}}" class="bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="fas fa-keyboard"></i> Diproses</a>
                                        @elseif($keluhan->status == 'proses')
                                            <a href="{{ route('datakeluhan.selesai', $keluhan->id )}}" class="bg-orange-400 hover:bg-orange-700 focus:bg-orange-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="fas fa-check"></i> Selesaikan</a>
                                        @else
                                            
                                        @endif
                                        <a href="{{ route('datakeluhan.detail', $keluhan->id )}}" class="bg-lime-400 hover:bg-lime-700 focus:bg-lime-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="fas fa-check"></i> Detail</a>
                                 
                                    </div>
                                </td>

                            </tr>
                            @push('page-scripts')
                                <script src="{{ asset('node_modules/sweetalert/dist/sweetalert.min.js')}}"></script>

                                @endpush
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