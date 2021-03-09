// //@ts-check
function g_d(g_url) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false); // false for synchronous request
    xmlHttp.send(null);
    return JSON.parse(xmlHttp.responseText);
}

function g_s_s_w(g_url) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
}

function get_this(request) {
    if (request) {
        request.onload = function () {
            return request.responseText;
        };
        request.send();
    }
}

// function createCORSRequest(method, url) {
//     var xhr = new XMLHttpRequest();
//     if ("withCredentials" in xhr) {
//         xhr.open(method, url, true);
//     } else if (typeof XDomainRequest != "undefined") {
//         xhr = new XDomainRequest();
//         xhr.open(method, url);
//     } else {
//         xhr = null;
//     }
//     return xhr;
// }

var simu = () => {
    var ua = navigator.userAgent;
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
        return "tablet";
    }
    if (
        /Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(
            ua
        )
    ) {
        return "mobile";
    }
    return "desktop";
};

var burl = 'https://sleekupsell.com';
var page_ss = window.location.href;
var s_s_w = g_s_s_w('https://sleekupsell.com/s_s_w/' + Shopify.shop);

var Shopify = Shopify || {};
// ---------------------------------------------------------------------------
// Money format handler
// ---------------------------------------------------------------------------
Shopify.money_format = g_s_s_w(burl + '/mf/' + Shopify.shop);
Shopify.currency = Shopify.money_format.substr(0, Shopify.money_format.indexOf('{')).substr(0, Shopify.money_format.indexOf('}'));
console.log(Shopify.currency);
Shopify.formatMoney = function (cents, format) {
    if (typeof cents == 'string') { cents = cents.replace('.', ''); }
    var value = '';
    var placeholderRegex = /\{\{\s*(\w+)\s*\}\}/;
    var formatString = (format || this.money_format);

    function defaultOption(opt, def) {
        return (typeof opt == 'undefined' ? def : opt);
    }

    function formatWithDelimiters(number, precision, thousands, decimal) {
        precision = defaultOption(precision, 2);
        thousands = defaultOption(thousands, ',');
        decimal = defaultOption(decimal, '.');

        if (isNaN(number) || number == null) { return 0; }

        number = (number / 100.0).toFixed(precision);

        var parts = number.split('.'),
            dollars = parts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, Shopify.currency + ' 1' + thousands),
            cents = parts[1] ? (decimal + parts[1]) : '';

        return dollars + cents;
    }

    switch (formatString.match(placeholderRegex)[1]) {
        case 'amount':
            value = formatWithDelimiters(cents, 2);
            break;
        case 'amount_no_decimals':
            value = formatWithDelimiters(cents, 0);
            break;
        case 'amount_with_comma_separator':
            value = formatWithDelimiters(cents, 2, '.', ',');
            break;
        case 'amount_no_decimals_with_comma_separator':
            value = formatWithDelimiters(cents, 0, '.', ',');
            break;
    }

    return formatString.replace(placeholderRegex, value);
};

if (typeof jQuery === 'undefined' || jQuery == null) {
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "https://sleekupsell.com/assets/js/jquery-1.11.3.min.js";
    document.getElementsByTagName('head')[0].appendChild(script);
    script.onload = function () {
        sleek_upsell();
    };
} else {
    sleek_upsell();
}

