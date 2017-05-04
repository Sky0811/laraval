<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script type="text/javascript" async="" src="{{ asset('Home/address/js/unjcV2.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/address/js/mstr.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/address/js/jquery.js') }}"></script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>我的收货地址</title>
<meta name="viewport" content="width=1226">
<meta name="description" content="">
<meta name="keywords" content="小米商城">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('/Home/address/css/base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/Home/address/css/main.css') }}">
<script type="text/javascript" async="" src="{{ asset('Home/address/js/xmst.js') }}"></script>
<script src="{{ asset('Home/address/js/userInfoJsonP.htm') }}" type="text/javascript" async=""></script>
<script type="text/javascript" async="" src="{{ asset('Home/address/Hjs/xmst.js')}}"></script>
<script type="text/javascript" src="{{ asset('Home/address/js/jquery-1.8.3.min.js') }}"></script>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a href="http://www.mi.com/index.html" data-stat-id="6f0a3b95eadabb0b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6f0a3b95eadabb0b', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a href="http://www.miui.com/" target="_blank" data-stat-id="984415c52166fcfe" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-984415c52166fcfe', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a href="http://www.miliao.com/" target="_blank" data-stat-id="e410441a5e1ca6be" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-e410441a5e1ca6be', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a href="http://game.xiaomi.com/" target="_blank" data-stat-id="64da11583a8f5aa4" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-64da11583a8f5aa4', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span><a href="http://www.duokan.com/" target="_blank" data-stat-id="5b2b825f6e9aefc2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-5b2b825f6e9aefc2', 'http://www.duokan.com/', 'pcpid', '']);">多看阅读</a><span class="sep">|</span><a href="https://i.mi.com/" target="_blank" data-stat-id="5486ff78dab46903" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-5486ff78dab46903', 'https://i.mi.com/', 'pcpid', '']);">云服务</a><span class="sep">|</span><a href="https://jr.mi.com/?from=micom" target="_blank" data-stat-id="b01b6c796ff60459" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b01b6c796ff60459', 'https://jr.mi.com', 'pcpid', '']);">金融</a><span class="sep">|</span><a href="http://www.mi.com/appdownload/" target="_blank" data-stat-id="97dfda3cb657e7a8" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-97dfda3cb657e7a8', '//www.mi.com/appdownload/', 'pcpid', '']);">小米商城移动版</a><span class="sep">|</span><a href="http://static.mi.com/feedback/" target="_blank" data-stat-id="690537f5005b8ead" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-690537f5005b8ead', '//static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span><a href="#J_modal-globalSites" data-toggle="modal" data-stat-id="37f0c0ecc5cd1c51" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-37f0c0ecc5cd1c51', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
        </div>
        <div class="topbar-cart topbar-cart-filled" id="J_miniCartTrigger">
            <a class="cart-mini" id="J_miniCartBtn" href="http://static.mi.com/cart/" data-stat-id="7bd5122999acc5f3" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-7bd5122999acc5f3', '//static.mi.com/cart/', 'pcpid', '']);"><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum">（13）</span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="http://my.mi.com/portal" target="_blank"><span class="name">1249847722</span><i class="iconfont"></i></a><ul class="user-menu"><li><a rel="nofollow" href="http://my.mi.com/portal" target="_blank">个人中心</a></li><li><a rel="nofollow" href="http://order.mi.com/user/comment" target="_blank">评价晒单</a></li><li><a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank">我的喜欢</a></li><li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank">小米账户</a></li><li><a rel="nofollow" href="http://order.mi.com/site/logout">退出登录</a></li></ul></span><span class="sep">|</span><span class="message"><a rel="nofollow" href="http://order.mi.com/message/list">消息通知<i class="J_miMessageTotal"></i></a></span><span class="sep">|</span><a rel="nofollow" class="link link-order" href="http://static.mi.com/order/" target="_blank">我的订单</a></div>
    </div>
</div>

