<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
{html}{head}
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>用户卡登陆 </title>
    {require name="default:static/lib/css/new_login.css"}
    {require name="common:static/jquery-1.8.1.min.js"}
    {require name="default:static/lib/js/common.js"}
    {script}
        if(parent){
            parent.window.inputPassword = function(outIvrRefused){
                $("#password").val(outIvrRefused);
            }
        }
        var Cookies = {};
        /* 设置Cookies  */
        Cookies.set = function(name, value) {
            if ((typeof (name) != "undefined") && (name != null) && (name != "")) {
                var argv = arguments;
                var argc = arguments.length;
                var expires = (argc > 2) ? argv[2] : null;
                var path = (argc > 3) ? argv[3] : '/';
                var domain = (argc > 4) ? argv[4] : null;
                var secure = (argc > 5) ? argv[5] : false;
                document.cookie = name + "=" + escape(value) +
               ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
               ((path == null) ? "" : ("; path=" + path)) +
               ((domain == null) ? "" : ("; domain=" + domain)) +
               ((secure == true) ? "; secure" : "");
            }
        };
        
        /* 读取Cookies  */
        Cookies.get = function(name) {
            var arrCookie = document.cookie.split(";");
            for (var i = 0; i < arrCookie.length; i++) {
                var eachCookie = arrCookie[i].split("=");
                //表达式/^\s*|\s*$/ 表示前导空格和后导空格
                if (name == eachCookie[0].replace(/^\s*|\s*$/, "")) {
                    return unescape(eachCookie[1]);
                }
            }
            //没有找到相应的cookie时
            return null;
        };
        /*清除Cookies*/
        Cookies.clear = function(name) {
            if (Cookies.get(name)) {
                var expdate = new Date();
                expdate.setTime(expdate.getTime() - (1 * 24 * 60 * 60 * 1000));
                Cookies.set(name, "", expdate);
            }
        };
    {/script}
     
{/head}
{body}
    <div id="main" style="margin-top:25px;">
        <div class="header_logo">
            <div class="logo">
              <img src="img/logo.gif" />
              <!-- 食材专区登录图片 -->
              <!-- <img src="http://172.18.105.61:801/2014/shicaiZone/css/food/img/logo_login.png"></img> -->
            </div>
            
            <div class="fl">
              <a href="http://www.xinfuka.net/"><img src="img/home_1.png" title="首页" /></a>
            </div>
            
        </div>
       <div  class="login_bg shadow" style="margin-top:15px;">
       <div class="login_right fr"><img src="img/4.gif"></img></div>
       
       <div class="left">
            <div id="con">
                
                    <h2 class="selectTag">
                        欢迎登录
                    </h2>
              

                <div id="tagContent">
                    <div class="tagContent selectTag">
                        <form id="form1" method="post" action="{$baseUrl}/Main/Login/LoginCheck" onsubmit="return formCheck()">
                        
                        <div id="msg" style="height:20px;"> 
                        				<div id="J_Message" style="" class="login-msg msg"><p class="error" id="addMsg" style="color: red;">{if isset($errMsg)}{$errMsg}{/if}</p></div>
                       	</div>
                        
                        <table style="color: #555555" cellpadding="0" cellspacing="0" align="center" border="0" width="98%">
                            <tbody>
                            <tr>
                                <td   colspan="3">
                                    		<div class="login_name"><span>卡&nbsp; 号</span>  <input id="username" name="username"   autocomplete="off" class="from_ipt" value='{if isset($userNo)}{$userNo}{/if}' type="text">
                               </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="3">
                                   		<div class="login_password"><span>密&nbsp; 码</span><input name="password"  id="password" class="from_ipt" type="password" >
                               </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                   		<div class="login_yz"><span> 验证码</span><input name="validatecode"  id="validatecode" value="计算结果" 
                                    		onmousedown="this.value=''; "
											onblur="($.trim(this.value)=='')?this.value='计算结果':this.value;"			
                                            class="from_iptw" >
                                </div> 
                                    <a class="fr">
                                        <img alt="验证码"  onclick='imgCheckCode(this.value)' id='checkCode' src="{$baseUrl}/Main/Login/GetCode" style="cursor:pointer;" border="0"/></a>
                               
                               </td>
                            </tr>
                            <tr>
                                <td colspan="2" height="40" align="left">                                    
                                <label class="mar">
                                 <input checked="checked" name="cbRegisterName" id="cbRegisterName" class="cbRegisterName" title="为了账户安全，请勿在公用电脑上勾选此项。" type="checkbox"><label>&nbsp;&nbsp;记住卡号</label></label>
                                </td>
                                <td height="40" align="right" width="32%">
                                 <a href="https://www.xinfuka.net/XFlogin/losepassword.aspx" style="color:blue">忘记密码？</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" height="80" align="center">
                                    <label>
                                      <input name="" value="" class="button" onclick="SetViewName()" type="submit"><label>
                                    	<input type="hidden" name="originUrl" value="" />
                                    </label>
                                    </label> 
                                </td>
                            </tr>
                        </tbody></table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clar">
            </div>
        </div>
       </div> 

