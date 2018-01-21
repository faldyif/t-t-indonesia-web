@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Broadcast</h1>
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
                <a href="#">Broadcast</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="col-md-14">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                            <i class="fa fa-bullhorn"></i>
                        <span class="caption-subject bold uppercase">
                            Broadcast
                        </span>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="#">
                        <div class="form-group">
                            <label class="control-label">Input Broadcast</label>
                            <input type="text" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="margin-top-10">
                            <!-- TO DO : show in broadcast list -->
                            <a href="javascript:;" class="btn green"> Kirim </a>
                            <a href="javascript:;" class="btn default"> Batal </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-14">
            <div class="portlet light portlet-fit bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="fa fa-bullhorn"></i>
                        <span class="caption-subject bold uppercase">
                            List broadcast
                        </span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                        <ul class="feeds">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bullhorn"></i>
                                            </div>
                                        </div>
                                        <div class="cont-col2">
                                            <div class="desc">
                                                <strong>Islam menganjurkan untuk menikah</strong>
                                            </div>
                                            <div class="desc">
                                                    Barangsiapa yang dikaruniai oleh Allah dengan wanita (isteri)
                                                    yang shalihah, maka sungguh Allah telah membantunya untuk
                                                    melaksanakan separuh agamanya. Maka hendaklah ia bertaqwa
                                                    kepada Allah dalam menjaga separuhnya lagi.
                                            </div>
                                            <div class="date"> baru saja </div>
                                        </div>
                                    </div>
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