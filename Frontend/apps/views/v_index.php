<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Transaksi</title>
        <base href="<?php echo base_url() ?>">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

        

        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/jszip/jszip.min.js"></script>
        <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="assets/dist/js/demo.js"></script>
        <!-- bs-custom-file-input -->
        <script src="assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- Select2 -->
        <script src="assets/plugins/select2/js/select2.full.min.js"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
        <!-- InputMask -->
        <script src="assets/plugins/moment/moment.min.js"></script>
        <script src="assets/plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap color picker -->
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Bootstrap Switch -->
        <script src="assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <!-- BS-Stepper -->
        <script src="assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
        <!-- dropzonejs -->
        <script src="assets/plugins/dropzone/min/dropzone.min.js"></script>     
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
            <?php include 'header.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include 'aside.php'; ?>
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php include $konten.'.php'; ?>
                </section><!-- /.content -->
            </div><!-- /.right-side -->   
        </div><!-- ./wrapper -->
    </body>
</html>  