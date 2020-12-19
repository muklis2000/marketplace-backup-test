@extends('layouts.app')

@section('title')
    Bantuan | Tokokoi
@endsection

@section('content')
<!-- Page Content -->
    <div class="page-content page-home">
      <section>
        <div class="container">
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
              
              <img
                src="/images/favorit.png"
                alt=""
                class="tengah"
                data-aos="fade-down"
                data-aos-delay="100"
              />
              <h1 class="tengah" data-aos="fade-down" data-aos-delay="200">
                Butuh Bantuan?
              </h1>

              <form action="/help/cari" method="GET">
                <div
                  class="tengah-search"
                  data-aos="fade-down"
                  data-aos-delay="500"
                >
                  <div class="search">
                    <input type="text" name="cari" placeholder="Cari topik bantuan" value="{{ old('cari') }}" />
                    <div class="button-src">
                      <button type="submit" class="btn-login">Cari</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </section>
      
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-down" data-aos-delay="400"">
              <h1 class="topik">Topik yang Sering Ditanyakan</h1>
            </div>

            @php $incrementCategory = 0 @endphp
            @forelse ($help as $help)
            <div class="col-6" data-aos="fade-down" data-aos-delay="{{ $incrementCategory+= 100 }}">
              <a class="bantuan-link" href="{{ route('bantuan-detail', $help->slug) }}">
                <div class="card-bantuan">
                  <div class="row">
                    <div class="col-10">
                      <h5 class="des-topik">
                        {{ $help->topik }}
                      </h5>
                    </div>
                    <div class="col-2">
                      <img class="next" src="/images/next.svg" alt="" />
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @empty
              <div class="col-12 text-center py-5"
                data-aos="fade-up"
                data-aos-delay="100">
                Topik Bantuan Tidak Ditemukan
              </div>
            @endforelse

          </div>
        </div>
      </section>

      <section class="bg-contact mt-3">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-down" data-aos-delay="100">
              <hr class="kontak">
              <h1 class="text-center mb-5 kontak">Kontak Kami</h1>
            </div>
          </div>
          <div class="row">

            <div class="col-12 col-md-6 col-lg-5">

              <div class="card mb-5" data-aos="fade-down" data-aos-delay="200">
                {{-- <img src="/images/maps.jpg" alt="" class="maps"> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31626.92353050207!2d110.35481290455655!3d-7.751008313280378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f32e53b59f%3A0x6895476385eb6b54!2sUTY%20Plaza!5e0!3m2!1sid!2sid!4v1602037409738!5m2!1sid!2sid" width="445" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="card-body">
                  <div class="row">
                    <div class="col-2">
                      <img src="/images/maps.svg" alt="" style="width: 60px;">
                    </div>
                    <div class="col-10">
                      <h5 class="judul-maps">Tokokoi Care</h5>
                      <h5 class="sub-judul-maps">Jl. Ring Road Utara No.81, Mlati Krajan, Sendangadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-12 col-lg-7">
                <div class="row mb-5" data-aos="fade-down" data-aos-delay="100">
                  <div class="col-12 col-md-12 col-lg-6">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form action="{{ route('contact-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-12">
                      <label for="inputEmail4">Nama</label>
                      <input type="text" class="form-control form-control-new" name="nama" placeholder="Muklis Adi" required>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputPassword4">Email</label>
                      <input type="email" class="form-control form-control-new" name="email" placeholder="muklisadi1998@gmail.com" required>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputPassword4">Subject</label>
                      <input type="text" class="form-control form-control-new" name="phone" placeholder="Pesanan belum sampai" required>
                    </div>
                  </div>
                  
                  <div class="col-12 col-md-12 col-lg-6">
                    <div class="form-group col-md-12">
                      <label for="exampleFormControlTextarea1">Pesan</label>
                      <textarea class="form-control form-control-new" name="pesan" rows="8" placeholder="Pesan anda" required></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-login btn-success float-right pl-5 pr-5">
                        Kirim
                      </button>
                    </div>
                  </div>
                  </form>
              </div>
            </div>

          </div>
        </div>
      </section>

    </div> 
@endsection