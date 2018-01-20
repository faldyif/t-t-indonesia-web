@extends('layouts.user')

@section('content')

    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start active open">
                        <a href="beranda.html" class="nav-link ">
                            <i class="icon-home"></i>
                            <span class="title">Beranda</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="permintaantaaruf.html" class="nav-link ">
                            <i class="icon-refresh"></i>
                            <span class="title">Permintaan Ta'aruf</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="dataikhwan.html" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">Data Ikhwan</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="dataakhwat.html" class="nav-link ">
                            <i class="icon-user-female"></i>
                            <span class="title">Data Akhwat</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="riwayat.html" class="nav-link ">
                            <i class="fa fa-history"></i>
                            <span class="title">Riwayat Ta'aruf</span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->
                    <div class="page-title">
                        <h1>Beranda</h1>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->

                    <!-- END THEME PANEL -->

                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE BREADCRUMB -->
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span class="active">Beranda</span>
                    </li>
                </ul>
                <!-- END PAGE BREADCRUMB -->
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="note note-success">
                    <h4 class="block">
                        <i class="icon-bell"></i>
                        KNF mengajukan ta'aruf pada anda</h4>
                    <p> Silakan cek detail data berikut :
                        <a href="detaildatapermintaanakhwat.html"> Detail data </a>
                    </p>
                </div>
                <!-- END PAGE BASE CONTENT -->
                <!-- END QUICK SIDEBAR -->
            </div>
@endsection