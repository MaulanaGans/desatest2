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
                    <form class="form-horizontal form-material" method="POST" action="update"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Nama Desa</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="name"
                                    value="{{ $site->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Deskripsi Singkat</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-control-line" id="short_description"
                                    name="short_description" rows="5" required>{{ $site->short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Deskripsi Lengkap</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-control-line" name="description" id="description"
                                    rows="5" required>{{ $site->description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Alamat Sekretariat Desa</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-control-line" name="address" id="address" rows="5"
                                    required>{{ $site->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Video Youtube</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="video"
                                    value="{{ $site->video }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Gambar Thumbnail</label>
                            <div class="col-md-12 mb-2">
                                <img src="{{ $site->image }}" alt="{{ $site->name }}" style="max-height: 150px;"
                                    id="image">
                            </div>
                            <div class="col-md-12">
                                <input type="file" class="form-control form-control-line" name="image"
                                    accept="image/png, image/jpeg" onchange="readImage('image', this);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Logo Desa</label>
                            <div class="col-md-12 mb-2">
                                <img src="{{ $site->logo }}" alt="{{ $site->name }}" style="max-height: 150px;"
                                    id="logo">
                            </div>
                            <div class="col-md-12">
                                <input type="file" class="form-control form-control-line" name="logo"
                                    accept="image/png, image/jpeg" onchange="readImage('logo', this);">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
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
@section('custom_js')
<script type="text/javascript" src="/froala-editor/js/froala_editor.pkgd.min.js"></script>
<script>
    var short_description = new FroalaEditor('#short_description');
    var description = new FroalaEditor('#description');
</script>
<script>
    function readImage(id, input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#'+id)
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
@section('custom_css')
<link href="/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
@endsection