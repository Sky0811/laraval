<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>选择在线支付方式</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('Home/payfor/css/base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Home/payfor/css/pay-confirm.css') }}">
<script type="text/javascript" async="" src="{{ asset('Home/payfor/js/unjcV2.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/payfor/js/mstr.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/payfor/js/jquery.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('Home/payfor/js/xmst.js') }}"></script>
<script type="text/javascript">
/*<![CDATA[*/
// var _STAT_HASHNAME="http://my.mi.com/buy/confirm";
/*]]>*/
</script>
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo " href="" title="大米官网" ></a>
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>支付订单</h2></div>
        <div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="http://my.mi.com/portal" target="_blank" data-stat-id="249d537faf905cee" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-249d537faf905cee', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">1249847722</span><i class="iconfont"></i></a><ul class="user-menu" style="display: none;"><li><a rel="nofollow" href="http://my.mi.com/portal" target="_blank" data-stat-id="e0b9e1d1fa8052a2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a></li><li><a rel="nofollow" href="http://order.mi.com/user/comment" target="_blank" data-stat-id="04dda61fe46ba720" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-04dda61fe46ba720', 'http://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a></li><li><a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank" data-stat-id="8660c1b13ab1c56b" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8660c1b13ab1c56b', 'http://order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a></li><li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid', '']);">小米账户</a></li><li><a rel="nofollow" href="http://order.mi.com/site/logout" data-stat-id="7014141d5b446729" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-7014141d5b446729', 'http://order.mi.com/site/logout', 'pcpid', '']);">退出登录</a></li></ul></span><span class="sep">|</span><a rel="nofollow" class="link link-order" href="http://static.mi.com/order/" target="_blank" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a></div>
    </div>
</div>
<!-- .site-mini-header END -->
<script type="text/javascript">
var _confirmConfig = {
    order_id:'1170414789002310',
    safe_tel:'',
    goods_amount:'66988.00'
};
</script>

<div class="page-main">
    <div class="container confirm-box">
        <form target="_blank" action="#" id="J_payForm" method="post">
        <div class="section section-order">
            <div class="order-info clearfix">
                <div class="fl"> 
               

                    <h2 class="title">订单提交成功！去付款咯～</h2>
                    <p class="order-time" id="J_deliverDesc">预计5天内发货</p>
           
           
             
                    <p class="post-info" id="J_postInfo"> 

                        收货信息：
                        {{ $a->Address_consignee }}&nbsp;
                        {{ $a->Address_consignee_phone }} &nbsp;&nbsp;
                        {{ $a->Address_province }}&nbsp;&nbsp;{{ $a->Address_city }}&nbsp;&nbsp;
                        {{ $a->Address_county }}&nbsp;&nbsp;
                        {{ $a->Address_detail }}     
                    </p>
                </div>
            <div class="fr">
            <p class="total">
                应付总额：<span class="money"><em>
                {{ $ob->Orderlist_total }}</em>元</span>
            </p>
            <a href="javascript:void(0);" class="show-detail" id="J_showDetail" data-stat-id="f6ce11cebe4cd0c7" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f6ce11cebe4cd0c7', 'javascript:void0', 'pcpid', '']);">订单详情<i class="iconfont"></i></a>
        </div>
    </div>
    <i class="iconfont icon-right">√</i>
    <div class="order-detail">
        <ul>
            <li class="clearfix">
                <div class="label">订单号：</div>
                    <div class="content">
                        <span class="order-num">
                             {{ $ob->Orderlist_od_number}}
                        </span>
                    </div>
            </li>
            <li class="clearfix">
                <div class="label">收货信息：</div>
                    <div class="content">    

                {{ $a->Address_consignee }}:
                {{ $a->Address_consignee_phone }} &nbsp;&nbsp;{{ $a->Address_province }}&nbsp;&nbsp;{{ $a->Address_city }}&nbsp;&nbsp;{{ $a->Address_county }}&nbsp;&nbsp;
                      {{ $a->Address_detail}}        
            </div> 
            
            </li>
            <li class="clearfix">
                <div class="label">商品名称：</div>
                <div class="content">
                    <br>{{ $ob->Orderlist_goodsname }}<br>             
                </div>
            </li>
        </ul>
    </div>
