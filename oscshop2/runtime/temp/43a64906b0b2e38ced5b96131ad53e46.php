<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:37:"./themes/shop/member/login/login.html";i:1560576167;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />	
	<link rel="stylesheet" href="/public/static/view_res/common/base.css" />
	<link rel="stylesheet" href="/public/static/view_res/member/css/reg.css" />
</head>
<body>		
	<ul class="form">
		<li><span>用户名：</span><input class="text" name="username" type="text" /></li>	
		<li><span>密 码：</span><input class="text" name="password" type="password" /></li>	
		<?php if(1 == config('use_captcha')): ?>	
		<li class="clearfix"><span>验证码：</span><input class="text" name="captcha" type="text" /></li>
		<li class="clearfix"><img class="verifyimg reloadverify" src="<?php echo url('login/verify'); ?>" alt="captcha" /></li>
		<?php endif; ?>
		<li><input type="submit" id="send" value="登录" /></li>	
	</ul>	
</body>
<script src="/public/static/js/jquery/jquery-2.0.3.min.js"></script>
<script src="/public/static/js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script>
	
	<?php if(1==config('use_captcha')){ ?>
		//刷新验证码
		var verifyimg = $(".verifyimg").attr("src");
	    $(".reloadverify").click(function(){
	        if( verifyimg.indexOf('?')>0){
	            $(".verifyimg").attr("src", verifyimg+'&random='+Math.random());
	        }else{
	            $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
	        }
	    });	
	<?php } ?>
	
	$('#send').click(function(){
		
		var username=$("input[name='username']").val();
		var pwd=$("input[name='password']").val();
		
		<?php if(1==config('use_captcha')){ ?>
			var captcha=$("input[name='captcha']").val();		
			if(captcha==''){
				alert('请输入验证码');
				return false;
			}			
		<?php } ?>
		
		if(username==''){
			alert('请输入账号');
			return false;
		}else if(pwd==''){
			alert('请输入密码');
			return false;
		}
		
		$.post(
			"/login",
			$('input[type=\'text\'],input[type=\'password\']'),
			function(d){
				if(d.error){
					alert(d.error);
				}else if(d.success){
					
                    var user=$("#top",window.parent.document).find('ul.left');
                    user.html('');
                    user.append('<li><a href="<?php echo url('member/order_member/index'); ?>">会员中心</a></li><li><a href="<?php echo url('/logout'); ?>">退出</a></li>');

                    var cart=$("#top",window.parent.document).find('#cart a');
                    cart.html('');
                    cart.append(d.total);

                    window.parent.location.reload();

				}
			}	
		);
		
	});

</script>
</html>