{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <!-- users regis -->
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
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

                <x-text-input id="birthDate" class="block w-full mt-1"
                                type="date"
                                name="birthDate" required  />

                <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
            </div>
            <!-- Basic information -->

            <!-- driver license -->
            <div class="mt-4">
                <x-input-label for="driverLicense" :value="__('Date of birth')" />

                <x-text-input id="driverLicense" class="block w-full mt-1"
                                type="file"
                                name="driverLicense" required  />

                <x-input-error :messages="$errors->get('driverLicense')" class="mt-2" />
            </div>
            <!-- driver license -->

            <!-- Certificate good conduct -->
            <div class="mt-4">
                <x-input-label for="certificateOfConduct" :value="__('Certificate of good conduct')" />

                <x-text-input id="certificateOfConduct" class="block w-full mt-1"
                                type="file"
                                name="certificateOfConduct" required  />

                <x-input-error :messages="$errors->get('certificateOfConduct')" class="mt-2" />
            </div>
            <!-- Certificate good conduct -->

            <!-- Vehicle info -->

                <!-- Number plate -->
                <div class="mt-4">
                    <x-input-label for="numberPlate" :value="__('Certificate of good conduct')" />

                    <x-text-input id="numberPlate" class="block w-full mt-1"
                                    type="file"
                                    name="numberPlate" required  />

                    <x-input-error :messages="$errors->get('numberPlate')" class="mt-2" />
                </div>
                <!-- Number plate -->

                <!-- Certificate of vehicle registration -->
                <div class="mt-4">
                    <x-input-label for="frontCertificateOfVehicle" :value="__('Front certificate of vehicle')" />

                    <x-text-input id="frontCertificateOfVehicle" class="block w-full mt-1"
                                    type="file"
                                    name="frontCertificateOfVehicle" required  />

                    <x-input-error :messages="$errors->get('frontCertificateOfVehicle')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="backCertificateOfVehicle" :value="__('Back certificate of vehicle')" />

                    <x-text-input id="backCertificateOfVehicle" class="block w-full mt-1"
                                    type="file"
                                    name="backCertificateOfVehicle" required  />

                    <x-input-error :messages="$errors->get('backCertificateOfVehicle')" class="mt-2" />
                </div>
                <!-- Certificate of vehicle registration -->

                <!-- Photo your vehicle -->
                <div class="mt-4">
                    <x-input-label for="photoVehicle" :value="__('Photo your vehicle')" />

                    <x-text-input id="photoVehicle" class="block w-full mt-1"
                                    type="file"
                                    name="photoVehicle" required  />

                    <x-input-error :messages="$errors->get('photoVehicle')" class="mt-2" />
                </div>
                <!-- Photo your vehicle -->

            <!-- end Vehicle info -->
        <!-- end of driver regis -->


        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-app-layout>
    <div class="container-fluid" style="background-color: #343434; min-height: 100vh; position: relative; overflow: hidden;">

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
                <form method="POST" action="{{ route('register') }}" class="gap-4 d-flex flex-column" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                        <i class="ti ti-user-square-rounded me-3" style="font-size: 24px;"></i>
                        <x-text-input id="name" name="name" :value="old('name')" required autofocus autocomplete="name"
                            class="border-0 w-100"
                            placeholder="Full Name"
                            style="background: transparent; box-shadow: none !important;" />
                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                        <i class="ti ti-mail me-3" style="font-size: 24px;"></i>
                        <x-text-input id="email" name="email" :value="old('email')" required autocomplete="username"
                            class="border-0 w-100"
                            placeholder="Email"
                            style="background: transparent; box-shadow: none !important;" />
                    </div>

                    <!-- Password -->
                    <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                        <i class="ti ti-lock me-3" style="font-size: 24px;"></i>
                        <x-text-input id="password" name="password" type="password" required autocomplete="new-password"
                            class="border-0 w-100"
                            placeholder="Password"
                            style="background: transparent; box-shadow: none !important;" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                        <i class="ti ti-lock me-3" style="font-size: 24px;"></i>
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                            class="border-0 w-100"
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
                        <a href="{{ route('login') }}" class="text-sm text-white text-decoration-none">
                            Already have an account? Log in
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
