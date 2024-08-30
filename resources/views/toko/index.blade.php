@extends('public_layouts.main')

@section('content')
<div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
        <div class="container">
        <div class="row">
            <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Barang Terbaru</h2>
            </div>
            <div class="swiper product-swiper">
            
            <div class="swiper-wrapper">
                @foreach ($produk as $p)
                <div class="swiper-slide">
                <div class="product-card position-relative">
                    <div class="image-holder">
                    <img src="/storage/foto-produk/{{ $p->foto }}" alt="product-item" class="img-fluid " width="100%">
                    </div>
                    <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                        <a href="{{ route('produk.detail', $p->id) }}" class="btn btn-medium btn-black">Lihat Detail</a>
                    </div>
                    </div>
                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                        <a href="{{ route('produk.detail', $p->id) }}">{{ $p->nama }}</a>
                    </h3>
                    <span class="item-price text-primary">Rp. {{ $p->harga }}</span>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-md-1 justify-content-center">
                {{ $produk->links() }}
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>

    @if($randCategory !== null)
    <section id="smart-watches" class="product-store padding-large position-relative">
        <div class="container">
            <div class="row">
            <div class="display-header d-flex justify-content-between pb-3">
                <h2 class="display-7 text-dark text-uppercase">Barang Dari Kategori {{ $randCategory->first()->category->nama }}</h2>
                <div class="btn-right">
                <a href="{{ route('toko.category.index', $category->nama) }}" class="btn btn-medium btn-normal text-uppercase">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="swiper product-watch-swiper">
                <div class="swiper-wrapper">

                @foreach ($randCategory as $p)
                <div class="swiper-slide">
                    <div class="product-card position-relative">
                    <div class="image-holder">
                        <img src="/storage/foto-produk/{{ $p->foto }}" alt="product-item" class="img-fluid" width="100%">
                    </div>
                    <div class="cart-concern position-absolute">
                        <div class="cart-button d-flex">
                        <a href="{{ route('produk.detail', $p->id) }}" class="btn btn-medium btn-black">Lihat detail<svg class="cart-outline"><use xlink:href="#cart-outline"></use></svg></a>
                        </div>
                    </div>
                    <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                        <h3 class="card-title text-uppercase">
                        <a href="#">{{$p->nama}}</a>
                        </h3>
                        <span class="item-price text-primary">Rp. {{ $p->harga }}</span>
                    </div>
                    </div>
                </div>
                @endforeach

                </div>
            </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    @endif  

</div>
@endsection