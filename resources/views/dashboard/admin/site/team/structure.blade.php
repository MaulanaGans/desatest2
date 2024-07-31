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
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <img class="img-fluid mb-3 mt-4" id="profile_pict" src="{{ $site->struktur }}">
                            <div class="mb-3">
                                <input style="display: none;" type="file" name="image" id="picture"
                                    onchange="readImage(this);" accept="image/png, image/jpeg">
                                <input class="btn btn-primary btn-sm" type="button" value="Ubah Struktur Organisasi"
                                    onclick="document.getElementById('picture').click();" />
                            </div>
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
@section('custom_js')
<script>
    function readImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile_pict')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection