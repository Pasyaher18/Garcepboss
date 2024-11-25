<x-app-layout>
    <div class="container-fluid bg-dark text-light"
        style="background-image: url('{{ asset('icon/bandung_map_indonesia 2.png') }}'); background-size: cover; background-position: center; min-height: 100vh; position: relative; overflow: hidden;">

        <!-- Black Overlay Div -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.70); z-index: 0;">
            <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon" style="width: 200px;">
        </div>


        <!-- Orange Div with Rounded Top Corners -->
        <div style="
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: orange;
            border-radius: 130px 130px 0 0;
            z-index: 1;">

            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="w-100" style="max-width: 800px;">

                    <!-- Judul -->
                    <h1 class="text-center fw-bold"
                        style="font-family: 'Inter', sans-serif; font-size: 60px; margin-bottom: 40px; font-style: italic;">
                        Define your goals
                    </h1>

                    <form method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Pickup Location Input -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px; max-width: 400px; margin: 0 auto;">
                            <i class="ti ti-map-pin-2 me-3" style="font-size: 24px;"></i>
                            <input type="text" id="pickup_location" name="pickup_location" placeholder="Pickup Location"
                                value="{{ old('pickup_location') }}" class="bg-transparent border-0 form-control"
                                required />
                        </div>

                        <!-- Destinations Input -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px; max-width: 400px; margin: 20px auto;">
                            <i class="ti ti-map-pin me-3" style="font-size: 24px;"></i>
                            <input type="text" id="destinations" name="destinations" placeholder="Destinations"
                                value="{{ old('destinations') }}" class="bg-transparent border-0 form-control"
                                required />
                        </div>

                        <!-- Order Button -->
                        <div class="text-center">
                            <button type="submit" class="btn"
                                style="background-color: #272727; color: white; font-size: 16px; padding: 10px 20px; border: none; border-radius: 5px; width: 100%; max-width: 400px;">
                                Order
                            </button>
                        </div>


                    </form>

                </div>
            </div>
        </div>

        <img src="{{ asset('icon/logo.png') }}" alt="Motor" style="
        position: absolute;
        bottom: -40px; /* Geser ke atas sebanyak 50px */
        right: -50px;
        width: 500px; /* Atur ukuran gambar sesuai keinginan */
        /* transform: rotate(-6.73deg); Atur kemiringan sesuai kebutuhan */
        z-index: 2;">
    </div>
</x-app-layout>
