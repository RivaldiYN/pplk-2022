<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="UTF-8" />
        <meta name="theme-color" content="#09f" />
        <meta name="description" content="Program Pengenalan Lingkungan Kampus (PPLK) merupakan acara pesta penyambutan terbesar untuk mahasiswa baru yang diselenggarakan setiap tahunnya di Institut Teknologi Sumatera (ITERA). PPLK ITERA hadir sebagai akses utama bagi mahasiswa baru untuk mengawali gerbang perkuliahan, yang berupa kaderisasi awal terpusat yang diselenggarakan oleh Keluarga Mahasiswa Institut Teknologi Sumatera (KM ITERA) untuk menyambut mahasiswa baru." />
        <meta name="keywords" content="PPLK, Program Pengenalan Lingkungan Kampus, PPLK ITERA 2022, KM-ITERA" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="author" content="Fitra Ilyasa" />
        <meta name="copyright" content="PPLK 2022" />
        <meta name="robots" content="follow" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Website PPLK 2022" />
        <meta property="og:url" content="URL" />
        <link rel="manifest" href="./manifest.webmanifest" />

        <!-- JUDUL -->
        <title>@yield('title') - PPLK 2022</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        @yield('style')

        <!-- Owl-carousel -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
        <!-- Bootstrap icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    </head>
    <body>

        @include('layouts.client.menu')

        @yield('content')

        <!-- Footer -->
        <br><br><br><footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top" id="footer-page">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img class="rounded-circle" src="{{ asset('assets/Logo-PPLK.webp') }}" alt="logo">
                </a>
                <span class="text-white">&copy;ARDHAMES PPLK 2022</span>
            </div>
            <ul class="nav col-md-4 justify-content-center list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/pplkitera/"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/iterapplk"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/channel/UC09qEyEDNG1U_l4u41LTpTw"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </footer>
        <!-- JS -->
        <script type="text/javascript">
            let nav = document.querySelector('#navbar-desktop');
            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 50) {
                    nav.classList.add('background-gradient', 'shadow');
                } else {
                    nav.classList.remove('background-gradient', 'shadow');
                }
            });
        </script>

        @yield('script')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