<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="http://www.mi.com/index.html" title="小米官网" data-stat-id="f4006c1551f77f22" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid', '']);">小米官网</a>
                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="http://list.mi.com/" data-stat-id="d7d79a744cdeefa8" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d7d79a744cdeefa8', '//list.mi.com', 'pcpid', '']);"><span class="text">全部商品分类</span></a>
                <div class="site-category"> <ul id="J_categoryList" class="site-category-list clearfix">  <li class="category-item"> <a class="title" href="http://www.mi.com/buyphone/">手机 电话卡<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5c/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/5c_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/5c_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5c</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5c">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/minote2/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xmNOTE2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xmNOTE2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米Note 2</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/minote2">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mix/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/MIX-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米MIX</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mix">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5s"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5s">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5splus/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-plus-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-plus-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s Plus</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5splus">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5">选购</a> </li></ul><ul class="children-list children-list-col children-list-col-2"><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4x/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redminote4x">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hmnote4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hmnote4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/note4/">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4x/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4x">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4a/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4A-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4A-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4A</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000039.html">选购</a> </li><li> <a class="link" href="http://www.mi.com/compare/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/compare.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">对比手机</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mimobile/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mimobile.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动 电话卡</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/mibookair/">笔记本 平板<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li class="star-goods"> <a class="link" href="http://www.mi.com/mibookair/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本Air</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buymibook/air">选购</a> </li>  <li class="star-goods"> <a class="link" href="http://www.mi.com/mipad3/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米平板3</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000038.html">选购</a> </li>  <li> <a class="link" href="http://item.mi.com/1163000011.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/usbzjqggg80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/usbzjqggg140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">USB-C转接器</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/accessories/tag?id=neidanbao"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/neidanbao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/meidanbao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本内胆包</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米便携鼠标</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse-2/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无线鼠标</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/buytv/">电视 盒子<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/mitv4A/43/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_43.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_43.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 43英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/49/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_49.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_49.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 49英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/55/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_55.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_55.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 55英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/65/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/xp80_65.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/xp140_65.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/48/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mitv3s48.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mitv3s48.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 48英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/55/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/553s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/553s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 55英寸</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/mitv3s/60/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/018080.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/01140140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65flat/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/653s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/653s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/6580side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/65140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸 曲面</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv60.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv60.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/70/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv70.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv701.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 70英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibox3s/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3s</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mibox3c/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3c</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezi3s/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezizengqiangban80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezizengqiang140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3 增强版</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezimini/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezimini.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezimini.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子 mini</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154100018.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/diyinpao.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/diyinpao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米低音炮</span></a>  </li><li> <a class="link" href="http://www.mi.com/shb/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/shb.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/shb.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">蓝牙手柄</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=yinxiang"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/80x80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140x140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">家庭音响</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://list.mi.com/tvboxpj"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianshipeijian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianshipeijian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电视盒子配件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/smart/">路由器 智能硬件<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://list.mi.com/174"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家扫地机器人及配件</span></a>  </li><li> <a class="link" href="http://www.mi.com/mivr/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米VR眼镜</span></a>  </li><li> <a class="link" href="http://www.mi.com/miwifi3/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米路由器</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/list/scooter.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/scooter.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">九号平衡车</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibicycle/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zxc80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zxc140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电助力折叠自行车</span></a>  </li><li> <a class="link" href="http://www.mi.com/kettle/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shuihu80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shuihu140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家恒温电水壶</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/carair/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家车载空气净化器</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shoubiao"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手表</span></a>  </li><li> <a class="link" href="http://www.mi.com/dianfanbao/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家智能电饭煲</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shexiangji"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能摄像机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=jinghuaqilvxin"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净化器及滤芯</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=water"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净水器及滤芯</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/tag?id=xueyaji"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">血压计</span></a>  </li><li> <a class="link" href="http://www.mi.com/toyblock/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/jiqiren80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/jiqiren140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔积木机器人</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=smartlamp"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能灯</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitu/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔智能故事机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/smartsuit"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能家庭组合</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/shouhuan"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shouhuan280.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shouhuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手环及配件</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://www.mi.com/scale/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/scale.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/scale.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">体重秤 / 体脂秤</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter2/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电动滑板车</span></a>  </li><li> <a class="link" href="http://www.mi.com/miuav/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无人机</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-carcorder/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jly80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jly140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家行车记录仪</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-interphone/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米家对讲机</span></a>  </li><li> <a class="link" href="http://list.mi.com/26?cfrom=search"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">全部智能硬件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/accessories/tag?id=dianyuancunchu">移动电源 电池 插线板<i class="iconfont"></i></a> <div class="children clearfix children-col-2"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/dianyuan/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan280.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=powerstrip"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb343.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb344.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">插线板</span></a>  </li><li> <a class="link" href="http://list.mi.com/13"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/yidongdianyuan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pinpaidianyuan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/dyfj"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuanfujian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianyuanfujian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">移动电源附件</span></a>  </li><li> <a class="link" href="http://list.mi.com/15"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">充电器</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154300033.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/5Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/5Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹5号电池</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://item.mi.com/1155000010.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/7Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹7号电池</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/17">耳机 音箱<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/headphone/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/toudai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/toudai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米头戴式耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/headphone2/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">头戴式耳机轻松版</span></a>  </li><li> <a class="link" href="http://www.mi.com/earphonepro/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机 Pro</span></a>  </li><li> <a class="link" href="http://www.mi.com/quantie/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/quantie.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/quantie.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/capsuleearphone/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/jiaonang80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/jiaonang140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米胶囊耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/huosai3/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huosai1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huosai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米活塞耳机清新版</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/bluetooth-earphone/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/bluetoothheadset.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/bluetoothheadset.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/sportearphone/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/yundong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/yundong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米运动蓝牙耳机</span></a>  </li><li> <a class="link" href="http://list.mi.com/18"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/pinpai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/wifispeaker/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米网络音响</span></a>  </li><li> <a class="link" href="http://www.mi.com/pocketaudio/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pocketaudio.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pocketaudio.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/littleaudio/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米随身蓝牙音箱</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/yinxiang/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-160.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小钢炮音箱 2</span></a>  </li><li> <a class="link" href="http://www.mi.com/bluetooth-speaker/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子蓝牙音箱2</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154400010.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/fanghezi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/fanghezi.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/alarmclock/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米音乐闹钟</span></a>  </li><li> <a class="link" href="http://item.mi.com/1163100008.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米兔音箱</span></a>  </li><li> <a class="link" href="http://item.mi.com/1164900007.html"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/chechong1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/chechong.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">音乐蓝牙车充</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/7">保护套 贴膜<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/9"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tiemo.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">贴膜</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/8"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/baohutao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">保护套/保护壳</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/1">线材 支架 存储卡<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/16"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/xiancai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/xiancai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">线材</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zipaigan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zipaigan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">自拍杆</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/5"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhijia.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhijia.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手机支架</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/27"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/cunchu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/cunchu.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">存储卡</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/134">箱包 服饰 鞋<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/23"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">箱包</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/lvxingxiang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">90分旅行箱</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/22"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">服饰</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家运动鞋 智能版</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/20">米兔 生活周边<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://mitu.mi.com/"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔玩偶</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/59"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">鼠标垫</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/24"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhoubian1.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">生活周边</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/zazhi/index.html?1021"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">《小米》会刊</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%9C%80%E7%94%9F%E6%B4%BB"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">毛巾/浴巾</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E4%B9%B3%E8%83%B6%E6%9E%95"><img class="thumb" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">8H乳胶枕</span></a>  </li>  </ul> </div> </li>  </ul></div></li>
                            <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="a9318c5014b7997f" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a9318c5014b7997f', 'javascript:void0', 'pcpid', '']);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5c/" data-stat-id="601ee425ed347afd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-601ee425ed347afd', '//www.mi.com/mi5c/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png 2x" alt="小米手机5c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5c/" data-stat-id="94c51d3d18c0094e" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-94c51d3d18c0094e', '//www.mi.com/mi5c/', 'pcpid', '']);">小米手机5c</a></div>
                                    <p class="price">1499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/minote2/" data-stat-id="2363ab38887c8938" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-2363ab38887c8938', 'http://www.mi.com/minote2/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!320x220.jpg 2x" alt="小米Note 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/minote2/" data-stat-id="cb4732f11618bea9" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-cb4732f11618bea9', 'http://www.mi.com/minote2/', 'pcpid', '']);">小米Note 2</a></div>
                                    <p class="price">2799元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mix/" data-stat-id="56cc27dcdc1aa1d7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-56cc27dcdc1aa1d7', 'http://www.mi.com/mix/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/MIX-320-220!320x220.jpg 2x" alt="小米MIX" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mix/" data-stat-id="f447a32155951f85" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f447a32155951f85', 'http://www.mi.com/mix/', 'pcpid', '']);">小米MIX</a></div>
                                    <p class="price">3499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5s" data-stat-id="ff134bca9c8124a5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ff134bca9c8124a5', 'http://www.mi.com/mi5s', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!320x220.jpg 2x" alt="小米5s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5s" data-stat-id="27f9690961768228" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-27f9690961768228', 'http://www.mi.com/mi5s', 'pcpid', '']);">小米5s</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5splus/" data-stat-id="85d8cdea58971d01" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-85d8cdea58971d01', 'http://www.mi.com/mi5splus/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/5spluse320_220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/5spluse320_220!320x220.jpg 2x" alt="小米5s Plus" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5splus/" data-stat-id="4bb8ae74886eb284" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4bb8ae74886eb284', 'http://www.mi.com/mi5splus/', 'pcpid', '']);">小米5s Plus</a></div>
                                    <p class="price">2299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5/" data-stat-id="1c2a9e9f6beb7a2a" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-1c2a9e9f6beb7a2a', '//www.mi.com/mi5/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5/" data-stat-id="6da0badec0155110" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6da0badec0155110', '//www.mi.com/mi5/', 'pcpid', '']);">小米手机5</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="f896375cba89aa73" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f896375cba89aa73', 'javascript:void0', 'pcpid', '']);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4x/" data-stat-id="dc37fbccddd914c0" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-dc37fbccddd914c0', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!320x220.jpg 2x" alt="红米Note 4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4x/" data-stat-id="6783fa2e7e0592d9" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6783fa2e7e0592d9', '//www.mi.com/redminote4x/', 'pcpid', '']);">红米Note 4X</a></div>
                                    <p class="price">999元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4/" data-stat-id="f644150af3f5a524" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f644150af3f5a524', 'http://www.mi.com/redminote4/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/doodle/hongminote4!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/doodle/hongminote4!320x220.jpg 2x" alt="红米Note 4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4/" data-stat-id="e2bd8dc6ad65dba0" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-e2bd8dc6ad65dba0', 'http://www.mi.com/redminote4/', 'pcpid', '']);">红米Note 4</a></div>
                                    <p class="price">999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4x/" data-stat-id="c5f26ed13ba65625" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c5f26ed13ba65625', '//www.mi.com/redmi4x/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!320x220.jpg 2x" alt="红米4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4x/" data-stat-id="32fd622638ec7326" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-32fd622638ec7326', '//www.mi.com/redmi4x/', 'pcpid', '']);">红米4X</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4a/" data-stat-id="f704a959daa18a11" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f704a959daa18a11', 'http://www.mi.com/redmi4a/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png 2x" alt="红米4A" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4a/" data-stat-id="a2f13b5a1b474cb4" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a2f13b5a1b474cb4', 'http://www.mi.com/redmi4a/', 'pcpid', '']);">红米4A</a></div>
                                    <p class="price">599元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4" data-stat-id="cc40e3b07b832a7e" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-cc40e3b07b832a7e', 'http://www.mi.com/redmi4', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/320-2202!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/320-2202!320x220.jpg 2x" alt="红米4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4" data-stat-id="94e511035daf9688" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-94e511035daf9688', 'http://www.mi.com/redmi4', 'pcpid', '']);">红米4</a></div>
                                    <p class="price">799元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b7469322dd753dc5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b7469322dd753dc5', 'javascript:void0', 'pcpid', '']);"><span class="text">平板 · 笔记本</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mipad3/" data-stat-id="3d1bb4d72fde3e12" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-3d1bb4d72fde3e12', '//www.mi.com/mipad3/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png 2x" alt="小米平板3 64GB" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mipad3/" data-stat-id="a3ede112480ddd53" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a3ede112480ddd53', '//www.mi.com/mipad3/', 'pcpid', '']);">小米平板3 64GB</a></div>
                                    <p class="price">1499元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="4a5203d2feb9ce64" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4a5203d2feb9ce64', 'http://www.mi.com/mibookair/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg 2x" alt="小米笔记本Air 12.5" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="4913b5bec120e611" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4913b5bec120e611', 'http://www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 12.5"</a></div>
                                    <p class="price">3599元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="4a5203d2feb9ce64" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4a5203d2feb9ce64', 'http://www.mi.com/mibookair/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="9b585c9f3acef2dc" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9b585c9f3acef2dc', 'http://www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3"</a></div>
                                    <p class="price">4999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="a08ff892b17e19d2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a08ff892b17e19d2', '//www.mi.com/mibookair/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" 尊享版"="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="8bf584dd077aef07" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8bf584dd077aef07', '//www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3" 尊享版</a></div>
                                    <p class="price">5999元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="8e9363cee7cea5b5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8e9363cee7cea5b5', 'javascript:void0', 'pcpid', '']);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/43/" data-stat-id="ddef9bc0f0c18c37" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ddef9bc0f0c18c37', '//www.mi.com/mitv4A/43/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png 2x" alt="小米电视4A 43英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/43/" data-stat-id="bb143b73ca7a0143" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-bb143b73ca7a0143', '//www.mi.com/mitv4A/43/', 'pcpid', '']);">小米电视4A 43英寸</a></div>
                                    <p class="price">2099元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/49/" data-stat-id="c9ed4ce4c86772c7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c9ed4ce4c86772c7', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png 2x" alt="小米电视4A 49英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/49/" data-stat-id="7543bb3e6d54dea3" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-7543bb3e6d54dea3', '//www.mi.com/mitv4A/49/', 'pcpid', '']);">小米电视4A 49英寸</a></div>
                                    <p class="price">2599元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/55/" data-stat-id="a86ac88dbedcf862" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a86ac88dbedcf862', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png 2x" alt="小米电视4A 55英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/55/" data-stat-id="3fe2a5ccfc3b4cd9" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-3fe2a5ccfc3b4cd9', '//www.mi.com/mitv4A/55/', 'pcpid', '']);">小米电视4A 55英寸</a></div>
                                    <p class="price">3199元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/65/" data-stat-id="b9e62c2795012149" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b9e62c2795012149', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png 2x" alt="小米电视4A 65英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/65/" data-stat-id="b7adb88b23921d5b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b7adb88b23921d5b', '//www.mi.com/mitv4A/65/', 'pcpid', '']);">小米电视4A 65英寸</a></div>
                                    <p class="price">5699元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv3s/60/" data-stat-id="0aac7cfd93e9417b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-0aac7cfd93e9417b', 'http://www.mi.com/mitv3s/60/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png 2x" alt="小米电视3s 60英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv3s/60/" data-stat-id="92b1616159993bde" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-92b1616159993bde', 'http://www.mi.com/mitv3s/60/', 'pcpid', '']);">小米电视3s 60英寸</a></div>
                                    <p class="price">4799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/buytv/" data-stat-id="e9805dd2ed58ef84" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-e9805dd2ed58ef84', 'http://www.mi.com/buytv/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png 2x" alt="查看全部&lt;br/&gt;小米电视" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/buytv/" data-stat-id="42f79b569bcad639" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-42f79b569bcad639', 'http://www.mi.com/buytv/', 'pcpid', '']);">查看全部<br>小米电视</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="764a30c3f697a814" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-764a30c3f697a814', 'javascript:void0', 'pcpid', '']);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3s/" data-stat-id="f3407643bc80b176" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f3407643bc80b176', '//www.mi.com/mibox3s/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3s/" data-stat-id="28a968db4b7f0482" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-28a968db4b7f0482', '//www.mi.com/mibox3s/', 'pcpid', '']);">小米盒子3s</a></div>
                                    <p class="price">299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3c/" data-stat-id="a6e8d1b6b7b8f0db" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a6e8d1b6b7b8f0db', 'http://www.mi.com/mibox3c/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3c/" data-stat-id="de1fd8d182460bd7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-de1fd8d182460bd7', 'http://www.mi.com/mibox3c/', 'pcpid', '']);">小米盒子3c</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezi3s/" data-stat-id="32a01e59d20f9fa7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-32a01e59d20f9fa7', '//www.mi.com/hezi3s/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezi3s/" data-stat-id="9c415465c2aba107" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9c415465c2aba107', '//www.mi.com/hezi3s/', 'pcpid', '']);">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezimini/" data-stat-id="695730e7d5d4d4ee" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-695730e7d5d4d4ee', '//www.mi.com/hezimini/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezimini/" data-stat-id="3e1af0ebc91192a6" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-3e1af0ebc91192a6', '//www.mi.com/hezimini/', 'pcpid', '']);">小米盒子mini版</a></div>
                                    <p class="price">179元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/misurround/" data-stat-id="526e48171ce3082a" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-526e48171ce3082a', '//www.mi.com/misurround/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png 2x" alt="小米家庭影院" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/misurround/" data-stat-id="d6bcb42cdabcdc8c" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d6bcb42cdabcdc8c', '//www.mi.com/misurround/', 'pcpid', '']);">小米家庭影院</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1160800074.html" data-stat-id="102cede91d10b78c" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-102cede91d10b78c', '//item.mi.com/1160800074.html', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1160800074.html" data-stat-id="9d7925dc3e0008d1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9d7925dc3e0008d1', '//item.mi.com/1160800074.html', 'pcpid', '']);">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b4d066d2f9a3bd16" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b4d066d2f9a3bd16', 'javascript:void0', 'pcpid', '']);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="4bb813fe356e8658" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4bb813fe356e8658', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png 2x" alt="小米路由器 HD" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="d1024ed229352ee5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d1024ed229352ee5', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 HD</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="815dac7efc8379b7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-815dac7efc8379b7', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png 2x" alt="小米路由器 Pro" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="f37031db00692dbf" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f37031db00692dbf', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 Pro</a></div>
                                    <p class="price">499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3/" data-stat-id="8b371a9da0ece570" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8b371a9da0ece570', '//www.mi.com/miwifi3/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png 2x" alt="小米路由器 3" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3/" data-stat-id="5d3ef0735d93f5f5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-5d3ef0735d93f5f5', '//www.mi.com/miwifi3/', 'pcpid', '']);">小米路由器 3</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3c/" data-stat-id="9b87aa1b571fc3e9" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9b87aa1b571fc3e9', '//www.mi.com/miwifi3c/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png 2x" alt="小米路由器 3C" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3c/" data-stat-id="faf413cd200ccbd8" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-faf413cd200ccbd8', '//www.mi.com/miwifi3c/', 'pcpid', '']);">小米路由器 3C</a></div>
                                    <p class="price">99元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/plc/" data-stat-id="706b9f9844cf0e95" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-706b9f9844cf0e95', '//www.mi.com/plc/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png 2x" alt="小米WiFi电力猫" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/plc/" data-stat-id="51a6cd5366b156a7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-51a6cd5366b156a7', '//www.mi.com/plc/', 'pcpid', '']);">小米WiFi电力猫</a></div>
                                    <p class="price">249元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1164700010.html" data-stat-id="cd09f4e4166fbd86" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-cd09f4e4166fbd86', '//item.mi.com/1164700010.html', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!320x220.jpg 2x" alt="小米WiFi放大器 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1164700010.html" data-stat-id="a8ef42080b760a7b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a8ef42080b760a7b', '//item.mi.com/1164700010.html', 'pcpid', '']);">小米WiFi放大器 2</a></div>
                                    <p class="price">49元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:void(0);" data-stat-id="9fbb41fbadfac4d7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9fbb41fbadfac4d7', 'javascript:void0', 'pcpid', '']);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/scale2/" data-stat-id="dda2eaaec20ad0cc" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-dda2eaaec20ad0cc', '//www.mi.com/scale2/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!320x220.jpg 2x" alt="小米体脂秤" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/scale2/" data-stat-id="0c6d80def31446ff" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-0c6d80def31446ff', '//www.mi.com/scale2/', 'pcpid', '']);">小米体脂秤</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-carcorder/" data-stat-id="ca024d2151e58ef2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ca024d2151e58ef2', '//www.mi.com/mj-carcorder/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!320x220.jpg 2x" alt="米家行车记录仪" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-carcorder/" data-stat-id="ef74a182640edfdb" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ef74a182640edfdb', '//www.mi.com/mj-carcorder/', 'pcpid', '']);">米家行车记录仪</a></div>
                                    <p class="price">349元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miuav/" data-stat-id="138672f827512663" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-138672f827512663', 'http://www.mi.com/miuav/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png 2x" alt="小米无人机 4k 版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miuav/" data-stat-id="d58a7c422b5115c1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d58a7c422b5115c1', 'http://www.mi.com/miuav/', 'pcpid', '']);">小米无人机 4k 版</a></div>
                                    <p class="price">2999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-interphone/" data-stat-id="2d4f649120f68e54" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-2d4f649120f68e54', '//www.mi.com/mj-interphone/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!320x220.jpg 2x" alt="小米米家对讲机" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-interphone/" data-stat-id="cbcd0122b61cad98" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-cbcd0122b61cad98', '//www.mi.com/mj-interphone/', 'pcpid', '']);">小米米家对讲机</a></div>
                                    <p class="price">249元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/dianfanbao2/" data-stat-id="4700d369493de286" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4700d369493de286', '//www.mi.com/dianfanbao2/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!320x220.jpg 2x" alt="米家IH电饭煲" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/dianfanbao2/" data-stat-id="8998e99daf641e5c" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8998e99daf641e5c', '//www.mi.com/dianfanbao2/', 'pcpid', '']);">米家IH电饭煲</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/smart/" data-stat-id="03c1c541d27a9a24" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-03c1c541d27a9a24', '//www.mi.com/smart/', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="查看全部&lt;br/&gt;智能硬件" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/smart/" data-stat-id="9c5992491965e45b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9c5992491965e45b', '//www.mi.com/smart/', 'pcpid', '']);">查看全部<br>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="http://www.mi.com/service/" target="_blank" data-stat-id="59049922b2b5c11c" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-59049922b2b5c11c', '//www.mi.com/service/', 'pcpid', '']);"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                    <a class="link" href="http://www.xiaomi.cn/" target="_blank" data-stat-id="359ee71e873842fd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-359ee71e873842fd', 'http://www.xiaomi.cn', 'pcpid', '']);"><span class="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米5s&nbsp;Plus','Rst':5},{'Key':'小米MIX','Rst':1},{'Key':'手环','Rst':6},{'Key':'红米Note&nbsp;4x','Rst':4},{'Key':'小米路由器','Rst':10},{'Key':'移动电源','Rst':16},{'Key':'米家摄像机','Rst':5},{'Key':'小米体重秤','Rst':2},{'Key':'LED灯','Rst':6},{'Key':'优惠套装','Rst':64}]}" type="search">
                <input class="search-btn iconfont" value="" type="submit">
                <div class="search-hot-words">
                    <a href="http://www.mi.com/redmi4x/" data-stat-id="6289c445ab424b25" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6289c445ab424b25', 'http://www.mi.com/redmi4x/', 'pcpid', '']);">红米 4X</a><a href="http://www.mi.com/redminote4/" data-stat-id="d8a304cc48e87a0a" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d8a304cc48e87a0a', 'http://www.mi.com/redminote4/', 'pcpid', '']);">红米Note4</a>                </div>
            <div id="J_keywordList" class="keyword-list hide"><ul class="result-list"></ul></div></form>
        </div>
    </div>
