<div class="container-fluid h-100 p-0">
    <section class="vh-100 py-5">
        <div class="container d-flex justify-content-center align-items-center mb-5">
            <div class="col-lg-6 col-md-6 text-center">
                <img src="{{ asset('assets/photo1.png') }}" alt="photo" class="object-fit-contain"
                    style="width:450px;height:450px;">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-center mb-4">
                    <h1 class="fw-bold display-6 mb-3">Keep Fit and Strum the Beat of your Heart Strings.</h1>
                    <h4>Shop the best intruments and gear at Harmonics today.</h4>
                </div>

                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="d-grid">
                            <a href="#" type="button"
                                class="btn btn-outline-success btn-lg rounded-pill shadow-sm">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="d-grid">
                            <a href="#" type="button" class="btn btn-success btn-lg rounded-pill shadow-sm">Buy
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="container-fluid d-flex justify-content-around align-items-center border border-1 border-dark border-start-0 border-end-0 shadow p-3">
            <h3>Yamaha</h3>
            <h3>Fenders</h3>
            <h3>Pearl</h3>
            <h3>Spalding</h3>
            <h3>Under Armor</h3>
            <h3>Nike</h3>
            <h3>Adidas</h3>
        </div>
    </section>

    <section class="container-fluid vh-100 p-5 mb-5">
        <div class="mb-3">
            <h2 class="text-success fw-bold display-5">Best Sellers</h2>
            <h4>Get yours now!</h4>
        </div>


        <div>
            <swiper-container style="--swiper-navigation-color: black; --swiper-pagination-color: black"
                class="mySwiper" speed="600" parallax="true" pagination="true" pagination-clickable="true"
                navigation="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <div slot="container-start" class="parallax-bg bg-light" data-swiper-parallax="-23%">
                </div>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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
                </swiper-slide>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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
                </swiper-slide>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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

                    <div class="card shadow-sm w-100" style="border-radius:15px;">
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
                </swiper-slide>

            </swiper-container>
        </div>
    </section>

    <section class="container-fluid d-flex justify-content-center align-items-center vh-100 text-center footer">
        <div class="col-lg-6 col-md-6 text-light">
            <div class="mb-4">
                <h2 class="fw-bold fs-1">Your Dream Gear is on Sale!</h2>
                <h5>Get incredible discounts on sports equipment, musical
                    instruments, and gym
                    essentials. Don’t miss out—grab your deal at Harmonics today!</h5>
            </div>


            <a href="#" type="button" class="btn btn-outline-light btn-lg fw-bold">Buy Now</a>
        </div>

    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
