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

<script src="/js/laydate/laydate.js"></script>

<script>

laydate.render({

  elem: '#sday'

});

laydate.render({

  elem: '#eday'

});

</script>

<div class="filter">



    <form action="<?php echo U(GROUP_NAME.'/Bills/index');?>" method="post">



        <input name="keyword" type="text"  placeholder="手机号码" class="inpMain" value="<?php echo ($keyword); ?>" size="12" />

        

       <input name="sday" id="sday" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" type="text" placeholder="开始时间" class="inpMain  day1" value="<?php echo ($sday); ?>" size="16" />

        <input name="eday" id="eday" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" type="text" placeholder="结束时间" class="inpMain  day1" value="<?php echo ($eday); ?>" size="16" />



        <input name="submit" class="btnGray" type="submit" value="筛选" />



    </form>

    <div style="font-size:18px;color:#000;border:1px dashed #d9d9d9; background-color:#fff">订单总计：<?php echo ($sumcont); ?>笔&nbsp;/&nbsp;金额总计：<?php echo (number_format($sumamount,2)); ?></div>



</div>



<div id="list">



        <table width="100%" border="0" cellpadding="7" cellspacing="0" class="tableBasic">



            <tr>



                <th width="30" align="center" style="background-color:#60bbff"><font color="#FFf">编号</font></th>



                <th width="100" align="center" style="background-color:#60bbff"><font color="#FFf">订单号</font></th>



                <th width="100" align="center" style="background-color:#60bbff"><font color="#FFf">用户名</font></th>



               



                <th width="100" align="center" style="background-color:#60bbff"><font color="#FFf">还款金额</font></th>



                <th width="150" align="center" style="background-color:#60bbff"><font color="#FFf">还款日期</font></th>
 <th width="100" align="center" style="background-color:#60bbff"><font color="#FFf">状态</font></th>


                <th align="center" style="background-color:#60bbff"><font color="#FFf">操作</font></th>



            </tr>



            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>



                    <td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>><?php echo ($vo["id"]); ?></td>



                    <td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>><?php echo ($vo["ordernum"]); ?></td>



                    <td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>><?php echo ($vo["user"]); ?></td>



      


					<td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>><?php echo ($vo["money"]); ?></td>



                    <td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>><?php echo (date('Y-m-d',$vo["addtime"])); ?></td>

	<td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>>	<?php if($vo['zhuangtai'] == 0)echo "<font style='color:#F00;font-size:12px'>未确认</font>"; if($vo['zhuangtai'] == 1)echo "<font style='color:#0fa100;font-size:12px; font-weight:bold'>已确认</font>"; ?></td>
    	

                    <td align="center" <?php if(($mod) == "1"): ?>style="background-color:#e4e4e4"<?php endif; ?>>



                        <a href="javascript:del('<?php echo ($vo["ordernum"]); ?>','<?php echo U(GROUP_NAME.'/Bills/del',array('id'=>$vo['id']));?>');">删除订单</a>
 | <a href="javascript:queren('<?php echo ($vo["ordernum"]); ?>','<?php echo U(GROUP_NAME.'/Bills/queren',array('id'=>$vo['id']));?>');">确认还款</a>


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



                '确定要删除还款订单:'+num+'吗?',



                function (){



                    window.location.href = jumpurl;



                }



        );



    }
	
	
	

    function queren(num,jumpurl){



        layer.confirm(



                '确认还款订单:'+num+'吗?',



                function (){



                    window.location.href = jumpurl;



                }



        );



    }



</script>


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