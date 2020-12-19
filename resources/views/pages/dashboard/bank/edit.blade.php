@extends('layouts.dashboard')

@section('title')
  Dashboard Admin Bank User Update | Tokokoi
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
            Edit Bank Milik "{{ $item->name }}"
        </p>
    </div>
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
          <form action="{{ route('dashboard-banks-update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Atas Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{ $item->nama }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bank</label>
                      <select name="banklist_id" class="form-control">
                        <option value="{{ $item->banklist_id }}">{{ $item->banklist->nama }}</option>
                        <option value="" disabled>----------------</option>
                        @foreach ($banklist as $banklist)
                          <option value="{{ $banklist->id }}">{{ $banklist->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Nomor Rekening</label>
                      <input type="number" class="form-control" name="no_rekening" value="{{ $item->no_rekening }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Cabang</label>
                      <input type="text" class="form-control" name="cabang" value="{{ $item->cabang }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kabupaten/Kota</label>
                      <input type="text" class="form-control" name="kabupaten" value="{{ $item->kabupaten }}" required />
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
  </div>
</div>
@endsection


@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush