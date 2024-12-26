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
                    <!-- Maps Dummy & Logout -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center" style="width: 120%;">
                            <!-- Title (Maps) -->
                            <h1 class="mb-3 fw-bold" style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                                Maps
                            </h1>

                            <!-- Logout Button -->
                            <form method="POST" action="{{ route('logout') }}" class="mb-3 ms-3">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                        style="background-color: #A8A3A3; border: none; border-radius: 50%;
                                            width: 50px; height: 50px; display: flex;
                                            justify-content: center; align-items: center;
                                            padding: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                    <i class="ti ti-logout fs-3" style="color: #272727;"></i>
                                </button>
                            </form>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-start rounded-5" style="background: #ffffff; width: 120%; padding: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="overflow-hidden rounded-5" style="width: 100%; aspect-ratio: 4/2;">
                                <img src="{{ asset('icon/maps.png') }}" alt="Kurir Photo" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>

                    <div style="width: 80%">
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
                                    No Reminders
                                </p>
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
