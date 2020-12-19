@extends('layouts.admin')

@section('title')
    Dashboard Bank List | Tokokoi
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Bank List</h2>
                <p class="dashboard-subtitle">
                  Daftar Bank
                </p>
              </div>
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
                                <a href="{{  route('banklist.create') }}" class="btn btn-success btn-login mb-3">
                                    + Tambah Bank Baru
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
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
            </div>
          </div>
@endsection

@push('addon-script')
    <script>
        // AJAX DataTable
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

    <script>
        $('#form-delete').on('submit', function(e){
            var form = this;
            e.preventDefault();
            swal({
            title: 'Hapus data ?',
            text: "Klik Hapus untuk menghapus data !",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
            }).then((result) => {
            if (result.value) {
                return form.submit();
            }
            })
        }); 
    </script>

    {{-- <script>
    function remove(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to delete data",
        icon: 'warning',
        width: '550px',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
            $.ajax({
                    type: "POST",
                    url: "{{ url('/delete') }}",
                    data: {
                    id:id,
                    "_token": "{{ csrf_token() }}",
                    },
                    success: function(response){
                    if(response.status==200) {
                    Swal.fire({
                        title: 'Success',
                        text: 'Delete data successfully.',
                        icon: 'success',
                        width: '550px',
                        confirmButtonColor: '#3085d6',
                    });
                    
                    setTimeout(function(){
                    swal.close();
                    window.location.reload();
                    },1500)
                    }else{
                    Swal.fire({
                        title: 'Warning',
                        text: 'Deleting data failed',
                        icon: 'warning',
                        width: '550px',
                        confirmButtonColor: '#3085d6',
                    });
                    
                    setTimeout(function(){
                    swal.close();
                    window.location.reload();
                    },1500)
                    }
                },
            })
        }
        });
    }
    </script> --}}
@endpush