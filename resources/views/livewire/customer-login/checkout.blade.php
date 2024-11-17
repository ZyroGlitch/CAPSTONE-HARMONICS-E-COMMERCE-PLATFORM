<div class="container h-100 py-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a wire:navigate href="{{ route('dashboard.view') }}" class="fw-bold text-dark fs-4"
                style="text-decoration: none;">BACK</a></li>
        <li class="breadcrumb-item active fw-bold text-secondary fs-4" aria-current="page">
            CHECKOUT</li>
    </ol>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6">
            <h6 class="text-secondary fw-bold mb-3">Delivery Information</h6>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex gap-3 mb-4">
                        <div class="w-100">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control shadow-sm" id="name" required>
                        </div>

                        <div class="w-100">
                            <label for="number" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control shadow-sm" id="number" required>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="w-100">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control shadow-sm" id="email" required>
                        </div>

                        <div class="w-100">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control shadow-sm" id="address" required>
                        </div>
                    </div>
                </div>
            </div>

            <h6 class="text-secondary fw-bold mb-3">Payment Method</h6>
            <div class="card shadow-sm">
                <div class="card-body d-flex gap-3">
                    <div class="form-check">
                        <input class="form-check-input shadow-sm" type="radio" id="onlinePayment" name="method">
                        <label class="form-check-label" for="onlinePayment">
                            Online Payment
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input shadow-sm" type="radio" id="cod" name="method">
                        <label class="form-check-label" for="cod">
                            Cash on Delivery
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <h6 class="text-secondary fw-bold mb-3">Order Summary</h6>

            <div class="card shadow-sm">
                <div class="card-body p-3">
                    <table class="table mb-5">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr class="align-middle">
                                    <td colspan="2">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/basketball.png') }}" alt="product"
                                                    class="object-fit-contain" style="width:70px;height:70px;">
                                            </div>

                                            <div>
                                                <h5 class="fw-bold">BasketBall</h5>
                                                <h6>$200</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-between align-items-center shadow-sm p-1">
                                            <a href="#" type="button" class="btn btn-light btn-sm"><i
                                                    class="bi bi-dash"></i></a>
                                            <h6>1</h6>
                                            <a href="#" type="button" class="btn btn-light btn-sm"><i
                                                    class="bi bi-plus"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="3">No Product Exist!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>


                    <div class="d-flex justify-content-between">
                        <h6 class="text-secondary fw-bold">Subtotal</h6>
                        <h6 class="text-secondary fw-bold">$6500</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <h6 class="text-secondary fw-bold">Shipping Fee</h6>
                        <h6 class="text-secondary fw-bold">Free</h6>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <h6 class="text-secondary fw-bold">Total(PHP)</h6>
                        <h6 class="text-secondary fw-bold">$6500</h6>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-success shadow-sm fw-semibold">Checkout Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
