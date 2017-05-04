<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script type="text/javascript" async="" src="{{ asset('Home/orderlist/js/unjcV2.js') }}"></script><script type="text/javascript" async="" src="{{ asset('Home/orderlist/js/mstr.js') }}"></script><script type="text/javascript" async="" src="{{ asset('Home/orderlist/js/jquery.js') }}"></script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<meta name='csrf-token' content="{{ csrf_token() }}">


<meta charset="UTF-8">
<title>我的订单 - 小米商城</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="search" title="mi.com" href="http://s1.mi.com/search.xml?v1.0" type="application/opensearchdescription+xml">
<meta http-equiv="Cache-Control" content="no-transform ">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="stylesheet" href="{{ url('Home/orderlist/css/base.css') }}"/>
<link rel="stylesheet" href="{{ url('Home/orderlist/css/main.css') }}"/>
<script type="text/javascript" async="" src="{{ url('Home/orderlist/js/xmst.js')}}"></script><script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script>
    var UA=navigator.userAgent;if(UA.match(/Android/i)||(UA.indexOf('iPhone')!=-1)||(UA.indexOf('iPod')!=-1)){window.location='http://m.mi.com/_/product/category';}
</script>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="http://www.mi.com/index.html" data-stat-id="6f0a3b95eadabb0b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6f0a3b95eadabb0b', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank" data-stat-id="984415c52166fcfe" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-984415c52166fcfe', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank" data-stat-id="e410441a5e1ca6be" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e410441a5e1ca6be', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://game.xiaomi.com/" target="_blank" data-stat-id="64da11583a8f5aa4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-64da11583a8f5aa4', 'http://game.xiaomi.com/', 'pcpid', '']);">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank" data-stat-id="5b2b825f6e9aefc2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5b2b825f6e9aefc2', 'http://www.duokan.com/', 'pcpid', '']);">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank" data-stat-id="5486ff78dab46903" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5486ff78dab46903', 'https://i.mi.com/', 'pcpid', '']);">云服务</a><span class="sep">|</span><a rel="nofollow" href="https://jr.mi.com/?from=micom" target="_blank" data-stat-id="b01b6c796ff60459" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b01b6c796ff60459', 'https://jr.mi.com', 'pcpid', '']);">金融</a><span class="sep">|</span><a rel="nofollow" href="http://www.mi.com/appdownload/" target="_blank" data-stat-id="97dfda3cb657e7a8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-97dfda3cb657e7a8', '//www.mi.com/appdownload/', 'pcpid', '']);">小米商城移动版</a><span class="sep">|</span><a rel="nofollow" href="http://static.mi.com/feedback/" target="_blank" data-stat-id="690537f5005b8ead" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-690537f5005b8ead', '//static.mi.com/feedback/', 'pcpid', '']);">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" data-stat-id="37f0c0ecc5cd1c51" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-37f0c0ecc5cd1c51', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="http://static.mi.com/cart/" data-stat-id="6df4db48a644b407" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6df4db48a644b407', '//static.mi.com/cart/', 'pcpid', '']);"><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum">（0）</span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="http://my.mi.com/portal" target="_blank" data-stat-id="249d537faf905cee" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-249d537faf905cee', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">1249847722</span><i class="iconfont"></i></a><ul class="user-menu"><li><a rel="nofollow" href="http://my.mi.com/portal" target="_blank" data-stat-id="e0b9e1d1fa8052a2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a></li><li><a rel="nofollow" href="http://order.mi.com/user/comment" target="_blank" data-stat-id="6d05445058873c2c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6d05445058873c2c', '//order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a></li><li><a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank" data-stat-id="32e2967e9a749d3d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-32e2967e9a749d3d', '//order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a></li><li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid', '']);">小米账户</a></li><li><a rel="nofollow" href="http://order.mi.com/site/logout" data-stat-id="770a31519c713b11" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-770a31519c713b11', '//order.mi.com/site/logout', 'pcpid', '']);">退出登录</a></li></ul></span><span class="sep">|</span><span class="message"><a rel="nofollow" href="http://order.mi.com/message/list" data-stat-id="7324b7edba019c56" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7324b7edba019c56', '//order.mi.com/message/list', 'pcpid', '']);">消息通知<i class="J_miMessageTotal"></i></a></span><span class="sep">|</span><a rel="nofollow" class="link link-order" href="http://static.mi.com/order/" target="_blank" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a></div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="http://www.mi.com/index.html" title="小米官网" data-stat-id="f4006c1551f77f22" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid', '']);">小米官网</a>
                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="http://list.mi.com/" data-stat-id="d7d79a744cdeefa8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d7d79a744cdeefa8', '//list.mi.com', 'pcpid', '']);"><span class="text">全部商品分类</span></a>
                <div class="site-category"> <ul id="J_categoryList" class="site-category-list clearfix">  <li class="category-item"> <a class="title" href="http://www.mi.com/buyphone/" data-stat-id="46830753a57a2e5a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-46830753a57a2e5a', '//www.mi.com/buyphone/', 'pcpid', '']);">手机 电话卡<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5c/" data-stat-id="a01315a7d2ac2cb2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a01315a7d2ac2cb2', '//www.mi.com/mi5c/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/5c_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/5c_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5c</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5c" data-stat-id="f23a9356cf901e64" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f23a9356cf901e64', '//item.mi.com/buyphone/mi5c', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/minote2/" data-stat-id="4f0d4b136403dfaf" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4f0d4b136403dfaf', '//www.mi.com/minote2/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xmNOTE2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xmNOTE2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米Note 2</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/minote2" data-stat-id="e9a44d8c2b92c4b1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e9a44d8c2b92c4b1', '//item.mi.com/buyphone/minote2', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mix/" data-stat-id="59e7a0857a3747f0" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-59e7a0857a3747f0', '//www.mi.com/mix/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/MIX-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米MIX</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mix" data-stat-id="72da6b1fc2fa9761" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-72da6b1fc2fa9761', '//item.mi.com/buyphone/mix', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5s" data-stat-id="fe92bf96c6d2b08d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-fe92bf96c6d2b08d', '//www.mi.com/mi5s', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5s" data-stat-id="023e81eb5b8ce1a3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-023e81eb5b8ce1a3', '//item.mi.com/buyphone/mi5s', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5splus/" data-stat-id="4de987fa9c6e580b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4de987fa9c6e580b', '//www.mi.com/mi5splus/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-plus-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-plus-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s Plus</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5splus" data-stat-id="229553e45e382847" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-229553e45e382847', '//item.mi.com/buyphone/mi5splus', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5/" data-stat-id="dcbd42ece248cddf" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-dcbd42ece248cddf', '//www.mi.com/mi5/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5" data-stat-id="79cf129bec5862f2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-79cf129bec5862f2', '//item.mi.com/buyphone/mi5', 'pcpid', '']);">选购</a> </li></ul><ul class="children-list children-list-col children-list-col-2"><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4x/" data-stat-id="51bf7367056c8f3f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-51bf7367056c8f3f', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redminote4x" data-stat-id="4af303d692bb8d9d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4af303d692bb8d9d', '//item.mi.com/buyphone/redminote4x', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4/" data-stat-id="2cee87e56a005597" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2cee87e56a005597', '//www.mi.com/redminote4/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hmnote4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hmnote4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/note4/" data-stat-id="86ef607fd1c99b1b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-86ef607fd1c99b1b', '//item.mi.com/buyphone/note4/', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4x/" data-stat-id="16eb2f0dcad4e4d0" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-16eb2f0dcad4e4d0', '//www.mi.com/redmi4x/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4x" data-stat-id="aef98c3b9eaa3095" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-aef98c3b9eaa3095', '//item.mi.com/buyphone/redmi4x', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4/" data-stat-id="031c221d6bb07cb2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-031c221d6bb07cb2', '//www.mi.com/redmi4/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4" data-stat-id="32e47a4f8801527b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-32e47a4f8801527b', '//item.mi.com/buyphone/redmi4', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4a/" data-stat-id="f7e6375371f85580" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f7e6375371f85580', '//www.mi.com/redmi4a/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4A-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4A-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4A</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000039.html" data-stat-id="47f1963363e66da1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-47f1963363e66da1', '//item.mi.com/product/10000039.html', 'pcpid', '']);">选购</a> </li><li> <a class="link" href="http://www.mi.com/compare/" data-stat-id="d513937922078892" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d513937922078892', '//www.mi.com/compare/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/compare.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">对比手机</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mimobile/" data-stat-id="9f6c18e55ea306ad" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9f6c18e55ea306ad', '//www.mi.com/mimobile/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mimobile.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动 电话卡</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/mibookair/" data-stat-id="2042589582b51b9f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2042589582b51b9f', '//www.mi.com/mibookair/', 'pcpid', '']);">笔记本 平板<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li class="star-goods"> <a class="link" href="http://www.mi.com/mibookair/" data-stat-id="02bba68268574ef6" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-02bba68268574ef6', '//www.mi.com/mibookair/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本Air</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buymibook/air" data-stat-id="4175d784950ce002" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4175d784950ce002', '//item.mi.com/buymibook/air', 'pcpid', '']);">选购</a> </li>  <li class="star-goods"> <a class="link" href="http://www.mi.com/mipad3/" data-stat-id="373d21e6d7ff7a65" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-373d21e6d7ff7a65', '//www.mi.com/mipad3/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米平板3</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000038.html" data-stat-id="e2ef06ca3832fdcb" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e2ef06ca3832fdcb', '//item.mi.com/product/10000038.html', 'pcpid', '']);">选购</a> </li>  <li> <a class="link" href="http://item.mi.com/1163000011.html" data-stat-id="034361a5f477a490" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-034361a5f477a490', '//item.mi.com/1163000011.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/usbzjqggg80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/usbzjqggg140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">USB-C转接器</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/accessories/tag?id=neidanbao" data-stat-id="5ddea3edf913ea3e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5ddea3edf913ea3e', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/neidanbao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/meidanbao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本内胆包</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse/" data-stat-id="4457b3252c3587ab" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4457b3252c3587ab', '//www.mi.com/mouse/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米便携鼠标</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse-2/" data-stat-id="f35d955abbeec998" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f35d955abbeec998', '//www.mi.com/mouse-2/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无线鼠标</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/buytv/" data-stat-id="6f890a25c91eccd1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6f890a25c91eccd1', '//www.mi.com/buytv/', 'pcpid', '']);">电视 盒子<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/mitv4A/43/" data-stat-id="d90a841f2eef471e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d90a841f2eef471e', '//www.mi.com/mitv4A/43/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_43.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_43.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 43英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/49/" data-stat-id="37c383314a5ec165" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-37c383314a5ec165', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_49.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_49.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 49英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/55/" data-stat-id="7dc9084862fb1d50" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7dc9084862fb1d50', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_55.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_55.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 55英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/65/" data-stat-id="acbd836ebfef905b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-acbd836ebfef905b', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/xp80_65.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/xp140_65.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/48/" data-stat-id="deb3512bb33e8f86" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-deb3512bb33e8f86', '//www.mi.com/mitv3s/48/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mitv3s48.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mitv3s48.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 48英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/55/" data-stat-id="e1548be4f518c33d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e1548be4f518c33d', '//www.mi.com/mitv3s/55/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/553s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/553s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 55英寸</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/mitv3s/60/" data-stat-id="88e61d4431963249" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-88e61d4431963249', '//www.mi.com/mitv3s/60/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/018080.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/01140140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65flat/" data-stat-id="d92c3d9093b7c850" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d92c3d9093b7c850', '//www.mi.com/mitv3s/65flat/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/653s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/653s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65/" data-stat-id="365af1430196b8be" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-365af1430196b8be', '//www.mi.com/mitv3s/65/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/6580side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/65140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸 曲面</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/" data-stat-id="e62aa373f82fcd9d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e62aa373f82fcd9d', '//www.mi.com/mitv3/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv60.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv60.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/70/" data-stat-id="4311a86a7b67ef8d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4311a86a7b67ef8d', '//www.mi.com/mitv3/70/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv70.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv701.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 70英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibox3s/" data-stat-id="c0c8578fa61d7279" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c0c8578fa61d7279', '//www.mi.com/mibox3s/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3s</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mibox3c/" data-stat-id="4b8e63bf66a86d26" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4b8e63bf66a86d26', '//www.mi.com/mibox3c/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3c</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezi3s/" data-stat-id="2beed28cb767d5e2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2beed28cb767d5e2', '//www.mi.com/hezi3s/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezizengqiangban80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezizengqiang140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3 增强版</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezimini/" data-stat-id="ae148328f48a33e8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ae148328f48a33e8', '//www.mi.com/hezimini/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezimini.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezimini.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子 mini</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154100018.html" data-stat-id="1f26c8471a20f8d4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-1f26c8471a20f8d4', '//item.mi.com/1154100018.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/diyinpao.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/diyinpao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米低音炮</span></a>  </li><li> <a class="link" href="http://www.mi.com/shb/" data-stat-id="b7f4080020cd39b6" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b7f4080020cd39b6', '//www.mi.com/shb/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/shb.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/shb.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">蓝牙手柄</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=yinxiang" data-stat-id="709f6125bfbbc649" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-709f6125bfbbc649', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/80x80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140x140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">家庭音响</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://list.mi.com/tvboxpj" data-stat-id="5328b511c8cb8295" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5328b511c8cb8295', '//list.mi.com/tvboxpj', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianshipeijian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianshipeijian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电视盒子配件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/smart/" data-stat-id="44a546bb64cac00a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-44a546bb64cac00a', '//www.mi.com/smart/', 'pcpid', '']);">路由器 智能硬件<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://list.mi.com/174" data-stat-id="d8a58aa8d3c77358" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d8a58aa8d3c77358', '//list.mi.com/174', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家扫地机器人及配件</span></a>  </li><li> <a class="link" href="http://www.mi.com/mivr/" data-stat-id="26e30384b2ac1dc4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-26e30384b2ac1dc4', '//www.mi.com/mivr/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米VR眼镜</span></a>  </li><li> <a class="link" href="http://www.mi.com/miwifi3/" data-stat-id="94b25b24314c124d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-94b25b24314c124d', '//www.mi.com/miwifi3/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米路由器</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter/" data-stat-id="74de33e425b1ff9a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-74de33e425b1ff9a', '//www.mi.com/scooter/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/list/scooter.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/scooter.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">九号平衡车</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibicycle/" data-stat-id="06ab7834f91d15b4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-06ab7834f91d15b4', '//www.mi.com/mibicycle/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zxc80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zxc140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电助力折叠自行车</span></a>  </li><li> <a class="link" href="http://www.mi.com/kettle/" data-stat-id="7c2d76a34f58e647" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7c2d76a34f58e647', '//www.mi.com/kettle/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shuihu80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shuihu140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家恒温电水壶</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/carair/" data-stat-id="97a860766b02646e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-97a860766b02646e', '//www.mi.com/carair/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家车载空气净化器</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shoubiao" data-stat-id="a878b5641b36eb7a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a878b5641b36eb7a', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手表</span></a>  </li><li> <a class="link" href="http://www.mi.com/dianfanbao/" data-stat-id="336e4830683b8c09" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-336e4830683b8c09', '//www.mi.com/dianfanbao/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家智能电饭煲</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shexiangji" data-stat-id="aecc867374f9264b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-aecc867374f9264b', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能摄像机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=jinghuaqilvxin" data-stat-id="f71f91beb34f62f5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f71f91beb34f62f5', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净化器及滤芯</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=water" data-stat-id="14404578e514d5fc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-14404578e514d5fc', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净水器及滤芯</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/tag?id=xueyaji" data-stat-id="23ffe916686f0d97" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-23ffe916686f0d97', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">血压计</span></a>  </li><li> <a class="link" href="http://www.mi.com/toyblock/" data-stat-id="42b52f6d39ccec40" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-42b52f6d39ccec40', '//www.mi.com/toyblock/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/jiqiren80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/jiqiren140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔积木机器人</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=smartlamp" data-stat-id="bcf351abbaf0e424" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-bcf351abbaf0e424', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能灯</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitu/" data-stat-id="09532d2c94d4a72a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-09532d2c94d4a72a', '//www.mi.com/mitu/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔智能故事机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/smartsuit" data-stat-id="030b3c5c246e29b0" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-030b3c5c246e29b0', '//list.mi.com/accessories/smartsuit', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能家庭组合</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/shouhuan" data-stat-id="cbd3ed384d23885f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cbd3ed384d23885f', '//list.mi.com/accessories/shouhuan', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shouhuan280.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shouhuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手环及配件</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://www.mi.com/scale/" data-stat-id="e5ab29621c71510d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e5ab29621c71510d', '//www.mi.com/scale/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/scale.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/scale.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">体重秤 / 体脂秤</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter2/" data-stat-id="c2f562c4e23e5e78" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c2f562c4e23e5e78', '//www.mi.com/scooter2/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电动滑板车</span></a>  </li><li> <a class="link" href="http://www.mi.com/miuav/" data-stat-id="97ae07fe031958da" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-97ae07fe031958da', '//www.mi.com/miuav/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无人机</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-carcorder/" data-stat-id="c10f593e22ba03ae" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c10f593e22ba03ae', '//www.mi.com/mj-carcorder/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jly80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jly140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家行车记录仪</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-interphone/" data-stat-id="d7107fe1a13a76c4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d7107fe1a13a76c4', '//www.mi.com/mj-interphone/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米家对讲机</span></a>  </li><li> <a class="link" href="http://list.mi.com/26?cfrom=search" data-stat-id="56328196a1d010e1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-56328196a1d010e1', '//list.mi.com/26', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">全部智能硬件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/accessories/tag?id=dianyuancunchu" data-stat-id="6fdf11296f89d2d7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6fdf11296f89d2d7', '//list.mi.com/accessories/tag', 'pcpid', '']);">移动电源 电池 插线板<i class="iconfont"></i></a> <div class="children clearfix children-col-2"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/dianyuan/" data-stat-id="3882f3539db6b687" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3882f3539db6b687', '//www.mi.com/dianyuan/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan280.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=powerstrip" data-stat-id="47cf315852ce47da" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-47cf315852ce47da', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb343.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb344.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">插线板</span></a>  </li><li> <a class="link" href="http://list.mi.com/13" data-stat-id="cab063b9360f121b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cab063b9360f121b', '//list.mi.com/13', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/yidongdianyuan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pinpaidianyuan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/dyfj" data-stat-id="caeafd5a1bb65f9b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-caeafd5a1bb65f9b', '//list.mi.com/dyfj', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuanfujian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianyuanfujian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">移动电源附件</span></a>  </li><li> <a class="link" href="http://list.mi.com/15" data-stat-id="7d140020b5d6e726" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7d140020b5d6e726', '//list.mi.com/15', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">充电器</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154300033.html" data-stat-id="951e4d241a6179ba" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-951e4d241a6179ba', '//item.mi.com/1154300033.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/5Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/5Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹5号电池</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://item.mi.com/1155000010.html" data-stat-id="236dea5d392af150" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-236dea5d392af150', '//item.mi.com/1155000010.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/7Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹7号电池</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/17" data-stat-id="a4277f9d894a1647" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a4277f9d894a1647', '//list.mi.com/17', 'pcpid', '']);">耳机 音箱<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/headphone/" data-stat-id="3258c74135aec1ff" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3258c74135aec1ff', '//www.mi.com/headphone/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/toudai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/toudai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米头戴式耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/headphone2/" data-stat-id="0e4c3f316b9dfac5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0e4c3f316b9dfac5', '//www.mi.com/headphone2/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">头戴式耳机轻松版</span></a>  </li><li> <a class="link" href="http://www.mi.com/earphonepro/" data-stat-id="9675131e8a287279" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9675131e8a287279', '//www.mi.com/earphonepro/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机 Pro</span></a>  </li><li> <a class="link" href="http://www.mi.com/quantie/" data-stat-id="430e3e6af8c61ab2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-430e3e6af8c61ab2', '//www.mi.com/quantie/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/quantie.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/quantie.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/capsuleearphone/" data-stat-id="0a2612048f9a6f41" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0a2612048f9a6f41', '//www.mi.com/capsuleearphone/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/jiaonang80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/jiaonang140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米胶囊耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/huosai3/" data-stat-id="5bb221e94fe05175" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5bb221e94fe05175', '//www.mi.com/huosai3/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huosai1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huosai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米活塞耳机清新版</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/bluetooth-earphone/" data-stat-id="a528cb07c5dfba26" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a528cb07c5dfba26', '//www.mi.com/bluetooth-earphone/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/bluetoothheadset.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/bluetoothheadset.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/sportearphone/" data-stat-id="4ac325bb680657ec" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4ac325bb680657ec', '//www.mi.com/sportearphone/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/yundong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/yundong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米运动蓝牙耳机</span></a>  </li><li> <a class="link" href="http://list.mi.com/18" data-stat-id="1ac7836a67fcaf21" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-1ac7836a67fcaf21', '//list.mi.com/18', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/pinpai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/wifispeaker/" data-stat-id="adadf6e20daafa18" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-adadf6e20daafa18', '//www.mi.com/wifispeaker/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米网络音响</span></a>  </li><li> <a class="link" href="http://www.mi.com/pocketaudio/" data-stat-id="5e049552b721056d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5e049552b721056d', '//www.mi.com/pocketaudio/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pocketaudio.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pocketaudio.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/littleaudio/" data-stat-id="85c59f5f02cc5ba0" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-85c59f5f02cc5ba0', '//www.mi.com/littleaudio/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米随身蓝牙音箱</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/yinxiang/" data-stat-id="bd054d147716510f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-bd054d147716510f', '//www.mi.com/yinxiang/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-160.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小钢炮音箱 2</span></a>  </li><li> <a class="link" href="http://www.mi.com/bluetooth-speaker/" data-stat-id="6897e3df5ac64dd8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6897e3df5ac64dd8', '//www.mi.com/bluetooth-speaker/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子蓝牙音箱2</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154400010.html" data-stat-id="b62a48144039e657" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b62a48144039e657', '//item.mi.com/1154400010.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/fanghezi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/fanghezi.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/alarmclock/" data-stat-id="8db03aff38af4e6c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8db03aff38af4e6c', '//www.mi.com/alarmclock/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米音乐闹钟</span></a>  </li><li> <a class="link" href="http://item.mi.com/1163100008.html" data-stat-id="4047227241adf8a2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4047227241adf8a2', '//item.mi.com/1163100008.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米兔音箱</span></a>  </li><li> <a class="link" href="http://item.mi.com/1164900007.html" data-stat-id="5d028b104e071601" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5d028b104e071601', '//item.mi.com/1164900007.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/chechong1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/chechong.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">音乐蓝牙车充</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/7" data-stat-id="b6f0c0b43727498e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b6f0c0b43727498e', '//list.mi.com/7', 'pcpid', '']);">保护套 贴膜<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/9" data-stat-id="62d0a851ec0724a8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-62d0a851ec0724a8', '//list.mi.com/9', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tiemo.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">贴膜</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/8" data-stat-id="0b6ac701197d497e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0b6ac701197d497e', '//list.mi.com/8', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/baohutao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">保护套/保护壳</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/1" data-stat-id="1bd93f4ff69cf8cc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-1bd93f4ff69cf8cc', '//list.mi.com/1', 'pcpid', '']);">线材 支架 存储卡<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/16" data-stat-id="ef406b16595b222d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ef406b16595b222d', '//list.mi.com/16', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/xiancai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/xiancai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">线材</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86" data-stat-id="b2c4f764ae98c37f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b2c4f764ae98c37f', '//search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zipaigan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zipaigan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">自拍杆</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/5" data-stat-id="382f588016d79247" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-382f588016d79247', '//list.mi.com/5', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhijia.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhijia.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手机支架</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/27" data-stat-id="8672c4ef1bf1f713" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8672c4ef1bf1f713', '//list.mi.com/27', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/cunchu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/cunchu.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">存储卡</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/134" data-stat-id="11efbd1dcc3783be" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-11efbd1dcc3783be', '//list.mi.com/134', 'pcpid', '']);">箱包 服饰 鞋<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/23" data-stat-id="15fc25d3d493fd50" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-15fc25d3d493fd50', '//list.mi.com/23', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">箱包</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1" data-stat-id="1b0efc2ad5e9da7d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-1b0efc2ad5e9da7d', '//search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/lvxingxiang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">90分旅行箱</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/22" data-stat-id="a46a70f78139a6cc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a46a70f78139a6cc', '//list.mi.com/22', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">服饰</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B" data-stat-id="0bc59d4653011403" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0bc59d4653011403', '//search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家运动鞋 智能版</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/20" data-stat-id="370d463950062b15" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-370d463950062b15', '//list.mi.com/20', 'pcpid', '']);">米兔 生活周边<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://mitu.mi.com/" data-stat-id="378413f5ea4f02c3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-378413f5ea4f02c3', 'http://mitu.mi.com/', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔玩偶</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/59" data-stat-id="a2783593a9dca913" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a2783593a9dca913', '//list.mi.com/59', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">鼠标垫</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/24" data-stat-id="b1dc3004db9154b5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b1dc3004db9154b5', '//list.mi.com/24', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhoubian1.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">生活周边</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/zazhi/index.html?1021" data-stat-id="e382ade4e301f704" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e382ade4e301f704', '//www.mi.com/zazhi/index.html', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">《小米》会刊</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%9C%80%E7%94%9F%E6%B4%BB" data-stat-id="0201a0ca781d7637" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0201a0ca781d7637', '//search.mi.com/search_%E6%9C%80%E7%94%9F%E6%B4%BB', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">毛巾/浴巾</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E4%B9%B3%E8%83%B6%E6%9E%95" data-stat-id="7e6308639cdb2631" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7e6308639cdb2631', '//search.mi.com/search_%E4%B9%B3%E8%83%B6%E6%9E%95', 'pcpid', '']);"><img class="thumb" src="js/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">8H乳胶枕</span></a>  </li>  </ul> </div> </li>  </ul></div></li>
                            <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="a9318c5014b7997f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a9318c5014b7997f', 'javascript:void0', 'pcpid', '']);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5c/" data-stat-id="601ee425ed347afd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-601ee425ed347afd', '//www.mi.com/mi5c/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png 2x" alt="小米手机5c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5c/" data-stat-id="94c51d3d18c0094e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-94c51d3d18c0094e', '//www.mi.com/mi5c/', 'pcpid', '']);">小米手机5c</a></div>
                                    <p class="price">1499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/minote2/" data-stat-id="03b13dbaa4786e91" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-03b13dbaa4786e91', '//www.mi.com/minote2/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!320x220.jpg 2x" alt="小米Note 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/minote2/" data-stat-id="0873f6e2764f8324" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0873f6e2764f8324', '//www.mi.com/minote2/', 'pcpid', '']);">小米Note 2</a></div>
                                    <p class="price">2799元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mix/" data-stat-id="cf7ac35c186d7676" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cf7ac35c186d7676', '//www.mi.com/mix/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/MIX-320-220!320x220.jpg 2x" alt="小米MIX" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mix/" data-stat-id="ff93591a0864a206" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ff93591a0864a206', '//www.mi.com/mix/', 'pcpid', '']);">小米MIX</a></div>
                                    <p class="price">3499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5s" data-stat-id="32193627446bdcdf" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-32193627446bdcdf', '//www.mi.com/mi5s', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!320x220.jpg 2x" alt="小米5s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5s" data-stat-id="9050b884f7a21f2f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9050b884f7a21f2f', '//www.mi.com/mi5s', 'pcpid', '']);">小米5s</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5splus/" data-stat-id="493a934eb2b99f74" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-493a934eb2b99f74', '//www.mi.com/mi5splus/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/5spluse320_220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/5spluse320_220!320x220.jpg 2x" alt="小米5s Plus" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5splus/" data-stat-id="412ad6794b1d4224" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-412ad6794b1d4224', '//www.mi.com/mi5splus/', 'pcpid', '']);">小米5s Plus</a></div>
                                    <p class="price">2299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5/" data-stat-id="1c2a9e9f6beb7a2a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-1c2a9e9f6beb7a2a', '//www.mi.com/mi5/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5/" data-stat-id="6da0badec0155110" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6da0badec0155110', '//www.mi.com/mi5/', 'pcpid', '']);">小米手机5</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="f896375cba89aa73" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f896375cba89aa73', 'javascript:void0', 'pcpid', '']);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4x/" data-stat-id="dc37fbccddd914c0" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-dc37fbccddd914c0', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!320x220.jpg 2x" alt="红米Note 4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4x/" data-stat-id="6783fa2e7e0592d9" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6783fa2e7e0592d9', '//www.mi.com/redminote4x/', 'pcpid', '']);">红米Note 4X</a></div>
                                    <p class="price">999元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4/" data-stat-id="9cdef97773d7f720" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9cdef97773d7f720', '//www.mi.com/redminote4/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/hongminote4!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/hongminote4!320x220.jpg 2x" alt="红米Note 4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4/" data-stat-id="093d207eb73e0787" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-093d207eb73e0787', '//www.mi.com/redminote4/', 'pcpid', '']);">红米Note 4</a></div>
                                    <p class="price">999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4x/" data-stat-id="c5f26ed13ba65625" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c5f26ed13ba65625', '//www.mi.com/redmi4x/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!320x220.jpg 2x" alt="红米4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4x/" data-stat-id="32fd622638ec7326" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-32fd622638ec7326', '//www.mi.com/redmi4x/', 'pcpid', '']);">红米4X</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4a/" data-stat-id="5349d139cd0272ca" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5349d139cd0272ca', '//www.mi.com/redmi4a/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png 2x" alt="红米4A" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4a/" data-stat-id="672f5b38bb8d37b2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-672f5b38bb8d37b2', '//www.mi.com/redmi4a/', 'pcpid', '']);">红米4A</a></div>
                                    <p class="price">599元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4" data-stat-id="089a4e4255fff4ae" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-089a4e4255fff4ae', '//www.mi.com/redmi4', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320-2202!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320-2202!320x220.jpg 2x" alt="红米4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4" data-stat-id="a2efe977880ea74c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a2efe977880ea74c', '//www.mi.com/redmi4', 'pcpid', '']);">红米4</a></div>
                                    <p class="price">799元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b7469322dd753dc5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b7469322dd753dc5', 'javascript:void0', 'pcpid', '']);"><span class="text">平板 · 笔记本</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mipad3/" data-stat-id="3d1bb4d72fde3e12" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3d1bb4d72fde3e12', '//www.mi.com/mipad3/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png 2x" alt="小米平板3 64GB" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mipad3/" data-stat-id="a3ede112480ddd53" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a3ede112480ddd53', '//www.mi.com/mipad3/', 'pcpid', '']);">小米平板3 64GB</a></div>
                                    <p class="price">1499元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="a08ff892b17e19d2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a08ff892b17e19d2', '//www.mi.com/mibookair/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg 2x" alt="小米笔记本Air 12.5" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="27f27885a7808a12" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-27f27885a7808a12', '//www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 12.5"</a></div>
                                    <p class="price">3599元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="a08ff892b17e19d2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a08ff892b17e19d2', '//www.mi.com/mibookair/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="a6d8540592a50629" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a6d8540592a50629', '//www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3"</a></div>
                                    <p class="price">4999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="a08ff892b17e19d2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a08ff892b17e19d2', '//www.mi.com/mibookair/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" 尊享版"="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="8bf584dd077aef07" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8bf584dd077aef07', '//www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3" 尊享版</a></div>
                                    <p class="price">5999元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="8e9363cee7cea5b5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8e9363cee7cea5b5', 'javascript:void0', 'pcpid', '']);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/43/" data-stat-id="ddef9bc0f0c18c37" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ddef9bc0f0c18c37', '//www.mi.com/mitv4A/43/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png 2x" alt="小米电视4A 43英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/43/" data-stat-id="bb143b73ca7a0143" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-bb143b73ca7a0143', '//www.mi.com/mitv4A/43/', 'pcpid', '']);">小米电视4A 43英寸</a></div>
                                    <p class="price">2099元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/49/" data-stat-id="c9ed4ce4c86772c7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c9ed4ce4c86772c7', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png 2x" alt="小米电视4A 49英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/49/" data-stat-id="7543bb3e6d54dea3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7543bb3e6d54dea3', '//www.mi.com/mitv4A/49/', 'pcpid', '']);">小米电视4A 49英寸</a></div>
                                    <p class="price">2599元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/55/" data-stat-id="a86ac88dbedcf862" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a86ac88dbedcf862', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png 2x" alt="小米电视4A 55英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/55/" data-stat-id="3fe2a5ccfc3b4cd9" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3fe2a5ccfc3b4cd9', '//www.mi.com/mitv4A/55/', 'pcpid', '']);">小米电视4A 55英寸</a></div>
                                    <p class="price">3199元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/65/" data-stat-id="b9e62c2795012149" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b9e62c2795012149', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png 2x" alt="小米电视4A 65英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/65/" data-stat-id="b7adb88b23921d5b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b7adb88b23921d5b', '//www.mi.com/mitv4A/65/', 'pcpid', '']);">小米电视4A 65英寸</a></div>
                                    <p class="price">5699元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv3s/60/" data-stat-id="d653136eb2005d43" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d653136eb2005d43', '//www.mi.com/mitv3s/60/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png 2x" alt="小米电视3s 60英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv3s/60/" data-stat-id="079d2aa45a0dd9f9" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-079d2aa45a0dd9f9', '//www.mi.com/mitv3s/60/', 'pcpid', '']);">小米电视3s 60英寸</a></div>
                                    <p class="price">4799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/buytv/" data-stat-id="58262e867a9739bc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-58262e867a9739bc', '//www.mi.com/buytv/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png 2x" alt="查看全部&lt;br/&gt;小米电视" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/buytv/" data-stat-id="085899409a53abcc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-085899409a53abcc', '//www.mi.com/buytv/', 'pcpid', '']);">查看全部<br>小米电视</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="764a30c3f697a814" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-764a30c3f697a814', 'javascript:void0', 'pcpid', '']);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3s/" data-stat-id="f3407643bc80b176" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f3407643bc80b176', '//www.mi.com/mibox3s/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3s/" data-stat-id="28a968db4b7f0482" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-28a968db4b7f0482', '//www.mi.com/mibox3s/', 'pcpid', '']);">小米盒子3s</a></div>
                                    <p class="price">299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3c/" data-stat-id="fd2b71a8a634ce82" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-fd2b71a8a634ce82', '//www.mi.com/mibox3c/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3c/" data-stat-id="999fb8bfde5c5436" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-999fb8bfde5c5436', '//www.mi.com/mibox3c/', 'pcpid', '']);">小米盒子3c</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezi3s/" data-stat-id="32a01e59d20f9fa7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-32a01e59d20f9fa7', '//www.mi.com/hezi3s/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezi3s/" data-stat-id="9c415465c2aba107" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9c415465c2aba107', '//www.mi.com/hezi3s/', 'pcpid', '']);">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezimini/" data-stat-id="695730e7d5d4d4ee" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-695730e7d5d4d4ee', '//www.mi.com/hezimini/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezimini/" data-stat-id="3e1af0ebc91192a6" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3e1af0ebc91192a6', '//www.mi.com/hezimini/', 'pcpid', '']);">小米盒子mini版</a></div>
                                    <p class="price">179元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/misurround/" data-stat-id="526e48171ce3082a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-526e48171ce3082a', '//www.mi.com/misurround/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png 2x" alt="小米家庭影院" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/misurround/" data-stat-id="d6bcb42cdabcdc8c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d6bcb42cdabcdc8c', '//www.mi.com/misurround/', 'pcpid', '']);">小米家庭影院</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1160800074.html" data-stat-id="102cede91d10b78c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-102cede91d10b78c', '//item.mi.com/1160800074.html', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1160800074.html" data-stat-id="9d7925dc3e0008d1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9d7925dc3e0008d1', '//item.mi.com/1160800074.html', 'pcpid', '']);">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b4d066d2f9a3bd16" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b4d066d2f9a3bd16', 'javascript:void0', 'pcpid', '']);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="4bb813fe356e8658" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4bb813fe356e8658', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png 2x" alt="小米路由器 HD" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="d1024ed229352ee5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d1024ed229352ee5', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 HD</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="815dac7efc8379b7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-815dac7efc8379b7', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png 2x" alt="小米路由器 Pro" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="f37031db00692dbf" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f37031db00692dbf', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 Pro</a></div>
                                    <p class="price">499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3/" data-stat-id="8b371a9da0ece570" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8b371a9da0ece570', '//www.mi.com/miwifi3/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png 2x" alt="小米路由器 3" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3/" data-stat-id="5d3ef0735d93f5f5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5d3ef0735d93f5f5', '//www.mi.com/miwifi3/', 'pcpid', '']);">小米路由器 3</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3c/" data-stat-id="9b87aa1b571fc3e9" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9b87aa1b571fc3e9', '//www.mi.com/miwifi3c/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png 2x" alt="小米路由器 3C" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3c/" data-stat-id="faf413cd200ccbd8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-faf413cd200ccbd8', '//www.mi.com/miwifi3c/', 'pcpid', '']);">小米路由器 3C</a></div>
                                    <p class="price">99元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/plc/" data-stat-id="706b9f9844cf0e95" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-706b9f9844cf0e95', '//www.mi.com/plc/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png 2x" alt="小米WiFi电力猫" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/plc/" data-stat-id="51a6cd5366b156a7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-51a6cd5366b156a7', '//www.mi.com/plc/', 'pcpid', '']);">小米WiFi电力猫</a></div>
                                    <p class="price">249元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1164700010.html" data-stat-id="cd09f4e4166fbd86" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cd09f4e4166fbd86', '//item.mi.com/1164700010.html', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!320x220.jpg 2x" alt="小米WiFi放大器 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1164700010.html" data-stat-id="a8ef42080b760a7b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a8ef42080b760a7b', '//item.mi.com/1164700010.html', 'pcpid', '']);">小米WiFi放大器 2</a></div>
                                    <p class="price">49元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:void(0);" data-stat-id="9fbb41fbadfac4d7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9fbb41fbadfac4d7', 'javascript:void0', 'pcpid', '']);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/scale2/" data-stat-id="dda2eaaec20ad0cc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-dda2eaaec20ad0cc', '//www.mi.com/scale2/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!320x220.jpg 2x" alt="小米体脂秤" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/scale2/" data-stat-id="0c6d80def31446ff" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-0c6d80def31446ff', '//www.mi.com/scale2/', 'pcpid', '']);">小米体脂秤</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-carcorder/" data-stat-id="ca024d2151e58ef2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ca024d2151e58ef2', '//www.mi.com/mj-carcorder/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!320x220.jpg 2x" alt="米家行车记录仪" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-carcorder/" data-stat-id="ef74a182640edfdb" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ef74a182640edfdb', '//www.mi.com/mj-carcorder/', 'pcpid', '']);">米家行车记录仪</a></div>
                                    <p class="price">349元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miuav/" data-stat-id="3b6fddc25c2313dc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3b6fddc25c2313dc', '//www.mi.com/miuav/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png 2x" alt="小米无人机 4k 版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miuav/" data-stat-id="5230db6a2b9e85ce" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5230db6a2b9e85ce', '//www.mi.com/miuav/', 'pcpid', '']);">小米无人机 4k 版</a></div>
                                    <p class="price">2999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-interphone/" data-stat-id="2d4f649120f68e54" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2d4f649120f68e54', '//www.mi.com/mj-interphone/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!320x220.jpg 2x" alt="小米米家对讲机" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-interphone/" data-stat-id="cbcd0122b61cad98" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cbcd0122b61cad98', '//www.mi.com/mj-interphone/', 'pcpid', '']);">小米米家对讲机</a></div>
                                    <p class="price">249元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/dianfanbao2/" data-stat-id="4700d369493de286" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4700d369493de286', '//www.mi.com/dianfanbao2/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!320x220.jpg 2x" alt="米家IH电饭煲" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/dianfanbao2/" data-stat-id="8998e99daf641e5c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8998e99daf641e5c', '//www.mi.com/dianfanbao2/', 'pcpid', '']);">米家IH电饭煲</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/smart/" data-stat-id="03c1c541d27a9a24" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-03c1c541d27a9a24', '//www.mi.com/smart/', 'pcpid', '']);"><img src="js/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="查看全部&lt;br/&gt;智能硬件" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/smart/" data-stat-id="9c5992491965e45b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9c5992491965e45b', '//www.mi.com/smart/', 'pcpid', '']);">查看全部<br>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                                        <a class="link" href="http://www.mi.com/service/" target="_blank" data-stat-id="59049922b2b5c11c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-59049922b2b5c11c', '//www.mi.com/service/', 'pcpid', '']);"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                                        <a rel="nofollow" class="link" href="http://www.xiaomi.cn/" target="_blank" data-stat-id="359ee71e873842fd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-359ee71e873842fd', 'http://www.xiaomi.cn', 'pcpid', '']);"><span class="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米5s&nbsp;Plus','Rst':5},{'Key':'小米MIX','Rst':1},{'Key':'手环','Rst':6},{'Key':'红米Note&nbsp;4x','Rst':4},{'Key':'小米路由器','Rst':10},{'Key':'移动电源','Rst':16},{'Key':'米家摄像机','Rst':5},{'Key':'小米体重秤','Rst':2},{'Key':'LED灯','Rst':6},{'Key':'优惠套装','Rst':64}]}" type="search">
                <input class="search-btn iconfont" value="" type="submit">
                <div class="search-hot-words">
                    <a href="http://www.mi.com/redmi4x/" data-stat-id="bd328738fd4aa582" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-bd328738fd4aa582', '//www.mi.com/redmi4x/', 'pcpid', '']);">红米 4X</a><a href="http://www.mi.com/redminote4/" data-stat-id="be18def3510017b3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-be18def3510017b3', '//www.mi.com/redminote4/', 'pcpid', '']);">红米Note4</a>                </div>
            <div id="J_keywordList" class="keyword-list hide"><ul class="result-list"></ul></div></form>
        </div>
    </div>
