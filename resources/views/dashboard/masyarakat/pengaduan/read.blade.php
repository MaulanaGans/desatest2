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
                <div class="row">
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Perihal</strong>
                        <br>
                        <p class="text-muted">{{ $pengaduan->subject }}</p>
                    </div>
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Nama Pengusul</strong>
                        <br>
                        <p class="text-muted">{{ $pengaduan->user->name }}</p>
                    </div>
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Nomor HP</strong>
                        <br>
                        <p class="text-muted">{{ $pengaduan->user->phone }}</p>
                    </div>
                    <div class="col-md-2 col-xs-6 b-r"> <strong>Email</strong>
                        <br>
                        <p class="text-muted">{{ $pengaduan->user->email }}</p>
                    </div>
                    <div class="col-md-2 col-xs-6"> <strong>Alamat</strong>
                        <br>
                        <p class="text-muted">{{ $pengaduan->user->address }}</p>
                    </div>
                    <div class="col-md-2 col-xs-6"> <strong>Status</strong>
                        <br>
                        <p class="text-muted">@if ($pengaduan->status == 'menunggu')
                            <span class="badge badge-primary">Menunggu</span>
                            @elseif ($pengaduan->status == 'proses')
                            <span class="badge badge-info">Proses</span>
                            @elseif ($pengaduan->status == 'selesai')
                            <span class="badge badge-success">Selesai</span>
                            @elseif ($pengaduan->status == 'banding')
                            <span class="badge badge-danger">Aju Banding</span>
                            @endif
                        </p>
                    </div>
                </div>
                <hr>
                <div class="profiletimeline mt-4">
                    <div class="sl-item">
                        <div class="sl-left"> <img src="{{ $pengaduan->user->picture }}" alt="user"
                                class="rounded-circle"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)" class="link">{{ $pengaduan->user->name }}</a> <span
                                    class="sl-date">{{ $pengaduan->created_at }}</span>
                                <p class="mt-2">{{ $pengaduan->description }}</p>
                                @if ($pengaduan->file)
                                <a href="{{ $pengaduan->file }}" class="btn btn-success btn-sm">Download File</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @foreach ($pengaduan->pengaduancomment as $pengaduancomment)
                    <hr>
                    <div class="sl-item">
                        <div class="sl-left"> <img src="{{ $pengaduancomment->user->picture }}" alt="user"
                                class="rounded-circle"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)" class="link">{{ $pengaduancomment->user->name }}</a>
                                <span class="sl-date">{{ $pengaduancomment->created_at }}</span>
                                <p class="mt-2">{{ $pengaduancomment->comment }}</p>
                                @if ($pengaduancomment->file)
                                <a href="{{ $pengaduancomment->file }}" class="btn btn-success btn-sm">Download File</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if($pengaduan->status != 'selesai')
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="comment">Beri Tanggapan</label>
                        <textarea name="comment" id="comment" cols="30" rows="4" class="form-control"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">Berkas <small><i>(tidak wajib diisi)</i></small></label>
                        <input type="file" class="form-control" id="file" name="file"
                            accept=".doc, .docx, .pdf, image/*">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection
@section('custom_css')
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css" />
@endsection
@section('custom_js')
<script type="text/javascript" src="/DataTables/datatables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#zero_config').DataTable();
    });
</script>
@endsection