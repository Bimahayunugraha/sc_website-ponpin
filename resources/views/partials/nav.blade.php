<!-- Header Area wrapper Starts -->
<header id="header-wrap" class="relative">
    <!-- Navbar Start -->
    <div class="navigation bg-transparent absolute top-0 left-0 w-full z-30 duration-300">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <a href="/" class="navbar-brand flex flex-wrap items-center">
                    <div>
                        <img src="{{ asset('img/ic.png') }}" class="w-10 h-10" alt="Logo">
                    </div>
                    <p class="pl-3 text-slate-400 font-bold dark:text-white">PonPin</p>
                </a>
                <div class="flex items-center">
                    <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-full left-0 mt-full right-4 bg-white dark:bg-dark dark:shadow-slate-600 z-20 px-5 py-3 w-full lg:max-w-full lg:static lg:bg-transparent lg:dark:bg-transparent lg:shadow-none"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                            <li class="nav-item group">
                                <a class="page-scroll group-hover:text-white dark:text-white group-hover:bg-sky-500 dark:group-hover:bg-slate-800 rounded-md font-medium px-3 mx-2 {{ ($active === "home") ? 'active' : '' }}" href="/user"><i class="fas fa-th-large lg:hidden mr-3"></i> Home</a>
                            </li>
                            <li class="nav-item group">
                                <a class="page-scroll group-hover:text-white dark:text-white group-hover:bg-sky-500 dark:group-hover:bg-slate-800 rounded-md font-medium px-3 mx-2 {{ ($active === "penilaian") ? 'active' : '' }}" href="/penilaian"><i class="fas fa-value-absolute lg:hidden mr-3"></i> Penilaian</a>
                            </li>
                            {{-- <li class="nav-item group">
                                <a class="page-scroll group-hover:text-white dark:text-white group-hover:bg-sky-500 dark:group-hover:bg-slate-800 rounded-md font-medium px-3 mx-2 {{ ($active === "hasilpenilaian") ? 'active' : '' }}" href="{{ route('result') }}"><i class="fas fa-poll lg:hidden mr-3"></i> Hasil Penilaian</a>
                            </li> --}}
                            {{-- <li class="nav-item group">
                                <a class="page-scroll group-hover:text-white dark:text-white group-hover:bg-sky-500 dark:group-hover:bg-slate-800 rounded-md font-medium px-3 mx-2 {{ ($active === "agenda") ? 'active' : '' }}" href="/agenda"><i class="fas fa-calendar-alt lg:hidden mr-3"></i> Agenda</a>
                            </li> --}}
                            @auth
                            {{-- <li class="nav-item group">
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
                            </li> --}}
                            <li class="nav-item group hidden md:hidden lg:block">
                                <div class="px-3 py-2 sm:py-2 md:py-2 lg:py-1 mx-2">            
                                    <div class="relative" x-data="{ open: false }" x-cloak>
                                        <div>
                                            <button type="button" id="dropdownButton" data-dropdown-toggle="dropdown"
                                                class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                                id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="open = !open">
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full"
                                                    src="{{ asset('img/user.png') }}"
                                                    alt=""><i class="fas fa-alien-monster"></i>
                                            </button>
                                        </div>
                                        <div x-show.transition="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-lg shadow-lg py-1 bg-white dark:bg-dark dark:shadow-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none"
                                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                                            id="dropdown-id">
                                            <h4 class="block hover:bg-gray-100 px-4 py-2 text-md font-bold text-gray-800 dark:text-white dark:hover:bg-gray-800">Sign
                                                in as {{ Auth::user()->name }}</h4>
                                            <div class="flex flex-wrap items-center px-4 py-4 border-b border-gray-200">
                                                <div>
                                                    <img src="{{ asset('img/profile.png') }}" class="w-6 h-6" alt="Logo">
                                                </div>
                                                <p class="pl-3 text-base font-bold tracking-tight text-gray-800 dark:text-white">{{ Auth::user()->roles }}</p>
                                            </div>
                                            <a href="{{ route('user.profile') }}" class="block hover:bg-gray-100 px-4 py-2 text-sm text-gray-700 font-medium dark:text-gray-400 dark:hover:bg-gray-800" role="menuitem"
                                                tabindex="-1" id="user-menu-item-0"><i class="fas fa-cog mr-3"></i> Settings</a>
                                            <form action="/logout" method="post">
                                                @csrf
                                                <button type="submit" class="block w-full hover:bg-gray-100 px-4 py-2 text-sm text-gray-700 dark:text-gray-400 dark:hover:bg-gray-800"
                                                    role="menuitem" tabindex="-1" id="user-menu-item-2"><i class="far fa-sign-out mr-3"></i> Sign out</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item group">
                                <div class="md:hidden" id="mobile-menu">
                                    <div class="pt-8 pb-0 my-3 border-t border-gray-700">
                                      <div class="flex items-center px-5">
                                        <div class="flex-shrink-0">
                                          <img class="h-10 w-10 rounded-full" src="{{ asset('img/user.png') }}" alt="">
                                        </div>
                                        <div class="ml-3">
                                          <div class="text-base font-medium leading-none text-gray-800 dark:text-white">Sign
                                            in as {{ Auth::user()->name }}</div>
                                        </div>
                                      </div>
                                      <div class="mt-3 px-2 space-y-1">                               
                                        {{-- {{-- <a href="#" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100 text-gray-700 hover:text-gray-800">Profile</a> --}}
                              
                                        <a href="{{ route('user.profile') }}" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100 text-gray-700 hover:text-gray-800 dark:text-gray-400 dark:hover:bg-gray-800"><i class="fas fa-cog mr-3"></i> Settings</a>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" href="#" class="block w-full px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-400"><i class="far fa-sign-out mr-3"></i> Sign out</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </li>              
                            @else            
                            <li class="nav-item group">
                                <a class="page-scroll group-hover:text-white dark:text-white  group-hover:bg-sky-400 rounded-md font-medium px-3 mx-2 {{ ($active === "login") ? 'active' : '' }}"
                                href="{{ url('login') }}">Login</a>
                            </li>       
                            {{-- <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li class="nav-item group">
                                    <button type="submit"class="page-scroll">logout</button>
                                </li> 
                            </form>    --}}
                            @endauth   
                            {{-- <li class="nav-item group page-scroll">
                                <div class="hidden md:hidden lg:block">
                                    <div class="flex items-center">
                                        <span class="px-3 text-sm text-slate-500 dark:text-white"><i class="far fa-sun"></i></span> 
                                        <input type="checkbox" class="hidden" id="dark-toggle" />
                                        <label for="dark-toggle">
                                            <div class="w-12 py-1 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                                <div class="toggle-circle h-4 w-4 rounded-full bg-white duration-300 ease-in-out"></div>
                                            </div>
                                        </label>
                                        <span class="px-3 mr-2 text-sm text-slate-500 dark:text-white"><i class="far fa-moon"></i></span> 
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>             
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->
