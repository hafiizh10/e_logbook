<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/icon/favicon.ico">

    <!-- Title Page-->
    <title>Login</title>

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

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= base_url('assets/') ?>images/icon/brand.png">
                            </a>
                        </div>
                        <div class="login-form">
                            <?= form_open('auth'); ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="au-input au-input--full" type="username" name="username" placeholder="Username" autofocus>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
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
<!-- end document-->