var userinfo="";
function isLogin(){
	var is = false;
	var user = getLoginUser();
	if(user!=null && user.uid>0){
		is=true;
		userinfo=user;
	}
	return is;
}
function getLoginUser(){
	var user = null;
	$.ajax({
		url:'/index.php?g=Index&c=Login&a=getloginUser',
		type:'post',
		async:false,
		dataType:'json',
		success:function(data){
			user=data;
		}
	});
	return user;
}
function exit(){
	$.ajax({
		url:'/index.php?g=Index&c=Login&a=exitlogin',
		type:'post',
		dataType:'json',
		async:true,
		success:function(result){
			location.href=location.href;
		}
	});
}
$(function(){
	if(isLogin()){
		$("#login-area").html('<ul class="clearfix logined"><li class="set_btn user-card-box"><a id="header-avator" class="user-card-item js-header-avator" action-type="my_menu" href="/member/'+userinfo.uid+'.html" target="_self"><img src="'+userinfo.avatar+'" height="40" width="40"><i class="myspace_remind" style="display: none;"></i><span style="display: none;">动态提醒</span></a><div class="g-user-card"><div class="card-inner"><div class="card-top"><a href="/member/'+userinfo.uid+'.html"><img src="'+userinfo.avatar+'" alt="'+userinfo.nickname+'" class="l"></a><a href="/member/1.html"><span class="name text-ellipsis">'+userinfo.nickname+'</span></a><p class="meta"><a href="">经验<b id="js-user-mp">0</b></a><a href="">积分<b id="js-user-credit">'+userinfo.score_count+'</b></a></p></div><div class="card-sets clearfix"><a href="/member/set_user/base.html" target="_blank" class="l mr30">个人设置</a><a href="/login/logout.html" class="r">退出</a></div></div><i class="card-arr"></i></div></li></ul>');
		$(".navbar-brand small").html('<img src="'+userinfo.avatar+'" style="width:30px;height:30px;border-radius:50%;margin-top:5px;vertical-align:middle;margin-right:10px;"><span style="vertical-align:middle;">'+userinfo.nickname+'<a href="/login/logout.html" style="text-decoration:none;font-size:14px;display:inline-block;margin-left:10px;">退出</a></span>');
		/*setTimeout(function(){
			if(userinfo.openid!='' && userinfo.email==''){
				msgshow('请绑定用户名，正在为您跳转到邮箱绑定页面','true');location.href='/member/set_user/binding.html';
			}
		},2000);*/
	}
	else if($("#js-signin-btn,.js-signin-btn").size()<=0){
		$("#login-area").html('<link rel="stylesheet" href="/tpl/Index/Static/css/poplogin-less.css?1.1.15"><ul class="header-unlogin clearfix"><li class="header-signin"><a rel="nofollow" href="javascript:;" id="js-signin-btn">登录</a></li><li class="header-signup"><a rel="nofollow" href="javascript:;" id="js-signup-btn">注册</a></li></ul>');
	}
});