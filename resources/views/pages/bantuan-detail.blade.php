@extends('layouts.app')

@section('title')
    Bantuan Detail | Tokokoi
@endsection

@section('content')

    <!-- Page Content -->
    <div class="page-content page-home">
      {{-- <section>
        <div class="container" data-aos="fade-down" data-aos-delay="100">
          <div class="row">
            <div class="col-12">
              <div class="tengah-search">
                <div class="search mb-4 mt-n1">
                  <input type="text" placeholder="Cari topik bantuan" />
                  <div class="button-src">
                    <button>Cari</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="200"
      >
        <div class="container mb-n4">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    <a href="{{ route('bantuan') }}">Pusat Bantuan</a>
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
            <div class="col-8 justify-content-center">
              <h1 class="topik" data-aos="fade-down" data-aos-delay="300">
                {{ $help->topik }}
              </h1>
              <h5
                class="detail-bantuan"
                data-aos="fade-down"
                data-aos-delay="400"
              >{!! $help->description !!}
              </h5>
            </div>
          </div>
        </div>
      </section>
      
    </div> 
@endsection