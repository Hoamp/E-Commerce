@extends('public_layouts.main')

@section('content')
<div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-body shadow">
        
            <div class="row">
                <div class="col-md-3">
                    <div class="row ">
                        <img src="/storage/foto-produk/{{ $produk->foto }}" alt="" class="col-md-12 border rounded">
                    </div>
                </div>
                <div class="col-md-9">
                    <h4>{{ $produk->nama }}</h4>
                    <h5>Kategori : {{ $produk->category->nama }}</h5>
                    <h5>Harga : {{ $produk->harga }}</h5>
                    <p>
                        {{ $produk->desc }}
                    </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-1">
                    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection