<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?= $this->element('components/set_title'); ?>
    <title><?= $this->fetch('title'); ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $this->request->getAttribute('webroot'); ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->element('components/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->element('components/sidebar'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?= $this->element('components/page-title'); ?>
            <!-- /.content-header -->

            <!-- Main content -->
            <?= $this->fetch('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <?= $this->element('components/control-sidebar'); ?>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?= $this->element('components/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="<?= $this->request->getAttribute('webroot'); ?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/demo.js"></script>
    <script src="<?= $this->request->getAttribute('webroot'); ?>dist/js/pages/dashboard3.js"></script>
</body>

</html>