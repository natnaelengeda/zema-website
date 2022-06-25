<nav x-data="{ open: false }" class=" border-b border-gray-100 shadow-md pt-8 md:pt-0 bg-maincolor fixed w-full z-40">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/sessionart">
                        
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600 shadow-xl" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @if(Session::has('page'))
                       
                    @else
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        <div class="flex items-center justify-evenly gap-2">
                         <x-home-icon class="t"/> {{ __('Home') }}
                        </div>
                     </x-nav-link>
 
                     <x-nav-link :href="route('news')" :active="request()->routeIs('news')">
                         <div class="flex items-center justify-evenly gap-2"> 
                             <x-news-icon class=""/> {{ __('News') }}
                            </div>
                     </x-nav-link>
                     
                     <x-nav-link :href="route('artist')" :active="request()->routeIs('artist')">
                         <div class="flex items-center justify-evenly gap-2">
                             <x-artist-icon class=""/> {{ __('Artist') }}
                            </div>
                     </x-nav-link>

                     <x-nav-link :href="route('album')" :active="request()->routeIs('album')">
                        <div class="flex items-center justify-evenly gap-2">
                            <x-album-icon/> {{ __('Album') }}
                           </div>
                    </x-nav-link>
 
                     <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                         <div class="flex items-center justify-evenly gap-2">
                             <x-about-icon class=""/> {{ __('About') }}
                            </div>
                     </x-nav-link>
                    @endif
                       
                </div>
                
            </div>
            @if(Session::has('page'))
            @if(!Auth::guard('Artist')->check())
            <div class=" mr-56 flex items-center">
                <button id="artlog"  class="w-20 p-1 border-maincolor border-2 rounded-3xl text-lg hover:text-white hover:bg-maincolor">Login</button>       
             </div>
            @endif 
            @endif

            <!-- Settings Dropdown -->
            {{-- @if(Session::has('login_Artist_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
            {{-- {{ Auth::guard('Artist')->name }} --}}
            {{-- @endif  --}}

            

            @if(Session::has('page'))
            
                 {{-- Account Option For Artists --}}
                 @if (Auth::guard('Artist')->check())
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    
                                    <div>{{ Auth::guard('Artist')->user()->fname }} {{ Auth::guard('Artist')->user()->lname}}</div>
                                    
                                    
                                    {{-- @guest 
                                    <div>Account</div>
                                    @endguest --}}
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                        <x-slot name="content">
                   
                   
                    <x-dropdown-link :href="route('artprofile')">
                        {{ __('Profile')}}
                    </x-dropdown-link>
                    <!-- Authentication -->
                    <form method="get" action="{{ route('artistendsession') }}">
                        @csrf
                        
                        <x-dropdown-link :href="route('artistendsession')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    
                        
                    {{-- @guest
                    <x-dropdown-link :href="route('login')">
                        {{ __('Login')}}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('register')">
                        {{ __('Sign Up')}}
                    </x-dropdown-link>
                    @endguest --}}
                </x-slot>
            </x-dropdown>
        </div>
        @else
        
    @endif
     @else



            {{-- Accout Option for Users --}}
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-white hover:text-gray-200 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            @auth
                            <div>{{ Auth::user()->fname }} {{ Auth::user()->lname}}</div>
                            @endauth
                            
                            @guest 
                            <div>Account</div>
                            @endguest
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
            
            

                    <x-slot name="content">
                       
                        @auth
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('userprofile')">
                                {{ __('Profile')}}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endauth
                        @guest
                        <x-dropdown-link :href="route('login')">
                            {{ __('Login')}}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('register')">
                            {{ __('Sign Up')}}
                        </x-dropdown-link>
                        @endguest
                    </x-slot>
                </x-dropdown>
            </div>
            @endif
           
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 text-white">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('news')" :active="request()->routeIs('news')">
                {{ __('News') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('artist')" :active="request()->routeIs('artist')">
                {{ __('Artist') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('album')" :active="request()->routeIs('album')">
                {{ __('Album') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>

        </div>

        <!-- Responsive Settings Options -->
        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth
    </div>
</nav>
