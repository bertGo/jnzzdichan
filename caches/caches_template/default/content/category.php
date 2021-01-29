<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if($_GET['index']=='2') { ?>
<?php include template("content","header"); ?>
<style>
    .grow-up{
        float: left;
        width: 100%;
        height: 666px;
        background: url("<?php echo IMG_PATH;?>chengzhang.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
    }
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
    }
    .grow-up-wrap {
        position: absolute;
        width: 100%;
        height: 400px;
        left: 0;
        bottom: 0;
    }

    .swiper-wrapper {
        width: 1290px;
        margin: 0 auto;
    }

    .swiper-slide {
        float: left;
        width: 1290px;
    }

    .swiper-slide img {
        /* width: 100%;
        height: 100%;
        float: left; */
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #FFFFFF !important;
    }
</style>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>about.css" />
<div class="banner">
    <img src="<?php echo IMG_PATH;?>about-banner.png"/>
</div>
<div class="infor">
    <div class="infor-wrap">
        <div class="crumbs" style="border: none;">
            <div class="crumbs-wrap">
                <a href="index.php" class="zhu">中住地产</a>
                <a class="on">成长历程</a>
            </div>
        </div>

        <div class="infor-nav">
            <ul class="tab-nav tab1">
                <li class="zz_check" data-index="0"><a >中住介绍</a></li>
                <li class="zz_check" data-index="1"><a >企业文化</a></li>
                <li class="zz_check" data-index="2"><a >成长历程</a></li>
            </ul>
             <div class="xian" style="left: 0;"></div>
        </div>
    </div>


    <div class="tab-box" style="display: block;">
        <div class="main">
            <div class="grow-up">
                <div class="grow-up-top">
                    <img src="<?php echo IMG_PATH;?>chengzhang-top.png" />
                </div>
                <!-- 成长历程切换 -->
                <div class="grow-up-wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--成长历程轮播图id-->
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f5451270b95a75310e8aa377c17a80b5&action=lists&catid=17&num=5&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'17','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'17','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $r['thumb'];?>"/>
                            </div>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <div class="grow-bottom">
                <div class="grow-bottom-wrap">
                    <!--成长历程footer图片id-->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fda1691b1cc5c0a8aa009fafd54258c4&action=lists&catid=18&num=2&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $i=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <img src="<?php echo $r['thumb'];?>" <?php if($i==0) { ?> style="width: 525px;height: 188px;"<?php } else { ?>style="width: 743px;height: 188px;"<?php } ?> />
                    <?php $i++; ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
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
<!-- 成长历程切换 -->
<script>
    var swiper = new Swiper('.swiper-container', {
        // cssMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        observer: true, //修改swiper自己或子元素时，自动初始化swiper
        observeParents: true //修改swiper的父元素时，自动初始化swiper
    });
</script>
<?php include template("content","footer"); ?>

<?php } else { ?>

<?php include template("content","header"); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>about.css" />
<style>
    .introduce {
        width: auto ;
    }
    .grow-up{
        float: left;
        width: 100%;
        height: 666px;
        background: url("<?php echo IMG_PATH;?>chengzhang.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        position: relative;
    }
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
    }
    .grow-up-wrap {
        position: absolute;
        width: 100%;
        height: 400px;
        left: 0;
        bottom: 0;
    }

    .swiper-wrapper {
        width: 1290px;
        margin: 0 auto;
    }

    .swiper-slide {
        float: left;
        width: 1290px;
    }

    .swiper-slide img {
        /* width: 100%;
        height: 100%;
        float: left; */
    }
    .swiper-button-next, .swiper-button-prev{
        color: #FFFFFF!important;
    }
</style>
<!-- 导航 -->
<div class="banner">
    <img src="<?php echo IMG_PATH;?>about-banner.png"/>
</div>
<div class="infor">
     <div class="infor-wrap">
        <div class="crumbs">
            <div class="crumbs-wrap">
                <a href="index.php" class="zhu">中住地产</a>
                <a class="on">中住介绍</a>
            </div>
        </div>
    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <li class="zz_check" data-index="0"><a  >中住介绍</a></li>
            <li class="zz_check" data-index="1"><a  class="">企业文化 </a></li>
            <li class="zz_check" data-index="2"><a >成长历程</a></li>
        </ul>
         <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box" >
        <div class="main">
            <div class="main-wrap">
<!--                <div class="left">-->
<!--                    <div class="corp-culture" id="culture">-->
<!--                        <ul id="culture-nav">-->
<!--                            <li class="current">企业使命</li>-->
<!--                            <li>企业价值观</li>-->
<!--                            <li>企业愿景</li>-->
<!--                        </ul>-->
<!--                        <div id="culture-content">-->
<!--                            <div style="display:block;">-->
<!--                                <img src="<?php echo IMG_PATH;?>shiming.png" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <img src="<?php echo IMG_PATH;?>jiazhi.png" />-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <p>成为中国最卓越的不动产综合服务提供商</p>-->
<!--                                <img src="<?php echo IMG_PATH;?>culture1.png" />-->

<!--                            </div>-->
<!--                        </div>-->
<!--                        <div style="clear: both;"></div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="left">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e1a8829ed0f6646c4081408dd8c6d9e&action=lists&catid=15&num=1&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="introduce">
                        <h1><?php echo $r['description'];?></h1>
                        <?php echo $r['content'];?>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <?php include template("content","right_img"); ?>
            </div>

        </div>
    </div>

    <div class="tab-box none">
        <div class="main">
            <div class="main-wrap">
                <div class="left">
                    <div class="corp-culture" id="culture">
                        <ul id="culture-nav">
                            <li class="current">企业使命</li>
                            <li>企业价值观</li>
                            <li>企业愿景</li>
                        </ul>
                        <div id="culture-content">
                            <div style="display:block;">
                                <img src="<?php echo IMG_PATH;?>shiming.png" />
                            </div>
                            <div>
                                <img src="<?php echo IMG_PATH;?>jiazhi.png" />
                            </div>
                            <div>
                                <p>成为中国最卓越的不动产综合服务提供商</p>
                                <img src="<?php echo IMG_PATH;?>culture1.png" />
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                        <!--                        <ul id="culture-nav">-->
<!--                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b69fc14e50b19460c24dd64c342b814&action=lists&catid=13&num=3&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'13','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'13','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>-->
<!--                            <?php $n=1?>-->
<!--                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                            <li <?php if($n==1) { ?>class="current" <?php } ?>><?php echo $r['title'];?></li>-->
<!--                            <?php $n++?>-->
<!--                            <?php $n++;}unset($n); ?>-->
<!--                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                        </ul>-->

