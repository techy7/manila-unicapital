<?= $this->extend('default-auth') ?>

<?= $this->section('content') ?>
<!-- START CONTAINER FLUID -->
<div class=" container p-t-50 container-fixed-lg">
    <div class="row row-center">
        <div class="col-xl-6 col-lg-6 col-md-height col-middle">
            <!-- START card -->
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center"><?php echo SITE_NAME; ?></h2>
                    <?php if(session()->getFlashdata('login_error_message')): ?>
                    <div class="alert alert-danger m-b-0" role="alert">
                        <button aria-label="" class="close" data-dismiss="alert"></button>
                        <strong><?php echo lang('Default.warning'); ?>: </strong><?php echo session()->getFlashdata('login_error_message'); ?>
                    </div>
                    <?php endif; ?>
                    <?php echo form_open('login', ['role' => 'form', 'autocomplete' => 'off', 'class' => 'py-3', 'id' => 'form-login']); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label><?php echo lang('Login.fieldLabel.employeeId'); ?></label>
                                <?php echo form_input([
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'name' => 'employee_id',
                                    'id' => 'employee_id',
                                    'placeholder' => lang('Login.fieldPlaceholder.forEmployeeId'),
                                    'required' => true
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label><?php echo lang('Login.fieldLabel.passcode'); ?></label>
                                <?php echo form_password([
                                    'class' => 'form-control',
                                    'name' => 'passcode',
                                    'id' => 'passcode',
                                    'placeholder' => lang('Login.fieldPlaceholder.forPasscode'),
                                    'required' => true
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo form_submit('submit', lang('Login.fieldLabel.accessLogin'), [
                                'class' => 'btn btn-primary pull-right btn-lg btn-block',
                            ]); ?>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- END card -->
        </div>
    </div>
</div>
<!-- END CONTAINER FLUID -->
<?= $this->endSection() ?>

<?= $this->section('page-header') ?>
<link class="child-stylesheet" href="<?php echo base_url('templates/css/login.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<script src="<?php echo base_url('templates/assets/plugins/jquery-inputmask/jquery.inputmask.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>

<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/form_layouts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>