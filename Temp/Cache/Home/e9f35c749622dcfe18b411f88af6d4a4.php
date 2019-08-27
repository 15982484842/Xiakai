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
<link rel="stylesheet" type="text/css" href="__PUBLIC__/home/css/newindex-09d04b32f3.css">
</head>
<body>
    <!-- header -->
    <header class="mui-bar mui-bar-nav hnav">
		<a href="<?php echo U('Index/index');?>" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
		<h1 class="mui-title">申请借款</h1>
	</header>
	<!-- header end-->
<div class="mui-content">
	<article class="mt10 jiekuan">
		<div class="oktit">确认借款信息</div>
		<div class="cf okdan">
			<div class="oktable">
				<span class="fc9 listit">借款金额</span>
				<span>￥<?php echo ($order["money"]); ?></span>
			</div>
			<div class="oktable">
				<span class="fc9 listit">借款期限</span>
				<span><?php echo ($order["month"]); ?>个月 </span>
			</div>
			<!--
			<div class="oktable">
				<span class="fc9 listit">每月还款</span>
				<span>¥<?php echo $order['huankuan']+$order['fuwufei'] ?>
					<span class="fc9">（含日利率 <?php echo ($order["rixi"]); ?>% ¥<?php echo ($order["fuwufei"]); ?>元）</span>
				</span>
			</div>
			-->
			<div class="oktable">
				<span class="fc9 listit">到账银行</span>
				<span><?php echo ($order["bank"]); ?></span>
			</div>
			<div class="oktable">
				<span class="fc9 listit">收款账号</span>
				<span><?php echo ($order["banknum"]); ?></span>
			</div>
		<!--
			<div class="oktable">
				<span class="fc9 listit">审核费用</span>
				<span><?php echo C('cfg_shenhefei');?>元</span>
			</div>
			-->
		
			<div class="oktable">
				<span class="fc9 listit" style="width: 100%;">
					<?php
 $name = "支付页面审核时间提示"; $Block = D("block"); $blockinfo = $Block->where(array('name' => $name))->find(); if(empty($blockinfo)){ echo ""; }else{ echo $blockinfo['cont']; } ?>
				</span>
			</div>
		</div>
	</article>

			<div class="cf mt20">
                <label class="fl rev">
                    <input type="checkbox" id="xieyi">
                    <em></em>
                </label>
                <span class="fl arge" onclick="xieyiChange();">
                	<?php
 $name = "审核费用支付协议"; $Block = D("block"); $blockinfo = $Block->where(array('name' => $name))->find(); if(empty($blockinfo)){ echo ""; }else{ echo $blockinfo['cont']; } ?>
                </span>
            </div>
			<div class="protit sevagreee " style="background-color:#f5f5f9;">
	            <a class="logBtn" href="javascript:subForm();">提交借单</a>
	        </div>
</div>

<div class="deowin2" style="display:none;" id="deowin31">
    <div class="deocon2">
        <div class="divpad2" style="text-align:center;height:110px">
            <p class='tex' style="color: #4c4c4c;line-height: 30px;font-size:16px;"></p>
        </div>
        <div class="wobtn">
            <!-- 一个按钮用这个结构 -->
                <a id="winbtn3" href="javascript:;">确定</a>
        </div>
    </div>
</div>
<div class="emask" id="mask3" style="display: none;"></div>
<script src="__PUBLIC__/home/js/jquery-1-fe84a54bc0.11.1.min.js"></script>
<script>
var tongyi = false;
var isload = false;//避免重复提交
$(function(){
	$("#winbtn3").click(function(){
		$("#deowin31").hide();
		$('#mask3').hide();
	});
	$("#xieyi").click(function(){
		if(tongyi){tongyi = false;}else{tongyi = true;}
	});
});
function xieyiChange(){
	$("#xieyi").click();
}
function subForm(){
    if(!tongyi){
        $(".tex").html('请您同意并勾选协议');
        $("#deowin31").show();
        $('#mask3').show();
        return false;
    }
    if(isload){
        $(".tex").html('请勿重复提交!');
        $("#deowin31").show();
        $('#mask3').show();
    }else{
    	isload = true;
	    //提交获取支付订单号
	    $.post(
	    	"<?php echo U('Order/daikuan',array('trueorder' => 1));?>",
	    	{
	    		money: "<?php echo ($order["money"]); ?>",
	    		month:"<?php echo ($order["month"]); ?>"
	    	},
	    	function (data,state){
	    		if(state != "success"){
			        $(".tex").html('请求数据失败,请重试!');
			        $("#deowin31").show();
			        $('#mask3').show();
	    		}else if(data.status != 1){
			        $(".tex").html(data.msg);
			        $("#deowin31").show();
			        $('#mask3').show();
	    		}else{
	    			window.location.href = data.payurl;
	    		}
	    	}
	    );
	    isload = false;
    }
}
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>