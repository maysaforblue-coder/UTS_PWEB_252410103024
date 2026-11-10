<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lobby.')</title>
    
    <!-- Font Plus Jakarta Sans & Bootstrap 5 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bg-cream: #F7F8F2;
            --brand-lime: #98EB00;
            --brand-dark: #0D1322;
            --brand-blue: #8592EE;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-cream);
            color: var(--brand-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* Tombol & Card Gaya Plopp */
        .btn-brand-dark {
            background-color: var(--brand-dark);
            color: #ffffff;
            border-radius: 50px;
            font-weight: 700;
            padding: 12px 24px;
            border: none;
            transition: 0.2s;
        }
        .btn-brand-dark:hover {
            background-color: #1e293b;
            color: #ffffff;
            transform: translateY(-1px);
        }
        .btn-brand-lime {
            background-color: var(--brand-lime);
            color: var(--brand-dark);
            border-radius: 50px;
            font-weight: 800;
            padding: 12px 24px;
            border: none;
            transition: 0.2s;
        }
        .btn-brand-lime:hover {
            background-color: #88d400;
            color: var(--brand-dark);
            transform: translateY(-1px);
        }
        .btn-brand-outline {
            border: 2px solid var(--brand-dark);
            border-radius: 50px;
            font-weight: 700;
            padding: 10px 24px;
            color: var(--brand-dark);
            background: transparent;
        }
        .btn-brand-outline:hover {
            background-color: var(--brand-dark);
            color: #ffffff;
        }
        .rounded-plopp {
            border-radius: 28px !important;
        }
        .badge-lime {
            background-color: var(--brand-lime);
            color: var(--brand-dark);
            font-weight: 800;
            border-radius: 50px;
            padding: 6px 14px;
        }
        .badge-dark {
            background-color: var(--brand-dark);
            color: #ffffff;
            font-weight: 700;
            border-radius: 50px;
            padding: 6px 14px;
        }
        .badge-blue {
            background-color: var(--brand-blue);
            color: #ffffff;
            font-weight: 700;
            border-radius: 50px;
            padding: 6px 14px;
        }
    </style>
</head>
<body>

    @if(isset($username))
        <x-navbar :username="$username" />
    @endif

    <main class="py-4 flex-grow-1">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>