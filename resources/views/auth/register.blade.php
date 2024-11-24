{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <!-- users regis -->
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- driver regis -->
        <!-- same as user but add some information -->
        <!-- HaveVehicle -->
        <input type="text" hidden name="HaveVehicle" id="HaveVehicle" value="">
        <!-- user or driver -->
        <input type="text" hidden name="typeRegistration" id="typeRegistration" value="">

        <!-- Basic information -->
        <div class="mt-4">
            <x-input-label for="birthDate" :value="__('Date of birth')" />

            <x-text-input id="birthDate" class="block w-full mt-1" type="date" name="birthDate" required />

            <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
        </div>
        <!-- Basic information -->

        <!-- driver license -->
        <div class="mt-4">
            <x-input-label for="driverLicense" :value="__('Date of birth')" />

            <x-text-input id="driverLicense" class="block w-full mt-1" type="file" name="driverLicense" required />

            <x-input-error :messages="$errors->get('driverLicense')" class="mt-2" />
        </div>
        <!-- driver license -->

        <!-- Certificate good conduct -->
        <div class="mt-4">
            <x-input-label for="certificateOfConduct" :value="__('Certificate of good conduct')" />

            <x-text-input id="certificateOfConduct" class="block w-full mt-1" type="file" name="certificateOfConduct"
                required />

            <x-input-error :messages="$errors->get('certificateOfConduct')" class="mt-2" />
        </div>
        <!-- Certificate good conduct -->

        <!-- Vehicle info -->

        <!-- Number plate -->
        <div class="mt-4">
            <x-input-label for="numberPlate" :value="__('Certificate of good conduct')" />

            <x-text-input id="numberPlate" class="block w-full mt-1" type="file" name="numberPlate" required />

            <x-input-error :messages="$errors->get('numberPlate')" class="mt-2" />
        </div>
        <!-- Number plate -->

        <!-- Certificate of vehicle registration -->
        <div class="mt-4">
            <x-input-label for="frontCertificateOfVehicle" :value="__('Front certificate of vehicle')" />

            <x-text-input id="frontCertificateOfVehicle" class="block w-full mt-1" type="file"
                name="frontCertificateOfVehicle" required />

            <x-input-error :messages="$errors->get('frontCertificateOfVehicle')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="backCertificateOfVehicle" :value="__('Back certificate of vehicle')" />

            <x-text-input id="backCertificateOfVehicle" class="block w-full mt-1" type="file"
                name="backCertificateOfVehicle" required />

            <x-input-error :messages="$errors->get('backCertificateOfVehicle')" class="mt-2" />
        </div>
        <!-- Certificate of vehicle registration -->

        <!-- Photo your vehicle -->
        <div class="mt-4">
            <x-input-label for="photoVehicle" :value="__('Photo your vehicle')" />

            <x-text-input id="photoVehicle" class="block w-full mt-1" type="file" name="photoVehicle" required />

            <x-input-error :messages="$errors->get('photoVehicle')" class="mt-2" />
        </div>
        <!-- Photo your vehicle -->

        <!-- end Vehicle info -->
        <!-- end of driver regis -->


        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{-- =================[Register]================= --}}

