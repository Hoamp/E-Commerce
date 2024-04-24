@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Detail Produk</h3><hr>
            <div class="row mb-3">
                <div class="col-md-4">
                    <img src="/storage/foto-produk/{{ $produk->foto }}" alt="" class="card-image border shadow rounded" width="300px" >
                </div>
                <div class="col-md-8">
                    <h4 class="">{{ $produk->nama }}</h4>
                    <h5 class="">Rp. {{ $produk->harga }}</h5>
                    <p>{{ $produk->desc }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection