@extends('layouts.user')

@section('content')
    <div class="page-container">

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <!-- <div class="page-content">  command untuk ukuran full -->
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="portlet-body">
                    <div class="note note-success col-md-12 col-lg-12 col-sm-12">
                        <h4 class="block">Success! Akun Anda berhasil diverifikasi</h4>
                        <p> Silahkan Isi data lengkap untuk pendafataran selanjutnya </p>
                    </div>
                </div>
                <!-- END PAGE TITLE -->

            </div>

            <div class="col-lg-6 col-md-6 col-md-offset-3">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <!-- <i class="icon-settings font-dark"></i> -->
                            <span class="caption-subject font-dark sbold uppercase">Pilih Gender</span>
                        </div>
                    </div>
                    <h3 style="text-align: center;">Anda mendaftar sebagai ?</h3>
                    <br/>
                    <!-- <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3"> -->
                    <a href="{{url('dashboard/gender/choose/ikhwan')}}" class="btn green btn-block sbold uppercase">Ikhwan</a>
                    <a href="{{url('dashboard/gender/choose/akhwat')}}" class="btn green btn-block sbold uppercase">Akhwat</a>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        
    </div>
@endsection



