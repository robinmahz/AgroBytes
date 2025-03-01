@extends('layouts.frontend.app')
@section('content')
    <main class="container px-4 py-8 mx-auto">
        <!-- Hero Section -->
        <section class="p-8 mb-12 rounded-lg bg-opacity-3 bg-secondary">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="mb-4 text-4xl font-bold ">About AgriBytes</h1>
                <p class="text-xl ">Connecting Nepalese Farmers with Quality Consumers</p>
            </div>
        </section>

        <!-- Company Story -->
        <section class="mb-12">
            <div class="max-w-4xl mx-auto">
                <h2 class="mb-6 text-3xl font-semibold">Our Story</h2>
                <div class="flex flex-col items-center gap-8 md:flex-row">
                    <div class="mb-6 md:w-1/2 md:mb-0 md:pr-8">
                        <img src="{{ asset('images/about/nepal-farm.jpg') }}" alt="AgriBytes Farm"
                            class="w-full h-auto rounded-lg shadow-md">
                    </div>
                    <div class="md:w-1/2">
                        <p class="mb-4 text-gray-700">
                            Founded in 2024, AgriBytes was born from a passion for sustainable agriculture and a desire to
                            support local Nepalese farmers. Our journey began when we recognized the gap between hardworking
                            farmers and urban consumers seeking quality produce.
                        </p>
                        <p class="text-gray-700">
                            Today, we pride ourselves on being the bridge that connects these two worlds, ensuring fair
                            prices for farmers and providing consumers with the freshest, most nutritious produce Nepal has
                            to offer.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Values -->
        <section class="p-8 mb-12 rounded-lg bg-green-50">
            <div class="max-w-4xl mx-auto">
                <h2 class="mb-6 text-3xl font-semibold text-center">Our Values</h2>
                <div class="flex justify-between gap-8">
                    <div class="flex-1 text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold">Sustainability</h3>
                        <p class="text-gray-700">Promoting eco-friendly farming practices for a better future.</p>
                    </div>
                    <div class="flex-1 text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold">Community</h3>
                        <p class="text-gray-700">Building strong relationships between farmers and consumers.</p>
                    </div>
                    <div class="flex-1 text-center">
                        <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                        <h3 class="mb-2 text-xl font-semibold">Quality</h3>
                        <p class="text-gray-700">Ensuring the highest standards in all our products.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="my-16 text-center">
            <h2 class="mb-6 text-3xl font-semibold">Join the AgriBytes Family</h2>
            <p class="mb-8 text-xl text-gray-700">Whether you're a farmer looking to expand your reach or a consumer seeking
                the best of Nepal's produce, we're here for you.</p>
            <a href="#"
                class="px-8 py-3 font-bold text-white transition duration-300 bg-green-500 rounded-full hover:bg-green-600">
                Get Started Today
            </a>
        </section>

        <!-- Mission and Vision -->
        <section class="p-8 mb-12 rounded-lg bg-green-50">
            <div class="max-w-4xl mx-auto">
                <h2 class="mb-6 text-3xl font-semibold text-center">Our Mission and Vision</h2>
                <div class="grid gap-8 text-center md:grid-cols-2">
                    <div>
                        <h3 class="mb-4 text-2xl font-semibold text-green-700">Mission</h3>
                        <p class="text-gray-700">
                            AgriBytes empowers farmers and urban growers with data-driven insights and sustainable
                            solutions. We support informed crop decisions using soil data, weather conditions, and humidity
                            levels. Additionally, we guide farmers with sales data to help identify market demands and
                            promote rooftop farming through expert guidance, quality resources, and organic techniques.
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-4 text-2xl font-semibold text-green-700">Vision</h3>
                        <p class="text-gray-700">
                            Our vision is to create a thriving agricultural ecosystem where farmers and urban growers can
                            achieve sustainability and prosperity. We envision a future where data-driven farming practices
                            and rooftop gardens contribute to food security, environmental health, and community well-being.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
