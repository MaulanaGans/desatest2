<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="/login_assets/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="/login_assets/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login_assets/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="/login_assets/css/style.css" />

    <title>{{ $title }}</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('/login_assets/images/bg_1.jpg')"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Masuk</h3>
                            <p class="mb-4">
                                Masukan Username / Email / No HP dan kata sandi untuk masuk ke akun anda.
                            </p>
                        </div>
                        @include('_layout._alert')
                        <form action="" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Username / Email / No HP</label>
                                <input type="text" class="form-control" id="email" name="email" />
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" />
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="/forgot-password" class="forgot-pass">Lupa
                                        Password</a></span>
                            </div>

                            <input type="submit" value="Masuk" class="btn btn-block btn-primary" />
                        </form>
                        <a href="/register" style="text-decoration: none;"><input type="button" value="Buat Akun Baru"
                                style="text-decoration: none;" class="btn btn-block btn-success mt-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/login_assets/js/jquery-3.3.1.min.js"></script>
    <script src="/login_assets/js/popper.min.js"></script>
    <script src="/login_assets/js/bootstrap.min.js"></script>
    <script src="/login_assets/js/main.js"></script>
</body>

</html>