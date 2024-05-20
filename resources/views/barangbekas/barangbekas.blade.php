@extends('layouts.main')

@section('container')
    @if ($barang->count())
        <div class="container">
            <div class="row">
                @foreach($barang as $barangs)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/barangbekas/' . $barangs->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $barangs->nama }}</h5>
                        <h6>{{ $barangs->jenis }}</h6>
                        <p class="card-text">{{ $barangs->excerpt }}</p>
                        <a href="barangbekas/detailbarangbekas/{{ $barangs->id }}" class="btn btn-primary">Selengkapnya..</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="text-center fs-4">Produk Tidak Di Temukan</div>
    @endif

@endsection