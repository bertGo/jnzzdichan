<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="right">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7eed07bd23e52e1925ff1c027951e979&action=lists&catid=23\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'23','limit'=>'20',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <a ><img src="<?php echo $r['thumb'];?>" alt=""/></a>
        <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>