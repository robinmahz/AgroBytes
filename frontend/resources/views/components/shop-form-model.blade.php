<div x-cloak x-show="isOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="isOpen"
    @keydown.esc.window="isOpen = false" @click.self="isOpen = false"
    class="fixed inset-0 z-50 flex items-end justify-center p-4 pb-8 bg-black/20 backdrop-blur-md sm:items-center lg:p-8"
    role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
    <div x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex flex-col max-w-lg gap-4 overflow-hidden bg-white border rounded-md border-neutral-300 text-neutral-600">
        <!-- Dialog Header -->
        <div
            class="flex items-center justify-between p-4 border-b border-neutral-300 bg-primary">
            <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-white ">Order Now
            </h3>
            <button @click="isOpen = false" aria-label="close modal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="white"
                    fill="none" stroke-width="1.4" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>


        <form class="max-w-md mx-5 mb-5" method="POST" action="/order">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}" />
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="first_name" id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none"
                        placeholder=" " required />
                    <label for="floating_first_name"
                        class="absolute text-sm text-gray-500 peer-focus:font-medium ">First
                        name</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="last_name" id="floating_last_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none"
                        placeholder=" " required />
                    <label for="floating_last_name"
                        class="absolute text-sm text-gray-500 peer-focus:font-medium ">Last
                        name</label>
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="floating_email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none "
                    placeholder=" " required />
                <label for="floating_email"
                    class="absolute text-sm text-gray-500 peer-focus:font-medium ">Email
                    address</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="tel" pattern="[0-9]{10}" name="phone" id="floating_phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none "
                    placeholder=" " required />
                <label for="floating_phone"
                    class="absolute text-sm text-gray-500 peer-focus:font-medium">Phone
                    number (9812345670)</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="string" name="address"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none "
                    placeholder=" " required />
                <label
                    class="absolute text-sm text-gray-500 peer-focus:font-medium ">Address
                    (landmark)</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="quantity" id="quantity"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none "
                    placeholder=" " required />
                <label for="quantity"
                    class="absolute text-sm text-gray-500 peer-focus:font-medium">Quantity</label>
            </div>
            <button type="submit"
                class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center >Submit</button>
        </form>
    </div>
</div>
