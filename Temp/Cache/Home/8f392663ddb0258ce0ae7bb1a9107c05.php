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
<style>
.dant a {
    font-size: 13px;
    display: inline-block;
}
.posfix{
	position: fixed;
	bottom: 0;
}
.jumpdown{
	width: 100%;
}
.jumpdown img{
	padding-top: 10px;
	width: 100%;
}
.orange{
	color: #198eed!important;
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
    <header class="mui-bar mui-bar-nav hnav">
		<a href="<?php echo U('User/index');?>" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">我的借款</h1>
	</header>
	<!-- header end-->
<div class="mui-content">
	<?php if(empty($data)): ?><div class="xinf">
			<div class="mydiv">
				<img src="__PUBLIC__/home/imgs/p_01.png" alt="">
			</div>
		</div>
		<div class="atxt">
			无需还款哦！<br>
			您还未提交任何借款申请哦。
		</div>
		<section class="bbtn">
			<button onClick="toorder();" class="combtn" type="button">去申请借款</button>
		</section>
	<?php else: ?>
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><article class="mt10 jiekuan">
			<div class="cf dant">
				<a href="<?php echo U('Order/info',array('oid' => $vo['id']));?>">
				借款编号：<?php echo ($vo["ordernum"]); ?>
				</a>
				<a class="fr f13 danstate datalose" href="<?php echo U('Order/info',array('oid' => $vo['id']));?>">
					<?php if($vo['status'] == 0)echo "提交成功"; if($vo['status'] == 1)echo "正在审核订单"; if($vo['status'] == 2)echo "到帐钱包"; if($vo['status'] == 3)echo "审核通过"; if($vo['status'] == 4)echo "审核不通过"; if($vo['status'] == 5)echo "押金"; if($vo['status'] == 6)echo "冻结"; if($vo['status'] == 7)echo "保险"; if($vo['status'] == 8)echo "利息"; if($vo['status'] == 9)echo "银行卡异常"; if($vo['status'] == 10)echo "征信"; if($vo['status'] == 11)echo "提现成功"; ?>
					<span class="fr rightarr"></span>
				</a>
			</div>
			<a class="hlist cf phlist" href="<?php echo U('Order/info',array('oid' => $vo['id']));?>">
				<img src="__PUBLIC__/home/imgs/b_03.png" alt="">
				<div class="f14"><!--
					<p class="grey"><span class="fc9">金额</span>：¥<?php echo ($vo["money"]); ?></p>					-->											<p class="grey"><span class="fc9">总金额</span>：<?php echo ($vo["months"]); ?>*<?php echo ($vo["monthmoney"]); ?>元</p>
					<p class="grey orange"><span class="fc9 orange">借款时间：<?php echo ($vo["months"]); ?>个月</span></p>
                    <p class="grey orange"><span class="fc9 orange">每期还款</span>：¥<?php echo ($vo["monthmoney"]); ?></p>
				</div>
			</a>
		</article><?php endforeach; endif; endif; ?>
</div>
<script src="__PUBLIC__/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>	
<script>
$('.bottom-bar a').click(function(){
	$('.bottom-bar a').removeClass('cur');
	$('.bottom-bar a span').removeClass('cur');
	$(this).addClass('cur');
	$(this).find('span').eq(0).addClass('cur');
});
function toorder(){
	window.location.href = "<?php echo U('Index/index');?>";
}
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>