<div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div></div>


<div class="breadcrumbs">
    <div class="container">
        <a href="http://www.mi.com/index.html" data-stat-id="b0bcd814768c68cc" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b0bcd814768c68cc', '//www.mi.com/index.html', 'pcpid', '']);">首页</a><span class="sep">&gt;</span><span>收货地址</span>    </div>
</div>

<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                                        <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="http://static.mi.com/order/" data-stat-id="8f3d1bffd166dc22" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8f3d1bffd166dc22', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a></li>
                                
                                
                                <li><a href="http://order.mi.com/user/comment?filter=1&amp;r=95370.1492150425" data-count="comment" data-count-style="bracket" data-stat-id="20db2c68bfa9e4a5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-20db2c68bfa9e4a5', 'http://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a></li>
                               
                             
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="http://order.mi.com/portal?r=95370.1492150425" data-stat-id="00e076c95d370478" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-00e076c95d370478', 'http://order.mi.com/portal', 'pcpid', '']);">我的个人中心</a></li>
                                <li><a href="http://order.mi.com/message/list?r=95370.1492150425" data-stat-id="33b15449518ae3ec" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-33b15449518ae3ec', 'http://order.mi.com/message/list', 'pcpid', '']);">消息通知<i class="J_miMessageTotal"></i></a></li>
                               
                                
                                <li><a href="http://order.mi.com/user/favorite?r=95370.1492150425" data-stat-id="0c25ea23fee92211" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-0c25ea23fee92211', 'http://order.mi.com/user/favorite', 'pcpid', '']);">喜欢的商品</a></li>
                                
                                <li class="active"><a href="http://order.mi.com/user/address?r=95370.1492150425" data-stat-id="48ecd23c6e6e50ba" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-48ecd23c6e6e50ba', 'http://order.mi.com/user/address', 'pcpid', '']);">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="https://account.xiaomi.com/" target="_blank" data-stat-id="35eef2fd7467d6ca" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-35eef2fd7467d6ca', 'https://account.xiaomi.com/', 'pcpid', '']);">个人信息</a></li>
                                <li><a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank" data-stat-id="ae5ee0188510f1e6" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ae5ee0188510f1e6', 'https://account.xiaomi.com/pass/auth/security/home#service=setPassword', 'pcpid', '']);">修改密码</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="span16">
    <div class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">收货地址</h1>
                @if(session('msg'))
                        <div style="font-size:20px;color:red;background:#fff;">
                        <center>
                        {{ session('msg') }}
                        </center>
                        </div>
                @endif
            </div>
            <div class="box-bd">
             <form action="/home2/address" method="post" name="myform">
                           {{ csrf_field() }}
                          	{{ method_field('DELETE') }}</form>
                <div class="user-address-list J_addressList clearfix">
                 @foreach($ob as $v)
					
                    <div class="address-item J_addressItem">
                        <dl>
                            <dt>{{ $v->Address_consignee }}
                            </dt>
                            <dd class="utel">{{ $v->Address_consignee_phone }}</dd>
                            <dd class="uaddress">{{ $v->Address_province }} {{ $v->Address_city }} {{ $v->Address_county }} <br>{{ $v->Address_detail }} </dd>
                        </dl>
                        <div class="actions">
                          <!--   <a class="modify J_addressModify" id="edit-addr" href="javascript:void(0);">修改</a> -->  
                          <form action="" method="post" >
                              {{ csrf_field() }}
                              
                          </form>
