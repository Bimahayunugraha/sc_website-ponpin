{{-- <nav class="nav fixed-top opacity-95">
    <div class="container navigation max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="navbar-toggler pageinline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false" data-toggle="offcanvas">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:block h-8 w-auto mr-3"
                        src="https://cdn-icons-png.flaticon.com/512/2533/2533563.png" alt="Workflow">
                    <a class="{{ $active === 'home' ? 'active' : '' }} inline-block mr-4 py-0.5 text-xl text-white whitespace-nowrap hover:no-underline focus:no-underline page-scroll"
                        href="/">
                        Warmindo
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/"
                            class="nav-link page-scroll hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium page-scroll {{ $active === 'home' ? 'active' : '' }}"
                            aria-current="page">Home</a>

                        <a href="/menus"
                            class="nav-link page-scroll text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium page-scroll {{ $active === 'menus' ? 'active' : '' }}">Menu</a>
                        <a href="/categories"
                            class="nav-link page-scroll {{ $active === 'categories' ? 'active' : '' }} text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium page-scroll">Categories</a>

                        <a href="/about"
                            class="nav-link page-scroll text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium page-scroll {{ $active === 'about' ? 'active' : '' }}">About</a>

                        <a href="/privacy"
                            class="nav-link page-scroll text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium page-scroll {{ $active === 'privacy' ? 'active' : '' }}">Privacy</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                @auth
                    <!-- Profile dropdown -->
                    <div class="ml-3 relative"  x-data="{ open: false }" x-cloak>
                        <div>
                            <button type="button" id="dropdownButton" data-dropdown-toggle="dropdown"
                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </button>
                        </div>
                        <div x-show.transition="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                            id="dropdown-id">
                            <a href="/dashboard"
                                class="block hover:bg-gray-100 px-4 py-2 text-md font-bold text-gray-800 border-b border-gray-200">Sign
                                in as {{ Auth::user()->name }}</a>
                            <a href="{{ url('/') }}" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Home Page</a>
                            <a href="#" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700" role="menuitem"
                                tabindex="-1" id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700 border-b"
                                role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</button>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="ml-3 relative space-x-4">
                        <a href="/register"
                            class="navbar-link page-scroll text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ $active === 'register' ? 'active' : '' }}">Register</a>
                        <a href="/login"
                            class="navbar-link page-scroll text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ $active === 'login' ? 'active' : '' }}">Login</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="collapse navbar-collapse md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                aria-current="page">Dashboard</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</nav> --}}


<header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4 text-slate-900">
                <a href="/" class="font-bold text-lg block py-6">
                    <i class="far fa-bullhorn"></i> Sistem Aplikasi Warga
                </a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium {{ ($active === "home") ? 'active' : '' }}"><span class="lg:hidden pr-3 "><i class="far fa-home-alt"></i></span> Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/user/keluhan" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium {{ ($active === "keluhan") ? 'active' : '' }}"><span class="lg:hidden pr-3 "><i class="fal fa-user-md-chat"></i></span> Keluhan</a>
                        </li>
                        <li class="group">
                            <a href="/" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium"><span class="lg:hidden pr-3 "><i class="fal fa-value-absolute"></i></span> Penilaian</a>
                        </li>
                        <li class="group">
                            <a href="/user/diskusi" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium"><span class="lg:hidden pr-3"><i class="far fa-comments"></i></span> Diskusi</a>
                        </li>
                        <li class="border border-r-slate-600"></li>
                        @auth
                        <li>
                            <div class="relative px-3 py-2 sm:py-2 md:py-2 lg:py-1 mx-2" x-data="{ open: false }" x-cloak>
                                <div>
                                    <button type="button" id="dropdownButton" data-dropdown-toggle="dropdown"
                                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src=""
                                            alt=""><i class="fas fa-alien-monster"></i>
                                    </button>
                                </div>
                                <div x-show.transition="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                                    id="dropdown-id">
                                    <h4 href="/dashboard"
                                        class="block hover:bg-gray-100 px-4 py-2 text-md font-bold text-gray-800 border-b border-gray-200">Sign
                                        in as {{ Auth::user()->name }}</h4>
                                    <a href="{{ url('/') }}" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Home Page</a>
                                    <a href="#" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700 border-b"
                                        role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        @else
                        <li class="group">
                            <a href="/" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium"><span class="lg:hidden pr-3 "><i class="fal fa-vote-nay"></i></span> Sign up</a>
                        </li>
                        <li class="group">
                            <a href="/login" class="nav-li text-base text-slate-800 px-3 py-2 mx-2 flex group-hover:text-white group-hover:bg-sky-400 rounded-md font-medium {{ ($active === "login") ? 'active' : '' }}"><span class="lg:hidden pr-3 "><i class="fal fa-vote-nay"></i></span> Login</a>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
