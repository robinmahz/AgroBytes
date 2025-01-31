@extends('layouts.frontend.app')
@section('content')
    <main class="container px-4 py-8 mx-auto">
        <!-- Sensor Data Display Section -->
        <section class="p-8 mb-12 bg-white rounded-lg shadow-lg">
            <h2 class="mb-8 text-4xl font-bold text-center text-primary">Real-Time Sensor Data</h2>
            <div class="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                <!-- Soil Temperature -->
                <div class="p-8 transition-all transform rounded-lg shadow-md bg-gradient-to-br from-blue-50 to-blue-100 hover:scale-105">
                    <span class="text-6xl">🌡️</span>
                    <h3 class="mt-6 text-2xl font-semibold text-gray-800">Soil Temperature</h3>
                    <p class="mt-4 text-3xl font-bold text-blue-600" id="soil-temp">-- °C</p>
                </div>
                <!-- Soil Humidity -->
                <div class="p-8 transition-all transform rounded-lg shadow-md bg-gradient-to-br from-green-50 to-green-100 hover:scale-105">
                    <span class="text-6xl">💧</span>
                    <h3 class="mt-6 text-2xl font-semibold text-gray-800">Soil Humidity</h3>
                    <p class="mt-4 text-3xl font-bold text-green-600" id="soil-humidity">-- %</p>
                </div>
                <!-- Water Percentage -->
                <div class="p-8 transition-all transform rounded-lg shadow-md bg-gradient-to-br from-purple-50 to-purple-100 hover:scale-105">
                    <span class="text-6xl">🚰</span>
                    <h3 class="mt-6 text-2xl font-semibold text-gray-800">Water Percentage</h3>
                    <p class="mt-4 text-3xl font-bold text-purple-600" id="water-percentage">-- %</p>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <button class="px-8 py-3 font-bold text-white transition-all transform rounded-full bg-gradient-to-r from-primary to-green-500 hover:from-green-600 hover:to-primary hover:scale-105" onclick="fetchSensorData()">
                    Refresh Data
                </button>
            </div>
        </section>

        <!-- Activity Log Section -->
        <section class="text-center">
            <h2 class="mb-8 text-4xl font-bold text-primary">Irrigation System Activities</h2>
            <button class="px-8 py-3 font-bold text-white transition-all transform rounded-full bg-gradient-to-r from-primary to-green-500 hover:from-green-600 hover:to-primary hover:scale-105" onclick="toggleActivityLog()">
                View Irrigation Activities
            </button>
            <div id="activity-log" class="hidden p-8 mt-8 bg-white rounded-lg shadow-lg">
                <ul id="activity-list" class="space-y-4 text-lg text-gray-700">
                    <li class="p-4 rounded-lg shadow-sm bg-gray-50">Loading...</li>
                </ul>
            </div>
        </section>
    </main>

    <script>
        function fetchSensorData() {
            // Simulated data fetching
            document.getElementById('soil-temp').innerText = Math.floor(Math.random() * 10 + 20) + ' °C';
            document.getElementById('soil-humidity').innerText = Math.floor(Math.random() * 50 + 30) + ' %';
            document.getElementById('water-percentage').innerText = Math.floor(Math.random() * 50 + 50) + ' %';
        }

        function toggleActivityLog() {
            const log = document.getElementById('activity-log');
            log.classList.toggle('hidden');
            loadActivityLog();
        }

        function loadActivityLog() {
            const activities = [
                "Watering started at 10:00 AM",
                "System paused at 11:30 AM",
                "Watering resumed at 12:15 PM",
                "Watering stopped at 1:00 PM"
            ];
            const list = document.getElementById('activity-list');
            list.innerHTML = activities.map(activity => `<li class='p-4 rounded-lg shadow-sm bg-gray-50'>${activity}</li>`).join('');
        }

        // Auto-fetch data every 30 seconds
        setInterval(fetchSensorData, 30000);
        fetchSensorData();
    </script>
@endsection
