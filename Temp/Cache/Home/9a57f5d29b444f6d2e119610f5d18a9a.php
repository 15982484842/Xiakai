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
		<a href="<?php echo U('Order/lists');?>" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">借款详情</h1>
	</header>
	<!-- header end-->
<div class="mui-content">
	<article class="jiekuan">
		<div class="oktit">
			借款进度
		</div>
					<div class="cf okdan">
			<div class="kprogress">
				<span class="f14 red">

				</span>
				<!--
				<span class="fr fc9 f26"><span class="f18">¥</span><?php echo ($data["money"]); ?></span>
				-->
			</div>
			<div class="prgbar">
					<div class="prg1">
						<div>
							<?php if($data['status'] == 0) echo '<span class="procir3"></span>'; else echo '<span class="procir3"></span>'; ?>
						</div>
						<div class="mt4">
							<p>
								<?php if($data['status'] == 0) echo "提交成功"; else echo "提交成功"; ?>			</p>
							<p class="f12"></p>
						</div>
					</div>
					<div class="prg2">
						<div>
							<?php if($data['status'] == 1){ echo '<span class="procir3"></span>'; }elseif($data['status'] == 2){ echo '<span class="procir2"></span>'; }elseif($data['status'] == 3){ echo '<span class="procir3"></span>'; }elseif($data['status'] == 4){ echo '<span class="procir3"></span>'; }elseif($data['status'] == 5){ echo '<span class="procir4"></span>'; }elseif($data['status'] == 6){ echo '<span class="procir2"></span>'; }elseif($data['status'] == 7){ echo '<span class="procir2"></span>'; }elseif($data['status'] == 8){ echo '<span class="procir4"></span>'; }elseif($data['status'] == 9){ echo '<span class="procir2"></span>'; } ?>
						</div>
						<div class="mt4">
							<p>
								<?php if($data['status'] == 1){ echo "正在审核"; }elseif($data['status'] == 2){ echo "到帐钱包"; }elseif($data['status'] == 3){ echo "审核通过"; }elseif($data['status'] == 4){ echo "审核不通过"; }elseif($data['status'] == 5){ echo "押金"; }elseif($data['status'] == 6){ echo "冻结"; }elseif($data['status'] == 7){ echo "保险"; }elseif($data['status'] == 8){ echo "利息"; }elseif($data['status'] == 9){ echo "银行卡异常"; }elseif($data['status'] == 10){ echo "征信"; }elseif($data['status'] == 11){ echo "提现成功"; } ?>
							</p>
							<p class="f12"></p>
						</div>
					</div>
					<div class="prg3">
						<div>
							<?php if($data['status'] == 2){ echo '<span class="procir3"></span>'; }else{ echo '<span class="procir1"></span>'; } ?>
						</div>
						<div class="mt4">
							<p>
								到账成功
							</p>
							<p class="f12"></p>
						</div>
					</div>
			</div>
		</div>
			</article>
			<?php if($data['name'] != ''){ ?>
			<article class="mt10 jiekuan">
		<div class="cf okdan" style="padding: 0px">
			<div class="oktable">
				<div class="fc9 listit" style="width: 25%;float: left;">温馨提示</div>
				<div style="width: 71%;float: right;">
					<span style="color: red;">
						

	
<?php echo $data['name']; ?><br>
					</span>
				
				</div>
				
			</div>
		</div>
	</article>
	<?php } ?>
	<article class="mt10 jiekuan">
		<div class="oktit">
			借款详情
		</div>
		<div class="cf okdan">
           <div class="oktable">
<!--
			<span class="fc9 listit"><a class="fr f13 danstate datalose" href="/index.php?m=Order&a=hetong&oid=382">>>查看电子合同</a></span>	
-->
				<span></span>

			</div>
			<div class="oktable">
				<span class="fc9 listit">订单编号</span>
				<span><?php echo ($data["ordernum"]); ?></span>
			</div>
			<!--
			<div class="oktable">
				<span class="fc9 listit">借款金额</span>
				<span>￥<?php echo ($data["money"]); ?></span>
			</div>
			-->
			<div class="oktable">
				<span class="fc9 listit">借款期限</span>
				<span><?php echo ($data["months"]); ?>个月</span>
			</div>
			<div class="oktable">
				<span class="fc9 listit">到账银行</span>
				<span><?php echo ($data["bank"]); ?></span>
			</div>
			<div class="oktable">
				<span class="fc9 listit">收款账号</span>
				<span><?php echo ($data["banknum"]); ?></span>
			</div>
			<div class="oktable">
				<span class="fc9 listit">每期还款</span>
				<span>¥<?php echo ($data["monthmoney"]); ?></span>
			</div>
			<div class="oktable">
				<span class="fc9 fl listit">还款说明</span>
				<span class="fl deinfo">请您于每月<?php echo C('cfg_huankuanri');?>号前,进行还款操作，逾期将给您生活带来不便！</span>
			</div>
		</div>
	</article>
</div>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>