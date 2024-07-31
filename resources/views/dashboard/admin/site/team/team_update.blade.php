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
                            <img class="rounded-circle mb-3 mt-4" style="object-fit: cover;" id="profile_pict"
                                src="{{ $team->image }}" width="160" height="160">
                            <div class="mb-3">
                                <input style="display: none;" type="file" name="image" id="picture"
                                    onchange="readImage(this);" accept="image/png, image/jpeg">
                                <input class="btn btn-primary btn-sm" type="button" value="Ubah Foto Profil"
                                    onclick="document.getElementById('picture').click();" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama"
                                value="{{ $team->name }}" required>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="position">Posisi</label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="Posisi"
                                value="{{ $team->position }}" required>
                            @error('position')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Deskripsi"
                                required>{{ $team->description }}</textarea>
                            @error('description')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook"
                                value="{{ $team->facebook }}">
                            @error('facebook')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter"
                                value="{{ $team->twitter }}">
                            @error('twitter')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"
                                placeholder="Instagram" value="{{ $team->instagram }}">
                            @error('instagram')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Whatsapp"
                                value="{{ $team->whatsapp }}">
                            @error('whatsapp')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
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