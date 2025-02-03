@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-5">Reset Password</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Masukkan Email Anda</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Kirim Link Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
