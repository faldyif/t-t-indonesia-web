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
                                            <input type="file" name="..."> </span>
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
                                            <input type="file" name="..."> </span>
                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </center>
                            <div class="row col-md-10 col-md-offset-1">
                              <div class="form-group">
                                  <label class="control-label">Domisili</label>
                                  <input type="text" class="form-control" /> </div>
                              <div class="form-group">
                                  <label class="control-label">Asal</label>
                                  <input type="text" class="form-control" /> </div>
                              <div class="row">
                                <div class="col-sm-6">
                                  <label class="control-label">Tempat Lahir</label>
                                  <input type="text" class="form-control" /> </div>
                                <div class="col-sm-6">
                                  <label class="control-label">Tanggal Lahir</label>
                                  <!-- <div class="col-md-8"> -->
                                  <div class="input-group date date-picker" data-date="12-02-1995" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                      <input type="text" class="form-control">
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
                                        <input type="radio" id="A" name="goldar" value="1" class="md-radiobtn" checked="">
                                        <label for="A">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> A </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="B" name="goldar" value="2" class="md-radiobtn">
                                        <label for="B">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> B </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="AB" name="goldar" value="3" class="md-radiobtn">
                                        <label for="AB">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> AB </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="O" name="goldar" value="4" class="md-radiobtn">
                                        <label for="O">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> O </label>
                                    </div>
                                </div>
                              </div>
                                <br>
                                <div class="form-group">
                                  <label class="control-label">Pekerjaan</label>
                                  <input type="text" class="form-control" placeholder="contoh : akuntan" /> </div>
                                <div class="form-group">
                                  <label class="control-label">Pendidikan</label>
                                  <select class="form-control" id="fm-pendidikan" name="pendidikan">
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
                                <label class="control-label">Riwayat Penyakit</label>
                                <input type="text" class="form-control" placeholder="contoh : magh, tifus" /> </div>
                                <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control" id="fm-status" name="status">
                                  <option value="0">-- Pilih Status</option>
                                  <option value="1">Belum Menikah</option>
                                  <option value="2">Menikah</option>
                                  <option value="3">Janda/Duda</option>
                                </select>
                                <span class="help-block"><font size="1.5sp"> 
                                  Pilih status anda saat ini
                                </font></span>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Izin Ortu</label>
                                  <div class="md-radio-inline">
                                      <div class="md-radio">
                                          <input type="radio" id="izin1" name="izinortu" value="1" class="md-radiobtn" checked="">
                                          <label for="izin1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Sudah </label>
                                      </div>
                                      <div class="md-radio">
                                          <input type="radio" id="izin2" name="izinortu" value="2" class="md-radiobtn">
                                          <label for="izin2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Belum </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="control-label">Tinggi badan (dalam cm)</label>
                                  <input type="number" class="form-control" /> </div>
                                <div class="col-md-6">
                                  <label class="control-label">Berat badan (dalam kg)</label>
                                  <input type="number" class="form-control" /> </div>
                              </div>
                              <br>
                            </div>                                
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-md-offset-7 col-md-10"><br>
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
                              <div class="form-group">
                                <label class="control-label">Hobi</label>
                                <input type="text" class="form-control" placeholder="Deskripsikan hobimu..." />
                                <span class="help-block"><font size="1.5sp"> Hobi apa yang anda miliki? </font></span>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Kebiasaan baik</label>
                                  <textarea class="form-control input-sm" id="fm-kebiasaan_baik" name="kebiasaan_baik" placeholder="Deskripsikan kebiasaan baikmu..."></textarea>
                                  <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "kebiasaan baik". Jelaskan kebiasaan baikmu dengan lugas dan mudah dimengerti. </font></span>
                                  </div>
                                <div class="form-group">
                                  <label class="control-label">Kebiasaan buruk</label>
                                  <textarea class="form-control input-sm" id="fm-kebiasaan_baik" name="kebiasaan_buruk" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                  <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "kebiasaan buruk". Jelaskan kebiasaan burukmu dengan lugas dan mudah dimengerti. </font></span>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Hal yang disukai</label>
                                  <textarea class="form-control input-sm" id="fm-hal_suka" name="kebiasaan_buruk" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                  <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "hal yang kamu sukai". Jelaskan dengan lugas dan mudah dimengerti. </font></span>
                                </div>

                                <div class="form-group">
                                  <label class="control-label">Hal yang tidak disukai</label>
                                  <textarea class="form-control input-sm" id="fm-kebiasaan_baik" name="kebiasaan_buruk" placeholder="Deskripsikan kebiasaan burukmu..."></textarea>
                                  <span class="help-block"><font size="1.5sp"> Sekarang waktunya untuk mendeskripsikan "hal yang tidak kamu sukai". Jelaskan dengan lugas dan mudah dimengerti. </font></span>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Pakaian Sehari-hari</label>
                                  <input type="text" class="form-control" name="" placeholder="contoh : gamis"/>
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Ciri Fisik</label>
                                  <input type="text" class="form-control" name="" placeholder="contoh : mata coklat, warna kulit sawo matang"/>
                                </div>
                                <!-- TODO: jika ikhwan inputan celana, jika akhwat inputan niqob -->
                                <!-- IKHWAN -->
                                <div class="form-group">
                                  <label class="control-label">Jenis Celana</label>
                                  <select class="form-control" id="fm-status" name="status">
                                    <option value="0">-- Pilih Jenis Celana</option>
                                    <option value="1">Celana Cingkrang</option>
                                    <option value="2">Celana Panjang</option>
                                  </select>
                                </div>
                                <!-- AKHWAT -->
                                <div class="form-group">
                                  <label class="control-label">Niqob</label>
                                  <div class="md-radio-inline">
                                      <div class="md-radio">
                                          <input type="radio" id="niqob1" name="niqob" value="1" class="md-radiobtn" checked="">
                                          <label for="niqob1">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Ya </label>
                                      </div>
                                      <div class="md-radio">
                                          <input type="radio" id="niqob2" name="niqob" value="2" class="md-radiobtn">
                                          <label for="niqob2">
                                              <span></span>
                                              <span class="check"></span>
                                              <span class="box"></span> Tidak </label>
                                      </div>
                                  </div>
                                  <span class="help-block"><font size="1.5sp"> Niqob merupakan jilbab yang menutupi kepala, leher dan muka namun tetap memperlihatkan mata. </font></span>
                              </div>
                              <div class="form-group">
                                <label class="control-label">Kacamata</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="kacamata1" name="kacamata" value="1" class="md-radiobtn" checked="">
                                        <label for="kacamata1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="kacamata2" name="kacamata" value="2" class="md-radiobtn">
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
                                        <input type="radio" id="merokok1" name="merokok" value="1" class="md-radiobtn" checked="">
                                        <label for="merokok1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="merokok2" name="merokok" value="2" class="md-radiobtn">
                                        <label for="merokok2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak </label>
                                    </div>
                                </div>
                              </div>
                              <!-- END merokok IKHWAN -->
                             </div>                                
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-md-offset-7 col-md-10">
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
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="control-label">Anak ke-</label>
                                  <input type="number" class="form-control" /> </div>
                                <div class="col-md-6">
                                  <label class="control-label">Dari saudara </label>
                                  <input type="number" class="form-control" /> </div>
                              </div>
                              <br>
                                <div class="form-group">
                                  <label class="control-label">Suku</label>
                                  <input type="number" class="form-control" placeholder="contoh : Suku Jawa" /> </div>
                                <div class="form-group">
                                  <label class="control-label">Suku Ayah</label>
                                  <input type="number" class="form-control" placeholder="contoh : Suku Jawa"/> </div>
                                <div class="form-group">
                                  <label class="control-label">Suku Ibu</label>
                                  <input type="number" class="form-control" placeholder="contoh : Suku Jawa"/> </div>
                              </div>  
                            </div>
                          <br/>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-offset-7 col-md-10">
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
                              <div class="form-group">
                              <label class="control-label">Sholat 5 Waktu</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="sholat1" name="sholat" value="1" class="md-radiobtn" checked="">
                                        <label for="sholat1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="sholat2" name="sholat" value="2" class="md-radiobtn">
                                        <label for="sholat2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak </label>
                                    </div>
                                </div>
                              </div>     
                              <div class="form-group">
                              <label class="control-label">Kajian Sunnah</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="kajian1" name="kajian" value="1" class="md-radiobtn" checked="">
                                        <label for="kajian1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Ya </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="kajian2" name="kajian" value="2" class="md-radiobtn">
                                        <label for="kajian2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Tidak </label>
                                    </div>
                                </div>
                              </div>    
                              <div class="form-group">
                                <label class="control-label">Tempat Kajian</label>
                                <input type="number" class="form-control" placeholder="contoh : Suku Jawa" /> </div>
                              <div class="form-group">
                                <label class="control-label">Tema Kajian</label>
                                <input type="number" class="form-control" placeholder="contoh : Suku Jawa"/> </div>
                              <div class="form-group">
                                <label class="control-label">Ustadz</label>
                                <input type="number" class="form-control" placeholder="contoh : Suku Jawa"/> </div>
                              <div class="form-group">
                                <label class="control-label">Kegiatan Sehari-hari</label>
                                <textarea class="form-control input-sm" id="fm-kegiatan_harian" name="kegiatan_harian" placeholder="Deskripsikan kegiatan harianmu..."></textarea>
                              </div>

                              <label class="row col-md-12" for="fm-pengalaman_taaruf">Pengalaman Ta'aruf </label>
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="control-label">Offline</label>
                                  <input type="number" class="form-control" /> </div>
                                <div class="col-md-6">
                                  <label class="control-label">Online</label>
                                  <input type="number" class="form-control" /> </div>
                              </div>
                              <br>
                            </div>
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-md-offset-7 col-md-10">
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
                                <div class="form-group">
                                  <label class="control-label">Pendidikan</label>
                                  <select class="form-control" id="fm-pendidikan" name="pendidikan">
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
                                  <input type="text" class="form-control"/> </div>
                              <div class="form-group">
                                <label class="control-label">Lainnya</label>
                                <textarea class="form-control input-sm" id="fm-kegiatan_harian" name="kegiatan_harian" placeholder="Deskripsikan kriteria yang kamu inginkan..."></textarea>
                              </div>
                              <label class="row col-md-12" for="fm-pengalaman_taaruf">Usia</label>
                              <div class="row">
                                <div class="col-md-6">
                                  <label class="control-label">Usia dari</label>
                                  <input type="number" class="form-control" /> </div>
                                <div class="col-md-6">
                                  <label class="control-label">Usia sampai</label>
                                  <input type="number" class="form-control" /> </div>
                              </div>
                              <br>
                            </div>
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-md-offset-7 col-md-10">
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