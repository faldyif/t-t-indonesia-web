<?php $active ='home'; ?>

@extends('layouts.admin')

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
                <!-- BEGIN PAGE BASE CONTENT -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption font-dark">
                                    <i class=" icon-layers font-dark"></i>
                                    <span class="caption-subject bold uppercase"> Akhwat</span>
                                </div>
                            </div>

                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_5">
                                        <thead>
                                            <tr>
                                                <th> Foto </th>
                                                <th> Nama </th>
                                                <th> Email </th>
                                                <th> Asal </th>
                                                <th> Usia </th>
                                                <th> Aksi </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($userAkhwats as $userAkhwat)
                                            <tr class="odd gradeX">
                                                <td> 
                                                    <img src="../assets/pages/media/profile/people19.jpg" class="img-responsive" alt="">
                                                </td>
                                                <td>
                                                    {{ $userAkhwat->name }}
                                                </td>
                                                <td>
                                                    {{ $userAkhwat->email }}
                                                </td>
                                                <td> 
                                                {{ $userAkhwat->childUser['asal'] == null ? '-' : $userAkhwat->childUser['asal'] }}
                                                 </td>
                                                <td>
                                                    {{ $userAkhwat->childUser['tempat_lahir'] == null ? '-' : $userAkhwat->childUser['tempat_lahir'] }}, {{ $userAkhwat->childUser['tanggal_lahir'] == null ? '-' : $userAkhwat->childUser['tanggal_lahir'] }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-circle btn-icon-only btn-success" href="{{route('user.profile')}}">
                                                        <i class="icon-eye"></i>
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