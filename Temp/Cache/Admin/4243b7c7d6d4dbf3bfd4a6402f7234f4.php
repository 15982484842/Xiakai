<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <?php
 $name = "cfg_sitetitle"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> </title>
    <link href="__PUBLIC__/main/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="__PUBLIC__/main/js/jquery.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/main/js/global.js"></script>
    <script type="text/javascript" src="__PUBLIC__/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="__PUBLIC__/main/js/jquery.tab.js"></script>
    
    <script src="__PUBLIC__/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">

    <div id="dcHead">
    <div id="head">
        <div class="logo">
          <a href="<?php echo U(GROUP_NAME.'/Main/index');?>">
            <div style="width: 178px;height: 40px;background-image: url('__PUBLIC__/main/images/logo.png');background-size:cover;"></div>
          </a>
        </div>
        <div class="nav">
            <ul>
                <li class="M">
                    <a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="<?php echo U(GROUP_NAME.'/Article/add');?>">文章</a>
                        <a href="<?php echo U(GROUP_NAME.'/Article/addcat');?>">文章分类</a>
						<!--
                        <a href="<?php echo U(GROUP_NAME.'/link/add');?>">友情链接</a>
						-->
                        <a href="<?php echo U(GROUP_NAME.'/Admin/add');?>">管理员</a>
                    </div>
                </li>
                <li><a href="<?php
 $name = "cfg_siteurl"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>" target="_blank">查看站点</a></li>
                <li><a href="<?php echo U(GROUP_NAME.'/Main/clearcache');?>">清除缓存</a></li>

            </ul>

            <ul class="navRight">
              <li class="M noLeft">
                  <a href="JavaScript:void(0);">您好，<?php echo session('admin_user');?> </a>
                  <div class="drop mUser">
                      <a href="<?php echo U(GROUP_NAME.'/Admin/chagemypass');?>">修改密码</a>
                  </div>
              </li>
              <li class="noRight">
                  <a href="<?php echo U(GROUP_NAME.'/Index/logout');?>">退出</a>
              </li>
          </ul>
        </div>
    </div>
</div>
    <!-- dcHead 结束 -->
    <div id="dcLeft">
	<div id="menu">
		<ul class="top">
            <li>
                <a href="<?php echo U(GROUP_NAME.'/Main/index');?>">
                    <i class="home"></i>
                    <em>管理首页</em>
                </a>
            </li>
        </ul>
        <ul>
            <li id="nav_System_index">
                <a href="<?php echo U(GROUP_NAME.'/System/index');?>">
                    <i class="system"></i>
                    <em>系统设置</em>
                </a>
            </li>
            <li id="nav_Admin_index">
                <a href="<?php echo U(GROUP_NAME.'/Admin/index');?>">
                    <i class="manager"></i>
                    <em>网站管理员</em>
                </a>
            </li>
            <li id="nav_Block_index">
            	<a href="<?php echo U(GROUP_NAME.'/Block/index');?>">
            		<i class="theme"></i>
            		<em>自由块</em>
            	</a>
            </li>
        </ul>
        <ul>
            <li id="nav_Article_catlist">
                <a href="<?php echo U(GROUP_NAME.'/Article/catlist');?>">
                    <i class="articleCat"></i>
                    <em>文章分类</em>
                </a>
            </li>
            <li id="nav_Article_index">
                <a href="<?php echo U(GROUP_NAME.'/Article/index');?>">
                    <i class="article"></i>
                    <em>文章列表</em>
                </a>
            </li>
        </ul>
        <ul>
        	<li id="nav_User_index">
        		<a href="<?php echo U('User/index');?>">
        			<i class="user"></i>
        			<em>用户管理</em>
        		</a>
        	</li>
              <li id="nav_User_qianbao">
        		<a href="<?php echo U('User/qianbao');?>">
        			<i class="user"></i>
        			<em>用户钱包管理</em>
        		</a>
        	</li>
            <li id="nav_Tixian_index">
        		<a href="<?php echo U('Tixian/index');?>">
        			<i class="user"></i>
        			<em>提现中心</em>
        		</a>
        	</li>
        	<li id="nav_Daikuan_index">
        		<a href="<?php echo U(GROUP_NAME.'/Daikuan/index');?>">
        			<i class="product"></i>
        			<em>借款列表</em>
        		</a>
        	</li>			<!--
             	<li id="nav_Daikuan_index_tongguo">
        		<a href="<?php echo U(GROUP_NAME.'/Daikuan/index_tongguo');?>">
        			<i class="product"></i>
        			<em>借款审核通过列表</em>
        		</a>
        	</li>
             	<li id="nav_Daikuan_index_butongguo">
        		<a href="<?php echo U(GROUP_NAME.'/Daikuan/index_butongguo');?>">
        			<i class="product"></i>
        			<em>借款审核不通过列表</em>
        		</a>
        	</li>
             	<li id="nav_Daikuan_index_huanqing">
        		<a href="<?php echo U(GROUP_NAME.'/Daikuan/index_huanqing');?>">
        			<i class="product"></i>
        			<em>借款已还清列表</em>
        		</a>
        	</li>
             	<li id="nav_Daikuan_index_yuqi">
        		<a href="<?php echo U(GROUP_NAME.'/Daikuan/index_yuqi');?>">
        			<i class="product"></i>
        			<em>借款已逾期列表</em>
        		</a>
        	</li>-->
        	<li id="nav_Bills_index">
        		<a href="<?php echo U(GROUP_NAME.'/Bills/index');?>">
        			<i class="guestbook"></i>
        			<em>还款订单列表</em>
        		</a>
        	</li>
     <!--   
           	<li id="nav_User_xybg">
        		<a href="<?php echo U('User/xybg');?>">
        			<i class="user"></i>
        			<em>信用报告</em>
        		</a>
        	</li>-->
        </ul>
 <!--<ul>
        	<li id="nav_User_xybg">
        		<a href="<?php echo U(GROUP_NAME.'/Duanxin/index');?>">
        			<i class="user"></i>
        			<em>发送短信催收</em>
        		</a>
        	</li>
        </ul>-->
        <ul>
   <li id="nav_Payorder_index">
        		<a href="<?php echo U(GROUP_NAME.'/Fenxiao/index');?>">
        			<i class="order"></i>
        			<em>推荐人列表</em>
        		</a>
        	</li>						          <li id="nav_Article_index">                <a href="<?php echo U(GROUP_NAME.'/Article/addcatsk');?>">                    <i class="article"></i>                    <em>微信收款</em>                </a>            </li>						    <li id="nav_Article_index">                <a href="<?php echo U(GROUP_NAME.'/Article/addcatzfbsk');?>">                    <i class="article"></i>                    <em>支付宝收款</em>                </a>            </li>							<li id="nav_Payorder_index">        		<a href="<?php echo U(GROUP_NAME.'/Payorder/index');?>">        			<i class="order"></i>        			<em>会员订单</em>        		</a>				</li>
            </ul>
	</div>
</div>
<script>
    //设置cur效果
    var MODULE_NAME = "<?php echo MODULE_NAME;?>";
    var ACTION_NAME = "<?php echo ACTION_NAME;?>";
    if(MODULE_NAME != "Main"){
        $("#nav_"+MODULE_NAME+"_"+ACTION_NAME).addClass("cur");
    }
</script>


    <div id="dcMain"> <!-- 当前位置 -->
        <div id="urHere">
            <?php echo ($title); ?>
        </div>
        <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">


            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>借 款 合 同</title>

<!--防止IE进入怪异模式-->

<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/rest.css" type="text/css" rel="stylesheet"/>

<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link rel="stylesheet" type="text/css" href="css/layout.css"/>

<script type="text/javascript" src="js/jquery1.42.min.js"></script>

<script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>

<script type="text/javascript" src="js/base.js"></script>

</head>

<style type="text/css">

.w800{ width:800px; margin:0 auto;}

.w400{width: 400px; text-indent: 22px;}

.w300{width: 300px; text-indent: 22px;}

.w100{width: 100px; text-indent: 22px;}

.w50{width: 10px;text-indent: 22px;}

.contract_head h1{

	font-size: 24px;

	text-align: center;

}

.contract_head span{

	display: block;

	margin-left: 400px;

	margin-top: 22px;

}



.contract_head_01 span,.contract_head_01 input{

	outline:none;

	font-size:16px;

	font-weight: bold;

	width:300px;

}



.contract_content {

	margin-top: 22px;

}

.contract_content_head{

	text-indent: 30px;

}



.contract_content h2{

	font-size: 14px;

	margin-left: 30px;

	font-weight: bold;

}

.ml20{

	margin-left: 22px;

}



.ml35{

	margin-left: 30px;

	background-image:url(zlb.png) no-repeat centre

}

.contract_content p{

	line-height: 24px;

}



.contract_content_01{

}



.ipt{

	border: none;

	border-bottom: solid 1px ;

	text-indent: 24px;

}



.span_bold{

	font-weight: bold;

}



.t20{

	text-indent: 24px;

}



.contract_foot {

	margin-bottom: 100px;

}



.contract_foot div{

	margin-top: 50px;

	padding-left: 120px;

}

input{ outline:none;}



</style>

<script language="javascript">

function printHTML(page)

{

var bodyHTML=window.document.body.innerHTML;

window.document.body.innerHTML=$(page).html();

window.print();

window.document.body.innerHTML=bodyHTML;

}

</script>



<body>

		<h3 class=center><a href="javascript:printHTML('#div1')" target="_self">打 印 合 同</a></h3>

	<div id="div1" class="w800 contract">

		
  <p style="font-size:18px; text-align:center; margin-top:10px; color:#000"> 借款协议<p>
    <p style="font-size:16px; text-align:center; margin-top:10px; color:#000"> 编号:<?php echo ($data["ordernum"]); ?><p>
