@extends('layouts.frontend.app')
@section('content')
    <main class=" mx-auto  pt-8">
        <!-- Hero Section -->
        <section class="bg-green-100 rounded-lg p-8 mb-12 container">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl font-bold text-green-800 mb-4">Join Our Team</h1>
                <p class="text-xl text-green-700">Grow your career with us and make a difference in agriculture</p>
            </div>
        </section>

        <div class="max-w-5xl mx-auto ">
            <div class="grid grid-cols-2 gap-16 ">
                <!-- Job Listings -->
                <section class="mb-12">
                    <h2 class="text-2xl font-semibold mb-6">Open Positions</h2>
                    <div class="space-y-6">
                        <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-300">
                            <h3 class="text-xl font-semibold text-primary mb-2">Agronomists</h3>
                            <p class="text-gray-600 mb-4">An Agronomist is responsible for studying and improving soil
                                health,
                                crop production, and sustainable farming practices. They analyze soil properties,
                                recommend
                                fertilizers and pesticides, and advise farmers on best agricultural practices to
                                maximize
                                crop
                                yields while maintaining environmental sustainability.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Contact Form -->
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-semibold mb-4">Apply For the Position</h2>
                    <form action="/careers" method="POST" enctype="multipart/form-data">
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
                            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="cv" class="block text-gray-700 font-bold mb-2">Upload CV</label>
                            <input type="file" id="cv" name="cv"
                                class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-green-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100"
                                required>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600 transition duration-300">
                                Submit Application
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="mb-12 container">
            <h2 class="text-2xl font-semibold mb-6">Why Work With Us</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Competitive Salary</h3>
                    <p class="text-gray-600">We offer competitive salaries to attract and retain top talent in the
                        industry.</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <svg class="w-12 h-12 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-2">Professional Development</h3>
                    <p class="text-gray-600">We invest in our employees' growth through training and development
                        programs.</p>
                </div>
            </div>
        </section>


    </main>
@endsection
