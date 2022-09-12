@extends('layouts.admin')

@section('content')
    <main class="h-full w-full overflow-y-auto">
        <div class="mx-auto">
            <div class="flex items-center bg-white px-6 py-3">
                <h2 class="text-xl font-bold text-gray-800">Semua Notifikasi</h2>
            </div>
            <div class="container grid px-6 py-6">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Notifikasi Yang Belum Dibaca
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Detail semua notifikasi penilaian warga.
                        </p>
                    </div>
                    @forelse ($notifications as $notification) 
                    <div>
                        <dl>
                            <div class="notification bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list"
                                        class="flex w-full">
                                        <div class="flex-shrink-0 mr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-2 mr-4" width="18" height="18" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round"><path d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"/></svg>                 
                                        </div>
                                        <li
                                            class="flex w-full items-center justify-between py-3 pl-3 pr-4 text-sm  border border-gray-200 rounded-md">
                                            <div class="flex w-full flex-1 items-center">
                                                <span class="ml-2 w-full flex-1">
                                                <span class="font-bold" href="#">{{ $notification->data['user_id'] }}</span> telah memberikan penilaian pada kategori <span class="font-bold text-blue-500">{{ $notification->data['category_id'] }}</span>
                                                <p class="font-medium text-slate-800 mt-2">
                                                    {{ $notification->created_at->diffForHumans() }}
                                                </p></span>
                                            </div>
                                            <button type="submit" class="mark-as-read ml-4 flex-shrink-0 justify-end hover:text-blue-500" data-id="{{ $notification->id }}">
                                                <i class="fas fa-check-circle"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        @if($loop->last)
                            <a href="#" id="mark-all" class="text-blue-500">
                                Tandai semua telah di baca
                            </a>
                        @endif
                    </div>
                    @empty
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    Tidak ada notifikasi
                                </dd>
                            </div>
                        </dl>
                    </div>
                    @endforelse
                    <div class="px-4 py-3 bg-gray-100">
                        {{$notifications->links()}}
                    </div>
                </div>
            </div>
        </div>
        @if (session()->has('success'))
        <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 md:w-full max-w-md"
            role="alert">

            <label
                class="close cursor-pointer px-2 flex items-center opacity-90 justify-between w-full p-2 bg-yellow-500 font-medium rounded shadow-lg text-white"
                title="close" for="footertoast">
                <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="fas fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success') }}
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
        function sendMarkRequest(id = null){
          return $.ajax("admin/notifikasi/markread", {
            method: 'post',
            data: {
              _token: "{{ csrf_token() }}",
              id
            }
          });
        }
        $(function(){
          $('.mark-as-read').click(function(){
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
              $(this).parents('div.notification').remove();
            });
          });
          $('#mark-all').click(function(){
            let request = sendMarkRequest();
            request.done(() => {
              $('div.notification').remove();
            })
          });
        });
    </script>
@endsection



{{-- @parent
@if(auth()->user())
    <script>
        function sendMarkRequest(id = null) {
            return $.ajax("admin/semuanotifikasi/mark-as-read", {
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id
                }
            });
        }
        $(function() {
            $('.mark-as-read').click(function() {
                let request = sendMarkRequest($(this).data('id'));
                request.done(() => {
                    $(this).parents('div.notifikasi').remove();
                });
            });
            $('#mark-all').click(function() {
                let request = sendMarkRequest();
                request.done(() => {
                    $('div.notifikasi').remove();
                })
            });
        });
    </script>
@endif --}}
