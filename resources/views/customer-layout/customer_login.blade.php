<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-dark" href="{{ route('customer-login.dashboard') }}"
            @class(['current' => request()->is('/dashboard')]) wire:navigate>
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
                    <a class="nav-link fs-5 fw-bold @if (request()->is('dashboard')) current @endif"
                        href="{{ route('customer-login.dashboard') }}" @class(['current' => request()->is('/dashboard')])
                        wire:navigate>DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('orders')) current @endif"
                        href="{{ route('customer-login.orders') }}" @class(['current' => request()->is('/orders')]) wire:navigate>ORDERS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('messages')) current @endif"
                        href="{{ route('customer-login.messages') }}" @class(['current' => request()->is('/messages')])
                        wire:navigate>MESSAGES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-bold @if (request()->is('location')) current @endif"
                        href="{{ route('customer-login.location') }}" @class(['current' => request()->is('/location')])
                        wire:navigate>ABOUT</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-4">

                <a wire:navigate href="{{ route('customer-login.cart') }}" class="text-secondary"
                    style="text-decoration: none;">
                    <i class="fa-solid fa-cart-shopping fs-3"></i>
                </a>

                <a wire:navigate href="{{ route('customer-login.notification') }}" class="text-secondary"
                    style="text-decoration: none;">
                    <i class="fa-solid fa-bell fs-3"></i>
                </a>

                <div class="text-center">
                    <a wire:navigate href="{{ route('customer-login.profile') }}" style="text-decoration: none;">
                        <img src="{{ asset('assets/logo.png') }}" alt="profile" class="object-fit-contain rounded-pill"
                            style="width:50px;height:50px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
