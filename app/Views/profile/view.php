<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<!-- START CONTAINER FLUID -->
<div class=" container p-t-30 container-fixed-lg">
    <!-- START MAIN ROW -->
    <div class="row">
        <!-- START card -->
        <div class="card card-transparent">
            <div class="card-header">
                <div class="card-title">
                    <h2 class="m-t-0 m-b-0"><?php echo lang('Profile.profile'); ?></h2>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header separator">
                                <div class="card-title"><?php echo lang('Profile.profileDetails'); ?></div>
                            </div>
                            <div class="card-body">
                                <h3><?php echo $user_data->name; ?></h3>
                                <p><?php echo lang('Profile.profileLabels.employeeId'); ?>: <?php echo $user_data->employee_id; ?></p>
                                <p><?php echo lang('Profile.profileLabels.email'); ?>: <?php echo mailto($user_data->email); ?></p>
                            </div>
                            <div class="card-footer text-right">
                                <a href="<?php echo base_url('profile/edit'); ?>" class="btn btn-primary btn-cons pull-right"><span><?php echo lang('Profile.editProfile'); ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END card -->
    </div>
    <!-- END MAIN ROW -->
</div>
<!-- END CONTAINER FLUID -->
<?= $this->endSection() ?>

<?= $this->section('page-require-header') ?>
<link href="<?php echo base_url('templates/assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-header') ?>
<link class="child-stylesheet" href="<?php echo base_url('templates/css/customer.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>