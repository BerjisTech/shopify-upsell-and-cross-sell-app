let page_ss = window.location.href;
let s_s_w = g_s_s_w('https://sleek-upsell.herokuapp.com/s_s_w/' + Shopify.shop);


function createSUW() {
    document.querySelector('body').insertAdjacentHTML('afterbegin', '<style>.suw{display: table; width: 300px; height: 500px; background: #ffffff; position: fixed; bottom: 0px; left: 0px; z-index: 3000000;}.suw_head, .suw_footer{display: table; width: 100%; height: 50px !important; background: #981B1B !important; color: #ffffff;}.suw_body{overflow-Y: auto; display: table; width: 100%; height: 400px;}.suw_head:before{content: "SETUP WIZARD"; display: table; position: absolute; top: 10px; left: 10px; z-index: 2000000; color: #FFFFFF; font-size: 12px;}.suw_head{cursor:move; cursor:-webkit-grab; cursor:-moz-grab; cursor:grab;}</style>');
    document.querySelector('body').insertAdjacentHTML('afterbegin', '<div class="draggable suw">' +
        '<div class="suw_head dragger"></div>' +
        '<div class="suw_body"><img src="https://sleek-upsell.com/assets/images/loader.gif" style="margin: 150px auto;"/></div>' +
        '<div class="suw_footer"></div>' +
        '</div>');
    var x, y, target = null;

    document.addEventListener('mousedown', function (e) {
        var clickedDragger = false;
        for (var i = 0; e.path[i] !== document.body; i++) {
            if (e.path[i].classList.contains('dragger')) {
                clickedDragger = true;
            }
            else if (clickedDragger && e.path[i].classList.contains('draggable')) {
                target = e.path[i];
                target.classList.add('dragging');
                x = e.clientX - target.style.left.slice(0, -2);
                y = e.clientY - target.style.top.slice(0, -2);
                return;
            }
        }
    });

    document.addEventListener('mouseup', function () {
        if (target !== null) target.classList.remove('dragging');
        target = null;
    });

    document.addEventListener('mousemove', function (e) {
        if (target === null) return;
        target.style.left = e.clientX - x + 'px';
        target.style.top = e.clientY - y + 'px';
        var pRect = target.parentElement.getBoundingClientRect();
        var tgtRect = target.getBoundingClientRect();

        if (tgtRect.left < pRect.left) target.style.left = 0;
        if (tgtRect.top < pRect.top) target.style.top = 0;
        if (tgtRect.right > pRect.right) target.style.left = pRect.width - tgtRect.width + 'px';
        if (tgtRect.bottom > pRect.bottom) target.style.top = pRect.height - tgtRect.height + 'px';
    });

    if (typeof jQuery === 'undefined' || jQuery == null) {
        var script = document.createElement('script');
        script.type = "text/javascript";
        script.src = "https://sleek-upsell.com/assets/js/jquery-1.11.3.min.js";
        document.getElementsByTagName('head')[0].appendChild(script);
        script.onload = function () {
            $('.suw_body').load('https://sleek-upsell.herokuapp.com/suw/' + Shopify.shop);
        };
    } else {
        $('.suw_body').load('https://sleek-upsell.herokuapp.com/suw/' + Shopify.shop);
    }



}

if (sessionStorage.getItem('s_u_w') == 'y') { createSUW(); }
else {
    // console.log(sessionStorage.getItem('s_u_w'));
    if (page_ss.includes(s_s_w)) {
        sessionStorage.setItem('s_u_w', 'y');
        createSUW();
    }
    // else {
    //     // console.log(page_ss);
    //     // console.log(s_s_w);
    // }
}

function get_this(request) {
    if (request) {
        request.onload = function () {
            return request.responseText;
        };
        request.send();
    }
}

function createCORSRequest(method, url) {
    let xhr = new XMLHttpRequest();
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

function g_d(g_url) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false); // false for synchronous request
    xmlHttp.send(null);
    return JSON.parse(xmlHttp.responseText);
}

