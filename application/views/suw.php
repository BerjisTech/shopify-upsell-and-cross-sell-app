
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" id="style-resource-4">
<link rel="stylesheet"
    href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"
    id="style-resource-1">
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" id="script-resource-3"></script>



<div class="saving" style="display: none; position: absolute; top: 0px; right: 0px; z-index: 2000000; width: 300px; height: 400px; background: rgba(152,27,27,0.5); vertical-align: middle; text-align: center;"><img src="<?php echo base_url(); ?>assets/images/loader_2.gif" style="margin-top: 30vh;" /></div>
<div class="btn btn-primary saver" style="display: table; position: absolute; top: 10px; right: 10px; z-index: 2000000;"><span class="entypo-floppy"> SAVE</span></div>
<div class="btn btn-primary" onclick="$('.suw').remove();sessionStorage.setItem('s_u_w', false);" style="display: table; position: absolute; bottom: 10px; right: 10px; z-index: 2000000;"><span class="entypo-home"> CLOSE</span></div>
<div class="whole">
    <div style="width: 50px; height: 400px; background: #981B1B; display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center;">
        <div id="p" class="whats btn btn-primary" style="background-color: #981B1B; color: white;"><span class="entypo-leaf"></span></div>
        <div id="d" class="whats btn btn-primary"><span class="entypo-brush"></span></div>
    </div>
    <div style="height: 400px; overflow-y: auto; flex-grow: 4; padding-bottom: 0px;">
        <div class="setting_tab s_p" style="display: flex;">
            <div style="height: 400px; background: #FAFAFA; padding: 10px;">
                <h3 style="width: 100%; text-align: center;">Offer position</h3>
                <small style="display: table; width: 100%; text-align: center;">Use this section to position your offers on the cart page and cart drawer</small>
                <hr />
                <div class="panel-group joined" id="accordion-test">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                    1: Cart Page Settings
                                </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>Selector</h4>
                                <input type="text" name="cart_dom" class="form-control" placeholder="form[action='/cart/add']" />
                                <h4>Position relative to selector</h4>
                                <select type="text" name="cart_pos" class="form-control">
                                    <option value="prepend">Top Of</option>
                                    <option value="before">Before</option>
                                    <option value="append">Bottom Of</option>
                                    <option value="after">After</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo" class="collapsed">
                                    2: Cart Drawer Settings
                                </a> </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h4>Selector</h4>
                                <input type="text" name="drawer_dom" class="form-control" placeholder="form[action='/cart/add']" />
                                <h4>Position relative to selector</h4>
                                <select type="text" name="drawer_pos" class="form-control">
                                    <option value="prepend">Top Of</option>
                                    <option value="before">Before</option>
                                    <option value="append">Bottom Of</option>
                                    <option value="after">After</option>
                                </select>
                                <hr />
                                <label>
                                    <input type="checkbox" name="drawer_refresh" /> Refresh the drawer without sending user to another page?
                                </label>
                                <h4>Add your theme's refresh code</h4>
                                <textarea style="resize: none; width: 100%; height: 150px;" class="form-control" name="refresh_code"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="setting_tab s_d" style="display: none; background: #FFFFFF;">
            <div class="col-sm-12" style="border-right: 1px solid #981B1B; margin: 0px; padding: 5px; background: #FFFFFF; height: 400px;">
                <div class="panel-group joined" id="accordion-test-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-2" class="collapsed">
                                    1: General Offer Layout Settings
                                </a> </h4>
                        </div>
                        <div id="collapseOne-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Background</h4>
                                    <div class="input-group">
                                        <input type="text" class="offer_bg_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="offer_bg">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="offer_color_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="offer_color">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Font</h4>
                                    <input type="text" class="offer_font form-control" placeholder="Choose offer font" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Size</h4>
                                    <input type="range" min="8" max="50" class="offer_size form-control" value="12" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Space Above offer</h4>
                                    <input type="range" class="offer_mt form-control" min="0" max="50" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Space below offer</h4>
                                    <input type="range" class="offer_mb form-control" min="0" max="50" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Radius</h4>
                                    <input type="range" class="offer_radius form-control" min="0" max="100" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Style <small>Set the border size to see border</small></h4>
                                    <select class="offer_border form-control">
                                        <option value="none">No Border</option>
                                        <option value="solid">Standard</option>
                                        <option value="dotted">Dotted</option>
                                        <option value="dashed">Dashed</option>
                                        <option value="double">Double</option>
                                        <option value="groove">Groove</option>
                                        <option value="ridge">Ridge</option>
                                        <option value="inset">Reverse</option>
                                        <option value="outset">Outer</option>
                                    </select>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Size <small>Change border style from none to see border</small></h4>
                                    <input type="range" class="offer_bs form-control" min="0" max="10" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="offer_bc_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="offer_bc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="collapsed">
                                    2: Offer Button
                                </a> </h4>
                        </div>
                        <div id="collapseTwo-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Button Background</h4>
                                    <div class="input-group">
                                        <input type="text" class="button_bg_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="button_bg">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Button Text Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="button_color_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="button_color">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Font</h4>
                                    <input type="text" class="button_font form-control" placeholder="Choose offer font" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Size</h4>
                                    <input type="range" class="button_size form-control" min="8" max="50" value="12" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Space Above offer</h4>
                                    <input type="range" class="button_mt form-control" min="0" max="30" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Space below offer</h4>
                                    <input type="range" class="button_mb form-control" min="0" max="30" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Radius</h4>
                                    <input type="range" class="button_radius form-control" min="0" max="100" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Style <small>Set the border size to see border</small></h4>
                                    <select class="button_border form-control">
                                        <option value="none">No Border</option>
                                        <option value="solid">Standard</option>
                                        <option value="dotted">Dotted</option>
                                        <option value="dashed">Dashed</option>
                                        <option value="double">Double</option>
                                        <option value="groove">Groove</option>
                                        <option value="ridge">Ridge</option>
                                        <option value="inset">Reverse</option>
                                        <option value="outset">Outer</option>
                                    </select>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Size <small>Change border style from none to see border</small></h4>
                                    <input type="range" class="button_bs form-control" min="0" max="10" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="button_bc_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="button_bc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-2" class="collapsed">
                                    3: Image Settings
                                </a> </h4>
                        </div>
                        <div id="collapseThree-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Radius</h4>
                                    <input type="range" class="image_radius form-control" min="0" max="100" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Style <small>Set the border size to see border</small></h4>
                                    <select class="image_border form-control">
                                        <option value="none">No Border</option>
                                        <option value="solid">Standard</option>
                                        <option value="dotted">Dotted</option>
                                        <option value="dashed">Dashed</option>
                                        <option value="double">Double</option>
                                        <option value="groove">Groove</option>
                                        <option value="ridge">Ridge</option>
                                        <option value="inset">Reverse 1</option>
                                        <option value="outset">Reverse 2</option>
                                    </select>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Size <small>Change border style from none to see border</small></h4>
                                    <input type="range" min="0" max="30" class="image_bs form-control" value="0" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Border Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="image_bc_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="image_bc">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseFour-2" class="collapsed">
                                    4: Offer Text
                                </a> </h4>
                        </div>
                        <div id="collapseFour-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="text_color_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="text_color">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Font</h4>
                                    <input type="text" class="text_font form-control" placeholder="Choose offer font" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Offer Text Size</h4>
                                    <input type="range" class="text_size form-control" min="8" max="50" value="12" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseFive-2" class="collapsed">
                                    5: Product Title
                                </a> </h4>
                        </div>
                        <div id="collapseFive-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Product Title Text Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="title_color_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="title_color">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Product Title Text Font</h4>
                                    <input type="text" class="title_font form-control" placeholder="Choose offer font" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Product Title Text Size</h4>
                                    <input type="range" class="title_size form-control" min="8" max="50" value="12" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseSix-2" class="collapsed">
                                    6: Price Settings
                                </a> </h4>
                        </div>
                        <div id="collapseSix-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Price Text Color</h4>
                                    <div class="input-group">
                                        <input type="text" class="price_color_hex form-control" data-format="hex" />
                                        <div class="input-group-addon">
                                            <input type="color" class="price_color">
                                        </div>
                                    </div>
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Price Text Font</h4>
                                    <input type="text" class="price_font form-control" placeholder="Choose offer font" />
                                </div>
                                <div style="display: table; width: 100%; margin-bottom: 10px;">
                                    <h4>Price Text Size</h4>
                                    <input type="range" class="price_size form-control" min="8" max="50" value="12" />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-8" style="display: none; margin: 0px; padding: 0px; ">
                <div class="affix">
                    <div style="vertical-align: middle; background: #FFFFFF; padding: 20px; width: 100%;">
                        <div class="sleekOffer">

                            <div class="card sleek-upsell">
                                <form class="sleek-form">
                                    <div class="sleek-image">
                                        <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" />
                                    </div>
                                    <div class="sleek-offer">
                                        <div class="sleek-text">Need Free Shipping?</div>
                                        <div class="sleek-title">Blue silk tuxedo</div>
                                        <div class="sleek-selectors">
                                            <select class="v-select">
                                                <option>small one very loong text here</option>
                                                <option>large ones very loong text here</option>
                                                <option>xl for fatty very loong text here</option>
                                            </select>
                                            <select class="q-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sleek-card-atc">
                                        <div class="sleek-prices">
                                            <span class="sleek-price money">KES 200</span>
                                            <span class="sleek-compare-price money">KES 200</span>
                                        </div>
                                        <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button>
                                    </div>
                                </form>
                            </div>

                            <div class="hidden block sleek-upsell">
                                <form class="sleek-form">
                                    <div class="sleek-text">Need Free Shipping?</div>
                                    <div class="sleek-block">
                                        <div class="sleek-image">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" />
                                        </div>
                                        <div class="sleek-offer">
                                            <div class="sleek-title">Blue silk tuxedo</div>
                                            <div class="sleek-prices">
                                                <span class="sleek-price money">KES 200</span>
                                                <span class="sleek-compare-price money">KES 200</span>
                                            </div>
                                            <div class="sleek-selectors">
                                                <select class="v-select">
                                                    <option>small one very loong text here dfgdfsgsdfg sdf gsdf gsdf g</option>
                                                    <option>large ones very loong text heresd fgsd fg sdfgsdf gdf gdfg</option>
                                                    <option>xl for fatty very loong text here sdef gsdfg sdfg sdfgsdf</option>
                                                </select>
                                                <select class="q-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button>
                                </form>
                            </div>

                            <div class="hidden half-block sleek-upsell">
                                <form class="sleek-form">
                                    <div class="sleek-half-block">
                                        <div class="sleek-image">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" />
                                        </div>
                                        <div class="sleek-offer">
                                            <div class="sleek-text">Need Free Shipping?</div>
                                            <div class="sleek-title">Blue silk tuxedo</div>
                                            <div class="sleek-prices">
                                                <span class="sleek-price money">KES 200</span>
                                                <span class="sleek-compare-price money">KES 200</span>
                                            </div>
                                            <div class="sleek-selectors">
                                                <select class="v-select">
                                                    <option>small one very loong text here dfgdfsgsdfg sdf gsdf gsdf g</option>
                                                    <option>large ones very loong text heresd fgsd fg sdfgsdf gdf gdfg</option>
                                                    <option>xl for fatty very loong text here sdef gsdfg sdfg sdfgsdf</option>
                                                </select>
                                                <select class="q-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button>
                                </form>
                            </div>

                            <div class="hidden flat sleek-upsell">
                                <form class="sleek-form">
                                    <div class="sleek-text">Need Free Shipping?</div>
                                    <div class="sleek-flat">
                                        <div class="sleek-image">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" />
                                        </div>
                                        <div class="sleek-offer">
                                            <div class="sleek-title">Blue silk tuxedo</div>
                                            <div class="sleek-prices">
                                                <span class="sleek-price money">KES 200</span>
                                                <span class="sleek-compare-price money">KES 200</span>
                                            </div>
                                            <div class="sleek-selectors">
                                                <select class="v-select">
                                                    <option>small one very loong text here dfgdfsgsdfg sdf gsdf gsdf g</option>
                                                    <option>large ones very loong text heresd fgsd fg sdfgsdf gdf gdfg</option>
                                                    <option>xl for fatty very loong text here sdef gsdfg sdfg sdfgsdf</option>
                                                </select>
                                                <div class="flex-select">
                                                    <select class="q-select">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                    <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="hidden compact sleek-upsell">
                                <form class="sleek-form">
                                    <div class="sleek-compact">
                                        <div class="sleek-image">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" />
                                        </div>
                                        <div class="sleek-offer">
                                            <div class="sleek-text">Need Free Shipping?</div>
                                            <div class="sleek-title">Blue silk tuxedo</div>
                                            <div class="sleek-prices">
                                                <span class="sleek-price money">KES 200</span>
                                                <span class="sleek-compare-price money">KES 200</span>
                                            </div>
                                            <div class="sleek-selectors">
                                                <select class="v-select">
                                                    <option>small one very loong text here dfgdfsgsdfg sdf gsdf gsdf g</option>
                                                    <option>large ones very loong text heresd fgsd fg sdfgsdf gdf gdfg</option>
                                                    <option>xl for fatty very loong text here sdef gsdfg sdfg sdfgsdf</option>
                                                </select>
                                                <select class="q-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                            <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="offerPicker">
                            <img class="active-selector" src="<?php echo base_url(); ?>assets/images/card.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('card');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                            <img src="<?php echo base_url(); ?>assets/images/block.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('block');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                            <img src="<?php echo base_url(); ?>assets/images/half_block.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('half-block');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                            <img src="<?php echo base_url(); ?>assets/images/flat.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('flat');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                            <img src="<?php echo base_url(); ?>assets/images/compact.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('compact');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js" id="script-resource-14"></script>
<script>
    $("#previewFrame").contents().find("div").each(function() {
        $(this).attr('onclick', 'console.log($(this).html())')
    });


    $('.whats').click(function() {
        let hii = $(this).attr('id');
        $('.whats').attr('style', '');
        $(this).attr('style', 'background-color: #981B1B; color: white;');
        $('.setting_tab').hide(200);
        setTimeout(function() {
            $('.s_' + hii).show(200);
        }, 250);
    });

    function hideAll() {
        $('.card').addClass('hidden');
        $('.half-block').addClass('hidden');
        $('.block').addClass('hidden');
        $('.flat').addClass('hidden');
        $('.compact').addClass('hidden');
    }

    function pick(offerLayout) {
        hideAll();
        $('.' + offerLayout).removeClass('hidden');
        $('.offer_layout').val(offerLayout);
    }
    $('.s_p').trigger('click');

    <?php if ($this->db->where('shop', $shop)->get('settings')->num_rows() > 0): ?>
        let settings = <?php echo json_encode($this->db->where('shop', $shop)->get('settings')->row()); ?>;
        if (settings != null) {
            $('input[name="cart_dom"]').val(settings['cart_location']);
            $('input[name="cart_pos"]').val(settings['cart_position']);
            $('input[name="drawer_dom"]').val(settings['drawer_location']);
            $('input[name="drawer_pos"]').val(settings['drawer_position']);
            if (settings['refresh_state'] = 'y') {
                $('input[name="drawer_refresh"]').prop('checked', true);
            } else {
                $('input[name="drawer_refresh"]').prop('checked', true);
            }
            $('textarea[name="refresh_code"]').val(settings['drawer_refresh']);

            if (settings['layout_bg']) {
                $('.sleek-upsell').css('background', settings['layout_bg']);
                $('.sleek-upsell select').css('background', settings['layout_bg']);
                $('.offer_bg_hex').val(settings['layout_bg']);
                $('.offer_bg').val(settings['layout_bg']);
            }
            if (settings['layout_color']) {
                $('.sleek-upsell').css('color', settings['layout_color']);
                $('.sleek-upsell select').css('color', settings['layout_color']);
                $('.offer_color_hex').val(settings['layout_color']);
                $('.offer_color').val(settings['layout_color']);
            }
            if (settings['layout_font']) {
                $('.sleek-upsell').css('font-family', settings['layout_font']);
                $('.offer_font').val(settings['layout_font']);
            }
            if (settings['layout_size']) {
                $('.sleek-upsell').css('font-size', settings['layout_size']);
                $('.offer_size').val(settings['layout_size'].replace('px', ''));
            }
            if (settings['layout_mt']) {
                $('.sleek-upsell').css('margin-top', settings['layout_mt']);
                $('.offer_mt').val(settings['layout_mt'].replace('px', ''));
            }
            if (settings['layout_mb']) {
                $('.sleek-upsell').css('margin-bottom', settings['layout_mb']);
                $('.offer_mb').val(settings['layout_mb'].replace('px', ''));
            }
            if (settings['offer_radius']) {
                $('.sleek-upsell').css('border-radius', settings['offer_radius']);
                $('.offer_radius').val(settings['offer_radius'].replace('px', ''));
            }
            if (settings['offer_bs']) {
                $('.sleek-upsell').css('border-width', settings['offer_bs']);
                $('.offer_bs').val(settings['offer_bs'].replace('px', ''));
            }
            if (settings['offer_bc']) {
                $('.sleek-upsell').css('border-color', settings['offer_bc']);
                $('.offer_bc').val(settings['offer_bc']);
                $('.offer_bc_hex').val(settings['offer_bc']);
            }
            if (settings['offer_border']) {
                $('.sleek-upsell .sleek-upsell').css('border-style', settings['offer_border']);
                $('.offer_border').val(settings['offer_border']);
            }
            if (settings['button_bg']) {
                $('.sleek-upsell button').css('background', settings['button_bg']);
                $('.button_bg_hex').val(settings['button_bg']);
                $('.button_bg').val(settings['button_bg']);
            }
            if (settings['button_color']) {
                $('.sleek-upsell button').css('color', settings['button_color']);
                $('.button_color').val(settings['button_color']);
                $('.button_color_hex').val(settings['button_color']);
            }
            if (settings['button_font']) {
                $('.sleek-upsell button').css('font-family', settings['button_font']);
                $('.button_font').val(settings['button_font']);
            }
            if (settings['button_size']) {
                $('.sleek-upsell button').css('font-size', settings['button_size']);
                $('.button_size').val(settings['button_size'].replace('px', ''));
            }
            if (settings['button_mt']) {
                $('.sleek-upsell button').css('margin-top', settings['button_mt']);
                $('.button_mt').val(settings['button_mt'].replace('px', ''));
            }
            if (settings['button_mb']) {
                $('.sleek-upsell button').css('margin-bottom', settings['button_mb']);
                $('.button_mb').val(settings['button_mb'].replace('px', ''));
            }
            if (settings['button_radius']) {
                $('.sleek-upsell button').css('border-radius', settings['button_radius']);
                $('.button_radius').val(settings['button_radius'].replace('px', ''));
            }
            if (settings['button_bs']) {
                $('.sleek-upsell button').css('border-width', settings['button_bs']);
                $('.button_bs').val(settings['button_bs'].replace('px', ''));
            }
            if (settings['button_bc']) {
                $('.sleek-upsell button').css('border-color', settings['button_bc']);
                $('.button_bc_hex').val(settings['button_bc']);
                $('.button_bc').val(settings['button_bc']);
            }
            if (settings['button_border']) {
                $('.sleek-upsell button').css('border-style', settings['button_border']);
                $('.button_border').val(settings['button_border']);
            }
            if (settings['image_radius']) {
                $('.sleek-upsell img').css('border-radius', settings['image_radius']);
                $('.image_radius').val(settings['image_radius'].replace('px', ''));
            }
            if (settings['image_bs']) {
                $('.sleek-upsell img').css('border-width', settings['image_bs']);
                $('.image_bs').val(settings['image_bs'].replace('px', ''));
            }
            if (settings['image_bc']) {
                $('.sleek-upsell img').css('color', settings['image_bc']);
                $('.image_bc_hex').val(settings['image_bc']);
                $('.image_bc').val(settings['image_bc']);
            }
            if (settings['image_border']) {
                $('.sleek-upsell img').css('border-style', settings['image_border']);
                $('.image_border').val(settings['image_border']);
            }
            if (settings['text_color']) {
                $('.sleek-text').css('color', settings['text_color']);
                $('.text_color_hex').val(settings['text_color']);
                $('.text_color').val(settings['text_color']);
            }
            if (settings['text_font']) {
                $('.sleek-text').css('font-family', settings['text_font']);
                $('.text_font').val(settings['text_font']);
            }
            if (settings['text_size']) {
                $('.sleek-text').css('font-size', settings['text_size']);
                $('.text_size').val(settings['text_size'].replace('px', ''));
            }
            if (settings['title_color']) {
                $('.sleek-title').css('color', settings['title_color']);
                $('.title_color_hex').val(settings['title_color']);
                $('.title_color').val(settings['title_color']);
            }
            if (settings['title_font']) {
                $('.sleek-title').css('font-family', settings['title_font']);
                $('.title_font').val(settings['title_font']);
            }
            if (settings['title_size']) {
                $('.sleek-title').css('font-size', settings['title_size']);
                $('.title_size').val(settings['title_size'].replace('px', ''));
            }
            if (settings['price_color']) {
                $('.sleek-price').css('color', settings['price_color']);
                $('.price_color_hex').val(settings['price_color']);
                $('.price_color').val(settings['price_color']);
            }
            if (settings['price_font']) {
                $('.sleek-price').css('font-family', settings['price_font']);
                $('.price_font').val(settings['price_font']);
            }
            if (settings['price_size']) {
                $('.sleek-price').css('font-size', settings['price_size']);
                $('.price_size').val(settings['price_size'].replace('px', ''));
            }
        }
    <?php else: ?>
        let settings = {
            'shop': '<?php echo $shop; ?>',
            'cart_location': 'form[action="/cart/add"]',
            'cart_position': 'before',
            'drawer_location': 'form[action="/cart/add"]',
            'drawer_position': 'before',
            'refresh_state': 'n',
            'drawer_refresh': '',
            'layout_bg': 'inherit',
            'layout_color': 'inherit',
            'layout_font': 'inherit',
            'layout_size': 'inherit',
            'layout_mt': '5px',
            'layout_mb': '5px',
            'offer_radius': 'inherit',
            'offer_bs': 'inherit',
            'offer_bc': 'inherit',
            'offer_border': 'inherit',
            'button_bg': 'inherit',
            'button_color': 'inherit',
            'button_font': 'inherit',
            'button_size': 'inherit',
            'button_mt': 'inherit',
            'button_mb': 'inherit',
            'button_radius': 'inherit',
            'button_bs': 'inherit',
            'button_bc': 'inherit',
            'button_border': 'inherit',
            'image_radius': 'inherit',
            'image_bs': 'inherit',
            'image_bc': 'inherit',
            'image_border': 'inherit',
            'text_color': 'inherit',
            'text_font': 'inherit',
            'text_size': 'inherit',
            'title_color': 'inherit',
            'title_font': 'inherit',
            'title_size': 'inherit',
            'price_color': 'inherit',
            'price_font': 'inherit',
            'price_size': 'inherit'
        };
    <?php endif;?>

    $('input[name="cart_dom"]').on('input', function() {

        settings['cart_location'] = $(this).val();
    });
    $('select[name="cart_pos"]').change(function() {
        settings['cart_position'] = $(this).val();
    });
    $('input[name="drawer_dom"]').on('input', function() {
        settings['drawer_location'] = $(this).val();
    });
    $('select[name="drawer_pos"]').change(function() {
        settings['drawer_position'] = $(this).val();
    });
    $('input[name="drawer_refresh"]').change(function() {
        if (this.checked) {
            settings['refresh_state'] = 'y';
        } else {
            settings['refresh_state'] = 'n';
        }
    });
    $('textarea[name="refresh_code"]').on('input', function() {
        settings['drawer_refresh'] = $(this).val();
    });

    $('.offer_bg').on('input', function() {
        $('.sleek-upsell').css('background', $(this).val());
        $('.sleek-upsell select').css('background', $(this).val());
        $('.offer_bg_hex').val($(this).val());
        settings['layout_bg'] = $(this).val();
    });
    $('.offer_bg_hex').on('input', function() {
        $('.sleek-upsell').css('background', $(this).val());
        $('.offer_bg').val($(this).val());
        settings['layout_bg'] = $(this).val();
    });

    $('.offer_color').on('input', function() {
        $('.sleek-upsell').css('color', $(this).val());
        $('.sleek-upsell select').css('color', $(this).val());
        $('.offer_color_hex').val($(this).val());
        settings['layout_color'] = $(this).val();
    });
    $('.offer_color_hex').on('input', function() {
        $('.sleek-upsell').css('color', $(this).val());
        $('.sleek-upsell select').css('color', $(this).val());
        $('.offer_color').val($(this).val());
        settings['layout_color'] = $(this).val();
    });

    $('.offer_font').on('input', function() {
        $('.sleek-upsell').css('font-family', $(this).val());
        settings['layout_font'] = $(this).val();
    });

    $('.offer_size').on('input', function() {
        $('.sleek-upsell').css('font-size', $(this).val() + 'px');
        settings['layout_size'] = $(this).val() + 'px';
    });

    $('.offer_mt').on('input', function() {
        $('.sleek-upsell').css('margin-top', $(this).val() + 'px');
        settings['layout_mt'] = $(this).val() + 'px';
    });

    $('.offer_mb').on('input', function() {
        $('.sleek-upsell').css('margin-bottom', $(this).val() + 'px');
        settings['layout_mb'] = $(this).val() + 'px';
    });

    $('.offer_radius').on('input', function() {
        $('.sleek-upsell').css('border-radius', $(this).val() + 'px');
        settings['offer_radius'] = $(this).val() + 'px';
    });

    $('.offer_bs').on('input', function() {
        $('.sleek-upsell').css('border-width', $(this).val() + 'px');
        settings['offer_bs'] = $(this).val() + 'px';
    });


    $('.offer_bc').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.offer_bc_hex').val($(this).val());
        settings['offer_bc'] = $(this).val();
    });
    $('.offer_bc_hex').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.offer_bc').val($(this).val());
        settings['offer_bc'] = $(this).val();
    });

    $('.offer_border').on('change', function() {
        $('.sleek-upsell').css('border-style', $(this).val());
        settings['offer_border'] = $(this).val();
    });

    $('.button_bg').on('input', function() {
        $('button').css('background', $(this).val());
        $('.button_bg_hex').val($(this).val());
        settings['button_bg'] = $(this).val();
    });
    $('.button_bg_hex').on('input', function() {
        $('button').css('background', $(this).val());
        $('.button_bg').val($(this).val());
        settings['button_bg'] = $(this).val();
    });

    $('.button_color').on('input', function() {
        $('button').css('color', $(this).val());
        $('.button_color_hex').val($(this).val());
        settings['button_color'] = $(this).val();
    });
    $('.button_color_hex').on('input', function() {
        $('button').css('color', $(this).val());
        $('.button_color').val($(this).val());
        settings['button_color'] = $(this).val();
    });

    $('.button_font').on('input', function() {
        $('button').css('font-family', $(this).val());
        settings['button_font'] = $(this).val();
    });

    $('.button_size').on('input', function() {
        $('button').css('font-size', $(this).val() + 'px');
        settings['button_size'] = $(this).val() + 'px';
    });

    $('.button_mt').on('input', function() {
        $('button').css('margin-top', $(this).val() + 'px');
        settings['button_mt'] = $(this).val() + 'px';
    });

    $('.button_mb').on('input', function() {
        $('button').css('margin-bottom', $(this).val() + 'px');
        settings['button_mb'] = $(this).val() + 'px';
    });


    $('.button_radius').on('input', function() {
        $('.sleek-upsell button').css('border-radius', $(this).val() + 'px');
        settings['button_radius'] = $(this).val() + 'px';
    });

    $('.button_bs').on('input', function() {
        $('.sleek-upsell button').css('border-width', $(this).val() + 'px');
        settings['button_bs'] = $(this).val() + 'px';
    });


    $('.button_bc').on('input', function() {
        $('.sleek-upsell button').css('border-color', $(this).val());
        $('.button_bc_hex').val($(this).val());
        settings['button_bc'] = $(this).val();
    });
    $('.button_bc_hex').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.button_bc').val($(this).val());
        settings['button_bc'] = $(this).val();
    });

    $('.button_border').on('change', function() {
        $('.sleek-upsell button').css('border-style', $(this).val());
        settings['button_border'] = $(this).val();
    });

    $('.image_radius').on('input', function() {
        $('.sleek-upsell img').css('border-radius', $(this).val() + 'px');
        settings['image_radius'] = $(this).val() + 'px';
    });

    $('.image_bs').on('input', function() {
        $('.sleek-upsell img').css('border-width', $(this).val() + 'px');
        settings['image_bs'] = $(this).val() + 'px';
    });

    $('.image_bc').on('input', function() {
        $('.sleek-upsell img').css('color', $(this).val());
        $('.image_bc_hex').val($(this).val());
        settings['image_bc'] = $(this).val();
    });
    $('.image_bc_hex').on('input', function() {
        $('.sleek-upsell img').css('color', $(this).val());
        $('.image_bc').val($(this).val());
        settings['image_bc'] = $(this).val();
    });

    $('.image_border').on('change', function() {
        $('.sleek-upsell img').css('border-style', $(this).val());
        settings['image_border'] = $(this).val();
    });

    $('.text_color').on('input', function() {
        $('.sleek-text').css('color', $(this).val());
        $('.text_color_hex').val($(this).val());
        settings['text_color'] = $(this).val();
    });
    $('.text_color_hex').on('input', function() {
        $('.sleek-text').css('color', $(this).val());
        $('.text_color').val($(this).val());
        settings['text_color'] = $(this).val();
    });

    $('.text_font').on('input', function() {
        $('.sleek-text').css('font-family', $(this).val());
        settings['text_font'] = $(this).val();
    });

    $('.text_size').on('input', function() {
        $('.sleek-text').css('font-size', $(this).val() + 'px');
        settings['text_size'] = $(this).val() + 'px';
    });

    $('.title_color').on('input', function() {
        $('.sleek-title').css('color', $(this).val());
        $('.title_color_hex').val($(this).val());
        settings['title_color'] = $(this).val();
    });
    $('.title_color_hex').on('input', function() {
        $('.sleek-title').css('color', $(this).val());
        $('.title_color').val($(this).val());
        settings['title_color'] = $(this).val();
    });

    $('.title_font').on('input', function() {
        $('.sleek-title').css('font-family', $(this).val());
        settings['title_font'] = $(this).val();
    });

    $('.title_size').on('input', function() {
        $('.sleek-title').css('font-size', $(this).val() + 'px');
        settings['title_size'] = $(this).val() + 'px';
    });

    $('.price_color').on('input', function() {
        $('.sleek-price').css('color', $(this).val());
        $('.price_color_hex').val($(this).val());
        settings['price_color'] = $(this).val();
    });
    $('.price_color_hex').on('input', function() {
        $('.sleek-price').css('color', $(this).val());
        $('.price_color').val($(this).val());
        settings['price_color'] = $(this).val();
    });

    $('.price_font').on('input', function() {
        $('.sleek-price').css('font-family', $(this).val());
        settings['price_font'] = $(this).val();
    });

    $('.price_size').on('input', function() {
        $('.sleek-price').css('font-size', $(this).val() + 'px');
        settings['price_size'] = $(this).val() + 'px';
    });
    $('.saver').click(function() {
        console.log(settings);
        $('.saver').hide();
        $('.saving').show();
        $.ajax({
            type: "POST",
            url: base_url + 'update_settings?<?php echo $_SERVER['QUERY_STRING']; ?>',
            data: settings,
            success: function(response) {
                console.log(response);
                $('.saving').html('<span class="entypo-thumbs-up btn btn-sucess btn-lg" style="margin-top: 30vh; font-weight: bold; color: #ffffff; background: #000000;">SUCCESFULLY SAVED</span>');
                setTimeout(function() {
                    $('.saver').show();
                    $('.saving').hide(400);
                }, 1000);
            }
        });
    });
