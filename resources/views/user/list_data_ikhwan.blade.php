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
                        <h1>Data Ikhwan</h1>
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
                                    <span class="caption-subject bold uppercase"> Daftar Data Ikhwan</span>
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
                                            @foreach($ikhwan as $key)
                                            <tr class="odd gradeX">
                                                <td>{{ $key->name }}</td>
                                                <td>{{ $key->withIkhwan->age }} tahun</td>
                                                <td>{{ $key->withIkhwan->domisili }}</td>
                                                <td>{{ $key->withIkhwan->detailPekerjaan }}</td>
                                                <td>{{ $key->withIkhwan->pendidikanTerakhir->nama_jenjang }} ({{ $key->withIkhwan->ket_pendidikan_terakhir }})</td>
                                                <td>
                                                    @if($key->withIkhwan->status == '1')
                                                    <span class="label label-sm label-success"> Belum Menikah </span>
                                                    @elseif($key->withIkhwan->status == '2')
                                                    <span class="label label-sm label-warning"> Sudah Menikah </span>
                                                    @elseif($key->withIkhwan->status == '3')
                                                    <span class="label label-sm label-warning"> Janda </span>
                                                    @elseif($key->withIkhwan->status == '4')
                                                    <span class="label label-sm label-warning"> Duda </span>
                                                    @endif
                                                </td>
                                                <td> 
                                                    <a class="btn btn-success" href="{{ route('list.listikhwan.show', $key->id)  }}">
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