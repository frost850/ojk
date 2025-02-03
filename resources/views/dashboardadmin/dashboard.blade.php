@extends('layouts.admin')

@section('content')
    <div class="dashboard-admin">
        <header class="bg-dark text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo h1">Admin Dashboard</div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link text-white" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/users">Manajemen Pengguna</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/orders">Manajemen Pesanan</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/sponsors">Manajemen Sponsor</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/admin/reports">Laporan</a></li>
                    </ul>
                </nav>
                <button class="btn btn-light" onclick="window.location.href='/logout'">Logout</button>
            </div>
        </header>

        <section class="hero text-center my-5">
            <h1 class="display-4">Selamat Datang di Dashboard Admin!</h1>
            <p class="lead">Kelola aplikasi dengan mudah.</p>
        </section>

        <footer class="bg-light text-center p-3">
            <div class="contact-info">
                <p>Kontak: admin@ojekapp.com</p>
                <p>Tel: 123-456-7890</p>
            </div>
        </footer>
    </div>
@endsection
