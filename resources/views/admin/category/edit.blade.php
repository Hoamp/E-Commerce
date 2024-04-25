@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Edit Kategori</h3>
            <hr>
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-2">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $category->nama }}">
                </div>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection