@extends('layouts.main')

@section('container')
<div class="container animate__animated animate__fadeInUp mb-3">
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <a href="{{ $category->jenis == 'Olahraga' || $category->jenis == 'Casual' || $category->jenis == 'Kulit' ? '/sepatu/category/' . $category->id : '/categories' }}">
                    <div class="card text-bg-dark">
                        <img src="{{ asset('/img/assets/' . $category->img )}}" class="card-img" alt="{{ $category->name }}" style="object-fit: cover;">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->jenis }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection