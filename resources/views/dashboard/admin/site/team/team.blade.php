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
                <a href="/admin/desa/sekre/create" class="btn btn-primary btn-rounded m-b-10 m-l-5 mb-4">
                    <i class="fa fa-plus"></i>
                    Tambah Anggota Sekretariat
                </a>
                <a href="/admin/desa/sekre/structure" class="btn btn-success btn-rounded m-b-10 m-l-5 mb-4">
                    <i class="fa fa-sitemap"></i>
                    Ubah Struktur Organisasi
                </a>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Posisi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid"
                                        width="100px">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->position }}</td>
                                <td>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        href="/admin/desa/sekre/update/{{ $item->id }}"
                                        title="Ubah Data Diri Anggota"><i data-feather="edit"></i></a>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/admin/desa/sekre/delete/{{ $item->id }}" title="Hapus Anggota"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus anggota ini?')"><i
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
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css" />
@endsection