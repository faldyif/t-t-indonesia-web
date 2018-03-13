@extends('layouts.user')

@section('content')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Data Detail Ikhwan
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
                            <span class="active">Data Ikhwan</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <button name=" " class="btn dark btn-outline">Batal</button>
                            <button name=" " class="btn green">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light bordered">
                                    <!-- BEGIN PAGE ACTIONS -->
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100px; max-height: 100px;"> </div>
                                            <div>
                                                <span class="btn green btn-file">
                                                    <span class="fileinput-new"> Pilih foto </span>
                                                    <span class="fileinput-exists"> Ubah </span>
                                                    <input type="file" name="..."> </span>
                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Hapus </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Nama</label>
                                        <input type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Domisili</label>
                                        <input type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Tempat lahir</label>
                                        <input type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Pendidikan terakhir</label>
                                        <input type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Hobi</label>
                                        <input type="text" class="form-control" /> </div>
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="lajang" name="radio1" value="1" class="md-radiobtn" checked="">
                                                <label for="lajang">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Lajang </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="jandaduda" name="radio1" value="2" class="md-radiobtn">
                                                <label for="jandaduda">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Janda/Duda </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="menikah" name="radio1" value="2" class="md-radiobtn">
                                                <label for="menikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Menikah </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Siap menikah</label>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="siapmenikah" name="radio2" value="1" class="md-radiobtn" checked="">
                                                <label for="siapmenikah">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Sudah </label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="belum" name="radio2" value="2" class="md-radiobtn">
                                                <label for="belum">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Belum </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                                                            <label class="control-label">Riwayat Kesehatan</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Kebiasaan baik</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Kebiasaan buruk</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Hal yang disukai</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Hal yang tidak disukai</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Tinggi badan (dalam cm)</label>
                                                            <input type="number" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Berat badan (dalam kg)</label>
                                                            <input type="number" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Pakaian harian</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Kacamata</label>
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="ya" name="radio4" value="1" class="md-radiobtn" checked="">
                                                                    <label for="ya">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Ya </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="tidak" name="radio4" value="2" class="md-radiobtn">
                                                                    <label for="tidak">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Tidak </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Pengalaman Ta'aruf Online</label>
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="y" name="radio5" value="1" class="md-radiobtn">
                                                                    <label for="y">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Sudah </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="n" name="radio5" value="2" class="md-radiobtn" checked="">
                                                                    <label for="n">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Belum </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Pengalaman Ta'aruf Offline</label>
                                                            <div class="md-radio-inline">
                                                                <div class="md-radio">
                                                                    <input type="radio" id="yes" name="radio6" value="1" class="md-radiobtn">
                                                                    <label for="yes">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Sudah </label>
                                                                </div>
                                                                <div class="md-radio">
                                                                    <input type="radio" id="no" name="radio6" value="2" class="md-radiobtn" checked="">
                                                                    <label for="no">
                                                                        <span></span>
                                                                        <span class="check"></span>
                                                                        <span class="box"></span> Belum </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Hijab Syar'i</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Niqob</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Izin Ortu</label>
                                                            <input type="text" class="form-control" /> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Target Menikah</label>
                                                            <input type="text" class="form-control" /> </div>
                                                    </form>
                                                <!-- END PAGE ACTIONS -->
                                                </div>                    
                                                    <!--tab_1_2-->
                                                    <div class="tab-pane" id="tab_1_3">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="control-label">Anak ke-</label>
                                                                <input type="number" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Asal</label>
                                                                <input type="text" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku</label>
                                                                <input type="text" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku Ayah</label>
                                                                <input type="text" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Suku Ibu</label>
                                                                <input type="text" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Pendidikan</label>
                                                                <input type="number" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Usia</label>
                                                                <input type="number" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Domisili</label>
                                                                <input type="text" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Lain-lain</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Ustad</label>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Kajian rutin</label>
                                                                <textarea class="form-control" rows="2"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Isi kajian</label>
                                                                <textarea class="form-control" rows="3"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tempat</label>
                                                                <input type="text" class="form-control" /> </div>
                                                        </form>
                                                    </div>
                                                    <!--end tab-pane-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        @endsection