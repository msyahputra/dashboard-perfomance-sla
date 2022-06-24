<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Mobile Menu end -->
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
                                <li><a href="#">First Contact Resolution</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">ALL</span>
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
                        <h2>Persentase Tiket Average</h2>
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
                        <h2>Monthly Ticket Average</h2>
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

    var Total_Interaksi = [
            [t1, 465],
            [t2, 355],
            [t3, 306],
            [t4, 436],
            [t5, 507],
            [t6, 638],
            [t7, 547],
            [t8, 496],
            [t9, 1198],
            [t10, 1143],
            [t11, 984],
            [t12, 910],
            [t13, 757],
            [t14, 650],
            [t15, 581],
            [t16, 643],
            [t17, 1135],
            [t18, 1245],
            [t19, 1287],
            [t20, 1360],
            [t21, 1229],
            [t22, 736],
            [t23, 1455],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ],
        Total_FCR_No = [

            [t1, 317],
            [t2, 223],
            [t3, 234],
            [t4, 268],
            [t5, 357],
            [t6, 411],
            [t7, 391],
            [t8, 345],
            [t9, 754],
            [t10, 795],
            [t11, 687],
            [t12, 658],
            [t13, 505],
            [t14, 531],
            [t15, 426],
            [t16, 411],
            [t17, 780],
            [t18, 859],
            [t19, 943],
            [t20, 914],
            [t21, 783],
            [t22, 582],
            [t23, 1070],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ],
        Total_FCR_Yes = [
            [t1, 148],
            [t2, 132],
            [t3, 72],
            [t4, 168],
            [t5, 150],
            [t6, 227],
            [t7, 156],
            [t8, 151],
            [t9, 444],
            [t10, 348],
            [t11, 297],
            [t12, 252],
            [t13, 252],
            [t14, 119],
            [t15, 155],
            [t16, 232],
            [t17, 355],
            [t18, 386],
            [t19, 344],
            [t20, 446],
            [t21, 446],
            [t22, 154],
            [t23, 385],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ],
        Total_FCR = [
            [t1, 253],
            [t2, 236],
            [t3, 401],
            [t4, 345],
            [t5, 53],
            [t6, 75],
            [t7, 65],
            [t8, 21],
            [t9, 382],
            [t10, 422],
            [t11, 430],
            [t12, 397],
            [t13, 357],
            [t14, 152],
            [t15, 54],
            [t16, 64],
            [t17, 396],
            [t18, 429],
            [t19, 425],
            [t20, 377],
            [t21, 178],
            [t22, 45],
            [t23, 385],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ],
        Symptom_Datin = [
            [t1, 70.00],
            [t2, 94.12],
            [t3, 76.19],
            [t4, 89.80],
            [t5, 79.37],
            [t6, 83.75],
            [t7, 100.00],
            [t8, 83.33],
            [t9, 75.35],
            [t10, 86.59],
            [t11, 87.31],
            [t12, 98.4],
            [t13, 90.14],
            [t14, 130.69],
            [t15, 95.45],
            [t16, 77.33],
            [t17, 74.45],
            [t18, 87.95],
            [t19, 84.2],
            [t20, 96],
            [t21, 116.03],
            [t22, 94.29],
            [t23, 78.88],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ],
        Symptom_Non_Datin = [
            [t1, 100.00],
            [t2, 94.12],
            [t3, 93.75],
            [t4, 95.56],
            [t5, 98.15],
            [t6, 100.00],
            [t7, 97.01],
            [t8, 91.30],
            [t9, 99.74],
            [t10, 98.60],
            [t11, 96.20],
            [t12, 96.83],
            [t13, 97.01],
            [t14, 95.60],
            [t15, 93.10],
            [t16, 95.52],
            [t17, 98.26],
            [t18, 97.28],
            [t19, 97.70],
            [t20, 96.42],
            [t21, 93.19],
            [t22, 91.84],
            [t23, 96.01],
            [t24, 0],
            [t25, 0],
            [t26, 0],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0]
        ];
    Blank = [
        [t1, 0.17],
        [t2, 0.00],
        [t3, 0.23],
        [t4, 0.14],
        [t5, 0.00],
        [t6, 0.55],
        [t7, 0.05],
        [t8, 0.33],
        [t9, 0.52],
        [t10, 1.64],
        [t11, 4.30],
        [t12, 1.12],
        [t13, 15.69],
        [t14, 3.45],
        [t15, 0.24],
        [t16, 0.31],
        [t17, 3.37],
        [t18, 1.37],
        [t19, 0.79],
        [t20, 3.15],
        [t21, 0.79],
        [t22, 19.87],
        [t23, 2.03],
        [t24, 0],
        [t25, 0],
        [t26, 0],
        [t27, 0],
        [t28, 0],
        [t29, 0],
        [t30, 0],
        [t31, 0]
    ];


    Highcharts.chart('ttr_voice_daily', {

        title: {
            text: 'REPORT PERFORMANCE TIKET MAY'
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
        },

        series: [{
            name: 'Total Interaksi',
            data: Total_Interaksi,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Total FCR Yes',
            data: Total_FCR_Yes,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Symptom Datin',
            data: Symptom_Datin,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, {
            name: 'Symptom Non Datin',
            data: Symptom_Non_Datin,
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
            text: 'Persentase Tiket'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
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
            name: 'Tiket',
            colorByPoint: true,
            data: [{
                name: '% Persentase',
                y: 31.00,
                sliced: true,
                selected: true
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
                text: ')'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} : </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
            name: 'Total Interaksi',
            data: [828]

        }, {
            name: 'Total FCR Yes',
            data: [253]

        }, {
            name: 'Symptom Datin',
            data: [520]

        }, {
            name: 'Symptom Non-Datin',
            data: [395]

        }, {
            name: '% Persentase',
            data: [31.00],
            tooltip: {
                valueSuffix: '%'
            }

        }]
    });
</script>

<?= $this->endSection(''); ?>