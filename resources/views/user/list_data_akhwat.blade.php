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
                                                <th> Kegiatan Harian </th>
                                                <th> Pendidikan </th>
                                                <th> Status </th>
                                                <th> Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($akhwat as $key)
                                            <tr class="odd gradeX">
                                                <td>{{ $key->name }}</td>
                                                <td>{{ $key->withAkhwat->age }} tahun</td>
                                                <td>{{ $key->withAkhwat->domisili }}</td>
                                                <td>{{ $key->withAkhwat->keg_harian }}</td>
                                                <td>{{ $key->withAkhwat->pendidikanTerakhir->nama_jenjang }} ({{ $key->withAkhwat->ket_pendidikan_terakhir }})</td>
                                                <td>
                                                    @if($key->withAkhwat->status == '1')
                                                        <span class="label label-sm label-success"> Belum Menikah </span>
                                                    @elseif($key->withAkhwat->status == '2')
                                                        <span class="label label-sm label-warning"> Sudah Menikah </span>
                                                    @elseif($key->withAkhwat->status == '3')
                                                        <span class="label label-sm label-warning"> Janda </span>
                                                    @elseif($key->withAkhwat->status == '4')
                                                        <span class="label label-sm label-warning"> Duda </span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a class="btn btn-success" href="{{ route('list.listakhwat.show', $key->id)  }}">
                                                        <i class="icon-eye"></i> Lihat data
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
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