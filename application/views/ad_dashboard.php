<?php
$shop_details = $this->db->where('shop', $shop)->get('shops')->row();
$duka = $shop . '.myshopify.com';
?>
<style>
    table.dataTable {
        display: block !important;
    }

    pre {
        padding: 10px;
        border: 1px solid #3A3A3A;
        border-radius: 10px;
    }

    .dataTables_wrapper {
        background: #ffffff;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 10px;
    }

    .datatable *,
    .datatable,
    .dataTables_wrapper {
        border: none !important;
    }

    .datatable thead,
    .datatable tbody {
        display: table;
        border: none;
        width: 100%;
    }

    .datatable tr {
        display: flex;
        border: none;
        width: 100%;
        align-items: center;
        justify-content: space-between;
    }

    .datatable tbody tr {
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 0px 0px 10px rgba(6, 6, 6, 0.2);
    }

    .whats * {
        color: #ffffff;
        width: 100%;
        font-size: 18px;
    }

    .whole {
        display: block;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0px;
        left: 0px;
    }

    .mwili {
        top: 0vh;
        display: flex;
        width: 100vw;
        height: 100vh;
        position: fixed;
        background: #ffffff;
    }
</style>
<div class="whole">
    <div class="mwili">
        <div style="width: 50px; height: 100vh; background: #003471; display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center;">
            <span class="whats">
                <a title="Settings" href="<?php echo base_url(); ?>settings/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><span class="btn btn-primary entypo-cog"></span></a>
                <a style="display: none;" title="Setup Wizard" target="_BLANK" href="https://<?php echo $shop; ?>.myshopify.com?s=<?php echo sha1($shop); ?>&t=<?php echo $token; ?>"><span class="btn btn-primary entypo-feather"></span></a>
                <a title="Subscription" href="<?php echo base_url(); ?>subscription/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><span class="btn btn-primary entypo-credit-card"></span></a>
                <span><a title="New Offer" href="<?php echo base_url(); ?>new_offer/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><span class="btn btn-primary btn-sm"><i class="entypo-plus"></i></span></a></span>
                <span><a title="Stats" href="<?php echo base_url(); ?>stats/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><span class="btn btn-primary btn-sm"><i class="entypo-chart-line"></i></span></a></span>
                <?php if ($shop == 'berjis-tech-ltd' || $shop == 'sleek-apps') : ?>
                    <span><a title="Users" href="<?php echo base_url(); ?>users/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="btn btn-primary btn-sm entypo-users"></i></a></span>
                <?php endif; ?>
            </span>
        </div>
        <?php if ($this->db->where('shop', $shop)->get('offers')->num_rows() == 0 && $this->db->where('shop', $shop)->get('auto_collection')->num_rows() == 0) : ?>
            <div style="height: 100vh; overflow-y: auto; flex-grow: 4; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 0px; background: #F1F2F3;">

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2); height: auto !important;">
                            <h1 style="width: 100%; text-align: center;">
                                <img src="https://sleek-upsell.com/logo.png" style="width: 50px;">
                                Sleek Upsell
                            </h1>
                            <hr />
                            <h3>Welcome to the world of Sleek Upsell</h3>
                            <p style="font-size: 18px !important; color: #8797A8 !important; margin-bottom: 0px !important;">Thank you for choosing Sleek Upsell to boost your sales! the app has veerything in-built. No need for complex settings to get you started. Use the links below to create offers and adjust the visual design.</p>

                            <p style="font-size: 18px !important; color: #8797A8 !important; margin-bottom: 0px !important;">Need help? Be sure to drop an email and we will repsond in less than 20 minutes. Our support team thrives on customer happiness</p>

                            <iframe style="width: 90%; margin-left: 5%; height: 400px; border-radius: 10px; box-shadow: 0px 0px 10px rgb(3 3 3 / 60%);" src="https://www.youtube.com/embed/DCygIfcKoes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px 20px 20px 20px;">
                                <a href="<?php echo base_url(); ?>new_offer/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-lg btn-primary btn-icon icon-right"><i class="entypo-plus"></i>CREATE AN OFFER</a>
                                <a href="<?php echo base_url(); ?>settings/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-lg btn-primary btn-icon icon-right"><i class="entypo-cog"></i>GENERAL SETTINGS</a>
                                <span onclick="Beacon('open');" class="btn btn-lg btn-danger btn-icon icon-right"><i class="entypo-help"></i>SUPPORT</span>
                            </div>
                        </div>
                        <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2); height: auto !important; text-align: center;">
                            <a href="<?php echo base_url(); ?>auto_collection/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-lg btn-primary btn-icon icon-right col-xs-12"><i class="entypo-plus"></i>OR ACTIVATE COLLECTION OFFERS</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->db->where('shop', $shop)->get('offers')->num_rows() > 0 || $this->db->where('shop', $shop)->get('auto_collection')->num_rows() > 0) : ?>
                <div style="height: 100vh; overflow-y: auto; flex-grow: 4; padding-top: 10px; padding-left: 10%; padding-right: 10%; padding-bottom: 0px; background: #F1F2F3;">

                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            // Sparkline Charts
                            jQuery(".sales").sparkline([0,
                                <?php
                                foreach ($this->db->select('sum(price) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'purchase')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                                    echo $fetch['stat'] . ',';
                                }
                                ?>
                            ], {
                                type: 'line',
                                width: '100%',
                                height: '55',
                                lineColor: '#e8b51b',
                                fillColor: '',
                                lineWidth: 2,
                                spotColor: '#344e86',
                                minSpotColor: '#344e86',
                                maxSpotColor: '#344e86',
                                highlightSpotColor: '#344e86',
                                highlightLineColor: '#30487b',
                                spotRadius: 2,
                                drawNormalOnTop: true
                            });


                            jQuery(".customer-reach").sparkline([0,
                                <?php
                                foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'impression')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                                    echo $fetch['stat'] . ',';
                                }
                                ?>
                            ], {
                                type: 'line',
                                width: '100%',
                                height: '55',
                                lineColor: '#ec3b83',
                                fillColor: '',
                                lineWidth: 2,
                                spotColor: '#344e86',
                                minSpotColor: '#344e86',
                                maxSpotColor: '#344e86',
                                highlightSpotColor: '#344e86',
                                highlightLineColor: '#30487b',
                                spotRadius: 2,
                                drawNormalOnTop: true
                            });

                            jQuery(".all-time-sales").sparkline([0,
                                <?php
                                foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%d") as day, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'show')->group_by('day')->order_by('year', 'asc')->limit('30')->get('stats')->result_array() as $fetch) {
                                    echo $fetch['stat'] . ',';
                                }
                                ?>
                            ], {
                                type: 'line',
                                width: '100%',
                                height: '55',
                                lineColor: '#00acd6',
                                fillColor: '',
                                lineWidth: 2,
                                spotColor: '#344e86',
                                minSpotColor: '#344e86',
                                maxSpotColor: '#344e86',
                                highlightSpotColor: '#344e86',
                                highlightLineColor: '#30487b',
                                spotRadius: 2,
                                drawNormalOnTop: true
                            });
                        });
                    </script>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                                <h3><?php echo number_format($this->db->where('shop', $duka)->where('type', 'show')->get('stats')->num_rows()); ?></h3>
                                <p>Shown</p> <span class="all-time-sales"></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                                <h3><?php echo number_format($this->db->where('shop', $duka)->where('type', 'impression')->get('stats')->num_rows()); ?></h3>
                                <p>Customer impression</p> <span class="customer-reach"></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                                <h3>$ <?php echo number_format($this->db->select('sum(price) as total')->where('shop', $duka)->where('type', 'purchase')->get('stats')->row()->total); ?></h3>
                                <p>ATC</p> <span class="sales"></span>
                            </div>
                        </div>
                    </div>
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
                        <tbody style="border: none;">
                            <?php if ($shop_details->name == 'Premium') : ?>
                                <?php if ($this->db->where('shop', $shop)->get('auto_collection')->num_rows() > 0) : ?>
                                    <tr>
                                        <td style="vertical-align: middle; border: none; text-align: center; color: #FFFFFF; font-size: 1px;">0</td>
                                        <td style="vertical-align: middle; border: none; flex-grow: 4;">
                                            <span style="font-weight: bold;">
                                                Auto-collection offers
                                            </span>
                                        </td>
                                        <td style="vertical-align: middle; border: none;">
                                            <span class="col-xs-12 status">
                                                <label class="switch">
                                                    <input class="switcheck collection_status" type="checkbox" <?php if ($this->db->where('shop', $shop)->get('auto_collection')->row()->status == "1") {
                                                                                                                    echo "checked";
                                                                                                                }; ?> />
                                                    <span class="slidr round"></span>
                                                </label>
                                            </span>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; border: none;">
                                            <ul class="user-info" style="display: table; text-align: center; cursor: pointer;">
                                                <li class="profile-info dropdown"><span class="dropdown-toggle" data-toggle="dropdown"><i class="entypo-dot-3"></i></span>
                                                    <ul class="dropdown-menu pull-right">
                                                        <!-- Reverse Caret -->
                                                        <li class="caret"></li>
                                                        <!-- Profile sub-links -->
                                                        <li><a href="<?php echo base_url(); ?>auto_collection/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="entypo-pencil"></i>Edit</a></li>
                                                        <li><a href="<?php echo base_url(); ?>offer_stats/<?php echo $shop; ?>/collection?<?php echo $_SERVER['QUERY_STRING']; ?>">
                                                                <i class="entypo-chart-line"></i>Stats</a></li>
                                                        <li><a onclick="if(confirm('Are you sure you want to delete this offer?')){$.ajax({url: 'delete_ac/<?php echo $shop; ?>', method: 'POST', success: function(){window.location.reload(false)}})}"><i class="entypo-trash"></i>Delete</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php else : ?>
                                    <tr>
                                        <td style="vertical-align: middle; border: none; text-align: center; color: #FFFFFF; font-size: 1px;">0</td>
                                        <td style="vertical-align: middle; border: none; flex-grow: 4;">Collection based offers will allow you to automatically offer products from the same collections to your customers.
                                        </td>
                                        <td style="vertical-align: middle; border: none;"></td>
                                        <td style="text-align: center; vertical-align: middle; border: none;">
                                            <a href="<?php echo base_url(); ?>auto_collection/<?php echo $shop; ?>/<?php echo $token; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>" class="btn btn-lg btn-primary btn-icon icon-right col-xs-12"><i class="entypo-plus"></i>ACTIVATE COLLECTION OFFERS</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php
                            foreach ($offer as $key => $fetch) : ?>
                                <tr>
                                    <td style="vertical-align: middle; border: none; text-align: center; color: #FFFFFF; font-size: 1px;"><?php echo $key; ?></td>
                                    <td style="vertical-align: middle; border: none; flex-grow: 4;">
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
                                        <span class="triprev btn entypo-eye" onclick="$('.triggers<?php echo $fetch['offer'][0]['offer_id']; ?>').toggle(200)">Offer conditions</span>
                                        <ul class="triggers<?php echo $fetch['offer'][0]['offer_id']; ?>" style="list-style: none; display: none;">
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
                                                    foreach ($conditions as $ck => $cv) { ?>

                                                        <li>
                                                        <?php

                                                        if ($cv['bid'] == $bid && $cv['oid'] == $oid) {
                                                            $condition_type = $cv['type'];

                                                            if ($ck == '0') {
                                                                $prepend = 'When ';
                                                            } else if ($ck == count($conditions) - 1) {
                                                                $prepend = '<strong>' . $connector . '</strong> ';
                                                            } else {
                                                                $prepend = '<strong>' . $connector . '</strong> ';
                                                            }

                                                            if ($condition_type == 'oc1' || $condition_type == 'oc2' || $condition_type == 'oc3') {
                                                                $quantity = $cv['quantity'];
                                                                $type = $cv['type'];
                                                                $content = $cv['content'];

                                                                if ($condition_type == 'oc1') {
                                                                    echo $prepend . 'Cart has at least ' . $quantity . ' ' . $content;
                                                                }
                                                                if ($condition_type == 'oc2') {
                                                                    echo $prepend . 'Cart has at most ' . $quantity . ' ' . $content;
                                                                }
                                                                if ($condition_type == 'oc3') {
                                                                    echo $prepend . 'Cart has exactly ' . $quantity . ' ' . $content;
                                                                }
                                                            }

                                                            if ($condition_type == 'oc4') {
                                                                $type = $cv['type'];
                                                                $content = $cv['content'];

                                                                echo $prepend . 'Cart does not have any ' . $content;
                                                            }

                                                            if ($condition_type == 'oc5' || $condition_type == 'oc6' || $condition_type == 'oc7' || $condition_type == 'oc8') {
                                                                if ($condition_type == 'oc6') {
                                                                    echo $prepend . 'Cart total is at least ' . $cv['amount'] . ' cents';
                                                                }
                                                                if ($condition_type == 'oc6') {
                                                                    echo $prepend . 'Cart total is at most ' . $cv['amount'] . ' cents';
                                                                }
                                                                if ($condition_type == 'oc7') {
                                                                    echo $prepend . 'Customer is located in ' . $cv['country'];
                                                                }
                                                                if ($condition_type == 'oc8') {
                                                                    echo $prepend . 'Customer is not located in ' . $cv['country'];
                                                                }
                                                            }
                                                            if ($condition_type == 'oc9') {
                                                                echo $prepend . 'Cart contains at least ' . $cv['quantity'] . ' item from vendor ' . $cv['content'];
                                                            }
                                                            if ($condition_type == 'oc10') {
                                                                echo $prepend . 'Cart has no item from vendor ' . $cv['content'];
                                                            }
                                                        }
                                                    } ?>

                                                        </li>
                                                <?php
                                                }
                                            }

                                                ?>
                                        </ul>
                                    </td>
                                    <td style="vertical-align: middle; border: none;">
                                        <span class="col-xs-12 status">
                                            <label class="switch">
                                                <input data-oid="<?php echo $fetch['offer'][0]['offer_id']; ?>" class="switcheck offer_status" type="checkbox" <?php if ($fetch['offer'][0]['status'] == "1") {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }; ?> />
                                                <span class="slidr round"></span>
                                            </label>
                                        </span>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle; border: none;">
                                        <ul class="user-info" style="display: table; text-align: center; cursor: pointer;">
                                            <li class="profile-info dropdown"><span class="dropdown-toggle" data-toggle="dropdown"><i class="entypo-dot-3"></i></span>
                                                <ul class="dropdown-menu pull-right">
                                                    <!-- Reverse Caret -->
                                                    <li class="caret"></li>
                                                    <!-- Profile sub-links -->
                                                    <li><a href="<?php echo base_url(); ?>edit_offer/<?php echo $shop; ?>/<?php echo $token; ?>/<?php echo $fetch['offer'][0]['offer_id']; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>"><i class="entypo-pencil"></i>Edit</a></li>
                                                    <li><a href="<?php echo base_url(); ?>offer_stats/<?php echo $shop; ?>/<?php echo $fetch['offer'][0]['offer_id']; ?>?<?php echo $_SERVER['QUERY_STRING']; ?>">
                                                            <i class="entypo-chart-line"></i>Stats</a></li>
                                                    <li><a onclick="if(confirm('Are you sure you want to delete this offer?')){$.ajax({url: 'delete_offer/<?php echo $fetch['offer'][0]['offer_id']; ?>', method: 'POST', success: function(){window.location.reload(false)}})}"><i class="entypo-trash"></i>Delete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <script>
                        $('.collection_status').change(function() {
                            let o = $(this).attr('data-oid');
                            if (this.checked) {
                                $.ajax({
                                    type: "POST",
                                    url: base_url + 'collection_status/<?php echo $shop; ?>/1?<?php echo $_SERVER['QUERY_STRING']; ?>',
                                    data: '',
                                    success: function(response) {
                                        $('.os' + o).prop('checked', true);
                                    },
                                    error: function() {
                                        alert('An error occured');
                                    }
                                });
                            } else {
                                $.ajax({
                                    type: "POST",
                                    url: base_url + 'collection_status/<?php echo $shop; ?>/0?<?php echo $_SERVER['QUERY_STRING']; ?>',
                                    data: '',
                                    success: function(response) {
                                        $('.os' + o).prop('checked', false);
                                    },
                                    error: function() {
                                        alert('An error occured');
                                    }
                                });
                            }
                        });
                        $('.offer_status').change(function() {
                            let o = $(this).attr('data-oid');
                            if (this.checked) {
                                <?php if ($shop_details->name == 'Free' && $this->db->where('shop', $shop)->where('status', 1)->get('offers')->num_rows() > 0) : ?>
                                    alert('You\'ve already maxed out your total active offers allowed. Upgrade your account to activate more offers.')
                                    $('.os' + o).prop('checked', false);
                                    $(this).prop('checked', false);
                                <?php elseif ($shop_details->name == 'Sleek' && $this->db->where('shop', $shop)->where('status', 1)->get('offers')->num_rows() > 19) : ?>
                                    alert('You\'ve already maxed out your total active offers allowed. Upgrade your account to activate more offers.')
                                    $('.os' + o).prop('checked', false);
                                    $(this).prop('checked', false);
                                <?php else : ?>
                                    $.ajax({
                                        type: "POST",
                                        url: base_url + 'offer_status/' + o + '/1?<?php echo $_SERVER['QUERY_STRING']; ?>',
                                        data: '',
                                        success: function(response) {
                                            $('.os' + o).prop('checked', true);
                                            $(this).prop('checked', true);
                                            $('.offer_status').attr('disabled', true);
                                            window.location.reload(false);
                                        },
                                        error: function() {
                                            alert('An error occured');
                                        }
                                    });

                                <?php endif; ?>
                            } else {
                                $.ajax({
                                    type: "POST",
                                    url: base_url + 'offer_status/' + o + '/0?<?php echo $_SERVER['QUERY_STRING']; ?>',
                                    data: '',
                                    success: function(response) {
                                        $('.os' + o).prop('checked', false);
                                        $(this).prop('checked', false);
                                        $('.offer_status').attr('disabled', true);
                                        window.location.reload(false);
                                    },
                                    error: function() {
                                        alert('An error occured');
                                    }
                                });
                            }
                        });
                    </script>

                    <div class="tile-stats tile-white stat-tile" style="display: table; width: 100%; height: auto !important; padding: 10px;margin-bottom: 40px; margin-top: 10px; box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                        <?php if ($do_script == 'add') : ?>
                            <span onclick="$.ajax({url: '<?php echo base_url(); ?>add_tag/<?php echo $shop . '/' . $token ?>', success: function(e){ alert(e); window.location.reload(false);}, error: function(){ Alert('There was an error removing the automatic script tag'); } })" class="pull-right btn btn-success btn-icon icon-right">Add Automatic Script Tag<em class="entypo-plus"></em></span>
                        <?php else : ?>
                            <span class="pull-left">
                                Is the app loading slowly or slowing down your store? You can add our manual script tag to your theme.liquid file right before the
                                <pre>&lt;/body&gt;</pre> tag then remove the automatic tag<br />
                                <pre>&lt;script src="https://sleek-upsell.com/assets/js/shopify.js?shop=<?php echo $shop; ?>.myshopify.com"&gt;&lt;/script&gt;</pre>
                            </span>
                            <span onclick="$.ajax({url: '<?php echo base_url(); ?>remove_tag/<?php echo $shop . '/' . $token ?>', success: function(e){ alert(e); window.location.reload(false);}, error: function(){ Alert('There was an error removing the automatic script tag'); } })" class="pull-right btn btn-danger btn-icon icon-right">Remove Automatic Script Tag<em class="entypo-trash"></em></span>
                        <?php endif; ?>
                    </div>

                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/datatables.css" id="style-resource-1">
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css" id="style-resource-2">
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css" id="style-resource-3">
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker-bs3.css" id="style-resource-4">
                    <script src="<?php echo base_url(); ?>assets/js/datatables/datatables.js" id="script-resource-8"></script>
                    <script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" id="script-resource-9"></script>
                    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" id="script-resource-12"></script>
                <?php endif; ?>
                </div>
            </div>

            <?php

            $this_script = '/admin/api/2021-01/recurring_application_charges.json';

            $script_exists = $this->Shopify->shopify_call($token, $shop, $this_script, array(), 'GET');
            $script_exists = json_decode($script_exists['response'], true);
            // print_r($script_exists);

            foreach ($script_exists['recurring_application_charges'] as $key => $fetch) :
                echo $fetch['id'] . '=> name: ' . $fetch['name'] . '=> price: ' . $fetch['price'] . '=> status: ' . $fetch['status'] . '=> activated_on: ' . $fetch['activated_on'] . '=> cancelled_on: ' . $fetch['cancelled_on'] . '<br />';
            endforeach;

            ?><br /><br /><br />
    </div>