</script>
<style>
    /* total width */
    .suw *::-webkit-scrollbar {
        background-color: #fff;
        width: 16px
    }

    /* background of the scrollbar except button or resizer */
    .suw *::-webkit-scrollbar-track {
        background-color: #fff
    }

    .suw *::-webkit-scrollbar-track:hover {
        background-color: #f4f4f4
    }

    /* scrollbar itself */
    .suw *::-webkit-scrollbar-thumb {
        background-color: #981B1B;
        border-radius: 16px;
        border: 5px solid #fff
    }

    .suw *::-webkit-scrollbar-thumb:hover {
        background-color: #981B1B;
        border: 4px solid #f4f4f4
    }

    /* set button(top and bottom of the scrollbar) */
    .suw *::-webkit-scrollbar-button {
        display: none
    }

    .active-selector {
        border: 2px solid #981B1B;
        border-radius: 5px;
    }

    .sleek-upsell,
    .sleek-upsell button,
    .sleek-upsell img {
        border-width: 0px;
        border-style: solid;
    }

    .whole {
        top: 0vh;
        left: 0vw;
        display: flex;
        width: 300px;
        height: 400px;
    }

    .whats {
        width: 50px;
        flex-grow: 4;
        font-weight: 700;
        font-size: 20px;
        color: #FFFFFF;
        cursor: pointer;
        transition: 0.3s;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whats:hover {
        background-color: #981B1B;
        color: white;
    }

    .tu_fields {
        display: table;
        width: 100%;
        margin: 5px auto;
        padding: 10px;
        border: 1px solid #333333;
    }

    .tu_text {
        font-size: 20px;
    }

    input[type="range"]::-webkit-slider-thumb {
        background: #981B1B;
    }

    input[type=color] {
        width: 30px;
        position: absolute;
        top: 0px;
        height: 30px;
        padding: 0px;
        margin: 0px;
        border: none;
        margin-left: -10px;
        border-radius: 0px;
        background: none;
    }

    input[type="color"]::-webkit-color-swatch-wrapper {
        padding: 0;
    }

    input[type="color"]::-webkit-color-swatch {
        border: solid 1px #000;
        /*change color of the swatch border here*/
    }

    .sleek-upsell {
        background: #ECF0F1;
        color: #2B3D51;
        padding: 5px;
        font-family: inherit;
        vertical-align: middle;
        margin: 5px;
    }

    .sleek-image img {
        width: 100px;
    }

    .sleek-text {
        font-weight: bold;
    }

    .sleek-upsell select {
        padding: 4px;
        margin-top: 5px;
    }

    .sleek-prices {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .sleek-compare-price {
        text-decoration: line-through;
    }

    .sleek-upsell button {
        padding: 10px;
        border: none;
        background: #2B3D51;
        color: #FFFFFF;
        font-weight: bold;
        border-radius: 0px;
        cursor: pointer;
        width: 100%;
    }

    /*--------------------------------------*/
    .card {
        display: table;
    }

    .card .sleek-form {
        display: flex;
    }

    .card .sleek-image,
    .card .sleek-offer,
    .card .sleek-card-atc {
        display: table;
        align-self: center;
        padding: 5px;
    }

    .card .sleek-offer {
        flex-grow: 4;
    }

    .card .sleek-prices {
        text-align: center;
    }

    /*--------------------------------------*/
    .block,
    .block .sleek-form,
    .block .sleek-text,
    .block .sleek-atc {
        display: table;
    }

    .sleek-block {
        display: flex;
    }

    .block .sleek-image,
    .block .sleek-offer {
        display: table;
        align-self: center;
        padding: 5px;
    }

    .block .sleek-offer {
        flex-grow: 1;
    }

    /*--------------------------------------*/
    .half-block,
    .half-block .sleek-form,
    .half-block .sleek-text,
    .half-block .sleek-atc {
        display: table;
    }

    .sleek-half-block {
        display: flex;
    }

    .half-block .sleek-image,
    .half-block .sleek-offer {
        display: table;
        align-self: center;
        padding: 5px;
    }

    .half-block .sleek-offer {
        flex-grow: 1;
    }

    /*--------------------------------------*/
    .flat,
    .flat .sleek-form,
    .flat .sleek-text {
        display: table;
    }

    .sleek-flat {
        display: flex;
    }

    .flat .sleek-image,
    .flat .sleek-offer {
        display: table;
        align-self: center;
        padding: 5px;
    }

    .flat .sleek-offer {
        flex-grow: 1;
    }

    .flat .flex-select {
        display: flex;
        width: auto;
        margin-top: 10px;
    }

    .flat .v-select {
        display: table;
        width: 100%;
        align-items: center;
        justify-content: space-between;
    }

    .flat .atc {
        flex-grow: 4;
    }

    .flat .q-select {
        margin-top: 0px;
        margin-right: 10px;
    }

    /*--------------------------------------*/
    .compact,
    .compact .sleek-form,
    .compact .sleek-text,
    .compact .sleek-atc {
        display: table;
    }

    .sleek-compact {
        display: flex;
    }

    .compact .sleek-image,
    .compact .sleek-offer {
        display: table;
        align-self: center;
        padding: 5px;
    }

    .compact .sleek-offer {
        flex-grow: 1;
    }

    .compact .sleek-atc {
        margin-top: 5px;
    }


    /*--------------------------------------*/
    @media only screen and (max-width: 600px) {
        .sleek-upsell {
            width: 97%;
            margin: 5px auto;
        }

        .card select {
            max-width: 100px;
        }

        .block select {
            max-width: 200px;
        }

        .sleek-prices * {
            display: inline-table;
        }

        .block .sleek-form,
        .block .sleek-text,
        .block .sleek-atc {
            width: 100%;
        }
    }

    @font-face {
  font-family: 'entypo';
  src: url('../font/entypo8421.eot?71205724');
  src: url('../font/entypo8421.eot?71205724#iefix') format('embedded-opentype'),
       url('../font/entypo8421.woff?71205724') format('woff'),
       url('../font/entypo8421.ttf?71205724') format('truetype'),
       url('../font/entypo8421.svg?71205724#entypo') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* Chrome hack: SVG is rendered more smooth in Windozze. 100% magic, uncomment if you need it. */
/* Note, that will break hinting! In other OS-es font will be not as sharp as it could be */
/*
@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: 'entypo';
    src: url('../font/entypo.svg?71205724#entypo') format('svg');
  }
}
*/
 
 [class^="entypo-"]:before, [class*=" entypo-"]:before {
  font-family: "entypo";
  font-style: normal;
  font-weight: normal;
  speak: none;
 
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  /* opacity: .8; */
 
  /* For safety - reset parent styles, that can break glyph codes*/
  font-variant: normal;
  text-transform: none;
     
  /* fix buttons height, for twitter bootstrap */
  line-height: 1em;
 
  /* Animation center compensation - margins should be symmetric */
  /* remove if not needed */
  margin-left: .2em;
 
  /* you can be more comfortable with increased icons size */
  /* font-size: 120%; */
 
  /* Uncomment for 3D effect */
  /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */
}
 
.entypo-note:before { content: '\e800'; } /* 'î €' */
.entypo-logo-db:before { content: '\e91b'; } /* 'î¤›' */
.entypo-music:before { content: '\e802'; } /* 'î ‚' */
.entypo-search:before { content: '\e803'; } /* 'î ƒ' */
.entypo-flashlight:before { content: '\e804'; } /* 'î „' */
.entypo-mail:before { content: '\e805'; } /* 'î …' */
.entypo-heart:before { content: '\e806'; } /* 'î †' */
.entypo-heart-empty:before { content: '\e807'; } /* 'î ‡' */
.entypo-star:before { content: '\e808'; } /* 'î ˆ' */
.entypo-star-empty:before { content: '\e809'; } /* 'î ‰' */
.entypo-user:before { content: '\e80a'; } /* 'î Š' */
.entypo-users:before { content: '\e80b'; } /* 'î ‹' */
.entypo-user-add:before { content: '\e80c'; } /* 'î Œ' */
.entypo-video:before { content: '\e80d'; } /* 'î ' */
.entypo-picture:before { content: '\e80e'; } /* 'î Ž' */
.entypo-camera:before { content: '\e80f'; } /* 'î ' */
.entypo-layout:before { content: '\e810'; } /* 'î ' */
.entypo-menu:before { content: '\e811'; } /* 'î ‘' */
.entypo-check:before { content: '\e812'; } /* 'î ’' */
.entypo-cancel:before { content: '\e813'; } /* 'î “' */
.entypo-cancel-circled:before { content: '\e814'; } /* 'î ”' */
.entypo-cancel-squared:before { content: '\e815'; } /* 'î •' */
.entypo-plus:before { content: '\e816'; } /* 'î –' */
.entypo-plus-circled:before { content: '\e817'; } /* 'î —' */
.entypo-plus-squared:before { content: '\e818'; } /* 'î ˜' */
.entypo-minus:before { content: '\e819'; } /* 'î ™' */
.entypo-minus-circled:before { content: '\e81a'; } /* 'î š' */
.entypo-minus-squared:before { content: '\e81b'; } /* 'î ›' */
.entypo-help:before { content: '\e81c'; } /* 'î œ' */
.entypo-help-circled:before { content: '\e81d'; } /* 'î ' */
.entypo-info:before { content: '\e81e'; } /* 'î ž' */
.entypo-info-circled:before { content: '\e81f'; } /* 'î Ÿ' */
.entypo-back:before { content: '\e820'; } /* 'î  ' */
.entypo-home:before { content: '\e821'; } /* 'î ¡' */
.entypo-link:before { content: '\e822'; } /* 'î ¢' */
.entypo-attach:before { content: '\e823'; } /* 'î £' */
.entypo-lock:before { content: '\e824'; } /* 'î ¤' */
.entypo-lock-open:before { content: '\e825'; } /* 'î ¥' */
.entypo-eye:before { content: '\e826'; } /* 'î ¦' */
.entypo-tag:before { content: '\e827'; } /* 'î §' */
.entypo-bookmark:before { content: '\e828'; } /* 'î ¨' */
.entypo-bookmarks:before { content: '\e829'; } /* 'î ©' */
.entypo-flag:before { content: '\e82a'; } /* 'î ª' */
.entypo-thumbs-up:before { content: '\e82b'; } /* 'î «' */
.entypo-thumbs-down:before { content: '\e82c'; } /* 'î ¬' */
.entypo-download:before { content: '\e82d'; } /* 'î ­' */
.entypo-upload:before { content: '\e82e'; } /* 'î ®' */
.entypo-upload-cloud:before { content: '\e82f'; } /* 'î ¯' */
.entypo-reply:before { content: '\e830'; } /* 'î °' */
.entypo-reply-all:before { content: '\e831'; } /* 'î ±' */
.entypo-forward:before { content: '\e832'; } /* 'î ²' */
.entypo-quote:before { content: '\e833'; } /* 'î ³' */
.entypo-code:before { content: '\e834'; } /* 'î ´' */
.entypo-export:before { content: '\e835'; } /* 'î µ' */
.entypo-pencil:before { content: '\e836'; } /* 'î ¶' */
.entypo-feather:before { content: '\e837'; } /* 'î ·' */
.entypo-print:before { content: '\e838'; } /* 'î ¸' */
.entypo-retweet:before { content: '\e839'; } /* 'î ¹' */
.entypo-keyboard:before { content: '\e83a'; } /* 'î º' */
.entypo-comment:before { content: '\e83b'; } /* 'î »' */
.entypo-chat:before { content: '\e83c'; } /* 'î ¼' */
.entypo-bell:before { content: '\e83d'; } /* 'î ½' */
.entypo-attention:before { content: '\e83e'; } /* 'î ¾' */
.entypo-alert:before { content: '\e83f'; } /* 'î ¿' */
.entypo-vcard:before { content: '\e840'; } /* 'î¡€' */
.entypo-address:before { content: '\e841'; } /* 'î¡' */
.entypo-location:before { content: '\e842'; } /* 'î¡‚' */
.entypo-map:before { content: '\e843'; } /* 'î¡ƒ' */
.entypo-direction:before { content: '\e844'; } /* 'î¡„' */
.entypo-compass:before { content: '\e845'; } /* 'î¡…' */
.entypo-cup:before { content: '\e846'; } /* 'î¡†' */
.entypo-trash:before { content: '\e847'; } /* 'î¡‡' */
.entypo-doc:before { content: '\e848'; } /* 'î¡ˆ' */
.entypo-docs:before { content: '\e849'; } /* 'î¡‰' */
.entypo-doc-landscape:before { content: '\e84a'; } /* 'î¡Š' */
.entypo-doc-text:before { content: '\e84b'; } /* 'î¡‹' */
.entypo-doc-text-inv:before { content: '\e84c'; } /* 'î¡Œ' */
.entypo-newspaper:before { content: '\e84d'; } /* 'î¡' */
.entypo-book-open:before { content: '\e84e'; } /* 'î¡Ž' */
.entypo-book:before { content: '\e84f'; } /* 'î¡' */
.entypo-folder:before { content: '\e850'; } /* 'î¡' */
.entypo-archive:before { content: '\e851'; } /* 'î¡‘' */
.entypo-box:before { content: '\e852'; } /* 'î¡’' */
.entypo-rss:before { content: '\e853'; } /* 'î¡“' */
.entypo-phone:before { content: '\e854'; } /* 'î¡”' */
.entypo-cog:before { content: '\e855'; } /* 'î¡•' */
.entypo-tools:before { content: '\e856'; } /* 'î¡–' */
.entypo-share:before { content: '\e857'; } /* 'î¡—' */
.entypo-shareable:before { content: '\e858'; } /* 'î¡˜' */
.entypo-basket:before { content: '\e859'; } /* 'î¡™' */
.entypo-bag:before { content: '\e85a'; } /* 'î¡š' */
.entypo-calendar:before { content: '\e85b'; } /* 'î¡›' */
.entypo-login:before { content: '\e85c'; } /* 'î¡œ' */
.entypo-logout:before { content: '\e85d'; } /* 'î¡' */
.entypo-mic:before { content: '\e85e'; } /* 'î¡ž' */
.entypo-mute:before { content: '\e85f'; } /* 'î¡Ÿ' */
.entypo-sound:before { content: '\e860'; } /* 'î¡ ' */
.entypo-volume:before { content: '\e861'; } /* 'î¡¡' */
.entypo-clock:before { content: '\e862'; } /* 'î¡¢' */
.entypo-hourglass:before { content: '\e863'; } /* 'î¡£' */
.entypo-lamp:before { content: '\e864'; } /* 'î¡¤' */
.entypo-light-down:before { content: '\e865'; } /* 'î¡¥' */
.entypo-light-up:before { content: '\e866'; } /* 'î¡¦' */
.entypo-adjust:before { content: '\e867'; } /* 'î¡§' */
.entypo-block:before { content: '\e868'; } /* 'î¡¨' */
.entypo-resize-full:before { content: '\e869'; } /* 'î¡©' */
.entypo-resize-small:before { content: '\e86a'; } /* 'î¡ª' */
.entypo-popup:before { content: '\e86b'; } /* 'î¡«' */
.entypo-publish:before { content: '\e86c'; } /* 'î¡¬' */
.entypo-window:before { content: '\e86d'; } /* 'î¡­' */
.entypo-arrow-combo:before { content: '\e86e'; } /* 'î¡®' */
.entypo-down-circled:before { content: '\e86f'; } /* 'î¡¯' */
.entypo-left-circled:before { content: '\e870'; } /* 'î¡°' */
.entypo-right-circled:before { content: '\e871'; } /* 'î¡±' */
.entypo-up-circled:before { content: '\e872'; } /* 'î¡²' */
.entypo-down-open:before { content: '\e873'; } /* 'î¡³' */
.entypo-left-open:before { content: '\e874'; } /* 'î¡´' */
.entypo-right-open:before { content: '\e875'; } /* 'î¡µ' */
.entypo-up-open:before { content: '\e876'; } /* 'î¡¶' */
.entypo-down-open-mini:before { content: '\e877'; } /* 'î¡·' */
.entypo-left-open-mini:before { content: '\e878'; } /* 'î¡¸' */
.entypo-right-open-mini:before { content: '\e879'; } /* 'î¡¹' */
.entypo-up-open-mini:before { content: '\e87a'; } /* 'î¡º' */
.entypo-down-open-big:before { content: '\e87b'; } /* 'î¡»' */
.entypo-left-open-big:before { content: '\e87c'; } /* 'î¡¼' */
.entypo-right-open-big:before { content: '\e87d'; } /* 'î¡½' */
.entypo-up-open-big:before { content: '\e87e'; } /* 'î¡¾' */
.entypo-down:before { content: '\e87f'; } /* 'î¡¿' */
.entypo-left:before { content: '\e880'; } /* 'î¢€' */
.entypo-right:before { content: '\e881'; } /* 'î¢' */
.entypo-up:before { content: '\e882'; } /* 'î¢‚' */
.entypo-down-dir:before { content: '\e883'; } /* 'î¢ƒ' */
.entypo-left-dir:before { content: '\e884'; } /* 'î¢„' */
.entypo-right-dir:before { content: '\e885'; } /* 'î¢…' */
.entypo-up-dir:before { content: '\e886'; } /* 'î¢†' */
.entypo-down-bold:before { content: '\e887'; } /* 'î¢‡' */
.entypo-left-bold:before { content: '\e888'; } /* 'î¢ˆ' */
.entypo-right-bold:before { content: '\e889'; } /* 'î¢‰' */
.entypo-up-bold:before { content: '\e88a'; } /* 'î¢Š' */
.entypo-down-thin:before { content: '\e88b'; } /* 'î¢‹' */
.entypo-left-thin:before { content: '\e88c'; } /* 'î¢Œ' */
.entypo-right-thin:before { content: '\e88d'; } /* 'î¢' */
.entypo-note-beamed:before { content: '\e801'; } /* 'î ' */
.entypo-ccw:before { content: '\e88f'; } /* 'î¢' */
.entypo-cw:before { content: '\e890'; } /* 'î¢' */
.entypo-arrows-ccw:before { content: '\e891'; } /* 'î¢‘' */
.entypo-level-down:before { content: '\e892'; } /* 'î¢’' */
.entypo-level-up:before { content: '\e893'; } /* 'î¢“' */
.entypo-shuffle:before { content: '\e894'; } /* 'î¢”' */
.entypo-loop:before { content: '\e895'; } /* 'î¢•' */
.entypo-switch:before { content: '\e896'; } /* 'î¢–' */
.entypo-play:before { content: '\e897'; } /* 'î¢—' */
.entypo-stop:before { content: '\e898'; } /* 'î¢˜' */
.entypo-pause:before { content: '\e899'; } /* 'î¢™' */
.entypo-record:before { content: '\e89a'; } /* 'î¢š' */
.entypo-to-end:before { content: '\e89b'; } /* 'î¢›' */
.entypo-to-start:before { content: '\e89c'; } /* 'î¢œ' */
.entypo-fast-forward:before { content: '\e89d'; } /* 'î¢' */
.entypo-fast-backward:before { content: '\e89e'; } /* 'î¢ž' */
.entypo-progress-0:before { content: '\e89f'; } /* 'î¢Ÿ' */
.entypo-progress-1:before { content: '\e8a0'; } /* 'î¢ ' */
.entypo-progress-2:before { content: '\e8a1'; } /* 'î¢¡' */
.entypo-progress-3:before { content: '\e8a2'; } /* 'î¢¢' */
.entypo-target:before { content: '\e8a3'; } /* 'î¢£' */
.entypo-palette:before { content: '\e8a4'; } /* 'î¢¤' */
.entypo-list:before { content: '\e8a5'; } /* 'î¢¥' */
.entypo-list-add:before { content: '\e8a6'; } /* 'î¢¦' */
.entypo-signal:before { content: '\e8a7'; } /* 'î¢§' */
.entypo-trophy:before { content: '\e8a8'; } /* 'î¢¨' */
.entypo-battery:before { content: '\e8a9'; } /* 'î¢©' */
.entypo-back-in-time:before { content: '\e8aa'; } /* 'î¢ª' */
.entypo-monitor:before { content: '\e8ab'; } /* 'î¢«' */
.entypo-mobile:before { content: '\e8ac'; } /* 'î¢¬' */
.entypo-network:before { content: '\e8ad'; } /* 'î¢­' */
.entypo-cd:before { content: '\e8ae'; } /* 'î¢®' */
.entypo-inbox:before { content: '\e8af'; } /* 'î¢¯' */
.entypo-install:before { content: '\e8b0'; } /* 'î¢°' */
.entypo-globe:before { content: '\e8b1'; } /* 'î¢±' */
.entypo-cloud:before { content: '\e8b2'; } /* 'î¢²' */
.entypo-cloud-thunder:before { content: '\e8b3'; } /* 'î¢³' */
.entypo-flash:before { content: '\e8b4'; } /* 'î¢´' */
.entypo-moon:before { content: '\e8b5'; } /* 'î¢µ' */
.entypo-flight:before { content: '\e8b6'; } /* 'î¢¶' */
.entypo-paper-plane:before { content: '\e8b7'; } /* 'î¢·' */
.entypo-leaf:before { content: '\e8b8'; } /* 'î¢¸' */
.entypo-lifebuoy:before { content: '\e8b9'; } /* 'î¢¹' */
.entypo-mouse:before { content: '\e8ba'; } /* 'î¢º' */
.entypo-briefcase:before { content: '\e8bb'; } /* 'î¢»' */
.entypo-suitcase:before { content: '\e8bc'; } /* 'î¢¼' */
.entypo-dot:before { content: '\e8bd'; } /* 'î¢½' */
.entypo-dot-2:before { content: '\e8be'; } /* 'î¢¾' */
.entypo-dot-3:before { content: '\e8bf'; } /* 'î¢¿' */
.entypo-brush:before { content: '\e8c0'; } /* 'î£€' */
.entypo-magnet:before { content: '\e8c1'; } /* 'î£' */
.entypo-infinity:before { content: '\e8c2'; } /* 'î£‚' */
.entypo-erase:before { content: '\e8c3'; } /* 'î£ƒ' */
.entypo-chart-pie:before { content: '\e8c4'; } /* 'î£„' */
.entypo-chart-line:before { content: '\e8c5'; } /* 'î£…' */
.entypo-chart-bar:before { content: '\e8c6'; } /* 'î£†' */
.entypo-chart-area:before { content: '\e8c7'; } /* 'î£‡' */
.entypo-tape:before { content: '\e8c8'; } /* 'î£ˆ' */
.entypo-graduation-cap:before { content: '\e8c9'; } /* 'î£‰' */
.entypo-language:before { content: '\e8ca'; } /* 'î£Š' */
.entypo-ticket:before { content: '\e8cb'; } /* 'î£‹' */
.entypo-water:before { content: '\e8cc'; } /* 'î£Œ' */
.entypo-droplet:before { content: '\e8cd'; } /* 'î£' */
.entypo-air:before { content: '\e8ce'; } /* 'î£Ž' */
.entypo-credit-card:before { content: '\e8cf'; } /* 'î£' */
.entypo-floppy:before { content: '\e8d0'; } /* 'î£' */
.entypo-clipboard:before { content: '\e8d1'; } /* 'î£‘' */
.entypo-megaphone:before { content: '\e8d2'; } /* 'î£’' */
.entypo-database:before { content: '\e8d3'; } /* 'î£“' */
.entypo-drive:before { content: '\e8d4'; } /* 'î£”' */
.entypo-bucket:before { content: '\e8d5'; } /* 'î£•' */
.entypo-thermometer:before { content: '\e8d6'; } /* 'î£–' */
.entypo-key:before { content: '\e8d7'; } /* 'î£—' */
.entypo-flow-cascade:before { content: '\e8d8'; } /* 'î£˜' */
.entypo-flow-branch:before { content: '\e8d9'; } /* 'î£™' */
.entypo-flow-tree:before { content: '\e8da'; } /* 'î£š' */
.entypo-flow-line:before { content: '\e8db'; } /* 'î£›' */
.entypo-flow-parallel:before { content: '\e8dc'; } /* 'î£œ' */
.entypo-rocket:before { content: '\e8dd'; } /* 'î£' */
.entypo-gauge:before { content: '\e8de'; } /* 'î£ž' */
.entypo-traffic-cone:before { content: '\e8df'; } /* 'î£Ÿ' */
.entypo-cc:before { content: '\e8e0'; } /* 'î£ ' */
.entypo-cc-by:before { content: '\e8e1'; } /* 'î£¡' */
.entypo-cc-nc:before { content: '\e8e2'; } /* 'î£¢' */
.entypo-cc-nc-eu:before { content: '\e8e3'; } /* 'î££' */
.entypo-cc-nc-jp:before { content: '\e8e4'; } /* 'î£¤' */
.entypo-cc-sa:before { content: '\e8e5'; } /* 'î£¥' */
.entypo-cc-nd:before { content: '\e8e6'; } /* 'î£¦' */
.entypo-cc-pd:before { content: '\e8e7'; } /* 'î£§' */
.entypo-cc-zero:before { content: '\e8e8'; } /* 'î£¨' */
.entypo-cc-share:before { content: '\e8e9'; } /* 'î£©' */
.entypo-cc-remix:before { content: '\e8ea'; } /* 'î£ª' */
.entypo-github:before { content: '\e8eb'; } /* 'î£«' */
.entypo-github-circled:before { content: '\e8ec'; } /* 'î£¬' */
.entypo-flickr:before { content: '\e8ed'; } /* 'î£­' */
.entypo-flickr-circled:before { content: '\e8ee'; } /* 'î£®' */
.entypo-vimeo:before { content: '\e8ef'; } /* 'î£¯' */
.entypo-vimeo-circled:before { content: '\e8f0'; } /* 'î£°' */
.entypo-twitter:before { content: '\e8f1'; } /* 'î£±' */
.entypo-twitter-circled:before { content: '\e8f2'; } /* 'î£²' */
.entypo-facebook:before { content: '\e8f3'; } /* 'î£³' */
.entypo-facebook-circled:before { content: '\e8f4'; } /* 'î£´' */
.entypo-facebook-squared:before { content: '\e8f5'; } /* 'î£µ' */
.entypo-gplus:before { content: '\e8f6'; } /* 'î£¶' */
.entypo-gplus-circled:before { content: '\e8f7'; } /* 'î£·' */
.entypo-pinterest:before { content: '\e8f8'; } /* 'î£¸' */
.entypo-pinterest-circled:before { content: '\e8f9'; } /* 'î£¹' */
.entypo-tumblr:before { content: '\e8fa'; } /* 'î£º' */
.entypo-tumblr-circled:before { content: '\e8fb'; } /* 'î£»' */
.entypo-linkedin:before { content: '\e8fc'; } /* 'î£¼' */
.entypo-linkedin-circled:before { content: '\e8fd'; } /* 'î£½' */
.entypo-dribbble:before { content: '\e8fe'; } /* 'î£¾' */
.entypo-dribbble-circled:before { content: '\e8ff'; } /* 'î£¿' */
.entypo-stumbleupon:before { content: '\e900'; } /* 'î¤€' */
.entypo-stumbleupon-circled:before { content: '\e901'; } /* 'î¤' */
.entypo-lastfm:before { content: '\e902'; } /* 'î¤‚' */
.entypo-lastfm-circled:before { content: '\e903'; } /* 'î¤ƒ' */
.entypo-rdio:before { content: '\e904'; } /* 'î¤„' */
.entypo-rdio-circled:before { content: '\e905'; } /* 'î¤…' */
.entypo-spotify:before { content: '\e906'; } /* 'î¤†' */
.entypo-spotify-circled:before { content: '\e907'; } /* 'î¤‡' */
.entypo-qq:before { content: '\e908'; } /* 'î¤ˆ' */
.entypo-instagram:before { content: '\e909'; } /* 'î¤‰' */
.entypo-dropbox:before { content: '\e90a'; } /* 'î¤Š' */
.entypo-evernote:before { content: '\e90b'; } /* 'î¤‹' */
.entypo-flattr:before { content: '\e90c'; } /* 'î¤Œ' */
.entypo-skype:before { content: '\e90d'; } /* 'î¤' */
.entypo-skype-circled:before { content: '\e90e'; } /* 'î¤Ž' */
.entypo-renren:before { content: '\e90f'; } /* 'î¤' */
.entypo-sina-weibo:before { content: '\e910'; } /* 'î¤' */
.entypo-paypal:before { content: '\e911'; } /* 'î¤‘' */
.entypo-picasa:before { content: '\e912'; } /* 'î¤’' */
.entypo-soundcloud:before { content: '\e913'; } /* 'î¤“' */
.entypo-mixi:before { content: '\e914'; } /* 'î¤”' */
.entypo-behance:before { content: '\e915'; } /* 'î¤•' */
.entypo-google-circles:before { content: '\e916'; } /* 'î¤–' */
.entypo-vkontakte:before { content: '\e917'; } /* 'î¤—' */
.entypo-smashing:before { content: '\e918'; } /* 'î¤˜' */
.entypo-sweden:before { content: '\e919'; } /* 'î¤™' */
.entypo-db-shape:before { content: '\e91a'; } /* 'î¤š' */
.entypo-up-thin:before { content: '\e88e'; } /* 'î¢Ž' */
</style>