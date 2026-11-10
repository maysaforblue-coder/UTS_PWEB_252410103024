@extends('layouts.app')

@section('title', 'Daftar Unit - lobby.')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-extrabold mb-0">Daftar Konsol & Jadwal</h2>
            <p class="text-muted small mb-0">Pilih unit yang siap pakai hari ini.</p>
        </div>
        <span class="badge badge-dark">Akun: {{ $username }}</span>
    </div>

    <div class="row g-4">
        @foreach ($consoles as $item)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 bg-white rounded-plopp shadow-sm h-100 p-3">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge badge-blue">{{ $item['tipe'] }}</span>
                        @if($item['status'] == 'Tersedia')
                            <span class="badge badge-lime">TERSEDIA</span>
                        @elseif($item['status'] == 'Dipakai')
                            <span class="badge badge-dark">DIPAKAI</span>
                        @else
                            <span class="badge bg-secondary text-white rounded-pill px-3 py-1">SERVIS</span>
                        @endif
                    </div>

                    <h4 class="fw-extrabold mb-1">{{ $item['nama'] }}</h4>
                    <p class="fw-bold mb-3" style="color: var(--brand-dark); font-size: 1.25rem;">
                        Rp {{ number_format($item['tarif'], 0, ',', '.') }} <span class="text-muted small fw-normal">/ jam</span>
                    </p>

                    <div class="rounded-4 p-3 mt-auto" style="background-color: var(--bg-cream);">
                        <small class="fw-bold text-muted d-block mb-1">🎮 Game Terpasang:</small>
                        <small class="fw-semibold d-block text-dark">{{ $item['game_favorit'] }}</small>
                        
                        <hr class="my-2">
                        <small class="fw-bold text-muted d-block mb-1">⏱ Jadwal / Info:</small>
                        <small class="fw-bold {{ $item['status'] == 'Tersedia' ? 'text-success' : 'text-danger' }}">
                            {{ $item['jadwal'] }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection