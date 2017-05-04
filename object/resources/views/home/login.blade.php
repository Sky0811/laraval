<!-- 前台登录页面 -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="小米帐号能使用小米手机，MIUI，小米云，多看阅读，米聊，小米社区等小米服务。">
        <meta name="keywords" content="小米帐号，小米账号，小米注册，注册，Mi Account，Sign in，小米，帐号，账号，小米帐户，登录，登陆，安全令牌，动态口令，小米注册，找回密码">

        <!-- 接收提示信息并弹出 -->
        @if(session('msg'))
            <script>
                    alert('{{session('msg')}}');
            </script>
        @endif

        <script>
            var LANG=(function(){
                var locale=("zh_CN").toLowerCase();
                if(locale){
                  if(locale.indexOf("en")>-1){
                    return {data:"en",cls:"en"};
                  }else if(locale.indexOf("zh")>-1){
                    if(locale.indexOf("cn")===-1){
                      return {data:"tw",cls:"zh_TW"};
                    }else{
                      return {data:"cn",cls:"zh_CN"};
                    }
                  }
                }
                return {data:"en",cls:"en"};
            })();
        </script>

        <script>
        var _d_={};
        var _t_={
          statURL:'https://data.mistat.xiaomi.com/mistats',
          appId:"2882303761517246742",
          appKey:"5621724658742",
          jspcomplete:(new Date()).getTime(),
          supportLocalstorage:!!window.localStorage,
          samplingBase:100,
          samplingRate:5
        };
        if(window.performance){
          var timing=performance.timing;
          if(!timing.responseEnd){
            timing.responseEnd=timing.responseStart;
          }
          _d_.startTS=timing.fetchStart
          _d_.endTS=timing.responseEnd;
        }else{
          _d_.startTS=_d_.endTS=(new Date()).getTime();
        }
        var JSP_VAR={
          deviceType:'PC',
          dataCenter:'lg',
          locale:"zh_CN",
          region:"CN",
          callback:"http://order.mi.com/login/callback?followup=http%3A%2F%2Fwww.mi.com%2Findex.html&sign=NDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ,,",
          sid:"mi_eshop",
          qs:"%3Fcallback%3Dhttp%253A%252F%252Forder.mi.com%252Flogin%252Fcallback%253Ffollowup%253Dhttp%25253A%25252F%25252Fwww.mi.com%25252Findex.html%2526sign%253DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%252C%252C%26sid%3Dmi_eshop%26_bannerBiz%3Dmistore%26_qrsize%3D180",
          hidden:"",
          "_sign":"tjqd6rRBg1RD/EFdxL/SjgXXCLA=",
          serviceParam :'{"checkSafePhone":false}',
          privacyLink:'http://www.miui.com/res/doc/privacy/cn.html',
          showActiveXControl:false
        };
        var PAGE_VAR={
          form_cache:false,
          cache_key:(JSP_VAR.deviceType!=="mobile" ? "/static/res/0bffe86/account-static/html/login/dist/v2/login-cn.html" : "/static/res/9ace5ec/account-static/html/login/dist/v2/login-wap-cn.html")
        };

        var localStorageKey='id.mi.com.login.'+( PAGE_VAR.cache_key.substring( PAGE_VAR.cache_key.indexOf("/account-static") ) || "main" );

        if(location.search.indexOf("_debugMode")>-1){
          window.localStorage && window.localStorage.removeItem(localStorageKey);
        }

        (function(){

          function getLocal(url){
            if(window.localStorage){
              var data=""+localStorage.getItem(localStorageKey);
              var index=data.indexOf("@")

              if(data.substring(0,index) == url){
                return data.substring(index+1)
              }
            }
            return null;
          }
          function setLocal(url,data){
            if(window.localStorage && data){
              try{
                localStorage.setItem(localStorageKey,url+"@"+data);
              }catch(e){}
            }
          }
          function getContent(url){
            var xhr= new (window.XMLHttpRequest || window.ActiveXObject)("Microsoft.XMLHTTP");
            xhr.onreadystatechange = function() {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  setLocal(url,xhr.responseText);
                  _t_.htmlGetEnd=(new Date()).getTime();
                  document.write(xhr.responseText);
                  document.close();
              }
            };
            xhr.open("GET",url,false);
            xhr.send();
          }
          var cache_key=PAGE_VAR.cache_key;
              _t_.version=cache_key;
          var html=getLocal(cache_key);
          if(html){
            _t_.htmlCache=true;
            PAGE_VAR.form_cache=true;
            document.write(html);
            document.close();
          }else{
            _t_.htmlCache=false;
            _t_.htmlGetStart=(new Date()).getTime();
            getContent(cache_key);
          }
        })();
        </script>
          
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title>小米帐号 - 登录</title>
    </head>
    <body class="zh_CN win_banner_mistore">
        <div class="wrapper">

        <!--bg_banner_start-->
        <div class="bgiframe">
            <iframe src="{{ asset('Home/login/img/loginbanner.htm') }}" id="bgiframe" scrolling="no" frameborder="0" height="686" width="100%"></iframe>
        </div>

          <!--bg_banner_end-->
        <div class="wrap">
            <div class="layout_panel">
                <div class="layout" id="layout" style="z-index:99999">

                <!--表单输入登录-->
                <div class="mainbox" id="login-main">
                  <div><a class="ercode" id="qrcode-trigger" href="javascript:void(0)"></a></div>

                    <!-- header s -->
                    <div class="lgnheader">
                        <div class="header_tit t_c">
                            <em id="custom_display_1" class="milogo">
                                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <rect width="50" height="50" style="fill:#ef5b00"></rect>
                                <rect x="11.25" y="15" width="5" height="20" style="fill:#FFFFFF"></rect>
                                <rect x="11.25" y="15" width="12.5" height="5" style="fill:#FFFFFF"></rect>
                                <rect x="26.25" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect>
                                <rect x="33.75" y="15" width="5" height="20" style="fill:#FFFFFF"></rect>
                                <circle cx="23.75" cy="22.5" r="7.5" fill="#FFFFFF"></circle>
                                <rect x="16.25" y="20" width="7.5" height="15" style="fill:#ef5b00"></rect>
                                <rect x="16.25" y="22.5" width="10" height="12.5" style="fill:#ef5b00"></rect>
                                <circle cx="23.75" cy="22.5" r="2.5" fill="#ef5b00"></circle>
                                <rect x="18.75" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect>
                                </svg>
                            </em>
                            <h4 class="header_tit_txt" id="login-title">小米帐号登录</h4>
                            <div class="site_info"></div>
                        </div>
                    </div>

                  <!-- header e -->
                  <!-- tab s -->
                    <div class="nav_tabs_panel">
                        <div id="nav-tabs" class="nav_tabs">
                            <a class="navtab-link now" href="javascript:void(0);" data-tab="pwd">小米帐号登录</a>
                        </div>
                    </div>

                  <!-- tab con s -->
                    <div class="tabs-con tabs_con now" data-con="pwd" style="display: block;">
                        <div>
                            <div class="login_area">
                                <form action="/home1/dologin" method="POST" id="login-main-form">
                                    {{ csrf_field() }}
                                    <div class="loginbox c_b">

                                    <!-- 输入框 -->
                                    <div class="lgn_inputbg c_b">

                                      <!--验证用户名-->
                                    <div class="single_imgarea" id="account-info">
                                        <div class="na-img-area" id="account-avator" style="display:none">
                                            <div class="na-img-bg-area" id="account-avator-con"></div>
                                        </div>
                                        <p class="us_name" id="account-displayname"></p>
                                        <p class="us_id"></p>
                                    </div>
                                    <label id="region-code" class="labelbox login_user c_b" for="">
                                        <div class="turn_area">
                                            <a class="btn_turn" id="manual_code" href="javascript:void(0);" title="关闭国家码"></a>
                                        </div>
                                        <div class="country_list">
                                            <div class="animation countrycode_selector" id="countrycode_selector">
                                            <span class="country_code">
                                                <tt class="countrycode-value" id="countrycode_value"></tt>
                                                <i class="icon_arrow_down"></i>
                                            </span>
                                        </div>
                                        </div>
                                        <input class="item_account" autocomplete="off" name="User_name" id="username" placeholder="用户名" type="text">
                                    </label>

                                    <div class="country-container" id="countrycode_container" style="display: none;">
                                        <div class="country_container_con" id="countrycode_container_con"></div>
                                    </div>
                                    <label class="labelbox pwd_panel c_b">
                                        <div class="eye_panel pwd-visiable">
                                            <i class="eye pwd-eye">
                                            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path>
                                            <circle class="eye_inner" cx="10" cy="8" r="3"></circle>
                                            </svg>
                                            </i>
                                        </div>
                                        <input placeholder="密码" autocomplete="off" name="User_pwd" id="pwd" type="password">
                                        <input placeholder="密码" autocomplete="off" id="visiablePwd" style="display:none" type="text">
                                    </label>
                                </div>
                                <div class="security_Controller" style="display: none;">
                                    <label class="checkbox_area"><input id="trustSecurityController" class="checkbox" type="checkbox">使用安全控件
                                    </label>
                                    </div>
                                    <div class="lgncode c_b" id="captcha">
                                    </div>

                                    <!-- 错误信息 -->
                                    <div class="err_tip" id="error-outcon">
                                        <div class="dis_box"><em class="icon_error"></em><span class="error-con"></span></div>
                                    </div>

                                    <!-- 登录频繁 -->
                                    <div id="error-forbidden" class="err_forbidden">您的操作频率过快，请稍后再试。</div>
                                    <div class="btns_bg">
                                        <input class="btnadpt btn_orange" id="login-button" value="立即登录" type="submit">
                                        <span id="custom_display_8" class="sns-default-container sns_default_container" style="display: none;">
                                      </span>
                                    </div>

                                    <!-- 其他登录方式 s -->
                                    <div style="display: block;" class="other_login_type sns-login-container" id="custom_display_16">
                                        <fieldset class="oth_type_tit">
                                        <legend align="center" class="oth_type_txt">小米商城登录</legend>
                                        </fieldset>
                                    <div class="oth_type_links">
                                        <a class="icon_type btn_qq sns-login-link" data-type="qq" href="https://account.xiaomi.com/pass/sns/login/auth?appid=100284651&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop" title="QQ登录" target="_blank"><i class="btn_sns_icontype icon_default_qq"></i></a>
                                        <a class="icon_type btn_weibo sns-login-link" data-type="weibo" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2996826273&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop" title="微博登录" target="_blank"><i class="btn_sns_icontype icon_default_weibo"></i></a>
                                        <a class="icon_type btn_alipay sns-login-link" data-type="alipay" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2088011127562160&amp;&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop" title="支付宝登录" target="_blank"><i class="btn_sns_icontype icon_default_alipay"></i></a>
                                        <a class="icon_type btn_weixin sns-login-link" data-type="weixin" href="https://account.xiaomi.com/pass/sns/login/auth?appid=wxxmzh&amp;scope=snsapi_login&amp;callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop" title="微信登录" target="_blank"><i class="btn_sns_icontype icon_default_weixin"></i></a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

                    <!-- 其他登录方式 e -->
                    <div class="n_links_area" id="custom_display_64">
                        <a class="outer-link" href="/home1/register">注册小米帐号</a><span>|</span>
                        <a class="outer-link" href="/home1/repwd">忘记密码？</a>
                    </div>
                    </div>
                    <div class="tabs-con tabs_con" data-con="qr" ">
                    </div>

                    <!-- tab con e -->
                    </div>

                    <div class="ercode_area" id="login-qrcode">
                        <div class="ercode_pannel">
                            <a class="code_close" href="javascript:void(0)" title="关闭" id="qrcode-close"><span class="icon_code_close"></span></a>
                            <div class="ercode_box">
                                <div class="code_hd">
                                <h3 class="code_tit">小米帐号扫码登录</h3>
                                <p>请使用最新版MIUI中“我的小米”进行扫码登录</p>
                                </div>
                                <div class="code_iframe">
                                    <iframe style="background:#fff;" src="%E5%B0%8F%E7%B1%B3%E5%B8%90%E5%8F%B7%20-%20%E7%99%BB%E5%BD%95_files/a_002.htm" id="qriframe" scrolling="no" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="custom_display_4" class="n-footer">  
        <div class="nf-link-area clearfix">
            <ul class="lang-select-list">
                <li><a href="javascript:void(0)" data-lang="zh_CN" class="lang-select-li current">简体</a>|</li>
                <li><a href="https://account.xiaomi.com/pass/serviceLogin?callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop&amp;_bannerBiz=mistore&amp;_qrsize=180&amp;_locale=zh_TW" data-lang="zh_TW" class="lang-select-li">繁体</a>|</li>
                <li><a href="https://account.xiaomi.com/pass/serviceLogin?callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop&amp;_bannerBiz=mistore&amp;_qrsize=180&amp;_locale=en" data-lang="en" class="lang-select-li">English</a>|</li>
                <li><a href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank">常见问题</a></li>
            </ul>
        </div>
    <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="{{ asset('Home/login/img/ghs.png') }}"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
    </div>
  

<style>
﻿html,body,h1,h2,h3,h4,h5,h6,blockquote,p,pre,dl,dd,ol,ul,li,a,span,caption,th,td,form,fieldset,legend,input,button,textarea,address{margin:0;padding:0}h1,h2,h3,h4,h5,h6{font-size:100%}ol,ul{list-style:none}li{list-style:none}fieldset,img{border:0}address,cite,dfn,em,var{font-style:normal}code,kbd,pre,samp{font-family:courier
 
new,courier,monospace}input,button,textarea,select{font-size:100%}input,button,select,textarea{outline:0}textarea{resize:none}table{border-collapse:collapse;border-spacing:0;empty-cells:show;font-size:inherit}abbr[title]{border-bottom:1px
 
dotted;cursor:help}a,a:hover{text-decoration:none}a,label,:focus{outline:0
 none}a,img,input{border:0 
none}s{font-style:normal;text-decoration:none}body{font-size:12px;font-family:arial,"Hiragino"
 Sans GB","Microsoft YaHei","微軟正黑體","儷黑 
Pro",sans-serif}button,input,select,textarea{font-family:arial,"Hiragino
 Sans GB","Microsoft 
YaHei",sans-serif}input::-moz-placeholder,textarea::-moz-placeholder{color:#3b3b3b;font-weight:normal}::-webkit-input-placeholder{color:#3b3b3b;font-weight:normal}input:-ms-input-placeholder{color:#3b3b3b;font-weight:normal}::-ms-clear{display:none}::-ms-reveal{display:none}.clearfix:after{display:block;content:"\20";height:0;clear:both;overflow:hidden;visibility:hidden}.clearfix{*zoom:1}input::-ms-clear{display:none}input::-ms-reveal{display:none}input:-webkit-autofill{-webkit-box-shadow:0"
 0 0 1000px white inset}@media screen and 
