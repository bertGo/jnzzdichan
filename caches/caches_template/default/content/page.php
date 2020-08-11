<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if($_GET['join']!=0) { ?>
<?php include template("content","header"); ?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>contact-us.css" />
</head>
<style>
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
    }
    .main{
        margin-top: 10px!important;
    }
    .menu{
        height: auto;
    }
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

<div class="infor">
    <!-- <div class="infor-wrap"> -->
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="<?php echo WEB_PATH;?>" class="zhu">中住地产</a>
            <a class="on">招贤纳士</a>
        </div>

    </div>

    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7761d2bcec0e838bc677ac224ba27419&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
            <li <?php if($val[catid] ==$catid ) { ?> class="hover" <?php } ?> ><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <img src="<?php echo IMG_PATH;?>join<?php echo $_GET['join'];?>_detail.png" style="width: 100%">
            </div>

        </div>
    </div>

</div>
<a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=24" style="width: 960px ; height:40px;margin: 10px auto;margin-left: 8rem;">
    <img src="<?php echo IMG_PATH;?>back.png" alt="" style="margin: 0 auto;height: 35px;">
</a>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // ´¹ֱÇ»»ѡÏ
        loop: true, // ѭ»·ģʽѡÏ

        // È¹û·Ö³Æ
        pagination: {
            el: '.swiper-pagination',
        },
    })
</script>
<script>
    //·¿ԴѡÏ¿¨
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //´¥·¢·½ʽ//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                console.log('index:'+$(this).index());
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

        //tabµ÷        $(function() {
            tab('.tab1')
            tab('.tab2')
            var url = location.href;
            var url_arr = url.split('?');
            console.log(url_arr);
            var tab_id = url_arr[1];
            $("#t_"+tab_id).click();
        })
        $(function() {
            $(".nav").click(function() {
                $(this).toggleClass("color").siblings().removeClass("color") //Ñɫ
                $(this).next().slideToggle(500).siblings("ul").slideUp(500);
            })
        })
    });
</script>

<?php include template("content","footer"); ?>

<?php } elseif ($catid==24||$catid==12) { ?>
<?php include template("content","header"); ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>contact-us.css" />
</head>
<style>
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
    }
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
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner2.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="infor">
    <!-- <div class="infor-wrap"> -->
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="<?php echo WEB_PATH;?>" class="zhu">中住地产</a>
            <a class="on">招贤纳士</a>
        </div>

    </div>

    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7761d2bcec0e838bc677ac224ba27419&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
                <?php if($val[catid]==$catid) { ?>
                <?php $red=1?>
                <?php } ?>
            <?php $n++;}unset($n); ?>
            <?php if($red==1) { ?>
                <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
                <li <?php if($val[catid] ==$catid ) { ?> class="hover" <?php } ?> ><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
                <?php $n++;}unset($n); ?>
            <?php } else { ?>
            <?php $i = 0?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
            <li <?php if($i==0 ) { ?> class="hover" <?php } ?> ><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
            <?php $i++; ?>
            <?php $n++;}unset($n); ?>
            <?php } ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <div class="join-l">
                    <h1>2020</h1>
                    <b>中住地产招贤纳士</b>
                    <span>ZHONGZHU</span>
                    <p>
                        每一个品牌都有它的色彩，每一种色彩都有它独特的含义。说到中住地产，你想到的是什么颜色？黄色？金色？橘色？
                    </p>
                </div>
                <ul class="join-r">
                    <li data-img="join2_">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']?>&join=3"><img src="<?php echo IMG_PATH;?>join2.png" /></a>
                    </li>
                    <li data-img="join1_">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']?>&join=4"><img src="<?php echo IMG_PATH;?>join1.png" /></a>
                    </li>
                    <li data-img="join3_">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']?>&join=1"><img src="<?php echo IMG_PATH;?>join3.png" /></a>
                    </li>
                    <li data-img="join4_">
                        <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']?>&join=2"><img src="<?php echo IMG_PATH;?>join4.png" /></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>



