<div class="container-fluid h-100 p-0">
    <section class="vh-100">
        <div class="container d-flex justify-content-center align-items-center mb-5">
            <div class="col-lg-6 col-md-6 text-center">
                <img src="{{ asset('assets/photo1.png') }}" alt="photo" class="object-fit-contain"
                    style="width:450px;height:450px;">
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="text-center mb-4">
                    <h1 class="fw-bold">Keep Fit and Strum</h1>
                    <h2 class="fw-bold">the Beat of your Heart Strings.</h2>
                    <h5>Shop the best intruments and</h5>
                    <h5>gear at Harmonics today.</h5>
                </div>

                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="d-grid">
                            <a href="#" type="button" class="btn btn-outline-primary btn-lg rounded-pill">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="d-grid">
                            <a href="#" type="button" class="btn btn-primary btn-lg rounded-pill">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="container-fluid d-flex justify-content-around align-items-center border border-1 border-dark border-start-0 border-end-0 p-3">
            <h3>Yamaha</h3>
            <h3>Fenders</h3>
            <h3>Pearl</h3>
            <h3>Spalding</h3>
            <h3>Under Armor</h3>
            <h3>Nike</h3>
            <h3>Adidas</h3>
        </div>
    </section>

    <section class="container-fluid vh-100 px-5" style="margin-bottom: 6rem;">
        <h2 class="fw-bold">Best Sellers</h2>
        <h5>Get yours now!</h5>

        <div>
            <swiper-container style="--swiper-navigation-color: black; --swiper-pagination-color: black"
                class="mySwiper" speed="600" parallax="true" pagination="true" pagination-clickable="true"
                navigation="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                <div slot="container-start" class="parallax-bg bg-light" data-swiper-parallax="-23%">
                </div>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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
                </swiper-slide>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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
                </swiper-slide>

                <swiper-slide class="d-flex justify-content-between align-items-center gap-5">
                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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

                    <div class="card shadow-sm">
                        <div class="card-header text-center py-3">
                            <div class="d-flex justify-content-end gap-2 mb-3">
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
                            <img src="{{ asset('assets/logo.png') }}" alt="" class="object-fit-contain"
                                style="width:200px;height:200px;">
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
