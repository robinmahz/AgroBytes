@extends('layouts.frontend.app')
@section('head')
    {{-- for map leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Include Axios Library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
@section('content')
    <main class="md:columns-2 container mt-16 ">
        @include('components.location-card')
        <button onclick="useCurrentLocation()" class="bg-green-500 hover:bg-green-700 text-white px-4 py-2 rounded mt-8">Use
            Current
            Location</button>
        <div class="max-w-md bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-4 mt-4 md:mb-28">
            <div class="rounded-xl overflow-hidden">
                <div id="map"></div>
            </div>
        </div>
        @include('components.wether-info')
        @include('components.plant-recommendation-form')
    </main>
@endsection

@section('styles')
    <style>
        #map {
            height: 400px;
            width: 100%;
            z-index: 1;
        }
    </style>
@endsection

@section('scripts')
    <script>
        const API_KEY = 'dd100e4c57ab74be4874fe96515cf5d1';
        var map = L.map('map').setView([28.3949, 84.1240], 7);
        var marker;

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        map.on('click', function(e) {
            placeMarker(e.latlng.lat, e.latlng.lng);
        });

        function useCurrentLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    map.setView([lat, lng], 12);
                    placeMarker(lat, lng);
                }, function(error) {
                    alert('Geolocation failed: ' + error.message);
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function placeMarker(lat, lng) {
            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker([lat, lng]).addTo(map)
                .bindPopup("Fetching address...")
                .openPopup();

            axios.get(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(function(response) {
                    const data = response.data;
                    const address = data.display_name || "No address found";

                    document.getElementById('placeholderMessage').style.display = 'none';
                    document.getElementById('addressRow').style.display = 'block';
                    document.getElementById('latitudeRow').style.display = 'block';
                    document.getElementById('longitudeRow').style.display = 'block';

                    document.getElementById('address').textContent = address;
                    document.getElementById('latitude').textContent = lat.toFixed(5);
                    document.getElementById('longitude').textContent = lng.toFixed(5);

                    marker.setPopupContent(
                        `📍 Address: ${address}<br>🌍 Latitude: ${lat.toFixed(5)}<br>🌐 Longitude: ${lng.toFixed(5)}`
                    ).openPopup();

                    axios.get(
                            `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${API_KEY}&units=metric`
                        )
                        .then(function(weatherResponse) {
                            const weatherData = weatherResponse.data;
                            window.weatherData = {
                                temperature: weatherData.main.temp,
                                humidity: weatherData.main.humidity,
                                rainfall: weatherData.rain ? weatherData.rain['1h'] || 0 : 0
                            };

                            // Display weather info
                            document.getElementById('weatherInfo').style.display = 'block';
                            document.getElementById('temp').textContent = weatherData.main.temp.toFixed(1);
                            document.getElementById('weatherDesc').textContent = weatherData.weather[0].description;
                            document.getElementById('humidity').textContent = weatherData.main.humidity;
                        })
                        .catch(function(error) {
                            console.error("Error fetching weather data:", error);
                        });
                })
                .catch(function(error) {
                    console.error("Error fetching address:", error);
                });
        }

        document.getElementById('product-form').addEventListener('submit', async function(event) {
            event.preventDefault();

            if (!window.weatherData) {
                alert('Weather data not available yet. Please click on the map or use current location.');
                return;
            }

            const formData = new FormData(this);
            const N = formData.get('N');
            const P = formData.get('P');
            const K = formData.get('K');
            const ph = formData.get('ph');

            const dataToSend = {
                N: parseInt(N),
                P: parseInt(P),
                K: parseInt(K),
                ph: parseFloat(ph),
                temperature: window.weatherData.temperature,
                humidity: window.weatherData.humidity,
                rainfall: window.weatherData.rainfall
            };

            try {
                const response = await axios.post('http://127.0.0.1:5000/plantrec', dataToSend);
                alert('we recommend ' +
                    response.data.recommendation);
            } catch (error) {
                console.error('Error submitting the form:', error);
                alert('Error submitting the form. Please try again.');
            }
        });
    </script>
@endsection
