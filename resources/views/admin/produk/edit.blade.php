@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Edit Produk</h3>
            <hr>
            <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-2">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}">
                </div>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">harga</label>
                    <input type="number" min="0" name="harga" class="form-control" value="{{ $produk->harga }}">
                </div>
                @error('harga')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">foto</label><br>
                    <img src="/storage/foto-produk/{{ $produk->foto }}" alt="" class="border rounded shadow my-2" width="150px"><br>
                    <small class="text-primary">*Foto lama</small>
                    <input type="file" name="foto" id="" class="form-control">
                </div>
                @error('foto')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-2">
                    <label for="">kategori</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach ($category as $c)
                            @if ($c->id == $produk->category_id)
                            <option value="{{ $c->id }}" selected>{{ $c->nama }}</option>
                            @else
                            <option value="{{ $c->id }}">{{ $c->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="">deskripsi</label>
                    <textarea name="desc" class="form-control" id="" cols="20" rows="5">{{ $produk->desc }}</textarea>
                </div>
                @error('desc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection