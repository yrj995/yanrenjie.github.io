<!--  【博客程序】：emlog      【主题模板】：博闻广记免费版  v2.5     【作者网站】：www.qpjk.cc  -->
<?php
/*
Template Name:博闻广记免费版
Description:一款高端大气、古典优雅的主题，采用html5+css3响应式、智能化设计，兼容IE8、9、10、11和各种现代浏览器。在手机、平板、PC上都能完美显示。官网不断更新，有更多横幅、图标和视频教程提供您下载。<br><br><span style="color:#00a71e;">√为阅读而设计，为写作而存在！</span> &nbsp;&nbsp; ★更新时间：<span style="color:#00A04B;">2016年10月5日</span><br><br><a href="http://qpjk.cc/" target="_blank">作者站点</a> &nbsp;&nbsp;  <a href="http://qpjk.cc/6" target="_blank">使用说明</a> &nbsp;&nbsp;  <a href="http://qpjk.cc/sort/7" target="_blank">模板素材</a> &nbsp;&nbsp;  <a href="http://qpjk.cc/gywm" target="_blank">关于我</a> &nbsp;&nbsp;  <a href="http://qpjk.cc/9" target="_blank" style="color: red;font-weight: bold;border: 1px solid;padding: 2px 5px;border-radius: 3px;">升级为收费版</a>
Version:<span style="color:#E60026;">v2.5</span>
Author:清萍剑客
Author Url:http://qpjk.cc
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $site_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit"> <!-- 默认用极速核 -->
<meta http-equiv="Cache-Control" content="no-siteapp"> <!-- 禁止百度转码 -->
<meta name="keywords" content="<?php echo $site_key; ?>">
<meta name="description" content="<?php echo $site_description; ?>">
<meta name="generator" content="清萍工作室 qpjk.cc">

<!-- 引用百度cdn公共库网站托管的Jquery，不成功则使用本地Jquery。 -->
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script>!window.jQuery && document.write('<script src="<?php echo TEMPLATE_URL; ?>jcss/jquery-1.11.1.min.js"><\/script >');</script>
<link href="<?php echo TEMPLATE_URL; ?>main.css" rel="stylesheet">

<?php if (_g('bwgj_cur') == "yes"): ?>
<!-- 个性化鼠标css样式 -->
<style>
body {cursor: url(<?php echo TEMPLATE_URL; ?>images/zhizhen.ani), url(<?php echo TEMPLATE_URL; ?>images/zhizhen4.cur), auto;}

a{cursor: url(<?php echo TEMPLATE_URL; ?>images/Click.ani), url(<?php echo TEMPLATE_URL; ?>images/zhizhen3.cur), auto;} 
#shang, #comt, #xia {cursor: url(<?php echo TEMPLATE_URL; ?>images/Click.ani), url(<?php echo TEMPLATE_URL; ?>images/zhizhen3.cur), auto;}
</style>
<?php endif; ?>


<!-- css3动画库，它能让网页所有元素舞动起来，你将愛上它。 -->
<link href="<?php echo TEMPLATE_URL; ?>jcss/csshake.min.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>jcss/animate.min.css" rel="stylesheet">

<!-- 工具提示css -->
<link href="<?php echo TEMPLATE_URL; ?>jcss/hint.min.css" rel="stylesheet">

<!-- 高亮代码css -->
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet">
<!-- 高亮代码js -->
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js"></script>

<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>jcss/html5_qpjk.cc.js"></script>
<![endif]-->

<?php doAction('index_head'); ?>
</head>

<body>
  <!-- 顶部横幅随机图片31张，更多横幅请查看模版扩展素材页面：http://www.xunzhenji.com/127 -->
<div id="top_banner" class="animated fadeIn">

<?php if (_g('bwgj_logo2') == "yes"): ?>
<div id="bwgj_logo2">
	<img src="<?php echo TEMPLATE_URL; ?>images/logo.png">
	<br>
	<span><?php echo $bloginfo; ?></span>
</div>
<?php endif; ?>

<?php $random_image = rand(1, 31); ?>
<img src="<?php echo TEMPLATE_URL; ?>images/bg/top_banner<?php echo $random_image; ?>.jpg">

</div>


<!-- 手机端logo -->
<div id="bwgj_logo">

	<img id="nav_sj_kg" src="<?php echo TEMPLATE_URL; ?>images/caidan.png">

	<a href="/">
		<img id="bwgj_logo_img" src="<?php echo TEMPLATE_URL; ?>images/logo.png" class="animated tada">
	</a>
</div>


<div id="wrap">

<!-- PC端导航菜单 -->
<div id="nav"><?php blog_navi();?></div>

<!-- 移动端导航 -->
<div id="nav2" >
	<div class="nav_gb"></div>
	<?php echo blog_navi_sj();?>
</div>


<!-- 首页公告，调用的微语数据。-->
<?php if (_g('sygg') == "yes"): ?>
	<?php if (blog_tool_ishome()) :?>
		<?php echo index_t(1); ?>
	<?php endif;?>
<?php endif; ?>


<?php if(em_is_mobile()):?>
	<?php else:?>
		<?php if (_g('ad_1') == "yes"): ?>
			<!-- 广告 -->
			<div id="ad_1" class="animated flipInX">
			<?php echo _g('ad1_dm');?>
			<div class="clear"></div>
			</div>
		<?php endif; ?>
<?php endif; ?>