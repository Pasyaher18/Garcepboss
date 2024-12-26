<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request)
    {
        $typeRegistration = $request->typeRegistration;

        if (!in_array($typeRegistration, ['user', 'driver'])) return redirect()->back();
        return view('auth.register', compact('typeRegistration'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
            'avatar' => ['required', 'image', 'max:2048'],
            'typeRegistration' => ['required', 'in:driver,user'], // Validasi tipe registrasi
            'birth_date' => ['required_if:typeRegistration,driver', 'date'],
            'driver_license' => ['required_if:typeRegistration,driver', 'image', 'max:2048'],
            'certificate_of_conduct' => ['required_if:typeRegistration,driver', 'file', 'mimes:pdf', 'max:2048'],
            'have_vehicle' => ['required_if:typeRegistration,driver', 'in:0,1'],
            'number_plate' => ['required_if:have_vehicle,1', 'max:20'],
            'vehicle_registration' => ['required_if:have_vehicle,1', 'image', 'max:2048'],
            'vehicle_photo' => ['required_if:have_vehicle,1', 'image', 'max:2048'],
        ]);

        DB::beginTransaction();
        try {
            // Buat user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'avatar' => $request->file('avatar')->store('avatar', 'public')
            ]);

            // Tentukan role berdasarkan typeRegistration
            $role = $request->typeRegistration === 'driver' ? 'driver' : 'user';

            // Assign role ke user
            $user->assignRole($role);

            // Jika tipe registrasi adalah driver, tambahkan detail tambahan
            if ($request->typeRegistration === 'driver') {
                $driverData = [
                    'user_id' => $user->id,
                    'birth_date' => $request->birth_date,
                ];

                // Upload file jika ada
                if ($request->hasFile('driver_license')) {
                    $driverData['driver_license'] = $request->file('driver_license')->store('driver_licenses', 'public');
                }

                if ($request->hasFile('certificate_of_conduct')) {
                    $driverData['certificate_of_conduct'] = $request->file('certificate_of_conduct')->store('certificates', 'public');
                }

                if ($request->have_vehicle) {
                    $driverData['number_plate'] = $request->number_plate;

                    if ($request->hasFile('vehicle_registration')) {
                        $driverData['vehicle_registration'] = $request->file('vehicle_registration')->store('vehicle_registrations', 'public');
                    }

                    if ($request->hasFile('vehicle_photo')) {
                        $driverData['vehicle_photo'] = $request->file('vehicle_photo')->store('vehicle_photos', 'public');
                    }
                }

                $driverData['have_vehicle'] = $request->have_vehicle;
                Driver::create($driverData);
            }

            // Commit transaksi jika semua berhasil
            DB::commit();

            // Event dan login
            event(new Registered($user));
            Auth::login($user);

            if ($role == "driver") {
                return redirect(route('driver-home'))->with('success', 'Registration successful!');
            }

            // Redirect ke dashboard
            return redirect(route('home'))->with('success', 'Registration successful!');
        } catch (Exception $e) {
            // Rollback transaksi jika terjadi error
            DB::rollBack();

            // Logging error (opsional, pastikan Anda memiliki logging yang dikonfigurasi)
            Log::error('Error during user registration: ', ['error' => $e->getMessage()]);

            // Redirect kembali dengan error message
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.'])->withInput();
        }
    }
}