<script type="text/javascript">
	
	
</script>
							@if($v->Address_default == 1)
                            <a class="modify J_addressDel" href="/home2/address/defaut/{{ $v->Address_id }}">设为默认地址</a> 
							@endif
                            @if($v->Address_default == 2)
                            <a class="modify J_addressDel" href="/home2/address/fal/{{ $v->Address_id }}">取消默认地址</a> 
                            @endif

							<a class="modify J_addressDel" href="/home2/address/{{ $v->Address_id }}/edit">修改</a> 
                            @if($v->Address_default == 1)
                            <a class="modify J_addressDel" href="javascript:doDel({{$v->Address_id}})">删除</a>
                            @endif 
                            
                            
                        </div>
                     </div>
                     @endforeach
<script type="text/javascript">
function doDel(id){
			//alert(id);
	if(confirm('确定删除吗？')){
		var form = document.myform;
		form.action = '/home2/address/'+id;
		form.submit();
	}
}
</script>
                    <div class="address-item address-item-new" data-type="" id="J_newAddress">
                        <i class="iconfont" id="icon"></i>
                        添加新地址
                    </div>
                    <script>
                        
                    </script>
                    <!-- position:absolute;left:8px;top:-40px;z-index:100;background:#f5f5f5 -->
                   </div>
							
                   <div id="address_form" style="width:300px;display:none;background:#f5f5f5;border:1px solid #e0e0e0;">                        
                      <div style="background:#f5f5f5;border:1px solid #e0e0e0;width:270px;">
                     


