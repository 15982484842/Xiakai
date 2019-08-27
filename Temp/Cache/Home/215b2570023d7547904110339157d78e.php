<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> <?php
 $name = "cfg_sitetitle"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content=" <?php
 $name = "cfg_sitedescription"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> ">
<meta name="Keywords" content=" <?php
 $name = "cfg_sitekeywords"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> ">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/feiqi-ee5401a8e6.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/newpay-bb7fcb5546.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/pay-2b02ca7987.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/newindex-09d04b32f3.css">
<style>
	.kuren {
	    padding: 2px 0;
	    padding-right: 10px;
	}
	.cominfo{
	    padding: 0 0 0 15px;
	}
	.kuai {
	    padding-top: 0px;
	    margin-top: 4px;
	}
	.container .inpifo {
	    padding: 10px 10px;
	}
	.hsma {
	    width: 24px;
	    height: 24px;
	    margin-right: 10px;
	}
	.mb80{
		padding-bottom: 80px;
	}
</style>

</head>
<script>
document.addEventListener('plusready',function(){
var webview = plus.webview.currentWebview();
plus.key.addEventListener('backbutton', function() {
webview.canBack(function(e) {
        if (e.canBack) {
                webview.back();
        } else {
            webview.close();//hide,quit
        }
    })
});

});
</script>
<body>
    <!-- header -->
  
	<!-- header end-->
<div class="mui-content" style="margin-top: -1px;">
	
	<div class="maotop">
		<div class="hedpic">
			<a href="<?php echo U('User/login');?>">
				<img src="__PUBLIC__/home/imgs/m_04.png" alt="">
			</a>
			<?php if($user == 0): ?><a class="indtel" href="<?php echo U('User/login');?>">登录/注册</a>
			<?php else: ?>
				<span class="indtel"><?php echo ($user); ?></span></br><?php endif; ?>
		</div>
	</div>
<!-- group1 -->
	<section class="allgrp mt10">
		<!-- 上 -->
		<article class="cominfo">
			<div class="container">
	    		<!-- 右箭头 -->
	    		<div class="inpifo">
	    			<a href="<?php echo U('Info/index');?>">
	    				<div class="input-group">
							<div class="cf kuren">
								<div class="fl kuai hsma">
							    	<img src="__PUBLIC__/home/imgs/m_07.png" alt="">
							    </div>
							    <div class="fl mname">      
							    	<p>我的资料</p>
							    </div>
							    <div class="fr rarr">
								    <span class="seltarr1"></span>
						    	</div>
						    </div>
			    		</div>
		    		</a>
		    	</div>
	    		<!-- 右箭头 -->
	    		<!-- 右箭头 -->
	    		<div class="inpifo">
					<a href="<?php echo U('Order/lists');?>">
						<div class="input-group">
							<div class="cf kuren">
								<div class="fl hsma kuai">
							    	<img src="__PUBLIC__/home/imgs/m_10.png" alt="">
							    </div>
							    <div class="fl mname">      
							    	<p>我的借款</p>
							    </div>
							    <div class="fr rarr">
								    <span class="seltarr1"></span>
						    	</div>
						    </div>
			    		</div>
		    		</a>
		    	</div>
	    		<!-- 右箭头 -->
	    		<!-- 右箭头 -->
	    		<div class="inpifo">
					<a href="<?php echo U('Order/bills');?>">
						<div class="input-group">
							<div class="cf kuren">
								<div class="fl hsma kuai">
							    	<img src="__PUBLIC__/home/imgs/m_12.png" alt="">
							    </div>
							    <div class="fl mname">      
							    	<p>我的还款</p>
							    </div>
							    <div class="fr rarr">
								    <span class="seltarr1"></span>
						    	</div>
						    </div>
			    		</div>
		    		</a>
		    	</div>
                
              <div class="inpifo">
					<a href="<?php echo U('Order/falv');?>">
						<div class="input-group">
							<div class="cf kuren">
								<div class="fl hsma kuai">
							    	<img src="__PUBLIC__/home/imgs/plus.png" alt="">
							    </div>
							    <div class="fl mname">      
							    	<p>法律责任</p>
							    </div>
							    <div class="fr rarr">
								    <span class="seltarr1"></span>
						    	</div>
						    </div>
			    		</div>
		    		</a>
		    	</div>
              
                
                	<div class="inpifo">
					<a href="<?php echo U('Fenxiao/index');?>">
						<div class="input-group">
							<div class="cf kuren">
								<div class="fl hsma kuai">
							    	<img src="__PUBLIC__/home/imgs/hm_13.png" alt="">
							    </div>
							    <div class="fl mname">      
							    	<p>分享推广</p>
							    </div>
							    <div class="fr rarr">
								    <span class="seltarr1"></span>
						    	</div>
						    </div>
			    		</div>
		    		</a>
		    	</div>
	    		<!-- 右箭头 -->
	    	</div>
		</article>
	</section>
