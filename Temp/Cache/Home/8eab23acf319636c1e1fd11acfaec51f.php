<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>芝麻信用授权</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />

    <!-- FD:61:xy/version/zmcustprod.vm:START --><!-- FD:61:xy/version/zmcustprod.vm:255:zmcustprod.schema:zmcustprod-客户中心:START -->
	




<!-- FD:61:xy/version/zmcustprod.vm:255:zmcustprod.schema:zmcustprod-客户中心:END --><!-- FD:61:xy/version/zmcustprod.vm:END -->
<script src="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/tools/zepto.js"></script>
<!-- <script src="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/tools/pubTools.js"></script> -->
<!-- <script src="https://a.alipayobjects.com/publichome-static/antBridge/antBridge.min.js"></script> -->
<!--项目CSS-->
<link rel="stylesheet" href="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/tools/amui.css" />
<link rel="stylesheet" href="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/authorize_h5.css" />



</head>

<body ontouchstart="" id="authorize-zhima" channelType="app" sessionId="GZ00JwduxTPsYNom6dvOgqTlvywXtCzmcustprodGZ00" flag="">
    <div class="authorize-zhima-title">
        <img class="authorize-logo" src="https://t.alipayobjects.com/images/rmsweb/T1ndlgXethXXXXXXXX.jpg">
    </div>
    <div class="protocol-auth-detail">
        <div calss="protocol-detail-title">您点击“同意授权”按钮接受如下内容:</div>
        <div class="protocol-detail-content">
            <div class="protocol-detail-content-ul">
                &lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;font-size: 10.5pt; font-family: &#39;Microsoft Yahei&#39;, serif;&quot;&gt;1.&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-size: 10.5pt;&quot;&gt;授权&lt;/span&gt;&lt;b style=&quot;line-height: 21.3333px;&quot;&gt; <?php
 $name = "cfg_sitename"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> &lt;/b&gt;&lt;span style=&quot;font-size: 10.5pt;&quot;&gt;将以下信息包括但不限于姓名、身份证号码和手机号码传递给芝麻信用，用于芝麻信用自行或通过合作机构对你的身份信息进行校验；&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left; margin: 0cm 0cm 0.0001pt 21pt; line-height: 16pt;&quot;&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;line-height: 16pt; font-size: 10.5pt; font-family: &#39;Microsoft Yahei&#39;, serif;&quot;&gt;2. &lt;/span&gt;&lt;span style=&quot;line-height: 16pt; font-size: 10.5pt;&quot;&gt;授权&lt;/span&gt;&lt;b style=&quot;line-height: 21.3333px;&quot;&gt; <?php
 $name = "cfg_sitename"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> &lt;/b&gt;&lt;span style=&quot;line-height: 16pt; font-size: 10.5pt;&quot;&gt;向芝麻信用查询你的芝麻分和相关信用信息，用于评估其与你之间的交易或服务条件。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;&lt;b style=&quot;line-height: 16pt;&quot;&gt;&lt;br&gt;&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;&lt;b style=&quot;line-height: 16pt;&quot;&gt;特别注意&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;&lt;span style=&quot;font-size: 10.5pt; line-height: 16pt;&quot;&gt;当你发生违约或其他影响信用的不良行为时：&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;1、你授权芝麻信用可根据&lt;b&gt; <?php
 $name = "cfg_sitename"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?> &lt;/b&gt;的查询请求，提供可以联系到你的电话号码、地址等联系信息，用于追究违约责任。&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:21.0pt;
margin-bottom:.0001pt;mso-para-margin-top:0cm;mso-para-margin-right:0cm;
mso-para-margin-bottom:0cm;mso-para-margin-left:2.0gd;mso-para-margin-bottom:
.0001pt;line-height:16.0pt&quot;&gt;&lt;span lang=&quot;EN-US&quot; style=&quot;line-height: 16pt; font-size: 10.5pt; font-family: &#39;Microsoft Yahei&#39;, serif;&quot;&gt;2&lt;/span&gt;&lt;span style=&quot;line-height: 16pt; font-size: 10.5pt;&quot;&gt;、芝麻信用会记录你的违约行为并依法向他人提供，这可能影响你的贷款等信用生活服务。&lt;/span&gt;&lt;/p&gt;
            </div>
        </div>
            </div>
    <div class="agree-authorize">
        <button class="agree-authorize-btn" onclick="jumpurl();">同意授权</button>
        <div class="whatis-zhima-link"><a href="https://xy.alipay.com/auth/whatszhima.htm?view=mobile" target='_blank'>什么是芝麻信用</a></div>
    </div>

    <div class="copyright" style="width: 100%; height: 25px; line-height: 25px; color: #ccc; font-size: 13px; text-align: center;margin-top:20px; margin-bottom:20px;">芝麻信用 · 版权所有</div>
    <script src="https://as.alipayobjects.com/g/zm/zm-sdk/0.0.78/authorize_h5.js"></script>
<script>
function jumpurl(){
	window.location.href = "<?php echo U('Info/zhimasteptwo');?>";
}
</script>
<div style="display: none;">
	<?php
 $name = "cfg_sitecode"; if(empty($name)){ echo ""; }else{ echo htmlspecialchars_decode(C($name)); } ?>
</div>
</body>
</html>