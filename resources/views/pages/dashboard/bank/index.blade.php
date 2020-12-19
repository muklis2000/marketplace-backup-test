@extends('layouts.dashboard')

@section('title')
    Dashboard Admin Bank | Tokokoi
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Bank</h2>
            <p class="dashboard-subtitle">
                Daftar Bank User
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
                <div class="col-md-12">

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
                    
                    <div class="card">
                        <div class="card-body">
                            <a href="{{  route('dashboard-banks-create') }}" class="btn btn-success btn-login mb-3">
                                + Tambah Bank Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>No Rekening</th>
                                        <th>Bank</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
              
    </div>
</div>
@endsection


@push('addon-script')
    <script>
        // AJAX DataTablenn
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'nama', name: 'nama' },
                { data: 'no_rekening', name: 'no_rekening' },
                { data: 'banklist.nama', name: 'banklist.nama' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush