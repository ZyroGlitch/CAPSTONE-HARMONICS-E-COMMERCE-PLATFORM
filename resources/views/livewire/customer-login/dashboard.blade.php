<div class="container-fluid text-dark h-100">
    <section class="container-fluid">
        <div class="d-flex justify-content-center align-items-center h-100 py-5">
            <div class="col-lg-11 col-md-11">
                <div class="d-flex align-items-center gap-5 mb-5">
                    <div>
                        <label for="category" class="form-label">Select Category</label>
                        <select class="form-select shadow-sm" id="category" style="width:250px;">
                            <option value="All">All</option>
                            <option value="Musics">Musics</option>
                            <option value="Sports">Sports</option>
                            <option value="Fitness">Fitness</option>
                        </select>
                    </div>

                    <div>
                        <label for="category" class="form-label">Price Range</label>
                        <select class="form-select shadow-sm" id="category" style="width:250px;">
                            <option value="affordable">Affordable Price</option>
                            <option value="expensive">Expensive Price</option>
                        </select>
                    </div>
                </div>

                <div class="grid-container">
                    @forelse ($products as $product)
                        <div class="card shadow-sm rounded card-hover">
                            <div class="card-body bg-light">
                                <form wire:submit.prevent='passData' method="post">
                                    @csrf

                                    <div class="d-flex gap-1 mb-2">
                                        <?php
                                        $i = 5;
                                        ?>
                                        @while ($i >= 0)
                                            <i class="bi bi-star-fill text-warning fs-5"></i>

                                            <?php
                                            $i--;
                                            ?>
                                        @endwhile
                                    </div>

                                    <div class="text-center py-2 mb-4" style="background:#dfdfdf;border-radius:15px;">
                                        <img src="{{ Storage::url('uploads/products/' . $product->image) }}"
                                            alt="image" class="object-fit-contain rounded-lg"
                                            style="width:200px;height:200px;">
                                    </div>

                                    <h3 class="fw-bold mb-2">{{ $product->name }}</h3>

                                    <h6 class="mb-2">Stock Available: {{ $product->stock }}</h6>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="fw-semibold">₱{{ $product->price }}</h4>

                                        <button type="submit" wire:click="$set('key', '{{ $product->productID }}')"
                                            class="btn btn-success btn-lg rounded-lg fw-bold">
                                            <i class="bi bi-cart3"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @empty
                        <h2>No Product Exist!</h2>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

</div>
