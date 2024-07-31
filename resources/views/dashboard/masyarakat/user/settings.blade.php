<?php
$r = (Auth::user()->role == 'user') ? "masyarakat" : "admin"
?>
@extends('_layout/_'.$r.'/_base')

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
                        <div class="text-center">
                            <img class="rounded-circle mb-3 mt-4" style="object-fit: cover;" id="profile_pict"
                                src="{{ Auth()->user()->picture }}" width="160" height="160">
                            <div class="mb-3">
                                <input style="display: none;" type="file" name="image" id="picture"
                                    onchange="readImage(this);" accept="image/png, image/jpeg">
                                <input class="btn btn-primary btn-sm" type="button" value="Ubah Foto Profil"
                                    onclick="document.getElementById('picture').click();" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Username</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line"
                                    value="{{ Auth()->user()->username }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nama Lengkap</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="Nama Lengkap" name="name" id="name"
                                    class="form-control form-control-line" value="{{ Auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" placeholder="Email" class="form-control form-control-line"
                                    name="email" id="email" value="{{ Auth()->user()->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="phone">Nomor HP</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="081234567890" name="phone" id="phone"
                                    class="form-control form-control-line" value="{{ Auth()->user()->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="address">Alamat Lengkap</label>
                            <div class="col-md-12">
                                <textarea type="text" placeholder="Alamat Lengkap" name="address" id="address"
                                    class="form-control form-control-line">{{ Auth()->user()->address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" value="user" class="btn btn-success">Ubah Data
                                    Diri</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <h3 class="mb-3">Ubah password</h3>
                    <form class="form-horizontal form-material" method="POST" action="">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">Password Lama</label>
                            <div class="col-md-12">
                                <input type="password" placeholder="Password Lama" name="old_password"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Password Baru</label>
                            <div class="col-md-12">
                                <input type="password" placeholder="Password Baru" name="new_password"
                                    class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Konfirmasi Password Baru</label>
                            <div class="col-md-12">
                                <input type="password" placeholder="Konfirmasi Password Baru"
                                    name="new_password_confirmation" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" name="submit" value="password" class="btn btn-success">Ubah
                                    Password</button>
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