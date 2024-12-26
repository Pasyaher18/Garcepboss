<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Exception;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeOrder = Order::where('user_id', auth()->id())
            ->whereNotIn('status', ['cancelled', 'completed'])
            ->latest('created_at')
            ->first();

        if ($activeOrder) {
            return redirect()->route("home")->with('error', "You already have an active order. Please complete or cancel it before making a new one.");
        }

        return view("order");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        try {
            DB::beginTransaction();
            Order::create(
                [
                    ...$request->validated(),
                    'user_id' => auth()->user()->id,
                    'status' => 'pending'
                ]
            );

            DB::commit();
            return redirect()->route("home")->with('success', "Make order success, waiting for the driver.");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route("home")->with('error', value: "Make order failed, pls try again.");
        }
    }

    public function takeOrder(string $id)
    {
        $currentOrder = Order::where('driver_id', auth()->id())
            ->whereNotIn('status', ['cancelled', 'completed'])
            ->latest('created_at')
            ->first();


        if ($currentOrder) {
            return redirect()->route("driver-home")->with('error', "You already have an active order. Please complete or cancel it before taking a new one.");
        }

        try {
            DB::beginTransaction();
            $order = Order::where('id', $id)->first();
            $order->update(
                [
                    'driver_id' => auth()->user()->id,
                    'status' => 'accepted'
                ]
            );

            DB::commit();
            return redirect()->route("driver-home")->with('success', "Take order success.");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route("driver-home")->with('error', value: "Take order failed, pls try again.");
        }
    }

    public function orderHistory()
    {
        $orders = Order::where('driver_id', auth()->id())
            ->latest('created_at');

        return view("order-history");
    }

    public function status(string $id)
    {
        try {
            DB::beginTransaction();
            $order = Order::where('id', $id)->first();

            $user = auth()->user();

            $status = "";
            switch ($order->status) {
                case "accepted":
                    $status = "in_progress";
                    break;
                case "in_progress":
                    $status = "completed";
            }

            $order->update(
                [
                    'status' => $status
                ]
            );

            DB::commit();

            if ($user->hasRole('driver')) {
                return redirect()->route("driver-home")->with('success', "Pick up customer success.");
            }

            return redirect()->route("home")->with('success', "Complete order success.");
        } catch (Exception $e) {
            DB::rollBack();

            if ($user->hasRole('driver')) {
                return redirect()->route("home")->with('error', value: "Pick up customer failed, pls try again.");
            }
            return redirect()->route("home")->with('error', value: "Complete order failed, pls try again.");
        }
    }

    public function cancel(string $id) {
        try {
            DB::beginTransaction();
            $order = Order::where('id', $id)->first();
            $user = auth()->user();
            $status = "cancelled";

            $driver_id = $order->driver_id;
            if($user->hasRole('driver')) {
                $status = "pending";
                $driver_id = null;
            }

            $order->update(
                [
                    'status' => $status,
                    'driver_id' => $driver_id
                ]
            );

            DB::commit();

            if ($user->hasRole('driver')) {
                return redirect()->route("driver-home")->with('success', "Cancel order success.");
            }

            return redirect()->route("home")->with('success', "Cancel order success.");
        } catch (Exception $e) {
            DB::rollBack();

            if ($user->hasRole('driver')) {
                return redirect()->route("driver-home")->with('error', value: "Cancel order failed, pls try again.");
            }

            return redirect()->route("home")->with('error', value: "Cancel order failed, pls try again.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
