@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Tambah Produk</h3>
            <hr>
            <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">harga</label>
                    <input type="number" min="0" name="harga" class="form-control">
                </div>
                @error('harga')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">foto</label>
                    <input type="file" name="foto" id="" class="form-control">
                </div>
                @error('foto')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">kategori</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($category as $c)
                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-2">
                    <label for="">deskripsi</label>
                    <textarea name="desc" class="form-control" id="" cols="20" rows="5"></textarea>
                </div>
                @error('desc')
                <p class="text-danger">{{ $message }}</p>
                @enderror
           
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection