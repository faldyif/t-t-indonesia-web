@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Buat Artikel</h1>
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
                <span class="active">Buat Artikel</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXTRAS PORTLET-->
                <div class="portlet light form-fit">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-pencil"></i>
                        <span class="caption-subject bold uppercase">
                            Buat Artikel
                        </span>
                    </div>
                    </div>
                    <div class="portlet-body form">
                        <form class="form-horizontal form-bordered">
                            <div class="form-body">
                                <div class="form-group last">
                                    <div class="col-md-12">
                                        <div name="summernote" id="summernote_1"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-9 col-md-10">
                                        <button type="button" class="btn default">Cancel</button>
                                        <!-- TO DO : muncul di list daftar artikel terbaru -->
                                        <button type="submit" class="btn green">
                                            <i class="fa fa-check"></i> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXTRAS PORTLET-->
                <div class="portlet light form-fit">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                                <i class="icon-layers"></i>
                            <span class="caption-subject bold uppercase">
                                Daftar Artikel Terbaru
                            </span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <div class="search-table table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="table-title font-blue">
                                                Menikah, menggapai berkah dunia akhirat
                                            </td>
                                            <td class="table-desc">
                                                dibuat pada : 10 Januari 2018
                                            </td>
                                            <td class="table-title actions">
                                                <a class="btn btn-circle btn-icon-only btn-success"
                                                href="lihatartikel.html">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <!-- TODO: edit artikel muncul di editor -->
                                                <a class="btn btn-circle btn-icon-only btn-success">
                                                    <i class="icon-pencil"></i>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
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