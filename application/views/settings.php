<div class="whole">
    <div class="juu">
        <div class="juu_flex">
            <div id="p" class="whats" style="background-color: #002A5A; color: white;">POSITION</div>
            <div id="d" class="whats">DISPLAY</div>
            <div id="s" class="whats">SHOP</div>
            <div id="a" class="whats">ADMIN</div>
        </div>
    </div>
    <div class="mwili">
        <div class="setting_tab s_p">
            <div class="col-sm-4 col-xs-12" style="position: fixed; top: 10vh; left: 0px; height: 85vh;">
                <h3 style="width: 100%; text-align: center;">Cart Page Settings</h3>
                <small style="display: table; width: 100%; text-align: center;">Use this section to select the offer location on the cart page</small>
                <hr />
                <span class="tu_text">Make the offer appear</span>
                <select class="tu_fields">
                    <option>Before</option>
                    <option>After</option>
                </select>
                <span class="tu_text">the</span>
                <input class="tu_fields" type="text" placeholder="" />
                <span class="tu_text">text.</span>
                <h3 style="width: 100%; text-align: center;">Cart Drawer Settings</h3>
                <small style="display: table; width: 100%; text-align: center;">Use this section to select the offer location on the cart drawer (if you have one)</small>
            </div>
            <iframe src="<?php echo 'https://'. $shop .'.myshopify.com'; ?>" class="col-sm-8 offer-change-section hidden-xs" style="position: fixed; top: 10vh; right: 0px; height: 89vh; margin: 0px; padding: 0px;" sandbox="allow-same-origin allow-forms allow-popups allow-scripts allow-modals"></iframe>
        </div>
        <div class="setting_tab s_d" style="display: none;">
            <div class="col-sm-4 col-xs-12" style="position: fixed; top: 10vh; left: 0px; height: 85vh;">
                <div style="position: absolute; top: 0px; left: 0px; height: 85vh; overflow-y: auto; width: 100%;">
                    <div class="panel-group joined" id="accordion-test-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-2" aria-expanded="true">
                                        1: General Offer Layout Settings
                                    </a> </h4>
                            </div>
                            <div id="collapseOne-2" class="panel-collapse collapse in">
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
                                        <input type="text" class="offer_size form-control" value="12" />
                                    </div>
                                    <div style="display: table; width: 100%; margin-bottom: 10px;">
                                        <h4>Space Above offer</h4>
                                        <input type="text" class="offer_mt form-control" value="0" />
                                    </div>
                                    <div style="display: table; width: 100%; margin-bottom: 10px;">
                                        <h4>Space below offer</h4>
                                        <input type="text" class="offer_mb form-control" value="0" />
                                    </div>
                                    <div style="display: table; width: 100%; margin-bottom: 10px;">
                                        <h4>Border Radius</h4>
                                        <input type="text" class="offer_radius form-control" value="0" />
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
                                        <input type="text" class="offer_bs form-control" value="0" />
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
                                        <input type="text" class="button_size form-control" value="12" />
                                    </div>
                                    <div style="display: table; width: 100%; margin-bottom: 10px;">
                                        <h4>Space Above offer</h4>
                                        <input type="text" class="button_mt form-control" value="0" />
                                    </div>
                                    <div style="display: table; width: 100%; margin-bottom: 10px;">
                                        <h4>Space below offer</h4>
                                        <input type="text" class="button_mb form-control" value="0" />
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
                                        <input type="text" class="image_radius form-control" value="0" />
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
                                        <input type="text" class="image_bs form-control" value="0" />
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
                                        <input type="text" class="text_size form-control" value="12" />
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
                                        <input type="text" class="title_size form-control" value="12" />
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
                                        <input type="text" class="price_size form-control" value="12" />
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
            <div class="col-sm-8 offer-change-section hidden-xs" style="position: fixed; top: 10vh; right: 0px; height: 89vh;">
                <div class="affixiate">
                    <div class="row" style="background: #ffffff; padding-top: 10px; padding-bottom: 10px;">
                        <div class="col-sm-12" style="vertical-align: middle;">
                            <div class="sleekOffer">
        
                                <div class="card sleek-upsell">
                                    <form class="sleek-form">
                                        <div class="sleek-image">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/>
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
                                <div class="hidden halfBlock sleek-upsell">
                                    <form class="col-xs-12">
                                        <div class="col-sm-4 product-image-wrapper">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" class="img img-responsive product-image" />
                                        </div>
                                        <div class="col-sm-8 offer-wrapper">
                                            <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                            <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                            <div class="col-xs-12"><span class="product-price money">$ 200</span><span class="product-compare-price money">$ 200</span></div>
                                            <div class="col-xs-12" style="margin: 0px; padding: 0px;">
                                                <div class="col-xs-9" style="margin: 0px; padding: 0px;">
                                                    <select class="form-control v-select" style="margin: 0px; ">
                                                        <option>small</option>
                                                        <option>large</option>
                                                        <option>xl</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-3" style="margin: 0px; padding: 0px;">
                                                    <select class="form-control q-select" style="margin: 0px; ">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="col-xs-12 form-controll btn form-submit-btn">ADD TO
                                                CART</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="hidden block sleek-upsell">
                                    <form class="sleek-form">
                                        <div class="sleek-text">Need Free Shipping?</div>
                                        <div class="sleek-block">
                                            <div class="sleek-image">
                                                <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"/>
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
                                <div class="hidden flat sleek-upsell">
                                    <form class="col-xs-12">
                                        <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                        <div class="col-sm-4 product-image-wrapper">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" class="img img-responsive product-image" />
                                        </div>
                                        <div class="col-sm-8 offer-wrapper">
                                            <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                            <div class="col-xs-12"><span class="product-price money">$ 200</span><span class="product-compare-price money">$ 200</span></div>
                                            <div class="col-xs-12" style="margin: 0px; padding: 0px;">
                                                <select class="form-control v-select col-xs-12" style="margin: 0px; ">
                                                    <option>small</option>
                                                    <option>large</option>
                                                    <option>xl</option>
                                                </select>
                                                <select class="form-control q-select col-xs-3" style="margin: 0px; ">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <button type="submit" class="form-controll btn col-xs-9 form-submit-btn">ADD TO
                                                    CART</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="hidden compact sleek-upsell">
                                    <form class="col-xs-12">
                                        <div class="col-sm-4 product-image-wrapper">
                                            <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" class="img img-responsive product-image" />
                                        </div>
                                        <div class="col-sm-8 offer-wrapper">
                                            <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                            <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                            <div class="col-xs-12"><span class="product-price money">$ 200</span><span class="product-compare-price money">$ 200</span></div>
                                            <div class="col-xs-12" style="margin: 0px; padding: 0px;">
                                                <select class="form-control col-xs-12 v-select" style="margin: 0px; ">
                                                    <option>small</option>
                                                    <option>large</option>
                                                    <option>xl</option>
                                                </select>
                                                <select class="form-control q-select" style="margin: 0px; ">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                                <button type="submit" class="col-xs-12 form-controll btn form-submit-btn">ADD TO
                                                    CART</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="offerPicker">
                                <img class="active-selector" src="<?php echo base_url(); ?>assets/images/card.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('card');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                                <img src="<?php echo base_url(); ?>assets/images/block.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('block');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                                <img src="<?php echo base_url(); ?>assets/images/half_block.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('halfBlock');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                                <img src="<?php echo base_url(); ?>assets/images/flat.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('flat');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                                <img src="<?php echo base_url(); ?>assets/images/compact.png" onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('compact');" style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="setting_tab s_s" style="display: none;"></div>
        <div class="setting_tab s_a" style="display: none;"></div>
    </div>
    <div class="chini"></div>
</div>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-colorpicker.min.js" id="script-resource-14"></script>
<script>
    $('.s_p').trigger('click');
    
    let settings = {
        'shop': '<?php echo $shop; ?>',
        'cart_location': 'form[action="/cart/add"]',
        'cart_position': 'before',
        'drawer_location': 'form[action="/cart/add"]',
        'drawer_position': 'before',
        'refresh_state': 'y',
        'drawer_refresh': '',
        'layout_bg': 'inherit',
        'layout_color': 'inherit',
        'layout_font': 'inherit',
        'layout_size': '12px',
        'layout_mt': '0px',
        'layout_mb': '0px',
        'layout_pt': '0px',
        'layout_pb': '0px',
        'text_color': 'inherit',
        'text_font': 'inherit',
        'text_size': '12px',
        'title_color': 'inherit',
        'title_font': 'inherit',
        'title_size': '12px',
        'price_color': 'inherit',
        'price_font': 'inherit',
        'price_size': '12px',
        'button_bg': 'inherit',
        'button_mt': '0px',
        'button_mb': '0px',
        'button_pt': '0px',
        'button_pb': '0px',
        'button_color': 'inherit',
        'button_font': 'inherit',
        'button_size': 'auto',
        'button_radius': '0px',
        'button_bs': '0px',
        'button_bc': 'inherit',
        'button_border': 'solid',
        'selector_color': 'inherit',
        'selector_font': '12px',
        'selector_size': 'auto',
        'image_radius': '0px',
        'image_bs': '0px',
        'image_bc': 'inherit',
        'image_border': 'solid'
    };
    
    $('.whats').click(function() {
        let hii = $(this).attr('id');
        $('.whats').attr('style', '');
        $(this).attr('style', 'background-color: #002A5A; color: white;');
        $('.setting_tab').hide(200);
        setTimeout(function(){$('.s_' + hii).show(200);}, 250);
    });

    function hideAll() {
        $('.card').addClass('hidden');
        $('.halfBlock').addClass('hidden');
        $('.block').addClass('hidden');
        $('.flat').addClass('hidden');
        $('.compact').addClass('hidden');
    }

    function pick(offerLayout) {
        hideAll();
        $('.' + offerLayout).removeClass('hidden');
        $('.offer_layout').val(offerLayout);
    }
    
    $('.offer_bg').on('input', function(){
        $('.sleek-upsell').css('background',$(this).val());
        $('.sleek-upsell select').css('background',$(this).val());
        $('.offer_bg_hex').val($(this).val());
        settings['layout_bg'] = $(this.val());
    });
    $('.offer_bg_hex').on('input', function(){
        $('.sleek-upsell').css('background',$(this).val());
        $('.offer_color').val($(this).val());
        settings['layout_bg'] = $(this.val());
    });
    
    $('.offer_color').on('input', function(){
        $('.sleek-upsell').css('color',$(this).val());
        $('.offer_color_hex').val($(this).val());
        settings['layout_color'] = $(this.val());
    });
    $('.offer_color_hex').on('input', function(){
        $('.sleek-upsell').css('color',$(this).val());
        $('.offer_color').val($(this).val());
        settings['layout_color'] = $(this.val());
    });
    
    $('.offer_font').on('input', function(){
        $('.sleek-upsell').css('font-family',$(this).val());
        settings['layout_font'] = $(this.val());
    });
    
    $('.offer_size').on('input', function(){
        $('.sleek-upsell').css('font-size',$(this).val()+'px');
        settings['layout_size'] = $(this).val()+'px';
    });
    
    $('.offer_mt').on('input', function(){
        $('.sleek-upsell').css('margin-top',$(this).val()+'px');
        settings['layout_mt'] = $(this).val()+'px';
    });
    
    $('.offer_mb').on('input', function(){
        $('.sleek-upsell').css('margin-bottom',$(this).val()+'px');
        settings['layout_mb'] = $(this).val()+'px';
    });
    
    $('.offer_radius').on('input', function(){
        $('.sleek-upsell').css('border-radius',$(this).val()+'px');
        settings['offer_radius'] = $(this).val()+'px';
    });
    
    $('.offer_bs').on('input', function(){
        $('.sleek-upsell').css('border-width',$(this).val()+'px');
        settings['offer_bs'] = $(this).val()+'px';
    });
    
    
    $('.offer_bc').on('input', function(){
        $('.sleek-upsell').css('border-color',$(this).val());
        $('.offer_bc_hex').val($(this).val());
        settings['offer_bc'] = $(this.val());
    });
    $('.offer_bc_hex').on('input', function(){
        $('.sleek-upsell').css('border-color',$(this).val());
        $('.offer_bc').val($(this).val());
        settings['offer_bc'] = $(this.val());
    });
    
    $('.offer_border').on('change', function(){
        $('.sleek-upsell').css('border-style',$(this).val());
        settings['offer_border'] = $(this).val()+'px';
    });
    
    $('.button_bg').on('input', function(){
        $('button').css('background',$(this).val());
        $('.button_bg_hex').val($(this).val());
        settings['button_bg'] = $(this.val());
    });
    $('.button_bg_hex').on('input', function(){
        $('button').css('background',$(this).val());
        $('.button_color').val($(this).val());
        settings['button_bg'] = $(this.val());
    });
    
    $('.button_color').on('input', function(){
        $('button').css('color',$(this).val());
        $('.button_color_hex').val($(this).val());
        settings['button_color'] = $(this.val());
    });
    $('.button_color_hex').on('input', function(){
        $('button').css('color',$(this).val());
        $('.button_color').val($(this).val());
        settings['button_color'] = $(this.val());
    });
    
    $('.button_font').on('input', function(){
        $('button').css('font-family',$(this).val());
        settings['button_font'] = $(this).val();
    });
    
    $('.button_size').on('input', function(){
        $('button').css('font-size',$(this).val()+'px');
        settings['button_size'] = $(this).val()+'px';
    });
    
    $('.button_mt').on('input', function(){
        $('button').css('margin-top',$(this).val()+'px');
        settings['button_mt'] = $(this).val()+'px';
    });
    
    $('.button_mb').on('input', function(){
        $('button').css('margin-bottom',$(this).val()+'px');
        settings['button_mb'] = $(this).val()+'px';
    });
    
    $('.image_radius').on('input', function(){
        $('.sleek-upsell img').css('border-radius',$(this).val()+'px');
        settings['image_radius'] = $(this).val()+'px';
    });
    
    $('.image_bs').on('input', function(){
        $('.sleek-upsell img').css('border-width',$(this).val()+'px');
        settings['image_bs'] = $(this).val()+'px';
    });
    
    $('.image_bc').on('input', function(){
        $('.sleek-upsell img').css('color',$(this).val());
        $('.image_bc_hex').val($(this).val());
        settings['image_bc'] = $(this.val());
    });
    $('.image_bc_hex').on('input', function(){
        $('.sleek-upsell img').css('color',$(this).val());
        $('.image_bc').val($(this).val());
        settings['image_bc'] = $(this.val());
    });
    
    $('.image_border').on('change', function(){
        $('.sleek-upsell img').css('border-style',$(this).val());
        settings['image_border'] = $(this).val()+'px';
    });
    
    $('.text_color').on('input', function(){
        $('.sleek-text').css('color',$(this).val());
        $('.text_color_hex').val($(this).val());
        settings['text_color'] = $(this.val());
    });
    $('.text_color_hex').on('input', function(){
        $('.sleek-text').css('color',$(this).val());
        $('.text_color').val($(this).val());
        settings['text_color'] = $(this.val());
    });
    
    $('.text_font').on('input', function(){
        $('.sleek-text').css('font-family',$(this).val());
        settings['button_font'] = $(this).val();
    });
    
    $('.text_size').on('input', function(){
        $('.sleek-text').css('font-size',$(this).val()+'px');
        settings['button_size'] = $(this).val()+'px';
    });
    
    $('.title_color').on('input', function(){
        $('.sleek-title').css('color',$(this).val());
        $('.title_color_hex').val($(this).val());
        settings['title_color'] = $(this.val());
    });
    $('.title_color_hex').on('input', function(){
        $('.sleek-title').css('color',$(this).val());
        $('.text_color').val($(this).val());
        settings['title_color'] = $(this.val());
    });
    
    $('.title_font').on('input', function(){
        $('.sleek-title').css('font-family',$(this).val());
        settings['button_font'] = $(this).val();
    });
    
    $('.title_size').on('input', function(){
        $('.sleek-title').css('font-size',$(this).val()+'px');
        settings['button_size'] = $(this).val()+'px';
    });
    
    $('.price_color').on('input', function(){
        $('.sleek-price').css('color',$(this).val());
        $('.price_color_hex').val($(this).val());
        settings['price_color'] = $(this.val());
    });
    $('.price_color_hex').on('input', function(){
        $('.sleek-price').css('color',$(this).val());
        $('.price_color').val($(this).val());
        settings['price_color'] = $(this.val());
    });
    
    $('.price_font').on('input', function(){
        $('.sleek-price').css('font-family',$(this).val());
        settings['button_font'] = $(this).val();
    });
    
    $('.price_size').on('input', function(){
        $('.sleek-price').css('font-size',$(this).val()+'px');
        settings['button_size'] = $(this).val()+'px';
    });
