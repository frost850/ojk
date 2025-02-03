<!-- resources/views/dashboard/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <header class="bg-primary text-white p-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo h1">Ojek Kak</div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link text-white" href="/">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/services">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/marketplace">Marketplace</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/emergency-contacts">Kontak Darurat</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="/about">Tentang Kami</a></li>
                    </ul>
                </nav>
                <button class="btn btn-light" onclick="window.location.href='/login'">Login</button>
            </div>
        </header>

        <section class="hero text-center my-5">
            <h1 class="display-4">Selamat Datang di Aplikasi Ojek Kak!</h1>
            <p class="lead">Pesan ojek dengan mudah dan cepat.</p>
            <button class="btn btn-success btn-lg" onclick="window.location.href='/booking'">Pesan Sekarang</button>
        </section>

        <section class="features my-5">
            <h2 class="text-center">Informasi Layanan</h2>
            <div class="service-info text-center mb-4">
                <!-- Informasi tarif dan jenis layanan -->
                <p>Tarif dasar: Rp 10.000</p>
                <p>Diskon untuk pengguna baru: 20%</p>
            </div>
            <h2 class="text-center">Simulasi Perjalanan</h2>
            <form action="/estimate-fare" method="POST" class="text-center">
                @csrf
                <div class="form-row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="pickup_location" class="form-control" placeholder="Lokasi Penjemputan" required />
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" name="destination" class="form-control" placeholder="Tujuan" required />
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Estimasi Biaya</button>
            </form>
        </section>

        <section class="marketplace my-5">
            <h2 class="text-center">Marketplace</h2>
            <div class="products text-center mb-4">
                <!-- Menampilkan produk populer -->
                <p>Produk terbaru akan ditampilkan di sini.</p>
            </div>
            <button class="btn btn-info" onclick="window.location.href='/marketplace'">Lihat Semua</button>
        </section>

        <footer class="bg-light text-center p-3">
            <div class="contact-info">
                <p>Kontak: info@ojekapp.com</p>
                <p>Tel: 123-456-7890</p>
            </div>
            <div class="social-media">
                <!-- Ikon media sosial -->
            </div>
        </footer>
    </div>
@endsection
