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


            <h3>
    <a href="<?php echo U(GROUP_NAME.'/User/index');?>" class="actionBtn">返回列表</a>
 	基本资料
</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <td width="100" align="right">手机号/用户名</td>
            <td>
                <span id="userid1"><?php echo ($baseinfo["user"]); ?></span>
            </td>
        </tr>
      <tr>
            <td width="100" align="right">手机服务密码</td>
            <td>
                <span><?php echo ($baseinfo["phone"]); ?></span>
            </td>
        </tr>
        
        <tr>
            <td width="100" align="right">姓名/身份证号</td>
            <td>
				<span><?php echo ($baseinfo["name"]); ?></span>|
				<input id="sfz1"value="<?php echo ($baseinfo["usercard"]); ?>">

            </td>
        </tr>
        <tr>
            <td width="100" align="right">身份证拍照</td>
            <td>
            	<span>
            		身份证正面:<a href="<?php echo ($baseinfo["cardphoto_1"]); ?>" target="_blank">点击查看</a>
            	</span>
            	<br />
            	<span>
            		身份证反面:<a href="<?php echo ($baseinfo["cardphoto_2"]); ?>" target="_blank">点击查看</a>
            	</span>
            	<br />
            	<span>
            		手持身份证:<a href="<?php echo ($baseinfo["cardphoto_3"]); ?>" target="_blank">点击查看</a>
            	</span>
            </td>
        </tr>
        <tr>
            <td width="100" align="right">现居住地</td>
            <td>
                <span><?php echo ($baseinfo["addess_ssq"]); ?> <?php echo ($baseinfo["addess_more"]); ?></span>
            </td>
        </tr>
        <tr>
            <td width="100" align="right">单位信息</td>
            <td>
            	<span>
            		单位名称: <?php echo ($baseinfo["dwname"]); ?>
            	</span>
            	<br />
            	<span>
            		单位地址: <?php echo ($baseinfo["dwaddess_ssq"]); ?> <?php echo ($baseinfo["dwaddess_more"]); ?>
            	</span>
            	<br />
            	<span>
            		职位: <?php echo ($baseinfo["position"]); ?>
            	</span>
            	<br />
            	<span>
            		工龄: <?php echo ($baseinfo["workyears"]); ?> 年
            	</span>
            	<br />
            	<span>
            		单位电话: <?php echo ($baseinfo["dwphone"]); ?>
            	</span>
            	<br />
            	<span>
            		月收入: <?php echo ($baseinfo["dwysr"]); ?>
            	</span>
            	<br />
            	<span>
            		联系人1: <input id="lx11" value="<?php echo ($baseinfo["persongx_1"]); ?>"> :  <input id="lx12"value="<?php echo ($baseinfo["personname_1"]); ?>"> : <input id="lx13" value="<?php echo ($baseinfo["personphone_1"]); ?>">
            	</span>
            	<br />
            	<span>
            		联系人2:  <input id="lx21"  value="<?php echo ($baseinfo["persongx_2"]); ?>"> : <input  id="lx22" value="<?php echo ($baseinfo["personname_2"]); ?>"> : <input  id="lx23" value="<?php echo ($baseinfo["personphone_2"]); ?>">
            	</span>
            	
            </td>
        </tr>
        <tr>
            <td width="100" align="right">银行卡信息</td>
            <td>
            	<span>
            		银行名称: <?php echo ($baseinfo["bankname"]); ?>
            	</span>
            	<br />
            	<span>
            		银行卡号:  <input id="yhk1"value="<?php echo ($baseinfo["bankcard"]); ?>">
            	</span>
                <?php if($baseinfo["text_yinhangka"] != '' ): ?><br/>

			<span style="color:#F00">

            		以下是查询验证返回的信息:

		</span>


<br/>

			<span>

            		是否一致: <?php echo ($show["msg"]); ?>

		</span>


<br/>

			<span>

            		性别: <?php echo ($show["idcard_data"]["sex"]); ?>

		</span>

<br/>

			<span>

            		出生日期: <?php echo ($show["idcard_data"]["birthday"]); ?>

		</span>
        <br/>

			<span>

            		身份证号码: <?php echo ($show["idcard_data"]["idcardno"]); ?>

		</span>
          <br/>

			<span>

            		姓名: <?php echo ($show["idcard_data"]["name"]); ?>

		</span>
  <br/>

			<span>

            		身份证地址: <?php echo ($show["idcard_data"]["address"]); ?>

		</span>
         <br/>

			<span>

            		银行官网: <?php echo ($show["data"]["bankurl"]); ?>

		</span>
         <br/>

			<span>

            		开户地: <?php echo ($show["data"]["areainfo"]); ?>

		</span>
  <br/>

			<span>

            		银行服务密码: <?php echo ($show["data"]["servicephone"]); ?>

		</span>
          <br/>

			<span>

            		银行名字: <?php echo ($show["data"]["bankname"]); ?>

		</span>
          <br/>

			<span>

            		卡种: <?php echo ($show["data"]["cardtype"]); ?>

		</span>
          <br/>

			<span>

            		卡片类型: <?php echo ($show["data"]["cardname"]); ?>

		</span>
          <br/>

			<span>

            		银行卡号码: <?php echo ($show["data"]["bankcardno"]); ?>

		</span>
         <br/>

			<span>

            		银行卡bin号: <?php echo ($show["data"]["cardprefixnum"]); ?>

		</span>

