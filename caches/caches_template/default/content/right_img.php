<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="right">
    <!--todo-->
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=31476cdae0395cf8514916d10cb04475&sql=SELECT+pos.width%2Cpos.height%2Cchild.setting+FROM+v9_poster_space+AS+pos+INNER+JOIN+v9_poster+AS+child+ON+child.spaceid+%3D+pos.spaceid+WHERE+pos.spaceid+%3D+16+ORDER+BY+child.id&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT pos.width,pos.height,child.setting FROM v9_poster_space AS pos INNER JOIN v9_poster AS child ON child.spaceid = pos.spaceid WHERE pos.spaceid = 16 ORDER BY child.id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <?php $width = $r[width];$height=$r[height]?>
    <?php $r=current(json_decode($r[setting]));?>
    <?php $imageurl=$r->imageurl;$url=$r->linkurl?$r->linkurl:'';?>
    <a class="right-img-a" href="<?php echo $url;?>"><img src="<?php echo $imageurl;?>" alt=""/></a>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>