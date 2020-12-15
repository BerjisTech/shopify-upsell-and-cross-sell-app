<script type="text/javascript">
    jQuery(document).ready(function($) {
        var $table4 = jQuery("#table-4");
        $table4.DataTable({
            //'aLengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
                'print'
            ]
        });
        $table4.closest('.dataTables_wrapper').find('select').select2({
            minimumResultsForSearch: -1
        });
    });
</script>
<table class="datatable" id="table-4">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($shop as $key => $fetch) : ?>
            <tr>
                <td>
                    <?php ?>
                </td>
                <td></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/datatables.css" id="style-resource-1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css" id="style-resource-2">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css" id="style-resource-3">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker-bs3.css" id="style-resource-4">
<script src="<?php echo base_url(); ?>assets/js/datatables/datatables.js" id="script-resource-8"></script>
<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" id="script-resource-12"></script>