<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!-- 底部 -->
<div class="bottom">
    <div class="objective">
        <div class="objective-wrap">
            您来访的目的是了解：<a href="http://www.jnhouse.com/esf/">二手房</a> · <a href="http://www.jnhouse.com/lpzs/">新房</a> · <a href="http://www.jnhouse.com/czqz/">租房</a> ·
            <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=12">加入我们</a>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright-wrap">
            <p>济南中住房地产经纪有限公司版权所有</p>
            <a href="http://beian.miit.gov.cn/">鲁ICP备15035816号-2</a>
        </div>
    </div>
</div>
<!--<div class="footer-url">-->
<!--    您来访的目的是了解:-->
<!--    <a href="">二手房</a><span>·</span>-->
<!--    <a href="">新房</a><span>·</span>-->
<!--    <a href="">租房</a><span>·</span>-->
<!--    <a href="">加入我们</a>-->
<!--</div>-->
<!--<div class="footer-solid"></div>-->
<!--<div class="footer">-->
<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>-->
<!--<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>-->
<!--<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  -->
<!--<?php $n++;}unset($n); ?>-->
<!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
<!--<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>-->
<!--<div class="footer-main">-->
<!--    <strong>济南中住房地产有限公司&copy;版权所有</strong>-->
<!--    <br/>-->
<!--    <strong>械IPC备xxxx号</strong>-->
<!--</div>-->
<!--</div>-->
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>