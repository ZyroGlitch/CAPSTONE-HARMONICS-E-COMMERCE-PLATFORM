<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-dark" href="{{ route('customer.landingPage') }}" @class(['customer-nav-current' => request()->is('/')])
            wire:navigate>
            <img src="{{ asset('assets/logo.png') }}" alt="Harmonics" class="object-fit-contain rounded-pill me-3"
                style="width:50px;height:50px;">
            <span class="text-success">HARMONICS</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-5">
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('/')) customer-nav-current @endif"
                        href="{{ route('customer.landingPage') }}" @class(['customer-nav-current' => request()->is('/')]) wire:navigate>HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('product')) customer-nav-current @endif"
                        href="{{ route('customer.product') }}" @class(['customer-nav-current' => request()->is('/product')]) wire:navigate>PRODUCT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('about')) customer-nav-current @endif"
                        href="{{ route('customer.about') }}" @class(['customer-nav-current' => request()->is('/about')]) wire:navigate>ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('contact')) customer-nav-current @endif"
                        href="{{ route('customer.contact') }}" @class(['curcustomer-nav-currentrent' => request()->is('/contact')]) wire:navigate>CONTACT</a>
                </li>
            </ul>

            <a wire:navigate href="{{ route('customer.login') }}"
                class="btn btn-outline-success fw-bold logout">LOGIN</a>
        </div>
    </div>
</nav>
