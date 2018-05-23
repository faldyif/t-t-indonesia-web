<?php $active ='profile'; ?>

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
                    @if($ownProfile)
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn green" href="{{route('user.profile.edit')}}">
                                <i class="icon-pencil"></i> Edit Data
                            </a>
                        </div>
                    </div>
                    @endif
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="{{ url('img/akhwat.png') }}" class="img-responsive"  alt="" title="" />
                                    </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> {{ $user->name ?? '-' }} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-map-marker"></i>{{ $user->withAkhwat->domisili ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-calendar"></i>{{ $user->withAkhwat->tempat_lahir ?? '-' }}, {{ isset($user->withAkhwat->tanggal_lahir) ? \Carbon\Carbon::parse($user->withAkhwat->tanggal_lahir)->formatLocalized('%d %B %Y') : '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-graduation-cap"></i>{{ \App\JenjangPendidikan::find($user->withAkhwat->pendidikan_terakhir_id)->nama_jenjang ?? '-' }} ({{ $user->withAkhwat->ket_pendidikan_terakhir ?? '-' }})
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-heart"></i>{{ $user->withAkhwat->hobi ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-star"></i>{{ $user->withAkhwat->status() ?? '-' }}
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-diamond"></i>{{ $user->withAkhwat->siap_nikah ? 'Sudah siap Menikah' : (!isset($user->withAkhwat->siap_nikah) ? '-' : 'Belum siap Menikah') }}
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
                                                        Profil Akhwat
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
                                                                <dd>{{ $user->withAkhwat->goldar ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Riwayat Penyakit</dt>
                                                                <dd>{{ $user->withAkhwat->riwayat_kesehatan ?? '-' }}</dd>
                                                            </dl>
                                                            <!-- <dl class="dl-horizontal">
                                                                <dt>Kegiatan</dt>
                                                                <dd>Kuliah, sembari bekerja di tempat Yang in syaa Allah terjaga dari ikhtilat</dd>
                                                            </dl> -->
                                                            <dl class="dl-horizontal">
                                                                <dt>Kebiasaan Baik</dt>
                                                                <dd>{{ $user->withAkhwat->kebiasaan_baik ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Kebiasaan Buruk</dt>
                                                                <dd>{{ $user->withAkhwat->kebiasaan_buruk ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Hal yang disukai</dt>
                                                                <dd>{{ $user->withAkhwat->hal_disukai ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Hal yang tidak disukai</dt>
                                                                <dd>{{ $user->withAkhwat->hal_taksuka ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Tinggi badan</dt>
                                                                <dd>{{ $user->withAkhwat->tinggi_badan ?? '-' }} cm</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Berat Badan</dt>
                                                                <dd>{{ $user->withAkhwat->berat_badan ?? '-' }} kg</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Pakaian harian</dt>
                                                                <dd>{{ $user->withAkhwat->pakaian_harian ?? '-' }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Kacamata</dt>
                                                                <dd>{{ $user->withAkhwat->kacamata ? 'Ya' : (!isset($user->withAkhwat->kacamata) ? '-' : 'Tidak') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Pengalaman Ta'aruf</dt>
                                                                <dd></dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Online</dt>
                                                                <dd>{{ $user->withAkhwat->pengalaman_taaruf_online == 0 ? 'Belum pernah' : (!isset($user->withAkhwat->pengalaman_taaruf_online) ? '-' : $user->withAkhwat->pengalaman_taaruf_online . ' kali') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Offline</dt>
                                                                <dd>{{ $user->withAkhwat->pengalaman_taaruf_online == 0 ? 'Belum pernah' : (!isset($user->withAkhwat->pengalaman_taaruf_offline) ? '-' : $user->withAkhwat->pengalaman_taaruf_offline . ' kali') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Hijab Syar'i {{ isset($user->withAkhwat->hijab_syari) }}</dt>
                                                                <dd>{{ $user->withAkhwat->hijab_syari ? 'Ya' : (!isset($user->withAkhwat->hijab_syari) ? '-' : 'Tidak') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Niqob</dt>
                                                                <dd>{{ $user->withAkhwat->niqob ? 'Ya' : (!isset($user->withAkhwat->niqob) ? '-' : 'Tidak') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Izin Ortu</dt>
                                                                <dd>{{ $user->withAkhwat->izin_ortu ? 'Ya' : (!isset($user->withAkhwat->izin_ortu) ? '-' : 'Tidak') }}</dd>
                                                            </dl>
                                                            <dl class="dl-horizontal">
                                                                <dt>Target menikah</dt>
                                                                <dd>{{ $user->withAkhwat->target_menikah ?? '-' }}</dd>
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
                                                                    <dd>{{ $user->withAkhwat->anak_ke ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Asal</dt>
                                                                    <dd>{{ $user->withAkhwat->asal ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku</dt>
                                                                    <dd>{{ $user->withAkhwat->suku ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ayah</dt>
                                                                    <dd>{{ $user->withAkhwat->suku_ayah ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Suku Ibu</dt>
                                                                    <dd>{{ $user->withAkhwat->suku_ibu ?? '-' }}</dd>
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
                                                                    <dd>{{ \App\JenjangPendidikan::find($user->withAkhwat->pendidikan_terakhir_id)->nama_jenjang ?? '-' }} ({{ $user->withAkhwat->ket_pendidikan_terakhir ?? '-' }})</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Usia</dt>
                                                                    <dd>{{ $user->withAkhwat->kriteria_usia_from ?? '-' }} ~ {{ $user->withAkhwat->kriteria_usia_to ?? '-' }} tahun</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Domisili</dt>
                                                                    <dd>{{ $user->withAkhwat->domisili ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Harapan Pasangan</dt>
                                                                    <dd>{{ $user->withAkhwat->harapan_pasangan ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kriteria lain</dt>
                                                                    <dd>{{ $user->withAkhwat->kriteria_lain ?? '-' }}</dd>
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
                                                                    <dd>{{ $user->withAkhwat->ngaji_sunnah ? 'Ya' : (!isset($user->withAkhwat->ngaji_sunnah) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Ustad</dt>
                                                                    <dd>{{ $user->withAkhwat->ustadz ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Kajian rutin</dt>
                                                                    <dd>{{ $user->withAkhwat->kajian_rutin ? 'Ya' : (!isset($user->withAkhwat->kajian_rutin) ? '-' : 'Tidak') }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tentang Kajian</dt>
                                                                    <dd>{{ $user->withAkhwat->tentang_ngaji ?? '-' }}</dd>
                                                                </dl>
                                                                <dl class="dl-horizontal">
                                                                    <dt>Tempat</dt>
                                                                    <dd>{{ $user->withAkhwat->tempat_ngaji ?? '-' }}</dd>
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
        <!-- END CONTAINER -->
                        </div>
                    </div>
                </div>
            </div>
    @endsection