<!--遮罩层form表单-->
<div style="width:280px;margin-left:20px;margin-top:5px;">  
  
    
   <form action="" method="post">
    {{ csrf_field() }}
		
   
    <div style="width:250px;margin-left:7px;margin-bottom:5px;">
      姓&nbsp;&nbsp;&nbsp;名:<input id="user_name" name="Address_consignee" placeholder="收货人姓名" type="text">
      </div>
      <div style="width:250px;margin-left:5px;margin-bottom:5px;">
      手机号:<input  id="user_phone" name="Address_consignee_phone" placeholder="11位手机号" type="text">
      </div>
      <div style="width:250px;margin-left:5px;margin-bottom:5px;">
      请选择:<select id='cid' name='city[]' style="width:162px;">
                <option>--请选择--</option>
             </select>
      </div>
     
      <div>
      
        <div style="width:220px;margin-bottom:5px;margin-right:10px;">
        <center style="font-size:15px;" >
          您的收货地址需要补全详细地址:          
          </center>
        </div>
        <div style="margin-bottom:5px;">
            <textarea name="Address_detail" style="width:220px;height:100px;resize:none;">
            </textarea>
        </div>
      </div>
      <div style="margin-left:0px;margin-bottom:5px;">
      <button id="A_save" style="margin-left:3px;width:100px;background:#f67000">保存</button>
      <button id="A_cancel" style="margin-left:15px;width:100px;background:#b0b0b0;">取消</button>
