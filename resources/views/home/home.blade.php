@extends('public_layouts.main')

@section('content')
@include('partials.hero')
@include('partials.features')
    
{{-- Atas barang --}}
    <section id="mobile-products" class="product-store position-relative padding-large no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Barang Terbaru</h2>
            <div class="btn-right">
              <a href="{{ route('toko.index') }}" class="btn btn-medium btn-normal text-uppercase">Lihat selengkapnya</a>
            </div>
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
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    {{-- Bawah barang --}}
    @if($produkByNewestKategori !== null)
    <section id="smart-watches" class="product-store padding-large position-relative">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Barang Dari Kategori {{ $produkByNewestKategori->first()->category->nama }}</h2>
            <div class="btn-right">
              <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Lihat selengkapnya</a>
            </div>
          </div>
          <div class="swiper product-watch-swiper">
            <div class="swiper-wrapper">

              @foreach ($produkByNewestKategori as $p)
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



    {{-- Offers --}}
    <section id="yearly-sale" class="bg-light-blue overflow-hidden mt-5 padding-xlarge" style="background-image: url('{{ asset('assets/images/single-image1.png') }}');background-position: right; background-repeat: no-repeat;">
      <div class="row d-flex flex-wrap align-items-center">
        <div class="col-md-6 col-sm-12">
          <div class="text-content offset-4 padding-medium">
            <h3>10% off</h3>
            <h2 class="display-2 pb-5 text-uppercase text-dark">New year sale</h2>
            <a href="shop.html" class="btn btn-medium btn-dark text-uppercase btn-rounded-none">Shop Sale</a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          
        </div>
      </div>
    </section>
    {{-- Post --}}
    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Latest Posts</h2>
            <div class="btn-right">
              <a href="blog.html" class="btn btn-medium btn-normal text-uppercase">Read Blog</a>
            </div>
          </div>
          <div class="post-grid d-flex flex-wrap justify-content-between">
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="{{ asset('assets/images/post-item1.jpg') }}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 22, 2023</span>
                  <span class="meta-category">- Gadgets</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Get some cool gadgets in 2023</a>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="{{ asset('assets/images/post-item2.jpg') }}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 25, 2023</span>
                  <span class="meta-category">- Technology</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Technology Hack You Won't Get</a>
                </h3>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card border-none me-3">
                <div class="card-image">
                  <img src="{{ asset('assets/images/post-item3.jpg') }}" alt="" class="img-fluid">
                </div>
              </div>
              <div class="card-body text-uppercase">
                <div class="card-meta text-muted">
                  <span class="meta-date">feb 22, 2023</span>
                  <span class="meta-category">- Camera</span>
                </div>
                <h3 class="card-title">
                  <a href="#">Top 10 Small Camera In The World</a>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Quote --}}
    <section id="testimonials" class="position-relative">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center">
              <svg class="chevron-left">
                <use xlink:href="#chevron-left" />
              </svg>
            </div>
            <div class="swiper testimonial-swiper">
              <div class="quotation text-center">
                <svg class="quote">
                  <use xlink:href="#quote" />
                </svg>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>“Tempus oncu enim pellen tesque este pretium in neque, elit morbi sagittis lorem habi mattis Pellen tesque pretium feugiat vel morbi suspen dise sagittis lorem habi tasse morbi.”</blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="#star-half"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="#star-empty"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">Emma Chamberlin</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote>“A blog is a digital publication that can complement a website or exist independently. A blog may include articles, short posts, listicles, infographics, videos, and other digital content.”</blockquote>
                    <div class="rating">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-half">
                        <use xlink:href="#star-half"></use>
                      </svg>
                      <svg class="star star-empty">
                        <use xlink:href="#star-empty"></use>
                      </svg>
                    </div>
                    <div class="author-detail">
                      <div class="name text-dark text-uppercase pt-2">Jennie Rose</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center">
              <svg class="chevron-right">
                <use xlink:href="#chevron-right" />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>
 
    {{-- Sosmed --}}
    <section id="instagram" class="padding-large overflow-hidden no-padding-top">
      <div class="container">
        <div class="row">
          <div class="display-header text-uppercase text-dark text-center pb-3">
            <h2 class="display-7">Shop Our Insta</h2>
          </div>
          <div class="d-flex flex-wrap">
            <figure class="instagram-item pe-2">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <img src="{{ asset('assets/images/insta-item1.jpg') }}" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <img src="{{ asset('assets/images/insta-item2.jpg') }}" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <img src="{{ asset('assets/images/insta-item3.jpg') }}" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <img src="{{ asset('assets/images/insta-item4.jpg') }}" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
            <figure class="instagram-item pe-2">
              <a href="https://templatesjungle.com/" class="image-link position-relative">
                <img src="{{ asset('assets/images/insta-item5.jpg') }}" alt="instagram" class="insta-image">
                <div class="icon-overlay position-absolute d-flex justify-content-center">
                  <svg class="instagram">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </div>
              </a>
            </figure>
          </div>
        </div>
      </div>
    </section>

    {{-- Footer --}}
    <footer id="footer" class="overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                    logo
                  <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat aenean odio erat nullam fringilla.</p>
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href="#">
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="linkedin">
                            <use xlink:href="#linkedin" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="youtube">
                            <use xlink:href="#youtube" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">Quick Links</h5>
                  <ul class="menu-list list-unstyled text-uppercase">
                    <li class="menu-item pb-2">
                      <a href="#">Home</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">About</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Shop</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Blogs</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-uppercase">
                  <h5 class="widget-title pb-2">Help & Info Help</h5>
                  <ul class="menu-list list-unstyled">
                    <li class="menu-item pb-2">
                      <a href="#">Track Your Order</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Returns Policies</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Shipping + Delivery</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Contact Us</a>
                    </li>
                    <li class="menu-item pb-2">
                      <a href="#">Faqs</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-uppercase pb-2">Contact Us</h5>
                  <p>Do you have any queries or suggestions? <a href="mailto:">yourinfo@gmail.com</a>
                  </p>
                  <p>If you need support? Just give us a call. <a href="">+55 111 222 333 44</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    {{-- Footer bottom --}}
    <div id="footer-bottom">
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-between">
          <div class="col-md-4 col-sm-6">
            <div class="Shipping d-flex">
              <p>We ship with:</p>
              <div class="card-wrap ps-2">
                <img src="{{ asset('assets/images/dhl.png') }}" alt="visa">
                <img src="{{ asset('assets/images/shippingcard.png') }}" alt="mastercard">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="payment-method d-flex">
              <p>Payment options:</p>
              <div class="card-wrap ps-2">
                <img src="{{ asset('assets/images/visa.jpg') }}" alt="visa">
                <img src="{{ asset('assets/images/mastercard.jpg') }}" alt="mastercard">
                <img src="{{ asset('assets/images/paypal.jpg') }}" alt="paypal">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="copyright">
              <p>© Copyright 2023 linkfee.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
  