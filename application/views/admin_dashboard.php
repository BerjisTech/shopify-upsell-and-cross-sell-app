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
<table class="datatable" id="table-4" style="border: none;">
    <thead style="border: none;">
        <tr style="border: none;">
            <th style="border: none;"></th>
            <th style="border: none; flex-grow: 4;">Offer</th>
            <th style="border: none;">Status</th>
            <th style="border: none;">Action</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>