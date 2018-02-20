<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ta'aruf & Ta'adud Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="{{ url('favicon.ico') }}" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ url('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ url('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">	
	<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('css/owl.theme.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.all.min.js"></script>
	

    <!-- =======================================================
      Theme Name: Imperial
      Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
    <div id="preloader"></div>

    <!--==========================
      Hero Section
    ============================-->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    <img class="" src="{{ url('img/logo.png') }}" alt="Imperial">
                </div>

                <h1>Selemat Datang di Ta'aruf & Ta'adud</h1>
                <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
                <div class="actions">
                    <a href="{{ url('register') }}" class="btn-get-started">Mulai</a>
                    <a href="#services" class="btn-services">Cara Kerja</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Header Section
    ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="#hero"><img src="{{ url('img/logo.png') }}" alt="" title="" /></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#services">Cara Kerja</a></li>
                    <li class="menu-has-children"><a href="">Media</a>
                        <ul>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Kisah Ta'aruf</a></li>
                            <li><a href="#portfolio">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#">|</a></li>
                    @auth
                    <li><a href="{{ url('home') }}">Dasbor</a></li>
                    <li><a onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Keluar</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @else
                        <li><a href="{{ url('register') }}">Daftar</a></li>
                        <li><a href="{{ url('login') }}">Masuk</a></li>
                    @endauth
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
      About Section
    ============================-->
    <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Tentang Kami</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">sebuah program ta'aruf(perkenalan) sesuai sariat islam</p>
                </div>
            </div>
        </div>
        <div class="container about-container wow fadeInUp">
            <div class="row">
                <div class="col-md-6 col-md-push-6 about-content">
                    <h2 class="about-title">ta'aruf digital, terpercaya dan fleksibel</h2>
                    <p class="about-text">
                        Ta'aruf dan ta'adud indonesia adalah sebuah program untuk melakukan perkenalan yang syari berbasis digital. di awasi langsung oleh ustad Abu Zayyan Mansur.
                    </p>
                    <p class="about-text">
                        Program ini sebelumya telah berjalan di aplikasi Telegram, dengan ribuan user yang bergabung di grup utama. serta ratusan orang yang sudah terdaftar sebagai orang yang siap menikah.
                    </p>
                    <p class="about-text">
                        Alhamdulillah selama berjalan di telegram sudah ada puluhan pasangan yang berhasil menikah dengan cara ta'aruf digital ini.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Cara Kerja</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-desktop"></i></div>
                    <h4 class="service-title"><a href="">Daftar</a></h4>
                    <p class="service-description">Pengguna mendaftar sebagai peserta ta'aruf atau wali peserta. selelah mendaftar, perlu untuk melengkapi data pribadi(bagi peserta) agar bisa mengaksess data pribadi lawan jenis</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="service-title"><a href="">Request</a></h4>
                    <p class="service-description">Peserta ikhwan maupun akhwat bisa menawarkan diri (mengirim permintaan) untuk ta'aruf atas calon yang dikehendaki. Peserta yang mendapat request, bisa menolak atau menerima tawaran ta'aruf. </p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                    <h4 class="service-title"><a href="">Memulai Ta'aruf</a></h4>
                    <p class="service-description">Saat ada peserta yang menerima tawaran ta'aruf, sistem akan mengirim pemberitahuan ke mediator(ustad). Ketika ustad bersedia menjadi mediator, maka akan dibuatkan grup chat untuk kedua peserta dan walinya serta mediator. wali dapat masuk ke grup chat dengan mendaftar sebagai wali dan masukkan kode tertentu.</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-photo"></i></div>
                    <h4 class="service-title"><a href="">Mundur dari Ta'aruf</a></h4>
                    <p class="service-description">Peserta yang sedang dalam proses ta'aruf bisa mundur dari ta'aruf maksimal pada proses khitbah</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-road"></i></div>
                    <h4 class="service-title"><a href="">Alur ta'aruf</a></h4>
                    <p class="service-description">perkenalan (ta'aruf) -> istikharah -> Bertemu(nazhor) -> isthikharah -> khitbah -> akad nikah -> walimah -> samara</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="service-title"><a href="">Feedback</a></h4>
                    <p class="service-description">Peserta yang berhasil maupaun gagal ber ta'aruf dengan sistem ini mengisikan testimoni, kisah, kritik & saran guna kebaikan program ini kedepannya.</p>
                </div>
            </div>
        </div>
    </section>


    <!--==========================
      Porfolio Section
    ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Galeri</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">berikut adalah foto peserta yang berhasil menikah dengan berta'aruf menggunakan program ini</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-1.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 1</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-2.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 2</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-3.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 3</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-4.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 4</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-5.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 5</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-6.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 6</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-7.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 7</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url({{ url('img/portfolio-8.jpg') }});" href="">
                        <div class="details">
                            <h4>Portfolio 8</h4>
                            <span>Alored dono par</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Testimonials</h3>
          <div class="section-title-divider"></div>
          <!-- <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p> -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-1.jpg" alt=""></div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> <span class="rotating">Aplikasi yang sangat bermanfaat dalam ikhtiar mencari jodoh, prosesnya mudah.</span><small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Alhamdulillah memudahkan dalam proses pernikahan<small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div>
  </section>
    <!--==========================
      Footer
    ============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright <strong>FFTRH</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
                        -->
                        Bootstrap Themes by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Required JavaScript Libraries -->
    <script src="{{ url('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ url('lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ url('lib/morphext/morphext.min.js') }}"></script>
    <script src="{{ url('lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('lib/stickyjs/sticky.js') }}"></script>
    <script src="{{ url('lib/easing/easing.js') }}"></script>
	<script src="{{ url('lib/easing/easing.js') }}"></script>
	

    <!-- Template Specisifc Custom Javascript File -->
    <script src="{{ url('js/custom.js') }}"></script>
	<script src="{{ url('js/jquery.js') }}"></script>
	<script src="{{ url('js/loader.js') }}"></script>
	<script src="{{ url('js/owl.carousel.min.js') }}"></script>

    <script src="{{ url('contactform/contactform.js') }}"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#testimonies').owlCarousel({
			singleItem : true,
			autoPlay : true,
			slideSpeed : 200
		}) ;
	}


</body>
</html>