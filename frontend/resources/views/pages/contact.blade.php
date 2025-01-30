@extends('layouts.frontend.app')
@section('content')
    <main class=" mx-auto  pt-8">
        <!-- Hero Section -->
        <section class="bg-green-100 rounded-lg p-8 mb-12 container">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl font-bold text-green-800 mb-4">Contact Us</h1>
                <p class="text-xl text-green-700">We're here to help and answer any question you might have</p>
            </div>
        </section>

        <div class="max-w-5xl mx-auto container">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Contact Information -->
                <div class="md:w-1/3">
                    <h2 class="text-2xl font-semibold mb-4">Get in Touch</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                <h3 class="font-semibold">Address</h3>
                                <p class="text-gray-600">123 Agri Street, Kathmandu, Nepal</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <div>
                                <h3 class="font-semibold">Phone</h3>
                                <p class="text-gray-600">+977 1 4123456</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-green-600 mr-2 mt-1" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <div>
                                <h3 class="font-semibold">Email</h3>
                                <p class="text-gray-600">info@agrimandu.com</p>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Contact Form -->
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-semibold mb-4">Send Us a Message</h2>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone (optional)</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500" required></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600 transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <x-faq />
        <!-- Map Section -->
        <section class="mt-12">
            <div class="aspect-w-16 aspect-h-9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9138984179035!2d85.32542117509912!3d27.6890559262986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bbe970afe1%3A0x8e0ad765c1bf979c!2sKing&#39;s%20College%20Nepal!5e0!3m2!1sen!2snp!4v1735910636514!5m2!1sen!2snp"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
@endsection