<!--                        <div id="culture-content">-->
<!--                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b69fc14e50b19460c24dd64c342b814&action=lists&catid=13&num=3&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 3;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'13','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'13','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>-->
<!--                            <?php $n=1?>-->
<!--                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--                            <div <?php if($n==1) { ?>style="display:block;<?php } ?>">-->
<!--                                <p><?php echo $r['content'];?></p>-->
<!--                                <img src="<?php echo $r['thumb'];?>" />-->
<!--                            </div>-->
<!--                            <?php $n++?>-->
<!--                            <?php $n++;}unset($n); ?>-->
<!--                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                        </div>-->
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <?php include template("content","right_img"); ?>
            </div>
        </div>
    </div>
    <div class="tab-box none">
        <div class="main">
            <div class="grow-up">
                <!-- 成长历程切换 -->
                <div class="grow-up-wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--成长历程轮播图id-->
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f5451270b95a75310e8aa377c17a80b5&action=lists&catid=17&num=5&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'17','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'17','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $r['thumb'];?>"/>
                            </div>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>

                    </div>
                </div>
            </div>
            <div class="grow-bottom">
                <div class="grow-bottom-wrap">
                    <!--成长历程footer图片id-->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fda1691b1cc5c0a8aa009fafd54258c4&action=lists&catid=18&num=2&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));if(!defined('IN_ADMIN') && $page > 1 && ceil($content_total/$pagesize) < $page){ob_end_clean();header("HTTP/1.1 404 Not Found");header("Status: 404 Not Found");include template("content", "404");ob_end_flush();exit;}$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'18','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <img src="<?php echo $r['thumb'];?>"  />
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>

     </div>
</div>

<!--main-->
<!--<div class="main">-->
<!--	<div class="col-left channel-hot">-->
<!--    	<div class="news-hot">-->
<!--        <div class="icon"></div>-->
<!--        	<div class="content">-->
<!--        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9cc8143373160736448f93ef35975255&action=position&posid=10&catid=%24catid&thumb=1&order=listorder+DESC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','catid'=>$catid,'thumb'=>'1','order'=>'listorder DESC','limit'=>'2',));}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
<!--				  <h4 class="blue"><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></h4>-->
<!--                <p><img src="<?php echo thumb($v[thumb],90,60);?>" width="90" height="60" /><?php echo str_cut(strip_tags($v[description]), 150);?></p>-->
<!--                <div class="bk20 hr"><hr /></div>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cf4d69a003c7d8604b7b05334febf5ad&action=lists&catid=%24catid&order=id+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'3',));}?>-->
<!--                <ul class="list">-->
<!--                <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>-->
<!--                	<li>·<a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 60);?></a></li>-->
<!--                <?php $n++;}unset($n); ?>-->
<!--                </ul>-->
<!--             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!--    -->
<!--    <div class="col-auto channel-slide">-->
<!--    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dee3debc27b25c1ee15983a3df2004b3&action=lists&catid=%24catid&order=listorder+ASC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','thumb'=>'1','limit'=>'5',));}?>-->
<!--  		<ul class="thumb">-->
<!--  		<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>-->
<!--        	<li <?php if($n==1) { ?>class="on" style="margin:0"<?php } ?>><a href="<?php echo $v['url'];?>"><img src="<?php echo thumb($v[thumb], 82, 50);?>"  alt="<?php echo $v['title'];?>" width="82" height="50" /><div class="icon"></div></a></li>-->
<!--        <?php $n++;}unset($n); ?>-->
<!--        </ul>-->
<!--        <div class="col-auto">-->
<!--            <ul class="photo">-->
<!--            <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>-->
<!--                <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>"><img src="<?php echo thumb($v[thumb], 398, 234);?>" width="398" height="234" alt="<?php echo $v['title'];?>" /></a></li>-->
<!--            <?php $n++;}unset($n); ?>-->
<!--            </ul>-->
<!--            <div class="title">-->
<!--            <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>-->
<!--              <p  <?php if($n==1) { ?>style="display:block"<?php } ?>><strong><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" class="blue"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 36);?></a></strong><br /><?php echo str_cut(strip_tags($v[description]), 62);?></p>-->
<!--            <?php $n++;}unset($n); ?>-->
<!--          </div>-->
<!--        </div>-->
<!--         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--    </div>-->
<!-- &lt;!&ndash;下面这部分代码是广告代码，可通过删除注释的方法显示出来&ndash;&gt;-->
<!-- &lt;!&ndash; -->
<!--    <div class="ads">-->
<!--    	<div class="col-left"><script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/4.js"></script></div>-->
<!--        <div class="col-auto">-->
<!--        	<div class="left">推广链接</div>-->
<!--            <div class="right">这里放广告</div>-->
<!--        </div>-->
<!--  </div>-->
<!--  &ndash;&gt;-->
<!--  <div class="bk10"></div>-->
<!--	<div class="col-left">-->
<!--	<?php $j=1;?>-->
<!--	<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>-->
<!--	<?php if($v['type']!=0) continue;?>-->
<!--        <div class="box cat-area" <?php if($j%2==1) { ?>style="margin-right:10px"<?php } ?>>-->
<!--        		<h5 class="title-1"><?php echo $v['catname'];?><a href="<?php echo $v['url'];?>" class="more">更多>></a></h5>-->
<!--             <div class="content">-->
<!--             	-->
<!--				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b4f9f2b3c9f4f021c945647df37556d4&action=lists&catid=%24v%5Bcatid%5D&thumb=1&num=1&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'thumb'=>'1','order'=>'id DESC','limit'=>'1',));}?>-->
<!--				<p>-->
<!--					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
<!--						<a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],70,60);?>" width="70" height="60"/></a>-->
<!--						<strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v[title], 30);?></a></strong><br /><?php echo str_cut($v[description],116,'..');?>-->
<!--					<?php $n++;}unset($n); ?>-->
<!--					</p>-->
<!--				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                -->
<!--                <div class="bk15 hr"></div>-->
<!--                <ul class="list  lh24 f14">-->
<!--                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5d107604b68e61f01796643989da0a78&action=lists&catid=%24v%5Bcatid%5D&num=5&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'5',));}?>-->
<!--					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
<!--						<li><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></li>-->
<!--					<?php $n++;}unset($n); ?>-->
<!--				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <?php if($j%2==0) { ?><div class="bk10"></div><?php } ?>-->
<!--	<?php $j++; ?>-->
<!--	<?php $n++;}unset($n); ?>-->
<!--  </div>-->
<!--    <div class="col-auto">-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">频道总排行</h5>-->
<!--            <ul class="content digg">-->
<!--            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
<!--					<li><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="bk10"></div>-->
<!--        <div class="box">-->
<!--            <h5 class="title-2">频道本月排行</h5>-->
<!--            <ul class="content rank">-->
<!--            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2caa10e576ba663010144233732308cd&action=hits&catid=%24catid&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'2caa10e576ba663010144233732308cd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>-->
<!--				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
<!--				<li><span><?php echo number_format($v[monthviews]);?></span><a href="<?php echo $v['url'];?>"<?php echo title_style($v[style]);?> class="title" title="<?php echo $v['title'];?>"><?php echo str_cut($v[title],56,'...');?></a></li>-->
<!--				<?php $n++;}unset($n); ?>-->
<!--			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<script type="text/javascript">-->
<!--function ChannelSlide(Name,Class){-->
<!--	$(Name+' ul.photo li').sGallery({-->
<!--		titleObj:Name+' div.title p',-->
<!--		thumbObj:Name+' .thumb li',-->
<!--		thumbNowClass:Class-->
<!--	});-->
<!--}-->
<!--new ChannelSlide(".channel-slide","on",311,260);-->
<!--</script>-->
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    //房源选项卡
    $(document).ready(function() {
    /*
        切换二级导航下划线
    */
        function sec_nav(index) {
            if (index == 0) {
                $('.xian').animate({
                    left: '0px'
                });
            } else if (index == 1) {
                {
                    $('.xian').animate({
                        left: '80px'
                    });
                }
            } else if (index == 2) {
                {
                    $('.xian').animate({
                        left: '160px'
                    });
                }
            } else if (index == 3) {
                {
                    $('.xian').animate({
                        left: '240px'
                    });
                }
            }
        }
        //点进来时判断显示哪一个
        /*
        0 中住介绍
        1 企业文化
        2 成长历程
         */
        let index=getUrlParam('index');
        $ul=$(".tab-box");
        $ul.css('display', 'none'); //因为默认是第一个显示  所以先隐藏
        $ul.eq(index).css('display', 'block'); //当前内容再出现
        sec_nav(index);
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                sec_nav($(this).index());
            })
        }
        //tab调用
        $(function() {
            tab('.tab1')
            tab('.tab2')
            var url = location.href;
            var url_arr = url.split('?');
            var tab_id = url_arr[1];
            $("#t_"+tab_id).click();
        })
        $(function() {
            $(".nav").click(function() {
                $(this).toggleClass("color").siblings().removeClass("color") //颜色
                $(this).next().slideToggle(500).siblings("ul").slideUp(500);
            })
        })
    });
</script>
<script>
    $(function() {
        var $li = $('#culture-nav li'); //获取每一个标题和内容用变量存起来
        var $ul = $('#culture-content div');

        $li.click(function() {
            var $this = $(this); //用变量把点击的每一个当前的li存起来
            var $t = $this.index(); // 获取当前li下标
            $li.removeClass(); //因为默认是第一个显示  所以先移除
            $this.addClass('current'); //再添加当前的
            $ul.css('display', 'none'); //因为默认是第一个显示  所以先隐藏
            $ul.eq($t).css('display', 'block'); //当前内容再出现
        })
    });
</script>
<script>
    var swiper = new Swiper('.swiper-container', {
        // cssMode: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        observer: true, //修改swiper自己或子元素时，自动初始化swiper
        observeParents: true //修改swiper的父元素时，自动初始化swiper
    });
</script>
<?php include template("content","footer"); ?>
<?php } ?>
<script>
    //关于中住的路径跳转
    //todo
    $(function () {
        let goto_url='/index.php?m=content&c=index&a=lists&catid=6';
        $(".zz_check").click(function () {
            let index=$(this).attr('data-index');
            window.location.href=goto_url+"&index="+index;
        })
    })
</script>
