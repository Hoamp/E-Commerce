@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Daftar Kategori</h3>
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Tambah kategori</a><hr>
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $c->nama }}</td>
                        <td>
                            <form action="{{ route('admin.category.delete', $c->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Hapus</button> 
                            </form>
                            <a href="{{ route('admin.category.edit', $c->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $category->links() }}
        </div>
    </div>
@endsection