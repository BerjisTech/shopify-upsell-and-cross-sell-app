<script type="text/javascript">
jQuery(document).ready(function() {
    // Sparkline Charts
    jQuery(".registrations").sparkline([80, 65, 12, 10, 10, 8, 4, 11, 6, 1, 6, 7, ], {
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
    jQuery(".pie-chart").sparkline([1806600,
        1733190,
        580300
    ], {
        type: 'pie',
        width: '95',
        height: '95',
        sliceColors: ['#ec3b83', '#00acd6', '#e8b51b']
    });


    jQuery(".contributions").sparkline([8500, 31000, 50400, 46200, 41650, 104200, 67850, 61200, 120700, 97550,
        116850, 134480, 101900, 114600, 135400, 118400, 100350, 176120, 97840, 8000,
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

    jQuery(".share-capital").sparkline([40200, 77300, 36700, 27800, 30200, 61400, 67800, 29000, 35400, 39300,
        11500, 8850, 11000, 26000, 21000, 13500, 6500, 21850, 15000,
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

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>
<div class="row">
    <div class="col-sm-12" style="height: 10px;"></div>
    <div class="col-sm-9" style="background: #FFFFFF !important;">
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
                    <th>Offer</th>
                    <th style="width: 200px;"></th>
                </tr>
            </thead>
            <tbod>
                <?php foreach ($offer as $fetch) : ?>
                <tr>
                    <td style="vertical-align: middle;">
                        <span style="font-weight: bold;">
                            <?php
							if ($fetch['offer_title'] == '') {
								echo '#' . $fetch['offer_id'];
							} else {
								echo $fetch['offer_title'];
							}
							?> : Offer
                            <?php
							$products = json_decode($fetch['offer_products'], true);
							$total_products = count($products);

							if ($total_products == 1) {
								if (isset($products[0][0])) {
									$product_id = $products[0][0];
								} else {
									$product_id = $products[0];
								}
								$product_id = $product_id['product_id'];
								$product_name = $this->Shopify->shopify_call($token, $shop, '/admin/api/2020-04/products/' . $product_id . '.json', array('fields' => 'title'), 'GET');
								$product_name = json_decode($product_name['response'], true);
								echo $product_name['product']['title'];
							} else {
								foreach ($products as $key => $value) {
									if (isset($products[$key][0])) {
										$product_id = $products[$key][0];
									} else {
										$product_id = $products[$key];
									}
									$product_id = $product_id['product_id'];
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
								$conditions = json_decode($fetch['offer_conditions'], true);
								$rule = $fetch['offer_condition_rule'];
								if ($rule == 'ALL') {
									$connector = 'AND';
								}
								if ($rule == 'ANY') {
									$connector = 'OR';
								}

								// print_r($conditions);

								if (count($conditions) == 0) {
									echo 'To every customer';
								}

								foreach ($conditions as $key => $value) {
									$condition_type = $conditions[$key][0];
									$conditions_content = $conditions[$key][1];

									if ($key == '0') {
										$prepend = 'When ';
										$append = ',<br />';
									} else if ($key == count($conditions) - 1) {
										$prepend = '<strong>' . $connector . '</strong> ';
										$append = '.';
									} else {
										$prepend = '<strong>' . $connector . '</strong> ';
										$append = ',';
									}

									if ($condition_type == 'oc1' || $condition_type == 'oc2' || $condition_type == 'oc3') {
										$quantity = $conditions_content['quantity'];
										$type = $conditions_content['type'];
										$content = $conditions_content['content'];

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
										$type = $conditions_content['type'];
										$content = $conditions_content['content'];

										echo $prepend . 'Cart does not have any ' . $content . $append;
									}

									if ($condition_type == 'oc5' || $condition_type == 'oc6' || $condition_type == 'oc7' || $condition_type == 'oc8') {
										if ($condition_type == 'oc5') {
											echo $prepend . 'Cart total is at least ' . $conditions_content . ' cents' . $append;
										}
										if ($condition_type == 'oc6') {
											echo $prepend . 'Cart total is at most ' . $conditions_content . ' cents' . $append;
										}
										if ($condition_type == 'oc7') {
											echo $prepend . 'Customer is located in ' . $conditions_content . $append;
										}
										if ($condition_type == 'oc8') {
											echo $prepend . 'Customer is not located in ' . $conditions_content . $append;
										}
									}
								}
								?>
                            </li>
                        </ul>
                    </td>
                    <td style="width: 200px; text-align: center;">
                        <span class="col-xs-6 CTR" style="border-right: 1px solid #EBEBEB;">CTR<br /> N/A</span>
                        <span class="col-xs-6 status">Active
                            <label class="switch">
                                <input class="switcheck offer_status" type="checkbox" value="1" checked>
                                <span class="slidr round"></span>
                            </label>
                        </span>
                        <span class="col-xs-12">
                            <hr />
                        </span>
                        <span class="col-xs-5 btn btn-primary btn-sm btn-icon icon-left"
                            style="margin: 4px !important;"> <i class="entypo-pencil"></i>Edit</span>
                        <span class="col-xs-5 btn btn-success btn-sm btn-icon icon-right"
                            style="margin: 4px !important;"> <i class="entypo-newspaper"></i>Duplicate</span>
                        <a href="<?php echo base_url(); ?>offer_stats/<?php echo $shop; ?>/<?php echo $fetch['offer_id']; ?>"
                            class="col-xs-5 btn btn-info btn-sm btn-icon icon-left" style="margin: 4px !important;">
                            <i class="entypo-chart-line"></i>Stats</a>
                        <span class="col-xs-5 btn btn-danger btn-sm btn-icon icon-right"
                            style="margin: 4px !important;">
                            <i class="entypo-trash"></i>Delete</span>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    </div>
    <div class="col-sm-3">
        <div class="col-sm-12">
            <div class="tile-stats tile-white stat-tile">
                <h3>33,190</h3>
                <p>Customer Reach This Month</p> <span class="contributions"></span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="tile-stats tile-white stat-tile">
                <h3>217 (345,567)</h3>
                <p>Sales this month</p> <span class="registrations"></span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="tile-stats tile-white stat-tile">
                <h3>1,580,300</h3>
                <p>All Time Sales</p> <span class="share-capital"></span>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="tile-stats tile-white stat-tile">
                <p>
                    <span style="color: #ec3b83;">Clicked & Bought 43.8%</span> <br />
                    <span style="color: #00acd6;">Clicked & Deleted 42.1%</span> <br />
                    <span style="color: #e8b51b;">No Clicked 14.1%</span>
                </p> <span class="pie-chart"></span>
            </div>
        </div>
    </div>
</div> <br />

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datatables/datatables.css" id="style-resource-1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2-bootstrap.css" id="style-resource-2">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/select2/select2.css" id="style-resource-3">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/daterangepicker/daterangepicker-bs3.css"
    id="style-resource-4">
<script src="<?php echo base_url(); ?>assets/js/datatables/datatables.js" id="script-resource-8"></script>
<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js" id="script-resource-9"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" id="script-resource-12"></script>