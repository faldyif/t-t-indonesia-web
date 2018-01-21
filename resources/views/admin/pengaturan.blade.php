@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Pengaturan</h1>
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
                <span class="active">Pengaturan</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-4">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-user font-dark"></i>
                            <span class="caption-subject bold uppercase">
                                Ubah Nama
                            </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form action="#">
                            <div class="form-group">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="margin-top-10">
                                <a href="javascript:;" class="btn green"> Simpan </a>
                                <a href="javascript:;" class="btn default"> Batal </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-screen-smartphone font-dark"></i>
                            <span class="caption-subject bold uppercase">
                                Ubah No Handphone
                            </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form action="#">
                            <div class="form-group">
                                <label class="control-label">No Handphone</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="margin-top-10">
                                <a href="javascript:;" class="btn green"> Simpan </a>
                                <a href="javascript:;" class="btn default"> Batal </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-lock font-dark"></i>
                            <span class="caption-subject bold uppercase">
                                Ubah Password
                            </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form action="#">
                            <div class="form-group">
                                <label class="control-label">Password saat ini</label>
                                <input type="password" class="form-control" /> </div>
                            <div class="form-group">
                                <label class="control-label">Password Baru</label>
                                <input type="password" class="form-control" /> </div>
                            <div class="form-group">
                                <label class="control-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" /> </div>
                            <div class="margin-top-10">
                                <a href="javascript:;" class="btn green"> Ubah Password </a>
                                <a href="javascript:;" class="btn default"> Batal </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
        <!-- END PAGE BASE CONTENT -->
<!-- END QUICK SIDEBAR -->
</div>
@endsection