function g_s_s_w(g_url) {
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
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

const device = () => {
    const ua = navigator.userAgent;
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

let page = window.location.pathname;

let offers_url = 'https://sleek-upsell.herokuapp.com/offers/' + Shopify.shop;

let offers = g_d(offers_url);
let cart = g_d("https://" + Shopify.shop + "/cart.js");

// console.log(offers);
// console.log(offers['offer']);
// console.log(Object.keys(offers['offer']));
// console.log(Object.keys(offers));
// console.log(cart);
// console.log(Object.keys(cart));

let settings = offers['settings'];
let drawer_selector = 'form[action="/cart"]';
let drawer_position = 'before';
let cart_selector = 'form[action="/cart"]';
let cart_position = 'before';

if (settings != null) {
    drawer_selector = settings.drawer_location;
    cart_selector = settings.cart_location;
    cart_position = settings.cart_position;
    drawer_position = settings.drawer_position;
}

const open = window.XMLHttpRequest.prototype.open;

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
            cart = g_d("https://" + Shopify.shop + "/cart.js");
            // console.log('Cart has changed: New item count - ' + cart["item_count"]);
            // console.log(this.response);
            next_offer();
        }
    });
    return open.apply(this, arguments);
}

window.XMLHttpRequest.prototype.open = openReplacement;

next_offer();
// collection_based();

function next_offer() {
    if (page_ss.includes(s_s_w) || sessionStorage.getItem('s_u_w') == 'y') {
        return false;
    } else {
        if (document.querySelector('.sleek-upsell') != null) {
            document.querySelector('.sleek-upsell').remove();
        }
        if (cart["item_count"] > 0) {
            let i = 0;
            let o_p = Object.keys(offers['offer']);
            let o_arr = offers['offer'];
            // console.log(o_p);
            for (i = 0; i <= o_p.length - 1; i++) {
                let pos = o_p[i];
                let v = o_arr[pos];
                if (check_offer(pos, v) == true) {
                    // console.log('Showing this offer now');
                    // console.log(i);
                    // console.log(pos);
                    // console.log(o_arr[pos]);
                    display_offer(pos)
                    break;
                } else {
                    // console.log('Not showing this offer');
                    // console.log(pos);
                }

                // console.log(i);
                // console.log(pos);
                // console.log(o_arr[pos]);
            }
        }
    }
}

function collection_based() {
    if (page.includes('/cart')) {
        if (cart["item_count"] > 0) {
            let collects = offers['collects'];
            let items = cart['items'];
            let pid = '';
            // console.log('items');
            // console.log(items);
            // console.log('Looping through ' + items.length + ' items');
            for (let i = 0; i < items.length; i++) {
                pid = items[i]['product_id'];
                // console.log('Checking items ' + i + ' : ' + pid);
                if (sessionStorage.getItem('c_upsold_' + pid) == 'y') {
                    // console.log('This has already been upsold');
                    continue;
                } else {
                    // console.log('Creating upsell for ' + pid);
                    if (collects.findIndex(x => x.product_id == pid) != -1) {
                        sessionStorage.setItem('c_upsold_' + pid, 'y');
                        let n = collects.filter(x => x.product_id == pid);
                        let cid = n[0]['collection_id'];
                        let cb = collects.filter(x => x.collection_id == cid);

                        // console.log('Needed object');
                        // console.log(n);
                        // console.log('Collection ID ' + cid);
                        // console.log(cb);

                        // console.log('Looping through ' + cb.length + ' collection items');
                        for (let c = 0; c < cb.length; c++) {
                            // console.log('Checking collection item ' + c);
                            if (sessionStorage.getItem('c_used_' + cb[c]['product_id']) == 'z') {
                                // console.log('This item was already an upsell ' + cb[c]['product_id']);
                                continue;
                            } else {
                                if (items.findIndex(x => x.product_id == cb[c]['product_id']) != -1) {
                                    sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z');
                                    continue;
                                } else {
                                    sessionStorage.setItem('c_used_' + cb[c]['product_id'], 'z');
                                    // console.log('Using ' + cb[c]['product_id'] + ' as an upsell for ' + pid);
                                    // alert('Display '+cb[c]['product_id']);
                                    load_c_based(cb[c]['product_id']);
                                    break;
                                }
                            }
                        }
                        break;

                    }

                    else {
                        // console.log('This product aint part of a collection');
                        continue;
                    }
                }
            }
        }
    }
}

