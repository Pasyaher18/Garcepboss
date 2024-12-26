<x-app-layout>
    <div class="container-fluid bg-dark text-light"
        style="background: white; background-size: cover; background-position: center; min-height: 100vh; position: relative; overflow: hidden;">

        <!-- Black Overlay Div -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: white; z-index: 0;">
            <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon" style="width: 200px;">
        </div>


        <!-- Orange Div with Rounded Top Corners -->
        <div
            style="
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80%;
            background-color: orange;
            border-radius: 130px 130px 0 0;
            z-index: 1;">

            <div class="d-flex" style="height: 100%;">
                <div class="w-100" style="max-width: 800px;">

                    <h1 class="text-left fw-bold"
                        style="font-family: 'Inter', sans-serif; font-size: 60px; margin-bottom: 40px; font-style: italic; margin-left: 20%">
                        Service Order
                    </h1>

                    <form method="POST" enctype="multipart/form-data" action="{{ route('order.store') }}">
                        @csrf

                        <!-- Pickup Location Input -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px; max-width: 400px; margin: 0 auto;">
                            <i class="ti ti-map-pin-2 me-3" style="font-size: 24px;"></i>
                            <input type="text" id="pickup_location" name="pick_location" placeholder="pick_location"
                                value="{{ old('pick_location') }}" class="bg-transparent border-0 form-control" />
                        </div>
                        @error('pick_location')
                            <div class="text-center invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Destinations Input -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px; max-width: 400px; margin: 20px auto;">
                            <i class="ti ti-map-pin me-3" style="font-size: 24px;"></i>
                            <input type="text" id="destinations" name="des_location" placeholder="Destinations"
                                value="{{ old('des_location') }}" class="bg-transparent border-0 form-control" />
                        </div>
                        @error('des_location')
                            <div class="mb-2 text-center invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror

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

        <div src="{{ asset('icon/logo.png') }}" alt="Motor"
            style="
        position: absolute;
        bottom: -40px; /* Geser ke atas sebanyak 50px */
        right: -50px;
        width: 500px; /* Atur ukuran gambar sesuai keinginan */
        /* transform: rotate(-6.73deg); Atur kemiringan sesuai kebutuhan */
        z-index: 2;">
        </div>
</x-app-layout>
