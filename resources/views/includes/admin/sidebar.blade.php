<div class="md:hidden">
    <div @click="sidemenu = false"
        class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300"
        :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}"></div>

    <div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full"
        :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">

        <div class="flex items-center px-6 py-3 h-16">
            <div class="text-2xl font-bold tracking-tight text-gray-800">Dashboard Admin.</div>
        </div>

        <div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
            <ul>
                <div class="text-base text-gray-400 font-bold flex px-2 py-2">Dashboard</div>
                <li>
                    <a href="{{ url('/admin') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dashboardadmin") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <rect x="4" y="4" width="6" height="6" rx="1" />
                            <rect x="14" y="4" width="6" height="6" rx="1" />
                            <rect x="4" y="14" width="6" height="6" rx="1" />
                            <rect x="14" y="14" width="6" height="6" rx="1" />
                        </svg>
                        Dashboard
                    </a>
                </li>
    
                <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data</div>
    
                <li>
                    <a href="{{ route('datawarga.index') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datawarga") ? 'active' : '' }}">
                        <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M544 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zM96 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zm396.4 210.9c-27.5-40.8-80.7-56-127.8-41.7-14.2 4.3-29.1 6.7-44.7 6.7s-30.5-2.4-44.7-6.7c-47.1-14.3-100.3.8-127.8 41.7-12.4 18.4-19.6 40.5-19.6 64.3V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-44.8c.2-23.8-7-45.9-19.4-64.3zM464 432H176v-44.8c0-36.4 29.2-66.2 65.4-67.2 25.5 10.6 51.9 16 78.6 16 26.7 0 53.1-5.4 78.6-16 36.2 1 65.4 30.7 65.4 67.2V432zm92-176h-24c-17.3 0-33.4 5.3-46.8 14.3 13.4 10.1 25.2 22.2 34.4 36.2 3.9-1.4 8-2.5 12.3-2.5h24c19.8 0 36 16.2 36 36 0 13.2 10.8 24 24 24s24-10.8 24-24c.1-46.3-37.6-84-83.9-84zm-236 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm0-176c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM154.8 270.3c-13.4-9-29.5-14.3-46.8-14.3H84c-46.3 0-84 37.7-84 84 0 13.2 10.8 24 24 24s24-10.8 24-24c0-19.8 16.2-36 36-36h24c4.4 0 8.5 1.1 12.3 2.5 9.3-14 21.1-26.1 34.5-36.2z"/></svg>
                        Data Warga
                    </a>
                </li>
    
                <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Penilaian</div>
    
                <li>
                    <a href="{{ route('dataevaluation.admin') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datapenilaian") ? 'active' : '' }}">
                        <svg class="mr-4 opacity-50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M32 32H16C7.16 32 0 39.16 0 48v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16zm315.31 112L336 132.69c-6.25-6.25-16.38-6.25-22.63 0L224 222.06l-89.38-89.38c-6.25-6.25-16.38-6.25-22.63 0L100.69 144c-6.25 6.25-6.25 16.38 0 22.63L190.06 256l-89.38 89.38c-6.25 6.25-6.25 16.38 0 22.63l11.32 11.3c6.25 6.25 16.38 6.25 22.63 0L224 289.94l89.38 89.38c6.25 6.25 16.38 6.25 22.63 0l11.3-11.32c6.25-6.25 6.25-16.38 0-22.63L257.94 256l89.38-89.38c6.24-6.24 6.24-16.38-.01-22.62zM432 32h-16c-8.84 0-16 7.16-16 16v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16z"/></svg>
                        Data Topic Penilaian
                    </a>
                </li>
    
                <li>
                    <a href="{{ route('dataevaluation.evaluate') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datahasilpenilaian") ? 'active' : '' }}">
                        <svg class="mr-4 opacity-50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M32 32H16C7.16 32 0 39.16 0 48v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16zm315.31 112L336 132.69c-6.25-6.25-16.38-6.25-22.63 0L224 222.06l-89.38-89.38c-6.25-6.25-16.38-6.25-22.63 0L100.69 144c-6.25 6.25-6.25 16.38 0 22.63L190.06 256l-89.38 89.38c-6.25 6.25-6.25 16.38 0 22.63l11.32 11.3c6.25 6.25 16.38 6.25 22.63 0L224 289.94l89.38 89.38c6.25 6.25 16.38 6.25 22.63 0l11.3-11.32c6.25-6.25 6.25-16.38 0-22.63L257.94 256l89.38-89.38c6.24-6.24 6.24-16.38-.01-22.62zM432 32h-16c-8.84 0-16 7.16-16 16v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16z"/></svg>
                        Data Hasil Penilaian
                    </a>
                </li>
    
                {{-- <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Agenda</div>
    
                <li>
                    <a href="{{ route('dataagenda.admin') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dataagenda") ? 'active' : '' }}">
                        <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M552 64H112c-20.858 0-38.643 13.377-45.248 32H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h496c13.255 0 24-10.745 24-24V88c0-13.255-10.745-24-24-24zM48 392V144h16v248c0 4.411-3.589 8-8 8s-8-3.589-8-8zm480 8H111.422c.374-2.614.578-5.283.578-8V112h416v288zM172 280h136c6.627 0 12-5.373 12-12v-96c0-6.627-5.373-12-12-12H172c-6.627 0-12 5.373-12 12v96c0 6.627 5.373 12 12 12zm28-80h80v40h-80v-40zm-40 140v-24c0-6.627 5.373-12 12-12h136c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H172c-6.627 0-12-5.373-12-12zm192 0v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0-144v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0 72v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12z"/></svg>
                        Data Agenda
                    </a>
                </li>
                --}}
                {{-- <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Keluhan</div>
    
                <li>
                    <a href="/admin/datakeluhan"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datakeluhan") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <polyline points="14 3 14 8 19 8" />
                            <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <line x1="9" y1="9" x2="10" y2="9" />
                            <line x1="9" y1="13" x2="15" y2="13" />
                            <line x1="9" y1="17" x2="15" y2="17" />
                        </svg>
                        Data Keluhan
                    </a>
                </li>
    
                <li>
                    <a href="{{ route('tanggapan.index') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datatanggapan") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <polyline points="14 3 14 8 19 8" />
                            <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                            <line x1="9" y1="9" x2="10" y2="9" />
                            <line x1="9" y1="13" x2="15" y2="13" />
                            <line x1="9" y1="17" x2="15" y2="17" />
                        </svg>
                        Data Tanggapan
                    </a>
                </li>
    
                <li>
                    <a href="#"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datadiskusi") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="12" cy="12" r="9" />
                            <polyline points="12 7 12 12 9 15" />
                        </svg>
                        Data Diskusi
                    </a>
                </li>
    
                <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Voting</div>
    
                <li>
                    <a href="{{ route('datavoting.index') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datavoting") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path
                                d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                            <line x1="8" y1="8" x2="12" y2="8" />
                            <line x1="8" y1="12" x2="12" y2="12" />
                            <line x1="8" y1="16" x2="12" y2="16" />
                        </svg>
                        Data Voting
                    </a>
                </li>
    
                <li>
                    <a href="{{ route('voting.summary') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "hasilvoting") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <path
                                d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                            <line x1="8" y1="8" x2="12" y2="8" />
                            <line x1="8" y1="12" x2="12" y2="12" />
                            <line x1="8" y1="16" x2="12" y2="16" />
                        </svg>
                        Hasil Voting
                    </a>
                </li> --}}
    
                <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Kategori</div>
    
                <li>
                    <a href="{{ route('datakategori.index') }}"
                        class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "kategori") ? 'active' : '' }}">
                        <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M80 48H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416-136H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V88a16 16 0 0 0-16-16z"/></svg>
                        Data Kategori
                    </a>
                </li>
            </ul>    
        </div>
    </div>