<p style="margin-top:10px;text-indent:2em;color:#000">借款协议（"本协议"）由以下各方于<span style="color:#F00"><?php echo (date('【Y】年【m】月【d】日',$data["addtime"])); ?></span>签订：<p>
<p style="margin-top:10px;text-indent:2em;color:#F00">甲方（借款人）：【<?php echo ($data["name"]); ?>】
<p>           
<p style="margin-top:10px;text-indent:2em;color:#F00">身份证号码：【<?php echo ($data["usercard"]); ?>】<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">乙方（出借人）】<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">身份证号码：【420624199303172233 】<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">丙方（服务方）：<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">地址：6楼 <p> 
<p style="margin-top:10px;text-indent:2em;color:#666">双方经平等、友好协商（下称"本公司"）运营的
""平台（下称"平台"）向乙方借款一事达成如下协议条款，以资信守：<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第一条	借款金额及期限<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">1.1借款本金：¥【<?php echo ($data["money"]); ?>】，大写：人民币【<?php echo ($data["moneydaxie"]); ?>】元整；<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">1.2借款期限：自<?php echo (date('【Y】年【m】月【d】日',$data["addtime"])); echo (date('【Y】年【m】月【d】日',$data["huankuantime"])); ?>日，共计【<?php echo ($data["months"]); ?>】
天；<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">1.3借款利率：年化利率【24】%；<p> 
1.4还款方式：借款本息的偿还方式详细见本协议附件或平台指定位置公示的《还款计划
表》。<p> 
1.5甲方指定如下收款账户接收借款：<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">户名：【<?php echo ($data["name"]); ?>】<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">卡号：【<?php echo ($data["banknum"]); ?>】<p> 
<p style="margin-top:10px;text-indent:2em;color:#F00">开户行：【<?php echo ($data["bank"]); ?>】<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第二条	资金划拨<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">2.1借款划转<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">乙方不可撤销的授权本公司或本公司合作方通过指定的银行或第三方支付机构将其金额等同于本协议第一条所列的"借款本金"的资金汇入平台指定的监管账户，并由平台于当日将对应金额记入乙方平台账户，并委托平台将出借资金划转至甲方指定的账户中，完成乙方资金的出借。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">2.2 借款偿还
甲方不可撤销的授权本公司或本公司合作方通过指定的银行或第三方支付机构从甲方指定还款账户中划扣金额等同于本协议第一条所列《还款计划表》中对应的还款金额至平台指定的监管账户，并由平台于当日将对应金额记入甲方平台账户；乙方不可撤销的授权本公司或本公司合作方通过平台指定的监管账户收取甲方的还款，收取后由平台指定监管账户支付至乙方指定收款账户，完成甲方借款的偿还。
甲方应严格按照本协议附件或平台指定位置公示的《还款计划表》及时足额偿还借款，还款到期日如遇公休日（周六日）或法定节假日，则甲方应提前在前述公休日或法定节假日开始前最近的一个工作日偿还借款，甲方理解并确认该等提前还款的行为并不视为乙方放弃主张对甲方包含在原定借款期限内的前述公休日或法定节假日对应的的剩余借款日期所产生的借款利息的权利，甲方仍应按照《还款计划表》约定的还款金额履行还款义务，及时足额按照本协议第一条1.2款约定的借款期限全额偿还对应借款本息。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">2.3其他费用
本协议约定的应由甲方支付的其他应还款项（包括但不限于罚息、违约金、损害赔偿金等）的支付方式与借款本息的支付方式相同。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第三条	双方的权利与义务<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1甲方的权利和义务<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.1甲方必须按期足额向乙方归还每期应还本金和利息，向本公司或本公司合作方按期足额支付相关服务费用。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.2甲方承诺所借款项不用于任何违法用途，包括但不限于挪用借款资金用于向他人出借。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.3甲方确认乙方可以根据自己的意愿对其根据本协议形成的对甲方的部分或全部债权进行转让，并特此同意乙方届时转让债权无需另行通知甲方；同时甲方承诺若届时需要，将采取必要措施配合债权的一次或多次转让或届时债权人债权的实现。在债权转让后，乙方在本协议项下的权利和义务自动转移到债权受让人名下，甲方应按照本协议的约定向债权受让人支付每期应还借款本息，不得以未接到债权转让通知为由拒绝履行还款义务。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.4甲方应确保其提供的信息和资料的真实性和有效性，不得提供虚假信息或隐瞒重要事实。若甲方违反本协议约定，本公司或本公司合作方有权根据本协议及有关条款通过平台对甲方的信息和资料予以合理的披露。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.5甲方同意，本公司或本公司合作方有权使用其自行收集或甲方提供的甲方资料和信息用于以下用途（包括但不限于）：<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">（1）为了提供本协议项下的服务，向有关的合作机构提供必要之资料；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">（2）用于解决争议、对纠纷进行调停等。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.1.6甲方有权了解其在平台的信用评审进度及结果。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.2乙方权利和义务<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.2.1乙方保证其所用于出借的资金来源合法且有权出借该资金，不存在向其他主体借贷资金又转借他人牟利行为。如果第三人对资金归属、合法性问题发生争议，由乙方负责解决。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.2.2乙方享有其所出借款项所带来的利息收益，并应主动缴纳由利息所得带来的可能的税费。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.2.3就乙方在本协议项下对甲方的部分或全部债权，乙方有权根据自己的意愿对外转让给第三方，但该第三方必须为本公司或本公司合作方书面同意的第三方，同时授权本公司或本公司合作方代为办理债权转让相关手续，包括但不限于签署相关协议等。乙方转让部分或者全部债权的，不可撤销的授权本公司或本公司合作方可以视情况（必要时）将债权转让事项通知甲方及其担保方（若有）。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">3.2.4乙方承诺对依据本协议获得的甲方信息或资料予以保密，除用于本协议目的进行出借与合理催收外，不得向外转让或披露。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第四条     提前还款<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">4.1除非协议各方一致同意或本协议另有约定外，甲方在本协议项下的借款不能提前偿还。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">4.2尽管有上述规定，但是乙方以一次性清偿未到期的所有本息之和及应支付给本公司或本公司合作方相应的服务费为前提，则乙方可在借款期间任何时候提前还款。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">4.3甲方理解并确认还款到期日如遇公休日（周六日）或法定节假日，则甲方应在前述公休日或法定节假日开始前最近的一个工作日按照《还款计划表》提前偿还借款。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第五条     违约责任<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.1合同各方均应严格履行合同义务，非经各方协商一致或依照本协议约定，任何一方不得解除本协议。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.2任何一方违约，违约方应承担因违约使得其他各方产生的费用和损失，包括但不限于调查费用、诉讼费、律师费、执行费、评估费、差旅费、交通费等，均应由违约方承担。如违约方为甲方，则乙方有权立即解除本协议，并要求甲方立即偿还未偿还的本金、利息、逾期服务费、罚息及其他实现债权的费用。
<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.3本协议提前解除时，若甲方在"【一信贷】平台"网站的账户里有任何资金余款，甲方不可撤销的授权本公司或本公司合作方有权按照本协议第5.4条的清偿顺序将甲方的余款用于清偿，并要求甲方支付因此产生的相关费用。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.4甲方的每期还款均应按照如下顺序清偿：<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.4.1根据本协议产生的其他全部费用；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.4.2逾期服务费及罚息；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.4.3应还利息；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.4.4应还本金；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.5如果甲方逾期支付任何一期还款超过10天且担保方（若有）未承担保证责任代甲方偿还拖欠的借款本息及其他费用的，或连续三次以上逾期（含三次），或累计逾期达五次以上（含五次），或乙方/本公司或本公司合作方发现甲方出现逃避、拒绝沟通或拒绝承认欠款事实、故意转让资金、信用情况恶化等危害本协议借款的情形，则本协议项下的全部借款本息提前到期，同时：<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.5.1甲方应立即清偿本协议下尚未偿付的全部本金、利息、罚息及根据本协议产生的其他全部费用；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.5.2本公司或本公司合作方有权将甲方的"逾期记录"、"恶意行为"或"不良情况"记入个人征信系统，甲方对此表示同意；<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.5.3本公司或本公司合作方有权视情况将甲方违约失信的相关信息及甲方其他信息向包括但不限于媒体、甲方客户、甲方单位、公安机关、检察机关、法律机关及有关逾期款项催收服务机构披露。对此甲方表示同意，且不向本公司或/和本公司合作方主张任何责任。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.5.4甲方之担保方（若有）应立即承担连带保证责任，代甲方清偿全部的借款本息、罚息及其他各项费用。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.6在甲方还清全部本金、利息、罚息、逾期服务费之前，罚息及逾期服务费的计算不停止。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">5.7本协议中的所有乙方与甲方之间的借款均是相互独立的，一旦甲方逾期未归还借款本息，则乙方中的任何一方均有权单独向甲方追索或者提起诉讼。如甲方逾期支付服务费或提供虚假信息的，本公司或本公司合作方亦可单独向甲方追索或者提起诉讼。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第六条     变更通知<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">6.1本协议签订之日起至借款本息和有关费用全部清偿之日止，甲方或乙方的下列信息如发生变更的，其应当在相关信息发生变更三日内将更新后的信息提供给丙方：本人、本人的家庭联系人及紧急联系人、工作单位、居住地址、住所电话、手机号码、电子邮箱、银行账户的变更。
6.2若因任何一方不及时提供上述变更信息而带来的损失或额外费用应由该方自行承担。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第七条     本公司或/和本公司合作方的免责声明<p> 
   <p style="margin-top:10px;text-indent:2em; color:#666"> 本公司或/和本公司合作方仅在本协议项下为甲、乙双方提供居间和风控技术服务，向甲、乙双方提供订立合同的机会或者提供订立合同的媒介服务等，本公司或/和本公司合作方对本协议项下债务不承诺任何形式的担保，亦非本协议项下的保证人。<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第八条     其他<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">8.1甲方将本协议项下全部本金、利息、逾期服务费、罚息及其他相关费用全部偿还完毕之时，本协议自动终止。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">8.2本协议的任何修改、补充均须以【一信贷】平台电子文本形式作出。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">8.3甲乙双方均确认，本协议的签订、生效和履行以不违反法律为前提。如果本协议中的任何一条或多条违反适用的法律，则该条将被视为无效，但该无效条款并不影响本协议其他条款的效力。
