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
                            <a href="{{ url('dashboard') }}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Profil</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row" style="padding-bottom: 10px">
                        <div class="col-md-12">
                            <a class="btn green" href="editdataikhwan.blade.php">
                                <i class="icon-pencil"></i> Edit Data
                            </a>
                        </div>
                    </div>
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
                                        <div class="profile-usertitle-name"> {{ $user->name ?? '-' }} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-map-marker"></i>{{ $user->domisili ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-calendar"></i>{{ $user->tempat_lahir ?? '-' }}, {{ isset($user->tanggal_lahir) ? \Carbon\Carbon::parse($user->tanggal_lahir)->formatLocalized('%d %B %Y') : '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-graduation-cap"></i>{{ \App\JenjangPendidikan::find($user->pendidikan_terakhir_id)->nama_jenjang ?? '-' }} ({{ $user->ket_pendidikan_terakhir ?? '-' }})
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-heart"></i>{{ $user->status ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-star"></i>{{ $user->hobi ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-diamond"></i>{{ $user->siap_nikah ? 'Sudah siap Menikah' : !isset($user->siap_nikah) ? '-' : 'Belum siap Menikah' }}
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
                                                                    <dd>{{ $user->goldar ?? '-' }}</dd>
                                                                </dl>   
                                                                <dl class="dl-horizontal">
                                                                    <dt>Riwayat Kesehatan</dt>
                                                                    <dd>{{ $user->riwayat_kesehatan ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Status</dt>
                                                                    <dd>{{ $user->status ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kebiasaan Baik</dt>
                                                                    <dd>{{ $user->kebiasaan_baik ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kebiasaan Buruk</dt>
                                                                    <dd>{{ $user->kebiasaan_buruk ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Hal yang disukai</dt>
                                                                    <dd>{{ $user->hal_disukai ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Hal yang tidak disukai</dt>
                                                                    <dd>{{ $user->hal_taksuka ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tinggi badan</dt>
                                                                    <dd>{{ $user->tinggi_badan ?? '-' }} cm</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Berat Badan</dt>
                                                                    <dd>{{ $user->berat_badan ?? '-' }} kg</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Pakaian harian</dt>
                                                                    <dd>{{ $user->pakaian_harian ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kacamata</dt>
                                                                    <dd>{{ $user->kacamata ? 'Ya' : (!isset($user->kacamata) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Pengalaman Ta'aruf</dt>
                                                                    <dd></dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Online</dt>
                                                                    <dd>{{ $user->pengalaman_taaruf_online == 0 ? 'Belum pernah' : (!isset($user->pengalaman_taaruf_online) ? '-' : $user->pengalaman_taaruf_online . ' kali') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Offline</dt>
                                                                    <dd>{{ $user->pengalaman_taaruf_online == 0 ? 'Belum pernah' : (!isset($user->pengalaman_taaruf_offline) ? '-' : $user->pengalaman_taaruf_offline . ' kali') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Celana</dt>
                                                                    <dd>{{ $user->celana ? 'Cingkrang' : (!isset($user->celana) ? '-' : 'Biasa') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Sholat</dt>
                                                                    <dd>{{ $user->sholat ? 'Ya' : (!isset($user->sholat) ? '-' : 'Belum') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Merokok</dt>
                                                                    <dd>{{ $user->merokok ? 'Ya' : (!isset($user->merokok) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Siap menikah</dt>
                                                                    <dd>{{ $user->siap_nikah ? 'Sudah' : !isset($user->siap_nikah) ? '-' : 'Belum' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Target menikah</dt>
                                                                    <dd>{{ $user->target_menikah ?? '-' }}</dd>
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
                                                                    <dd>{{ $user->anak_ke ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Asal</dt>
                                                                    <dd>{{ $user->asal ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku</dt>
                                                                    <dd>{{ $user->suku ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ayah</dt>
                                                                    <dd>{{ $user->suku_ayah ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ibu</dt>
                                                                    <dd>{{ $user->suku_ibu ?? '-' }}</dd>
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
                                                                    <dd>{{ \App\JenjangPendidikan::find($user->kriteria_pendidikan_id)->nama_jenjang ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Usia</dt>
                                                                    <dd>{{ $user->kriteria_usia_from ?? '-' }} ~ {{ $user->kriteria_usia_to ?? '-' }} tahun</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Domisili</dt>
                                                                    <dd>{{ $user->kriteria_domisili ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Harapan Pasangan</dt>
                                                                    <dd>{{ $user->harapan_pasangan ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kriteria lain</dt>
                                                                    <dd>{{ $user->kriteria_lain ?? '-' }}</dd>
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
                                                                    <dt>Ngaji Sunnah</dt>
                                                                    <dd>{{ $user->ngaji_sunnah ? 'Ya' : (!isset($user->ngaji_sunnah) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Ustad</dt>
                                                                    <dd>{{ $user->ustadz ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kajian rutin</dt>
                                                                    <dd>{{ $user->kajian_rutin ? 'Ya' : (!isset($user->kajian_rutin) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tentang Kajian</dt>
                                                                    <dd>{{ $user->tentang_ngaji ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tempat</dt>
                                                                    <dd>{{ $user->tempat_ngaji ?? '-' }}</dd>
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