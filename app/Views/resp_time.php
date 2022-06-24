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
                                <li><a href="#">Respone Time</a> <span class="bread-slash">/</span>
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
                                <li><a href="respone-time/email">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Socmed</h5>
                        <h3><i class="fa fa-share-square" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">95</span>%</span></h3>
                        <span class="text-info counter">88.14</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="88.14" aria-valuemin="0" aria-valuemax="100" style="width:88.14%;"> <span class="sr-only">88.14% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="respone-time/socmed">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Chat</h5>
                        <h3><i class="fa fa-commenting-o" aria-hidden="true"></i><span class="tuition-fees">Target <span class="text-info counter">10</span>%</span></h3>
                        <span class="text-info counter">10</span>%
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%;"> <span class="sr-only">93% Complete</span> </div>
                        </div>
                        <span class="tuition-fees" style="color:#000; float: right; margin:20px 0px 0px 20px;">Last Update : 02-06-2022</span>
                        <div class="box-content">
                            <!-- <span class="post">T1 Voice</span> -->
                            <ul class="icon">
                                <li><a href="qmscore/voice">Click More <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
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
                                    <span class="caption-subject"><b>TRAFFIC RESPONSE TIME</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <figure class="highcharts-figure">
                        <div id="trafic_response_time"></div>
                    </figure>
                </div>
            </div>
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
    Highcharts.chart('trafic_response_time', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Response Time'
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
                    format: '{point.y}%',
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}%</b> of total<br/> <span style="color:{point.color}">{point.target}</span>: <b>{point.a}Menit</b> of total<br/> <span style="color:{point.color}">{point.realisasi}</span>: <b>{point.b}Menit</b> of total<br/> <span style="color:{point.color}">{point.presentase}</span>: <b>{point.c}%</b> of total<br/>'
        },

        series: [{
            name: "Response Time",
            colorByPoint: true,
            data: [{
                    target: "Target Respon Time",
                    a: 30,
                    realisasi: "Realisasi Respon Time",
                    b: 5.59,
                    presentase: "Presentase",
                    c: 100,
                    name: "Email",
                    y: 100.00,
                    drilldown: "email",
                },
                {
                    target: "Target Respon Time",
                    a: 30,
                    realisasi: "Realisasi Respon Time",
                    b: 5.59,
                    presentase: "Presentase",
                    c: 100,
                    name: "Socmed",
                    y: 100.00,
                    drilldown: "socmed"
                },
                {
                    target: "Target Respon Time",
                    a: 30,
                    realisasi: "Realisasi Respon Time",
                    b: 5.59,
                    presentase: "Presentase",
                    c: 100,
                    name: "Chat",
                    y: 100.00,
                    drilldown: "chat"
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
                    name: "Email",
                    id: "email",
                    data: [{
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t1,
                            y: 100.00,

                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t2,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t3,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t4,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t5,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t6,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t7,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t8,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t9,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t10,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t11,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t12,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t13,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t14,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t15,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t16,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t17,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t18,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t19,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t20,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t21,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t22,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t23,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t24,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t25,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t26,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t27,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t28,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t29,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t30,
                            y: 100.00,
                        }
                    ],
                },
                {
                    name: "Socmed",
                    id: "socmed",
                    data: [{
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t1,
                            y: 100.00,

                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t2,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t3,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t4,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t5,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t6,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t7,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t8,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t9,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t10,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t11,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t12,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t13,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t14,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t15,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t16,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t17,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t18,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t19,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t20,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t21,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t22,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t23,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t24,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t25,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t26,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t27,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t28,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t29,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t30,
                            y: 100.00,
                        }
                    ]
                },
                {
                    name: "Chat",
                    id: "chat",
                    data: [{
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t1,
                            y: 100.00,

                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t2,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t3,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t4,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t5,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t6,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t7,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t8,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t9,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t10,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t11,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t12,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t13,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t14,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t15,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t16,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t17,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t18,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t19,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t20,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t21,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t22,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t23,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t24,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t25,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t26,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t27,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t28,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t29,
                            y: 100.00,
                        },
                        {
                            target: "Target Respon Time",
                            a: 30,
                            realisasi: "Realisasi Respon Time",
                            b: 5.59,
                            presentase: "Presentase",
                            c: 100,
                            name: t30,
                            y: 100.00,
                        }
                    ]
                }

            ]
        }
    });
</script>
<?= $this->endSection(''); ?>