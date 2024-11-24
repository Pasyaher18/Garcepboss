{{-- <x-app-layout>
    <div class="container-fluid bg-dark text-light" style="background-color: #343434; min-height: 100vh; position: relative; overflow: hidden;">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="text-center col-md-8">
                <h1 style="font-family: 'Inter', sans-serif; font-size: 60px; font-style: italic;" class="fw-bold">
                    Welcome to Garcepboss!
                </h1>
                <p>Select an option below and make sure your selection is correct.</p>
                <div class="gap-3 d-flex justify-content-center">
                    <!-- Tombol User -->
                    <a href="{{ url("login?typeRegistration=user") }}" class="px-4 py-2 rounded-md btn" style="background-color: white; color: #343434; font-weight: bold; border: 1px solid #343434;">
                        User
                    </a>
                    <!-- Tombol Driver -->
                    <a href="{{ url("login?typeRegistration=driver") }}" class="px-4 py-2 rounded-md btn" style="background-color: #343434; color: white; font-weight: bold; border: 1px solid white;">
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
</x-app-layout> --}}
<x-app-layout>
    <div class="container-fluid bg-dark text-light" style="background-color: #343434 !important; min-height: 100vh; position: relative; overflow: hidden;">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

            <div class="row g-4">
                <!-- Left Side -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="gap-4 d-flex flex-column align-items-start">
                        <div>
                            <!-- Title and Description -->
                            <h1 class="mb-3 text-left fw-bold" style="font-family: 'Inter', sans-serif; font-size: 35px;">
                                There is no one here
                            </h1>
                            <p class="mb-5" style="color: white;">
                                Please fill out the required fields to register as a driver.
                            </p>
                        </div>

                        <!-- Boxes Section -->
                        <div class="flex-wrap gap-5 d-flex">

                            <!-- Box 1 -->
                            <div class="flex-column d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon">
                                </a>
                                <p class="mt-2 fw-light text-wrap" style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;">
                                    Pick up and drop off service
                                </p>
                            </div>

                            <!-- Box 2 -->
                            <div class="flex-column d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    {{-- <i class="ti ti-file-text" style="font-size: 40px; color: white;"></i> --}}
                                    <img src="{{ asset('icon/vehicle.png') }}" alt="">
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap" style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;"">
                                    Certificate</p>
                            </div>

                            <!-- Box 3 -->
                            <div class="flex-column d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <i class="ti ti-artboard" style="font-size: 40px; color: white;"></i>
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap" style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;"">
                                    Upcoming</p>
                            </div>

                            <!-- Box 4 -->
                            <div class="flex-column d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <i class="ti ti-artboard" style="font-size: 40px; color: white;"></i>
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap" style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;"">
                                    Upcoming</p>
                            </div>

                        </div>

                        <!-- Driver -->
                        <div>
                            <h1 class="mb-3 text-left fw-bold" style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                                Driver
                            </h1>
                                <div class="flex-row gap-5 d-flex">

                                    <!-- Card Container -->
                                    <a href="#" class="d-flex flex-column align-items-center justify-content-start rounded-5"
                                        style="background: #272727; width: 220px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none; transition: transform 0.3s;">

                                        <!-- Foto Kurir -->
                                        <div class="overflow-hidden rounded-5" style="width: 95 %; aspect-ratio: 3/4; margin-bottom: 10px;">
                                            <img src="https://i.redd.it/1yikeumwsjxb1.jpg" alt="Kurir Photo" style="width: 100%; height: 100%; object-fit: cover;">
                                        </div>

                                        <!-- Nama Kurir -->
                                        <p class="text-center fw-semibold" style="color: white; font-size: 1.2em; margin: 0;">
                                            Nacho Neko
                                        </p>

                                        <!-- Rating Kurir -->
                                        <div class="gap-1 mt-2 d-flex justify-content-center">
                                            <i class="ti ti-star" style="color: gold; font-size: 1em;"></i>
                                            <i class="ti ti-star" style="color: gold; font-size: 1em;"></i>
                                            <i class="ti ti-star-half" style="color: gold; font-size: 1em;"></i>
                                        </div>
                                    </a>

                                    <!-- Card Skeleton -->
                                    <a href="#" class="d-flex flex-column align-items-center justify-content-start rounded-5"
                                        style="background: #272727; width: 220px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none;">

                                        <!-- Skeleton Foto Kurir -->
                                        <div class="overflow-hidden rounded-5 skeleton"
                                            style="width: 95%; aspect-ratio: 3/4; background: #3c3c3c; margin-bottom: 10px;">
                                        </div>

                                        <!-- Skeleton Nama Kurir -->
                                        <p class="text-center skeleton"
                                            style="color: #3c3c3c; width: 70%; height: 16px; margin: 10px 0; background: #3c3c3c; border-radius: 4px;">
                                        </p>

                                        <!-- Skeleton Rating -->
                                        <div class="gap-1 mt-2 d-flex justify-content-center">
                                            <div class="skeleton" style="width: 14px; height: 14px; background: #3c3c3c; border-radius: 50%;"></div>
                                            <div class="skeleton" style="width: 14px; height: 14px; background: #3c3c3c; border-radius: 50%;"></div>
                                            <div class="skeleton" style="width: 14px; height: 14px; background: #3c3c3c; border-radius: 50%;"></div>
                                            <div class="skeleton" style="width: 14px; height: 14px; background: #3c3c3c; border-radius: 50%;"></div>
                                            <div class="skeleton" style="width: 14px; height: 14px; background: #3c3c3c; border-radius: 50%;"></div>
                                        </div>
                                    </a>

                                    <!-- Card Skeleton -->
                                    <a href="#" class="d-flex flex-column align-items-start justify-content-center rounded-5"
                                        style="background: #272727; width: 220px; padding: 25px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none; position: relative;">

                                        <!-- Skeleton Foto Kurir -->
                                        <div class="skeleton d-flex align-items-center fw-semibold"
                                            style="width: 100%; height: 100%; color: #ffffff; text-align: left; font-size: 2em; font-style: italic;">
                                            Driver is on the way
                                        </div>

                                        <!-- Foto di Pojok Kanan Bawah -->
                                        <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon"
                                            style="width: 140%; position: absolute; bottom: -110px; right: -84px;">
                                    </a>


                                </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side -->
                <div class="gap-4 col-md-6 d-flex flex-column align-items-start">
                    <div>
                        <h1 class="mb-3 text-left fw-bold" style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                            Maps
                        </h1>
                        <div class="d-flex flex-column align-items-center justify-content-start rounded-5" style="background: #ffffff; width: 120%; padding: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="overflow-hidden rounded-5" style="width: 100%; aspect-ratio: 4/2;">
                                <img src="{{ asset('icon/maps.png') }}" alt="Kurir Photo" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>

                    {{-- Yang di Comment ini buat user --}}
                    {{-- <div style="width: 100%">
                        <!-- Title -->
                        <h1 class="mb-3 text-left fw-bold"
                            style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                            Reminder
                        </h1>

                        <!-- Reminder Card -->
                        <div class="rounded-5"
                            style="background: #272727; width: 70%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="overflow-hidden d-flex align-items-center justify-content-center rounded-5"
                                style="width: 100%; aspect-ratio: 6/2; background:">
                                <p class="m-0 text-center" style="color: #3c3c3c;; font-size: 20px; font-weight: bold;">
                                    View Reminders
                                </p>
                            </div>
                        </div>
                    </div> --}}

                    {{-- Yang ini buat driver --}}
                    <div style="width: 100%;">
                        <!-- Title -->
                        <h1 class="mb-3 text-left fw-bold"
                            style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                            Reminder
                        </h1>

                        <!-- Reminder Card -->
                        <div class="rounded-5" style="background: #272727; width: 70%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 15px;">
                            <!-- List Pesanan -->
                            <div class="gap-3 d-flex flex-column rounded-4" style="max-height: 200px; overflow-y: auto; scrollbar-width: thin; scrollbar-color: #3c3c3c #272727;">

                                <!-- Pesanan 1 -->
                                <div class="p-3 d-flex justify-content-between align-items-center rounded-4"
                                    style="background: #3c3c3c;">
                                    <div>
                                        <p class="m-0" style="color: white; font-size: 16px; font-weight: bold;">John Doe</p>
                                        <p class="m-0" style="color: #c2c2c2; font-size: 14px;"> <i class="ti ti-map-pin">&nbsp;</i>123 Street, City Center</p>
                                    </div>
                                    <button class="btn btn-sm btn-primary"
                                        style="background: #272727; border: none; font-size: 14px;">
                                        Take Order
                                    </button>
                                </div>

                                <!-- Pesanan 1 -->
                                <div class="p-3 d-flex justify-content-between align-items-center rounded-4"
                                    style="background: #3c3c3c;">
                                    <div>
                                        <p class="m-0" style="color: white; font-size: 16px; font-weight: bold;">John Doe</p>
                                        <p class="m-0" style="color: #c2c2c2; font-size: 14px;"> <i class="ti ti-map-pin">&nbsp;</i>123 Street, City Center</p>
                                    </div>
                                    <button class="btn btn-sm btn-primary"
                                        style="background: #272727; border: none; font-size: 14px;">
                                        Take Order
                                    </button>
                                </div>

                                <!-- Pesanan 1 -->
                                <div class="p-3 d-flex justify-content-between align-items-center rounded-4"
                                    style="background: #3c3c3c;">
                                    <div>
                                        <p class="m-0" style="color: white; font-size: 16px; font-weight: bold;">John Doe</p>
                                        <p class="m-0" style="color: #c2c2c2; font-size: 14px;"> <i class="ti ti-map-pin">&nbsp;</i>123 Street, City Center</p>
                                    </div>
                                    <button class="btn btn-sm btn-primary"
                                        style="background: #272727; border: none; font-size: 14px;">
                                        Take Order
                                    </button>
                                </div>

                                <!-- Pesanan 1 -->
                                <div class="p-3 d-flex justify-content-between align-items-center rounded-4"
                                    style="background: #3c3c3c;">
                                    <div>
                                        <p class="m-0" style="color: white; font-size: 16px; font-weight: bold;">John Doe</p>
                                        <p class="m-0" style="color: #c2c2c2; font-size: 14px;"> <i class="ti ti-map-pin">&nbsp;</i>123 Street, City Center</p>
                                    </div>
                                    <button class="btn btn-sm btn-primary"
                                        style="background: #272727; border: none; font-size: 14px;">
                                        Take Order
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>


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
            clip-path: polygon(55% 100%, 100% 90%, 100% 100%);
            z-index: 1;">
        </div>
        <!-- CSS -->
        <style>
            .hover-scale:hover div {
                transform: scale(1.1);
            }
        </style>

    </div>
</x-app-layout>
