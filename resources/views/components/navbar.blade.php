<div class="sticky top-0 z-40 lg:mx-auto lg:max-w-7xl lg:px-8">
    <div
        class="flex h-16 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-0 lg:shadow-none">
        <button @click="openSidebar = true" type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Separator -->
        <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

        <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
            <form class="relative flex flex-1" action="#" method="GET">
                <label for="search-field" class="sr-only">Search</label>
                <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-400"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                        clip-rule="evenodd" />
                </svg>
                <input id="search-field"
                    class="block h-full w-full border-0 py-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm"
                    placeholder="Search..." type="search" name="search">
            </form>
            <div class="flex items-center gap-x-4 lg:gap-x-6">
                <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <!-- Separator -->
                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

                <!-- Profile dropdown -->
                <div class="relative">
                    <button @click="openDropdown = !openDropdown" type="button"
                        class="-m-1.5 flex items-center p-1.5">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full bg-gray-50"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <span class="hidden lg:flex lg:items-center">
                            <span class="ml-4 text-sm font-semibold leading-6 text-gray-900"
                                aria-hidden="true">{{ Auth::user()->name }}</span>
                            <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>

                    <div x-show="openDropdown" x-transition
                        class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none">
                        <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900">Your
                            profile</a>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900"
                                @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>