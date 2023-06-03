@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body bg-success">
                            <p class="card-text">
                                @php
                                $currentTime = date('H');
                                $greeting = '';
                                $fyi = '';
                                if ($currentTime >= 5 && $currentTime < 10) {
                                    $greeting = 'Selamat Pagi';
                                    $fyi = 'Semoga harimu menyenangkan.';
                                } elseif ($currentTime >= 10 && $currentTime < 14) {
                                    $greeting = 'Selamat Siang';
                                    $fyi = 'Tetap semangat yah. !!!';
                                } elseif ($currentTime >= 14 && $currentTime < 18) {
                                    $greeting = 'Selamat Sore';
                                    $fyi = 'Semoga lelahmu menjadi berkah.';
                                } else{
                                    $greeting = 'Selamat Malam';
                                    $fyi = 'Jangan lupa istirahat, biar kamu tetap sehat. !';
                                }
                                @endphp
                                {{ $greeting }} ! {{ auth()->user()->nama }}, {{ $fyi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection