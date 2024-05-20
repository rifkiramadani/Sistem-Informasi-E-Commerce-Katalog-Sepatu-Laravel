@extends('layouts.main')

@section('container')
        <div class="container mt-5">
                <div class="row justify-content-center">
                        <div class="col-md-4 gap-3">
                                <p class="mb-3 fs-1 fw-bold" style="font-family: sans-serif">Selamat Datang Di Sistem Informasi Penjualan Sepatu</p>
                                <a href="/login" class="btn btn-warning">Login</a>
                        </div>
                        <div class="col-md-4">
                                <img src="img/assets/sneakers.png" alt="logo-sepatu" width="325px">
                        </div>
                </div>
        </div>
@endsection