</div> 
     </form>
     
   
    
  </div>
 

</div>
</div>

            </div>
        </div>
    </div>
</div>

<div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
    <div class="modal-body">
        <iframe width="100%" frameborder="0" height="100%"></iframe>
    </div>
</div>
        </div>
    </div>
</div>
<script type="text/javascript">
// var icon = document.getElementById('icon');
//     icon.onclick = function()
//     {
//         alert(11111111111);
//     }
$('.iconfont').click(function(){
  $('#address_form').attr('style','display:block');
    $.ajax({
        url:'{{ url("city.php") }}',
        type:'post',
        async:true,
        data:{upid:0,'_token':'{csrf_field()}'},
        dataType:'json',
        success:function(data)
        {
          //alert(data);
          //遍历从数据库查出来的数据，生成option选项追加到select里
          for (var i = 0; i < data.length; i++) {
            $('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
          };
        },
        error:function()
        {
          alert('ajax请求失败');
        }
      });

      //给所有的select标签绑定change事件
      $('select').live("change",function(){
        //干掉当前你选择的select标签后面的select标签
        $(this).nextAll('select').remove();
        //判断你选择是不是--请选择--
        if($(this).val() != '--请选择--'){
          //因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
          var ob = $(this);
          $.ajax({
            url:'{{ url("city.php") }}',
            type:'post',
            async:true,
            data:{upid:$(this).val(),'_token':'{csrf_field()}'},
            dataType:'json',
            success:function(data)
                    {
                        // console.log(data);
                        //判断是不是最后一级城市，最后一级城市查数据库length==0
                        if(data.length>0){
                            //生成一个新的select标签
                            var select = $("<select name='city[]'><option>--请选择--</option></select>");
                            //遍历从数据库查出来的数据，生成option选项追加到select里
                            for (var i = 0; i < data.length; i++) {
                                $(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
                            };
                            //外部插入到前一个selct后面
                            ob.after(select);
                        }
                    },
            error:function()
            {
              alert('ajax请求失败');
            }
          });
        }
      });
  });
$('#A_save').click(function(){
  $('#address_form').attr('style','display:none');
});
$('#A_cancel').click(function(){
  $('#address_form').attr('style','display:none');
  return false;
});

</script>

<script type="text/javascript">
 // $('#edit-addr').click(function()
 // 	{
 // 		$('this').
 // 	});   
    
  </script>

<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="http://www.mi.com/static/fast/" target="_blank" data-stat-id="46873828b7b782f4" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_blank" data-stat-id="78babcae8a619e26" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_blank" data-stat-id="d1745f68f8d2dad7" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_blank" data-stat-id="f1b5c2451cf73123" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="b57397dd7ad77a31" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/account/register/" target="_blank" data-stat-id="e5dad0738a41014f" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="8e128f473e680197" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="fd9e3532f60a2f8d" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/exchange" target="_blank" data-stat-id="8e282b6f669ba990" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/" target="_blank" data-stat-id="5f2408ab3c808aa2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid', '']);">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/" target="_blank" data-stat-id="18c340c920a278a1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid', '']);">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="b27b566974e4aa67" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="6dab396f7a873f15" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="9af5efe014c3aea2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about" target="_blank" data-stat-id="f6d386c65b1f4132" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid', '']);">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="4307a445f5592adb" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about/contact" target="_blank" data-stat-id="6842e821365ee45d" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid', '']);">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="4d561ee685cd2e15" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4d561ee685cd2e15', 'http://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_blank" data-stat-id="78fdefa9dee561b5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.htmlurl=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid', '']);">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="47539f6570f0da90" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-47539f6570f0da90', '#J_modalWeixin', 'pcpid', '']);">官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="http://order.mi.com/queue/f2code" target="_blank" data-stat-id="fdc16dd51892a164" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/giftcode/" target="_blank" data-stat-id="835607e3820935bb" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-835607e3820935bb', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_blank" data-stat-id="b08be6bd51351e1a" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="a7642f0a3475d686" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid', '']);"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p>小米旗下网站：<a href="http://www.mi.com/index.html" target="_blank" data-stat-id="b9017a4e9e9eefe3" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a href="http://www.miui.com/" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a href="http://www.miliao.com/" target="_blank" data-stat-id="826b32c1478a98d5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a href="http://www.duokan.com/" target="_blank" data-stat-id="c9d2af1ad828a834" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid', '']);">多看书城</a><span class="sep">|</span><a href="http://www.miwifi.com/" target="_blank" data-stat-id="96f1a8cecc909af2" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid', '']);">小米路由器</a><span class="sep">|</span><a href="http://call.mi.com/" target="_blank" data-stat-id="347f6dd0d8d9fda3" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid', '']);">视频电话</a><span class="sep">|</span><a href="http://xiaomi.tmall.com/" target="_blank" data-stat-id="dfe0fac59cfb15d9" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span><a href="http://shop115048570.taobao.com/" target="_blank" data-stat-id="c2613d0d3b77ddff" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid', '']);">小米淘宝直营店</a><span class="sep">|</span><a href="http://union.mi.com/" target="_blank" data-stat-id="2f48f953961c637d" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-2f48f953961c637d', 'http://union.mi.com/', 'pcpid', '']);">小米网盟</a><span class="sep">|</span><a href="http://www.mi.com/mimobile/" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f7ea7880c49b687e', '//www.mi.com/mimobile/', 'pcpid', '']);">小米移动</a><span class="sep">|</span><a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" data-stat-id="c7ef95929d60f3f1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c7ef95929d60f3f1', 'http://www.miui.com/res/doc/privacy/cn.html', 'pcpid', '']);">隐私政策</a><span class="sep">|</span><a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="9db137a8e0d5b3dd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>            </p>
            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-f96685804376361a', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="57efc92272d4336b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" data-stat-id="c5f81675b79eb130" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid', '']);">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="de920be99941f792" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-de920be99941f792', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/truste.png" alt="TRUSTe Privacy Certification"></a>
                    <a href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="d44905018f8d7096" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/v-logo-2.png" alt="诚信网站"></a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="3e1533699f264eac" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/v-logo-1.png" alt="可信网站"></a>
                    <a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="b085e50c7ec83104" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/v-logo-3.png" alt="网上交易保障中心"></a>
        
        </div>
    </div>
