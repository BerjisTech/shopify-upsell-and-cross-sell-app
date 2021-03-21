

let sleek_url = 'https://sleekupsell.com';
let current_page = window.location.href;

var Shopify = Shopify || {};

const ex_requests = (g_url, which) => {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false);
    xmlHttp.send(null);
    if (which == 'json')
        return JSON.parse(xmlHttp.responseText);
    else
        return xmlHttp.responseText;
}

const get_device = () => {
    const ua = navigator.userAgent;
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua))
        return "tablet"
    if (/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua))
        return "mobile";
    return "desktop";
}

Shopify.money_format = ex_requests(sleek_url + '/mf/' + Shopify.shop, 'text');
Shopify.currency = Shopify.money_format.substr(0, Shopify.money_format.indexOf('{')).substr(0, Shopify.money_format.indexOf('}'));
Shopify.formatMoney = (cents, format) => {
    if (typeof cents == 'string')
        cents = cents.replace('.', '');

    let value = '';
    let placeholderRegex = /\{\{\s*(\w+)\s*\}\}/;
    let formatString = (format || this.money_format);

    let defaultOption = (opt, def) => {
        return (typeof opt == 'undefined' ? def : opt);
    }

    let formatWithDelimiters = (number, precision, thousands, decimal) => {
        precision = defaultOption(precision, 2);
        thousands = defaultOption(thousands, ',');
        decimal = defaultOption(decimal, '.');

        if (isNaN(number) || number == null)
            return 0;

        number = (number / 100.0).toFixed(precision);

        let parts = number.split('.'),
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
}

Array.prototype.atleast = function (limit, predicate) {
    if (limit == 0) return true;
    let count = 0;
    for (let elem of this) {
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
    let count = 0;
    for (let elem of this) {
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
    let count = 0;
    for (let elem of this) {
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

const openReplacement = () => {
    this.addEventListener("load", () => {
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
                cart = ex_requests("https://" + Shopify.shop + "/cart.js", "json");
                choose_offer();
            }
        }
    });
    return open.apply(this, arguments);
}

const open = window.XMLHttpRequest.prototype.open;

let page = window.location.pathname;

let offers_url = sleek_url + '/offers/' + Shopify.shop;

let offers = ex_requests(offers_url, 'json');
let cart = ex_requests("/cart.js", 'json');

let auto_collection = offers['auto_collection']
let settings = offers['settings']
let drawer_selector = 'form[action="/cart"]'
let drawer_position = 'before'
let cart_selector = 'form[action="/cart"]'
let cart_position = 'before'

if (settings != null) {
    drawer_selector = settings.drawer_location;
    cart_selector = settings.cart_location;
    cart_position = settings.cart_position;
    drawer_position = settings.drawer_position;
}

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
        document.querySelector('.sleek-upsell').remove()
    } catch (error) { }

    if (document.querySelector('.sleek-upsell') != null) {
        document.querySelector('.sleek-upsell').remove()
    }
    if (cart["item_count"] > 0) {
        let offer = Object.entries(offers['offer']).find(([pos, v]) => check_offer(pos, v));
        if (offer) {
            let [pos, v] = offer;
            generate_offer(pos, 'custom');
        }
    }

}

function collection_based() {
    if (cart['item_count'] > 0 && Object.keys(auto_collection) != 'undefined' && Object.keys(auto_collection).length > 0 && auto_collection.status === '1') {
        let collects = offers['collects']
        let items = cart['items']
        let pid = ''

        for (let i = 0; i < items.length; i++) {
            pid = items[i]['product_id']

            if (sessionStorage.getItem('c_upsold_' + pid) == 'y')
                continue
            else

                if (collects.findIndex(x => x.product_id == pid) != -1) {
                    sessionStorage.setItem('c_upsold_' + pid, 'y')
                    let n = collects.filter(x => x.product_id == pid)
                    let cid = n[0]['collection_id']
                    let cb = collects.filter(x => x.collection_id == cid)

                    for (let c = 0; c < cb.length; c++) {
                        if (sessionStorage.getItem('c_used_' + cb[c]['product_id']) == 'z')
                            continue
                        else
                            if (items.findIndex(x => x.product_id == cb[c]['product_id']) != -1) {
                                sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z')
                                continue
                            } else {

                                if (auto_collection['same_vendor'] == 'y') {
                                    let pidV = items[i]['vendor']
                                    let pid2V = ex_requests(sleek_url + '/gv/' + Shopify.shop + '/' + cb[c]['product_id'], 'json').product['vendor']
                                    if (pidV == pid2V) {
                                        sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z')
                                        generate_offer(cb[c]['product_id'], 'collection')
                                    } else {
                                        continue
                                    }
                                }
                                else {
                                    sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z')
                                    generate_offer(cb[c]['product_id'], 'collection')
                                }
                                break
                            }
                    }
                    break
                } else {
                    continue;
                }
        }
    }
}


function check_offer(index, offer) {
    let status = offer['offer'][0]['status']
    if (status != 1 || sessionStorage.getItem('sleek_shown_' + index) == 'y')
        return false

    let o_rule = offer['offer'][0]['rule']
    let blocks = offer['blocks']
    switch (o_rule) {
        case 'ANY': return blocks.some(check_block)
        case 'ALL': return blocks.every(check_block)
        default: return false
    }
}

function check_block(block) {
    let oid = block['oid']
    let bid = block['bid']
    let b_rule = block['rule']

    let oc = offers['offer'][oid]['conditions']
    let bc = oc.filter(e => e.bid == bid)

    switch (b_rule) {
        case 'ANY': return bc.some(check_condition)
        case 'ALL': return bc.every(check_condition)
        default: return false
    }
}

function check_condition(condition) {
    let type = condition["type"]
    let quantity = condition["quantity"]
    let level = condition["level"]
    let vendor = condition["content"]
    let pid = condition["pid"]
    let vid = condition["vid"]
    let amount = condition["amount"]
    let country = condition["country"]
    let citems = cart["items"]

    switch (type) {
        case 'oc1':
            switch (level) {
                case 'product': return citems.atleast(quantity, it => it.product_id == pid)
                case 'variant': return citems.atleast(quantity, it => it.variant_id == vid)
                case 'collection': return offers['collects'].atleast(quantity, c => c.collection_id == pid && citems.some(it => it.product_id == c.product_id))
                default: return false
            }
        case 'oc2':
            switch (level) {
                case 'product': return citems.atmost(quantity, it => it.product_id == pid)
                case 'variant': return citems.atmost(quantity, it => it.variant_id == vid)
                case 'collection': return offers['collects'].atmost(quantity, c => c.collection_id == pid && citems.some(it => it.product_id == c.product_id))
                default: return false
            }
        case 'oc3':
            switch (level) {
                case 'product': return citems.exactly(quantity, it => it.product_id == pid)
                case 'variant': return citems.exactly(quantity, it => it.variant_id == vid)
                case 'collection': return offers['collects'].exactly(quantity, c => c.collection_id == pid && citems.some(it => it.product_id == c.product_id))
                default: return false
            }
        case 'oc4':
            switch (level) {
                case 'product': return citems.none(it => it.product_id == pid)
                case 'variant': return citems.none(it => it.variant_id == vid)
                case 'collection': return offers['collects'].none(c => c.collection_id == pid && citems.some(it => it.product_id == c.product_id))
                default: return false
            }
        case 'oc5': return cart["total_price"] >= amount
        case 'oc6': return cart["total_price"] <= amount
        case 'oc7': return false; // Customer located in
        case 'oc8': return false;// Customer not located in
        case 'oc9': return citems.some(it => it.vendor == vendor)
        case 'oc10': return citems.none(it => it.vendor == vendor)
        default: return false
    }
}

function populateFields(oid, pid) {
    let fields = offers['offer'][oid].fields
    let choices = offers['offer'][oid].choices

    fields.filter(f => f.pid == pid)
        .forEach(f =>
            create_field(pid, f, f.type == 'select' ? choices.filter(c => c.fid == f.fid) : [])
        );
}

function create_field(pid, field, choices) {
    let type = field.type
    let label = field.placeholder
    let name = field.name

    switch (type) {
        case 'select':
            ins_field(label_field(`<select class="form-control select sleek_fields_${field.fid}"`,
                `></select>`,
                label, name
            ), pid);
            ins_opt_placeholder(name, label)
            choices.forEach(c => ins_opt(field.fid, c.value, c.price))
            break
        case 'checkbox_group': ins_field(label_field(`<input type="checkbox"`, `/>`, label, name), pid)
            break
        case 'textarea': ins_field(label_field(`<textarea`, `>${label}<textarea/>`, label, name), pid)
            break
        case 'checkbox':
        case 'radio': ins_field(label_field(`<input type="${type}"`, `/> ${label}`, label, name), pid)
            break
        case 'number':
        case 'text':
        case 'file':
        case 'date': ins_field(label_field(`<input type="${type}"`, `/>`, label, name), pid)
            break
        case 'swatch': ins_field(label_field(`<input type="color" style="min-width: 150px;"`, `/>`, label, name), pid)
            break
    }
}

function ins_field(f_html, pid) {
    document.querySelector(`.o_h_${pid}`).insertAdjacentHTML('beforeend', f_html)
}

function ins_opt_placeholder(name, label) {
    document.querySelector(`.sleek_fields_${name}`).insertAdjacentHTML('beforeend', `<option value="">${label}</option>`)
}

function ins_opt(fid, val, price) {
    document.querySelector(`.sleek_fields_${fid}`).insertAdjacentHTML('beforeend', `<option value="${val}">${val} (${price})</option>`)
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
        return 'Opera'
    }
    else if (navigator.userAgent.indexOf("Chrome") != -1) {
        return 'Chrome'
    }
    else if (navigator.userAgent.indexOf("Safari") != -1) {
        return 'Safari'
    }
    else if (navigator.userAgent.indexOf("Firefox") != -1) {
        return 'Firefox'
    }
    else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {
        return 'IE'
    }
    else {
        return 'unknown'
    }
}

function brgxczvy(oid, pid, vid, quantity, price, action, type) {
    let citems = cart['items'].map(it => it.product_id)

    let http = new XMLHttpRequest()
    let url = sleek_url + '/brgxczvy'
    let params = 'stat_id=""&date=' + Math.floor(Date.now() / 1000) + '&shop=' + Shopify.shop + '&offer=' + oid + '&product=' + pid + '&variant=' + vid + '&quantity=' + quantity + '&ip=""&country=""&type=' + type + '&action=' + action + '&page=' + page + '&device=' + simu() + '&browser=' + user_browser() + '&citems=' + JSON.stringify(citems) + '&price=' + price
    http.open('POST', url, true)

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = () => {
        if (http.readyState === 4) {
            if (http.status === 200) {
                // console.log(http.responseText)
            } else {
                // console.log("Error", http.statusText);
            }
        }
    }
    http.send(params);
}

function setStyles() {
    document.querySelectorAll('.sleek-upsell').forEach(el => el.style.cssText = 'opacity:1; transform:none;')
    document.querySelectorAll('.sleek-upsell form').forEach(el => el.style.cssText = 'margin-bottom: 0px;')
    if (settings != null) {
        document.querySelector('.sleek-upsell').insertAdjacentHTML('afterend', '<style>' + settings['override'] + '</style>');
        document.querySelectorAll('.sleek-upsell').forEach(el => el.style.cssText = 'background-color:' + settings['layout_bg'] + '; color:' + settings['layout_color'] + '; font-family:' + settings['layout_font'] + '; font-size:' + settings['layout_size'] + '; margin-top:' + settings['layout_mt'] + '; margin-bottom:' + settings['layout_mb'] + '; border-radius:' + settings['offer_radius'] + '; border-width:' + settings['offer_bs'] + '; border-color:' + settings['offer_bc'] + '; border-style:' + settings['offer_border'] + '; ')
        document.querySelectorAll('.sleek-upsell select').forEach(el => el.style.cssText = 'background-color:' + settings['layout_bg'] + '; color:' + settings['layout_color'] + '; ')
        document.querySelectorAll('.sleek-upsell button').forEach(el => el.style.cssText = 'background-color:' + settings['button_bg'] + '; color:' + settings['button_color'] + '; font-family:' + settings['button_font'] + '; font-size:' + settings['button_size'] + '; margin-top:' + settings['button_mt'] + '; margin-bottom:' + settings['button_mb'] + '; border-radius:' + settings['button_radius'] + '; border-width:' + settings['button_bs'] + '; border-color:' + settings['button_bc'] + '; border-style:' + settings['button_border'] + '; ')
        document.querySelectorAll('.sleek-upsell img').forEach(el => el.style.cssText = 'border-radius:' + settings['image_radius'] + '; border-width:' + settings['image_bs'] + '; color:' + settings['image_bc'] + '; border-style:' + settings['image_border'] + '; ')
        document.querySelectorAll('.sleek-text').forEach(el => el.style.cssText = 'color:' + settings['text_color'] + '; font-family:' + settings['text_font'] + '; font-size:' + settings['text_size'] + '; ')
        document.querySelectorAll('.sleek-title').forEach(el => el.style.cssText = 'color:' + settings['title_color'] + '; font-family:' + settings['title_font'] + '; font-size:' + settings['title_size'] + '; ')
        document.querySelectorAll('.sleek-price').forEach(el => el.style.cssText = 'color:' + settings['price_color'] + '; font-family:' + settings['price_font'] + '; font-size:' + settings['price_size'] + '; ')
    }
}

function generate_offer(oid, otype) {
    let element = '';
    let auto_collection = offers['auto_collection'];
    let lay = offers['offer'][oid]['offer'][0]['layout']
    let lay_el = '<div class="card sleek-upsell"></div>'
    let nudge = 'before'

    if (page.includes('/cart')) { element = cart_selector; nudge = cart_position }
    else { element = drawer_selector; nudge = drawer_position }

    document.querySelector(element).insertAdjacentHTML('beforebegin', '<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>')

    correct_layout(lay, lay_el)
    correct_nudge(nudge, element, lay_el)

    if ((offers['offer'][oid]['offer'][0]['close'] == 'y' && otype == 'product') || (auto_collection['close'] == 'y' && otype == 'collection'))
        document.querySelector(lay_el).insertAdjacentHTML('beforeend', '<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>')


    let products = offers['offer'][oid]['products']

    if (otype == 'product')
        iterate_offer_options(products, sleek_url, oid, lay)

    if (otype == 'collection')
        proceed_collection(oid, lay, 0, auto_collection, otype)
}

function correct_layout(lay, lay_el) {
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
}

function correct_nudge(nudge, element, lay_el) {
    switch (nudge) {
        case 'prepend':
            document.querySelector(element).insertAdjacentHTML('afterbegin', lay_el);
            break;
        case 'append':
            document.querySelector(element).insertAdjacentHTML('beforeend', lay_el);
            break;
        case 'before':
            document.querySelector(element).insertAdjacentHTML('beforebegin', lay_el);
            break;
        case 'after':
            document.querySelector(element).insertAdjacentHTML('afterend', lay_el);
            break;
    }
}

