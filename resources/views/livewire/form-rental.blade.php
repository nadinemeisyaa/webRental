<div>
    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-black">Rental Multimedia Equipment</h1>
            <div class="mt-2">
                <span class="text-gray-700">Sewa / Products List</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Filter Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4">Rent Your Equipment</h2>
                    <form class="mt-6 space-y-6" wire:submit="submit" method="POST">
                        <!-- Item yang akan disewa -->
                        <div>
                            <label for="item" class="block text-sm font-medium text-gray-800">
                                Item yang akan disewa
                            </label>
                            <select id="item" name="item" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                wire:model.defer="item">
                                <option value="" selected disabled hidden>Pilih Item</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>

                        <!-- Start Rent -->
                        <div>
                            <label for="start_rent" class="block text-sm font-medium text-gray-800">
                                Tanggal Mulai Sewa
                            </label>
                            <input type="date" id="start_rent" name="start_rent" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                wire:model.live="start_rent">
                        </div>

                        <!-- End Rent -->
                        <div>
                            <label for="end_rent" class="block text-sm font-medium text-gray-800">
                                Tanggal Selesai Sewa
                            </label>
                            <input type="date" id="end_rent" name="end_rent" required
                                class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                wire:model.live="end_rent">
                        </div>

                        <!-- Amount (Readonly) -->
                        <div>
                            <label for="amount" class="block text-sm font-medium text-gray-800">
                                Total Biaya
                            </label>
                            <input type="number" id="amount" name="amount"
                                class="mt-1 block w-full px-3 py-2 border border-gray-400 rounded-md shadow-sm bg-gray-200 text-gray-900"
                                wire:model="amount" readonly>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Submit Rental
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="lg:col-span-3">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-gray-800">{{ count($items) }} Showing</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($items as $item)
                        <div class="bg-gray-100 rounded-lg shadow overflow-hidden flex flex-col h-full">
                            <!-- Image Container with Fixed Height -->
                            <div class="w-full h-48 bg-gray-300">
                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-cover">
                            </div>

                            <!-- Content Container with Fixed Height -->
                            <div class="p-4 flex flex-col flex-grow">
                                <!-- Title with Fixed Height -->
                                <div class="h-14">
                                    <h3 class="text-lg font-semibold text-gray-900 line-clamp-2">{{ $item->name }}
                                    </h3>
                                </div>

                                <!-- Description with Fixed Height -->
                                <div class="h-8">
                                    <p class="text-gray-700 text-xs">{{ $item->description }}</p>
                                </div>

                                <!-- Price Container -->
                                <div class="mt-auto pt-4">
                                    <span
                                        class="text-sm font-bold text-gray-900">{{ number_format($item->price_per_day, 2) }}/day</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>
