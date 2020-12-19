@extends('layouts.dashboard')

@section('title')
    Dashboard Tokokoi | Tokokoi
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                  Informasi terupdate tentang toko anda hari ini!
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

                  @if(Auth::user()->roles == 'ADMIN' )
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ number_format($customer) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  @else
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Produk Anda
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ number_format($products) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif

                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Pendapatan
                        </div>
                        <div class="dashboard-card-subtitle">
                        Rp. {{ number_format($revenue) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaksi
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ number_format($transaction_count) }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="card">
                      <a href="{{ route('dashboard-settings-account') }}">
                      <div class="card-body">
                        <p class="toko"><i class="fas fa-exclamation"></i> <small> Hei {{ Auth::user()->name }}, Silahkan atur alamat toko kamu, agar pembeli tau estimasi biaya ongkos kirim.</small></p>
                      </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    {{-- <h5 class="mb-3">Transaksi Tersimpan</h5> --}}

                    @foreach ($transaction_data as $transaction)
                         <a
                      class="card card-list d-block"
                      href="{{ route('dashboard-transaction-details', $transaction->id) }}"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                              class="w-75"
                            />
                          </div>
                          <div class="col-md-4">
                            {{ $transaction->product->name ?? '' }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->transaction->user->name ?? '' }}
                          </div>
                          <div class="col-md-3">
                            {{ $transaction->created_at ?? '' }}
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach

                  </div>
                </div>
              </div>

              @endif

            </div>
          </div>
@endsection