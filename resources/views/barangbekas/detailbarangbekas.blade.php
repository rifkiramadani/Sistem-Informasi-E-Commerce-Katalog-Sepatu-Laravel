@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center grid mt-3">
        {{-- @dd($barangs) --}}
            <div class="card">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/barangbekas/{{ $detailbarang->img }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{ $detailbarang->nama }}</h5>
                    <p class="card-text">{{ $detailbarang->deskripsi }}</p>
                    <p class="card-text">Rp.{{ $detailbarang->harga }}</p>
                    <p class="card-text"><a href="/barangbekas">Kembali Ke Halaman Katalog Barang Bekas</a></p>
                    </div>
                </div>
                </div>
            </div>
    </div>
@endsection