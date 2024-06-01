@extends('layouts.main')

@section('container')
@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session()->has('deleteSuccess'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('deleteSuccess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if (session()->has('updateSuccess'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('updateSuccess') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  <div class="row">
    <div class="col-lg-4">
      <h1>Halo {{ auth()->user()->username }}</h1>
    </div>
  </div>

  <a href="/beranda/manage/create" class="btn btn-primary mb-3 mt-2">Tambah Barang</a>
    <table class="table table-dark table-striped border border-dark rounded">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Kategori</th>
          <th scope="col">Excerpt</th>
          <th scope="col">Harga</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sepatus as $sepatu)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $sepatu->nama }}</td>
          <td>{{ $sepatu->category->jenis }}</td>
          <td>{!! $sepatu->excerpt !!}</td>
          <td>Rp.{{ number_format($sepatu->harga)}}</td>
          <td>
            <div class="d-flex">
              <a href="/beranda/manage/{{ $sepatu->id }}/edit" class="btn btn-warning me-1">Ubah</a> 
              <form action="/beranda/manage/{{ $sepatu->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="confirm('Yakin Ingin Menghapus Data??')">Hapus</button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

  




@endsection