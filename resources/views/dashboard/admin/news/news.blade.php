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
                {{-- create table news article list --}}
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ $item->thumbnail }}" alt="{{ $item->title }}" class="img-fluid"
                                        style="max-height: 150px;"></td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    @if ($item->status == "published")
                                    <span class="badge badge-success">Published</span>
                                    @else
                                    <span class="badge badge-danger">Draft</span>
                                    @endif
                                </td>
                                <td>
                                    @if($item->status == "published")
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        href="/news/{{ $item->slug }}" target="_blank" title="Baca Berita"><i
                                            data-feather="eye"></i></a>
                                    @endif
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                        href="/admin/news/update/{{ $item->id }}" target="_blank" title="Ubah Berita"><i
                                            data-feather="edit"></i></a>
                                    <a class="btn btn-datatable btn-icon btn-transparent-dark"
                                        href="/admin/news/delete/{{ $item->id }}" title="Hapus Berita"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus Berita ini?')"><i
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