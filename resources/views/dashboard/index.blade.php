@extends('layouts/dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    {{-- -- Header Card -- --}}
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats bg-primary text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon-big text-center">
                            <i class="fa fa-road"></i>
                        </div>
                        </div>

                        <div class="col-8">
                            <div class="detail-card mb-3">
                                589 km
                            </div>
                            <div class="keterangan-card">
                                Total Panjang Ruas Jalan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card card-stats bg-success text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon-big text-center">
                            <i class="fa fa-road"></i>
                        </div>
                        </div>

                        <div class="col-8">
                            <div class="detail-card mb-3">
                                237 km
                            </div>
                            <div class="keterangan-card">
                                Jumlah Ruas Jalan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card card-stats bg-danger text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                        <div class="icon-big text-center">
                            <i class="fa fa-eraser"></i>
                        </div>
                        </div>

                        <div class="col-8">
                            <div class="detail-card mb-3">
                                65
                            </div>
                            <div class="keterangan-card">
                                Jumlah Jembatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    {{-- -- Chart Statistics -- --}}
    <div class="row">
        <div class="col-md-7">
            <div class="card">

                <div class="card-header">
                    <div class="card-title">Kemantapan(%)</div>
                </div>

                <div class="card-body">
                    <canvas id="myChartbar"></canvas>
                </div>

                <div class="card-footer row text-center">
                    <div class="col-md-6">
                        <div class="chart-foot-box bg-success">
                            <div class="chart-title">Ruas Jalan Mantap</div>
                            <div class="chart-text d-block">7</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chart-foot-box bg-danger">
                            <div class="chart-title">Ruas Jalan Tidak Mantap</div>
                            <div class="chart-text d-block">5</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-5">
            <div class="card">

                <div class="card-header">
                    <div class="card-title">Kondisi Ruas Jalan(%)</div>
                </div>

                <div class="card-body">
                    <canvas id="myChartcircle" height="215"></canvas>
                </div>

                <div class="card-footer row text-center">
                    <div class="col-md-4">
                        <div class="chart-foot-box-2 bg-success">
                            <div class="chart-title">Baik</div>
                            <div class="chart-text d-block">7</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-foot-box-2 bg-warning">
                            <div class="chart-title">Sedang</div>
                            <div class="chart-text d-block">5</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-foot-box-2 bg-danger">
                            <div class="chart-title">Rusak Ringan</div>
                            <div class="chart-text d-block">5</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


</div>
@endsection
@section('js')
<script>
//bar example
var ctx = document.getElementById('myChartbar').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2018','2019'],
        datasets: [{
            label: 'MANTAP',
            data: [9, 7],
            backgroundColor: [
                '#28a745',
                '#28a745'
            ]
        },{
            label: 'TIDAK MANTAP',
            data: [3, 5],
            backgroundColor: [
                '#dc3545',
                '#dc3545'
            ]

        }]
    },
    options: {
        responsive:true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});



//Circle Chart

var ctx = document.getElementById('myChartcircle').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Baik', 'Sedang', 'Rusak Ringan'],
        datasets: [{
            label: '# of Votes',
            data: [9, 7, 3],
            backgroundColor: [
                '#28a745',
                '#ffc107',
                '#dc3545'
            ]
        }]
    },
    options: {
        responsive:true,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection