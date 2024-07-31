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
                            <h3>Buat Akun</h3>
                            <p class="mb-4">
                                Untuk dapat masuk ke website {{ env('APP_NAME') }} anda harus membuat akun.
                            </p>
                        </div>
                        @include('_layout._alert')
                        <form action="" method="post">
                            @csrf
                            <div class="form-group last mb-1">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required />
                            </div>
                            <div class="form-group last mb-1">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required />
                            </div>
                            <div class="form-group last mb-1">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required />
                            </div>
                            <div class="form-group last mb-1">
                                <label for="phone">No HP</label>
                                <input type="text" class="form-control" id="phone" name="phone" required />
                            </div>
                            <div class="form-group last mb-1">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required />
                            </div>
                            <div class="form-group last mb-1">
                                <label for="address">Alamat</label>
                                <textarea type="text" class="form-control" id="address" name="address"
                                    required></textarea>
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="/forgot-password" class="forgot-pass">Lupa
                                        Password</a></span>
                            </div>

                            <input type="submit" value="Buat Akun" class="btn btn-block btn-primary" />
                        </form>
                        <a href="/login" style="text-decoration: none;"><input type="button"
                                value="Sudah Memiliki Akun?" style="text-decoration: none;"
                                class="btn btn-block btn-success mt-2"></a>
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