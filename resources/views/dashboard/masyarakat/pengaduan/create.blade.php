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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Identifikasi masalah</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Masukkan identifikasi masalah" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Solusi</label>
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Masukkan solusi dari masalah" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Berkas <small><i>(tidak wajib diisi)</i></small></label>
                            <input type="file" class="form-control" id="file" name="file"
                                accept=".doc, .docx, .pdf, image/*">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection