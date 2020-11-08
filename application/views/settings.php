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
            <div class="col-sm-6 col-xs-12">
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
            </div>
            <div class="col-sm-6 col-xs-12">
                <h3 style="width: 100%; text-align: center;">Cart Drawer Settings</h3>
                <small style="display: table; width: 100%; text-align: center;">Use this section to select the offer location on the cart drawer (if you have one)</small>
            </div>
        </div>
        <div class="setting_tab s_d">
            <input type="color" class="tu_fields" />
        </div>
        <div class="setting_tab s_s"></div>
        <div class="setting_tab s_a"></div>
    </div>
    <div class="chini"></div>
</div>

<script>
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
        $('.s_' + hii).show(500);
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
</style>