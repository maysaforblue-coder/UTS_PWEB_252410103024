@extends('layouts.app')

@section('title', 'Profil - PlayZone')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5">
            <div class="card border-0 bg-white rounded-plopp shadow-sm p-4 text-center">
                
                <!-- Avatar Inisial Bulat Lime -->
                <div class="mx-auto d-flex align-items-center justify-content-center fw-extrabold mb-3" style="width: 80px; height: 80px; border-radius: 50%; background-color: var(--brand-lime); color: var(--brand-dark); font-size: 2rem;">
                    {{ strtoupper(substr($profile['username'], 0, 1)) }}
                </div>

                <h3 class="fw-extrabold mb-1">{{ $profile['username'] }}</h3>
                <span class="badge badge-dark mx-auto mb-4">{{ $profile['role'] }}</span>

                <div class="text-start rounded-4 p-3 mb-4" style="background-color: var(--bg-cream);">
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted small fw-bold">Email</span>
                        <span class="fw-bold small">{{ $profile['email'] }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted small fw-bold">Bergabung</span>
                        <span class="fw-bold small">{{ $profile['member_since'] }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted small fw-bold">Waktu Main</span>
                        <span class="fw-bold small">{{ $profile['jam_bermain'] }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <span class="text-muted small fw-bold">Poin Reward</span>
                        <span class="fw-extrabold small" style="color: #65a30d;">Rp {{ $profile['saldo_koin'] }}</span>
                    </div>
                </div>

                <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-brand-dark w-100">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection