<nav class="bg-gray-800" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="flex-shrink-0">
          <img alt="Your Company" class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500">
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a aria-current="{{ request()->is('/') ? 'page' : false }}"
              class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
              href="/">Home</a>
            <a aria-current="{{ request()->is('about') ? 'page' : false }}"
              class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
              href="/about">About</a>
            <a aria-current="{{ request()->is('blogs') ? 'page' : false }}"
              class="{{ request()->is('blogs') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
              href="/blogs">Blog</a>
            <a aria-current="{{ request()->is('contact') ? 'page' : false }}"
              class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
              href="/contact">Contact</a>
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">

          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <button @click="isOpen = !isOpen" aria-expanded="false" aria-haspopup="true"
                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                id="user-menu-button" type="button">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img alt="" class="h-8 w-8 rounded-full"
                  src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
              </button>
            </div>
            <div aria-labelledby="user-menu-button" aria-orientation="vertical"
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu" tabindex="-1" x-show="isOpen" x-transition:enter-end="opacity-100 scale-100"
              x-transition:enter-start="opacity-0 scale-95"
              x-transition:enter="transition ease-out duration-100 transform"
              x-transition:leave-end="opacity-0 scale-95" x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75 transform">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a class="block px-4 py-2 text-sm text-gray-700" href="#" id="user-menu-item-0" role="menuitem"
                tabindex="-1">Your Profile</a>
              <a class="block px-4 py-2 text-sm text-gray-700" href="#" id="user-menu-item-1" role="menuitem"
                tabindex="-1">Settings</a>
              <a class="block px-4 py-2 text-sm text-gray-700" href="#" id="user-menu-item-2" role="menuitem"
                tabindex="-1">Sign out</a>
            </div>
          </div>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button @click="isOpen = !isOpen" aria-controls="mobile-menu" aria-expanded="false"
          class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
          type="button">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" aria-hidden="true" class="block h-6 w-6" fill="none"
            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" aria-hidden="true" class="hidden h-6 w-6" fill="none"
            stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="md:hidden" id="mobile-menu" x-show="isOpen">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <a aria-current="{{ request()->is('/') ? 'page' : false }}"
        class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        href="/">Home</a>
      <a aria-current="{{ request()->is('about') ? 'page' : false }}"
        class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        href="/about">About</a>
      <a aria-current="{{ request()->is('blogs') ? 'page' : false }}"
        class="{{ request()->is('blogs') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        href="/blogs">Blog</a>
      <a aria-current="{{ request()->is('contact') ? 'page' : false }}"
        class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
        href="/contact">Contact</a>
    </div>
    <div class="border-t border-gray-700 pb-3 pt-4">
      <div class="flex items-center px-5">
        <div class="flex-shrink-0">
          <img alt="" class="h-10 w-10 rounded-full"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
        </div>
        <div class="ml-3">
          <div class="text-base font-medium leading-none text-white">Tom Cook</div>
          <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
          href="#">Your Profile</a>
        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
          href="#">Settings</a>
        <a class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
          href="#">Sign out</a>
      </div>
    </div>
  </div>
</nav>
