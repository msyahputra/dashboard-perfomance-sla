<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!--     Chart Periode    -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Qm-Score</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Voice</span>
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
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-chart">
                    <div class="analytics-content">
                        <div class="product-sales-chart">
                            <h5>Proses</h5>
                            <!-- <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                </div>
                            </div> -->
                            <br>
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="caption pro-sl-hd">
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 1</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 2</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 3</b></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <figure class="highcharts-figure-line" style="height: 200px;">
                                <div id="proses" style="height: 200px;"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-chart ">
                    <div class="analytics-content">
                        <div class="product-sales-chart">
                            <h5>Sikap</h5>
                            <!-- <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                </div>
                            </div> -->
                            <br>
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="caption pro-sl-hd">
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 1</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 2</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 3</b></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <figure class="highcharts-figure" style="height: 200px;">
                                <div id="sikap" style="height: 200px;"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-chart">
                    <div class="analytics-content">
                        <div class="product-sales-chart">
                            <h5>Solusi</h5>
                            <!-- <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                </div>
                            </div> -->
                            <br>
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="caption pro-sl-hd">
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 1</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 2</b></span>
                                        <span class="col-6 col-md-4 caption-subject text-center"><b>Periode 3</b></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <figure class="highcharts-figure" style="height: 200px;">
                                <div id="solusi" style="height: 200px;"></div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Achivement Periodik -->
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: white;">
            <br>
            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    <h1>Achievement <span class="table-project-n">Periodik</span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-sales-chart">
                        <br>
                        <figure class="highcharts-figure" style="height: 900px;">
                            <div id="achive_proses1" style="height: 300px;"></div>
                            <div id="achive_proses2" style="height: 300px;"></div>
                            <div id="achive_proses3" style="height: 300px;"></div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-sales-chart">
                        <br>
                        <figure class="highcharts-figure" style="height: 900px;">
                            <div id="achive_sikap1" style="height: 300px;"></div>
                            <div id="achive_sikap2" style="height: 300px;"></div>
                            <div id="achive_sikap3" style="height: 300px;"></div>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product-sales-chart">
                        <br>
                        <figure class="highcharts-figure" style="height: 900px;">
                            <div id="achive_solusi1" style="height: 300px;"></div>
                            <div id="achive_solusi2" style="height: 300px;"></div>
                            <div id="achive_solusi3" style="height: 300px;"></div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<!-- <div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Achievement <span class="table-project-n">Periodik</span></h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan=2>ID</th>
                                        <th class="text-center" rowspan=2>Parameter</th>
                                        <th class="text-center" rowspan=2>Bobot</th>
                                        <th class="text-warning text-center" colspan=2>P1</th>
                                        <th class="text-info text-center" colspan=2>P2</th>
                                        <th class="text-success text-center" colspan=2>P3</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Voice</th>
                                        <th class="text-center">Gap</th>
                                        <th class="text-center">Voice</th>
                                        <th class="text-center">Gap</th>
                                        <th class="text-center">Voice</th>
                                        <th class="text-center">Gap</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-warning">
                                        <td colspan="9">Proses Layanan</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Salam Pembuka</td>
                                        <td>2,50%</td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        <td></td>
                                        <td>-2,50%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>a. Verifikasi data pelanggan</td>
                                        <td>10,00%</td>
                                        </td>
                                        <td>9,46%</td>
                                        <td>-0,54%</td>
                                        </td>
                                        <td>9,73%</td>
                                        <td>-0,27%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>b. Identifikasi permasalahan pelanggan</td>
                                        <td>10.00%</td>
                                        </td>
                                        <td>8,39%</td>
                                        <td>-1,61%</td>
                                        </td>
                                        <td>8,48%</td>
                                        <td>-1,52%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Salam penutup.</td>
                                        <td>2,50%</td>
                                        </td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        </td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        </td>
                                        <td></td>
                                        <td>-2,50%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-warning">
                                        <td colspan="2">Total Proses layanan</td>
                                        <td>25,00%</td>
                                        </td>
                                        <td>22,63%</td>
                                        <td>-2,37%</td>
                                        </td>
                                        <td>22,96%</td>
                                        <td>-2,04%</td>
                                        </td>
                                        <td></td>
                                        <td>-25,00%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-info">
                                        <td colspan="9">Sikap Layanan</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Empati</td>
                                        <td>2,50%</td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        <td></td>
                                        <td>-2,50%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td>10,00%</td>
                                        </td>
                                        <td>9,46%</td>
                                        <td>-0,54%</td>
                                        </td>
                                        <td>9,73%</td>
                                        <td>-0,27%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>a. Membangun Keakraban dengan pelanggan</td>
                                        <td>10.00%</td>
                                        </td>
                                        <td>8,39%</td>
                                        <td>-1,61%</td>
                                        </td>
                                        <td>8,48%</td>
                                        <td>-1,52%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>b. Penggunaan Bahasa yang Tepat</td>
                                        <td>2,50%</td>
                                        </td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        </td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        </td>
                                        <td></td>
                                        <td>-2,50%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Penggunaan Hold dan Transfer yang Tepat</td>
                                        <td>2,50%</td>
                                        </td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        </td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        </td>
                                        <td></td>
                                        <td>-2,50%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-info">
                                        <td colspan="2">Total Sikap layanan</td>
                                        <td>15,00%</td>
                                        </td>
                                        <td>22,63%</td>
                                        <td>-2,37%</td>
                                        </td>
                                        <td>22,96%</td>
                                        <td>-2,04%</td>
                                        </td>
                                        <td></td>
                                        <td>-25,00%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-success">
                                        <td colspan="9">Solusi Layanan</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Mencatat Semua Informasi</td>
                                        <td>2,50%</td>
                                        <td>2,37%</td>
                                        <td>-0,13%</td>
                                        <td>2,32%</td>
                                        <td>-0,18%</td>
                                        <td></td>
                                        <td>-2,50%</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Menguasai Prosedur, Produk dan Aplikasi Layanan</td>
                                        <td>10,00%</td>
                                        </td>
                                        <td>9,46%</td>
                                        <td>-0,54%</td>
                                        </td>
                                        <td>9,73%</td>
                                        <td>-0,27%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Melakukan Edukasi kepada pelanggan</td>
                                        <td>10.00%</td>
                                        </td>
                                        <td>8,39%</td>
                                        <td>-1,61%</td>
                                        </td>
                                        <td>8,48%</td>
                                        <td>-1,52%</td>
                                        </td>
                                        <td></td>
                                        <td>-10.00%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-success">
                                        <td colspan="2">Total Solusi layanan</td>
                                        <td>60,00%</td>
                                        </td>
                                        <td>22,63%</td>
                                        <td>-2,37%</td>
                                        </td>
                                        <td>22,96%</td>
                                        <td>-2,04%</td>
                                        </td>
                                        <td></td>
                                        <td>-25,00%</td>
                                        </td>
                                    </tr>
                                    <tr class="text-fcr">
                                        <td colspan="2">Total</td>
                                        <td>100,00%</td>
                                        </td>
                                        <td>22,63%</td>
                                        <td>-2,37%</td>
                                        </td>
                                        <td>22,96%</td>
                                        <td>-2,04%</td>
                                        </td>
                                        <td></td>
                                        <td>-25,00%</td>
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
</div> -->
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
                                    <span class="caption-subject"><b>REKAPITULASI PENCAPAIAN PERFORMANCE BY SCORE</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <figure class="highcharts-figure">
                        <div id="range_pencapaian_qmscore"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                    <span class="caption-subject"><b>TOP 10 POPULASI NON CONFIRMITY</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <figure class="highcharts-figure">
                        <div id="top_nonconfirmity_qmscore"></div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<!-- <div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>TOP 3 TEMUAN KETIDAKSESUAIAN</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th rowspan=2>No</th>
                                        <th class="text-warning text-center" colspan=3>P1</th>
                                        <th class="text-info text-center" colspan=3>P2</th>
                                        <th class="text-success text-center" colspan=3>P3</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Parameter</th>
                                        <th class="text-center">Gap</th>
                                        <th class="text-center">Detail Problem</th>
                                        <th class="text-center">Parameter</th>
                                        <th class="text-center">Gap</th>
                                        <th class="text-center">Detail Problem</th>
                                        <th class="text-center">Parameter</th>
                                        <th class="text-center">Gap</th>
                                        <th class="text-center">Detail Problem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td>testing</td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td>testing</td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                        <td>b. Bersikap Positif dan Percaya Diri</td>
                                        <td></td>
                                        <td>Intonasi ragu-ragu, terbata-bata, pengucapan terlalu cepat, suara agent terdengar lemah dan
                                            suara agent kurang antusias serta artikulasi tidak jelas</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
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
    // chart Periode

    // periode 1
    var t10 = new Date("2022-05-10").getTime()
    // periode 2
    var t20 = new Date("2022-05-20").getTime()
    // periode 3
    var t31 = new Date("2022-05-31").getTime()

    var
        proses = [
            [t10, 25.00, "Periode 1"],
            [t20, 24.55],
            [t31, 23.00]
        ],
        sikap = [
            [t10, 15.00, "Periode 1"],
            [t20, 14.05],
            [t31, 14.80]
        ],
        solusi = [
            [t10, 60.00, "Periode 1"],
            [t20, 65.00],
            [t31, 67.80]
        ];




    Highcharts.chart('proses', {

        title: {
            text: ''
        },

        xAxis: {
            type: 'datetime',
            accessibility: {
                rangeDescription: ''
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
            valueSuffix: '%'
        },

        series: [{
            name: 'proses',
            data: proses,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, ]
    });

    Highcharts.chart('sikap', {

        title: {
            text: ''
        },

        xAxis: {
            type: 'datetime',
            accessibility: {
                rangeDescription: ''
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
            valueSuffix: '%'
        },

        series: [{
            name: 'sikap',
            data: sikap,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, ]
    });

    Highcharts.chart('solusi', {

        title: {
            text: ''
        },

        xAxis: {
            type: 'datetime',
            accessibility: {
                rangeDescription: ''
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
            valueSuffix: '%'
        },

        series: [{
            name: 'solusi',
            data: solusi,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            }
        }, ]
    });

    // // Achivement Periodik


    Highcharts.chart('achive_proses1', {
        chart: {
            type: 'bar',
        },
        title: {
            text: 'Proses Layanan'
        },
        subtitle: {
            text: 'Periode 1'
        },
        xAxis: {
            categories: ['Salam pembuka (Bobot 2.50%)', 'a. Verifikasi data pelanggan (Bobot 10.00%) ', 'b. Identifikasi permasalahan pelanggan (Bobot 10.00%)', 'Salam penutup (Bobot 2.50%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.42, 9.64, 9.20, 2.34]
        }, {
            name: 'Gap',
            data: [0.09, 0.36, 0.81, 0.17],

        }]
    });

    Highcharts.chart('achive_proses2', {
        chart: {
            type: 'bar',
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 2'
        },
        xAxis: {
            categories: ['Salam pembuka (Bobot 2.50%)', 'a. Verifikasi data pelanggan (Bobot 10.00%) ', 'b. Identifikasi permasalahan pelanggan (Bobot 10.00%)', 'Salam penutup (Bobot 2.50%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.42, 9.64, 9.20, 2.34]
        }, {
            name: 'Gap',
            data: [0.09, 0.36, 0.81, 0.17],

        }]
    });

    Highcharts.chart('achive_proses3', {
        chart: {
            type: 'bar',
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 3'
        },
        xAxis: {
            categories: ['Salam pembuka (Bobot 2.50%)', 'a. Verifikasi data pelanggan (Bobot 10.00%) ', 'b. Identifikasi permasalahan pelanggan (Bobot 10.00%)', 'Salam penutup (Bobot 2.50%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.42, 9.64, 9.20, 2.34]
        }, {
            name: 'Gap',
            data: [0.09, 0.36, 0.81, 0.17],

        }]
    });

    Highcharts.chart('achive_sikap1', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Sikap Layanan'
        },
        subtitle: {
            text: 'Periode 1'
        },
        xAxis: {
            categories: ['a. Empati (Bobot 3.00)', 'b. Bersikap Positif dan Percaya Diri (Bobot 3.00) ', 'a. Membangun Keakraban dengan pelanggan (Bobot 3.00)', 'b. Penggunaan Bahasa yang Tepat (Bobot 3.00)', 'Penggunaan Hold dan Transfer yang Tepat (Bobot 3.00)', 'Total Proses layanan']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.63, 0.32, 2.89, 1.53, 2.92]
        }, {
            name: 'Gap',
            data: [0.38, 2.68, 0.11, 1.48, 0.08]
        }],

    });

    Highcharts.chart('achive_sikap2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 2'
        },
        xAxis: {
            categories: ['a. Empati (Bobot 3.00)', 'b. Bersikap Positif dan Percaya Diri (Bobot 3.00) ', 'a. Membangun Keakraban dengan pelanggan (Bobot 3.00)', 'b. Penggunaan Bahasa yang Tepat (Bobot 3.00)', 'Penggunaan Hold dan Transfer yang Tepat (Bobot 3.00)', 'Total Proses layanan']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.63, 0.32, 2.89, 1.53, 2.92]
        }, {
            name: 'Gap',
            data: [0.38, 2.68, 0.11, 1.48, 0.08]
        }],

    });

    Highcharts.chart('achive_sikap3', {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 3'
        },
        xAxis: {
            categories: ['a. Empati (Bobot 3.00)', 'b. Bersikap Positif dan Percaya Diri (Bobot 3.00) ', 'a. Membangun Keakraban dengan pelanggan (Bobot 3.00)', 'b. Penggunaan Bahasa yang Tepat (Bobot 3.00)', 'Penggunaan Hold dan Transfer yang Tepat (Bobot 3.00)', 'Total Proses layanan']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [2.63, 0.32, 2.89, 1.53, 2.92]
        }, {
            name: 'Gap',
            data: [0.38, 2.68, 0.11, 1.48, 0.08]
        }],

    });

    Highcharts.chart('achive_solusi1', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Solusi Layanan'
        },
        subtitle: {
            text: 'Periode 1'
        },
        xAxis: {
            categories: ['Mencatat Semua Informasi (Bobot 20.00%)', 'Menguasai Prosedur, Produk dan Aplikasi Layanan (Bobot 20.00%) ', 'Melakukan Edukasi kepada pelanggan (Bobot 20.00%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [19.11, 19.65, 19.82]
        }, {
            name: 'Gap',
            data: [0.90, 0.36, 0.18]
        }],

    });

    Highcharts.chart('achive_solusi2', {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 2'
        },
        xAxis: {
            categories: ['Mencatat Semua Informasi (Bobot 20.00%)', 'Menguasai Prosedur, Produk dan Aplikasi Layanan (Bobot 20.00%) ', 'Melakukan Edukasi kepada pelanggan (Bobot 20.00%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [19.11, 19.65, 19.82]
        }, {
            name: 'Gap',
            data: [0.90, 0.36, 0.18]
        }],

    });

    Highcharts.chart('achive_solusi3', {
        chart: {
            type: 'bar'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Periode 3'
        },
        xAxis: {
            categories: ['Mencatat Semua Informasi (Bobot 20.00%)', 'Menguasai Prosedur, Produk dan Aplikasi Layanan (Bobot 20.00%) ', 'Melakukan Edukasi kepada pelanggan (Bobot 20.00%)']
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,

            backgroundColor: (
                (Highcharts.theme && Highcharts.theme.legendBackgroundColor) ||
                '#FFFFFF'),
            shadow: true
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            },
            series: {
                stacking: 'normal'
            }
        },
        series: [{
            name: 'Voice',
            data: [19.11, 19.65, 19.82]
        }, {
            name: 'Gap',
            data: [0.90, 0.36, 0.18]
        }],

    });


    // REKAPITULASI PENCAPAIAN PERFORMANCE BY SCORE

    Highcharts.chart('range_pencapaian_qmscore', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Click the slices to view'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            },
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        legend: {
            layout: 'vertical',
            verticalAlign: 'middle',
            align: 'right',
            x: -150,
            y: -20,
            symbolRadius: 2,
            useHTML: true,
            labelFormatter: function() {
                if (this.name === 'RANGE-QMSCORE') {
                    return `<span style="min-width: 380px; display:inline-block; border-bottom: 5px solid #b2b2b2;"><span style="float:left;">${this.name}</span><span style="float:right">COUNT</span></span>`
                }
                return `<span style="min-width: 380px; display:inline-block; border-bottom: 5px solid #ccc;"><span style="float:left; font-size:15px; font-weight:normal" >${this.name}</span><span style="float:right"; font-size:15px; >${this.y}</span></span>`
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name} </span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span> <br>{point.y:.2f}%</br>'
        },

        series: [{
            data: [{
                name: 'RANGE-QMSCORE',
                y: null
            }, ]
        }, {
            name: "Range Qm-Score",
            colorByPoint: true,
            data: [{
                    name: "Range < 80",
                    y: 2.27,
                    drilldown: "<_80"
                },
                {
                    name: "Range 80 - 84",
                    y: 10.23,
                    drilldown: "80_84"
                },
                {
                    name: "Range 85 - 89",
                    y: 11.36,
                    drilldown: "85_89"
                },
                {
                    name: "Range 90 - 94",
                    y: 47.73,
                    drilldown: "90_94"
                },
                {
                    name: "Range > 95",
                    y: 28.41,
                    drilldown: ">_95"
                }
            ]
        }],
        drilldown: {
            series: [{
                    name: "Range < 80",
                    id: "<_80",
                    data: [
                        [
                            "Ocha Binar",
                            67.88
                        ],
                        [
                            "Hayyik Kuswatun Hasanah",
                            77.88
                        ]
                    ]
                },
                {
                    name: "Range 80 - 84",
                    id: "80_84",
                    data: [
                        [
                            "v58.0",
                            1.02
                        ],
                        [
                            "v57.0",
                            7.36
                        ],
                        [
                            "v56.0",
                            0.35
                        ],
                        [
                            "v55.0",
                            0.11
                        ],
                        [
                            "v54.0",
                            0.1
                        ],
                        [
                            "v52.0",
                            0.95
                        ],
                        [
                            "v51.0",
                            0.15
                        ],
                        [
                            "v50.0",
                            0.1
                        ],
                        [
                            "v48.0",
                            0.31
                        ],
                        [
                            "v47.0",
                            0.12
                        ]
                    ]
                },
                {
                    name: "Range 85 - 89",
                    id: "85_89",
                    data: [
                        [
                            "v11.0",
                            6.2
                        ],
                        [
                            "v10.0",
                            0.29
                        ],
                        [
                            "v9.0",
                            0.27
                        ],
                        [
                            "v8.0",
                            0.47
                        ]
                    ]
                },
                {
                    name: "Range 90 - 94",
                    id: "90_94",
                    data: [
                        [
                            "v11.0",
                            3.39
                        ],
                        [
                            "v10.1",
                            0.96
                        ],
                        [
                            "v10.0",
                            0.36
                        ],
                        [
                            "v9.1",
                            0.54
                        ],
                        [
                            "v9.0",
                            0.13
                        ],
                        [
                            "v5.1",
                            0.2
                        ]
                    ]
                },
                {
                    name: "Range > 95",
                    id: ">_95",
                    data: [
                        [
                            "v16",
                            2.6
                        ],
                        [
                            "v15",
                            0.92
                        ],
                        [
                            "v14",
                            0.4
                        ],
                        [
                            "v13",
                            0.1
                        ]
                    ]
                }
            ]
        }
    });

    // Top 10
    Highcharts.chart('top_nonconfirmity_qmscore', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Top 10 Populasi Non Confirmity Agent'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [""],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (agent)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Temuan'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 150,
            floating: true,
            borderWidth: 1,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'A.D. DIAN KURNIAWAN',
            data: [44]
        }, {
            name: 'FAHMI ARDIYAN',
            data: [43]
        }, {
            name: 'HAYYIK USWATUN HASANAH',
            data: [39]
        }, {
            name: 'GHINA RIZQI ISLAMIATI',
            data: [39]
        }, {
            name: 'TIA INDRIANI',
            data: [35]
        }, {
            name: 'DESTYA EKA RAMADHANI',
            data: [34]
        }, {
            name: 'SANTA SINAGA',
            data: [34]
        }, {
            name: 'ELANSYAH SURYA RASIDI',
            data: [33]
        }, {
            name: 'ALIM MARTA PRIHATIN',
            data: [33]
        }, {
            name: 'ROBERT SETYAWAN',
            data: [30]
        }]
    });
</script>
<?= $this->endSection(''); ?>