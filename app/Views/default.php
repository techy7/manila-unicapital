<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title><?php echo SITE_NAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <meta content="Arwin Abatayo" name="author" />
        <link href="<?php echo base_url('templates/assets/plugins/pace/pace-theme-flash.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('templates/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url('templates/assets/plugins/jquery-scrollbar/jquery.scrollbar.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <?= $this->renderSection('page-require-header') ?>
        <link class="main-stylesheet" href="<?php echo base_url('templates/pages/css/themes/modern.css'); ?>" rel="stylesheet" type="text/css" />
        <link class="child-stylesheet" href="<?php echo base_url('templates/css/header.css'); ?>" rel="stylesheet" type="text/css" />
        <?= $this->renderSection('page-header') ?>
    </head>
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START PAGE-CONTAINER -->
    <div class="header p-r-0 bg-primary">

        <div class="header-inner header-md-height">
            <a class="btn-link toggle-sidebar d-lg-none text-white sm-p-l-0 btn-icon-link" data-toggle="horizontal-menu" href="#"><i class="pg-icon">menu</i></a>
            <div class="">
                <a href="<?php echo base_url('/'); ?>"><div class="brand inline no-border d-sm-inline-block"><img alt="logo" data-src="<?php echo base_url('templates/assets/img/logo_white.png'); ?>" data-src-retina="<?php echo base_url('templates/assets/img/logo_white_2x.png'); ?>" height="22" src="<?php echo base_url('templates/assets/img/logo_white.png'); ?>" width="78"></div></a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="dropdown pull-left p-r-10 fs-14 d-lg-inline-block d-none text-white">
                    <button aria-expanded="false" aria-haspopup="true" aria-label="profile dropdown" class="profile-dropdown-toggle" data-toggle="dropdown" type="button"><?php echo $session_data['name']; ?></button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a class="dropdown-item" href="<?php echo base_url('profile'); ?>"><span><?php echo lang('Default.profileDropdown.signedInAs'); ?><br><b><?php echo $session_data['name']; ?></b></span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('profile'); ?>"><?php echo lang('Default.profileDropdown.yourProfile'); ?></a>
                        <a class="dropdown-item" href="<?php echo base_url('profile/activity'); ?>"><?php echo lang('Default.profileDropdown.yourActivity'); ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url('help'); ?>"><?php echo lang('Default.profileDropdown.help'); ?></a>
                        <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><?php echo lang('Default.profileDropdown.logout'); ?></a>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        
        <div class="bg-white">
            <div class="container">
                <div class="menu-bar header-sm-height" data-pages-init="horizontal-menu">
                    <a href="#" class="btn-link header-icon toggle-sidebar d-lg-none" data-toggle="horizontal-menu">
                        <i class="pg-icon"><?php echo lang('Default.close'); ?></i>
                    </a>
                    <ul>
                        <li>
                            <a href="javascript:;">
                                <span class="title"><?php echo lang('Default.headerMenu.siteAdministration'); ?></span>
                                <span class=" arrow"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('users'); ?>"><?php echo lang('Default.subMenuSiteAdministration.users'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('users/groups'); ?>"><?php echo lang('Default.subMenuSiteAdministration.usersGroup'); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('users/group_permissions'); ?>"><?php echo lang('Default.subMenuSiteAdministration.usersGroupPermissions'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container ">
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
                <div class="bg-white">
                    <div class="container">
                        <?php echo $breadcrumbs; ?>
                    </div>
                </div>
                <?= $this->renderSection('content') ?>
            </div>
            <!-- END PAGE CONTENT -->

            <!-- START COPYRIGHT -->
            <div class=" container   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small-text no-margin pull-left sm-pull-reset">
                        <span class="hint-text m-l-15"><?= SITE_VERSION ?></span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url('templates/assets/plugins/pace/pace.min.js'); ?>" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="<?php echo base_url('templates/assets/plugins/liga.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery/jquery-3.2.1.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/modernizr.custom.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-ui/jquery-ui.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/popper/umd/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery/jquery-easy.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-unveil/jquery.unveil.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-ios-list/jquery.ioslist.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-actual/jquery.actual.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('templates/assets/plugins/classie/classie.js'); ?>" type="text/javascript"></script>
    <?= $this->renderSection('page-require-scripts') ?>
    <!-- END VENDOR JS -->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('templates/pages/js/pages.min.js'); ?>" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <?= $this->renderSection('page-scripts') ?>
    <!-- END PAGE LEVEL JS -->
</body>
</html>