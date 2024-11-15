<div class="container h-100 py-5">
    <div class="row justify-content-evenly">
        <div class="col-lg-5 col-md-5 text-center">
            <img src="{{ Storage::url('uploads/products/' . $product->image) }}" alt="product" class="object-fit-contain"
                style="width:400px;height:400px;">
        </div>
        <div class="col-lg-5 col-md-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a wire:navigate href="{{ route('customer-login.dashboard') }}"
                            class="fw-semibold text-dark" style="text-decoration: none;">BACK</a></li>
                    <li class="breadcrumb-item active fw-semibold text-secondary" aria-current="page">
                        {{ strtoupper($product->category) }}</li>
                </ol>
            </nav>

            <h1 class="fw-bold mb-3">{{ $product->name }}</h1>

            <div class="d-flex align-items-center mb-4">
                <div class="d-flex gap-1 me-3">
                    <?php
                    $i = 5;
                    ?>
                    @while ($i >= 0)
                        <i class="bi bi-star-fill text-success fs-5"></i>

                        <?php
                        $i--;
                        ?>
                    @endwhile
                </div>
                <a href="#" class="text-dark">8 Reviews</a>
            </div>

            <div class="d-flex gap-5 mb-5">
                <div>
                    <h6 class="text-secondary mb-2">PRICE</h6>
                    <h3>₱{{ $product->price }}</h3>
                </div>

                <div>
                    <h6 class="text-secondary mb-2">QUANTITY</h6>
                    <div class="d-flex align-items-center gap-4 bg-secondary rounded-pill p-2">
                        <button type="submit" class="btn btn-light btn-sm rounded-pill"><i
                                class="bi bi-dash"></i></button>

                        <h6 class="text-light fw-semibold">1</h6>
                        <button type="submit" class="btn btn-light btn-sm rounded-pill"><i
                                class="bi bi-plus"></i></button>
                    </div>
                </div>
            </div>

            <ul class="nav nav-underline" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-dark active" data-bs-toggle="tab" href="#description"
                        role="tab">DESCRIPTION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" data-bs-toggle="tab" href="#details" role="tab">DETAILS</a>
                </li>
            </ul>

            <div class="tab-content mt-3 mb-4">
                <div class="tab-pane fade show active" id="description" role="tabpanel">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="details" role="tabpanel">
                    <p>Content for the DETAILS tab goes here.</p>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-outline-success btn-lg rounded-pill shadow-sm "
                    style="width:180px;"><i class="bi bi-cart-check me-2"></i> Add to
                    Cart</button>

                <button type="submit" class="btn btn-success btn-lg rounded-pill shadow-sm" style="width:180px;">Buy
                    Now</button>
            </div>


        </div>
    </div>
</div>
