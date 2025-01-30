@extends('layouts.frontend.app')
@section('content')
    <main class="container px-4 py-8 ">
        <!-- Hero Section with Image and Description -->
        <section class="py-12">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0">
                    <img src="{{ asset('images/home/farmer.jpg') }}" alt="Agrimandu Farm"
                        class="rounded-lg shadow-md w-full h-auto">
                </div>
                <div class="md:w-1/2 md:pl-8">
                    <h1 class="text-4xl font-bold text-primary mb-4">Welcome to Agrimandu</h1>
                    <p class="text-xl text-gray-700 mb-6">
                        Agrimandu is Nepal's leading platform for premium agricultural products, connecting local farmers
                        directly with consumers. We ensure fresh, organic produce at fair prices while leveraging sales data
                        to recommend crops that help farmers maximize their profits.
                    </p>
                    <a href="/shop"
                        class="bg-primary text-white font-bold py-2 px-6 rounded-full hover:bg-green-600 transition duration-300">
                        Explore Our Products
                    </a>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section id="products" class="mb-12">
            <h2 class="text-3xl font-semibold text-center mb-8">Our Featured Products</h2>
            <div class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">
                @include('components.shop-card')
            </div>

        </section>

        <!-- Why Choose Us Section -->
        <section class="bg-green-100 rounded-lg p-8 mb-12">
            <h2 class="text-3xl font-semibold text-center mb-8">Why Choose Agrimandu?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Quality Assured</h3>
                    <p class="text-gray-700">We guarantee the highest quality organic products.</p>
                </div>
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Fair Prices</h3>
                    <p class="text-gray-700">Supporting farmers while offering competitive prices.</p>
                </div>
                <div class="text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Eco-Friendly</h3>
                    <p class="text-gray-700">Promoting sustainable farming practices in Nepal.</p>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="text-center">
            <h2 class="text-3xl font-semibold mb-6">Ready to Experience Agrimandu?</h2>
            <p class="text-xl text-gray-700 mb-8">Join us in supporting local farmers and enjoying the best of Nepalese
                agriculture.</p>
            <a href="/shop"
                class="bg-green-500 text-white font-bold py-3 px-8 rounded-full hover:bg-green-600 transition duration-300">
                Shop Now
            </a>
        </section>
    </main>
@endsection
