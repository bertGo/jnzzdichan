<?php
include './phpcms/base.php';
$model = pc_base::load_model('news_model');
$data = $model->select('`catid`= 34 OR `catid`= 32 OR `catid` = 33 ',' `id`,`title`,`catid`,`thumb`,`description` ',3,'`inputtime` Desc');
$category = pc_base::load_model('category_model');
$cat_dir = $category->select('`catid`= 34 OR `catid`= 32 OR `catid` = 33 ','catid,catdir',5);
$dir_arr=[];
foreach ($cat_dir as $value)
{
    $dir_arr[$value['catid']]=$value['catdir'];
}
$result =json_encode( [
   'dir_arr'=>$dir_arr,
   'data'=>$data
]);
print_r($result);die();

?>