@extends('admin-layout.navbar')

@section('page-content')
    <form wire:submit='store' method="post" enctype="multipart/form-data">
        @csrf

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4><i class="fa-solid fa-bag-shopping me-2"></i> Add New Product</h4>

            <button type="submit" class="btn btn-outline-dark fw-bold shadow-sm">
                <i class="bi bi-check-circle-fill me-2"></i> Add Product
            </button>
        </div>

        <div class="d-flex justify-content-center align-items-stretch gap-3 mb-3">
            <div class="col-lg-7 col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">General Information</h5>

                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input wire:model='name' type="text" class="form-control shadow-sm" id="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Product Description</label>
                            <textarea wire:model='description' class="form-control shadow-sm" id="description" rows="6" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Preview Image</h5>

                        <div class="text-center bg-light mb-3">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="image" class="object-fit-contain"
                                    style="width:200px;height:200px;">
                            @else
                                <img src="{{ asset('assets/basketball.png') }}" alt="image" class="object-fit-contain"
                                    style="width:200px;height:200px;">
                            @endif
                        </div>

                        <div>
                            <label for="formFile" class="form-label">Upload Image</label>
                            <input wire:model='image' class="form-control shadow-sm" type="file" id="formFile" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <div class="col-lg-7 col-md-7">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-3">Pricing and Stock</h5>

                        <div class="d-flex justify-content-between align-items-center gap-4">
                            <div class="w-100">
                                <label for="price" class="form-label">Price</label>
                                <input wire:model='price' type="number" class="form-control shadow-sm" id="price"
                                    required>
                            </div>

                            <div class="w-100">
                                <label for="stock" class="form-label">Stock</label>
                                <input wire:model='stock' type="number" class="form-control shadow-sm" id="stock"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="card shadow-sm">
                    <div class="card-body h-100">
                        <h5 class="mb-3">Category</h5>

                        <select wire:model='category' class="form-select shadow-sm" required>
                            <option value="Music">Music</option>
                            <option value="Sports">Sports</option>
                            <option value="Fitness">Fitness</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
