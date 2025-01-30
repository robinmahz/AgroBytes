<footer class="bg-[#D4E6C2] py-10">
    @php
        $nav = [
            [
                'name' => 'home',
                'route' => '/',
            ],
            [
                'name' => 'about',
                'route' => '/about',
            ],
            [
                'name' => 'shop',
                'route' => '/shop',
            ],
            [
                'name' => 'contacts',
                'route' => '/contacts',
            ],
            [
                'name' => 'plant recommendation',
                'route' => '/plant-recommendation',
            ],
            [
                'name' => 'fertilizer recommendation',
                'route' => '/fertilizer-recommendation',
            ],
        ];
    @endphp
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Social Media Section -->
            <div>
                <a href="/"><img src="{{ asset('images/agrimandu-logo.png') }}" class="h-24"
                        alt=" AgriMandu logo"></a>
                <p class="text-sm  mt-4">
                    Agrimandu is a smart crop recommendation app that uses parameters like temperature, moisture, NPK
                    (Nitrogen, Phosphorus, Potassium) levels, pH, and other soil metrics to suggest the best crops for
                    optimal yield. It helps us make data-driven decisions for sustainable agriculture.
                </p>
            </div>

            <!-- Useful Links Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">Useful Links</h5>
                <ul class="mt-4 space-y-2">
                    @foreach ($nav as $item)
                        <li><a href="{{ $item['route'] }}" class="capitalize">{{ $item['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Support Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">contact us</h5>
                <ul class="mt-4 space-y-2">
                    <li><a href="/about" class=" hover:text-gray-800">FAQ</a></li>
                    <li><a href="/contact" class=" hover:text-gray-800">Contact Support</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Privacy Policy</a></li>
                    <li><a href="#" class=" hover:text-gray-800">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Subscription Section -->
            <div>
                <h5 class="text-lg font-semibold text-gray-800">Subscribe</h5>
                <form action="/newsletter" method="POST" class="mt-4">
                    @csrf
                    <div class="flex">
                        <input type="email" name="email"
                            class="w-full px-4 py-2  rounded-l-md ring-0 border-0 focus:ring-none focus:outline-none"
                            placeholder="Enter Your Email" required />
                        <button type="submit"
                            class="bg-primary text-white px-4 py-2 rounded-r-md hover:bg-primary-dark focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
