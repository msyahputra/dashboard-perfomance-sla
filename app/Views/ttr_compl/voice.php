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
                                <li><a href="#">TTR Compliance</a> <span class="bread-slash">/</span>
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
                        <h2>Persentase Progress Tiket</h2>
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
                        <h2>Persentase Target Compliance Dan Not Compliance</h2>
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
<!-- <div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>REPORT PERFORMANCE TIKET</h1>
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
                                        <th class="text-center" rowspan=2>Satuan</th>
                                        <th class="text-center center" colspan=31>Tanggal</th>
                                        <th class="text-center" rowspan="2">SUM/AVG</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">1</th>
                                        <th class="text-center">2</th>
                                        <th class="text-center">3</th>
                                        <th class="text-center">4</th>
                                        <th class="text-center">5</th>
                                        <th class="text-center">6</th>
                                        <th class="text-center">7</th>
                                        <th class="text-center">8</th>
                                        <th class="text-center">9</th>
                                        <th class="text-center">10</th>
                                        <th class="text-center">11</th>
                                        <th class="text-center">12</th>
                                        <th class="text-center">13</th>
                                        <th class="text-center">14</th>
                                        <th class="text-center">15</th>
                                        <th class="text-center">16</th>
                                        <th class="text-center">17</th>
                                        <th class="text-center">18</th>
                                        <th class="text-center">19</th>
                                        <th class="text-center">20</th>
                                        <th class="text-center">21</th>
                                        <th class="text-center">22</th>
                                        <th class="text-center">23</th>
                                        <th class="text-center">24</th>
                                        <th class="text-center">25</th>
                                        <th class="text-center">26</th>
                                        <th class="text-center">27</th>
                                        <th class="text-center">28</th>
                                        <th class="text-center">29</th>
                                        <th class="text-center">30</th>
                                        <th class="text-center">31</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Open</td>
                                        <td>Tiket</td>
                                        <td>20</td>
                                        <td>17</td>
                                        <td>21</td>
                                        <td>49</td>
                                        <td>63</td>
                                        <td>80</td>
                                        <td>63</td>
                                        <td>24</td>
                                        <td>495</td>
                                        <td>455</td>
                                        <td>20</td>
                                        <td>17</td>
                                        <td>21</td>
                                        <td>49</td>
                                        <td>63</td>
                                        <td>80</td>
                                        <td>63</td>
                                        <td>24</td>
                                        <td>495</td>
                                        <td>455</td>
                                        <td>20</td>
                                        <td>17</td>
                                        <td>21</td>
                                        <td>49</td>
                                        <td>63</td>
                                        <td>80</td>
                                        <td>63</td>
                                        <td>24</td>
                                        <td>495</td>
                                        <td>455</td>
                                        <td>21</td>
                                        <td>234234</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Close</td>
                                        <td>Tiket</td>
                                        <td>14</td>
                                        <td>17</td>
                                        <td>16</td>
                                        <td>45</td>
                                        <td>54</td>
                                        <td>75</td>
                                        <td>67</td>
                                        <td>23</td>
                                        <td>383</td>
                                        <td>428</td>
                                        <td>447</td>
                                        <td>410</td>
                                        <td>368</td>
                                        <td>159</td>
                                        <td>58</td>
                                        <td>67</td>
                                        <td>403</td>
                                        <td>441</td>
                                        <td>435</td>
                                        <td>391</td>
                                        <td>191</td>
                                        <td>49</td>
                                        <td>401</td>
                                        <td>378</td>
                                        <td>403</td>
                                        <td>108</td>
                                        <td>63</td>
                                        <td>24</td>
                                        <td>495</td>
                                        <td>455</td>
                                        <td>21</td>
                                        <td>5831</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Closed 24 Jam</td>
                                        <td>Tiket</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>16</td>
                                        <td>44</td>
                                        <td>50</td>
                                        <td>67</td>
                                        <td>63</td>
                                        <td>20</td>
                                        <td>373</td>
                                        <td>394</td>
                                        <td>392</td>
                                        <td>368</td>
                                        <td>329</td>
                                        <td>132</td>
                                        <td>42</td>
                                        <td>58</td>
                                        <td>373</td>
                                        <td>336</td>
                                        <td>152</td>
                                        <td>33</td>
                                        <td>366</td>
                                        <td>343</td>
                                        <td>363</td>
                                        <td>83</td>
                                        <td>78</td>
                                        <td>118</td>
                                        <td>69</td>
                                        <td>29</td>
                                        <td>405</td>
                                        <td>495</td>
                                        <td>28</td>
                                        <td>5194</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>TTR Complince</td>
                                        <td>Tiket</td>
                                        <td>14</td>
                                        <td>16</td>
                                        <td>15</td>
                                        <td>43</td>
                                        <td>53</td>
                                        <td>75</td>
                                        <td>65</td>
                                        <td>21</td>
                                        <td>382</td>
                                        <td>422</td>
                                        <td>430</td>
                                        <td>397</td>
                                        <td>357</td>
                                        <td>152</td>
                                        <td>54</td>
                                        <td>64</td>
                                        <td>396</td>
                                        <td>429</td>
                                        <td>425</td>
                                        <td>377</td>
                                        <td>178</td>
                                        <td>45</td>
                                        <td>385</td>
                                        <td>368</td>
                                        <td>393</td>
                                        <td>103</td>
                                        <td>79</td>
                                        <td>49</td>
                                        <td>467</td>
                                        <td>480</td>
                                        <td>29</td>
                                        <td>218</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>% Tiket Closed 24 Jam</td>
                                        <td>%</td>
                                        <td>70.00</td>
                                        <td>94.12</td>
                                        <td>76.19</td>
                                        <td>89.80</td>
                                        <td>79.37</td>
                                        <td>83.75</td>
                                        <td>100.00</td>
                                        <td>83.33</td>
                                        <td>75.35</td>
                                        <td>86.59</td>
                                        <td>87.31</td>
                                        <td>98.4</td>
                                        <td>90.14</td>
                                        <td>130.69</td>
                                        <td>95.45</td>
                                        <td>77.33</td>
                                        <td>74.45</td>
                                        <td>87.95</td>
                                        <td>84.2</td>
                                        <td>96</td>
                                        <td>116.03</td>
                                        <td>94.29</td>
                                        <td>78.88</td>
                                        <td>135.04</td>
                                        <td>109.67</td>
                                        <td>176.6</td>
                                        <td>79.90</td>
                                        <td>49.80</td>
                                        <td>89.46</td>
                                        <td>20.48</td>
                                        <td>78.09</td>
                                        <td>95.04</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>% TTR Complience</td>
                                        <td>%</td>
                                        <td>100.00</td>
                                        <td>94.12</td>
                                        <td>93.75</td>
                                        <td>95.56</td>
                                        <td>98.15</td>
                                        <td>100.00</td>
                                        <td>97.01</td>
                                        <td>91.30</td>
                                        <td>99.74</td>
                                        <td>98.60</td>
                                        <td>96.20</td>
                                        <td>96.83</td>
                                        <td>97.01</td>
                                        <td>95.60</td>
                                        <td>93.10</td>
                                        <td>95.52</td>
                                        <td>98.26</td>
                                        <td>97.28</td>
                                        <td>97.70</td>
                                        <td>96.42</td>
                                        <td>93.19</td>
                                        <td>91.84</td>
                                        <td>96.01</td>
                                        <td>97.35</td>
                                        <td>97.52</td>
                                        <td>95.37</td>
                                        <td>89.90</td>
                                        <td>40.80</td>
                                        <td>89.06</td>
                                        <td>20.98</td>
                                        <td>70.09</td>
                                        <td>96.29</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>% Durasi Loker with MTTR</td>
                                        <td>%</td>
                                        <td>0.17</td>
                                        <td>0.00</td>
                                        <td>0.23</td>
                                        <td>0.14</td>
                                        <td>0.00</td>
                                        <td>0.55</td>
                                        <td>0.05</td>
                                        <td>0.33</td>
                                        <td>0.52</td>
                                        <td>1.64</td>
                                        <td>4.30</td>
                                        <td>1.12</td>
                                        <td>15.69</td>
                                        <td>3.45</td>
                                        <td>0.24</td>
                                        <td>0.31</td>
                                        <td>3.37</td>
                                        <td>1.37</td>
                                        <td>0.79</td>
                                        <td>3.15</td>
                                        <td>0.79</td>
                                        <td>19.87</td>
                                        <td>2.03</td>
                                        <td>3.18</td>
                                        <td>20.28</td>
                                        <td>1.03</td>
                                        <td>9.90</td>
                                        <td>4.80</td>
                                        <td>9.06</td>
                                        <td>2.98</td>
                                        <td>1.09</td>
                                        <td>3.25</td>
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

    var Open = [
            [t1, 20],
            [t2, 17],
            [t3, 21],
            [t4, 49],
            [t5, 63],
            [t6, 80],
            [t7, 63],
            [t8, 24],
            [t9, 495],
            [t10, 455],
            [t11, 449],
            [t12, 374],
            [t13, 365],
            [t14, 101],
            [t15, 44],
            [t16, 75],
            [t17, 501],
            [t18, 448],
            [t19, 443],
            [t20, 350],
            [t21, 131],
            [t22, 35],
            [t23, 464],
            [t24, 254],
            [t25, 331],
            [t26, 47],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        Close = [
            [t1, 14],
            [t2, 17],
            [t3, 16],
            [t4, 45],
            [t5, 54],
            [t6, 75],
            [t7, 67],
            [t8, 23],
            [t9, 383],
            [t10, 428],
            [t11, 447],
            [t12, 410],
            [t13, 368],
            [t14, 159],
            [t15, 58],
            [t16, 67],
            [t17, 403],
            [t18, 441],
            [t19, 435],
            [t20, 391],
            [t21, 191],
            [t22, 49],
            [t23, 401],
            [t24, 378],
            [t25, 403],
            [t26, 378],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        Close_24_jam = [
            [t1, 14],
            [t2, 16],
            [t3, 16],
            [t4, 44],
            [t5, 50],
            [t6, 67],
            [t7, 63],
            [t8, 20],
            [t9, 373],
            [t10, 394],
            [t11, 392],
            [t12, 368],
            [t13, 329],
            [t14, 132],
            [t15, 42],
            [t16, 58],
            [t17, 373],
            [t18, 394],
            [t19, 373],
            [t20, 336],
            [t21, 152],
            [t22, 33],
            [t23, 366],
            [t24, 343],
            [t25, 363],
            [t26, 83],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
        ],
        Ttr_complaine = [
            [t1, 14],
            [t2, 16],
            [t3, 15],
            [t4, 43],
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
            [t24, 368],
            [t25, 393],
            [t26, 103],
            [t27, 0],
            [t28, 0],
            [t29, 0],
            [t30, 0],
            [t31, 0],
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
            valueSuffix: ''
        },

        series: [{
            name: 'Open',
            data: Open,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
                valueSuffix: ' Tiket'
            }
        }, {
            name: 'Close',
            data: Close,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
                valueSuffix: ' Tiket'
            }
        }, {
            name: 'Closed 24 Jam',
            data: Close_24_jam,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
                valueSuffix: ' Tiket'
            }
        }, {
            name: 'TTR Complince',
            data: Ttr_complaine,
            zIndex: 1,
            marker: {
                fillColor: 'white',
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[0]
            },
            tooltip: {
                valueSuffix: ' Tiket'
            }
        }]
    });

    Highcharts.chart('rounde_total_ttr', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
        },
        title: {
            text: 'Persentase Progress Tiket Bulan May, 2022'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>'
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
                    format: '<b>{point.name}</b>: {point.y}'
                }
            }
        },
        series: [{
            name: 'Persentase',
            colorByPoint: true,
            data: [{
                name: '% Tiket Closed 24 Jam',
                y: 93.78,
                tooltip: {
                    valueSuffix: '%'
                }
            }, {
                name: '% TTR Complience',
                y: 93.31,
                tooltip: {
                    valueSuffix: '%'
                }
            }, {
                name: '% Durasi Loker with MTTR',
                y: 0.63,
                tooltip: {
                    valueSuffix: '%'
                }
            }]
        }]
    });

    Highcharts.chart('bar_mont_ttr', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Terget Complaince Dan Not Complaince'
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
                text: '%'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color : {series.color};padding:0">{series.name} : </td>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
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
            name: 'Complaince',
            data: [49.9]

        }, {
            name: 'Not Complaince',
            data: [83.6]

        }]
    });
</script>

<?= $this->endSection(''); ?>

<!-- analisa
improvment
plan
hasil -->