(-ms-high-contrast:active),(-ms-high-contrast:none){a{background-color:transparent}}input{background:0;border:0
 
none}input[type="button"],input[type="submit"],input[type="reset"],a{-webkit-appearance:none;appearance:none}.fl{float:left}.fr{float:right}.nbg{background:none
 
!important}.t_l{text-align:left}.t_c{text-align:center}.t_r{text-align:right}.c_b:before,.c_b:after{content:"";display:block}.c_b:after{clear:both}.c_b{zoom:1}.hidden,.hide{display:none}.hideimportant{display:none
 
!important}.underline{text-decoration:underline}input[type=text]::-ms-clear,input[type=password]::-ms-reveal{display:none}input{color:#333}input:required,input:invalid{-moz-box-shadow:none;box-shadow:none}input::-moz-focus-inner{border:0}html,body{height:100%}body{background:#f5f5f5;color:#757575}a{color:#757575}input{color:#333}::-webkit-input-placeholder{color:#9d9d9d}input:-ms-input-placeholder{color:#9d9d9d}.ercode,.icon_type5,.icon_arrow_down,.icon_error{background:url(https://account.xiaomi.com/static/res/f234829/account-static/respassport/acc-2014/img/sprite_login.gif)
 
no-repeat}.btn_turn,.btn_mod_close,.icon_code_close{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAALCAYAAACprHcmAAAABGdBTUEAALGPC/xhBQAAAJxJREFUGBl1kLEOgkAQRA9pVUKihTR2FBREPwD/v6ehsDYhoTBWVsAb5AguMMm7I7sz3O0FzrkYOnjDlg409ruxm7MrtKaI4g30w0EyPsAGZCzgBH+ygYUxnNm/fH8gAx2ZQgUNDJqbVVBAxjs84QWT/IC+oKOvUEICdgZKP9k72hm8z1mjbywCRzqrzzMmFFD/HLBcoIUatqR3jnolNxObIsWRIwAAAABJRU5ErkJggg==)
 no-repeat center 
center}.wrapper{width:100%;min-height:100%;height:auto;display:-webkit-box;display:box;display:-moz-box;display:-o-box;-webkit-box-align:center;-moz-box-align:center;-o-box-align:center;box-align:center;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;box-pack:center}.wrap{padding-bottom:80px;padding-top:100px
 \9}@media screen and 