</div>
       
        
            
<div class="section section-payment">
    <div class="cash-title" id="J_cashTitle">
         选择以下支付方式付款
    </div>
    <div class="payment-box ">
        <div class="payment-header clearfix">
            <h3 class="title">支付平台</h3>
                <span class="desc"></span>
                <!-- <form id="my" action="{{ url('home1/orderlist') }}" method="post" name="myform">
                        {{ csrf_field()}}
                    <input type="hidden" value="{{ $ob->Orderlist_id }}">
                    </form> -->
        </div>
        <div class="payment-body">
            <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                    <li id="J_weixin" >
                    <input  value="alipay" type="radio">
                    <a href="/home2/orderlist/updat/{{ $ob->Orderlist_id }}"><img src="{{ asset('Home/payfor/images/wechat0715.jpg') }}" alt="微信支付" style="margin-left: 0;"></a>
                </li>
<script type="text/javascript" src="{{ asset('Home/payfor/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript">
     $('#J_weixin').click(function(){
        alert('支付成功');
      // $('#my').submit();  
        });
</script>
                <li class="J_weixin" >
                    <input  value="alipay" type="radio"><img src="{{ asset('Home/payfor/images/alipay-0718-1.png') }}" alt="支付宝" style="margin-left: 0;">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="unionpay" value="unionpay" type="radio"> <img src="{{ asset('Home/payfor/images/unionpay.png') }}" alt="银联" style="margin-left: 0;">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="cft" value="cft" type="radio"> <img src="{{ asset('Home/payfor/images/cft.png') }}" alt="财付通" style="margin-left: 0;">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="micash" value="micash" type="radio"> <img src="{{ asset('Home/payfor/images/micash.png') }}" alt="小米钱包" style="margin-left: 0;">
                </li>    
            </ul>
        </div>
    </div>
    <div class="payment-box ">
        <div class="payment-header clearfix">
            <h3 class="title">银行借记卡及信用卡</h3>
        </div>
        <div class="payment-body">
            <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="CMB" value="CMB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zsyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="ICBCB2C" value="ICBCB2C" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gsyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="CCB" value="CCB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_jsyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="COMM" value="COMM" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_jtyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="ABC" value="ABC" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_nyyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="BOCB2C" value="BOCB2C" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zgyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_youzheng.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="GDB" value="GDB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gfyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="SPDB" value="SPDB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_pufa.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CEBBANK" value="CEBBANK" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gdyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CIB" value="CIB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_xyyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="CMBC" value="CMBC" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_msyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="CITIC" value="CITIC" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zxyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="SHBANK" value="SHBANK" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_shyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="BJRCB" value="BJRCB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_bjnsyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="NBBANK" value="NBBANK" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_nbyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="HZCBB2C" value="HZCBB2C" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_hzyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="SHRCB" value="SHRCB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_shnsyh.png') }}" alt="">
                </li>
                <li class="J_weixin hide">
                    <input name="payOnlineBank" id="FDB" value="FDB" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_fcyh.png') }}" alt="">
                </li>                            
                <li class="J_showMore">
                    <span class="text">查看更多</span>
                    <span class="text  hide">收起更多</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="payment-box payment-box-last ">
        <div class="payment-header clearfix">
            <h3 class="title">快捷支付</h3>
                <span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
        </div>
        <div class="payment-body">
            <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CMB-KQ" value="CMB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zsyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="COMM-KQ" value="COMM-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_jtyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CCB-KQ" value="CCB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_jsyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gsyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zxyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gdyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_zgyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_shncsyyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="JSB-KQ" value="JSB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_jiangsshuyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="CIB-KQ" value="CIB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_xyyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="ABC-KQ" value="ABC-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_nyyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_payh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="HXB-KQ" value="HXB-KQ" type="radio"><img src="{{ asset('Home/payfor/images/payOnline_hyyh.png') }}" alt="">
                </li>
                <li class="J_weixin">
                    <input name="payOnlineBank" id="GDB-KQ" value="GDB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_gfyh.png') }}" alt="">
                </li>
                <li class="J_weixin" >
                    <input name="payOnlineBank" id="BOB-KQ" value="BOB-KQ" type="radio"> <img src="{{ asset('Home/payfor/images/payOnline_bjyh.png') }}" alt="">
                </li>                        
            </ul>
        </div>
    </div>
