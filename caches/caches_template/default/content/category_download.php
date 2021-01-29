<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>news.css" />
<body>
<style>
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
    }
</style>
<!-- 导航 -->
<div class="banner">
    <img src="<?php echo IMG_PATH;?>about-banner.png"/>
</div>
<div class="infor">
     <div class="infor-wrap">
    <!-- 如果修改了新闻中心，将catid改成新闻中心对应的id todo-->
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b0b5f220dc5ebe17cde4282665c1e82&action=category&catid=31&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'31','limit'=>'25',));}?>
    <?php $catnum=0?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <?php if($catnum==0) { ?>
    <div class="crumbs">
        <div class="crumbs-wrap">
	    <a href="<?php echo WEB_PATH;?>" class="zhu">中住地产</a>
		<a class="on"><?php echo $r['catname'];?></a>
        </div>
    </div>
    <?php } ?>
    <?php $catnum++; ?>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php $i=0?>
            <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $r) { ?>
            <li <?php if($i==0) { ?> class="hover" <?php } ?> ><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
            <?php $i++; ?>
            <?php $n++;}unset($n); ?>
        </ul>
        <!--        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe550a400b21a19fb9e42eee670e725c&action=lists&catid=%24list_id&num=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$list_id,'limit'=>'15',));}?>-->
        <!--                <p><?php echo print_r($list_id);?></p>-->
        <!--                <p><?php echo print_r($data);?></p>-->
        <!--        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
        <div class="xian" style="left: 0;"></div>
    </div>
    <div class="tab-box" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <?php $i=0?>
                <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $r) { ?>
                <?php $count_page=ceil(count($r)/10)?>
                <?php if($i==0) { ?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=52d0fd57fb40b6d034855a975eea5b5e&action=lists&catid=%24r%5Bcatid%5D&num=10&page=%271%27\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval('1') ? intval('1') : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$r[catid],'limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$r[catid],'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <div class="left">
                    <?php $j=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $content) { ?>
                    <?php if($j==0) { ?>
                    <div class="news-top">
                        <div class="news-top-l">
                            <a href="<?php echo $content['url'];?>">
                                <div class="date"><?php echo date('M m,Y',$content[inputtime]);?></div>
                                <h1><?php echo $content['title'];?></h1>
                                <p><?php echo $content['description'];?>
                                </p>
                                <button>更多信息></button>
                            </a>
                        </div>
                        <div class="news-top-r">
                            <a href="<?php echo $content['url'];?>"><img src="<?php echo $content['thumb'];?>" /></a>
                        </div>
                    </div>
                    <?php } else { ?>
                    <?php if($j==1) { ?>
                    <ul class="news-list">
                        <?php } ?>
                        <li class="introduce">
                            <a href="<?php echo $content['url'];?>">
                                <div class="date">
                                    <h1><?php echo date('j',$content[inputtime]);?></h1>
                                    <p><?php echo date('M Y',$content[inputtime]);?></p>
                                </div>
                                <div class="introduce-infor">
                                    <h1><?php echo $content['title'];?></h1>
                                    <p><?php echo $content['description'];?>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                    <?php $j++; ?>
                    <?php $n++;}unset($n); ?>
                    </ul>
                    <div id="page" class="page_div" <?php if(empty($pages)) { ?> style="visibility: hidden;" <?php } ?>><?php echo $pages;?></div>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <?php } ?>
                <?php $i++; ?>
                <?php $n++;}unset($n); ?>
                <?php include template("content","right_img"); ?>
            </div>

        </div>
    </div>




     </div>
</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script src="<?php echo JS_PATH;?>paging.js"></script>

<script>

</script>


<!--<div class="main">-->
<!--	&lt;!&ndash;left_bar&ndash;&gt;-->
<!--	<div class="col-left">-->
<!--    <div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?></div>-->
<!--    &lt;!&ndash;广告698x90&ndash;&gt;-->
<!--    <div class="brd mg_b10 ad698"><script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/8.js"></script></div>-->
<!--    	&lt;!&ndash;最新下载&ndash;&gt;-->
<!--    <div class="box mg_b10">-->
<!--        		<h5>最新下载</h5>-->
<!--            <ul class="content news-photo col4 picbig">-->
<!--            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4fc3b33ea625777439f88022bbf862a3&action=lists&catid=%24catid&num=8&thumb=1&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'thumb'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'thumb'=>'1','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>-->
<!--			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--            	<li>-->
<!--                    <div class="img-wrap"><a href="<?php echo $r['url'];?>#"><img src="<?php echo $r['thumb'];?>"></a></div><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],24,'');?></a>-->
<!--                </li>-->
<!--            <?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <?php $n=1;if(is_array(subcat($catid,0))) foreach(subcat($catid,0) AS $r) { ?>-->
<!--        <?php $num++?>-->
<!--        <div <?php if($num%2!=0) { ?>style="margin-right: 10px;"<?php } ?> class="box cat-area">-->
<!--        		<h5 class="title-1"><?php echo $r['catname'];?><a class="more" href="<?php echo $r['url'];?>">更多&gt;&gt;</a></h5>-->
<!--             <div class="content">-->
<!--                <ul class="list lh24 f14">-->
<!--                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9f67072129bf85fc8e8a5383e170ed63&action=lists&catid=%24r%5Bcatid%5D&num=10&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'10',));}?>-->
<!--             	<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>-->
<!--                	<li><span class="rt"><?php echo date('m-d',$v['inputtime']);?></span>·<a target="_blank" href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>"><?php echo str_cut($v['title'],38);?></a></li>-->
<!--              <?php $n++;}unset($n); ?>-->
<!--              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>-->
<!-- 		<?php $n++;}unset($n); ?>-->
<!--		 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--    </div>-->
<!--    &lt;!&ndash;right_bar&ndash;&gt;-->
<!--    <div class="col-auto">-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">下载分类</h5>-->
<!--            <ul class="content col3 h28">-->
<!--            	<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $r) { ?>-->
<!--            	<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>-->
<!--            	<?php $n++;}unset($n); ?>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">下载排行</h5>-->
<!--            <ul class="content digg">-->
<!--			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">推荐下载</h5>-->
<!--            <ul class="content digg">-->
<!--            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=450ae8156e03b9eb1468afff22c29126&action=position&posid=5&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'5','order'=>'listorder DESC','limit'=>'4',));}?>-->
<!--        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],34);?></a></li>-->
<!--               	<?php $n++;}unset($n); ?>-->
<!--             	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<?php include template("content","footer"); ?>
