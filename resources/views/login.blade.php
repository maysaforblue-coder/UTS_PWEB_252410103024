@extends('layouts.app')

@section('title', 'Lobby. - Masuk')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-4">
            
            <!-- Aksen bola warna mirip gambar -->
            <div class="d-flex gap-2 justify-content-center mb-3">
                <div style="width: 24px; height: 24px; border-radius: 50%; background-color: var(--brand-lime);"></div>
                <div style="width: 24px; height: 24px; border-radius: 50%; background-color: var(--brand-blue);"></div>
            </div>

            <div class="card border-0 bg-white rounded-plopp shadow-sm p-4 text-center">
                <h2 class="fw-extrabold mb-1" style="letter-spacing: -0.5px;">Ready to Play?</h2>
                <p class="text-muted small mb-4">Cek unit PlayStation & jadwal kosong.</p>

                <form action="{{ route('dashboard') }}" method="GET">
                    <div class="mb-3 text-start">
                        <label for="username" class="form-label small fw-bold text-muted ps-2">Nama Pengunjung</label>
                        <input type="text" class="form-control rounded-pill px-3 py-2 border-2" id="username" name="username" placeholder="Ketik nama kamu..." style="background-color: var(--bg-cream);" required>
                    </div>

                    <button type="submit" class="btn btn-brand-dark w-100 mb-2">
                        Masuk Sekarang
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection