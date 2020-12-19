@extends('layouts.app')

@section('title')
    Profile Saya | Tokokoi
@endsection

@section('content')
    <div class="page-content page-categories">
      <section class="store-profile">
        <div class="container">
          <div class="row justify-content-center">
            <div
              class="col-lg-2"
              class=""
              data-aos="fade-right"
              data-aos-delay="100"
            >

            @if(Auth::user()->photo != null )
                <img class="profile-detail" src="{{ Storage::url(Auth::user()->photo) }}" alt="Generic placeholder image"/>
            @else
                <img src="/images/user-images.svg" alt="" class="rounded-circle profile-detail" />
            @endif
              
            </div>
            <div class="col-lg-4">
              <ul class="list-unstyled">
                <li class="media">
                  <div class="media-body">

                    @if(Auth::user()->store_name != null )
                        <h5 class="nama" data-aos="fade-left" data-aos-delay="100">
                          {{ Auth::user()->store_name }}
                        </h5>
                    @else
                        <h5 class="nama" data-aos="fade-left" data-aos-delay="100">
                          Tidak ada nama
                        </h5>
                    @endif

                    <h5
                      class="nama-toko-alamat"
                      data-aos="fade-left"
                      data-aos-delay="200"
                    >
                      By {{ Auth::user()->name }} / 
                      
                    @if(Auth::user()->address_one  != null )
                        {{ Auth::user()->address_one }}
                    @else
                          Alamat belum diisi
                    @endif

                    </h5>
                    <h5
                      class="nama-toko-alamat"
                      data-aos="fade-left"
                      data-aos-delay="300"
                    >
                      Join {{ Auth::user()->created_at }}
                    </h5>
                    <h5 class="nama-toko-alamat mb-4"
                      data-aos="fade-left"
                      data-aos-delay="400">
                      @if (Auth::user()->store_status == 1)
                          <span class="badge badge-success">Toko Buka</span>
                      @else
                          <span class="badge badge-danger">Tutup Sementara</span>
                      @endif
                    </h5>

                    @if(Auth::check() && !Auth::user()->email_verified_at)
                    <a class="btn-profile-verifikasi mb-5" href="#" data-aos="fade-left" data-aos-delay="600" disabled>
                      Edit Profile
                    </a>
                    @else
                    <a class="btn-profile mb-5" href="{{ route('dashboard-settings-account') }}" data-aos="fade-left" data-aos-delay="600" disabled>
                      Edit Profile
                    </a>
                    @endif
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="garis">
      </section>

      <section class="store-description">
        <div class="container">
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                <h5 class="judul-jumbo-new text-center mt-3 display-none">KOI KUALITAS JUARA</h5>
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
                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="600">
                    <a
                      class="nav-link-btn-new"
                      id="termahal-tab"
                      data-toggle="tab"
                      href="#termahal"
                      role="tab"
                      aria-controls="termahal"
                      aria-selected="true"
                      >Termahal</a
                    >
                </li>
                <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="600">
                    <a
                      class="nav-link-btn-new"
                      id="termurah-tab"
                      data-toggle="tab"
                      href="#termurah"
                      role="tab"
                      aria-controls="termurah"
                      aria-selected="true"
                      >Termurah</a
                    >
                </li>
              </ul>
            <div class="tab-content mt-3" id="myTabContent">

                <div class="tab-pane fade show active" id="lokal" role="tabpanel" aria-labelledby="lokal-tab">
                  <div class="row">
                    <div class="col-12" data-aos="fade-up">
                      <h5 data-aos="fade-up" data-aos-delay="600">Koi Lokal by {{ Auth::user()->name }}</h5>
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
                      <h5>Koi Import by {{ Auth::user()->name }}</h5>
                    </div>
                  </div>
                  <div class="row">

                    @php $incrementProduct = 0 @endphp
                    @forelse ($products as $product)
                      @if ($product->jenis == "Import")
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
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

                <div class="tab-pane fade" id="termahal" role="tabpanel" aria-labelledby="termahal-tab">
                  <div class="row">
                    <div class="col-12" data-aos="fade-up">
                      <h5>Termahal by {{ Auth::user()->name }}</h5>
                    </div>
                  </div>
                  <div class="row">

                    @php $incrementProduct = 0 @endphp
                    @forelse ($termahal_products as $product)
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
                    @empty
                      <div class="col-12 text-center py-5"
                        data-aos="fade-up"
                        data-aos-delay="100">
                        Produk Tidak Ditemukan
                      </div>
                    @endforelse    

                  </div>
                </div>

                <div class="tab-pane fade" id="termurah" role="tabpanel" aria-labelledby="termurah-tab">
                  <div class="row">
                    <div class="col-12" data-aos="fade-up">
                      <h5>Termurah by {{ Auth::user()->name }}</h5>
                    </div>
                  </div>
                  <div class="row">

                    @php $incrementProduct = 0 @endphp
                    @forelse ($termurah_products as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+= 100 }}">
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
                
            </div>
          </div>
        </div>
      </section>
      
    </div>

@endsection