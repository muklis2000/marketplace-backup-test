@extends('layouts.app')

@section('title')
    Profile Pelapak | Tokokoi
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

            @if($user->photo != null )
                <img class="profile-detail" src="{{ Storage::url($user->photo) }}" alt="Generic placeholder image"/>
            @else
                <img src="/images/user-images.svg" alt="" class="rounded-circle profile-detail" />
            @endif
              
            </div>
            <div class="col-lg-4">
              <ul class="list-unstyled">
                <li class="media">
                  <div class="media-body">

                    @if($user->store_name != null )
                        <h5 class="nama" data-aos="fade-left" data-aos-delay="100">
                          {{ $user->store_name }}
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
                      By {{ $user->name }} / 
                      
                    @if($user->address_one  != null )
                        {{ $user->address_one }}
                    @else
                          Alamat belum diisi
                    @endif

                    </h5>
                    <h5
                      class="nama-toko-alamat"
                      data-aos="fade-left"
                      data-aos-delay="300"
                    >
                      Join {{ $user->created_at }}
                    </h5>
                    <h5 class="nama-toko-alamat mb-4"
                      data-aos="fade-left"
                      data-aos-delay="400">
                      @if ($user->store_status == 1)
                          <span class="badge badge-success">Toko Buka</span>
                      @else
                          <span class="badge badge-danger">Tutup Sementara</span>
                      @endif
                    </h5>
                    @if ($user->phone_number != null)
                        <a
                          class="btn-profile mb-5"
                          href="https://api.whatsapp.com/send?phone=+<?php echo $user->phone_number ?>text=Saya%20tertarik%20dengan%20produk%20anda"
                          data-aos="fade-left"
                          data-aos-delay="600"
                          >Chat Pelapak</a
                        >
                    @else
                        <a
                          class="btn-profile-disable mb-5"
                          href=""
                          data-aos="fade-left"
                          data-aos-delay="600" disabled
                          >Chat Pelapak</a
                        >
                    @endif
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="garis">
      </section>

      <section class="store-new-products mt-5">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Produk by {{ $user->name }}</h5>
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
      
    </div>

@endsection