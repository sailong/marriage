function msg_replay(i){
	var e=jQuery(i);
	var id=parseInt(e.attr('rel'),10);
	if (id>0){
		var name=e.parent().find('cite').html();
		jQuery('#re_wid').val(id);
		jQuery('#rep_name').html(name);
		var msg=e.parent().parent().find('p.rep');
		if (msg.length>0){
			msg=msg.find('span').html();
		}else{
			msg='';
		}
		jQuery('body,html').animate({scrollTop:1000},100,'swing',function(){
			jQuery('#rep_info').val(msg).focus();
		});
	}
}

function sub_rep(u){
	var id=parseInt(jQuery('#re_wid').val(),10);
	if (id>0){
		var msg=jQuery('#rep_info').val();
		jQuery.ajax({
			type:'post',
			url:'/s/eic/response.php?u='+u,
			data:{'id':id,'msg':msg},
			success:function(d){
				if (d=='1'){
					jQuery.dialog.tips('<p class="tips_12_g">回复成功</p>');
				}else if (d=='-1'){
					jQuery.dialog.tips('<p class="tips_12_g">留言信息不存在</p>');
				}else if(d=='-2'){
					jQuery.dialog.tips('<p class="tips_12_g">没有回复权限</p>');
				}
				getHtml('/m'+u+'/words.html');
			}
		});
	}else{
		jQuery.dialog.tips('<p class="tips_12_g">请选择一条祝福,再进行回复</p>');
	}
}

var form_z_sta=1;
function form_z_sub(zid){
 var send=jQuery('#send').val();
 var num=jQuery('#wall_num').val();
 var content=jQuery('#content').val();
 var tel = jQuery('#tel_name').val();
 var wx = jQuery('#wx_name').val();
 if (send==''||send=='您的姓名'){
	jQuery.dialog.tips('<p class="tips_12_g">请填写您的姓名</p>');
	 jQuery('#send').focus();
	 return ;
 }
 if (content.length<2){
	jQuery.dialog.tips('<p class="tips_12_g">留言内容不能少于2个字符</p>');
	 jQuery('#content').focus();
	 return ;
 }
 jQuery.ajax({
	'type':'post',
	'url':'/s/eic/bg_post.php',
	'data':{'act':'words','send':send,'tel':tel,'wxh':wx,'content':content,'zid':zid,'num':num},
	success:function(d){
		if (d=='1'){
			jQuery.dialog.tips('<p class="tips_12_g">发布成功</p>');
			setTimeout(function(){
				if (form_z_sta==1){
					getHtml('/m'+zid+'/words.html');
				}else{
					ajax_form();
				}
			},1000);
		}else if(d=='2'){
			if (form_z_sta==1){
				getHtml('/m'+zid+'/words.html');
			}else{
				ajax_form();
			}
		}else{
			jQuery.dialog.tips('<p class="tips_12_g">'+d+'</p>');
		}
	}
 });
}