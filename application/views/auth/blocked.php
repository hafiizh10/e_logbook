<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/icon/favicon.ico">

    <title>Blocked</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/') ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/') ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/') ?>css/theme.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="card-body">
        <div class="alert alert-danger" role="alert">
            <h1 class="alert-heading">403!</h1>
            <h3>Access Forbidden!</h3>
            <p>Anda tidak mempunyai akses ke halaman ini</p>
            <hr>
            <form action="<?= site_url('user') ?>">
                <button class="btn btn-primary">Back to Dashboard</button>
            </form>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/') ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/') ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url('assets/') ?>vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url('assets/') ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url('assets/') ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>

</body>

</html>