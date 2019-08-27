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
<style type="text/css">
.title{ text-align:center; font-size:16px; color:#666}
.touxiang{ width:90%; margin-left:5%; height:60px; margin-top:30px;}
.touxiang_f1{height:60px;width:60px; -moz-border-radius: 15px;      /* Gecko browsers */
    -webkit-border-radius: 15px;   /* Webkit browsers */
    border-radius:15px; float:left; overflow:hidden }
.touxiang_f2{float:left;height:40px;width:160px; padding-left:20px;  font-size:16px; padding-top:10px;  }

.lanse{ height:300px; background:#3C9DFF; margin-top:10px; color:#fff; font-size:16px;}
.diwenzi{ height:30px; background:#006CD9}
.diwenzi_f{ width:33%; cursor:pointer; float:left; font-size:14px; line-height:30px; text-align:center; color:#fff;}

.did{font-size:16px; height:40px; border-bottom:1px solid #CCC; padding-left:20px; line-height:40px; cursor:pointer; color:#666}
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
<body style="background:#FFF">
    <!-- header -->
    <header class="mui-bar mui-bar-nav hnav">
		<a href="<?php echo U('User/index');?>" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">我的团队</h1>
	</header>
	<!-- header end-->



<div class="lanse">
 <div  style="padding-top:50px; margin-left:10px;">客户总数: <?php echo ($userCount2); ?>(人)</div>
 <div  style="margin-top:20px; margin-left:10px;" >累计提现金额(元)</div>
 <div  style="margin-top:5px; margin-left:10px; font-size:18px; font-weight:bold"  ><?php echo ($data["leiji_tixian"]); ?></div>
 <div  style="margin-top:20px; margin-left:10px;" >可提现金额(元)</div>  
 <div  style="margin-top:5px; margin-left:10px; font-size:18px; font-weight:bold"  ><?php echo ($data["ketixian"]); ?></div>
 <div  style="margin-top:10px; margin-left:10px; border:1px solid #fff; width:50px; height:30px; line-height:25px; text-align:center; -moz-border-radius: 5px;      /* Gecko browsers */
    -webkit-border-radius: 5px;   /* Webkit browsers */
    border-radius:5px; float:left; overflow:hidden; cursor:pointer" onclick="document.location='<?php echo U('Fenxiao/shentixian');?>'">提现</div>
</div>
 

 
 <div class="did" >我的推荐码:<?php echo ($tuima["tui_ma"]); ?></div>
 <div class="did" onclick="document.location='<?php echo U('Fenxiao/erweima');?>'">我的推广二维码</div>
  <div class="did"  onclick="document.location='<?php echo U('Fenxiao/fenxiaolibiao');?>'">点击查看团队明细</div>
   
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