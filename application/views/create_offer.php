<script>
$(window).keydown(function(event) {
    if (event.keyCode == 13) {
        event.preventDefault();
        return false;
    }
});
</script>
<style>
@media only screen and (min-width: 600px) {
    .offer-change-section {
        position: fixed;
        float: right;
        right: 0px;
    }
}

/* Customize website's scrollbar like Mac OS
Not supports in Firefox and IE */

/* total width */
.offerForm::-webkit-scrollbar {
    background-color: #fff;
    width: 16px
}

/* background of the scrollbar except button or resizer */
.offerForm::-webkit-scrollbar-track {
    background-color: #fff
}

.offerForm::-webkit-scrollbar-track:hover {
    background-color: #f4f4f4
}

/* scrollbar itself */
.offerForm::-webkit-scrollbar-thumb {
    background-color: #003471;
    border-radius: 16px;
    border: 5px solid #fff
}

.offerForm::-webkit-scrollbar-thumb:hover {
    background-color: #063d7d;
    border: 4px solid #f4f4f4
}

/* set button(top and bottom of the scrollbar) */
.offerForm::-webkit-scrollbar-button {
    display: none
}
</style>

<style>
.sleek-upsell {
    background: #ecf0f1;
    color: #2b3d51;
    padding: 5px;
    font-family: inherit;
    vertical-align: middle;
    margin: 5px
}

.sleek-image img {
    width: 100px
}

.sleek-text {
    font-weight: 700
}

.sleek-upsell select {
    padding: 4px;
    margin-top: 5px
}

.sleek-prices {
    font-weight: 700;
    margin-bottom: 5px
}

.sleek-compare-price {
    text-decoration: line-through
}

.sleek-upsell button {
    padding: 10px;
    border: none;
    background: #2b3d51;
    color: #fff;
    font-weight: 700;
    border-radius: 0;
    cursor: pointer;
    width: 100%
}

.card {
    display: table
}

.card .sleek-form {
    display: flex
}

.sleek-card-atc,
.sleek-image,
.sleek-offer {
    display: table;
    align-self: center;
    padding: 5px
}

.card .sleek-offer {
    flex-grow: 1
}

.card .sleek-prices {
    text-align: center
}

@media only screen and (max-width:600px) {
    .sleek-upsell select {
        max-width: 100px
    }

    .sleek-prices * {
        display: inline-table
    }
}

.block,
.block .sleek-atc,
.block .sleek-form,
.block .sleek-text {
    display: table
}

.sleek-block {
    display: flex
}

.block .sleek-image,
.block .sleek-offer {
    display: table;
    align-self: center;
    padding: 5px
}