async function sleek_upsell() {

    Array.prototype.atleast = function (limit, predicate) {
        if (limit == 0) return true;
        var count = 0;
        for (var elem of this) {
            if (predicate(elem)) {
                count++;
                if (count == limit) {
                    return true;
                }
            }
        }
        return false;
    }

    Array.prototype.atmost = function (limit, predicate) {
        var count = 0;
        for (var elem of this) {
            if (predicate(elem)) {
                count++;
                if (count > limit) {
                    return false;
                }
            }
        }
        return true;
    }

    Array.prototype.exactly = function (limit, predicate) {
        var count = 0;
        for (var elem of this) {
            if (predicate(elem)) {
                count++;
                if (count > limit) {
                    return false;
                }
            }
        }
        return count == limit;
    }

    Array.prototype.none = function (predicate) {
        return !this.some(predicate);
    }

    var page = window.location.pathname;

    var offers_url = 'https://sleekupsell.com/offers/' + Shopify.shop;

    var offers = g_d(offers_url);
    var cart = g_d("/cart.js");

    var auto_collection = offers['auto_collection'];
    var settings = offers['settings'];
    var drawer_selector = 'form[action="/cart"]';
    var drawer_position = 'before';
    var cart_selector = 'form[action="/cart"]';
    var cart_position = 'before';

    if (settings != null) {
        drawer_selector = settings.drawer_location;
        cart_selector = settings.cart_location;
        cart_position = settings.cart_position;
        drawer_position = settings.drawer_position;
    }

    function openReplacement() {
        this.addEventListener("load", function () {
            if (
                [
                    "/cart/add.js",
                    "/cart/update.js",
                    "/cart/change.js",
                    "/cart/clear.js",
                ].includes(this._url)
            ) {
                if (page.includes('/cart')) {

                } else {
                    cart = g_d("https://" + Shopify.shop + "/cart.js");
                    choose_offer();
                }
            }
        });
        return open.apply(this, arguments);
    }

    var open = window.XMLHttpRequest.prototype.open;

    if (!page.includes('/cart')) { window.XMLHttpRequest.prototype.open = openReplacement; }

    choose_offer();

    function choose_offer() {
        try {
            if (cart['item_count'] > 0) {
                if (auto_collection != 'null' && auto_collection != null && auto_collection.status === '1') {
                    collection_based();
                } else {
                    next_offer();
                }
            }
        } catch (error) {
            next_offer();
        }
    }

    function next_offer() {
        try {
            $('.sleek-upsell').remove();
        } catch (error) { }
        if (page_ss.includes(s_s_w) || sessionStorage.getItem('s_u_w') == 'y') {
            return false;
        } else {
            if ($('.sleek-upsell') != null) {
                $('.sleek-upsell').remove();
            }
            if (cart["item_count"] > 0) {
                var offer = Object.entries(offers['offer']).find(([pos, v]) => check_offer(pos, v));
                if (offer) {
                    var [pos, v] = offer;
                    display_offer(pos);
                }
            }
        }
    }

    function collection_based() {
        if (cart['item_count'] > 0 && Object.keys(auto_collection) != 'undefined' && Object.keys(auto_collection).length > 0 && auto_collection.status === '1') {
            var collects = offers['collects'];
            var items = cart['items'];
            var pid = '';
            console.log('items');
            console.log(items);
            console.log('Looping through ' + items.length + ' items');
            for (var i = 0; i < items.length; i++) {
                pid = items[i]['product_id'];
                console.log('Checking items ' + i + ' : ' + pid);
                if (sessionStorage.getItem('c_upsold_' + pid) == 'y') {
                    console.log('This has already been upsold');
                    continue;
                } else {
                    console.log('Creating upsell for ' + pid);
                    if (collects.findIndex(x => x.product_id == pid) != -1) {
                        sessionStorage.setItem('c_upsold_' + pid, 'y');
                        var n = collects.filter(x => x.product_id == pid);
                        var cid = n[0]['collection_id'];
                        var cb = collects.filter(x => x.collection_id == cid);

                        console.log('Needed object');
                        console.log(n);
                        console.log('Collection ID ' + cid);
                        console.log(cb);

                        console.log('Looping through ' + cb.length + ' collection items');
                        for (var c = 0; c < cb.length; c++) {
                            console.log('Checking collection item ' + c);
                            if (sessionStorage.getItem('c_used_' + cb[c]['product_id']) == 'z') {
                                console.log('This item was already an upsell ' + cb[c]['product_id']);
                                continue;
                            } else {
                                if (items.findIndex(x => x.product_id == cb[c]['product_id']) != -1) {
                                    sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z');
                                    continue;
                                } else {
                                    // alert('Display '+cb[c]['product_id']);
                                    if (auto_collection['same_vendor'] == 'y') {
                                        pidV = items[i]['vendor'];;
                                        pid2V = gv(base_url + '/gv/' + Shopify.shop + '/' + cb[c]['product_id']).product['vendor'];
                                        if (pidV == pid2V) {
                                            console.log('Vendor ' + pidV + ' same as vendor ' + pid2V)
                                            sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z');
                                            console.log('Using ' + cb[c]['product_id'] + ' as an upsell for ' + pid);
                                            load_c_based(cb[c]['product_id']);
                                        } else {
                                            console.log('Vendor ' + pidV + ' not same as vendor ' + pid2V)
                                            continue;
                                        }
                                    }
                                    else {
                                        sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z');
                                        console.log('Using ' + cb[c]['product_id'] + ' as an upsell for ' + pid);
                                        load_c_based(cb[c]['product_id']);
                                    }
                                    break;
                                }
                            }
                        }
                        break;

                    }

                    else {
                        console.log('This product aint part of a collection');
                        continue;
                    }
                }
            }
        }
    }

    function check_offer(index, offer) {
        var status = offer['offer'][0]['status'];
        if (status != 1 || sessionStorage.getItem('sleek_shown_' + index) == 'y') {
            return false;
        }

        var o_rule = offer['offer'][0]['rule'];
        var blocks = offer['blocks'];
        switch (o_rule) {
            case 'ANY': return blocks.some(check_block);
            case 'ALL': return blocks.every(check_block);
            default: return false;
        }
    }

    function check_block(block) {
        var oid = block['oid'];
        var bid = block['bid'];
        var b_rule = block['rule'];

        var oc = offers['offer'][oid]['conditions'];
        var bc = oc.filter(e => e.bid == bid);

        switch (b_rule) {
            case 'ANY': return bc.some(check_condition);
            case 'ALL': return bc.every(check_condition);
            default: return false;
        }
    }

    function check_condition(condition) {
        var type = condition["type"];
        var quantity = condition["quantity"];
        var level = condition["level"];
        var vendor = condition["content"];
        var pid = condition["pid"];
        var vid = condition["vid"];
        var amount = condition["amount"];
        var country = condition["country"];
        var citems = cart["items"];

        switch (type) {
            case 'oc1':
                switch (level) {
                    case 'product': return citems.atleast(quantity, it => it.product_id == pid);
                    case 'variant': return citems.atleast(quantity, it => it.variant_id == vid);
                    case 'collection': return offers['collects'].atleast(quantity, c =>
                        c.collection_id == pid &&
                        citems.some(it => it.product_id == c.product_id)
                    );
                    default: return false;
                }
            case 'oc2':
                switch (level) {
                    case 'product': return citems.atmost(quantity, it => it.product_id == pid);
                    case 'variant': return citems.atmost(quantity, it => it.variant_id == vid);
                    case 'collection': return offers['collects'].atmost(quantity, c =>
                        c.collection_id == pid && citems.some(it => it.product_id == c.product_id)
                    );
                    default: return false;
                }
            case 'oc3':
                switch (level) {
                    case 'product': return citems.exactly(quantity, it => it.product_id == pid);
                    case 'variant': return citems.exactly(quantity, it => it.variant_id == vid);
                    case 'collection': return offers['collects'].exactly(quantity, c =>
                        c.collection_id == pid &&
                        citems.some(it => it.product_id == c.product_id)
                    );
                    default: return false;
                }
            case 'oc4':
                switch (level) {
                    case 'product': return citems.none(it => it.product_id == pid);
                    case 'variant': return citems.none(it => it.variant_id == vid);
                    case 'collection': return offers['collects'].none(c =>
                        c.collection_id == pid &&
                        citems.some(it => it.product_id == c.product_id)
                    );
                    default: return false;
                }
            case 'oc5': return cart["total_price"] >= amount;
            case 'oc6': return cart["total_price"] <= amount;
            case 'oc7': return false; // Customer located in
            case 'oc8': return false;// Customer not located in
            case 'oc9': return citems.some(it => it.vendor == vendor);
            case 'oc10': return citems.none(it => it.vendor == vendor);
            default: return false;
        }
    }

    function populateFields(oid, pid) {
        var fields = offers['offer'][oid].fields;
        var choices = offers['offer'][oid].choices;

        fields.filter(f => f.pid == pid)
            .forEach(f =>
                create_field(pid, f, f.type == 'select' ? choices.filter(c => c.fid == f.fid) : [])
            );
    }

    function create_field(pid, field, choices) {
        var type = field.type;
        var label = field.placeholder;
        var name = field.name;

        switch (type) {
            case 'select':
                ins_field(label_field(`<select class="form-control select sleek_fields_${field.fid}"`,
                    `></select>`,
                    label, name
                ), pid);
                ins_opt_placeholder(name, label);
                choices.forEach(c => ins_opt(field.fid, c.value, c.price));
                break;
            case 'checkbox_group': ins_field(label_field(`<input type="checkbox"`, `/>`, label, name), pid);
                break;
            case 'textarea': ins_field(label_field(`<textarea`, `>${label}<textarea/>`, label, name), pid);
                break;
            case 'checkbox':
            case 'radio': ins_field(label_field(`<input type="${type}"`, `/> ${label}`, label, name), pid);
                break;
            case 'number':
            case 'text':
            case 'file':
            case 'date': ins_field(label_field(`<input type="${type}"`, `/>`, label, name), pid);
                break;
            case 'swatch': ins_field(label_field(`<input type="color" style="min-width: 150px;"`, `/>`, label, name), pid);
                break;
        }
    }

    function ins_field(f_html, pid) {
        $(`.o_h_${pid}`).append(f_html);
    }

    function ins_opt_placeholder(name, label) {
        $(`.sleek_fields_${name}`).append($(`<option value="">${label}</option>`));
    }

    function ins_opt(fid, val, price) {
        $(`.sleek_fields_${fid}`).append($(`<option value="${val}">${val} (${price})</option>`));
    }

    function label_field(o_tag, c_tag, label, name) {
        return `
            <div>
                <label>${label}</label>
                ${o_tag} id="properties[${name}]" name="properties[${name}] placeholder="${label}" ${c_tag}
            </div>`;
    }

    function user_browser() {
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
            return 'Opera';
        }
        else if (navigator.userAgent.indexOf("Chrome") != -1) {
            return 'Chrome';
        }
        else if (navigator.userAgent.indexOf("Safari") != -1) {
            return 'Safari';
        }
        else if (navigator.userAgent.indexOf("Firefox") != -1) {
            return 'Firefox';
        }
        else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {
            return 'IE';
        }
        else {
            return 'unknown';
        }
    }

    function brgxczvy(oid, pid, vid, quantity, price, action, type) {
        var citems = cart['items'].map(it => it.product_id);
        //            var s = {
        //                'stat_id': '',
        //                'date': Math.floor(Date.now() / 1000),
        //                'shop': Shopify.shop,
        //                'offer': oid,
        //                'product': pid,
        //                'variant': vid,
        //                'quantity': quantity,
        //                'ip': '',
        //                'country': '',
        //                'type': type,
        //                'action': action,
        //                'page': page,
        //                'device': simu(),
        //                'browser': user_browser(),
        //                'citems': citems,
        //                'price': price
        //            };

        var http = new XMLHttpRequest();
        var url = 'https://sleekupsell.com/brgxczvy';
        var params = 'stat_id=""&date=' + Math.floor(Date.now() / 1000) + '&shop=' + Shopify.shop + '&offer=' + oid + '&product=' + pid + '&variant=' + vid + '&quantity=' + quantity + '&ip=""&country=""&type=' + type + '&action=' + action + '&page=' + page + '&device=' + simu() + '&browser=' + user_browser() + '&citems=' + JSON.stringify(citems) + '&price=' + price;
        http.open('POST', url, true);

        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function () {
            if (http.readyState === 4) {
                if (http.status === 200) {
                    console.log(http.responseText)
                } else {
                    console.log("Error", http.statusText);
                }
            }
        }
        http.send(params);
    }

    function setStyles() {
        $('.sleek-upsell').css({ 'opacity': '1', 'transform': 'none' });
        $('.sleek-upsell form').css('margin-bottom', '0px');
        if (settings != null) {
            $('<style>' + settings['override'] + '</style>').insertAfter('.sleek-upsell');
            $('.sleek-upsell').css({ 'background-color': settings['layout_bg'], 'color': settings['layout_color'], 'font-family': settings['layout_font'], 'font-size': settings['layout_size'], 'margin-top': settings['layout_mt'], 'margin-bottom': settings['layout_mb'], 'border-radius': settings['offer_radius'], 'border-width': settings['offer_bs'], 'border-color': settings['offer_bc'], 'border-style': settings['offer_border'] });
            $('.sleek-upsell select').css({ 'background-color': settings['layout_bg'], 'color': settings['layout_color'] });
            $('.sleek-upsell button').css({ 'background-color': settings['button_bg'], 'color': settings['button_color'], 'font-family': settings['button_font'], 'font-size': settings['button_size'], 'margin-top': settings['button_mt'], 'margin-bottom': settings['button_mb'], 'border-radius': settings['button_radius'], 'border-width': settings['button_bs'], 'border-color': settings['button_bc'], 'border-style': settings['button_border'] });
            $('.sleek-upsell img').css({ 'border-radius': settings['image_radius'], 'border-width': settings['image_bs'], 'color': settings['image_bc'], 'border-style': settings['image_border'] });
            $('.sleek-text').css({ 'color': settings['text_color'], 'font-family': settings['text_font'], 'font-size': settings['text_size'] });
            $('.sleek-title').css({ 'color': settings['title_color'], 'font-family': settings['title_font'], 'font-size': settings['title_size'] });
            $('.sleek-price').css({ 'color': settings['price_color'], 'font-family': settings['price_font'], 'font-size': settings['price_size'] });
        }
    }

    function display_offer(oid) {
        var element = '';
        var settings = offers['settings'];
        var lay = offers['offer'][oid]['offer'][0]['layout'];
        var lay_el = '<div class="card sleek-upsell"></div>';
        var nudge = 'before';

        if (page.includes('/cart')) { element = cart_selector; nudge = cart_position; }
        else { element = drawer_selector; nudge = drawer_position; }

        $('<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>').insertBefore(element);

        switch (lay) {
            case 'card':
            case 'flat':
            case 'block':
            case 'half-block':
            case 'compact':
                lay_el = `<div class="${lay} sleek-upsell"></div>`;
                break;
            default:
                lay_el = '<div class="card sleek-upsell"></div>';
        }

        switch (nudge) {
            case 'prepend':
                $(element).prepend(lay_el);
                break;
            case 'append':
                $(element).append(lay_el);
                break;
            case 'before':
                $(lay_el).insertBefore(element);
                break;
            case 'after':
                $(lay_el).insertAfter(element);
                break;
        }

        if (drawer_position == 'before') { }

        if (offers['offer'][oid]['offer'][0]['close'] == 'y') {
            $(lay_el).append('<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');
        }

        var products = offers['offer'][oid]['products'];
        console.log('Found products');
        console.log(products);
        console.log('Shop products');

        for (var i = 0; i < products.length; i++) {
            var v = products[i];
            var pid = v['product'];

            var Pgv = g_d(burl + '/gv/' + Shopify.shop + '/' + pid);
            var pDet = Pgv.product;

            var oatc = offers['offer'][oid]['offer'][0]['atc'];
            var vatc = v['atc'];
            var atc = 'ADD TO CART';

            var otext = offers['offer'][oid]['offer'][0]['text'];
            var vtext = v['text'];
            var dtext = 'ADD TO CART';

            if (oatc != '') {
                atc = oatc;
            } else if (vatc != '') {
                atc = vatc;
            } else {
                atc = 'ADD TO CART';
            }

            if (otext != '') {
                dtext = otext;
            } else if (vtext != '') {
                dtext = vtext;
            } else {
                dtext = 'Would you like a ' + pDet.title;
            }

            var o_ui = '<form class="sleek-form" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';

            if (lay == 'card') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';
            } else if (lay == 'flat') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-flat"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <div class="flex-select"> <select name="quantity" class="q-select q-' + pid + '"></select> <button class="sleek-atc" type="submit">' + atc + '</button> </div></div></div></div></form>'
            } else if (lay == 'block') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-block"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
            } else if (lay == 'half-block') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
            } else if (lay == 'compact') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-compact"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></div></form>'
            }

            $('.sleek-upsell').append(o_ui);
            console.log('Adding ' + pid + ' for ' + i);
            if ($('.sleek-form[data-product-index="' + i + '"]').length > 1) {
                for (var sf = 1; sf <= $('.sleek-form[data-product-index="' + i + '"]').length; sf++) {
                    console.log('removing ' + sf);
                    $('.sleek-form[data-product-index="' + i + '"]')[sf].remove();
                }
            }

            if (v['show_title'] == 'n') {
                $('.sleek-title').remove()
            }

            if (v['show_price'] == 'n') {
                $('.sleek-prices').remove()
            }

            if (v['show_image'] == 'n') {
                $('.sleek-image').remove()
            }

            if (v['v_price'] == 'n') {
                $('.sleek-compare-price').remove()
            }

            if (v['c_price'] == 'n') {
                $('.sleek-compare-price').remove()
            }

            if (v['q_select'] == 'n') {
                $('.q_select').style.display = 'none';
            }

            populateFields(oid, pid);
            if (pDet.variants.find(e => e.inventory_management == 'shopify') && pDet.variants.find(e => e.inventory_quantity > 0)) {
                for (var vi = 0; vi < pDet.variants.length; vi++) {
                    console.log(pDet.variants[i]['title']);
                    if (pDet.variants[vi]['inventory_quantity'] > 0) {
                        $('.v-' + pid).append('<option value="' + pDet.variants[vi]['id'] +
                            '">' + pDet.variants[vi]['title'] + ' (' + Shopify.formatMoney((pDet.variants[vi]['price'] * 100), Shopify.money_format) + ')</option>');
                    }
                }
            } else {
                for (var vi = 0; vi < pDet.variants.length; vi++) {
                    console.log(pDet.variants[i]['title']);
                        $('.v-' + pid).append('<option value="' + pDet.variants[vi]['id'] +
                            '">' + pDet.variants[vi]['title'] + '</option>');
                }
            }

            if (pDet.variants.length < 2) {
                $('.v-' + pid).attr('style', 'display:none');
            }
            for (q = 1; q <= 10; q++) {
                $('.q-' + pid).append('<option value="' + q + '">' + q + '</option>')
            }

            brgxczvy(oid, pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'show', 'show');

            $('.v-' + pid).change(function () {
                var imgPos = pDet.variants.findIndex(e => e.id == $(this).val());
                $('form[data-product-product_id="' + pid + '"] img').attr('src', pDet.images['0'].src);
                brgxczvy(oid, pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'variant change', 'impression');
            });
            $('.q-' + pid).change(function () {
                brgxczvy(oid, pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'quantity change', 'impression');
            });
            $('form[data-product-product_id="' + pid + '"]').hover(function () {
                brgxczvy(oid, pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'hover', 'impression');
            });

            $('.sleek-form').submit(function (e) {
                e.preventDefault();
                if (v['rv'] != '') {
                    g_s_s_w('/cart/change?id=' + v['rv'] + '&quantity=0');
                }
                else {
                    if (v['rp'] != '') {
                        var dc = g_d(burl + '/gv/' + Shopify.shop + '/' + v['rp']);
                        for (var vi = 0; vi < dc.product.variants.length; vi++) {
                            g_s_s_w('/cart/change?id=' + dc.product.variants[vi].id + '&quantity=0');
                        }
                    }
                }

                $.ajax({
                    type: 'POST',
                    url: '/cart/add.js',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function (response) {
                        if (offers['offer'][oid]['offer'][0]['stop_show'] == 'y') { sessionStorage.setItem('sleek_shown_' + oid, 'y') };
                        brgxczvy(oid, pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'add to cart', 'purchase');
                        $('.sleek-atc').innerHTML = '<img src="https://sleekupsell.com/assets/images/loader.gif" />';
                        if (offers['offer'][oid]['offer'][0]['discount'] == 'y' && offers['offer'][oid]['offer'][0]['code'] != '') {
                            g_s_s_w('https://' + Shopify.shop + '/discount/' + offers['offer'][oid]['offer'][0]['code']);
                        }
                        if (offers['offer'][oid]['offer'][0]['to_checkout'] == 'y') {
                            window.location.href = "/checkout";
                        } else {
                            if (page.includes('/cart')) {
                                console.log(response);
                                if (offers['offer'][oid]['offer'][0]['stop_show'] == 'y') { sessionStorage.setItem('sleek_shown_' + oid, 'y') };
                                $('.sleek-upsell').remove();
                                window.location.reload(false);
                            }
                            else {
                                $('.sleek-upsell').remove();
                                console.log(response);
                                if (settings != null) {
                                    if (settings['refresh_state'] == 'y') {
                                        eval(settings['drawer_refresh']);
                                    }
                                }
                                next_offer();
                            }
                        }
                    },
                    error: function (response) {
                        console.log(response);
                        $(this).find('button').html('Could not add product');
                        setTimeout(function () { $(this).remove() }, 1000);
                    }
                });
            });
        }

        if ($('.reject_offer') != null) {
            $('.reject_offer').click(function () {
                sessionStorage.setItem('sleek_shown_' + oid, 'y');
                brgxczvy(oid, '', '', '', '', 'reject', 'reject');
                $('.sleek-upsell').remove();
                setTimeout(function () { next_offer() }, 300);
            });
        }

        setStyles();

    }

    function load_c_based(pid) {

        try {
            var i = 0;
            var element = '';
            var settings = offers['settings'];
            var auto_collection = offers['auto_collection'];
            console.log(offers);
            console.log(auto_collection);
            var lay = auto_collection['layout'];
            var lay_el = '<div class="card sleek-upsell"></div>';
            var nudge = 'before';

            if (page.includes('/cart')) { element = cart_selector; nudge = cart_position; }
            else { element = drawer_selector; nudge = drawer_position; }

            $('<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>').insertBefore(element);

            switch (lay) {
                case 'card':
                case 'flat':
                case 'block':
                case 'half-block':
                case 'compact':
                    lay_el = `<div class="${lay} sleek-upsell"></div>`;
                    break;
            }

            switch (nudge) {
                case 'prepend': $(element).prepend(lay_el);
                    break;
                case 'append': $(element).append(lay_el);
                    break
                case 'before': $(lay_el).insertBefore(element);
                    break;
                case 'after': $(lay_el).insertAfter(element);
                    break;
            }

            if (drawer_position == 'before') { }

            if (auto_collection['close'] == 'y') {
                $(lay_el).append('<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');
            }

            var Pgv = g_d(burl + '/gv/' + Shopify.shop + '/' + pid);
            var pDet = Pgv.product;

            var oatc = auto_collection['atc'];
            var atc = 'ADD TO CART';


            var otext = auto_collection['text'];
            var dtext = '';


            if (otext != '') {
                dtext = otext;
            } else {
                dtext = 'Would you like a ' + pDet.title;
            }

            if (oatc != '') {
                atc = oatc;
            } else {
                atc = 'ADD TO CART';
            }

            var o_ui = '<form class="sleek-form" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';


            if (lay == 'card') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';
            }
            if (lay == 'flat') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-flat"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <div class="flex-select"> <select name="quantity" class="q-select q-' + pid + '"></select> <button class="sleek-atc" type="submit">' + atc + '</button> </div></div></div></div></form>'
            }
            if (lay == 'block') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-block"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
            }
            if (lay == 'half-block') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
            }
            if (lay == 'compact') {
                o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-compact"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></div></form>'
            }

            $('.sleek-upsell').append(o_ui);

            if (auto_collection['show_title'] == 'n') {
                $('.sleek-title').remove()
            }

            if (auto_collection['show_price'] == 'n') {
                $('.sleek-prices').remove()
            }

            if (auto_collection['show_image'] == 'n') {
                $('.sleek-image').remove()
            }

            if (auto_collection['v_price'] == 'n') {
                $('.sleek-compare-price').remove()
            }

            if (auto_collection['c_price'] == 'n') {
                $('.sleek-compare-price').remove()
            }

            if (auto_collection['q_select'] == 'n') {
                $('.q_select').style.display = 'none';
            }

            if (pDet.variants.find(e => e.inventory_management == 'shopify') && pDet.variants.find(e => e.inventory_quantity > 0)) {
                for (var vi = 0; vi < pDet.variants.length; vi++) {
                    if (pDet.variants[vi]['inventory_quantity'] > 0) {
                        $('.v-' + pid).append('<option value="' + pDet.variants[vi]['id'] +
                            '">' + pDet.variants[vi]['title'] + ' (' + Shopify.formatMoney((pDet.variants[vi]['price'] * 100), Shopify.money_format) + ')</option>');
                    }
                }
            } else {
                for (var vi = 0; vi < pDet.variants.length; vi++) {
                        $('.v-' + pid).append('<option value="' + pDet.variants[vi]['id'] +
                            '">' + pDet.variants[vi]['title'] + ' (' + Shopify.formatMoney((pDet.variants[vi]['price'] * 100), Shopify.money_format) + ')</option>');
                }
            }

            if (pDet.variants.length < 2) {
                $('.v-' + pid).attr('style', 'display:none');
            }
            for (q = 1; q <= 10; q++) {
                $('.q-' + pid).append('<option value="' + q + '">' + q + '</option>')
            }

            brgxczvy('collection', pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'show', 'show');

            $('.v-' + pid).change(function () {
                var imgPos = pDet.variants.findIndex(e => e.id == $(this).val());
                $('form[data-product-product_id="' + pid + '"] img').attr('src', pDet.images['0'].src);
                brgxczvy('collection', pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'variant change', 'impression');
            });
            $('.q-' + pid).change(function () {
                brgxczvy('collection', pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'quantity change', 'impression');
            });
            $('form[data-product-product_id="' + pid + '"]').hover(function () {
                brgxczvy('collection', pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'hover', 'impression');
            });

            $('.sleek-form').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '/cart/add.js',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function (response) {
                        sessionStorage.setItem('sleek_shown_collection', 'y');
                        brgxczvy('collection', pid, $('.v-' + pid).val(), $('.q-' + pid).val(), pDet.variants[0]['price'], 'add to cart', 'purchase');
                        $('.sleek-atc').innerHTML = '<img src="https://sleekupsell.com/assets/images/loader.gif" />';
                        if (auto_collection['discount'] == 'y' && auto_collection['code'] != '') {
                            g_s_s_w('https://' + Shopify.shop + '/discount/' + auto_collection['code']);
                        }
                        if (auto_collection['to_checkout'] == 'y') {
                            window.location.href = "/checkout";
                        } else {
                            if (page.includes('/cart')) {
                                console.log(response);
                                sessionStorage.setItem('sleek_shown_collection', 'y');
                                $('.sleek-upsell').remove();
                                window.location.reload(false);
                            }
                            else {
                                $('.sleek-upsell').remove();
                                console.log(response);
                                if (settings != null) {
                                    if (settings['refresh_state'] == 'y') {
                                        eval(settings['drawer_refresh']);
                                    }
                                }
                                collection_based();
                            }
                        }
                    },
                    error: function (response) {
                        console.log(response);
                        $(this).find('button').html('Could not add product');
                        setTimeout(function () { $(this).remove() }, 1000);
                    }
                });
            });

            if ($('.reject_offer') != null) {
                $('.reject_offer').click(function () {
                    sessionStorage.setItem('sleek_shown_collection', 'y');
                    brgxczvy('collection', '', '', '', '', 'reject', 'reject');
                    $('.sleek-upsell').remove();
                    setTimeout(function () { collection_based() }, 300);
                });
            }

            setStyles();

        } catch (error) {
            console.log(error);
            collection_based();
        }
    }
}

