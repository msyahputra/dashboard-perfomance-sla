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
                                <li><a href="#">Update Regular Customer 1 jam</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">LL</span>
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
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Datin</h5>
                        <h3><i class="fa fa-code" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">95</span>%</span></h3>
                        <span class="text-info counter">99.64</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="99.64" aria-valuemin="0" aria-valuemax="100" style="width:99.64%;"> <span class="sr-only">99.64% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="update-regular-customer/datin">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Non Datin</h5>
                        <h3><i class="fa fa-phone" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">90</span>%</span></h3>
                        <span class="text-info counter">95.10</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95.10" aria-valuemin="0" aria-valuemax="100" style="width:95.10%;"> <span class="sr-only">95.10% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="update-regular-customer/non-datin">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<!-- Charts Start-->
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>TRAFFIC UPDATE REGULAR KEPADA CUSTOMER</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <figure class="highcharts-figure">
                        <div id="trafic_update_regular"></div>
                    </figure>
                </div>
            </div>x
        </div>
    </div>
</div>
<script type="text/javascript">
    var t1 = new Date("2022-06-01").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t2 = new Date("2022-06-02").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t3 = new Date("2022-06-03").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t4 = new Date("2022-06-04").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t5 = new Date("2022-06-05").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t6 = new Date("2022-06-06").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t7 = new Date("2022-06-07").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t8 = new Date("2022-06-08").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t9 = new Date("2022-06-09").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t10 = new Date("2022-06-10").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t11 = new Date("2022-06-11").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t12 = new Date("2022-06-12").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t13 = new Date("2022-06-13").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t14 = new Date("2022-06-14").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t15 = new Date("2022-06-15").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t16 = new Date("2022-06-16").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t17 = new Date("2022-06-17").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t18 = new Date("2022-06-18").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t19 = new Date("2022-06-19").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t20 = new Date("2022-06-20").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t21 = new Date("2022-06-21").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t22 = new Date("2022-06-22").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t23 = new Date("2022-06-23").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t24 = new Date("2022-06-24").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t25 = new Date("2022-06-25").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t26 = new Date("2022-06-26").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t27 = new Date("2022-06-27").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t28 = new Date("2022-06-28").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t29 = new Date("2022-06-29").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    var t30 = new Date("2022-06-30").toLocaleString('en-us', {
        month: 'long',
        day: 'numeric'
    });
    // Create the chart
    Highcharts.chart('trafic_update_regular', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Update Regular Customer'
        },
        subtitle: {
            text: ''
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            // type: 'category',
            type: 'category'
        },
        yAxis: {
            title: {
                text: '',
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/>'
        },

        series: [{
            name: "Update Regular Customer",
            colorByPoint: true,
            data: [{
                    name: "Datin",
                    y: 99.59,
                    drilldown: "datin"
                },
                {
                    name: "Non Datin",
                    y: 13.81,
                    drilldown: "non_datin"
                }

            ]
        }],
        drilldown: {
            breadcrumbs: {
                position: {
                    align: 'right'
                }
            },
            series: [{
                    name: "Datin",
                    id: "datin",
                    data: [
                        [
                            t1,
                            87.27
                        ],
                        [
                            t2,
                            100.00
                        ],
                        [
                            t3,
                            100.00
                        ],
                        [
                            t4,
                            100.00
                        ],
                        [
                            t5,
                            100.00
                        ],
                        [
                            t6,
                            100.00
                        ],
                        [
                            t7,
                            100.00
                        ],
                        [
                            t8,
                            100.00
                        ],
                        [
                            t9,
                            100.00
                        ],
                        [
                            t10,
                            100.00
                        ],
                        [
                            t11,
                            100.00
                        ],
                        [
                            t12,
                            100.00
                        ],
                        [
                            t13,
                            100.00
                        ],
                        [
                            t14,
                            100.00
                        ],
                        [
                            t15,
                            100.00
                        ],
                        [
                            t16,
                            100.00
                        ],
                        [
                            t17,
                            100.00
                        ],
                        [
                            t18,
                            100.00
                        ],
                        [
                            t19,
                            100.00
                        ],
                        [
                            t20,
                            100.00
                        ],
                        [
                            t21,
                            100.00
                        ],
                        [
                            t22,
                            100.00
                        ],
                        [
                            t23,
                            100.00
                        ],
                        [
                            t24,
                            100.00
                        ],
                        [
                            t25,
                            100.00
                        ],
                        [
                            t26,
                            100.00
                        ],
                        [
                            t27,
                            100.00
                        ],
                        [
                            t28,
                            100.00
                        ],
                        [
                            t29,
                            100.00
                        ],
                        [
                            t30,
                            100.00
                        ],


                    ]
                },
                {
                    name: "Non Datin",
                    id: "non_datin",
                    data: [
                        [
                            t1,
                            23.53
                        ],
                        [
                            t2,
                            47.06
                        ],
                        [
                            t3,
                            7.35
                        ],
                        [
                            t4,
                            14.12
                        ],
                        [
                            t5,
                            21.85
                        ],
                        [
                            t6,
                            9.41
                        ],
                        [
                            t7,
                            10.78
                        ],
                        [
                            t8,
                            12.83
                        ],
                        [
                            t9,
                            13.00
                        ],
                        [
                            t10,
                            10.86
                        ],
                        [
                            t11,
                            33.76
                        ],
                        [
                            t12,
                            10.41
                        ],
                        [
                            t13,
                            12.64
                        ],
                        [
                            t14,
                            6.19
                        ],
                        [
                            t15,
                            10.08
                        ],
                        [
                            t16,
                            11.76
                        ],
                        [
                            t17,
                            10.70
                        ],
                        [
                            t18,
                            10.62
                        ],
                        [
                            t19,
                            12.97
                        ],
                        [
                            t20,
                            15.18
                        ],
                        [
                            t21,
                            5.43
                        ],
                        [
                            t22,
                            9.80
                        ],
                        [
                            t23,
                            13.99
                        ],
                        [
                            t24,
                            11.76
                        ],
                        [
                            t25,
                            12.72
                        ],
                        [
                            t26,
                            10.98
                        ],
                        [
                            t27,
                            7.00
                        ],
                        [
                            t28,
                            11.03
                        ],
                        [
                            t29,
                            11.76
                        ],
                        [
                            t30,
                            15.13
                        ],
                    ]
                }

            ]
        }
    });
</script>
<?= $this->endSection(''); ?>