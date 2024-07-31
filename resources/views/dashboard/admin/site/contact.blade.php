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
                        {{-- create form input type text phone, email, facebook and instagram --}}
                        <div class="form-group">
                            <label class="col-md-12">Nomor HP</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="phone"
                                    value="{{ $site->phone }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control form-control-line" name="email"
                                    value="{{ $site->email }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Facebook</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="facebook"
                                    value="{{ $site->facebook }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Instagram</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="instagram"
                                    value="{{ $site->instagram }}" required>
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