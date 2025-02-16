<div class="bg-white">
    <!-- Hero Section -->
    <div class="hero min-h-screen" style="background-image: url({{ asset('storage/asset/bg-hero.jpg') }});">
        <div class="hero-overlay bg-opacity-60 w-full">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
                    <div class="text-center">
                        <h1 class="text-3xl tracking-tight font-extrabold text-neutral-50 sm:text-4xl md:text-5xl lg:text-6xl">
                            <span class="block">Bintang</span>
                            <span class="block text-green-500">Multimedia</span>
                        </h1>
                        <p class="mt-3 text-sm text-neutral-200 sm:mt-5 sm:text-base md:text-lg lg:text-xl max-w-xl mx-auto">
                            Menyewakan macam-macam alat Multimedia untuk kebutuhan pesta, meeting dan keperluan lainnya untuk mlengkapi acara kalian
                            agar lebih meriah!
                        </p>
                        <div class="mt-5 sm:mt-8 flex justify-center">
                            <div class="rounded-md shadow">
                                <a href="{{ route('sewa') }}"
                                    class="w-full flex items-center justify-center px-6 py-2 sm:px-8 sm:py-3 border border-transparent text-sm sm:text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-600 transition-colors duration-300">
                                    Start Rental
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="text-center my-8 sm:my-16">
        <h1 class="font-bold text-2xl sm:text-4xl">Keunggulan Kami</h1>
    </div>
    <div class="py-8 sm:py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Feature cards with responsive spacing and font sizes -->
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 text-blue-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m2 0h-1m6 4v1a2 2 0 01-2 2H8a2 2 0 01-2-2v-1m2 0h8m-6-5V7a2 2 0 014 0v4" />
                    </svg>
                    <div class="text-center sm:text-left">
                        <div class="text-base sm:text-lg font-medium text-gray-900 mb-2">Mudah & Cepat</div>
                        <p class="text-sm sm:text-base text-gray-500">Tidak perlu ribet! Dengan sistem pemesanan yang simpel, Anda bisa menyewa alat hanya dalam beberapa langkah. Pilih barang, tentukan tanggal, lakukan pembayaran, dan peralatan siap digunakan.</p>
                    </div>
                </div>

                <div class="bg-white p-4 sm:p-6 rounded-lg shadow flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 text-green-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <div class="text-center sm:text-left">
                        <div class="text-base sm:text-lg font-medium text-gray-900 mb-2">Kualitas Terjamin</div>
                        <p class="text-sm sm:text-base text-gray-500">Semua peralatan kami selalu dalam kondisi prima dan siap digunakan untuk berbagai kebutuhan, mulai dari event hingga produksi profesional.</p>
                    </div>
                </div>

                <div class="bg-white p-4 sm:p-6 rounded-lg shadow flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 text-yellow-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <div class="text-center sm:text-left">
                        <div class="text-base sm:text-lg font-medium text-gray-900 mb-2">Dukungan Teknis Profesional</div>
                        <p class="text-sm sm:text-base text-gray-500">Kami tidak hanya menyediakan alat, tetapi juga siap membantu Anda dengan panduan penggunaan dan troubleshooting. Tim kami selalu siap memberikan solusi jika ada kendala saat penggunaan alat.</p>
                    </div>
                </div>

                <div class="bg-white p-4 sm:p-6 rounded-lg shadow flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <svg class="w-12 h-12 sm:w-16 sm:h-16 text-red-500 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.656 0 3-1.344 3-3s-1.344-3-3-3-3 1.344-3 3 1.344 3 3 3zm0 2c-2.67 0-8 1.338-8 4v2h16v-2c0-2.662-5.33-4-8-4z" />
                    </svg>
                    <div class="text-center sm:text-left">
                        <div class="text-base sm:text-lg font-medium text-gray-900 mb-2">Keamanan & Kenyamanan Terjamin</div>
                        <p class="text-sm sm:text-base text-gray-500">Kami memastikan setiap transaksi aman, dan peralatan yang disewa dalam kondisi baik serta sudah dicek sebelum ditangan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Title -->
    <div class="text-center mt-12 sm:mt-20">
        <h1 class="font-bold text-2xl sm:text-4xl">Barang Penyewaan</h1>
    </div>

    <!-- Card Items -->
    <div class="py-8 sm:py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">
                <!-- Cards with responsive sizing -->
                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/sony pxw-x70.jpg') }}" alt="Sony PXW-X70" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">Sony PXW-X70</h2>
                        <p class="text-xs sm:text-sm">Kamera video profesional dengan kualitas tinggi.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/sony_hxrnx100.jpg') }}" alt="Sony HXR-NX100" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">Sony HXR-NX100</h2>
                        <p class="text-xs sm:text-sm">Kamera serbaguna dengan sensor besar.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/50inch LG UQ7500 UHD') }}" alt="LG 50-inch UHD TV" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">LG 50" UHD TV</h2>
                        <p class="text-xs sm:text-sm">TV layar lebar dengan resolusi tinggi.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/55inch UHD Smart TV-55UR7500PSC-LG') }}" alt="LG 55-inch Smart TV" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">LG 55" Smart TV</h2>
                        <p class="text-xs sm:text-sm">Warna cerah dan detail luar biasa dengan 4K HDR10 Pro.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/U-PHORIA UMC202HD') }}" alt="U-PHORIA UMC202HD" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">U-PHORIA UMC202HD</h2>
                        <p class="text-xs sm:text-sm">Audio interface berkualitas tinggi.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/Kamera E-mount Alpha 7 II') }}" alt="Alpha 7 II" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">Alpha 7 II</h2>
                        <p class="text-xs sm:text-sm">Kamera mirrorless dengan performa tinggi.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/AVMATRIX Mini SC1221 – HDMI to SDI Mini Converter') }}" alt="AVMATRIX Mini SC1221" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">AVMATRIX Mini SC1221</h2>
                        <p class="text-xs sm:text-sm">HDMI to SDI Mini Converter.</p>
                    </div>
                </div>

                <div class="card bg-base-100 w-full max-w-xs shadow-xl">
                    <figure class="px-4 pt-4 sm:px-6 sm:pt-6">
                        <img src="{{ asset('storage/asset/Ezcap 261m') }}" alt="Ezcap 261m" class="rounded-xl h-32 sm:h-40 w-full object-cover" />
                    </figure>
                    <div class="card-body items-center text-center p-4 sm:p-6">
                        <h2 class="card-title text-base sm:text-lg">Ezcap 261m</h2>
                        <p class="text-xs sm:text-sm">Video capture device.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-center bg-base-300 text-base-content p-4">
        <aside>
            <p class="text-sm sm:text-base">Copyright © {{ date('Y') }} - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>
</div>
