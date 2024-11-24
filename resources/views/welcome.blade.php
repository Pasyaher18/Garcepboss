<x-app-layout>
    <div class="container-fluid bg-dark text-light" style="background-color: #343434; min-height: 100vh; position: relative; overflow: hidden;">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="text-center col-md-8">
                <h1 style="font-family: 'Inter', sans-serif; font-size: 60px; font-style: italic;" class="fw-bold">
                    Welcome to Garcepboss!
                </h1>
                <p>Select an option below and make sure your selection is correct.</p>
                <div class="gap-3 d-flex justify-content-center">
                    <!-- Tombol User -->
                    <a href="#" class="px-4 py-2 rounded-md btn" style="background-color: white; color: #343434; font-weight: bold; border: 1px solid #343434;">
                        User
                    </a>
                    <!-- Tombol Driver -->
                    <a href="#" class="px-4 py-2 rounded-md btn" style="background-color: #343434; color: white; font-weight: bold; border: 1px solid white;">
                        Driver
                    </a>
                </div>
            </div>
        </div>

        <!-- Segitiga Putih di Kanan Bawah -->
        <div style="
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            clip-path: polygon(-50% 100%, 100% 75%, 100% 100%);
            z-index: 1;">
        </div>

        <!-- Gambar Motor SVG -->
        <img src="{{ asset('icon/motor.svg') }}" alt="Motor" style="
        position: absolute;
        bottom: -45px;
        right: 0px;
        width: 715px; Atur ukuran gambar sesuai keinginan
        transform: rotate(-6.73deg); /* Atur kemiringan sesuai kebutuhan */
        z-index: 2;">

        <img src="{{ asset('icon/logo.png') }}" alt="Motor" style="
        position: absolute;
        bottom: -40px; /* Geser ke atas sebanyak 50px */
        right: -50px;
        width: 500px; /* Atur ukuran gambar sesuai keinginan */
        /* transform: rotate(-6.73deg); Atur kemiringan sesuai kebutuhan */
        z-index: 2;">
    </div>
</x-app-layout>
