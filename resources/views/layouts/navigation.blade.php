<nav x-data="{ open: false }" class="bg-white border-b-3 border-black">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="font-extrabold text-2xl uppercase tracking-tighter">
                        GENAU
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                    @if(Auth::user()->hasRole('admin'))
                        <a href="{{ route('admin.dashboard') }}" class="font-bold border-2 border-transparent hover:border-black hover:bg-neo-yellow px-3 py-2 transition {{ request()->routeIs('admin.dashboard') ? 'bg-neo-yellow border-black shadow-[2px_2px_0px_rgba(0,0,0,1)]' : '' }}">
                            Dashboard Admin
                        </a>
                        <a href="{{ route('admin.posts.index') }}" class="font-bold border-2 border-transparent hover:border-black hover:bg-neo-pink px-3 py-2 transition {{ request()->routeIs('admin.posts.*') ? 'bg-neo-pink border-black shadow-[2px_2px_0px_rgba(0,0,0,1)]' : '' }}">
                            Artikel & Modul
                        </a>
                        <a href="{{ route('admin.media.index') }}" class="font-bold border-2 border-transparent hover:border-black hover:bg-neo-cyan px-3 py-2 transition {{ request()->routeIs('admin.media.*') ? 'bg-neo-cyan border-black shadow-[2px_2px_0px_rgba(0,0,0,1)]' : '' }}">
                            Media
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" class="font-bold border-2 border-transparent hover:border-black hover:bg-neo-lime px-3 py-2 transition {{ request()->routeIs('dashboard') ? 'bg-neo-lime border-black shadow-[2px_2px_0px_rgba(0,0,0,1)]' : '' }}">
                            Beranda Siswa
                        </a>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 font-bold text-black border-2 border-black bg-white hover:bg-neo-purple shadow-[2px_2px_0px_rgba(0,0,0,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="font-bold border-b-2 border-black hover:bg-neo-yellow">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="font-bold hover:bg-neo-pink">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 border-2 border-black bg-neo-yellow hover:bg-neo-pink focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t-3 border-black bg-white">
        <div class="pt-2 pb-3 space-y-1">
             @if(Auth::user()->hasRole('admin'))
                <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" class="font-bold hover:bg-neo-yellow border-black">
                    Dashboard Admin
                </x-responsive-nav-link>
            @else
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="font-bold hover:bg-neo-lime border-black">
                    Beranda Siswa
                </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t-3 border-black bg-neo-cyan">
            <div class="px-4">
                <div class="font-bold text-base text-black">{{ Auth::user()->name }}</div>
                <div class="font-bold text-sm text-black">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="font-bold hover:bg-neo-yellow border-black">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="font-bold hover:bg-neo-pink border-black">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
