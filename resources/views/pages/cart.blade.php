@extends('layouts.app')

@section('title')
    Keranjang Belanja | Tokokoi
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
                    Keranjang
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      @php
        $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
      @endphp
      
      @if($carts == 0 )
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <img src="/images/new-keranjang-kosong.png" class="keranjang-kosong mt-3 mb-4">
              </div>
              <div class="col-12 text-center">
                <div class="keranjang-kosong mb-3">Keranjang Anda Kosong</div>
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
            <div class="col-12 table-responsive">
              <table
                class="table table-borderless table-cart"
                aria-describedby="Cart">
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
                  @foreach ($cart as $cart)
                  <tr>
                    <td style="width: 25%;">
                      @if ($cart->product->galleries)
                        <img
                          src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                          alt=""
                          class="cart-image"
                        />    
                      @endif
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">by {{ $cart->product->user->store_name }}</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title">Rp. {{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">IDR</div>
                    </td>
                    <td style="width: 20%;">

                      <!-- Button trigger modal -->
                      {{-- <button type="button" class="btn btn-remove-cart" data-toggle="modal" data-target="#exampleModal{{ $cart->id }}">
                        Hapus
                      </button> --}}

                      <button type="button" class="btn btn-hapus" data-toggle="modal" data-target="#exampleModal{{ $cart->id }}">
                        <i class="fas fa-trash"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{ $cart->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $cart->product->name }} dari Cart?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin akan menghapus data {{ $cart->product->name }}?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn text-success" data-dismiss="modal">Batal</button>
                              <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-remove-cart">
                                  Hapus
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </td>
                  </tr>
                  @php $totalPrice += $cart->product->price @endphp

                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>


      <section class="store-cart">
        <form action="{{ route('checkout') }}" id="locations" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 mt-5">
              <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                      <h2 class="mb-4">Shipping Details</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="address_one">Alamat 1</label>
                          <input
                              type="text"
                              class="form-control form-control-new"
                              id="address_one"
                              aria-describedby="emailHelp"
                              name="address_one"
                              placeholder="Gebang RT 28/09, Krebet, Masaran, Sragen"
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="address_two">Alamat 2</label>
                          <input
                              type="text"
                              class="form-control form-control-new"
                              id="address_two"
                              aria-describedby="emailHelp"
                              name="address_two"
                              placeholder="Sleman, Yogyakarta"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="provinces_id">Provinsi</label>
                          <select name="provinces_id" id="provinces_id" class="form-control form-control-new" v-model="provinces_id" v-if="provinces">
                            <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                          </select>
                          <select v-else class="form-control form-control-new"></select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="regencies_id">Kota</label>
                          <select name="regencies_id" id="regencies_id" class="form-control form-control-new" v-model="regencies_id" v-if="regencies">
                            <option v-for="regency in regencies" :value="regency.id">@{{regency.name }}</option>
                          </select>
                          <select v-else class="form-control form-control-new"></select>
                        </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="zip_code">Kode Pos</label>
                        <input
                              type="text"
                              class="form-control form-control-new"
                              id="zip_code"
                              name="zip_code"
                              placeholder="55551"
                            />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="country">Negara</label>
                        <input
                              type="text"
                              class="form-control form-control-new"
                              id="country"
                              name="country"
                              placeholder="Indonesia"
                            />
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="phone_number">Telephon</label>
                        <input
                              type="text"
                              class="form-control form-control-new"
                              id="phone_number"
                              name="phone_number"
                              placeholder="+6285 7953 41993"
                            />
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
            </div>

            {{-- <div class="col-12 col-md-1">
            </div> --}}
            <div class="col-12 col-md-4 mt-5">
              <div class="card">
                <div class="card-body card-total">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 class="mb-4">Pembayaran</h2>
                    </div>
                    <div class="col-6">
                      <p class="cart-text">Subtotal</p>
                    </div>
                    <div class="col-6">
                      <p class="text-right cart-harga">Rp. {{ number_format($totalPrice ?? 0) }}</p>
                    </div>

                    <div class="col-6">
                      <p class="cart-text">Pengiriman</p>
                    </div>
                    <div class="col-6">
                      <p class="text-right cart-harga">Rp. 0</p>
                    </div>

                    <div class="col-md-12 mb-3">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-ticket-alt"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-new" placeholder="Kode Promo">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div
                      class="mt-3 mb-4"
                      style="border-bottom: 2px dashed #d6d6d6"
                    ></div>
                    </div>
                    <div class="col-6">
                      <p class="cart-text-total">Total</p>
                    </div>
                    <div class="col-6">
                      <p class="text-right cart-harga-total">Rp. {{ number_format($totalPrice ?? 0) }}</p>
                    </div>
                  </div>

                  <div class="col-12 col-md-12 mb-3">
                      <button
                        type="submit"
                        class="btn btn-success mt-3 btn-login btn-block"
                      >
                        Lanjut ke Pembayaran
                      </button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </section>

      @endif
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          AOS.init();
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function (response) {
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush