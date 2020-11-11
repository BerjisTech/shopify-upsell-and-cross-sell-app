<?php $duka = $shop . '.myshopify.com'; ?>
<script type="text/javascript">
    jQuery(document).ready(function() {
        // Sparkline Charts
        jQuery(".sales").sparkline([0,
            <?php for($i = 1; $i <= 5; $i++){ echo mt_rand(1, 9).','; }?>
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%m") as month, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'purchase')->group_by('month')->order_by('year', 'asc')->get('stats')->result_array() as $fetch) {
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
            <?php for($i = 1; $i <= 5; $i++){ echo mt_rand(100, 400).','; }?>
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%m") as month, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'impression')->group_by('month')->order_by('year', 'asc')->get('stats')->result_array() as $fetch) {
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

        jQuery(".monthly-sales").sparkline([0,
            <?php for($i = 1; $i <= 5; $i++){ echo mt_rand(10, 20).','; }?>
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%m") as month, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'purchase')->group_by('month')->order_by('year', 'asc')->get('stats')->result_array() as $fetch) {
                echo $fetch['stat'] . ',';
            }
            ?>
        ], {
            type: 'bar',
            barColor: '#ff4e50',
            height: '55px',
            width: '100%',
            barWidth: 8,
            barSpacing: 1
        });

        jQuery(".all-time-sales").sparkline([0,
            <?php for($i = 1; $i <= 5; $i++){ echo mt_rand(5, 10).','; }?>
            <?php
            foreach ($this->db->select('count(stat_id) as stat, date_format(from_unixtime(date), "%m") as month, date_format(from_unixtime(date), "%Y %m %d") as year')->where('shop', $duka)->where('type', 'checkout')->group_by('month')->order_by('year', 'asc')->get('stats')->result_array() as $fetch) {
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
<div class="whole">
    <div class="mwili">
        <div style="width: 50px; height: 100vh; background: #981B1B; display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center;">
            <span class="whats">
                <span class="profile-info dropdown">
                        <span class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><i class="entypo-cog"></i></span>
                        <ul class="dropdown-menu">
                            <!-- Reverse Caret -->
                            <li class="caret"></li>
                            <!-- Profile sub-links -->
                            <li><a href="<?php echo base_url(); ?>settings/<?php echo $shop; ?>/<?php echo $token; ?>"><i class="entypo-user"></i>Offer settings </a></li>
                            <li><a href="#"><i class="entypo-mail"></i>Set up wizard </a></li>
                            <li><a href="#"><i class="entypo-calendar"></i>Subscription </a></li>
                            <li><a href="#"><i class="entypo-clipboard"></i>Catalog </a></li>
                        </ul>
                    </span>
                <span><a href="<?php echo base_url(); ?>new_offer/<?php echo $shop; ?>/<?php echo $token; ?>"><span class="btn btn-primary btn-sm"><i class="entypo-plus"></i></span></a></span>
                <span><a href="<?php echo base_url(); ?>stats/<?php echo $shop; ?>/<?php echo $token; ?>"><span class="btn btn-primary btn-sm"><i class="entypo-chart-line"></i></span></a></span>
            </span>
            <span class="whats">
                <span class="dropdown language-selector">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true" class="btn btn-primary"><img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16" height="16" /></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-de.png" width="16" height="16" /><span>Deutsch</span></a></li>
                        <li class="active"><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png" width="16" height="16" /><span>English</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-fr.png" width="16" height="16" /><span>François</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-al.png" width="16" height="16" /><span>Shqip</span></a></li>
                        <li><a href="#"><img src="https://demo.neontheme.com/assets/images/flags/flag-es.png" width="16" height="16" /><span>Español</span></a></li>
                    </ul>
                </span>
                <span><a href="#" data-toggle="chat" data-collapse-sidebar="1" class="btn btn-primary btn-sm"><i class="entypo-chat"></i>
                            <span class="badge badge-success chat-notifications-badge is-hidden">0</span></a>
                    </span>
                <span> <i class="btn btn-primary btn-sm entypo-help"></i></a></span>
            </span>
        </div>
        <div style="height: 100vh; overflow-y: auto; flex-grow: 4; padding-top: 10px; padding-left: 10px; padding-right: 10px; padding-bottom: 0px;">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                        <h3><?php echo $this->db->where('shop', $duka)->where('type', 'impression')->get('stats')->num_rows(); ?></h3>
                        <p>Customer impression</p> <span class="customer-reach"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                        <h3><?php echo $this->db->where('shop', $duka)->where('type', 'purchase')->get('stats')->num_rows(); ?></h3>
                        <p>ATC</p> <span class="sales"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="tile-stats tile-white stat-tile" style="box-shadow: 0px 0px 5px rgba(2, 2, 2, 0.2);">
                        <h3><?php echo $this->db->where('shop', $duka)->where('type', 'checkout')->get('stats')->num_rows(); ?></h3>
                        <p>Checkouts</p> <span class="all-time-sales"></span>
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
                                                foreach ($conditions as $ck => $cv) {?>
                                                
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
                                                    }
                                                }?>
                                                
                                    </li>
                                                <?php
                                            }
                                        }
    
                                        ?>
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
                                <ul class="user-info" style="display: table; text-align: center; cursor: pointer;">
                                    <li class="profile-info dropdown"><span class="dropdown-toggle" data-toggle="dropdown"><i class="entypo-dot-3"></i></span>
                                        <ul class="dropdown-menu pull-right">
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
</div>

<style>
    .whats, .whats span{
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
    .pull-down{}
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