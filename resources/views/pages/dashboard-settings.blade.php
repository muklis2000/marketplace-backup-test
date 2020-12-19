@extends('layouts.dashboard')

@section('title')
    Dashboard Setting Toko | Tokokoi
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Penggaturan Toko</h2>
                <p class="dashboard-subtitle">
                  Informasi detail tentang toko
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

                    <form action="{{ route('dashboard-settings-store-redirect', 'dashboard-settings-store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="storeName">Nama Toko</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="store_name"
                                  value="{{ $user->store_name }}"
                                />
                              </div>
                            </div>
                            {{-- <div class="col-md-6">
                              <div class="form-group">
                                <label for="category">Kategori Koi</label>
                                <select name="categories_id" class="form-control">
                                  <option value="{{ $user->categories_id }}">Tidak diganti</option>
                                    @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                            </div> --}}
                          {{-- </div>
                          <div class="row"> --}}
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="is_store_open">Status Toko</label>
                                <p class="text-muted">
                                  Apakah saat ini toko Anda buka?
                                </p>
                                <div
                                    class="custom-control custom-radio custom-control-inline"
                                  >
                                    <input
                                      type="radio"
                                      class="custom-control-input"
                                      name="store_status"
                                      id="openStoreTrue"
                                      value="1"
                                      {{ $user->store_status == 1 ? 'checked' : '' }}
                                    />
                                    <label
                                      for="openStoreTrue"
                                      class="custom-control-label"
                                    >
                                      Buka
                                    </label>
                                  </div>
                                  <div
                                    class="custom-control custom-radio custom-control-inline"
                                  >
                                    <input
                                      type="radio"
                                      class="custom-control-input"
                                      name="store_status"
                                      id="openStoreFalse"
                                      value="0"
                                      {{ $user->store_status == 0 || $user->store_status == NULL ? 'checked' : '' }}
                                    />
                                    <label
                                      for="openStoreFalse"
                                      class="custom-control-label"
                                    >
                                      Sementara Tutup
                                    </label>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success btn-login"
                              >
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              @endif

            </div>
          </div>
@endsection