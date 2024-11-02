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

                <div class="d-flex justify-content-around align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-header text-center">
                                <div class="d-flex justify-content-end gap-2">
                                    <?php
                                    $i = 5;
                                    ?>
                                    @while ($i >= 0)
                                        <i class="bi bi-star-fill text-warning fs-4"></i>

                                        <?php
                                        $i--;
                                        ?>
                                    @endwhile

                                </div>
                                <img src="{{ asset('assets/background2.jpg') }}" alt="image"
                                    class="object-fit-contain" style="width:200px;height:200px;">
                            </div>
                            <div class="card-body bg-dark text-light">
                                <h2>Product 1</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, libero.</p>

                                <div class="d-flex justify-content-between mb-3">
                                    <h4>₱2000</h4>
                                    <h4>20 Left</h4>
                                </div>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-light fw-bold">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-header text-center">
                                <div class="d-flex justify-content-end gap-2">
                                    <?php
                                    $i = 5;
                                    ?>
                                    @while ($i >= 0)
                                        <i class="bi bi-star-fill text-warning fs-4"></i>

                                        <?php
                                        $i--;
                                        ?>
                                    @endwhile

                                </div>
                                <img src="{{ asset('assets/background2.jpg') }}" alt="image"
                                    class="object-fit-contain" style="width:200px;height:200px;">
                            </div>
                            <div class="card-body bg-dark text-light">
                                <h2>Product 1</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, libero.</p>

                                <div class="d-flex justify-content-between mb-3">
                                    <h4>₱2000</h4>
                                    <h4>20 Left</h4>
                                </div>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-light fw-bold">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="card shadow-sm">
                            <div class="card-header text-center">
                                <div class="d-flex justify-content-end gap-2">
                                    <?php
                                    $i = 5;
                                    ?>
                                    @while ($i >= 0)
                                        <i class="bi bi-star-fill text-warning fs-4"></i>

                                        <?php
                                        $i--;
                                        ?>
                                    @endwhile

                                </div>
                                <img src="{{ asset('assets/background2.jpg') }}" alt="image"
                                    class="object-fit-contain" style="width:200px;height:200px;">
                            </div>
                            <div class="card-body bg-dark text-light">
                                <h2>Product 1</h2>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id, libero.</p>

                                <div class="d-flex justify-content-between mb-3">
                                    <h4>₱2000</h4>
                                    <h4>20 Left</h4>
                                </div>

                                <div class="d-grid">
                                    <a href="#" class="btn btn-light fw-bold">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
