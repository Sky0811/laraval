!function(t){function a(i){if(e[i])return e[i].exports;var o=e[i]={exports:{},id:i,loaded:!1};return t[i].call(o.exports,o,o.exports,a),o.loaded=!0,o.exports}var e={};return a.m=t,a.c=e,a.p="",a(0)}([function(t,a,e){t.exports=e(1)},function(t,a,e){e(2),e(3),MI.cart=function(){function t(){$.ajax({url:L.urls.getList,dataType:"jsonp",jsonp:"jsonpcallback",timeout:1e4,error:function(){j.tipMsg("网络出错，请刷新页面！")},success:function(t){t&&1===t.code?(L.listData=t.data,a(t.data),e(),L.selGoodsTotal=0,L.goodsTotal=0,L.giftTotal=0,$("#J_cartLoading").addClass("hide")):(t.code>1e3||t.code<0)&&j.tipMsg(t.msg)}})}function a(){if($(".J_goShoping").attr("href",MI.GLOBAL_CONFIG.listSite+"/0"),L.listData.items.length<=0)return $("#J_cartEmpty").removeClass("hide"),$("#J_cartBox").addClass("hide"),$("#J_miniHeaderTitle").html("<h2>我的购物车</h2>").removeClass("has-more"),$.cookie("userId")||($("#J_cartEmpty").addClass("cart-empty-nologin"),$("#J_loginBtn").attr("href",MI.GLOBAL_CONFIG.orderSite+"/site/login?redirectUrl="+location.href)),void G(!0);$("#J_cartBox").removeClass("hide"),$.each(L.listData.items,function(t,a){a.isOvercartTTL||a.showCos||!a.is_on_sale?(1===a.sel_status||2===a.sel_status||3===a.sel_status)&&(L.goodsTotal+=parseInt(a.num)):(L.goodsTotal+=parseInt(a.num),a.pulse_bargains_cart&&a.pulse_bargains_cart.length&&$.each(a.pulse_bargains_cart,function(t,a){L.goodsTotal+=parseInt(a.num)}),a.pulse_gift&&a.pulse_gift.length&&$.each(a.pulse_gift,function(t,a){L.goodsTotal+=parseInt(a.num)})),a.properties&&a.properties.insurance&&a.properties.insurance.itemId&&(L.goodsTotal+=parseInt(a.num))}),L.listData.activitys.gift&&L.listData.activitys.gift.length&&$.each(L.listData.activitys.gift,function(t,a){L.giftTotal+=parseInt(a.num)});var t="";L.listData.shipmentDes?(t="<p>"+L.listData.shipmentDesc+"</p>",$("#J_miniHeaderTitle").addClass("has-more")):($("#J_miniHeaderTitle").addClass("has-more"),t="<p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>"),$("#J_miniHeaderTitle").html("<h2>我的购物车</h2>"+t),$("#J_cartTotalNum").text(L.goodsTotal+L.giftTotal).parent().removeClass("hide"),L.listData.activityDiscountMoney>0?$("#J_cartActivityMoney").text(L.listData.activityDiscountMoney).parent().removeClass("hide"):$("#J_cartActivityMoney").text("0").parent().addClass("hide"),$("#J_cartTotalPrice").text(L.listData.orderMoneySelGoods),!L.listData.postFree&&L.listData.postFreeBalance?($("#J_postFreeBalance").text(L.listData.postFreeBalance),L.listData.gatherorder_goods_list&&L.listData.gatherorder_goods_list.length>0&&($("#J_coudanTip").removeClass("hide"),$("#J_showCoudan").removeClass("hide"))):$("#J_coudanTip").addClass("hide")}function e(){L.listData.items.length<=0||(i(L.listData.items),o(L.listData.activitys),L.listData.giftsDiv&&L.listData.giftsDiv.length&&r(L.listData.giftsDiv),s(L.listData.bargains),L.listData.bargainDiv&&L.listData.bargainDiv.length&&n(L.listData.bargainDiv),L.listData.gatherorder_goods_list&&L.listData.gatherorder_goods_list.length&&l(L.listData.gatherorder_goods_list),L.closeGoods=[],$.each(L.listData.items,function(t,a){(a.isOvercartTTL||a.showCos||!a.is_on_sale)&&L.closeGoods.push(a)}),L.closeGoods.length&&c(),d(L.listData.items),p())}function i(t){var a=doT.template($("#J_cartGoodsTemplate").html()),e=a(t);$("#J_cartListBody").html(e)}function o(t){if(t){var a=doT.template($("#J_cartActivitysTemplate").html()),e=a(t);$("#J_cartListBody").append(e)}}function s(t){if(t){var a=doT.template($("#J_cartRaisebuyTemplate").html()),e=a(t);$(".J_modalRaiseBuy").remove(),$("#J_raiseBuyBox").html(e)}}function n(t){if(t){$(".J_cartGoods").each(function(){var a=j.parseJson($(this).attr("data-info"));return"bargain"!==a.gettype?!0:void $.each(t,function(t,e){return a.itemid.indexOf(e.actId)<0?!0:void $.each(e.selecInfo,function(t,e){return a.itemid.indexOf(e.product_id)<0?!0:(e.num=a.num,void(e.isBuy="true"))})})});var a=doT.template($("#J_cartRaisebuyClassTemplate").html()),e=a(t);$(".J_modalRaisebuy").remove(),$("body").append(e)}}function r(t){if(t){var a=doT.template($("#J_cartGiftTemplate").html()),e=a(t);$(".J_modalGift").remove(),$("body").append(e)}}function l(t){if(t){var a=doT.template($("#J_cartCoudanTemplate").html()),e=a(t);$(".J_modalCoudan").remove(),$("body").append(e),$("#J_coudanMoney").text(L.listData.postFreeBalance)}}function c(){var t=doT.template($("#J_cartCloseTemplate").html()),a=t(L.closeGoods),e='<div class="item-disable-box">'+a+"</div>";$("#J_cartListBody").append(e)}function d(t){$.each(t,function(t,a){a.isOvercartTTL||a.showCos||!a.is_on_sale?(1===a.sel_status||2===a.sel_status||3===a.sel_status)&&(L.selGoodsTotal+=parseInt(a.num)):((1===a.sel_status||2===a.sel_status||3===a.sel_status)&&(L.selGoodsTotal+=1*a.num,a.properties&&a.properties.insurance&&a.properties.insurance.itemId&&(L.selGoodsTotal+=parseInt(a.num)),a.pulse_bargains_cart&&a.pulse_bargains_cart.length&&$.each(a.pulse_bargains_cart,function(t,a){L.selGoodsTotal+=parseInt(a.num)}),a.pulse_gift&&a.pulse_gift.length&&$.each(a.pulse_gift,function(t,a){L.selGoodsTotal+=a.num})),a.pulse_bargains&&$.each(a.pulse_bargains,function(t,a){a.selectable&&u(a)}),a.pulse_gift&&$.each(a.pulse_gift,function(t,a){a.selectable&&m(a)}))}),L.selGoodsTotal===L.goodsTotal&&L.selGoodsTotal>0?$("#J_selectAll").addClass("icon-checkbox-selected"):$("#J_selectAll").removeClass("icon-checkbox-selected"),L.selGoodsTotal<=0?($("#J_goCheckout").removeClass("btn-primary").addClass("btn-disabled"),$("#J_noSelectTip").removeClass("hide")):($("#J_goCheckout").removeClass("btn-disabled").addClass("btn-primary"),$("#J_noSelectTip").addClass("hide")),$("#J_selTotalNum").html(L.selGoodsTotal+L.giftTotal)}function u(t){if(t){var a=[];a.push(t);var e=doT.template($("#J_goodsSubRaisebuyClassTemplate").html()),i=e(a);$("#J_choosePro-"+t.actId).remove(),$("body").append(i)}}function m(t){if(t){var a=[];a.push(t);var e=doT.template($("#J_cartGiftTemplate").html()),i=e(a);$("body").append(i)}}function p(){h(),_(!0),G()}function h(){$(".J_delGoods").off().on("click",function(){return C($(this)),!1}),$(".J_changeGoodsNum").on("mouseover",function(){$(this).toggleClass("change-goods-num-hover")}).on("mouseout",function(){$(this).toggleClass("change-goods-num-hover")}),$(".J_goodsNum").off().on("blur",function(){var t=parseInt($(this).val()),a=parseInt($(this).attr("data-buylimit")),e=parseInt($(this).attr("data-num")),i=$(this).attr("name"),o=$.isNumeric(t);if(o){if(1>t)return $(this).val(e),!1;if(t>a)return v(a,"input",i),j.tipMsg("该商品数量不能大于"+a),!1;v(t,"input",i)}else j.tipMsg("输入的数量只能是数字！"),$(this).val(e)}),$(".J_minus").off().on("click",function(){var t=$(this).parent().find(".J_goodsNum"),a=parseInt(t.val());return $.isNumeric(a)?a>1&&v(a,"reduce",t.attr("name")):j.tipMsg("输入的数量只能是数字！"),!1}),$(".J_plus").off().on("click",function(){var t=$(this).parent().find(".J_goodsNum"),a=parseInt(t.val()),e=parseInt(t.attr("data-buylimit")),i=t.attr("name");return $.isNumeric(a)?(a>=1&&e>a?v(a,"add",i):v(e,"add",i),!1):(j.tipMsg("输入的数量只能是数字!"),!1)}),J(),$(".J_chooseGift").on("click",function(){var t=$(this).attr("data-actId");return x("#J_choosePro-"+t),!1}),I(),w(),M(),$("#J_showCoudan").off().on("click",function(){return x("#J_CoudanBox"),!1}),$(".J_carouselList").carousel({itemPerSlide:5,containerSelector:".J_carouselContainer",controlsSelector:".J_carouselControl",controls:!1,pager:!0}),$(".J_addFavorite").on("click",function(){var t=$(this).attr("data-gid");return t?void $.ajax({url:L.urls.favorite+t,dataType:"jsonp",jsonp:"jsonpcallback",timeout:1e4,error:function(){},success:function(a){a&&1===a.code?$('.J_addFavorite[data-gid="'+t+'"]').addClass("is-favorite"):j.tipMsg(a.msg)}}):!1}),$(".J_itemCheckbox").on("click",function(){var t=$(this).hasClass("icon-checkbox-selected"),a=$(this).attr("data-itemid");t?f(a,0):f(a,1)})}function f(t,a,e){$.ajax({url:L.urls.sel,dataType:"jsonp",data:{itemId:t,status:a},jsonp:"jsonpcallback",success:function(t){1===t.code?(T(),"function"==typeof e&&e()):j.tipMsg(t.msg)}})}function g(){$("#J_selectAll").on("click",function(){var t=$(this).hasClass("icon-checkbox-selected"),a=[],e=null;$(".J_itemCheckbox").each(function(){a.push($(this).attr("data-itemid")),e=t?0:1}),a.length&&f(a.join("__"),e)})}function _(t){var a=$("#J_cartBar"),e=$(window).height(),i="cart-bar-fixed";t&&a.removeClass(i);var o=a.offset();o.top>e?a.addClass(i):a.removeClass(i);var s=0;$(window).off("scroll").on("scroll",function(){s=$(this).scrollTop()+e,s>o.top?a.removeClass(i):a.addClass(i)})}function v(t,a,e){"add"===a?t+=1:"reduce"===a&&(t-=1),$.ajax({url:MI.GLOBAL_CONFIG.cartSite+"/cart/update?api=1&Cart="+e+"__"+t,dataType:"jsonp",jsonp:"jsonpcallback",success:function(t){var a=$.trim(t.msg);if("ok"===a)MI.updateMiniCart();else{if("CANTMODIFY"===a)return j.tipMsg("非常抱歉！该商品不允许修改数量！"),!1;if("SALEOUT"===a)return j.tipMsg("修改失败！"),window.location.reload(),!1;if(a.indexOf("MAX")>-1){var e=a.split("|");return $("#J_cart_"+e[1]).val(e[2]),j.tipMsg("1"===e[3]?"每笔订单最多购买4部小米手机。如有需要，请您另下订单继续购买。":"超出商品最大购买数量。"),!1}j.tipMsg(a)}T()}})}function C(t){if(t.length){var a=t.attr("data-msg"),e=t.attr("id");j.tipMsg(a,!0,function(){b(e)})}}function b(t){t&&$.ajax({dataType:"jsonp",url:MI.GLOBAL_CONFIG.cartSite+"/cart/delete/"+t+"?api=1&ajax=cart-grid",jsonp:"jsonpcallback",cache:"false",success:function(t){1===t.code?T():j.tipMsg(t.msg)}})}function J(){$(".J_raiseBuyItem").on("click",function(){var t=j.parseJson($(this).attr("data-info")),a=$(this).hasClass("selected");if(a)b(t.bargainid);else if("true"===t.isBatch)x("#J_choosePro-"+t.actId);else{if(t.num&&t.num>0){var e=t.maxnum-t.num+1;t.goodsId=t.productId+"-0-"+e+"-"+t.actId}k(t.goodsId,t.actId,t.type)}})}function x(t){if(t&&$(t).length){var a=$(t),e=a.find(".J_chooseProList"),i=a.find(".J_chooseProBtn"),o=a.attr("data-isadd")||!1,s=a.attr("data-isgift")||!1,n=e.find("li").length;a.addClass("modal-choose-pro-"+n),a.on("shown.bs.modal",function(){$(".modal-backdrop").addClass("modal-backdrop-dark")}).on("show.bs.modal",function(){$(this).find(".list").find("img").each(function(){$(this).attr("data-src")&&$(this).attr("src",$(this).attr("data-src"))})}).modal({backdrop:"static",show:!0}),e.children("li").on("click",function(){$(this).addClass("selected").siblings().removeClass("selected");var t=$(this).attr("data-gid"),a=$(this).attr("data-price"),e=$(this).attr("data-coudan"),o=$(this).attr("data-num"),s=$(this).attr("data-maxnum");if("true"===e){var n=L.listData.postFreeBalance-parseFloat(a);n>0?($("#J_coudanOver").addClass("hide"),$("#J_coudanDesc").removeClass("hide")):($("#J_coudanOver").removeClass("hide"),$("#J_coudanDesc").addClass("hide"))}if(o&&s){o=parseInt(o),s=parseInt(s);var r=$(this).attr("data-pid"),l=$(this).attr("data-actid");if(s>o){var c=[];$(this).siblings("li").each(function(){var t=parseInt($(this).attr("data-num"));t>0&&c.push($(this).attr("data-pid")+"-0-"+t+"-"+$(this).attr("data-actid"))}),o+=1,t=c.length?r+"-0-"+o+"-"+l+"_"+c.join("_"):r+"-0-"+o+"-"+l,$(this).attr("data-gid",t)}}i.attr("href","/cart/add/"+t).removeClass("btn-disable").addClass("btn-primary")}),i.off().on("click",function(){if($(this).hasClass("btn-disable"))return!1;var t=e.find(".selected").attr("data-gid");if("true"===o&&e.find('[data-isbuy="true"]').length>0){t="";var i=!0,n=0;e.find('[data-isbuy="true"]').each(function(){var a=$(this).attr("data-pid"),e=$(this).attr("data-num"),o=$(this).attr("data-actid");$(this).hasClass("selected")&&(e=parseInt(e)+1,i=!1),t+=(n>0?"_":"")+a+"-0-"+e+"-"+o,n+=1}),i&&(t+="_"+e.find(".selected").attr("data-gid"))}if("true"===o||"true"===s){var r=$(this).attr("data-actid"),l=$(this).attr("data-type");k(t,r,l)}else y(t);return a.modal("hide"),!1})}}function y(t){MI.addShopCart(t,function(t){t&&1===t.code?T():j.tipMsg(t.msg)})}function k(t,a,e){var i=MI.GLOBAL_CONFIG.cartSite+"/cart/addCartActivity.php";$.ajax({url:i,dataType:"jsonp",data:"id="+t+"&promotion_id="+a+"&promotion_type="+e+"&api=1",jsonp:"jsonpcallback",timeout:1e4,error:function(){j.tipMsg("网络请求超时")},success:function(t){1===t.code?T():j.tipMsg(t.message)}})}function T(){t()}function I(){var t="";$(".J_showBaoxian").off().on("click",function(){var a=j.parseJson($(this).attr("data-info"));t=a.goodsId+"?parent_itemId="+a.parent_itemId,$(".J_buyBaoxian").find(".num").html(a.count+"份"),$("#J_baoxian").modal({backdrop:"static",show:!0});var e=MI.GLOBAL_CONFIG.cartSite+"/static/insuranceAgreement.php?type="+a.type;$(".J_baoxianMore").attr("href",e)}),$(".J_baoxianAgree").off().on("click",function(){$(this).toggleClass("selected")}),$(".J_buyBaoxian").off().on("click",function(){var a=$(".J_baoxianAgree").hasClass("selected");a?(y(t),$("#J_baoxian").modal("hide")):alert("请先阅读并同意《小米手机意外保障服务》！")}),$("#J_baoxian").on("hide.bs.modal",function(){$(".J_baoxianAgree").removeClass("selected")})}function w(){$(".J_showGuajia").on("click",function(){var t=$(this).attr("data-gid"),a=$(this).attr("data-parent_itemid");$(".J_buyGuaJia").attr("data-gid",t).attr("data-parent_itemid",a),$("#J_modalGuajia").modal({backdrop:"static",show:!0})}),$(".J_buyGuaJia").off().on("click",function(){var t=$(this).attr("data-gid"),a=$(this).attr("data-parent_itemid");t&&a?(t+="?parent_itemId="+a,y(t),$("#J_modalGuajia").modal("hide")):alert("参数错误")})}function M(){$(".J_showWaterInstall").on("click",function(){var t=$(this).attr("data-gid"),a=$(this).attr("data-parent_itemid");$(".J_buyWaterInstall").attr("data-gid",t).attr("data-parent_itemid",a),$("#J_modalWaterInstall").modal({backdrop:"static",show:!0})}),$(".J_buyWaterInstall").off().on("click",function(){var t=$(this).attr("data-gid"),a=$(this).attr("data-parent_itemid");t&&a?(t+="?parent_itemId="+a,y(t),$("#J_modalWaterInstall").modal("hide")):alert("参数错误")})}function G(t){if(t)$("#J_miRecommendBox").addClass("hide"),$("#J_historyRecommend").removeClass("hide").miRecommend({type:2,title:"为您推荐",page:"Cart",isBuy:!0,useCarousel:!1});else{var a=[];$(".J_cartGoods").each(function(){var t=j.parseJson($(this).attr("data-info"));t&&a.push(t.commodity_id)}),$("#J_miRecommendBox").removeClass("hide").miRecommend({type:3,gid:a?a.join():"",title:"买购物车中商品的人还买了",page:"Cart",isBuy:!0})}$("#J_miHistoryBox").miRecommend({type:4,title:"您还看了",page:"Cart",useCarousel:!0,isBuy:!1})}function S(){$("#J_goCheckout").on("click",function(){var t=$(this).hasClass("btn-disabled");return t?!1:($(this).addClass("btn-disabled"),void $.ajax({url:L.urls.preCheckout+"?r="+j.randomNum(),dataType:"jsonp",jsonp:"jsonpcallback",timeout:5e3,error:function(){$(this).removeClass("btn-disabled"),location.href=MI.GLOBAL_CONFIG.orderSite+"/buy/checkout?r="+j.randomNum()},success:function(t){if($(this).removeClass("btn-disabled"),1===t.code)location.href=MI.GLOBAL_CONFIG.orderSite+"/buy/checkout?r="+j.randomNum();else if(-2===t.code)location.href=MI.GLOBAL_CONFIG.orderSite+"/site/login?redirectUrl="+location.href+"?autogo";else if(2004002===t.code)location.reload();else if(10006===t.code)j.tipMsg(t.msg);else{var a=!1;$.each(L.preCheckoutCode,function(e,i){return t.code.toString()===e?(t.texts=i,a=!0,!1):void 0}),a?D(t):j.tipMsg(t.msg)}}}))})}function D(t){if(t){$("#J_modalPrecheckTip").remove();var a=doT.template($("#J_preCheckTipTemplate").html()),e=a(t);$("body").append(e),t.data.items&&t.data.items.length>3&&$("#J_preCheckList").carousel({itemPerSlide:3,containerSelector:"#J_modalPrecheckTip",controlsSelector:".modal-bd",controls:!0,pager:!1}),$("#J_modalPrecheckTip").modal({backdrop:"static",show:!0}).on("hide.be.modal",function(){$("#J_goCheckout").removeClass("btn-disabled")}),B()}}function B(){$("#J_preCheckBtn").on("click",function(){var t=$(this).attr("data-action");if(t){if("3"===t)return $("#J_modalPrecheckTip").modal("hide"),void T();var a=$("#J_preCheckList").find("li"),e=[],i=[],o=[];$(".J_itemCheckbox").each(function(){var t=$(this).attr("data-itemid"),a=$(this).hasClass("icon-checkbox-selected"),e=$(this).attr("data-isdis");i.push(t),a&&"true"===e&&o.push(t)}),a.each(function(){var t=$(this).attr("data-itemid");e.push(t)}),"1"===t?f(i.join("__"),0,function(){f(e.join("__"),1,function(){$("#J_modalPrecheckTip").modal("hide"),$("#J_goCheckout").trigger("click")})}):"2"===t?f(e.join("__"),0,function(){$("#J_modalPrecheckTip").modal("hide"),$("#J_goCheckout").trigger("click")}):"4"===t&&o.length&&f(o.join("__"),0,function(){$("#J_modalPrecheckTip").modal("hide")})}})}var L={urls:{getList:MI.GLOBAL_CONFIG.cartSite+"/cart/getList.php?api=1",favorite:MI.GLOBAL_CONFIG.orderSite+"/favorite/add/id/",sel:MI.GLOBAL_CONFIG.cartSite+"/cart/sel.php",preCheckout:MI.GLOBAL_CONFIG.orderSite+"/buy/checkoutPreCheck.php"},listData:null,selGoodsTotal:0,goodsTotal:0,giftTotal:0,preCheckoutCode:{2003073:{title:"以下为预售商品，需要单独结算",btn:"先购买这些商品",action:1},2003072:{title:"以下为开放购买商品，需要单独结算",btn:"先购买这些商品",action:1},2003074:{title:"以下为大型商品（需特殊配送），需要单独结算",btn:"先购买这些商品",action:1},2003075:{title:"以下为合约机，需要单独结算",btn:"先购买这些商品",action:1},2003080:{title:"以下为需要特殊配送的商品，需要单独结算",btn:"先购买这些商品",action:1},2003077:{title:"抱歉，以下商品已经失效或者暂时售罄",btn:"购买其他已选商品",action:2},2003076:{msg:"抱歉，已选商品已经失效或者暂时售罄",btn:"看看其他商品",action:4},2004046:{msg:"抱歉，已选商品已经下架",btn:"看看其他商品",action:4},2003078:{msg:"请勾选需要结算的商品",btn:"确定",action:3}}},j={tipMsg:function(t,a,e){if(t){var i="";t.length>10&&(i="much-text"),$("#J_alertMsg").html(t).addClass(i),$("#J_modalAlert").modal("show").on("hide.bs.modal",function(){$("#J_alertMsg").html(""),$("#J_alertOk").off()}),a?$("#J_alertCancel").removeClass("hide"):$("#J_alertCancel").addClass("hide"),"function"==typeof e&&$("#J_alertOk").off().on("click",e)}else $("#J_modalAlert").modal("hide")},randomNum:function(){return parseInt(9e4*Math.random()+1e4)+"."+parseInt((new Date).getTime()/1e3)},formatImageUrl:function(t,a){if(t&&a){var e=t.lastIndexOf("."),i=t.slice(e),o=t.slice(0,e),s=o+"!"+a+"x"+a+i;return s}},formatDate:function(t,a){if(t){var e=new Date(1e3*parseInt(t)),i={Y:e.getFullYear(),M:e.getMonth()+1,D:e.getDate(),h:e.getHours()<10?"0"+e.getHours():e.getHours(),m:e.getMinutes()<10?"0"+e.getMinutes():e.getMinutes(),s:e.getSeconds()},o=a||"##Y##-##M##-##D## ##h##:##m##:##s##",s="";for(var n in i)i[n]>=0&&(s="##"+n+"##",o.indexOf(s)>=0&&(o=o.replace(s,i[n])));return o}},parseJson:function(t){return new Function("return "+t)()}},O=function(){t(),g(),S(),location.href.indexOf("autogo")>=0&&$("#J_goCheckout").trigger("click"),$(window).on("resize",function(){_(!0)})};return{init:O,unit:j}}(),$(document).ready(function(){MI.cart.init()})},function(t,a){!function(t){function a(a){function e(){return 0>=$?!1:(C&&clearInterval(C),void(C=setTimeout(function(){var t=b===$-1?0:b+1;i(t),e()},h.pause)))}function i(t){return b===t?!1:(v.css({marginLeft:-g*f*t,transition:"margin-left "+h.speed/1e3+"s "+h.easing}),h.controls&&(0===t?d.addClass("control-disabled"):d.removeClass("control-disabled"),t===$-1?u.addClass("control-disabled"):u.removeClass("control-disabled")),h.pager&&m.find("li").eq(t).addClass("pager-active").siblings().removeClass("pager-active"),void(b=t))}function o(){for(var a='<ul class="xm-pagers">',e=0,o=$;o>e;e+=1)a+='<li class="pager'+(0===e?" pager-active":"")+'"><span class="dot">'+(e+1)+"</span></li>";a+="</ul>",m.html(a),m.find("li").off(".carousel").on("click.carousel",function(){t(this).addClass("pager-active").siblings().removeClass("pager-active"),i(m.find("li").index(t(this)))})}function s(){f=h.itemPerSlide||Math.ceil(r.width()/g),$=Math.ceil(l.length/f),1>=$||(i(0),h.pager&&o(),h.auto&&(e(),h.controls&&c.find(".control").off(".carousel").on({"mouseenter.carousel":function(){C&&clearTimeout(C)},"mouseleave.carousel":function(){e()}}),h.pager&&m.find(".pager").off(".carousel").on({"mouseenter.carousel":function(){C&&clearTimeout(C)},"mouseleave.carousel":function(){e()}})))}var n,r,l,c,d,u,m,p,h,f,g,_,$,v=t(this),C=0,b=-1;return p={itemSelector:"> li",itemWidth:null,itemHeight:null,itemPerSlide:null,containerSelector:null,controlsSelector:null,pagersSelector:null,speed:500,easing:"ease",auto:!1,pause:5e3,controls:!0,controlsClass:"xm-controls-line-small",pager:!1,onLoad:t.noop},h=t.extend({},p,a),l=v.find(h.itemSelector),h.itemPerSlide&&l.length<=h.itemPerSlide?this:(g=h.itemWidth||l.outerWidth(!0),_=h.itemHeight||l.outerHeight(),n=h.containerSelector?v.closest(h.containerSelector):v.parent(),n.addClass("xm-carousel-container"),r=v.wrap('<div class="xm-carousel-wrapper"></div>').closest(".xm-carousel-wrapper").css({height:_,overflow:"hidden"}),v.css("width",g*l.length),h.controls&&(c=t('<div class="xm-controls '+h.controlsClass+' xm-carousel-controls"><a class="control control-prev iconfont" href="javascript: void(0);">&#xe628;</a><a class="control control-next iconfont" href="javascript: void(0);">&#xe623;</a></div>'),h.controlsSelector?n.find(h.controlsSelector).append(c):c.insertAfter(r),d=c.find(".control-prev"),u=c.find(".control-next"),d.on("click",function(a){a.preventDefault(),t(this).hasClass("control-disabled")||i(b-1)}),u.on("click",function(a){a.preventDefault(),t(this).hasClass("control-disabled")||i(b+1)})),h.pager&&(m=t('<div class="xm-pagers-wrapper"></div>'),h.pagersSelector?n.find(h.pagersSelector).append(m):m.insertAfter(r)),s(),h.onLoad(v),void t(window).on("resize",s))}t.fn.carousel=function(t){return this.each(function(){a.call(this,t)}),this}}(jQuery)},function(t,a,e){e(2),e(4),function(t){"use strict";function a(a){var o,n=l[s.type],r=t.cookie("userId")||"",c=t.cookie("mstuid");switch(s.type){case 2:var d="?u="+c+"&i="+r+"&a="+s.cid;o=s.apiHost[2]+d,"Home"===s.page&&(o+="&c=AA");break;case 4:o=s.apiHost[s.type]+"?mstuid="+c+"&mid="+r;break;default:o=s.apiHost[s.type]+"?a="+s.cid+"&cid="+s.gid}t.ajax({dataType:"JSONP",url:o,jsonpCallback:n,cache:!0,params:s,success:function(o){if(o.type=this.params.type,o.title=this.params.title,o.global=MI.GLOBAL_CONFIG,o.iHost=this.params.iHost,o.isBuy=this.params.isBuy,o.useCarousel=this.params.useCarousel,o.r.length<this.params.showMin)return!1;var s=t(a),n=e(5);s.addClass("container").html(n(o));var r=s.find("ul[data-carousel-list=true]").eq(0);i(s,r,this.params),null!==this.params.callback&&"function"==typeof this.params.callback&&this.params.callback()}})}function i(a,e,i){3!==i.type&&i.useCarousel&&e.carousel({containerSelector:a,controls:i.carouselControl,pager:i.carouselPage,itemHeight:320}),i.isBuy&&(t(".J_xm-recommend-list").hover(function(){t(this).find(".J_xm-recommend-btn").show()},function(){t(this).find(".J_xm-recommend-btn").hide()}),t(".J_xm-recommend-btn").off(".addcart").on("click.addcart",function(){function a(){o.removeClass("xm-recommend-notice-active"),setTimeout(function(){e.removeClass("disabled"),o.empty()},500)}var e=t(this),o=e.parent().siblings(".xm-recommend-notice");return e.hasClass("disabled")?!1:(MI.addShopCart(e.attr("data-stat-gid"),function(t){1===t.code?"Cart"!==i.page?(o.addClass("xm-recommend-notice-active").empty().append('<a class="btn btn-block btn-green btn-notice" href="javascript: void(0);">成功加入购物车</a>'),o.find(".btn-notice").one("click",a),setTimeout(function(){a()},1e3)):location.href=MI.GLOBAL_CONFIG.staticSite+"/cart/":alert(t.msg)}),!1)}));var s=r.page[i.page],n=r.api[i.type];o(a,s,n),t.isFunction(t("body").linkSign)&&a.linkSign({live:!0});var l=a.attr("id"),c="re-"+s+"."+n;t.force_appear(),a.appear(),a.one("appear",function(){"undefined"!=typeof _msq&&_msq.push(["trackPanelShow",l,c])})}function o(a,e,i){var o=a.find("a");t.each(o,function(a,o){var s,n=t(o).attr("data-stat-index"),r=c(t(o).attr("data-stat-text")),l=t(o).attr("data-stat-method"),d=t(o).attr("data-stat-addcart");s=d?"stat_"+e+d+"."+i+"_"+n+"_"+l:"stat_"+e+"."+i+"_"+n+"_"+l,t(o).attr({"data-stat-pid":s,"data-stat-aid":r})})}var s,n={cid:2,type:1,gid:"1152300005",title:"",showMin:5,apiHost:["//rec.www.mi.com/alsoview/get","//rec.www.mi.com/alsobuy/get","//rec.www.mi.com/guesslike/get","//rec.www.mi.com/cartbuy/get","//rec.www.mi.com/viewlist/get"],page:"Cart",iHost:"//i1.mifile.cn/a1/",isBuy:!1,useCarousel:!0,carouselControl:!1,carouselPage:!0,callback:null},r={page:{Home:"首页",ItemTail:"单品页底部",ComAll:"全部评论页",ComSuc:"评论成功页",AskAll:"全部提问页",AskDetail:"提问详情页",List:"列表页",Cart:"购物车",CartSuc:"加购成功",Saleoff:"下架页",Search:"搜索页",ErrorTip:"报错页"},api:["看了还看","买了还买","猜你喜欢","购物车推荐","您还看了"]},l=["recommend_alsoview","recommend_alsobuy","recommend_guesslike","recommend_cart","recommend_history"],c=function(t){try{return t.replace(/\s/g,"")}catch(a){return t}};t.fn.miRecommend=function(e){s=t.extend(n,e),a(this)}}(jQuery)},function(t,a){!function(t){function a(){s=!1;for(var a=0,o=i.length;o>a;a++){var n=t(i[a]).filter(function(){return t(this).is(":appeared")});if(n.trigger("appear",[n]),e){var r=e.not(n);r.trigger("disappear",[r])}e=n}}var e,i=[],o=!1,s=!1,n={interval:250,force_process:!1},r=t(window);t.expr[":"].appeared=function(a){var e=t(a);if(!e.is(":visible"))return!1;var i=r.scrollLeft(),o=r.scrollTop(),s=e.offset(),n=s.left,l=s.top;return l+e.height()>=o&&l-(e.data("appear-top-offset")||0)<=o+r.height()&&n+e.width()>=i&&n-(e.data("appear-left-offset")||0)<=i+r.width()?!0:!1},t.fn.extend({appear:function(e){var r=t.extend({},n,e||{}),l=this.selector||this;if(!o){var c=function(){s||(s=!0,setTimeout(a,r.interval))};t(window).scroll(c).resize(c),o=!0}return r.force_process&&setTimeout(a,r.interval),i.push(l),t(l)}}),t.extend({force_appear:function(){return o?(a(),!0):!1}})}(jQuery)},function(t,a){t.exports=function(t){var a="";t.title&&(a+='<h2 class="xm-recommend-title"><span>'+t.title+"</span></h2>"),a+='<div class="xm-recommend"><ul class="',a+=3!==t.type&&t.useCarousel?"xm-carousel-col-5-list xm-carousel-list clearfix":"row",a+='" data-carousel-list="true">';var e=t.r;if(e)for(var i,o=-1,s=e.length-1;s>o;)i=e[o+=1],a+=' <li class="J_xm-recommend-list',3!==t.type&&t.useCarousel||(a+=" span4"),a+='"> ',i.ext&&i.ext.img&&i.ext.url?a+=' <a target="_blank" href="'+i.ext.url+'" data-stat-gid="'+i.g+'" data-stat-method="'+t.v+"_"+i.a+'" data-stat-index='+o+' data-stat-text="'+i.n+'"> <img src="'+i.ext.img+'" width="100%" height="300px" alt="'+i.n+'"> </a> ':(a+=' <dl> <dt> <a href="'+t.global.itemSite+"/"+i.c+'.html" data-stat-method="'+t.v+"_"+i.a+'" data-stat-index='+o+' data-stat-text="'+i.n+'" target="_blank"> <img src="'+t.iHost+i.i+'?width=140&height=140" srcset="'+t.iHost+i.i+'?width=280&height=280 2x" alt="'+i.n+'" /> </a> </dt> <dd class="xm-recommend-name"> <a href="'+t.global.itemSite+"/"+i.c+'.html" data-stat-method="'+t.v+"_"+i.a+'" data-stat-index='+o+' data-stat-text="'+i.n+'" target="_blank"> '+i.n+' </a> </dd> <dd class="xm-recommend-price">'+i.p+'元</dd> <dd class="xm-recommend-tips"> ',i.l&&4!==t.type&&(a+=" ",parseInt(i.l)>0&&(a+=" "+i.l+"人好评 "),a+=" "),a+=" ",t.isBuy===!0&&(a+=' <a href="'+t.global.cartSite+"/cart/add/"+i.g+'-0-1" data-stat-gid="'+i.g+'" data-stat-method="'+t.v+"_"+i.a+'" data-stat-index='+o+' data-stat-text="'+i.n+'" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn">加入购物车</a> '),a+=' </dd> <dd class="xm-recommend-notice"></dd> </dl> '),a+=" </li>";return a+="</ul></div>"}}]);