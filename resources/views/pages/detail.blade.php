@extends('layouts.app')

@section('title')
    Detail Produk Koi | Tokokoi
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
                    Detail Produk
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-gallery mb-3" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :key="photos[activePhoto].id"
                  :src="photos[activePhoto].url"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="store-details-container">
        <section class="store-heading">
          <div class="container">
            <div class="row" data-aos="fade-up"
              data-aos-delay="200">
              <div class="col-lg-6">
                <h1>{{ $product->name }}</h1>
                <div class="price">Rp. {{ number_format($product->price) }}</div>
              </div>
              <div class="col-lg-2">

                @if(Auth::check() && !Auth::user()->email_verified_at)
                  <a href="{{ route('login') }}"
                    class="btn btn-favorit ml-4">
                    <i class="fas fa-heart"></i>
                  </a>
                  <a href=""
                    class="btn btn-favorit">
                    <i class="fas fa-share-alt"></i>
                  </a>
                @else

                @auth
                  <form action="{{ route('detail-favorit', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <button type="submit"
                      class="btn btn-favorit ml-4">
                      <i class="fas fa-heart"></i>
                    </button>
                    <button
                      class="btn btn-favorit mb-2">
                      <i class="fas fa-share-alt"></i>
                    </button>
                  </form>
                @else
                  <a href="{{ route('login') }}"
                    class="btn btn-favorit ml-4">
                    <i class="fas fa-heart"></i>
                  </a>
                  <a href=""
                    class="btn btn-favorit">
                    <i class="fas fa-share-alt"></i>
                  </a>
                @endauth

                @endif

              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                @if(Auth::check() && !Auth::user()->email_verified_at)
                  <a href="#"
                    class="btn btn-verifikasi btn-block mb-3">
                    Beli Sekarang
                  </a>
                @else

                  @auth
                    <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <button type="submit"
                        class="btn btn-success btn-login btn-block mb-3">
                        Beli Sekarang
                      </button>
                    </form>
                  @else
                    <a href="{{ route('login') }}"
                      class="btn btn-success btn-login btn-block mb-3">
                      Beli Sekarang
                    </a>
                  @endauth

                @endif
              </div>
            </div>
          </div>
        </section>

        <section class="store-description">
          <div class="container">
            <div class="dashboard-content">
              <ul class="nav nav-pills mt-4 mb-5 justify-content-start" id="myTab" role="tablist">
                <li class="nav-item" role="presentation" data-aos="fade-up"
              data-aos-delay="400">
                  <a
                    class="nav-link-btn active"
                    id="deskripsi-tab"
                    data-toggle="tab"
                    href="#deskripsi"
                    role="tab"
                    aria-controls="deskripsi"
                    aria-selected="true"
                    >Deskripsi</a
                  >
                </li>
                <li class="nav-item" role="presentation" data-aos="fade-up"
              data-aos-delay="600">
                  <a
                    class="nav-link-btn"
                    id="info-tab"
                    data-toggle="tab"
                    href="#info"
                    role="tab"
                    aria-controls="info"
                    aria-selected="true"
                    >Informasi Pelapak</a
                  >
                </li>
                <li class="nav-item" role="presentation" data-aos="fade-up"
              data-aos-delay="800">
                  <a
                    class="nav-link-btn"
                    id="ulasan-tab"
                    data-toggle="tab"
                    href="#ulasan"
                    role="tab"
                    aria-controls="ulasan"
                    aria-selected="true"
                    >Ulasan</a
                  >
                </li>
              </ul>

              <div class="tab-content mt-3" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="deskripsi"
                  role="tabpanel"
                  aria-labelledby="deskripsi-tab"
                >
                  <div class="container">
                    <div class="row">                        
                      <div class="col-12 col-lg-8">
                        <table class="table table-bordered text-center">
                          <thead>
                            <tr>
                              <th scope="col" class="table-detail">Jenis</th>
                              <th scope="col" class="table-detail">Panjang (Cm)</th>
                              <th scope="col" class="table-detail">Umur (Bulan)</th>
                              <th scope="col" class="table-detail">Kategori</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="td-detail">{{ $product->category->name }}</td>
                              <td class="td-detail">{{ $product->ukuran }} Cm</td>
                              <td class="td-detail">{{ $product->umur }} Bulan</td>
                              <td class="td-detail">{{ $product->jenis }}</td>
                            </tr>
                          </tbody>
                        </table>
                        <h5 class="sub-judul">{!! $product->description !!}</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="info"
                  role="tabpanel"
                  aria-labelledby="info-tab"
                >
                  <div class="container store-detail">
                    <div class="row">
                      <div class="col-12 col-lg-6">
                        <ul class="list-unstyled">
                          <li class="media">
                            @if($product->user->photo != null )
                              <img
                                src="{{ Storage::url($product->user->photo) }}"
                                class="mr-3 rounded-circle"
                                alt=""
                              />
                            @else
                              <img
                                src="/images/user-images.svg"
                                alt=""
                                class="rounded-circle mr-2 profile-picture"
                              />
                            @endif
                            <div class="media-body">
                              <h5>By {{ $product->user->store_name }}</h5>
                              <h6>{{ $product->user->address_one }}</h6>
                              <p class="status-toko">
                                @if ($product->user->store_status == 1)
                                  <span class="badge badge-success">Toko Buka</span>
                                @else
                                  <span class="badge badge-danger">Tutup Sementara</span>
                                @endif
                              </p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="col-12 col-lg-6">
                        <a href="{{ route('profile', $product->user->name) }}" class="btn btn-lapak">Kunjungi Lapak</a>
                      </div>
                      <div class="col-12 col-lg-8">
                        <div class="card-lapak">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-lg-6 p-3">
                                <div class="products-text-fitur">Bergabung Sejak</div>
                                <div class="products-fitur-title">{{ $product->user->created_at }}</div>
                              </div>
                              <div class="col-lg-6 p-3">
                                <div class="products-text-fitur">± 1-2 hari</div>
                                <div class="products-fitur-title">Waktu Proses Pesanan</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="ulasan"
                  role="tabpanel"
                  aria-labelledby="ulasan-tab"
                >
                  <div class="container store-review">
                    <div class="row">
                      <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Ulasan Produk</h5>
                      </div>
                    </div>
                    <div class="row">
                      {{-- <div class="col-12 col-lg-8">
                        <ul class="list-unstyled">
                          <li class="media">
                            <img
                              src="/images/icon-testimonial-1.png"
                              class="mr-3 rounded-circle"
                              alt=""
                            />
                            <div class="media-body">
                              <h5 class="mt-2 mb-1">Hazza Risky</h5>
                              I thought it was not good for living room. I really happy
                              to decided buy this product last week now feels like
                              homey.
                            </div>
                          </li>
                          <li class="media my-4">
                            <img
                              src="/images/icon-testimonial-2.png"
                              class="mr-3 rounded-circle"
                              alt=""
                            />
                            <div class="media-body">
                              <h5 class="mt-2 mb-1">Anna Sukkirata</h5>
                              Color is great with the minimalist concept. Even I thought
                              it was made by Cactus industry. I do really satisfied with
                              this.
                            </div>
                          </li>
                          <li class="media">
                            <img
                              src="/images/icon-testimonial-3.png"
                              class="mr-3 rounded-circle"
                              alt=""
                            />
                            <div class="media-body">
                              <h5 class="mt-2 mb-1">Dakimu Wangi</h5>
                              When I saw at first, it was really awesome to have with.
                              Just let me know if there is another upcoming product like
                              this.
                            </div>
                          </li>
                        </ul>
                      </div> --}}
                            <div class="col-md-6">
                                <form action="{{ url('/comment') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}" class="form-control">
                                    <input type="hidden" name="parent_id" id="parent_id" class="form-control">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" name="username">
                                        <p class="text-danger">{{ $errors->first('username') }}</p>
                                    </div>
                                    <div class="form-group" style="display: none" id="formReplyComment">
                                        <label for="">Balas Komentar</label>
                                        <input type="text" id="replyComment" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Komentar</label>
                                        <textarea name="comment" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-success btn-login">Kirim</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                @foreach ($product->comments as $row)
                                    <blockquote>
                                        <h6>{{ $row->username }}</h6>
                                        <hr>
                                        <p>{{ $row->comment }}</p><br>
                                        <a href="javascript:void(0)" onclick="balasKomentar({{ $row->id }}, '{{ $row->comment }}')">Balas</a>
                                    </blockquote>
                                    @foreach ($row->child as $val) 
                                        <div class="child-comment">
                                            <blockquote>
                                                <h6>{{ $val->username }}</h6>
                                                <hr>
                                                <p>{{ $val->comment }}</p><br>
                                            </blockquote>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
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

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach($product->galleries as $gallery)
            {
              id: {{ $gallery->id }},
              url: "{{ Storage::url($gallery->photos) }}",
            },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
    <script>
        function balasKomentar(id, name) {
            $('#formReplyComment').index();
            $('#parent_id').val(id)
            $('#replyComment').val(name)
        }
    </script>
@endpush