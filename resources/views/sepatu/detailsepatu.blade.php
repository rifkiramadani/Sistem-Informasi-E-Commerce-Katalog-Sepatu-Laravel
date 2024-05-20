@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center grid mt-3">
            <div class="card">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/sepatu/{{ $detailsepatu->img }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{ $detailsepatu->nama }}</h5>
                    <p class="card-text">{{ $detailsepatu->deskripsi }}</p>
                    <p class="card-text">Rp.{{number_format($detailsepatu->harga )}}</p>
                    <p class="card-text"><a href="/sepatu">Kembali Ke Halaman Katalog Sepatu</a></p>
                    </div>
                </div>
                </div>
            </div>
    </div>
@endsection