<div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div></div>

<div class="breadcrumbs">
    <div class="container">
        <a href="http://www.mi.com/index.html" data-stat-id="b0bcd814768c68cc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b0bcd814768c68cc', '//www.mi.com/index.html', 'pcpid', '']);">首页</a><span class="sep">&gt;</span><span>交易订单</span>
    </div>
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
                            <ul class="uc-nav-list J_navList">
                                <li class="active"><a class="J_noRandom" href="/home1/orderlist">我的订单</a></li>
                             
                                <li><a href="" data-count="comment" data-count-style="bracket">评价晒单</a></li>
                               
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul id="J_orderNavList" class="uc-nav-list">
                                <li><a href="home1/pinfo" >我的个人中心</a></li>
                              
                             
                                <li><a href="/home1/cullect">喜欢的商品</a></li>
                               
                                <li><a href="/home1/address">收货地址</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="" target="_blank">个人信息</a></li>
                                <li><a href="" target="_blank">修改密码</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span16">
                <div class="uc-box uc-main-box">
                    <div class="uc-content-box order-list-box">
                        <div class="box-hd" id="box-hd">
                            <h1 class="title">我的订单</h1>
                             <form id="J_orderSearchForm" class="search-form clearfix" action="#" method="get">
                                    <label for="search" class="hide">站内搜索</label>
                                    <input class="search-text" id="J_orderSearchKeywords" name="keywords" autocomplete="off" placeholder="输入订单号" type="search">
                                    <input class="search-btn iconfont" value="" type="submit">
                                </form>
                            <div class="more clearfix">  
         @if(session('msg'))
            <div style="font-size:15px;color:green;">
            {{ session('msg') }}
            
            </div>
        @endif
        @if(session('error'))
            <div style="font-size:15px;color:red;" >
            {{ session('error') }}
            
            </div>
        @endif
                                <ul class="filter-list J_orderType">
                                    <li >
                                        <a id="b" href="/home2/orderlist" >全部有效订单</a>
                                    </li>
                                    <li class="">
                                        <a id="J_unpaidTab" href="/home2/orderlist/state/0" onclick="">待支付</a>
                                    </li>
                                    <li class="">
                                        <a id="J_sendTab" href="/home2/orderlist/state/1">待发货</a>
                                    </li>
                                    <li class="">
                                        <a id="J_sendTab" href="/home2/orderlist/state/2" >待收货</a>
                                    </li>
                                    <li class="">
                                        <a id="J_sendTab" href="/home2/orderlist/state/3" >待评价</a>
                                    </li>
                                    <li class="">
                                        <a id="J_sendTab" href="/home2/orderlist/state/4" >退货</a>
                                    </li>
                                    
                                </ul>
                               
                            </div>
                        </div>

                           @foreach($data as $v) 

                        <div class="box-bd">
                            <div id="J_orderList">
                                <ul class="order-list">
                                    <li id="c" class="uc-order-item uc-order-item-pay"> 
 
   
                
                 <!-- 遍历从数据库查出来的数据，生成div选项追加到li里 -->
                
         
                	
            <div id="orderlist_state" class="order-detail"> 
                 <div class="order-summary"> 
                    <div class="order-status">
                    @if($v->Orderlist_state == 0)
                    等待付款
                    @endif
                    <div class="order-status">
                    @if($v->Orderlist_state == 1)
                    等待发货
                    @endif
                    <div class="order-status">
                    @if($v->Orderlist_state == 2)
                    待收货
                    @endif
                    <div class="order-status">
                    @if($v->Orderlist_state == 3)
                    待评价
                    @endif
                    @if($v->Orderlist_state == 4)
                    正在退货
                    @endif
                    @if($v->Orderlist_state == 5)
                    退货成功
                    @endif

                    </div>  
                 </div> 
                 <table class="order-detail-table"> 
                    <thead><tr> 
                        <th class="col-main">
                           <p class="caption-info">{{ $v->Orderlist_ftime  }}<span class="sep">|</span>{{ $v->Orderlist_name }}<span class="sep">|</span>订单号： <a href="">{{ $v->Orderlist_od_number }}</a><span class="sep">
							
                           </span>
                           </p> 
                        </th> 
                        <th class="col-sub"> 
                            <p class="caption-price">订单金额：<span class="num">{{ $v->Orderlist_total }}</span>元</p>
                        </th> 
                    </tr></thead> 
                    <tbody><tr> 
                    	<td class="order-items"> 
                            <ul class="goods-list">  
                               <li> 
	       							 
	                                <p class="name">
	                                     <a target="_blank" href="">
                                          {{ $v->Goods_body }}   
                                         </a>
	                                </p>
	                                <p class="price">{{ $v->Orderlist_price }} 元 ×  {{ $v->Orderlist_goodsnum }} </p> 
                                </li>  
                            </ul> 
                        </td> 
                        
                        <td class="order-actions">
                             @if($v->Orderlist_state != 3)
                            <a class="btn btn-small btn-primary" href="/home2/orderdetail/{{ $v->Orderlist_id}}" target="_blank">订单详情</a> 
                             @endif
                             @if($v->Orderlist_state == 3)
                            <a class="btn btn-small btn-primary" href="/evaluate/{{ $v->Orderlist_id}}" target="_blank">去评价</a> 
                             @endif
                                 
                        </td> 
                      
                    </tr> </tbody> 
                </table> 
             </div>
          </li>
        </ul>
     </div>
   </div>
   @endforeach
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ url('Home/orderlist/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript">
	
		$('li a').click(function()
			{ 
				var list = $('li>a').attr('style','color:red');
				list.attr('style','color:');
				$(this).attr('style','color:red');
				$(this>'#ordercount').attr('style','display:block');
				$(this>'#ordercount').attr('style','color:red');
				
				// for(i = 0;i<data.length;i++){
				// 	alert(data.length);
				// }
				
			});
</script>
<script type="text/javascript">
			// $('#ordercount').click(function(){	
			// 	$(this).attr('style','display:block');
			// 	$(this).attr('style','color:red');
			// });
</script>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="http://static.mi.com/feedback/" target="_blank" data-stat-id="170c9b99b0391e09" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-170c9b99b0391e09', '//static.mi.com/feedback/', 'pcpid', '']);">问题反馈 &gt;</a>
    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>



  

<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="http://www.mi.com/static/fast/" target="_blank" data-stat-id="46873828b7b782f4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_blank" data-stat-id="78babcae8a619e26" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_blank" data-stat-id="d1745f68f8d2dad7" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_blank" data-stat-id="f1b5c2451cf73123" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="b57397dd7ad77a31" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/account/register/" target="_blank" data-stat-id="e5dad0738a41014f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="8e128f473e680197" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="fd9e3532f60a2f8d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/exchange" target="_blank" data-stat-id="8e282b6f669ba990" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/" target="_blank" data-stat-id="5f2408ab3c808aa2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid', '']);">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/" target="_blank" data-stat-id="18c340c920a278a1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid', '']);">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="b27b566974e4aa67" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="6dab396f7a873f15" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="9af5efe014c3aea2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about" target="_blank" data-stat-id="f6d386c65b1f4132" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid', '']);">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="4307a445f5592adb" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about/contact" target="_blank" data-stat-id="6842e821365ee45d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid', '']);">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="4d561ee685cd2e15" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4d561ee685cd2e15', 'http://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_blank" data-stat-id="78fdefa9dee561b5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.htmlurl=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid', '']);">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="47539f6570f0da90" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-47539f6570f0da90', '#J_modalWeixin', 'pcpid', '']);">官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="http://order.mi.com/queue/f2code" target="_blank" data-stat-id="fdc16dd51892a164" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/giftcode/" target="_blank" data-stat-id="835607e3820935bb" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-835607e3820935bb', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_blank" data-stat-id="b08be6bd51351e1a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="a7642f0a3475d686" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid', '']);"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites"><a rel="nofollow" href="http://www.mi.com/index.html" target="_blank" data-stat-id="b9017a4e9e9eefe3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank" data-stat-id="826b32c1478a98d5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank" data-stat-id="c9d2af1ad828a834" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid', '']);">多看书城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miwifi.com/" target="_blank" data-stat-id="96f1a8cecc909af2" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid', '']);">小米路由器</a><span class="sep">|</span><a rel="nofollow" href="http://call.mi.com/" target="_blank" data-stat-id="347f6dd0d8d9fda3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid', '']);">视频电话</a><span class="sep">|</span><a rel="nofollow" href="http://xiaomi.tmall.com/" target="_blank" data-stat-id="dfe0fac59cfb15d9" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="http://shop115048570.taobao.com/" target="_blank" data-stat-id="c2613d0d3b77ddff" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid', '']);">小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="http://union.mi.com/" target="_blank" data-stat-id="2f48f953961c637d" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2f48f953961c637d', 'http://union.mi.com/', 'pcpid', '']);">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="http://www.mi.com/mimobile/" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f7ea7880c49b687e', '//www.mi.com/mimobile/', 'pcpid', '']);">小米移动</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" data-stat-id="c7ef95929d60f3f1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c7ef95929d60f3f1', 'http://www.miui.com/res/doc/privacy/cn.html', 'pcpid', '']);">隐私政策</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" data-stat-id="9db137a8e0d5b3dd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>            </p>
            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-f96685804376361a', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="57efc92272d4336b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" data-stat-id="c5f81675b79eb130" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid', '']);">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a rel="nofollow" href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="de920be99941f792" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-de920be99941f792', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img rel="nofollow" src="image/truste.png" alt="TRUSTe Privacy Certification"></a>
                    <a rel="nofollow" href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="d44905018f8d7096" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img rel="nofollow" src="image/v-logo-2.png" alt="诚信网站"></a>
                    <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="3e1533699f264eac" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img rel="nofollow" src="image/v-logo-1.png" alt="可信网站"></a>
                    <a rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="b085e50c7ec83104" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img rel="nofollow" src="image/v-logo-3.png" alt="网上交易保障中心"></a>
                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-cfd3189b8a874ba4', '', 'pcpid', '']);"><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="image/site-weixin.png" width="680" height="340">
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
            <a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="c148a4197491d5bd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c148a4197491d5bd', '', 'pcpid', '']);">重试</a>
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
                <img src="image/loading.gif" alt="" width="32" height="32">
                <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="ce9e5bb5b994ad55" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-ce9e5bb5b994ad55', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="7f083d6abed714f8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-7f083d6abed714f8', '', 'pcpid', '']);">确认</a>
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
        <a class="close" data-dismiss="modal" data-stat-id="d63900908fde14b1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d63900908fde14b1', '', 'pcpid', '']);"><i class="iconfont"></i></a>
        <span class="title">Select Region</span>
    </div>
    <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select your country or region</p>
        <p class="modal-globalSites-links clearfix">
            <a href="http://www.mi.com/index.html" data-stat-id="51fe807618ae85f4" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
            <a href="http://www.mi.com/hk/" data-stat-id="d8e4264197de1747" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
            <a href="http://www.mi.com/tw/" data-stat-id="8b54359fb6116e28" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
            <a href="http://www.mi.com/sg/" data-stat-id="e9c0506f7e4e7161" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
            <a href="http://www.mi.com/my/" data-stat-id="d6299ad30ec761a8" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
            <a href="http://www.mi.com/ph/" data-stat-id="22b601cf7b3ada84" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
            <a href="http://www.mi.com/in/" data-stat-id="441d26d4571e10dc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid', '']);">India</a>
            <a href="http://www.mi.com/id/" data-stat-id="88ccf9755c488ec5" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
            <a href="http://br.mi.com/" data-stat-id="c41d871bf5ddcd95" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid', '']);">Brasil</a>
            <a href="http://www.mi.com/en/" data-stat-id="4426c5dac474df5f" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid', '']);">Global Home</a>
            <a href="http://www.mi.com/mena/" data-stat-id="261bb8cf155fb56b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid', '']);">MENA</a>
            <a href="http://www.mi.com/pl/" data-stat-id="2e3007e460f40ce3" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-2e3007e460f40ce3', 'http://www.mi.com/pl/', 'pcpid', '']);">Poland</a>
            <a href="http://www.mi.com/ua/" data-stat-id="de8d49aabd1eecdd" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-de8d49aabd1eecdd', 'http://www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
            <a href="http://www.mi.com/ru/" data-stat-id="886bf2568681dd6b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-886bf2568681dd6b', 'http://www.mi.com/ru/', 'pcpid', '']);">Russia</a>
            <a href="http://www.mi.com/vn/" data-stat-id="b859ec9bcac672f1" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-b859ec9bcac672f1', 'http://www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
        </p>
    </div>
