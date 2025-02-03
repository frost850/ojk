@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-5">Login</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Masuk ke Akun Anda</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('password.request') }}">Lupa Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
