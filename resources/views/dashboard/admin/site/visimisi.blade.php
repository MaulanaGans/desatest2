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
                            <label class="col-md-12">Visi</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-control-line" id="visi" name="visi" rows="5"
                                    required>{{ $site->visi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Misi</label>
                            <div class="col-md-12">
                                <textarea class="form-control form-control-line" id="misi" name="misi" rows="5"
                                    required>{{ $site->misi }}</textarea>
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
    var visi = new FroalaEditor('#visi');
    var misi = new FroalaEditor('#misi');
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