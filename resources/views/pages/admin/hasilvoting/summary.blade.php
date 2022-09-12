@extends('layouts.admin')

@section('content')
<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <div class="flex items-center justify-between my-6 ">
            <h2 class="text-xl font-bold text-gray-800">Hasil Voting</h2>
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
                            <th class="px-4 py-3 uppercase">No Urut</th>
                            <th class="px-4 py-3 uppercase">Gambar</th>
                            <th class="px-4 py-3 uppercase">Nama</th>
                            <th class="px-4 py-3 uppercase">Wakil</th>
                            <th class="px-4 py-3 uppercase">Jumlah Suara</th>
                            <th class="px-4 py-3 uppercase">Persentase</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @forelse ($candidates as $candidate)
                            <tr class="text-gray-700 dark:text-gray-400 ">
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidate->id }}
                                </td>
                                <td class="px-4 py-3 object-cover">
                                    @if ($candidate->image)
                                    <img class=" h-8 w-10 " src="{{ asset('storage/' . $candidate->image) }}" alt="" loading="lazy" />
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidate->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidate->vice_name }}
                                </td>                               
                                <td class="px-4 py-3 text-sm">
                                    {{ $candidate->users->count() }}
                                </td>                                      
                                <td class="px-4 py-3 text-sm">
                                    {{ number_format(($candidate->users->count()/$jumlah)*100) }} %
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