<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Digital Reporting</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.transitions.css'); ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css'); ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css'); ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/meanmenu.min.css'); ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/educate-custon-icon.css'); ?>">
    <!-- Font-Awesome icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/morrisjs/morris.css'); ?>">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dropzone/dropzone.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/scrollbar/jquery.mCustomScrollbar.min.css'); ?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu/metisMenu.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/metisMenu/metisMenu-vertical.css'); ?>">
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/editor/select2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/editor/x-editor-style.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/data-table/bootstrap-editable.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/calendar/fullcalendar.print.min.css">
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/datapicker/datepicker3.css">
    <!-- forms CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/form/themesaller-forms.css"> -->
    <!-- colorpicker CSS ============================================ -->
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/modals.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/colorpicker/colorpicker.css">
    <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/select2/select2.min.css">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/chosen/bootstrap-chosen.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
    <style type="text/css">
        @import "https://code.highcharts.com/css/highcharts.css";
    </style>
    <!-- Charts JS
		============================================ -->
    <script src="<?= base_url('assets/js/highcharts.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/data.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/drilldown.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/highcharts-more.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/exporting.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/export-data.js'); ?>"></script>
    <script src="<?= base_url('assets/js/highcharts/accessibility.js'); ?>"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?= base_url('/'); ?>"><img class="main-logo" src="<?= base_url('assets/img/logo/logosn.png'); ?>" alt="" /></a>
                <strong><a href="<?= base_url('/'); ?>"><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="">
                            <a class="has-arrow" href="<?= base_url('/'); ?>">
                                <span class="fa fa-home icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">SLA TENESA</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="QM-SCORE" href="<?= base_url('qm-score'); ?>" aria-expanded="false"><span class="fa fa-bar-chart icon-wrap sub-icon-mg" aria-hidden="true"></span><span class="mini-click-non">QM-SCORE</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a class="has-arrow" href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">T1 Voice</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">T2 Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">T2 Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Email</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Socmed</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Chat</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('mystery-omni'); ?>" aria-expanded="false"><span class="fa fa-user-secret icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Mystery Omni</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Voice</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Email</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Socmed</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('service-level'); ?>" aria-expanded="false"><span class="fa fa-level-up icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Service Level</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Voice</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Email</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Sosmed</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">ART Digital Channel</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('respone-time'); ?>" aria-expanded="false"><span class="fa fa-clock-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Resp Time</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Vioce</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Pots</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Global</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Imes</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Pertamina</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Billing</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Pasang Baru</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Info Prodak</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">VDN 1 71507</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">VDN 1 71513</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Email</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Socmed</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('update-regular-customer'); ?>" aria-expanded="false"><span class="fa fa-pencil-square-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Up. Customer</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">All</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Pots</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Imes</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Nms</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Proaktif</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('ttr-loker-agent'); ?>" aria-expanded="false"><span class="fa fa-ticket icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">TTR Agent</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">

                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('follow-up-proactive'); ?>" aria-expanded="false"><span class="fa fa-file-powerpoint-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">FU Pro-Active</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">All</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Pots</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Imes</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Nms</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Proaktif</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('ttr-compliance'); ?>" aria-expanded="false"><span class="fa fa-commenting-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">TTR Comp.</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">All</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Pots</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Imes</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Nms</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Proaktif</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('pencapaian-kpi-agent'); ?>" aria-expanded="false"><span class="fa fa-address-book-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">KPI Agent</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Agent T1</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Agent T2</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Agent T2 Violet</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Agent T2 Global</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Agent Outbond Proaktif</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Agent Digital</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Agent Imes</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('caring-terkonfirmasi'); ?>" aria-expanded="false"><span class="fa fa-ticket icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Caring Confir</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Tiket All</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Datin</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Indihome</span></a></li>
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Pots</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">RFO</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('customer-satisfaction-score'); ?>" aria-expanded="false"><span class="fa fa-users icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Cust Score</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li><a href="<?= base_url('fcr'); ?>" aria-expanded="false"><span class="fa fa-address-card-o icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">FCR</span></a>
                                    <!-- <ul class=" submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                        <li><a href="mailbox.html" aria-expanded="false">Layanan</a>
                                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                                <li style="margin-left:10px;"><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                                <li style="margin-left:10px;"><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="<?= base_url('kejadian-penting'); ?>">
                                <span class="fa fa-sticky-note-o icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">KEJADIAN PENTING</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="<?= base_url('request'); ?>">
                                <span class="fa fa fa-bullhorn icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">INFO DAN REQ</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="<?= base_url('trend'); ?>">
                                <span class="fa fa-line-chart icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">TREND TICKET</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <!-- <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert Backend</a>
                                                        <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                        <a href="#" class="dropdown-item">Contact Support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <!-- <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/img/contact/1.jpg'); ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/img/contact/4.jpg'); ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/img/contact/3.jpg'); ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/img/contact/2.jpg'); ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li> -->
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="<?= base_url('assets/img/product/pro4.jpg'); ?>" alt="" />
                                                        <span class="admin-name">Syahputra</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
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
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

            <?= $this->renderSection('content'); ?>
            <br>
            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © TENESA 2022.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <script>
            // $(".sidebar-nav li a").on("click", function() {
            //     $(".nav").find(".active").removeClass("active");
            //     $(this).parent().addClass("active");
            // });
        </script>

        <!-- jquery
		============================================ -->
        <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- wow JS
		============================================ -->
        <!-- <script src="<?= base_url('assets/js/wow.min.js'); ?>"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="<?= base_url('assets/js/jquery-price-slider.js'); ?>"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="<?= base_url('assets/js/jquery.meanmenu.js'); ?>"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
        <!-- sticky JS
		============================================ -->
        <script src="<?= base_url('assets/js/jquery.sticky.js'); ?>"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="<?= base_url('assets/js/jquery.scrollUp.min.js'); ?>"></script>
        <!-- counterup JS
		============================================ -->
        <script src="<?= base_url('assets/js/counterup/jquery.counterup.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/counterup/waypoints.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/counterup/counterup-active.js'); ?>"></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="<?= base_url('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/scrollbar/mCustomScrollbar-active.js'); ?>"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="<?= base_url('assets/js/metisMenu/metisMenu.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/metisMenu/metisMenu-active.js'); ?>"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="<?= base_url('assets/js/morrisjs/raphael-min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/morrisjs/morris.js'); ?>"></script>
        <script src="<?= base_url('assets/js/morrisjs/morris-active.js'); ?>"></script>

        <!-- morrisjs JS
		============================================ -->
        <script src="<?= base_url('assets/js/sparkline/jquery.sparkline.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/sparkline/jquery.charts-sparkline.js'); ?>"></script>
        <script src="<?= base_url('assets/js/sparkline/sparkline-active.js'); ?>"></script>
        <!-- calendar JS
		============================================ -->
        <script src="<?= base_url('assets/js/calendar/moment.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/calendar/fullcalendar.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/calendar/fullcalendar-active.js'); ?>"></script>
        <!-- touchspin JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/touchspin/touchspin-active.js"></script>
        <!-- colorpicker JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/colorpicker/jquery.spectrum.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/colorpicker/color-picker-active.js"></script>
        <!-- datapicker JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/datapicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url(); ?>/assets/js/datapicker/datepicker-active.js"></script>
        <!-- input-mask JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/input-mask/jasny-bootstrap.min.js"></script>
        <!-- chosen JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/chosen/chosen.jquery.js"></script>
        <script src="<?= base_url(); ?>/assets/js/chosen/chosen-active.js"></script>
        <!-- select2 JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/select2/select2.full.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/select2/select2-active.js"></script>
        <!-- rangle-slider JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/rangle-slider/rangle-active.js"></script>
        <!-- knob JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/knob/jquery.knob.js"></script>
        <script src="<?= base_url(); ?>/assets/js/knob/knob-active.js"></script>
        <!-- form validate JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/form-validation/jquery.form.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/form-validation/jquery.validate.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/form-validation/form-active.js"></script>
        <!-- dropzone JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/dropzone/dropzone.js"></script>
        <!-- data table JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/data-table/bootstrap-table.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/tableExport.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/data-table-active.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/bootstrap-table-editable.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/bootstrap-editable.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/bootstrap-table-resizable.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/colResizable-1.5.source.js"></script>
        <script src="<?= base_url(); ?>/assets/js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/editable/jquery.mockjax.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/mock-active.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/select2.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/moment.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/bootstrap-datetimepicker.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/bootstrap-editable.js"></script>
        <script src="<?= base_url(); ?>/assets/js/editable/xediable-active.js"></script>
        <!-- Charts JS
		============================================ -->
        <script src="<?= base_url('assets/js/charts/Chart.js'); ?>"></script>
        <script src="<?= base_url('assets/js/charts/rounded-chart.js'); ?>"></script>
        <!-- tab JS
		============================================ -->
        <script src="<?= base_url(); ?>/assets/js/tab.js"></script>
        <!-- plugins JS
		============================================ -->
        <script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
        <!-- main JS
		============================================ -->
        <script src="<?= base_url('assets/js/main.js'); ?>"></script> -->
        <!-- tawk chat JS
		============================================ -->
        <script src="<?= base_url('assets/js/jquery-easing/jquery.easing.min.js'); ?>"></script>

</body>

</html>