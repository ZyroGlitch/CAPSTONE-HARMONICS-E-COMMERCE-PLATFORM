<div class="container-fluid text-dark h-100">
    <section class="container-fluid">
        <div class="d-flex justify-content-center align-items-center h-100 py-5">
            <div class="col-lg-12 col-md-12">
                <div class="d-flex align-items-center gap-5 mb-5 ps-5">
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

                <div class="d-flex justify-content-around align-items-start">
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm" style="border-radius:15px;">
                            <div class="card-body bg-light">
                                <a href="#" class="text-dark" style="text-decoration: none">
                                    <div class="text-center mb-4" style="background:#dfdfdf;border-radius:15px;">
                                        <img src="{{ asset('assets/basketball.png') }}" alt="image"
                                            class="object-fit-contain rounded-lg" style="width:200px;height:200px;">
                                    </div>

                                    <h3 class="fw-bold">Product 1</h3>

                                    <div class="d-flex gap-1 mb-3">
                                        <?php
                                        $i = 5;
                                        ?>
                                        @while ($i >= 0)
                                            <i class="bi bi-star-fill text-warning"></i>

                                            <?php
                                            $i--;
                                            ?>
                                        @endwhile
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="fw-semibold">₱2000</h4>

                                        <a href="#" class="btn btn-success btn-lg rounded-lg fw-bold"><i
                                                class="bi bi-cart3"></i></a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm" style="border-radius:15px;">
                            <div class="card-body bg-light">
                                <a href="#" class="text-dark" style="text-decoration: none">
                                    <div class="text-center mb-4" style="background:#dfdfdf;border-radius:15px;">
                                        <img src="{{ asset('assets/basketball.png') }}" alt="image"
                                            class="object-fit-contain rounded-lg" style="width:200px;height:200px;">
                                    </div>

                                    <h3 class="fw-bold">Product 1</h3>

                                    <div class="d-flex gap-1 mb-3">
                                        <?php
                                        $i = 5;
                                        ?>
                                        @while ($i >= 0)
                                            <i class="bi bi-star-fill text-warning"></i>

                                            <?php
                                            $i--;
                                            ?>
                                        @endwhile
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="fw-semibold">₱2000</h4>

                                        <a href="#" class="btn btn-success btn-lg rounded-lg fw-bold"><i
                                                class="bi bi-cart3"></i></a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm" style="border-radius:15px;">
                            <div class="card-body bg-light">
                                <a href="#" class="text-dark" style="text-decoration: none">
                                    <div class="text-center mb-4" style="background:#dfdfdf;border-radius:15px;">
                                        <img src="{{ asset('assets/basketball.png') }}" alt="image"
                                            class="object-fit-contain rounded-lg" style="width:200px;height:200px;">
                                    </div>

                                    <h3 class="fw-bold">Product 1</h3>

                                    <div class="d-flex gap-1 mb-3">
                                        <?php
                                        $i = 5;
                                        ?>
                                        @while ($i >= 0)
                                            <i class="bi bi-star-fill text-warning"></i>

                                            <?php
                                            $i--;
                                            ?>
                                        @endwhile
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="fw-semibold">₱2000</h4>

                                        <a href="#" class="btn btn-success btn-lg rounded-lg fw-bold"><i
                                                class="bi bi-cart3"></i></a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