</div>
</form>
</div>
</div>

<!--现金账户 提示框-->
<div class="modal  modal-hide modal-balance-pay" id="J_balancePay">
    <div class="modal-header">
        <h3>现金账户安全验证</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <p>
            为了确保您的购物安全<br>
            已向您当前的联系电话 <span class="num" id="J_cashPayPhone"></span>  发送验证码
        </p>
        <div class="form-section">
            <label class="input-label" for="verifycode">请输入验证码</label>
            <input class="input-text" id="verifycode" name="verifycode" type="text">
            <span class="btn btn-block hide" id="J_sendAgain"></span>
        </div>
        <div class="tip" id="J_checkCodeTip"></div>
    </div>
    <div class="modal-footer">
         <a class="btn btn-gray" data-dismiss="modal" href="javascript:void(0);" data-stat-id="c893774534c6180e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c893774534c6180e', 'javascript:void0', 'pcpid', '']);">取消</a>
         <a class="btn btn-primary" id="J_checkCodeBtn" href="javascript:void(0);" >确认</a>
    </div>
</div>

<!-- 支付提示框 -->
<div class="modal fade modal-hide modal-pay-tip" id="J_payTip" aria-hidden="false">
    <div class="modal-header">
        <h3>正在支付...</h3>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-body clearfix">
        <div class="success">
            <h4>支付成功了</h4>
            <p><a href="" >立即查看订单详情 &gt;</a></p>
        </div>
        <div class="fail">
            <h4>如果支付失败</h4>
            <p><a href="" target="_blank" >查看支付常见问题 &gt;</a></p>
        </div>
    </div>
</div>

<div class="modal modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="modal modal-hide fade modal-alipay" id="J_modalAlipay">
    <div class="modal-bd">
        <div class="loading"><div class="loader"></div></div>
        <iframe name="alipayQrcodeIframe" scrolling="no" width="100%" frameborder="0" height="100%"></iframe>
    </div>
    <a class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
</div>

<div class="modal modal-hide fade modal-weixin-pay" id="J_modalWeixinPay">
    <div class="modal-hd">
        <span class="title">微信支付</span>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" ><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd" id="J_showWeixinPayExample">
        <div class="code" id="J_weixinPayCode">
            <div class="loading"><div class="loader"></div></div>
        </div>
        <div class="msg">
            请使用 <span>微信</span> 扫一扫<br>二维码完成支付
        </div>
    </div>
    <div class="example" id="J_weixinPayExample"></div>
