<?php $tables = $this->db->list_tables();
foreach ($tables as $t_key => $table) {
    // echo '<h3>'.$table . '</h3><br />';
    // print_r($this->db->get($table)->result_array());
    // echo '<br /><br /><hr />';
    $data[$table] = $this->db->get($table)->result_array();
?>
    <br />
    <hr />
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table<?php echo $t_key; ?> = jQuery("#table-<?php echo $t_key; ?>");
            $table<?php echo $t_key; ?>.DataTable({
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
            $table<?php echo $t_key; ?>.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>
    <table class="datatable" id="table-<?php echo $t_key; ?>">
        <thead class="thead-dark">
            <?php $fields = $this->db->field_data($table); ?>
            <tr>
                <?php foreach ($fields as $field) { ?>
                    <th>
                        <?php echo $field->name;
                        // echo '<br/>';
                        // echo '<br/>';
                        // echo '<small>';
                        // echo $field->type;
                        // echo '<br/>';
                        // echo $field->max_length;
                        // echo '<br/>';
                        // echo $field->primary_key;
                        // echo '</small>';
                        ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data[$table] as $k => $f) { ?>
                <tr>
                    <?php foreach ($fields as $field) { ?>
                        <td>
                            <?php echo $f[$field->name]; ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>

    </table>
<?php } ?>