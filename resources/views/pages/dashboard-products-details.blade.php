@extends('layouts.dashboard')

@section('title')
    Dashboard Produk Detail | Tokokoi
@endsection

@section('content')
<div
            class="section-content section-dashboard-home"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">{{ $product->name }}</h2>
                <p class="dashboard-subtitle">
                  Product Details
                </p>
              </div>
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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('dashboard-product-update', $product->id) }}" method="POST" enctype="multipart/form-data">
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
                                  name="name"
                                  value="{{ $product->name }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="price">Harga (Rp)</label>
                                <input
                                  type="number"
                                  class="form-control"
                                  name="price"
                                  value="{{ $product->price }}"
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
                                  value="{{ $product->ukuran }}"
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
                                  value="{{ $product->umur }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="jenis">Jenis</label>

                                {{-- <select name="jenis" class="form-control">
                                    <option value="Lokal">Lokal</option>
                                    <option value="Import">Import</option>
                                </select> --}}

                                <select name="jenis" class="form-control">
                                    <option value="Lokal" 
                                    <?php if($product['jenis']=="Lokal") { echo "selected"; } ?>
                                    >Lokal</option> }
  
                                    <option value="Import" 
                                    <?php if($product['jenis']=="Import") { echo "selected"; } ?>
                                    >Import</option> }               
                                </select>

                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="category">Kategori</label>
                                  <select name="categories_id" class="form-control">
                                    <option value="{{ $product->categories_id }}">Tidak diganti ({{ $product->category->name }})</option>
                                    @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="description"
                                  id="editor"
                                >{!! $product->description !!}
                                </textarea>
                              </div>
                            </div>
                            <div class="col">
                              <button
                                type="submit"
                                class="btn btn-success btn-block px-5"
                              >
                                Update Product
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">

                          @foreach ($product->galleries as $gallery)
                            <div class="col-md-4">
                              <div class="gallery-container">
                                <img
                                  src="{{ Storage::url($gallery->photos ?? '') }}"
                                  alt=""
                                  class="w-100"
                                />
                                <a class="delete-gallery" type="button" >
                                  <img src="/images/icon-delete.svg" alt="" data-toggle="modal" data-target="#exampleModal{{ $gallery->id }}"/>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $gallery->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Gambar dari Produk?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p>Apakah anda yakin akan menghapus data ini?</p>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn text-success" data-dismiss="modal">Batal</button>
                                          <a type="submit" class="btn btn-remove-cart text-danger" href="{{ route('dashboard-products-gallery-delete', $gallery->id) }}">
                                            Hapus
                                          </a>

                                      </div>
                                    </div>
                                  </div>
                                </div>


                              </div>
                            </div>
                          @endforeach
                           <div class="col-12 mt-3">
                            <form action="{{ route('dashboard-products-gallery-upload') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="products_id" value="{{ $product->id }}">
                              <input
                              type="file"
                              name="photos"
                              id="file"
                              style="display: none;"
                              onchange="form.submit()"
                            />
                            <button
                            type="button"
                              class="btn btn-secondary btn-block"
                              onclick="thisFileUpload();"
                            >
                              Add Photo
                            </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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