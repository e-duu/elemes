{{-- Navbar --}}
  <nav id="navbar">
    <div class="container-fluid mx-10 flex items-center justify-between py-6">
      <a href="{{ url('/') }}">
        <img src="{{ asset('/images/el.svg') }}" class="w-40 mr-7">
      </a>
      <div class="flex md:hidden">
        <button id="hamburger">
          <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
          <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
      </div>
      <div class="toggle hidden md:flex w-5/6 text-right text-bold mt-5 md:mt-0 border-t-2 border-gray-400 md:border-none">
        <a href="{{ url('/') }}" class="{{ request()->path() === '/' ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-purple-500 hover:border-purple-500 px-3 py-3 border-b-2 transition-all font-bold text-lg mr-7">Home</a>
        <a href="{{ url('catalog') }}" class="{{ (request()->is('catalog')) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} {{ (request()->is('detail-class')) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} {{ (request()->is('class', )) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-purple-500 hover:border-purple-500 px-3 py-3 border-b-2 transition-all font-bold text-lg mr-7">Class</a>
        <a href="{{ url('course') }}" class="{{ (request()->is('course')) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} {{ (request()->is('detail-course')) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} {{ (request()->is('course', )) ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-purple-500 hover:border-purple-500 px-3 py-3 border-b-2 transition-all font-bold text-lg mr-7">Course</a>
        <a href="{{ url('about') }}" class="{{ request()->path() === 'about' ? 'text-purple-500 border-purple-500' : 'text-gray-400' }} block md:inline-block border-transparent hover:text-purple-500 hover:border-purple-500 px-3 py-3 border-b-2 transition-all font-bold text-lg mr-7">About</a>
      </div>
      <div class="flex space-x-3 items-center">
        {{-- @guest
          <a href="{{ url('login') }}" class="bg-purple-500 w-max py-3 px-7 font-medium rounded-full hover:bg-purple-6php 00 text-white transition-all">Sign In</a>
            <div class="flex items-center justify-center">
              <div class=" relative inline-block text-left dropdown">
                <span class="rounded-md shadow-sm"
                  ><button class="inline-flex justify-center w-max px-7 py-3 font-medium text-white transition duration-150 ease-in-out bg-purple-500 rounded-full hover:bg-purple-6php 00 focus:outline-none" 
                  type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                    <span>Sign Up</span>
                    <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button
                ></span>
                <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
                  <div class="absolute right-0 w-56 mt-2 origin-top-right border border-purple-500 divide-y divide-gray-100 rounded shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                  <div class="py-1">
                    <a href="{{-- route('register-admin') --}}{{--" class="text-gray-700 hover:bg-purple-100 transition-all flex justify-between w-full px-4 py-2 text-left"  role="menuitem" >Teacher</a>
                    <a href="{{-- route('register') --}}{{--" class="text-gray-700 hover:bg-purple-100 transition-all flex justify-between w-full px-4 py-2 text-left"  role="menuitem" >Student</a>
                  </div>
                </div>
              </div>
            </div>              
        @endguest --}}
        {{-- @auth --}}
          <a href="{{ url('cart') }}" class="{{ request()->path() === 'cart' ? 'text-purple-600' : 'text-gray-400' }} mr-5">
            <i class="fas fa-shopping-cart text-3xl relative hover:text-purple-600 transition-all"></i>
            <span class="absolute top-12 right-80 {{ request()->path() === 'cart' ? 'bg-black' : 'bg-purple-600' }} px-2 rounded-full">
              <p class="text-white">0</p>
            </span>
          </a>
          <div x-data="{ open: false }" class="w-64 flex justify-center items-center z-50">
            <div @click="open = !open" class="relative border-b-4 border-transparent py-3 hover:border-purple-700 transition-all" :class="{'border-purple-700 transform transition duration-300 ': open}" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100">
              <div class="flex justify-center items-center space-x-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 dark:border-white border-purple-500">
                  <img src="{{ asset('images/vue.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="font-semibold dark:text-white text-gray-900 text-md">
                  <div class="cursor-pointer text-xl">Hi, Gunawan Sate</div>
                </div>
              </div>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-purple-50 rounded-lg shadow border dark:border-transparent mt-5">
                <ul class="space-y-3 dark:text-white">
                  <li class="font-medium">
                    <a href="{{ url('dashboard') }}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-purple-700">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                      </div>
                      Dashboard
                    </a>
                  </li>
                  <li class="font-medium">
                    <a href="{{-- route('settings-account', Auth::user()->id) --}}" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-purple-700">
                      <div class="mr-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                      </div>
                      Setting
                    </a>
                  </li>
                  <hr class="dark:border-gray-700">
                  <li class="font-medium">
                    <a href="{{-- route('logout') --}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-500">
                      <form id="logout-form" action="{{-- route('logout') --}}" method="POST" style="display: none;">
                        @csrf
                      </form>
                      <div class="mr-3 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                      </div>
                      Logouts
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        {{-- @endauth --}}
      </div>
    </div>
  </nav>
  <style>
    .dropdown:focus-within .dropdown-menu {
      opacity:1;
      transform: translate(0) scale(1);
      visibility: visible;
    }
  </style>