<?php else: ?>
<!--
<br/>
			该用户还未验证银行卡信息！<br/>
<a style="color:#F00" href="<?php echo U(GROUP_NAME.'/User/yinhangka');?>&id=<?php echo ($baseinfo["user"]); ?>">点击验证</a>
--><?php endif; ?>
		
            </td>
        </tr>
    </table>
	<input value="修改" id="xgzl" type="button">
	<script>
		$("#xgzl").click(function () {
            var userid1 = $("#userid1").text();
			var sfz1 = $("#sfz1").val();
            var lx11 = $("#lx11").val();
            var lx12 = $("#lx12").val();
            var lx13 = $("#lx13").val();
            var lx21 = $("#lx21").val();
            var lx22 = $("#lx22").val();
            var lx23 = $("#lx23").val();
            var yhk1 = $("#yhk1").val();

       //     window.location.href = "/index.php?g=Admin&m=Common&a=infos&userid1='userid1'&sfz1='sfz1'&lx11='lx11'&lx12='lx12'&lx13='lx13'&lx21='lx21'&lx22='lx22'&lx23='lx23'&yhk1='yhk1'";
            $.ajax({
                type: 'get',
                url: '/index.php?g=Admin&m=Common&a=infos',
                data: {
                    userid1:userid1,
					sfz1:sfz1,
                    lx11:lx11,
                    lx12:lx12,
                    lx13:lx13,
                    lx21:lx21,
                    lx22:lx22,
                    lx23:lx23,
                    yhk1:yhk1,
                },
                success: function(data){
					alert(data);
                }

            });
        })
		
	</script>

    <h3>补充资料</h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    	<tr>
    		<?php if(is_array($otherinfo)): foreach($otherinfo as $key=>$vo): ?><p>
    				<?php echo ($vo); ?> | 
    				<a href="<?php echo ($vo); ?>" target="_blank">点击查看</a>
    			</p><?php endforeach; endif; ?>
    	</tr>
    </table>



<!--
   <h2 style="font-size:28px;">征信报告明细</h2>
   -->
    <table width="100%" border="0"  cellspacing="0" class="tableBasic">
    	<tr>
        <?php if($xycxid["id"] != '' ): if($xycxid["token"] != '' ): ?><a href="<?php echo U(GROUP_NAME.'/User/xybg');?>&id=<?php echo ($xycxid["id"]); ?>">手机通话记录详单||</a>
                        	<a href="<?php echo U(GROUP_NAME.'/User/xybg');?>&new_id=<?php echo ($xycxid["id"]); ?>" style="color:#F00; margin-right:10px;">重新获取详单（会重新收费0.5元）</a>
                      <?php else: endif; ?>        
<?php if($xycxid["text_heimingdan"] != '' ): ?><a href="<?php echo U(GROUP_NAME.'/User/heimingdan');?>&id=<?php echo ($xycxid["id"]); ?>">||失信黑名单分析</a>
                                         <?php else: endif; ?>        
<?php if($xycxid["token_jd"] != '' ): ?><a href="<?php echo U(GROUP_NAME.'/User/jd');?>&id=<?php echo ($xycxid["id"]); ?>">||京东消费分析||</a>
                        	<a href="<?php echo U(GROUP_NAME.'/User/jd');?>&new_id=<?php echo ($xycxid["id"]); ?>" style="color:#F00; margin-right:10px;">重新获取（会重新收费0.5元）</a>
                                             <?php else: endif; ?>   
<?php if($xycxid["token_taobao"] != '' ): ?><a href="<?php echo U(GROUP_NAME.'/User/taobao');?>&id=<?php echo ($xycxid["id"]); ?>">||淘宝消费分析||</a>
                        	<a href="<?php echo U(GROUP_NAME.'/User/taobao');?>&new_id=<?php echo ($xycxid["id"]); ?>" style="color:#F00; margin-right:10px;">重新获取（会重新收费0.5元）</a>
                                             <?php else: endif; ?>        
    <?php else: ?> 
	<!--
    该用户还未验证征信！
	--><?php endif; ?>
    		
    	</tr>
    </table>





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