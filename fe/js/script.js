$(function(){"use strict";$('.navbar-nav > li:not(.dropdown) > a').on('click',function(){$('.navbar-collapse').collapse('hide');});$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click',function(event){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){event.preventDefault();$('html, body').animate({scrollTop:target.offset().top-40},1000,function(){var $target=$(target);$target.focus();if($target.is(":focus")){return false;}else{$target.attr('tabindex','-1');$target.focus();};});}}});function fallback(video){var img=video.querySelector('img');if(img)
video.parentNode.replaceChild(img,video);}
$(".youtube").each(function(){var videoId=$(this).data('video-id');$(document).on('click','.youtube',function(){var iframe_url="https://www.youtube.com/embed/"+videoId+"?autoplay=1&autohide=1&rel=0";if($(this).data('params'))iframe_url+='&'+$(this).data('params');var iframe=$('<iframe/>',{'frameborder':'0','class':'cast-shadow','src':iframe_url,'width':$(this).width(),'height':$(this).height()})
$(this).replaceWith(iframe);});});window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));});