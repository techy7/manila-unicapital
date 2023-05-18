<?= $this->extend('default') ?>

<?= $this->section('content') ?>
<!-- START CONTAINER FLUID -->
<div class=" container p-t-30 container-fixed-lg">
    <h1>Hellow</h1>
</div>
<!-- END CONTAINER FLUID -->
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<script src="<?php echo base_url('templates/assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>