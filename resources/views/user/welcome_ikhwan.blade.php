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

                {!! Form::open(array('route' => 'user.welcome.store', 'enctype' => 'multipart/form-data')) !!}
                <div class="portlet light">
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <center>
                                        <label class="control-label">Harap masukkan foto KTP</label>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                        <span class="btn green btn-file">
                                            <span class="fileinput-new"> Pilih foto </span>
                                            <span class="fileinput-exists"> Ubah </span>
                                            <input type="file" name="foto_ktp"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-sm-6">
                                    <center>
                                        <label class="control-label">Harap masukkan foto diri</label>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                        <span class="btn green btn-file">
                                            <span class="fileinput-new"> Pilih foto </span>
                                            <span class="fileinput-exists"> Ubah </span>
                                            <input type="file" name="foto_diri"> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </center>
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label">Domisili</label>
                                        <input name="domisili" type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Asal</label>
                                        <input name="asal" type="text" class="form-control" /> </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="control-label">Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" /> </div>
                                        <div class="col-sm-6">
                                            <label class="control-label">Tanggal Lahir</label>
                                            <!-- <div class="col-md-8"> -->
                                            <div class="input-group date date-picker" data-date="12-02-1995" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input name="tanggal_lahir" type="text" class="form-control">
                                                <span class="input-group-btn">
                                          <button class="btn default" type="button">
                                              <i class="fa fa-calendar"></i>
                                          </button>
                                      </span>
                                            </div>
                                            <!-- /input-group -->
                                            <span class="help-block"><font size="1.5sp"> Pilih tanggal </font></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Golongan Darah</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="A" name="goldar" value="A" class="md-radiobtn">
                                                <label for="A">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> A </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="B" name="goldar" value="B" class="md-radiobtn">
                                                <label for="B">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> B </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="AB" name="goldar" value="AB" class="md-radiobtn">
                                                <label for="AB">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> AB </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="O" name="goldar" value="O" class="md-radiobtn">
                                                <label for="O">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> O </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">Kegiatan / Aktivitas</label>
                                        <textarea class="form-control input-sm" id="fm-kegiatan" name="kegiatan" placeholder="Deskripsikan kegiatan/aktivitas sehari-harimu..."></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pendidikan</label>
                                        <select class="form-control" id="fm-pendidikan" name="pendidikan">
                                            <option value=""> Pilih salah satu... </option>
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
                                        </select></div>
                                    <div class="form-group">
                                        <label class="control-label">Keterangan Pendidikan</label>
                                        <input name="ket_pendidikan_terakhir" type="text" class="form-control" placeholder="contoh : Jurusan Teknik Fisika Universitas Gadjah Mada" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Pekerjaan</label>
                                        <input name="pekerjaan" type="text" class="form-control" placeholder="contoh : Karyawan Swasta" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Riwayat Penyakit</label>
                                        <input type="text" name="riwayat_penyakit" class="form-control" placeholder="contoh : magh, tifus" /> </div>


                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="status_bm" name="status_hubungan" value="1" class="md-radiobtn">
                                                <label for="status_bm">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Belum Menikah </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="status_sm" name="status_hubungan" value="2" class="md-radiobtn">
                                                <label for="status_sm">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Sudah Menikah </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="status_j" name="status_hubungan" value="3" class="md-radiobtn">
                                                <label for="status_j">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Duda </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Tinggi badan (dalam cm)</label>
                                            <input name="tinggi_badan" type="number" class="form-control" /> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Berat badan (dalam kg)</label>
                                            <input name="berat_badan" type="number" class="form-control" /> </div>
                                    </div>
                                    <br>
                                </div>

                            </div>
                        </div>
                        <!--tab_2-->
                        <div class="tab-pane" id="tab_2">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label">Ciri fisik</label>
                                        <input name="ciri_fisik" type="text" class="form-control" placeholder="Deskripsikan ciri fisikmu..." />
                                        <span class="help-block"><font size="1.5sp"> Jelaskan secara detail ciri fisik dirimu </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Hobi</label>
                                        <br>
                                        <select class="select2-custom" name="hobi[]" multiple="multiple" style="width: 100%">
                                              @foreach($hobi as $key)
                                                <option value="{{ $key->id }}">{{ $key->hobi }}</option>
                                              @endforeach
                                          </select>
                                        {{--<input name="hobi" type="text" class="form-control" placeholder="Deskripsikan hobimu..." />--}}
                                        <span class="help-block"><font size="1.5sp"> Hobi apa yang anda miliki? </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kebiasaan baik</label>
                                        <br>

                                        <select class="select2-custom" name="kebiasaan_baik[]" multiple="multiple" style="width: 100%">
                                            @foreach($kebiasaanBaik as $key)
                                                <option value="{{ $key->id }}">{{ $key->kebiasaan }}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "kebiasaan baik". Jelaskan kebiasaan baikmu dengan lugas dan mudah dimengerti. </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kebiasaan buruk</label>
                                        <br>

                                        <select class="select2-custom" name="kebiasaan_buruk[]" multiple="multiple" style="width: 100%">
                                            @foreach($kebiasaanBuruk as $key)
                                                <option value="{{ $key->id }}">{{ $key->kebiasaan }}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "kebiasaan buruk". Jelaskan kebiasaan burukmu dengan lugas dan mudah dimengerti. </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Hal yang disukai</label>
                                        <textarea class="form-control input-sm" id="fm-hal_suka" name="hal_disuka" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                        <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "hal yang kamu sukai". Jelaskan dengan lugas dan mudah dimengerti. </font></span>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Hal yang tidak disukai</label>
                                        <textarea class="form-control input-sm" id="fm-kebiasaan_baik" name="hal_taksuka" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                        <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "hal yang tidak kamu sukai". Jelaskan dengan lugas dan mudah dimengerti. </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Rencana setelah menikah</label>
                                        <textarea class="form-control input-sm" id="fm-rencana_setelah_menikah" name="rencana_setelah_menikah" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                        <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "rencana setelah menikah". Jelaskan dengan lugas dan mudah dimengerti. </font></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Pakaian Sehari-hari</label>
                                        <input type="text" class="form-control" name="pakaian_harian" placeholder="contoh : kemeja atau gamis"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Celana</label>
                                        <select class="form-control" id="fm-pendidikan" name="pendidikan">
                                            <option value=""> Pilih salah satu... </option>
                                            <option value="1"> Panjang </option>
                                            <option value="2"> Cingkrang </option>
                                        </select></div>
                                    <div class="form-group">
                                        <label class="control-label">Sholat</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="sholat" name="sholat" value="1" class="md-radiobtn">
                                                <label for="sholat">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Ya </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="sholat2" name="sholat" value="0" class="md-radiobtn">
                                                <label for="sholat2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Kacamata</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="kacamata1" name="kacamata" value="1" class="md-radiobtn">
                                                <label for="kacamata1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Ya </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="kacamata2" name="kacamata" value="0" class="md-radiobtn">
                                                <label for="kacamata2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- IKHWAN -->
                                    <div class="form-group">
                                        <label class="control-label">Merokok</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="merokok1" name="merokok" value="1" class="md-radiobtn">
                                                <label for="merokok1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Ya </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="merokok2" name="merokok" value="0" class="md-radiobtn">
                                                <label for="merokok2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END merokok IKHWAN -->
                                </div>

                            </div>
                        </div>
                        <!--end tab-pane-->

                        <!--tab_3-->
                        <div class="tab-pane" id="tab_3">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Anak ke-</label>
                                            <input name="anak_ke" type="number" class="form-control" /> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Dari saudara </label>
                                            <input name="saudara" type="number" class="form-control" /> </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="control-label">Suku Ayah</label>
                                        <br>

                                        <select id="suku-ayah" class="select2-custom" name="suku_ayah" style="width: 100%">
                                          <option value="" disabled selected>Pilih salah satu...</option>
                                            @foreach($suku as $key)
                                                <option value="{{ $key->id }}">{{ $key->suku }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Suku Ibu</label>
                                        <br>

                                        <select id="suku-ibu" class="select2-custom" name="suku_ibu" style="width: 100%">
                                          <option value="" disabled selected>Pilih salah satu...</option>
                                            @foreach($suku as $key)
                                                <option value="{{ $key->id }}">{{ $key->suku }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                        </div>

                        <!--end tab-pane-->
                        <!--tab_4-->
                        <div class="tab-pane" id="tab_4">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label">Kajian Sunnah</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="kajian1" name="kajian" value="1" class="md-radiobtn">
                                                <label for="kajian1">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Ya </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="kajian2" name="kajian" value="0" class="md-radiobtn">
                                                <label for="kajian2">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Tidak </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Tempat Kajian</label>
                                        <input name="tempat_kajian" type="text" class="form-control"/> </div>
                                    <div class="form-group">
                                        <label class="control-label">Tema Kajian</label>
                                        <input name="tema_kajian" type="number" class="form-control"/> </div>
                                    <div class="form-group">
                                        <label class="control-label">Ustadz</label>
                                        <input name="ustadz" type="number" class="form-control"/> </div>

                                    <label class="row col-md-12" for="fm-pengalaman_taaruf">Pengalaman Ta'aruf </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Offline</label>
                                            <input name="pengalaman_taaruf_offline" type="number" min="1" class="form-control" /> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Online</label>
                                            <input name="pengalaman_taaruf_online" type="number" min="1" class="form-control" /> </div>
                                    </div>
                                    <br>
                                </div>

                            </div>
                        </div>

                        <!--end tab-pane-->
                        <!--tab_4-->
                        <div class="tab-pane" id="tab_5">
                            <div class="row">
                                <div class="row col-md-10 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label">Pendidikan</label>
                                        <select class="form-control" id="fm-pendidikan" name="kriteria_pendidikan">
                                            <option value=""> Pilih salah satu... </option>
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
                                        </select></div>
                                    <div class="form-group">
                                        <label class="control-label">Domisili</label>
                                        <input name="kriteria_domisili" type="text" class="form-control"/> </div>
                                    <div class="form-group">
                                        <label class="control-label">Lainnya</label>
                                        <textarea class="form-control input-sm" id="fm-kegiatan_harian" name="kriteria_lainnya" placeholder="Deskripsikan kriteria yang kamu inginkan..."></textarea>
                                    </div>
                                    <label class="row col-md-12" for="fm-pengalaman_taaruf">Usia</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Usia dari</label>
                                            <input name="kriteria_usia_from" type="number" class="form-control" /> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Usia sampai</label>
                                            <input name="kriteria_usia_to" type="number" class="form-control" /> </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-7 col-md-10">
                                    <a href="{{ url('home')}}"  class="btn default" >Simpan & Lewati</a>
                                    <button type="submit" id="lanj_4" class="btn green">Lanjutkan</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            {!! Form::close() !!}

            <!--end tab-pane-->
            </div>
        </div>
    </div>

@endsection

@section('top')
    <link href="{{ url('css/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('bottom')
    <script src="{{ url('js/select2.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2-custom').select2({
                theme: "classic"
            });

        });
    </script>
@endsection