function check_offer(index, offer) {
    // console.log('Checking offer ' + index);

    let status = offer['offer'][0]['status'];
    let o_rule = offer['offer'][0]['rule'];
    let blocks = offer['blocks'];
    let bc = blocks.length;

    if (status == 1) {
        // console.log('Offer active');
        if (sessionStorage.getItem('sleek_shown_' + index) == 'y') {
            // console.log('Offer already shown');
            return false;
        } else {
            if (bc > 0) {
                // console.log('Offer has blocks');
                let what = false;
                for (let i = 0; i <= blocks.length - 1; i++) {
                    let v = blocks[i];
                    if (o_rule == 'ANY') {
                        // console.log('Checking if any block is met');
                        if (check_block(i, v) == true) {
                            // console.log('Block ' + i + ' return true');
                            what = true;
                            break;
                        } else {
                            what = false;
                            break;
                        }
                    }
                    if (o_rule == 'ALL') {
                        // console.log('Checking if all blocks are met');
                        if (check_block(i, v) == false) {
                            // console.log('Block ' + i + ' return false');
                            what = false;
                            break;
                        } else {
                            what = true;
                            break;
                        }
                    }

                }
                return what;
            } else {
                // console.log('Offer has no blocks');
                return true;
            }
        }

    } else {
        // console.log('Offer not active');
        return false;
    }
}

function check_block(index, block) {
    let oid = block['oid'];
    let bid = block['bid'];
    let b_rule = block['rule'];

    // console.log('Checking block ' + bid + ' of offer ' + oid);
    // console.log(block);

    let oc = offers['offer'][oid]['conditions'];
    let bc = oc.filter(e => e.bid == bid);

    // console.log(oc);
    // console.log(bc);

    if (bc.length > 0) {
        // console.log('This block has conditions');
        let met = false;
        for (let i = 0; i <= bc.length - 1; i++) {
            let cond = bc[i];
            if (b_rule == 'ANY') {
                // console.log('Checking if any condition is met');
                if (check_condition(i, cond) == true) {
                    // console.log('condition ' + cond['cid'] + ' met');
                    met = true;
                    break;
                } else {
                    met = false;
                    break;
                }
            }
            if (b_rule == 'ALL') {
                // console.log('Checking if any condition is met');
                if (check_condition(i, cond) == false) {
                    // console.log('condition ' + cond['cid'] + ' not met');
                    met = false;
                    break;
                } else {
                    met = true;
                    break;
                }
            }
        }
        return met;
    } else {
        return true;
    }
}

