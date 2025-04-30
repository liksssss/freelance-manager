{{-- filepath: c:\laragon\www\freelance-manager\resources\views\admin\dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
                            <span class="nav-link-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/users') }}">
                            <span class="nav-link-title">Manajemen User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/invoices') }}">
                            <span class="nav-link-title">Manajemen Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/projects') }}">
                            <span class="nav-link-title">Manajemen Project</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/clients') }}">
                            <span class="nav-link-title">Manajemen Client</span>
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
                    <div class="ms-auto d-flex align-items-center">
                        <div class="me-3">
                            <strong>{{ $user->name }}</strong> <br>
                            <small>{{ $user->email }}</small>
                        </div>
                        <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-outline-secondary">Edit Profile</a>
                        <button id="theme-toggle" class="btn btn-sm btn-outline-primary ms-2">Toggle Dark Mode</button>
                    </div>
                </div>
            </header>

            <div class="page-body">
                <div class="container-xl">
                    <div class="row">
                        <!-- Card: Total Users -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Total Users</h4>
                                    <p class="h1">{{ $totalUsers }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Total Projects -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Total Projects</h4>
                                    <p class="h1">{{ $totalProjects }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Total Invoices -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Total Invoices</h4>
                                    <p class="h1">{{ $totalInvoices }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card: Total Clients -->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Total Clients</h4>
                                    <p class="h1">{{ $totalClients }}</p>
                                </div>
                            </div>
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