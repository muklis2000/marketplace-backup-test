@extends('layouts.dashboard')

@section('title')
    Dashboard Produk Koi | Tokokoi
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Produk Saya</h2>
                <p class="dashboard-subtitle">
                  Kelola produk yang anda jual
                </p>
              </div>

              @if(Auth::check() && !Auth::user()->email_verified_at)
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="card">
                      <a href="{{ route('home') }}">
                      <div class="card-body">
                        <p class="toko"><i class="fas fa-exclamation"></i> <small> Hei {{ Auth::user()->name }}, Silahkan verifikasi email untuk dapat bertransaksi di tokokoi.</small></p>
                      </div>
                      </a>
                    </div>
                  </div>
                </div>
              @else

              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">

                    @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        
                    <a
                      href="{{ route('dashboard-products-create') }}"
                      class="btn btn-success btn-login"
                      >Tambah Produk Baru</a
                    >
                  </div>
                </div>
                <div class="row mt-4">
                  
                  @foreach ($products as $product)
                      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <a
                          class="card card-dashboard-product d-block"
                          href="{{ route('dashboard-products-details', $product->id) }}"
                        >
                          <div class="card-body">
                            <img
                              src="{{ Storage::url($product->galleries->first()->photos ?? '') }}"
                              alt=""
                              class="w-100 mb-2"
                            />
                            <div class="product-title">{{ $product->name }}</div>
                            <div class="product-category">{{ $product->category->name }}</div>
                          </div>
                        </a>
                      </div>
                  @endforeach

                </div>
              </div>
              
              @endif

            </div>
          </div>
@endsection