.block .sleek-offer {
    flex-grow: 1
}
</style>
<script>
var offer = {};
var products = [];
var conditions = [];
var custom_fields = {
    'state': '0',
    'cf1': {
        'type': '',
        'name': '',
        'placeholder': '',
        'options': '',
        'required': ''
    },
    'cf2': {
        'type': '',
        'name': '',
        'placeholder': '',
        'options': '',
        'required': ''
    },
    'cf3': {
        'type': '',
        'name': '',
        'placeholder': '',
        'options': '',
        'required': ''
    },
    'cf4': {
        'type': '',
        'name': '',
        'placeholder': '',
        'options': '',
        'required': ''
    }
};
</script>
<div class="row">
    <div class="col-sm-4 col-xs-12" style="position: fixed; top: 0px; left: 0px; height: 100vh;">
        <div style="background: #003471; position: absolute; top: 0px; left: 0px; height: 7vh; width: 100%; vertical-align: middle;">
            <div class="col-xs-8" style="margin: 0px; padding: 0px; height: 100%; vertical-align: middle;"><select style="border-radius: 0px; width: 100%; height: 100%; margin: 0px; vertical-align: middle;" class="form-control">
                    <option>Global</option>
                </select></div>
            <div class="col-xs-4" style="margin: 0px; padding: 0px; height: 100%; vertical-align: middle;"><span style="width: 100%; height: 100%; margin: 0px; vertical-align: middle; padding-top: 2vh;" onclick="showAjaxModal('products');"
                    class="btn btn-primary btn-icon icon-right"><i class="entypo-plus" style="padding-top: 2vh;"></i>Add
                    Product</span></div>
        </div>
        <form style="position: absolute; top: 7vh; left: 0px; height: 86vh; overflow-y: auto; width: 100%;"
            method="POST" class="offerForm" autocomplete="off">
            <input autocomplete="false" type="hidden" value="card" class="offer_layout" />
            <div class="panel-group joined" id="accordion-test-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2"
                                href="#collapseOne-2">
                                1: Offerables
                            </a> </h4>
                    </div>
                    <div id="collapseOne-2" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <h4>Offer Title <br /><small>(Optional) Your customers won't see this</small></h4>
                            <div style="display: table; width: 100%; margin-bottom: 10px;">
                                <input type="text" class="form-control offer_title"
                                    style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                            </div>
                            <div style="display: table; width: 100%; margin-bottom: 10px; vertical-align: top;">
                                <div class="panel products_handler">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2"
                                href="#collapseTwo-2" class="collapsed">
                                2: Design
                            </a> </h4>
                    </div>
                    <div id="collapseTwo-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div style="display: table; width: 100%;">
                                <h4>Offer Text <br /><small>eg Get 20% discount</small></h4>
                                <textarea class="form-control offer_text" placeholder="offer text"
                                    style="margin: 5px auto; height: auto; min-height: 100px; width: 99%; border: 2px solid #666666;"></textarea>
                            </div>
                            <div style="display: table; width: 100%;">
                                <h4>Button Text <br /><small>eg Yes Please or Add To Cart</small></h4>
                                <input type="text" name="button-text" value="ADD TO CART"
                                    class="form-control offer_button_text"
                                    style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                            </div>
                            <div style="display: table; width: 100%;">
                                <h4>Color Scheme <br /><small>eg Yes Please or Add To Cart</small></h4>
                                <select name="button-text" placeholder="ADD TO CART"
                                    class="form-control offer_color_scheme"
                                    style="border: 2px solid #666666; border-radius: 5px;">
                                    <option value="default">Default</option>
                                    <option value="custom">Custom</option>
                                </select>
                            </div>
                            <div style="display: table; width: 100%;">
                                <h4>Product options <br /><small>eg Yes Please or Add To Cart</small></h4>
                                <label><input type="checkbox" class="offer_product_image" value="1" checked /> Show
                                    product
                                    image</label><br />
                                <label><input type="checkbox" class="offer_product_title" value="1" checked /> Show
                                    product
                                    title</label><br />
                                <label><input type="checkbox" class="offer_product_price" value="1" checked /> Show
                                    product
                                    price</label><br />
                                <label><input type="checkbox" class="offer_compare_at_price" value="1" checked /> Show
                                    product compare at price</label><br />
                                <label><input type="checkbox" class="offer_variant_price" value="1" checked /> Show
                                    variant
                                    price</label><br />
                            </div>
                            <div style="display: table; width: 100%;">
                                <h4>Display options <br /><small>eg Yes Please or Add To Cart</small></h4>
                                <label><input type="checkbox" class="offer_linked" value="1" /> Link offer to product
                                    page</label><br />
                                <label><input type="checkbox" class="offer_closable" value="1" /> Show an x to
                                    dismiss offer</label><br />
                                <label><input type="checkbox" class="offer_quantity_chooser" value="1" checked /> Show
                                    quantity chooser</label><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2"
                                href="#collapseThree-2" class="collapsed">
                                3: Conditions
                            </a> </h4>
                    </div>
                    <div id="collapseThree-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h4>Offer Conditions <br /><small>Choose when to give your customers this offer</small></h4>
                            <div style="display: table; width: 100%; margin-bottom: 10px; vertical-align: top;">
                                <div
                                    style="display: table; width: 100%; width: 100%; background: #ffffff; padding: 5px; margin-bottom: 5px;">
                                    <p>Show this offer when <select class="offer_condition_rule">
                                            <option value="ALL">ALL</option>
                                            <option value="ANY">ANY</option>
                                        </select> of these conditions are met</p>
                                </div>
                                <div class="conditionsHandler">
                                </div>
                            </div>
                            <div style="display: table; width: 100%; margin-bottom: 10px; vertical-align: top;">
                                <span class="btn btn-default btn-lg btn-icon icon-right"
                                    onclick="showAjaxModal('conditions');"> <i class="entypo-plus"></i>Add
                                    Condition</span>
                            </div>
                            <div style="display: table; width: 100%; height: 1px; background: #333333;"></div>
                            <h4>Extra Options <br /><small>Adjust the offers conditional triggers</small></h4>
                            <div style="display: table; width: 100%; margin-bottom: 10px; vertical-align: top;">
                                <label><input type="checkbox" class="offer_show_after_accepted" value="1" /> Don't
                                    continue to show the offer after it has been accepted</label><br />
                                <label><input type="checkbox" class="offer_required_for_checkout" value="1" /> The
                                    offer must be accepted in order to continue.</label><br />
                                <label><input type="checkbox" class="offer_automatically_remove" value="1" /> Remove
                                    offer product from cart if offer conditions are no longer met.</label><br />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion-test-2"
                                href="#collapseFour-2" class="collapsed">
                                4: Offer Addons
                            </a> </h4>
                    </div>
                    <div id="collapseFour-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div style="display: table; width: 100%; margin-bottom: 10px;">
                                <label><input type="checkbox" class="offer_apply_discount" value="1" /> Add add
                                    discount to this offer. <br /><span class="text-info">Paste your discount code
                                        below</span></label><br />
                                <input type="text" name="discount-code" placeholder="Paste your discount code here"
                                    class="form-control offer_discount_code"
                                    style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                            </div>
                            <div style="display: table; width: 100%; margin-bottom: 10px;">
                                <label><input type="checkbox" class="offer_to_checkout" value="1" /> Send user to
                                    checkout after accepting offer</label><br />
                            </div>
                            <div style="display: table; width: 100%; height: 1px; background: #333333;"></div>
                            <div style="display: table; width: 100%; margin-bottom: 10px;">
                                <div class="panel minimal minimal-gray">
                                    <div class="panel-heading">
                                        <div class="panel-title hidden">
                                            <h4>Minimal Panel</h4>
                                        </div>
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#profile-1" data-toggle="tab" aria-expanded="1">A/B
                                                        Test</a>
                                                </li>
                                                <li class="">
                                                    <a href="#profile-2" data-toggle="tab" aria-expanded="false">Product
                                                        Customizations</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="profile-1">
                                                <label><input type="checkbox" class="offer_ab_test" value="1" />
                                                    Create an A/B test for this offer?</label><br />
                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Test Offer Text <br /><small>eg Get 20% discount</small></h4>
                                                    <textarea class="form-control offer_ab_text" placeholder="A/B text"
                                                        style="margin: 5px auto; height: auto; min-height: 100px; width: 99%; border: 2px solid #666666;"></textarea>
                                                </div>
                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Text Button Text <br /><small>eg Yes Please or Add To
                                                            Cart</small></h4>
                                                    <input type="text" placeholder="ADD TO CART"
                                                        class="form-control offer_ab_button"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="profile-2">
                                                <label><input type="checkbox" class="offer_custom_fields" value="1" />
                                                    Add custom fields?</label><br />

                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Custom field 1</h4>
                                                    <br /><small>Custom field 1 type</small><br />
                                                    <select type="text" placeholder="Custom field 1 name"
                                                        class="form-control cf1_type"
                                                        style="border: 2px solid #666666; border-radius: 5px;">
                                                        <option>Choose custom field type</option>
                                                        <option value="text">Single line text</option>
                                                        <option value="textarea">Long text/Paragraph</option>
                                                        <option value="number">Number</option>
                                                        <option value="select">Dropdown</option>
                                                        <option value="checkbox">Checkbox</option>
                                                        <option value="radio">Radio buttons</option>
                                                    </select>
                                                    <br /><small>Custom field 1 name</small><br />
                                                    <input type="text" placeholder="Custom field 1 name"
                                                        class="form-control cf1_name"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small>Custom field 1 placeholder</small><br />
                                                    <input type="text" placeholder="Custom field 1 placeholder"
                                                        class="form-control cf1_placeholder"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small class="cf1_options_text">Custom field 1
                                                        options/content</small><br />
                                                    <input type="text" placeholder="Custom field 1 options"
                                                        class="form-control cf1_options"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><label><input type="checkbox" class="cf1_required" /> Is this
                                                        field
                                                        required?</label>
                                                    <hr />
                                                </div>
                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Custom field 2</h4>
                                                    <br /><small>Custom field 2 type</small><br />
                                                    <select type="text" placeholder="Custom field 2 name"
                                                        class="form-control cf2_type"
                                                        style="border: 2px solid #666666; border-radius: 5px;">
                                                        <option>Choose custom field type</option>
                                                        <option value="text">Single line text</option>
                                                        <option value="textarea">Long text/Paragraph</option>
                                                        <option value="number">Number</option>
                                                        <option value="select">Dropdown</option>
                                                        <option value="checkbox">Checkbox</option>
                                                        <option value="radio">Radio buttons</option>
                                                    </select>
                                                    <br /><small>Custom field 2 name</small><br />
                                                    <input type="text" placeholder="Custom field 2 name"
                                                        class="form-control cf2_name"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small>Custom field 2 placeholder</small><br />
                                                    <input type="text" placeholder="Custom field 2 placeholder"
                                                        class="form-control cf2_placeholder"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small class="cf1_options_text">Custom field 2
                                                        options/content</small><br />
                                                    <input type="text" placeholder="Custom field 2 options"
                                                        class="form-control cf2_options"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><label><input type="checkbox" class="cf2_required" /> Is this
                                                        field
                                                        required?</label>
                                                    <hr />
                                                </div>
                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Custom field 3</h4>
                                                    <br /><small>Custom field 3 type</small><br />
                                                    <select type="text" placeholder="Custom field 3 name"
                                                        class="form-control cf3_type"
                                                        style="border: 2px solid #666666; border-radius: 5px;">
                                                        <option>Choose custom field type</option>
                                                        <option value="text">Single line text</option>
                                                        <option value="textarea">Long text/Paragraph</option>
                                                        <option value="number">Number</option>
                                                        <option value="select">Dropdown</option>
                                                        <option value="checkbox">Checkbox</option>
                                                        <option value="radio">Radio buttons</option>
                                                    </select>
                                                    <br /><small>Custom field 3 name</small><br />
                                                    <input type="text" placeholder="Custom field 3 name"
                                                        class="form-control cf3_name"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small>Custom field 3 placeholder</small><br />
                                                    <input type="text" placeholder="Custom field 3 placeholder"
                                                        class="form-control cf3_placeholder"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small class="cf3_options_text">Custom field 3
                                                        options/content</small><br />
                                                    <input type="text" placeholder="Custom field 3 options"
                                                        class="form-control cf3_options"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><label><input type="checkbox" class="cf3_required" /> Is this
                                                        field
                                                        required?</label>
                                                    <hr />
                                                </div>
                                                <div style="display: table; width: 100%; padding: 10px;">
                                                    <h4>Custom field 4</h4>
                                                    <br /><small>Custom field 4 type</small><br />
                                                    <select type="text" placeholder="Custom field 4 name"
                                                        class="form-control cf4_type"
                                                        style="border: 2px solid #666666; border-radius: 5px;">
                                                        <option>Choose custom field type</option>
                                                        <option value="text">Single line text</option>
                                                        <option value="textarea">Long text/Paragraph</option>
                                                        <option value="number">Number</option>
                                                        <option value="select">Dropdown</option>
                                                        <option value="checkbox">Checkbox</option>
                                                        <option value="radio">Radio buttons</option>
                                                    </select>
                                                    <br /><small>Custom field 4 name</small><br />
                                                    <input type="text" placeholder="Custom field 4 name"
                                                        class="form-control cf4_name"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small>Custom field 4 placeholder</small><br />
                                                    <input type="text" placeholder="Custom field 4 placeholder"
                                                        class="form-control cf4_placeholder"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><small class="cf4_options_text">Custom field 4
                                                        options/content</small><br />
                                                    <input type="text" placeholder="Custom field 4 options"
                                                        class="form-control cf4_options"
                                                        style="padding: 10px; border: 2px solid #666666; border-radius: 5px;" />
                                                    <br /><label><input type="checkbox" class="cf4_required" /> Is this
                                                        field
                                                        required?</label>
                                                    <hr />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">
                        <label class="switch">
                            <input class="switcheck offer_status" type="checkbox" value="1">
                            <span class="slidr round"></span>
                        </label>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6 offerDraftBtn" onclick="deactivateOffer();"
                                style="text-align: center; cursor: pointer;">DRAFT</div>
                            <div class="col-xs-6 offerActiveBtn" onclick="activateOffer();"
                                style="text-align: center; cursor: pointer;">ACTIVE</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">
                        <button class="btn btn-lg btn-flat btn-primary saveOffer">Save</button>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                        </div>
                    </div>
                </div>

            </div>
        </form>
        <div style="background: #003471; position: absolute; bottom: 0px; left: 0px; height: 7vh; width: 100%;"></div>
    </div>
    <div class="col-sm-8 offer-change-section hidden-xs">
        <div class="affixiate">
            <div class="row" style="background: #ffffff; padding-top: 10px; padding-bottom: 10px;">
                <div class="col-sm-12" style="vertical-align: middle;">
                    <div class="sleekOffer">

                        <div class="card sleek-upsell">

                        </div>
                        <div class="hidden halfBlock sleek-upsell">
                            <form class="col-xs-12">
                                <div class="col-sm-4 product-image-wrapper">
                                    <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"
                                        class="img img-responsive product-image" />
                                </div>
                                <div class="col-sm-8 offer-wrapper">
                                    <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                    <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                    <div class="col-xs-12"><span class="product-price money">$ 200</span><span
                                            class="product-compare-price money">$ 200</span></div>
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

                        </div>
                        <div class="hidden flat sleek-upsell">
                            <form class="col-xs-12">
                                <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                <div class="col-sm-4 product-image-wrapper">
                                    <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"
                                        class="img img-responsive product-image" />
                                </div>
                                <div class="col-sm-8 offer-wrapper">
                                    <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                    <div class="col-xs-12"><span class="product-price money">$ 200</span><span
                                            class="product-compare-price money">$ 200</span></div>
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
                                    <img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412"
                                        class="img img-responsive product-image" />
                                </div>
                                <div class="col-sm-8 offer-wrapper">
                                    <div class="col-xs-12 offer-text">Need a free shipping?</div>
                                    <div class="col-xs-12 product-title">Blue Silk Tuxedo</div>
                                    <div class="col-xs-12"><span class="product-price money">$ 200</span><span
                                            class="product-compare-price money">$ 200</span></div>
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
                        <img class="active-selector" src="<?php echo base_url(); ?>assets/images/card.png"
                            onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('card');"
                            style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                        <img src="<?php echo base_url(); ?>assets/images/block.png"
                            onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('block');"
                            style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                        <img src="<?php echo base_url(); ?>assets/images/half_block.png"
                            onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('halfBlock');"
                            style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                        <img src="<?php echo base_url(); ?>assets/images/flat.png"
                            onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('flat');"
                            style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                        <img src="<?php echo base_url(); ?>assets/images/compact.png"
                            onclick="$('.active-selector').removeClass('active-selector');$(this).addClass('active-selector');pick('compact');"
                            style="width: 100px; height: auto; margin: 5px; cursor: pointer;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productsModal" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="1">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" style="padding: 0px; margin: 0px;">
                <div style="display: table; width: 100%; padding: 0px; margin: 0px;" id="products-wrappers">
                    <input type="text" autocomplete="off" class="form-control" id="search" name="search"
                        style="display: table; width: 96%; margin: 3px auto; padding: 10px; border: 2px solid #666666; border-radius: 5px;"
                        placeholder="Search for item">
                    <div style="display: table; margin: 3px auto; width: 96%;" id="products"></div>
                </div>
                <div class="form-inline" style="display: table; width: 100%; padding: 0px; margin: 0px;"
                    id="conditions-wrappers">
                    <select type="text" autocomplete="off" class="small form-control" id="conditionSelector"
                        style="margin: 3px; width: 250px; border: 2px solid #666666; border-radius: 5px;">
                        <option value="oc1">Cart has at least</option>
                        <option value="oc2">Cart has at most</option>
                        <option value="oc3">Cart has exactly</option>
                        <option value="oc4">Cart does not have any</option>
                        <option value="oc5">Cart total is at least</option>
                        <option value="oc6">Cart total is at most</option>
                        <option value="oc7">Cart total is at most</option>
                        <option value="oc8">Customer is not located in</option>
                    </select>
                    <select type="text" autocomplete="off" class="small form-control" id="oc1Quantity"
                        style="margin: 3px; max-width: 250px; border: 2px solid #666666; border-radius: 5px;">
                        <?php for($i = 1; $i <= 20; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <select type="text" autocomplete="off" class="small form-control" id="oc1Type"
                        style="margin: 3px; width: 250px; border: 2px solid #666666; border-radius: 5px;">
                        <option value="product">Of product</option>
                        <option value="variant">Of variant</option>
                        <option value="collection">Item from collection</option>
                    </select>
                    <input type="hidden" class="occ" />
                    <input type="text" autocomplete="off" class="small form-control" id="ocContent"
                        style="margin: 3px; width: 96%; padding: 10px; border: 2px solid #666666; border-radius: 5px;"
                        placeholder="Search for item">
                    <input type="number" autocomplete="off" class="small form-control" id="ocNumber"
                        style="margin: 3px; width: 250px; padding: 10px; border: 2px solid #666666; border-radius: 5px;"
                        placeholder="0 cents">
                    <select id="countries"
                        style="display: none; margin: 3px; max-width: 200px; border: 2px solid #666666; border-radius: 5px;"
                        class="form-control small">
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AA">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BL">Bonaire</option>
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BC">British Indian Ocean Ter</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="IC">Canary Islands</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CD">Channel Islands</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CI">Christmas Island</option>
                        <option value="CS">Cocos Island</option>
                        <option value="CO">Colombia</option>
                        <option value="CC">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CT">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CB">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TM">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FA">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="FS">French Southern Ter</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HW">Hawaii</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IA">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="NK">Korea North</option>
                        <option value="KS">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malaysia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="ME">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MI">Midway Islands</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Nambia</option>
                        <option value="NU">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherland Antilles</option>
                        <option value="NL">Netherlands(Holland, Europe)</option>
                        <option value="NV">Nevis</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NW">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau Island</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PO">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="ME">Republic of Montenegro</option>
                        <option value="RS">Republic of Serbia</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="NT">St Barthelemy</option>
                        <option value="EU">St Eustatius</option>
                        <option value="HE">St Helena</option>
                        <option value="KN">St Kitts-Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MB">St Maarten</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SP">Saipan</option>
                        <option value="SO">Samoa</option>
                        <option value="AS">Samoa American</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome &amp; Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="OI">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TA">Tahiti</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TU">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Is</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VS">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VB">Virgin Islands (Brit)</option>
                        <option value="VA">Virgin Islands(USA)</option>
                        <option value="WK">Wake Island</option>
                        <option value="WF">Wallis &amp; Futana Is</option>
                        <option value="YE">Yemen</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <div class="c_i" style="display: table; width: 96%; margin: 10px;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info saveCondition" style="display: none;">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
$('.offer_text').keyup(function() {
    $('.offer-text').html($(this).val());
    $('.sleek-text').html($(this).val());
});
$('.offer_button_text').keyup(function() {
    $('.form-submit-btn').html($(this).val());
    $('.sleek-atc').html($(this).val());
});
$('.offer_product_image').change(function() {
    if (this.checked) {
        $('.product-image-wrapper').show();
        $('.sleek-image').show();
        $('.offer-wrapper').show();
        $('.offer-wrapper').removeClass('col-sm-12');
        $('.offer-wrapper').addClass('col-sm-8');
        $('.card').find('.offer-wrapper').addClass('col-sm-5');
    } else {
        $('.sleek-image').hide();
        $('.product-image-wrapper').hide();
        $('.offer-wrapper').removeClass('col-sm-8');
        $('.offer-wrapper').removeClass('col-sm-5');
        $('.offer-wrapper').addClass('col-sm-12');
    }
});
$('.offer_product_title').change(function() {
    if (this.checked) {
        $('.product-title').show();
        $('.sleek-title').show();
    } else {
        $('.product-title').hide();
        $('.sleek-title').hide();
    }
});
$('.offer_product_price').change(function() {
    if (this.checked) {
        $('.product-price').show();
        $('.sleek-prices').show();
    } else {
        $('.product-price').hide();
        $('.sleek-prices').hide();
    }
});
$('.offer_compare_at_price').change(function() {
    if (this.checked) {
        $('.product-compare-price').show();
        $('.sleek-compare-price').show();
    } else {
        $('.product-compare-price').hide();
        $('.sleek-compare-price').hide();
    }
});
$('.offer_quantity_chooser').change(function() {
    if (this.checked) {
        $('.q-select').show();
    } else {
        $('.q-select').hide();
    }
});
/* ------ CF1 ------ */
$('.cf1_type').change(function() {
    custom_fields['cf1']['type'] = $('.cf1_type').val();
});
$('.cf1_name').keyup(function() {
    custom_fields['cf1']['name'] = $('.cf1_name').val();
});
$('.cf1_placeholder').keyup(function() {
    custom_fields['cf1']['placeholder'] = $('.cf1_placeholder').val();
});
//$('.cf1_options_text');
$('.cf1_options').keyup(function() {
    custom_fields['cf1']['options'] = $('.cf1_options').val();
});
$('.cf1_required').change(function() {
    if ($('.cf1_required').is(":checked")) {
        custom_fields['cf1']['required'] = $('.cf1_required').val();
    }
});

/* ------ CF2 ------ */
$('.cf2_type').change(function() {
    custom_fields['cf2']['type'] = $('.cf2_type').val();
});
$('.cf2_name').keyup(function() {
    custom_fields['cf2']['name'] = $('.cf2_name').val();
});
$('.cf2_placeholder').keyup(function() {
    custom_fields['cf2']['placeholder'] = $('.cf2_placeholder').val();
});
//$('.cf2_options_text');
$('.cf2_options').keyup(function() {
    custom_fields['cf2']['options'] = $('.cf2_options').val();
});
$('.cf2_required').change(function() {
    if ($('.cf2_required').is(":checked")) {
        custom_fields['cf2']['required'] = $('.cf2_required').val();
    }
});

/* ------ CF3 ------ */
$('.cf3_type').change(function() {
    custom_fields['cf3']['type'] = $('.cf3_type').val();
});
$('.cf3_name').keyup(function() {
    custom_fields['cf3']['name'] = $('.cf3_name').val();
});
$('.cf3_placeholder').keyup(function() {
    custom_fields['cf3']['placeholder'] = $('.cf3_placeholder').val();
});
//$('.cf3_options_text');
$('.cf3_options').keyup(function() {
    custom_fields['cf3']['options'] = $('.cf3_options').val();
});
$('.cf3_required').change(function() {
    if ($('.cf3_required').is(":checked")) {
        custom_fields['cf3']['required'] = $('.cf3_required').val();
    }
});

/* ------ CF4 ------ */
$('.cf4_type').change(function() {
    custom_fields['cf4']['type'] = $('.cf4_type').val();
});
$('.cf4_name').keyup(function() {
    custom_fields['cf4']['name'] = $('.cf4_name').val();
});
$('.cf4_placeholder').keyup(function() {
    custom_fields['cf4']['placeholder'] = $('.cf4_placeholder').val();
});
//$('.cf4_options_text');
$('.cf4_options').keyup(function() {
    custom_fields['cf4']['options'] = $('.cf4_options').val();
});
$('.cf4_required').change(function() {
    if ($('.cf4_required').is(":checked")) {
        custom_fields['cf4']['required'] = $('.cf4_required').val();
    }
});

function showAjaxModal(action) {
    jQuery('#productsModal').modal('show', {
        backdrop: 'static'
    });
    if (action == "products" || action === "products") {
        jQuery('#products-wrappers').show();
        jQuery('#conditions-wrappers').hide();
        $('.modal-title').html('Add products to offer');
        jQuery('#products').html('<div style="display: table; width: 100%; text-align: center;"><img src="' + base_url +
            'assets/images/loader.gif" style="width: 200px; height: auto;" /></div>');
        loadProducts(' ');
    }
    if (action == "conditions" || action === "conditions") {
        jQuery('#products-wrappers').hide();
        jQuery('#conditions-wrappers').show();
        $('.modal-title').html('Add conditions to your offer');
        $('#conditionSelector').trigger('change');
        $('#oc1Type').trigger('change');
        $('#oc1Quantity').trigger('change');
        $('.saveCondition').show();
    }
}

function loadProducts(product) {
    $.ajax({
        type: "POST",
        url: base_url + 'search_products',
        data: {
            term: product,
            shop: '<?php echo $shop; ?>',
            token: '<?php echo $token; ?>'
        },
        dataType: "html",
        success: function(response) {
            $('#products').html(response);
        }
    });
}

$('#search').keyup(function() {

    var search = $(this).val();

    loadProducts(search);

    return false;
});

$('#ocContent').keyup(function(event) {

    //alert(event.keyCode);
    var item = $(this).val();
    var call_url = base_url + 'search_condition';
    var type = $('#oc1Type').val();

    $.ajax({
        type: "POST",
        url: call_url,
        data: {
            type: type,
            item: item,
            shop: '<?php echo $shop; ?>',
            token: '<?php echo $token; ?>'
        },
        dataType: "html",
        success: function(response) {
            $('.c_i').html(response);
        }
    });
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

function activateOffer() {
    $('.switcheck').prop('checked', true);
    $('.offerDraftBtn').css({
        'font-size': '12px;',
        'font-weight': 'normal'
    });
    $('.offerActiveBtn').css({
        'font-size': '20px;',
        'font-weight': 'bold'
    });
}

function deactivateOffer() {
    $('.switcheck').prop('checked', false);
    $('.offerDraftBtn').css({
        'font-size': '20px;',
        'font-weight': 'bold'
    });
    $('.offerActiveBtn').css({
        'font-size': '12px;',
        'font-weight': 'normal'
    });
}

/*$('.saveOffer').click( function(e) {
    e.preventDefault();

    offer['offer_shop'] = '<?php echo $shop; ?>';
    offer['offer_text'] = $('.offer_text').val();
    offer['offer_button_text'] = $('.offer_button_text').val();
    offer['offer_color_scheme'] = $('.offer_color_scheme').val();
    offer['offer_layout'] = $('.offer_layout').val();
    offer['offer_products'] = products;
    offer['offer_product_image'] = $('.offer_product_image').val();
    offer['offer_product_title'] = $('.offer_product_title').val();
    offer['offer_product_price'] = $('.offer_product_price').val();
    offer['offer_compare_at_price'] = $('.offer_compare_at_price').val();
    offer['offer_variant_price'] = $('.offer_variant_price').val();
    offer['offer_linked'] = $('.offer_linked').val();
    offer['offer_closable'] = $('.offer_closable').val();
    offer['offer_quantity_chooser'] = $('.offer_quantity_chooser').val();
    offer['offer_condition_rule'] = $('.offer_condition_rule').val();
    offer['offer_conditions'] = conditions;
    offer['offer_show_after_accepted'] = $('.offer_show_after_accepted').val();
    offer['offer_required_for_checkout'] = $('.offer_required_for_checkout').val();
    offer['offer_automatically_remove'] = $('.offer_automatically_remove').val();
    offer['offer_apply_discount'] = $('.offer_apply_discount').val();
    offer['offer_discount_code'] = $('.offer_discount_code').val();
    offer['offer_to_checkout'] = $('.offer_to_checkout').val();
    offer['offer_ab_test'] = $('.offer_ab_test').val();
    offer['offer_ab_text'] = $('.offer_ab_text').val();
    offer['offer_ab_button'] = $('.offer_ab_button').val();
    offer['offer_status'] = $('.offer_status').val();
    offer['offer_date'] = new Date();

    console.log(offer);
});*/

function createCORSRequest(method, url) {
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr) {
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined") {
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
    return xhr;
}

function addAll(product) {
    var variants = createCORSRequest("GET", "<?php echo base_url(); ?>variants/" + product +
        "/<?php echo $token; ?>/<?php echo $shop; ?>");
    var product_data = {
        "product_id": product
    };

    if (variants) {
        variants.onload = function() {
            var var_ids = JSON.parse(variants.responseText);
            //console.log(var_ids);
            product_data['variants'] = var_ids['variants'];
            products.push(product_data);
            loadProductData(product);
            loadUIs();
        };
        variants.send();
    }
    jQuery('#productsModal').modal('toggle');
}

function addVariant(product, variant) {
    let newProduct = {
        "product_id": product
    };
    let newVariant = {
        "id": variant
    };

    if (products.some(productToFind => productToFind.product_id === newProduct.product_id)) {
        //console.log(products);
        for (let i = 0; i < products.length; i++) {
            //console.log("For loop array:" + products[i]);
            if (products[i].product_id === newProduct.product_id || products[i].product_id == newProduct.product_id) {
                //console.log(products[i]);
                let currentVariants = products[i]['variants'];
                currentVariants.push(newVariant);
                loadProductData(product);
                loadUIs();
                break;
            } else {
                console.log(products[i].product_id + " != " + newProduct.product_id);
            }
        }
    } else {
        newProduct['variants'] = [newVariant];
        products.push(newProduct);
        loadProductData(product);
        loadUIs();
    }
    jQuery('#productsModal').modal('toggle');
}

function loadProductData() {
    $('.products_handler').html('');

    $(products).each(function(i, e) {
        // console.log(products);
        var product_id = products[i]['product_id'];
        // console.log(product_id);
        var product_data = createCORSRequest("GET", "<?php echo base_url(); ?>product_details/" + product_id +
            "/<?php echo $token; ?>/<?php echo $shop; ?>");
        if (product_data) {
            product_data.onload = function() {
                var data = JSON.parse(product_data.responseText);
                var datacell = data['product'];
                console.log(datacell);
                var productDiv = '<div style="display: table;">' +
                    '<div style="display: inline-table; width: 30%;">' +
                    '<img src="' + datacell['image']['src'] + '"' +
                    'style="width: 100%; height: auto;" />' +
                    '</div>' +
                    '<div style="display: inline-table; width: 68%; vertical-align: top;">' +
                    '<div style="display: table; width: 100%; text-align: right;">' +
                    '<span class="btn btn-info btn-xs pull-right" onclick="removeOfferable(' + datacell[
                        'id'] + ')"> x </i></span>' +
                    '</div>' +
                    '<div style="display: table; width: 100%; margin-left: 5px;">' +
                    '<p>' +
                    datacell['title'] +
                    '<br /><small><em>' + products[i]['variants'].length + ' variants</em></small>' +
                    '</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                $('.products_handler').append(productDiv);
            };
            product_data.send();
        }
    });
}

function loadUIs() {
    $('.card').html('');
    $('.block').html('');

    $(products).each(function(i, e) {
        var product_id = products[i]['product_id'];
        var product_data = createCORSRequest("GET", "<?php echo base_url(); ?>product_details/" + product_id +
            "/<?php echo $token; ?>/<?php echo $shop; ?>");
        if (product_data) {
            product_data.onload = function() {
                var data = JSON.parse(product_data.responseText);
                var s_data = data['shop'];
                var datacell = data['product'];
                console.log(data);
                let card_ui = '<form class="sleek-form"> <div class="sleek-image"> <img src="' + datacell[
                        'image']['src'] +
                    '"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">' +
                    datacell['title'] +
                    '</div><div class="sleek-selectors"> <select class="v-select v-' + product_id +
                    '"></select> <select class="q-select q-' + product_id +
                    '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' +
                    s_data['currency'] + ' ' + datacell['variants'][0]['price'] +
                    '</span> <span class="sleek-compare-price money">' +
                    s_data['currency'] + ' ' + datacell['variants'][0]['price'] +
                    '</span> </div><button class="sleek-atc" type="submit" onclick="return false;">' + $(
                        '.offer_button_text').val() + '</button> </div></form>';

                let block_ui =
                    '<form class="sleek-form"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-block"> <div class="sleek-image"> <img src="' +
                    datacell[
                        'image']['src'] +
                    '"/> </div><div class="sleek-offer"> <div class="sleek-title">' +
                    datacell['title'] +
                    '</div><div class="sleek-prices"> <span class="sleek-price money"' +
                    s_data['currency'] + ' ' + datacell['variants'][0]['price'] +
                    '</span> <span class="sleek-compare-price money">' +
                    s_data['currency'] + ' ' + datacell['variants'][0]['price'] +
                    '</span> </div><div class="sleek-selectors"> <select class="v-select v-' + product_id +
                    '"></select> <select class="q-select q-' + product_id +
                    '"></select> </div></div></div><button class="sleek-atc" type="submit" onclick="return false;">' +
                    $(
                        '.offer_button_text').val() + '</button> </form>';
                $('.card').append(card_ui);
                $('.block').append(block_ui);

                $(datacell['variants']).each(function(i) {
                    console.log(datacell['variants'][i]['title']);
                    $('.v-' + product_id).append('<option value="' + datacell['variants'][i]['id'] +
                        '">' +
                        datacell['variants'][i]['title'] + ' (' + s_data['currency'] + ' ' +
                        datacell['variants'][i]['price'] + ')</option>');
                });
                for (i = 1; i <= 10; i++) {
                    $('.q-' + product_id).append('<option value="' + i + '">' +
                        i + '</option>')
                }
                $('.sleek-title')
            };
            product_data.send();
        }
    });
}

function removeOfferable(product) {
    $(products).each(function(i, e) {
        var product_id = products[i]['product_id'];
        if (product_id == product || product_id === product) {
            products = $.grep(products, function(value) {
                return value != products[i];
            });
            loadProductData();
            loadUIs(product);
        }
    });
}

$('.offerForm').submit(function(e) {
    e.preventDefault();

    if (products === undefined || products.length == 0) {
        return;
    }

    offer['offer_shop'] = '<?php echo $shop; ?>';
    offer['offer_title'] = $('.offer_title').val();
    offer['offer_text'] = $('.offer_text').val();
    offer['offer_button_text'] = $('.offer_button_text').val();
    offer['offer_color_scheme'] = $('.offer_color_scheme').val();
    offer['offer_layout'] = $('.offer_layout').val();
    offer['offer_products'] = JSON.stringify(products);

    if ($('.offer_product_image').is(":checked")) {
        offer['offer_product_image'] = "1";
    } else {
        offer['offer_product_image'] = "0";
    }

    if ($('.offer_product_title').is(":checked")) {
        offer['offer_product_title'] = "1";
    } else {
        offer['offer_product_title'] = "0";
    }

    if ($('.offer_product_price').is(":checked")) {
        offer['offer_product_price'] = "1";
    } else {
        offer['offer_product_price'] = "0";
    }

    if ($('.offer_compare_at_price').is(":checked")) {
        offer['offer_compare_at_price'] = "1";
    } else {
        offer['offer_compare_at_price'] = "0";
    }

    if ($('.offer_variant_price').is(":checked")) {
        offer['offer_variant_price'] = "1";
    } else {
        offer['offer_variant_price'] = "0";
    }

    if ($('.offer_linked').is(":checked")) {
        offer['offer_linked'] = "1";
    } else {
        offer['offer_linked'] = "0";
    }

    if ($('.offer_closable').is(":checked")) {
        offer['offer_closable'] = "1";
    } else {
        offer['offer_closable'] = "0";
    }

    if ($('.offer_quantity_chooser').is(":checked")) {
        offer['offer_quantity_chooser'] = "1";
    } else {
        offer['offer_quantity_chooser'] = "0";
    }

    offer['offer_condition_rule'] = $('.offer_condition_rule').val();
    offer['offer_conditions'] = JSON.stringify(conditions);

    if ($('.offer_show_after_accepted').is(":checked")) {
        offer['offer_show_after_accepted'] = "1";
    } else {
        offer['offer_show_after_accepted'] = "0";
    }

    if ($('.offer_required_for_checkout').is(":checked")) {
        offer['offer_required_for_checkout'] = "1";
    } else {
        offer['offer_required_for_checkout'] = "0";
    }

    if ($('.offer_automatically_remove').is(":checked")) {
        offer['offer_automatically_remove'] = "1";
    } else {
        offer['offer_automatically_remove'] = "0";
    }

    if ($('.offer_apply_discount').is(":checked")) {
        offer['offer_apply_discount'] = "1";
    } else {
        offer['offer_apply_discount'] = "0";
    }

    offer['offer_discount_code'] = $('.offer_discount_code').val();

    if ($('.offer_to_checkout').is(":checked")) {
        offer['offer_to_checkout'] = "1";
    } else {
        offer['offer_to_checkout'] = "0";
    }

    if ($('.offer_ab_test').is(":checked")) {
        offer['offer_ab_test'] = "1";
    } else {
        offer['offer_ab_test'] = "0";
    }

    offer['offer_ab_text'] = $('.offer_ab_text').val();
    offer['offer_ab_button'] = $('.offer_ab_button').val();

    if ($('.offer_status').is(":checked")) {
        offer['offer_status'] = "1";
    } else {
        offer['offer_status'] = "0";
    }

    if ($('.offer_custom_fields').is(":checked")) {
        custom_fields['state'] = '1';
    } else {
        custom_fields['state'] = '0';
    }

    offer['offer_date'] = Math.floor(Date.now() / 1000);
    offer['offer_custom_fields'] = JSON.stringify(custom_fields);

    var offer_string = JSON.stringify(offer);
    console.log(offer_string);

    $.ajax({
        type: "POST",
        url: base_url + 'create_offers',
        data: {
            offer_data: offer
        },
        success: function(response) {
            alert(response);
            //$('.data').html(response);
        },
        error: function() {
            alert('An error occured');
        }
    });
});

$('#conditionSelector').change(function() {
    var oc = $('#conditionSelector').val();
    hideOcContent();
    if (oc == 'oc1' || oc == 'oc2' || oc == 'oc3') {
        $('#oc1Quantity').show();
        $('#oc1Type').show();
        $('#ocContent').show();
    }
    if (oc == 'oc4') {
        $('#oc1Type').show();
        $('#ocContent').show();
    }
    if (oc == 'oc5' || oc == 'oc6') {
        $('#ocNumber').show();
    }
    if (oc == 'oc7' || oc === 'oc8') {
        $('#countries').show();
    }
});

$('#oc1Type').change(function() {
    var type = $('#oc1Type').val();

    if (type == 'product') {
        $('#ocContent').attr('placeholder', 'Search for product');
    }
    if (type == 'variant') {
        $('#ocContent').attr('placeholder', 'Search for variant');
    }
    if (type == 'collection') {
        $('#ocContent').attr('placeholder', 'Search for collection');
    }
});

function hideOcContent() {
    $('#oc1Quantity').hide();
    $('#oc1Type').hide();
    $('#ocContent').hide();
    $('#ocNumber').hide();
    $('#countries').hide();
}

$('.saveCondition').click(function() {
    var oc = $('#conditionSelector').val();
    var quantity = $('#oc1Quantity').val();
    var type = $('#oc1Type').val();
    var content = $('#ocContent').val();
    var amount = $('#ocNumber').val();
    var country = $('#countries').val();
    var occ = $('.occ').val();

    if (oc == 'oc1' || oc == 'oc2' || oc == 'oc3') {
        conditions.push([oc, {
            quantity,
            type,
            content,
            occ
        }]);
        console.log(conditions);
    }
    if (oc == 'oc4') {
        conditions.push([oc, {
            type,
            content,
            occ
        }]);
        console.log(conditions);
    }
    if (oc == 'oc5' || oc == 'oc6') {
        conditions.push([oc, amount]);
        console.log(conditions);
    }
    if (oc == 'oc7' || oc == 'oc8') {
        conditions.push([oc, country]);
        console.log(conditions);
    }
    loadVariants();
    jQuery('#productsModal').modal('toggle');
});

function loadVariants() {
    $('.conditionsHandler').html('');
    $(conditions).each(function(i, e) {
        var rule = conditions[i][0];
        var content = conditions[i][1];
        var rule_text = '';
        var content_text = '';

        if (rule == 'oc1') {
            rule_text = 'Cart has at least ' + content['quantity'];
            content_text = content['content'];
        }

        if (rule == 'oc2') {
            rule_text = 'Cart has at most ' + content['quantity'];
            content_text = content['content'];
        }

        if (rule == 'oc3') {
            rule_text = 'Cart has exactly ' + content['quantity'];
            content_text = content['content'];
        }

        if (rule == 'oc4') {
            rule_text = 'Cart does not have any ';
            content_text = content['content'];
        }

        if (rule == 'oc5') {
            rule_text = 'Cart total is at least '
            content_text = content + ' cents';
        }

        if (rule == 'oc6') {
            rule_text = 'Cart total is at most '
            content_text = content + ' cents';
        }

        if (rule == 'oc7') {
            rule_text = 'Customer is located in '
            content_text = content;
        }

        if (rule == 'oc8') {
            rule_text = 'Customer is not located in '
            content_text = content;
        }

        var condition =
            '<div style="display: table; width: 100%; width: 100%; background: #ffffff; padding: 5px; margin-bottom: 5px;">' +
            '<div style="vertical-align: middle; display: inline-table; width: 80%; background: #ffffff;">' +
            '<p>' +
            rule_text + '<br />' +
            '<small><em>' + content_text + '</small>' +
            '</p>' +
            '</div>' +
            '<div style="vertical-align: middle; display: inline-table; width: 20%; text-align: right;">' +
            '<span class="btn btn-info btn-xs pull-right" onclick="removeVariants(' + i + ');">x</span>' +
            '</div>' +
            '</div>';
        $('.conditionsHandler').append(condition);
    });
}

function removeVariants(variant) {
    $(conditions).each(function(i, e) {
        conditions = $.grep(conditions, function(value) {
            return value != conditions[variant];
        });
        loadVariants();
    });
}
</script>