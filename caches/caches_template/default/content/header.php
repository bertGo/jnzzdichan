<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="referrer" content="no-referrer" />
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />-->
<link href="<?php echo CSS_PATH;?>style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>public.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
</head>
<style>
	.logo {
		position: absolute;
		top: 28px;
		left: 313px;
		width: 115px;
		height: 34px;
	}
	a {
		text-decoration:none!important;
	}
</style>
<body>
<div class="header">
	<div class="header-wrap">
		<img src="<?php echo IMG_PATH;?>log.png" class="logo"/>
		<div class="menu">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<ul class="nav">
				<li>
					<a href="<?php echo siteurl($siteid);?>" class="index-cat">首页</a>
				</li>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li>
					<?php if($r[catid]==8) { ?>
					<a href="http://www.jnhouse.com" target="_blank" >公司业务</a>
					<div class="box">
						<a href="http://www.jnhouse.com/lpzs/" target="_blank" >新房</a>
						<a href="http://www.jnhouse.com/esf/" target="_blank" >二手房</a>
						<a href="http://www.jnhouse.com/czqz/" target="_blank" >租房</a>
						<a href="http://www.jnhouse.com/community/" target="_blank" >找小区</a>
					</div>
					<?php } else { ?>
					<a href="<?php echo $r['url'];?>"  data-cat="<?php echo $r['catid'];?>" ><?php echo $r['catname'];?></a>
					<div class="box">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=46823c6d4d8f3b0d8a26afbb44ca0bad&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
						<?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
						<a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</div>
					<?php } ?>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
	</div>
</div>
