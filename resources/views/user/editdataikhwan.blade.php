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
                            <h1>Edit Profil
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="{{ route('user.dashboard') }}">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <a href="{{ route('user.profile') }}">Profil</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Edit Profil</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    {!! Form::open(array('route' => 'user.welcome.edit', 'enctype' => 'multipart/form-data')) !!}
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('user.profile') }}" class="btn dark btn-outline">Batal</a>
                            <button type="submit" name="" class="btn green">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- BEGIN PAGE ACTIONS -->

                                    <div class="form-group">
                                        <center>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100px; max-height: 100px;"> </div>
                                                <div>
                                                    <span class="btn green btn-file">
                                                        <span class="fileinput-new"> Pilih foto </span>
                                                        <span class="fileinput-exists"> Ubah </span>
                                                        <input type="file" name="foto"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name}}" readonly="" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Domisili</label>
                                        <input type="text" class="form-control" name="domisili" value="{{ $user->withIkhwan->domisili}}" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Tempat lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" value="{{ $user->withIkhwan->tempat_lahir}}" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <!-- <div class="col-md-8"> -->
                                        <div class="input-group date date-picker" data-date="12-02-1995" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input type="text" class="form-control" name="tanggal_lahir" value="{{ isset($user->withIkhwan->tanggal_lahir) ? \Carbon\Carbon::parse($user->withIkhwan->tanggal_lahir)->formatLocalized('%d %B %Y') : '-' }}">
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <!-- /input-group -->
                                        <span class="help-block"> Pilih tanggal </span>
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pendidikan terakhir</label>
                                        <select class="form-control" id="fm-pendidikan" name="pendidikan_terakhir">
                                            <option value="1"> SD </option>
                                            <option value="2"> SMP </option>
                                            <option value="3"> SMA </option>
                                            <option value="4"> D1 </option>
                                            <option value="5"> D3 </option>
                                            <option value="6"> D4 </option>
                                            <option value="7"> S1 </option>
                                            <option value="8"> S2 </option>
                                            <option value="9"> S3 </option>
                                            <option value="10"> Lain - lain </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Keterangan Pendidikan Terakhir</label>
                                        <input type="text" class="form-control" name="ket_pendidikan_terakhir" value="{{ $user->withIkhwan->ket_pendidikan_terakhir}}" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Hobi</label>
                                        <input type="text" class="form-control" name="hobi" value="{{ $user->withIkhwan->hobi}}" />
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        @if ($user->withIkhwan->status==1)
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="lajang" name="radio1" value="1" class="md-radiobtn" name="status_lajang" checked="">
                                                <label for="lajang">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Lajang </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="jandaduda" name="radio1" value="2" class="md-radiobtn" name="status_janda_duda">
                                                <label for="jandaduda">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Janda/Duda </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="menikah" name="radio1" value="3" class="md-radiobtn" name="status_menikah">
                                                <label for="menikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Menikah </label>
                                            </div>
                                        </div>
                                        @elseif ($user->withIkhwan->status==2)
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="lajang" name="radio1" value="1" class="md-radiobtn" name="status_lajang" checked="">
                                                <label for="lajang">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Lajang </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="jandaduda" name="radio1" value="2" class="md-radiobtn" name="status_janda_duda">
                                                <label for="jandaduda">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Janda/Duda </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="menikah" name="radio1" value="3" class="md-radiobtn" name="status_menikah" checked="">
                                                <label for="menikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Menikah </label>
                                            </div>
                                        </div>
                                        @else
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="lajang" name="radio1" value="1" class="md-radiobtn" name="status_lajang" checked="">
                                                <label for="lajang">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Lajang </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="jandaduda" name="radio1" value="2" class="md-radiobtn" name="status_janda_duda" checked="">
                                                <label for="jandaduda">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Janda/Duda </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="menikah" name="radio1" value="3" class="md-radiobtn" name="status_menikah">
                                                <label for="menikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Menikah </label>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Siap menikah</label>
                                        @if ($user->withIkhwan->siap_nikah==1)
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="siapmenikah" name="radio2" value="1" class="md-radiobtn" name="siap_menikah_true" checked="">
                                                <label for="siapmenikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Sudah </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="belum" name="radio2" value="2" class="md-radiobtn" name="siap_menikah_false">
                                                <label for="belum">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Belum </label>
                                            </div>
                                        </div>
                                        @else
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="siapmenikah" name="radio2" value="1" class="md-radiobtn" name="siap_menikah_true" checked="">
                                                <label for="siapmenikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Sudah </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="belum" name="radio2" value="2" class="md-radiobtn" name="siap_menikah_false">
                                                <label for="belum">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Belum </label>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                
                            </div>
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
                                                    <!-- BEGIN PAGE ACTIONS -->
                                                    <div class="form-group">
                                                        <label class="control-label">Golongan Darah</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="a" name="radio3" value="1" class="md-radiobtn">
                                                                <label for="a">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> A </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="b" name="radio3" value="2" class="md-radiobtn">
                                                                <label for="b">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> B </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="ab" name="radio3" value="3" class="md-radiobtn">
                                                                <label for="ab">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> AB </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="o" name="radio3" value="4" class="md-radiobtn" checked="">
                                                                <label for="o">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> O </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Riwayat Penyakit</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->riwayat_penyakit}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Kebiasaan baik</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->kebiasaan_baik}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Kebiasaan buruk</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->kebiasaan_buruk}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hal yang disukai</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->Hal_disuka}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Hal yang tidak disukai</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->hal_taksuka}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Tinggi badan (dalam cm)</label>
                                                        <input type="number" class="form-control" value="{{ $user->withIkhwan->tinggi_badan}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Berat badan (dalam kg)</label>
                                                        <input type="number" class="form-control" value="{{ $user->withIkhwan->berat_badan}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Pakaian harian</label>
                                                        <input type="text" class="form-control" value="{{ $user->withIkhwan->pakaian_harian}}" /> </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Kacamata</label>
                                                        @if ($user->withIkhwan->kacamata==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="ya" name="radio4" value="1" class="md-radiobtn" checked="">
                                                                <label for="ya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="tidak" name="radio4" value="0" class="md-radiobtn">
                                                                <label for="tidak">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tidak </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="ya" name="radio4" value="1" class="md-radiobtn">
                                                                <label for="ya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="tidak" name="radio4" value="0" class="md-radiobtn" checked="">
                                                                <label for="tidak">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tidak </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Pengalaman Ta'aruf Online</label>
                                                        @if ($user->withIkhwan->pengalaman_taaruf_online==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="y" name="radio5" value="1" class="md-radiobtn" checked="">
                                                                <label for="y">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Sudah </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="n" name="radio5" value="0" class="md-radiobtn" >
                                                                <label for="n">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="y" name="radio5" value="1" class="md-radiobtn" >
                                                                <label for="y">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Sudah </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="n" name="radio5" value="0" class="md-radiobtn" checked="">
                                                                <label for="n">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Pengalaman Ta'aruf Offline</label>
                                                        @if ($user->withIkhwan->pengalaman_taaruf_offline==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="yes" name="radio6" value="1" class="md-radiobtn" checked="">
                                                                <label for="yes">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Sudah </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="no" name="radio6" value="0" class="md-radiobtn">
                                                                <label for="no">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="yes" name="radio6" value="1" class="md-radiobtn">
                                                                <label for="yes">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Sudah </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="no" name="radio6" value="0" class="md-radiobtn" checked="">
                                                                <label for="no">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Celana</label>
                                                        @if ($user->withIkhwan->celana==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="cingkrang" name="radio7" value="1" class="md-radiobtn" checked="">
                                                                <label for="cingkrang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Cingkrang</label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="panjang" name="radio7" value="0" class="md-radiobtn" checked="">
                                                                <label for="panjang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Pendek </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="cingkrang" name="radio7" value="1" class="md-radiobtn" >
                                                                <label for="cingkrang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Cingkrang</label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="panjang" name="radio7" value="0" class="md-radiobtn" checked="">
                                                                <label for="panjang">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Pendek </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Sholat 5 waktu</label>
                                                        @if ($user->withIkhwan->sholat==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="sholatya" name="radio8" value="1" class="md-radiobtn" checked="">
                                                                <label for="sholatya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="sholattidak" name="radio8" value="0" class="md-radiobtn" >
                                                                <label for="sholattidak">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                         <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="sholatya" name="radio8" value="1" class="md-radiobtn">
                                                                <label for="sholatya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="sholattidak" name="radio8" value="0" class="md-radiobtn" checked="">
                                                                <label for="sholattidak">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Belum </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Merokok</label>
                                                        @if ($user->withIkhwan->merokok==1)
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="merokokya" name="radio9" value="1" class="md-radiobtn" checked="">
                                                                <label for="merokokya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="tidakmerokok" name="radio9" value="2" class="md-radiobtn" >
                                                                <label for="tidakmerokok">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tidak </label>
                                                            </div>
                                                        </div>
                                                        @else
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio">
                                                                <input type="radio" id="merokokya" name="radio9" value="1" class="md-radiobtn" >
                                                                <label for="merokokya">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Ya </label>
                                                            </div>
                                                            <div class="md-radio">
                                                                <input type="radio" id="tidakmerokok" name="radio9" value="2" class="md-radiobtn" checked="" >
                                                                <label for="tidakmerokok">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Tidak </label>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Target Menikah</label>
                                                        <div class="input-group input-medium date date-picker" data-date="10/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                                            <input type="text" class="form-control" name="target_menikah" value="{{ $user->withIkhwan->target_menikah }}" readonly>
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END PAGE ACTIONS -->
                                                </div>                    
                                                    <!--tab_1_2-->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Anak ke-</label>
                                                                <input type="number" class="form-control" name="anak_ke" value="{{ $user->withIkhwan->anak_ke}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Asal</label>
                                                                <input type="text" class="form-control" name="asal" value="{{ $user->withIkhwan->asal}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku</label>
                                                                <input type="text" class="form-control" name="suku" value="{{ $user->withIkhwan->suku}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku Ayah</label>
                                                                <input type="text" class="form-control" name="suku_ayah" value="{{ $user->withIkhwan->suku_ayah}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku Ibu</label>
                                                                <input type="text" class="form-control" name="suku_ibu" value="{{ $user->withIkhwan->suku_ibu}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Usia</label>
                                                                <input type="number" class="form-control" name="usia" value="{{ $user->withIkhwan->usia}}" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Lain-lain</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Ustadz</label>
                                                                <input type="text" class="form-control" name="ustadz" value="{{ $user->withIkhwan->ustadz}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Kajian rutin</label>
                                                                <input type="text" class="form-control" name="kajian_rutin" value="{{ $user->withIkhwan->kajian_rutin}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Isi kajian</label>
                                                                <input type="text" class="form-control" name="tentang_ngaji" value="{{ $user->withIkhwan->tentang_ngaji}}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tempat</label>
                                                                <input type="text" class="form-control" name="tempat_ngaji" value="{{ $user->withIkhwan->tempat_ngaji}}" /> </div>
                                                        </form>
                                                    </div>
                                                    <!--end tab-pane-->
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
       @endsection