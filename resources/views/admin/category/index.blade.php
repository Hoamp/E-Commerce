@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Daftar Category</h3>
            {{-- <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">Tambah Produk</a><hr> --}}
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Foto</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($produk as $p)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/storage/foto-produk/{{ $p->foto }}" alt="foto" width="120px"></td>
                        <td>{{ $p->nama }}</td>
                        <td>
                            <form action="{{ route('admin.produk.delete', $p->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Hapus</button> 
                            </form>
                            <a href="{{ route('admin.produk.detail', $p->id) }}" class="btn btn-secondary">Detail</a>
                            <a href="{{ route('admin.produk.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
            {{-- {{ $produk->links() }} --}}
        </div>
    </div>
@endsection