@extends('_layout/_masyarakat/_base')
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
                                <th>No Usulan</th>
                                <th>Usulan</th>
                                <th>Solusi</th>
                                <th>Status</th>
                                <th>Tanggal Usulan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduan as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
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
                                        href="/masyarakat/pengaduan/read/{{ $p->id }}" title="Lihat Pengaduan"><i
                                            data-feather="eye"></i></a>
                                    @if($p->status != 'selesai')
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/masyarakat/pengaduan/finish/{{ $p->id }}" title="Tandai Sebagai Selesai"
                                        onclick="return confirm('Apakah anda yakin ingin menyelesaikan pengaduan ini?')"><i
                                            data-feather="check"></i></a>
                                    @elseif($p->status == 'selesai')
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/masyarakat/pengaduan/banding/{{ $p->id }}" title="Ajukan banding"
                                        onclick="return confirm('Apakah anda yakin ingin melakukan banding pada pengaduan ini?')"><i
                                            data-feather="x"></i></a>
                                    @endif
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