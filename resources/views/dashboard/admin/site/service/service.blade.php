@extends('_layout/_admin/_base')
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('_layout._alert')
                <a href="/admin/desa/services/create" class="btn btn-primary btn-rounded m-b-10 m-l-5 mb-4">
                    <i class="fa fa-plus"></i>
                    Tambah Layanan
                </a>
                {{-- create table service --}}
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ikon</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><i class='{{ $service->icon }}'></i></td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        href="/admin/desa/services/update/{{ $service->id }}" title="Ubah Layanan"><i
                                            data-feather="edit"></i></a>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/admin/desa/services/delete/{{ $service->id }}" title="Hapus Layanan"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus layanan ini?')"><i
                                            data-feather="trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection
@section('custom_js')
<script type="text/javascript" src="/DataTables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#zero_config').DataTable();
    });
</script>
@endsection
@section('custom_css')
<link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css" />
@endsection