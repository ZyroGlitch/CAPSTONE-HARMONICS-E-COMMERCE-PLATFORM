<div>
    {{-- Background Wave Image --}}
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)"
                d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                                                                 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <g>
            <use xlink:href='#wave' opacity=".3">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                    calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".6">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                    calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacty=".9">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                    calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
        </g>
    </svg>

    <section class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-9 col-md-9">
            <div class="card shadow-sm">
                <div class="card-body d-flex justify-content-around align-items-center">
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="d-flex align-items-center gap-3 text-center">
                            <img src="{{ asset('assets/logo.png') }}" alt="logo"
                                class="object-fit-contain rounded-pill" style="width:50px;height:50px;">
                            <h5 class="text-success text-shadow fw-bold">HARMONICS</h5>
                        </div>
                        <img src="{{ asset('assets/signUp.png') }}" alt="Image" class="object-fit-contain"
                            style="width:450px;height:450px;">
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="text-center mb-4">
                            <h1 class="fw-bold">Get Started</h1>
                            <h6 class="fw-bold">Already have an account? <a href="{{ route('customer.login') }}"
                                    class="text-success" style="text-decoration: none">Sign
                                    In</a>
                            </h6>
                        </div>

                        <form action="#" method="POST">
                            @csrf

                            <div class="d-flex gap-3 mb-4">
                                <input type="text" class="form-control shadow-sm w-100" placeholder="Firstname"
                                    required>

                                <input type="text" class="form-control shadow-sm w-100" placeholder="Lastname"
                                    required>
                            </div>

                            <input type="text" class="form-control shadow-sm mb-4" placeholder="Contact Number"
                                required>

                            <input type="text" class="form-control shadow-sm mb-4" placeholder="Address" required>

                            <input type="email" class="form-control shadow-sm mb-4" placeholder="Email Address"
                                required>

                            <div class="input-group shadow-sm mb-4">
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    required>
                                <span class="input-group-text" onclick="togglePassword()" style="cursor: pointer;">
                                    <i class="bi bi-eye-slash" id="toggleEye"></i>
                                </span>
                            </div>

                            <div class="d-grid">
                                <input type="submit" value="Register" class="btn btn-success fw-bold">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleEye = document.getElementById("toggleEye");

            // Toggle the password field between text and password
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleEye.classList.remove("bi-eye-slash");
                toggleEye.classList.add("bi-eye");
            } else {
                passwordField.type = "password";
                toggleEye.classList.remove("bi-eye");
                toggleEye.classList.add("bi-eye-slash");
            }
        }
    </script>
</div>
