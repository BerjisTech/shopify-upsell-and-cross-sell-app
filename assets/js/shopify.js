function g_d(e){let t=new XMLHttpRequest;return t.open("GET",e,!1),t.send(null),JSON.parse(t.responseText)}function g_s_s_w(e){let t=new XMLHttpRequest;return t.open("GET",e,!1),t.send(null),t.responseText}function get_this(e){e&&(e.onload=function(){return e.responseText},e.send())}function createCORSRequest(e,t){let s=new XMLHttpRequest;return"withCredentials"in s?s.open(e,t,!0):"undefined"!=typeof XDomainRequest?(s=new XDomainRequest).open(e,t):s=null,s}function user_browser(){return-1!=(navigator.userAgent.indexOf("Opera")||navigator.userAgent.indexOf("OPR"))?"Opera":-1!=navigator.userAgent.indexOf("Chrome")?"Chrome":-1!=navigator.userAgent.indexOf("Safari")?"Safari":-1!=navigator.userAgent.indexOf("Firefox")?"Firefox":-1!=navigator.userAgent.indexOf("MSIE")||1==!!document.documentMode?"IE":"unknown"}const simu=()=>{const e=navigator.userAgent;return/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(e)?"tablet":/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(e)?"mobile":"desktop"};let burl="https://sleek-upsell.herokuapp.com",page_ss=window.location.href,s_s_w=g_s_s_w("https://sleek-upsell.herokuapp.com/s_s_w/"+Shopify.shop);var Shopify=Shopify||{};if(Shopify.money_format=g_s_s_w(burl+"/mf/"+Shopify.shop),Shopify.currency=Shopify.money_format.substr(0,Shopify.money_format.indexOf("{")).substr(0,Shopify.money_format.indexOf("}")),Shopify.formatMoney=function(e,t){"string"==typeof e&&(e=e.replace(".",""));var s="",o=/\{\{\s*(\w+)\s*\}\}/,i=t||this.money_format;function a(e,t){return void 0===e?t:e}function l(e,t,s,o){if(t=a(t,2),s=a(s,","),o=a(o,"."),isNaN(e)||null==e)return 0;var i=(e=(e/100).toFixed(t)).split(".");return i[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,Shopify.currency+" 1"+s)+(i[1]?o+i[1]:"")}switch(i.match(o)[1]){case"amount":s=l(e,2);break;case"amount_no_decimals":s=l(e,0);break;case"amount_with_comma_separator":s=l(e,2,".",",");break;case"amount_no_decimals_with_comma_separator":s=l(e,0,".",",")}return i.replace(o,s)},"y"==sessionStorage.getItem("s_u_w")||page_ss.includes(s_s_w)){sessionStorage.setItem("s_u_w","y");var script=document.createElement("script");function createSUW(){$("body").prepend('<style>.suw{display: table; width: 300px; height: 500px; background: #ffffff; position: fixed; bottom: 0px; left: 0px; z-index: 3000000;}.suw_head, .suw_footer{display: table; width: 100%; height: 50px !important; background: #981B1B !important; color: #ffffff;}.suw_body{overflow-Y: auto; display: table; width: 100%; height: 400px;}.suw_head:before{content: "SETUP WIZARD"; display: table; position: absolute; top: 10px; left: 10px; z-index: 2000000; color: #FFFFFF; font-size: 12px;}.suw_head{cursor:move;}</style>'),$("body").prepend('<div class="draggable suw"><div class="suw_head dragger"></div><div class="suw_body"><img src="https://sleek-upsell.com/assets/images/loader.gif" style="margin: 150px auto;"/></div><div class="suw_footer"></div></div>');var e,t,s=null;document.addEventListener("mousedown",function(o){for(var i=!1,a=0;o.path[a]!==document.body;a++)if(o.path[a].classList.contains("dragger"))i=!0;else if(i&&o.path[a].classList.contains("draggable"))return(s=o.path[a]).classList.add("dragging"),e=o.clientX-s.style.left.slice(0,-2),void(t=o.clientY-s.style.top.slice(0,-2))}),document.addEventListener("mouseup",function(){null!==s&&s.classList.remove("dragging"),s=null}),document.addEventListener("mousemove",function(o){if(null!==s){s.style.left=o.clientX-e+"px",s.style.top=o.clientY-t+"px";var i=s.parentElement.getBoundingClientRect(),a=s.getBoundingClientRect();a.left<i.left&&(s.style.left=0),a.top<i.top&&(s.style.top=0),a.right>i.right&&(s.style.left=i.width-a.width+"px"),a.bottom>i.bottom&&(s.style.top=i.height-a.height+"px")}}),$(".suw_body").load("https://sleek-upsell.herokuapp.com/suw/"+Shopify.shop)}script.type="text/javascript",script.src="https://sleek-upsell.com/assets/js/jquery-1.11.3.min.js",document.getElementsByTagName("head")[0].appendChild(script),script.onload=function(){createSUW()}}else{if("undefined"==typeof jQuery||null==jQuery){var script=document.createElement("script");script.type="text/javascript",script.src="https://sleek-upsell.com/assets/js/jquery-1.11.3.min.js",document.getElementsByTagName("head")[0].appendChild(script),script.onload=function(){sleek_upsell()}}else sleek_upsell();async function sleek_upsell(){Array.prototype.atleast=function(e,t){if(0==e)return!0;let s=0;for(let o of this)if(t(o)&&++s==e)return!0;return!1},Array.prototype.atmost=function(e,t){let s=0;for(let o of this)if(t(o)&&++s>e)return!1;return!0},Array.prototype.exactly=function(e,t){let s=0;for(let o of this)if(t(o)&&++s>e)return!1;return s==e},Array.prototype.none=function(e){return!this.some(e)};let page=window.location.pathname,offers_url="https://sleek-upsell.herokuapp.com/offers/"+Shopify.shop,offers=g_d(offers_url),cart=g_d("/cart.js"),auto_collection=offers.auto_collection,settings=offers.settings,drawer_selector='form[action="/cart"]',drawer_position="before",cart_selector='form[action="/cart"]',cart_position="before";function openReplacement(){return this.addEventListener("load",function(){["/cart/add.js","/cart/update.js","/cart/change.js","/cart/clear.js"].includes(this._url)&&(page.includes("/cart")||(cart=g_d("https://"+Shopify.shop+"/cart.js"),choose_offer()))}),open.apply(this,arguments)}null!=settings&&(drawer_selector=settings.drawer_location,cart_selector=settings.cart_location,cart_position=settings.cart_position,drawer_position=settings.drawer_position);const open=window.XMLHttpRequest.prototype.open;function choose_offer(){try{cart.item_count>0&&("null"!=auto_collection&&null!=auto_collection&&"1"===auto_collection.status?collection_based():next_offer())}catch(e){next_offer()}}function next_offer(){try{$(".sleek-upsell").remove()}catch(e){}if(page_ss.includes(s_s_w)||"y"==sessionStorage.getItem("s_u_w"))return!1;if(null!=$(".sleek-upsell")&&$(".sleek-upsell").remove(),cart.item_count>0){let e=Object.entries(offers.offer).find(([e,t])=>check_offer(e,t));if(e){let[t,s]=e;display_offer(t)}}}function collection_based(){if(cart.item_count>0&&"undefined"!=Object.keys(auto_collection)&&Object.keys(auto_collection).length>0&&"1"===auto_collection.status){let e=offers.collects,t=cart.items,s="";for(let o=0;o<t.length;o++)if(s=t[o].product_id,"y"!=sessionStorage.getItem("c_upsold_"+s)&&-1!=e.findIndex(e=>e.product_id==s)){sessionStorage.setItem("c_upsold_"+s,"y");let i=e.filter(e=>e.product_id==s)[0].collection_id,a=e.filter(e=>e.collection_id==i);for(let e=0;e<a.length;e++)if("z"!=sessionStorage.getItem("c_used_"+a[e].product_id)){if(-1==t.findIndex(t=>t.product_id==a[e].product_id)){if("y"==auto_collection.same_vendor){if(pidV=t[o].vendor,pid2V=gv(base_url+"/gv/"+Shopify.shop+"/"+a[e].product_id).product.vendor,pidV!=pid2V)continue;sessionStorage.setItem("c_used_"+a[e].product_id,"z"),load_c_based(a[e].product_id)}else sessionStorage.setItem("c_used_"+a[e].product_id,"z"),load_c_based(a[e].product_id);break}sessionStorage.setItem("c_used_"+a[e].product_id,"z")}break}}}function check_offer(e,t){if(1!=t.offer[0].status||"y"==sessionStorage.getItem("sleek_shown_"+e))return!1;let s=t.offer[0].rule,o=t.blocks;switch(s){case"ANY":return o.some(check_block);case"ALL":return o.every(check_block);default:return!1}}function check_block(e){let t=e.oid,s=e.bid,o=e.rule,i=offers.offer[t].conditions.filter(e=>e.bid==s);switch(o){case"ANY":return i.some(check_condition);case"ALL":return i.every(check_condition);default:return!1}}function check_condition(e){let t=e.type,s=e.quantity,o=e.level,i=e.content,a=e.pid,l=e.vid,c=e.amount,r=(e.country,cart.items);switch(t){case"oc1":switch(o){case"product":return r.atleast(s,e=>e.product_id==a);case"variant":return r.atleast(s,e=>e.variant_id==l);case"collection":return offers.collects.atleast(s,e=>e.collection_id==a&&r.some(t=>t.product_id==e.product_id));default:return!1}case"oc2":switch(o){case"product":return r.atmost(s,e=>e.product_id==a);case"variant":return r.atmost(s,e=>e.variant_id==l);case"collection":return offers.collects.atmost(s,e=>e.collection_id==a&&r.some(t=>t.product_id==e.product_id));default:return!1}case"oc3":switch(o){case"product":return r.exactly(s,e=>e.product_id==a);case"variant":return r.exactly(s,e=>e.variant_id==l);case"collection":return offers.collects.exactly(s,e=>e.collection_id==a&&r.some(t=>t.product_id==e.product_id));default:return!1}case"oc4":switch(o){case"product":return r.none(e=>e.product_id==a);case"variant":return r.none(e=>e.variant_id==l);case"collection":return offers.collects.none(e=>e.collection_id==a&&r.some(t=>t.product_id==e.product_id));default:return!1}case"oc5":return cart.total_price>=c;case"oc6":return cart.total_price<=c;case"oc7":case"oc8":return!1;case"oc9":return r.some(e=>e.vendor==i);case"oc10":return r.none(e=>e.vendor==i);default:return!1}}function populateFields(e,t){let s=offers.offer[e].fields,o=offers.offer[e].choices;s.filter(e=>e.pid==t).forEach(e=>create_field(t,e,"select"==e.type?o.filter(t=>t.fid==e.fid):[]))}function create_field(e,t,s){let o=t.type,i=t.placeholder,a=t.name;switch(o){case"select":ins_field(label_field(`<select class="form-control select sleek_fields_${t.fid}"`,"></select>",i,a),e),ins_opt_placeholder(a,i),s.forEach(e=>ins_opt(t.fid,e.value,e.price));break;case"checkbox_group":ins_field(label_field('<input type="checkbox"',"/>",i,a),e);break;case"textarea":ins_field(label_field("<textarea",`>${i}<textarea/>`,i,a),e);break;case"checkbox":case"radio":ins_field(label_field(`<input type="${o}"`,`/> ${i}`,i,a),e);break;case"number":case"text":case"file":case"date":ins_field(label_field(`<input type="${o}"`,"/>",i,a),e);break;case"swatch":ins_field(label_field('<input type="color" style="min-width: 150px;"',"/>",i,a),e)}}function ins_field(e,t){$(`.o_h_${t}`).append(e)}function ins_opt_placeholder(e,t){$(`.sleek_fields_${e}`).append($(`<option value="">${t}</option>`))}function ins_opt(e,t,s){$(`.sleek_fields_${e}`).append($(`<option value="${t}">${t} (${s})</option>`))}function label_field(e,t,s,o){return`\n            <div>\n                <label>${s}</label>\n                ${e} id="properties[${o}]" name="properties[${o}] placeholder="${s}" ${t}\n            </div>`}function brgxczvy(e,t,s,o,i,a,l){let c=cart.items.map(e=>e.product_id),r=new XMLHttpRequest,n='stat_id=""&date='+Math.floor(Date.now()/1e3)+"&shop="+Shopify.shop+"&offer="+e+"&product="+t+"&variant="+s+"&quantity="+o+'&ip=""&country=""&type='+l+"&action="+a+"&page="+page+"&device="+simu()+"&browser="+user_browser()+"&citems="+JSON.stringify(c)+"&price="+i;r.open("POST","https://sleek-upsell.herokuapp.com/brgxczvy",!0),r.setRequestHeader("Content-type","application/x-www-form-urlencoded"),r.onreadystatechange=function(){4===r.readyState&&r.status},r.send(n)}function setStyles(){$(".sleek-upsell").css({opacity:"1",transform:"none"}),$(".sleek-upsell form").css("margin-bottom","0px"),null!=settings&&($("<style>"+settings.override+"</style>").insertAfter(".sleek-upsell"),$(".sleek-upsell").css({"background-color":settings.layout_bg,color:settings.layout_color,"font-family":settings.layout_font,"font-size":settings.layout_size,"margin-top":settings.layout_mt,"margin-bottom":settings.layout_mb,"border-radius":settings.offer_radius,"border-width":settings.offer_bs,"border-color":settings.offer_bc,"border-style":settings.offer_border}),$(".sleek-upsell select").css({"background-color":settings.layout_bg,color:settings.layout_color}),$(".sleek-upsell button").css({"background-color":settings.button_bg,color:settings.button_color,"font-family":settings.button_font,"font-size":settings.button_size,"margin-top":settings.button_mt,"margin-bottom":settings.button_mb,"border-radius":settings.button_radius,"border-width":settings.button_bs,"border-color":settings.button_bc,"border-style":settings.button_border}),$(".sleek-upsell img").css({"border-radius":settings.image_radius,"border-width":settings.image_bs,color:settings.image_bc,"border-style":settings.image_border}),$(".sleek-text").css({color:settings.text_color,"font-family":settings.text_font,"font-size":settings.text_size}),$(".sleek-title").css({color:settings.title_color,"font-family":settings.title_font,"font-size":settings.title_size}),$(".sleek-price").css({color:settings.price_color,"font-family":settings.price_font,"font-size":settings.price_size}))}function display_offer(oid){let element="",settings=offers.settings,lay=offers.offer[oid].offer[0].layout,lay_el='<div class="card sleek-upsell"></div>',nudge="before";switch(page.includes("/cart")?(element=cart_selector,nudge=cart_position):(element=drawer_selector,nudge=drawer_position),$("<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>").insertBefore(element),lay){case"card":case"flat":case"block":case"half-block":case"compact":lay_el=`<div class="${lay} sleek-upsell"></div>`;break;default:lay_el='<div class="card sleek-upsell"></div>'}switch(nudge){case"prepend":$(element).prepend(lay_el);break;case"append":$(element).append(lay_el);break;case"before":$(lay_el).insertBefore(element);break;case"after":$(lay_el).insertAfter(element)}"y"==offers.offer[oid].offer[0].close&&$(lay_el).append('<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');let products=offers.offer[oid].products;for(let i=0;i<products.length;i++){let v=products[i],pid=v.product,Pgv=g_d(burl+"/gv/"+Shopify.shop+"/"+pid),pDet=Pgv.product,oatc=offers.offer[oid].offer[0].atc,vatc=v.atc,atc="ADD TO CART",otext=offers.offer[oid].offer[0].text,vtext=v.text,dtext="ADD TO CART";atc=""!=oatc?oatc:""!=vatc?vatc:"ADD TO CART",dtext=""!=otext?otext:""!=vtext?vtext:"Would you like a "+pDet.title;let o_ui='<form class="sleek-form" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></form>";if("card"==lay?o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></form>":"flat"==lay?o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-text">'+dtext+'</div><div class="sleek-flat"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <div class="flex-select"> <select name="quantity" class="q-select q-'+pid+'"></select> <button class="sleek-atc" type="submit">'+atc+"</button> </div></div></div></div></form>":"block"==lay?o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-text">'+dtext+'</div><div class="sleek-block"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+atc+"</button> </form>":"half-block"==lay?o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+atc+"</button> </form>":"compact"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-compact"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></div></form>"),$(".sleek-upsell").append(o_ui),$('.sleek-form[data-product-index="'+i+'"]').length>1)for(let e=1;e<=$('.sleek-form[data-product-index="'+i+'"]').length;e++)$('.sleek-form[data-product-index="'+i+'"]')[e].remove();"n"==v.show_title&&$(".sleek-title").remove(),"n"==v.show_price&&$(".sleek-prices").remove(),"n"==v.show_image&&$(".sleek-image").remove(),"n"==v.v_price&&$(".sleek-compare-price").remove(),"n"==v.c_price&&$(".sleek-compare-price").remove(),"n"==v.q_select&&($(".q_select").style.display="none"),populateFields(oid,pid);for(let e=0;e<pDet.variants.length;e++)pDet.variants[e].inventory_quantity>0&&$(".v-"+pid).append('<option value="'+pDet.variants[e].id+'">'+pDet.variants[e].title+" ("+Shopify.formatMoney(100*pDet.variants[e].price,Shopify.money_format)+")</option>");for(pDet.variants.length<2&&$(".v-"+pid).attr("style","display:none"),q=1;q<=10;q++)$(".q-"+pid).append('<option value="'+q+'">'+q+"</option>");brgxczvy(oid,pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"show","show"),$(".v-"+pid).change(function(){pDet.variants.findIndex(e=>e.id==$(this).val());$('form[data-product-product_id="'+pid+'"] img').attr("src",pDet.images[0].src),brgxczvy(oid,pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"variant change","impression")}),$(".q-"+pid).change(function(){brgxczvy(oid,pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"quantity change","impression")}),$('form[data-product-product_id="'+pid+'"]').hover(function(){brgxczvy(oid,pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"hover","impression")}),$(".sleek-form").submit(function(e){if(e.preventDefault(),""!=v.rv)g_s_s_w("/cart/change?id="+v.rv+"&quantity=0");else if(""!=v.rp){let e=g_d(burl+"/gv/"+Shopify.shop+"/"+v.rp);for(let t=0;t<e.product.variants.length;t++)g_s_s_w("/cart/change?id="+e.product.variants[t].id+"&quantity=0")}$.ajax({type:"POST",url:"/cart/add.js",dataType:"json",data:$(this).serialize(),success:function(response){"y"==offers.offer[oid].offer[0].stop_show&&sessionStorage.setItem("sleek_shown_"+oid,"y"),brgxczvy(oid,pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"add to cart","purchase"),$(".sleek-atc").innerHTML='<img src="https://sleek-upsell.com/assets/images/loader.gif" />',"y"==offers.offer[oid].offer[0].discount&&""!=offers.offer[oid].offer[0].code&&g_s_s_w("https://"+Shopify.shop+"/discount/"+offers.offer[oid].offer[0].code),"y"==offers.offer[oid].offer[0].to_checkout?window.location.href="/checkout":page.includes("/cart")?("y"==offers.offer[oid].offer[0].stop_show&&sessionStorage.setItem("sleek_shown_"+oid,"y"),$(".sleek-upsell").remove(),window.location.reload(!1)):($(".sleek-upsell").remove(),null!=settings&&"y"==settings.refresh_state&&eval(settings.drawer_refresh),next_offer())},error:function(e){$(this).find("button").html("Could not add product"),setTimeout(function(){$(this).remove()},1e3)}})})}null!=$(".reject_offer")&&$(".reject_offer").click(function(){sessionStorage.setItem("sleek_shown_"+oid,"y"),brgxczvy(oid,"","","","","reject","reject"),$(".sleek-upsell").remove(),setTimeout(function(){next_offer()},300)}),setStyles()}function load_c_based(pid){try{let i=0,element="",settings=offers.settings,auto_collection=offers.auto_collection,lay=auto_collection.layout,lay_el='<div class="card sleek-upsell"></div>',nudge="before";switch(page.includes("/cart")?(element=cart_selector,nudge=cart_position):(element=drawer_selector,nudge=drawer_position),$("<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>").insertBefore(element),lay){case"card":case"flat":case"block":case"half-block":case"compact":lay_el=`<div class="${lay} sleek-upsell"></div>`}switch(nudge){case"prepend":$(element).prepend(lay_el);break;case"append":$(element).append(lay_el);break;case"before":$(lay_el).insertBefore(element);break;case"after":$(lay_el).insertAfter(element)}"y"==auto_collection.close&&$(lay_el).append('<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');let Pgv=g_d(burl+"/gv/"+Shopify.shop+"/"+pid),pDet=Pgv.product,oatc=auto_collection.atc,atc="ADD TO CART",otext=auto_collection.text,dtext="";dtext=""!=otext?otext:"Would you like a "+pDet.title,atc=""!=oatc?oatc:"ADD TO CART";let o_ui='<form class="sleek-form" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></form>";"card"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></form>"),"flat"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-text">'+dtext+'</div><div class="sleek-flat"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <div class="flex-select"> <select name="quantity" class="q-select q-'+pid+'"></select> <button class="sleek-atc" type="submit">'+atc+"</button> </div></div></div></div></form>"),"block"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-text">'+dtext+'</div><div class="sleek-block"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+atc+"</button> </form>"),"half-block"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+atc+"</button> </form>"),"compact"==lay&&(o_ui='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+i+'" data-product-product_id="'+pid+'"> <div class="sleek-compact"> <div class="sleek-image"> <img src="'+pDet.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+dtext+'</div><div class="sleek-title">'+pDet.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+Shopify.formatMoney(100*pDet.variants[0].price,Shopify.money_format)+'</span> <span class="sleek-compare-price money">'+Shopify.formatMoney(100*pDet.variants[0].compare_at_price,Shopify.money_format)+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+pid+'"></div> <select name="id" class="v-select v-'+pid+'"></select> <select name="quantity" class="q-select q-'+pid+'"></select> </div><button class="sleek-atc" type="submit">'+atc+"</button> </div></div></form>"),$(".sleek-upsell").append(o_ui),"n"==auto_collection.show_title&&$(".sleek-title").remove(),"n"==auto_collection.show_price&&$(".sleek-prices").remove(),"n"==auto_collection.show_image&&$(".sleek-image").remove(),"n"==auto_collection.v_price&&$(".sleek-compare-price").remove(),"n"==auto_collection.c_price&&$(".sleek-compare-price").remove(),"n"==auto_collection.q_select&&($(".q_select").style.display="none");for(let e=0;e<pDet.variants.length;e++)pDet.variants[e].inventory_quantity>0&&$(".v-"+pid).append('<option value="'+pDet.variants[e].id+'">'+pDet.variants[e].title+" ("+Shopify.formatMoney(100*pDet.variants[e].price,Shopify.money_format)+")</option>");for(pDet.variants.length<2&&$(".v-"+pid).attr("style","display:none"),q=1;q<=10;q++)$(".q-"+pid).append('<option value="'+q+'">'+q+"</option>");brgxczvy("collection",pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"show","show"),$(".v-"+pid).change(function(){pDet.variants.findIndex(e=>e.id==$(this).val());$('form[data-product-product_id="'+pid+'"] img').attr("src",pDet.images[0].src),brgxczvy("collection",pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"variant change","impression")}),$(".q-"+pid).change(function(){brgxczvy("collection",pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"quantity change","impression")}),$('form[data-product-product_id="'+pid+'"]').hover(function(){brgxczvy("collection",pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"hover","impression")}),$(".sleek-form").submit(function(e){e.preventDefault(),$.ajax({type:"POST",url:"/cart/add.js",dataType:"json",data:$(this).serialize(),success:function(response){sessionStorage.setItem("sleek_shown_collection","y"),brgxczvy("collection",pid,$(".v-"+pid).val(),$(".q-"+pid).val(),pDet.variants[0].price,"add to cart","purchase"),$(".sleek-atc").innerHTML='<img src="https://sleek-upsell.com/assets/images/loader.gif" />',"y"==auto_collection.discount&&""!=auto_collection.code&&g_s_s_w("https://"+Shopify.shop+"/discount/"+auto_collection.code),"y"==auto_collection.to_checkout?window.location.href="/checkout":page.includes("/cart")?(sessionStorage.setItem("sleek_shown_collection","y"),$(".sleek-upsell").remove(),window.location.reload(!1)):($(".sleek-upsell").remove(),null!=settings&&"y"==settings.refresh_state&&eval(settings.drawer_refresh),collection_based())},error:function(e){$(this).find("button").html("Could not add product"),setTimeout(function(){$(this).remove()},1e3)}})}),null!=$(".reject_offer")&&$(".reject_offer").click(function(){sessionStorage.setItem("sleek_shown_collection","y"),brgxczvy("collection","","","","","reject","reject"),$(".sleek-upsell").remove(),setTimeout(function(){collection_based()},300)}),setStyles()}catch(e){collection_based()}}page.includes("/cart")||(window.XMLHttpRequest.prototype.open=openReplacement),choose_offer()}}