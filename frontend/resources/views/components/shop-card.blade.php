@forelse ($products as $data)
    <a href="/shop/{{ $data->slug }}">
        <div
            class="mb-10 mr-5 cursor-pointer group rounded-lg size-80 flex pt-0 items-center flex-col pl-0 justify-center border-solid border-2 border-green-500 relative top-0 shadow-lg hover:ring-4 hover:ring-green-500 transition-shadow">
            <div class="mt-8 w-2/3 h-1/2 border-solid border-0 border-black aspect-[8/3]">
                <img src="{{ asset('storage/' . $data->image) }}">
            </div>
            <div class="flex w-full pl-14 pt-4">
                <p class="text-2xl">{{ $data->name }}</p>
            </div>
            <div
                class="mt-2 w-2/3 h-1/4 border-solid border-0 border-black aspect-[8/3] flex-col justify-center items-center">
                <p class="text-xl">{{ $data->price }}</p>
                <p class="text-gray-500"> {{ $data->orders_count }} sold | <span class="text-green-500">★★★★<span>
                </p>
            </div>
            <!-- Hidden Buy Now Button -->
            <div
                class="absolute ml-40 bottom-[-40px] opacity-0 transition-all duration-300 group-hover:bottom-5 group-hover:opacity-100">
                <button class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-green-600">
                    Buy Now
                </button>
            </div>
        </div>
    </a>
@empty
    <div class="text-xl">No any Products</div>
@endforelse
