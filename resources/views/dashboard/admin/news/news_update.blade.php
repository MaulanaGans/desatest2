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
                    <form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        {{-- create form input title, description, content, category, thumbnail --}}
                        <div class="form-group">
                            <label class="col-md-12">Judul</label>
                            <div class="col-md-12">
                                <input type="text" name="title" class="form-control form-control-line"
                                    value="{{ $news->title }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Kategori</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="category" required>
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ ($item->id == $news->category_id) ? "selected" :
                                        "" }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Thumbnail</label>
                            <div class="col-md-12 mb-2">
                                <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}" style="max-height: 150px;"
                                    id="image">
                            </div>
                            <div class="col-md-12">
                                <input type="file" class="form-control form-control-line" name="thumbnail"
                                    accept="image/png, image/jpeg" onchange="readImage('image', this);">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Konten</label>
                            <div class="col-md-12">
                                <textarea name="content" id="content" class="form-control form-control-line" rows="10"
                                    required>{{ $news->content }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" value="publish"
                                    class="btn btn-success">Publikasikan</button>
                                <button type="submit" name="submit" value="save"
                                    class="btn btn-secondary">Simpan</button>
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
    new FroalaEditor('#content', {
        heightMin: 300,
        heightMax: 500
    });
</script>
<script>
    function readImage(id, input) {
        if (input.files && input.files[0]) {
            $('#thumbnail-preview').removeClass('d-none');
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