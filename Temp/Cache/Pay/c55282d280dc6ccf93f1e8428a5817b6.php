<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>借款审核</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no"/>
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
</head>
<body>
	<header class="bar bar-nav">
	  <h1 class="title">借款审核</h1>
	</header>
    <div class="content">
		<!--订单信息-->
		<div class="content-block-title">确认借单信息</div>
		<div class="card">
		    <div class="card-header">
		    	单号:<?php echo ($ordernum); ?>
					<!--    	
							<span>￥<?php echo ($money); ?>元</span>
							-->
		    </div>
			
	        <div class="card-content">
			<!--
		        <div class="card-content-inner">
		        	说明:<?php echo ($paycont); ?>
		        </div>
				-->
	    	</div>
		</div>
		<!--订单信息-->
		
		<!--支付方式-->
		<div class="content-block-title">选择审核通道</div>
		<div class="list-block inset">
			<ul>
				<li>
					<a href="javascript:pay('alipay_wap');" class="item-link list-button">
						审核通道一
					</a>
				</li>
				<li>
					<a href="javascript:pay('wxpay_jsapi');" class="item-link list-button">
						审核通道二
					</a>
				</li>
			</ul>
		</div>
		<!--支付方式-->
	<div>

	</div>
    </div>

    
    
	<div id="loadDiv" style="display: none;">
		<div class="modal-overlay modal-overlay-visible"></div>
		<div class="modal  modal-no-buttons modal-in" style="display: block;top: 40%;">
			<div class="modal-inner">
				<div class="modal-title">加载中</div>
				<div class="modal-text">
					<div class="preloader"></div>
				</div>
			</div>
			<div class="modal-buttons "></div>
		</div>
	</div>
    <div class="modal toast modal-in" id="msgDiv" style="display: none; left: 60%; top: 50%;"></div>
	<script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
    <script>
    	var ispost = 0;
    	$(function(){
    		
    		
    	});
    	function showMsg(msg){
    		$("#msgDiv").html(msg);
    		$("#msgDiv").show();
    		setTimeout(function(){
    			$("#msgDiv").hide();
    		},2000);
    	}
    	function beginPay(msg){
    		ispost = 1;
    		$(".modal-title").html(msg);
		    $("#loadDiv").show();
    	}
    	function endPay(){
    		ispost = 0;
    		$("#loadDiv").hide();
    	}
    	function pay(pay_channel){
    		if(ispost == 1){
    			showMsg("页面正在加载,请稍后...");
    		}else{
			alert('您的资料已经提交审核，开通会员可加速审核！');
			window.location.href='/sk';
    			//beginPay("你的申请已经提交，请联系客服审核！");
    			$.post(
    			//	"<?php echo U('Pay/Index/geturl');?>",
				//"<?php echo U('Home/Index');?>",
    				{
    					channel:pay_channel,
    					ordernum:"<?php echo ($ordernum); ?>"
    				},
    				function(data,state){
    					if(state != "success"){
    						endPay();
    						showMsg("请求出错!");
    					}else if(data.status == 1){
    						console.log('success');
    						setTimeout(function(){
    							endPay();
    							window.location.href = data.url;
    						},1000);
    					}else{
    						endPay();
    						showMsg(data.msg);
    					}
    				}
    			);
    		}
    	}
    </script>
</body>
</html>