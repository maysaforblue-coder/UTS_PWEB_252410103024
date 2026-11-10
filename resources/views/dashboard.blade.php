@extends('layouts.app')

@section('title', 'Dashboard - PlayZone')

@section('content')
<div class="container">
    <!-- Header Banner Segar -->
    <div class="p-4 p-md-5 mb-4 rounded-plopp shadow-sm position-relative overflow-hidden" style="background-color: var(--brand-lime);">
        <div class="row align-items-center">
            <div class="col-md-12">
                <span class="badge badge-dark mb-2">STATUS AKTIF</span>
                <h1 class="fw-extrabold text-dark mb-1" style="font-size: 2.3rem;">Halo, {{ $username }}! :D</h1>
                <p class="text-dark fw-semibold mb-3">In this economy, lihat jadwal rental kosong dulu biar gak buang-buang bensin;)</p>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-brand-dark">
                    Lihat Jadwal & Unit 
                </a>
            </div>
        </div>
    </div>

    <!-- Ringkasan Angka Card Bulat -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card border-0 bg-white rounded-plopp p-3 shadow-sm text-center">
                <span class="text-muted small fw-bold">TOTAL UNIT</span>
                <h2 class="fw-extrabold my-1">{{ $stats['total_unit'] }}</h2>
                <small class="text-muted">Konsol</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 bg-white rounded-plopp p-3 shadow-sm text-center">
                <span class="text-muted small fw-bold">KOSONG</span>
                <h2 class="fw-extrabold my-1" style="color: #65a30d;">{{ $stats['unit_tersedia'] }}</h2>
                <small class="text-muted">Bisa Main</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 bg-white rounded-plopp p-3 shadow-sm text-center">
                <span class="text-muted small fw-bold">DIPAKAI</span>
                <h2 class="fw-extrabold my-1 text-danger">{{ $stats['unit_disewa'] }}</h2>
                <small class="text-muted">Sedang Main</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card border-0 bg-white rounded-plopp p-3 shadow-sm text-center">
                <span class="text-muted small fw-bold">SERVIS</span>
                <h2 class="fw-extrabold my-1 text-secondary">{{ $stats['unit_maintenance'] }}</h2>
                <small class="text-muted">Maintenance</small>
            </div>
        </div>
    </div>
</div>
@endsection