</div>
<!-- .modal-globalSites END -->
<!-- <script src="js/base.js"></script> -->


<script src="{{ asset('Home/orderlist/js/user.js') }}" ></script>
<script src="{{ asset('Home/orderlist/js/orderList.js')}}"></script>
<script src="{{ asset('Home/orderlist/js/xmsg_ti.js') }}"></script>
<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = "{{ asset('Home/orderlist/js/xmst.js') }};
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>
<!--mae_monitor-->

<div id="waterInstall" class="modal fade in modal-hide modal-water-install"> <div class="modal-header"> <h3>预约小米净水器或水龙头安装服务</h3> <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> </div> <div class="modal-body"> <h4>购买须知：</h4> <ol class="icon-list clearfix"> <li>本服务采用线上预约，安装时工作人员采取上门收费的服务形式。</li> <li>确认预约之后，工作人员将在商品（小米净水器）出库后（订单可查询）的3个工作日内，与您取得联系并上门安装。</li> <li>同一次上门安装小米净水器和不锈钢无铅水龙头，只收取一次安装人工费用（50元/台）。</li> <li>往返距离大于30公里的上门服务属于远程服务,对超出30公里的路程部分收取远程费,收费标准为1元/公里。</li> </ol> <p> <a href="http://bbs.xiaomi.cn/t-11515570" target="_blank" data-stat-id="9eba4a6970444adf" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-9eba4a6970444adf', 'http://bbs.xiaomi.cn/t-11515570', 'pcpid', '']);">了解更多细则 »</a> </p> <table> <caption> 收费标准： </caption> <thead> <tr> <th> 项目名称 </th> <th> 安装人工费用 </th> <th> 材料费用 </th> </tr> </thead> <tbody> <tr> <td> 安装小米净水器 </td> <td> 50元/台 </td> <td> －－ </td> </tr> <tr> <td> 安装不锈钢无铅水龙头 </td> <td> 50元/台 </td> <td> 240元 </td> </tr> </tbody> </table> <p>温馨提示：如果您无需更换水龙头，自己动手就可以完成净水器安装哦。<a href="http://www.mi.com/water/gallery/" target="_blank" data-stat-id="226d73fa87354d7e" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-226d73fa87354d7e', 'http://www.mi.com/water/gallery/', 'pcpid', '']);">参考安装演示 »</a></p> </div> <div class="modal-footer clearfix"> <a class="btn btn-primary" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="bf5049f280376034" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-bf5049f280376034', 'http://www.mi.com/service/contact', 'pcpid', '']);">联系客服预约</a> </div></div></body></html>