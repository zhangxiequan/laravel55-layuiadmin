if("undefined"==typeof(included) && "undefined"!=typeof($)){
var included=1;
var ticket = '';
var reg_verify_token = '';
$(document).on('api.loginpopbox',function(e,callback){
	$('body').append(signinTpl_string);
	$.ajax({
		type: "POST",
		url: "/login/scene_id.html",
		data: {},
		dataType: "json",
		success: function(result){
			if(result.status == 1){
				ticket = result.ticket;
				$('#login_container img').attr('src',ticket);
				var ticket_scene_id = result.id;
				try{
					clearInterval(ticket_timer);
				}catch(e){}
				ticket_timer = setInterval(function(){
					$.post('/login/ajax_scene.html',{id:ticket_scene_id},function(result){
						if(result.status == 1) {
							return true;
						}else if(result.status == 2){
							location.href=location.href;
						}else{
							console.log(result.info);
						}
					});
				},3000);
			}else{
				console.log(result.info);
			}
		}
	});

	$.ajax({
		type: "POST",
		url: "/buildtoken.html",
		data: {},
		dataType: "json",
		success: function(result){
			if(result.status == 1){
				reg_verify_token = result.token_hidden;
			}else{
				console.log(result.info);
			}
		}
	});

	// $('#app').css('display','block');
	$('.js-verify-refresh').click(function(){
		$('.verify-img-wrap').parents("form").find(".verify-img").attr("src","/verifycode/user_login?t="+(new Date().getTime()));
	});
	$('#login_form .verify-img').trigger('click');
	
	$('body').append('<div class="modal-backdrop in"></div>');
	$('.modal-backdrop,.closealert').one("click",function(){
		if(!$('#signin').hasClass('noClose')){
			$('#app').remove();
			$('.modal-backdrop').remove();
			clearInterval(ticket_timer);
		}
	});
	//登录逻辑
	$('#login_form .xa-login').click(function(){
		var $this=$(this);
		if($this.is(".running")){return false;}
		var emailVal = $.trim($('#app .loginusername').val());
		if(emailVal == '' || !/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(emailVal)){
			$('#app .error-tips').css('display','block').html('请输入登录邮箱');
			$('#app .loginusername').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}
		var pwdVal = $('#login_form .loginuserpasswordt').val();
		if(pwdVal == '' || pwdVal.length < 6 || pwdVal.length > 16 || !/^\s*(\S+)\s*$/.test(pwdVal)){
			$('#app .error-tips').css('display','block').html('请输入6-16位密码,区分大小写,不能使用空格');
			$('#login_form .loginuserpasswordt').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}

		var verifyVal = $('#login_form .ipt-verify').val();
		if(verifyVal == '' || verifyVal.length < 4){
			$('#app .error-tips').css('display','block').html('请输入4位的验证码');
			$('#login_form .ipt-verify').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}
		$this.addClass("running");
		$('#login_form .xa-login').val('登录中...');
		$.post('/login/login.html',{account:emailVal,pwd:pwdVal,code:verifyVal},function(result){
			$this.removeClass("running");
			if(result.status == 1){
				location.reload();
			}else{
				$('#login_form .xa-login').val('登录');
				$('#app .error-tips').css('display','block').html(result.info);
				$("#login_form .verify-img").attr("src","/verifycode/user_login?t="+(new Date().getTime()));
			}			
		});
	});

	//注册逻辑
	$('.xa-reg').click(function(){
		var $this=$(this);
		if($this.is(".running")){return false;}
		var emailVal = $.trim($('#reg_form .loginusername').val());
		if(emailVal == '' || !/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(emailVal)){
			$('#app .error-tips').css('display','block').html('请输入登录邮箱');
			$('#reg_form .loginusername').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}
		var pwdVal = $('#reg_form .loginuserpasswordt').val();
		if(pwdVal == '' || pwdVal.length < 6 || pwdVal.length > 16 || !/^\s*(\S+)\s*$/.test(pwdVal)){
			$('#app .error-tips').css('display','block').html('请输入6-16位密码,区分大小写,不能使用空格');
			$('#reg_form .loginuserpasswordt').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}

		if(pwdVal!=$('.reloginuserpasswordt').val()){
			$('#app .error-tips').css('display','block').html('两次输入的密码不一致！');
			$('.reloginuserpasswordt').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}

		var verifyVal = $('#reg_form .ipr-verify').val();
		if(verifyVal == '' || verifyVal.length < 4){
			$('#app .error-tips').css('display','block').html('请输入4位的验证码');
			$('#reg_form .ipr-verify').focus();
			return false;
		}else{
			$('#app .error-tips').css('display','none').empty();
		}
		$this.addClass("running");
		$('#reg_form .xa-reg').val('注册中...');
		$.post('/login/reg.html',{account:emailVal,pwd:pwdVal,code:verifyVal,token:reg_verify_token},function(result){
			$this.removeClass("running");
			if(result.status == 1){
				location.reload();
			}else{
				$('#reg_form .xa-reg').val('注册');
				$('#app .error-tips').css('display','block').html(result.info);
				$("#reg_form .verify-img").attr("src","/verifycode/user_login?t="+(new Date().getTime()));
			}
		});
	});

	$('.ipt-verify').keydown(function(e){
		if(e.keyCode == 13){
			$(".xa-login").click();
		}
	});
	$('.ipr-verify').keydown(function(e){
		if(e.keyCode == 13){
			$(".xa-reg").click();
		}
	});
});
	
$(function(){
	signinTpl_string="";
	signinTpl_string+="<div id=\'app\' class=\'login-wrap\'>";
	signinTpl_string+="            <form onsubmit=\'return false\' class=\"login-showSignup\">";
	signinTpl_string+="            <div class=\'header-wrap\'>";
	signinTpl_string+="                <div class=\'title wechat\'>";
	signinTpl_string+="                  <span style=\'line-height:30px;\'>微信登录或注册</span>";
	signinTpl_string+="                </div>";
	signinTpl_string+="                <div class=\'rightpng\'><a href=\'javascript:;\' class=\'toaccount\' title=\'切换其他方式登录\'></a></div>";
	signinTpl_string+="            </div>";
	signinTpl_string+="            <div class=\'content-wrap\'>";
	signinTpl_string+="                <div class=\'box\'>";
	signinTpl_string+="                    <div id=\'login_container\'><img src='' class='wechat_img_login'></div>";
	signinTpl_string+="                 <div class=\"info\">";
	signinTpl_string+="					<div class=\"status status_browser js_status\" id=\"wx_default_tip\">";
	signinTpl_string+="						<p>请使用微信扫描二维码登录</p>";
	signinTpl_string+="						<p>\“php中文网\”</p>";
	signinTpl_string+="						</div>";
	signinTpl_string+="						<div class=\"status status_succ js_status\" style=\"display:none\" id=\"wx_after_scan\">";
	signinTpl_string+="							<i class=\"status_icon icon38_msg succ\"></i>";
	signinTpl_string+="							<div class=\"status_txt\">";
	signinTpl_string+="							<h4>扫描成功</h4>";
	signinTpl_string+="							<p>请在微信中点击确认即可登录</p>";
	signinTpl_string+="							</div>";
	signinTpl_string+="							</div>";
	signinTpl_string+="							<div class=\"status status_fail js_status\" style=\"display:none\" id=\"wx_after_cancel\">";
	signinTpl_string+="							<i class=\"status_icon icon38_msg warn\"></i>";
	signinTpl_string+="							<div class=\"status_txt\">";
	signinTpl_string+="							<h4>您已取消此次登录</h4>";
	signinTpl_string+="							<p>您可再次扫描登录，或关闭窗口</p>";
	signinTpl_string+="						</div> </div> </div>                       ";
	signinTpl_string+="                    <div class=\'scanbg\'>";
	signinTpl_string+="                        <i></i>";
	signinTpl_string+="                        <div class=\'scantext\'>";
	signinTpl_string+="                            <div>打开 <span class=\'scana\'>微信</span></div>";
	signinTpl_string+="                            <div>扫一扫登录或注册</div>";
	signinTpl_string+="                        </div>";
	signinTpl_string+="                    </div>";
	signinTpl_string+="                </div>";
	signinTpl_string+="            </div>";
	signinTpl_string+="        </form>";
	signinTpl_string+="			<form onsubmit=\"return false\" id='login_form' class=\"reg-showSignup\" style='display:none'>";
	signinTpl_string+="                <div class=\"header-wrap\">";
	signinTpl_string+="                    <div class=\"title\">";
	signinTpl_string+="                        <span>会员登录</span>";
	signinTpl_string+="                        <label style=\"float:left;margin-top:5px;margin-left:5px;font-size:12px;font-weight:normal;color:#999;\">(老用户支持用户名登录)</label>";
	signinTpl_string+="                    </div>";
	signinTpl_string+="                    <div class=\"rightpng\"><a href=\"javascript:;\" class=\"toqrcode\" title=\"切换微信登录\"></a></div>";
	signinTpl_string+="                </div>";
	signinTpl_string+="                <div class=\"content-wrap\">";
	signinTpl_string+="                    <div class=\"box login-box\">";
	signinTpl_string+="              <div class=\"error-tips\"></div> ";
	signinTpl_string+="                        <input class='loginusername' type=\"text\" placeholder=\"请输入登录邮箱\" autofocus=\"\" autocomplete=\"off\">";
	signinTpl_string+="                        <input class='loginuserpasswordt' type=\"password\" placeholder=\"请输入密码\">";
	signinTpl_string+="                     <input type=\"text\" name=\"verify\" class=\"ipt-verify\" style=\"width:40%;float:left;margin-right:10px;\" placeholder=\"请输入验证码\">   ";
	signinTpl_string+="                   <a href=\'javascript:;\' hidefocus=\'true\' class=\'verify-img-wrap js-verify-refresh\'><img class=\'verify-img\' src=\'\'/></a>     ";
	signinTpl_string+="       			<a href=\'javascript:;\' hidefocus=\'true\' class=\'icon-refresh js-verify-refresh\'></a> ";
	signinTpl_string+="                        <div class=\"keep\" style=\"display:block\">";
	signinTpl_string+="                            <div class=\"checkbox\">";
	signinTpl_string+="                                <label>";
	signinTpl_string+="                                    <input type=\"checkbox\"> 记住密码 ";
	signinTpl_string+="                                </label>";
	signinTpl_string+="                                <a href=\"javascript:;\" class='rlf-forget'>忘记密码？</a>";
	signinTpl_string+="                            </div>";
	signinTpl_string+="                        </div>";
	signinTpl_string+="                        ";
	signinTpl_string+="                        <button class='xa-login' type=\"button\">登录</button>";
	signinTpl_string+="                        ";
	signinTpl_string+="                        <div class=\"other-ways\">";
	signinTpl_string+="                            ";
	signinTpl_string+="                            <div class=\"btn-wrap\">";
	signinTpl_string+="                                <div>";
	signinTpl_string+="                                    <a class=\"weibo\" href=\"javascript:;\" title=\"微博账号登录\">微博账号登录</a>";
	signinTpl_string+="                                </div>";
	signinTpl_string+="                                <div>";
	signinTpl_string+="                                    <a class=\"qq\" href=\"javascript:;\" title=\"QQ账号登录\">QQ账号登录</a>";
	signinTpl_string+="                                </div>";
	signinTpl_string+="                            </div>";
	signinTpl_string+="                            ";
	signinTpl_string+="                        </div>";
	signinTpl_string+="                        <a href=\"javascript:;\" class=\"freeregister\">免费注册</a>";
	signinTpl_string+="                    </div>";
	signinTpl_string+="                </div>";
	signinTpl_string+="            </form>";
	signinTpl_string+="			<form onsubmit=\"return false\" id='reg_form' class=\"reg-reg-showSignup\" style='display:none'>";
	signinTpl_string+="                <div class=\"header-wrap\">";
	signinTpl_string+="                    <div class=\"title\">";
	signinTpl_string+="                        <span>会员注册</span>";
	signinTpl_string+="                        <label style=\"float:left;margin-top:5px;margin-left:5px;font-size:12px;font-weight:normal;color:#999;\">(邮箱注册)</label>";
	signinTpl_string+="</div>";
	signinTpl_string+="<div class=\"rightpng\"><a href=\"javascript:;\" class=\"toqrcode\" title=\"切换微信登录\"></a></div>";
	signinTpl_string+="</div>";
	signinTpl_string+="<div class=\"content-wrap\">";
	signinTpl_string+="<div class=\"box login-box\">";
	signinTpl_string+="<div class=\"error-tips\"></div> ";
	signinTpl_string+="<input class='loginusername' type=\"text\" placeholder=\"请输入注册邮箱\" autofocus=\"\" autocomplete=\"off\">";
	signinTpl_string+="<input class='loginuserpasswordt' type=\"password\" placeholder=\"6-16位密码，区分大小写，不能用空格\">";
	signinTpl_string+="<input class='reloginuserpasswordt' type=\"password\" placeholder=\"确认密码\">";
	signinTpl_string+="<input type=\"text\" name=\"verify\" class=\"ipr-verify\" style=\"width:40%;float:left;margin-right:10px;\" placeholder=\"请输入验证码\">";
	signinTpl_string+="<a href=\'javascript:;\' hidefocus=\'true\' class=\'verify-img-wrap js-verify-refresh\'><img class=\'verify-img\' src=\'\'/></a>";
	signinTpl_string+="       			<a href=\'javascript:;\' hidefocus=\'true\' class=\'icon-refresh js-verify-refresh\'></a> ";
	signinTpl_string+="                        <button class='xa-reg' type=\"button\">注册</button>";
	signinTpl_string+="                        <div class=\"other-ways\">";
	signinTpl_string+="                            <div class=\"btn-wrap\">";
	signinTpl_string+="                                <div>";
	signinTpl_string+="                                    <a class=\"weibo\" href=\"javascript:;\" title=\"微博账号登录\">微博账号登录</a>";
	signinTpl_string+="                                </div>";
	signinTpl_string+="                                <div>";
	signinTpl_string+="                                    <a class=\"qq\" href=\"javascript:;\" title=\"QQ账号登录\">QQ账号登录</a>";
	signinTpl_string+="                                </div>";
	signinTpl_string+="                            </div>";
	signinTpl_string+="                        </div>";
	signinTpl_string+="                        <a href=\"javascript:;\" class=\"freeregister\">立即登录</a>";
	signinTpl_string+="                    </div>";
	signinTpl_string+="                </div>";
	signinTpl_string+="            </form>";
	signinTpl_string+="        </div>";

	$(document).on("click","#app .toaccount",function(){
			$('#app .reg-showSignup').show();
			$('#app .login-showSignup').hide();
			$('#app .reg-reg-showSignup').hide();
	});
	$(document).on("click","#app .toqrcode",function(){
		$('#app .reg-showSignup').hide();
		$('#app .login-showSignup').show();
		$('#app .reg-reg-showSignup').hide();
	});
	$(document).on("click","#app .freeregister",function(){
		if($('#app .freeregister').is('.is_reg_html')){
			$('#app .reg-showSignup').show();
			$('#app .login-showSignup').hide();
			$('#app .reg-reg-showSignup').hide();
			$('#app .freeregister').removeClass('is_reg_html');
		}else{
			$('#app .reg-showSignup').hide();
			$('#app .login-showSignup').hide();
			$('#app .reg-reg-showSignup').show();
			$('#app .freeregister').addClass('is_reg_html');
		}
	});

	$('#js-signin-btn,.js-signin-btn').click(function(){
		$(document).trigger('api.loginpopbox');
	});

	$('#js-signup-btn,.js-signup-btn').click(function(){//注册
		$(document).trigger('api.loginpopbox');
		$('#app .reg-showSignup').hide();
		$('#app .login-showSignup').hide();
		$('#app .reg-reg-showSignup').show();
		$('#app .freeregister').addClass('is_reg_html');
	}); 
	
	$('.js-show-menu').click(function(){
		$('body').addClass('slide-left').append('<div class="slide-left-opa" style="position: absolute; top: 0; right: 130px; left: 0;bottom: 0; background: rgba(0 ,0,0,0.3); z-index: 2000;"></div>');
		$('#nav .nav-item .set-btn').hide();
		$('.slide-left-opa').click(function(){
			$('.slide-left-opa').remove();
			$('body').removeClass('slide-left');
		});
	});



});

$(document).on('click','.qq',function(){
	var open_width = $(window).width()*0.35;
	var open_height = $(window).height()*0.6;
	var open_left = ($(window).width() - open_width) / 2;
	var open_top = ($(window).height() - open_height) / 2;
	window.open('/qqlogin.html','','width='+open_width+',height='+open_height+',top='+open_top+',left='+open_left+',toolbar=no,resizable=no,location=no');
});
	
//找回密码
$(document).on("click",'.rlf-forget',function(){
	forget_pop=layer.open({
		type: 2,
		title: '重置密码',
		shadeClose: true,
		shade: 0.8,
		area: ['500px', '400px'],
		content: '/member/forgot.html'
	});
	return false;
});

function is_empty(str){
	if(str==null || str=="" || $.trim(str)==''){
		return true;
	}
	return false;
}

function msgshow(info,success,timeNum,is_reload,url){
	$("#body_alert_message").remove();
	$(".mes-warp").remove();
	if(is_empty(timeNum)){timeNum=2000;}
	if(is_empty(is_reload)){var is_reload=0;}
	if(is_empty(url)){url='';}
	// var msgBox = $('<div id="body_alert_message"></div>').appendTo($("body")).fadeIn("fast").delay(timeNum).fadeOut("slow");
	var msgBox = $('<div id="body_alert_message"></div>').appendTo($("body")).fadeIn("fast");
	setTimeout(function(){
		msgBox.fadeOut("slow");
		if(is_reload == 1){window.location.reload();}else if(is_reload == 2){location.href = "/member/set_user/base.html";}else if(is_reload == 3){location.href='/member/set_user/binding.html'}else if(is_reload == 10){location.href = url;}
	},timeNum);
	if (success=="false"){
		var msgTxt =
			'<div class="mes-warp">'+'<div class="msg-nr"><em class="rts-ico"><img src="/tpl/Index/Static/img/rts-cw.png"></em><span>'+info+'</span></div>'+'</div>'
	}else{
		var msgTxt =
			'<div class="mes-warp">'+'<div class="msg-nr"><em class="rts-ico"><img src="/tpl/Index/Static/img/rts-zq.png"></em><span>'+info+'</span></div>'+'</div>'
	}
	$("#body_alert_message").html(msgTxt);
	// var dTop = (parseInt(document.documentElement.clientHeight,10)/2) + (parseInt(document.documentElement.scrollTop || document.body.scrollTop, 10)),
	var dTop = parseInt(document.documentElement.clientHeight,10)/2,
		dH = msgBox.height(),
		dW = msgBox.width(),
		timer = null;
		msgBox.css({"top" : (dTop-(dH/2)) , "margin-left" : -(dW/2)});
}

if(typeof(msgBox) != 'undefined' ) {
	document.write("<style>#header,#footer{display:none;}body{overflow-x:hidden;}#main{min-height: 580px !important;}.head-util{display:none!important;}</style>");
}

}
try {
    if (window.console && window.console.log) {

        console.log("\n\n");
        console.log("这里有最炫酷的职位,最诱人的薪资，我在php中文网，等你来！\n\n");
        console.log('如何让我遇见你，在你最美的时候\n加入php中文网，让我们一起探讨技术的更高点！\n');
        console.log("请将简历发送至 %c a@php.cn（邮件标题请以姓吿-应聘XX职位-来自console命名）", "color:#0b8");
        console.log('有梦想，才能改变世界！\n');
    }
} catch (e) {}