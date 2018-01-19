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
<!-- <section id="testimonials" style="background-color: rgba(205, 215 ,205 , .9)"> -->
<section id="testimonials">
    <div >
        <div class="container wow fadeInUp">
            <!-- <div class="row"> -->
            <!-- <div class="col-md-12"> -->
            <h3 class="section-title">DAFTAR</h3>
            <div class="section-title-divider"></div>
            <!-- <p class="section-description">Daftarkan diri Anda untuk memudahkan dalam proses Ta'aruf</p> -->
            <!-- </div> -->
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
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
        <div class="row service-login">
            <!-- <div class="col-md-4"></div> -->
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 ">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group form-md-line-input has-info form-md-floating-label">
                    <div class="input-group left-addon">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                        <input name="name" type="text" class="form-control" required>
                        <label for="form_control_1">Nama Lengkap</label>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info form-md-floating-label">
                    <div class="input-group left-addon">
                <span class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                </span>
                        <input name="email" type="email" class="form-control" required>
                        <label for="form_control_1">E-mail</label>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info form-md-floating-label">
                    <div class="input-group left-addon">
                <span class="input-group-addon">
                    <i class="fa fa-phone"></i>
                </span>
                        <input name="phone_number" type="tel" class="form-control" required>
                        <label for="form_control_1">No. Telepon</label>
                    </div>
                </div>
                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                        <div class="input-group left-addon">
              <span class="input-group-addon">
                  <i class="fa fa-key"></i>
              </span>
                            <input name="password" type="password" class="form-control" required>
                            <label for="form_control_1">Password</label>
                        </div>
                    </div>
                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                        <div class="input-group left-addon">
              <span class="input-group-addon">
                  <i class="fa fa-key"></i>
              </span>
                            <input name="password_confirmation" type="password" class="form-control" required>
                            <label for="form_control_1">Ulangi Password</label>
                        </div>
                    </div>
                <input name="syarat_ketentuan" type="checkbox" /> Saya setuju dengan syarat dan ketentuan yang berlaku pada TnT Indonesia
                <div>
                    <span></span>
                    <br/>
                </div>
                <!-- <input type="submit" class="btn green-sharp btn-outline  btn-block sbold uppercase" value="DAFTAR"> -->
                <button type="submit" class="btn btn blue btn-block">
                    Register
                </button>
            </div>

        </div>
        </form>
        <!-- </div> -->
    </div>
    <div class="col-md-4"></div>
    </div>
    <!-- </div> -->
</section>
@endsection
