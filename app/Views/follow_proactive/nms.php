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
                                <li><a href="#">Follow UP Proactive</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">NMS</span>
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
                        <h2>Persentase TIket Follow Up Proactive Average</h2>
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
                        <h2>Monthly Tiket Follow Up Proactive Progress</h2>
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

    var total_alert = [
            [t1, 33],
            [t2, 14],
            [t3, 21],
            [t4, 28],
            [t5, 49],
            [t6, 55],
            [t7, 49],
            [t8, 36],
            [t9, 164],
            [t10, 170],
            [t11, 133],
            [t12, 140],
            [t13, 120],
            [t14, 57],
            [t15, 35],
            [t16, 61],
            [t17, 216],
            [t18, 181],
            [t19, 141],
            [t20, 133],
            [t21, 70],
            [t22, 54],
            [t23, 161],
            [t24, 143],
            [t25, 95],
            [t26, 47],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        total_alert_follow = [
            [t1, 33],
            [t2, 14],
            [t3, 21],
            [t4, 28],
            [t5, 49],
            [t6, 55],
            [t7, 49],
            [t8, 36],
            [t9, 164],
            [t10, 170],
            [t11, 133],
            [t12, 140],
            [t13, 120],
            [t14, 57],
            [t15, 35],
            [t16, 61],
            [t17, 216],
            [t18, 181],
            [t19, 141],
            [t20, 133],
            [t21, 70],
            [t22, 54],
            [t23, 161],
            [t24, 143],
            [t25, 95],
            [t26, 47],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ];


    Highcharts.chart('ttr_voice_daily', {

        title: {
            text: 'REPORT PERFORMANCE TIKET FOLLOW UP PROACTIVE MAY'
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
            name: 'Total alert',
            data: total_alert,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Total alert terfollow up',
            data: total_alert_follow,
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
            text: 'Persentase Average Tiket Follow Up Proactive'
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
                    format: '<b>{point.name}</b>: {point.y} %'
                }
            }
        },
        series: [{
            name: 'Tiket    ',
            colorByPoint: true,
            data: [{
                name: '% Follow up terhadap alarm Pro-Active (Clear atau valid)',
                y: 100
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
                '<td style="padding:0"><b>{point.y}% </b></td></tr>',
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
            name: 'Total alert',
            data: [91.00]

        }, {
            name: 'Total alert terfollow up',
            data: [95.89]

        }, {
            name: '% Follow up terhadap alarm Pro-Active (Clear atau valid)',
            data: [100]

        }]
    });
</script>

<?= $this->endSection(''); ?>