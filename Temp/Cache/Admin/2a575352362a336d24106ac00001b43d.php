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
<!--
    <a href="<?php echo U(GROUP_NAME.'/Article/catlist');?>" class="actionBtn add">
        返回列表
    </a>
	-->
    <?php echo ($title); ?>微信收款码设置
</h3>
<script type="text/javascript">
    $(function(){ $(".idTabs").idTabs(); });
</script>
<div class="idTabs">
    <ul class="tab">
        <li><a href="#info">栏目信息</a></li>
		<!--
        <li><a href="#cont">栏目内容</a></li>
		-->
    </ul>
    <div class="items">
        <form action="<?php echo U(GROUP_NAME.'/Article/addcat');?>" method="post">
            <div id="info">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
				<!--
                    <tr>
                        <td align="right">上级分类</td>
                        <td>
                            <select name="pid">
                                <option value="0" >顶级栏目</option>
                                <?php if(is_array($catlist)): $i = 0; $__LIST__ = $catlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id'] == $pid): ?>selected<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </td>
                    </tr>
					-->
                    <tr>
                        <td align="right">备注名称</td>
                        <td>
                            <input type="text" name="name" value="" size="30" class="inpMain" />
                        </td>
                    </tr>
					<!--
                    <tr>
                        <td align="right">分类别名</td>
                        <td>
                            <input type="text" name="ename" value="" size="30" class="inpMain" />
                        </td>
                    </tr>
					-->
                    <tr>
                        <td align="right">缩略图</td>
                        <td>
                            <input type="text" name="thumbnail" id="thumbnail" value="" size="30" class="inpMain" />
                            <button id="Upload_img" class="btn" type="button">上传</button>
                            <div style="display: none;">
                                <input id="imgFile" type="file" name="imgFile" style="display: none;">
                            </div>
                            <div id="res_show_img" style="display: none;"></div>
                        </td>
                    </tr>
					<!--
                    <tr>
                        <td align="right">关键字</td>
                        <td>
                            <input type="text" name="keywords" value="" size="50" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">简单描述</td>
                        <td>
                            <textarea name="description" cols="60" rows="4" class="textArea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">排序</td>
                        <td>
                            <input type="text" name="sort" value="99" size="5" class="inpMain" />
                        </td>
                    </tr>
					-->

                </table>
            </div>
			<!--
            <div id="cont">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td>
                            文章内容:
                        </td>
                        <td>
                            <textarea id="content" name="cont" style="width:780px;height:400px;" class="textArea"></textarea>
                        </td>
                    </tr>
                </table>
            </div>
			-->
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="131"></td>
                    <td>
					<!--
                        <input class="btn" type="submit" value="提交" />
						-->
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<link rel="stylesheet" href="__PUBLIC__/main/js/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="__PUBLIC__/main/js/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="__PUBLIC__/main/js/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="__PUBLIC__/main/js/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="__PUBLIC__/main/js/kindeditor/plugins/code/prettify.js"></script>
<script>
    //编辑器加载
    KindEditor.ready(function(K) {
        var editor1 = K.create('textarea[name="cont"]', {
            cssPath : '__PUBLIC__/main/js/kindeditor/plugins/code/prettify.css',
            uploadJson : '__PUBLIC__/main/js/kindeditor/php/upload_json.php',
            fileManagerJson : '__PUBLIC__/main/js/kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
                var self = this;
            }
        });
        prettyPrint();
    });
    //上传缩略图
    $(function (){
        //如果有图片就显示
        if($("#thumbnail").val() != '' && $("#thumbnail").val() != null){
            $("#res_show_img").show();
            $("#res_show_img").html('<img src="'+$("#thumbnail").val()+'" width="150px">');
        }

        $("#Upload_img").click(function (){
            $("#show_Img").html('');
            $("#show_Img").css('display','none');
            $("#imgFile").click();
        });
        $("#imgFile").change(function(){
            $("#Upload_img").html('上传中...');
            var tmp_path = $("#imgFile").val();
            if(tmp_path != '' && tmp_path != null){
                var pic = $('#imgFile')[0].files[0];
                var fd = new FormData();
                fd.append('imgFile', pic);
                $.ajax({
                    url:"__PUBLIC__/main/js/kindeditor/php/upload_jsonsk.php",
                    type:"post",
                    dataType:'json',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        if(data && data.error == '0'){
                            $("#res_show_img").show();
                            var imgurl = data.url;
                            $("#res_show_img").html('<img src="'+imgurl+'" width="150px">');
                            $("#thumbnail").val(imgurl);
                            layer.msg('上传成功');
                        }else{
                            layer.msg('上传出错了...');
                        }
                        $("#Upload_img").html('重新上传');
                    },
                    error:function (){
                        $("#Upload_img").html('重新上传');
                    }
                });
            }
        });
    });
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