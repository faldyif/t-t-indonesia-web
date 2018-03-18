<?php $active ='home'; ?>

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

                <div class="profile-userpic">
                    <img src="../assets/pages/media/profile/akhwat.png" class="img-responsive" alt=""> </div>
                <!-- END PAGE BASE CONTENT -->
                <!-- END QUICK SIDEBAR -->
            </div>
        </div>
@endsection