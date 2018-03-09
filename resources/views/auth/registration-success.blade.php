@extends('layouts.guest')

@section('content')
    <!--==========================
  Header Section
============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Header 1</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <!-- <li class="menu-active"><a href="#hero">Beranda</a></li> -->
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/') }}#about">Tentang Kami</a></li>
                    <li><a href="{{ url('/') }}#services">Cara Kerja</a></li>
                    <li class="menu-has-children"><a href="">Media</a>
                        <ul>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Kisah Ta'aruf</a></li>
                            <li><a href="{{ url('/') }}#portfolio">Galeri</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/') }}#testimonials">Testimoni</a></li>
                    <li><a href="#">|</a></li>
                    @auth
                        <li><a href="{{ route('dashboard.index') }}">Dasbor</a></li>
                        <li><a href="{{ url('login') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Keluar</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <li class="menu-active"><a href="{{ url('register') }}">Daftar</a></li>
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
            <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
            <h3 class="section-title">Pendaftaran</h3>
            <div class="section-title-divider"></div>

            <!-- <div class="portlet light bordered"> -->
            <div class="portlet-body">
                <div class="note note-success">
                    <h4 class="block">Registrasi berhasil!</h4>
                    <p> Silahkan verifikasi email dengan mengklik link yang diberikan ke email anda </p>
                    <p> Jika anda tidak menemukan email masuk, silahkan periksa juga bagian spam dari email anda </p>
                </div>

            </div>
            <!-- </div> -->
        </div>
        <!-- <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="icon-settings font-red-sunglo">Default</i>
                <span class="caption-subject bold uppercase"> </span>
            </div>
          </div> -->

        <!-- <div class="container about-container wow fadeInUp"> -->



    </section>
@endsection
