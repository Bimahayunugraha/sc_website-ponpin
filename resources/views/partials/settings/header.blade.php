<header class="pt-28 pb-5 w-full">
    <div class="container mx-auto">
        <div class="lg:w-8/12 flex flex-wrap items-center p-4 md:py-8">

            <div class="md:w-3/12 md:ml-16">
              <!-- profile image -->
              <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                           border-2 border-pink-600 p-1" src="{{ asset('img/user-settings.png') }}" alt="profile">
            </div>
      
            <!-- profile meta -->
            <div class="w-8/12 md:w-7/12 ml-4">
              <div class="md:flex md:flex-wrap md:items-center">
                <h2 class="text-3xl inline-block font-bold text-slate-700 dark:text-white md:mr-2 sm:mb-0">
                  User Settings
                </h2>
              </div>
      
              <!-- user meta form medium screens -->
              <div class="hidden md:block mt-4">
                <h1 class="font-semibold text-slate-700 dark:text-slate-400">Selamat datang {{ $user->name }}</h1>
                <span class="font-light text-basic text-slate-700 dark:text-slate-400">Anda dapat mengatur akun dan setting disini.</span>
              </div>
      
            </div>
      
            <!-- user meta form small screens -->
            <div class="md:hidden text-sm my-2">
              <h1 class="font-semibold text-slate-700 dark:text-slate-400">Selamat datang {{ $user->name }}</h1>
              <span class="font-light text-basic text-slate-700 dark:text-slate-400">Anda dapat mengatur akun dan setting disini.</span>
            </div>
      
          </div>
        {{-- <div id="nav-set">
            <ul class="mt-3 flex border-b border-gray-300 px-6 text-sm font-medium text-gray-600 md:px-0">
                <li class="mr-8 text-gray-900"><a href="{{ route('user.profile') }}"
                        class="nav-settings {{ $active === 'profile' ? 'active' : '' }} inline-block py-4">Profile</a>
                </li>
                <li class="mr-8 hover:text-gray-900"><a href="{{ route('user.settings') }}"
                        class="nav-settings inline-block py-4 {{ $active === 'settings' ? 'active' : '' }}">Settings</a></li>
            </ul>
        </div> --}}
        <ul class="flex items-center justify-around md:justify-center space-x-12  
                    uppercase tracking-widest font-semibold text-xs text-gray-600
                    border-t">
            <li>
            <a class="nav-settings inline-block p-3 {{ $active === 'profile' ? 'active' : '' }}" href="{{ route('user.profile') }}">
                <i class="fas fa-user border border-gray-500 dark:border-white
                px-1 pt-0 rounded text-xl md:text-xs"></i>
                <span class="hidden md:inline">Akun</span>
            </a>
            </li>
            <li>
            <a class="nav-settings inline-block p-3 {{ $active === 'settings' ? 'active' : '' }}" href="{{ route('user.settings') }}">
                <i class="fas fa-cog text-xl md:text-xs"></i>
                <span class="hidden md:inline">Settings</span>
            </a>
            </li>
        </ul>
    </div>
</header>