function iterate_offer_options(products, sleek_url, oid, lay) {
    for (let i = 0; i < products.length; i++) {
        let v = products[i];
        let pid = v['product'];

        let Pgv = ex_requests(sleek_url + '/gv/' + Shopify.shop + '/' + pid, 'json');
        let pDet = Pgv.product;

        let oatc = offers['offer'][oid]['offer'][0]['atc'];
        let vatc = v['atc'];
        let atc = 'ADD TO CART';

        let otext = offers['offer'][oid]['offer'][0]['text'];
        let vtext = v['text'];
        let dtext = 'ADD TO CART';

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

        let o_ui = '<form class="sleek-form" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';

        layout_designs(lay, o_ui, i, pid, dtext, pDet, atc)

        document.querySelector('.sleek-upsell').insertAdjacentHTML('beforeend', o_ui);

        if (document.querySelector('.sleek-form[data-product-index="' + i + '"]').length > 1) {
            for (let sf = 1; sf <= document.querySelector('.sleek-form[data-product-index="' + i + '"]').length; sf++) {
                document.querySelector('.sleek-form[data-product-index="' + i + '"]')[sf].remove();
            }
        }

        some_removals(v)

        populateFields(oid, pid);

        if (pDet.variants.find(e => e.inventory_quantity > 0)) {
            for (let vi = 0; vi < pDet.variants.length; vi++) {
                // console.log(pDet.variants[i]['title']);
                if (pDet.variants[vi]['inventory_quantity'] > 0) {
                    document.querySelector('.v-' + pid).insertAdjacentHTML('beforeend', '<option value="' + pDet.variants[vi]['id'] +
                        '">' + pDet.variants[vi]['title'] + ' (' + Shopify.formatMoney((pDet.variants[vi]['price'] * 100), Shopify.money_format) + ')</option>');
                }
            }
        } else {
            console.log('Product out of stock');
            sessionStorage.setItem('sleek_shown_' + oid, 'y')
            document.querySelector('.sleek-upsell').remove()
        }

        if (pDet.variants.length < 2) {
            $('.v-' + pid).attr('style', 'display:none');
        }
        for (let q = 1; q <= 10; q++) {
            $('.q-' + pid).append('<option value="' + q + '">' + q + '</option>')
        }

        stats_events(oid, pid, pDet)

        accept_offer(oid, pid, v, pDet, i)
    }
}

