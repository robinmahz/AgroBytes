<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="p-8 w-full">
                <div class="uppercase tracking-wide text-sm text-green-500 font-semibold mb-1">Agrimandu</div>
                <h2 class="block mt-1 text-lg leading-tight font-medium text-black mb-6">Soil Nutrient Analysis</h2>
                <form action="" method="POST" id='product-form'>
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="nitrogen" class="block text-sm font-medium text-gray-700">Nitrogen (N)
                                Level</label>
                            <input type="number" name="N" id="nitrogen" step="0.1" min="0" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                placeholder="Enter N level (ppm)">
                        </div>

                        <div>
                            <label for="phosphorus" class="block text-sm font-medium text-gray-700">Phosphorus (P)
                                Level</label>
                            <input type="number" name="P" id="phosphorus" step="0.1" min="0" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                placeholder="Enter P level (ppm)">
                        </div>

                        <div>
                            <label for="potassium" class="block text-sm font-medium text-gray-700">Potassium (K)
                                Level</label>
                            <input type="number" name="K" id="potassium" step="0.1" min="0" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                placeholder="Enter K level (ppm)">
                        </div>

                        <div>
                            <label for="ph" class="block text-sm font-medium text-gray-700">pH Level</label>
                            <input type="number" name="ph" id="ph" step="0.1" min="0"
                                max="14" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                                placeholder="Enter pH level (0-14)">
                        </div>

                        <!-- Crop Type -->
                        <div>
                            <label for="crop_type" class="block text-sm font-medium text-gray-700">Crop Type</label>
                            <select name="crop_type" id="crop_type" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                <option value="" disabled selected>Select Crop Type</option>
                                <option value="barly">Barley</option>
                                <option value="cotton">Cotton</option>
                                <option value="ground Nuts">Ground Nuts</option>
                                <option value="maize">Maize</option>
                                <option value="millets">Millets</option>
                                <option value="oil seeds">Oil Seeds</option>
                                <option value="paddy">Paddy</option>
                                <option value="pulses">Pulses</option>
                                <option value="sugercane">Sugarcane</option>
                                <option value="tobacco">Tobacco</option>
                                <option value="wheat">Wheat</option>
                            </select>
                        </div>

                        <!-- Soil Type -->
                        <div>
                            <label for="soil_type" class="block text-sm font-medium text-gray-700">Soil Type</label>
                            <select name="soil_type" id="soil_type" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50">
                                <option value="" disabled selected>Select Soil Type</option>
                                <option value="black">Black</option>
                                <option value="clayey">Clayey</option>
                                <option value="loamy">Loamy</option>
                                <option value="red">Red</option>
                                <option value="sandy">Sandy</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                                Submit Analysis
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
