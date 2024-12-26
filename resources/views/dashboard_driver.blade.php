<x-app-layout>
    <div class="container-fluid bg-dark text-light"
        style="background-color: #343434 !important; min-height: 100vh; position: relative; overflow: hidden;">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

            <div class="row g-4">
                <!-- Left Side -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="gap-4 d-flex flex-column align-items-start">
                        <div>
                            <!-- Title and Description -->
                            <h1 class="mb-3 text-left fw-bold" style="font-family: 'Inter', sans-serif; font-size: 35px;">
                                Welcome Back! {{ auth()->user()->name }}
                            </h1>
                            <p class="" style="color: white;">
                                Get ready to manage your deliveries and keep track of your orders. Your next journey
                                awaits!
                            </p>
                        </div>

                        <!-- Boxes Section -->
                        <div class="flex-wrap gap-5 mt-4 mb-4 d-flex">

                            <!-- Box 1 -->
                            <div class="flex-column d-flex">
                                <a href="#"
                                    class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon">
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap"
                                    style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;">
                                    Service Order
                                </p>
                            </div>

                            <!-- Box 2 -->
                            <div class="flex-column d-flex">
                                {{-- <a href="#" class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <i class="ti ti-file-text" style="font-size: 40px; color: white;"></i>
                                    <img src="{{ asset('icon/vehicle.png') }}" alt="">
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap" style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;">
                                    Rent Vehicle</p> --}}

                                <a href="#"
                                    class="d-flex align-items-center justify-content-center rounded-4 hover-scale"
                                    style="background: #272727; width: 90px; height: 90px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.3s; text-decoration: none !important;">
                                    <i class="ti ti-artboard" style="font-size: 40px; color: white;"></i>
                                </a>
                                <p class="mt-2 text-center fw-light text-wrap"
                                    style="color: white; max-width: 90px; line-height: 1.2; font-size: 13px;"">
                                    Upcoming</p>
                            </div>

                        </div>

                        <!-- Driver -->
                        <div>
                            <h1 class="mb-3 text-left fw-bold"
                                style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                                Recent Customers
                            </h1>
                            <div class="flex-row gap-5 d-flex">

                                <!-- Card Skeleton -->
                                <a href="#"
                                    class="d-flex flex-column align-items-center justify-content-start rounded-5"
                                    style="background: #272727; width: 220px; padding: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none;">

                                    <!-- Skeleton Foto Kurir -->
                                    <div class="overflow-hidden d-flex justify-content-center align-items-center rounded-5 skeleton"
                                        style="width: 95%; aspect-ratio: 3/4; background: #3c3c3c; margin-bottom: 10px;">
                                        <img src="{{ asset($currentOrder?->user?->avatar ?? 'avatar.svg') }}" alt="Kurir Photo"
                                                    style="width: 100%; height: 100%; object-fit: containt;">
                                    </div>

                                    <!-- Skeleton Nama Kurir -->
                                    <p class="text-center skeleton"
                                        style="color: white; width: 70%; height: 24px; margin: 10px 0; background: #3c3c3c; border-radius: 4px;">
                                        @if ($currentOrder)
                                            {{ $currentOrder->user->name }}
                                        @endif
                                    </p>
                                </a>

                                <!-- Card Skeleton -->
                                <a href="#"
                                    class="d-flex flex-column align-items-start justify-content-center rounded-5"
                                    style="background: #272727; width: 220px; padding: 25px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); text-decoration: none; position: relative;">

                                    <!-- Skeleton Foto Kurir -->
                                    <div class="skeleton d-flex align-items-center fw-semibold"
                                        style="width: 100%; height: 100%; color: #ffffff; text-align: left; font-size: 2em; font-style: italic;">
                                        @if ($currentOrder?->status == 'accepted')
                                            Go to destination
                                        @elseif ($currentOrder?->status == 'in_progress')
                                            You are in order now
                                        @else
                                            No order yet
                                        @endif
                                    </div>

                                    <!-- Foto di Pojok Kanan Bawah -->
                                    <img src="{{ asset('icon/moto_speed.png') }}" alt="Icon"
                                        style="width: 140%; position: absolute; bottom: -110px; right: -84px;">
                                </a>

                                @if ($currentOrder)
                                    <div class="flex-row gap-4 my-auto d-flex" style="flex-flow:column !important;">
                                        @if ($currentOrder->status != "in_progress")
                                        <a href="{{ route('order.status', $currentOrder->id) }}">
                                            <button class="btn btn-lg btn-primary">
                                                Pick up customer
                                            </button>
                                        </a>
                                        @endif

                                        @if ($currentOrder?->status == 'accepted')
                                            <button class="btn btn-lg btn-danger cancel-button">
                                                Cancel
                                            </button>
                                        @endif
                                    </div>
                                @endif
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
                            <h1 class="mb-3 fw-bold"
                                style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
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

                        <div class="d-flex flex-column align-items-center justify-content-start rounded-5"
                            style="background: #ffffff; width: 120%; padding: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            <div class="overflow-hidden rounded-5" style="width: 100%; aspect-ratio: 4/2;">
                                <img src="{{ asset('icon/maps.png') }}" alt="Kurir Photo"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>

                    <!-- Order List -->
                    <div style="width: 100%;">
                        <!-- Title -->
                        <h1 class="mb-3 text-left fw-bold"
                            style="font-family: 'Inter', sans-serif; font-size: 25px; font-style: italic;">
                            Orders
                        </h1>

                        <!-- Reminder Card -->
                        <div class="rounded-5"
                            style="background: #272727; width: 80%; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 15px; min-height: 200px">
                            <!-- List Pesanan -->
                            <div class="gap-3 d-flex flex-column rounded-4"
                                style="max-height: 200px; overflow-y: auto; scrollbar-width: thin; scrollbar-color: #3c3c3c #272727;">

                                <!-- List Pesanan -->
                                @forelse ($orders as $name => $order)
                                    <div class="p-3 d-flex justify-content-between align-items-center rounded-4"
                                        style="background: #3c3c3c;">
                                        <div>
                                            <p class="m-0" style="color: white; font-size: 16px; font-weight: bold;">
                                                {{ $name }}</p>
                                            <p class="m-0" style="color: #c2c2c2; font-size: 14px;">
                                                <i class="ti ti-map-pin">&nbsp;</i>{{ $order['address'] }}
                                            </p>
                                        </div>
                                        <a href="{{ route('take-order', $order['id']) }}">
                                            <button class="btn btn-sm btn-primary"
                                                style="background: #272727; border: none; font-size: 14px;">
                                                Take Order
                                            </button>
                                        </a>
                                    </div>
                                @empty
                                    <div class="container-fluid" style="height: 100vh;">
                                        <!-- Set container height to 100% of viewport height -->
                                        <div class="d-flex align-items-center justify-content-center"
                                            style="height: 100%;">
                                            <h2>No order list available</h2>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

        <!-- Segitiga Putih di Kanan Bawah -->
        <div
            style="
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

        @if ($currentOrder?->status == 'accepted')
            @push('js')
                <script>
                    $(document).on('click', '.cancel-button', function(e) {
                        e.preventDefault(); // Prevent the default form submission

                        // Show SweetAlert confirmation
                        Swal.fire({
                            title: 'Confirmation',
                            text: 'Are u sure cancel this order?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, Cancel!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ route('order.cancel', $currentOrder->id) }}";
                            }
                        });
                    });
                </script>
            @endpush
        @endif
    </div>
</x-app-layout>
