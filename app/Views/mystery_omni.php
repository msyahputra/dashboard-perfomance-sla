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
                                <li><a href="#">Mystery Omni Channel</a> <span class="bread-slash">/</span>
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
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Voice</h5>
                        <h3><i class="fa fa-phone" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">90</span>%</span></h3>
                        <span class="text-info counter">94.20</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="94.20" aria-valuemin="0" aria-valuemax="100" style="width:94.20%;"> <span class="sr-only">94.20% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="mystery-omni/voice">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Email</h5>
                        <h3><i class="fa fa-envelope-o" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">95</span>%</span></h3>
                        <span class="text-info counter">100</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only">100% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="mystery-omni/email">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Social Media</h5>
                        <h3><i class="fa fa-share-square" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-warning counter">95</span>%</span></h3>
                        <span class="text-warning counter">88.14</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88.14" aria-valuemin="0" aria-valuemax="100" style="width:88.14%;"> <span class="sr-only">88.14% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="mystery-omni/socmed">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Charts Start-->
<!-- Static Table Start -->
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>TRAFFIC MYSTERY OMNI CHANNEL INDEX</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <figure class="highcharts-figure">
                        <div id="trafic_mystery_omni"></div>
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
    Highcharts.chart('trafic_mystery_omni', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'MYSTERY OMNI'
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
            name: "Mystery Omni",
            colorByPoint: true,
            data: [{
                    name: "Voice",
                    y: 99.56,
                    drilldown: "voice"
                },
                {
                    name: "Email",
                    y: 100,
                    drilldown: "email"
                },
                {
                    name: "Social Media",
                    y: 88.14,
                    drilldown: "socmed"
                },
            ]
        }],
        drilldown: {
            breadcrumbs: {
                position: {
                    align: 'right'
                }
            },
            series: [{
                    name: "Voice",
                    id: "voice",
                    data: [
                        [
                            t1,
                            96.39
                        ],
                        [
                            t2,
                            100.00
                        ],
                        [
                            t3,
                            96.39
                        ],
                        [
                            t4,
                            100.00
                        ],
                        [
                            t5,
                            97.69
                        ],
                        [
                            t6,
                            96.67
                        ],
                        [
                            t7,
                            100.00
                        ],
                        [
                            t8,
                            96.39
                        ],
                        [
                            t9,
                            100.00
                        ],
                        [
                            t10,
                            98.33
                        ],
                        [
                            t11,
                            96.39
                        ],
                        [
                            t12,
                            91.11
                        ],
                        [
                            t13,
                            91.94
                        ],
                        [
                            t14,
                            100.00
                        ],
                        [
                            t15,
                            91.11
                        ],
                        [
                            t16,
                            97.22
                        ],
                        [
                            t17,
                            96.11
                        ],
                        [
                            t18,
                            93.06
                        ],
                        [
                            t19,
                            96.39
                        ],
                        [
                            t20,
                            97.50
                        ],
                        [
                            t21,
                            100.00
                        ],
                        [
                            t22,
                            98.61
                        ],
                        [
                            t23,
                            100.00
                        ],
                        [
                            t24,
                            94.72
                        ],
                        [
                            t25,
                            100.00
                        ],
                        [
                            t26,
                            95.83
                        ],
                        [
                            t27,
                            96.39
                        ],
                        [
                            t28,
                            96.39
                        ],
                        [
                            t29,
                            91.11
                        ],
                        [
                            t30,
                            96.39
                        ],


                    ]
                },
                {
                    name: "Email",
                    id: "email",
                    data: [
                        [
                            t1,
                            75.93
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
                            78.70
                        ],
                        [
                            t5,
                            88.89
                        ],
                        [
                            t6,
                            100.00
                        ],
                        [
                            t7,
                            81.48
                        ],
                        [
                            t8,
                            100.00
                        ],
                        [
                            t9,
                            89.81
                        ],
                        [
                            t10,
                            95.37
                        ],
                        [
                            t11,
                            97.22
                        ],
                        [
                            t12,
                            97.22
                        ],
                        [
                            t13,
                            98.15
                        ],
                        [
                            t14,
                            100.00
                        ],
                        [
                            t15,
                            75.00
                        ],
                        [
                            t16,
                            86.11
                        ],
                        [
                            t17,
                            94.44
                        ],
                        [
                            t18,
                            98.15
                        ],
                        [
                            t19,
                            95.37
                        ],
                        [
                            t20,
                            94.44
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
                            97.22
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
                            97.22
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
                            97.22
                        ],
                        [
                            t30,
                            100.00
                        ],


                    ]
                },
                {
                    name: "Social Media",
                    id: "socmed",
                    data: [
                        [
                            t1,
                            100.00
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
                            95.83
                        ],
                        [
                            t8,
                            95.83
                        ],
                        [
                            t9,
                            91.67
                        ],
                        [
                            t10,
                            91.67
                        ],
                        [
                            t11,
                            95.83
                        ],
                        [
                            t12,
                            95.83
                        ],
                        [
                            t13,
                            95.83
                        ],
                        [
                            t14,
                            100.00
                        ],
                        [
                            t15,
                            75.00
                        ],
                        [
                            t16,
                            100.00
                        ],
                        [
                            t17,
                            90.28
                        ],
                        [
                            t18,
                            91.67
                        ],
                        [
                            t19,
                            100.00
                        ],
                        [
                            t20,
                            95.83
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
                            95.83
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
                            75.00
                        ],
                        [
                            t30,
                            100.00
                        ],

                    ]
                },

            ]
        }
    });
</script>
<!-- Static Table Start -->
<?= $this->endSection(''); ?>