{{-- <x-app-layout>
    <div class="container-fluid"
        style="background-color: #343434; min-height: 100vh; position: relative; overflow: hidden;">

        <!-- Segitiga Putih di Kanan Bawah -->
        <div style="
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            /* clip-path: polygon(-50% 100%, 100% 75%, 100% 100%); */
            clip-path: polygon(-400% 100%, 100% -12%, 100% 100%);
            z-index: 0;">

            <!-- Konten Utama -->
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="w-100" style="max-width: 400px;">
                    <!-- Judul -->
                    <h1 class="mb-3 text-center fw-bold" style="font-family: 'Inter', sans-serif; font-size: 60px;">
                        Register
                    </h1>
                    <p class="mb-5 text-center" style="color: ##343434;">
                        Welcome! Please fill out the required fields to create your account.
                    </p>

                    <!-- Form Register -->
                    <form method="POST" action="{{ route('register') }}" class="gap-4 d-flex flex-column"
                        enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <i class="ti ti-user-square-rounded me-3" style="font-size: 24px;"></i>
                            <x-text-input id="name" name="name" :value="old('name')" required autofocus
                                autocomplete="name" class="border-0 w-100" placeholder="Full Name"
                                style="background: transparent; box-shadow: none !important;" />
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <i class="ti ti-mail me-3" style="font-size: 24px;"></i>
                            <x-text-input id="email" name="email" :value="old('email')" required autocomplete="username"
                                class="border-0 w-100" placeholder="Email"
                                style="background: transparent; box-shadow: none !important;" />
                        </div>

                        <!-- Password -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <i class="ti ti-lock me-3" style="font-size: 24px;"></i>
                            <x-text-input id="password" name="password" type="password" required
                                autocomplete="new-password" class="border-0 w-100" placeholder="Password"
                                style="background: transparent; box-shadow: none !important;" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="d-flex align-items-center rounded-3"
                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <i class="ti ti-lock me-3" style="font-size: 24px;"></i>
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                required autocomplete="new-password" class="border-0 w-100"
                                placeholder="Confirm Password"
                                style="background: transparent; box-shadow: none !important;" />
                        </div>

                        <!-- Tombol Register -->
                        <div class="text-center">
                            <button type="submit" class="py-3 w-100 rounded-3 fw-bold"
                                style="background: #343434; color: white; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <!-- Sudah punya akun -->
                        <div class="mt-3 text-center">
                            <a href="{{ route('login') }}" class="text-sm text-decoration-none">
                                Already have an account? Log in
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout> --}}