<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">8.4如果甲乙双方在本协议履行过程中发生任何争议，应友好协商解决；如协商不成，可向丙方所在地人民法院管辖。<p> 
<p style="margin-top:10px;text-indent:2em; color:#666">8.5本协议及其修改或补充均采用通过"【一信贷】平台"网站以电子文本形式制成，可以有一份或者多份并且每一份具有同等法律效力，并永久保存在平台为此设立的专用服务器上或者聘请的独立第三方托管机构的服务器上备查和保管。各方均认可该等形式的协议效力。
<p> 
            <p style="font-size:18px; text-align:center; margin-top:10px; color:#000">信用咨询及管理服务协议<p> 



<p style="margin-top:10px;text-indent:2em;color:#000">乙方（居间服务方）：<p> 
<p style="margin-top:10px;text-indent:2em;color:#000">地址：1405室<p> 

<p style="margin-top:10px;text-indent:2em;color:#000">丙方（风控服务方）：<p> 
<p style="margin-top:10px;text-indent:2em;color:#000">地址：6楼<p> 

<p style="margin-top:10px;text-indent:2em;color:#000">鉴于：<p> 
<p style="margin-top:10px;text-indent:2em;color:#666">1.甲方是具有完全民事行为能力的自然人，因资金周转需求，有意通过乙方平台发布借款信

