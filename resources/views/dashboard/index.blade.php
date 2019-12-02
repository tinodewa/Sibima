@extends('layouts/dashboard')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    {{-- -- Header Card -- --}}
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="card card-stats card-primary text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                        <div class="icon-big text-center">
                            <i class="fa fa-road"></i>
                        </div>
                        </div>

                        <div class="col-9">
                            <div class="detail-card mb-3">
                                {{ $sikalanStatistik->sikalan_length_count }} KM
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
            <div class="card card-stats card-success text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                        <div class="icon-big text-center">
                            <i class="fa fa-road"></i>
                        </div>
                        </div>

                        <div class="col-9">
                            <div class="detail-card mb-3">
                                {{ $sikalanStatistik->sikalan_count }}
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
            <div class="card card-stats card-danger text-white card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                        <div class="icon-big text-center">
                            <i class="fa fa-eraser"></i>
                        </div>
                        </div>

                        <div class="col-9">
                            <div class="detail-card mb-3">
                                {{ $sikalanStatistik->sikombatan_count }}
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
                        <div class="chart-foot-box card-success">
                            <div class="chart-title">Ruas Jalan Mantap</div>
                            <div class="chart-text d-block">{{ $sikalanStatistik->sikalan_mantap }} KM</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="chart-foot-box card-danger">
                            <div class="chart-title">Ruas Jalan Tidak Mantap</div>
                            <div class="chart-text d-block">{{ $sikalanStatistik->sikalan_tidak_mantap }} KM</div>
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
                        <div class="chart-foot-box-2 card-success">
                            <div class="chart-title">Baik</div>
                            <div class="chart-text d-block">{{ $sikalanStatistik->sikalan_baik }} KM</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-foot-box-2 card-warning">
                            <div class="chart-title">Sedang</div>
                            <div class="chart-text d-block">{{ $sikalanStatistik->sikalan_sedang }} KM</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chart-foot-box-2 card-danger">
                            <div class="chart-title">Rusak Ringan</div>
                            <div class="chart-text d-block">{{ $sikalanStatistik->sikalan_rusak_ringan }} KM</div>
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
        labels : [""],
	    datasets : [
		{
		data : [{{$sikalanStatistik->total_mantap}},],
		backgroundColor :'#2ecc71',
		borderColor : 'rgba(136,136,136,0.5)',
		label:"Mantap"},

		{
		data : [{{$sikalanStatistik->total_tidak_mantap}},],
		backgroundColor :'#dc3545',
		borderColor : '#aaaaaa',
		label:"Tidak Mantap"},

]
    },
    options: {
        responsive:true,
        scales: {
            yAxes: [{
                ticks: {
                    max : 100,    
                    min : 0,
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
            data: [{{$sikalanStatistik->total_baik}}, {{$sikalanStatistik->total_sedang}}, {{$sikalanStatistik->total_rusak_ringan}}],
            backgroundColor: [
                '#2ecc71',
                '#f1c40f',
                '#dc3545'
            ]
        }]
    },
    options: {
        responsive:true,
        scales: {
            yAxes: [{
                ticks: {
                    max : 100,    
                    min : 0,
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection