<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>index.css" />

<style>

    .banner {
        float: left;
        width: 100%;
        height: 471px;
    }

    .swiper-slide {
        height: 471px;
    }

    .swiper-slide img {
        float: left;
        width: 100%;
        height: 100%;
    }

    .swiper-container-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        width: 200px;
    }

    .swiper-pagination-bullet-active {
        background: #fff;
    }
</style>
<body>

<!-- 轮播 -->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $r['thumb'];?>" />
                        </div>
                    <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- 内容 -->
<div class="exhibition_top">
    <div class="ex_top-wrap">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>
            <div class="introduce">
                <h1><?php echo $data['0']['title'];?></h1>
                <p><?php echo $data['0']['content'];?></p>
            </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <!-- 房源tab -->
        <div class="resources">
            <div class="room">
                <ul class="tab-nav tab1">
<!--                    首页房源标题-->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec93d17ad2c4209c36fdad7401948d49&action=category&catid=26&num=25&siteid=1&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'26','siteid'=>'1','limit'=>'25',));}?>
                    <?php $cat_num=0?>
                    <?php $n=1;if(is_array($item)) foreach($item AS $r) { ?>
                    <li <?php if($cat_num==0) { ?> class="hover" <?php } ?>><?php echo $r['catname'];?></li>
                    <?php $cat_num++; ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div class="xian" style="left: 0;"></div>
<!--                首页房源内容-->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec93d17ad2c4209c36fdad7401948d49&action=category&catid=26&num=25&siteid=1&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'26','siteid'=>'1','limit'=>'25',));}?>
                <?php $val_num=0?>
                <?php $n=1;if(is_array($item)) foreach($item AS $r) { ?>
                    <div class="tab-box"  <?php if($val_num==0) { ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
                        <ul class="house">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=653485de40338a3f1a0f8ea94bbee709&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','limit'=>'20',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                            <a href="<?php echo $val['content'];?>">
                                <li>
                                    <img src="<?php echo $val['thumb'];?>" />
                                    <div class="infor">
                                        <p><?php echo $val['title'];?></p>
                                        <p><?php echo $val['keywords'];?></p>
                                        <p><?php echo $val['description'];?> </p>
                                    </div>
                                </li>
                            </a>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                <?php $val_num++; ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<!-- 内容底部图片 -->
<!--todo-->
<div class="exhibition_bottom">
    <div class="ex_b-wrap">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5499488bb6032ad591e9aeed90e13bb2&action=lists&catid=22&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'22','limit'=>'3',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <img src="<?php echo thumb($r[thumb],400,190);?>" />
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>

<script>
    //房源选项卡
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().siblings('.tab-box').hide();
                $(this).parent().siblings('.tab-box').eq($(this).index()).show();
                if ($(this).index() == 0) {
                    $('.xian').animate({
                        left: '0px'
                    });
                } else if ($(this).index() == 1) {
                    {
                        $('.xian').animate({
                            left: '80px'
                        });
                    }
                } else if ($(this).index() == 2) {
                    {
                        $('.xian').animate({
                            left: '160px'
                        });
                    }
                } else if ($(this).index() == 3) {
                    {
                        $('.xian').animate({
                            left: '240px'
                        });
                    }
                }
            })
        }

        //tab调用
        $(function() {
            tab('.tab1')
            tab('.tab2')
        })
        $(function() {
            $(".nav").click(function() {
                $(this).toggleClass("color").siblings().removeClass("color") //颜色
                $(this).next().slideToggle(500).siblings("ul").slideUp(500);
            })
        })
    });
</script>





<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>-->
<!--<div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-style">-->
<!--    <div class="swiper-wrapper ">-->
<!--        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--            <img class="swiper-slide" src="<?php echo thumb($r['thumb'],1000,400);?>" >-->
<!--        <?php $n++;}unset($n); ?>-->
<!--    </div>-->
<!--    &lt;!&ndash; Add Pagination &ndash;&gt;-->
<!--    <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>-->
<!--    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>-->
<!--</div>-->
<!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->

<!--<div class="content-brief">-->
<!--    <div class=""></div>-->
<!--    <div></div>-->
<!--</div>-->

<!--main-->
<!--<div class="main">-->
<!--	<div class="col-left">-->
<!--    	<div class="news-hot">-->
<!--        	<div class="content">-->
<!--        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>-->
<!--        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>-->
<!--                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>-->
<!--                <div class="bk20 hr"><hr /></div>-->
<!--               <?php $n++;}unset($n); ?>-->
<!--             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="slide">-->
<!--            <div class="FocusPic">-->
<!--        &lt;!&ndash; 首页轮播图&ndash;&gt;-->
<!--            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>-->
<!--            	<div class="content" id="main-slide">-->
<!--                    <div class="changeDiv">-->
<!--                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,260);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>-->
<!--                    <?php $n++;}unset($n); ?>-->
<!--                    </div>-->
<!--                </div>-->
<!--            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--            <div class="bk10"></div>-->
<!--        	<div class="box extend">-->
<!--            	<div class="col-left">争议</div>-->
<!--                <div class="col-auto">-->
<!--				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=62e5ac893abc3866a6bda2553c0a156a&pos=index_block_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--				</div>-->
<!--                <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/10.js"></script>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--        		<h5>图片新闻</h5>-->
<!--            &lt;!&ndash;首页三张图&ndash;&gt;-->
<!--          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>-->
<!--            <ul class="content news-photo picbig">-->
<!--             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--            	<li>-->
<!--                    <div class="img-wrap">-->
<!--                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"/></a>-->
<!--                    </div>-->
<!--                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>-->
<!--                </li>-->
<!--                <?php $n++;}unset($n); ?>-->
<!--            </ul>-->
<!--            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>-->
<!--        <?php $num++?>-->
<!--        <div class="box cat-area" <?php if($num%2!=0) { ?>style=" margin-right:10px"<?php } ?>>-->
<!--        		<h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>-->
<!--             <div class="content">-->
<!--             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>-->
<!--             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>-->
<!--             	<p>-->
<!--             		<img src="<?php echo thumb($v[thumb],90,0);?>" width="90" height="60"/>-->
<!--                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>-->
<!--                </p>-->
<!--              <?php $n++;}unset($n); ?>-->
<!--              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                <div class="bk15 hr"></div>-->
<!--                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9a5a0d61f080dbce4b2774d783edd34&action=lists&catid=%24r%5Bcatid%5D&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'5',));}?>-->

<!--                <ul class="list lh24 f14">-->
<!--                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>-->
<!--                	<li>·<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],40);?></a></li>-->
<!--                <?php $n++;}unset($n); ?>-->
<!--                </ul>-->
<!--                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--        </div>-->
<!--        <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>-->
<!--		<?php $n++;}unset($n); ?>-->
<!--    </div>-->
<!--    <div class="col-auto">-->
<!--    	<div class="box">-->
<!--        	 <h5 class="title-2">公告<a href="" class="more">&nbsp;</a></h5>-->
<!--             <div class="content">-->
<!--            &lt;!&ndash;首页文章&ndash;&gt;-->
<!--                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>-->
<!--                <ul class="list lh24 f14">-->
<!--                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>-->
<!--                    <li><span><?php echo $r['content'];?></span></li>-->
<!--                   <?php $n++;}unset($n); ?>-->
<!--                </ul>-->
<!--                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--        	<h5 class="title-2">专题<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>-->
<!--            <div class="content special">-->
<!--            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=d0da2a95c4fd410d9fde0a59d59f48fc&action=lists&siteid=%24siteid&elite=1&listorder=3&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'3','limit'=>'2',));}?>-->
<!--            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--            	<?php if($n!=1) { ?><div class="hr bk15"></div><?php } ?>-->
<!--                <p style="margin:0">-->
<!--             		<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="90" height="70" /></a>-->
<!--                    <strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'18');?></a></strong><br /><?php echo str_cut($r['description'],50);?>-->
<!--                </p>-->
<!--            <?php $n++;}unset($n); ?>-->
<!--            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--            <h5 class="title-2"><span class="rt fn f12 tab SwapTab"><span class="fb">热点</span> | <span >评论</span> | <span>关注</span></span>排行</h5>-->
<!--            <div class="tab-content">-->
<!--            <ul class="content digg">-->
<!--			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--            <ul class="content digg hidden">-->
<!--			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=55e75bfad540869982aca092575756e4&action=bang&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array()).'55e75bfad540869982aca092575756e4');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--            <ul class="content digg hidden">-->
<!--			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--            </div>-->
<!--        </div><div class="bk10"></div>-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">调查问卷<a href="<?php echo APP_PATH;?>index.php?m=vote&c=index&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>-->

<!--<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="bk10"></div>-->

<!--	<div class="box blogroll ylink">-->
<!--    	<h5><a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>></a>友情链接<a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></h5>-->
<!--        <div class="bk10"></div>-->
<!--	<ul class="colli imgul">-->
<!--        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>-->
<!--        <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>-->
<!--        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>-->
<!--        <?php $n++;}unset($n); ?>-->
<!--        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--    </ul>-->
<!--     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>-->
<!--     <div class="bk10"></div>-->
<!--	<div class="linka">-->
<!--		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>-->
<!--              <?php if($type==0) { ?>-->
<!--              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |-->
<!--              <?php } else { ?>-->
<!--              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a>-->
<!--              <?php } ?>-->
<!--		<?php $n++;}unset($n); ?>-->
<!-- 	</div>-->
<!--	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--</div>-->
<!--</div>-->
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal', // 垂直切换选项
        loop: true, // 循环模式选项
      // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
	autoplay:true,

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 如果需要滚动条
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
</script>
<script type="text/javascript">
// $(function(){
// 	new slide("#main-slide","cur",310,260,1);//焦点图
// 	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
// })
</script>
<?php include template("content","footer"); ?>