function check_condition(index, condition) {
    let cid = condition["cid"];
    let oid = condition["oid"];
    let bid = condition["bid"];
    let type = condition["type"];
    let quantity = condition["quantity"];
    let level = condition["level"];
    let content = condition["content"];
    let pid = condition["pid"];
    let vid = condition["vid"];
    let amount = condition["amount"];
    let country = condition["country"];
    let citems = cart["items"];
    // console.log('citems');
    // console.log(citems);

    let met = false;

    if (type == 'oc1') {
        // Cart has at least
        if (level == 'product') {
            // console.log('Now checking if cart has at least ' + quantity + ' ' + content + ' (' + pid + ')');
            // console.log('pitems');
            let pitems = citems.filter(e => e.product_id == pid);
            // console.log(pitems)
            if (pitems.length >= quantity) {
                // console.log('found ' + pitems.length + ' ' + content + 's (' + pid + ')');
                met = true;
                // console.log(met);
            } else {
                // console.log('found only ' + pitems.length + ' ' + content + 's (' + pid + ')');
                met = false;
            }
        }
        if (level == 'variant') {
            // console.log('Now checking if cart has at least ' + quantity + ' ' + content + ' (' + vid + ')');
            let vitems = citems.filter(e => e.variant_id == vid);
            if (vitems.length >= quantity) {
                // console.log('found ' + vitems.length + ' ' + content + 's (' + vid + ')');
                met = true;
            } else {
                // console.log('found only ' + vitems.length + ' ' + content + 's (' + vid + ')');
                met = false;
            }
        }
        if (level == 'collection') {
            // console.log('Checking if cart has at least ' + quantity + ' products from collections ' + content + '(' + pid + ')');
            let collects = offers['collects'];
            let needed = collects.filter(e => e.collection_id == pid);
            let count = 0;
            for (let i = 0; i <= citems.length - 1; i++) {
                // console.log('citems at ' + i);
                // console.log('Now checking ' + citems[i]['product_id']);
                if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                    count = count + 1;
                    // console.log('Found ' + count + ' so far');
                    if (count >= quantity) {
                        // console.log('Breaking at ' + count);
                        met = true;
                        break;
                    } else {
                        continue;
                    }
                }
            }

        }
    }
    if (type == 'oc2') {
        // Cart has at most
        if (level == 'product') {
            let pitems = citems.filter(e => e.product_id == pid);
            if (pitems.length <= quantity) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'variant') {
            let vitems = citems.filter(e => e.variant_id == vid);
            if (vitems.length <= quantity) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'collection') {
            // console.log('Checking if cart has at most ' + quantity + ' products from collections ' + pid);
            let collects = offers['collects'];
            let needed = collects.filter(e => e.collection_id == pid);
            let count = 0;
            for (let i = 0; i <= citems.length - 1; i++) {
                // console.log('Now checking ' + citems[i]['product_id']);
                if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                    count = count + 1;
                    // console.log('Found ' + count + ' so far');
                    if (count > quantity) {
                        // console.log('Breaking at ' + count);
                        met = false;
                        break;
                    } else {
                        met = true;
                        continue;
                    }
                }
            }

        }
    }
    if (type == 'oc3') {
        // Cart has exactly
        if (level == 'product') {
            let pitems = citems.filter(e => e.product_id == pid);
            if (pitems.length == quantity) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'variant') {
            let vitems = citems.filter(e => e.variant_id == vid);
            if (vitems.length == quantity) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'collection') {
            // console.log('Checking if cart has at least ' + quantity + ' products from collections ' + pid);
            let collects = offers['collects'];
            let needed = collects.filter(e => e.collection_id == pid);
            let count = 0;
            for (let i = 0; i <= citems.length - 1; i++) {
                // console.log('Now checking ' + citems[i]['product_id']);
                if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                    count = count + 1;
                    // console.log('Found ' + count + ' so far');
                    if (count == quantity) {
                        // console.log('Breaking at ' + count);
                        met = true;
                        break;
                    } else {
                        continue;
                    }
                }
            }

        }
    }
    if (type == 'oc4') {
        // Cart does not have any
        if (level == 'product') {
            let pitems = citems.filter(e => e.product_id == pid);
            if (pitems.length > 0) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'variant') {
            let vitems = citems.filter(e => e.variant_id == vid);
            if (vitems.length > 0) {
                met = true;
            } else {
                met = false;
            }
        }
        if (level == 'collection') {
            // console.log('Checking if cart has at least ' + quantity + ' products from collections ' + pid);
            let collects = offers['collects'];
            let needed = collects.filter(e => e.collection_id == pid);
            let count = 0;
            for (let i = 0; i <= citems.length - 1; i++) {
                // console.log('Now checking ' + citems[i]['product_id']);
                if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                    count = count + 1;
                    // console.log('Found ' + count + ' so far');
                    if (count > 0) {
                        // console.log('Breaking at ' + count);
                        met = false;
                        break;
                    } else {
                        met = true;
                        continue;
                    }
                }
            }
        }
    }
    if (type == 'oc5') {
        // Cart total is at least
        if (cart["total_price"] >= amount) {
            met = true;
        } else {
            met = false;
        }
    }
    if (type == 'oc6') {
        // Cart total is at most
        if (cart["total_price"] <= amount) {
            met = true;
        } else {
            met = false;
        }
    }
    if (type == 'oc7') {
        // Customer is located in
    }
    if (type == 'oc8') {
        // Customer is not located in
    }


    return met;
}

