@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Data Peserta dalam Proses</h1>
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
                <a href="#">Data Peserta dalam Proses</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#taaruf" data-toggle="tab"> Ta'aruf </a>
                    </li>
                    <li>
                        <a href="#istikharah" data-toggle="tab"> Istikharah </a>
                    </li>
                    <li>
                        <a href="#nadzor" data-toggle="tab"> Nadzor </a>
                    </li>
                    <li>
                        <a href="#khitbah" data-toggle="tab"> Khitbah </a>
                    </li>
                    <li>
                        <a href="#akad" data-toggle="tab"> Akad Nikah</a>
                    </li>
                    <li>
                        <a href="#walimah" data-toggle="tab"> Walimah </a>
                    </li>
                    <li>
                        <a href="#samara" data-toggle="tab"> Samara </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!--taaruf-->
                    <div class="tab-pane active" id="taaruf">
                        <div class="actions">
                            <span class="label label-info"> Total : 100 </span>
                        </div>
                        <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                                    sedang berta'aruf dengan
                                                    <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end tab-pane -->
                    <!--tab_istikharah-->
                    <div class="tab-pane" id="istikharah">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses istikharah</h3>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <!--tab_nadzor-->
                    <div class="tab-pane" id="nadzor">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses Nadzor</h3>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <!--tab_khitbah-->
                    <div class="tab-pane" id="khitbah">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses Khitbah</h3>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <!--tab_walimah-->
                    <div class="tab-pane" id="walimah">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses Walimah</h3>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <!--tab_nadzor-->
                    <div class="tab-pane" id="akad">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses Akad Nikah</h3>
                            </div>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <!--tab_nadzor-->
                    <div class="tab-pane" id="samara">
                        <div class="page-404">
                            <div class="number font-default">
                                <i class="fa fa-frown-o"></i>
                            </div>
                            <div class="details font-green">
                                <h3>Tidak ada yang sedang dalam proses Samara</h3>
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