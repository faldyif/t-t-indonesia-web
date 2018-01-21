@extends('layouts.admin')

@section('content')


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
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Data Akhwat</a>
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
                                <img src="../assets/pages/media/profile/people19.jpg"
                                     class="img-responsive" alt="">
                            </td>
                            <td class="table-title font-blue">
                                <h3>
                                    <a href="javascript:;"> Khansa Nur Fauzia </a>
                                </h3>
                            </td>
                            <td>
                                email@mail.com
                            </td>
                            <td class="table-desc">
                                Jakarta Barat
                            </td>
                            <td class="table-date table-title font-blue">
                                Jakarta, 5 Juni 1996
                            </td>
                            <td class="table-title actions">
                                <a class="btn btn-circle btn-icon-only btn-success" href="detaildataakhwat.html">
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
                        <tr>
                            <td class="table-title">
                                <img src="../assets/pages/media/profile/people19.jpg"
                                     class="img-responsive" alt="">
                            </td>
                            <td class="table-title font-blue">
                                <h3>
                                    <a href="javascript:;"> Khansa Nur Fauzia </a>
                                </h3>
                            </td>
                            <td>
                                email@mail.com
                            </td>
                            <td class="table-desc">
                                Jakarta Barat
                            </td>
                            <td class="table-date table-title font-blue">
                                Jakarta, 5 Juni 1999
                            </td>
                            <td class="table-title actions">
                                <a class="btn btn-circle btn-icon-only btn-success" href="detaildataakhwat.html">
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