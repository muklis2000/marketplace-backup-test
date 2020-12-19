@extends('layouts.app')

@section('title')
    Blog | Tokokoi
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-home">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="judul-blog" data-aos="fade-up" data-aos-delay="50">Ada Apa di Tokokoi</h1>
              <h5 class="sub-judul-koi" data-aos="fade-up" data-aos-delay="100">
                Cerita mitra, berita seru, dan promo terbaru. Baca semua artikel
                soal Tokokoi di sini.
              </h5>

              <form action="/blog/cari" method="GET">
                <div class="tengah-search-new mb-3" data-aos="fade-up" data-aos-delay="200" >
                  <div class="search">
                    <input type="text" name="cari" placeholder="Search Blog Post . . ." value="{{ old('cari') }}" />
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

      <section class="store-new-products mt-5">
        <div class="container">
          <div class="row">

            @php $incrementBlog = 0 @endphp
            @forelse ($blog as $blog)

            <div
              class="col-12 col-md-12 col-lg-4 mb-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementBlog+= 50 }}"
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
            <div class="col-12">
              <div class="mb-1"
                  style="border-bottom: 3px dashed #d6d6d6"
                ></div>
                <div class="mb-1"
                  style="border-bottom: 3px dashed #d6d6d6"
                ></div>
                <div class="mb-1"
                  style="border-bottom: 3px dashed #d6d6d6"
                ></div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="50">
              <h1 class="blog-kategori">Artikel Berdasarkan Kategori</h1>
            </div>
          </div>
          <div class="row mt-4">

            @php $incrementProduct = 0 @endphp
            @forelse ($blogcategories as $blogcategories)

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
              <a href="{{ route('blogcategories-detail', $blogcategories->slug) }}" class="component-categories-new d-block">
                <p class="categories-text">
                  {{ $blogcategories->name }}
                </p>
              </a>
            </div>

            @empty
              <div class="col-12 text-center py-5"
                data-aos="fade-up"
                data-aos-delay="100">
                Kategori Blog Tidak Ditemukan
              </div>
            @endforelse 

          </div>
        </div>
      </section>

    </div>     

@endsection