{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Username -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block w-full mt-1" type="username" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-3 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
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
                        Log In
                    </h1>
                    <p class="mb-5 text-center" style="color: #343434;">
                        Welcome as before you just need to provide a few details below to enter.
                    </p>

                    <!-- Form Login -->
                    <form method="POST" action="{{ route('login') }}" class="gap-4 d-flex flex-column">
                        @csrf

                        <input type="hidden" name="typeRegistration" id="typeRegistration" value="{{ $typeRegistration }}">
                        <!-- Username -->
                        <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <i class="ti ti-user-square-rounded me-3" style="font-size: 24px;"></i>
                            <x-text-input id="username_or_email" name="username_or_email" :value="old('username_or_email')" required autofocus autocomplete="username_or_email"
                                class="border-0 w-100"
                                placeholder="Username or Email"
                                style="background: transparent; box-shadow: none !important;"/>
                                <x-input-error :messages="$errors->get('username_or_email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="d-flex align-items-center rounded-3" style="background: #c2c2c2; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 10px;">
                            <span class="ti ti-lock-open me-3" style="font-size: 24px;"></span>
                            <x-text-input id="password" name="password" type="password" required autocomplete="current-password"
                                class="border-0 w-100"
                                placeholder="Password"
                                style="background: transparent; box-shadow: none !important;"/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Tombol Login -->
                        <div class="text-center">
                            <button type="submit" class="py-3 w-100 rounded-3 fw-bold"
                                style="background: #343434; color: white; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                {{ __('Log in') }}
                            </button>
                            <a href="{{ url("register?typeRegistration=$typeRegistration") }}">
                                <button type="button" class="py-3 mt-4 w-100 rounded-3 fw-bold"
                                style="background: gray; color: white; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                {{ __('Register') }}
                                </button>
                            </a>
                        </div>

                        <a href="{{ route('welcome') }}">
                            <button type="button" class="py-3 mt-4 w-100 rounded-3 fw-bold"
                                style="background: gray; color: white; border: none; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                {{ __('Back to welcome') }}
                            </button>
                        </a>
                    </form>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>