</script>

<style>
    .whole {
        display: block;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0px;
        left: 0px;
    }

    .juu,
    .chini {
        display: block;
        width: 100vw;
        height: 10vh;
        position: absolute;
    }

    .mwili {
        top: 10vh;
        display: block;
        width: 100vw;
        height: 80vh;
        position: absolute;
        overflow-y: auto;
    }

    .juu {
        top: 0px;
        left: 0px;
    }

    .chini {
        bottom: 0px;
        left: 0px;
        background: #002A5A;
    }

    .juu_flex {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-content: center;
        flex-wrap: wrap;
    }

    .whats {
        flex-grow: 4;
        font-weight: 700;
        color: #002A5A;
        cursor: pointer;
        transition: 0.3s;
        background: white;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whats:hover {
        background-color: #002A5A;
        color: white;
    }

    .setting_tab {
        color: #002A5A;
        display: table;
        width: 100%;
        height: auto;
        transition: 0.3s;
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
    input[type=color]{
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
    	border: solid 1px #000; /*change color of the swatch border here*/
    }
    /* Customize website's scrollbar like Mac OS Not supports in Firefox and IE */

    /* total width */
    .mwili::-webkit-scrollbar {
        background-color: #fff;
        width: 16px
    }

    /* background of the scrollbar except button or resizer */
    .mwili::-webkit-scrollbar-track {
        background-color: #fff
    }

    .mwili::-webkit-scrollbar-track:hover {
        background-color: #f4f4f4
    }

    /* scrollbar itself */
    .mwili::-webkit-scrollbar-thumb {
        background-color: #003471;
        border-radius: 16px;
        border: 5px solid #fff
    }

    .mwili::-webkit-scrollbar-thumb:hover {
        background-color: #063d7d;
        border: 4px solid #f4f4f4
    }

    /* set button(top and bottom of the scrollbar) */
    .mwili::-webkit-scrollbar-button {
        display: none
    }
    .sleek-upsell{
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
    .sleek-upsell select{
        padding: 4px;
        margin-top: 5px;
    }
    .sleek-prices{
        font-weight: bold;
        margin-bottom: 5px;
    }
    .sleek-compare-price{
        text-decoration: line-through;
    }
    .sleek-upsell button{
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
    .card{
        display: table;
    }
    .card .sleek-form{
        display: flex;
    }
    .card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{
        display: table;
        align-self: center;
        padding: 5px;
    }
    .card .sleek-offer{
        flex-grow: 4;
    }
    .card .sleek-prices{
        text-align: center;
    }
    
    /*--------------------------------------*/
    .block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{
        display: table;
    }
    .sleek-block{
        display: flex;
    }
    .block .sleek-image, .block .sleek-offer{
        display: table;
        align-self: center;
        padding: 5px;
    }
    .block .sleek-offer{
        flex-grow: 1;
    }
    
    
    /*--------------------------------------*/
    @media only screen and (max-width: 600px) {
        .sleek-upsell{
            width: 97%;
            margin: 5px auto;
        }
        .card select{
            max-width: 100px;
        }
        .block select{
            max-width: 200px;
        }
        .sleek-prices *{
            display: inline-table;
        }
        .block .sleek-form, .block .sleek-text, .block .sleek-atc{
            width: 100%;
        }
    }

</style>