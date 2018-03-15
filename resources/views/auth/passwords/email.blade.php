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
                    <li><a href="{{ url('register') }}">Daftar</a></li>
                    <li class="menu-active"><a href="{{ url('login') }}">Masuk</a></li>
                    @endauth
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->


<section id="about">
    <div class="container wow fadeInUp">
        <!-- <div class="row"> -->
        <!-- <div class="col-md-12"> -->
        <h3 class="section-title">Reset Password</h3>
        <div class="section-title-divider"></div>
        <!-- <p class="section-description">Daftarkan diri Anda untuk memudahkan dalam proses Ta'aruf</p> -->
        <!-- </div> -->
        <!-- </div> -->
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-4">
            <div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                <input id="email" type="email" class="form-control" placeholder="Alamat Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