<div class="slogan ir">探索黑科技，小米为发烧而生</div></div>

<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-cfd3189b8a874ba4', '', 'pcpid', '']);"><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/site-weixin.png" width="680" height="340">
        </div>
    </div>
<!-- .modal-weixin END -->
<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
    <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span>
        <div class="con">
            <div class="title">正在排队，请稍候喔！</div>
            <div class="queue-tip-box">
                <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
                <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
                <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
                <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
                <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p>
            </div>
        </div>

        <div class="queue-posters">
            <div class="poster poster-3"></div>
            <div class="poster poster-2"></div>
            <div class="poster poster-1"></div>
            <div class="poster poster-4"></div>
            <div class="poster poster-5"></div>
        </div>
    </div>
</div>
<!-- .xm-dm-queue END -->
<div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
    <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont"></i></span>
    <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p>
            <a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="c148a4197491d5bd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c148a4197491d5bd', '', 'pcpid', '']);">重试</a>
        </p>
    </div>
</div>


<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
        <div class="modal-body">
            <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
             <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br>
    所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
            <div class="mode-loading" id="J_bigtapModeLoading">
                <img src="%E6%88%91%E7%9A%84%E6%94%B6%E8%B4%A7%E5%9C%B0%E5%9D%80_files/loading.gif" alt="" width="32" height="32">
                <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="ce9e5bb5b994ad55" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-ce9e5bb5b994ad55', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="7f083d6abed714f8" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-7f083d6abed714f8', '', 'pcpid', '']);">确认</a>
            </div>
        </div>
    </div>

