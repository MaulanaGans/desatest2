<!DOCTYPE html>
<html lang="en">

<head>
  @include('_layout._landingpage._header')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('_layout._landingpage._nav')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>{{ $title }}</h1>
          <h2>{!! $site->short_description !!}</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ $site->video }}" class="glightbox btn-watch-video"><i
                class="bi bi-play-circle"></i><span>Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 desagambar-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ $site->image }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="berita" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Terkini</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero et fuga natus optio voluptatem nostrum
            cupiditate assumenda illum veniam modi iste aperiam qui, quidem repellat error, adipisci officia expedita
            ratione.</p>
        </div>

        {{-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-politik">Berita Politik</li>
          <li data-filter=".filter-kesehatan">Berita Bidang Kesehatan </li>
          <li data-filter=".filter-olahraga">Berita Bidang Olahraga</li>
        </ul> --}}

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($news as $berita)
          <div class="col-lg-4 col-md-6 portfolio-item filter-politik">
            <div class="portfolio-img"><a href="/news/{{ $berita->slug }}" target="_blank"
                rel="noopener noreferrer"><img src="{{ $berita->thumbnail }}" class="img-fluid"
                  style="height: 234px; width: 416px; object-fit: cover;" alt="{{ $berita->title }}"></a>
            </div>
            <div class="portfolio-info">
              <a href="/news/{{ $berita->slug }}" target="_blank" rel="noopener noreferrer">
                <h4>{{ $berita->title }}</h4>
              </a>
              <p>{{ $berita->description }}</p>
              <a href="/news/{{ $berita->slug }}" class="details-link" title="Read More" target="_blank"><i
                  class="bx bx-link"></i></a>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <!-- ======= Footer ======= -->
  @include('_layout._landingpage._footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>