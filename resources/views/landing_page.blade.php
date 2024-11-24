{{-- <x-app-layout>
</x-app-layout> --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- navbar -->

    <nav class="bg-[#343434] dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span
                    class="self-center text-2xl font-semibold text-white whitespace-nowrap dark:text-white">Garcepboss</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." />
                </div>
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                id="navbar-search bg-[#343434]">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." />
                </div>
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg bg-[#343434] md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block px-3 py-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a
                            </li>
                    <li>
                        <a href="#"
                            class="block px-3 py-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-3 py-2 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- navbar-end -->
    <!-- hero -->
    <div class="bg-[#f9f9f9] py-4">
        <div class="container flex flex-col items-center justify-between mx-auto lg:flex-row">
            <div class="w-full px-4 lg:w-1/2">
                <h1 class="text-4xl font-bold">Lakukan Sesuatu Untuk Sesama.</h1>
                <p class="mt-4 text-gray-500">
                    Garcepboss! adalah platform layanan jasa antar jemput atau ojek, dengan layanan lokal. Tidak hanya
                    antar jemput Garcepboss! mempunyai fitur menyewakan dan sewa kendaraan yang dapat memudahkan user
                    dan driver.
                </p>
                <button class="bg-[#343434] text-white px-6 py-2 mt-4 rounded-lg hover:bg-opacity-80">
                    <a href="getstarterd.html" class="text-white">Get Started</a>
                </button>

            </div>
            <div class="w-full px-4 lg:w-1/2">
                <img src="{{ asset('icon/logomotor.png') }}" alt="" class="w-full" />
            </div>
        </div>
    </div>
    <!-- hero-end -->
    <!-- feature -->
    <div class="mx-auto py-20 bg-[#343434]">
        <h1 class="text-3xl font-bold text-center text-white">We strive to provide the best service</h1>
        <div class="pb-20 bg-white rounded-tr-3xl rounded-tl-3xl">
            <div class="flex flex-col justify-center px-4 py-10 mt-8 lg:flex-row">
                <div class="w-full lg:w-60 bg-[#464646] p-3 flex flex-col items-center gap-1 rounded-2xl mb-4 lg:mb-0">
                    <div class="h-48 bg-[#464646] w-full rounded-xl mb-2">
                        <img src="{{ asset('icon/logomotor.png') }}" alt="" class="object-cover w-full h-full" />
                    </div>
                    <p class="text-xl font-bold text-white">Rent and rent</p>
                </div>
                <div class="w-full lg:w-60 bg-[#FFB72E] p-3 flex flex-col items-center gap-1 rounded-2xl ml-4">
                    <div class="h-48 bg-[#FFB72E] w-full rounded-xl mb-2">
                        <img src="{{ asset('icon/logomotor.png') }}" alt="" class="object-cover w-full h-full" />
                    </div>
                    <p class="text-xl font-bold text-white">Pick up and drop off service</p>
                </div>
            </div>
            <p class="mx-4 text-center text-gray-500 lg:mx-auto">
                Ojek dengan layanan lokal tentunya mempunyai keunggulan yaitu driver yang sudah saling kenal dengan
                usernya, memungkinkan kecepatan dalam order. Garcepboss! adalah suatu langkah untuk kita membantu
                sesama. Juga ojek tidak hanya
                sekadar sebuah layanan transportasi, tetapi juga mencerminkan perubahan dalam gaya hidup modern. Dengan
                menggunakan kendaraan dan driver yang terampil, ojek mampu menembus kemacetan dengan cepat, menyediakan
                solusi transportasi
                yang efisien dalam keseharian kita.
            </p>
        </div>
        <div class="flex flex-col justify-center px-4 py-10 mt-8 lg:flex-row">
            <div class="w-full lg:w-60 bg-[#b8934f] p-3 flex flex-col items-center gap-1 rounded-2xl mb-4 lg:mb-0">
                <div class="h-48 bg-[#b8934f] w-full rounded-xl mb-2">
                    <img src="{{ asset('icon/logomotor.png') }}" alt="" class="object-cover w-full h-full" />
                </div>
                <p class="text-xl font-bold text-white">Rent and rent</p>
            </div>
            <div class="flex flex-col items-center w-full gap-1 p-3 ml-4 bg-white lg:w-60 rounded-2xl">
                <div class="w-full h-48 mb-2 bg-white rounded-xl">
                    <img src="{{ asset('icon/logomotor.png') }}" alt="" class="object-cover w-full h-full" />
                </div>
                <p class="text-xl font-bold text-slate-600">Pick up and drop off service</p>
            </div>
        </div>
        <p class="mx-4 text-center text-white lg:mx-auto">
            Rental memudahkan user dan driver untuk menyewa dan menyewakan kendaraan dengan cepat, nyaman, dan aman.
            Cara ini memungkinkan pemilik kendaraan untuk mendapatkan penghasilan tambahan dari aset yang dimiliki saat
            tidak digunakan.
        </p>
        <h1 class="text-3xl text-center text-white mt-9">Join The Ride</h1>
        <div class="flex flex-col justify-center gap-10 px-4 py-10 mt-8 lg:flex-row">
            <div
                class="w-full p-4 transition-transform duration-300 ease-in-out transform bg-white rounded-lg shadow-md lg:w-80 hover:scale-105">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Driver Partner</h2>
                    <p class="text-gray-600">Kami adalah langkah bagi anda yang mencari freelance, beragam manfaat yaitu
                        Upah, Pengalaman kerja untuk yang tidak pernah bekerja, Lebih dekat dengan masyarakat setempat,
                        Bersosial</p>
                    <div class="flex items-end justify-end mt-4">
                        <button
                            class="bg-[#343434] hover:bg-slate-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2">Join
                            in Driver</button>
                    </div>
                </div>
            </div>
            <div
                class="w-full p-4 transition-transform duration-300 ease-in-out transform bg-white rounded-lg shadow-md lg:w-80 hover:scale-105">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Rent</h2>
                    <p class="text-gray-600">Tidak semua ingin mendapatkan uang tambah tanpa dengan bekerja. Jika anda
                        memiliki kendaraan yang sedang tidak dipakai, fitur Rent garcepboss! bisa jadi solusi dengan
                        jaminan keamanan dan kemudahan.</p>
                    <div class="flex items-end justify-end mt-4">
                        <button
                            class="bg-[#343434] hover:bg-slate-700 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2">Join
                            in Rent</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature-end -->
</body>

</html>
