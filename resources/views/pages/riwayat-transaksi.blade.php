@extends('layouts.app')

@section('title')
    Riwayat Transaksi | Tokokoi
@endsection

@section('content')
    <div class="page-content page-details">
      <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Riwayat Transaksi
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container">

      @php
        $transaction = \App\Transaction::where('users_id', Auth::user()->id)->count();
      @endphp

      @if($transaction == 0 )
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <img src="/images/new-keranjang-kosong.png" class="keranjang-kosong mt-3 mb-4">
              </div>
              <div class="col-12 text-center">
                <div class="keranjang-kosong mb-3">Riwayat Transaksi Kosong</div>
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
            <div class="col-12 col-md-12">
              <h4 class="mt-4 mb-4 text-center">Riwayat Transaksi</h4>
              <div class="row">

                {{-- <div class="col-12 text-right mb-5 mt-2">
                  <a href="/riwayat-transaksi/cetak_pdf" class="btn btn-success btn-login" target="_blank">CETAK PDF</a>
                </div> --}}

                <div class="col-12">
                  @foreach ($buyTransactions as $transaction)
                    <a class="card mb-3" href="#">
                      <div class="card-body card-total">
                        <div class="row">
                          <div class="col-12 col-md-12">
                            <table class="table table-borderless table-cart">
                              <tbody>
                                <tr>
                                  <div class="col-3 col-md-4">
                                    <td>
                                      <div class="product-subtitle">
                                        Kode Transaksi
                                      </div>
                                      <div class="product-title-transaksi">
                                        {{-- {{ $transaction->code}} --}}
                                        {{ $transaction->transaction->code }}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-4">
                                    <td>
                                      <div class="product-subtitle">Produk Koi</div>
                                      <div class="product-title-transaksi">
                                        {{ $transaction->product->name }}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-4">
                                    <td>
                                      <div class="product-subtitle">Pelapak</div>
                                      <div class="product-title-transaksi">
                                        {{ $transaction->product->user->store_name }}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-3">
                                    <td>
                                      <div class="product-subtitle">
                                        Total Tagihan
                                      </div>
                                      <div class="product-title-transaksi">
                                        Rp. {{ number_format($transaction->product->price) }}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-3">
                                    <td>
                                      <div class="product-subtitle">
                                        Status Tagihan
                                      </div>
                                      <div class="product-title-transaksi">
                                        {{ $transaction->transaction->transaction_status }}
                                        {{-- {{ $transaction->shipping_status }} --}}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-3">
                                    <td>
                                      <div class="product-subtitle">Tanggal</div>
                                      <div class="product-title-transaksi">
                                        {{-- {{ $transaction->created_at }} --}}
                                        {{ $transaction->transaction->created_at }}
                                      </div>
                                    </td>
                                  </div>
                                  <div class="col-3 col-md-2">
                                    <td>
                                      <a href="{{ route('riwayat-transaksi-pdf', $transaction->id) }}" target="_blank" class="btn btn-invoice">Invoice</a>
                                      <a href="{{ route('riwayat-transaksi-detail', $transaction->id) }}" class="btn btn-riwayat">Lihat Detail</a>
                                    </td>
                                  </div>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </a>
                  @endforeach
                </div>


              </div>
            </div>
          </div>
        </div>
      </section>

      @endif
      </div>
    </div>
@endsection