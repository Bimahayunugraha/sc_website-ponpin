<div
    class="flex h-16 items-center justify-between border-b border-gray-200 bg-white px-4 py-2 md:px-8">
    <div class="flex w-2/3 items-center">

        <div class="cursor-pointer rounded-full p-2 hover:bg-gray-200 md:hidden"
            @click="sidemenu = !sidemenu">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>
        <div
            class="ml-2 text-sm font-bold tracking-tight text-gray-800 sm:text-sm md:hidden md:text-sm lg:text-xl">
            Dashboard Admin.</div>
    </div>
    <div class="flex items-center">
        {{-- <div x-data="{ dropdownOpen: false }">
            <button type="button" @click="dropdownOpen = !dropdownOpen"
                class="mr-4 cursor-pointer rounded-full p-2 text-xl text-gray-500 hover:text-blue-600">
                <span class="relative mt-2 inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path
                            d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                    </svg>
                    @if (count(auth()->user()->unreadNotifications))
                        <span
                            class="absolute top-0 right-0 transform rounded-full bg-red-600 px-2 py-1 text-xs font-bold leading-none text-white">{{ count(auth()->user()->unreadNotifications) }}
                        </span>
                    @endif
                </span>
            </button>
            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                class="fixed inset-0 z-10 h-full w-full"></div>

            <div x-show="dropdownOpen"
                class="absolute top-0 right-0 z-40 mt-14 mr-10 overflow-y-auto overflow-x-hidden rounded-md bg-white shadow-lg"
                style="width:20rem;height:14.3rem;">
                <div class="py-2">
                    @forelse (auth()->user()->unreadNotifications as $notification)
                        <div class="flex">
                            <div class="mr-3 flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mt-4 ml-4"
                                    width="18" height="18" viewBox="0 0 448 512" stroke-width="2"
                                    stroke="currentColor" fill="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z" />
                                </svg>
                            </div>
                            <div class="flex items-center border-b px-4 py-3 hover:bg-gray-100">
                                <div class="mx-0 text-sm text-gray-600">
                                    <span class="font-bold"
                                        href="#">{{ $notification->data['user_id'] }}</span> telah
                                    memberikan penilaian pada kategori <span
                                        class="font-bold text-blue-500">{{ $notification->data['category_id'] }}</span>
                                    <p class="mt-2 font-medium text-slate-800">
                                        {{ $notification->created_at->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="flex items-center">
                                    <a href="" class="mark-as-read" data-id="{{ $notification->id }}">
                                        <i class="fas fa-check-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="-mx-2 flex items-center px-4 py-3 hover:bg-gray-100">
                            <p class="mx-2 text-sm text-gray-600">
                                <span class="font-bold">Tidak ada notifikasi</span>
                            </p>
                        </div>
                    @endforelse
                </div>
                <div class="mt-16 pt-16">
                    <a href="{{ route('notifikasi.index') }}"
                    class="fixed bg-gray-800 py-2 text-center font-bold text-white rounded-b-md" style="width:20rem;">Lihat semua
                    notifikasi</a>
                </div>
            </div>
        </div> --}}
        @auth
            <div class="relative" x-data="{ open: false }" x-cloak>
                <div @click="open = !open"
                    class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full bg-blue-200 dark:bg-gray-700 font-bold text-blue-600">
                    <img class="h-8 w-8 rounded-full"src="{{ asset('img/user.png') }}" alt="">
                </div>

                <div x-show.transition="open" @click.away="open = false"
                    class="absolute top-0 right-0 z-40 mt-12 w-48 rounded-lg bg-white py-2 shadow-md">
                    <h4
                        class="block border-b border-gray-200 px-4 py-2 text-gray-600 hover:bg-gray-100">
                        Welcome back, {{ Auth::user()->name }} <br> As {{ Auth::user()->roles }}
                    </h4>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit"
                            class="block w-full justify-start px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600"><i
                                class="far fa-sign-out"></i> logout</button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</div>
