@extends('layouts.master')
@section('content')
<!-- Main content starts -->
<div class="container-fluid">
    <div class="row">
        <div class="main-header">
            <h4>Dashboard</h4>
        </div>
    </div>
    <!-- 4-blocks row start -->
    <div class="row dashboard-header">
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $a }}</h2>
                <span class="label label-warning">Otomotif</span>
                <div class="side-box">
                    <i class="ti-server text-warning-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $b }}</h2>
                <span class="label label-primary">Media dan Desain</span>
                <div class="side-box ">
                    <i class="ti-server text-primary-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $c }}</h2>
                <span class="label label-success">Teknik Komputer</span>
                <div class="side-box">
                    <i class="ti-server text-success-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $d }}</h2>
                <span class="label label-danger">Manajemen Bisnis</span>
                <div class="side-box">
                    <i class="ti-server text-danger-color"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{ $e }}</h2>
                <span class="label label-primary">Akuntansi dan Keuangan</span>
                <div class="side-box">
                    <i class="ti-server text-primary-color"></i>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-3 col-md-6">
            <div class="card dashboard-product">
                <span>Jumlah Seluruh Siswa</span>
                <h2 class="dashboard-total-products">{{$f}}</h2>
                <span class="label label-info">Multimedia</span>
                <div class="side-box">
                    <i class="ti-server text-info-color"></i>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- 4-blocks row end -->

    <!-- 1-3-block row start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-header-text">Pola Grafik Tahunan</h5>
            </div>
            
            <div class="card-block">
                <div id="data-siswa" style="height: 250px;">
                </div>
            </div>
            
        </div>
        
    </div>
    <!-- 1-3-block row end -->
</div>
<!-- Main content ends -->
@endsection('content')

@push('scripts')
<script>
    var otomotif = @json($otomotif);
    var media_desain = @json($media_desain);
    var tkk = @json($tkk);
    var manajemen_bisnis = @json($manajemen_bisnis);
    var akuntansi_keuangan = @json($akuntansi_keuangan);
    var year = @json($year);
  
    var chartData = [];
    for (var i = 0; i < year.length; i++) {
        chartData.push({
            year: year[i],
            otomotif: otomotif[i],
            media_desain: media_desain[i],
            tkk: tkk[i],
            manajemen_bisnis: manajemen_bisnis[i],
            akuntansi_keuangan: akuntansi_keuangan[i]
        });
    }
  
    new Morris.Line({
        element: 'data-siswa',
        data: chartData,
        xkey: 'year',
        ykeys: ['otomotif', 'media_desain', 'tkk', 'manajemen_bisnis', 'akuntansi_keuangan'],
        labels: ['Otomotif', 'Media dan Desain', 'Teknik Komputer', 'Manajemen Bisnis', 'Akuntansi Keuangan']
    });
  </script>
  
@endpush