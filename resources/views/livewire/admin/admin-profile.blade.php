@extends('admin-layout.navbar')

@section('page-content')
    <div class="card bg-light shadow-sm">
        <div class="card-body d-flex">
            <div class="text-center">
                <img src="{{ asset('assets/photo1.png') }}" alt="profile" class="object-fit-contain rounded-pill"
                    style="width:200px;height:200px;">
            </div>
            <div class="d-flex flex-column justify-content-between">
                <div>
                    <h2 class="fw-bold">{{ $user->firstname }} {{ $user->lastname }}</h2>
                    <h5 class="text-primary mb-3">{{ $user->role }}</h5>

                    <h5><i class="bi bi-envelope-at me-2"></i> {{ $user->email }}</h5>
                    <h5><i class="bi bi-telephone-forward me-2"></i> {{ $user->contact_number }}</h5>
                </div>

                <button type="submit" class="btn btn-outline-dark fw-bold shadow-sm rounded-pill"><i
                        class="bi bi-pencil-square"></i> Edit Profile</button>
            </div>
        </div>
    </div>
@endsection
