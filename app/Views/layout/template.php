<!DOCTYPE html>
<html lang="en">

<head>
    <title>DKLIN LAUNDRY | <?= $title; ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/templateauth/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/templateauth/css/portal.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

</head>

<body class="app">
    <header class="app-header fixed-top">
        <!-- header inner -->
        <?= $this->include("layout/header") ?>

        <!-- sidebar -->
        <?= $this->include("layout/sidebar") ?>
    </header>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <!-- content dynamic -->
            <?= $this->renderSection("content") ?>
        </div>
        <!--//app-content-->

        <!-- footer -->
        <?= $this->include("layout/footer") ?>
    </div>
    <!--//app-wrapper-->

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Javascript -->
    <script src="assets/templateauth/plugins/popper.min.js"></script>
    <script src="assets/templateauth/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/templateauth/plugins/chart.js/chart.min.js"></script>
    <script src="assets/templateauth/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/templateauth/js/app.js"></script>

    <!-- Fontawesome 5 -->
    <script src="https://kit.fontawesome.com/09078660ee.js" crossorigin="anonymous"></script>

    <!-- Rupiah Format -->
    <script src="https://unpkg.com/@develoka/angka-rupiah-js/index.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>

</body>

</html>