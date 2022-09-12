@extends('layouts.admin')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex items-center justify-between my-6 ">
            <h2 class="text-xl font-bold text-gray-800">Data Voting</h2>

            <a href="{{ route('datacandidate.create') }}"
                class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                Tambah Voting
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
                            <th class="px-4 py-3 uppercase">Nama</th>
                            <th class="px-4 py-3 uppercase">Wakil</th>
                            <th class="px-4 py-3 uppercase">Judul</th>
                            <th class="px-4 py-3 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @forelse ($candidates as $candidates)
                            <tr class="text-gray-700 dark:text-gray-400 ">
                                <td class="px-4 py-3 object-cover">
                                    @if ($candidates->image)
                                    <img class=" h-8 w-10 " src="{{ asset('storage/' . $candidates->image) }}" alt="" loading="lazy" />
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidates->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidates->vice_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidates->title }}
                                </td>                       
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        @if($candidates->status == 'Vote dibuka')
                                            <a href="{{ route('voting.tutup', $candidates->id )}}" class="bg-orange-400 hover:bg-orange-700 focus:bg-orange-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="fas fa-check"></i> Tutup voting</a>
                                        @else
                                            
                                        @endif
                                        <a href="{{ route('datavoting.edit', $candidates->id) }}" class="bg-sky-400 hover:bg-sky-700 focus:bg-sky-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="fas fa-check"></i> Edit</a>
                                 
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