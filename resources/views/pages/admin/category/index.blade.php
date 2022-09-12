@extends('layouts.admin')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="flex items-center justify-between bg-white px-6 py-3">
            <h2 class="text-xl font-bold text-gray-800">Data Kategori</h2>
            <a href="{{ route('datakategori.create') }}"
                class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline 
                text-white font-semibold py-2 px-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <line x1="12" y1="5" x2="12" y2="19" />
                    <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
            </a>
        </div>
        <div class="container grid px-6 mx-auto py-6">
            <div class="w-full mb-8 overflow-hidden rounded-lg border border-gray-200 shadow-sm">
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
                                <th class="px-4 py-3">Nama Kategori</th>
                                <th class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @forelse ($categories as $category)
                                <tr class="text-gray-700 dark:text-gray-400 ">
                                    <td class="px-4 py-3 text-sm">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <form onsubmit="return confirm('Yakin data {{ $category->name }} ingin dihapus?')" action="{{ route('datakategori.destroy',['id'=>$category->id])}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" 
                                                class="bg-red-400 hover:bg-red-700 focus:bg-red-700 text-white rounded-lg px-3 py-3 font-semibold"><i
                                                    class="fas fa-trash-alt"></i></button>
                                            </form>      
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
        @if (session()->has('success-add'))
            <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer px-2 flex items-center opacity-90 justify-between w-full p-2 bg-yellow-500 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="fas fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-add') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>

                </button>
            </label>
        </div>
        @elseif (session()->has('success-delete'))
        <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">
            <label
                class="close cursor-pointer flex items-center opacity-90 justify-between w-full p-2 bg-red-700 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="far fa-trash-alt"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success-delete') }}
                </span>
                <button
                    class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none">
                    <span>×</span>
                </button>
            </label>
        </div>
        @endif
    </main>
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".alert-toast").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 2500);
        });
    </script>
@endsection
