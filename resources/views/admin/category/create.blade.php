@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Tambah Produk</h3>
            <hr>
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection