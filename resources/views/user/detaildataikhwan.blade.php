@extends('layouts.sidebar')

@section('content')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Profil
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Profil</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn green" href="editdataikhwan.blade.php">
                                <i class="icon-pencil"></i> Edit Data
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="../assets/pages/media/profile/people19.png" class="img-responsive" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> Bagus Cakra Buana </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-map-marker"></i>Jakarta Selatan
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-calendar"></i>Jakarta, 5 Juni 1992
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-graduation-cap"></i>S1 Teknik Informatika
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-heart"></i>Fotografi
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-star"></i>Belum Menikah
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-diamond"></i>Sudah siap Menikah
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">
                                                        Profil Ikhwan
                                                    </span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab"> Pribadi </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_3" data-toggle="tab"> Informasi tambahan </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-offset-3">
                                                                <dl class="dl-horizontal">
                                                                    <dt>Golongan Darah</dt>
                                                                    <dd>O</dd>
                                                                </dl>   
                                                                <dl class="dl-horizontal">
                                                                    <dt>Riwayat Kesehatan</dt>
                                                                    <dd>Magh</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Status</dt>
                                                                    <dd>Belum Menikah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kebiasaan Baik</dt>
                                                                    <dd>Membantu sesama</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kebiasaan Buruk</dt>
                                                                    <dd>Suka sensitif</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Hal yang disukai</dt>
                                                                    <dd>Rihlah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Hal yang tidak disukai</dt>
                                                                    <dd>Marah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tinggi badan</dt>
                                                                    <dd>162 cm</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Berat Badan</dt>
                                                                    <dd>50 kg</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Pakaian harian</dt>
                                                                    <dd>Kaos Oblong</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kacamata</dt>
                                                                    <dd>Ya</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Pengalaman Ta'aruf</dt>
                                                                    <dd></dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Online</dt>
                                                                    <dd>Belum Pernah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Offline</dt>
                                                                    <dd>Belum Pernah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Celana</dt>
                                                                    <dd>Biasa</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Sholat</dt>
                                                                    <dd>Belum</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Merokok</dt>
                                                                    <dd>Tidak</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Siap menikah</dt>
                                                                    <dd>Sudah</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Target menikah</dt>
                                                                    <dd>2018</dd>
                                                                </dl>
                                                                <!--end row-->
                                                            </div>
                                                        </div>            
                                                    </div>                         
                                                    <!--tab_1_2-->
                                                    <div class="tab-pane" id="tab_1_3">
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-offset-3">
                                                                <div class="caption caption-md center">
                                                                    <i class="icon-globe theme-font hide"></i>
                                                                    <span class="caption-subject font-blue-madison bold uppercase">
                                                                        1. Keluarga
                                                                    </span>
                                                                </div>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Anak ke-</dt>
                                                                    <dd>2</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Asal</dt>
                                                                    <dd>Tangerang</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku</dt>
                                                                    <dd>Jawa</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ayah</dt>
                                                                    <dd>Jawa</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ibu</dt>
                                                                    <dd>Jawa</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-offset-3">
                                                                <div class="caption caption-md">
                                                                    <i class="icon-globe theme-font hide"></i>
                                                                    <span class="caption-subject font-blue-madison bold uppercase">
                                                                        2. Kriteria Pasangan
                                                                    </span>
                                                                </div>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Pendidikan</dt>
                                                                    <dd>S1</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Usia</dt>
                                                                    <dd>20 - 25 tahun</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Domisili</dt>
                                                                    <dd>Yogyakarta</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Harapan Pasangan</dt>
                                                                    <dd>Apa ya?</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kriteria lain</dt>
                                                                    <dd>Ngaji sunnah, mampu menjadi pendamping hidup</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-offset-3">
                                                                <div class="caption caption-md">
                                                                    <i class="icon-globe theme-font hide"></i>
                                                                    <span class="caption-subject font-blue-madison bold uppercase">
                                                                        3. Kajian Sunnah
                                                                    </span>
                                                                </div>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Ustad</dt>
                                                                    <dd>ust. Adi Hidayat</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kajian rutin</dt>
                                                                    <dd>kajian di masjid istiqlal</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tentang Kajian</dt>
                                                                    <dd>Tauhid</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tempat</dt>
                                                                    <dd>Jakarta</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt></dt>
                                                                    <dd></dd>
                                                                </dl>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end tab-pane-->
                                                </div>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        @endsection