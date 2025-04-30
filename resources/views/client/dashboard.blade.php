{{-- filepath: c:\laragon\www\freelance-manager\resources\views\client\dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
    <!-- Tabler CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet">
    <style>
        .dark-mode {
            background-color: #121212;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="page">
        <!-- Sidebar -->
        <aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/client/dashboard') }}">
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/client/invoices') }}">
                            <span class="nav-link-title">Invoice Saya</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="page-wrapper">
            <header class="navbar navbar-expand-md navbar-light d-print-none">
                <div class="container-xl">
                    <h1 class="navbar-brand">
                        <a href="{{ url('/') }}">
                            <img src="https://tabler.io/static/tabler-logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                        </a>
                    </h1>
                    <button id="theme-toggle" class="btn btn-sm btn-outline-primary">Toggle Dark Mode</button>
                </div>
            </header>

            <div class="page-body">
                <div class="container-xl">
                    <div class="card">
                        <div class="card-body">
                            <h4>Welcome, Client!</h4>
                            <p>Here you can view your invoices and manage your projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabler JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>