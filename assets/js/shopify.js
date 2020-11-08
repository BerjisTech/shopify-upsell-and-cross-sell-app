if (!window.jQuery) {
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "https://code.jquery.com/jquery-3.5.1.min.js";
    script.integrity = "sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    script.crossOrigin = "anonymous"
    document.getElementsByTagName('head')[0].appendChild(script);
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

function g_d(g_url) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", g_url, false); // false for synchronous request
    xmlHttp.send(null);
    return JSON.parse(xmlHttp.responseText);
}

jQuery(document).ready(function () {

    var offers_url = 'https://berjis.tech/sleek-upsell/offers/' + Shopify.shop;

    var location_request = createCORSRequest("GET", "https://json.geoiplookup.io/");
    var offers_request = createCORSRequest("GET", offers_url);
    var cart_request = createCORSRequest("GET", "https://" + Shopify.shop + "/cart.js");

    let offers = g_d(offers_url);
    let cart = g_d("https://" + Shopify.shop + "/cart.js");
    // console.log(offers);
    // console.log(offers['offer']);
    // console.log(Object.keys(offers['offer']));
    // console.log(Object.keys(offers));
    // console.log(cart);
    // console.log(Object.keys(cart));

    if (cart["item_count"] > 0) {
        let i = 0;
        let o_p = Object.keys(offers['offer']);
        let o_arr = offers['offer'];
        console.log(o_p);
        for (i = 0; i <= o_p.length - 1; i++) {
            let pos = o_p[i];
            let v = o_arr[pos];
            if (check_offer(pos, v) == true) {
                console.log('Showing this offer now');
                console.log(i);
                console.log(pos);
                console.log(o_arr[pos]);
                display_offer(pos)
                break;
            } else {
                console.log('Not showing this offer');
                console.log(pos);
            }

            // console.log(i);
            // console.log(pos);
            // console.log(o_arr[pos]);
        }
    }

    function check_offer(index, offer) {
        console.log('Checking offer ' + index);

        let status = offer['offer'][0]['status'];
        let o_rule = offer['offer'][0]['rule'];
        let blocks = offer['blocks'];
        let bc = blocks.length;

        if (status == 1) {
            console.log('Offer active');
            if (bc > 0) {
                console.log('Offer has blocks');
                let what = false;
                for (let i = 0; i <= blocks.length - 1; i++) {
                    let v = blocks[i];
                    if (o_rule == 'ANY') {
                        console.log('Checking if any block is met');
                        if (check_block(i, v) == true) {
                            console.log('Block ' + i + ' return true');
                            what = true;
                            break;
                        }
                    }
                    if (o_rule == 'AND') {
                        console.log('Checking if all blocks are met');
                        if (check_block(i, v) == false) {
                            console.log('Block ' + i + ' return false');
                            what = false;
                            break;
                        }
                    }

                }
                return what;
            } else {
                console.log('Offer has no blocks');
                if (sessionStorage.getItem('sleek_shown_' + index) == 'y') {
                    console.log('Offer already shown');
                    return false;
                } else {
                    console.log('Offer not yet shown');
                    return true;
                }
            }
        } else {
            console.log('Offer not active');
            return false;
        }
    }

    function check_block(index, block) {
        let oid = block['oid'];
        let bid = block['bid'];
        let b_rule = block['rule'];

        console.log('Checking block ' + bid + ' of offer ' + oid);
        console.log(block);

        let oc = offers['offer'][oid]['conditions'];
        let bc = oc.filter(e => e.bid == bid);

        // console.log(oc);
        console.log(bc);

        if (bc.length > 0) {
            console.log('This block has conditions');
            let met = false;
            for (let i = 0; i <= bc.length - 1; i++) {
                let cond = bc[i];
                if (b_rule == 'ANY') {
                    console.log('Checking if any condition is met');
                    if (check_condition(i, cond) == true) {
                        console.log('condition ' + cond['cid'] + ' met');
                        met = true;
                        break;
                    }
                }
                if (b_rule == 'AND') {
                    console.log('Checking if any condition is met');
                    if (check_condition(i, cond) == false) {
                        console.log('condition ' + cond['cid'] + ' not met');
                        met = false;
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

        let met = false;

        if (type == 'oc1') {
            // Cart has at least
            if (level == 'product') {
                let pitems = citems.filter(e => e.id == pid);
                if (pitems.length >= quantity) {
                    met = true;
                } else {
                    met = false;
                }
            }
            if (level == 'variant') {
                let vitems = citems.filter(e => e.variant_id == vid);
                if (vitems.length >= quantity) {
                    met = true;
                } else {
                    met = false;
                }
            }
            if (level == 'collection') {
                console.log('Checking if cart has at least ' + quantity + ' products from collections ' + pid);
                let collects = offers['collects'];
                let needed = collects.filter(e => e.collection_id == pid);
                let count = 0;
                for (let i = 0; i <= needed.length - 1; i++) {
                    console.log('Now checking ' + citems[i]['product_id']);
                    if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                        count = count + 1;
                        console.log('Found ' + count + ' so far');
                        if (count >= quantity) {
                            console.log('Breaking at ' + count);
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
                let pitems = citems.filter(e => e.id == pid);
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
                console.log('Checking if cart has at most ' + quantity + ' products from collections ' + pid);
                let collects = offers['collects'];
                let needed = collects.filter(e => e.collection_id == pid);
                let count = 0;
                for (let i = 0; i <= needed.length - 1; i++) {
                    console.log('Now checking ' + citems[i]['product_id']);
                    if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                        count = count + 1;
                        console.log('Found ' + count + ' so far');
                        if (count > quantity) {
                            console.log('Breaking at ' + count);
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
                let pitems = citems.filter(e => e.id == pid);
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
                console.log('Checking if cart has at least ' + quantity + ' products from collections ' + pid);
                let collects = offers['collects'];
                let needed = collects.filter(e => e.collection_id == pid);
                let count = 0;
                for (let i = 0; i <= needed.length - 1; i++) {
                    console.log('Now checking ' + citems[i]['product_id']);
                    if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                        count = count + 1;
                        console.log('Found ' + count + ' so far');
                        if (count == quantity) {
                            console.log('Breaking at ' + count);
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
                let pitems = citems.filter(e => e.id == pid);
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
                console.log('Checking if cart has at least ' + quantity + ' products from collections ' + pid);
                let collects = offers['collects'];
                let needed = collects.filter(e => e.collection_id == pid);
                let count = 0;
                for (let i = 0; i <= needed.length - 1; i++) {
                    console.log('Now checking ' + citems[i]['product_id']);
                    if (needed.findIndex(x => x.product_id == citems[i]['product_id']) >= 0) {
                        count = count + 1;
                        console.log('Found ' + count + ' so far');
                        if (count > 0) {
                            console.log('Breaking at ' + count);
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

    function display_offer(oid) {
        let element = $('form.cart');
        let curr = Shopify.currency['active'];

        $('<style>.sleek-upsell{background:#ecf0f1;color:#2b3d51;padding:5px;font-family:inherit;vertical-align:middle;margin:5px}.sleek-image img{width:100px}.sleek-text{font-weight:700}.sleek-upsell select{padding:4px;margin-top:5px}.sleek-prices{font-weight:700;margin-bottom:5px}.sleek-compare-price{text-decoration:line-through}.sleek-upsell button{padding:10px;border:none;background:#2b3d51;color:#fff;font-weight:700;border-radius:0;cursor:pointer;width:100%}.card{display:table}.card .sleek-form{display:flex}.sleek-card-atc,.sleek-image,.sleek-offer{display:table;align-self:center;padding:5px}.card .sleek-offer{flex-grow:1}.card .sleek-prices{text-align:center}@media only screen and (max-width:600px){.sleek-upsell select{max-width:100px}.sleek-prices *{display:inline-table}}.block,.block .sleek-atc,.block .sleek-form,.block .sleek-text{display:table}.sleek-block{display:flex}.block .sleek-image,.block .sleek-offer{display:table;align-self:center;padding:5px}.block .sleek-offer{flex-grow:1}</style>').insertBefore(element);
        $('<div class="card sleek-upsell"></div>').insertBefore(element);

        let products = offers['offer'][oid]['products'];
        let oprods = offers['products'];
        console.log('Found products');
        console.log(products);
        console.log('Shop products');
        console.log(oprods);

        $(products).each(function (i, v) {
            let pid = v['product'];
            let index = oprods.findIndex(x => x.id == pid);
            let datacell = oprods[index];

            let oatc = offers['offer'][oid]['offer'][0]['atc'];
            let vatc = v['atc'];
            let atc = 'ADD TO CART';

            if (oatc != '') {
                atc = oatc;
            } else if (vatc != '') {
                atc = vatc;
            } else {
                atc = 'ADD TO CART';
            }

            console.log('Product ' + pid + ' found at position ' + index);
            console.log(datacell);

            let card_ui = '<form class="sleek-form" data-product-index="' + i + '"> <div class="sleek-image"> <img src="' + datacell[
                'image']['src'] +
                '"/> </div><div class="sleek-offer"> <div class="sleek-text">Need Free Shipping?</div><div class="sleek-title">' +
                datacell['title'] +
                '</div><div class="sleek-selectors"> <select class="v-select v-' + pid +
                '"></select> <select class="q-select q-' + pid +
                '"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">' +
                curr + ' ' + datacell['variants'][0]['price'] +
                '</span> <span class="sleek-compare-price money">' +
                curr + ' ' + datacell['variants'][0]['price'] +
                '</span> </div><button class="sleek-atc" type="submit" onclick="return false;">' + atc + '</button> </div></form>';

            $('.card').append(card_ui);

            $(datacell['variants']).each(function (i) {
                // console.log(datacell['variants'][i]['title']);
                $('.v-' + pid).append('<option value="' + datacell['variants'][i]['id'] +
                    '">' +
                    datacell['variants'][i]['title'] + ' (' + curr + ' ' +
                    datacell['variants'][i]['price'] + ')</option>');
            });
            for (i = 1; i <= 10; i++) {
                $('.q-' + pid).append('<option value="' + i + '">' +
                    i + '</option>')
            }
        });

        sessionStorage.setItem('sleek_shown_' + oid, 'y');
    }
});