<!-- group1 end -->
<?php if($user != 0): ?><!-- group2  -->
<section class="allgrp mt10" style="height:200px;">
	<article class="cominfo">
		<div class="container">
			<!-- 右箭头 -->
    		<div class="inpifo">
				<a href="<?php echo U('User/backpwd');?>">
					<div class="input-group" >
						<div class="cf kuren">
							<div class="fl hsma kuai">
						    	<img src="__PUBLIC__/home/imgs/hm_13.png" alt="">
						    </div>
						    <div class="fl mname">      
						    	<p>修改密码&nbsp;</p>
						    </div>
						    <div class="fr rarr">
							    <span class="seltarr1"></span>
					    	</div>
					    </div>
		    		</div>
	    		</a>
	    	</div>
	    	<!-- 右箭头 -->
		</div>
	</article>
	<article class="cominfo">
		<div class="container">
			<!-- 右箭头 -->
    		<div class="inpifo">
				<a href="javascript:logout();">
					<div class="input-group">
						<div class="cf kuren">
							<div class="fl hsma kuai">
						    	<img src="__PUBLIC__/home/imgs/m_13.png" alt="">
						    </div>
						    <div class="fl mname">      
						    	<p>退出登录</p>
						    </div>
						    <div class="fr rarr">
							    <span class="seltarr1"></span>
					    	</div>
					    </div>
		    		</div>
	    		</a>
	    	</div>
    		<!-- 右箭头 -->
		</div>
	</article>
</section><?php endif; ?>

</div>
	<!-- bottom bar -->
   <!-- bottom bar -->
    <nav class="mui-bar mui-bar-tab bottom-bar">
        <a class="mui-tab-item" href="<?php echo U('Index/index');?>">
                <span class="mui-icon mui-icon-home home">
        </span>
            <span class="mui-tab-label">首页</span>
         </a>
		   <a class="mui-tab-item" href="<?php echo U('Index/member');?>">
                <span class="mui-icon mui-icon-home home">
        </span>
            <span class="mui-tab-label">会员选项</span>
        </a>
           <a class="mui-tab-item" href="/index.php?m=Qianbao&a=index">
            <span class="mui-icon"><img src="/Public/home/imgs/ico_foot2.png" width="100%" alt=""></span>
            <span class="mui-tab-label">钱包</span>
        </a>

        <a class="mui-tab-item" href="<?php echo U('Help/index');?>">
            <span class="mui-icon mui-icon-contact muihelp"></span>
            <span class="mui-tab-label">助手</span>
        </a>
		
        <a class="mui-tab-item cur" href="<?php echo U('User/index');?>">
            <span class="mui-icon mui-icon-email myself cur"></span>
            <span class="mui-tab-label">我</span>
        </a>
    </nav>
    <!-- 底部固定栏 end-->

<div class="deowin" style="display: none;" id="deowin">
	<div class="deocon">
		<div class="divpad" style="text-align:center;line-height:80px">
			确定要退出当前账号？
		</div>
		<div class="wobtn">
			<div class="twobtn"><!-- 两个按钮用这个结构 -->
				<a id="winbtn" href="javascript:;" style="color:#666">取消</a>
				<!-- href="/account/passport/logout" -->
				<a class="obtn" id='lgbtn'  style="color: #0894ec;">确定</a>
			</div>
		</div>
	</div>
</div>
<div class="emask" style="display: none;" id="mask"></div>

<script src="__PUBLIC__/home/js/jquery.js"></script>
<script src="__PUBLIC__/home/js/fontsizeset.js"></script>
<script src="__PUBLIC__/home/js/fukuang.js"></script>
<script>
	var h = $('#deowin').height();
	var t = -h/2 + "px";
	$('#deowin').css('marginTop',t);
	function logout(){
		$("#deowin").show();
		$('#mask').show();
	}
	$('.bottom-bar a').click(function(){
		$('.bottom-bar a').removeClass('cur');
		$('.bottom-bar a span').removeClass('cur');
		$(this).addClass('cur');
		$(this).find('span').eq(0).addClass('cur');
	});
	$("#lgbtn").click(function() {
		window.location.href = '<?php echo U("User/logout");?>';
	});
	$('#winbtn').click(function(){
    	$('#deowin').hide();
    	$('#mask').hide();
	});
</script>	
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>