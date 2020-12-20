<script>
    var base_url = '<?php echo base_url(); ?>';
</script>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" id="style-resource-4">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/entypo@1.0.0-alpha.3/entypo.min.css" id="style-resource-2">
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js" id="script-resource-3"></script>



<div class="saving" style="display: none; position: absolute; top: 0px; right: 0px; z-index: 2000000; width: 300px; height: 400px; background: rgba(152,27,27,0.5); vertical-align: middle; text-align: center;"><img src="<?php echo base_url(); ?>assets/images/loader_2.gif" style="margin-top: 30vh;" /></div>
<div class="btn btn-primary saver" style="display: table; position: absolute; top: 10px; right: 10px; z-index: 2000000;"><span class="entypo-floppy"> SAVE</span></div>
<div class="btn btn-primary" onclick="$('.suw').remove();sessionStorage.setItem('s_u_w', 'n');" style="display: table; position: absolute; bottom: 10px; right: 10px; z-index: 2000000;"><span class="entypo-cancel"> CLOSE</span></div>
<div class="whole">
    <div style="width: 50px; height: 400px; background: #003471; display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center;">
        <div id="p" class="whats btn btn-primary" style="background-color: #003471; color: white;"><span class="entypo-cog"></span></div>
        <div id="d" class="whats btn btn-primary"><span class="entypo-palette"></span></div>
    </div>
    <div style="height: 400px; overflow-y: auto; flex-grow: 4; padding-bottom: 0px;">
        <div class="setting_tab s_p" style="display: flex;">
            <div style="height: 400px; background: #FAFAFA; padding: 10px;">
                <h4>Test different layouts</h4>
                <select type="text" name="test_layout" class="form-control">
                    <option value="card">Card</option>
                    <option value="block">Block</option>
                    <option value="halfBlock">Half-Block</option>
                    <option value="flat">Flat</option>
                    <option value="compact">Compact</option>
                </select>
                <h3 style="width: 100%; text-align: center;">Offer position</h3>
                <small style="display: table; width: 100%; text-align: center;">Use this section to position your offers on the cart page and cart drawer</small>
                <hr />
                <div class="input-group">
                    <span class="layout_previous input-group-addon btn btn-primary entypo-left"></span>
                    <input type="text" class="form-control" value="Change position" disabled style="cursor: none; background: #ffffff !important; border: none !important; color: #000000 !important" />
                    <span class="layout_next input-group-addon btn btn-primary entypo-right"></span>
                </div>
                <br />
                <div class="panel-group joined" id="accordion-test">
                    <div class="panel panel-default cartP">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" aria-expanded="true">
                                    1: Cart Page Settings
                                </a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
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
                    <div class="panel panel-default drawerP">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo" aria-expanded="true">
                                    2: Cart Drawer Settings
                                </a> </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" aria-expanded="true">
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

                </div><br /><br /><br />

            </div>
        </div>
        <div class="setting_tab s_d" style="display: none; background: #FFFFFF;">
            <div class="col-sm-12" style="border-right: 1px solid #003471; margin: 0px; padding: 5px; background: #FFFFFF; height: 400px;">
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
                                                <option>Demo Variant</option>
                                                <option>Demo Variant</option>
                                                <option>Demo Variant</option>
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
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
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
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
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
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
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
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
                                                    <option>Demo Variant</option>
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
    <?php if ($this->db->where('shop', $shop)->get('settings')->num_rows() > 0) : ?>
        let shop_sets = <?php echo json_encode($this->db->where('shop', $shop)->get('settings')->row()); ?>;
        if (shop_sets != null) {
            $('input[name="cart_dom"]').val(shop_sets['cart_location']);
            $('input[name="cart_pos"]').val(shop_sets['cart_position']);
            $('input[name="drawer_dom"]').val(shop_sets['drawer_location']);
            $('input[name="drawer_pos"]').val(shop_sets['drawer_position']);
            if (shop_sets['refresh_state'] = 'y') {
                $('input[name="drawer_refresh"]').prop('checked', true);
            } else {
                $('input[name="drawer_refresh"]').prop('checked', true);
            }
            $('textarea[name="refresh_code"]').val(shop_sets['drawer_refresh']);

            if (shop_sets['layout_bg']) {
                $('.sleek-upsell').css('background', shop_sets['layout_bg']);
                $('.sleek-upsell select').css('background', shop_sets['layout_bg']);
                $('.offer_bg_hex').val(shop_sets['layout_bg']);
                $('.offer_bg').val(shop_sets['layout_bg']);
            }
            if (shop_sets['layout_color']) {
                $('.sleek-upsell').css('color', shop_sets['layout_color']);
                $('.sleek-upsell select').css('color', shop_sets['layout_color']);
                $('.offer_color_hex').val(shop_sets['layout_color']);
                $('.offer_color').val(shop_sets['layout_color']);
            }
            if (shop_sets['layout_font']) {
                $('.sleek-upsell').css('font-family', shop_sets['layout_font']);
                $('.offer_font').val(shop_sets['layout_font']);
            }
            if (shop_sets['layout_size']) {
                $('.sleek-upsell').css('font-size', shop_sets['layout_size']);
                $('.offer_size').val(shop_sets['layout_size'].replace('px', ''));
            }
            if (shop_sets['layout_mt']) {
                $('.sleek-upsell').css('margin-top', shop_sets['layout_mt']);
                $('.offer_mt').val(shop_sets['layout_mt'].replace('px', ''));
            }
            if (shop_sets['layout_mb']) {
                $('.sleek-upsell').css('margin-bottom', shop_sets['layout_mb']);
                $('.offer_mb').val(shop_sets['layout_mb'].replace('px', ''));
            }
            if (shop_sets['offer_radius']) {
                $('.sleek-upsell').css('border-radius', shop_sets['offer_radius']);
                $('.offer_radius').val(shop_sets['offer_radius'].replace('px', ''));
            }
            if (shop_sets['offer_bs']) {
                $('.sleek-upsell').css('border-width', shop_sets['offer_bs']);
                $('.offer_bs').val(shop_sets['offer_bs'].replace('px', ''));
            }
            if (shop_sets['offer_bc']) {
                $('.sleek-upsell').css('border-color', shop_sets['offer_bc']);
                $('.offer_bc').val(shop_sets['offer_bc']);
                $('.offer_bc_hex').val(shop_sets['offer_bc']);
            }
            if (shop_sets['offer_border']) {
                $('.sleek-upsell .sleek-upsell').css('border-style', shop_sets['offer_border']);
                $('.offer_border').val(shop_sets['offer_border']);
            }
            if (shop_sets['button_bg']) {
                $('.sleek-upsell button').css('background', shop_sets['button_bg']);
                $('.button_bg_hex').val(shop_sets['button_bg']);
                $('.button_bg').val(shop_sets['button_bg']);
            }
            if (shop_sets['button_color']) {
                $('.sleek-upsell button').css('color', shop_sets['button_color']);
                $('.button_color').val(shop_sets['button_color']);
                $('.button_color_hex').val(shop_sets['button_color']);
            }
            if (shop_sets['button_font']) {
                $('.sleek-upsell button').css('font-family', shop_sets['button_font']);
                $('.button_font').val(shop_sets['button_font']);
            }
            if (shop_sets['button_size']) {
                $('.sleek-upsell button').css('font-size', shop_sets['button_size']);
                $('.button_size').val(shop_sets['button_size'].replace('px', ''));
            }
            if (shop_sets['button_mt']) {
                $('.sleek-upsell button').css('margin-top', shop_sets['button_mt']);
                $('.button_mt').val(shop_sets['button_mt'].replace('px', ''));
            }
            if (shop_sets['button_mb']) {
                $('.sleek-upsell button').css('margin-bottom', shop_sets['button_mb']);
                $('.button_mb').val(shop_sets['button_mb'].replace('px', ''));
            }
            if (shop_sets['button_radius']) {
                $('.sleek-upsell button').css('border-radius', shop_sets['button_radius']);
                $('.button_radius').val(shop_sets['button_radius'].replace('px', ''));
            }
            if (shop_sets['button_bs']) {
                $('.sleek-upsell button').css('border-width', shop_sets['button_bs']);
                $('.button_bs').val(shop_sets['button_bs'].replace('px', ''));
            }
            if (shop_sets['button_bc']) {
                $('.sleek-upsell button').css('border-color', shop_sets['button_bc']);
                $('.button_bc_hex').val(shop_sets['button_bc']);
                $('.button_bc').val(shop_sets['button_bc']);
            }
            if (shop_sets['button_border']) {
                $('.sleek-upsell button').css('border-style', shop_sets['button_border']);
                $('.button_border').val(shop_sets['button_border']);
            }
            if (shop_sets['image_radius']) {
                $('.sleek-upsell img').css('border-radius', shop_sets['image_radius']);
                $('.image_radius').val(shop_sets['image_radius'].replace('px', ''));
            }
            if (shop_sets['image_bs']) {
                $('.sleek-upsell img').css('border-width', shop_sets['image_bs']);
                $('.image_bs').val(shop_sets['image_bs'].replace('px', ''));
            }
            if (shop_sets['image_bc']) {
                $('.sleek-upsell img').css('color', shop_sets['image_bc']);
                $('.image_bc_hex').val(shop_sets['image_bc']);
                $('.image_bc').val(shop_sets['image_bc']);
            }
            if (shop_sets['image_border']) {
                $('.sleek-upsell img').css('border-style', shop_sets['image_border']);
                $('.image_border').val(shop_sets['image_border']);
            }
            if (shop_sets['text_color']) {
                $('.sleek-text').css('color', shop_sets['text_color']);
                $('.text_color_hex').val(shop_sets['text_color']);
                $('.text_color').val(shop_sets['text_color']);
            }
            if (shop_sets['text_font']) {
                $('.sleek-text').css('font-family', shop_sets['text_font']);
                $('.text_font').val(shop_sets['text_font']);
            }
            if (shop_sets['text_size']) {
                $('.sleek-text').css('font-size', shop_sets['text_size']);
                $('.text_size').val(shop_sets['text_size'].replace('px', ''));
            }
            if (shop_sets['title_color']) {
                $('.sleek-title').css('color', shop_sets['title_color']);
                $('.title_color_hex').val(shop_sets['title_color']);
                $('.title_color').val(shop_sets['title_color']);
            }
            if (shop_sets['title_font']) {
                $('.sleek-title').css('font-family', shop_sets['title_font']);
                $('.title_font').val(shop_sets['title_font']);
            }
            if (shop_sets['title_size']) {
                $('.sleek-title').css('font-size', shop_sets['title_size']);
                $('.title_size').val(shop_sets['title_size'].replace('px', ''));
            }
            if (shop_sets['price_color']) {
                $('.sleek-price').css('color', shop_sets['price_color']);
                $('.price_color_hex').val(shop_sets['price_color']);
                $('.price_color').val(shop_sets['price_color']);
            }
            if (shop_sets['price_font']) {
                $('.sleek-price').css('font-family', shop_sets['price_font']);
                $('.price_font').val(shop_sets['price_font']);
            }
            if (shop_sets['price_size']) {
                $('.sleek-price').css('font-size', shop_sets['price_size']);
                $('.price_size').val(shop_sets['price_size'].replace('px', ''));
            }
        }
    <?php else : ?>
        let shop_sets = {
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
    <?php endif; ?>
    let things = $('div');
    if (window.location.pathname.includes('/cart')) {
        $('.drawerP').remove();
        $('.layout_previous').click(function() {
            if (document.querySelector(shop_sets['cart_location']) == null) {
                shop_sets['cart_location'] = 'form[action="/cart"]';
            } else {
                if (document.querySelector(shop_sets['cart_location']).previousSibling == null) {
                    shop_sets['cart_location'] = document.querySelector(shop_sets['cart_location']).parentNode;
                } else {
                    shop_sets['cart_location'] = document.querySelector(shop_sets['cart_location']).previousSibling;
                }
            }
            console.log(shop_sets['cart_location']);
            changePos();
            $('input[name="cart_dom"]').val(shop_sets['cart_location']);
        });

        $('.layout_next').click(function() {
            if (document.querySelector(shop_sets['cart_location']) == null) {
                shop_sets['cart_location'] = 'form[action="/cart"]';
            } else {
                if (document.querySelector(shop_sets['cart_location']).nextSibling == null) {
                    shop_sets['cart_location'] = document.querySelector(shop_sets['cart_location']).firstChild;
                } else {
                    shop_sets['cart_location'] = document.querySelector(shop_sets['cart_location']).nextSibling;
                }
            }
            console.log(shop_sets['cart_location']);
            console.log(document.querySelector(shop_sets['cart_location']).nextSibling);
            console.log(document.querySelector(shop_sets['cart_location']).previousSibling);
            console.log(document.querySelector(shop_sets['cart_location']).firstChild);
            console.log(document.querySelector(shop_sets['cart_location']).parentNode);
            changePos();
            $('input[name="cart_dom"]').val(shop_sets['cart_location']);
        });
    } else {
        $('.cartP').remove();
        $('.layout_previous').click(function() {
            if (document.querySelector(shop_sets['drawer_location']) == null) {
                shop_sets['drawer_location'] = 'form[action="/cart/add"]';
            } else {
                if (document.querySelector(shop_sets['drawer_location']).previousSibling == null) {
                    shop_sets['drawer_location'] = document.querySelector(shop_sets['drawer_location']).parentNode;
                } else {
                    shop_sets['drawer_location'] = document.querySelector(shop_sets['drawer_location']).previousSibling;
                }
            }
            console.log(shop_sets['drawer_location']);
            changePos();
            $('input[name="cart_dom"]').val(shop_sets['drawer_location']);
        });

        $('.layout_next').click(function() {
            if (document.querySelector(shop_sets['drawer_location']) == null) {
                shop_sets['drawer_location'] = 'form[action="/cart/add"]';
            } else {
                if (document.querySelector(shop_sets['drawer_location']).nextSibling == null) {
                    shop_sets['drawer_location'] = document.querySelector(shop_sets['drawer_location']).firstChild;
                } else {
                    shop_sets['drawer_location'] = document.querySelector(shop_sets['drawer_location']).nextSibling;
                }
            }
            console.log(shop_sets['drawer_location']);
            changePos();
            $('input[name="cart_dom"]').val(shop_sets['drawer_location']);
        });
    }

    changePos();

    $('.whats').click(function() {
        let hii = $(this).attr('id');
        $('.whats').attr('style', '');
        $(this).attr('style', 'background-color: #003471; color: white;');
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

    $('input[name="cart_dom"]').on('input', function() {
        shop_sets['cart_location'] = $(this).val();
        changePos();
    });
    $('select[name="cart_pos"]').change(function() {
        shop_sets['cart_position'] = $(this).val();
        changePos();
    });
    $('input[name="drawer_dom"]').on('input', function() {
        shop_sets['drawer_location'] = $(this).val();
        changePos();
    });
    $('select[name="drawer_pos"]').change(function() {
        shop_sets['drawer_position'] = $(this).val();
        changePos();
    });
    $('select[name="test_layout"]').change(function() {
        changePos();
    });

    function changePos() {

        let chosen_layout = '<div class="card sleek-upsell"> <form class="sleek-form"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">Blue silk tuxedo</div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </div></form> </div>';
        if ($('select[name="test_layout"]').val() == 'card') {
            chosen_layout = '<div class="card sleek-upsell"> <form class="sleek-form"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">Blue silk tuxedo</div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </div></form> </div>';
        }
        if ($('select[name="test_layout"]').val() == 'block') {
            chosen_layout = '<div class="block sleek-upsell"> <form class="sleek-form"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-block"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-title">Blue silk tuxedo</div><div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> </div></div></div><button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </form> </div>';
        }
        if ($('select[name="test_layout"]').val() == 'halfBlock') {
            chosen_layout = '<div class="half-block sleek-upsell"> <form class="sleek-form"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">Blue silk tuxedo</div><div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> </div></div></div><button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </form> </div>';
        }
        if ($('select[name="test_layout"]').val() == 'flat') {
            chosen_layout = '<div class="flat sleek-upsell"> <form class="sleek-form"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-flat"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-title">Blue silk tuxedo</div><div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <div class="flex-select"> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> <button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </div></div></div></div></form> </div>';
        }
        if ($('select[name="test_layout"]').val() == 'compact') {
            chosen_layout = '<div class="compact sleek-upsell"> <form class="sleek-form"> <div class="sleek-compact"> <div class="sleek-image"> <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">Blue silk tuxedo</div><div class="sleek-prices"> <span class="sleek-price money">KES 200</span> <span class="sleek-compare-price money">KES 200</span> </div><div class="sleek-selectors"> <select class="v-select"> <option>Demo Variant</option> <option>Demo Variant</option> <option>Demo Variant</option> </select> <select class="q-select"> <option>1</option> <option>2</option> <option>3</option> </select> </div><button class="sleek-atc" type="submit" onclick="return false;">ADD TO CART</button> </div></div></form> </div>';
        }

        $('.sleek-upsell').remove();
        if (window.location.pathname.includes('/cart')) {
            if (shop_sets['cart_position'] == 'prepend') {
                $(shop_sets['cart_location']).prepend(chosen_layout);
            }
            if (shop_sets['cart_position'] == 'append') {
                $(shop_sets['cart_location']).append(chosen_layout);
            }
            if (shop_sets['cart_position'] == 'before') {
                $(chosen_layout).insertBefore(shop_sets['cart_location']);
            }
            if (shop_sets['cart_position'] == 'after') {
                $(chosen_layout).insertAfter(shop_sets['cart_location']);
            }
        } else {
            if (shop_sets['drawer_position'] == 'prepend') {
                $(shop_sets['drawer_location']).prepend(chosen_layout);
            }
            if (shop_sets['drawer_position'] == 'append') {
                $(shop_sets['drawer_location']).append(chosen_layout);
            }
            if (shop_sets['drawer_position'] == 'before') {
                $(chosen_layout).insertBefore(shop_sets['drawer_location']);
            }
            if (shop_sets['drawer_position'] == 'after') {
                $(chosen_layout).insertAfter(shop_sets['drawer_location']);
            }
        }
    }
    $('input[name="drawer_refresh"]').change(function() {
        if (this.checked) {
            shop_sets['refresh_state'] = 'y';
        } else {
            shop_sets['refresh_state'] = 'n';
        }
    });
    $('textarea[name="refresh_code"]').on('input', function() {
        shop_sets['drawer_refresh'] = $(this).val();
    });

    $('.offer_bg').on('input', function() {
        $('.sleek-upsell').css('background', $(this).val());
        $('.sleek-upsell select').css('background', $(this).val());
        $('.offer_bg_hex').val($(this).val());
        shop_sets['layout_bg'] = $(this).val();
    });
    $('.offer_bg_hex').on('input', function() {
        $('.sleek-upsell').css('background', $(this).val());
        $('.offer_bg').val($(this).val());
        shop_sets['layout_bg'] = $(this).val();
    });

    $('.offer_color').on('input', function() {
        $('.sleek-upsell').css('color', $(this).val());
        $('.sleek-upsell select').css('color', $(this).val());
        $('.offer_color_hex').val($(this).val());
        shop_sets['layout_color'] = $(this).val();
    });
    $('.offer_color_hex').on('input', function() {
        $('.sleek-upsell').css('color', $(this).val());
        $('.sleek-upsell select').css('color', $(this).val());
        $('.offer_color').val($(this).val());
        shop_sets['layout_color'] = $(this).val();
    });

    $('.offer_font').on('input', function() {
        $('.sleek-upsell').css('font-family', $(this).val());
        shop_sets['layout_font'] = $(this).val();
    });

    $('.offer_size').on('input', function() {
        $('.sleek-upsell').css('font-size', $(this).val() + 'px');
        shop_sets['layout_size'] = $(this).val() + 'px';
    });

    $('.offer_mt').on('input', function() {
        $('.sleek-upsell').css('margin-top', $(this).val() + 'px');
        shop_sets['layout_mt'] = $(this).val() + 'px';
    });

    $('.offer_mb').on('input', function() {
        $('.sleek-upsell').css('margin-bottom', $(this).val() + 'px');
        shop_sets['layout_mb'] = $(this).val() + 'px';
    });

    $('.offer_radius').on('input', function() {
        $('.sleek-upsell').css('border-radius', $(this).val() + 'px');
        shop_sets['offer_radius'] = $(this).val() + 'px';
    });

    $('.offer_bs').on('input', function() {
        $('.sleek-upsell').css('border-width', $(this).val() + 'px');
        shop_sets['offer_bs'] = $(this).val() + 'px';
    });


    $('.offer_bc').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.offer_bc_hex').val($(this).val());
        shop_sets['offer_bc'] = $(this).val();
    });
    $('.offer_bc_hex').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.offer_bc').val($(this).val());
        shop_sets['offer_bc'] = $(this).val();
    });

    $('.offer_border').on('change', function() {
        $('.sleek-upsell').css('border-style', $(this).val());
        shop_sets['offer_border'] = $(this).val();
    });

    $('.button_bg').on('input', function() {
        $('button').css('background', $(this).val());
        $('.button_bg_hex').val($(this).val());
        shop_sets['button_bg'] = $(this).val();
    });
    $('.button_bg_hex').on('input', function() {
        $('button').css('background', $(this).val());
        $('.button_bg').val($(this).val());
        shop_sets['button_bg'] = $(this).val();
    });

    $('.button_color').on('input', function() {
        $('button').css('color', $(this).val());
        $('.button_color_hex').val($(this).val());
        shop_sets['button_color'] = $(this).val();
    });
    $('.button_color_hex').on('input', function() {
        $('button').css('color', $(this).val());
        $('.button_color').val($(this).val());
        shop_sets['button_color'] = $(this).val();
    });

    $('.button_font').on('input', function() {
        $('button').css('font-family', $(this).val());
        shop_sets['button_font'] = $(this).val();
    });

    $('.button_size').on('input', function() {
        $('button').css('font-size', $(this).val() + 'px');
        shop_sets['button_size'] = $(this).val() + 'px';
    });

    $('.button_mt').on('input', function() {
        $('button').css('margin-top', $(this).val() + 'px');
        shop_sets['button_mt'] = $(this).val() + 'px';
    });

    $('.button_mb').on('input', function() {
        $('button').css('margin-bottom', $(this).val() + 'px');
        shop_sets['button_mb'] = $(this).val() + 'px';
    });


    $('.button_radius').on('input', function() {
        $('.sleek-upsell button').css('border-radius', $(this).val() + 'px');
        shop_sets['button_radius'] = $(this).val() + 'px';
    });

    $('.button_bs').on('input', function() {
        $('.sleek-upsell button').css('border-width', $(this).val() + 'px');
        shop_sets['button_bs'] = $(this).val() + 'px';
    });


    $('.button_bc').on('input', function() {
        $('.sleek-upsell button').css('border-color', $(this).val());
        $('.button_bc_hex').val($(this).val());
        shop_sets['button_bc'] = $(this).val();
    });
    $('.button_bc_hex').on('input', function() {
        $('.sleek-upsell').css('border-color', $(this).val());
        $('.button_bc').val($(this).val());
        shop_sets['button_bc'] = $(this).val();
    });

    $('.button_border').on('change', function() {
        $('.sleek-upsell button').css('border-style', $(this).val());
        shop_sets['button_border'] = $(this).val();
    });

    $('.image_radius').on('input', function() {
        $('.sleek-upsell img').css('border-radius', $(this).val() + 'px');
        shop_sets['image_radius'] = $(this).val() + 'px';
    });

    $('.image_bs').on('input', function() {
        $('.sleek-upsell img').css('border-width', $(this).val() + 'px');
        shop_sets['image_bs'] = $(this).val() + 'px';
    });

    $('.image_bc').on('input', function() {
        $('.sleek-upsell img').css('color', $(this).val());
        $('.image_bc_hex').val($(this).val());
        shop_sets['image_bc'] = $(this).val();
    });
    $('.image_bc_hex').on('input', function() {
        $('.sleek-upsell img').css('color', $(this).val());
        $('.image_bc').val($(this).val());
        shop_sets['image_bc'] = $(this).val();
    });

    $('.image_border').on('change', function() {
        $('.sleek-upsell img').css('border-style', $(this).val());
        shop_sets['image_border'] = $(this).val();
    });

    $('.text_color').on('input', function() {
        $('.sleek-text').css('color', $(this).val());
        $('.text_color_hex').val($(this).val());
        shop_sets['text_color'] = $(this).val();
    });
    $('.text_color_hex').on('input', function() {
        $('.sleek-text').css('color', $(this).val());
        $('.text_color').val($(this).val());
        shop_sets['text_color'] = $(this).val();
    });

    $('.text_font').on('input', function() {
        $('.sleek-text').css('font-family', $(this).val());
        shop_sets['text_font'] = $(this).val();
    });

    $('.text_size').on('input', function() {
        $('.sleek-text').css('font-size', $(this).val() + 'px');
        shop_sets['text_size'] = $(this).val() + 'px';
    });

    $('.title_color').on('input', function() {
        $('.sleek-title').css('color', $(this).val());
        $('.title_color_hex').val($(this).val());
        shop_sets['title_color'] = $(this).val();
    });
    $('.title_color_hex').on('input', function() {
        $('.sleek-title').css('color', $(this).val());
        $('.title_color').val($(this).val());
        shop_sets['title_color'] = $(this).val();
    });

    $('.title_font').on('input', function() {
        $('.sleek-title').css('font-family', $(this).val());
        shop_sets['title_font'] = $(this).val();
    });

    $('.title_size').on('input', function() {
        $('.sleek-title').css('font-size', $(this).val() + 'px');
        shop_sets['title_size'] = $(this).val() + 'px';
    });

    $('.price_color').on('input', function() {
        $('.sleek-price').css('color', $(this).val());
        $('.price_color_hex').val($(this).val());
        shop_sets['price_color'] = $(this).val();
    });
    $('.price_color_hex').on('input', function() {
        $('.sleek-price').css('color', $(this).val());
        $('.price_color').val($(this).val());
        shop_sets['price_color'] = $(this).val();
    });

    $('.price_font').on('input', function() {
        $('.sleek-price').css('font-family', $(this).val());
        shop_sets['price_font'] = $(this).val();
    });

    $('.price_size').on('input', function() {
        $('.sleek-price').css('font-size', $(this).val() + 'px');
        shop_sets['price_size'] = $(this).val() + 'px';
    });
    $('.saver').click(function() {
        console.log(shop_sets);
        $('.saver').hide();
        $('.saving').show();
        $.ajax({
            type: "POST",
            url: base_url + 'update_settings?<?php echo $_SERVER['QUERY_STRING']; ?>',
            data: shop_sets,
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
    .panel-default>.panel-heading {
        background: #ffffff !important;
    }

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
        background-color: #003471;
        border-radius: 16px;
        border: 5px solid #fff
    }

    .suw *::-webkit-scrollbar-thumb:hover {
        background-color: #003471;
        border: 4px solid #f4f4f4
    }

    /* set button(top and bottom of the scrollbar) */
    .suw *::-webkit-scrollbar-button {
        display: none
    }

    .active-selector {
        border: 2px solid #003471;
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
        background-color: #003471;
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
        background: #003471;
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
        opacity: 1 !important;
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
</style>