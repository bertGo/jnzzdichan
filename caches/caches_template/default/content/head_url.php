<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!--todo 如果修改了新闻中心，将catid改成新闻中心对应的id -->
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b0b5f220dc5ebe17cde4282665c1e82&action=category&catid=31&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'31','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php if($r['catid']==$catid) { ?>
    <div class="crumbs">
        <div class="crumbs-wrap">
            <a href="<?php echo WEB_PATH;?>" class="zhu">中住地产</a>
            <a class="on"><?php echo $r['catname'];?></a>
        </div>
    </div>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
