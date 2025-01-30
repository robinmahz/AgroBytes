<nav class="bg-primary dark:bg-gray-900 fixed w-full top-0 start-0 border-b border-gray-200 dark:border-gray-600 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/AgrimanduLogo.png') }}" class="h-8" alt="AgriMandu Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <form class="hidden lg:flex flex-1 items-center justify-end" method="POST" action="/search">
                @csrf
                <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 ">
                        <svg class="w-4 h-4 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="body"
                        class="block h-[2rem] w-[16rem] p-4 ps-10 text-sm text-accent border  rounded-lg  bg-gray-50 hover:bg-gray-100 border-accent-light placeholder-gray-400  focus:border-blue-500"
                        placeholder="Search" required />
                </div>
            </form>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        @php
            $nav = [
                [
                    'name' => 'home',
                    'route' => '',
                ],
                [
                    'name' => 'about',
                    'route' => 'about',
                ],
                // [
                //     'name' => 'shop',
                //     'route' => 'shop',
                // ],
                [
                    'name' => 'contacts',
                    'route' => 'contacts',
                ],
                // [
                //     'name' => 'careers',
                //     'route' => 'careers',
                // ],
                [
                    'name' => 'recommendation',
                    'route' => '',
                    'dropdown' => [
                        ['name' => 'plant recommendation', 'route' => 'plant-recommendation'],
                        ['name' => 'fertilizer recommendation', 'route' => 'fertilizer-recommendation'],
                    ],
                ],
            ];
        @endphp
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-primary md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                @foreach ($nav as $key => $item)
                    <li>
                        @if (isset($item['dropdown']))
                            <div class="relative group">
                                <a href="#"
                                    class=" py-2 px-3 rounded md:bg-transparent md:p-0 capitalize hover:text-accent duration-150 text-white flex gap-2">{{ $item['name'] }}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </a>
                                <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded">
                                    @foreach ($item['dropdown'] as $subitem)
                                        <li><a href="/{{ $subitem['route'] }}"
                                                class="block px-4 py-2 text-black hover:bg-gray-200">{{ $subitem['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <a href="/{{ $item['route'] }}"
                                class="block py-2 px-3 rounded md:bg-transparent md:p-0 capitalize hover:text-accent duration-150 {{ $item['route'] == request()->path() || ($key == 0) & (request()->path() == '/') ? 'text-accent' : 'text-white' }}"
                                aria-current="page">{{ $item['name'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
