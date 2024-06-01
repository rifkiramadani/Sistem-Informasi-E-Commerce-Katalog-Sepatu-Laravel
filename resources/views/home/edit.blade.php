@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center">
        <h1 class="h2">Ubah Barang</h1>
    </div>

    @if(session()->has('error'))
    <div class="alert alert danger">
        {{ session('error') }}
    </div>
    @endif

    <div class="container d-flex justify-content-center">
        <div class="col-md-5">
            <form action="/beranda/manage/{{ $sepatu->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $sepatu->nama) }}">
                    @error('nama')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-select" name="category_id">
                      @foreach ($categories as $category)
                        @if(old('category_id', $sepatu->category_id) == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->jenis }}</option>
                        @else
                          <option value="{{ $category->id }}">{{ $category->jenis }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="img" class="form-label">Post Image</label>
                        <input type="hidden" name="oldImage" value="{{ $sepatu->img }}">
                        @if ($sepatu->img)
                            <img src="{{ asset('storage/' . $sepatu->img) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="img" name="img" onchange="previewImage()">
                    @error('img')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $sepatu->harga) }}">
                    @error('harga')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    @error('deskripsi')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                      <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $sepatu->deskripsi) }}">
                      <trix-editor input="deskripsi"></trix-editor>
                  </div> 
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>

    <script>
            // nonaktifkan fitur upload file di trix
            document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        //fitur preview image
        function previewImage() {
            const image = document.querySelector('#img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
              imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
    