function populateFields(oid, pid) {
    // console.log('Looking for fields');
    let fields = offers['offer'][oid]['fields'];
    let choices = offers['offer'][oid]['choices'];
    if (fields.length > 0) {
        // console.log('Found ' + fields.length + ' fields');
        // console.log(fields);
        let o_fields = fields.filter(e => e.pid == pid);
        // console.log(o_fields);
        if (o_fields.length > 0) {
            document.querySelector('.o_h_' + pid).innerHTML = '';

            for (let i = 0; i < o_fields.length; i++) {
                let fid = o_fields[i]['fid'];
                let type = o_fields[i]['type'];
                let name = o_fields[i]['name'];
                let placeholder = o_fields[i]['placeholder'];
                let price = o_fields[i]['price'];
                let required = o_fields[i]['required'];
                let el_type = '';
                let m_c = choices.filter(e => e.fid == fid);

                if (type == "select") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<select class="form-control select sleek_fields_' + fid + '" id="properties[' + name +
                        ']" name="properties[' + name + ']"></select>' +
                        '</div>');
                    document
                        .querySelector('.sleek_fields_' + name + '')
                        .insertAdjacentHTML('beforeend',
                            document
                                .querySelector('<option value="">' + placeholder + '</option>'));

                    // let value_arr = value.split(',');
                    for (let key = 0; key < m_c.length; key++) {
                        let c_v = m_c[key]['value'];
                        let c_p = m_c[key]['price'];
                        document
                            .querySelector('.sleek_fields_' + fid + '')
                            .insertAdjacentHTML('beforeend',
                                document
                                    .querySelector('<option value="' + c_v + '">' + c_v + ' (' + c_p + ')</option>'));
                    }
                }

                if (type == "number") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input type="number" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
                if (type == "text") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input type="text" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
                if (type == "textarea") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<textarea id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '">' + placeholder + '</textarea>' +
                        '</div>');
                }
                if (type == "file") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input type="file" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
                if (type == "checkbox") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' +
                        '<input type="checkbox" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" /> ' +
                        placeholder +
                        '</label>' +
                        '</div>');
                }
                if (type == "checkbox_group") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input type="checkbox" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
                if (type == "radio") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' +
                        '<input type="radio" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" /> ' +
                        placeholder +
                        '</label>' +
                        '</div>');
                }
                if (type == "date") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input type="date" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
                if (type == "swatch") {
                    document.querySelector('.o_h_' + pid).insertAdjacentHTML('beforeend',
                        '<div>' +
                        '<label>' + placeholder + '</label>' +
                        '<input style="min-width: 150px;" type="color" id="properties[' + name + ']" name="properties[' + name +
                        ']" placeholder="' + placeholder + '" />' +
                        '</div>');
                }
            }
        }
    }

}

function load_c_based(pid) {
    let curr = Shopify.currency['active'];
    document.querySelector('form.cart').insertAdjacentHTML('afterend', '<style>.sleek-upsell{opacity: 1 !important;background:#ecf0f1;color:#2b3d51;padding:5px;font-family:inherit;vertical-align:middle;}.sleek-image img{width:100px}.sleek-text{font-weight:700}.sleek-upsell select{padding:4px;margin-top:5px}.sleek-prices{font-weight:700;margin-bottom:5px}.sleek-compare-price{text-decoration:line-through}.sleek-upsell button{padding:10px;border:none;background:#2b3d51;color:#fff;font-weight:700;border-radius:0;cursor:pointer;width:100%}.card{display:table}.card .sleek-form{display:flex}.sleek-card-atc,.sleek-image,.sleek-offer{display:table;align-self:center;padding:5px}.card .sleek-offer{flex-grow:1}.card .sleek-prices{text-align:center}@media only screen and (max-width:600px){.sleek-upsell select{max-width:100px}.sleek-prices *{display:inline-table}}.block,.block .sleek-atc,.block .sleek-form,.block .sleek-text{display:table}.sleek-block{display:flex}.block .sleek-image,.block .sleek-offer{display:table;align-self:center;padding:5px}.block .sleek-offer{flex-grow:1}</style>');

    document.querySelector('form.cart').insertAdjacentHTML('afterend', '<div class="card sleek-upsell"></div>');

    let oprods = offers['products'];
    let index = oprods.findIndex(x => x.id == pid);
    let datacell = oprods[index];

    let card_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-id="' + pid + '"> <div class="sleek-image"> <img src="' + datacell[
        'image']['src'] +
        '"/> </div><div class="sleek-offer"> <div class="sleek-text">Would you like an extra something? </div><div class="sleek-title">' +
        datacell['title'] +
        '</div><div class="sleek-selectors"> <div class="o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid +
        '"></select> <select name="quantity" class="q-select q-' + pid +
        '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' +
        curr + ' ' + datacell['variants'][0]['price'] +
        '</span> <span class="sleek-compare-price money">' +
        curr + ' ' + datacell['variants'][0]['price'] +
        '</span> </div><button class="sleek-atc" type="submit">YES PLEASE</button> </div></form>';

    document.querySelector('.card').insertAdjacentHTML('beforeend', card_ui);

    for (let i = 0; i < datacell['variants'].length; i++) {
        document.querySelector('.v-' + pid).insertAdjacentHTML('beforeend', '<option value="' + datacell['variants'][i]['id'] + '">' + datacell['variants'][i]['title'] + ' (' + curr + ' ' + datacell['variants'][i]['price'] + ')</option>');
    }

    for (i = 1; i <= 10; i++) {
        document.querySelector('.q-' + pid).insertAdjacentHTML('beforeend', '<option value="' + i + '">' +
            i + '</option>')
    }

}