</div>


<div class="bg-white w-64 min-h-screen overflow-y-auto hover:overflow-y-auto hidden md:block shadow relative z-30">

    <div class="flex items-center px-6 py-3 h-16">
        <div class="text-xl font-bold tracking-tight text-gray-800">Dashboard Admin.</div>
    </div>

    <div class="px-4 py-2">
        <ul>
            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Dashboard</div>
            <li x-data="{ isActive: false, open: false}">
                <a href="{{ url('/admin') }}" class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dashboardadmin") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <rect x="4" y="4" width="6" height="6" rx="1" />
                        <rect x="14" y="4" width="6" height="6" rx="1" />
                        <rect x="4" y="14" width="6" height="6" rx="1" />
                        <rect x="14" y="14" width="6" height="6" rx="1" />
                    </svg>
                    Dashboard
                </a>
                {{-- <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboard">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <a href="{{ url('/admin') }}"
                    class="sidebar-navlink mb-1 px-10 py-2 rounded-lg flex items-center font-medium text-sm text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dashboardadmin") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="18" height="18"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <rect x="4" y="4" width="6" height="6" rx="1" />
                            <rect x="14" y="4" width="6" height="6" rx="1" />
                            <rect x="4" y="14" width="6" height="6" rx="1" />
                            <rect x="14" y="14" width="6" height="6" rx="1" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="{{ route('notifikasi.index') }}"
                    class="sidebar-navlink mb-1 px-10 py-2 rounded-lg flex items-center font-medium text-sm text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "notifikasi") ? 'active' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="18" height="18" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"><path d="M439.39 362.29c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71zM67.53 368c21.22-27.97 44.42-74.33 44.53-159.42 0-.2-.06-.38-.06-.58 0-61.86 50.14-112 112-112s112 50.14 112 112c0 .2-.06.38-.06.58.11 85.1 23.31 131.46 44.53 159.42H67.53zM224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64z"/></svg>                 
                        Notifikasi
                    </a>
                </div> --}}
            </li>

            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data</div>

            <li>
                <a href="{{ route('datawarga.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datawarga") ? 'active' : '' }}">
                    <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                    stroke-linejoin="round"><path d="M544 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zM96 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zm396.4 210.9c-27.5-40.8-80.7-56-127.8-41.7-14.2 4.3-29.1 6.7-44.7 6.7s-30.5-2.4-44.7-6.7c-47.1-14.3-100.3.8-127.8 41.7-12.4 18.4-19.6 40.5-19.6 64.3V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-44.8c.2-23.8-7-45.9-19.4-64.3zM464 432H176v-44.8c0-36.4 29.2-66.2 65.4-67.2 25.5 10.6 51.9 16 78.6 16 26.7 0 53.1-5.4 78.6-16 36.2 1 65.4 30.7 65.4 67.2V432zm92-176h-24c-17.3 0-33.4 5.3-46.8 14.3 13.4 10.1 25.2 22.2 34.4 36.2 3.9-1.4 8-2.5 12.3-2.5h24c19.8 0 36 16.2 36 36 0 13.2 10.8 24 24 24s24-10.8 24-24c.1-46.3-37.6-84-83.9-84zm-236 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm0-176c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM154.8 270.3c-13.4-9-29.5-14.3-46.8-14.3H84c-46.3 0-84 37.7-84 84 0 13.2 10.8 24 24 24s24-10.8 24-24c0-19.8 16.2-36 36-36h24c4.4 0 8.5 1.1 12.3 2.5 9.3-14 21.1-26.1 34.5-36.2z"/></svg>
                    Data Warga
                </a>
            </li>

            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Penilaian</div>

            <li>
                <a href="{{ route('dataevaluation.admin') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datapenilaian") ? 'active' : '' }}">
                    <svg class="mr-4 opacity-50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                    stroke-linejoin="round"><path d="M32 32H16C7.16 32 0 39.16 0 48v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16zm315.31 112L336 132.69c-6.25-6.25-16.38-6.25-22.63 0L224 222.06l-89.38-89.38c-6.25-6.25-16.38-6.25-22.63 0L100.69 144c-6.25 6.25-6.25 16.38 0 22.63L190.06 256l-89.38 89.38c-6.25 6.25-6.25 16.38 0 22.63l11.32 11.3c6.25 6.25 16.38 6.25 22.63 0L224 289.94l89.38 89.38c6.25 6.25 16.38 6.25 22.63 0l11.3-11.32c6.25-6.25 6.25-16.38 0-22.63L257.94 256l89.38-89.38c6.24-6.24 6.24-16.38-.01-22.62zM432 32h-16c-8.84 0-16 7.16-16 16v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16z"/></svg>
                    Data Topic Penilaian
                </a>
            </li>

            <li>
                <a href="{{ route('dataevaluation.evaluate') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datahasilpenilaian") ? 'active' : '' }}">
                    <svg class="mr-4 opacity-50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                    stroke-linejoin="round"><path d="M32 32H16C7.16 32 0 39.16 0 48v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16zm315.31 112L336 132.69c-6.25-6.25-16.38-6.25-22.63 0L224 222.06l-89.38-89.38c-6.25-6.25-16.38-6.25-22.63 0L100.69 144c-6.25 6.25-6.25 16.38 0 22.63L190.06 256l-89.38 89.38c-6.25 6.25-6.25 16.38 0 22.63l11.32 11.3c6.25 6.25 16.38 6.25 22.63 0L224 289.94l89.38 89.38c6.25 6.25 16.38 6.25 22.63 0l11.3-11.32c6.25-6.25 6.25-16.38 0-22.63L257.94 256l89.38-89.38c6.24-6.24 6.24-16.38-.01-22.62zM432 32h-16c-8.84 0-16 7.16-16 16v416c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16z"/></svg>
                    Data Hasil Penilaian
                </a>
            </li>

            {{-- <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Agenda</div>

            <li>
                <a href="{{ route('dataagenda.admin') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "dataagenda") ? 'active' : '' }}">
                    <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                    stroke-linejoin="round"><path d="M552 64H112c-20.858 0-38.643 13.377-45.248 32H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h496c13.255 0 24-10.745 24-24V88c0-13.255-10.745-24-24-24zM48 392V144h16v248c0 4.411-3.589 8-8 8s-8-3.589-8-8zm480 8H111.422c.374-2.614.578-5.283.578-8V112h416v288zM172 280h136c6.627 0 12-5.373 12-12v-96c0-6.627-5.373-12-12-12H172c-6.627 0-12 5.373-12 12v96c0 6.627 5.373 12 12 12zm28-80h80v40h-80v-40zm-40 140v-24c0-6.627 5.373-12 12-12h136c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H172c-6.627 0-12-5.373-12-12zm192 0v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0-144v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12zm0 72v-24c0-6.627 5.373-12 12-12h104c6.627 0 12 5.373 12 12v24c0 6.627-5.373 12-12 12H364c-6.627 0-12-5.373-12-12z"/></svg>
                    Data Agenda
                </a>
            </li> --}}

            {{-- <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Keluhan</div>

            <li>
                <a href="/admin/datakeluhan"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datakeluhan") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <polyline points="14 3 14 8 19 8" />
                        <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <line x1="9" y1="9" x2="10" y2="9" />
                        <line x1="9" y1="13" x2="15" y2="13" />
                        <line x1="9" y1="17" x2="15" y2="17" />
                    </svg>
                    Data Keluhan
                </a>
            </li>

            <li>
                <a href="{{ route('tanggapan.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datatanggapan") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <polyline points="14 3 14 8 19 8" />
                        <path d="M17 21H7a2 2 0 0 1 -2 -2V5a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <line x1="9" y1="9" x2="10" y2="9" />
                        <line x1="9" y1="13" x2="15" y2="13" />
                        <line x1="9" y1="17" x2="15" y2="17" />
                    </svg>
                    Data Tanggapan
                </a>
            </li>

            <li>
                <a href="#"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datadiskusi") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <circle cx="12" cy="12" r="9" />
                        <polyline points="12 7 12 12 9 15" />
                    </svg>
                    Data Diskusi
                </a>
            </li>

            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Voting</div>

            <li>
                <a href="{{ route('datavoting.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "datavoting") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path
                            d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <line x1="8" y1="8" x2="12" y2="8" />
                        <line x1="8" y1="12" x2="12" y2="12" />
                        <line x1="8" y1="16" x2="12" y2="16" />
                    </svg>
                    Data Voting
                </a>
            </li>

            <li>
                <a href="{{ route('voting.summary') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "hasilvoting") ? 'active' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                        <path
                            d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                        <line x1="8" y1="8" x2="12" y2="8" />
                        <line x1="8" y1="12" x2="12" y2="12" />
                        <line x1="8" y1="16" x2="12" y2="16" />
                    </svg>
                    Hasil Voting
                </a>
            </li> --}}

            <div class="text-base text-gray-400 font-bold flex px-2 py-2">Data Kategori</div>

            <li>
                <a href="{{ route('datakategori.index') }}"
                    class="sidebar-navlink mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200 {{ ($active === "kategori") ? 'active' : '' }}">
                    <svg class="mr-4 opacity-50" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" stroke-width="2" stroke="currentColor" fill="currentColor" stroke-linecap="round"
                    stroke-linejoin="round"><path d="M80 48H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416-136H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-16a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V88a16 16 0 0 0-16-16z"/></svg>
                    Data Kategori
                </a>
            </li>
        </ul>     
    </div>
</div>

