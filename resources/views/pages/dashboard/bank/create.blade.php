@extends('layouts.dashboard')

@section('title')
  Dashboard Admin Bank User Baru | Tokokoi
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Bank User</h2>
        <p class="dashboard-subtitle">
            Tambah Data Rekening Bank
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
          <form action="{{ route('dashboard-banks-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Atas Nama</label>
                      <input type="text" class="form-control" name="nama" required placeholder="Muklis"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bank</label>
                      <select name="banklist_id" class="form-control">
                        @foreach ($banklist as $banklist)
                          <option value="{{ $banklist->id }}">{{ $banklist->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nomor Rekening</label>
                      <input type="number" class="form-control" name="no_rekening" required placeholder="620001234" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Cabang</label>
                      <input type="text" class="form-control" name="cabang" required placeholder="Masaran"/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kabupaten/Kota</label>
                      <input type="text" class="form-control" name="kabupaten" required placeholder="Sragen" />
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
          </form>
        </div>
      </div>
    </div>
    @endif

  </div>
</div>
@endsection