{{-- =================[Register Driver]================= --}}
{{-- <x-app-layout>
    <div class="container-fluid"
        style="background-color: #343434; min-height: 100vh; position: relative; overflow: hidden;">

        <!-- Segitiga Putih di Kanan Bawah -->
        <div style="
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            /* clip-path: polygon(-50% 100%, 100% 75%, 100% 100%); */
            clip-path: polygon(-400% 100%, 100% -12%, 100% 100%);
            z-index: 0;">

            <!-- Konten Utama -->
            <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="w-100" style="max-width: 800px;">
                    <!-- Judul -->
                    <h1 class="mb-3 text-center fw-bold" style="font-family: 'Inter', sans-serif; font-size: 60px;">
                        Driver Registration
                    </h1>
                    <p class="mb-5 text-center" style="color: #343434;">
                        Please fill out the required fields to register as a driver.
                    </p>

                    <!-- Form Register -->
                    <form method="POST" enctype="multipart/form-data" class="gap-4">
                        @csrf
                        <div class="row g-4">

                            <!-- Nama -->
                            <div class="col-md-6">
                                <label for="name">Full Name</label>
                                <div class="d-flex align-items-center rounded-3"
                                    style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                    <i class="ti ti-user-square-rounded me-3" style="font-size: 24px;"></i>
                                    <input type="text" id="name" name="name" placeholder="Jhon Doe"
                                        class="bg-transparent border-0 form-control" required />
                                </div>
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="col-md-6">
                                <label for="birth_date">Birth Date</label>
                                <div class="d-flex align-items-center rounded-3"
                                    style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                    <i class="ti ti-calendar me-3" style="font-size: 24px;"></i>
                                    <input type="date" id="birth_date" name="birth_date" class="bg-transparent border-0 form-control"
                                        required />
                                </div>
                            </div>

                            <!-- Foto SIM -->
                            <div class="col-md-6">
                                <label for="driver_license">Driver's license (IMG)</label>
                                <div class="d-flex align-items-center rounded-3"
                                    style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                    <i class="ti ti-id me-3" style="font-size: 24px;"></i>
                                    <input type="file" id="driver_license" name="driver_license" accept="image/*"
                                        class="bg-transparent border-0 form-control" required />
                                </div>
                            </div>

                            <!-- Surat Kelakuan Baik -->
                            <div class="col-md-6">
                                <label for="certificate_of_conduct">Letter of Good Conduct (PDF)</label>
                                <div class="d-flex align-items-center rounded-3"
                                    style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                    <i class="ti ti-file-text me-3" style="font-size: 24px;"></i>
                                    <input type="file" name="certificate_of_conduct" name="certificate_of_conduct" accept="application/pdf"
                                        class="bg-transparent border-0 form-control" required />
                                </div>
                            </div>


                            <!-- Apakah Anda Memiliki Kendaraan -->
                            <div class="col-md-12" style="color: #343434;">
                                <h3 class="">Do you have a vehicle?</h3>
                                <div class="gap-3 mt-2 d-flex align-items-center">
                                    <div>
                                        <input type="radio" name="have_vehicle" id="vehicle_yes" value="yes"
                                            class="form-check-input" />
                                        <label for="vehicle_yes" class="">Yes, I have a private vehicle</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="have_vehicle" id="vehicle_no" value="no"
                                            class="form-check-input" />
                                        <label for="vehicle_no" class="">No, I don't have a private vehicle</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Jika Ya -->
                        <div class="vehicle-info d-none">
                                <div class="mt-0 row g-4">
                                    <!-- No Plat -->
                                    <div class="col-md-6">
                                        <label for="number_plate">Plate number</label>
                                        <div class="d-flex align-items-center rounded-3"
                                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                            <i class="ti ti-barcode me-3" style="font-size: 24px;"></i>
                                            <input type="text" id="number_plate" name="number_plate" placeholder="Nomor Plat"
                                                class="bg-transparent border-0 form-control" />
                                        </div>
                                    </div>

                                    <!-- Foto STNK -->
                                    <div class="col-md-6">
                                        <label for="vehicle_registration">Vehicle registration certificate (IMG)</label>
                                        <div class="d-flex align-items-center rounded-3"
                                            style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                            <i class="ti ti-id me-3" style="font-size: 24px;"></i>
                                            <input type="file" id="vehicle_registration" name="vehicle_registration" accept="image/*"
                                                class="bg-transparent border-0 form-control" />
                                        </div>
                                    </div>

                                    <!-- Foto Kendaraan -->
                                    <div class="mt-4 col-md-12">
                                        <label for="vehicle_photo">Vehicle Photos (IMG)</label>
                                        <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                                            <i class="ti ti-camera me-3" style="font-size: 24px;"></i>
                                            <input type="file" id="vehicle_photo" name="vehicle_photo" accept="image/*"
                                                class="bg-transparent border-0 form-control" />
                                            </div>
                                            <img id="vehicle_preview" src="#" alt="Vehicle Preview" class="mt-3 rounded-3 d-none" style="width: auto; max-width: 200px; max-height: 200px; object-fit: contain; display: block; margin: 0 auto;" />

                                    </div>
                                </div>

                        </div>
                        <!-- Submit -->
                        <div class="mt-4 text-center col-md-12">
                            <button type="submit" class="py-3 w-100 rounded-3 fw-bold"
                                style="background: #343434; color: white; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Menampilkan Field Kendaraan -->
    <script>
        const vehicleYes = document.getElementById('vehicle_yes');
        const vehicleNo = document.getElementById('vehicle_no');
        const vehicleInfo = document.querySelector('.vehicle-info');

        vehicleYes.addEventListener('change', () => {
            vehicleInfo.classList.remove('d-none');
        });

        vehicleNo.addEventListener('change', () => {
            vehicleInfo.classList.add('d-none');
        });

        const vehiclePhotoInput = document.querySelector('input[name="vehicle_photo"]');
        const vehiclePreview = document.getElementById('vehicle_preview');

        vehiclePhotoInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    vehiclePreview.src = e.target.result;
                    vehiclePreview.classList.remove('d-none');
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

</x-app-layout> --}}