</div>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="" target="_blank">问题反馈 &gt;</a>

    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="http://www.mi.com/static/fast/" target="_blank" data-stat-id="46873828b7b782f4" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_blank" data-stat-id="78babcae8a619e26" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_blank" data-stat-id="d1745f68f8d2dad7" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_blank" data-stat-id="f1b5c2451cf73123" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="b57397dd7ad77a31" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/account/register/" target="_blank" data-stat-id="e5dad0738a41014f" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="8e128f473e680197" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="fd9e3532f60a2f8d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/exchange" target="_blank" data-stat-id="8e282b6f669ba990" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/" target="_blank" data-stat-id="5f2408ab3c808aa2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid', '']);">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/" target="_blank" data-stat-id="18c340c920a278a1" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid', '']);">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="b27b566974e4aa67" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="6dab396f7a873f15" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="9af5efe014c3aea2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about" target="_blank" data-stat-id="f6d386c65b1f4132" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid', '']);">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="4307a445f5592adb" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about/contact" target="_blank" data-stat-id="6842e821365ee45d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid', '']);">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="4d561ee685cd2e15" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-4d561ee685cd2e15', 'http://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="" target="_blank" data-stat-id="78fdefa9dee561b5" >小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="http://order.mi.com/queue/f2code" target="_blank" data-stat-id="fdc16dd51892a164" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/giftcode/" target="_blank" data-stat-id="835607e3820935bb" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-835607e3820935bb', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_blank" data-stat-id="b08be6bd51351e1a" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="a7642f0a3475d686" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid', '']);"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <span class="logo ir">小米官网</span>
        <div class="info-text">
            <p>小米旗下网站：<a href="http://www.mi.com/index.html" target="_blank" data-stat-id="b9017a4e9e9eefe3" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a href="http://www.miui.com/" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a href="http://www.miliao.com/" target="_blank" data-stat-id="826b32c1478a98d5" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a href="http://www.duokan.com/" target="_blank" data-stat-id="c9d2af1ad828a834" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid', '']);">多看书城</a><span class="sep">|</span><a href="http://www.miwifi.com/" target="_blank" data-stat-id="96f1a8cecc909af2" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid', '']);">小米路由器</a><span class="sep">|</span><a href="http://call.mi.com/" target="_blank" data-stat-id="347f6dd0d8d9fda3" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid', '']);">视频电话</a><span class="sep">|</span><a href="http://xiaomi.tmall.com/" target="_blank" data-stat-id="dfe0fac59cfb15d9" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span><a href="http://shop115048570.taobao.com/" target="_blank" data-stat-id="c2613d0d3b77ddff" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid', '']);">小米淘宝直营店</a><span class="sep">|</span><a href="http://union.mi.com/" target="_blank" data-stat-id="2f48f953961c637d" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-2f48f953961c637d', 'http://union.mi.com/', 'pcpid', '']);">小米网盟</a><span class="sep">|</span><a href="http://www.mi.com/mimobile/" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f7ea7880c49b687e', '//www.mi.com/mimobile/', 'pcpid', '']);">小米移动</a><span class="sep">|</span><a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" data-stat-id="c7ef95929d60f3f1" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c7ef95929d60f3f1', 'http://www.miui.com/res/doc/privacy/cn.html', 'pcpid', '']);">隐私政策</a><span class="sep">|</span><a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="9db137a8e0d5b3dd" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>            </p>
            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-f96685804376361a', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="57efc92272d4336b" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" data-stat-id="c5f81675b79eb130" onclick="_msq.push(['trackEvent', '192fa45feb8511c1-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid', '']);">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a href="" target="_blank" ><img src="{{ asset('Home/payfor/images/truste.png') }}" alt="TRUSTe Privacy Certification"></a>
                    <a href="" target="_blank" ><img src="{{ asset('Home/payfor/images/v-logo-2.png') }}" alt="诚信网站"></a>
                    <a href="" ><img src="{{ asset('Home/payfor/images/v-logo-1.png') }}" alt="可信网站"></a>
                    <a href="" target="_blank" ><img src="{{ asset('Home/payfor/images/v-logo-3.png') }}" alt="网上交易保障中心"></a>
        
        </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>

<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="{{ asset('Home/payfor/images/site-weixin.png') }}" width="680" height="340">
        </div>
    </div>







<!-- .modal-globalSites END -->

<script src="{{ asset('Home/payfor/js/base.js') }}"></script>
<script>
// (function() {
//     MI.namespace('GLOBAL_CONFIG');
//     MI.GLOBAL_CONFIG = {
//         orderSite: 'http://order.mi.com',
//         wwwSite: '//www.mi.com',
//         cartSite: '//cart.mi.com',
//         itemSite: '//item.mi.com',
//         assetsSite: '//s01.mifile.cn',
//         listSite: '//list.mi.com',
//         searchSite: '//search.mi.com',
//         mySite: '//my.mi.com',
//         damiaoSite: 'https://tp.hd.mi.com/',
//         damiaoGoodsId:[],
//         logoutUrl: 'http://order.mi.com/site/logout',
//         staticSite: '//static.mi.com',
//         quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
//     };
//     MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
//     MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
//     MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
//     MI.miniCart.init();
//     //MI.updateMiniCart();
// })();
</script>

<script type="text/javascript" src="{{ asset('Home/payfor/js/payConfirm.js') }}"></script>

<script>
// var _msq = _msq || [];
// _msq.push(['setDomainId', 100]);
// _msq.push(['trackPageView']);
// (function() {
//     var ms = document.createElement('script');
//     ms.type = 'text/javascript';
//     ms.async = true;
//     ms.src = "{{ asset('Home/payfor/js/xmst.js') }}";
//     var s = document.getElementsByTagName('script')[0];
//     s.parentNode.insertBefore(ms, s);
// })();
</script>

</body></html>