</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // 垂直切换选项
        loop: true, // 循环模式选项

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    })
</script>
<script>
    //房源选项卡
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                console.log('index:'+$(this).index());
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
            var url = location.href;
            var url_arr = url.split('?');
            console.log(url_arr);
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
$(".join-r li").click(function () {
    let img_name=$(this).attr('data-img')+'detail.png';
    $(".main-wrap").html("<img src=<?php echo IMG_PATH;?>"+img_name+" style='width:100%'>");
    $(".banner").remove();
})
</script>
<?php include template("content","footer"); ?>
<?php } else { ?>

<?php include template("content","header"); ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>style.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>contact-us.css" />
    <script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=q3n8SbsYLdR9MEvUjm3kt6aaFZh8chEf"></script>
</head>
<style>
    #allmap{height:100%;width:100%;}
    #r-result{width:100%;}
    .banner {
        float: left;
        width: 100%;
        height: 471px;
    }
    .crumbs .zhu{
        background: url("<?php echo IMG_PATH;?>icon2.png") no-repeat 0 32px;
        padding-left: 23px;
    }
    .crumbs a.on {
        background: url("<?php echo IMG_PATH;?>icon1.png") no-repeat 0 36px;
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
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner2.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>j-banner3.png" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="infor">
    <!-- <div class="infor-wrap"> -->
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="<?php echo WEB_PATH;?>" class="zhu">中住地产</a>
            <a class="on">招贤纳士</a>
        </div>

    </div>

    <div class="infor-nav">
        <ul class="tab-nav tab1">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b743ddbf76370179537cfe81738d760&action=category&catid=12&num=25&order=listorder+ASC&return=item\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$item = $content_tag->category(array('catid'=>'12','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($item)) foreach($item AS $val) { ?>
            <li <?php if($val[catid] ==$catid ) { ?> class="hover" <?php } ?>><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <div class="xian" style="left: 0;"></div>
    </div>

    <div class="tab-box none" style="display: block;">
        <div class="main">
            <div class="main-wrap">
                <div class="contact-l">
                    <h1>济南中住房地产经纪有限公司</h1>
                    <h6>
                        ZHONG</br> ZHU
                    </h6>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>dianh.png" /> 400-869-9579 </p>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>dizh.png" /> www.jnhouse.com </p>
                    <p class="p1"> <img src="<?php echo IMG_PATH;?>weizh.png" /> 济南市历城区解放路30号东源大厦24层 </p>
                </div>
                <div class="contact-r">
                    <div class="map">
                        <div id="allmap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</body>
<script src="<?php echo JS_PATH;?>jquery-1.min.js"></script>
<script src="<?php echo JS_PATH;?>swiper-bundle.min.js"></script>
<script src="<?php echo JS_PATH;?>nav.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // 垂直切换选项
        loop: true, // 循环模式选项

        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    })
</script>
<script>
    //房源选项卡
    $(document).ready(function() {
        function tab(i) {
            $(i).children().click(function() { //触发方式//click//mouseover
                $(this).siblings().removeClass();
                $(this).addClass('hover');
                $(this).parent().parent().siblings('.tab-box').hide();
                $(this).parent().parent().siblings('.tab-box').eq($(this).index()).show();
                console.log('index:'+$(this).index());
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
            var url = location.href;
            var url_arr = url.split('?');
            console.log(url_arr);
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
<script type="text/javascript">
    // °ٶȵØ¼API¹¦Ä
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(116.4035,39.915),8);
    setTimeout(function(){
        map.setZoom(14);
    }, 2000);  //2Ãºóó4¼¶
    map.enableScrollWheelZoom(true);
    var point = new BMap.Point(117.067515,36.671598);
    map.centerAndZoom(point, 18);

    var marker = new BMap.Marker(new BMap.Point(117.067515,36.671598));
    map.addOverlay(marker);
</script>

<?php include template("content","footer"); ?>
<?php } ?>
