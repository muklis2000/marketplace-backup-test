@extends('layouts.dashboard')

@section('title')
    Dashboard Buat Produk | Tokokoi
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Tambah Produk Baru</h2>
                <p class="dashboard-subtitle">
                  Tambah produk agar semakin banyak untung
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('dashboard-product-store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  name="name" placeholder="Ogan Fish"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Harga(Rp)</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  name="price" placeholder="299000"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="ukuran">Ukuran (cm)</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  name="ukuran"
                                  placeholder="22"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="umur">Umur (bulan)</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  name="umur"
                                  placeholder="14"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="jenis">Jenis</label>
                                <select name="jenis" class="form-control">
                                    <option value="Lokal">Lokal</option>
                                    <option value="Import">Import</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="category">Kategori</label>
                                <select name="categories_id" class="form-control">
                                  @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Description</label>
                                <textarea
                                  name="description"
                                  id="editor"
                                >
                                </textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Thumbnails</label>
                                <input
                                  type="file"
                                  class="form-control"
                                  name="photo"
                                />
                                <small class="text-muted">
                                  Kamu dapat memilih lebih dari satu file
                                </small>
                              </div>
                            </div>
                            <div class="col-12 text-right mt-3">
                              <button
                                type="submit"
                                class="btn btn-success btn-login btn-block"
                              >
                                Simpan
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- <div class="row mt-2">
                        <div class="col">
                          <button
                            type="submit"
                            class="btn btn-success btn-block px-5"
                          >
                            Save Now
                          </button>
                        </div>
                      </div> --}}

                    </form>
                  </div>
                </div>
              </div>
              @endif
            </div>
          </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script>
            function thisFileUpload() {
                document.getElementById("file").click();
            }
        </script>
        <script>
            CKEDITOR.replace("editor");
        </script>
@endpush