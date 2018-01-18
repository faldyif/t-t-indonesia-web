@extends('layouts.guest')

@section('content')
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
                    <a href="#about" class="btn-get-started">Mulai</a>
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
                    <li><a href="daftar.html">Daftar</a></li>
                    <li><a href="#contact">Masuk</a></li>
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
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Testimonials</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Berikut adalah testimoni orang yang mengikuti program ini</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="profile">
                        <h4>Saul Goodman</h4>
                        <span>Lawless Inc</span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="quote">
                        <p>Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection