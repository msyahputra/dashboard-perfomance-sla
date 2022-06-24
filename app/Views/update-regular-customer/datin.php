<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="month" placeholder="Search..." class="	search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Update Regular Customer</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Datin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product-sales-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>DAILY</b></span>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>All Earnings are in million $</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <figure class="highcharts-figure">
                        <div id="ttr_voice_daily"></div>
                        <!-- <p class="highcharts-description">
                            Chart demonstrating using an arearange series in combination with a line
                            series. In this case, the arearange series is used to visualize the
                            temperature range per day, while the line series shows the average
                            temperature.
                        </p> -->
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Charts Start-->
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="charts-single-pro responsive-mg-b-30">
                    <div class="alert-title">
                        <h2>Persentase Tiket Datin Average</h2>
                        <!-- <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p> -->
                    </div>
                    <figure class="highcharts-figure">
                        <div id="rounde_total_ttr"></div>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="charts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="charts-single-pro">
                    <div class="alert-title">
                        <h2>Monthly Ticket Datin Average</h2>
                        <!-- <p>A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p> -->
                    </div>
                    <figure class="highcharts-figure">
                        <div id="bar_mont_ttr"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>DATA ANALISIS</h1>
                        </div>
                        <br>
                        <div class="add-product">
                            <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add Analisis</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Analisis</th>
                                        <th class="text-center">improvment</th>
                                        <th class="text-center">Planing</th>
                                        <th class="text-center">Hasil</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Isi Analisis</td>
                                        <td>Isi improvment</td>
                                        <td>Isi Planing</td>
                                        <td>Isi Hasil</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modals -->
<div class="login-form-area edu-pd mg-b-15">
    <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header header-color-modal bg-color-1">
                    <h4 class="modal-title">Input Analisis</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="product-tab-list tab-pane fade active in" id="description">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="review-content-section">
                                    <div id="dropzone1" class="pro-ad">
                                        <form action="/upload" class="add-professors">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <select name="periode" class="form-control">
                                                            <option value="none" selected="" disabled="">Select Periode</option>
                                                            <option value="periode_satu">Periode 1</option>
                                                            <option value="periode_dua">Periode 2</option>
                                                            <option value="periode_tiga">Periode 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="Analisis" type="text" class="form-control" placeholder="Analisis">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="improvment" type="text" class="form-control" placeholder="Improvment">
                                                    </div>
                                                    <div class="form-group res-mg-t-15">
                                                        <textarea name="planing" placeholder="Planing"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="hasil" id="hasil" type="text" class="form-control" placeholder="Hasil">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress" style="float: right;">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        <button style="background-color:red;" type="submit" class="btn btn-danger waves-effect waves-light">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var t1 = new Date("2022-05-01").getTime()
    var t2 = new Date("2022-05-02").getTime()
    var t3 = new Date("2022-05-03").getTime()
    var t4 = new Date("2022-05-04").getTime()
    var t5 = new Date("2022-05-05").getTime()
    var t6 = new Date("2022-05-06").getTime()
    var t7 = new Date("2022-05-07").getTime()
    var t8 = new Date("2022-05-08").getTime()
    var t9 = new Date("2022-05-09").getTime()
    var t10 = new Date("2022-05-10").getTime()
    var t11 = new Date("2022-05-11").getTime()
    var t12 = new Date("2022-05-12").getTime()
    var t13 = new Date("2022-05-13").getTime()
    var t14 = new Date("2022-05-14").getTime()
    var t15 = new Date("2022-05-15").getTime()
    var t16 = new Date("2022-05-16").getTime()
    var t17 = new Date("2022-05-17").getTime()
    var t18 = new Date("2022-05-18").getTime()
    var t19 = new Date("2022-05-19").getTime()
    var t20 = new Date("2022-05-20").getTime()
    var t21 = new Date("2022-05-21").getTime()
    var t22 = new Date("2022-05-22").getTime()
    var t23 = new Date("2022-05-23").getTime()
    var t24 = new Date("2022-05-24").getTime()
    var t25 = new Date("2022-05-25").getTime()
    var t26 = new Date("2022-05-26").getTime()
    var t27 = new Date("2022-05-27").getTime()
    var t28 = new Date("2022-05-28").getTime()
    var t29 = new Date("2022-05-29").getTime()
    var t30 = new Date("2022-05-30").getTime()
    var t31 = new Date("2022-05-31").getTime()

    var total_tiket_close_email = [
            [t1, 39],
            [t2, 16],
            [t3, 27],
            [t4, 54],
            [t5, 38],
            [t6, 32],
            [t7, 32],
            [t8, 28],
            [t9, 44],
            [t10, 38],
            [t11, 38],
            [t12, 44],
            [t13, 39],
            [t14, 44],
            [t15, 43],
            [t16, 52],
            [t17, 50],
            [t18, 64],
            [t19, 57],
            [t20, 40],
            [t21, 57],
            [t22, 41],
            [t23, 59],
            [t24, 62],
            [t25, 45],
            [t26, 48],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        target_ttr = [
            [t1, 2.5],
            [t2, 2.5],
            [t3, 2.5],
            [t4, 2.5],
            [t5, 2.5],
            [t6, 2.5],
            [t7, 2.5],
            [t8, 2.5],
            [t9, 2.5],
            [t10, 2.5],
            [t11, 2.5],
            [t12, 2.5],
            [t13, 2.5],
            [t14, 2.5],
            [t15, 2.5],
            [t16, 2.5],
            [t17, 2.5],
            [t18, 2.5],
            [t19, 2.5],
            [t20, 2.5],
            [t21, 2.5],
            [t22, 2.5],
            [t23, 2.5],
            [t24, 2.5],
            [t25, 2.5],
            [t26, 2.5],
            [t27, 2.5],
            [t28, 2.5],
            [t29, 2.5],
            [t30, 2.5],
            [t31, 2.5],
        ],
        target_proactive = [
            [t1, 97.5],
            [t2, 40],
            [t3, 67.5],
            [t4, 135],
            [t5, 95],
            [t6, 80],
            [t7, 80],
            [t8, 70],
            [t9, 110],
            [t10, 95],
            [t11, 95],
            [t12, 110],
            [t13, 97.5],
            [t14, 110],
            [t15, 107.5],
            [t16, 130],
            [t17, 125],
            [t18, 160],
            [t19, 142.5],
            [t20, 100],
            [t21, 142.5],
            [t22, 102.5],
            [t23, 147.5],
            [t24, 155],
            [t25, 112.5],
            [t26, 120],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        total_tiket_proactive = [
            [t1, 48],
            [t2, 44],
            [t3, 64],
            [t4, 81],
            [t5, 58],
            [t6, 88],
            [t7, 71],
            [t8, 56],
            [t9, 78],
            [t10, 77],
            [t11, 176],
            [t12, 72],
            [t13, 77],
            [t14, 114],
            [t15, 85],
            [t16, 102],
            [t17, 103],
            [t18, 119],
            [t19, 100],
            [t20, 121],
            [t21, 117],
            [t22, 85],
            [t23, 82],
            [t24, 127],
            [t25, 121],
            [t26, 174],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ];


    Highcharts.chart('ttr_voice_daily', {

        title: {
            text: 'REPORT PERFORMANCE TIKET DATIN MAY'
        },

        xAxis: {
            type: 'datetime',
            accessibility: {
                rangeDescription: 'Range: May 1st 2022 to May 31st 2022.'
            }
        },

        yAxis: {
            title: {
                text: null
            }
        },

        tooltip: {
            crosshairs: true,
            shared: true,
            valueSuffix: ''
        },

        series: [{
            name: 'Total tiket closed headline email ',
            data: total_tiket_close_email,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Target TTR customer',
            data: target_ttr,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Target Pro active',
            data: target_proactive,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Total tiket Pro aktive realisasi',
            data: total_tiket_proactive,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }]
    });

    Highcharts.chart('rounde_total_ttr', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Persentase Tiket Datin'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: ''
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y}%'
                }
            }
        },
        series: [{
            name: 'Tiket    ',
            colorByPoint: true,
            data: [{
                name: '% Pro aktive 1 jam',
                y: 93.78
            }]
        }]
    });

    Highcharts.chart('bar_mont_ttr', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Monthly Average'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'May'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color : {series.color};padding:0">{series.name} : </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Total tiket closed headline email ',
            data: [49.9]

        }, {
            name: 'Target TTR customer',
            data: [83.6]

        }, {
            name: 'Target Pro active',
            data: [48.9]

        }, {
            name: 'Total tiket Pro aktive realisasi',
            data: [42.4]

        }, {
            name: '% Pro aktive 1 jam',
            data: [42.4]

        }]
    });
</script>

<?= $this->endSection(''); ?>