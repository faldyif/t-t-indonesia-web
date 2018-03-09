@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Kegiatan Terkini</h1>
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
                <a href="#">Kegiatan Terkini</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_1_1" data-toggle="tab"> Semua </a>
                    </li>
                    <li>
                        <a href="#tab_1_3" data-toggle="tab"> Permintaan Ta'aruf </a>
                    </li>
                    <li>
                        <a href="#tab_1_6" data-toggle="tab"> Pembatalan ta'aruf </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1_1">
                        <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                <ul class="feeds">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-ban"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                                        membatalkan ta'aruf dengan
                                                        <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="date"> baru saja </div>
                                        </div>
                                    </li>
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
                                                        menerima ta'aruf dengan
                                                        <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="date"> 10 jam yang lalu </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-bookmark"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                                        mengajukan ta'aruf dengan
                                                        <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col1">
                                            <div class="date"> 12 jam yang lalu </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                    <!--tab_1_2-->
                    <div class="tab-pane" id="tab_1_3">
                        <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-success">
                                                    <i class="fa fa-bookmark"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                                    mengajukan ta'aruf dengan
                                                    <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="date"> 12 jam yang lalu </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_6">
                        <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                            <ul class="feeds">
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-danger">
                                                    <i class="fa fa-ban"></i>
                                                </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc">
                                                    <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                                    membatalkan ta'aruf dengan
                                                    <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col1">
                                        <div class="date"> baru saja </div>
                                    </div>
                                </li>
                            </ul>
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
@endsection
