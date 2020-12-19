@extends('layouts.app')

@section('title')
    Situs Jual Beli Ikan Koi | Tokokoi
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                @foreach($iklans as $iklan)
                    <li data-target="#storeCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
                </ol>

                <div class="carousel-inner">
                  @foreach($iklans as $iklan)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ Storage::url($iklan->photo) }}" alt="Carousel Image">
                    </div>
                  @endforeach
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-trend-categories mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Kategori</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel owl-theme">
                @php $incrementCategory = 0 @endphp
                @forelse ($categories_home as $category)
                  <div
                  class="item"
                  data-aos="fade-up"
                  data-aos-delay="{{ $incrementCategory+= 50 }}"
                >
                  <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories d-block">
                    <div class="categories-image">
                      <img
                        src="{{ Storage::url($category->photo) }}"
                        alt=""
                        class="w-100"
                      />
                    </div>
                    <p class="categories-text">
                      {{ $category->name }}
                    </p>
                  </a>
                </div>
                @empty
                  <div class="col-12 text-center py-5"
                    data-aos="fade-up"
                    data-aos-delay="100">
                    Kategori Tidak Ditemukan
                  </div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="/cari" method="GET">
                <div class="tengah-search-new" data-aos="fade-up" data-aos-delay="100" >
                  <div class="search-new">
                    <input type="text" name="cari" placeholder="Cari koi kesukaanmu" value="{{ old('cari') }}" />
                      <div class="button-src-new">
                        <button type="submit" class="btn-login">Cari</button>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products mt-3">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Produk Terbaru</h5>
            </div>
          </div>
          <div class="row">

            @php $incrementProduct = 0 @endphp
            @forelse ($products as $product)
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProduct+= 50 }}"
            >
              <a class="component-products d-block" href="{{ route('detail', $product->slug) }}">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      @if($product->galleries->count())
                        background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                      @else
                        background-color: #eee
                      @endif
                    "
                  ></div>
                </div>
                <div class="products-text">
                  {{ $product->name }}
                </div>
                <div class="products-price">
                  Rp. {{ number_format($product->price) }}
                </div>
              </a>
            </div>

            @empty
              <div class="col-12 text-center py-5"
                data-aos="fade-up"
                data-aos-delay="100">
                Produk Tidak Ditemukan
              </div>
            @endforelse    

          </div>
        </div>
      </section>

      <section class="mt-3 mb-5">
        <div class="jumbotron jumbotron-fluid jumbotron-bg" data-aos="fade-up"
              data-aos-delay="100">
          <div class="container">
            <div class="row">
              @foreach($aksi as $aksi)
                <div class="col-12 col-md-12 col-lg-6 images-jumbo" data-aos="fade-up"
                data-aos-delay="400">
                  <img src="{{ Storage::url($aksi->photo) }}" class="images-jumbo" alt="">
                </div>
                <div class="col-12 col-md-12 col-lg-6" data-aos="fade-up"
                data-aos-delay="500">
                    <h5 class="judul-jumbo">{{ $aksi->judul }}</h5>
                    <p class="subjudul-jumbo">{!! $aksi->sub_judul !!}</p>
                    <a href="{{ route('categories') }}" class="btn btn-jumbotron">Beli Sekarang</a>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>

      <section class="store-description">
        <div class="container">
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="/images/juara.png" class="img-juara" alt="">
                <h5 class="judul-jumbo-new text-center mt-3 display-none">Koi Kualitas Juara</h5>
              </div>
            </div>
            <ul class="nav nav-pills mt-3 mb-5 justify-content-center" id="myTab" role="tablist">
              <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="400">
                  <a
                    class="nav-link-btn-new active"
                    id="lokal-tab"
                    data-toggle="tab"
                    href="#lokal"
                    role="tab"
                    aria-controls="lokal"
                    aria-selected="true"
                    >Lokal</a
                  >
                </li>
              <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="600">
                  <a
                    class="nav-link-btn-new"
                    id="import-tab"
                    data-toggle="tab"
                    href="#import"
                    role="tab"
                    aria-controls="import"
                    aria-selected="true"
                    >Import</a
                  >
                </li>
            </ul>

              <div class="tab-content mt-3" id="myTabContent">

                <div class="tab-pane fade show active" id="lokal" role="tabpanel" aria-labelledby="lokal-tab">
                  <div class="row">
                    <div class="col-12" data-aos="fade-up">
                      <h5 data-aos="fade-up" data-aos-delay="100">Koi Lokal</h5>
                    </div>
                  </div>
                  <div class="row">

                    @php $incrementProduct = 0 @endphp
                    @forelse ($products as $product)
                      @if ($product->jenis == "Lokal")
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 50 }}">
                          <a class="component-products d-block" href="{{ route('detail', $product->slug) }}">
                            <div class="products-thumbnail">
                              <div
                                class="products-image"
                                style="
                                  @if($product->galleries->count())
                                    background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                                  @else
                                    background-color: #eee
                                  @endif
                                "
                              ></div>
                            </div>
                            <div class="products-text">
                              {{ $product->name }}
                            </div>
                            <div class="products-price">
                              Rp. {{ number_format($product->price) }}
                            </div>
                          </a>
                        </div>
                      @endif

                    @empty
                      <div class="col-12 text-center py-5"
                        data-aos="fade-up"
                        data-aos-delay="100">
                        Produk Tidak Ditemukan
                      </div>
                    @endforelse    

                  </div>
                </div>

                <div class="tab-pane fade" id="import" role="tabpanel" aria-labelledby="import-tab">
                  <div class="row">
                    <div class="col-12" data-aos="fade-up">
                      <h5>Koi Import</h5>
                    </div>
                  </div>
                  <div class="row">

                    @php $incrementProduct = 0 @endphp
                    @forelse ($products as $product)
                      @if ($product->jenis == "Import")
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 50 }}">
                          <a class="component-products d-block" href="{{ route('detail', $product->slug) }}">
                            <div class="products-thumbnail">
                              <div
                                class="products-image"
                                style="
                                  @if($product->galleries->count())
                                    background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                                  @else
                                    background-color: #eee
                                  @endif
                                "
                              ></div>
                            </div>
                            <div class="products-text">
                              {{ $product->name }}
                            </div>
                            <div class="products-price">
                              Rp. {{ number_format($product->price) }}
                            </div>
                          </a>
                        </div>
                      @endif
                    @empty
                      <div class="col-12 text-center py-5"
                        data-aos="fade-up"
                        data-aos-delay="100">
                        Produk Tidak Ditemukan
                      </div>
                    @endforelse    

                  </div>
                </div>

              </div>
            </div>
        </div>
      </section>

      <section class="store-new-products mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="100">
              <h1 class="judul-blog-detail mb-3" data-aos="fade-up" data-aos-delay="100">Ada Apa di Tokokoi</h1>
              <h5 class="sub-judul-koi mb-5" data-aos="fade-up" data-aos-delay="200">
                Cerita mitra, berita seru, dan promo terbaru. Baca semua artikel
                soal Tokokoi di sini.
              </h5>
            </div>

            @php $incrementBlog = 300 @endphp
            @forelse ($blog as $blog)

            <div
              class="col-12 col-md-12 col-lg-4 mb-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementBlog+= 100 }}"
            >
              <a class="component-products d-block" href="{{ route('detail-blog', $blog->slug) }}">
                <div class="products-thumbnail-blog">
                  <div
                    class="products-image"
                    style="background-image: url('{{ Storage::url($blog->photo) }}')"
                  ></div>
                </div>
                <div class="blog-judul">
                    {{ $blog->name }}
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <p class="blog-text">{{ $blog->blogcategory->name }}</p>
                  </div>
                  <div class="col-6">
                    <p class="blog-text text-right">{{ $blog->created_at }}</p>
                  </div>
                </div>
                <div
                  class="mt-n1"
                  style="border-bottom: 2px dashed #d6d6d6"
                ></div>
              </a>
            </div>

            @empty
              <div class="col-12 text-center py-5"
                data-aos="fade-up"
                data-aos-delay="100">
                Blog Tidak Ditemukan
              </div>
            @endforelse

          </div>
        </div>
      </section>


      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Marketplace ikan koi di Indonesia</h5>
              <h5 class="sub-judul">
                TokoKoi merupakan situs jual beli koi pertama di Indonesia yang
                menjual beragam jenis koi dari. Seiring berkembangnya teknologi,
                semakin banyak aktivitas yang dilakukan secara digital, lebih
                mudah dan praktis, termasuk kegiatan transaksi ikan koi yang
                kini semakin marak dilakukan secara digital, baik melalui
                komputer, laptop, hingga smartphone yang bisa diakses kapan saja
                dan di mana saja.
              </h5>
            </div>
          </div>
        </div>
      </section>

      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-4 col-lg-4">
              <div class="card-1" data-aos="fade-up" data-aos-delay="100">
                <img class="fitur-image" src="/images/dompet-new.png" alt="" />
                <div class="products-text-fitur">Kemudahan Pembayaran</div>
                <div class="products-fitur-title">
                  TokoKoi menyediakan berbagai metode pembayaran untuk
                  bertransaksi
                </div>
              </div>
              <div class="card-1" data-aos="fade-up" data-aos-delay="200">
                <img class="fitur-image" src="/images/cs.png" alt="" />
                <div class="products-text-fitur">Professional CS</div>
                <div class="products-fitur-title">
                  Customer Support TokoKoi siap membantu Anda melalui email,
                  media sosial dan call center (021-5081-3333)
                </div>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-4">
              <div class="card-1" data-aos="fade-up" data-aos-delay="300">
                <img class="fitur-image" src="/images/box.png" alt="" />
                <div class="products-text-fitur">Berbagai Jasa Pengiriman</div>
                <div class="products-fitur-title">
                  Bukalapak menyediakan berbagai pilihan jasa pengiriman dengan
                  jangkauan nasional
                </div>
              </div>
              <div class="card-1" data-aos="fade-up" data-aos-delay="400">
                <img
                  class="fitur-image"
                  src="/images/kemudahan-new.png"
                  alt=""
                />
                <div class="products-text-fitur">6 Manfaat untuk Pelapak</div>
                <div class="products-fitur-title">
                  Dapatkan keuntungan seperti akses ke komunitas Bukalapak serta
                  tips dan trik berjualan online
                </div>
              </div>
            </div>
            <div
              class="col-12 col-md-4 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <h5 class="judul">Kembangkan Toko Koi Anda Sekarang</h5>
              <h5 class="sub-judul">
                Tidak hanya menawarkan produk ikan koi dengan harga murah
                terjangkau, TokoKoi juga menawarkan jual online untuk Anda yang
                pembudidaya dan ingin memasarkan ke penjuru Indonesia. Berikut
                ini beberapa tips untuk memudahkan Anda dalam berjualan online
                di TokoKoi.
              </h5>
              <ol>
                <li class="list-judul">
                  <h5 class="sub-judul-list">
                    Pastikan memasang foto barang terbaik agar dapat menarik
                    minat pembeli.
                  </h5>
                </li>
                <li class="list-judul">
                  <h5 class="sub-judul-list">
                    Manfaatkan fitur pelapak yang ditawarkan.
                  </h5>
                </li>
                <li class="list-judul list-judul-last">
                  <h5 class="sub-judul-list">
                    Jadikan kepuasan konsumen sebagai prioritas
                  </h5>
                </li>
              </ol>
              <a href="{{ route('register') }}" class="btn btn-success btn-gratis">
                Buka Toko GRATIS
              </a>
              <a class="gratis-link" href="{{ route('ketentuan') }}">Pelajari lebih lanjut</a>
            </div>
          </div>
        </div>
      </section>

      <section class="mt-5">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
              {{-- <h5 data-aos="fade-up" data-aos-delay="100">Bank Transfer</h5> --}}
              <div class="card-2" data-aos="fade-up" data-aos-delay="100">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/gopay.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/bri.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="300">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/mandiri.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="400">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/bni.png"
                  alt=""
                />
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up">
              {{-- <h5 data-aos="fade-up" data-aos-delay="100">Jasa Pengiriman</h5> --}}
              <div class="card-2" data-aos="fade-up" data-aos-delay="100">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/tiki.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="200">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/jne.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="300">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/pos.png"
                  alt=""
                />
              </div>
              <div class="card-2" data-aos="fade-up" data-aos-delay="400">
                <img
                  class="fitur-image-bank"
                  src="/images/transfer/jnt-1.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>    
@endsection


@push('addon-script')
    <script>
      $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          margin: 30,
          nav: true,
          loop: true,
          responsive: {
            0: {
              items: 2
            },
            600: {
              items: 3
            },
            1000: {
              items: 6
            }
          }
        })
      })
    </script>
@endpush