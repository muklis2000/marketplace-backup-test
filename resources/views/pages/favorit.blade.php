@extends('layouts.app')

@section('title')
    Favorit | Tokokoi
@endsection

@section('content')
    <div class="page-content page-cart">

      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
        >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Wishlist
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      @php
        $favorits = \App\Favorit::where('users_id', Auth::user()->id)->count();
      @endphp
      
      @if($favorits == 0 )
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <img src="/images/new-keranjang-kosong.png" class="keranjang-kosong mt-3 mb-4">
              </div>
              <div class="col-12 text-center">
                <div class="keranjang-kosong mb-3">Wishlist Anda Kosong</div>
                <a href="{{ route('home') }}"
                    class="btn btn-success btn-login">
                    Kembali Belanja
                </a>
              </div>
            </div>
          </div>
        </section>
      @else

      <section class="store-cart">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img
                src="/images/new-bantuan.png"
                alt=""
                class="tengah"
              />
              <h1 class="tengah mb-5">
                Favorit Anda
              </h1>
            </div>

            <div class="col-12 table-responsive">
              <table
                class="table table-borderless table-responsive table-cart"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama &amp; Seller</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Menu</th>
                  </tr>
                </thead>
                <tbody>
                  @php $totalPrice = 0 @endphp
                  @foreach ($favorit as $favorit)
                  <tr>
                    <td style="width: 25%;">
                      @if ($favorit->product->galleries)
                        <img
                          src="{{ Storage::url($favorit->product->galleries->first()->photos) }}"
                          alt=""
                          class="cart-image"
                        />    
                      @endif
                    </td>
                    <td style="width: 25%;">
                      <div class="product-title">{{ $favorit->product->name }}</div>
                      <div class="product-subtitle">by {{ $favorit->product->user->store_name }}</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="product-title">Rp. {{ number_format($favorit->product->price) }}</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 25%;">
                        <div class="row">
                            <div class="col-8">
                                <a href="{{ route('detail', $favorit->product->slug) }}"
                                    class="btn btn-success btn-lihat">
                                    Lihat Produk
                                </a>
                            </div>
                            <div class="col-4">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-hapus ml-4" data-toggle="modal" data-target="#exampleModal{{ $favorit->id }}">
                                  <i class="fas fa-trash"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $favorit->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $favorit->product->name }} dari Wishlist?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Apakah anda yakin akan menghapus data {{ $favorit->product->name }}?</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn text-success" data-dismiss="modal">Batal</button>
                                        <form action="{{ route('favorit-delete', $favorit->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                              class="btn btn-remove-cart">
                                              Hapus
                                            </button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </td>
                  </tr>
                  @php $totalPrice += $favorit->product->price @endphp

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
      
      @endif
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endpush