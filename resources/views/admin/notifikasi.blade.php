@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Notifikasi</h1>
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
                <a href="#">Notifikasi</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="profile">
            <div class="tabbable-line tabbable-full-width">
                <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <ul class="feeds">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-comment"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                <a href = "lihatkiriman.html">Anda menerima <strong>testimoni</strong> dari</a>
                                                <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="date"> 20 menit yang lalu </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-certificate"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                <a href = "lihatkiriman.html">Anda menerima <strong>kisah</strong> dari</a>
                                                <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="date"> 30 menit yang lalu </div>
                                </div>
                            </li>
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
                                                <strong>membatalkan</strong> ta'aruf dengan
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
                                                <i class="fa fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                <a href = "detaildataakhwat.html">Khansa Nur Fauzia</a>
                                                <strong>menerima</strong> ta'aruf dari
                                                <a href = "detaildataikhwan.html">Bagus Cakra Buana</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col1">
                                    <div class="date"> 1 hari yang lalu </div>
                                </div>
                            </li>

                        </ul>
                    </div>
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