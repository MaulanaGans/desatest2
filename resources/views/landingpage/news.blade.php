<!DOCTYPE html>
<html lang="en">

<head>
    @include('_layout._landingpage._header')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('_layout._landingpage._nav')
    <!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <h2></h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    {{-- <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/portfolio-1.jpg" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/portfolio-2.jpg" alt="" />
                                </div>

                                <div class="swiper-slide">
                                    <img src="/assets/img/portfolio/portfolio-3.jpg" alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div> --}}

                    <div class="col-lg-12">
                        <div class="portfolio-info">
                            <img src="{{ $news->thumbnail }}"
                                style="width: 100%; max-height: 500px; object-fit: cover; object-position: 50% 0%;"
                                alt="{{ $news->title }}">
                            <h2 class="mt-4 mb-3">{{ $news->title }}</h2>
                            <ul>
                                <li><strong>Penulis</strong>: {{ $news->user->name }}</li>
                                <li><strong>Kategori</strong>: {{ $news->category->name }}</li>
                                <li><strong>Dibuat</strong>: {{ $news->created_at }}</li>
                                <li><strong>Diperbaharui</strong>: {{ $news->updated_at }}</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('_layout._landingpage._footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
</body>

</html>