function proceed_collection(pid, lay, i, auto_collection, otype) {
    let Pgv = ex_requests(sleek_url + '/gv/' + Shopify.shop + '/' + pid, 'json');
    let pDet = Pgv.product;

    let oatc = auto_collection['atc'];
    let atc = 'ADD TO CART';


    let otext = auto_collection['text'];
    let dtext = '';


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

    let o_ui = '<form class="sleek-form" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + pDet.image['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + pDet.title + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + Shopify.formatMoney((pDet.variants[0]['price'] * 100), Shopify.money_format) + '</span> <span class="sleek-compare-price money">' + Shopify.formatMoney((pDet.variants[0]['compare_at_price'] * 100), Shopify.money_format) + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';

    layout_designs(lay, o_ui, i, pid, dtext, pDet, atc)

    document.querySelector('.sleek-upsell').insertAdjacentHTML('beforeend', o_ui);

    if (document.querySelector('.sleek-form[data-product-index="' + i + '"]').length > 1) {
        for (let sf = 1; sf <= document.querySelector('.sleek-form[data-product-index="' + i + '"]').length; sf++) {
            document.querySelector('.sleek-form[data-product-index="' + i + '"]')[sf].remove();
        }
    }

    some_removals(auto_collection)

    if (pDet.variants.find(e => e.inventory_quantity > 0)) {
        for (let vi = 0; vi < pDet.variants.length; vi++) {
            // console.log(pDet.variants[i]['title']);
            if (pDet.variants[vi]['inventory_quantity'] > 0) {
                document.querySelector('.v-' + pid).insertAdjacentHTML('beforeend', '<option value="' + pDet.variants[vi]['id'] +
                    '">' + pDet.variants[vi]['title'] + ' (' + Shopify.formatMoney((pDet.variants[vi]['price'] * 100), Shopify.money_format) + ')</option>');
            }
        }
    } else {
        console.log('Product out of stock');
        sessionStorage.setItem('sleek_shown_collection', 'y');
        document.querySelector('.sleek-upsell').remove()
    }

    if (pDet.variants.length < 2) {
        document.querySelector('.v-' + pid).style.display = 'none'
    }
    for (let q = 1; q <= 10; q++) {
        document.querySelector('.q-' + pid).insertAdjacentHTML('beforeend', '<option value="' + q + '">' + q + '</option>')
    }

    stats_events(otype, pid, pDet)

    accept_offer(otype, pid, auto_collection, pDet, i)

}

