<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-primary start-0">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/cosmoshacklogo.png') }}" class="w-16 h-16" alt="AgriMandu Logo">
        </a>

        <!-- Right Section: Home, About, Search -->
        <div class="flex items-center ml-auto space-x-6 rtl:space-x-reverse">
            <!-- Home and About Links -->
            <ul class="flex items-center space-x-4">
                @php
                    $nav = [
                        ['name' => 'home', 'route' => ''],
                        ['name' => 'about', 'route' => 'about'],
                    ];
                @endphp
                @foreach ($nav as $key => $item)
                    <li>
                        <a href="/{{ $item['route'] }}"
                            class="block py-2 px-3 rounded md:bg-transparent md:p-0 capitalize hover:text-accent duration-150 {{ $item['route'] == request()->path() || ($key == 0) & (request()->path() == '/') ? 'text-accent' : 'text-white' }}"
                            aria-current="page">{{ $item['name'] }}</a>
                    </li>
                @endforeach
            </ul>

            <!-- Search Bar -->
            <form class="items-center hidden lg:flex" method="POST" action="/search">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 flex items-center start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="body"
                        class="block h-[2rem] w-[16rem] p-4 ps-10 text-sm text-accent border rounded-lg bg-gray-50 hover:bg-gray-100 border-accent-light placeholder-gray-400 focus:border-blue-500"
                        placeholder="Search" required />
                </div>
            </form>

            <!-- Mobile Menu Button -->
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </div>
</nav>
