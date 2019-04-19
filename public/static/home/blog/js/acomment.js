$(document).on('click','#js-pl-submit:not(.running)',function(){
	if($("#js-signin-btn,.js-signin-btn").size()>0){
		$(document).trigger('api.loginpopbox');
		return false;
	}
	if($.trim($('#js-pl-textarea').val())==""){
		msgshow('内容不能为空','false');
		return false;
	}
	var $this=$(this);
	$this.addClass("running");
	var ajaxcontent=$('#js-pl-textarea').val();
	$.post(csurl,{content:ajaxcontent,blog_id:blog_id,blog_aid:blog_aid},function(result){
		if(result.status == 1){
			$(".tie-list").after('\
                    <div class="single-tie">\
                        <div class="photo">\
                            <img src="'+$("#header-avator img").attr("src")+'">\
                        </div>\
                        <div class="tie-bdy">\
                            <div class="bdy-inner">\
                                <div class="tie-author">\
                                <span class="name-nick">'+$(".g-user-card img[alt]").attr("alt")+'</span>\
                                <span class="name-desp"></span><span class="tie-time">刚刚</span>\
                                </div>\
                                <p class="tie-cnt">'+ajaxcontent+'</p>\
                                <div>\
                                  </div>\
                                </div>\
                            </div>\
                        </div>\
                    </div>\
			');
			$this.removeClass("running");
      		$("#js-pl-textarea").val("");
      		msgshow('评论成功','true');
		}else{
			$this.removeClass("running");
			msgshow(result.info,'false');
		}
	});
});