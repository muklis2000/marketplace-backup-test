@extends('layouts.app')

@section('title')
    Blog Detail | Tokokoi
@endsection

@section('content')

    <!-- Page Content -->
    <div class="page-content page-home">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="200"
      >
        <div class="container mb-n4">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('blog') }}">Blog</a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="">
        <div class="container">
          <div class="row">

            {{-- @forelse ($blog as $blog) --}}

            <div class="col-12 col-md-12 col-lg-8 justify-content-center">
            <h1 class="judul-blog-detail mb-4 mt-4" data-aos="fade-up" data-aos-delay="200">{{ $blog->name }}</h1>
            <p class="blog-text mt-3 mb-4" data-aos="fade-up" data-aos-delay="300">{{ $blog->blogcategory->name }} . {{ $blog->created_at }}</p>
              <img
                    src="{{ Storage::url($blog->photo) }}"
                    alt=""
                    class="w-100 mb-4" data-aos="fade-up" data-aos-delay="400"
                  />
              <h5
                class="detail-bantuan"
                data-aos="fade-up"
                data-aos-delay="500"
              >
              {!! $blog->description !!}
              </h5>
            </div>

          </div>
        </div>
      </section>

      <section class="store-new-products mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <h1 class="judul-blog-detail mb-4 mt-4" data-aos="fade-up" data-aos-delay="100">Artikel Terbaru Kami</h1>
            </div>
            @php $incrementBlog = 100 @endphp
            @forelse ($blogs as $blogs)

            <div class="col-12 col-md-12 col-lg-6 mb-2" data-aos="fade-up" data-aos-delay="{{ $incrementBlog+= 100 }}">
              <a class="component-products d-block" href="{{ route('detail-blog', $blogs->slug) }}">

                <div class="products-thumbnail-blog">
                  <div
                    class="products-image"
                    style="background-image: url('{{ Storage::url($blogs->photo) }}')">
                  </div>
                </div>

                <div class="blog-judul">
                    {{ $blogs->name }}
                </div>

                <div class="row mt-3">
                  <div class="col-6">
                    <p class="blog-text">{{ $blogs->blogcategory->name }}</p>
                  </div>
                  <div class="col-6">
                    <p class="blog-text text-right">{{ $blogs->created_at }}</p>
                  </div>
                </div>

                <div class="mt-n1" style="border-bottom: 2px dashed #d6d6d6">
                </div>

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