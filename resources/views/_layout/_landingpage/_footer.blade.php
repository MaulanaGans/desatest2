<footer id="footer">



    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>DESA</h3>
                    <p>
                        {{ $site->address }}<br>
                        <strong>Phone:</strong> {{ $site->phone }}<br>
                        <strong>Email:</strong> {{ $site->email }}<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        @foreach ($services as $service)
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ $service->url }}">{{ $service->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Media Sosial</h4>
                    <div class="social-links mt-3">
                        <a href="{{ $site->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{ $site->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
</footer><!-- End Footer -->