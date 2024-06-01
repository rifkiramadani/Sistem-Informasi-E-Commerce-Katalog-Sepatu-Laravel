@extends('layouts.main')

@section('container')    
@if ($sepatus->count())
<div class="container animate__animated animate__fadeInUp mb-3">
    <div class="row">
        @foreach($sepatus as $sepatu)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $sepatu->img) }}" alt=".." class="img-fluid" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $sepatu->nama }}</h5>
                    <h6>{{ $sepatu->jenis }}</h6>
                    <p class="card-text">{!! $sepatu->excerpt !!}</p>
                    <a href="/sepatu/detailsepatu/{{ $sepatu->id }}" class="btn btn-primary">Selengkapnya..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <div class="text-center fs-4">Produk Tidak Di Temukan.</div>
    @endif

    {{-- fitur pagination --}}
    {{-- <div class="d-flex justify-content-end">
        {{ $sepatus->links() }}
    </div> --}}
@endsection

{{-- animate__animated animate__fadeInUp mb-3 --}}