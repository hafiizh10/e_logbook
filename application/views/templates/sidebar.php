<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= base_url('assets/') ?>images/icon/brand.png" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                        <li>
                            <!-- QUERY MENU -->
                            <?php
                            $role_id = $this->session->userdata('role_id');
                            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = ?
                            ORDER BY `user_access_menu`.`menu_id` ASC 
                        ";
                            $menu = $this->db->query($queryMenu, array($role_id))->result_array();
                            ?>

                            <!-- LOOPING MENU -->
                            <?php foreach ($menu as $m) : ?>
                                <div class="sidebar-heading">
                                    <?= $m['menu']; ?>
                                </div>

                                <!-- SIAPKAN SUB-MENU SESUAI MENU -->

                                <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>

                                <?php foreach ($subMenu as $sm) : ?>
                                    <?php if ($title == $sm['title']) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title'] ?></span></a>
                        </li>
                    <?php endforeach; ?>

                <?php endforeach; ?>
                </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/') ?>images/icon/brand.png" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                        <li>
                            <!-- QUERY MENU -->
                            <?php
                            $role_id = $this->session->userdata('role_id');
                            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = ?
                            ORDER BY `user_access_menu`.`menu_id` ASC 
                        ";
                            $menu = $this->db->query($queryMenu, array($role_id))->result_array();
                            ?>

                            <!-- LOOPING MENU -->
                            <?php foreach ($menu as $m) : ?>
                                <div class="sidebar-heading">
                                    <?= $m['menu']; ?>
                                </div>

                                <!-- SIAPKAN SUB-MENU SESUAI MENU -->

                                <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>

                                <?php foreach ($subMenu as $sm) : ?>
                                    <?php if ($title == $sm['title']) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title'] ?></span></a>
                        </li>
                    <?php endforeach; ?>

                    <hr class="sidebar-divider mt-3">

                <?php endforeach; ?>
                </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $user['username'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $user['username'] ?></a>
                                                    </h5>
                                                    <span class="email"><?= $user['jabatan'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="<?= site_url('user') ?>">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= base_url('auth/logout'); ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->