if(!window.jQuery){var script=document.createElement("script");script.type="text/javascript",script.src="https://code.jquery.com/jquery-3.5.1.min.js",script.integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=",script.crossOrigin="anonymous",document.getElementsByTagName("head")[0].insertAdjacentElement("afterbegin",script)}function get_this(e){e&&(e.onload=function(){return e.responseText},e.send())}function createCORSRequest(e,t){var s=new XMLHttpRequest;return"withCredentials"in s?s.open(e,t,!0):"undefined"!=typeof XDomainRequest?(s=new XDomainRequest).open(e,t):s=null,s}function g_d(e){var t=new XMLHttpRequest;return t.open("GET",e,!1),t.send(null),JSON.parse(t.responseText)}function g_s_s_w(e){var t=new XMLHttpRequest;return t.open("GET",e,!1),t.send(null),t.responseText}function user_browser(){return-1!=(navigator.userAgent.indexOf("Opera")||navigator.userAgent.indexOf("OPR"))?"Opera":-1!=navigator.userAgent.indexOf("Chrome")?"Chrome":-1!=navigator.userAgent.indexOf("Safari")?"Safari":-1!=navigator.userAgent.indexOf("Firefox")?"Firefox":-1!=navigator.userAgent.indexOf("MSIE")||1==!!document.documentMode?"IE":"unknown"}const device=()=>{const e=navigator.userAgent;return/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(e)?"tablet":/Mobile|iP(hone|od|ad)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(e)?"mobile":"desktop"};let page=window.location.pathname,page_ss=window.location.href,s_s_w=g_s_s_w("https://sleek-upsell.herokuapp.com/s_s_w/"+Shopify.shop);jQuery(document).ready(function(){function e(){$("body").prepend('<style>.suw{display: table; width: 300px; height: 500px; background: #ffffff; position: fixed; bottom: 0px; left: 0px; z-index: 3000000;}.suw_head, .suw_footer{display: table; width: 100%; height: 50px !important; background: #981B1B !important; color: #ffffff;}.suw_body{overflow-Y: auto; display: table; width: 100%; height: 400px;}.suw_head:before{content: "SETUP WIZARD"; display: table; position: absolute; top: 10px; left: 10px; z-index: 2000000; color: #FFFFFF; font-size: 12px;}.suw_head{cursor:move; cursor:-webkit-grab; cursor:-moz-grab; cursor:grab;}</style>'),$("body").append('<div class="draggable suw"><div class="suw_head dragger"></div><div class="suw_body"><select><option>2</option><option>2</option><option>2</option><option>2</option></select></div><div class="suw_footer"></div></div>'),$(".suw_body").load("https://sleek-upsell.herokuapp.com/suw/"+Shopify.shop);var e,t,s=null;document.addEventListener("mousedown",function(l){for(var i=!1,o=0;l.path[o]!==document.body;o++)if(l.path[o].classList.contains("dragger"))i=!0;else if(i&&l.path[o].classList.contains("draggable"))return(s=l.path[o]).classList.add("dragging"),e=l.clientX-s.style.left.slice(0,-2),void(t=l.clientY-s.style.top.slice(0,-2))}),document.addEventListener("mouseup",function(){null!==s&&s.classList.remove("dragging"),s=null}),document.addEventListener("mousemove",function(l){if(null!==s){s.style.left=l.clientX-e+"px",s.style.top=l.clientY-t+"px";var i=s.parentElement.getBoundingClientRect(),o=s.getBoundingClientRect();o.left<i.left&&(s.style.left=0),o.top<i.top&&(s.style.top=0),o.right>i.right&&(s.style.left=i.width-o.width+"px"),o.bottom>i.bottom&&(s.style.top=i.height-o.height+"px")}})}"y"==sessionStorage.getItem("s_u_w")?e():page_ss.includes(s_s_w)&&(sessionStorage.setItem("s_u_w","y"),e());let t=g_d("https://sleek-upsell.herokuapp.com/offers/"+Shopify.shop),s=g_d("https://"+Shopify.shop+"/cart.js"),l=t.settings,i='form[action="/cart"]',o="before",a='form[action="/cart"]',r="before";null!=l&&(i=l.drawer_location,a=l.cart_location,r=l.cart_position,o=l.drawer_position);const c=window.XMLHttpRequest.prototype.open;function n(){if(s.item_count>0){let e=0,s=Object.keys(t.offer),l=t.offer;for(e=0;e<=s.length-1;e++){let t=s[e];if(1==d(t,l[t])){v(t);break}}}}function d(e,t){let s=t.offer[0].status,l=t.offer[0].rule,i=t.blocks,o=i.length;if(1==s){if("y"==sessionStorage.getItem("sleek_shown_"+e))return!1;if(o>0){let e=!1;for(let t=0;t<=i.length-1;t++){let s=i[t];if("ANY"==l){if(1==p(t,s)){e=!0;break}e=!1;break}if("ALL"==l){if(0==p(t,s)){e=!1;break}e=!0;break}}return e}return!0}return!1}function p(e,s){let l=s.oid,i=s.bid,o=s.rule,a=t.offer[l].conditions.filter(e=>e.bid==i);if(a.length>0){let e=!1;for(let t=0;t<=a.length-1;t++){let s=a[t];if("ANY"==o){if(1==f(t,s)){e=!0;break}e=!1;break}if("ALL"==o){if(0==f(t,s)){e=!1;break}e=!0;break}}return e}return!0}function f(e,l){l.cid,l.oid,l.bid;let i=l.type,o=l.quantity,a=l.level,r=(l.content,l.pid),c=l.vid,n=l.amount,d=(l.country,s.items),p=!1;if("oc1"==i){if("product"==a){p=d.filter(e=>e.product_id==r).length>=o}if("variant"==a){p=d.filter(e=>e.variant_id==c).length>=o}if("collection"==a){let e=t.collects.filter(e=>e.collection_id==r),s=0;for(let t=0;t<=d.length-1;t++)if(e.findIndex(e=>e.product_id==d[t].product_id)>=0){if((s+=1)>=o){p=!0;break}}else;}}if("oc2"==i){if("product"==a){p=d.filter(e=>e.product_id==r).length<=o}if("variant"==a){p=d.filter(e=>e.variant_id==c).length<=o}if("collection"==a){let e=t.collects.filter(e=>e.collection_id==r),s=0;for(let t=0;t<=d.length-1;t++)if(e.findIndex(e=>e.product_id==d[t].product_id)>=0){if((s+=1)>o){p=!1;break}p=!0}else;}}if("oc3"==i){if("product"==a){p=d.filter(e=>e.product_id==r).length==o}if("variant"==a){p=d.filter(e=>e.variant_id==c).length==o}if("collection"==a){let e=t.collects.filter(e=>e.collection_id==r),s=0;for(let t=0;t<=d.length-1;t++)if(e.findIndex(e=>e.product_id==d[t].product_id)>=0){if((s+=1)==o){p=!0;break}}else;}}if("oc4"==i){if("product"==a){p=d.filter(e=>e.product_id==r).length>0}if("variant"==a){p=d.filter(e=>e.variant_id==c).length>0}if("collection"==a){let e=t.collects.filter(e=>e.collection_id==r),s=0;for(let t=0;t<=d.length-1;t++)if(e.findIndex(e=>e.product_id==d[t].product_id)>=0){if((s+=1)>0){p=!1;break}p=!0}else;}}return"oc5"==i&&(p=s.total_price>=n),"oc6"==i&&(p=s.total_price<=n),p}function u(e,t,l,i,o,a,r){let c=[];$(s.items).each(function(e,t){c.push(t.product_id)});Math.floor(Date.now()/1e3),Shopify.shop,device(),user_browser();var n=new XMLHttpRequest,d='stat_id=""&date='+Math.floor(Date.now()/1e3)+"&shop="+Shopify.shop+"&offer="+e+"&product="+t+"&variant="+l+"&quantity="+i+'&ip=""&country=""&type='+r+"&action="+a+"&page="+page+"&device="+device()+"&browser="+user_browser()+"&citems="+JSON.stringify(c)+"&price="+o;n.open("POST","https://sleek-upsell.herokuapp.com/brgxczvy",!0),n.setRequestHeader("Content-type","application/x-www-form-urlencoded"),n.onreadystatechange=function(){4==n.readyState&&n.status},n.send(d)}function v(e){let s="",l=Shopify.currency.active,c=t.settings,d=t.offer[e].offer[0].layout,p='<div class="card sleek-upsell"></div>',f="before";page.includes("/cart")?(s=a,f=r):(s=i,f=o),$("<style>.sleek-upsell{background: #ECF0F1; color: #2B3D51; padding: 5px; font-family: inherit; vertical-align: middle; margin: 5px;}.sleek-image img{width: 100px;}.sleek-text{font-weight: bold;}.sleek-upsell select{padding: 4px; margin-top: 5px;}.sleek-prices{font-weight: bold; margin-bottom: 5px;}.sleek-compare-price{text-decoration: line-through;}.sleek-upsell button{padding: 10px; border: none; background: #2B3D51; color: #FFFFFF; font-weight: bold; border-radius: 0px; cursor: pointer; width: 100%;}.card{display: table;}.card .sleek-form{display: flex;}.card .sleek-image, .card .sleek-offer, .card .sleek-card-atc{display: table; align-self: center; padding: 5px;}.card .sleek-offer{flex-grow: 4;}.card .sleek-prices{text-align: center;}.block, .block .sleek-form, .block .sleek-text, .block .sleek-atc{display: table;}.sleek-block{display: flex;}.block .sleek-image, .block .sleek-offer{display: table; align-self: center; padding: 5px;}.block .sleek-offer{flex-grow: 1;}.half-block, .half-block .sleek-form, .half-block .sleek-text, .half-block .sleek-atc{display: table;}.sleek-half-block{display: flex;}.half-block .sleek-image, .half-block .sleek-offer{display: table; align-self: center; padding: 5px;}.half-block .sleek-offer{flex-grow: 1;}.flat, .flat .sleek-form, .flat .sleek-text{display: table;}.sleek-flat{display: flex;}.flat .sleek-image, .flat .sleek-offer{display: table; align-self: center; padding: 5px;}.flat .sleek-offer{flex-grow: 1;}.flat .flex-select{display: flex; width: auto; margin-top: 10px;}.flat .v-select{display: table; width: 100%; align-items: center; justify-content: space-between;}.flat .atc{flex-grow: 4;}.flat .q-select{margin-top: 0px; margin-right: 10px;}.compact, .compact .sleek-form, .compact .sleek-text, .compact .sleek-atc{display: table;}.sleek-compact{display: flex;}.compact .sleek-image, .compact .sleek-offer{display: table; align-self: center; padding: 5px;}.compact .sleek-offer{flex-grow: 1;}.compact .sleek-atc{margin-top: 5px;}@media only screen and (max-width: 600px){.sleek-upsell{width: 97%; margin: 5px auto;}.card select{max-width: 100px;}.block select{max-width: 200px;}.sleek-prices *{display: inline-table;}.block .sleek-form, .block .sleek-text, .block .sleek-atc{width: 100%;}}</style>").insertBefore(s),"card"==d&&(p='<div class="card sleek-upsell"></div>'),"flat"==d&&(p='<div class="flat sleek-upsell"></div>'),"block"==d&&(p='<div class="block sleek-upsell"></div>'),"half-block"==d&&(p='<div class="half-block sleek-upsell"></div>'),"compact"==d&&(p='<div class="compact sleek-upsell"></div>'),$(".sleek-upsell").remove(),"prepend"==f&&$(s).prepend(p),"append"==f&&$(s).append(p),"before"==f&&$(p).insertBefore(s),"after"==f&&$(p).insertAfter(s),"y"==t.offer[e].offer[0].close&&$(p).append('<div style="display: table; position: relative; width: 100%; text-align: right;"><span class="reject_offer" style="font-size: 15px; cursor: pointer;">x</span></div>');let v=t.offer[e].products,m=t.products;$(v).each(function(s,i){let o=i.product,a=m.findIndex(e=>e.id==o),r=m[a],p=t.offer[e].offer[0].atc,f=i.atc,v="ADD TO CART",k=t.offer[e].offer[0].text,b=i.text,h="ADD TO CART";v=""!=p?p:""!=f?f:"ADD TO CART",h=""!=k?k:""!=b?b:"Would you like a "+r.title;let g='<form class="sleek-form" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+h+'</div><div class="sleek-title">'+r.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <select name="quantity" class="q-select q-'+o+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><button class="sleek-atc" type="submit">'+v+"</button> </div></form>";for("card"==d&&(g='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+h+'</div><div class="sleek-title">'+r.title+'</div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <select name="quantity" class="q-select q-'+o+'"></select> </div></div><div class="sleek-card-atc"> <div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><button class="sleek-atc" type="submit">'+v+"</button> </div></form>"),"flat"==d&&(g='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-text">'+h+'</div><div class="sleek-flat"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+r.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <div class="flex-select"> <select name="quantity" class="q-select q-'+o+'"></select> <button class="sleek-atc" type="submit">'+v+"</button> </div></div></div></div></form>"),"block"==d&&(g='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-text">'+h+'</div><div class="sleek-block"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-title">'+r.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <select name="quantity" class="q-select q-'+o+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+v+"</button> </form>"),"half-block"==d&&(g='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-half-block"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+h+'</div><div class="sleek-title">'+r.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <select name="quantity" class="q-select q-'+o+'"></select> </div></div></div><button class="sleek-atc" type="submit">'+v+"</button> </form>"),"compact"==d&&(g='<form class="sleek-form" action="/cart/add" enctype="multipart/form-data" data-product-index="'+s+'" data-product-product_id="'+o+'"> <div class="sleek-compact"> <div class="sleek-image"> <img src="'+r.image.src+'"/> </div><div class="sleek-offer"> <div class="sleek-text">'+h+'</div><div class="sleek-title">'+r.title+'</div><div class="sleek-prices"> <span class="sleek-price money">'+l+" "+r.variants[0].price+'</span> <span class="sleek-compare-price money">'+l+" "+r.variants[0].price+'</span> </div><div class="sleek-selectors"> <div class="offer_fields_holder o_h_'+o+'"></div> <select name="id" class="v-select v-'+o+'"></select> <select name="quantity" class="q-select q-'+o+'"></select> </div><button class="sleek-atc" type="submit">'+v+"</button> </div></div></form>"),"n"==i.show_title&&$(".sleek-title").remove(),"n"==i.show_price&&$(".sleek-prices").remove(),"n"==i.show_image&&$(".sleek-image").remove(),"n"==i.v_price&&$(".sleek-compare-price").remove(),"n"==i.c_price&&$(".sleek-price").remove(),"n"==i.q_select&&$(".q_select").css("display","none"),$("."+d).append(g),function(e,s){let l=t.offer[e].fields,i=t.offer[e].choices;if(l.length>0){let e=l.filter(e=>e.pid==s);e.length>0&&($(".o_h_"+s).html(""),$(e).each(function(t,l){var o=e[t].fid,a=e[t].type,r=e[t].name,c=e[t].placeholder,n=(e[t].price,e[t].required,i.filter(e=>e.fid==o));"select"==a&&($(".o_h_"+s).append("<div><label>"+c+'</label><select class="form-control select sleek_fields_'+o+'" id="properties['+r+']" name="properties['+r+']"></select></div>'),$(".sleek_fields_"+r).append($("<option></option>").attr("value","").text(c)),$(n).each(function(e){var t=n[e].value,s=n[e].price;$(".sleek_fields_"+o).append($("<option></option>").attr("value",t).text(t+" ("+s+")"))})),"number"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="number" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>'),"text"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="text" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>'),"textarea"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><textarea class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'">'+c+"</textarea></div>"),"file"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="file" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>'),"checkbox"==a&&$(".o_h_"+s).append('<div><label><input type="checkbox" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /> '+c+"</label></div>"),"checkbox_group"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="text" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>'),"radio"==a&&$(".o_h_"+s).append('<div><label><input type="radio" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /> '+c+"</label></div>"),"date"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="date" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>'),"swatch"==a&&$(".o_h_"+s).append("<div><label>"+c+'</label><input type="color" class="form-control" id="properties['+r+']" name="properties['+r+']" placeholder="'+c+'" /></div>')}))}}(e,o),$(r.variants).each(function(e){$(".v-"+o).append('<option value="'+r.variants[e].id+'">'+r.variants[e].title+" ("+l+" "+r.variants[e].price+")</option>")}),s=1;s<=10;s++)$(".q-"+o).append('<option value="'+s+'">'+s+"</option>");u(e,o,$(".v-"+o).val(),$(".q-"+o).val(),r.variants[0].price,"show","show"),$(".v-"+o).change(function(){u(e,o,$(this).val(),$(".q-"+o).val(),r.variants[0].price,"variant change","impression")}),$(".q-"+o).change(function(){u(e,o,$(".v-"+o).val(),$(this).val(),r.variants[0].price,"quantity change","impression")}),$(".sleek-form").hover(function(){u(e,o,$(".v-"+o).val(),$(".q-"+o).val(),r.variants[0].price,"hover","impression")}),$(".sleek-form").submit(function(s){s.preventDefault(),u(e,o,$(".v-"+o).val(),$(".q-"+o).val(),r.variants[0].price,"add to cart","purchase"),$.ajax({type:"POST",url:"/cart/add.js",dataType:"json",data:$(this).serialize(),success:function(s){sessionStorage.setItem("sleek_shown_"+e,"y"),"y"==t.offer[e].offer[0].discount&&""!=t.offer[e].offer[0].code&&g_s_s_w("https://"+Shopify.shop+"/discount/"+t.offer[e].offer[0].code),"y"==t.offer[e].offer[0].to_checkout?window.location.href="/checkout":page.includes("/cart")?(sessionStorage.setItem("sleek_shown_"+e,"y"),$(".sleek-upsell").remove(),window.location.reload(!1)):($(".sleek-upsell").remove(),null!=c&&"y"==c.refresh_state&&c.drawer_refresh,n())},error:function(e){$(this).find("button").html("Could not add product"),setTimeout(function(){$(this).remove()},1e3)}})})}),$(".reject_offer").click(function(){sessionStorage.setItem("sleek_shown_"+e,"y"),u(e,"","","","","reject","reject"),$(".sleek-upsell").fadeOut("slow",function(){$(".sleek-upsell").remove(),n()})}),$(".sleek-upsell").css("opacity","1"),$(".sleek-upsell form").css("margin-bottom","0px"),null!=c&&($(".sleek-upsell").css("opacity","1"),$(".sleek-upsell form").css("margin-bottom","0px"),$(".sleek-upsell").css("background",c.layout_bg),$(".sleek-upsell select").css("background",c.layout_bg),$(".sleek-upsell").css("color",c.layout_color),$(".sleek-upsell select").css("color",c.layout_color),$(".sleek-upsell").css("font-family",c.layout_font),$(".sleek-upsell").css("font-size",c.layout_size),$(".sleek-upsell").css("margin-top",c.layout_mt),$(".sleek-upsell").css("margin-bottom",c.layout_mb),$(".sleek-upsell").css("border-radius",c.offer_radius),$(".sleek-upsell").css("border-width",c.offer_bs),$(".sleek-upsell").css("border-color",c.offer_bc),$(".sleek-upsell").css("border-style",c.offer_border),$(".sleek-upsell button").css("background",c.button_bg),$(".sleek-upsell button").css("color",c.button_color),$(".sleek-upsell button").css("font-family",c.button_font),$(".sleek-upsell button").css("font-size",c.button_size),$(".sleek-upsell button").css("margin-top",c.button_mt),$(".sleek-upsell button").css("margin-bottom",c.button_mb),$(".sleek-upsell button").css("border-radius",c.button_radius),$(".sleek-upsell button").css("border-width",c.button_bs),$(".sleek-upsell button").css("border-color",c.button_bc),$(".sleek-upsell button").css("border-style",c.button_border),$(".sleek-upsell img").css("border-radius",c.image_radius),$(".sleek-upsell img").css("border-width",c.image_bs),$(".sleek-upsell img").css("color",c.image_bc),$(".sleek-upsell img").css("border-style",c.image_border),$(".sleek-text").css("color",c.text_color),$(".sleek-text").css("font-family",c.text_font),$(".sleek-text").css("font-size",c.text_size),$(".sleek-title").css("color",c.title_color),$(".sleek-title").css("font-family",c.title_font),$(".sleek-title").css("font-size",c.title_size),$(".sleek-price").css("color",c.price_color),$(".sleek-price").css("font-family",c.price_font),$(".sleek-price").css("font-size",c.price_size))}window.XMLHttpRequest.prototype.open=function(){return this.addEventListener("load",function(){["/cart/add.js","/cart/update.js","/cart/change.js","/cart/clear.js"].includes(this._url)&&(s=g_d("https://"+Shopify.shop+"/cart.js"),n())}),c.apply(this,arguments)},n()});