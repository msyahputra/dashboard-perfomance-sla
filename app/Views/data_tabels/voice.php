<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <button class="btn btn-success widget-btn-1" onclick="add_book()"><i class=" fa fa-plus"></i> ADD DATA</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data Table</span>
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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
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
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Task</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="phone" data-editable="true">Phone</th>
                                        <th data-field="complete">Completed</th>
                                        <th data-field="task" data-editable="true">Task</th>
                                        <th data-field="date" data-editable="true">Date</th>
                                        <th data-field="price" data-editable="true">Price</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>admin@uttara.com</td>
                                        <td>+8801962067309</td>
                                        <td class="datatable-ct"><span class="pie">1/6</span>
                                        </td>
                                        <td>10%</td>
                                        <td>Jul 14, 2017</td>
                                        <td>$5455</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td class="datatable-ct"><span class="pie">230/360</span>
                                        </td>
                                        <td>70%</td>
                                        <td>fab 2, 2017</td>
                                        <td>$8756</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>Software Development</td>
                                        <td>gumre@hash.com</td>
                                        <td>+8801862067308</td>
                                        <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                        </td>
                                        <td>5%</td>
                                        <td>Seb 5, 2017</td>
                                        <td>$9875</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>4</td>
                                        <td>Woocommerce</td>
                                        <td>kyum@frok.com</td>
                                        <td>+8801962066547</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Oct 10, 2017</td>
                                        <td>$3254</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>5</td>
                                        <td>Joomla</td>
                                        <td>jams@game.com</td>
                                        <td>+8801962098745</td>
                                        <td class="datatable-ct"><span class="pie">200,133</span>
                                        </td>
                                        <td>80%</td>
                                        <td>Nov 20, 2017</td>
                                        <td>$58745</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>6</td>
                                        <td>Wordpress</td>
                                        <td>flat@yem.com</td>
                                        <td>+8801962254781</td>
                                        <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                        </td>
                                        <td>30%</td>
                                        <td>Aug 25, 2017</td>
                                        <td>$789879</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>7</td>
                                        <td>Ecommerce</td>
                                        <td>hasan@wpm.com</td>
                                        <td>+8801962254863</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>July 17, 2017</td>
                                        <td>$21424</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>8</td>
                                        <td>Android Apps</td>
                                        <td>ATM@devep.com</td>
                                        <td>+8801962875469</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>June 11, 2017</td>
                                        <td>$78978</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>9</td>
                                        <td>Prestashop</td>
                                        <td>presta@Prest.com</td>
                                        <td>+8801962067524</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>May 9, 2017</td>
                                        <td>$45645</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10</td>
                                        <td>Game Development</td>
                                        <td>Dev@game.com</td>
                                        <td>+8801962067457</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>April 5, 2017</td>
                                        <td>$4564545</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>11</td>
                                        <td>Angular Js</td>
                                        <td>gular@angular.com</td>
                                        <td>+8801962067124</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Dec 1, 2017</td>
                                        <td>$645455</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>12</td>
                                        <td>Opencart</td>
                                        <td>open@cart.com</td>
                                        <td>+8801962067587</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Jan 6, 2017</td>
                                        <td>$78978</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>13</td>
                                        <td>Education</td>
                                        <td>john@example.com</td>
                                        <td>+8801962067471</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Feb 6, 2016</td>
                                        <td>$456456</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>14</td>
                                        <td>Construction</td>
                                        <td>mary@example.com</td>
                                        <td>+8801962012457</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Jan 6, 2016</td>
                                        <td>$87978</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>15</td>
                                        <td>Real Estate</td>
                                        <td>july@example.com</td>
                                        <td>+8801962067309</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Dec 1, 2016</td>
                                        <td>$454554</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>16</td>
                                        <td>Personal Regume</td>
                                        <td>john@example.com</td>
                                        <td>+8801962067306</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>May 9, 2016</td>
                                        <td>$564555</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>17</td>
                                        <td>Admin Template</td>
                                        <td>mary@example.com</td>
                                        <td>+8801962067305</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>June 11, 2016</td>
                                        <td>$454565</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>18</td>
                                        <td>FrontEnd</td>
                                        <td>july@example.com</td>
                                        <td>+8801962067304</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>May 9, 2015</td>
                                        <td>$456546</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>19</td>
                                        <td>Backend</td>
                                        <td>john@range.com</td>
                                        <td>+8801962067303</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Feb 9, 2014</td>
                                        <td>$564554</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>20</td>
                                        <td>Java Advance</td>
                                        <td>lamon@ghs.com</td>
                                        <td>+8801962067302</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>July 6, 2014</td>
                                        <td>$789889</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>21</td>
                                        <td>Jquery Advance</td>
                                        <td>hasad@uth.com</td>
                                        <td>+8801962067301</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Jun 6, 2013</td>
                                        <td>$4565656</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
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
<!-- Static Table End -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
    var save_method; //for save method string
    var table;

    function add_book() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_book(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        <?php header('Content-type: application/json'); ?>
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('public/index.php/book/ajax_edit/') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                console.log(data);

                $('[name="book_id"]').val(data.book_id);
                $('[name="book_isbn"]').val(data.book_isbn);
                $('[name="book_title"]').val(data.book_title);
                $('[name="book_author"]').val(data.book_author);
                $('[name="book_category"]').val(data.book_category);

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                alert('Error get data from ajax');
            }
        });
    }

    function save() {
        var url;
        if (save_method == 'add') {
            url = "<?php echo site_url('public/index.php/book/book_add') ?>";
        } else {
            url = "<?php echo site_url('public/index.php/book/book_update') ?>";
        }

        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                //if success close modal and reload ajax table
                $('#modal_form').modal('hide');
                location.reload(); // for reload a page
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
            }
        });
    }

    function delete_book(id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data from database
            $.ajax({
                url: "<?php echo site_url('public/index.php/book/book_delete') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                success: function(data) {

                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">QM-Score L0 Voice Form</h3>
            </div>
            <div class="modal-body form">
                <!-- Single pro tab review Start-->
                <div class="single-pro-review-area mt-t-30 mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-payment-inner-st">
                                    <ul id="myTabedu1" class="tab-review-design">
                                        <li class="active"><a href="#description">Basic Information</a></li>
                                        <li><a href="#reviews"> Account Information</a></li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content custom-product-edit">
                                        <div class="product-tab-list tab-pane fade active in" id="description">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="review-content-section">
                                                        <div id="dropzone1" class="pro-ad">
                                                            <form action="/upload" id="form" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <input name="timestep" type="text" class="form-control" placeholder="Timestamp">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_parner_qa" data-placeholder="Choose a Parner..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Perner QC/QA/Validator ...</option>
                                                                                <?php foreach ($parnerqa as $row) : ?>
                                                                                    <option value="<?= $row['parner']; ?>"><?= $row['parner']; ?> - <?= $row['full_name']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_parner_agent" data-placeholder="Choose a Parner..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Perner Agent ...</option>
                                                                                <?php foreach ($parneragent as $row) : ?>
                                                                                    <option value="<?= $row['parner']; ?>"><?= $row['parner']; ?> - <?= $row['full_name']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_parner_tl" data-placeholder="Choose a Parner..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Perner Team Leader ...</option>
                                                                                <?php foreach ($parnertl as $row) : ?>
                                                                                    <option value="<?= $row['parner']; ?>"><?= $row['parner']; ?> - <?= $row['full_name']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_parner_spv" data-placeholder="Choose a Parner..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Perner Supervisor ...</option>
                                                                                <?php foreach ($parnerspv as $row) : ?>
                                                                                    <option value="<?= $row['parner']; ?>"><?= $row['parner']; ?> - <?= $row['full_name']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_tenure_agent" data-placeholder="Choose a Tenure..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Tenure Agent ...</option>
                                                                                <?php foreach ($tenure as $row) : ?>
                                                                                    <option value="<?= $row['id_tenure']; ?>"><?= $row['tenure_agent']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_periode_tapping" data-placeholder="Choose a Periode..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Periode...</option>
                                                                                <?php foreach ($peridoe as $row) : ?>
                                                                                    <option value="<?= $row['id_periode']; ?>"><?= $row['periode_tapping']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="tanggal_interaksi_agent" id="date" type="date" class="form-control" placeholder="Tanggal Interaksi Agent">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="jam_interkasi_agent" id="settime" step="1" type="time" class="form-control" placeholder="Jam Interaksi Agent">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="durasi_handling_time" type="number" class="form-control" placeholder="Durasi Handling Time (detik)">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_periode_tapping" data-placeholder="Choose a Roster..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Roster Agent...</option>
                                                                                <?php foreach ($roster as $row) : ?>
                                                                                    <option value="<?= $row['id_roster']; ?>"><?= $row['roster_agent']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_periode_tapping" data-placeholder="Choose a Kategori Sample Tapping..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Kategori Sample Tapping...</option>
                                                                                <?php foreach ($sample as $row) : ?>
                                                                                    <option value="<?= $row['id_sample']; ?>"><?= $row['sample_tapping']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="jenis_tapping" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select Jenis Tapping...</option>
                                                                                <option value="Tapping Regular">Tapping Regular</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="no_telp" type="number" class="form-control" placeholder="Nomor Telepon/Akun SosMed/Akun eMail">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="kategori_interaksi_agent" class="form-control">
                                                                                <option value="none" selected="" disabled="">Kategori Interaksi Agent...</option>
                                                                                <option value="Informasi">Informasi</option>
                                                                                <option value="Permintaan">Permintaan</option>
                                                                                <option value="Komplain">Komplain</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_detail_interaksi" data-placeholder="Choose a Detail Interaksi Agent/CWC/KIP..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Detail Interaksi Agent/CWC/KIP...</option>
                                                                                <?php foreach ($detailinteraksi as $row) : ?>
                                                                                    <option value="<?= $row['id_detail_interaksi']; ?>"><?= $row['detail_interaksi']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="hold_call" type="text" class="form-control" placeholder="Hold Call">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="durasi_total_hold_call" type="text" class="form-control" placeholder="Durasi Total Hold Call (detik)">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_penyebab_handling" data-placeholder="Choose a Penyebab Durasi Handling Time Lama..." class="chosen-select" tabindex="-1">
                                                                                <option value="">Select Penyebab Durasi Handling Time Lama...</option>
                                                                                <?php foreach ($penyebabhandling as $row) : ?>
                                                                                    <option value="<?= $row['id_handling']; ?>"><?= $row['penyebab_handling_time']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="id_channel" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select Channel Interaksi...</option>
                                                                                <?php foreach ($channel as $row) : ?>
                                                                                    <option value="<?= $row['id_layanan']; ?>"><?= $row['layanan']; ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="id_interaksi" type="number" class="form-control" placeholder="ID Interaksi">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="postcode" id="postcode" type="text" class="form-control" placeholder="Postcode">
                                                                        </div>
                                                                        <div class="form-group alert-up-pd">
                                                                            <div class="dz-message needsclick download-custom">
                                                                                <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                                <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                                <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                                </p>
                                                                                <input name="imageico" class="hd-pro-img" type="text" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <input name="department" type="text" class="form-control" placeholder="Department">
                                                                        </div>
                                                                        <div class="form-group res-mg-t-15">
                                                                            <textarea name="description" placeholder="Description"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="gender" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select Gender</option>
                                                                                <option value="0">Male</option>
                                                                                <option value="1">Female</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="country" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select country</option>
                                                                                <option value="0">India</option>
                                                                                <option value="1">Pakistan</option>
                                                                                <option value="2">Amerika</option>
                                                                                <option value="3">China</option>
                                                                                <option value="4">Dubai</option>
                                                                                <option value="5">Nepal</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="state" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select state</option>
                                                                                <option value="0">Gujarat</option>
                                                                                <option value="1">Maharastra</option>
                                                                                <option value="2">Rajastan</option>
                                                                                <option value="3">Maharastra</option>
                                                                                <option value="4">Rajastan</option>
                                                                                <option value="5">Gujarat</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <select name="city" class="form-control">
                                                                                <option value="none" selected="" disabled="">Select city</option>
                                                                                <option value="0">Surat</option>
                                                                                <option value="1">Baroda</option>
                                                                                <option value="2">Navsari</option>
                                                                                <option value="3">Baroda</option>
                                                                                <option value="4">Surat</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="payment-adress">
                                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tab-list tab-pane fade" id="reviews">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="dropzone-pro mg-tb-30">
                                                        <h5>Upload File Excel Qm-Score.</h5>
                                                        <div id="dropzone1" class="multi-uploader-cs">
                                                            <form action="/upload" class="dropzone dropzone-custom needsclick" id="demo1-upload">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                                    <h2>Drop files here or click to upload.</h2>
                                                                    <p><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                                                    </p>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
<script>
    document.getElementById("settime").value = "13:24:00";
</script>
<?= $this->endSection(''); ?>