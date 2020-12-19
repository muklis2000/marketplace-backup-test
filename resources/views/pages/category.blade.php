@extends('layouts.app')

@section('title')
    Kategori Koi | Tokokoi
@endsection

@section('content')
    <div class="page-content page-categories">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Semua Kategori</h5>
            </div>
          </div>
          <div class="row">

            @php $incrementCategory = 0 @endphp
            @forelse ($categories_new as $category)
                <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementCategory+= 50 }}"
            >
              <a href="{{ route('categories-detail', $category->slug) }}" class="component-categories-new d-block">
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
      </section>

      <section class="mt-n2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="/categories/cari" method="GET">
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
            <div class="col-12" data-aos="fade-up" data-aos-delay="100">
              <h5>Produk</h5>
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


          <div class="row">
            <div class="col-12 mt-4 pagination">
              {{ $products->links() }}
            </div>
          </div>


        </div>
      </section>
      
    </div>
@endsection