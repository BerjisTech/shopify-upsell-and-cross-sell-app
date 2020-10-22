if (!window.jQuery) {
    var script = document.createElement('script');
    script.type = "text/javascript";
    script.src = "https://code.jquery.com/jquery-3.5.1.min.js";
    script.integrity = "sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    script.crossOrigin = "anonymous"
    document.getElementsByTagName('head')[0].appendChild(script);
}


var contains = function (product) {
    // Per spec, the way to identify NaN is that it is not equal to itself
    var findNaN = product !== product;
    var indexOf;

    if (!findNaN && typeof Array.prototype.indexOf === 'function') {
        indexOf = Array.prototype.indexOf;
    } else {
        indexOf = function (product) {
            var i = -1, index = -1;

            for (i = 0; i < this.length; i++) {
                var item = this[i];

                if ((findNaN && item !== item) || item === product) {
                    index = i;
                    break;
                }
            }

            return index;
        };
    }

    return indexOf.call(this, product) > -1;
};

const oc1 = "";
const oc2 = "";
const oc3 = "";
const oc4 = "";
const oc5 = "";
const oc6 = "";
const oc7 = "";
const oc8 = "";
const oc9 = "";
const oc10 = "";
const oc11 = "";
const oc12 = "";
const oc13 = "";
const oc14 = "";
const oc15 = "";
const oc16 = "";
const oc17 = "";
const oc18 = "";
const oc19 = "";

jQuery(document).ready(function () {
    $('head').append('');

    var sleek_offer = jQuery('<div class="card sleek-upsell row">'
        + '<form class="tab-xs-12" method="post" accept-charset="UTF-8" enctype="multipart/form-data" action="/cart/add">'
        + '<div class="tab-sm-4">'
        + '<img src="https://cdn.shopify.com/s/files/1/0295/4815/0859/products/man-adjusts-blue-tuxedo-bowtie_925x_656f2a36-34a8-4db2-9701-c01e49e9e5c0_x190.jpg?v=1590595412" class="img img-responsive"/>'
        + '</div>'
        + '<div class="tab-sm-5">'
        + '<div class="tab-xs-12">'
        + 'Need a free shipping?'
        + '</div>'
        + '<div class="tab-xs-12">'
        + 'Blue Silk Tuxedo'
        + '</div>'
        + '<div class="tab-xs-12" style="margin: 0px; padding: 0px;">'
        + '<div class="tab-xs-9" style="margin: 0px; padding: 0px;">'
        + '<select class="form-control" style="margin: 0px; ">'
        + '<option>small</option>'
        + '<option>large</option>'
        + '<option>xl</option>'
        + '</select>'
        + '</div>'
        + '<div class="tab-xs-3" style="margin: 0px; padding: 0px;">'
        + '<select class="form-control" style="margin: 0px; ">'
        + '<option>1</option>'
        + '<option>2</option>'
        + '<option>3</option>'
        + '</select>'
        + '</div>'
        + '</div>'
        + '</div>'
        + '<div class="tab-sm-3">'
        + '<span>$ 200</span>'
        + '<button style="submit" class="tab-xs-12 form-controll btn">'
        + 'ADD TO CART'
        + '</button>'
        + '</div>'
        + '</form>'
        + '</div>').eq(0);

    sleek_offer.insertBefore('.cart-drawer__item-list');
    sleek_offer.insertBefore('form[action="/cart"]');

    var products_array = null;
    var offers_array = null;
    var offers_url = 'https://sleek-upsell.herokuapp.com/offers/' + Shopify.shop;

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
    //var request = createCORSRequest("GET", "https://api.teletext.io/api/v1/geo-ip");
    var location_request = createCORSRequest("GET", "https://json.geoiplookup.io/");
    var offers_request = createCORSRequest("GET", offers_url);
    var cart_request = createCORSRequest("GET", "https://" + Shopify.shop + "/cart.js");

    if (location_request && offers_request && cart_request) {
        offers_request.onload = function () {
            // console.log(location_request.responseText);
            // console.log(offers_request.responseText);
            // console.log(cart_request.responseText);
            // var location_data = JSON.parse(location_request.responseText);
            // var continent_code = location_data['continent_code'];

            var offers = offers_request.responseText;
            loadOffer(offers);

        };
        location_request.send();
        offers_request.send();
        cart_request.send();
    }
});

function checkArraysExists(offers) {

    var cart_products = [];
    var products_checker = [];
    var counter = 0;
    const offer_raw = JSON.parse(offers);
    const offer_array = offer_raw['offers'];

    fetch('/cart.js')
        .then(response => response.json())
        .then(data => {

            var cart_items = data.items;
            console.log("Offers\n");
            console.log(offer_array);
            console.log("Cart items\n");
            console.log(cart_items);

            let checker = (arr, target) => target.every(v => arr.includes(v));

            $(cart_items).each(function (i) {
                cart_products[i] = cart_items[i]["product_id"];
            });

            console.log("Cart products\n");
            console.log(cart_products);

            $(offer_array).each(function (i) {

                var offer_products = JSON.parse(offer_array[i]['offer_products']);
                console.log("Offer products\n");
                console.log(offer_products);
                console.log(offer_products.length);

                $(offer_products).each(function (i) {

                    products_checker[i] = Number(offer_products[i]['product_id']);
                });

                console.log("products checker " + counter);
                console.log(products_checker);
                console.log(checker(cart_products, products_checker));
            });
        });
}

function loadOffer(offers) {
    var cart_products = [];
    const offer_raw = JSON.parse(offers);
    const offer_array = offer_raw['offers'];
    fetch('/cart.js').then(response => response.json()).then(data => {
            var cart_items = data.items;
            $(cart_items).each(function (i) {
                cart_products[i] = cart_items[i]["product_id"];
            });

        });

    $(offer_array).each(function (i) {
        if (c_o_c_b(i) === true){
            // display_offer(i);
        }        
    });
}

function c_o_c_b(offer){
    var o_c_b = JSON.parse(offer_array[i]['ocb']);
    $(o_c_b).each(function(){
        if(check_o_c_b(offer,o_c_b) == false){
            let next_offer = offer + 1;
            c_o_c_b(next_offer);
        }else{
            load_offer(offer);
        }
    });
}

function check_o_c_b(offer, ocb){
    var ocr = ocb[0];
    for(i =1; i <= ocb.length; i++){
        if(ocr == 'ANY'){
            if(c_c(offer,i) === true){
                return true;
            }else{
                return false;
            }
        }else{
            if(c_c(offer,i) === false){
                return false;
            }else{
                return true;
            }
        }
    }
}

function c_c(offer, condition){

}