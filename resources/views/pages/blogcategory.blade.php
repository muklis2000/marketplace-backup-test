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
              <h5>Kategori Blog</h5>
            </div>
          </div>
          <div class="row">

            @php $incrementCategory = 0 @endphp
            @forelse ($blogcategories as $blogcategory)
                <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementCategory+= 50 }}"
            >
              <a href="{{ route('blogcategories-detail', $blogcategory->slug) }}" class="component-categories-new d-block">
                <p class="categories-text">
                  {{ $blogcategory->name }}
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

      <section class="mt-n2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <form action="/blogcategories/cari" method="GET">
                <div class="tengah-search-new" data-aos="fade-up" data-aos-delay="600" >
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

      <section class="store-new-products mt-5">
        <div class="container">
          <div class="row">

            @php $incrementBlog = 0 @endphp
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
      
    </div>
@endsection