息以获得借款；<p> 
<p style="margin-top:10px;text-indent:2em;color:#666">2.乙方是经合法登记成立并有效存续的企业法人，拥有借款平台"一信贷手机APP"（以下
简称"一信贷"）的运营管理权，能够为甲方提供借款信息发布和借贷交易撮合等信用及技术咨询服务；<p> 
<p style="margin-top:10px;text-indent:2em;color:#666">3.丙方是经合法登记成立并有效存续的企业法人，拥有技术、人力、管理及品牌等各类资源优势，能够对甲方的信用风险情况进行全方位的信用风险等级评估及测算，能够更好的为乙方提供逾期客户贷后信用管理等技术服务；<p> 
<p style="margin-top:10px;text-indent:2em;color:#666">基于上述事实，各方经协商一致，达成如下协议，以资共同遵照履行：<p> 
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第一条 合作事项</p>
<p style="margin-top:10px;text-indent:2em;color:#666">1.1甲方不可撤销的授权委托乙方或/和乙方合作方在其运营管理的一信贷平台向有资金出借需求的出借人发布借款信息，乙方或/和乙方合作方接受甲方委托为甲方融资需求发布相应借款信息。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">1.2乙方或/和乙方合作方不可撤销的授权委托丙方对甲方提供的相关借款信息材料进行信用风险评估，丙方接受乙方或/和乙方合作方委托对甲方进行信用风险评估，评估结果符合乙方或/和乙方合作方风控准入条件的，由乙方或/和乙方合作方向甲方推荐合适的资金出借方，以撮合甲方与资金出借方借贷交易的实现。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">1.3若甲方发生逾期，乙方或/和乙方合作方不可撤销的授权委托丙方对甲方进行贷后信用管理，届时，乙丙各方均可向甲方主张逾期债务。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第二条 合作费用</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1甲方理解并确认因使用乙方平台向出借人申请借款需向资金出借方、乙方及丙方支付如下费用：</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.1出借方利息、逾期服务费或/和罚息（如有）及出借方平台管理费用（如有）
甲方需承担出借方贷款的利息、逾期服务费及/或罚息及出借方平台管理费用（如有），具体费用详见与出借方签署的《借款协议》等融资文件范本。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.2居间服务费
本次借款甲方应向乙方支付居间服务费，居间服务费为借款金额的【4％】。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.3风控服务费
本次借款甲方应向丙方支付风控服务费，风控服务费为借款金额的【4％】。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.4逾期服务费（如有）
本次借款若甲方逾期还款则甲方应向丙方支付逾期服务费，逾期服务费支付方式详见本协议第五条约定。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.5其他费用
本次借款甲方应向乙方及丙方支付因乙方为甲方提供的居间服务及丙方为甲方提供的风控服务而产生的其他费用（包括但不限于身份验证费、手机验证费、银行卡验证费、账户管理费、征信审核费、信息发布费、担保费、平台运营费、电话客户服务费、客户端使用费、逾期准备金计提成本等组成）。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.6本次借款乙方向甲方支付的居间服务费，向丙方支付的风控服务费、逾期服务费以及向其他第三方（如有）支付的其他费用总计为借款金额的【8％】，以乙方平台相关页面展示的具体金额为准。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">2.1.7居间服务费、风控服务费、风控服务费及其他费用的收取方式
甲方不可撤销的授权乙方或/和乙方合作方通过其合作的银行或第三方支付机构于甲方还款时直接从甲方指定的还款账户中代扣居间服务费、风控服务费及其他费用，丙方不可撤销的授权乙方或/和乙方合作方通过银行或第三方支付机构在扣除乙方应收居间服务费及其他费用后将丙方应收取的风控服务费及其他费用转至丙方指定收款账户。
甲方须确保以上收款账户为甲方名下合法有效的银行账户，甲方变更账户时必须向乙方提出书面申请并经乙方认可后方可变更。如因甲方未及时书面通知乙方引发的支付延迟，如因此给乙方造成的损失，甲方应负责赔偿。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第三条 各方权利义务</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1甲方权利义务</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1.1甲方有权了解其在乙方的信用评审进度及结果。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1.2甲方应确保其提供的借款信息和资料的真实性和有效性，不得提供虚假信息或隐瞒重要事实。若甲方违反本协议约定，甲方不可撤销的授权乙方或/和乙方合作方有权根据本协议及有关条款对甲方的信息和资料予以合理的披露。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1.3甲方承诺所借款项不用于任何违法用途，包括但不限于挪用借款资金用于向他人出借。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1.4甲方应按照其自行或由乙方代为签署确认的借款协议之约定及时足额履行还款义务，如其资信状况及还款能力出现足以影响其正常履行还款义务的情形，应及时通知乙方并按照乙方要求进行还款操作。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.1.5甲方应按照本协议约定及时足额向乙方和丙方支付本协议第二条约定的相关费用。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2乙方权利义务</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.1甲方不可撤销的授权乙方或/和乙方合作方有权选择披露出借人信息、利息等借款信息的时间，如乙方或/和乙方合作方在本协议履行期间选择不向甲方披露的，甲方对此不持异议。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.2乙方有权就为本协议借款所提供的服务向甲方收取服务费，甲方不可撤销的授权乙方或/和乙方合作方有权通过其合作的银行或第三方支付机构于甲方还款时代为收取相应服务费并划转至乙方和丙方。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.3乙方应根据甲方提供的资料及信息为甲方寻找或匹配出借人。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.4乙方应接受甲方委托为甲方办理借款信息发布、扣款、还款等手续。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.5乙方或/和乙方合作方有权委托丙方根据甲方提供的各项信息及丙方独立获得的信息评定甲方的个人信用等级，并根据丙方对甲方个人信息的评审结果，决定是否审核通过并将甲方的借款需求向出借人进行推荐，甲方对该等信息的提供均以理解并确认。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.6乙方接受甲方委托的行为所产生的法律后果由甲方负责承担，乙方对此不承担任何法律责任。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.2.7甲方不可撤销的授权乙方或和乙方合作方在乙方认为必要时对甲方及担保方（若有）进行借款的违约提醒及催收工作，包括但不限于站内信、电子邮件、电话通知、上门通知、发律师函、对甲方及担保方（若有）提起诉讼等。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.3丙方权利义务</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.3.1丙方有权就为本协议借款所提供的服务向甲方收取服务费，丙方授权服务费由乙方或/和乙方合作方收取后再行向丙方进行结算。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.3.2丙方有权为甲方提供信用风险评估服务，针对甲方及乙方提供的甲方信息资料，利用自身大数据资源优势及技术优势，与其合作方共同对甲方提供信用风险评估服务。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">3.3.3丙方有权为甲方提供贷后技术支持服务，包括但不限于贷款的违约提醒及催收工作，包括但不限于站内信、电子邮件、电话通知、上门通知等形式。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第四条 特别授权条款
<p style="margin-top:10px;text-indent:2em;color:#666">4.1甲方不可撤销的委托并授权乙方或/和乙合作方指定有支付结算资质的第三方支付机构，按照下列规定划转支付款项给甲方及出借人：</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.1.1由具有支付结算资质的第三方支付机构于放款日将出借人的借款资金全部划入甲方收支账户内，第三方账户的转账费用由甲方承担。如借款资金无法正常发放至甲方收支账户时，甲方同意变更收款账号为乙方指定的第三方托管账户。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.1.2甲方授权乙方或/和乙方合作方指定具有支付结算资质的第三方支付机构按照本协议约定的金额和时间划转支付款项给出借人。甲方于还款期前将还款金额本协议约定的甲方收支账户内。第三方账户的转账费用由甲方承担。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.1.3若甲方在还款期限之前未按照合同约定的收支账户存入还款金额或存入金额不足，致使还款逾期的，甲、乙各方均同意并确认：乙方或和乙方合作方有权代表出借人向甲方追讨该等欠款金额及本协议约定的违约责任。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.2甲方授权乙方或/和乙方合作方有权代甲方注册、使用其电子签名认证证书（CA数字证书）。电子签名认证证书授权的使用范围仅限于本次融资需求（如签署相应借款合同），乙方不得挪作他用。此外，乙方有权将该项权利进行转委托，无需另行获得甲方的同意或通知甲方。此外，甲方同意以网络、APP页面点击确认或其他方式（包括但不限于签字或签章确认等方式）签订本协议。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.3甲方授权乙方或/和乙方合作方基于甲方提供的信息及乙方根据甲方授权而独立获取的信息对甲方的信息进行大数据分析、评估；同时授权乙方或/和乙方合作方为提供本合同项下服务之目的，委托第三方机构对甲方提供的个人数据进行整合、技术分析并出具风险识别及风控评级、风险定价建议。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.4甲方同意并授权乙方或/和乙方合作方为提供本合同项下服务之目的，在第三方平台上发布或向第三方披露甲方个人及与借款相关的信息。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.5对于本合同中所规定的任何应由甲方支付的款项，甲方在此无条件地、不可撤销地同意通过乙方或/和乙方合作方合作的第三方支付机构代为收取并及时将相应款项支付给对应的出借人或/和乙方及丙方。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.6甲方同意并授权、出借人、合作金融机构、乙方的关联公司及合作伙伴有权向包括但不限于信息基础数据库、中国人民银行批准的征信机构、公安系统等查询甲方的信用记录，并同意乙方、出借人将涉及甲方的信贷信息提供给包括但不限于信息基础数据库、中国人民银行批准的征信机构、公安系统等。所获取的个人信用信息仅在乙方业务中使用，用以判断乙方及其关联公司、出借人、合作金融机构、技术服务合作方的业务风险。乙方及其关联公司、合作金融机构、技术服务合作方查询上述各类信息将用作乙方及其关联公司、合作金融机构、技术服务合作方开展评估授信及贷后管理、不良资产清收等经营活动的参考。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.7甲方的收入、存款、有价证券、商业保险、不动产信息和纳税数额等信息对于甲方而言是相当私密且重要的，如果甲方在使用本服务的过程中，向乙方提供了上述信息，甲方明确并保证，甲方已经充分理解并知晓该等信息被提供和使用的风险，包括但不限于：上述信息可能对甲方的信用评价、以及分析报告等结果产生不利影响，且该等信息被本公司依法提供给第三方后被他人不当利用的风险，以及因甲方的信用状况较好而造成甲方被不良信息骚扰的风险。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.8甲方知悉并确认，甲方将授权乙方在满足甲方的资金需求的过程中，可能会给甲方匹配正规的金融机构提供资金。此类正规金融机构有权按照国家相关规定，将甲方个人的信用信息报送给央行个人信用信息基础数据库和经央行批准设立的征信机构。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.9甲方知悉并确认，若乙方或乙方的任何第三方（简称"垫付方"）对甲方的逾期款项进行了代偿/垫付，则逾期债权对应的债权人变更为垫付方，该垫付行为并不免除甲方因逾期需承担的各项后果，包括应支付的罚息、逾期违约金、催收费用、产生不良的信用记录等，甲方仍应按照本合同及注册协议的约定承担违约责任。甲方知悉并确认除非必要，乙方及垫付方无需就上述垫付及债权转让事宜另行通知甲方，是否通知甲方不影响垫付方取得相应债权，甲方不得以任何理由拒绝或延迟还款。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.10甲方同意并授权：乙方可以通过电信运营商、银行、或其他可以提供用户身份校验服务或提供可用于身份校验信息的主体，按照该第三方的规则对甲方的身份加以校验；或是以乙方认为适当的方式中的一种或多种来对甲方进行身份校验。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.11甲方同意并授权，甲方注册使用本服务时，即授权乙方或/和乙方合作方根据甲方所提供的各项信息及乙方独立获得的信息评定甲方在乙方所拥有的个人信用风险，或决定是否审核通过甲方的服务申请。甲方向乙方提交有关信息和资料的行为，均应视为已合法授权乙方或/和乙方合作方因提供本服务的需要而对甲方相关信息（包括但不限于身份信息、学历信息、消费信息等）进行采集、储存、整理、加工，并按照本服务条款的约定向第三方提交风险评估结论或其他相关资料。甲方知晓并同意，在不透露单个用户的具体信息内容的前提下，乙方有权对用户数据库进行分析，并对用户数据库进行商业上的利用。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.12甲方同意并授权，为了向甲方提供约定服务之必要，甲方作为委托人不可撤销地在此授权乙方代为办理相关事项，包括但不限于以甲方的名义在第三方服务平台上及该等平台指定的第三方支付机构注册账户并设置初始密码、代为提交材料、代为签署相关协议、代为接收或交付约定款项等，承诺乙方作为受托人在该账户下进行的前述操作均代表委托人的真实意思表示，委托人承担因该等操作而产生或可能产生的一切法律后果，并按照该等合同或文件的约定行使权利并履行义务，甲方同意乙方有权将前述授权事项进行转委托、转授权，甲方对乙方的转委托与转授权均予以认可。甲方有权修改初始密码并自行操作前述授权事项，但应事先书面通知乙方及该等第三方服务平台。甲方理解并认可，如因甲方未及时操作或操作不当造成任何风险或损失，或因甲方在未通知乙方或该等第三方服务平台的前提下自行选择修改初始密码导致甲方不能执行前述授权事项，从而造成任何风险或损失的，由甲方自行承担，乙方不负有任何责任。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.13甲方理解并同意，如甲方使用了乙方或/和乙方合作方合作的第三方机构的提现或支付或贷款功能，则应当依据甲方签署的相关融资协议或服务协议中约定之日期按期进行还款，乙方有权基于该等第三方机构的授权通过短信、电话、社交账号等途径对甲方进行服务与还款提醒。甲方理解并同意，如甲方未按期履行还款义务，甲方的个人逾期信息将可能向第三方（包括但不限于征信系统、金融机构等）进行分享或公布，对此造成的不良后果甲方已知悉并确认。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.14甲方授权乙方以甲方的名义履行下述事项：乙方提供居间服务，并以甲方的名义向第三方借款，借款金额相当于甲方尚未支付的应偿还款项；乙方代甲方签署并保管相关借款协议，甲方承担相应协议的义务；乙方代为接收第三方向甲方发送的相关信息（包括但不限于相关借款协议电子文本、债权转让通知等）；乙方代甲方处理借款相关事宜。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">4.15甲方同意并授权，如甲方向乙方提交、绑定或授权甲方的银行卡信息／账户，乙方或乙方合作方将可能：</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（1）查询并核对甲方的账户信息；</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（2）查询并读取甲方银行卡账户中的交易信息；</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（3）通过甲方所授权或绑定的银行卡账户进行代收与代付服务。
乙方或乙方合作方作为相关款项的代收代付方，甲方授权乙方或乙方合作方将款项代付到乙方或乙方合作方自有账户或其他指定账户。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第五条 违约责任</p>
<p style="margin-top:10px;text-indent:2em;color:#666">5.1若甲方在还款期限内未按照合同约定的收支账户存入还款金额或存人金额不足的，即构成违约，并向乙方及丙方承担违约责任，即自还款日次日（含）起，每日按剩余未还借款本金的 【3.5】％收取逾期服务费。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">5.2甲方应保证其指定账户状态正常，确保资金划入、划出交易的完成。如因前述指定账户不正常导致的所有损失（如借款资金无法及时入账、还款资金无法划转等）应由其自行承担。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">5.3乙方还款周期届满后，乙方或/和乙方合作方、丙方及丙方委托的第三方催收主体有权对甲方提供的及乙方或/和丙方根据一信贷《用户注册协议》及其他相关授权协议（包括但不限于手机运营商授权书、征信及征信披露授权书、委托扣款授权书等）中甲方授权而收集的甲方个人信息和资料（包括但不限于个人信息、紧急联系人信息、通讯录联系人信息）编辑入网站黑名单，并将该黑名单对第三方披露，并与任何第三方数据共享，以便丙方和丙方委托的第三方催收逾期借款（催收形式包括但不限于：用电话、短信、微信告知乙方的紧急联系人及通讯录上的一切联系人），及对甲方的其他申请进行审核之用，及丙方委托的第三方催收主体的行为可能造成甲方的损失，乙方或/和丙方不承担法律责任。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">5.4在催收的过程中，丙方或者丙方委托的第三方因联系甲方亲属、朋友等情形，并向其披露甲方借款及违约行为的，因此造成的损失或影响出借人，乙方或/和丙方并不因此承担任何责任，因该催收系甲方逾期未还款的违约行为导致。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">5.5守约方为追回损失而支付的包括但不限于律师费、诉讼费、公证费、交通通讯费等费用，由违约方承担。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第六条 通知及送达</p>
<p style="margin-top:10px;text-indent:2em;color:#666">6.1 在本协议有效期内，因法律、法规、政策的变化，或任一方丧失履行本协议的资格和／或能力，影响本协议履行的，该方应承担在合理时间内通知其他各方的义务。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">6.2 协议各方同意，与本协议有关的任何通知，以书面方式送达方为有效。书面形式包括但不限于：传真、快递、邮件、短信、电子邮件、APP或网站公告、通知等。上述通知应当被视为在下列时间送达：以传真发送，为该传真成功发送并由收件方收到之日；以快递或专人发送，为收件人收到该通知之日；以挂号邮件发送，为发出后7个工作日；以电子邮件发送，为电子邮件成功发出之日。以短信发送，为短信成功发出之日；以APP或网站公告、通知的，自公告、通知之日起</p>。
<p style="margin-top:10px;text-indent:2em;color:#666">6.3乙方确认：乙方在本协议首页上的单位地址及常住地址均可视为乙方的送达地址。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第七条 协议的变更、解除和终止
除本协议或法律另有规定外，协议的变更、解除和终止以下列约定为准：</p>
<p style="margin-top:10px;text-indent:2em;color:#666">7.1 本协议的任何修改、变更应经协议各方另行协商，并就修改、变更事项共同签署书面协议后方可成立。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">7.2 本协议在下列情况下解除：</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（1）经各方协商一致解除。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（2）任何一方发生违约行为并在守约方向其发出书面通知之日起15日内不予履行合同的，或累计发生两次或两次以上违约行为的，守约方有权单方面通知解除本协议。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">（3）因法律规定的不可抗力造成本协议无法继续履行的。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">7.3 提出解除协议的一方，应当以书面形式通知其他各方。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">7.4 本协议解除后，不影响守约方要求违约方支付违约金并赔偿损失的权利。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">7.5 除本协议另有约定外，非经本协议各方协商一致并达成书面协议，任何一方不得转让其在本协议或本协议项下的全部或部分权利义务。</p>
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第八条 争议解决</p>
<p style="margin-top:10px;text-indent:2em;color:#666">8.1 本协议的效力、解释以及履行适应中华人民共和国的法律。
<p style="margin-top:10px;text-indent:2em;color:#666">8.2 本协议各方因本协议履行发生争议的，均应首先通过友好协商的方式解决，协商不成的，任何一方均可把争议提交乙方实际经营所在人民法院进行诉讼</p>。
<p style="margin-top:10px;text-indent:1em; color:#000; font-size:16px;">第九条 其他</p>
<p style="margin-top:10px;text-indent:2em;color:#666">9.1各方确认，如有非本协议版本的居间委托服务协议，以非本协议的版本为准。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">9.2各方确认，本协议的签署、生效和履行以不违反中国的法律法规为前提。如果本协议中的任何一条或多条违反适用的法律法规，则该条将被视为无效，但该无效条款并不影响本协议其他条款的效力。</p>
<p style="margin-top:10px;text-indent:2em;color:#666">9.3 本协议自协议各方在线确认后即生效，本协议的电子文件具有法律效力。请在本页进行签署，并确认已经清楚知晓并了解本合同的所有相关内容。
</p>
<p style="margin-top:10px;text-indent:2em;color:#000">（以下无正文，为签署页）</p>
<p style="margin-top:10px;text-indent:2em;color:#000">甲方：<?php echo ($data["name"]); ?></p>

<p style="margin-top:10px;text-indent:2em;color:#000">乙方：</p>

<p style="margin-top:10px;text-indent:2em;color:#000">丙方：</p>

<p style="margin-top:10px;text-indent:2em;color:#000">签署日期：<?php echo (date('【Y】年【m】月【d】日',$data["addtime"])); ?>
</p>


	</div>

</body>

</html>




        </div>
    </div>
    <div class="clear"></div>
    	<div id="dcFooter">
		 <div id="footer">
		  <div class="line"></div>
			  <ul>
			   版权所有 © 2018 技术支持QQ/微信：奥特曼</a>，并保留所有权利。
			  </ul>
		 </div>
	</div>

    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>