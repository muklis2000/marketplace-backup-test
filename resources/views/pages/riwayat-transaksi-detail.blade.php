@extends('layouts.app')

@section('title')
    Detail Transaksi | Tokokoi
@endsection

@section('content')
    <div class="page-content page-details">
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
                    Riwayat Transaksi
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Detail
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container">
      <section class="store-cart">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 mt-3">
              <h3>Detail Transaksi</h3>
            </div>
            <div class="col-12 col-md-8 mt-5">
              <div class="col-12 table-responsive">
              <table
                class="table table-borderless table-cart"
                aria-describedby="Cart"
              >
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">No Transaksi</th>
                    <th scope="col">Name &amp; Seller</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img
                        src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                        alt=""
                        class="cart-image-transaksi"
                      />
                    </td>
                    <td>
                      <div class="product-title">#{{ $transaction->code }}</div>
                    </td>
                    <td>
                      <div class="product-title">{{ $transaction->product->name }}</div>
                    </td>
                    <td>
                      <div class="product-title">Rp. {{ number_format($transaction->transaction->total_price) }}</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <div class="mt-3 mb-3" style="border-bottom: 2px dashed #d6d6d6">
              </div>
            </div>
            <div class="col-md-6">
                <div class="product-subtitle">Status Pembelian</div>
                @if ($transaction->shipping_status == "PENDING")
                  <div class="product-title-transaksi">Menunggu Pembayaran</div>
                @else
                  <div class="product-title-transaksi">Tidak Diketahui</div>
                @endif
            </div>
            <div class="col-md-12">
              <div class="mt-3 mb-3" style="border-bottom: 2px dashed #d6d6d6">
              </div>
            </div>
            <div class="col-md-6">
                <div class="product-subtitle">Estimasi Barang Sampai</div>
                <div class="product-title-transaksi">Kamis, 05 November 2020, 09:38 WIB</div>
            </div>
            <div class="col-md-12">
              <div class="mt-3 mb-3" style="border-bottom: 2px dashed #d6d6d6">
              </div>
            </div>
            <div class="col-md-12">
                <div class="product-subtitle">KETERANGAN</div>
                <div class="product-title-transaksi">Selesaikan pembayaranmu sebelum Selasa, 27 Oktober 2020 pukul 23:15 WIB.</div>
            </div>
            <div class="col-md-12">
              <div class="mt-3 mb-3" style="border-bottom: 2px dashed #d6d6d6">
              </div>
            </div>
            </div>
            <div class="col-12 col-md-4 mt-5">
              <div class="card">
                <div class="card-body card-total">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="product-subtitle">Kode Transaksi</div>
                      <div class="product-title-transaksi">#{{ $transaction->code }}</div>
                    </div>
                    <div class="col-md-12">
                      <div class="product-subtitle">Status Tagihan</div>
                      <div class="product-title-transaksi">{{ $transaction->shipping_status }}</div>
                    </div>
                    <div class="col-md-12">
                      <div class="product-subtitle">Metode Pembayaran</div>
                      <div class="product-title-transaksi">Gopay</div>
                    </div>
                    <div class="col-md-12">
                      <div class="product-subtitle">Tanggal Transaksi</div>
                      <div class="product-title-transaksi">{{ $transaction->created_at}}</div>
                    </div>
                    <div class="col-md-12">
                      <div class="product-subtitle">Total Pembayaran</div>
                      <div class="product-title-transaksi">Rp. {{ number_format($transaction->transaction->total_price) }}</div>
                    </div>
                    <div class="col-12 col-md-12 mb-3">
                      <button
                        type="submit"
                        class="btn btn-success mt-3 btn-login btn-block"
                      >
                        Lihat Invoice
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 mt-5">
              <div class="row">
                <div class="col-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <h4 class="mb-3">Alamat Pengirim</h4>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Nama</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->name }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Email</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->email }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Telephone</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->phone_number }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Alamat I</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->address_one }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Alamat II</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->address_two }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Negara</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->country }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Kode Pos</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->product->user->zip_code }}</p>
                    </div>
                    {{-- <div class="col-5">
                      <p class="cart-riwayat mb-2">Provinsi</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-2">Jawa Tengah</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-2">Kota</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title  mb-2">Sragen</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-2">Kode Pos</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-2">55551</p>
                    </div> --}}
                  </div>
                </div>
                <div class="col-12 col-md-4">
                  <div class="row">
                    <div class="col-12">
                      <h4 class="mb-3">Alamat Tagihan</h4>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Nama</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->name }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Email</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->email }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Telephone</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->phone_number }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Alamat I</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->address_one }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Alamat II</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->address_two }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Negara</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->country }}</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-3">Kode Pos</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-3">{{ $transaction->transaction->user->zip_code }}</p>
                    </div>
                    {{-- <div class="col-5">
                      <p class="cart-riwayat mb-2">Provinsi</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-2">Jawa Tengah</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-2">Kota</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-2">Sragen</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat mb-2">Kode Pos</p>
                    </div>
                    <div class="col-5">
                      <p class="cart-riwayat-title mb-2">55551</p>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </div>
    </div>
@endsection
