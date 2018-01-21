@extends('layouts.admin')

@section('content')


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
                <div class="page-toolbar">
                    <!-- BEGIN THEME PANEL -->
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </a>
                        <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <h3>HEADER</h3>
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default active" data-theme="default">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Dark Header</span>
                                        </li>
                                        <li class="theme-color theme-color-light " data-theme="light">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Light Header</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                    <h3>LAYOUT</h3>
                                    <ul class="theme-settings">
                                        <li> Layout
                                            <select class="layout-option form-control input-small input-sm">
                                                <option value="fluid" selected="selected">Fluid</option>
                                                <option value="boxed">Boxed</option>
                                            </select>
                                        </li>
                                        <li> Header
                                            <select class="page-header-option form-control input-small input-sm">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </li>
                                        <li> Top Dropdowns
                                            <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                <option value="light">Light</option>
                                                <option value="dark" selected="selected">Dark</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Mode
                                            <select class="sidebar-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Menu
                                            <select class="sidebar-menu-option form-control input-small input-sm">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Position
                                            <select class="sidebar-pos-option form-control input-small input-sm">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </li>
                                        <li> Footer
                                            <select class="page-footer-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Data Ikhwan</a>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="search-page search-content-4">
                <div class="search-bar bordered">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari berdasar nama...">
                                <span class="input-group-btn">
                                                <button class="btn green-soft uppercase bold" type="button">Cari</button>
                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-table table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-blue">
                        <tr>
                            <th>
                                <a href="javascript:;">Foto</a>
                            </th>
                            <th>
                                <a href="javascript:;">Nama</a>
                            </th>
                            <th>
                                <a href="javascript:;">Email</a>
                            </th>
                            <th>
                                <a href="javascript:;">Asal</a>
                            </th>
                            <th>
                                <a href="javascript:;">TTL</a>
                            </th>
                            <th>
                                <a href="javascript:;">Aksi</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-title">
                                <img src="../assets/pages/media/profile/people19.png"
                                     class="img-responsive" alt="">
                            </td>
                            <td class="table-title font-blue">
                                <h3>
                                    <a href="javascript:;"> Bagus Cakra Buana </a>
                                </h3>
                            </td>
                            <td>
                                email@mail.com
                            </td>
                            <td class="table-desc">
                                Bandung
                            </td>
                            <td class="table-date table-title font-blue">
                                Bandung, 5 Juni 1990
                            </td>
                            <td class="table-title actions">
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
                        </tbody>
                    </table>
                </div>
                <div class="search-pagination pagination-rounded">
                    <ul class="pagination">
                        <li class="page-active">
                            <a href="javascript:;"> 1 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 2 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 3 </a>
                        </li>
                        <li>
                            <a href="javascript:;"> 4 </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>

@endsection