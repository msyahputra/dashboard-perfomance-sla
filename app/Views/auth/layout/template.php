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
    <!-- colorpicker CSS
		============================================ -->
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


</head>

<body>
    <?= $this->renderSection('content'); ?>
    <script>
        $(".sidebar-nav li a").on("click", function() {
            $(".nav").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });
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