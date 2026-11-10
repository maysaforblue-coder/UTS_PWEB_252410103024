@props(['username' => 'Gamer'])

<div class="container pt-3">
    <nav class="navbar navbar-expand-lg rounded-plopp px-4 py-2" style="background-color: var(--brand-dark);">
        <a class="navbar-brand fw-extrabold text-white d-flex align-items-center gap-2" href="{{ route('dashboard', ['username' => $username]) }}">
            <span style="color: var(--brand-lime);">●</span> Lobby.
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center gap-2">
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold px-3" href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold px-3" href="{{ route('pengelolaan', ['username' => $username]) }}">Jadwal & Unit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-bold px-3" href="{{ route('profile', ['username' => $username]) }}">Profil</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-brand-lime px-3 py-1">Keluar</a>
                </li>
            </ul>
        </div>
    </nav>
</div>