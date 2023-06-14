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
                    <h2 class="m-t-0 m-b-0"><?php echo lang('Profile.profileActivity'); ?></h2>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header separator">
                                <div class="card-title"><?php echo lang('Profile.profileActivityTrails'); ?></div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover demo-table-search table-responsive-block" id="usersTable">
                                    <thead>
                                        <tr>
                                            <th><?php echo lang('Profile.profileActivityTrailsLabel.activity'); ?></th>
                                            <th><?php echo lang('Profile.profileActivityTrailsLabel.properties'); ?></th>
                                            <th><?php echo lang('Profile.profileActivityTrailsLabel.date'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if ($user_activities): ?>
                                        <?php foreach ($user_activities as $activity): ?>
                                        <tr>
                                            <td class="v-align-middle semi-bold"><?= esc($activity['label']); ?></td>
                                            <td class="v-align-middle"><?= esc($activity['properties']); ?></td>
                                            <td class="v-align-middle"><?= esc($activity['created_at']); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right">
                                <a href="<?php echo base_url('profile'); ?>" class="btn btn-default btn-icon-left m-r-5">
                                    <i class="pg-icon md-18">arrow_left</i><span><?php echo lang('Default.back'); ?></span>
                                </a>
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