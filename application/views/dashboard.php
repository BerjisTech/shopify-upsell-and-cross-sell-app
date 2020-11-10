<div class="whole">
    <div class="juu">
        <div class="col-md-6 col-sm-8 clearfix" style="padding-top: 3vh;">
            <ul class="user-info pull-left pull-none-xsm">
                <li class="profile-info dropdown"><span class="btn btn-primary btn-sm btn-icon icon-right dropdown-toggle" data-toggle="dropdown"><i class="entypo-cog"></i>Settings</span>
                    <ul class="dropdown-menu">
                        <!-- Reverse Caret -->
                        <li class="caret"></li>
                        <!-- Profile sub-links -->
                        <li><a href="<?php echo base_url(); ?>settings/<?php echo $shop; ?>/<?php echo $token; ?>"><i class="entypo-user"></i>Offer settings </a></li>
                        <li><a href="#"><i class="entypo-mail"></i>Set up wizard </a></li>
                        <li><a href="#"><i class="entypo-calendar"></i>Subscription </a></li>
                        <li><a href="#"><i class="entypo-clipboard"></i>Catalog </a></li>
                    </ul>
                </li>
            </ul>
            <ul class="user-info pull-left pull-right-xs pull-none-xsm">
                <li><a href="<?php echo base_url(); ?>new_offer/<?php echo $shop; ?>/<?php echo $token; ?>"><span class="btn btn-success btn-sm btn-icon icon-right"><i class="entypo-plus"></i>New Offer</span></a></li>
                <li><a href="<?php echo base_url(); ?>stats/<?php echo $shop; ?>/<?php echo $token; ?>"><span class="btn btn-info btn-sm btn-icon icon-right"><i class="entypo-chart-line"></i>Stats</span></a></li>
            </ul>
        </div>
        <!-- Raw Links -->
        <div class="col-md-6 col-sm-4 clearfix hidden-xs">
            <ul class="list-inline links-list pull-right">
                <li class="dropdown language-selector hidden">Language: &nbsp;
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true"><img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16" height="16" /></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-de.png" width="16" height="16" /><span>Deutsch</span></a></li>
                        <li class="active"><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16" height="16" /><span>English</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-fr.png" width="16" height="16" /><span>François</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-al.png" width="16" height="16" /><span>Shqip</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-es.png" width="16" height="16" /><span>Español</span></a></li>
                    </ul>
                </li>
                <li class="sep"></li>
                <li><a href="#" data-toggle="chat" data-collapse-sidebar="1"><i class="entypo-chat"></i>Chat
                        <span class="badge badge-success chat-notifications-badge is-hidden">0</span></a>
                </li>
                <li class="sep"></li>
                <li class="btn btn-primary btn-sm btn-icon icon-right">Need help <i class="entypo-help right"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="mwili">
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
        <table class="table table-bordered datatable" id="table-4">
            <thead>
                <tr>
                    <th>Offer ID</th>
                    <th>Offer</th>
                    <th>Active</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($offer as $key => $fetch) : ?>
                    <tr>
                        <td style="vertical-align: middle; text-align: center;"><?php echo $key; ?></td>
                        <td style="vertical-align: middle;">
                            <span style="font-weight: bold;">
                                <?php
                                if ($fetch['offer'][0]['title'] == '') {
                                    echo '#' . $fetch['offer'][0]['offer_id'];
                                } else {
                                    echo $fetch['offer'][0]['title'];
                                }
                                ?> : Offer
                                <?php
                                $products = $fetch['products'];
                                $total_products = count($products);

                                if ($total_products == 1) {
                                    $product_id = $products[0]['product'];
                                    $product_name = $this->Shopify->shopify_call($token, $shop, '/admin/api/2020-04/products/' . $product_id . '.json', array('fields' => 'title'), 'GET');
                                    $product_name = json_decode($product_name['response'], true);
                                    echo $product_name['product']['title'];
                                } else {
                                    foreach ($products as $key => $value) {
                                        $product_id = $products[$key]['product'];
                                        $product_name = $this->Shopify->shopify_call($token, $shop, '/admin/api/2020-04/products/' . $product_id . '.json', array('fields' => 'title'), 'GET');
                                        $product_name = json_decode($product_name['response'], true);
                                        if ($key == '0') {
                                            echo $product_name['product']['title'];
                                        } else if ($key == count($products) - 1) {
                                            echo ' and ' . $product_name['product']['title'];
                                        } else {
                                            echo ', ' . $product_name['product']['title'];
                                        }
                                    }
                                }
                                ?>
                            </span>
                            <ul style="list-style: none">
                                <li>
                                    <?php

                                    if (count($fetch['blocks']) == 0) {
                                        echo 'To every customer';
                                    } else {
                                        // $conditions = $fetch['conditions'];
                                        $blocks = $fetch['blocks'];

                                        foreach ($blocks as $k => $v) {
                                            $rule = $v['rule'];
                                            $bid = $v['bid'];
                                            $oid = $v['oid'];

                                            if ($rule == 'ALL') {
                                                $connector = 'AND';
                                            }
                                            if ($rule == 'ANY') {
                                                $connector = 'OR';
                                            }

                                            $conditions = $fetch['conditions'];
                                            foreach ($conditions as $ck => $cv) {

                                                if ($cv['bid'] == $bid && $cv['oid'] == $oid) {
                                                    $condition_type = $cv['type'];

                                                    if ($ck == '0') {
                                                        $prepend = 'When ';
                                                        $append = '<br />';
                                                    } else if ($ck == count($conditions) - 1) {
                                                        $prepend = '<strong>' . $connector . '</strong> ';
                                                        $append = '<br />';
                                                    } else {
                                                        $prepend = '<strong>' . $connector . '</strong> ';
                                                        $append = '<br />';
                                                    }

                                                    if ($condition_type == 'oc1' || $condition_type == 'oc2' || $condition_type == 'oc3') {
                                                        $quantity = $cv['quantity'];
                                                        $type = $cv['type'];
                                                        $content = $cv['content'];

                                                        if ($condition_type == 'oc1') {
                                                            echo $prepend . 'Cart has at least ' . $quantity . ' ' . $content . $append;
                                                        }
                                                        if ($condition_type == 'oc2') {
                                                            echo $prepend . 'Cart has at most ' . $quantity . ' ' . $content . $append;
                                                        }
                                                        if ($condition_type == 'oc3') {
                                                            echo $prepend . 'Cart has exactly ' . $quantity . ' ' . $content . $append;
                                                        }
                                                    }

                                                    if ($condition_type == 'oc4') {
                                                        $type = $cv['type'];
                                                        $content = $cv['content'];

                                                        echo $prepend . 'Cart does not have any ' . $content . $append;
                                                    }

                                                    if ($condition_type == 'oc5' || $condition_type == 'oc6' || $condition_type == 'oc7' || $condition_type == 'oc8') {
                                                        if ($condition_type == 'oc6') {
                                                            echo $prepend . 'Cart total is at least ' . $cv['amount'] . ' cents' . $append;
                                                        }
                                                        if ($condition_type == 'oc6') {
                                                            echo $prepend . 'Cart total is at most ' . $cv['amount'] . ' cents' . $append;
                                                        }
                                                        if ($condition_type == 'oc7') {
                                                            echo $prepend . 'Customer is located in ' . $cv['country'] . $append;
                                                        }
                                                        if ($condition_type == 'oc8') {
                                                            echo $prepend . 'Customer is not located in ' . $cv['country'] . $append;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }

                                    ?>
                                </li>
                            </ul>
                        </td>
                        <td style="vertical-align: middle;">
                            <span class="col-xs-12 status">
                                <label class="switch">
                                    <input onchange="activeStat(<?php echo $key; ?>, $(this));" class="switcheck offer_status" type="checkbox" value="<?php if ($fetch['offer'][0]['status'] == '') {
                                                                                                                                                            echo 0;
                                                                                                                                                        } else {
                                                                                                                                                            echo 1;
                                                                                                                                                        } ?>" checked>
                                    <span class="slidr round"></span>
                                </label>
                            </span>
                        </td>
                        <td style="text-align: center; vertical-align: middle;">
                            <ul class="user-info">
                                <li class="profile-info dropdown"><span class="btn btn-primary btn-icon icon-right dropdown-toggle" data-toggle="dropdown"><i class="entypo-cog"></i>ACTIONS</span>
                                    <ul class="dropdown-menu">
                                        <!-- Reverse Caret -->
                                        <li class="caret"></li>
                                        <!-- Profile sub-links -->
                                        <li><a href="<?php echo base_url(); ?>edit_offer/<?php echo $shop; ?>/<?php echo $token; ?>/<?php echo $fetch['offer'][0]['offer_id']; ?>"><i class="entypo-pencil"></i>Edit</a></li>
                                        <li><a href="<?php echo base_url(); ?>offer_stats/<?php echo $shop; ?>/<?php echo $fetch['offer'][0]['offer_id']; ?>">
                                                <i class="entypo-chart-line"></i>Stats</a></li>
                                        <li><a href="#"><i class="entypo-trash"></i>Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .whole {
        display: block;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0px;
        left: 0px;
    }

    .juu {
        display: table;
        width: 100vw;
        height: 10vh;
        background: white;
        position: absolute;
        vertical-align: middle;
        top: 0px;
        left: 0px;
    }

    .mwili {
        top: 10vh;
        display: block;
        width: 100vw;
        height: 90vh;
        position: absolute;
        overflow-y: auto;
        background: #ffffff;
    }
</style>

<script>
    function activeStat(o, a) {
        console.log(o);
        console.log(a);
        console.log(a.val());
        if (a.checked) {
            a.val(0);
        } else {
            a.val(1);
        }
    }
</script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/datatables.css" id="style-resource-1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css" id="style-resource-2">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css" id="style-resource-3">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker-bs3.css" id="style-resource-4">
<script src="<?php echo base_url(); ?>assets/js/datatables/datatables.js" id="script-resource-8"></script>
<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" id="script-resource-12"></script>