{script}

	//验证码单击刷新
	function imgCheckCode(){
		$("#checkCode").attr('src','{$baseUrl}/Login/GetCode?t='+Math.random());
	}

	//卡号 检查
	function cardNoCheck(){
		var cardNo = $.trim($('#username').val());

		if(cardNo == '请完整的输入薪福卡号(含字母)'){
			$('#addMsg').text('用户名不能为空！');
			return false;
		}
		if(cardNo == ''){
			$('#addMsg').text('用户名不能为空！');
			return false;
		}else if(!textCheckInput(cardNo)){
			$('#addMsg').text('用户名包含非法字符！');	
			return false;
		}else{
			$('#addMsg').text('');
			return true;
		}
	}

	//密码验证
	function passwordCheck( ){
		var passwd = $.trim($('#password').val());
		if(passwd == ''){
			$('#addMsg').text('密码不能为空！');
			return false;
		}else{
			$('#addMsg').text(' ');
			return true;
		}
	}

	//验证码
	function codeCheckVali(){
		var code = $('#validatecode').val();
		if($.trim(code) == '' || $.trim(code) == '计算结果' ){
			$('#addMsg').text('验证码不能为空！');
			 
			return false ;
		}else if(!textCheckInput($.trim(code))){
			$('#addMsg').text('验证码包含非法字符！');
			 
			return false ;
		}else{
			$('#addMsg').text('');
			return true;
		}
	}

	//登录表单提交
	function formCheck(){
		
		if(cardNoCheck() && passwordCheck() && codeCheckVali()){
			var pass = document.getElementById('password');
			pass.value = escape(pass.value);
			return true;
		}else{
			return false;
		}
	}
{/script}
        <div id="footer">
            <div class="footer_cn">
                客服热线：400-678-9393 销售部：010-84885809 010-84885909
                <br>
                非工作时间联系电话：18801284410(服务时间：周一至周五 18:00-20:00，周末 9:00-18:00;受理业务:咨询业务)<!--百度流量统计代码-->

                 <a href="http://tongji.baidu.com/hm-web/welcome/ico" target="_blank">
                <img src="img/23.gif" height="20" border="0" width="20"></a>

                <br>
                Copyright © 2004-2010 薪福卡公司 版权所有 京ICP备10218204号 京ICP证110135号 京公海网安备110108000889号
                <img src="img/beian.jpg" align="absmiddle" border="0"></div>
        </div>
        

        {script}
            //页面加载时，读取是否显示用户名，如果显示，则显示出用户名，否则，不显示用户名
            $(document).ready(
            function() {
                var userName = Cookies.get("UserName");
                var result = ""; //需要写入用户名文本框的值
                if ((typeof (userName) != "undefined") && (userName != null) && (userName != "")) {
                    result = userName;
                    $("#cbRegisterName").attr("checked", true);
                }
                else {
                    $("#cbRegisterName").attr("checked", false);
                }
                //将数据写入用户名文本框
                if (result != "" && $.trim($("#username").val()) == '') {
                    $("#username").val(result);
                }
                else {
                    var username = $("#username").val();
				    if (username == "")
					    $("#username").val("请完整的输入薪福卡号(含字母)");
                }
                if ($(".error").html() == "卡号未激活！" || $(".error").html() == "卡存在未激活！") {
                    $(".error").append("<span style=\"align:left\"><a href=\"/XFlogin/cardSmsNotice.aspx\" style=\"color:blue\">未激活帮助？</a></span>");
                }
            }
        );
            //选择按钮，设置是否显示用户名。
            //如果要显示用户名，就将用户名保存到cookie里，否则，删除cookie里的用户名
            function SetViewName() {
                //判断是否要显示用户名
                var viewName = $("#cbRegisterName").attr("checked");
                var userName = $("#username").val();
                if ((typeof (viewName) != "undefined") && (viewName != null) && viewName
                && (typeof (userName) != "undefined") && (userName != null) && (userName != "")
            ) {
                    //显示用户名，将用户名存入cookie
                    var expdate = new Date();
                    //过期时间是2周
                    expdate.setTime(expdate.getTime() + 14 * 24 * 60 * 60 * 1000);
                    Cookies.set("UserName", userName, expdate);
                }
                else {
                    //不显示 清除cookie里的用户名数据
                    Cookies.clear("UserName");
                }
            }


            $("#username").focusin(function(){
        		if($.trim($(this).val()) == "请完整的输入薪福卡号(含字母)"){
        			$(this).val('');
            	}
        	});
            $("#username").focusout(function(){
        		if($.trim($(this).val())== ''){
        			$(this).val("请完整的输入薪福卡号(含字母)");
        		}		
        	});
            
        {/script}


</div>{/body}{/html}