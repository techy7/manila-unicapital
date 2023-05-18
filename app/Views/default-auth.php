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
        <?= $this->renderSection('page-header') ?>
    </head>
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->
            <div class="content ">
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