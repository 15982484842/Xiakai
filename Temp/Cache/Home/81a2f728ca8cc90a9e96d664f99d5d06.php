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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/feiqi-ee5401a8e6.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/mui.min.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/newpay-bb7fcb5546.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/pay-2b02ca7987.css">
<style>
	.container .inpifo {
	    border-bottom: none;
	}
	.btop{
		border-top: 1px solid #e4e4e4;
	}
	.input-group .form-control {		 
	    line-height: 14px;
	}
	input[type=password]::-ms-input-placeholder,input[type=text]::-ms-input-placeholder{
		padding-top: 4px;
	}
	input[type=password]::-webkit-input-placeholder,input[type=text]::-webkit-input-placeholder{
		padding-top: 4px;

	}
	.container .input-group input {
	    float: right;
	    padding-right: 5px;
	}
</style>
</head>
<body class="bg">
    <!-- header -->
	<header class="header">
	<a class="back" href="<?php echo U('Info/index');?>"></a>
		手机号认证
	</header>
	<!-- header end-->
	<section>
		<article class="arhead2">
				<!-- 请认证已注册给你花的手机号 -->
		请您确认服务密码是否正确，以免运营商锁定密码带来不便
		</article>
		<!-- 头部提示 --> 
		<!-- 头部提示 -->
		<article class="cominfo">
			<div class="container">
				<!-- input -->
				<div class="inpifo">
					<div class="input-group">
					    <span class="input-group-addon">手机号码</span>
                        <input type="text" id="mobile_str" name="mobile_str" placeholder="请输入手机号码" class="form-control"  value="<?php echo ($userinfo["user"]); ?>" readOnly="readOnly"/>
                    </div>
		    	</div>
		    	<div class="inpifo btop">
		    		<div class="input-group">
					    <span class="input-group-addon">服务密码</span>
					    <input  id="mobilePwd" name="mobilePwd" placeholder="请输入服务密码"  type="password" class="form-control" />
		    		</div>
		    	</div>
	    		<div class="inpifo btop" id='tpYzmCode'>
		    		<div class="input-group">
					    <span class="input-group-addon">图片验证码</span>
					    <input type="text" id="tpYzm" name="tpYzm" placeholder="请输入验证码" class="form-control" style="left:12px;float:left;min-width:10%;width:95px"/>
					    <img src="" style="width:100px;height:35px;float:right;margin-right: 5px;" id="tpYzmImg" onclick="changeImage(this)"/>
		    		</div>
		    	</div>
			</div>
		</article>
		<div class="cf mt20">
			<label class="fl rev">
				<input type="checkbox" checked="checked" id="xieyi">
				<em></em>
			</label>
			<span class="fl arge">同意<a class="org" href="javascript:;" id="qbtn3">《用户使用协议》</a></span>
		</div> 
		<!-- 提示 -->
		<div style="display: none;top: 45%;" class="errdeo" id="messageBox">
			
		</div>
		<!-- 提示 end-->
		<article class='bootdeo'>
				<div class="mt20">
					<a href="javascript:void(0)" id="submit" readonly class="logBtn" onclick="checkyys()">提交认证</a>
				</div>
		</article>		
	</section>
	<!-- step -->
	<article class="bootdeo">
		<!-- 文字提示 -->
				<div class="cotxt">
	<p>
	温馨提示：	

	</p>
	<p>手机服务密码是运营商网站登录密码，若忘记密码，请您到运营商网站找回密码。</p>
	</div>


<!-- 弹窗一开始 -->
<div class="deowin" style="margin-top: -73px;display: none" id="deowin">
	<div class="deocon">
		<div class="divpad" style="text-align:center;line-height:80px">
			请输入手机号码和服务密码
		</div>
		<div class="wobtn">
			<!-- 一个按钮用这个结构 -->
				<a id="winbtn2" href="javascript:;">确定</a>

		</div>
	</div>
</div>
<div class="emask" style="display: none;" id="mask"></div>
<!-- 弹窗一结束 -->

	   <!-- 弹窗三开始 -->
<div class="deowin" style="display: none;padding:0 6%;" id="deowin3">
	<div class="deocon">
	<h3 style="text-align: center;font-size: 16px; color:#fb6f00;height: 40px;line-height: 40px;border-bottom: 1px solid #fb6f00;">《用户使用协议》</h3>
		<div class="divpad" style="height: 340px;overflow-y: auto;">
			<iframe src=" <?php
 $name = "协议4地址"; $Block = D("block"); $blockinfo = $Block->where(array('name' => $name))->find(); if(empty($blockinfo)){ echo ""; }else{ echo $blockinfo['cont']; } ?> " style="width:100%;height:100%;border:none"></iframe>
		</div>
		<div class="wobtn">
			<!-- 一个按钮用这个结构 -->
				<a style="color:#fb6f00;" id="winbtn3" href="javascript:;">关闭</a>

		</div>
	</div>
</div>
<div class="emask" style="display: none;" id="mask3"></div>

<!-- 弹窗三结束 -->
        <!-- 弹窗四开始 -->
        <div class="alert" style="display: none;">
            <div class="alertImg"></div>
            <div class="alertContent" id='tsk'>认证成功</div>
        </div>
        <!-- 弹窗四结束-->
        <!-- 弹窗五开始 -->
        <div class="deowin" style="margin-top: -73px;display: none;" id="maxshow">
            <div class="deocon">
                <div class="divpad">
                    <h3 class="title">温馨提示：</h3>
                    <p class="deo_inner"></p>

                </div>
                <div class="wobtn">
                    <!-- 一个按钮用这个结构 -->
                    <a id="maxshowbtn" href="javascript:;">确定</a>
                </div>
            </div>
        </div>
        <!-- 弹窗五结束-->
</article>
<script src="__PUBLIC__/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script>
var oRemind=document.getElementById('messageBox');
function tishi (msg) {
	$('#messageBox').show();
	$('#messageBox').html(msg);
	setTimeout("$('#messageBox').css('display', 'none')",5000)
}
function middle(){
	var h = $('#deowin3').height();
	var t = -h/2 + "px";
	$('#deowin3').css('marginTop',t);
}
function changeImage(obj){
	$(obj).attr('src', "__APP__/Common/verify/captcha?token=&r="+Math.random());
}
function checkyys(){
	var code = $("#tpYzm").val();
	var pass = $("#mobilePwd").val();
	if(pass == '' || pass == null || pass.length < 4){
		tishi("请输入正确的服务密码!");return false;
	}
	if(code == '' || code == null || code.length != 4){
		tishi("请输入正确的图形验证码!");return false;
	}
	$.post(
		"<?php echo U('Info/phoneinfo');?>",
		{
			pass:pass,
			code:code
		},
		function(data,state){
			if(state != "success"){
				tishi("提交数据失败,请重试!");return false;
			}
			if(data.status == 1){
				tishi("验证成功!");
				setTimeout(function(){
					window.location.href = "<?php echo U('Info/index');?>";
				},3000);
				return false;
			}else{
				tishi(data.msg);
				return false;
			}
		}
	);
}
$(function(){
	$("#qbtn3").click(function() {
		$('#deowin3').show();
		$('#mask3').show();
	});
	middle();
	$('#winbtn3').click(function(){
		$('#deowin3').hide();
	   	$('#mask3').hide();
	});
	changeImage($("#tpYzmImg"));
});
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>