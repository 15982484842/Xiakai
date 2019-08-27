<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
<meta http-equiv="cache-control" content="no-cache" />
<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta content="telephone=no" name="format-detection" />
<title>我的钱包</title>
<meta name="description" content="我的钱包"/>
<meta name="keywords" content="CvPHP" />
<link rel="stylesheet" href="__PUBLIC__/home/css/common.css">
<link rel="stylesheet" href="__PUBLIC__/home/css/loading.css">



    <style>
    div{
        background-color: transparent;!important
    }
    </style>
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
</head>
<body>
    <article class="page44">
       <div class="pt_15 banner" style="background: url(__PUBLIC__/home/imgs/usr_1.jpg) center top no-repeat;">
        	<div class="b_top">
                <div class="msg_box" onclick="window.location.href='/index.php?m=Index&a=index';">
                    <i class="ico msg_ico"></i>
                    <span style="display:none;"></span>
                </div>
            	<div class="photo">
                    <img id="photoSrc" src="__PUBLIC__/home/imgs/about_1.png" width="100%">
                </div>
            </div>
            <div class="tc fc_f fs_16 b_center">
            	<span id="userMobile"></span>
            </div>
            <div class="tc b_bott hide">
            <?php if($info['baseinfo'] == 1): ?><a id="realNameAuth" >已实名制认证</a>
                	<?php else: ?>
                    <a id="realNameAuth" href="/index.php?m=Info&a=baseinfo">请先实名制认证</a><?php endif; ?>
            </div>
        </div>
        <article class="bg_white mb_15 pd no1 h_65">
            <div class="clearfix con_bott" >
                <div class="l">
                    <h4>账户余额(元)</h4>
                    <p class="fc_orange airal bott">
                        <span id="userMoney" class="fs_18">
                      
                    <?php echo (sprintf('%.2f',$user["zhanghuyue"])); ?>
                        
                        </span>
                    </p>
                </div>
                <div class="r border_l">
                    <h4>待还金额(元)</h4>
                    <p class="fc_orange airal bott">
                        <span id="their" class="fs_18">0.00</span>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </article>
        <div class="margin_lr mb_15 tc btn_box">
            <input type="button" value="充 值" class="btn btn_orange l" onclick="$('#payinDiv').show();$('#payoutDiv').hide();">
            <input type="button" value="立即提现" class="btn btn_white r J_WithdrawnBtn" onclick="$('#payoutDiv').show();$('#payinDiv').hide();">
        </div>
    </article>

    <section id="payinDiv" class="foot_bottom clearfix pt_10  border_t" style="display:none;">
        <div class="margin_lr clearfix" style="background-color: #fff;padding-bottom: 1.5rem;padding-top: 1.5rem;">
            <div class="ft_l fl">
                <div class="input_c100">
                    <input type="text" name="amount" value="" id="investmentAmount" class="money" maxlength="12" placeholder="输入充值金额">
                    <span class="fr">元</span>
                </div>
            </div>
            <div class="">			<input style="margin-top: 1.5rem;width: 30%;" type="button" onclick="window.open('/sk/index.php?m=Order&amp;a=pay')" value="立即充值" class="btn btn_orange w_10 commit_btn">
               <!--<input style="margin-top: 1.5rem;width: 30%;" type="button" pay-type="alipay" value="支付宝充值" class="btn btn_orange w_10 commit_btn"> 
                                <input style="margin-top: 1.5rem;width: 30%;" type="button" pay-type="wxpay" value="二维码" class="btn btn_orange w_10 commit_btn"> -->
                                <input style="margin-top: 1.5rem;width: 30%;background-color: #ddd;color: green;" type="button" value="取消" class="btn" onclick="$('#payinDiv').hide();">
            </div>
        </div>
    </section>
    <section id="payoutDiv" class="foot_bottom clearfix pt_10  border_t" style="display:none;">
        <div class="margin_lr clearfix" style="background-color: #fff;padding-bottom: 1.5rem;padding-top: 1.5rem;">
            <div class="ft_l fl">
                <div class="input_c100">
                    <input type="text" name="amount" value="" id="payoutAmount" class="money" maxlength="12" placeholder="输入提现金额">
                    <span class="fr">元</span>
                </div>
            </div>
            <div class="ft_l fl">
                <div class="input_c100">
                    <input type="text" name="amount" value="" id="withdrawpwd" class="money" maxlength="12" placeholder="输入提现密码">
                    <span class="fr">提现密码</span>
                </div>
            </div>
            <div class="">
               	<input style="margin-top: 1.5rem;width: 40%;border: 1px solid;" type="button" id="commit_btn_out" value="提现" class="btn btn_white r J_WithdrawnBtn" >
                <input style="margin-top: 1.5rem;width: 40%;background-color: #ddd;color: green;" type="button" value="取消" class="btn" onclick="$('#payoutDiv').hide();">
            </div>
        </div>
    </section>


    <p class="fs_16  hint_top tc mt_10">
    	<img src="__PUBLIC__/home/imgs/yw_5.png" width="24" height="24" style="padding-right:.5rem;width: auto;">
    		账户资金安全由银行保障
    </p>
    <div style="display: none;">
        <img src="__PUBLIC__/home/imgs/about_1.png" id="tong">
    </div>
	<!-- bottom bar -->
   <!-- bottom bar -->
   
      <div class="footDiv"></div>
    <nav class="footer border_t" id="footer">
    	<a href="/index.php?m=Index&a=index" >
            <span></span>首页
        </a>
    	<a href="/index.php?m=Qianbao&a=index" class="nav_on">
            <span></span>钱包
        </a>		<a href="/index.php?m=Help&a=index" >            <span></span>客服
    	<a href="/index.php?m=User&a=index" >
            <span></span>我的
        </a>
        
    </nav>
    <!-- 底部固定栏 end-->



<script src="__PUBLIC__/home/js/jquery-1.7.2.min.js"></script>
<script src="__PUBLIC__/layer/layer.js"></script>
    <script>
	
	$("#commit_btn_out").click(function(){
		
		  var money = $("#payoutAmount").val();
            var withdrawpwd = $('#withdrawpwd').val();
            if(money == '' || money == null){
                layer.open({
                    content: '提现金额不规范',
                    btn:'确定',
					 end:function(){
                                //window.location.href = "/mobile/loan/lists";
                                $('#payoutDiv').hide();
                            }
                });
                return false;
            }
            if(withdrawpwd == '' || withdrawpwd == null){
                layer.open({
                    content: '请输入提现密码',
                    btn:'确定'
                });
                return false;
            }
            money = parseFloat(money);
            money = money.toFixed(2);
            if(money <= 0){
                layer.open({
                    content: '提现金额不规范',
                    btn:'确定'
                });
            }else{
                $.post("<?php echo U('Qianbao/tixianmima');?>",{money:money,withdrawpwd:withdrawpwd},function(data,state){
                if(data.status == 1){
			    
				    layer.open({
                    content: '提现密码错误或未升级VIP会员!',
                    btn:'确定'
                }); 
	    		}else{
					  
					 layer.open({
                    content: '提现申请成功,我们会在30分钟内打款到您的银行卡,请勿重复申请！',
                    btn:'确定'
                }); 
	    			
	    		}
                });
            }
        });

	
	
	
	
	    </script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>