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

        <div class="row justify-content-center">
          <a class="btn" style="background-color: #37517e; color: white; border-style: groove; border-color: #162642;"
            href="/news">Lihat Berita
            Lainnya</a>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Desa</h2>
        </div>

        <div class="row content">
          {!! $site->description !!}
        </div>

      </div>
    </section><!-- End About Us Section -->



    <!-- ======= Services Section ======= -->
    {{-- <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pelayanan</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, corrupti ea dolorum labore officia, fugit
            sint, voluptatibus eos cupiditate illum obcaecati? Cupiditate, libero labore fugiat iure aliquid recusandae
            eligendi pariatur.</p>
        </div>

        <div class="row">
          @foreach ($services as $service)
          <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="{{ $service->icon }}"></i></div>
              <h4><a href="{{ $service->url }}">{{ $service->name }}</a></h4>
              <p>{{ $service->description }}</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Services Section --> --}}

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi dan Misi</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptates dignissimos illum! Facere
            deleniti quaerat quibusdam quae recusandae nemo est distinctio amet veniam doloremque officiis sed vitae,
            laudantium voluptatibus repellat?</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Visi
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {!! $site->visi !!}
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Misi
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {!! $site->misi !!}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, inventore optio necessitatibus consectetur
            mollitia unde ducimus pariatur in, minima alias, eius doloribus iste architecto? Aperiam ipsum quo
            reprehenderit exercitationem! Amet.</p>
        </div>

        <div class="row">
          @foreach ($teams as $member)
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ $member->image }}" class="img-fluid" alt="{{ $member->name }}"></div>
              <div class="member-info">
                <h4>{{ $member->name }}</h4>
                <span>{{ $member->position }}</span>
                <p>{{ $member->description }}</p>
                <div class="social">
                  <a href="{{ $member->twitter }}"><i class="ri-twitter-fill"></i></a>
                  <a href="{{ $member->facebook }}"><i class="ri-facebook-fill"></i></a>
                  <a href="{{ $member->instagram }}"><i class="ri-instagram-fill"></i></a>
                  <a href="{{ $member->whatsapp }}"><i class="ri-whatsapp-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Organization Section ======= -->
    <section id="organization" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Struktur Organisasi</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis, inventore optio necessitatibus consectetur
            mollitia unde ducimus pariatur in, minima alias, eius doloribus iste architecto? Aperiam ipsum quo
            reprehenderit exercitationem! Amet.</p>
        </div>

        <div class="row">
          <img src="{{ $site->struktur }}" class="img-fluid" alt="Struktur Organisasi {{ $site->name }}">
        </div>

      </div>
    </section><!-- End Organization Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates alias vitae consectetur fuga! Est,
            velit labore! Odit mollitia velit, suscipit perferendis ea ipsam, nihil tenetur veritatis quidem quibusdam
            dignissimos corporis!</p>
        </div>

        <!-- ======= Contact Section ======= -->
        <div class="map-section">
          <iframe style="border:0; width: 100%; height: 400px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p>{{ $site->address }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $site->email }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>{{ $site->phone }}</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

    <section id="usulan" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Usulan</h2>
          <p>Usulan untuk desa</p>
        </div>

        {{-- create button "login to create usulan" --}}
        @if (Auth::check())
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-10 text-center">
            <a href="/masyarakat/pengaduan/create" class="btn btn-primary btn-lg">Buat Usulan</a>
          </div>
        </div>
        @endif
        @if (!Auth::check())
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-10 text-center">
            <a href="/login" class="btn btn-primary btn-lg">Login Untuk Buat Usulan</a>
          </div>
        </div>
        @endif


        <!-- ======= Contact Section ======= -->
      </div>
    </section><!-- End Contact Section -->

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