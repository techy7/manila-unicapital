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
                    <h2 class="m-t-0 m-b-0"><?php echo lang('Users.users'); ?></h2>
                </div>
                <div class="pull-right">
                    <div class="col-xs-12 m-b-20 d-flex justify-content-end">
                        <a class="btn btn-primary btn-cons" href="<?php echo base_url('users/add'); ?>"><i class="pg-icon">add</i><?php echo lang('Users.addNewUser'); ?></a>
                    </div>
                    <div class="col-xs-12">
                        <input class="form-control pull-right" id="search-table" placeholder="<?php echo lang('Users.searchUser'); ?>" type="text">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="usersTable">
                    <thead>
                        <tr>
                            <th><?php echo lang('Users.userLabels.employeeId'); ?></th>
                            <th><?php echo lang('Users.userLabels.userGroupName'); ?></th>
                            <th><?php echo lang('Users.userLabels.name'); ?></th>
                            <th><?php echo lang('Users.userLabels.email'); ?></th>
                            <th><?php echo lang('Users.userLabels.status'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if ($users): ?>
                        <?php foreach ($users as $user): ?>
                        <tr data-target="<?php echo base_url('users/' . $user->employee_id); ?>">
                            <td class="v-align-middle semi-bold"><?= esc($user->employee_id); ?></td>
                            <td class="v-align-middle"><?= esc($user->user_group_name); ?></td>
                            <td class="v-align-middle"><?= esc($user->name); ?></td>
                            <td class="v-align-middle"><?= esc($user->email); ?></td>
                            <td class="v-align-middle"><?php echo $user->status ? lang('Users.userLabels.active') : lang('Users.userLabels.inactive'); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
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
<link href="<?php echo base_url('templates/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('templates/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('templates/assets/plugins/datatables-responsive/css/datatables.responsive.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-header') ?>
<link class="child-stylesheet" href="<?php echo base_url('templates/css/customer.css'); ?>" rel="stylesheet" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-require-scripts') ?>
<script src="<?php echo base_url('templates/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('templates/assets/plugins/datatables-responsive/js/datatables.responsive.js'); ?>" type="text/javascript"></script>
<?= $this->endSection() ?>

<?= $this->section('page-scripts') ?>
<script src="<?php echo base_url('templates/assets/js/scripts.js'); ?>" type="text/javascript"></script>
<script>
(function($) {

'use strict';

var responsiveHelper = undefined;
var breakpointDefinition = {
    tablet: 1024,
    phone: 480
};

var initTableCustomers = function() {
    var settings = {
        "sDom": "<t><'row'<p i>>",
        "destroy": true,
        "scrollCollapse": true,
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        },
        "iDisplayLength": 4
    };

    var table = $('#usersTable').DataTable(settings);

    // search box for table
    $('#search-table').keyup(function() {
        //table.fnFilter($(this).val());
        table.search(this.value).draw();
    });

    // clickable row
    $('#usersTable tbody tr').css('cursor','pointer');
    $('#usersTable tbody').on('click', 'tr', function(event) {
        //var data = table.row(this).data();
        //console(data[0]);
        //console($(this).data('target'));
        event.preventDefault();
        location.replace($(this).data('target'));
    });
}
initTableCustomers();

})(window.jQuery);
</script>
<?= $this->endSection() ?>