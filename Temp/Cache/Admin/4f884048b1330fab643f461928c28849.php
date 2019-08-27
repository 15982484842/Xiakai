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
    <?php echo ($title); ?>
</h3>
 <script>
    $(function () {
		$("#departuredate1").calendar();
     	$("#departuredate2").calendar();
		
		     });
		   
</script>
<div class="filter">
    <form action="<?php echo U(GROUP_NAME.'/Daikuan/index');?>" method="post">
        <input name="keyword" type="text" class="inpMain" placeholder="用户名(手机号)" value="<?php echo ($keyword); ?>" size="20" />
         <input name="sday" id="sday" type="text" placeholder="开始时间" class="inpMain  day1" value="<?php echo ($sday); ?>" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" size="16" />

        <input name="eday" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" id="eday" type="text" placeholder="结束时间" class="inpMain  day1" value="<?php echo ($eday); ?>" size="16" />
        <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
      <div style="font-size:18px;color:#000;border:1px dashed #d9d9d9; background-color:#fff">订单总计：<?php echo ($sumcont); ?>笔&nbsp;/&nbsp;金额总计：<?php echo ($sumamount); ?>元&nbsp;/&nbsp;应还金额总计：<?php echo ($yinghuan_sumamount); ?>元</div>


</div>

<div id="list">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <th width="50" align="center">ID</th>
                <th width="120" align="center">订单号</th>
                <th width="80" align="center">手机号</th>
				<!--
               <th width="80" align="center">姓名</th>
			   -->
                <th width="70">总计还款</th>
                <th width="70">借款期限</th>
                <th width="70">每期还款</th>
                <th width="150" align="center">创建日期</th>
		
                <th width="80">状态</th>
                <th align="center">操作</th>
            </tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td align="center"><?php echo ($vo["id"]); ?></td>
                    <td align="center"><?php echo ($vo["ordernum"]); ?></td>
					
                    <td align="center"><?php echo ($vo["user"]); ?></td>
				
					<!--
					<td align="center"><?php echo ($vo["name"]); ?></td>
				   -->
				   <!--
					<td align="center"><?php echo ($vo["money"]); ?>元</td>
					-->
					<td align="center"><?php echo ($vo["months"]); ?>*<?php echo ($vo["monthmoney"]); ?></td>
					<td align="center"><?php echo ($vo["months"]); ?>个月</td>
                    <td align="center"><?php echo ($vo["monthmoney"]); ?>元</td>
                    <td align="center"><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></td>
			
                    <td align="center">
						<?php if($vo['status'] == 0)echo "提交成功"; if($vo['status'] == 1)echo "正在审核订单"; if($vo['status'] == 2)echo "到帐钱包"; if($vo['status'] == 3)echo "审核通过"; if($vo['status'] == 4)echo "审核不通过"; if($vo['status'] == 5)echo "押金"; if($vo['status'] == 6)echo "冻结"; if($vo['status'] == 7)echo "保险"; if($vo['status'] == 8)echo "利息"; if($vo['status'] == 9)echo "银行卡异常"; if($vo['status'] == 10)echo "征信"; if($vo['status'] == 11)echo "提现成功"; ?>
                    </td>
                    <td align="center">
                    	<a href="javascript:changestatus('<?php echo ($vo["ordernum"]); ?>','<?php echo ($vo["id"]); ?>');">修改订单状态</a> |
                    	<a href="javascript:showbank('<?php echo ($vo["bank"]); ?>','<?php echo ($vo["banknum"]); ?>');">查看打款信息</a> |
                        <a href="javascript:del('<?php echo ($vo["ordernum"]); ?>','<?php echo U(GROUP_NAME.'/Daikuan/del',array('id'=>$vo['id']));?>');">删除订单</a> |
                        <a href="<?php echo U(GROUP_NAME.'/Daikuan/hetong',array('id'=>$vo['id']));?>">查看合同</a>                           | 
						<a href="<?php echo U(GROUP_NAME.'/User/userinfo',array('user' => $vo['user']));?>">查看资料</a>| 
						<!--
						<a href="javascript:changeyinhangka;">修改银行卡卡号</a>| 
						-->
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
</div>
<div class="clear"></div>
<div class="pager">
    <?php echo ($page); ?>
</div>
</div>
<script>
    function del(num,jumpurl){
        layer.confirm(
                '确定要删除借款订单:'+num+'吗?',
                function (){
                    window.location.href = jumpurl;
                }
        );
    }
    function showbank(bankname,banknum){
  		layer.alert(
  			'打款银行:' + bankname + "<br>" + '银行卡号:' + banknum,
  			{
	    		skin: 'layui-layer-lan',
	    		closeBtn: 0,
	    		anim: 4
  			}
  		);
    }
    function changestatus(ordernum,oid){
    	$("#changestatus_span").html(ordernum);
    	$("#orderid").val(oid);
		layer.open({
		  	type: 1,
		  	skin: 'layui-layer-rim', //加上边框
		  	area: ['820px', '265px'], //宽高
		  	content: $("#changestatus_div").html()
		});
    }
    function savestatus(obj){
    	var id = $("#orderid").val();
    	var status = $('input:radio[name="status"]:checked').val();
        var message = $(obj).parents('table').find('input[name="miaosu"]').val();
        
    	if(status != 'undefined' && status != '' && status != null){
    		$.post(
    			"<?php echo U(GROUP_NAME.'/Daikuan/changestatus');?>",
    			{id:id,status:status,name:message},
    			function(data,state){
    				if(state != "success"){
    					layer.msg("请求数据失败!");
    				}else if(data.status == 1){
    					layer.msg("保存成功!");
    					setTimeout(function(){
    						window.location.href = window.location.href;
    					},2000);
    				}else{
    					layer.msg(data.msg);
    				}
    			}
    		);
    	}else{
    		layer.msg("请选择订单状态!");
    	}
    }
</script>
<div style="display: none;" id="changestatus_div">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <td width="100" align="right">订单号</td>
            <td>
                <span id="changestatus_span"></span>
                <input type="hidden" id="orderid" value="" />
            </td>
        </tr>
        <tr>
            <td align="right">状态</td>
            <td>
                <label>
                    <input type="radio" name="status" value="0"  >
					提交成功
                </label>
                </label>
                    <input type="radio" name="status" value="1"  >
					正在审核
                </label>
                </label>
                    <input type="radio" name="status" value="2"  >
					到帐钱包
                </label>
                </label>
                    <input type="radio" name="status" value="3"  >
					审核通过
				<label>
				   <label>
                    <input type="radio" name="status" value="4"  >
					审核不通过
                </label>
                </label>
                    <input type="radio" name="status" value="5"  >
					押金
                </label>
                </label>
                    <input type="radio" name="status" value="6"  >
					冻结
                </label>
                </label>
                    <input type="radio" name="status" value="7"  >
					保险
				<label>
				   <label>
                    <input type="radio" name="status" value="8"  >
					利息
                </label>
                </label>
                    <input type="radio" name="status" value="9"  >
					银行卡异常
                </label>
                </label>
                    <input type="radio" name="status" value="10"  >
					征信
                </label>
                </label>
                    <input type="radio" name="status" value="11"  >
					提现成功
				<label>
            </td>
        </tr>
        <tr>
            <td width="100" align="right">状态描述</td>
            <td>
                <span id="changestatus_span"></span>
                <input type="text" id="miaosu" name="miaosu" value="" style="width: 500px" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" onclick="savestatus(this);" class="btn" value="提交" />
            </td>
        </tr>
    </table>
</div>


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