function brgxczvy(oid, pid, vid, quantity, price, action, type) {
    let citems = [];

    for (let d = 0; d < cart['items'].length; d++) {
        citems.push(cart['items'][d]['product_id']);
    }

    let s = {
        'stat_id': '',
        'date': Math.floor(Date.now() / 1000),
        'shop': Shopify.shop,
        'offer': oid,
        'product': pid,
        'variant': vid,
        'quantity': quantity,
        'ip': '',
        'country': '',
        'type': type,
        'action': action,
        'page': page,
        'device': device(),
        'browser': user_browser(),
        'citems': citems,
        'price': price
    }

    // console.log(s);

    let http = new XMLHttpRequest();
    let url = 'https://sleek-upsell.herokuapp.com/brgxczvy';
    let params = 'stat_id=""&date=' + Math.floor(Date.now() / 1000) + '&shop=' + Shopify.shop + '&offer=' + oid + '&product=' + pid + '&variant=' + vid + '&quantity=' + quantity + '&ip=""&country=""&type=' + type + '&action=' + action + '&page=' + page + '&device=' + device() + '&browser=' + user_browser() + '&citems=' + JSON.stringify(citems) + '&price=' + price;
    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function () {//Call a function when the state changes.
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

function display_offer(oid) {
    let element = '';
    let curr = Shopify.currency['active'];
    let settings = offers['settings'];
    let lay = offers['offer'][oid]['offer'][0]['layout'];
    let lay_el = '<div class="card sleek-upsell"></div>';
    let nudge = 'before';

    if (page.includes('/cart')) { element = cart_selector; nudge = cart_position; }
    else { element = drawer_selector; nudge = drawer_position; }

    document.querySelector(element).insertAdjacentHTML('beforebegin', '<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>');

    if (lay == 'card') {
        lay_el = '<div class="card sleek-upsell"></div>';
    }
    if (lay == 'flat') {
        lay_el = '<div class="flat sleek-upsell"></div>';
    }
    if (lay == 'block') {
        lay_el = '<div class="block sleek-upsell"></div>';
    }
    if (lay == 'half-block') {
        lay_el = '<div class="half-block sleek-upsell"></div>';
    }
    if (lay == 'compact') {
        lay_el = '<div class="compact sleek-upsell"></div>';
    }

    if (nudge == 'prepend') { document.querySelector(element).insertAdjacentHTML('afterbegin', lay_el); }
    if (nudge == 'append') { document.querySelector(element).insertAdjacentHTML('beforeend', lay_el); }

    if (nudge == 'before') { document.querySelector(element).insertAdjacentHTML('beforebegin', lay_el); }
    if (nudge == 'after') { document.querySelector(element).insertAdjacentHTML('afterend', lay_el); }


    if (drawer_position == 'before') { }

    if (offers['offer'][oid]['offer'][0]['close'] == 'y') {
        document.querySelector(lay_el).insertAdjacentHTML('beforeend', '<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');
    }

    let products = offers['offer'][oid]['products'];
    let oprods = offers['products'];
    // console.log('Found products');
    // console.log(products);
    // console.log('Shop products');
    // console.log(oprods);

    for (let i = 0; i < products.length; i++) {
        let v = products[i];
        let pid = v['product'];
        let index = oprods.findIndex(x => x.id == pid);
        let datacell = oprods[index];

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
            dtext = 'Would you like a ' + datacell['title'];
        }

        // console.log('Product ' + pid + ' found at position ' + index);
        // console.log(datacell);

        let o_ui = '<form class="sleek-form" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';


        if (lay == 'card') {
            o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></form>';
        }
        if (lay == 'flat') {
            o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-flat"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <div class="flex-select"> <select name="quantity" class="q-select q-' + pid + '"></select> <button class="sleek-atc" type="submit">' + atc + '</button> </div></div></div></div></form>'
        }
        if (lay == 'block') {
            o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-text">' + dtext + '</div><div class="sleek-block"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
        }
        if (lay == 'half-block') {
            o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div></div></div><button class="sleek-atc" type="submit">' + atc + '</button> </form>';
        }
        if (lay == 'compact') {
            o_ui = '<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="' + i + '" data-product-product_id="' + pid + '"> <div class="sleek-compact"> <div class="sleek-image"> <img src="' + datacell['image']['src'] + '"/> </div><div class="sleek-offer"> <div class="sleek-text">' + dtext + '</div><div class="sleek-title">' + datacell['title'] + '</div><div class="sleek-prices"> <span class="sleek-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> <span class="sleek-compare-price money">' + curr + ' ' + datacell['variants'][0]['price'] + '</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_' + pid + '"></div> <select name="id" class="v-select v-' + pid + '"></select> <select name="quantity" class="q-select q-' + pid + '"></select> </div><button class="sleek-atc" type="submit">' + atc + '</button> </div></div></form>'
        }

        if (document.querySelector('form[data-product-index="' + i + '"]') == null) {
            document.querySelector('.sleek-upsell').insertAdjacentHTML('beforeend', '<form></form>' + o_ui);
        }

        if (v['show_title'] == 'n') {
            document.querySelector('.sleek-title').remove()
        }

        if (v['show_price'] == 'n') {
            document.querySelector('.sleek-prices').remove()
        }

        if (v['show_image'] == 'n') {
            document.querySelector('.sleek-image').remove()
        }

        if (v['v_price'] == 'n') {
            document.querySelector('.sleek-compare-price').remove()
        }

        if (v['c_price'] == 'n') {
            document.querySelector('.sleek-price').remove()
        }

        if (v['q_select'] == 'n') {
            document.querySelector('.q_select').style.display = 'none';
        }

        populateFields(oid, pid);

        for (let vi = 0; vi < datacell['variants'].length; vi++) {
            // console.log(datacell['variants'][i]['title']);
            if (datacell['variants'][vi]['inventory_quantity'] > 0) {
                document.querySelector('.v-' + pid).insertAdjacentHTML('beforeend', '<option value="' + datacell['variants'][vi]['id'] +
                    '">' + datacell['variants'][vi]['title'] + ' (' + curr + ' ' + datacell['variants'][vi]['price'] + ')</option>');
            }
        }
        for (q = 1; q <= 10; q++) {
            document.querySelector('.q-' + pid).insertAdjacentHTML('beforeend', '<option value="' + q + '">' + q + '</option>')
        }

        brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, datacell['variants'][0]['price'], 'show', 'show');

        document.querySelector('.v-' + pid).onchange = function () {
            brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, datacell['variants'][0]['price'], 'variant change', 'impression');
        }
        document.querySelector('.q-' + pid).onchange = function () {
            brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, datacell['variants'][0]['price'], 'quantity change', 'impression');
        }
        document.querySelector('form[data-product-product_id="' + pid + '"]').onmouseover = function () {
            // brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, datacell['variants'][0]['price'], 'hover', 'impression');
        }

        document.querySelector('form[data-product-product_id="' + pid + '"]').onsubmit = function (e) {
            e.preventDefault();

            let addToCartForm = document.querySelector('form[data-product-product_id="' + pid + '"]');
            let formData = new FormData(addToCartForm);

            if (v['rv'] != '') {
                g_s_s_w('/cart/change?id=' + v['rv'] + '&quantity=0');
            }
            else {
                if (v['rp'] != '') {
                    let dc = oprods[oprods.findIndex(x => x.id == v['rp'])];
                    let removedVs = [];
                    for (let vi = 0; vi < dc['variants'].length; vi++) {
                        g_s_s_w('/cart/change?id=' + dc['variants'][vi]['id'] + '&quantity=0');
                    }
                }
            }

            fetch('/cart/add.js', {
                body: formData,
                method: 'POST'
            }).then(function (response) {
                document.querySelector('.sleek-atc').innerHTML = '<img src="https://sleek-upsell.com/assets/images/loader.gif" />';
                sessionStorage.setItem('sleek_shown_' + oid, 'y');
                brgxczvy(oid, pid, document.querySelector('.v-' + pid).value, document.querySelector('.q-' + pid).value, datacell['variants'][0]['price'], 'add to cart', 'purchase');
                if (offers['offer'][oid]['offer'][0]['discount'] == 'y' && offers['offer'][oid]['offer'][0]['code'] != '') {
                    g_s_s_w('https://' + Shopify.shop + '/discount/' + offers['offer'][oid]['offer'][0]['code']);
                }
                if (offers['offer'][oid]['offer'][0]['to_checkout'] == 'y') {
                    window.location.href = "/checkout";
                } else {
                    if (page.includes('/cart')) {
                        // console.log(response);
                        sessionStorage.setItem('sleek_shown_' + oid, 'y');
                        document.querySelector('.sleek-upsell').remove();
                        window.location.reload(false);
                    }
                    else {
                        document.querySelector('.sleek-upsell').remove();
                        // console.log(response);
                        if (settings != null) {
                            if (settings['refresh_state'] == 'y') {
                                eval(settings['drawer_refresh']);
                            }
                        }
                        next_offer();
                    }
                }
            }).catch(function (e) {
                // console.error(e);
                document.querySelector('form[data-product-product_id="' + pid + '"]').closest('button').innerHTML = 'Could not add product';
            });
        }
    }

    if (document.querySelector('.reject_offer') != null) {
        document.querySelector('.reject_offer').onclick = function () {
            sessionStorage.setItem('sleek_shown_' + oid, 'y');
            brgxczvy(oid, '', '', '', '', 'reject', 'reject');
            document.querySelector('.sleek-upsell').remove();
            setTimeout(function () { next_offer() }, 300);
        }
    }

    document.querySelector('.sleek-upsell').style.opacity = '1';
    document.querySelector('.sleek-upsell').style.transform = 'none';
    document.querySelector('.sleek-upsell form').style.marginBottom = '0px';
    if (settings != null) {
        document.querySelector('.sleek-upsell').insertAdjacentHTML('afterend', '<style>' + settings['override'] + '</style>');
        document.querySelector('.sleek-upsell').style.backgroundColor = settings['layout_bg'];
        document.querySelector('.sleek-upsell select').style.backgroundColor = settings['layout_bg'];
        document.querySelector('.sleek-upsell').style.color = settings['layout_color'];
        document.querySelector('.sleek-upsell select').style.color = settings['layout_color'];
        document.querySelector('.sleek-upsell').style.fontFamily = settings['layout_font'];
        document.querySelector('.sleek-upsell').style.fontSize = settings['layout_size'];
        document.querySelector('.sleek-upsell').style.marginTop = settings['layout_mt'];
        document.querySelector('.sleek-upsell').style.marginBottom = settings['layout_mb'];
        document.querySelector('.sleek-upsell').style.borderRadius = settings['offer_radius'];
        document.querySelector('.sleek-upsell').style.borderWidth = settings['offer_bs'];
        document.querySelector('.sleek-upsell').style.borderColor = settings['offer_bc'];
        document.querySelector('.sleek-upsell').style.borderStyle = settings['offer_border'];
        document.querySelector('.sleek-upsell button').style.backgroundColor = settings['button_bg'];
        document.querySelector('.sleek-upsell button').style.color = settings['button_color'];
        document.querySelector('.sleek-upsell button').style.fontFamily = settings['button_font'];
        document.querySelector('.sleek-upsell button').style.fontSize = settings['button_size'];
        document.querySelector('.sleek-upsell button').style.marginTop = settings['button_mt'];
        document.querySelector('.sleek-upsell button').style.marginBottom = settings['button_mb'];
        document.querySelector('.sleek-upsell button').style.borderRadius = settings['button_radius'];
        document.querySelector('.sleek-upsell button').style.borderWidth = settings['button_bs'];
        document.querySelector('.sleek-upsell button').style.borderColor = settings['button_bc'];
        document.querySelector('.sleek-upsell button').style.borderStyle = settings['button_border'];
        document.querySelector('.sleek-upsell img').style.borderRadius = settings['image_radius'];
        document.querySelector('.sleek-upsell img').style.borderWidth = settings['image_bs'];
        document.querySelector('.sleek-upsell img').style.color = settings['image_bc'];
        document.querySelector('.sleek-upsell img').style.borderStyle = settings['image_border'];
        document.querySelector('.sleek-text').style.color = settings['text_color'];
        document.querySelector('.sleek-text').style.fontFamily = settings['text_font'];
        document.querySelector('.sleek-text').style.fontSize = settings['text_size'];
        document.querySelector('.sleek-title').style.color = settings['title_color'];
        document.querySelector('.sleek-title').style.fontFamily = settings['title_font'];
        document.querySelector('.sleek-title').style.fontSize = settings['title_size'];
        document.querySelector('.sleek-price').style.color = settings['price_color'];
        document.querySelector('.sleek-price').style.fontFamily = settings['price_font'];
        document.querySelector('.sleek-price').style.fontSize = settings['price_size'];
    }

}