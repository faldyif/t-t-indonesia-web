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
                        <h1>Data Ikhwan</h1>
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
                                    <span class="caption-subject bold uppercase"> Ikhwan</span>
                                </div>
                            </div>

                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
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
                                            @foreach($userIkhwans as $userIkhwan)
                                            <tr class="odd gradeX">
                                                <td> 
                                                    <img src="../assets/pages/media/profile/people19.jpg" class="img-responsive" alt="">
                                                </td>
                                                <td>
                                                    {{ $userIkhwan->name }}
                                                </td>
                                                <td>
                                                    {{ $userIkhwan->email }}
                                                </td>
                                                <td> 
                                                {{ $userIkhwan->childUser['asal'] == null ? '-' : $userIkhwan->childUser['asal'] }}
                                                 </td>
                                                <td>
                                                    {{ $userIkhwan->childUser['tempat_lahir'] == null ? '-' : $userIkhwan->childUser['tempat_lahir'] }}, {{ $userIkhwan->childUser['tanggal_lahir'] == null ? '-' : $userIkhwan->childUser['tanggal_lahir'] }}
                                                </td>
                                                <td>
                                                    <a class="btn btn-circle btn-icon-only btn-warning" href="detaildataikhwan.html">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-success" href="detaildataikhwan.html">
                                                        <i class="icon-eye"></i>
                                                    </a>
                                                    <button class="btn btn-circle btn-danger btn-icon-only mt-sweetalert"
                                                            data-title="Apakah anda yakin ingin menghapus data tersebut?" data-allow-outside-click="false"
                                                            data-show-confirm-button="true" data-confirm-button-class="btn-default"
                                                            data-show-cancel-button="true" data-cancel-button-class="btn-danger"
                                                            data-close-on-confirm="false" data-close-on-cancel="true" data-confirm-button-text='Ya, saya yakin'
                                                            data-cancel-button-text='Batal'
                                                            data-popup-title-success="Data berhasil dihapus">
                                                        <i class="icon-trash"></i>
                                                    </button>
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