<div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
        <div class="modal-body ">
            <div class="content clearfix">
                <span class="mitu"></span>
                <p class="title">很抱歉，人真是太多了<br>您晚了一步...</p>
            </div>

            <div class="bigtap-recomment-goods">
                <div class="hd"><span>这些产品也不错，而且有现货哦！</span></div>
                <ul class="clearfix" id="J_bigtapRecommentList"></ul>
            </div>
        </div>
    </div>
<!-- .xm-dm-error END -->
<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
   <div class="modal-hd">
        <a class="close" data-dismiss="modal" data-stat-id="d63900908fde14b1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d63900908fde14b1', '', 'pcpid', '']);"><i class="iconfont"></i></a>
        <span class="title">Select Region</span>
    </div>
    <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select your country or region</p>
        <p class="modal-globalSites-links clearfix">
            <a href="http://www.mi.com/index.html" data-stat-id="51fe807618ae85f4" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
            <a href="http://www.mi.com/hk/" data-stat-id="d8e4264197de1747" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
            <a href="http://www.mi.com/tw/" data-stat-id="8b54359fb6116e28" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
            <a href="http://www.mi.com/sg/" data-stat-id="e9c0506f7e4e7161" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
            <a href="http://www.mi.com/my/" data-stat-id="d6299ad30ec761a8" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
            <a href="http://www.mi.com/ph/" data-stat-id="22b601cf7b3ada84" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
            <a href="http://www.mi.com/in/" data-stat-id="441d26d4571e10dc" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid', '']);">India</a>
            <a href="http://www.mi.com/id/" data-stat-id="88ccf9755c488ec5" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
            <a href="http://br.mi.com/" data-stat-id="c41d871bf5ddcd95" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid', '']);">Brasil</a>
            <a href="http://www.mi.com/en/" data-stat-id="4426c5dac474df5f" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid', '']);">Global Home</a>
            <a href="http://www.mi.com/mena/" data-stat-id="261bb8cf155fb56b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid', '']);">MENA</a>
            <a href="http://www.mi.com/pl/" data-stat-id="2e3007e460f40ce3" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-2e3007e460f40ce3', 'http://www.mi.com/pl/', 'pcpid', '']);">Poland</a>
            <a href="http://www.mi.com/ua/" data-stat-id="de8d49aabd1eecdd" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-de8d49aabd1eecdd', 'http://www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
            <a href="http://www.mi.com/ru/" data-stat-id="886bf2568681dd6b" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-886bf2568681dd6b', 'http://www.mi.com/ru/', 'pcpid', '']);">Russia</a>
            <a href="http://www.mi.com/vn/" data-stat-id="b859ec9bcac672f1" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-b859ec9bcac672f1', 'http://www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
        </p>
    </div>
</div>
<!-- .modal-globalSites END -->

<!-- <script src="{{url('Home/address/js/base.js') }}"></script> -->
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: 'http://order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: 'http://tp.hd.mi.com/',
        damiaoGoodsId:[],
        logoutUrl: 'http://order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>

<script type="text/javascript" src="{{ asset('Home/address/js/address.js') }}"></script>
<script type="text/javascript" src="{{ asset('Home/address/js/user.js') }}"></script>

<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = "{{ asset('Home/address/js/xmst.js') }}";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>


</body></html>