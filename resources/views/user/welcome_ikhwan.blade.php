@extends('layouts.user')

@section('content')

    <!-- BEGIN CONTAINER -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">

        </div>
        <!-- END PAGE HEAD-->
        <div class="col-lg-8 col-md-8 col-md-offset-2">
            <div class="portlet light bordered">
                <div class="portlet-title tabbable-line">
                    <div class="caption caption-md">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-blue-madison bold uppercase">Data Diri</span>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">Data Diri</a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab">Gambaran pribadi</a>
                        </li>
                        <li>
                            <a href="#tab_3" data-toggle="tab">Keluarga</a>
                        </li>
                        <li>
                            <a href="#tab_4" data-toggle="tab">Pendidikan</a>
                        </li>
                        <li>
                            <a href="#tab_5" data-toggle="tab">Kriteria</a>
                        </li>
                    </ul>
                </div>

                <div class="portlet light">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- FOTO TERAKHIR -->
                                        <center>
                                            <h3>Pas foto terbaru</h3>
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                        <span class="btn green btn-file">
                                                        <span class="fileinput-new"> Pilih foto terakhir </span>
                                                        <span class="fileinput-exists"> Ubah </span>
                                                        <input type="file" name="foto_terakhir"> </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists"
                                                           data-dismiss="fileinput"> Hapus </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                        <!-- END FOTO TERAKHIR -->
                                    </div>
                                    <div class="col-md-6">
                                        <!-- FOTO KTP -->
                                        <center>
                                            <h3>Foto/Scan KTP</h3>
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail"
                                                         style="width: 200px; height: 150px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                             alt=""/></div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                                         style="max-width: 200px; max-height: 150px;"></div>
                                                    <div>
                                                        <span class="btn green btn-file">
                                                        <span class="fileinput-new"> Pilih foto KTP </span>
                                                        <span class="fileinput-exists"> Ubah </span>
                                                        <input type="file" name="foto_ktp"> </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists"
                                                           data-dismiss="fileinput"> Hapus </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                        <!-- END FOTO KTP -->
                                    </div>
                                </div>
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-domisili"
                                               name="domisili">
                                        <label for="fm-domisili">Domisili</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm"  id="fm-alamat_asal" name="asal"></input>
                                        <label for="fm-alamat_asal">Asal</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-tempat_asal"
                                               name="tempat_lahir">
                                        <label for="fm-tempat_asal">Tempat Lahir</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm date-picker" placeholder=""
                                               id="fm-tanggal_lahir" name="tanggal_lahir">
                                        <label for="fm-tanggal_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="form-group form-md-radios has-info">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label" for="fm-goldar">Golongan Darah</label>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="fm-golA" name="goldar_a" class="md-radiobtn">
                                                        <label for="fm-golA">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> A
                                                        </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="fm-golB" name="goldar_b" class="md-radiobtn"
                                                               checked="">
                                                        <label for="fm-golB">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>B
                                                        </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="fm-golAB" name="goldar_ab" class="md-radiobtn">
                                                        <label for="fm-golAB">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> AB
                                                        </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="fm-golO" name="goldar_o" class="md-radiobtn"
                                                               checked="">
                                                        <label for="fm-golO">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>O
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-kegiatan"
                                               name="kegiatan">
                                        <label for="fm-kegiatan">Kegiatan</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="fm-pendidikan-terakhir" name="pendidikan-terakhir">
                                            <option value="">Pilih salah satu...</option>
                                            <option value="1">SD</option>
                                            <option value="2">SMP</option>
                                            <option value="3">SMA</option>
                                        </select>
                                        <label for="fm-pendidikan-terakhir">Pendidikan Terakhir</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-pendidikan"
                                               name="pendidikan">
                                        <label for="fm-pendidikan">Keterangan Pendidikan Terakhir</label>
                                    </div>
                                    <!-- <div class="col-md-6"> -->
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-riwayat_kegiatan"
                                               name="riwayat_kesehatan">
                                        <label for="fm-riwayat_kegiatan">Riwayat kesehatan (jika tidak ada, beri -)</label>
                                    </div>
                                    <!-- </div> -->
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="fm-status" name="status">
                                            <option value="">Pilih salah satu...</option>
                                            <option value="1">Belum Menikah</option>
                                            <option value="2">Menikah</option>
                                            <option value="3">Janda/Duda</option>
                                        </select>
                                        <label for="fm-status">Status</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="number" class="form-control input-sm" id="fm-tinggi_badan"
                                                       name="tinggi_badan">
                                                <label for="fm-tinggi_badan">Tinggi Badan (dalam cm)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="number" class="form-control input-sm" id="fm-berat_badan"
                                                       name="berat_badan">
                                                <label for="fm-berat_badan">Berat Badan (dalam kg)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-radios has-info">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label" for="fm-izin_ortu" name="">Izin
                                                    Orangtua</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="izin_1" name="izin_ortu"
                                                               class="md-radiobtn">
                                                        <label for="izin_1">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Ya
                                                        </label>
                                                    </div>
                                                    <div class="md-radio">
                                                        <input type="radio" id="izin_2" name="izin_ortu" class="md-radiobtn"
                                                               checked="">
                                                        <label for="izin_2">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>Belum
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-8 col-md-10"><br>
                                            <button type="button" class="btn default">Simpan & Lewati</button>
                                            <a href="#" id="lanj_1" class="btn green">Lanjutkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab_2-->
                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-hobi" name="hobi">
                                        <label for="fm-hobi">Hobi</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <textarea class="form-control input-sm" id="fm-kebiasaan_baik"
                                                  name="kebiasaan_baik"></textarea>
                                        <label for="fm-kebiasaan_baik">Kebiasaan baik</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-kebiasaan_buruk"
          name="kebiasaan_buruk"></textarea>
                                        <label for="fm-kebiasaan_buruk">Kebiasaan Buruk</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-hal_disuka"
          name="hal_disuka"></textarea>
                                        <label for="fm-hal_disuka">Hal yang Disukai</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-hal_taksuka"
          name="hal_taksuka"></textarea>
                                        <label for="fm-hal_taksuka">Hal yang Tidak Disukai</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-pakaian_harian"
          name="pakaian_harian"></textarea>
                                        <label for="fm-pakaian_harian">Pakaian Sehari-hari</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <textarea class="form-control input-sm" id="fm-fisik" name=""></textarea>
                                        <label for="fm-fisik">Ciri Fisik</label>
                                    </div>
                                    <!-- TODO: jika ikhwan inputan celana, jika akhwat inputan niqob -->
                                    <!-- IKHWAN -->
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="fm-celana" name="celana">
                                            <option value="1"></option>
                                            <option value="2">Celana Panjang</option>
                                            <option value="3">Celana Pendek</option>
                                            <option value="4">Celana Panjang Cingkrang</option>
                                        </select>
                                        <label for="fm-celana">Celana</label>
                                    </div>
                                    <!-- AKHWAT -->
                                    <div class="form-group form-md-radios has-info">
                                        <label class="row col-md-3 control-label" for="fm-niqob" name="">Niqob</label>
                                        <div class="col-md-9">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="niqob_1" name="niqob" class="md-radiobtn">
                                                    <label for="niqob_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya
                                                    </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="niqob_2" name="niqob" class="md-radiobtn"
                                                           checked="">
                                                    <label for="niqob_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-md-radios has-info">
                                        <label class="row col-md-3 control-label" for="fm-kacamata"
                                               name="">Kacamata</label>
                                        <div class="col-md-9">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-kacamata_1" name="kacamata"
                                                           class="md-radiobtn">
                                                    <label for="fm-kacamata_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya
                                                    </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-kacamata_2" name="kacamata"
                                                           class="md-radiobtn" checked="">
                                                    <label for="fm-kacamata_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group form-md-radios has-info">
                                        <label class="row col-md-3 control-label" for="fm-merokok"
                                               name="">Merokok</label>
                                        <div class="col-md-9">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="ya-rokok" name="radio2" class="md-radiobtn">
                                                    <label for="ya-rokok">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya
                                                    </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="tidak-rokok" name="radio2"
                                                           class="md-radiobtn" checked="">
                                                    <label for="tidak-rokok">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-8 col-md-10">
                                            <button type="button" class="btn default">Simpan & Lewati</button>
                                            <a href="#" id="lanj_1" class="btn green">Lanjutkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->

                        <!--tab_3-->
                        <div class="tab-pane" id="tab_3">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="number" class="form-control input-sm" id="fm-anak_ke"
                                                   name="anak_ke">
                                            <label for="fm-anak_ke">Anak Ke - </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="number" class="form-control input-sm" id="fm-saudara"
                                                   name="saudara">
                                            <label for="fm-saudara">Dari Saudara </label>
                                        </div>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="text" class="form-control input-sm" id="fm-suku" name="suku">
                                            <label for="form_control_1">Suku</label>
                                        </div>
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="text" class="form-control input-sm" id="fm-suku_ayah"
                                                   name="suku_ayah">
                                            <label for="form_control_1">Suku Ayah</label>
                                        </div>
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="text" class="form-control input-sm" id="fm-suku_ibu"
                                                   name="suku_ibu">
                                            <label for="suku_ibu">Suku Ibu</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-8 col-md-10">
                                        <button type="button" class="btn default">Simpan & Lewati</button>
                                        <a href="#" id="lanj_3" class="btn green">Lanjutkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end tab-pane-->
                        <!--tab_4-->
                        <div class="tab-pane" id="tab_4">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group form-md-radios has-info">
                                        <label class="row col-md-4 control-label" for="fm-sholat" name="">Shalat 5
                                            Waktu</label>
                                        <div class="col-md-8">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-sholat_1" name="sholat"
                                                           class="md-radiobtn">
                                                    <label for="fm-sholat_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya
                                                    </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-sholat_2" name="sholat"
                                                           class="md-radiobtn" checked="">
                                                    <label for="fm-sholat_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-radios has-info">
                                        <label class="row col-md-4 control-label" for="fm-kajian_rutin" name="">Kajian
                                            Sunnah</label>
                                        <div class="col-md-8">
                                            <div class="md-radio-inline">
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-kajian_rutin_1" name="kajian_rutin"
                                                           class="md-radiobtn">
                                                    <label for="fm-kajian_rutin_1">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span> Ya
                                                    </label>
                                                </div>
                                                <div class="md-radio">
                                                    <input type="radio" id="fm-kajian_rutin_2" name="kajian_rutin"
                                                           class="md-radiobtn" checked="">
                                                    <label for="fm-kajian_rutin_2">
                                                        <span></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-tempat_ngaji"
                                               name="tempat_ngaji">
                                        <label for="tempat_ngaji">Tempat Kajian</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-tentang_ngaji"
                                               name="tentang_ngaji">
                                        <label for="tentang_ngaji">Tema Kajian</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-ustadz" name="ustadz">
                                        <label for="ustadz">Ustadz</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-kegiatan_harian"
          name="kegiatan_harian"></textarea>
                                        <label for="kegiatan_harian">Kegiatan Sehari-hari</label>
                                    </div>
                                    <label class="row col-md-12" for="fm-pengalaman_taaruf">Pengalaman Ta'aruf </label>

                                    <div class="row col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="number" class="form-control input-sm"
                                                   id="fm-pengalaman_taaruf_offline" name="pengalaman_taaruf_offline">
                                            <label for="pengalaman_taaruf_offline">Offline </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input form-md-floating-label has-info">
                                            <input type="number" class="form-control input-sm"
                                                   id="fm-pengalaman_taaruf_online" name="pengalaman_taaruf_online">
                                            <label for="pengalaman_taaruf_online">Online </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-8 col-md-10">
                                            <button type="button" class="btn default">Simpan & Lewati</button>
                                            <a href="#" id="lanj_4" class="btn green">Lanjutkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end tab-pane-->
                        <!--tab_4-->
                        <div class="tab-pane" id="tab_5">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-kriteria_pendidikan"
                                               name="kriteria_pendidikan">
                                        <label for="fm-kriteria_pendidikan">Pendidikan</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="fm-kriteria_domisili"
                                               name="kriteria_domisili">
                                        <label for="fm-kriteria_domisili">Domisili</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
<textarea class="form-control input-sm" id="fm-kriteria_lain"
          name="kriteria_lain"></textarea>
                                        <label for="fm-kriteria_lain">Lainnya</label>
                                    </div>

                                    <div>
                                        <label class="row col-md-12" for="fm-usia">Usia </label>
                                        <div class="row col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="number" class="form-control input-sm"
                                                       id="fm-kriteria_usia_from" name="kriteria_usia_from">
                                                <label for="fm-kriteria_usia_from">Usia dari </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                <input type="number" class="form-control input-sm"
                                                       id="fm-kriteria_usia_tofm-kriteria_usia_to"
                                                       name="kriteria_usia_tofm-kriteria_usia_to">
                                                <label for="pengalaman_taaruf_online">Usia sampai </label>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-8 col-md-10">
                                            <button type="button" class="btn default">Simpan & Lewati</button>
                                            <a href="#" id="lanj_4" class="btn green">Lanjutkan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end tab-pane-->
            </div>
        </div>
    </div>

@endsection