(min-width:0\0){.wrap{padding-top:100px}}.layout{background-color:#fff;width:854px;margin:0
 auto 
20px;position:relative;min-height:620px}.mainbox{padding-bottom:30px}.captcha_layout{min-height:700px}.ercode{width:68px;height:68px;position:absolute;right:0;top:0;opacity:.3;filter:alpha(opacity=30)}.ercode:hover,.ercode:focus{opacity:1;filter:alpha(opacity=100)}.header_tit{padding:50px
 0 22px}.milogo{width:49px;height:48px;margin:0 
auto;display:block}.header_tit_txt{font-size:30px;color:#424242;font-weight:normal;padding-top:22px}.lgn_inputbg{position:relative}.login_area{width:358px;margin:0
 
auto;padding-bottom:20px}.labelbox{display:block;margin-bottom:14px;border:1px
 solid #e0e0e0}.labelbox 
input{width:326px;height:22px;line-height:22px;padding:13px 16px 13px 
14px;display:block}.placehld{width:326px;padding:13px 16px 13px 
14px}.country_list{cursor:pointer;display:none;float:left}.country_regin{max-width:80px;overflow:hidden;white-space:nowrap;-webkit-text-overflow:ellipsis;-moz-text-overflow:ellipsis;-o-text-overflow:ellipsis;text-overflow:ellipsis}.item_account{float:left}.country_regin{margin-right:8px}.country_code{padding-right:12px;position:relative}.icon_arrow_down{width:8px;height:5px;position:absolute;top:8px;right:0;background-position:-19px
 -69px}.eye_panel{display:none}.divflex 
.item_account{width:270px}.turn_area{display:none;height:11px;padding:18px
 0 18px 
10px;float:left}.btn_turn{width:11px;height:11px;display:block}.turn_off{display:none}.add_regioncode
 .item_account{width:226px}.add_regioncode 
.country_list{height:22px;line-height:22px;padding:13px 10px 13px 
0;margin-left:10px;color:#333;border-right:1px solid 
#e0e0e0;display:block;overflow:hidden;position:relative}.add_regioncode 
.country_list 
span{display:inline-block;vertical-align:middle}.add_regioncode 
.turn_area{display:block}.add_regioncode 
.animation{position:relative;-webkit-animation:fade-in ease-in-out 
.5s;animation-name:fade-in;animation-timing-function:ease-in-out;animation-duration:.5s}@media
 screen and 
(-webkit-min-device-pixel-ratio:0){.login_user{display:-webkit-box;display:box}.turn_area,.country_list,.item_account{float:none}.item_account{-webkit-box-flex:1;box-flex:1}}.input_normal{width:100%}.lgncode{padding-bottom:14px}.lgncode
 
.chkcode_img{*vertical-align:top}.code_label{float:left;*float:none;*display:inline-block;width:220px;margin-bottom:0}.code_label
 .code{width:190px}.code_label 
.placehld{width:190px}.chkcode_img{margin-left:10px;cursor:pointer}.btns_bg{padding-top:10px;padding-bottom:15px}.btnadpt{width:100%;height:50px;line-height:50px;display:block;margin-bottom:14px;text-align:center;font-size:14px;color:#fff;cursor:pointer}.btn_orange{background-color:#ef5b00}.btn_sns_icontype{background:url(https://account.xiaomi.com/static/res/166d6dc/account-static/respassport/acc-2014/img/icons_type.png);width:18px;height:18px;margin-right:10px;display:inline-block;vertical-align:middle}.btn_facebook{background-color:#3a5897}.btn_qq{background-color:#0288d1}.btn_weibo{background-color:#d32f2f}.btn_alipay{background-color:#0ae}.btn_weixin{background-color:#00d20d}.icon_default_qq{background-position:-19px
 0}.icon_default_weibo{background-position:-38px 
0}.icon_default_alipay{background-position:-57px 
0;width:25px}.icon_default_weixin{background-position:-84px 
0;width:23px}.oth_type_tit{border-top:1px solid 
#e0e0e0;padding-top:10px;padding-bottom:10px\9}.oth_type_txt{font-size:14px;color:#b0b0b0;margin:0
 auto;text-align:center;width:100% \9}@media screen and 
(min-width:0\0){.oth_type_tit{padding-bottom:0}.oth_type_txt{width:auto}}.oth_type_links{padding-top:10px;text-align:center}.icon_type{width:30px;height:30px;margin:0
 
12px;display:inline-block;-webkit-border-radius:50%;-moz-border-radius:50%;-o-border-radius:50%;border-radius:50%;-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);-ms-filter:grayscale(100%);-o-filter:grayscale(100%);filter:grayscale(100%);filter:url(https://account.xiaomi.com/static/res/e5c6b4e/account-static/respassport/acc-2014/sass/gray.svg#grayscale)}.icon_type:hover{-webkit-filter:grayscale(0);-moz-filter:grayscale(0);-ms-filter:grayscale(0);-o-filter:grayscale(0);filter:grayscale(0);filter:none}.icon_type
 .btn_sns_icontype{display:block;margin:4px auto 0}.icon_type 
.icon_default_alipay{margin-top:6px;margin-left:4px}.icon_type 
.icon_default_weixin{margin-top:6px}.n_links_area{padding-top:30px;text-align:center;color:#e0e0e0}.n_links_area
 a{padding:0 9px;font-size:14px}.n_links_area 
a:hover{color:#ff6700}.site_info{padding-top:10px}.site_info_txt{color:#ff6700}.site_info_link{padding:0
 5px}.country-container{width:100%;background:#fff;border:1px solid 
#e8e8e8;position:absolute;left:0;top:61px;z-index:98;display:none}.btn_commom_cancel{display:none}.country-code{height:280px;overflow-x:hidden;overflow-y:auto}.country-code
 .header{background:#fcdecc;padding:0 
10px;margin-bottom:6px;line-height:30px;color:#ef5b00}.country-code 
.record{padding:0 
10px;line-height:39px;overflow:hidden;border-bottom:1px solid 
#e0e0e0;cursor:pointer}.country-code 
.record:hover{background:#eaeaea}.country-code .record 
span{height:39px;overflow:hidden}.country-code 
.record-country{float:left;max-width:74%;color:#000;cursor:pointer}.country-code
 .record-code{float:right;max-width:20%;color:#9d9d9d}.country-code 
.code_style1{background:#f2f6e9;border:1px solid #b7ce8b}.country-code 
.code_style2{background:#f8f2ec;border:1px solid #fac084}.country-code 
.code_style3{background:#f9eaeb;border:1px solid #fca1a7}.country-code 
.code_style4{background:#f2f2f2;border:1px solid #c9c9c9}.country-code 
.code_style5{background:#e1f6f6;border:1px solid 
#73bade}.countrycode-container-usual 
.header{display:none}.countrycode-container-usual 
.list{zoom:1;*padding-bottom:10px}.countrycode-container-usual 
.list:before,.countrycode-container-usual 
.list:after{content:"";display:block}.countrycode-container-usual 
.list:after{clear:both}.countrycode-container-usual 
.record{float:left;margin:0 0 10px 10px;padding:6px 
10px;line-height:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px}.countrycode-container-usual
 .record span{height:20px}.countrycode-container-usual 
.record:hover{background:0}.countrycode-container-usual 
.record-country{max-width:100%}.countrycode-container-usual 
.record-code{max-width:100%;display:none}.n-footer{height:80px;margin-top:-80px;text-align:center}.nf-intro{padding:10px}.nf-link-area{text-align:center}.nf-link-area
 li{display:inline-block;*display:inline;*zoom:1}.nf-link-area 
a{display:inline-block;*display:inline;*zoom:1;padding:0 
10px;color:#757575}.nf-link-area a:hover,.nf-link-area 
a.current{color:#333}.faq_link a{padding:0 
10px}.ercode_area{background-color:#fff;width:854px;margin:0 
auto;display:none;position:relative;z-index:98}.ercode_box{width:600px;height:400px;position:absolute;left:50%;top:50%;margin-top:-200px;margin-left:-300px}.code_close{background-color:#bdbdbd;-webkit-border-radius:50%;-moz-border-radius:50%;-o-border-radius:50%;border-radius:50%;width:30px;height:30px;position:absolute;right:20px;top:20px}.icon_code_close{width:14px;height:14px;display:block;margin:8px
 auto 
0;cursor:pointer}.code_hd{padding-bottom:50px;text-align:center}.code_tit{font-size:30px;color:#ff6700;font-weight:normal;padding-bottom:10px}.code_iframe{text-align:center}.ercode_container{background:#fff}.na-img-area{width:80px;height:80px;border:2px
 solid 
#e3e3e3;border-radius:50%;padding:4px;background:#fff;position:relative;z-index:4;margin:0
 
auto}.na-img-bg-area{width:100%;height:100%;border-radius:50%;overflow:hidden}.na-img-bg-area:empty{background:url(https://account.xiaomi.com/static/res/7c3e9b0/passport/acc-2014/img/n-avator-bg.png)
 0 0 no-repeat}.na-img-area 
img{display:block;width:100%;height:100%;border-radius:50%}.single_imgarea{text-align:center;line-height:20px;font-size:14px;color:#333}.single_imgarea
 
.us_name{padding-top:10px}.single_imgarea,.confirm_con{line-height:20px;font-size:14px;color:#333}.confirm_con{padding-top:15px}.confirm_con
 .txt{padding-bottom:5px}@-moz-document 
url-prefix(){.add_regioncode{width:100%;-moz-box-sizing:border-box;box-sizing:border-box}}.msk{width:100%;height:100%;background:#000;position:absolute;left:0;top:0;display:none;opacity:.4;filter:alpha(opacity=40)}.err_tip{margin-bottom:5px;line-height:20px;color:#f56700;display:none}.icon_error{background-position:0
 -69px}.icon_error{width:14px;height:14px;margin:-1px 5px 0 
0;overflow:hidden;display:inline-block;vertical-align:middle}.err_tip 
span{vertical-align:middle}.err_forbidden{padding:10px;border:1px solid 
#e0e0e0;line-height:1.5;background:#f5f5f5;color:#ff6700;display:none}.error_bg{border:1px
 solid #f56700 !important}@media only screen and 
(max-width:850px){.layout{width:100%;min-width:400px;min-height:480px}.mainbox{padding-bottom:15px}.header_tit{padding:25px
 0 
0}.header_tit_txt{font-size:22px;padding-top:15px}.btns_bg{padding-bottom:10px;padding-top:10px}.oth_type_links{padding-top:5px}.n_links_area{padding-top:0}}@-webkit-keyframes
 fade-in{from{left:-100%}to{left:0}}@-moz-keyframes 
fade-in{from{left:-100%}to{left:0}}@-o-keyframes 
fade-in{from{left:-100%}to{left:0}}@keyframes 
fade-in{from{left:-100%}to{left:0}}.search-code{padding:10px}.search-code-input{width:314px;height:22px;line-height:22px;padding:5px
 10px 5px 10px;display:block;border:1px solid #e0e0e0}.search-mode 
.header,.search-mode .record{display:none}.search-mode 
.countrycode-container-usual .record,.search-mode 
.selected{display:block}.only_pwdlogin 
.ercode{display:none}.only_qrlogin .code_close,.only_qrlogin 
.code_hd{display:none}.only_qrlogin 
.ercode_box{width:auto;height:auto;position:static;margin:0;padding-top:100px\9}.only_qrlogin
 
.ercode_pannel{width:100%;height:100%;display:-webkit-box;display:box;display:-moz-box;display:-o-box;-webkit-box-align:center;-moz-box-align:center;-o-box-align:center;box-align:center;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;box-pack:center}@media
 screen and (min-width:0\0){.only_qrlogin 
.ercode_box{padding-top:100px}}.security_Controller{display:none}.checkbox_area{cursor:pointer}.checkbox{vertical-align:text-top;margin-right:3px}.security-controller-modal{width:400px;height:300px;left:50%;top:50%;margin-top:-150px;margin-left:-200px}.security_controller_panel{padding:30px
 0 0 25px;line-height:22px}.security_controller_panel 
h4{color:#a1a1a1;padding-bottom:30px}.security_controller_panel 
p{color:#333}.security_controller_panel 
.tip_msg{color:#ff6700;padding:10px 0 0 
30px}.tip_btns{padding-top:30px;text-align:center}.btn_tip{min-width:100px;_width:100px;height:33px;margin:0
 2px;padding:0 
10px;line-height:33px;text-align:center;display:inline-block;vertical-align:middle;cursor:pointer;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px}.btn_commom{background:#ff6700;border:1px
 solid #ff6700;color:#fff}.labelbox 
.security_controller_chk{width:320px;margin:2px;padding:11px 16px 11px 
14px;border:1px solid 
#e0e0e0}.pwd-object{margin-bottom:14px}.nav_tabs_panel,.autologin_panel{display:none}.tabs_con{display:none}.tabs_con.now{display:block}.bgiframe{display:none}.win_banner_mistore{background:#fff}.win_banner_mistore
 .lgnheader,.win_banner_mistore .ercode{display:none}.win_banner_mistore
 
.n-footer{background:#fff;margin-top:100px;position:relative}.win_banner_mistore
 .wrapper{display:block;min-height:auto}.win_banner_mistore 
.wrap{padding-bottom:0;position:relative;padding-top:0 \9}@media screen 
and (min-width:0\0){.win_banner_mistore 
.wrap{padding-top:0}}.win_banner_mistore 
.layout_panel,.win_banner_mistore .h_panel,.win_banner_mistore 
.login_banner{width:1130px;margin:0 auto}.win_banner_mistore 
.layout_panel{padding-top:130px}.win_banner_mistore 
.layout{width:400px;min-height:524px;margin-bottom:0;margin-right:0;font-size:14px}.win_banner_mistore
 .mainbox{padding-bottom:0}.win_banner_mistore 
.err_tip{color:#f56600}.win_banner_mistore .error_bg{border:1px solid 
#f56600 !important}.win_banner_mistore 
.login_area{width:338px;padding-bottom:0}.win_banner_mistore .labelbox 
input{width:306px}.win_banner_mistore 
.code_label{width:200px}.win_banner_mistore .code_label 
.code{width:170px}.win_banner_mistore 
.btnadpt{font-size:18px}.win_banner_mistore 
.btn_orange{background-color:#f56600}.win_banner_mistore 
.lgncode{padding-bottom:0;margin-bottom:14px}.win_banner_mistore 
.h_panel 
.h_logo{width:200px;height:98px;background:url(https://account.xiaomi.com/static/res/7f6f2f5/account-static/respassport/acc-2014/img/mistore_logo.png)
 no-repeat}.win_banner_mistore 
.login_banner_panel{background:#1e2f40;width:100%;min-height:588px;position:absolute;left:0;top:0}.win_banner_mistore
 .lbnr,.win_banner_mistore 
.rbnr{width:50%;height:100%;position:absolute}.win_banner_mistore 
.lbnr{background-color:#fef6eb;left:0}.win_banner_mistore 
.rbnr{background-color:#ef625b;left:50%}.win_banner_mistore 
.login_banner{height:588px;background:url(https://account.xiaomi.com/static/res/ab2708c/account-static/respassport/images/banner.jpg)
 no-repeat top center;position:relative}.win_banner_mistore 
.bgiframe{width:100%;height:100%;position:absolute;display:block}.win_banner_mistore
 .btns_bg{padding-bottom:3px}.win_banner_mistore 
.oth_type_links{padding-top:3px}.win_banner_mistore .icon_type{margin:0 
17px}.win_banner_mistore .loginbox{position:relative}.win_banner_mistore
 
.other_login_type{position:absolute;top:350px;width:100%}.win_banner_mistore
 .n_links_area{padding-top:0;color:#999}.win_banner_mistore 
.n_links_area a{padding:0 9px 0 6px;color:#999}.win_banner_mistore 
.n_links_area a:hover{color:#f56600}.win_banner_mistore 
.oth_type_txt{color:#bbb}.win_banner_mistore 
.err_forbidden{margin-bottom:10px}.win_banner_mistore 
.search-code-input{width:294px}.win_banner_mistore .add_regioncode 
.item_account{width:212px}.win_banner_mistore 
.nav_tabs_panel,.win_banner_mistore 
.autologin_panel{display:block}.win_banner_mistore 
.nav_tabs{padding:27px 0 
24px;text-align:center;font-size:24px;color:#e0e0e0}.win_banner_mistore 
.nav_tabs a{color:#666}.win_banner_mistore .nav_tabs 
a:hover,.win_banner_mistore .nav_tabs 
a.now{color:#f56600}.win_banner_mistore 
.line{width:1px;height:24px;margin:0 35px 0 42px;border:1px solid 
#e0e0e0}.win_banner_mistore 
.tab_qrcon{text-align:center;padding-top:78px}.win_banner_mistore 
.custom_sub_txt{padding-top:14px;font-size:14px}.win_banner_mistore 
.custom_sub_txt span{padding:0 5px;color:#ff6700}</style>
<script>
(function(){function f(f,k){var g;if(f)for(var 
e,u=k?1:0;e=v[u++];)if(g=x[e])for(var 
b,F=0;(b=g[F])&&!0!==f(e,b);F++);}function e(e){var 
k;f(function(g,f){if((e+"").toUpperCase()===f.B)return 
k=k||f,!0});return k}function z(e){var 
k;f(function(g,f){e=(e+"").replace(/^0+/,"").replace(/^\+/,"");var 
u=(f.N+"").replace(/^0+/,"").replace(/^\+/,"");e===u&&(k=f)});return 
k}function A(e){var 
k;f(function(g,f){if((e+"").toLowerCase()===f.C.toLowerCase())return 
k=f,!0});return k}function q(f){return e(f)||
z(f)||A(f)}var v="usual A B C D E F G H I J K L M N O P Q R S T U V W X Y"
 Z".split(" 
"),x={usual:[{C:"\u4e2d\u56fd",N:"+86",B:"CN"},{C:"\u4e2d\u56fd\u53f0\u6e7e",N:"+886",B:"TW"},{C:"\u4e2d\u56fd\u9999\u6e2f",N:"+852",B:"HK"},{C:"Brazil",N:"+55",B:"BR"},{C:"India",N:"+91",B:"IN"},{C:"Indonesia",N:"+62",B:"ID"},{C:"Malaysia",N:"+60",B:"MY"}],A:[{B:"AD",C:"Andorra",N:"+376"},{B:"AF",C:"Afghanistan",N:"+93"},{B:"AG",C:"Antigua
 and 
Barbuda",N:"+1"},{B:"AI",C:"Anguilla",N:"+1"},{B:"AL",C:"Albania",N:"+355"},"
{B:"AM",C:"Armenia",N:"+374"},{B:"AO",C:"Angola",N:"+244"},{B:"AR",C:"Argentina",N:"+54"},{B:"AS",C:"American"
 
Samoa",N:"+1"},{B:"AT",C:"Austria",N:"+43"},{B:"AU",C:"Australia",N:"+61"},{B:"AW",C:"Aruba",N:"+297"},{B:"AZ",C:"Azerbaijan",N:"+994"},{B:"DZ",C:"Algeria",N:"+213"}],B:[{B:"BA",C:"Bosnia
 and 
Herzegovina",N:"+387"},{B:"BB",C:"Barbados",N:"+1"},{B:"BD",C:"Bangladesh",N:"+880"},{B:"BE",C:"Belgium",N:"+32"},{B:"BF",C:"Burkina
 Faso",N:"+226"},{B:"BG",C:"Bulgaria",N:"+359"},{B:"BH",C:"Bahrain","
N:"+973"},{B:"BI",C:"Burundi",N:"+257"},{B:"BJ",C:"Benin",N:"+229"},{B:"BM",C:"Bermuda",N:"+1"},{B:"BN",C:"Brunei",N:"+673"},{B:"BO",C:"Bolivia",N:"+591"},{B:"BQ",C:"Bonaire,"
 Sint Eustatius and 
Saba",N:"+599"},{B:"BR",C:"Brazil",N:"+55"},{B:"BS",C:"Bahamas",N:"+1"},{B:"BT",C:"Bhutan",N:"+975"},{B:"BW",C:"Botswana",N:"+267"},{B:"BY",C:"Belarus",N:"+375"},{B:"BZ",C:"Belize",N:"+501"},{B:"IO",C:"British
 Indian Ocean Territory",N:"+246"},{B:"VG",C:"British Virgin 
Islands",N:"+1"}],C:[{B:"CA",C:"Canada","
N:"+1"},{B:"CC",C:"Cocos Islands",N:"+61"},{B:"CF",C:"Central African "
Republic",N:"+236"},{B:"CG",C:"Congo",N:"+242"},{B:"CI",C:"C\u00f4te 
d'Ivoire",N:"+225"},{B:"CK",C:"Cook '
Islands",N:"+682"},{B:"CL",C:"Chile",N:"+56"},{B:"CM",C:"Cameroon",N:"+237"},{B:"CN",C:"China",N:"+86"},{B:"CO",C:"Colombia",N:"+57"},{B:"CR",C:"Costa
 Rica",N:"+506"},{B:"CU",C:"Cuba",N:"+53"},{B:"CV",C:"Cape 
Verde",N:"+238"},{B:"CW",C:"Cura\u00e7ao",N:"+599"},{B:"CX",C:"Christmas
 Island",N:"+61"},{B:"CY",C:"Cyprus",N:"+357"},"
{B:"CZ",C:"Czech "
Republic",N:"+420"},{B:"HR",C:"Croatia",N:"+385"},{B:"KH",C:"Cambodia",N:"+855"},{B:"KM",C:"Comoros",N:"+269"},{B:"KY",C:"Cayman
 
Islands",N:"+1"},{B:"TD",C:"Chad",N:"+235"}],D:[{B:"DJ",C:"Djibouti",N:"+253"},{B:"DK",C:"Denmark",N:"+45"},{B:"DM",C:"Dominica",N:"+1"},{B:"DO",C:"Dominican
 
Republic",N:"+1"}],E:[{B:"EC",C:"Ecuador",N:"+593"},{B:"EE",C:"Estonia",N:"+372"},{B:"EG",C:"Egypt",N:"+20"},{B:"ER",C:"Eritrea",N:"+291"},{B:"ET",C:"Ethiopia",N:"+251"},{B:"GQ",C:"Equatorial
 Guinea","
N:"+240"},{B:"SV",C:"El "
Salvador",N:"+503"}],F:[{B:"FI",C:"Finland",N:"+358"},{B:"FJ",C:"Fiji",N:"+679"},{B:"FK",C:"Falkland
 Islands",N:"+5+"},{B:"FO",C:"Faroe 
Islands",N:"+298"},{B:"FR",C:"France",N:"+33"},{B:"GF",C:"French 
Guiana",N:"+594"},{B:"PF",C:"French 
Polynesia",N:"+689"}],G:[{B:"DE",C:"Germany",N:"+49"},{B:"GA",C:"Gabon",N:"+241"},{B:"GD",C:"Grenada",N:"+1"},{B:"GE",C:"Georgia",N:"+995"},{B:"GG",C:"Guernsey",N:"+44"},{B:"GH",C:"Ghana",N:"+233"},{B:"GI",C:"Gibraltar",N:"+350"},{B:"GL",C:"Greenland","
N:"+299"},{B:"GM",C:"Gambia",N:"+220"},{B:"GN",C:"Guinea",N:"+224"},{B:"GP",C:"Guadeloupe",N:"+590"},{B:"GR",C:"Greece",N:"+30"},{B:"GT",C:"Guatemala",N:"+502"},{B:"GU",C:"Guam",N:"+1"},{B:"GW",C:"Guinea-Bissau",N:"+245"},{B:"GY",C:"Guyana",N:"+592"}],H:[{B:"HK",C:"Hong"
 
Kong",N:"+852"},{B:"HN",C:"Honduras",N:"+504"},{B:"HT",C:"Haiti",N:"+509"},{B:"HU",C:"Hungary",N:"+36"}],I:[{B:"ID",C:"Indonesia",N:"+62"},{B:"IE",C:"Ireland",N:"+353"},{B:"IL",C:"Israel",N:"+972"},{B:"IM",C:"Isle
 Of Man",N:"+44"},"
{B:"IN",C:"India",N:"+91"},{B:"IQ",C:"Iraq",N:"+964"},{B:"IR",C:"Iran",N:"+98"},{B:"IS",C:"Iceland",N:"+354"},{B:"IT",C:"Italy",N:"+39"}],J:[{B:"JE",C:"Jersey",N:"+44"},{B:"JM",C:"Jamaica",N:"+1"},{B:"JO",C:"Jordan",N:"+962"},{B:"JP",C:"Japan",N:"+81"}],K:[{B:"KE",C:"Kenya",N:"+254"},{B:"KG",C:"Kyrgyzstan",N:"+996"},{B:"KI",C:"Kiribati",N:"+686"},{B:"KW",C:"Kuwait",N:"+965"},{B:"KZ",C:"Kazakhstan",N:"+7"}],L:[{B:"LA",C:"Laos",N:"+856"},{B:"LB",C:"Lebanon",N:"+961"},{B:"LI",C:"Liechtenstein",N:"+423"},
{B:"LR",C:"Liberia",N:"+231"},{B:"LS",C:"Lesotho",N:"+266"},{B:"LT",C:"Lithuania",N:"+370"},{B:"LU",C:"Luxembourg",N:"+352"},{B:"LV",C:"Latvia",N:"+371"},{B:"LY",C:"Libya",N:"+218"}],M:[{B:"FM",C:"Micronesia",N:"+691"},{B:"MA",C:"Morocco",N:"+212"},{B:"MC",C:"Monaco",N:"+377"},{B:"MD",C:"Moldova",N:"+373"},{B:"ME",C:"Montenegro",N:"+382"},{B:"MG",C:"Madagascar",N:"+261"},{B:"MH",C:"Marshall"
 
Islands",N:"+692"},{B:"MK",C:"Macedonia",N:"+389"},{B:"ML",C:"Mali",N:"+223"},{B:"MM",C:"Myanmar",N:"+95"},"
{B:"MN",C:"Mongolia",N:"+976"},{B:"MO",C:"Macao",N:"+853"},{B:"MQ",C:"Martinique",N:"+596"},{B:"MR",C:"Mauritania",N:"+222"},{B:"MS",C:"Montserrat",N:"+1"},{B:"MT",C:"Malta",N:"+356"},{B:"MU",C:"Mauritius",N:"+230"},{B:"MV",C:"Maldives",N:"+960"},{B:"MW",C:"Malawi",N:"+265"},{B:"MX",C:"Mexico",N:"+52"},{B:"MY",C:"Malaysia",N:"+60"},{B:"MZ",C:"Mozambique",N:"+258"},{B:"YT",C:"Mayotte",N:"+262"}],N:[{B:"KP",C:"North"
 Korea",N:"+850"},{B:"MP",C:"Northern Mariana 
Islands",N:"+1"},{B:"NA",C:"Namibia",N:"+264"},"
{B:"NC",C:"New "
Caledonia",N:"+687"},{B:"NE",C:"Niger",N:"+227"},{B:"NF",C:"Norfolk 
Island",N:"+672"},{B:"NG",C:"Nigeria",N:"+234"},{B:"NI",C:"Nicaragua",N:"+505"},{B:"NL",C:"Netherlands",N:"+31"},{B:"NO",C:"Norway",N:"+47"},{B:"NP",C:"Nepal",N:"+977"},{B:"NR",C:"Nauru",N:"+674"},{B:"NU",C:"Niue",N:"+683"},{B:"NZ",C:"New
 
Zealand",N:"+64"}],O:[{B:"OM",C:"Oman",N:"+968"}],P:[{B:"PA",C:"Panama",N:"+507"},{B:"PE",C:"Peru",N:"+51"},{B:"PG",C:"Papua
 New Guinea",N:"+675"},{B:"PH",C:"Philippines",N:"+63"},"
{B:"PK",C:"Pakistan",N:"+92"},{B:"PL",C:"Poland",N:"+48"},{B:"PR",C:"Puerto"
 
Rico",N:"+1"},{B:"PS",C:"Palestine",N:"+970"},{B:"PT",C:"Portugal",N:"+351"},{B:"PW",C:"Palau",N:"+680"},{B:"PY",C:"Paraguay",N:"+595"}],Q:[{B:"QA",C:"Qatar",N:"+974"}],R:[{B:"RE",C:"Reunion",N:"+262"},{B:"RO",C:"Romania",N:"+40"},{B:"RU",C:"Russia",N:"+7"},{B:"RW",C:"Rwanda",N:"+250"}],S:[{B:"BL",C:"Saint
 
Barth\u00e9lemy",N:"+590"},{B:"CH",C:"Switzerland",N:"+41"},{B:"ES",C:"Spain",N:"+34"},{B:"KN",C:"Saint
 Kitts And Nevis","
N:"+1"},{B:"KR",C:"South Korea",N:"+82"},{B:"LC",C:"Saint "
Lucia",N:"+1"},{B:"LK",C:"Sri Lanka",N:"+94"},{B:"MF",C:"Saint 
Martin",N:"+590"},{B:"PM",C:"Saint Pierre And 
Miquelon",N:"+508"},{B:"RS",C:"Serbia",N:"+381"},{B:"SA",C:"Saudi 
Arabia",N:"+966"},{B:"SB",C:"Solomon 
Islands",N:"+677"},{B:"SC",C:"Seychelles",N:"+248"},{B:"SD",C:"Sudan",N:"+249"},{B:"SE",C:"Sweden",N:"+46"},{B:"SG",C:"Singapore",N:"+65"},{B:"SH",C:"Saint
 Helena",N:"+290"},{B:"SI",C:"Slovenia",N:"+386"},{B:"SJ",C:"Svalbard 
And Jan Mayen","
N:"+47"},{B:"SK",C:"Slovakia",N:"+421"},{B:"SL",C:"Sierra "
Leone",N:"+232"},{B:"SM",C:"San 
Marino",N:"+378"},{B:"SN",C:"Senegal",N:"+221"},{B:"SO",C:"Somalia",N:"+252"},{B:"SR",C:"Suriname",N:"+597"},{B:"ST",C:"Sao
 Tome And Principe",N:"+239"},{B:"SX",C:"Sint Maarten (Dutch 
part)",N:"+1"},{B:"SY",C:"Syria",N:"+963"},{B:"SZ",C:"Swaziland",N:"+268"},{B:"VC",C:"Saint
 Vincent And The 
Grenadines",N:"+1"},{B:"WS",C:"Samoa",N:"+685"},{B:"ZA",C:"South 
Africa",N:"+27"}],T:[{B:"CD",C:"The Democratic Republic Of Congo","
N:"+243"},{B:"TC",C:"Turks And Caicos "
Islands",N:"+1"},{B:"TG",C:"Togo",N:"+228"},{B:"TH",C:"Thailand",N:"+66"},{B:"TJ",C:"Tajikistan",N:"+992"},{B:"TK",C:"Tokelau",N:"+690"},{B:"TL",C:"Timor-Leste",N:"+670"},{B:"TM",C:"Turkmenistan",N:"+993"},{B:"TN",C:"Tunisia",N:"+216"},{B:"TO",C:"Tonga",N:"+676"},{B:"TR",C:"Turkey",N:"+90"},{B:"TT",C:"Trinidad
 and 
Tobago",N:"+1"},{B:"TV",C:"Tuvalu",N:"+688"},{B:"TW",C:"Taiwan",N:"+886"},{B:"TZ",C:"Tanzania",N:"+255"}],U:[{B:"AE",C:"United
 Arab Emirates",N:"+971"},"
{B:"GB",C:"United "
Kingdom",N:"+44"},{B:"UA",C:"Ukraine",N:"+380"},{B:"UG",C:"Uganda",N:"+256"},{B:"US",C:"United
 
States",N:"+1"},{B:"UY",C:"Uruguay",N:"+598"},{B:"UZ",C:"Uzbekistan",N:"+998"},{B:"VI",C:"U.S.
 Virgin 
Islands",N:"+1"}],V:[{B:"VA",C:"Vatican",N:"+379"},{B:"VE",C:"Venezuela",N:"+58"},{B:"VN",C:"Vietnam",N:"+84"},{B:"VU",C:"Vanuatu",N:"+678"}],W:[{B:"EH",C:"Western
 Sahara",N:"+212"},{B:"WF",C:"Wallis And 
Futuna",N:"+681"}],Y:[{B:"YE",C:"Yemen",N:"+967"}],Z:[{B:"ZM",C:"Zambia",N:"+260"},"
{B:"ZW",C:"Zimbabwe",N:"+263"}]};window.RegionsCode={getAll:function(f,e){for(var
 g=["<div "
class='country-code'>"],q,u,b,F=0;u=v[F++];)if(q=x[u],b="",f&&u in 
f&&(b=f[u]),q){g.push("<div class='container '
countrycode-container-"+u+"'><div '
class='header'>"+(b||u)+"</div>");g.push("<ul class='list'>");for(var 
da=0;b=q[da++];)u=e?(b.N+"").replace(/^0+/,function(){return"+"}):"",g.push("<li
 class='record clearfix'><span class='record-country' data-code='"+u+"' 
data-brief='"+b.B+"'>"+b.C+"</span><span class='record-code'>"+
u+"</span></li>");g.push("</ul></div>")}g.push("</div>");return 
g.join("")},getData:function(){return{list:v,data:x}},getByBrief:e,getByCode:z,getByCountry:A,search:q,searchLike:function(e){var
 k=[];if(e=(e+"").replace(/^\+/,"")){var 
g=q(e);g&&k.push(g);f(function(g,f){-1!==f.C.toLowerCase().indexOf(e)?k.push(f):-1!==(f.N+"").indexOf(e)&&k.push(f)})}return
 k},searchLikeData:function(e){var 
k=[];if(e=(e+"").replace(/^\+/,"")){var 
g=q(e);g&&k.push(g);f(function(f,g){RegExp("^"+e,"i").test(g.C.toLowerCase())?
k.push(g):RegExp("^"+e).test(g.N.replace(/^\+/,""))&&k.push(g)})}return
 k},addUsual:function(f){var 
e;if(e=f.B)if(e=f.C)if(e=f.N){a:{e=0;for(var 
g;g=x.usual[e++];)if(g.N===f.N||f.B===g.B){e=!0;break 
a}e=!1}e=!e}e&&x.usual&&x.usual.unshift(f)}}})();
var CryptoJS=CryptoJS||function(f,e){var 
z={},A=z.lib={},q=function(){},v=A.Base={extend:function(F){q.prototype=this;var
 b=new 
q;F&&b.mixIn(F);b.hasOwnProperty("init")||(b.init=function(){b.$super.init.apply(this,arguments)});b.init.prototype=b;b.$super=this;return
 b},create:function(){var 
F=this.extend();F.init.apply(F,arguments);return 
F},init:function(){},mixIn:function(F){for(var b in 
F)F.hasOwnProperty(b)&&(this[b]=F[b]);F.hasOwnProperty("toString")&&(this.toString=F.toString)},clone:function(){return
 this.init.prototype.extend(this)}},
x=A.WordArray=v.extend({init:function(b,f){b=this.words=b||[];this.sigBytes=f!=e?f:4*b.length},toString:function(b){return(b||k).stringify(this)},concat:function(b){var
 
f=this.words,g=b.words,e=this.sigBytes;b=b.sigBytes;this.clamp();if(e%4)for(var
 u=0;u<b;u++)f[e+u>>>2]|=(g[u>>>2]>>>24-u%4*8&255)<<24-(e+u)%4*8;else 
if(65535<g.length)for(u=0;u<b;u+=4)f[e+u>>>2]=g[u>>>2];else 
f.push.apply(f,g);this.sigBytes+=b;return this},clamp:function(){var 
b=this.words,g=this.sigBytes;b[g>>>2]&=4294967295<<32-
g%4*8;b.length=f.ceil(g/4)},clone:function(){var 
b=v.clone.call(this);b.words=this.words.slice(0);return 
b},random:function(b){for(var 
g=[],e=0;e<b;e+=4)g.push(4294967296*f.random()|0);return new 
x.init(g,b)}}),H=z.enc={},k=H.Hex={stringify:function(b){var 
f=b.words;b=b.sigBytes;for(var g=[],e=0;e<b;e++){var 
u=f[e>>>2]>>>24-e%4*8&255;g.push((u>>>4).toString(16));g.push((u&15).toString(16))}return
 g.join("")},parse:function(b){for(var 
g=b.length,f=[],e=0;e<g;e+=2)f[e>>>3]|=parseInt(b.substr(e,2),16)<<
24-e%8*4;return new 
x.init(f,g/2)}},g=H.Latin1={stringify:function(b){var 
g=b.words;b=b.sigBytes;for(var 
f=[],e=0;e<b;e++)f.push(String.fromCharCode(g[e>>>2]>>>24-e%4*8&255));return
 f.join("")},parse:function(b){for(var 
f=b.length,g=[],e=0;e<f;e++)g[e>>>2]|=(b.charCodeAt(e)&255)<<24-e%4*8;return
 new x.init(g,f)}},I=H.Utf8={stringify:function(b){try{return 
decodeURIComponent(escape(g.stringify(b)))}catch(e){throw 
Error("Malformed UTF-8 data");}},parse:function(b){return 
g.parse(unescape(encodeURIComponent(b)))}},
u=A.BufferedBlockAlgorithm=v.extend({reset:function(){this._data=new 
x.init;this._nDataBytes=0},_append:function(b){"string"==typeof 
b&&(b=I.parse(b));this._data.concat(b);this._nDataBytes+=b.sigBytes},_process:function(b){var
 
e=this._data,g=e.words,u=e.sigBytes,t=this.blockSize,k=u/(4*t),k=b?f.ceil(k):f.max((k|0)-this._minBufferSize,0);b=k*t;u=f.min(4*b,u);if(b){for(var
 
q=0;q<b;q+=t)this._doProcessBlock(g,q);q=g.splice(0,b);e.sigBytes-=u}return
 new x.init(q,u)},clone:function(){var b=v.clone.call(this);
b._data=this._data.clone();return 
b},_minBufferSize:0});A.Hasher=u.extend({cfg:v.extend(),init:function(b){this.cfg=this.cfg.extend(b);this.reset()},reset:function(){u.reset.call(this);this._doReset()},update:function(b){this._append(b);this._process();return
 this},finalize:function(b){b&&this._append(b);return 
this._doFinalize()},blockSize:16,_createHelper:function(b){return 
function(e,g){return(new 
b.init(g)).finalize(e)}},_createHmacHelper:function(e){return 
function(g,f){return(new b.HMAC.init(e,
f)).finalize(g)}}});var b=z.algo={};return z}(Math);
(function(f){function 
e(e,b,g,f,k,q,t){e=e+(b&g|~b&f)+k+t;return(e<<q|e>>>32-q)+b}function 
z(e,b,g,f,q,k,t){e=e+(b&f|g&~f)+q+t;return(e<<k|e>>>32-k)+b}function 
A(e,b,g,f,k,q,t){e=e+(b^g^f)+k+t;return(e<<q|e>>>32-q)+b}function 
q(e,b,g,f,q,k,t){e=e+(g^(b|~f))+q+t;return(e<<k|e>>>32-k)+b}for(var 
v=CryptoJS,x=v.lib,H=x.WordArray,k=x.Hasher,x=v.algo,g=[],I=0;64>I;I++)g[I]=4294967296*f.abs(f.sin(I+1))|0;x=x.MD5=k.extend({_doReset:function(){this._hash=new
 H.init([1732584193,4023233417,2562383102,271733878])},
_doProcessBlock:function(f,b){for(var k=0;16>k;k++){var 
v=b+k,C=f[v];f[v]=(C<<8|C>>>24)&16711935|(C<<24|C>>>8)&4278255360}var 
k=this._hash.words,v=f[b+0],C=f[b+1],B=f[b+2],t=f[b+3],x=f[b+4],D=f[b+5],H=f[b+6],I=f[b+7],w=f[b+8],P=f[b+9],X=f[b+10],T=f[b+11],O=f[b+12],U=f[b+13],Q=f[b+14],V=f[b+15],n=k[0],m=k[1],l=k[2],p=k[3],n=e(n,m,l,p,v,7,g[0]),p=e(p,n,m,l,C,12,g[1]),l=e(l,p,n,m,B,17,g[2]),m=e(m,l,p,n,t,22,g[3]),n=e(n,m,l,p,x,7,g[4]),p=e(p,n,m,l,D,12,g[5]),l=e(l,p,n,m,H,17,g[6]),m=e(m,l,p,n,I,22,g[7]),
n=e(n,m,l,p,w,7,g[8]),p=e(p,n,m,l,P,12,g[9]),l=e(l,p,n,m,X,17,g[10]),m=e(m,l,p,n,T,22,g[11]),n=e(n,m,l,p,O,7,g[12]),p=e(p,n,m,l,U,12,g[13]),l=e(l,p,n,m,Q,17,g[14]),m=e(m,l,p,n,V,22,g[15]),n=z(n,m,l,p,C,5,g[16]),p=z(p,n,m,l,H,9,g[17]),l=z(l,p,n,m,T,14,g[18]),m=z(m,l,p,n,v,20,g[19]),n=z(n,m,l,p,D,5,g[20]),p=z(p,n,m,l,X,9,g[21]),l=z(l,p,n,m,V,14,g[22]),m=z(m,l,p,n,x,20,g[23]),n=z(n,m,l,p,P,5,g[24]),p=z(p,n,m,l,Q,9,g[25]),l=z(l,p,n,m,t,14,g[26]),m=z(m,l,p,n,w,20,g[27]),n=z(n,m,l,p,U,5,g[28]),p=z(p,n,
m,l,B,9,g[29]),l=z(l,p,n,m,I,14,g[30]),m=z(m,l,p,n,O,20,g[31]),n=A(n,m,l,p,D,4,g[32]),p=A(p,n,m,l,w,11,g[33]),l=A(l,p,n,m,T,16,g[34]),m=A(m,l,p,n,Q,23,g[35]),n=A(n,m,l,p,C,4,g[36]),p=A(p,n,m,l,x,11,g[37]),l=A(l,p,n,m,I,16,g[38]),m=A(m,l,p,n,X,23,g[39]),n=A(n,m,l,p,U,4,g[40]),p=A(p,n,m,l,v,11,g[41]),l=A(l,p,n,m,t,16,g[42]),m=A(m,l,p,n,H,23,g[43]),n=A(n,m,l,p,P,4,g[44]),p=A(p,n,m,l,O,11,g[45]),l=A(l,p,n,m,V,16,g[46]),m=A(m,l,p,n,B,23,g[47]),n=q(n,m,l,p,v,6,g[48]),p=q(p,n,m,l,I,10,g[49]),l=q(l,p,n,m,
Q,15,g[50]),m=q(m,l,p,n,D,21,g[51]),n=q(n,m,l,p,O,6,g[52]),p=q(p,n,m,l,t,10,g[53]),l=q(l,p,n,m,X,15,g[54]),m=q(m,l,p,n,C,21,g[55]),n=q(n,m,l,p,w,6,g[56]),p=q(p,n,m,l,V,10,g[57]),l=q(l,p,n,m,H,15,g[58]),m=q(m,l,p,n,U,21,g[59]),n=q(n,m,l,p,x,6,g[60]),p=q(p,n,m,l,T,10,g[61]),l=q(l,p,n,m,B,15,g[62]),m=q(m,l,p,n,P,21,g[63]);k[0]=k[0]+n|0;k[1]=k[1]+m|0;k[2]=k[2]+l|0;k[3]=k[3]+p|0},_doFinalize:function(){var
 
e=this._data,b=e.words,g=8*this._nDataBytes,k=8*e.sigBytes;b[k>>>5]|=128<<24-k%32;var
 q=f.floor(g/
4294967296);b[(k+64>>>9<<4)+15]=(q<<8|q>>>24)&16711935|(q<<24|q>>>8)&4278255360;b[(k+64>>>9<<4)+14]=(g<<8|g>>>24)&16711935|(g<<24|g>>>8)&4278255360;e.sigBytes=4*(b.length+1);this._process();e=this._hash;b=e.words;for(g=0;4>g;g++)k=b[g],b[g]=(k<<8|k>>>24)&16711935|(k<<24|k>>>8)&4278255360;return
 e},clone:function(){var 
e=k.clone.call(this);e._hash=this._hash.clone();return 
e}});v.MD5=k._createHelper(x);v.HmacMD5=k._createHmacHelper(x)})(Math);
(function(f,e,z){function A(a){return 
a.getFullYear()+"-"+(a.getMonth()+1)+"-"+a.getDate()+" "
"+a.getHours()+":"+a.getMinutes()+":"+a.getSeconds()+":"+a.getMilliseconds()}function"
 
q(a,d){if(Array.prototype.forEach)Array.prototype.forEach.call(a,d);else
 for(var h=0,b=a.length;h<b;h++)d.call(a,a[h],h)}function 
v(a){return(a+"").replace(/^\s+/,"").replace(/\s+$/,"")}function 
x(a){return(a+"").replace(/\</g,"&lt").replace(/\>/g,"&gt")}function 
H(a){for(var 
d=e.cookie.split(";"),h="",b=0;b<d.length;b++)if(v(d[b]).substr(0,
a.length)==a){h=v(d[b]).substr(a.length+1);break}return 
unescape(h)}function k(a){var 
d="",h=!1;if(0===location.search.length)return 
d;if(0==location.search.indexOf("?")&&1<location.search.indexOf("="))for(arrSource=location.search.substring(1,location.search.length).split("&"),i=0;i<arrSource.length&&!h;)0<arrSource[i].indexOf("=")&&arrSource[i].split("=")[0].toLowerCase()==a.toLowerCase()&&(d=arrSource[i].split("=")[1],h=!0),i++;return
 d}function g(a,d,h){if(!d)return a;h=h||/\{([\w-]+)\}/g;a=I(a);
return a.replace(h,function(a,b){if(d[b]!==z){var c;c=d[b]instanceof 
Function?d[b].call(d):I(d[b]);return h.test(c)?g(c,d,h):c}return 
f.__debug__?b:""})}function I(a){var d={"{quot}":"'"},h;for(h in 
d)d.hasOwnProperty(h)&&(a=(a+"").replace(h,d[h]));return a}function 
u(a){try{return Array.prototype.slice.call(a,0)}catch(d){for(var 
h=[],b=0,c=a.length;b<c;b++)h.push(a[b]);return h}}function 
b(a,d){a=a||"";d=d||e;if(0===a.indexOf("#"))return 
d.getElementById(a.substring(1));var h=[];if(/^[a-zA-Z]{1,}$/.test(a))h=
u(d.getElementsByTagName(a));else 
if(0===a.indexOf("."))if(d.querySelectorAll)h=u(d.querySelectorAll(a));else
 for(var 
b=d.getElementsByTagName("*"),c=a.substring(1),f=0,g=b.length;f<g;f++)J(b[f],c)&&h.push(b[f]);return
 h}function F(a){return"[object "
Array]"===Object.prototype.toString.call(a)}function da(a,d){for(var "
h=0,b=a.length;h<b;h++)if(a[h]===d)return!0;return!1}function 
C(a,d){a&&1===a.nodeType&&("none"===a.style.display?a.style.display=d?"block":a._oldDisplay||"":d&&(a.style.display="block"))}
function
 
B(a){a&&1===a.nodeType&&"none"!==a.style.display&&(a._oldDisplay=a.style.display||"",a.style.display="none")}function
 t(a,d){if(F(a))for(var h=0,b=a.length;h<b;h++)t(a[h],d);else 
J(a,d)||(a.className=""===a.className?d:a.className+(" "+d))}function 
J(a,d){if(a.className){var 
h=a.className.split(/\s+/);h.unshift("000");h.push("000");return 
2<h.length&&-1<h.join(",").indexOf(","+d+",")}return!1}function 
D(a,d){if(F(a))for(var h=0,b=a.length;h<b;h++)D(a[h],d);else 
if(J(a,d)){for(var h=a.className.split(/\s+/),
b=0,c=h.length;b<c;b++)if(d===h[b]){h.splice(b,1);break}a.className=h.join(""
 ")}}function ha(a,d){var h=("getComputedStyle"in "
f?f.getComputedStyle(a):a.currentStyle)[d];if("width"===d||"height"===d)h=Math.max(parseInt(h)||0,a["client"+ma(d)],a["offset"+ma(d)]);return
 h}function ma(a){return(a+"").replace(/^[a-z]/,function(a){return 
a.toUpperCase()})}function 
w(a,d,h){a.addEventListener?a.addEventListener(d,h,!1):a.attachEvent?a.attachEvent("on"+d,h):a["on"+d]=h}function
 P(a,d){try{a[d]()}catch(h){}}
function X(a){return"string"===typeof 
a?f.JSON&&f.JSON.parse?f.JSON.parse(a):eval("("+a+")"):a}function 
T(a){var 
d={};a=(a+"").replace("&&&START&&&","");try{d=X(a)}catch(h){}return 
d}function O(a){if(f.JSON&&f.JSON.stringify)return 
f.JSON.stringify(a);var d=[];if("object"==typeof a){if(a instanceof 
Array){var h=[];d.push("[");for(var 
b=0;b<a.length;b++)h.push(O(a[b]));d.push(h.join());d.push("]")}else 
if(null!=a){d.push("{");h=[];for(b in 
a)h.push('"'+b+'":'+O(a[b]));d.push(h.join());d.push("}")}return 
d.join("")}return"number"!==
typeof a?'"'+(a||"")+'"':a}function U(a){var d=[],h="",b;for(b in 
a)h=typeof 
a[b],"object"!==h||"number"==h?d.push(b+"="+a[b]):d.push(b+"="+encodeURIComponent(U(a[b])));return
 d.join("&")}function Q(a,d){var 
h=e.createElement("input");if(!("placeholder"in 
h||h._initedplace)){h._initedplace=!0;var 
b=a.getAttribute("placeholder"),c=a.id||a.name,f=a.className;h.value=b;h.id=c+"_pla";h.className=f;t(a,"hideimportant");a.setAttribute("pla_id",c+"_pla");h.setAttribute("for_id",c);h.style.color="#999";a.parentNode.insertBefore(h,
a);w(h,"focus",function(){t(h,"hideimportant");D(a,"hideimportant");a.focus()});w(a,"blur",function(){""==v(a.value)&&(t(a,"hideimportant"),D(h,"hideimportant"))});d&&(a.value="",t(a,"hideimportant"),D(h,"hideimportant"));try{a.focus(),a.blur()}catch(g){}}}function
 V(a){this.key=a||"account.xiaomi.com"}function 
n(a){if("object"!==typeof a)return a;var d=[],h;for(h in 
a)d.push(h+"="+encodeURIComponent(a[h]));return d.join("&")}function 
m(a){this.id=Da++;for(var d in a)a.hasOwnProperty(d)&&(this[d]=
a[d]);this.xhr=new 
(f.XMLHttpRequest||f.ActiveXObject)("Microsoft.XMLHTTP");this.request()}function
 l(a){a=a||{};var d=Ea,h={},b;for(b in d)b in h||b in 
a||(a[b]=d[b]);this.opt=a;this.init()}function 
p(a){aa.on(function(d,h){a.style.height=Math.max(d.height,h.height)+"px";a.style.width=h.width+"px"});aa.onbeforeResize(function(){a.style.height="auto";a.style.width="100%"})}function
 ea(a){var 
d=ha(c.layout,"height"),h=ha(c.layout,"width");c.qrIframe.height=r.qrsize;c.qrIframe.width=r.qrsize;c.loginQr.style.height=
d+"px";c.loginQr.style.width=h+"px";c.qrIframe.src=na(r.qrsize);B(c.loginMain);C(c.loginQr,!0);!0===a&&t(c.body,"only_qrlogin");return!1}function
 
oa(a){c.qrIframe.src="about:blank";B(c.loginQr);C(c.loginMain,!0);!0===a&&t(c.body,"only_pwdlogin");return!1}function
 na(a){var 
d="",h=JSP_VAR;k("callback")&&k("sid")&&(h=location.search);if("object"===typeof
 h){for(var b in 
h)h.hasOwnProperty(b)&&h[b]&&(d+="&"+b+"="+encodeURIComponent(h[b]));d="?"+d.substring(1)}else
 d=h;return"/pass/lp"+d+"&_style=lite&_qrsize="+
a}function Fa(a){var d=pa(a),h=Ga[a],b="";d&&h&&(b=g('<a href="{url}" '
class="btnadpt btn_{type} sns-login-link" title="{text}" "
data-type="{type}">                       <i class="btn_sns_icontype 
icon_default_{type}"></i><span>{text}</span>                     "
</a>',{url:d,type:a,text:h}));return b}function 
Q(a,d){if(!r.supportPlaceholder){var 
h=e.createElement("span"),b=a.parentNode,c=a.getAttribute("placeholder");h.className="placehld";h.innerHTML=c;b.insertBefore(h,a);b.style.position="relative";
h.style.position="absolute";h.style.cursor="text";h.style.lineHeight=ha(a,"lineHeight")||1.2;h.style.left=(a.offsetLeft||0)+"px";h.style.top=(a.offsetTop||0)+"px";d&&(h.style.color=d);Y.on(a,function(a,d){""===a?C(h):B(h)});w(h,E.click,function(){try{a.focus()}catch(d){}})}}function
 qa(a){s.add("objectCopy",a);var d={},h,b={};for(h in a)h in a&&!(h in 
b)&&(d[h]=a[h]);return d}function 
Ha(a){w(a,E.focus,function(){ra(a)});w(a,E.blur,function(){clearTimeout(a.__checkInputTC)})}function
 ra(a){var d=
a.value,h="__oldVal"in 
a?a.__oldVal:a.__oldVal=d,b=a._inputChangeFns,c;if(d!==h)for(var 
e=0;e<b.length;e++)"function"===typeof 
b[e]&&!1===b[e].call(a,d,h,a.__reset)&&(c=!1);!1!==c&&(a.__oldVal=d);a.__reset&&(a.__reset=!1);a.__checkInputTC=setTimeout(function(){ra(a)},50)}function
 
sa(a){a=(a+"").replace(/\s+/,"");a={miid:/^\d{3,}/.test(a),phoneLike:/^\d{6,}$/.test(a),phone:/^\++\d{6,}$/.test(a)||/^0{2}\d{6,}/.test(a),emailLike:-1!==(a+"").indexOf("@"),email:/^[\w.\-]+@(?:[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*\.)+[A-Za-z]{2,6}$/.test(a),
nonum:/[^0-9]/.test(a)};return
 a.phoneLike||a.phone||a.email||a.miid?a:!1}function ta(a,d){var h=new 
Date;h.setDate(h.getDate()+-3650);e.cookie="userName="+escape(a)+";expires="+h.toGMTString()+";path=/;domain=.xiaomi.com;max-age=315360000";h=parseInt(a,10)===d?d:d+"|"+a;LStore.set("user",h)}function
 fa(a,d){d=d||r.captChaURL;a.src=d+"&"+(new 
Date).getTime();c.captchaCode&&(c.captchaCode.__reset=!0)&&(c.captchaCode.value="");t(c.layout,"captcha_layout")}function
 ua(a){r.captchaInit=1;c.captcha.innerHTML=
r.captchaTpl;c.captchaCode=b("#captcha-code");c.captchaImg=b("#captcha-img");Q(c.captchaCode);w(c.captchaImg,E.click,function(){clearTimeout(c.captchaImg.__refreshImg);c.captchaImg.__refreshImg=setTimeout(function(){fa(c.captchaImg)},100)});Y.on(c.captchaCode,function(a,h,b){!b&&L.clean(c.captchaCode)})}function
 
va(a){r.captchaInit&&fa(c.captchaImg);L.clean(c.captchaCode);L.show(y.verifyPwd?K.PWD_RES_ERROR:K.LOGIN_RES_ERROR,c.userName)}function
 Ia(a){for(var d="",b=0;10>b;){d=decodeURIComponent(a);
if(a===d)break;a=d;b++}a=x(a);a=a.replace(/\$\{(.*)\}\$/g,function(a,d,b){return'<span'
 class="strong-color" 
style="color:#ff7e00">'+d+"</span>"});c.header.innerHTML=a}function 
Ja(){var a;a="<div class='search-code'><i class='icon_search'></i><input
 type='text' 
class='search-code-input'></div>"+RegionsCode.getAll({usual:K.POPULAR},!0);c.codeContainerCon.innerHTML=a;c.searchCodeInput=b(".search-code-input",c.codeContainer)[0];c.recordCode=b(".record-country",c.codeContainer);c.usual=b(".countrycode-container-usual",
c.codeContainer)[0];c.usualRecord=b(".record",c.usual);var
 d="";q(c.usualRecord,function(a,b){Math.random();for(var 
c=wa();c===d;)c=wa();d=c;t(a,"code_style"+c)});Y.on(c.searchCodeInput,function(a,d){a=v(a);if(0<a.length){t(c.codeContainer,"search-mode");var
 b=RegionsCode.searchLikeData(a)}else return 
D(c.codeContainer,"search-mode"),!1;q(c.recordCode,function(a){var 
d=v(a.getAttribute("data-brief"));if(J(a.parentNode.parentNode.parentNode,"countrycode-container-usual"))return!1;a:{for(var
 h=b,h=
h||[],c=0,e;e=h[c++];)if(d===e.B){d=!0;break 
a}d=!1}d?t(a.parentNode,"selected"):D(a.parentNode,"selected")})});w(c.searchCodeInput,E.keydown,function(a){a=a||f.event;if(13==(a.charCode||a.keyCode)){var
 
d=b(".selected",c.codeContainer)[0];d&&P(d,"click");a.returnValue=!1;a.preventDefault&&a.preventDefault()}"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()})}function wa(){var a=Math.random();return 
Math.ceil(a*Ka)}function 
Z(){c.searchCodeInput&&(c.searchCodeInput.value=
"");D(c.codeContainer,"search-mode");B(c.codeContainer);y.codeShown=!1}function
 xa(a){var 
d=b(".record-country",a)[0];a=d.getAttribute("data-code");d=d.getAttribute("data-brief");c.codeValue.innerHTML=a;s.add("selectCode",a,d)}function
 
La(a){q(c.tabsCon,function(d,b){d.getAttribute("data-con")===a?C(d,!0):B(d)});"qr"===a?(c.qriframe2.width=r.qrsize,c.qriframe2.height=r.qrsize,c.qriframe2.src=na(r.qrsize)):c.qriframe2.src="about:blank"}function
 Ma(a){q(b("a",c.navTabs),function(d,b){d.getAttribute("data-tab")===
a?t(d,"now"):D(d,"now")})}function Na(){var 
a={category:"mistat_session",values:[]};_t_.htmlCache?a.values.push({start:_t_.jspcomplete,end:_t_.htmlLoadEnd,env:"UsedCache"}):a.values.push({start:_t_.htmlGetStart,end:_t_.htmlGetEnd,env:"UnusedCache"});return
 a}function Oa(){var 
a={category:"mistat_basic",values:[]};a.values.push({key:"model",type:"property",value:R.name+""
 
"+R.version});a.values.push({key:"locale",type:"property",value:r.locale});r.os&&a.values.push({key:"os",type:"property",value:r.os});"
r.resolution&&a.values.push({key:"resolution",type:"property",value:r.resolution});return
 a}function Pa(){var 
a={category:"Ext",values:[]};_t_.supportLocalstorage?a.values.push({key:"A-supportcache",type:"event",value:1}):a.values.push({key:"A-unSupportcache",type:"event",value:1});_t_.htmlCache?a.values.push({key:"A-cached",type:"event",value:1}):(a.values.push({key:"A-unCached",type:"event",value:1}),a.values.push({key:"A-staticLoadTime",type:"count",value:Math.max(_t_.htmlGetEnd-_t_.htmlGetStart,
0)}));a.values.push({key:"A-FullTime",type:"count",value:Math.max(_t_.htmlLoadEnd-_d_.startTS)});a.values=a.values.concat(Qa(_d_.startTS===_d_.endTS?"C":"B"));return
 a}function Qa(a){var 
d=[];d.push({key:a+"-jspLoadTime",type:"count",value:Math.max(_d_.endTS-_d_.startTS,0)});d.push({key:a+"-FullTime",type:"count",value:Math.max(_t_.htmlLoadEnd-_d_.startTS,0)});_t_.htmlCache?d.push({key:a+"-CachedFullTime",type:"count",value:Math.max(_t_.htmlLoadEnd-_d_.startTS,0)}):d.push({key:a+"-unCachedFullTime",
type:"count",value:Math.max(_t_.htmlLoadEnd-_d_.startTS,0)});return
 d}function Ra(){if(N.tmpVal)for(var a in 
N.data)-1!==N.tmpVal.indexOf(a)&&(s.add("COMMAND",a),"function"===typeof
 N.data[a]&&N.data[a](),N.tmpVal="",N.history.push(a))}var 
ia=f.MiLogin||(f.MiLogin={}),S=function(){var 
a=location.hostname;return-1<a.indexOf("onebox")?"onebox":-1<a.indexOf("preview")?"preview":"release"}(),s=function(){var
 
a=[];return{add:function(d,b,c){a.push({title:d,message:b,more:c,time:A(new
 Date)});-1!==(location.search+
"").indexOf("debug")&&"console"in f&&"function"===typeof 
f.console.log&&console.log(arguments)},get:function(){return 
a}}}(),R=function(){var 
a=navigator.userAgent,d={};/\s+chrome\/([\d\.]*)/i.test(a)?(d.name="Chrome",d.version=parseInt(RegExp.$1)):/msie\s+(\d+\.\d+)/i.test(a)?(d.name="IE",d.version=parseFloat(RegExp.$1)):/\s+firefox\/([\d\.]*)/i.test(a)?(d.name="Firefox",d.version=parseInt(RegExp.$1)):/applewebKit\/([\d\.]*)/i.test(a)?(d.name="Webkit",d.version=parseInt(RegExp.$1),/miuibrowser\/([\d\.]*)/i.test(a)&&
(d.name="MIUI"
 
Browser",d.version=parseInt(RegExp.$1)),/version\/([\d\.]*)\s+Safari/i.test(a)&&(d.name="Safari",d.version=parseInt(RegExp.$1))):/trident\/([\d\.]*)/i.test(a)?(a=a.match(/rv:([\d\.]*)/))&&2<=a.length?(d.name="IE",d.version=parseFloat(a[1])):(d.name="Trident",d.version=RegExp.$1):(d.name=a,d.version=0);return"
 d}(),ya=function(){var 
a=e.createElement("a");a.target="_blank";e.body.appendChild(a);var 
d=0,b=null;return 
function(c,g){if("_self"===g)location.href=c;else{a.href=c;var k=(new 
Date).getTime();
if(!(b===c&&1E3>k-d)){b=c;d=k;try{var 
l=e.createEvent("MouseEvents");l.initMouseEvent("click",!0,!0,f);a.dispatchEvent(l)}catch(m){a.click()}}}}}();V.prototype={key:"account.xiaomi.com",_read:f.localStorage?function(){var
 a="";try{a=f.localStorage.getItem(this.key)}catch(d){}a=(new 
Function("","return "+a))();return"object"==typeof 
a&&a?a:{}}:function(){return{}},_save:f.localStorage?function(a){try{f.localStorage.setItem(this.key,O(a))}catch(d){s.add("setItem"
 \u629b\u51fa\u5f02\u5e38",R.name+" "+"
R.version)}}:function(){return!1},_readAndGc:function(a){var 
d=this._read(),b;for(b in d){var c=d[b];c.expires&&(new 
Date).getTime()-c.time>=c.expires&&delete d[b]}this._save(d);return 
a?d[a]:d},remove:function(a){var d=this._readAndGc();delete 
d[a];this._save(d)},get:function(a){a=this._readAndGc(a)||{};return 
a.value?a.value:null},set:function(a,d,b){if(!a)return!1;var 
c=this._readAndGc(),e=(new 
Date).getTime();c[a]={value:d,expires:b,time:e};this._save(c)}};f.LStore=new
 V("account.xiaomi.com");
var Da=0;m.prototype={request:function(){var 
a=this.url||"?",d=this.data||{},b=(this.method||"GET").toUpperCase(),c=this;this.xhr.onreadystatechange=function(){c.state=c.xhr.readyState;s.add("xhrReadyState",c.xhr.readyState);4==c.xhr.readyState&&(f.clearTimeout(c.timeouthandler),c.status=c.xhr.status,s.add("xhrStatus",c.status),200==c.xhr.status?c.success&&c.success(c.xhr.responseText,c.xhr):(s.add("xhrError"),c.error&&c.error(c.xhr)))};d=n(d);"GET"==b?(a=-1===a.indexOf("?")?a+("?"+d+"&_dc="+(new
 Date).getTime()):
a+("&"+d+"&_dc="+(new Date).getTime()),d=null):a+="?_dc="+(new 
Date).getTime();s.add("initopen");this.xhr.open(b,a,!0);this.xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");this.timeouthandler=f.setTimeout(function(){s.add("intoTimeout");c.timeout()},5E3);s.add("initsend");this.xhr.send(d)},timeout:function(){}};f.Ajax=function(a){return
 new m(a)};var 
aa={fns:[],beforeFns:[],inited:!1,on:function(a){"function"===typeof 
a&&this.fns.push(a);!this.inited&&this.init();f.onresize&&
f.onresize()},off:function(a){if("function"===typeof a)for(var 
d=0,b=this.fns.length;d<b;d++)if(a===this.fns[d])return 
this.fns.splice(d,1),!0;return!1},onbeforeResize:function(a){"function"===typeof
 a&&this.beforeFns.push(a)},beforeExec:function(){for(var 
a=0,d;d=this.beforeFns[a++];)d&&d.call(f)},exec:function(){this.beforeExec();var
 a;a=f.innerWidth||0;var 
d=f.innerHeight||0;a||("CSS1Compat"==e.compatMode?(a=e.documentElement.clientWidth,d=e.documentElement.clientHeight):(a=e.body.clientWidth,
d=e.body.clientHeight));a={width:a,height:d};for(var
 
d=e.documentElement,b=e.body,c=Math.max(d.clientHeight||0,b.scrollHeight,d.scrollHeight||0,b.offsetHeight,d.offsetHeight||0),d={width:Math.max(d.clientWidth||0,b.scrollWidth,d.scrollWidth||0,b.offsetWidth,d.offsetWidth||0),height:c},b=e.documentElement,c=e.body,b={scleft:Math.max(b.scrollLeft||0,c.scrollLeft),sctop:Math.max(b.scrollTop||0,c.scrollTop)},c=0,g;g=this.fns[c++];)g&&g.call(f,a,d,b)},init:function(){var
 a=null,d=this;f.onresize=function(){f.clearTimeout(a);
a=f.setTimeout(function(){d.exec()},60)}},triggle:function(){this.exec()}},ja={},M=null,ga=e.body,Ea={title:"{Modal-DefTitle}",cls:"",titleCls:"",bodyCls:"",html:"",afterRender:function(){}},Sa=function(){var
 a=0;return 
function(){return"modal-id-"+a++}}();l.prototype={init:function(){var 
a=this.opt;M||(a.renderTo?M=a.renderTo:(M=e.createElement("div"),t(M,"modal_container"),M.innerHTML='<div'
 
class="modal_msk"></div>',ga.appendChild(M),!a.modalfixed&&p(M)));this.id=a.id||Sa();var
 d=this.modal=ja[this.id],
c=this;d||(d=this.modal=e.createElement("div"),t(d,"modal_tip"),this.hide(),d.id=this.id,d.innerHTML='<div
 class="modal_tip_hd modal-header"><div class="external_logo_area"><a 
class="milogo" href="javascript:void(0)"></a></div><div 
class="modal-header-text modal_tip_title"></div><a 
href="javascript:void(0)" title="" class="modal-header-close 
btn_mod_close"><span>关闭</span></a></div><div class="modal_tip_bd 
modal-body"></div>',a.renderTo?a.renderTo.appendChild(d):M.appendChild(d),this.header=
b(".modal-header",d)[0],this.title=b(".modal-header-text",d)[0],this.body=b(".modal-body",d)[0],this.closeBtn=b(".modal-header-close",d)[0],w(this.closeBtn,"click",function(){c.close()}),this.render(a),ja[this.id]=d,this.resizeModal=function(b,c,h){c=d;var
 e="getComputedStyle"in 
f?f.getComputedStyle(c):c.currentStyle;c={width:Math.max(parseInt(e.width)||0,c.clientWidth,c.offsetWidth),height:Math.max(parseInt(e.height)||0,c.clientHeight,c.offsetHeight)};e=b.height;b=b.width;var
 g=h.sctop;h=h.scleft;
a.deviceType&&"mobile"===a.deviceType||(c&&c.height&&(d.style.marginTop=c.height<e?(e-c.height)/2+"px":0+g+"px",d.style.top=0),c&&c.width&&(d.style.marginLeft=c.width<b?(b-c.width)/2+"px":0+h+"px",d.style.left=0))},a.modalfixed&&(this.resizeModal=function(){}),!a.renderTo&&aa.on(this.resizeModal));this.show()},show:function(){if(this.modal&&(C(M,"hide"),C(this.modal,"hide"),!this.opt.renderTo)){var
 
a=this;setTimeout(function(){!a.opt.modalfixed&&aa.triggle()},200)}},beforeClose:function(){if(this.opt.beforeClose)return
 this.opt.beforeClose.call(this)},
close:function(a){if(this.modal){if(!1===this.beforeClose())return 
0;a?(aa.off(this.resizeModal),M.removeChild(this.modal),this.modal=null,ja[this.id]=null,B(M,"hide")):this.hide()}},hide:function(){B(M,"hide");B(this.modal,"hide")},render:function(a){this.title.innerHTML=a.title;this.body.innerHTML=a.html;a.titleCls&&t(this.title,a.titleCls);a.bodyCls&&t(this.body,a.bodyCls);a.cls&&t(this.modal,a.cls);a.afterRender.call(this)},update:function(a,d){d&&(a.titleCls&&D(this.title,a.titleCls),a.bodyCls&&
D(this.body,a.bodyCls),a.cls&&D(this.modal,a.cls));this.render(a)}};f.Modal=l;var
 ka;(function(){ka=new l({title:"提示",cls:"mod_acc_tip "
security-controller-modal",html:'<div id="sect-controller-panel" "
class="security_controller_panel"><h4>您需要安装安全控件，才可使用安全登录。</h4><p>控件可对您的密
码进行加密保护，提升账户安全性。</p><p>请点击“立即安装控件”按钮，并根据提示进行安装。</p><div 
class="tip_msg">完成安装后，请重新启动浏览器</div></div><div class="tip_btns"><a 
title="立即安装控件" 
href="https://account.xiaomi.com/static/res/0369340/account-static/static/mipay/XiaomiCtrl.exe"
 class="btn_tip btn_commom btn-action-controller">立即安装控件</a></div>',
customDevice640:!0,modalfixed:!0,afterRender:function(){}});ka.close()})();var
 
r={locale:0===JSP_VAR.locale.indexOf("zh")?"zh_CN"===JSP_VAR.locale?"zh_CN":"zh_TW":0===JSP_VAR.locale.indexOf("en_")?"en":"sgp"===JSP_VAR.dataCenter?JSP_VAR.locale:"en",md5pwd:!0,infoUrl:"/pass/js/info?type=notice",logoWidth:50,qrsize:function(){var
 a=k("_qrsize");return parseInt(a)||270}(),loginType:function(){var 
a=k("_loginType"),d=["all","pwd","qr"],b=parseInt(a)||0;return 
da(d,a)?a:d[b]||"all"}(),region:JSP_VAR.region,
privacyLink:JSP_VAR.privacyLink,samplingRate:JSP_VAR.isPreview||location.href.indexOf("_debugMode")?100:_t_.samplingRate,samplingBase:_t_.samplingBase,supportPlaceholder:"placeholder"in
 
e.createElement("input"),captchaNeed:LStore.get("loginNeedCode"),twoStepURL:"/pass/2StepLogin/login",enableVisiablePwd:"PC"!==JSP_VAR.deviceType,enableCode:function(){var
 
a=!("sgp"!==JSP_VAR.dataCenter&&"zh_CN"===JSP_VAR.locale),d=navigator.userAgent;q(["Windows"
 CE"],function(b,c){-1!==d.indexOf(b)&&(a=!1)});return a}(),"
snsDisabled:"sgp"===JSP_VAR.dataCenter?[]:["facebook"],snsDefault:function(){var
 
a="sgp"===JSP_VAR.dataCenter?"facebook":"";/micromessenger/i.test(navigator.userAgent)&&(a="weixin");k("_snsdefault")&&(a=k("_snsdefault"));return
 
a}(),default1px_gif:"data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==",beianRecordLink:"http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134",beianRecordImg:"https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png",
captchaTpl:'<label'
 class="labelbox code_label"><input id="captcha-code" class="code" 
type="text" placeholder="请输入图片验证码"></label><img class="chkcode_img" 
id="captcha-img" src="about:blank" 
alt="点击可刷新图片验证码">',captChaURL:"/pass
/getCode?icodeType=login",loginBanner:function(){var 
a={};"mistore"===k("_bannerBiz")&&(a.name="mistore",a.src=" "
https://s1.mi.com/loginbanner.html");return 
a}()},y={lockSubmit:0,codeShown:!1,codeInit:!1},ba={LOGO:1,FOOTER:4,SNSDEFAULT:8,SNSLOGIN:16,OUTERLINK:64},ga=e.body,
E={click:"ontap"in
 
e.body?"tap":"click",focus:"focus",blur:"blur",keyup:"keyup",keypress:"keypress",keydown:"keydown"},K=
{VERIFY_PASSWORD:"需要验证您的密码",VERIFY_PASSWORD_SUBMIT:"验"
证",USER_INPUT_EMPTY:"请输入帐号",USER_INPUT_ERROR:"用户名不正确",USER_RES_ERROR:"用户
名不正确",PWD_RES_ERROR:"密码不正确",PWD_INPUT_EMPTY:"请输入密码",CODE_INPUT_EMPTY:"请输
入图片验证码",CODE_INPUT_ERROR:"验证码不正确","
CODE_RES_ERROR:"验证码不正确",LOGIN_RES_ERROR:"用户名或密码不正确",REFRESH_IMG_TIP:"点击图"
片刷新验证码",LOGIN_FORZEN:"此帐号已被冻结，暂时无法登录",POPULAR:"常用",UNKNOWN_ERROR:"\u672a
\u77e5\u9519\u8bef"},Ga={qq:"QQ登录",weibo:"微博登录",weixin:"微信登录",alipay:"支付
宝登录",facebook:"Facebook登录"},c="
{body:e.body,layout:b("#layout"),header:b("#login-title"),loginMain:b("#login-main"),loginQr:b("#login-qrcode"),loginButton:b("#login-button"),qrIframe:b("#qriframe"),
qriframe2:b("#tab-qriframe"),qrTrigger:b("#qrcode-trigger"),qrClose:b("#qrcode-close"),regionCode:b("#region-code"),codeSelector:b("#countrycode_selector"),codeContainer:b("#countrycode_container"),codeContainerCon:b("#countrycode_container_con"),codeValue:b("#countrycode_value"),manualCode:b("#manual_code"),userName:b("#username"),snsLoginItems:b(".sns-login-link"),pwd:b("#pwd"),outerLink:b(".outer-link"),captcha:b("#captcha"),langSelect:b(".lang-select-li"),mainForm:b("#login-main-form"),error:b("#error-outcon"),
errorForbidden:b("#error-forbidden"),accountInfo:b("#account-info"),accountAvator:b("#account-avator"),accountAvatorCon:b("#account-avator-con"),accountDisplayname:b("#account-displayname"),snsDefaultCon:b(".sns-default-container")[0],snsLoginCon:b(".sns-login-container")[0],recordLink:b(".beian-record-link")[0],pwdVisiable:r.enableVisiablePwd&&b("#visiablePwd"),toggleVisiable:b(".pwd-visiable")[0],pwdEye:b(".pwd-eye"),msgPrivacy:b("#msg-privacy"),securityControllerPanel:b(".security_Controller")[0],
securityController:b("#trustSecurityController"),navTabs:b("#nav-tabs"),tabsCon:b(".tabs-con"),bannerIframe:b("#bgiframe")},za={_json:"true",callback:JSP_VAR.callback,sid:JSP_VAR.sid,qs:JSP_VAR.qs,_sign:JSP_VAR._sign,serviceParam:JSP_VAR.serviceParam},$={0:function(a,d){s.add("loginPost","success",a);LStore.remove("loginNeedCode");s.add("securityStatus",a.securityStatus);0===(a.securityStatus||0)?(ta(d,a.userId),href=a.location):href=a.notificationUrl;s.add("href",href);location.href=href},81003:function(a,
d){s.add("loginPost","step2",a);LStore.remove("loginNeedCode");ta(d,a.userId);var
 
b=qa(za);b.user=encodeURIComponent(d);a.qs?b.qs=encodeURIComponent(a.qs):delete
 
b.qs;a.userId&&(b.userId=encodeURIComponent(a.userId));a.phone&&(b.phoneHint=encodeURIComponent(a.phone));a.backupPhone&&(b.backupPhone=encodeURIComponent(a.backupPhone));b._sign=encodeURIComponent(a._sign);b.callback=encodeURIComponent(a.callback);b.sid=encodeURIComponent(a.sid);b.app=!0;for(var
 c=["_locale","_customDisplay","lsrp_appName",
"mini"],e=0,g,f;g=c[e++];)(f=k(g))&&(b[g]=encodeURIComponent(f));s.add("twoStepLogin","queryObj",b);b=r.twoStepURL+"?"+U(b);location.href=b},70016:va,20003:function(){L.show(K.USER_RES_ERROR,c.userName)},87001:function(a,d){var
 
b=!0;r.captchaNeed||(r.captchaNeed=1,LStore.set("loginNeedCode","1",9E5));r.captchaInit||(b=!1,ua(a.captchaUrl));fa(c.captchaImg);b&&L.show(K.CODE_RES_ERROR,c.captchaCode)},350008:function(a){L.show(K.LOGIN_FORZEN,c.userName)},403:function(a){C(c.errorForbidden,!0)},fail:function(a){},
"default":va},la={ENTER:13,SHIFT:16,CTRL:17,ALT:18,ESC:27,DEL:46,LEFT:37,UP:38,RIGHT:39,SPACE:32,WIN:91,COMMAND:91,DOWN:40};q("ABCDEFGHIGKLMNOPQRSTUVWXYZ".split(""),function(a,d){la[a]=a.charCodeAt()});q("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIGKLMNOPQRSTUVWXYZ".split(""),function(a){a.charCodeAt()});var
 N={data:{"*#*#284#*#*":function(){var 
a="";q(s.get(),function(d){try{a+=x(O(d))+"<br/>"}catch(b){a+="stringfy "
\u51fa\u9519<br>"}});e.write(a);e.close()},"*h":function(){ya("http://static.account.xiaomi.com/html/faq/faqList.html");
this["*h"]=null},"-h":function(){ya("http://static.account.xiaomi.com/html/faq/faqList.html");this["-h"]=null},"*#*#pwd#*#*":function(){r.md5pwd=!r.md5pwd}},history:[],tmpVal:""},Aa=function(){var
 a={};w(ga,E.keydown,function(d){d=d||f.event;var 
b=d.keyCode||d.charCode,c=d.target||d.srcElement,e;b in 
a&&q(a[b]||[],function(a,b){!1===a.call(c||f)&&(e=!1)});!1===e&&(d.returnValue=!1,d.preventDefault&&d.preventDefault())});return{on:function(b,c){(a[b]||(a[b]=[])).push(c)},off:function(b,c){var
 e=a[b]||
(a[b]=[]);q(e,function(a,b){c===a&&e.splice(b,1)})}}}(),pa=function(){var
 
a={qq:"100284651",weibo:"2996826273",weixin:"wxxmzh",alipay:"2088011127562160",facebook:"222161937813280"},b=decodeURIComponent(k("third"));b||(b=encodeURIComponent(JSP_VAR.callback)+"&sid="+JSP_VAR.sid);var
 c={},e;for(e in 
a)c[e]="https://account.xiaomi.com/pass/sns/login/auth?"+["appid="+a[e],"weixin"===e?"scope=snsapi_login":"","callback="+b].join("&");return
 function(a){return a?c[a]:c}}(),Ta=function(){for(var 
a=location.search.substring(1).split("&"),
b=0;b<a.length;b++)0===a[b].indexOf("_locale=")&&(a.splice(b,1),b--);return
 function(b){return"?"+a.join("&")+"&_locale="+b}}(),L=function(){var 
a=b(".error-con",c.error)[0];return{show:function(b,e){C(c.error,!0);e&&t(e.parentNode,"error_bg");a.innerHTML=b},clean:function(b){B(c.error);b&&D(b.parentNode,"error_bg");b=a.innerHTML;D(c.userName.parentNode,"error_bg");D(c.pwd.parentNode,"error_bg");b===K.CODE_INPUT_ERROR&&D(c.captchaCode.parentNode,"error_bg");a.innerHTML=""}}}(),Y=function(){return{on:function(a,
b){var
 
c=a._inputChangeFns;c||(c=a._inputChangeFns=[],Ha(a));c.push(b)},off:function(a,b){for(var
 
c=a._inputChnageFns,e=0;e<c.length;e++)b===c[e]&&(c.splice(e,1),e--)}}}(),G=function(){return
 function(a){if("number"===typeof a)for(var d=0;8>=d;d++){var 
c=a&1<<d,e=b("#custom_display_"+c);c&&B(e)}}}(),Ka=5;_t_.htmlLoadEnd=(new
 
Date).getTime();s.add("JSP_VAR",f.JSP_VAR);s.add("_d_",f._d_);s.add("_t_",f._t_);s.add("CONF",r);s.add("STAT",y);s.add("MSG",K);s.add("env",S);s.add("browser",R);s.add("search",
location.search);s.add("=====================================\u5206\u5272\u7ebf==========================","=====================================================================");w(ga,E.keypress,function(a){a=a||f.event;if(a=a.charCode||a.keyCode)N.tmpVal+=String.fromCharCode(a);clearTimeout(N.tc);N.tc=setTimeout(Ra,50)});"pwd"===r.loginType?oa(!0):"qr"===r.loginType?ea(!0):(w(c.qrTrigger,E.click,ea),w(c.qrClose,E.click,oa),w(c.qrTrigger,E.focus,function(){Aa.on(la.SPACE,ea)}),w(c.qrTrigger,E.blur,
function(){Aa.off(la.SPACE,ea)}));t(c.body,r.locale);q(c.outerLink,function(a,b){var
 
c=a.href;a.href=c+location.search;s.add("outerlink"+b,c)});c.msgPrivacy&&(c.msgPrivacy.href=r.privacyLink);r.snsDefault?(S=Fa(r.snsDefault))&&c.snsDefaultCon&&(c.snsDefaultCon.innerHTML=S):(q(c.snsLoginItems,function(a,b){var
 
c=a.getAttribute("data-type"),e=pa(c);F(r.snsDisabled)&&da(r.snsDisabled,c)?(B(a),s.add("snsloginlink",c,"hide")):(s.add("snsloginlink",c,e),e&&(a.href=e,a.target="_blank"))}),c.snsLoginCon&&
C(c.snsLoginCon,!0));q(c.langSelect,function(a,b){var
 
c=a.getAttribute("data-lang");c===r.locale?t(a,"current"):(a.href=Ta(c),s.add("langInit",c))});r.loginBanner&&r.loginBanner.name&&(t(c.body,"win_banner_"+r.loginBanner.name),"mobile"!==JSP_VAR.deviceType&&(c.bannerIframe.src=r.loginBanner.src));s.add("linkInit","done","register,forgetPwd,snsLogin,languageSelect,loginBanner");r.captchaNeed&&(s.add("captchaNeed","pageinitNeed"),ua(),fa(c.captchaImg));Y.on(c.userName,function(a,b){var
 e=sa(a,!0);
L.clean(c.userName);r.enableCode&&(v(c.userName.value)||(y.manualCodeFlag=!0),e.phoneLike&&!e.phone&&(y.manualCodeFlag&&(y.manualControlCode=!1),y.manualControlCode?(D(c.regionCode,"add_regioncode"),y.showCodeValue=!1,y.manualCodeFlag=!1,y.manualControlCode=!0,Z()):(t(c.regionCode,"add_regioncode"),y.showCodeValue=!0)),!v(c.userName.value)||e.nonum)&&(D(c.regionCode,"add_regioncode"),Z(),y.showCodeValue=!1)});Y.on(c.pwd,function(a,b){L.clean(c.pwd);c.pwdVisiable&&(c.pwdVisiable.value=a)});c.pwdVisiable&&
Y.on(c.pwdVisiable,function(a,b){c.pwd.value=a});w(c.toggleVisiable,"click",function(a){a=a||f.event;c.toggleVisiable.__visiable?(c.toggleVisiable.__visiable=!1,D(c.pwdEye,"chk"),C(c.pwd),B(c.pwdVisiable),P(c.pwd,"focus")):(c.toggleVisiable.__visiable=!0,t(c.pwdEye,"chk"),B(c.pwd),C(c.pwdVisiable),P(c.pwdVisiable,"focus"));"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});!0===JSP_VAR.showActiveXControl?"IE"!==R.name&&"Firefox"!==R.name||C(c.securityControllerPanel,
!0):B(c.securityControllerPanel);var
 
Ba=!1;c.securityController&&(c.securityController.checked=Ba?!0:!1);w(c.securityController,E.click,function(){var
 a=!0;try{new 
ActiveXObject("XiaomiEdit.XiaomiEditCtrl.1")}catch(d){a=!1}a="IE"===R.name&&a||navigator.plugins["Xiaomi"
 Safe Control for 
NP"];(Ba=c.securityController.checked)?a?(B(c.pwd),a=e.createElement("div"),t(a,"pwd-object"),"IE"===R.name?(a.innerHTML='<object"
 id="XiaomiEdit" name="XiaomiEdit" 
classid="CLSID:E0A362BA-2608-48EA-9D8F-F45258D3091C" width="358" 
height="50"></object>',
c.pwd.parentNode.appendChild(a),e.getElementById("XiaomiEdit")):(a.innerHTML='<object
 type="application/npXiaomiEditCtl-Plugin" id="npXiaomiEdit" 
name="XiaomiEdit" width="358" 
height="48"></object>',c.pwd.parentNode.appendChild(a),e.getElementById("npXiaomiEdit")),D(c.pwd.parentNode,"labelbox")):ka.show():(C(c.pwd),t(c.pwd.parentNode,"labelbox"),b(".pwd-object")[0]&&c.pwd.parentNode.removeChild(b(".pwd-object")[0]),a&&(c.pwd.value=""))});s.add("stoppropagation
 keyevent",E.keydown+","+E.keyup+","+
E.keypress);w(c.pwd,E.keydown,function(a){a=a||f.event;"cancelBubble"in 
a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});w(c.pwd,E.keyup,function(a){a=a||f.event;"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});w(c.pwd,E.keypress,function(a){a=a||f.event;"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});c.pwdVisiable&&(w(c.pwdVisiable,E.keydown,function(a){a=a||f.event;"cancelBubble"in
 a&&(a.cancelBubble=!0);
"stopPropagation"in 
a&&a.stopPropagation()}),w(c.pwdVisiable,E.keyup,function(a){a=a||f.event;"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()}),w(c.pwdVisiable,E.keypress,function(a){a=a||f.event;"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()}));Q(c.userName);Q(c.pwd);s.add("addInputChange","userName");w(c.mainForm,"submit",function(a){a=a||f.event;a.preventDefault?a.preventDefault():a.returnValue=!1;a=y.showCodeValue?v(c.codeValue.innerHTML)+
v(c.userName.value):v(c.userName.value);var
 
d=b("#XiaomiEdit")||b("#npXiaomiEdit"),d=d&&d.GetValue()||c.pwd.value;if(!1===sa(a))return""===a?L.show(K.USER_INPUT_EMPTY,c.userName):L.show(K.USER_INPUT_ERROR,c.userName),!1;if(""===d)return
 L.show(K.PWD_INPUT_EMPTY,c.pwd),!1;var 
e=qa(za);e.user=a;e.hash=(CryptoJS.MD5(d).toString()+"").toUpperCase();!r.md5pwd&&(e.pwd=d);if(r.captchaNeed){a=v(c.captchaCode.value);if(""===a)return
 
L.show(K.CODE_INPUT_EMPTY,c.captchaCode),!1;e.captCode=a}if(y.lockSubmit)return!1;
y.lockSubmit=1;Ajax({url:"/pass/serviceLoginAuth2",method:"POST",data:e,success:function(a){y.lockSubmit=0;s.add("loginResult",a);a=T(a);var
 b=a.code,d=e.user;s.add("loginCode",b);if(b in $)$[b](a,d);else 
$["default"](a,d)},error:function(a){s.add("loginError",a.status,a.responseText);a=a.status;var
 b=e.user;a in 
$?0===a?s.add("loginsErrorStatus","in"):(s.add("loginsErrorStatus","out"),$[a]({},b)):(s.add("loginsErrorStatus","fail"),$.fail({},b));y.lockSubmit=0},timeout:function(){s.add("loginTimeout",
(new
 
Date).getTime());y.lockSubmit=0}})});S=parseInt(k("_customDisplay"))||0;G(S);r.snsDefault?(G(ba.SNSLOGIN),s.add("customDisplay","snslogin",ba.SNSLOGIN)):(s.add("customDisplay","snsdefault",ba.DEFAULT),G(ba.SNSDEFAULT));s.add("customDisplay",S);(G=k("lsrp_appName"))&&Ia(G);"true"==k("hide_third")&&(B(b("#custom_display_16")),B(b("#custom_display_8")));k("mini")&&(c.layout.style.width="100%",c.layout.style.minWidth="400px");Ajax({url:r.infoUrl,data:{_locale:r.locale},success:function(a,b){s.add("siteInfo",
a);var
 
g=T(a),g=g[r.locale]||g[JSP_VAR.locale]||[],f=e.createElement("div"),k="";q(g,function(a,b){k+='<p
 class="site_info_txt">'+(a.url?'<a href="'+a.url+'" 
class="site_info_link" 
target="_blank">':"")+a.txt+(a.url?"</a>":"")+"</p>"});t(f,"site_info");f.innerHTML=k;c.header.parentNode.appendChild(f)}});if(r.enableCode){if(G=RegionsCode.search(r.region||r.locale.split("_")[1]||"cn"))s.add("DefaultRegion",G),RegionsCode.addUsual(G),c.codeValue.innerHTML=(G.N+"").replace(/^00/,"+");w(c.codeSelector,
E.click,function(a){y.codeInit||(y.codeInit=!0,Ja());a=a||f.event;var
 
b=a.target||a.srcElement;if(J(b,"countrycode_selector")||J(b,"countrycode-value")||J(b,"country_code")||J(b,"icon_arrow_down"))y.codeShown?(B(c.codeContainer),y.codeShown=!1):(C(c.codeContainer,!0),c.searchCodeInput&&P(c.searchCodeInput,"focus"),y.codeShown=!0);"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});w(c.codeContainer,E.click,function(a){a=a||f.event;var
 b=a.target||a.srcElement;J(b,
"record")?(xa(b),Z()):J(b,"record-country")||J(b,"record-code")?(xa(b.parentNode),Z()):J(b,"search-code")||J(b,"search-code-input")||Z();"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()})}w(c.navTabs,E.click,function(a){a=a||f.event;a=a.target||a.srcElement;J(a,"navtab-link")&&(a=a.getAttribute("data-tab"),Ma(a),La(a))});var
 
G=parseInt(k("_userId"),10)||0,S=parseInt(H("userId"),10),Ca=x(H("userName")),ca=x(decodeURIComponent(k("_userName")));G&&(y.verifyPwd=!0,ca||
(ca=G,S===G&&""!==Ca&&(ca=Ca)),s.add("verifyPwd",G,ca),c.userName.value=G,c.pwd.value="",B(c.userName.parentNode),C(c.accountInfo,!0),t(c.pwd.parentNode,"accinfo_single_label"),B(c.qrTrigger),c.accountDisplayname.innerHTML=ca,c.header.innerHTML=K.VERIFY_PASSWORD,c.loginButton.value=K.VERIFY_PASSWORD_SUBMIT,c.accountDisplayname.style.fontSize="20px",c.accountDisplayname.style.paddingBottom="20px",B(b("#custom_display_"+ba.SNSLOGIN)));w(c.manualCode,E.click,function(a){a=a||f.event;y.showCodeValue&&
(y.showCodeValue=!1,y.manualCodeFlag=!1,y.manualControlCode=!0,D(c.regionCode,"add_regioncode"),t(c.manualCode.parentNode,"turn_off"),t(c.regionCode,"divflex"));Z();"cancelBubble"in
 a&&(a.cancelBubble=!0);"stopPropagation"in 
a&&a.stopPropagation()});(function(){var 
a=r.samplingBase,b=r.samplingRate;if(Math.random()*a<b){var 
a=Na(),b=Oa(),c=Pa(),g=H("deviceId")||navigator.userAgent;_d_.content=[a,b,c];var
 
a="app_id="+_t_.appId+"&app_key="+_t_.appKey+"&device_id="+g+"&channel="+JSP_VAR.dataCenter+"&version="+
JSP_VAR.deviceType+"&stat_value="+O([_d_]),f=e.createElement("img");f.style.display="none";f.src=_t_.statURL+"?"+a;e.body.appendChild(f);setTimeout(function(){e.body.removeChild(f)},1E4)}})();if(c.recordLink&&r.beianRecordLink){c.recordLink.href=r.beianRecordLink;var
 W=new 
Image,Ua=b("span",c.recordLink)[0];W.onload=W.oncomplete=function(){W._loaded=!0;Ua.appendChild(W)};setTimeout(function(){!W._loaded&&(W.src=r.default1px_gif)},1E3);W.src=r.beianRecordImg}ia&&ia.loaded&&ia.loaded()})(window,document);
</script><a target="_blank"></a><div class="modal_container" style="display: none;"><div class="modal_msk"></div><div class="modal_tip mod_acc_tip security-controller-modal" style="display: none;" id="modal-id-0"><div class="modal_tip_hd modal-header"><div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div><div class="modal-header-text modal_tip_title">提示</div><a href="javascript:void(0)" title="" class="modal-header-close btn_mod_close"><span>关闭</span></a></div><div class="modal_tip_bd modal-body"><div id="sect-controller-panel" class="security_controller_panel"><h4>您需要安装安全控件，才可使用安全登录。</h4><p>控件可对您的密码进行加密保护，提升账户安全性。</p><p>请点击“立即安装控件”按钮，并根据提示进行安装。</p><div class="tip_msg">完成安装后，请重新启动浏览器</div></div><div class="tip_btns"><a title="立即安装控件" href="https://account.xiaomi.com/static/res/0369340/account-static/static/mipay/XiaomiCtrl.exe" class="btn_tip btn_commom btn-action-controller">立即安装控件</a></div></div></div></div>

    </body>
</html>