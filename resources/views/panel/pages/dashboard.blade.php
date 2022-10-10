@extends('panel.layout.main')
@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">GWD</h1>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li>Selamat Datang...</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <!-- ICON BG-->
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Map-Marker"></i>
                    <div class="content" style="max-width:100%;">
                        <p class="text-muted mt-2 mb-0">Destinasi Wisata</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{ $totalDestinasi }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Folder-Zip"></i>
                    <div class="content" style="max-width:100%;">
                        <p class="text-muted mt-2 mb-0">Paket Wisata</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{ $totalpaket }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center"><i class="i-Male"></i>
                    <div class="content" style="max-width:100%;">
                        <p class="text-muted mt-2 mb-0">Total Pengunjung</p>
                        <p class="text-primary text-24 line-height-1 mb-2"> {{ $totPengunjung }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--<div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body p-0">
                    <div class="card-title border-bottom d-flex align-items-center m-0 p-3"><span>Pengunjung</span> &nbsp;<span class="flex-grow-1">Th. 2022</span></div>
                    <div class="d-flex border-bottom justify-content-between p-3">
                        <div class="flex-grow-1"><span class="text-small text-muted">Bulan / Tahun</span>
                            <h5 class="m-0">2065</h5>
                        </div>
                       
                        <div class="flex-grow-1"><span class="text-small text-muted">Total Pengunjung</span>
                            <h5 class="m-0">23456</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection