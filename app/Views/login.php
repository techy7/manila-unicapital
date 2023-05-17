<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<!-- START PAGE-CONTAINER -->
<div class="page-container ">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
    <!-- START PAGE CONTENT -->
    <div class="content ">
        <!-- START CONTAINER FLUID -->
        <div class=" container p-t-50 container-fixed-lg">
        <!-- START BREADCRUMB -->
        <div class="row row-center">
            <div class="col-xl-6 col-lg-6 col-md-height col-middle">
            
            <!-- START card -->
            <div class="card">
                <div class="card-body">
                <h2 class="text-center"><?php echo SITE_NAME; ?></h2>
                <?php if(session()->getFlashdata('login_error_message')): ?>
                <div class="alert alert-danger m-b-0">
                    <?php echo session()->getFlashdata('login_error_message'); ?>
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
                            'placeholder' => lang('Login.fieldPlaceholder.forEmployeeId'),
                            'required' => true
                        ]); ?>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                        <label><?php echo lang('Login.fieldLabel.password'); ?></label>
                        <?php echo form_password([
                            'class' => 'form-control',
                            'name' => 'password',
                            'placeholder' => lang('Login.fieldPlaceholder.forPassword'),
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
    </div>
    <!-- END PAGE CONTENT -->
    <!-- START COPYRIGHT -->
    <!-- START CONTAINER FLUID -->
    <!-- START CONTAINER FLUID -->
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
<?= $this->endSection() ?>

<?= $this->section('page-header') ?>
<link class="child-stylesheet" href="templates/css/login.css" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<script src="templates/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="templates/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="templates/assets/js/form_layouts.js" type="text/javascript"></script>
<script src="templates/assets/js/scripts.js" type="text/javascript"></script>
<?= $this->endSection() ?>