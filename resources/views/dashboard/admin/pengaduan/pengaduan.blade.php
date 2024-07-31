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
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No Pengaduan</th>
                                <th>Pengadu</th>
                                <th>Keluhan</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Tanggal Aduan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->user->name }}</td>
                                <td>{{ $p->subject }}</td>
                                <td>{{ $p->description }}</td>
                                @if ($p->status == 'menunggu')
                                <td><span class="badge badge-primary">Menunggu</span></td>
                                @elseif ($p->status == 'proses')
                                <td><span class="badge badge-info">Proses</span></td>
                                @elseif ($p->status == 'selesai')
                                <td><span class="badge badge-success">Selesai</span></td>
                                @elseif ($p->status == 'banding')
                                <td><span class="badge badge-danger">Aju Banding</span></td>
                                @endif
                                <td>{{ $p->created_at }}</td>
                                <td>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        href="/admin/pengaduan/read/{{ $p->id }}" title="Lihat Pengaduan"><i
                                            data-feather="eye"></i></a>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/admin/pengaduan/delete/{{ $p->id }}" title="Hapus Pengaduan"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus pengaduan ini?')"><i
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