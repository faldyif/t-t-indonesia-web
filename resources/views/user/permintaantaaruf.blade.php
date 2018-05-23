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
                    <h1>Data Akhwat</h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->

                <!-- END THEME PANEL -->

            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <span class="active">Home </span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class=" icon-layers font-dark"></i>
                                <span class="caption-subject bold uppercase"> Daftar Data Akhwat</span>
                            </div>
                        </div>

                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th> Nama </th>
                                    <th> Usia </th>
                                    <th> Domisili </th>
                                    <th> Pekerjaan </th>
                                    <th> Pendidikan </th>
                                    <th> Status </th>
                                    <th> Aksi </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td> KNF </td>
                                    <td>
                                        22 tahun
                                    </td>
                                    <td>
                                        Bantul
                                    </td>
                                    <td> Guru </td>
                                    <td>
                                        S1 Teknik Geologi
                                    </td>
                                    <td>
                                        <span class="label label-sm label-success"> Belum menikah </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="#">
                                            <i class="icon-eye"></i> Lihat data
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td> KNF </td>
                                    <td>
                                        25 tahun
                                    </td>
                                    <td>
                                        Bantul
                                    </td>
                                    <td> ngga kerja </td>
                                    <td>
                                        S1 Kedokteran hewan
                                    </td>
                                    <td>
                                        <span class="label label-sm label-warning"> Janda </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="#">
                                            <i class="icon-eye"></i> Lihat data
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
            <!-- END QUICK SIDEBAR -->
        </div>
    </div>
@endsection