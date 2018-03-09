@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pilih Jenis Kelamin</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Apakah anda seorang ikhwan atau akhwat? <br>
                        <a href="{{url('gender/choose/ikhwan')}}">Saya seorang ikhwan</a> <br>
                        <a href="{{url('gender/choose/akhwat')}}">Saya seorang akhwat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
