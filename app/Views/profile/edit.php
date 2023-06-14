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
                                <div class="card-title"><?php echo lang('Profile.editProfile'); ?></div>
                            </div>
                            <?php echo form_open('profile/save', ['role' => 'form', 'autocomplete' => 'off', 'class' => 'p-t-0', 'id' => 'form-add-edit']); ?>
                            <div class="card-body p-t-0">
                                <h3><?php echo $user_data->name; ?></h3>
                                <?php echo form_hidden('id', $user_data->id); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label><strong><?php echo lang('Profile.profileLabels.employeeId'); ?></strong></label>
                                            <?php echo $user_data->employee_id; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label><?php echo lang('Profile.profileLabels.name'); ?></label>
                                            <?php echo form_input([
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'name' => 'name',
                                                'placeholder' => $user_data->name,
                                                'value' => $user_data->name,
                                                'required' => true
                                            ]); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label><?php echo lang('Profile.profileLabels.email'); ?></label>
                                            <?php echo form_input([
                                                'type' => 'text',
                                                'class' => 'form-control',
                                                'name' => 'email',
                                                'placeholder' => $user_data->email,
                                                'value' => $user_data->email,
                                                'required' => true
                                            ]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-icon-left m-r-5">
                                    <i class="pg-icon md-18">arrow_left</i><span><?php echo lang('Default.back'); ?></span>
                                </a>
                                <?php echo form_submit('submit', lang('Default.saveChanges'), [
                                    'class' => 'btn btn-primary btn-cons',
                                ]); ?>
                            </div>
                            <?php echo form_close(); ?>
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
<script src="<?php echo base_url('templates/assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/form_layouts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>