function layout_designs(lay, o_ui, i, pid, dtext, pDet, atc) {
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
}
function some_removals(v) {
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
}

function accept_offer(oid, pid, v, pDet, i) {
    document.querySelector('.sleek-form[data-product-index="' + i + '"]').onsubmit = (e) => {
        e.preventDefault();
        if (v['rv'] != '') {
            ex_requests('/cart/change?id=' + v['rv'] + '&quantity=0', 'text');
        }
        else {
            if (v['rp'] != '') {
                let dc = ex_requests(sleek_url + '/gv/' + Shopify.shop + '/' + v['rp'], 'json');
                for (let vi = 0; vi < dc.product.variants.length; vi++) {
                    ex_requests('/cart/change?id=' + dc.product.variants[vi].id + '&quantity=0', 'text');
                }
            }
        }

        let addToCartForm = document.querySelector(this);
        let formData = new FormData(addToCartForm);

        fetch('/cart/add.js', {
            method: 'POST',
            body: formData
        })
            .then(response => {
                if (offers['offer'][oid]['offer'][0]['stop_show'] == 'y') { sessionStorage.setItem('sleek_shown_' + oid, 'y') };
                brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, pDet.variants[0]['price'], 'add to cart', 'purchase');
                document.querySelector('.sleek-atc').innerHTML = '<img src="https://sleekupsell.com/assets/images/loader.gif" />';

                if (offers['offer'][oid]['offer'][0]['discount'] == 'y' && offers['offer'][oid]['offer'][0]['code'] != '')
                    ex_requests('https://' + Shopify.shop + '/discount/' + offers['offer'][oid]['offer'][0]['code'], 'text');


                if (offers['offer'][oid]['offer'][0]['to_checkout'] == 'y')
                    window.location.href = "/checkout";
                else
                    if (page.includes('/cart')) {
                        // console.log(response);
                        if (offers['offer'][oid]['offer'][0]['stop_show'] == 'y') { sessionStorage.setItem('sleek_shown_' + oid, 'y') };
                        document.querySelector('.sleek-upsell').remove()
                        window.location.reload(false);
                    }
                    else {
                        document.querySelector('.sleek-upsell').remove()
                        // console.log(response);
                        if (settings != null) {
                            if (settings['refresh_state'] == 'y') {
                                eval(settings['drawer_refresh']);
                            }
                        }
                        next_offer();
                    }
                return response.json();
            })
            .catch((error) => {
                setTimeout(function () { document.querySelector(this).remove() }, 1000);
                console.error('Error:', error);
            });
    }
}

function stats_events(oid, pid, pDet) {
    brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, pDet.variants[0]['price'], 'show', 'show');

    document.querySelector('.v-' + pid).onchange = () => {
        document.querySelector('form[data-product-product_id="' + pid + '"] img').src = pDet.images['0'].src;
        brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, pDet.variants[0]['price'], 'variant change', 'impression');
    }
    document.querySelector('.q-' + pid).onchange = () => {
        brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, pDet.variants[0]['price'], 'quantity change', 'impression');
    }
    document.querySelector('form[data-product-product_id="' + pid + '"]').onmouseover = () => {
        brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, pDet.variants[0]['price'], 'hover', 'impression');
    }
}

