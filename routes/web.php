<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

// Guess Route
Route::get('/', function () {
    return view('landing_page');
})->name('landing_page');
Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('product', action: function () {
    return view('product');
})->name('product');
Route::get('after-login', action: function () {
    return view('after-login');
})->name('after_login');
Route::get('after-register', action: function () {
    return view('after-register');
})->name('after_register');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('home', function () {
        $user = auth()->user()->id;
        $currentOrder = Order::where('user_id', $user)
            ->whereNotIn('status', ['cancelled', 'completed'])
            ->latest('created_at')
            ->first();

        $orderAvailable = Order::latest()->where('user_id', $user)->get();
        $orders = [];
        foreach ($orderAvailable as $order) {
            // Assuming each order has 'pickup_address' and 'destination_address'
            $orders[$order->user->name] = ['address' => 'Pickup: ' . $order->pick_location . ' | Destination: ' . $order->des_location, "id" => $order->id, 'status' => $order->status];
        }

        return view("dashbaord_user", compact('currentOrder', 'orders'));
    })->name(name: 'home');
    Route::get('order', [OrderController::class, 'index'])->name(name: 'order');
    Route::post('order', [OrderController::class, 'store'])->name(name: 'order.store');
    Route::get('/driver/home', function () {
        $currentOrder = Order::where('driver_id', auth()->id())
            ->whereNotIn('status', ['cancelled', 'completed'])
            ->latest('created_at')
            ->first();
        $orderAvailable = Order::latest()->where('status', 'pending')->get();
        $orders = [];
        foreach ($orderAvailable as $order) {
            // Assuming each order has 'pickup_address' and 'destination_address'
            $orders[$order->user->name] = ['address' => 'Pickup: ' . $order->pick_location . ' | Destination: ' . $order->des_location, "id" => $order->id];
        }
        return view("dashboard_driver", compact('currentOrder', 'orders'));
    })->name(name: 'driver-home');

    Route::get('/driver/{id}/take-order', [OrderController::class, 'takeOrder'])->name(name: 'take-order');
    Route::get('/driver/{id}/update-status', [OrderController::class, 'status'])->name(name: 'order.status');
    Route::get('/driver/{id}/cancel', [OrderController::class, 'cancel'])->name(name: 'order.cancel');
    Route::get('/driver/order-history', [OrderController::class, 'orderHistory'])->name(name: 'order-history');
});

require __DIR__ . '/auth.php';
